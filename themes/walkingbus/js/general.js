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


// Front Page

$j(function (){

    function moveBus() {

        var $myBar = $j('#progress-bar'); 
        if(!$myBar) {
            return;
        }
        var progress = $myBar.attr('data-progress');
        $j('#progress-bar-text').show();

        var width = 1;
        var id = setInterval(frame, 16);
        function frame() {
            if (width >= progress) {
                clearInterval(id);
            } else {
                width++; 
                $myBar.width(width + '%'); 
            }
        }
    }
    setTimeout(moveBus, 1000);

});

