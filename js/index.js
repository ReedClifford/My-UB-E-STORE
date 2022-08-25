// navbar
var nav = document.querySelector('nav');

window.addEventListener('scroll',function () {
    
    if (window.pageYOffset >60) {
        nav.classList.add('bg-dark','shadow');
        
    }else{
        nav.classList.remove('bg-dark','shadow')
    }
})





// merch carousel


$(document).ready(function(){

    $("#section3 .owl-carousel").owlCarousel({
        loop:true,
        nav:true,
        dots:true,
        responsive:{
            0:{
                merch:1
            },
            600:{
                merch:3
            },
            1000:{
                items:5
            }
        }
    });
    $("#section4 .owl-carousel").owlCarousel({
        loop:true,
        nav:true,
        dots:true,
        responsive:{
            0:{
                merch:1
            },
            600:{
                merch:3
            },
            1000:{
                items:4
            }
        }
    });
    $("#section5 .owl-carousel").owlCarousel({
        loop:true,
        nav:true,
        dots:true,
        responsive:{
            0:{
                merch:1
            },
            600:{
                merch:3
            },
            1000:{
                items:5
            }
        }
    });


    // isotope function
    var $grid =$(".grid").isotope({
        itemSelector:".grid-item",
        layoutMode:"fitRows"
    })


    // filter items on btn click
    $(".button-group").on("click","button",function () {
        var filterValue = $(this).attr("data-filter");
        $grid.isotope({filter:filterValue});
    })






});


// $(document).ready(function() {
//     $('#allbooks').DataTable();
//   });

