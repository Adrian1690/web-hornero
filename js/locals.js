$(document).ready(function(){

	$("#locals-wrapper").tosrus({
       autoplay   : {
          play       : false
       },
       slides     : {
          scale      : "fit"
       },
       effect : "slide",
       buttons    : false,
       pagination : {
          add     :   true
          
       }
    });

    $('#btn-map').click(function(){
    	$('#locals-wrapper').hide();
    	$('#locals-map').fadeIn();
    });

    $('#btn-gallery').click(function(){
    	$('#locals-map').hide();
    	$('#locals-wrapper').fadeIn();
    });

    /* $('.tos-pagination.tos-bullets a').click(function(){
        var father = $( $(this).parent() ).children();

        $.each(father, function(index, value) { 
            if( $(value).hasClass('tos-selected')) {
                console.log(index) 
                $('.infoevent').hide();
                $('#infoevent-' + index).fadeIn(1500);
            }
        });
    }); */
})