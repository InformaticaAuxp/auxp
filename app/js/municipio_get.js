$(document).ready(function(){
    $('#id_deparatamento').on('change', function(){
        if($('#id_deparatamento').val() == ""){
            $('#municipio').empty();
            $('<option value = "">Selecciona un municipio</option>').appendTo('#municipio');
            $('#municipio').attr('disabled', 'disabled');
        }else{
            $('#municipio').removeAttr('disabled', 'disabled');
            $('#municipio').load('app/inc/municipio_get.php?id_departamento=' + $('#id_deparatamento').val());
        }
    });
});