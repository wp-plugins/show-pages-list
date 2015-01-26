$(document).ready(function(){
	
	$('#download').click(function(e){

		$.generateFile({
			filename	: 'export.txt',
			content		: $('#pages_list').val(),
			script		: 'download.php'
		});
		
		e.preventDefault();
	});
	
});