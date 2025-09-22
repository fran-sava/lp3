/*Mostrar los nros que son pares e impares entre los valores ingresados*/

'user strict'

var nro1 = parseInt(prompt('Ingrse el 1er valor'));
var nro2 = parseInt(prompt('Ingrse el 2do valor'));

while (nro1 < nro2) {
    nro1++;
    if(nro1%2 !=0){
        document.write(nro1, 'Es impar<br>');

    }else if (nro1%2 ==0){
        document.write(nro1, 'Es par<br>');
    }
}