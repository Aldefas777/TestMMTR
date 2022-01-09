$( document ).ready(function() {
    $("#btn").click(
		function(){
			sendAjaxForm('result_form', 'ajax_form', 'action_ajax_form.php');
			return false; 
		}
	);
});
 
function sendAjaxForm(result_form, ajax_form, url) {
    $.ajax({
        url:     url, 
        type:     "POST", 
        dataType: "html", 
        data: $("#"+ajax_form).serialize(),  
        success: function(response) { 
        	result = $.parseJSON(response);
        	$('#result_form').html('Имя: '+result.name+'<br>Цвет: '+result.color+'<br>Есть ли 18 '+result.years+'<br>Любимое время дня '+result.daytime);
    	},
    	error: function(response) {
            $('#result_form').html('Ошибка. Данные не отправлены.');
    	}
 	});
}