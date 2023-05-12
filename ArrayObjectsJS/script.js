console.log("Loading Javascript");

// Array
var firstArray = [1, "Information", Date(), "Viernes"]

console.log(firstArray);

console.log(firstArray.length);

console.log(firstArray[0]);
console.log(firstArray[1]);
console.log(firstArray[2]);
console.log(firstArray[3]);


//Recorrido Arreglo

console.log("Recorrido Arreglo =>")
for(let i=0; i < firstArray.length; i++){
    console.log(firstArray[i]);
}


console.log("Recorrido Arreglo =>")
firstArray.forEach((item)=>{
console.log(item)
});



console.log("Recorrido Arreglo =>")

firstArray.map((item)=>{
    console.log(item);
})

//Object

var firtsObject = {
    a: "viernes",
    information: "7:50am",
    dolar: 4550,
    currentDate: {
        dia: 12,
        mes: "Mayo",
        annio: 2023 
    }

}


console.log(firtsObject);


//Recorrido Objecto
console.log("Recorrido Objecto")
 for( let item in firtsObject){

    console.log("key =>",item);
    console.log("value => ", firtsObject[item]);

    if(typeof firtsObject[item] == "object"){
        console.log("Is Object")
        console.log("Recorrido Subobjecto")
        let secondObject = firtsObject[item];

        for ( let subitem  in secondObject){
            console.log("key =>",subitem);
            console.log("value => ", secondObject[subitem]);
        }
    }
 }



//Recorrido Objecto
console.log("Recorrido Objecto")

Object.keys(firtsObject).forEach((item)=>{
    console.log("key=>",item);
    console.log("value =>", firtsObject[item])
});

console.log("Recorrido Objecto")

Object.entries(firtsObject).forEach(function([key, value]){
    console.log(key, value)
})

Object.entries(firtsObject).forEach(function(item){
    console.log(item)
})







// Array/Object
var firstArrayObject = [
    {
        a: "viernes",
        information: "7:50am",
        dolar: 4550,
        currentDate: {
            dia: 12,
            mes: "Mayo",
            annio: 2023 
        }
    },
    {
        name: "Juan",
        lastName: "Perez",
        id: 10262525242
    }
]


console.log("ARRAY OBJECT")


console.log(firstArrayObject)

console.log(firstArrayObject.length)



let  data = 1
console.log(typeof data);

data = "Fullstack"
console.log(typeof data)

console.log("Recorriendo Arreglo")
firstArrayObject.map((item)=>{

    console.log(typeof item, item);
    console.log("Recorriendo Objeto")
    Object.entries(item).forEach(([key, value])=>{
        console.log(key, value)
    })


});


console.log(firstArrayObject[0])
console.log(firstArrayObject[0].dolar)

let dolar = firstArrayObject[0].dolar;

console.log(dolar + 1);

console.log(firtsObject)

let day = firtsObject.a;

console.log(day)