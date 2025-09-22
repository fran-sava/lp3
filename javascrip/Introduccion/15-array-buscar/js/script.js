/*Array arreglos multidimensionales*/


'user strict'

var lenguajes =["javascript", "java", "PHP", "C++", "Python"];

//find
var buscafind=lenguajes.find(lenguajes=>lenguajes=="java");
console.log(buscafind);


//finIndex
var buscaindex=lenguajes.findIndex(lenguajes=>lenguajes=="PHP");
console.log(buscaindex);

//Busquedas de valores numericos con some (devuelve true o false)
var numeros=[10,30,50,80,90,100,30];
var buscaposinrs=numeros.some(numeros=>numeros>=130);
console.log(buscaposinrs);























