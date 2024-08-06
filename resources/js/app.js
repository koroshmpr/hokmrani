// require('./bootstrap');
import {
    Modal,
    // Tooltip,
    // Popover,
    // Carousel,
    // Collapse,
    // Dropdown,
    // Alert,
    // Button,
    // Tab,
    // Toast,
    // Scrollspy,
    // Offcanvas,
    // Alert as BSAlert
} from 'bootstrap';
import $ from 'jquery';
import 'swiper/css';
import Swiper from 'swiper/bundle';
import AOS from 'aos';
import 'aos/dist/aos.css';

document.addEventListener('DOMContentLoaded', function () {
    AOS.init();
    document.querySelectorAll('.course-btn').forEach(button => {
        button.addEventListener('click', function () {
            const targetValue = this.getAttribute('data-target');

            const selectElement = document.getElementById('input_2_9');
            for (let i = 0; i < selectElement.options.length; i++) {
                if (selectElement.options[i].value === targetValue) {
                    selectElement.selectedIndex = i;
                    break;
                }
            }

            selectElement.classList.add('bg-primary', 'bg-opacity-10');
            setTimeout(function () {
                selectElement.classList.remove('bg-primary', 'bg-opacity-10');
            }, 1000);
        selectElement.scrollIntoView({behavior: 'smooth', block: 'center'});
    });
});

let backToTop = document.getElementById("backToTop");
if (backToTop) {
    backToTop.addEventListener('click', backtoTopHandler)

    function backtoTopHandler() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }
}
const heroSlider = new Swiper('.hero_slider', {
    direction: 'horizontal',
    slidesPerView: 1,
    spaceBetween: 0,
    grabCursor: true,
    speed: 700,
    autoplay: {
        delay: 5000,
    },
    keyboard: {
        enabled: true,
        onlyInViewport: true, // Ensures the keyboard control only works when Swiper is in viewport
    },
    effect: 'slide',
    on: {
        init: function () {
            const slides = this.slides;

            // Initialize all slides
            slides.forEach((slide, index) => {
                let elementsWithAos = slide.querySelectorAll('[data-aos]');
                elementsWithAos.forEach((element) => {
                    if (index === this.realIndex) {
                        element.classList.add('aos-animate');
                    } else {
                        element.classList.remove('aos-animate');
                    }
                });
            });
        },
        slideChange: function () {
            const activeSlideIndex = this.realIndex;
            const slides = this.slides;

            // Handle slide change
            slides.forEach((slide, index) => {
                let elementsWithAos = slide.querySelectorAll('[data-aos]');
                elementsWithAos.forEach((element) => {
                    if (index === activeSlideIndex) {
                        element.classList.add('aos-animate');
                    } else {
                        element.classList.remove('aos-animate');
                    }
                });
            });
        }
    }

});
})
;