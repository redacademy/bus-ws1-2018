var $j = jQuery.noConflict();

$j(function(){


$j('.load-more').on('click', function(e) {
    $j.ajax({
        method: 'GET',
        url: api_vars.rest_url + 'wp/v2/expedition' ,
        data:{
            // per_page:1, when line added, the same post is repeated
        },

        beforeSend: function (xhr) {
          xhr.setRequestHeader('X-WP-Nonce', api_vars.nonce);
        },



         success: function (data) {
             console.log(data);
             var i = [0];

         // $j.each(data function() {


            for (i = 0; i < data.length; i++) {

                var picture = data[i].featured_media;
                var name = data[i].title.rendered;
                var description = data[i].content.rendered;

                $j('.past-expeditions').append(picture);
                $j('.past-expeditions').append(name);
                $j('.past-expeditions').append(description);


              }
       // });


         },
        cache: false
      });
    });


  })







// Display more post 

// jQuery(function ($) {
//     $('.load-more').on('click', function (e) {
//       e.preventDefault();
//       $.ajax({
//         method: 'GET',
//         url: api_vars.rest_url + 'wp/v2/expedition',
  
//         beforeSend: function (xhr) {
//           xhr.setRequestHeader('X-WP-Nonce', api_vars.nonce);
//         },
  
//         success: function (data) {
         
  
//   console.log(data);  
  
     
          
//         var picture = data[1].featured_media;

//                         var name = data[data].title.rendered;
//                         var description = data[data].content.rendered;

                        
//                         $('.past-expeditions').append(picture);
//                             $('.past-expeditions').append(name);
//                             $('.past-expeditions').append(description); 
  
  
//         },
//         cache: true
//       });
//     });
  
  
  
  
  
//   })