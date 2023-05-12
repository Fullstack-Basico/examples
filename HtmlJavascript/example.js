console.log("loading  javascript ......");

function actionButton(){

    //SELECTOR POR ELEMENTO
    var myP = document.getElementsByTagName('p');
    console.log(myP);

    myP[0].style["background-color"] = "red";
    myP[1].innerHTML = Date();
    
   //SELECTOR POR  ID
    var  myNewValue = document.getElementById("input_1");

    //SELECTOR POR  ID
    var myIDp = document.getElementById("p_3");


    myIDp.innerHTML = myNewValue.value;
   if(myIDp.style.display == "none"){
        myIDp.style.display="block";
        myIDp.style.textAlign = "justify";

        myIDp.innerHTML = myNewValue.value;
    } else {
        myIDp.style.display="none";
    }

    //SELECTOR POR  ID
    var  myInput = document.getElementById("input_1");

    console.log("Valor input=>",myInput.value);

    //SELECTOR POR  ID  
    var  myInput = document.getElementById("input_1");
    console.log(myInput);

    myInput.innerHTML = "DEFAULT VALUE";
    myInput.value = "DEFAULT VALUE";
    //SELECTOR POR  CLASS
    var mylist = document.getElementsByClassName("list");

    console.log(mylist)

    mylist[0].innerHTML = "Information Change!!!!!";
    mylist[1].innerHTML = "Information Change!!!!!";
    mylist[2].innerHTML = "Information Change!!!!!";



}