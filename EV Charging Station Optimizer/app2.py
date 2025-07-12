import streamlit as st
import numpy as np
import joblib
import math

# Load model and scaler
model = joblib.load("ev_model.pkl")
scaler = joblib.load("scaler.pkl")

st.title("🔌 EV Charging Station Optimizer")
st.markdown("Enter location details to predict if it's optimal for an EV charging station.")

# User Inputs
latitude = st.number_input("Latitude", value=28.6)
longitude = st.number_input("Longitude", value=77.2)

station_type = st.selectbox("Station Type", ["Level 1", "Level 2", "DC Fast"])
station_type_encoded = {"Level 1": 0, "Level 2": 1, "DC Fast": 2}[station_type]

power_output_kw = st.number_input("Power Output (kW)", value=50.0)
num_connectors = st.number_input("Number of Connectors", value=4)
charging_demand_kwh = st.number_input("Charging Demand (kWh)", value=150.0)
num_vehicles_charged = st.number_input("Number of Vehicles Charged", value=40)
avg_wait_time_minutes = st.number_input("Average Wait Time (min)", value=12.0)
traffic_density = st.number_input("Traffic Density", value=200.0)
ev_adoption_rate = st.number_input("EV Adoption Rate (%)", value=15.0)
population_density = st.number_input("Population Density", value=5000)
temperature_c = st.number_input("Temperature (°C)", value=30.0)
grid_load_mw = st.number_input("Grid Load (MW)", value=120.0)
renewable_energy_share = st.slider("Renewable Energy Share (%)", 0, 100, 30)
distance_to_nearest_station = st.number_input("Distance to Nearest Station (km)", value=2.0)
poi_density = st.number_input("POI (Point of Interest) Density", value=50.0)
user_battery_level = st.slider("Avg User Battery Level (%)", 0, 100, 20)

time_of_day = st.slider("Time of Day (0–23)", 0, 23, 14)
day_of_week = st.slider("Day of Week (0=Mon, 6=Sun)", 0, 6, 2)

# Sin/Cos transforms
time_of_day_rad = 2 * math.pi * time_of_day / 24
day_of_week_rad = 2 * math.pi * day_of_week / 7

time_of_day_sin = math.sin(time_of_day_rad)
time_of_day_cos = math.cos(time_of_day_rad)
day_of_week_sin = math.sin(day_of_week_rad)
day_of_week_cos = math.cos(day_of_week_rad)

# Final Input Vector (Must match order from training)
input_data = np.array([[latitude, longitude, station_type_encoded, power_output_kw,
                        num_connectors, charging_demand_kwh, num_vehicles_charged,
                        avg_wait_time_minutes, traffic_density, ev_adoption_rate,
                        population_density, temperature_c, grid_load_mw,
                        renewable_energy_share, distance_to_nearest_station,
                        poi_density, user_battery_level,
                        time_of_day_sin, time_of_day_cos,
                        day_of_week_sin, day_of_week_cos]])

# Predict
if st.button("🔍 Predict Optimal Location"):
    try:
        input_scaled = scaler.transform(input_data[:, :17])  # Only 17 features expected
        prediction = model.predict(input_scaled)[0]

        if prediction == 1:
            st.success("✅ This is an **Optimal** location for an EV charging station.")
        else:
            st.warning("⚠️ This is **Not Optimal** based on the model.")
    except Exception as e:
        st.error(f"Error during prediction: {e}")
