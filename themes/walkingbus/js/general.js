var $j = jQuery.noConflict();

// NEW VARIABLE FOR JQUERY

$j('.menu').hide();
$j('.search-form').hide();
$j('.nutrition-desc-container').hide(); 


$j('.search-form').click(function(){
    $j('.search-form').toggleClass('search-active');
});

$j('.menu-toggle').click(function(){
    $j('.menu').toggle('fast');
    $j('.search-form').slideToggle('fast');
});

$j('.angle1').click(function() {
    $j('.container1').slideToggle('fast');
});

$j('.angle2').click(function() {
    $j('.container2').slideToggle('fast');
});

$j('.angle3').click(function() {
    $j('.container3').slideToggle('fast');
});

$j('.angle4').click(function() {
    $j('.container4').slideToggle('fast');
});

$j('.angle5').click(function() {
    $j('.container5').slideToggle('fast');
});


// DESKTOP FUNCTIONS

if($j('.menu-toggle').css('display') === 'none') {
    $j('.menu').show();
} 

// SUBSCRIPTION FUNCTION

$j('#subscription-form').submit(function(event) {
    event.preventDefault();

    var eMail = $j('#email-input');

    0 !== eMail.val().length ? (alert('Thanks for subscribing!'),
    eMail.val('')) : alert('Please submit an email address.')
      
 });
 

// EXPEDITIONS FUNCTION (show/hide expedition excerpt) 



//team members 

$j('.member-picture').click(function() {
    $j(this).siblings('.member-info').show('slow');

    $j('.icon-wrapper').click(function() {
        $j(this).next('.member-info').hide('slow');
    
        
    });
});


$j('.expedition-name').click(function() {

    $j(this).next('.expedition-description').toggle('slow');


});



//Front Page

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

});

//  function move() {
//     var elem = document.getElementById('myBar'); 
//     if(!elem) {
//         return;
//     }

//     var width = 1;
//     var id = setInterval(frame, 10);
//     function frame() {
//         if (width >= elem.getAttribute('data-progress')) {
//             clearInterval(id);
//         } else {
//             width++; 
//             elem.style.width = width + '%'; 
//         }
//     }
// }
// setTimeout(move, 1000);
