// Easing
jQuery.easing.jswing=jQuery.easing.swing;jQuery.extend(jQuery.easing,{def:"easeOutQuad",swing:function(e,f,a,h,g){return jQuery.easing[jQuery.easing.def](e,f,a,h,g)},easeInQuad:function(e,f,a,h,g){return h*(f/=g)*f+a},easeOutQuad:function(e,f,a,h,g){return -h*(f/=g)*(f-2)+a},easeInOutQuad:function(e,f,a,h,g){if((f/=g/2)<1){return h/2*f*f+a}return -h/2*((--f)*(f-2)-1)+a},easeInCubic:function(e,f,a,h,g){return h*(f/=g)*f*f+a},easeOutCubic:function(e,f,a,h,g){return h*((f=f/g-1)*f*f+1)+a},easeInOutCubic:function(e,f,a,h,g){if((f/=g/2)<1){return h/2*f*f*f+a}return h/2*((f-=2)*f*f+2)+a},easeInQuart:function(e,f,a,h,g){return h*(f/=g)*f*f*f+a},easeOutQuart:function(e,f,a,h,g){return -h*((f=f/g-1)*f*f*f-1)+a},easeInOutQuart:function(e,f,a,h,g){if((f/=g/2)<1){return h/2*f*f*f*f+a}return -h/2*((f-=2)*f*f*f-2)+a},easeInQuint:function(e,f,a,h,g){return h*(f/=g)*f*f*f*f+a},easeOutQuint:function(e,f,a,h,g){return h*((f=f/g-1)*f*f*f*f+1)+a},easeInOutQuint:function(e,f,a,h,g){if((f/=g/2)<1){return h/2*f*f*f*f*f+a}return h/2*((f-=2)*f*f*f*f+2)+a},easeInSine:function(e,f,a,h,g){return -h*Math.cos(f/g*(Math.PI/2))+h+a},easeOutSine:function(e,f,a,h,g){return h*Math.sin(f/g*(Math.PI/2))+a},easeInOutSine:function(e,f,a,h,g){return -h/2*(Math.cos(Math.PI*f/g)-1)+a},easeInExpo:function(e,f,a,h,g){return(f==0)?a:h*Math.pow(2,10*(f/g-1))+a},easeOutExpo:function(e,f,a,h,g){return(f==g)?a+h:h*(-Math.pow(2,-10*f/g)+1)+a},easeInOutExpo:function(e,f,a,h,g){if(f==0){return a}if(f==g){return a+h}if((f/=g/2)<1){return h/2*Math.pow(2,10*(f-1))+a}return h/2*(-Math.pow(2,-10*--f)+2)+a},easeInCirc:function(e,f,a,h,g){return -h*(Math.sqrt(1-(f/=g)*f)-1)+a},easeOutCirc:function(e,f,a,h,g){return h*Math.sqrt(1-(f=f/g-1)*f)+a},easeInOutCirc:function(e,f,a,h,g){if((f/=g/2)<1){return -h/2*(Math.sqrt(1-f*f)-1)+a}return h/2*(Math.sqrt(1-(f-=2)*f)+1)+a},easeInElastic:function(f,h,e,l,k){var i=1.70158;var j=0;var g=l;if(h==0){return e}if((h/=k)==1){return e+l}if(!j){j=k*0.3}if(g<Math.abs(l)){g=l;var i=j/4}else{var i=j/(2*Math.PI)*Math.asin(l/g)}return -(g*Math.pow(2,10*(h-=1))*Math.sin((h*k-i)*(2*Math.PI)/j))+e},easeOutElastic:function(f,h,e,l,k){var i=1.70158;var j=0;var g=l;if(h==0){return e}if((h/=k)==1){return e+l}if(!j){j=k*0.3}if(g<Math.abs(l)){g=l;var i=j/4}else{var i=j/(2*Math.PI)*Math.asin(l/g)}return g*Math.pow(2,-10*h)*Math.sin((h*k-i)*(2*Math.PI)/j)+l+e},easeInOutElastic:function(f,h,e,l,k){var i=1.70158;var j=0;var g=l;if(h==0){return e}if((h/=k/2)==2){return e+l}if(!j){j=k*(0.3*1.5)}if(g<Math.abs(l)){g=l;var i=j/4}else{var i=j/(2*Math.PI)*Math.asin(l/g)}if(h<1){return -0.5*(g*Math.pow(2,10*(h-=1))*Math.sin((h*k-i)*(2*Math.PI)/j))+e}return g*Math.pow(2,-10*(h-=1))*Math.sin((h*k-i)*(2*Math.PI)/j)*0.5+l+e},easeInBack:function(e,f,a,i,h,g){if(g==undefined){g=1.70158}return i*(f/=h)*f*((g+1)*f-g)+a},easeOutBack:function(e,f,a,i,h,g){if(g==undefined){g=1.70158}return i*((f=f/h-1)*f*((g+1)*f+g)+1)+a},easeInOutBack:function(e,f,a,i,h,g){if(g==undefined){g=1.70158}if((f/=h/2)<1){return i/2*(f*f*(((g*=(1.525))+1)*f-g))+a}return i/2*((f-=2)*f*(((g*=(1.525))+1)*f+g)+2)+a},easeInBounce:function(e,f,a,h,g){return h-jQuery.easing.easeOutBounce(e,g-f,0,h,g)+a},easeOutBounce:function(e,f,a,h,g){if((f/=g)<(1/2.75)){return h*(7.5625*f*f)+a}else{if(f<(2/2.75)){return h*(7.5625*(f-=(1.5/2.75))*f+0.75)+a}else{if(f<(2.5/2.75)){return h*(7.5625*(f-=(2.25/2.75))*f+0.9375)+a}else{return h*(7.5625*(f-=(2.625/2.75))*f+0.984375)+a}}}},easeInOutBounce:function(e,f,a,h,g){if(f<g/2){return jQuery.easing.easeInBounce(e,f*2,0,h,g)*0.5+a}return jQuery.easing.easeOutBounce(e,f*2-g,0,h,g)*0.5+h*0.5+a}});

