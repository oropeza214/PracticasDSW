// - Investigar for in, forEach, for of. Realice un ejemplo con cada uno de los for con un arreglo que contenga los primeros 11
// meses del año.

// 1. For in

var meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre'];

// for (var index in meses) {
//     console.log(meses[index]);
// }

// 2. forEach

// meses.forEach(function(mes) {
//     console.log(mes);
// });

// 3. for...of

for (var mes of meses) {
    console.log(mes);
}
