/* navigation */
jQuery(function($){
    jQuery('#scr').click(function() {
        var srcId = jQuery(this).attr('id');
        $.scrollTo('.'+srcId, 1000);
    });
});


/* animate */
new WOW().init();


/* pop up */
$(function () {
    $('.popup-modal').magnificPopup({
        type: 'inline',
        preloader: false,
        focus: '#username',
        modal: true
    });
    $(document).on('click', '.popup-modal-dismiss', function (e) {
        e.preventDefault();
        $.magnificPopup.close();
    });
    
    
});


/* carousel */
$(document).ready(function() {
  
    var owl = $("#owl-demo");
    owl.owlCarousel({
            singleItem:true,
            navigation : true
    });
    owl.on("mousewheel", ".owl-wrapper", function (e) {
            if (e.deltaY > 0) {
                    owl.trigger("owl.prev");
            } else {
                    owl.trigger("owl.next");
            }
            e.preventDefault();
    });
    $(".next_button").click(function(){
            owl.trigger("owl.next");
    });
    $(".prev_button").click(function(){
            owl.trigger("owl.prev");
    });
    
    
 
});



