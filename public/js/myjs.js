$(document).ready(function(){
    // Sidebar
    $('.ui.left.sidebar').sidebar({
        transition: 'push'
    });
    $('.ui.left.sidebar').sidebar('attach events', '.open.button');
    // Dropdown
    $('.ui.dropdown').dropdown({
        on: 'hover'
    });
    // Rating
    $('.ui.rating').rating('setting', 'clearable', true);
    // Modal
    $('.coupled.modal').modal({
        allowMultiple: false
    });
    $('.first.modal').modal({
        blurring: 'true'
    }).modal('attach events', '.test.button', 'scale');
    $('.second.modal').modal({
        blurring: 'true'
    }).modal('attach events', '.first.modal .signup.link', 'scale');
    $('.ui.checkbox').checkbox();
    $('.special.cards .image').dimmer({
        on: 'hover'
    });

    $('.owl-carousel').owlCarousel({
        center: true,
        loop:true,
        margin:10,
        responsiveClass:true,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                center:false,
                items:1,
                nav:false,
                autoWidth: true
            },
            600:{
                items:3,
                nav:false
            },
            1000:{
                items:5,
                nav:false,
                loop:true
            }
        }
    })
})