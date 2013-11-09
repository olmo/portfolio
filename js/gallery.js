$(document).ready(function() {
	calcularPrecio();

	/*$('.centerthumbs img').css({
			'height': '200px'
		});
	*/
	
	$("#related").carouFredSel({
        responsive: true,
        scroll  : 2,
        items: 4
    });
	
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
		var tam = 1;

		$("input[type=checkbox]:checked").each(function(){
			
			if($(this).parent().parent().find('.tamano').text().length>0){
				var ptrn = /[0-9]+\.[0-9][0-9]/mg;
				
				while ( ( match = ptrn.exec($(this).parent().parent().find('.tamano').text()) ) != null ){
				   tam *= parseFloat(match);
				}

				tam /= 10000;
                calcularPrecioMontajes(tam);
				
				sum += parseFloat($(this).parent().parent().find('.precio').text());
			}
			else
				sum += parseFloat($(this).parent().parent().find('.precio').text())*tam;
			
			if($(this).attr("name")=="tamanos[]")
				idtam = $(this).val();
			else if($(this).attr("name")=="montajes[]")
				idmon = $(this).val();
		});

		$("#total").html("<strong>"+sum.toFixed(2)+" €</strong>");
		$("#PedidoForm_precio").val(sum.toFixed(2));
		$("#PedidoForm_tamano").val(idtam);
		$("#PedidoForm_montaje").val(idmon);
	}

    function calcularPrecioMontajes(tam){
        $("#montajes > tbody > tr").each(function(){
            var ptrn = /[0-9]+\.[0-9][0-9]/mg;
            var precio = 0;

            while ( ( match = ptrn.exec($(this).find('.precio').text()) ) != null ){
                precio = parseFloat(match);
            }

            $(this).find('.precio2').text((precio*tam).toFixed(2)+" €");
        });
    }
});
