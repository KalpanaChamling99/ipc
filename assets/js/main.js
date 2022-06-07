(function (e) {
    "use strict";
    var n = window.IPC_JS || {};
  // Min Height Calculation
  n.minHeight = function() {
    var windowHeight = e(window).height();
    var topbar     = e('.ipc-topbar-section').outerHeight();
    var contentMinHeight = windowHeight - topbar - 320;
    e(".ipc-min-height").css("minHeight",contentMinHeight);
  };
  // Mobile menu
  n.mobileMenu = function () {
    e("#nav-menu-icon").on("click",function(){
      e(".ipc-mobile-menu-section").addClass("show");
      e("#primary-nav-menu,#primary-menu").clone().appendTo(".ipc-mobile-menu-section");
      e("#overlay").toggleClass("show");
      e("body").css("overflow","hidden");
    });
    e("#mobile-close,#overlay").on("click",function(){
        e(".ipc-mobile-menu-section").removeClass("show");
        e(".ipc-mobile-menu-section #primary-nav-menu,.ipc-mobile-menu-section #primary-menu").remove();
        e("#overlay").toggleClass("show");
        e("body").css("overflow","visible");
    });
  },

  // Circulare progressbar
  n.progressBar = function () {
    var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    
    var scrolled = (winScroll / height) * 100;
    var stroke = ( 1 - scrolled / 100 ) * (2 * (22 / 7) * 40);

    e('.ipc-progress-percent').text(scrolled.toFixed()+'%');
    e('#progress-indicator').css('stroke-dashoffset',stroke);
    
  };
   // Sticky scroll to top
   n.stickyScrollToTop = function(){
    var navbar = document.getElementById("masthead");
    var navbarOffset = navbar.offsetTop + 30;
    if( window.pageYOffset > navbarOffset){
      e("#scroll-top").addClass("show");
    }else{
      e("#scroll-top").removeClass("show");
    }
  };
  n.scrollToTop = function() {
    e("#scroll-top").on("click",function(){
      e("html,body").animate({
        scrollTop: 0
      },1000);
      return false;
    });
  };

    
    e(document).ready(function () {
        n.minHeight();
        n.mobileMenu();
        n.scrollToTop();
    });
    e(window).scroll(function () {
      n.progressBar();
      n.stickyScrollToTop();
    });
    e(window).resize(function(){
      n.minHeight();
    });


})(jQuery);