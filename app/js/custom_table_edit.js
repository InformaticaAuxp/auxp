$(document).ready(function(){
	$('#data_table').Tabledit({
		deleteButton: false,
		editButton: false,   		
		columns: {
		  identifier: [0, 'IDSUGERENCIA'],
		  editable: [[7, 'OBSERVACION_COMISION'],[8,'RESPUESTA_GERENCIA']]
		},
		hideIdentifier: true,
		url: '../inc/registro_respuestas.php'
	});
});