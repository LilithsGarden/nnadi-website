import.meta.glob([
    '../fonts/**/*.ttf',
    '../fonts/**/*.woff',
    '../fonts/**/*.woff2',
]);
import './bootstrap';
import Swiper from 'swiper';
import 'swiper/css';
import 'swiper/css/pagination';

document.addEventListener('DOMContentLoaded', function() {
    const swiperContainer = document.querySelector('.swiper-container');
    if (swiperContainer) {
        const swiper = new Swiper('.swiper-container', {
            direction: 'vertical',
            loop: false,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            grabCursor: false,
            speed: 800,
            parallax: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            effect: 'slide',
            // Mousewheel configuration for smooth scrolling
            mousewheel: {
                invert: false,
                forceToAxis: true,
                sensitivity: 0.5,
                releaseOnEdges: true,  // Allow page scroll at edges
                eventsTarget: 'container',
            },
            keyboard: {
                enabled: true,
                onlyInViewport: true,
            },
            touchStartPreventDefault: true,
            touchMoveStopPropagation: true,
            allowTouchMove: false,
        });

        // Remove the wheel event preventDefault to allow page scroll
        // We're not preventing default anymore - this allows smooth page scroll

        // Handle scroll events on the container
        let isScrolling = false;
        swiperContainer.addEventListener('wheel', function(e) {
            // Only handle scroll if we're not at the edge
            if (swiper.isEnd && e.deltaY > 0) {
                // At the end, let page scroll
                return;
            }
            if (swiper.isBeginning && e.deltaY < 0) {
                // At the beginning, let page scroll
                return;
            }
            
            // Otherwise, navigate slides
            e.preventDefault();
            if (!isScrolling) {
                isScrolling = true;
                if (e.deltaY > 0) {
                    swiper.slideNext();
                } else if (e.deltaY < 0) {
                    swiper.slidePrev();
                }
                setTimeout(() => {
                    isScrolling = false;
                }, 800);
            }
        }, { passive: false });
    }
});