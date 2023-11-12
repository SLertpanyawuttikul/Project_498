let originX = null;
let offsetX = 0;
let dragStarted = false;
let originY=null;
let offsetY=80;

function onDragStart(event) {
  originX = event.clientX;
  originY=event.clientY;
  dragStarted = true;
  event.currentTarget.setPointerCapture(event.pointerId);
}

function onDragMove(event) {
  if (!dragStarted) {
    return;
  }
  event.preventDefault();
  const deltaX = event.clientX - originX;
  const translateX = offsetX + deltaX;
  
  const deltaY=event.clientY-originY;
  const translateY = offsetY + deltaY;
  if(translateX>=0&&translateY<=80){
  event.currentTarget.style.transform = 'translateX(' +  translateX + 'px)translateY(' + translateY + 'px)';}
}

function onDragEnd(event) {
  dragStarted = false;
  offsetX += event.clientX - originX;
  offsetY += event.clientY-originY;
}

const dragon = document.querySelector('img');
dragon.addEventListener('pointerdown', onDragStart);
dragon.addEventListener('pointerup', onDragEnd);
dragon.addEventListener('pointermove', onDragMove);
