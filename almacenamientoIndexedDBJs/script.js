console.log("Loading Javascript");

const processForm = (event)=>{

    event.preventDefault();
    console.log("Envio Formulario");

    var nameData = document.getElementById("name").value;
    var ageData = document.getElementById("age").value;

    var user = {
        id: Array.from({ length: 5 }, () => Math.random().toString(36).charAt(2)).join(''),
        name: nameData,
        age: ageData,
    }

    console.log(user);

    //Crear o Abrir Base Datos
    var dataBase = window.indexedDB.open("myDataBase",1);


    // Ejecución Correcta Crear o Abrir Base Datos
   

    // Ejecución Correcta Crear o Abrir Base Datos
    dataBase.onsuccess = (event)=>{

        console.log("Creación o Error en Abrir Base Datos Correcta !!");
        var db = dataBase.result;

        console.log(db);

        var instanceTransaction = db.transaction('users','readwrite').objectStore('users');


        var saveData = instanceTransaction.add(user);

    }

    dataBase.onupgradeneeded = (event) => {


        console.log("Create Object Store");
        db = event.target.result
    
        // Crear  objectStore para la base Datos
        const objectStore = db.createObjectStore('users',{ keyPath: 'id' });

    }

    // Ejecución Error Crear o Abrir Base Datos
    dataBase.onerror = (event)=>{
        console.log("Error Creación o Error en Abrir Base Datos !!!");
    }


}




var form = document.getElementById("myForm");

form.addEventListener('submit',processForm);