// fader scroll
const faders = document.querySelectorAll('.fade-in');
const sliders = document.querySelectorAll('.slide-in');
const appearOptions = {
    threshold: 0,
};
const appearOnScroll = new IntersectionObserver(function (entries, appearOnScroll) {
    entries.forEach(entry => {
        if (!entry.isIntersecting) {
            return;
        } else {
            entry.target.classList.add('appear');
            appearOnScroll.unobserve(entry.target);
        }
    });
}, appearOptions);

faders.forEach(fader => {
    appearOnScroll.observe(fader)
});

sliders.forEach(slider => {
    appearOnScroll.observe(slider);
});

// active nav-link
var active = document.getElementById("nav-active");
var navLink = active.getElementsByClassName("nav-link");
for (var i = 0; i < navLink.length; i++) {
    navLink[i].addEventListener("click", function () {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
    });
}

// smooth scroll
$(document).ready(function () {
    // Add smooth scrolling to all links
    $("a").on('click', function (event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 1111, function () {

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        }
    });
});

// switch version
document.addEventListener('DOMContentLoaded', function () {
    const ver1 = document.getElementById('home-v1');
    const ver2 = document.getElementById('home-v2');
    const switchButton = document.getElementById('switchVersion');

    switchButton.addEventListener('change', function () {
        if (switchButton.checked) {
            ver1.style.display = 'none';
            ver2.style.display = 'block';
        } else {
            ver1.style.display = 'block';
            ver2.style.display = 'none';
        }
    });
});

// $(function() {

// 	var carouselInner = $('carousel-inner');
//     carouselInner.owlCarousel({
//         loop:false,
//         margin:0,
//         nav:false,
//         dots: false,
//         items: 1,
//         smartSpeed: 1000,
//         autoplay: false,
//         navText: ['<span class="icon-keyboard_arrow_left">', '<span class="icon-keyboard_arrow_right">']
//     });

//     var carousel_nav = $('.carousel-nav');

//     carousel_nav.each(function(slide_index){
//         var $this = $(this);
//         $this.attr('data-num', slide_index);
//         $this.click(function(e) {
//             carouselInner.trigger('to.carouselInner.carousel',[slide_index,1500]);
//             e.preventDefault();
//         })
//     })

//     carouselInner.on('changed.carouselInner.carousel', function(event) {
//         carousel_nav.removeClass('active');
//         $(".carousel-nav a[data-num="+event.item.index+"]").addClass('active');
//     })


// })
