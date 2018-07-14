var $j = jQuery.noConflict();

// NEW VARIABLE FOR JQUERY

$j('.nutrition-desc-container').hide();


$j('.search-form').click(function(){
    $j('.search-form').toggleClass('search-active');
});

$j('.menu-toggle').click(function(){
    $j('.menu-main-menu-container').toggle();
    $j('.search-form').toggle();
    console.log($j('.menu'));

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

// if($j('.menu-toggle').css('display') === 'none') {
//     $j('.menu').show();
// } 

// SUBSCRIPTION FUNCTION

$j('#subscription-form').submit(function(event) {
    event.preventDefault();

    var eMail = $j('#email-input');

    0 !== eMail.val().length ? (alert('Thanks for subscribing!'),
    eMail.val('')) : alert('Please submit an email address.')
      
 });
 

// EXPEDITIONS FUNCTION (show/hide expedition excerpt)

$j('.name-wrapper').click(function() {
    $j(this).children('.expedition-description').slideToggle('fast');
});
