
(function($){
	$(function(){
		$("#edit-identical").change(function(){
			if($(this).is(":checked"))
			{
				$("#edit-delivery").hide();
			}
			else
			{
				$("#edit-delivery").show();
			}
		});
	});
})(jq191);