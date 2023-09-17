const usesername =["AAA"];
const passwordd =["1234"];
function AAA(){
    /**
     *@type HTMLInputElement
     */
    let u1=document.getElementById('usename').value;
    let p1=document.getElementById('passw').value;
    if(u1 == usesername[0] && p1 == passwordd[0]){
        document.getElementById('A1').innerHTML='your username and password are correct! you are logged in';
        button.removeEventListener('click',AAA);
    }
    else{
        document.getElementById('A1').innerHTML='your username or password is incorrect! try again';
    }
}
const button=document.querySelector('button');
button.addEventListener('click',AAA);