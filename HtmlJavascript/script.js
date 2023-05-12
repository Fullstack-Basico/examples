//alert("Loading page ....");
console.log("Loading javascript")
console.log(Date())

//Selector por elemento
var elementsP = document.getElementsByTagName('p');

console.log("Selector por elemento =>",elementsP)
console.log("Selector por elemento =>",elementsP[0])
console.log("Selector por elemento =>",elementsP[1])


var elementsDivs = document.getElementsByTagName('div');

console.log("Selector por elemento =>",elementsDivs)
console.log("Selector por elemento =>",elementsDivs[0])

// Selector por id
var elementForId = document.getElementById('section_3')

console.log("Selector por id =>",elementForId)


var elementForId = document.getElementById('div_1')

console.log("Selector por id =>",elementForId)

var elementForId = document.getElementById('p_1')

elementForId.innerHTML="stiv";

console.log("Selector por id =>",elementForId)

// Selector por clase

var elementForClass = document.getElementsByClassName("itemInformation");
console.log("Selector por class =>",elementForClass)

console.log(elementForClass[0])

console.log(elementForClass[1])

console.log(elementForClass[2])

var elementForClass = document.getElementsByClassName("inputContainer");
console.log("Selector por class =>",elementForClass)


var elementForClass = document.getElementsByClassName("section");
console.log("Selector por class =>",elementForClass)

elementForClass[1].innerHTML="ejemplo";