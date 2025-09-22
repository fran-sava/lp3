/*Array arreglos predeterminados en js*/

'user strict'
//Variable normal
var nombre="Nelson Bordon";
//Definir un array
var nombres= ["Charly Garcia", "Leon Gieco", "Gustavo Cerati", "Carlos Spinetta", 52, true];
//Otra forma de establecer un array
var lenguajes=new Array("Java", "PHP", "Javascript", "Phyton", "C++");

console.log(nombres);
console.log(lenguajes);

//Acceder a elemnetos
console.log("El lenguaje 2 es:" + lenguajes[2]);

//Imprimir un elemnto ingresando el nro de indice

var seleccion = parseInt(prompt("Que lenguaje seleccionaras?", 0));
if(seleccion>=lenguajes.length){
    alert("Introduce un nro menor, no existe esa posicion" + lenguajes.length);
}else {
    alert(lenguajes[seleccion]);
}

//Recorre un array
//1 for
document.write("<h1>Imprimir elmentos con for</h1>");
document.write("<ul>");
for(var i = 0; i<lenguajes.length; i++){
    document.write("<li>" + lenguajes[i]+"</li>");
}
document.write("<ul>");

//2 foreach
document.write("<h1>Imprimir elementos con foreach</h1>");
document.write("<ul>");
    lenguajes.forEach((elemento, indice, array)=>{
        console.log(elemento);
        console.log(indice);
        console.log(array);
        document.write("<li>"+"El indice es: "+indice+"="+elemento+"</li>");
    });

//3 Recorrer con for in
document.write("<h1>Imprimir elmentos con for in</h1>");
document.write("<ul>");
for(let lenguaje in lenguajes){
    document.write("<li>"+"El lenguaje es: "+lenguajes[lenguaje]+"</li>");
}
document.write("<ul>");




















