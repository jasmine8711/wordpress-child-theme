
var $animation_elements = jQuery('.image-slideIn');
var $window = jQuery(window);

function check_if_in_view() {
    var window_height = $window.height();
    var window_top_position = $window.scrollTop();
    var window_bottom_position = (window_top_position + window_height);

    jQuery.each($animation_elements, function () {
        var $element = jQuery(this);
        var element_height = $element.outerHeight();
        var element_top_position = $element.offset().top;
        var element_bottom_position = (element_top_position + element_height);

        //check to see if this current container is within viewport
        if ((element_bottom_position >= window_top_position) &&
            (element_top_position <= window_bottom_position)) {
            $element.addClass('animate__slideInRight ');
        } else {
            $element.removeClass('animate__slideInRight ');
        }
    });
}


var $animation_images = jQuery('.image-slide-up');

function check_view() {
    var window_height = $window.height();
    var window_top_position = $window.scrollTop();
    var window_bottom_position = (window_top_position + window_height);

    jQuery.each($animation_images, function () {
        var $element = jQuery(this);
        var element_height = $element.outerHeight();
        var element_top_position = $element.offset().top;
        var element_bottom_position = (element_top_position + element_height);

        //check to see if this current container is within viewport
        if ((element_bottom_position >= window_top_position) &&
            (element_top_position <= window_bottom_position)) {
            $element.addClass('animate__slideInUp ');
        } else {
            $element.removeClass('animate__slideInUp ');
        }
    });
}

/* for adding underline animation */
var $animation_text = jQuery('.animated-text');

function add_underline() {
    var window_height = $window.height();
    var window_top_position = $window.scrollTop();
    var window_bottom_position = (window_top_position + window_height);

    jQuery.each($animation_text, function () {
        var $element = jQuery(this);
        var element_height = $element.outerHeight();
        var element_top_position = $element.offset().top;
        var element_bottom_position = (element_top_position + element_height);

        //check to see if this current container is within viewport
        if ((element_bottom_position >= window_top_position) &&
            (element_top_position <= window_bottom_position)) {
            $element.addClass('underline');
        } else {
            $element.removeClass('underline ');
        }
    });
}


var $section = jQuery('.fade-in');
function fade_in() {
    var window_height = $window.height();
    var window_top_position = $window.scrollTop();
    var window_bottom_position = (window_top_position + window_height);

    jQuery.each($section, function () {
        var $element = jQuery(this);
        var element_height = $element.outerHeight();
        var element_top_position = $element.offset().top;
        var element_bottom_position = (element_top_position + element_height);

        //check to see if this current container is within viewport
        if ((element_bottom_position >= window_top_position) &&
            (element_top_position <= window_bottom_position)) {
            $element.addClass('animate__fadeInUp');
        } else {
            $element.removeClass('animate__fadeInUp');
        }
    });
}

$window.on('scroll resize', check_view);


$window.on('scroll resize', check_if_in_view);
$window.on('scroll resize', fade_in);
$window.on('scroll resize', add_underline);
$window.trigger('scroll');


/* about page */
document.addEventListener("mousemove", parallax);

function parallax(e) {
    this.querySelectorAll(".layer").forEach(layer => {
        const speed = layer.getAttribute('data-speed');
        const x = (window.innerWidth - e.pageX * speed) / 100;
        const y = (window.innerHeight - e.pageY * speed) / 100;

        layer.style.transform = `translateX(${x}px) translateY(${y}px)`
    })
}