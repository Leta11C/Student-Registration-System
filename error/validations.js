var mail = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
var text = /^[a-zA-Z_\.\-]+$/;
var text1 = /^[a-zA-Z_\.\-]+$/;
var num = /^[0-9_\.\-]+$/;
var ph = /^[0-9]{3}[0-9]{3}[0-9]{4}$/;
var gp = /([0-9]{1,})\.([0-9]{1,2})/;
$(document).ready(function(){
	$("#commit").click(function(){
		var gen_ave = $("#gen_ave").val();
		if(gen_ave == ""){
			$("#msg4").fadeIn();
			return false;
		}else{
			$("#msg4").fadeOut();
		}if(!num.test(gen_ave)){
			$("#ms4").fadeIn();
			return false;
		}else{
			$("#ms4").fadeOut();
		}
		if(gen_ave<0){
			$("#m4").fadeIn();
			return false;
		}else{
			$("#m4").fadeOut();
		}if(gen_ave>4){
			$("#mg4").fadeIn();
			return false;
		}else{
			$("#m4").fadeOut();
		}
		
	});
	
	
	
	
});