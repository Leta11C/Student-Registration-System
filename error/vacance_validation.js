var mail = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
var text = /^[a-zA-Z_\.\-]+$/;
var text1 = /^[a-zA-Z_\.\-]+$/;
var num = /^[0-9_\.\-]+$/;
var ph = /^[0-9]{3}[0-9]{3}[0-9]{4}$/;
var salar = /([0-9]{1,})\.([0-9]{1,2})/;
$(document).ready(function(){
	$("#send").click(function(){
		var title = $("#title").val();
		var content = $("#content").val();
		var experience = $("#experience").val();
		var salary = $("#salary").val();
		var reg_dates = $("#reg_dates").val();
		var deadline = $("#deadline").val();
		if(title == ""){
			$("#msg1").fadeIn();
			return false;
		}else{
			$("#msg1").fadeOut();
		}
		if(!text.test(title)){
			$("#ms1").fadeIn();
			return false;
		}else{
			$("#ms1").fadeOut();
		}
		if(content == ""){
			$("#msg2").fadeIn();
			return false;
		}else{
			$("#msg2").fadeOut();
		}if(!text.test(content)){
			$("#ms2").fadeIn();
			return false;
		}else{
			$("#ms2").fadeOut();
		}if(experience == ""){
			$("#msg3").fadeIn();
			return false;
		}else{
			$("#msg3").fadeOut();
		}if(!text.test(experience)){
			$("#ms3").fadeIn();
			return false;
		}else{
			$("#ms3").fadeOut();
		}
		if(salary == ""){
			$("#msg4").fadeIn();
			return false;
		}else{
			$("#msg4").fadeOut();
		}if(!salar.test(salary)){
			$("#ms4").fadeIn();
			return false;
		}else{
			$("#ms4").fadeOut();
		}
		if(reg_dates == ""){
			$("#msg5").fadeIn();
			return false;
		}else{
			$("#msg5").fadeOut();
		}
		if(deadline == "" ){
			$("#msg6").fadeIn();
			return false;
		}else{
			$("#msg6").fadeOut();
		}
		
	});
		
});