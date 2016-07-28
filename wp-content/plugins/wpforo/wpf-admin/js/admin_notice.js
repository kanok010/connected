jQuery(document).ready(function($){
	$(document).on('click','.wpfadmin_notice', function(){
		phrase = $(this).attr('id');
		 $.ajax({
	   		type: 'POST',
	   		url: wpf_admin_notice_obj.url,
	   		data: {
	   			phrase: phrase,
	   			action: 'wpf_admin_notice_ajax'
	   		}
	   	}).done(function( response ){
	   		$('#' + response).slideUp( 400 );
	   	});
	});
});