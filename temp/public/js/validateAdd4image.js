
			$.validator.setDefaults({
				submitHandler: function() {
					adding4image();
				}
			});

			$().ready(function() {
				// validate signup form on keyup and submit
				$("#add4imageForm").validate({
					rules: {
						 
					},
					messages: {
						inputName_es: "<span class='text-danger'>Introduce un nombre </span>",
						inputidpart: "<span class='text-danger'>Introduce un numero de parte</span>",
					}
				});
			});
		$("#callTrigger").click(function(){
		    $("#trigger").click(); 
		    return false;
		});

		//NOTE: REPLACE inputidpart 2