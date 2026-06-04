$(".toggle").click(function () {

    $(".toggle").toggleClass("closeMenu");

    $(".main-menu").toggleClass("show-menu");

});


document.addEventListener("DOMContentLoaded", () => {
  const body = document.querySelector("body");
  if (!body) return;

  window.addEventListener("scroll", () => {
    if (window.scrollY) {
      body.classList.add("headerSticky");
    } else {
      body.classList.remove("headerSticky");
    }
  });
});


// Submenu open js //

  $(".menu-item-has-children > a").each(function() {

    var $this = $(this);

    // Create the arrow icon and append it to the anchor tag

    var arrowIcon = $('<span class="dropdown-symbol ml-1"><i class="fa-solid fa-angle-down"></i></span>');

    $this.append(arrowIcon);

  });

  $(".menu-item-has-children > a").click(function(event) {

    var $target = $(event.target);

    if ($target.closest(".dropdown-symbol").length) {

      event.preventDefault();

      var subMenu = $(this).closest("li.menu-item").children("ul.sub-menu");

      $(this).toggleClass("dropdown-active");

      subMenu.slideToggle('fast');

    }

  });

  $(document).click(function(event) {

    if (!$(event.target).closest('.menu-item-has-children').length) {

      $(".menu-item-has-children > a").removeClass("dropdown-active");

      $(".menu-item-has-children ul.sub-menu").slideUp('fast');

    }

  });



// __JS FOR STICKY HEADER_

function stickyHeader() {

    const header = document.querySelector('header');



    window.addEventListener('scroll', () => {

        if (window.scrollY > 20) {

            header.classList.add('scrolled');

        } else {

            header.classList.remove('scrolled');

        }

    });

}

stickyHeader();



// Hm Service slider //

$('.hmservice-slider').owlCarousel({
    loop:true,
    margin:25,
    dots:true,
    dotsEach: 1,
    autoplay: true,
    autoplayTimeout: 3000,
    smartSpeed: 1000,
    fluidSpeed: 1000,
    dragEndSpeed: 1000,
    responsive:{
        0:{
            items:1
        },

        600:{
            items:2    
        },

        992:{
            mouseDrag:false,
            items:3,
        },
    }
})





$('.customer-feedback-slider').owlCarousel({
    loop:true,
    nav:false,
    dots:true,
    dotsEach: 1,
    autoplay: true,
    autoplayTimeout: 3000,
    margin:25,
    items:3,
    center:true,
    responsiveClass: true,
    smartSpeed: 400,
    onTranslated: function (event) {
        $('.owl-item').removeClass('group');
        $('.owl-item.center').addClass('group');
    },
    responsive:{
        0:{
            items:1
        },
        700:{
            items:1.5
        },
        1200:{
            items:1.5
        },
    }
});



$('.photo-gallery-slider').owlCarousel({
    loop: true,
    nav: false,
    dots: false,
    autoplay: true,
    autoplayHoverPause: false,
    autoplayTimeout: 2000,
    autoplaySpeed: 2000,
    center:true,
    margin:30,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2,
            margin:16,
        },
        992:{
            items:4,
            margin:16,
        },
        1200:{ 
            items:5,
            margin:16,
        }

    }
});


$('.team-section_slider').owlCarousel({
    loop:true,
    margin:30,
    dots:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2,
            margin:16,
        },
        992:{
            items:4,
            margin:16,
        }

    }
});



// 

$('.cleaning-plan_slider').owlCarousel({
    loop:false,
    margin:28,
	dots:true,
    dotsEach: 1,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2,
        },
        992:{
            items:3,
        },

    }

})

// Hm Blog slider //

$('.hmblog-slider').owlCarousel({

    loop:true,

    margin:30,

    dots:false,

    nav:true,

    navText: [

        '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="24" viewBox="0 0 32 24" fill="none"><path d="M0.93934 13.0607C0.353553 12.4749 0.353553 11.5251 0.93934 10.9393L10.4853 1.3934C11.0711 0.807614 12.0208 0.807614 12.6066 1.3934C13.1924 1.97919 13.1924 2.92893 12.6066 3.51472L4.12132 12L12.6066 20.4853C13.1924 21.0711 13.1924 22.0208 12.6066 22.6066C12.0208 23.1924 11.0711 23.1924 10.4853 22.6066L0.93934 13.0607ZM32 13.5L2 13.5L2 10.5L32 10.5L32 13.5Z" fill="#252525"/></svg>',

        '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="24" viewBox="0 0 32 24" fill="none"><path d="M31.0607 13.0607C31.6464 12.4749 31.6464 11.5251 31.0607 10.9393L21.5147 1.3934C20.9289 0.807614 19.9792 0.807614 19.3934 1.3934C18.8076 1.97919 18.8076 2.92893 19.3934 3.51472L27.8787 12L19.3934 20.4853C18.8076 21.0711 18.8076 22.0208 19.3934 22.6066C19.9792 23.1924 20.9289 23.1924 21.5147 22.6066L31.0607 13.0607ZM-1.31134e-07 13.5L30 13.5L30 10.5L1.31134e-07 10.5L-1.31134e-07 13.5Z" fill="#252525"/></svg>'

    ],

    responsive:{

        0:{

            items:1

        },

        600:{

            items:2

        },

        992:{

            mouseDrag:false,

            items:3,

        },

    }

})





