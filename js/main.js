// function selectPlan(plan) {
//     // Mettre à jour le champ "Objet"
//     document.getElementById('subject').value = 'Plan choisi: ' + plan;

//     // Afficher le formulaire de contact
//     document.getElementById('contact-form-section').style.display = 'block';

//     // Défilement fluide vers le formulaire
//     $('html, body').animate({
//         scrollTop: $('#contact-form-section').offset().top - 45
//     }, 1500, 'easeInOutExpo');
// }
(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 45) {
            $('.navbar').addClass('sticky-top shadow-sm');
        } else {
            $('.navbar').removeClass('sticky-top shadow-sm');
        }
    });


    // Smooth scrolling on the navbar links
    $(".navbar-nav a").on('click', function (event) {
        if (this.hash !== "") {
            event.preventDefault();
            
            $('html, body').animate({
                scrollTop: $(this.hash).offset().top - 45
            }, 1500, 'easeInOutExpo');
            
            if ($(this).parents('.navbar-nav').length) {
                $('.navbar-nav .active').removeClass('active');
                $(this).closest('a').addClass('active');
            }
        }
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });


    // Screenshot carousel
    $(".screenshot-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        loop: true,
        dots: true,
        items: 1
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        loop: true,
        center: true,
        dots: false,
        nav: true,
        navText : [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>'
        ],
        responsive: {
            0:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });
    $(document).ready(function() {
        $('#submitBtn').on('click', function(event) {
            event.preventDefault(); // Empêcher le rechargement de la page
    
            // Récupérer les données du formulaire
            var formData = {
                name: $('#name').val(),
                email: $('#email').val(),
                subject: $('#subject').val(),
                message: $('#message').val()
            };
          // Soumettre le formulaire avec AJAX
        $.ajax({
            type: 'POST',
            url: 'traitement.php', // Chemin vers ton fichier de traitement
            data: formData,
            success: function(response) {
                // Gérer la réponse du serveur
                alert(response); // Affiche le message de succès ou d'erreur
                $('#contactForm')[0].reset(); // Réinitialiser le formulaire
            },
            error: function() {
                alert('Une erreur est survenue. Veuillez réessayer.');
            }
        });
    });
});
 
})(jQuery);


