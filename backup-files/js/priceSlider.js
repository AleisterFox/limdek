const rangeInput = document.querySelectorAll(".range-input input");
const progress = document.querySelector(".slider .progress");
const priceMin = document.querySelector(".price-min");
const priceMax = document.querySelector(".price-max");

rangeInput.forEach((input) => {
  input.addEventListener("input", () => {
    let minVal = parseInt(rangeInput[0].value);
    let maxVal = parseInt(rangeInput[1].value);
    let progressMin = (minVal / rangeInput[0].max) * 100;
    let progressMax = (maxVal / rangeInput[1].max) * 100;
    progressMax = 100 - progressMax;
    console.log(progressMax);
    progress.style.left = `${progressMin}%`;
    progress.style.right = `${progressMax}%`;
    priceMin.value = minVal;
    priceMax.value = maxVal;
  });

  priceMin.addEventListener("input", () => {
    let minVal = priceMin.value;
    let progressMin = (minVal / rangeInput[0].max) * 100;
    progress.style.left = `${progressMin}%`;
    rangeInput[0].value = minVal;
    if (priceMin.value < 0) {
      rangeInput[1].value = 0;
      progress.style.left = "0%";
      priceMin.value = 0;
    }

    if (isNaN(priceMin.value)) {
      rangeInput[1].value = 0;
      progress.style.left = "0%";
      priceMin.value = 0;
    }
  });

  priceMax.addEventListener("input", () => {
    let maxVal = priceMax.value;
    let progressMax = (maxVal / rangeInput[1].max) * 100;
    progressMax = 100 - progressMax;
    progress.style.right = `${progressMax}%`;
    rangeInput[1].value = maxVal;
    if (priceMax.value > 10000) {
      rangeInput[1].value = 10000;
      progress.style.right = "0%";
      priceMax.value = 10000;
    }
  });
});
