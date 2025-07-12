document.getElementById("evForm").addEventListener("submit", function (e) {
  e.preventDefault();

  const traffic = parseFloat(document.getElementById("traffic").value);
  const evRate = parseFloat(document.getElementById("evRate").value);
  const renewable = parseFloat(document.getElementById("renewable").value);
  const popDensity = parseInt(document.getElementById("popDensity").value);

  const resultBox = document.getElementById("result");

  // Simple rule-based suitability check
  if (traffic > 6 && evRate > 10 && renewable > 25 && popDensity > 1000) {
    resultBox.textContent = "✅ This is a suitable location for an EV charging station!";
    resultBox.className = "safe";
  } else {
    resultBox.textContent = "⚠️ This location may not be optimal for an EV charging station.";
    resultBox.className = "unsafe";
  }
});
