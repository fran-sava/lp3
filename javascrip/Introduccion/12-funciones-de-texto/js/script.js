/*Funciones predeterminadas en js*/
//Funciones para transfomar texto

var numero=888;
var text1=" Bienvenidos al curso de javascript ";
var texto2="TEXTO EN MAYUSCULA";

'use strict'
//1- Transformar de nro a string
var nroconvertido = numero.toString();
console.log(nroconvertido);
console.log(typeof(nroconvertido));

//2-Cmabiar valores en minisucula a mayuscula
var text1MAYUS=text1.toUpperCase();
console.log(text1MAYUS);

//3-Cambiar valores a minus

var text2minu=texto2.toLocaleLowerCase();
console.log(text2minu);

//4-Longitud de un string

var longitud = "Daniel Bordon";
console.log(longitud.length);

//5- Concatenar
console.log(text1+texto2);

//6- array-longitud
var array=["hola", "Como", "Estas?"];
console.log(array.length);

//7-Buscar por indice

var busqueda=text1.indexOf("curso");
console.log(busqueda);

//8-Buscar por indice2 

var busqueda2=text1.lastIndexOf("de");
console.log(busqueda2);

//9-Buscar por indice3 

var busqueda3=text1.search("javascrip");
console.log(busqueda3);

//10-Buscar por match

var busqueda4=text1.match("al curso");
console.log(busqueda4);

//11-Quitar espacios de adelante o atras

var sustraerespacios = text1.substr(14, 6);
console.log(sustraerespacios);

//12-Quitar letras
var quitar = text1.charAt(2);
console.log(quitar);

//13-Busqueda con startswicht cuando las palabras inician con un valor esto devuelve true o false
var busqueda5=text1.startsWith("Cerro");
console.log(busqueda5);


//14-include
var busqueda6=text1.includes("javascrip");
console.log(busqueda6);

//15-Reemplazar una palabra por otra
var reemplazar=text1.replace("javascrip", "java");
console.log(reemplazar);

//16-borrar y devolver el valor indicado
var borrarparte=text1.slice(12, 20);
console.log(borrarparte);

//17-split convertir en array
var textarray =  text1.split();
var textarray =  text1.split("        ");
console.log(textarray);

//18-quitar espacios con trim
var quitarespacios = text1.trim();
console.log(quitarespacios);

//19-uso de plantillas
var nombre=prompt("Ingrese el nombre");

var apellido=prompt("Ingrese el apellido");
//alt+96 comillas invertidas

var plantilla=`

<h1>Hola que tal</h1>
<h3>el nombre es: ${nombre}</h3>
<h3>el apellido es: ${apellido}</h3>
`;
document.write(plantilla);
























