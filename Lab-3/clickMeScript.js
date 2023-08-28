/*var myButton = document.getElementById("myButton");

myButton.addEventListener("click", function () {
    console.log("clicked");
});
*/

const addButton = document.getElementById('addButton');
const minusButton = document.getElementById('minusButton');
const countDisplay = document.getElementById('countDisplay');

let count = 0;

addButton.addEventListener('click', () => {
    if (count < 10) {
        count += 1;
        countDisplay.textContent = count;
    }
});

minusButton.addEventListener('click', () => {
    if (count > 0) {
        count -= 1;
        countDisplay.textContent = count;
    }
});





