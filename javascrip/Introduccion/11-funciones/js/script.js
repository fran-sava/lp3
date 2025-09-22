/*Funciones
Conjunto de instrucciones que se ejecutan cuando se las llama o invoca
*/

//Definir una funcion
function calculadora(){
    var mensaje= alert("Hola soy una funcion, me tenes qe llamar para que funcione");
}
//llamar a la funcion
calculadora();

//Funcion donde se pide ingresar valor 

function calcular(n1, n2, mostrar = false){
    if (mostrar == false){
        alert("Tenes que activarme con true")
    } else {
        var suma = n1 + n2;
        return suma;
    }
}

var nr1 = parseInt(prompt("ingrese el valor1"));
var nr2 = parseInt(prompt("ingrese el valor2"));
var mostrar = prompt("Mostrar");

alert(calcular(nr1, nr2, mostrar));












