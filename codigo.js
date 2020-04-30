// Example starter JavaScript for disabling form submissions if there are invalid fields

(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();

function dias_sintomas(valor) {
  if (valor==1) {
    document.getElementById('dias_sintomas').style.display = 'block';
    console.log(valor);
  }
  else if(valor==0){
    console.log(valor);
    document.getElementById('dias_sintomas').style.display = 'none';
  }
}
function enfermedad(valor) {
  if (valor==1) {
    document.getElementById('enfermedad').style.display = 'block';
    console.log(valor);
  }
  else if(valor==0){
    console.log(valor);
    document.getElementById('enfermedad').style.display = 'none';
  }
  
}

$('#fecha_nacimientoS').on('input',function(e){
  var FechaNacimiento=$('#fecha_nacimientoS').val();
  var fechaNace = new Date(FechaNacimiento);
  var fechaActual = new Date()

  var mes = fechaActual.getMonth();
  var dia = fechaActual.getDate();
  var año = fechaActual.getFullYear();

  fechaActual.setDate(dia);
  fechaActual.setMonth(mes);
  fechaActual.setFullYear(año);

  resultado = Math.floor(((fechaActual - fechaNace) / (1000 * 60 * 60 * 24) / 365));
  $('#edad').val(resultado);
});

$('#departamento_origen').on('input',function(e){
  var depaOrigen = $('#departamento_origen').val();

  $('#origen').val(depaOrigen);
});