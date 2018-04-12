var init = $(document).ready(function(){
	init = (function(init, $){
		$('.atividade__form').hide();
		
		$(".js-atividade--add").click(function(){
			$('.atividade__form').show();
		});

		$(".select-departamento").change(function(){
			$(".select-projeto").empty();
			var select = document.getElementById('select-projeto');
			var departamento_id = $("#select-departamento").val();

			$.ajax({ 
				url : '/get-departamento-projetos',
				method : "GET",
				dataType : 'json',
				data : {
					id : departamento_id	
				},
				success : function(data){
					$.each(data, function(key, val){
						option = document.createElement('option'); 
						option.value = val.id;
						option.text = val.nome;
						// console.log(option);
						select.add(option);

					});				
				}
			});
		});
		

		var setYears = (function(){
			var currentYear = (new Date()).getFullYear();
			$(".form__filtro--ano").empty();

			for(var i = currentYear; i >= 2018; i--)
			{
				console.log(i);
				var option = document.createElement('option');
				option.value = option.text = i;
				$(".form__filtro--ano")[0].add(option)
			}
		}());

		var setCurrentMonthOnForm = (function(){
			var month = (new Date()).getMonth();
			document.getElementById('form__filtro--mes').getElementsByTagName('option')[month].selected = 'selected'
		}());

		var setCurrentDate = (function(){			
			var currentYear = (new Date()).getFullYear();
			var currentMonth = ("0" + (new Date().getMonth() + 1)).slice(-2);
			var currentDay = ("0" + new Date().getDate()).slice(-2);

			var currentDate = currentYear + "-" + currentMonth + "-" + currentDay;

			$("#select-data").val(currentDate);

		}());

		return {
			setYears : setYears
		}
	}(init || {}, jQuery));

	return init;
});