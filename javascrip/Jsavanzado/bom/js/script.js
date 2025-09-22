/*
BOM
Browser Object Model
Manipular el navegador y obtener datos
*/
//1-Tamaño ancho de la ventana del navegador 
console.log(window.innerWidth, "Ancho de la pagina");

//2-Alto del navegador
console.log(window.innerHeight, "Alto del navegador");

//3-Crear una funcion para traer el ancho y el alto del navegador
function traerbom(ancho, largo){
    var ancho=console.log(window.innerWidth, "Ancho de la pagina con una funcion");
    var ancho=console.log(window.innerHeight, "Alto del navegador con una funcion");
}

traerbom();

//4-Traer el tamaño real
console.log(screen.width, "Ancho de la pagina");
console.log(screen.height, "Alto de la pagina");

//5-Traer una url
console.log(window.location, "Esto es la url donde estas ahora");

//6-Funcion para redirecionar a otra url
function redirect(url){
    window.localStorage.href=url;
}
redirect(url);

//Abrir otra ventana del navegador
function abrirventana(url){
    window.open(url, "","width=00, heigth=400");
}
abrirventana(url);



























