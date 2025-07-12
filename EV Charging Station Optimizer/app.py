import streamlit as st
import pandas as pd
import numpy as np
import joblib

from sklearn.preprocessing import StandardScaler

# Load trained model and scaler
model = joblib.load("ev_model.pkl")
scaler = joblib.load("scaler.pkl")

st.title("🔌 EV Charging Station Location Optimizer")
st.write("Upload a CSV file with raw location data (e.g., time, demand), and the model will predict if each location is optimal.")

# Upload CSV
uploaded_file = st.file_uploader("📁 Upload your CSV file", type=["csv"])

if uploaded_file is not None:
    try:
        df = pd.read_csv(uploaded_file)
        st.subheader("📄 Uploaded Data")
        st.dataframe(df)

        # Drop target column if present
        if 'is_optimal_location' in df.columns:
            df.drop('is_optimal_location', axis=1, inplace=True)

        # Drop ID columns if present
        if 'charging_station_id' in df.columns:
            df.drop('charging_station_id', axis=1, inplace=True)

        # Convert cyclical features
        if 'day_of_week' in df.columns:
            df['day_of_week_sin'] = np.sin(2 * np.pi * df['day_of_week'] / 7)
            df['day_of_week_cos'] = np.cos(2 * np.pi * df['day_of_week'] / 7)
            df.drop('day_of_week', axis=1, inplace=True)

        if 'time_of_day' in df.columns:
            df['time_of_day_sin'] = np.sin(2 * np.pi * df['time_of_day'] / 24)
            df['time_of_day_cos'] = np.cos(2 * np.pi * df['time_of_day'] / 24)
            df.drop('time_of_day', axis=1, inplace=True)

        # Ensure correct column order
        expected_cols = scaler.feature_names_in_
        missing_cols = [col for col in expected_cols if col not in df.columns]
        if missing_cols:
            raise ValueError(f"Missing required features: {missing_cols}")

        df = df[expected_cols]

        # Scale features
        X_scaled = scaler.transform(df)

        # Predict
        predictions = model.predict(X_scaled)
        df['Predicted Optimal'] = predictions

        st.subheader("✅ Predictions")
        st.dataframe(df)

        # Allow download
        csv = df.to_csv(index=False).encode('utf-8')
        st.download_button("📥 Download Results as CSV", csv, file_name="predictions.csv", mime="text/csv")

    except Exception as e:
        st.error(f"🚫 Error: {e}")
