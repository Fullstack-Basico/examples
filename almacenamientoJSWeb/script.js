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


    //Almacenamiento Estrategia Cookies
    document.cookie = "name="+ personalInfo.name;
    document.cookie = "email="+ personalInfo.email;
    document.cookie = "valuePeso="+ personalInfo.valuePeso;

    let cookieData= document.cookie;


    console.log(cookieData);

    //alert("SAVE!!!!");



    //Almacenamiento Estrategia Web Storage

    // Sessionstorage

    sessionStorage.setItem("name", personalInfo.name);
    sessionStorage.setItem("email", personalInfo.email);
    sessionStorage.setItem("valuePeso", personalInfo.valuePeso);

    sessionStorage.setItem("personalInfo", JSON.stringify(personalInfo));



    // Localstorage

    let saveData = localStorage.getItem("personalInformation");

    console.log("value localstorage =>", saveData);

    // if(null)  => if (false)=> no ingresa al if

    if(saveData){

        console.log("Data exits")

        console.log ("JSON STRING =>", saveData);
        let data = JSON.parse(saveData);

        console.log ("JSON Object =>", data);


        let newData =[...data,personalInfo];

        console.log(newData);

        localStorage.setItem('personalInformation',JSON.stringify(newData));

    }else{


        console.log("Data not exits")

        let dataInfo = [];


        dataInfo.push(personalInfo);

        console.log(dataInfo);


        localStorage.setItem('personalInformation',JSON.stringify(dataInfo));

    }
   
   // localStorage.setItem("personalInformation",JSON.stringify(personalInfo));






    
}



let buttonForm = document.getElementById("buttonForm");
buttonForm.addEventListener('click',sendForm);


const  clearInfo =()=>{

    sessionStorage.removeItem("name");
    sessionStorage.removeItem("email");
    sessionStorage.removeItem("valuePeso");
    sessionStorage.removeItem("personalInfo");

}

let buttonClear = document.getElementById("clearData");
buttonClear.addEventListener('click',clearInfo);




const viewInfo  = ()=>{

    console.log("Execute view.......");

    let information = sessionStorage.getItem("personalInfo");
    let p = document.getElementById('informationData');
    p.innerHTML = information;

}

let buttonView = document.getElementById("viewData");
buttonView.addEventListener('click',viewInfo);




const viewInfoLocal  = ()=>{

    console.log("Execute view local.......");

    let information = localStorage.getItem("personalInformation");

    console.log(information);

    let dataJSON = JSON.parse(information);
    console.log(dataJSON);

    var viewContent = '';
    dataJSON.map((item)=>{

        console.log(item);

        viewContent += JSON.stringify(item);
        viewContent += '<br>';
    })

    console.log(viewContent);

    let p = document.getElementById('informationData');

    p.innerHTML = viewContent;
    

}

let buttonViewLocal = document.getElementById("viewDataLocal");
buttonViewLocal.addEventListener('click',viewInfoLocal);