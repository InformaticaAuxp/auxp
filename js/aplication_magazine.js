$.each(magazine, function(i){
	var temple ='<div class="caja" id="'+i+'">'+
		'<a id="dir_rev" href="" target="new" class="" title="Click para ver revista">'+
		'<img id="dir_img" src="" height="90%"/></a>'+
		'<div class="nomb">'+
		'<p id="nom_rev">..</p></div>'+
	    '<div class="tit">'+
	    '<a id="dir_pdf" href="" download=""  class="btn" title="Click para descargar revista en formato'+ 
	    'pdf">Descargar PDF</a>'+ 
	    /*'<a id="dir_exe" href="" class="btn" title="Click para descargar revista ejecutable" download="">'+
	    'Descargar .exe</a>*/ '</div></div>';
 
	    $('#magaz').append(temple);
	    var nombre="#"+i+" #nom_rev"
	    $(nombre).html(magazine[i].nom_rer);
	    var image="#"+i+" #dir_img"
	    $(image).attr('src',magazine[i].dir_img);
	    var web="#"+i+" #dir_rev"
	    $(web).attr('href',magazine[i].dir_web);
	    var arc_pdf="#"+i+" #dir_pdf"
	    $(arc_pdf).attr('href',magazine[i].dir_pdf);
	    var ejec="#"+i+" #dir_exe"
	    $(ejec).attr('href',magazine[i].dir_exe);
});

