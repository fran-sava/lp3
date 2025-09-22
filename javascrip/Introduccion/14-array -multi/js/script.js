/*Array arreglos multidimensionales*/


'user strict'

var categorias=["Z", "X", "Accion", "Comedia", "Terror"];
var peliculas=["Peli de accion", "Peli comedia", "Peli de terror"];
var cine=[categorias, peliculas];
console.log(cine[0][1]);
console.log(cine[1][2]);

//1-Operaciones con array
//Añadir elementos push

peliculas.push("Batman");
console.log(peliculas);

//1.1-Quitar elementos pop
peliculas.pop();
peliculas.pop();
peliculas.pop();
console.log(peliculas);

//1.3-Añadir elemntos con promt

var elementos="";
do{
    elemento= prompt("Introduce una peli");
    peliculas.push(elemento);

}while(elemento != "PARAR");

//1.4-Recorrer array y mostrar valores en pantalla
peliculas.forEach((pelis)=>{
    document.write("Peliculas: "+ pelis+"<br>")
})

//2 Convertir array en texto
var pelistring=peliculas.join();
console.log(typeof pelistring);

//3-Convertir texto a array
var cadena="Texto1, Texto2, Texto3";
console.log(cadena.split());

//4-Ordenar array en orden alfabetico sort
categorias.sort();
console.log(categorias);

//5-Invertir orden reverse
peliculas.reverse();
console.log(peliculas);























