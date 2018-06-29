var $j = jQuery.noConflict();

// NEW VARIABLE FOR JQUERY

$j('.menu').hide();
$j('.search-form').hide();

$j('.search-form').click(function(){
    $j('.search-form').toggleClass('search-active');
});

$j('.menu-toggle').click(function(){
    $j('.menu').toggle('slow');
    $j('.search-form').toggle('slow');
});




// DESKTOP FUNCTIONS

if($j('.site-name').css('display') === 'none') {
    $j('.menu').show();
}


$j('.subscription-container').on('submit', 'form', function(event) {
    event.preventDefault();

    var eMail = $('#email-input');

    0 !== eMail.val().length ? (alert('Thanks for subscribing!'),
    eMail.val('')) : alert('Please submit an email address.')
    
 });
