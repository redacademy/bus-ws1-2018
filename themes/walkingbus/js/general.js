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

$j('.member-picture').click(function() {
    $j(this).siblings('.member-info').show('slow');

    $j('.icon-wrapper').click(function() {
        $j(this).parent('.member-info').hide('slow');
    
        
    });
});


// EXPEDITIONS FUNCTION (show/hide expedition excerpt) 
 


$j('.expedition-name').click(function() {

    $j(this).children('.expedition-info').slideToggle('slow');


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
        // dots:true, 
        slidesToShow: 2,
        slidesToScroll: 2, 
    });

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
    $j('.text-area-news:nth-of-type(n+9)').slideToggle('fast');
});

// ****** LOAD MORE CAROUSEL - IMPACT PAGE ****** //

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block"; 
  dots[slideIndex-1].className += " active";
}