// How Work slider //

$('.how-work-slider').owlCarousel({

    loop:true,

    margin:30,

    dots:false,

    nav:true,

    navText: [

        '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="24" viewBox="0 0 32 24" fill="none"><path d="M0.93934 13.0607C0.353553 12.4749 0.353553 11.5251 0.93934 10.9393L10.4853 1.3934C11.0711 0.807614 12.0208 0.807614 12.6066 1.3934C13.1924 1.97919 13.1924 2.92893 12.6066 3.51472L4.12132 12L12.6066 20.4853C13.1924 21.0711 13.1924 22.0208 12.6066 22.6066C12.0208 23.1924 11.0711 23.1924 10.4853 22.6066L0.93934 13.0607ZM32 13.5L2 13.5L2 10.5L32 10.5L32 13.5Z" fill="#252525"/></svg>',

        '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="24" viewBox="0 0 32 24" fill="none"><path d="M31.0607 13.0607C31.6464 12.4749 31.6464 11.5251 31.0607 10.9393L21.5147 1.3934C20.9289 0.807614 19.9792 0.807614 19.3934 1.3934C18.8076 1.97919 18.8076 2.92893 19.3934 3.51472L27.8787 12L19.3934 20.4853C18.8076 21.0711 18.8076 22.0208 19.3934 22.6066C19.9792 23.1924 20.9289 23.1924 21.5147 22.6066L31.0607 13.0607ZM-1.31134e-07 13.5L30 13.5L30 10.5L1.31134e-07 10.5L-1.31134e-07 13.5Z" fill="#252525"/></svg>'

    ],

    responsive:{

        0:{

            items:1

        },

        600:{

            items:2

        },

        992:{

            mouseDrag:false,

            items:3,

        },

    }

})



// Before After slider //
$('.image-comparison_slider').owlCarousel({
    loop:true,
    margin:25,
    dots:true,
    mouseDrag:false,
    responsive:{
        0:{
            items:1,
            touchDrag:false
        },
        576:{
            items:2
        },
        992:{
            items:3,
        },

    }

})


// Before After Start //

document.querySelectorAll('[data-component="image-comparison-slider"]').forEach(imageComparisonSlider => {

        

        function setSliderState(e, element) {

            const sliderRange = element.querySelector('[data-image-comparison-range]');



            if (e.type === 'input') {

                sliderRange.classList.add('image-comparison__range--active');

                return;

            }



            sliderRange.classList.remove('image-comparison__range--active');

            element.removeEventListener('mousemove', moveSliderThumb);

        }







        function moveSliderRange(e, element) {

            const value = e.target.value;

            const slider = element.querySelector('[data-image-comparison-slider]');

            const imageWrapperOverlay = element.querySelector('[data-image-comparison-overlay]');



            slider.style.left = `${value}%`;

            imageWrapperOverlay.style.width = `${value}%`;



            element.addEventListener('mousemove', e => moveSliderThumb(e, element));

            setSliderState(e, element);

        }



        function init(element) {

            const sliderRange = element.querySelector('[data-image-comparison-range]');



            if (!('ontouchstart' in window)) {

                sliderRange.addEventListener('mouseup', e => setSliderState(e, element));

                sliderRange.addEventListener('mousedown', e => moveSliderThumb(e, element));

            }



            sliderRange.addEventListener('input', e => moveSliderRange(e, element));

            sliderRange.addEventListener('change', e => moveSliderRange(e, element));

        }



        init(imageComparisonSlider);

});

//Counter number animation
var counted = 0;
$(window).scroll(function () {
  var oTop = $('#counter').offset().top - window.innerHeight;
  if (counted == 0 && $(window).scrollTop() > oTop) {
    $('.count').each(function () {
      var $this = $(this);
      var countTo = $this.data('count');
      var suffix = '';

      var originalText = $this.text();
      var numberMatch = originalText.match(/[\d\.]+/);
      var suffixMatch = originalText.match(/[^\d\.]+/);

      if (suffixMatch) {
        suffix = suffixMatch[0];
      }

      $({ countNum: parseFloat(numberMatch) }).animate(
        { countNum: parseFloat(countTo) },
        {
          duration: 2000,
          easing: 'swing',
          step: function () {
            $this.text(Math.floor(this.countNum) + suffix);
          },
          complete: function () {
            $this.text(this.countNum + suffix);
          }
        }
      );
    });
    counted = 1;
  }
});