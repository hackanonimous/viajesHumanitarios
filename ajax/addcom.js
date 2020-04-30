$('#addcom').submit(function(e) {
	var FechaNacimiento=$('#fecha_nacimiento').val();
	var fechaNace = new Date(FechaNacimiento);
    var fechaActual = new Date()

    var mes = fechaActual.getMonth();
    var dia = fechaActual.getDate();
    var año = fechaActual.getFullYear();

    fechaActual.setDate(dia);
    fechaActual.setMonth(mes);
    fechaActual.setFullYear(año);

    resultado = Math.floor(((fechaActual - fechaNace) / (1000 * 60 * 60 * 24) / 365));

	const postData = {
		dni: $('#dni').val(),
		apenom: $('#apenom').val(),
		fecha_nacimiento: $('#fecha_nacimiento').val(),
		sexo: $('#sexo').val(),
		edad: resultado,
		parentesco: $('#parentesco').val(),
		codigo_solicitud: $('#codigo_solicitud').val()
	};
	$.post('modelos/addcomModelo.php', postData, function(response){
		let respuestas = JSON.parse(response);
		let plantilla = '';
		respuestas.forEach(respuesta=>{
			plantilla += `
				<tr idcom="${respuesta.id}">
					<td hidden>${respuesta.id}</td>
					<td>${respuesta.dni}</td>
					<td>${respuesta.apenom}</td>
					<td>${respuesta.fecha_nacimiento}</td>
					<td>${respuesta.sexo}</td>
					<td>${respuesta.parentesco}</td>
					<td><div class="eliminar input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-trash"></i></span>
                      </div></td>
				</tr>
			`
		});
		$('#listcom').html(plantilla);
		$('#addcom').trigger('reset');
	});
	e.preventDefault();
})
$(document).on('click','.eliminar', function() {
	let elemento=$(this)[0].parentElement.parentElement;
	let id=$(elemento).attr('idcom');
	$.post('modelos/deletecomModelo.php',{id},function(response) {
		let respuestas = JSON.parse(response);
		let plantilla = '';
		respuestas.forEach(respuesta=>{
			plantilla += `
				<tr idcom="${respuesta.id}">
					<td hidden>${respuesta.id}</td>
					<td>${respuesta.dni}</td>
					<td>${respuesta.apenom}</td>
					<td>${respuesta.fecha_nacimiento}</td>
					<td>${respuesta.sexo}</td>
					<td>${respuesta.parentesco}</td>
					<td><div class="eliminar input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-trash"></i></span>
                      </div></td>
				</tr>
			`
		});
		$('#listcom').html(plantilla);
	})
})
