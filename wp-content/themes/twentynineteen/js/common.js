$(function() {

    //  Timer
    // Set the date we're counting down to
    var countDownDate = new Date(2018, 9, 13, 12, 30, 0).getTime();

// Update the count down every 1 second
    var x = setInterval(function() {

        // Get todays date and time
        var now = new Date().getTime();
        var dayTimer = document.getElementById('days'),
            hoursTimer = document.getElementById('hours'),
            minutesTimer = document.getElementById('minutes'),
            secondsTimer = document.getElementById('seconds');


        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        var timerBlock;

        function addNull(timerBlock) {
            timerBlock = timerBlock >= 10 ? timerBlock : '0' + timerBlock;
            return timerBlock
        }

        days = addNull(days);
        hours = addNull(hours);
        minutes = addNull(minutes);
        seconds = addNull(seconds);

        // Display the result in the element with id="demo"
        $(dayTimer).text(days);
        $(hoursTimer).text(hours);
        $(minutesTimer).text(minutes);
        $(secondsTimer).text(seconds);

        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);


    var menuBlock = document.getElementsByClassName('head-menu');

    // Menu on Scroll
    $(window).scroll( function () {
        if ( $(document).scrollTop() > 100 ) {
            $(menuBlock).addClass('head-menu__active');
        } else {
            $(menuBlock).removeClass('head-menu__active');
        }
    });

    // Problem Slider PopUp
    $('.problems__slide').click( function () {

        if ( $(window).width() > 992 ) {

            var slideId = $(this).attr('id'),
                popupId = slideId + '-popup';

            $('.problems__swiper-slide_modal').each( function () {
                $(this).fadeOut();
            });

            $('#' + popupId).fadeIn();

          }
    });

    $('.problems__swiper-slide_modal_close').click( function () {
        $(this).parent().fadeOut();
    });

    // Platforms Popup
    $('.platforms__item').click( function () {
        $('.platforms__modal').each( function () {
            $(this).fadeOut(500);
        });

        $(this).children('.platforms__modal').fadeIn(500);
    });

    // Swipe slider
    var mySwiper = new Swiper ('.swiper-container', {
        // Optional parameters
        direction: 'horizontal',
        slidesPerView: 3,
        spaceBetween: 30,
        loop: true,
        navigation: {
            nextEl: '.first-swiper-btn-next',
            prevEl: '.first-swiper-btn-prevs'
        }
    });

    // Modules Modal
    $('.functional-modules__open-btn').click( function () {
        $('.functional-modules__modal').each( function () {
            $(this).removeClass('functional-modules__modal_active');
        });

        $(this).next('.functional-modules__modal').addClass('functional-modules__modal_active');
    });

    $('.functional-modules__modal_close-btn').click( function () {
        $(this).parent().parent().removeClass('functional-modules__modal_active');
    });

    // GreenSock
    setTimeout( function () {
        TweenMax.from(".header__content-logo-front", 2, {opacity:0, ease:RoughEase.ease.config({points:10, strength:2, clamp:true})});
        TweenMax.from(".header__content-logo", 2, {opacity:0, ease:RoughEase.ease.config({points:60, strength:6, clamp:true}), onComplete:function(){
                // TweenMax.from(".header__content-logo", 1, {opacity:0, ease:RoughEase.ease.config({points:5, strength:2, clamp:false}), repeat:-1});
            }});
    }, 1000);

    // Scroll Magic
    // $(function () { // wait for document ready
    //     // init
    //     var controller = new ScrollMagic.Controller({
    //         globalSceneOptions: {
    //             triggerHook: 'onLeave'
    //         }
    //     });
    //
    //     // get all slides
    //     var slides = document.querySelectorAll(".panel");
    //
    //     // create scene for every slide
    //     for (var i=0; i<slides.length; i++) {
    //         new ScrollMagic.Scene({
    //             triggerElement: slides[i]
    //         })
    //             .setPin(slides[i])
    //             .addIndicators() // add indicators (requires plugin)
    //             .addTo(controller);
    //     }
    // });

    // AOS
    AOS.init();

    var problemSwiper = new Swiper ('.problems__slider', {
        // Optional parameters
        direction: 'horizontal',
        slidesPerView: 4,
        simulateTouch: false,
        loop: true,
        navigation: {
            nextEl: '.problems__swiper-btn_next',
            prevEl: '.problems__swiper-btn_prev'
        }

        breakpoints: {
            // when window width is <= 992px
            992: {
              slidesPerView: 2,
              spaceBetween: 0
            },
        }



    });

    var newsSwiper = new Swiper ('.news__slider', {
        // Optional parameters
        direction: 'horizontal',
        slidesPerView: 4,
        watchOverflow: true,
        // loop: true,
        navigation: {
            nextEl: '.news__swiper-btn_next',
            prevEl: '.news__swiper-btn_prev'
        }
    });

    particlesJS('particles-js',
        {
            "particles": {
                "number": {
                    "value": 53,
                    "density": {
                        "enable": true,
                        "value_area": 800
                    }
                },
                "color": {
                    "value": "#ffffff"
                },
                "shape": {
                    "type": "circle",
                    "stroke": {
                        "width": 0,
                        "color": "#000000"
                    },
                    "polygon": {
                        "nb_sides": 4
                    },
                    "image": {
                        "src": "img/github.svg",
                        "width": 100,
                        "height": 100
                    }
                },
                "opacity": {
                    "value": 0.5,
                    "random": false,
                    "anim": {
                        "enable": false,
                        "speed": 1,
                        "opacity_min": 0.1,
                        "sync": false
                    }
                },
                "size": {
                    "value": 2,
                    "random": true,
                    "anim": {
                        "enable": false,
                        "speed": 7.308694910712106,
                        "size_min": 0.1,
                        "sync": false
                    }
                },
                "line_linked": {
                    "enable": true,
                    "distance": 240.5118091298284,
                    "color": "#ffffff",
                    "opacity": 0.2886141709557941,
                    "width": 0.5
                },
                "move": {
                    "enable": true,
                    "speed": 1.603412060865523,
                    "direction": "none",
                    "random": true,
                    "straight": false,
                    "out_mode": "out",
                    "bounce": false,
                    "attract": {
                        "enable": false,
                        "rotateX": 600,
                        "rotateY": 1200
                    }
                }
            },
            "interactivity": {
                "detect_on": "canvas",
                "events": {
                    "onhover": {
                        "enable": true,
                        "mode": "repulse"
                    },
                    "onclick": {
                        "enable": true,
                        "mode": "push"
                    },
                    "resize": true
                },
                "modes": {
                    "grab": {
                        "distance": 400,
                        "line_linked": {
                            "opacity": 1
                        }
                    },
                    "bubble": {
                        "distance": 400,
                        "size": 40,
                        "duration": 2,
                        "opacity": 8,
                        "speed": 3
                    },
                    "repulse": {
                        "distance": 200,
                        "duration": 0.4
                    },
                    "push": {
                        "particles_nb": 4
                    },
                    "remove": {
                        "particles_nb": 2
                    }
                }
            },
            "retina_detect": true
        });


    particlesJS('particles-js-star',
        {
            "particles": {
                "number": {
                    "value": 130,
                    "density": {
                        "enable": true,
                        "value_area": 800
                    }
                },
                "color": {
                    "value": "#ffffff"
                },
                "shape": {
                    "type": "circle",
                    "stroke": {
                        "width": 0,
                        "color": "#000000"
                    },
                    "polygon": {
                        "nb_sides": 3
                    },
                    "image": {
                        "src": "img/github.svg",
                        "width": 100,
                        "height": 100
                    }
                },
                "opacity": {
                    "value": 0.5,
                    "random": false,
                    "anim": {
                        "enable": false,
                        "speed": 1,
                        "opacity_min": 0.1,
                        "sync": false
                    }
                },
                "size": {
                    "value": 1,
                    "random": true,
                    "anim": {
                        "enable": false,
                        "speed": 40,
                        "size_min": 0.1,
                        "sync": false
                    }
                },
                "line_linked": {
                    "enable": true,
                    "distance": 0,
                    "color": "#ffffff",
                    "opacity": 0.4,
                    "width": 1
                },
                "move": {
                    "enable": true,
                    "speed": 0.5,
                    "direction": "none",
                    "random": false,
                    "straight": false,
                    "out_mode": "out",
                    "bounce": false,
                    "attract": {
                        "enable": false,
                        "rotateX": 600,
                        "rotateY": 1200
                    }
                }
            },
            "interactivity": {
                "detect_on": "canvas",
                "events": {
                    "onhover": {
                        "enable": true,
                        "mode": "repulse"
                    },
                    "onclick": {
                        "enable": true,
                        "mode": "push"
                    },
                    "resize": true
                },
                "modes": {
                    "grab": {
                        "distance": 700,
                        "line_linked": {
                            "opacity": 1
                        }
                    },
                    "bubble": {
                        "distance": 400,
                        "size": 40,
                        "duration": 1,
                        "opacity": 8,
                        "speed": 1
                    },
                    "repulse": {
                        "distance": 200,
                        "duration": 0.4
                    },
                    "push": {
                        "particles_nb": 4
                    },
                    "remove": {
                        "particles_nb": 2
                    }
                }
            },
            "retina_detect": true
        }
        );

    particlesJS('particles-js-about1',
        {
            "particles": {
                "number": {
                    "value": 4,
                    "density": {
                        "enable": true,
                        "value_area": 50
                    }
                },
                "color": {
                    "value": "#989898"
                },
                "shape": {
                    "type": "circle",
                    "stroke": {
                        "width": 0,
                        "color": "#000000"
                    },
                    "polygon": {
                        "nb_sides": 5
                    },
                    "image": {
                        "src": "img/github.svg",
                        "width": 100,
                        "height": 100
                    }
                },
                "opacity": {
                    "value": 0.5,
                    "random": false,
                    "anim": {
                        "enable": false,
                        "speed": 1,
                        "opacity_min": 0.1,
                        "sync": false
                    }
                },
                "size": {
                    "value": 7.891476416322726,
                    "random": true,
                    "anim": {
                        "enable": false,
                        "speed": 1,
                        "size_min": 0.1,
                        "sync": false
                    }
                },
                "line_linked": {
                    "enable": true,
                    "distance": 150,
                    "color": "#000000",
                    "opacity": 0.4,
                    "width": 1
                },
                "move": {
                    "enable": true,
                    "speed": 1,
                    "direction": "none",
                    "random": false,
                    "straight": false,
                    "out_mode": "bounce",
                    "bounce": false,
                    "attract": {
                        "enable": false,
                        "rotateX": 600,
                        "rotateY": 1200
                    }
                }
            },
            "interactivity": {
                "detect_on": "canvas",
                "events": {
                    "onhover": {
                        "enable": true,
                        "mode": "repulse"
                    },
                    "onclick": {
                        "enable": true,
                        "mode": "push"
                    },
                    "resize": true
                },
                "modes": {
                    "grab": {
                        "distance": 4,
                        "line_linked": {
                            "opacity": 1
                        }
                    },
                    "bubble": {
                        "distance": 4,
                        "size": 40,
                        "duration": 2,
                        "opacity": 8,
                        "speed": 3
                    },
                    "repulse": {
                        "distance": 2,
                        "duration": 0.4
                    },
                    "push": {
                        "particles_nb": 4
                    },
                    "remove": {
                        "particles_nb": 2
                    }
                }
            },
            "retina_detect": true
        }
    );

    particlesJS('particles-js-about2',
        {
            "particles": {
                "number": {
                    "value": 7,
                    "density": {
                        "enable": true,
                        "value_area": 50
                    }
                },
                "color": {
                    "value": "#989898"
                },
                "shape": {
                    "type": "circle",
                    "stroke": {
                        "width": 0,
                        "color": "#000000"
                    },
                    "polygon": {
                        "nb_sides": 5
                    },
                    "image": {
                        "src": "img/github.svg",
                        "width": 100,
                        "height": 100
                    }
                },
                "opacity": {
                    "value": 0.5,
                    "random": false,
                    "anim": {
                        "enable": false,
                        "speed": 1,
                        "opacity_min": 0.1,
                        "sync": false
                    }
                },
                "size": {
                    "value": 7.891476416322726,
                    "random": true,
                    "anim": {
                        "enable": false,
                        "speed": 1,
                        "size_min": 0.1,
                        "sync": false
                    }
                },
                "line_linked": {
                    "enable": true,
                    "distance": 150,
                    "color": "#000000",
                    "opacity": 0.4,
                    "width": 1
                },
                "move": {
                    "enable": true,
                    "speed": 1,
                    "direction": "none",
                    "random": false,
                    "straight": false,
                    "out_mode": "bounce",
                    "bounce": false,
                    "attract": {
                        "enable": false,
                        "rotateX": 600,
                        "rotateY": 1200
                    }
                }
            },
            "interactivity": {
                "detect_on": "canvas",
                "events": {
                    "onhover": {
                        "enable": true,
                        "mode": "repulse"
                    },
                    "onclick": {
                        "enable": true,
                        "mode": "push"
                    },
                    "resize": true
                },
                "modes": {
                    "grab": {
                        "distance": 4,
                        "line_linked": {
                            "opacity": 1
                        }
                    },
                    "bubble": {
                        "distance": 4,
                        "size": 40,
                        "duration": 2,
                        "opacity": 8,
                        "speed": 3
                    },
                    "repulse": {
                        "distance": 2,
                        "duration": 0.4
                    },
                    "push": {
                        "particles_nb": 4
                    },
                    "remove": {
                        "particles_nb": 2
                    }
                }
            },
            "retina_detect": true
        }
    );


    particlesJS('particles-js-about3',
        {
            "particles": {
                "number": {
                    "value": 7,
                    "density": {
                        "enable": true,
                        "value_area": 50
                    }
                },
                "color": {
                    "value": "#989898"
                },
                "shape": {
                    "type": "circle",
                    "stroke": {
                        "width": 0,
                        "color": "#000000"
                    },
                    "polygon": {
                        "nb_sides": 5
                    },
                    "image": {
                        "src": "img/github.svg",
                        "width": 100,
                        "height": 100
                    }
                },
                "opacity": {
                    "value": 0.2,
                    "random": false,
                    "anim": {
                        "enable": false,
                        "speed": 1,
                        "opacity_min": 0.1,
                        "sync": false
                    }
                },
                "size": {
                    "value": 7.891476416322726,
                    "random": true,
                    "anim": {
                        "enable": false,
                        "speed": 1,
                        "size_min": 0.1,
                        "sync": false
                    }
                },
                "line_linked": {
                    "enable": true,
                    "distance": 150,
                    "color": "#000000",
                    "opacity": 0.2,
                    "width": 1
                },
                "move": {
                    "enable": true,
                    "speed": 1,
                    "direction": "none",
                    "random": false,
                    "straight": false,
                    "out_mode": "bounce",
                    "bounce": false,
                    "attract": {
                        "enable": false,
                        "rotateX": 600,
                        "rotateY": 1200
                    }
                }
            },
            "interactivity": {
                "detect_on": "canvas",
                "events": {
                    "onhover": {
                        "enable": true,
                        "mode": "repulse"
                    },
                    "onclick": {
                        "enable": true,
                        "mode": "push"
                    },
                    "resize": true
                },
                "modes": {
                    "grab": {
                        "distance": 4,
                        "line_linked": {
                            "opacity": 1
                        }
                    },
                    "bubble": {
                        "distance": 4,
                        "size": 40,
                        "duration": 2,
                        "opacity": 8,
                        "speed": 3
                    },
                    "repulse": {
                        "distance": 2,
                        "duration": 0.4
                    },
                    "push": {
                        "particles_nb": 4
                    },
                    "remove": {
                        "particles_nb": 2
                    }
                }
            },
            "retina_detect": true
        }
    );
});

