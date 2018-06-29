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