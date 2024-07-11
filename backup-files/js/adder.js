// const inputNumber = document.querySelectorAll('input[type="number"]');
const incrementButton = document.querySelectorAll(".increment");
const decrementButton = document.querySelectorAll(".decrement");

incrementButton.forEach(inButton => {
  const inputNumber = inButton.closest('.input-group').querySelector('input[type="number"]');
  inButton.addEventListener("click", function () {
    inputNumber.stepUp();
  });
});

decrementButton.forEach(decButton => {
  const inputNumber = decButton.closest('.input-group').querySelector('input[type="number"]');
  decButton.addEventListener("click", function () {
    if (inputNumber.value != 0) {
      inputNumber.stepDown();
    }
  });
});
