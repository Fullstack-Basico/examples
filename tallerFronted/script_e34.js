console.log("Loading Javascript!");


function cambiarColor(){

    var myPar = document.getElementsByTagName("p");

    myPar[0].style.color = "blue";


    myPar[1].style.color = "red";

}


function saludar(){
    console.log("Saludo!!");
    alert("Saludo!!");
}


var buttonSL = document.getElementById("btnSaludar2");

buttonSL.addEventListener("click",saludar);