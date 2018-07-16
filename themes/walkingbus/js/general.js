var $j = jQuery.noConflict();

// NEW VARIABLE FOR JQUERY
console.log("file loaded");
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
 



//team members 

$j('.member-picture').click(function() {
    $j(this).siblings('.member-info').show('slow');

    $j('.icon-wrapper').click(function() {
        $j(this).next('.member-info').hide('slow');
    
        
    });
});


// EXPEDITIONS FUNCTION (show/hide expedition excerpt) 

$j('.expedition-name').click(function() {

    $j(this).next('.expedition-description').toggle('slow');


});

