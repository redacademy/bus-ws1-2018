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

if($j('.site-name').css('display') === 'none') {
    $j('.menu').show();
} 

// SUBSCRIPTION FUNCTION

$j('#subscription-form').submit(function(event) {
    event.preventDefault();

    var eMail = $j('#email-input');

    0 !== eMail.val().length ? (alert('Thanks for subscribing!'),
    eMail.val('')) : alert('Please submit an email address.')
    
 });


 function move() {
    var elem = document.getElementById('myBar'); 
    var width = 1;
    var id = setInterval(frame, 10);
    function frame() {
        if (width >= elem.getAttribute('data-progress')) {
            clearInterval(id);
        } else {
            width++; 
            elem.style.width = width + '%'; 
        }
    }
}
setTimeout(move, 1000);