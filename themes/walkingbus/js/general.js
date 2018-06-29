var $j = jQuery.noConflict();

$j('.menu').hide();
$j('.search-form').hide();

$j('.menu-toggle').click(function(){

    $j('.menu').toggle('slow');
    $j('.search-form').toggle('slow');
});

$j('.subscription-container').on('submit', 'form', function(event) {
    event.preventDefault();

    var eMail = $('#email-input');

    0 !== eMail.val().length ? (alert('Thanks for subscribing!'),
    eMail.val('')) : alert('Please submit an email address.')
    
 });