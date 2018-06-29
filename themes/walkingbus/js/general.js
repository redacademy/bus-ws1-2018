var $j = jQuery.noConflict();

// NEW VARIABLE FOR JQUERY

$j('.menu').hide();
$j('.search-form').hide();
$j('.nutrition-desc-container').hide();

$j('.search-form').click(function(){
    $j('.search-form').toggleClass('search-active');
});

$j('.menu-toggle').click(function(){
    $j('.menu').toggle('slow');
    $j('.search-form').slideToggle('slow');
});

$j('.angle1').click(function() {
    $j('.container1').slideToggle('slow');
});

$j('.angle2').click(function() {
    $j('.container2').slideToggle('slow');
});

$j('.angle3').click(function() {
    $j('.container3').slideToggle('slow');
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