// Dropdown on hover
document.addEventListener('DOMContentLoaded', function () {
    const dropdowns = document.querySelectorAll('.dropdown');

    dropdowns.forEach(function (dropdown) {
        dropdown.addEventListener('mouseenter', function () {
            this.classList.add('show');
            this.querySelector('.dropdown-menu').classList.add('show');
        });

        dropdown.addEventListener('mouseleave', function () {
            this.classList.remove('show');
            this.querySelector('.dropdown-menu').classList.remove('show');
        });
    });
});


// Init AOS
if (window.AOS !== undefined) {
    AOS.init({
        duration: 1000,
        disable: () => window.matchMedia('(max-width: 575px)').matches,
        once: true
    });
}

// Sliders
const $homeSlider = $('[data-home-slider]');
const $slidesCount = $('[data-slides-count]');
const $currentSlideNum = $('[data-current-slide-num]');
$homeSlider.on('init', function (_, slick) {
    const currentSlideIndex = slick.currentSlide < 10 ? `0${slick.currentSlide + 1}` : slick.currentSlide + 1;
    const slidesCount = slick.$slides.length < 10 ? `0${slick.$slides.length}` : slick.$slides.length;

    $slidesCount.text(slidesCount);
    $currentSlideNum.text(currentSlideIndex);
});

$homeSlider.on('afterChange', function (_, _, currentSlide) {
    const currentSlideIndex = currentSlide < 10 ? `0${currentSlide + 1}` : currentSlide + 1;
    $currentSlideNum.text(currentSlideIndex);
});
$homeSlider.slick({
    prevArrow: $('[data-home-nav="prev"]'),
    nextArrow: $('[data-home-nav="next"]'),
    fade: true,
    autoplay: true,
});


// House Types Slider
const $houseTypesSlider = $('[data-house-types-slider]');
$houseTypesSlider.slick({
    autoplay: false,
    prevArrow: $('.house-types-slider-nav .arrow-prev'),
    nextArrow: $('.house-types-slider-nav .arrow-next'),
    infinite: false
});


// Images switcher
const dataWithControls = document.querySelectorAll('[data-with-controls]');
dataWithControls.forEach((item) => {
    function getState() {
        return item.getAttribute('data-state') ? JSON.parse(item.getAttribute('data-state')) : null;
    }

    function setState(newState) {
        const currentState = getState();
        const state = { ...currentState, ...newState };

        item.setAttribute('data-state', JSON.stringify(state));

        const event = new CustomEvent('stateChanged', { detail: { ...state } });
        item.dispatchEvent(event);
    }

    item.addEventListener('stateChanged', function (e) {
        const { type, part } = e.detail;
        const variants = JSON.parse(item.getAttribute('data-variants'));
        const imagePreview = item.querySelector('[data-img-preview]');
        imagePreview.src = variants[type][part];

        const sliderBtns = [...item.querySelectorAll('.control-btn')];
        sliderBtns.forEach((btn) => {
            btn.classList.remove('active');
        });

        item.querySelector(`[data-type="${type}"]`).classList.add('active');
        item.querySelector(`[data-part="${part}"]`).classList.add('active');
    });

    const variants = item.getAttribute('data-variants') ? JSON.parse(item.getAttribute('data-variants')) : null;
    const imagePreview = item.querySelector('[data-img-preview]');
    const state = getState();
    const sliderBtns = [...item.querySelectorAll('.control-btn')];

    if (state) {
        imagePreview.src = variants[state.type][state.part];

        item.querySelector(`[data-type="${state.type}"]`).classList.add('active');
        item.querySelector(`[data-part="${state.part}"]`).classList.add('active');

        sliderBtns.forEach((btn) => {
            btn.addEventListener('click', function () {
                const type = this.getAttribute('data-type');
                const part = this.getAttribute('data-part');

                if (type !== null) {
                    setState({ type });
                }
                if (part !== null) {
                    setState({ part });
                }
            });
        });
    }
});

// Scroll to
$(document).on('click', '.scrollTo', function (e) {
    e.preventDefault();

    const targetSelector = $(this).data('target');
    const $target = $(targetSelector);

    if (!$target.length) return;

    const headerHeight = $('header').outerHeight() || 0;

    $('html, body').stop().animate({
        scrollTop: $target.offset().top - headerHeight
    }, 800);
});
