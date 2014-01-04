$(document).ready(function() {
	/*$('#filtro ul').hide(); 
	$('#filtro > li > a').on('click', function() {
		$('#filtro ul').slideUp();
		$(this).next().slideDown();
	});*/
	/*$('#filtro > ul > li:has(ul)').addClass("has-sub");
	$('#filtro > ul > li > a').click(function() {

        var checkElement = $(this).next();

        $('#filtro li').removeClass('active');
        $(this).closest('li').addClass('active');

        if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
            $(this).closest('li').removeClass('active');
            checkElement.slideUp('normal');
        }

        if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
            $('#filtro ul ul:visible').slideUp('normal');
            checkElement.slideDown('normal');
        }

        if (checkElement.is('ul')) {
            return false;
        } else {
            return true;
        }
    });*/

    $('.dropdown-menu input, .dropdown-menu label').click(function(e) {
        e.stopPropagation();
    });
});