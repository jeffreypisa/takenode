import $ from "jquery";
import Dropzone from 'dropzone';

export function tool() {
	Dropzone.options.myAwesomeDropzone = {
		paramName: "file", // The name that will be used to transfer the file
		maxFilesize: 99, // MB
		accept: function() {
			$('body').addClass('show-tool');
		}
	};
	
	$(".js-closetool").on("click", function(){
		$('body').removeClass('show-tool');
	});
	
	var elements = document.getElementsByClassName("collapse");
	
	var myFunction = function() {
		$(this).closest('.accordion-item').find('.accordion-button').removeClass('disabled');
		
		if($(this).closest('.accordion-item').is(':last-child')) {
			$(this).closest('.accordion-item').next().find('.accordion-button').removeClass('disabled');
		}
	};
	
	Array.from(elements).forEach(function(element) {
		element.addEventListener('click', myFunction);
	});
	
	// Stap 1
	
	$( "#step1_button_next" ).on( "click", function() {	
		var theval = $(this).closest('.accordion-item').find('.form-check-input:checked').val();
		$(this).closest('.accordion-item').find('h5').text('1. Ik registreer ' + theval);
	});
	
	// Stap 2
	$( "input#persoonsgegevens1" ).on( "click", function() {
		$('#velden_anoniem, #velden_algemeen').removeClass('d-none');
		$('#velden_naam').addClass('d-none');
	});
	
	$( "input#persoonsgegevens2" ).on( "click", function() {
		$('#velden_naam, #velden_algemeen').removeClass('d-none');
		$('#velden_anoniem').addClass('d-none');
	});
	
	$( "input#persoonsgegevens3" ).on( "click", function() {
		$('#velden_naam, #velden_algemeen, #velden_anoniem').addClass('d-none');
	});
	
	$( "input[name='persoonsgegevens']" ).on( "click", function() {
		$('#step2_button_next').prop("disabled", false);
	});
	
	$( "#step2_button_next" ).on( "click", function() {	
		var theval = $(this).closest('.accordion-item').find('.form-check-input:checked').val();
		$(this).closest('.accordion-item').find('h5').text('2. Ik stuur ' + theval + ' persoonsgegevens mee');
	});
	
	// Stap 3
	$( "input[name='toestemming']" ).on( "click", function() {
		$('#step3_button_next').prop("disabled", false);
	});
	
	$( "#step3_button_next" ).on( "click", function() {	
		var theval = $(this).closest('.accordion-item').find('.form-check-input:checked').val();
		$(this).closest('.accordion-item').find('h5').text('3. ' + theval);
	});
	
	// Stap 4
	
	$( "#generateurl" ).on( "click", function() {	
		$(this).hide();
	});
	
	
}