console.log("Loading Javascript");



let myButton = document.getElementById("myButtonData");


myButton.addEventListener("dblclick", ()=>{
    console.log("Ejecutando Evento Click");
    let myP = document.getElementsByClassName("info");
    console.log(typeof myP, myP)


    Object.entries(myP).forEach(([key, value]) => {
        value.style.backgroundColor= "blue";
        value.style.width = "50%";
    });

});


myButton.addEventListener("click", ()=>{
    console.log("Ejecutando Evento Click");
    let myP = document.getElementsByClassName("info");
    console.log(typeof myP, myP)


    Object.entries(myP).forEach(([key, value]) => {
        value.style.backgroundColor= "red";
        value.style.width = "80%";
    });
});


myButton.addEventListener("mouseover", function(){
    console.log("Ejecutando Evento Mouseover");
    let myP = document.getElementsByClassName("info");
    //myP.style.backgroundColor= "red";
});


let myData  = document.getElementById("data");




const changeData = ()=>{
    alert("Acción Evento");

}

myData.addEventListener("click",changeData);