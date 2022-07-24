jQuery('body').on('click','.goso-recipe-print-btn',function(){
	var printWindow = window.open('', '', 'height=800,width=800');
	var printCSS = jQuery(this).data('print'),
		wrapper_goso_recipe = jQuery(this).closest('.goso-single-block').find('.wrapper-goso-recipe').first();
	if( wrapper_goso_recipe.length ){
		var divContents = "<div class='post-entry'><div class='wrapper-goso-recipe'>" + wrapper_goso_recipe.html() +
							"</div></div><script>" +
							"window.onload = function() {" +
							"     window.print();" +
							"};" +
							"<" + "/script>";
		var srcCSS = '<link href=\"' + printCSS + '\" rel=\"stylesheet\" type=\"text/css\">';
		setTimeout(function() {
			printWindow.document.write( srcCSS + divContents);
			printWindow.document.close();
		}, 250);
	}
	return false;
});