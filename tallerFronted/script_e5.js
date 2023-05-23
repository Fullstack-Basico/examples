console.log("Loading Javascript");

var form  = document.getElementById("myForm");

//form =>null =>false  no ingresa al if
//form =>false  no ingresa al if

if(form){
    form.addEventListener("submit",validarFormulario);
}
//(validacion ) && ejecucion;
form && form.addEventListener("submit",validarFormulario);


if(form){
    form.addEventListener("submit",validarFormulario);
}else{

    console.log("error");
}

var data= (form) ? form.addEventListener("submit",validarFormulario): console.log("error");



function validarFormulario (event){
    event && event.preventDefault();

    console.log("ejecutando funcion validar");


    let inputName = document.getElementById("name");

    let inputEmail = document.getElementById("email");


    let valueName = inputName.value;
    let valueEmail = inputEmail.value;


    let valueName2 =  valueName.trim(); //Elimina los espacios en blanco al inicio y fin de un cadena string
    valueEmail = valueEmail.trim();

    let valueName3 = valueName2.replace("i","1")

    if(valueName && valueEmail){
        
        alert("Datos Correctos, Información Enviada !");

        alert("Nombre: '"+valueName3+"' <br>Correo: '"+valueEmail+"'");
    
    }else{
        alert("Error en los Datos, Valide que no esten vacios !!")
    }


}




//------------------------------------------------------------------








var container = document.getElementById("mainContainer");


container.addEventListener("mouseenter",()=>{
    container.style.backgroundColor = "yellow";
})


container.addEventListener("mouseleave",()=>{
    container.style.backgroundColor = "red";
})


