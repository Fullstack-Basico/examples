console.log("Loading Javascript");

function myAction(){
    alert("fullstack Acción 1");
    let myData= document.getElementsByTagName('p');
    myData[0].style.backgroundColor= "blue";
}

const myAction2 = ()=>{
    alert("fullstack Acción 2");
}


const myActionP = ()=>{
    console.log("Acción Parrafo");
    let myP= document.getElementById('descripcion');
    myP.innerHTML = "Este campo describe el parrafo";

    let myData= document.getElementsByTagName('p');
    myData[0].style.backgroundColor= "red";
}

const changeData = ()=>{
    console.log("Acción Cambio Input");
    let myInput = document.getElementById("myInputData");
    myInput.value = "CAMBIO"
}

