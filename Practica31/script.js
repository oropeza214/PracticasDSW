// - Utilizando el arreglo anterior utilizar el for de su preferencia y hacer que omita el mes de Julio, con el mismo ejemplo
// agregar diciembre pero fuera del arreglo y mostrar todos los meses por medio de un ciclo for incluido diciembre.

let meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre'];

for (let mes of meses) {
    if (mes === 'Julio') {
        continue;  // Si es Julio, omitimos el mes y continuamos con el siguiente.
    }
    console.log(mes);
}

// Agregar Diciembre fuera del bucle
console.log('Diciembre');
