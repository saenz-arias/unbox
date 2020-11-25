'use strict'

const btnResult = document.querySelector('.btn-flotante');
var box_dashed = document.querySelector(".dashed");
    box_dashed.style.display = "none";

// MOSTRAR EL FORMULARIO
btnResult.addEventListener('click', mostrarOcultarFormulario);

function mostrarOcultarFormulario(){
    if( formulario.classList.contains('activo') ) {
        formulario.classList.remove('activo');
        this.classList.remove('activo');
		this.textContent = 'Calcular envio';
		
    } else {
        formulario.classList.add('activo');
        this.classList.add('activo');
        this.textContent = 'X';
    }
}
// RESETEAR RESULTADO
function limpiarFormulario() {
document.querySelector(".calculador").reset();
box_dashed.style.display = "none";
}

window.addEventListener('load', function(){
    var formulario = document.querySelector(".calculador");
    
    formulario.addEventListener('submit', function(){
       
       var precio = parseFloat(document.querySelector("#precio").value);
       var peso = parseFloat(document.querySelector("#peso").value);
       //console.log(precio);
       //console.log(peso);
       
            // var peso;
            
            var pslimit = 4;
            var prlimit = 400;
            var iva = precio * 12 / 100;
            var fod = precio * 0.5 / 100;
            var trami = 39;
            var aranc = 42;
            var precio;
            var peso;
            var total;
            var final;
                   
if(peso <= pslimit && precio <= prlimit)  {
            //console.log("sobrepeso");
            peso = peso * 10;
            total = peso + aranc;
            final = total + precio;  

       }else{
               //console.log("correcto");
               peso = peso * 2.4;
               total = peso + trami + iva + fod;
               final = total + precio;
    }
         
   //  mostrarResultado
   box_dashed.style.display = "block";
   var p_total = document.querySelector('#p_total');

   p_total.innerHTML = "$" + final;
          
       });
});


