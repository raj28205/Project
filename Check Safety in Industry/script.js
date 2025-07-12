document.getElementById("safetyForm").addEventListener("submit", function(event) {
  event.preventDefault();

  const process = document.getElementById("process").value.trim();
  const source = document.getElementById("source").value.trim();
  const injury = document.getElementById("injury").value.trim();
  const hazard = parseInt(document.getElementById("hazard").value.trim());

  let resultText = "";

  // Simple rule-based logic (placeholder for ML model)
  if (hazard >= 7 || injury.toLowerCase().includes("fracture") || source.toLowerCase().includes("machine")) {
    resultText = "⚠️ Unsafe Condition Detected!";
    document.getElementById("result").style.color = "red";
  } else {
    resultText = "✅ Safe Working Condition.";
    document.getElementById("result").style.color = "green";
  }

  document.getElementById("result").textContent = resultText;
});
