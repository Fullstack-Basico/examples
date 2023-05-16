console.log("Loading Javascript")


function sendForm(){
    console.log("Envio Formulario");

    let nameInfo = document.getElementById('nombre');
    let emailInfo = document.getElementById('correo');
    let valueDolarInfo = document.getElementById('dolar');

    nameInfo = nameInfo.value;
    emailInfo = emailInfo.value;
    valueDolarInfo = valueDolarInfo.value;

    let personalInfo = {
        name: nameInfo,
        email: emailInfo,
        valuePeso: valueDolarInfo * 4487.70,
    }

    console.log(personalInfo);


    alert("Se guardo el Nombre "+ personalInfo.name + "  y Correo " + personalInfo.email);

    alert("Precio Dolar : $ " + valueDolarInfo + " a  Precio  Peso Colombiano: $ "+ personalInfo.valuePeso)
    
    window.location.href = "https://google.com";
    
}


let buttonForm = document.getElementById("BotonFormulario");

buttonForm.addEventListener('click',sendForm);

let buttonForm2 = document.getElementById("formulario");

buttonForm2.addEventListener('click',sendForm);