// var i = 10;

// while (i <= 20){
//     console.log(i);
//     i = i + 2;
// }

// do {
//     i += 1;
//     console.log(i);
// } while (i < 5)







// - Investigar propiedades de los arreglos (visualizar, agregar, eliminar elementos). Realice un arreglo con los días de la
// semana (utilice las propiedades investigadas).

// 1. Propiedades de los arreglos en JavaScript

// let diasDeLaSemana = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'];

// // Agregar domingo al final
// diasDeLaSemana.push('Domingo');

// // Eliminar el Lunes del principio
// diasDeLaSemana.shift();

// console.log(diasDeLaSemana);



// - Utilice while para sumar los números del 1 al 5. (deberá obtener como resultado 15).

// 2. Sumar los números del 1 al 5 usando un bucle while

// let suma = 0;
// let i = 1;

// while(i <= 5) {
//     suma += i;
//     i++;
// }

// console.log(suma);



// - Con do while, obtenga el factorial del número 5. (obtener como resultado 120).

// 3. Factorial de 5 usando un bucle do...while

let numero = 5;
let resultado = 1;

do {
    resultado *= numero;
    numero--;
} while (numero > 0);

console.log(resultado); 


