// // //load more button test 
//  //Displays all the post but without pictures 

// var $j = jQuery.noConflict();

// $j(function () {



//     function load_posts() {
        
//         $j.ajax({
//             method: 'GET',
//             //dataType: "html",
//             url: api_vars.rest_url + 'wp/v2/expedition',
//            data:{
//                   posts_per_page:1, // when line added, the same post is repeated
//                },
 
//             beforeSend: function (xhr) {
//                 xhr.setRequestHeader('X-WP-Nonce', api_vars.nonce);
//             },
//             success: function (data) {
//                 var $data = $j(data);
//                 var i=[];

//                 for (i = 0; i < data.length; ++i) {
//                 if ($data.length) {
//                     console.log(data);
//                     console.log(data.length);

                   
                  
//                         var name = data[i].title.rendered;
//                         var description = data[i].content.rendered;
                  


//                         $j('.past-expeditions').append(name);
//                         $j('.more-expedition-description').append(description);
//                     }
//                 else {
                   
//                       $j('.load-more').hide();
                      
//                 }

//             }

//             },

//         });
//         return false;
//     }




//     $j('.load-more').on('click', function () { // When btn is pressed.

//         load_posts();
//     });


// });