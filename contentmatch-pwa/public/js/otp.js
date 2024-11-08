document.addEventListener("DOMContentLoaded", () => {
  const inputs = document.querySelectorAll('input[type="number"]');

  const distributePastedValue = (input, pastedValue) => {
    const valueArray = pastedValue.split("").slice(0, inputs.length);
    valueArray.forEach((value, index) => {
      if (inputs[index]) {
        inputs[index].value = value;
      }
    });
    inputs[Math.min(valueArray.length, inputs.length) - 1].focus();
  };

  inputs.forEach((input, index) => {
    input.addEventListener("input", (event) => {
      if (event.target.value.length === 1 && index < inputs.length - 1) {
        inputs[index + 1].focus();
      }
    });

    input.addEventListener("keydown", (event) => {
      if (
        event.key === "Backspace" &&
        event.target.value.length === 0 &&
        index > 0
      ) {
        inputs[index - 1].focus();
      }
    });

    input.addEventListener("paste", (event) => {
      const pastedValue = event.clipboardData.getData("text");
      distributePastedValue(input, pastedValue);
      event.preventDefault();
    });
  });
});
