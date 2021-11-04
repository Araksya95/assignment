import '../sass/styles.scss';
(function($) {
    const initSemiStickyHeader = function() {
        const scrollUp = 'scroll-up',
            scrollDown = 'scroll-down';
        let lastScroll = 0;

        window.addEventListener('scroll', function() {
            const body = document.body;
            let currentScroll = window.pageYOffset;

            if(currentScroll <= 0) {
                body.classList.remove(scrollUp);
                return false;
            }

            if(currentScroll > lastScroll && !body.classList.contains(scrollDown)) {
                // down
                body.classList.remove(scrollUp);
                body.classList.add(scrollDown);
            }
            else if(currentScroll < lastScroll && body.classList.contains(scrollDown)) {
                // up
                body.classList.remove(scrollDown);
                body.classList.add(scrollUp);
            }
            lastScroll = currentScroll;
        });
    };
    $(document).ready(function(){
        initSemiStickyHeader();

        $('.owl-carousel').owlCarousel({
            loop: false,
            dots: true,
            items: 1,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                }
            }
        })
        $('.hamburger').click(function(){
            if ($(this).hasClass("actv")){
                $(this).removeClass("actv");
                $('.main-nav').hide();
            }else{
                $(this).addClass("actv");
                $('.main-nav').show();
            }
        })
    })
})(jQuery);
