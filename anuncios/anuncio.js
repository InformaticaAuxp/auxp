$(document).ready(function(){
 //parametros principales

 var contenidoHTML = '<div class ="cu">'+
     '<div class ="tit">&iexcl; AVISO IMPORTANTE &#33; </div>'+
     '<div class ="par">'+
     '<img src="../img/nota_duelo2.png" alt="Comunicado" >'+
     /*'<p>Estimados Asociados, derivado a las nuevas disposiciones gubernamentales del Presidente Constitucional de la República de Guatemala, publicadas en el diario oficial hoy viernes 7 de agosto de 2020, relacionadas al horario de atención al público por parte del sector privado, a partir del lunes 10 de agosto de 2020 el horario de atención cambiará de manera temporal, el cual será de 09:00 a 17:00 horas de lunes a viernes.</p>'+
     '<p>Para más información visita: www.asapespu.com o bien contáctanos por Facebook /ASAPESPU, así mismo puedes contactarnos por medio de WhatsApp:</p>'+
     '<p>Secretaría General: 3604-3046\n</p>' +
     '<p>Créditos: 3604-3045\n</p>'+
     '<p>Trabajo Social: 5568-8285\n</p>' +
     '<p>Informática: 5568-8291</p>'+
     '<p>CIUDAD DE GUATEMALA, 7 DE AGOSTO DE 2020.\n</p>' +
     '<p align="center">JUNTA DIRECTIVA</p>'+*/

     '<div class ="bt" > <a class = "bts" onclick=\"closeModal()\">Cerrar</a></div></div>'
    /*'<p>Hacemos de su conocimiento que en el Departamento de Chiquimula\n' +
     'personas inescrupulosas han ofrecido realizar procesos de sanitización\n' +
     'haciéndose pasar como representantes de esta Asociación, engañando a\n' +
     'personas trabajadoras que en su buena fé han sido objeto de estafas, por\n' +
     'lo que aclaramos que <strong>esta Asociación no se dedica a realizar procesos\n' +
     'de sanitización</strong> ni en el Departamento de Chiquimula ni en ninguna otra\n' +
     'parte de nuestro País, asimismo que no se ha autorizado a ningún\n' +
     'trabajador ni representante para que ofrezca servicios ajenos a la\n' +
     'naturaleza mutualista de esta Entidad, y que toda gestión que se realiza se\n' +
     'lleva a cabo por nuestros Representantes Departamentales y Delegados\n' +
     'Distritales debidamente acreditados, de estos incidentes ya se han hecho\n' +
     'las denuncias respectivas y será el Ministerio Público quien lleve a cabo la\n' +
     'investigación, por favor no se deje engañar, cualquier anomalía denúnciela.\n ' +
     '</p>'+*/
    /*'<p>Derivado de la suspensión de actividades laborales en nuestras oficinas, los trámites podrán ser realizados únicamente por medio del representante departamental de su localidad' +
     ' por lo que a continuación encontrará un <strong><a href="https://asapespu.com/representantes.php" >enlace</a></strong> el cual podrá consultar para avocarse a ellos.'+
     ' Agradecemos su comprensión e instamos a tomar las medidas de prevención emitidas por las autoridades.</p>'+
     '<p>Para cualquier consulta puede escribirnos a <strong><a href="mailto:informacion@asapespu.com">informacion@asapespu.com</a></strong></p></div>'+
     ';.....*/
    /*'<p>Se les informa a todos nuestros asociados que,  el 21 de febrero del presente año, se estará Trasmitiendo en el programa 60 minutos de Radio Sonora,  a las 16 horas, información Sobre los beneficios, programas y otras noticias de interés general con los que cuenta la ASOCIACIÓN DE AUXILIO PÓSTUMO DEL EMPLEADO DE SALUD PÚBLICA.'+
 	    '<p>Para cualquier consulta comunicarse al Pbx. 2200-1515 Ext. 101, o escribirnos a informacion@asapespu.com</p> </div>'+
 	  	'<div class ="bt"> <a class = "bts" onclick=\"closeModal()\">Cerrar</a>  </div></div>';*/
	/*'<p> A todos nuestros asociados bajo el renglón 011, se les informa que durante el mes de Agosto 2,019, el descuento de (Q80.00) por cuota de Auxilio Póstumo no fue aplicado a varios empleados del MSPAS por lo que les rogamos verificar en sus comprobantes de pago de los meses de Agosto y Septiembre, si este descuento no fue aplicado puede realizar este pago en los siguientes bancos: Banrural (Empresa 290 transacción 02 + código de asociado), Banco Industrial (Convenio 239 o 238 + código de asociado) y BAC-REFORMADOR (No. Cuenta 704100056 + código de asociado), esto con la finalidad que nuestros asociados puedan cancelar las cuotas no descontadas. Es importante mencionar que para poder realizar este pago deberán contar con un código de asociado el cual podrán consultar presionando <a href="download/departamento de informatica/Listado de Asociados Presupuestados.pdf" target="_Blank">Aquí</a>.'+
 			'<p>Para cualquier consulta comunicarse al departamento de Informática Pbx. 2200-1515 Ext. 106,135 o 115</p> </div>'+
 	  		'<div class ="bt"> <a class = "bts" onclick=\"closeModal()\">Cerrar</a>  </div></div>';*/
    /*
 	  '<p>Se les informa a todos los asociados lo siguiente:'+
 	    '<p>El viernes 06 de septiembre del  presente  año, las instalaciones de la asociación permanecerán cerradas por motivo del DÍA DEL SALUBRISTA. Retornando labores con normalidad el Lunes 09 de Septiembre de 8:00 am a 04:30 pm. Para cualquier consulta enviar un correo electrónico a la dirección: informacion@asapespu.com, y  la brevedad posible se les responderá.</p> </div><br><br><br>'+
 	  	'<div class ="bt"> <a class = "bts" onclick=\"closeModal()\">Cerrar</a>  </div></div>';*/
  	/*'<p>Se les informa a todos los empleados que laboran para el ministerio de salud pública y asistencia social  bajo el renglón 031; que derivado a que en los meses de febrero y marzo del presente año no fue posible el descuento de (Q.80.00) por concepto de cuota ordinaria de auxilio póstumo, se han habilitado los siguientes bancos: Banrural (Empresa 290 transacción 02 + código de asociado), Banco Industrial (Convenio 239 o 238 + código de asociado) y BAC (No. Cuenta 704100056 + código de asociado) , esto con la finalidad que nuestros asociados puedan cancelar las cuotas no descontadas. Es importante mencionar que para poder realizar este pago deberán contar con un código de asociado el cual podrán consultar presionando <a href="download/departamento de informatica/Listado de Asociados Renglon 031.pdf" target="_Blank">Aquí</a>.'+
 	    '<p>Para cualquier consulta comunicarse al departamento de Informatica Pbx. 2200-1515 Ext. 106,135 o 115</p> </div>'+
 	  	'<div class ="bt"> <a class = "bts" onclick=\"closeModal()\">Cerrar</a>  </div></div>';*/
  	/*<p>A todos los encargados de generar la planilla de empleados que laboran bajo el renglon 031 del MSPAS se les informa que la Asociacion de Auxilio Postumo del Empleado de Salud Publica ha puesto a su disposicion un nuevo sistema para la captacion de planillas, con la finalidad de registrar y mantener actualizado el estado de cuenta de todos nuestros asociados que estan bajo este renglon. Este sistema se encuentra en este sitio web en el apartado "Aplicaciones".'+
 	      '<p> El calendario para el envio de la planilla mensual se encuentra disponible en este sitio.</p></p>'+
 	      '<p>Para mas informacion comunicarse al departamento de Informatica Pbx. 2200-1515 Ext. 106</p> </div>'+*/


 var ancho = 375;
 var alto = 590;

 $(window).resize(function(){

 var wscr = $(window).width();
 var hscr = $(window).height();

 $('#bgtransparent').css("width", wscr);
 $('#bgtransparent').css("height", hscr);
 
 $('#bgmodal').css("width", ancho+'px');
 $('#bgmodal').css("height", alto+'px');
 
 var wcnt = $('#bgmodal').width();
 var hcnt = $('#bgmodal').height();
 
 var mleft = ( wscr - wcnt ) / 2;
 var mtop = ( hscr - hcnt ) / 2;
 
 $('#bgmodal').css("left", mleft+'px');
 $('#bgmodal').css("top", mtop+'px');
 });

 var bgdiv = $('<div>').attr({
 className: 'bgtransparent',
 id: 'bgtransparent'
 });
  
 $('body').append(bgdiv);
 
 var wscr = $(window).width();
 var hscr = $(window).height();

 $('#bgtransparent').css("width", wscr);
 $('#bgtransparent').css("height", hscr);
 
 var moddiv = $('<div>').attr({
 className: 'bgmodal',
 id: 'bgmodal'
 }); 

 $('body').append(moddiv);

 $('#bgmodal').append(contenidoHTML);

 $(window).resize();
 
 });
 
function closeModal(){
 // removemos divs creados
 $('#bgmodal').remove();
 $('#bgtransparent').remove();
}


