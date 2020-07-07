$(document).ready(function(){

	 

} );



$('#btncambiar1').on('click', function(event){

	event.preventDefault();

	$("#inputfile1").click();

	$("#btncambiar1").addClass("d-none");

	$("#btnchange1").removeClass("d-none");	

	$("#btncancel1").removeClass("d-none");	

})

$('#btnchange1').on('click', function(event){

	event.preventDefault();	

	var $file1 = $("#inputfile1").val();

	if ($file1 !== ""){

		$('#formfile1').submit();

	}

})

$('#btncancel1').on('click', function(event){

	event.preventDefault();

	$("#btncambiar1").removeClass("d-none");

	$("#btnchange1").addClass("d-none");	

	$("#btncancel1").addClass("d-none");	

})







$('#btncambiar2').on('click', function(event){

	event.preventDefault();

	$("#inputfile2").click();

	$("#btncambiar2").addClass("d-none");

	$("#btnchange2").removeClass("d-none");	

	$("#btncancel2").removeClass("d-none");	

})

$('#btnchange9999').on('click', function(event){

	event.preventDefault();	

	var $file2 = $("#inputfile2").val();
     
	if ($file2 != ""){

		$('#formfile2').submit();

	}

})

$('#btncancel2').on('click', function(event){

	event.preventDefault();

	$("#btncambiar2").removeClass("d-none");

	$("#btnchange2").addClass("d-none");	

	$("#btncancel2").addClass("d-none");	

})





$('#btncambiar3').on('click', function(event){

	event.preventDefault();

	$("#inputfile3").click();

	$("#btncambiar3").addClass("d-none");

	$("#btnchange3").removeClass("d-none");	

	$("#btncancel3").removeClass("d-none");	

})

$('#btnchange3').on('click', function(event){

	event.preventDefault();	

	var $file3 = $("#inputfile3").val();

	if ($file3 !== ""){

		$('#formfile3').submit();

	}



})

$('#btncancel3').on('click', function(event){

	event.preventDefault();

	$("#btncambiar3").removeClass("d-none");

	$("#btnchange3").addClass("d-none");	

	$("#btncancel3").addClass("d-none");	

})





$('#btncambiar4').on('click', function(event){

	event.preventDefault();

	$("#inputfile4").click();

	$("#btncambiar4").addClass("d-none");

	$("#btnchange4").removeClass("d-none");	

	$("#btncancel4").removeClass("d-none");	

})

$('#btnchange4').on('click', function(event){

	event.preventDefault();	

	var $file4 = $("#inputfile4").val();

	if ($file4 !== ""){

		$('#formfile4').submit();

	}



})

$('#btncancel4').on('click', function(event){

	event.preventDefault();

	$("#btncambiar4").removeClass("d-none");

	$("#btnchange4").addClass("d-none");	

	$("#btncancel4").addClass("d-none");	

})

//5
$('#btncambiar5').on('click', function(event){

	event.preventDefault();

	$("#inputfile5").click();

	$("#btncambiar5").addClass("d-none");

	$("#btnchange5").removeClass("d-none");	

	$("#btncancel5").removeClass("d-none");	

})

$('#btnchange5').on('click', function(event){

	event.preventDefault();	

	var $file5 = $("#inputfile5").val();

	if ($file5 !== ""){

		$('#formfile5').submit();

	}



})

$('#btncancel5').on('click', function(event){

	event.preventDefault();

	$("#btncambiar5").removeClass("d-none");

	$("#btnchange5").addClass("d-none");	

	$("#btncancel5").addClass("d-none");	

})


function erroFindingURL(){

	alert("vaya!!!, parece que hubo un error, si el error persiste pongase en contacto con info@gixdigital.com");

}