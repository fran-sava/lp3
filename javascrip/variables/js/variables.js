/*Variables*/
//2 'use strict'//Esto para que el lenguaje sea mas sensible
//3-Variables tipo cadena
var pais = "<h1>Paraguay</h1>";
var continente = '<h1>'+'America'+'</h1>';
//Contatenar
var p_c= pais + '-'+continente;
console.log(p_c);
document.write(pais+"<hr>");
document.write(continente);

//2Modo estricto
//'use strict'
//4Let permite definir variables limitando su alcance
//5var permite definir variables y utilizarlas globalmente

let varlet = "Esto es una variable let";
document.write("<br>"+varlet);

//6-Constantes Es unavariable que no puede cambiar de valor
//  y se define con la palabra const

var web="htpps://www.utic.edu.py";
console.log(web);
const constweb="https://www.utic.edu.py/cire";
console.log(constweb);
constweb="Otra pagina";
console.log(constweb);

