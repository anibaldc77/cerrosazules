<?php
	switch ($validaFormulario){

						CASE "formHojaRutaG":

			?>
            <script type="text/javascript">

				$('.datepicker').pickadate({
				  // An integer (positive/negative) sets it relative to today.
			//	  min: -15,
				  // `true` sets it to today. `false` removes any limits.
			//	  max: true,
					closeOnSelect: true,
					closeOnClear: true
				})

				$("#formgrabahojaruta").validate({
					rules: {
						idarea:{
							required: true
						},
						fecha:{
							required: true
						},
						responsable:{
							required: true
						},
						
						maneja: {
							required: true
						},

						kminicio: {
							required: true
						},

						kmfin: {
							required: true
						},
					combustibleinicio: {
							required: true
						},	
						combustiblefin:{
							required: true
						},
						/*
						kmservice: {
							required: true,
							digits: true
						},
						kmactual: {
							required: true,
							digits: true
						},		
						fechabaja:{
							required: "#baja:checked"
						},	*/	
	
					},

				
					//For custom messages
					errorElement : 'div',
					errorPlacement: function(error, element) {
					  var placement = $(element).data('error');
					  if (placement) {
						$(placement).append(error)
					  } else {
						error.insertAfter(element);
					  }
					}
				 });
				
				
				</script>
        	<?php
		break;	
			
			CASE "formPersona":
		?>

            <script type="text/javascript">
			    $('#cuit').formatter({
          			pattern: '{{99}}-{{99999999}}-{{9}}',
          			persistent: true
       			 });

				 
				$("#formValidate").validate({
					rules: {	
						
						legajo: {
							required: true,
							number: true
						},
						legajotango: {
							required: true,
							number: true
						},
						
						dni: {
							required: true,
							digits: true,
							minlength: 8
						},
						apellido: {
							required: true,
							letrasespacio: true,
							minlength: 3,
							maxlength: 50
						},
						nombre: {
							required: true,
							minlength: 3,
							letrasespacio: true,
							maxlength: 50
						},
						fnacimiento:{
							required: true,
							dateITA: true
						},
						cuit:{
							required: true,
							cuit: true
						},
						
						estadocivil: {
							required: true
						},
						
						sexo: {
							required: true
						},						
						mailinstitucional: {
							notEqualTo: "#emailParticular",
							mailgobierno: true,
							email: true
							
						},
						mailpropio: {
							notEqualTo: "#emailinstitucional",
							email: true
						},			
						
						fingreso:{
							required: true
						},
						direccion:{
							required: true
						},	
						departamento:{
							required: true
						},
						celular:{
							minlength: 9,
							required: true
						},						
						antiguedadant: {
							min: 0,
							max: 99
						},
						afjp:{
							maxlength: 50
						},
						sindicato:{
							maxlength: 50
						},		
						osocial:{
							maxlength: 50
						},		
						asignacionFamiliaDonde:{
							required: "#asignacionFamilia:checked"
						},
						
					},
					//For custom messages
					messages: {
						uname:{
							required: "Enter a username",
							minlength: "Enter at least 5 characters"
						},
						curl: "Enter your website",
					},
					errorElement : 'div',
					errorPlacement: function(error, element) {
					  var placement = $(element).data('error');
					  if (placement) {
						$(placement).append(error)
					  } else {
						error.insertAfter(element);
					  }
					}
				 });
				</script>
        <?php
		break;
	
	
		CASE "formFamilia":
		?>

            <script type="text/javascript">
			    $('#cuitF').formatter({
          			pattern: '{{99}}-{{99999999}}-{{9}}',
          			persistent: true
       			 });

				 
				$("#formValidateFamilia").validate({
					rules: {	
						
						relacion: {
							required: true
						},
						apellidoF: {
							required: true,
							letrasespacio: true,
							minlength: 3,
							maxlength: 50
						},
						nombreF: {
							required: true,
							minlength: 3,
							letrasespacio: true,
							maxlength: 50
						},
						fnacimientoF:{
							required: true,
							dateITA: true
						},
						cuitF:{
							required: true,
							cuit: true
						},

						
						sexoF: {
							required: true
						},						
						
						
					},
					//For custom messages
					messages: {
						uname:{
							required: "Enter a username",
							minlength: "Enter at least 5 characters"
						},
						curl: "Enter your website",

					},
					errorElement : 'div',
					errorPlacement: function(error, element) {
					  var placement = $(element).data('error');
					  if (placement) {
						$(placement).append(error)
					  } else {
						error.insertAfter(element);
					  }
					}
				 });
				</script>
        <?php
		break;	
	
		CASE "formCorrHorario":
		?>

            <script type="text/javascript">

				$('.datepicker').pickadate({
				  // An integer (positive/negative) sets it relative to today.
			//	  min: -15,
				  // `true` sets it to today. `false` removes any limits.
			//	  max: true,
					closeOnSelect: true,
					closeOnClear: true
				})

				$("#formCorrHorario").validate({
					rules: {	
						inicio:{
							required: true
						},
						iniciohora:{
							required: true,
							time:true
						},
						
						relacion: {
							required: true
						},

						tipocorreccion: {
							required: true
						},
						
					},
					//For custom messages
					errorElement : 'div',
					errorPlacement: function(error, element) {
					  var placement = $(element).data('error');
					  if (placement) {
						$(placement).append(error)
					  } else {
						error.insertAfter(element);
					  }
					}
				 });
				</script>
        <?php
		break;				

			CASE "formFeriado":
		?>

            <script type="text/javascript">

				$('.datepicker').pickadate({
				  // An integer (positive/negative) sets it relative to today.
			//	  min: -15,
				  // `true` sets it to today. `false` removes any limits.
			//	  max: true,
					closeOnSelect: true,
					closeOnClear: true
				})

				$("#formFeriado").validate({
					rules: {	
						inicio:{
							required: true
						},
						tipo:{
							required: true
						},
						iniciohora:{

							time:true
						},						
						
						observaciones: {
							required: true
						},

					
					},
					//For custom messages
					errorElement : 'div',
					errorPlacement: function(error, element) {
					  var placement = $(element).data('error');
					  if (placement) {
						$(placement).append(error)
					  } else {
						error.insertAfter(element);
					  }
					}
				 });
				</script>
        <?php
		break;	
			
			
	}

?>