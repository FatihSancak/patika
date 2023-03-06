let  name = prompt('İsminizi giriniz');
document.getElementById('myName').innerHTML= name;
let myClock =document.getElementById('myClock');

function clockShowTime(){
    let date = new Date();
    let days =["Pazar","Pazartesi","Salı","Çarşamba","Perşembe","Cuma","Cumartesi"];
    myClock.innerHTML= `${date.getHours()}:${date.getMinutes()}:${date.getSeconds()} ${days[date.getDay()]}` ;
}
setInterval(clockShowTime,1000);