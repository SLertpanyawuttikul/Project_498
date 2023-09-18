function Add() {
    if(d<10){
        console.log(d);
        d++;
    }
    document.getElementById("AA").innerHTML=d;
    return d;
}
function Minus(){
    if(d>0){
        console.log(d);
        d--;
    }
    document.getElementById("AA").innerHTML=d;
    return d;
}
let d=0;

const BBB=document.querySelector('button');
BBB.addEventListener('click',Add);
const AAA=document.querySelector('.AAA');
AAA.addEventListener('click',Minus);
document.getElementById("AA").innerHTML=d;