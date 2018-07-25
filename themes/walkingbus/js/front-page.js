var $j = jQuery.noConflict();

$j(function() {

    var isMovingTheBus = false;
    var moveTheBusToProgressFunction = function() {
        $j('#myProgress').off('appear', moveTheBusToProgressFunction);
        if(isMovingTheBus) {
            return;
        }
        isMovingTheBus = true;

        var elem = document.getElementById('progress-bar'); 
        if(!elem) {
            return;
        }

        var width = 1;
        var endProgress = elem.getAttribute('data-progress');

        setTimeout(function(){
            var id = setInterval(frame, 16);
            function frame() {
                if (width >= endProgress) {
                    $j('#progress-bar-text').show(200);
                    clearInterval(id);
                } else {
                    width++; 
                    elem.style.width = width + '%'; 
                }
            }
        }, 1000);
    }

    $j.appear('#myProgress');
    $j('#myProgress').on('appear', moveTheBusToProgressFunction);

    $j('.infographic-container').slick();

});
