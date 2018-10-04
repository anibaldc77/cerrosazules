/*
* Modals - Advanced UI
*/
$(function() {
    $('.modal').modal();
	$('.modalfrm').modal();
    $('#modal3').modal('open');
    $('#modal3').modal('close');
	
		$("body").on("click", ".delete", function (e) {
		$(this).parent("div").remove();
	});			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
	
		$("body").on("click", ".add", function (e) {
			event.preventDefault();
			$("#items").append('<div class="input-field col l12 m12 s12"><span class="col l2 m2 s12"><input type="text" name="nombrein[]"></span><span class="col l2 m2 s12"><input type="text" name="input1[]"></span><span class="col l2 m2 s12"><input type="text" name="input2[]"></span><i class="delete adc adc-minus3 prefix pink-text text-darken-4"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="add adc adc-add prefix pink-text text-darken-4"></i></div>');
		});
		
  });