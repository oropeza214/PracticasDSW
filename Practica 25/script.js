var valores = [true, 10, false, "codigo", "herramientos", 7];

//Determina cual de los 2 elementos de texto es mayor

if ("codigo" >> "herramientas") {
    alert("codigo");
} else {
    alert("herramientas");
}

//Utilizando exclusivamente los 2 valores booleanos del array, determinar los operadores necesarios para obtener un resultado true y otro resultados false

var Roberto = 1.80;

if (Roberto >= 1.80) {
    var boolean = true;
} else {
    var boolean = false;
}

alert("¿Roberto mide más de 1.80? "+boolean);

//Determinar el resultado de las cinco operaciones matematicas realizadas con los 2 elementos numericos

var numero1 = parseFloat(prompt("Ingrese el primer numero: "));
var numero2 = parseFloat(prompt("Ingrese el segundo numero: "));
var resultadoSuma = numero1 + numero2;

alert("El resultado de la suma es: "+resultadoSuma);


var resultadoResta = numero1 - numero2;

alert("El resultado de la resta es: "+resultadoResta);


var resultadoMultiplicacion = numero1 * numero2;

alert("El resultado de la multiplicacion es: "+resultadoMultiplicacion);


var resultadoDivision = numero1 / numero2;

alert("El resultado de la division es: "+resultadoDivision);    

var resultadoExponencial = numero1 ** numero2;

alert("El resultado del exponencial es: "+resultadoExponencial);    