
// Hides navdropdown after click
$('.navbar-collapse a').click(function(){
    $(".navbar-collapse").collapse('hide');
});

// Enables smooth scrolling with offset
var topoffset = 50;

$('.navbar a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') === 
      this.pathname.replace(/^\//,'') && 
      location.hostname === this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top-topoffset+2
        }, 500);
        return false;
      }
    }
  });