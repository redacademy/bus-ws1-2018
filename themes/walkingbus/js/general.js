var $j = jQuery.noConflict();

$j('.menu').hide();
$j('.search-form').hide();

$j('.menu-toggle').click(function(){

    $j('.menu').toggle('slow');
    $j('.search-form').toggle('slow');
});

console.log("jquery working");