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
 



// show team members bio

// $j('.member-picture').click(function() {
//     $j(this).children('.member-info').show('slow');


//     $j('.icon-wrapper').click(function() {
//         $j(this).parent('.member-info').hide('slow');
    
        
//     });
// });






// EXPEDITIONS FUNCTION (show/hide expedition excerpt) 
 


$j('.expedition-name').click(function() {

    $j(this).children('.expedition-info').slideToggle('slow');


});

//var expeditionName = $j(.children('h3')

 


$j('.alm-reveal').click(function() { 
    alert("The paragraph was clicked.");
    // $j(this).children(".li").children(".p").slideToggle('slow'); 

 
});

//Events Function 

$j('.event-name').click(function() {

    $j(this).children('.event-info').slideToggle('slow');


});


//shop image thumbnail switch
$j('.img-min').click(function() {	
  
var imgMin = $j(this).clone().append();

$j( '.main-image').html(imgMin);

});

// team carousel

// $j(function(){

//     $j('.carousel').slick({
//     slidesToShow: 2,
//     dots:true,
//     centerMode: true,
//     });
// });
$j(function(){
    $j('.team-type-carousel').slick({
        infinite: true, 
        slidesToShow: 2,
        slidesToScroll: 2, 
    });


      

$j(function() {
    $j('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: true,
        asNavFor: '.slider-nav',
        mobileFirst: true

      });
    });

});
 
$j(function() {
    $j('.slider-nav').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '.scholars',
        dots: true,
        centerMode: true,
        focusOnSelect: true,
        mobileFirst: true

    });
});

$j(function() {
    $j('.one-time').slick({
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true,
        asNavfor: '.slider-nav'
      });
});

// ****** LOAD MORE NEWS - IMPACT PAGE ****** //

$j('.loadmore-impact-btn').click(function() {
    $j('.text-area-news:nth-of-type(n+9)').slideToggle(500);
    $j('.text-area-news:nth-of-type(n+9)').css('display' , 'flex');
    $j('.loadmore-impact-btn').css('display' , 'none');
    $j('.hide-impact-btn').css('display' , 'flex');
    $j('.cfs-hyperlink span').css('display' , 'none');
});


$j('.hide-impact-btn').click(function() {
    $j('.text-area-news:nth-of-type(n+9)').slideToggle('slow');
    $j('.text-area-news:nth-of-type(n+9)').css('display' , 'none');
    $j('.loadmore-impact-btn').css('display' , 'flex');
    $j('.hide-impact-btn').css('display' , 'none');
});
