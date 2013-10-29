$(document).ready(function() {
	calcularPrecio();

	/*$('.centerthumbs img').css({
			'height': '200px'
		});
	*/
	
	$("#related").carouFredSel();
	
	$("input[type=checkbox]").change(function(){
		var group = "input:checkbox[name='"+$(this).prop("name")+"']";
		$(group).prop("checked",false);
		$(this).prop("checked",true);
		calcularPrecio();
	});

	function calcularPrecio(){
		var sum = 0;
		var idtam = -1;
		var idmon = -1;

		$("input[type=checkbox]:checked").each(function(){
			sum += parseFloat($(this).parent().parent().find('.precio').text());
			
			if($(this).attr("name")=="tamanos[]")
				idtam = $(this).val();
			else if($(this).attr("name")=="montajes[]")
				idmon = $(this).val();
		});

		$("#total").html("<strong>"+sum+" €</strong>");
		$("#PedidoForm_precio").val(sum);
		$("#PedidoForm_tamano").val(idtam);
		$("#PedidoForm_montaje").val(idmon);
	}
});
