var startNumber = 1;
var endNumber = 70;

var buttonContainer = document.getElementById("button-container");

for (var i = startNumber; i <= endNumber; i++) {
  var button = document.createElement("button");
  button.innerText = i;
  button.classList.add("custom-button"); // เพิ่มคลาสสำหรับปุ่ม
  buttonContainer.appendChild(button);
}