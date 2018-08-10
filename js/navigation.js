/**
 * File navigation.js.
 *
 * Handles the mobile-menu on mobile devices
 */
(function($) {
  
  $('.site-info').show();
  mobileNavInit();

  function mobileNavInit() {
    const mobileMenu = $('.main-navigation').find('.menu-mobile-menu-container');
    console.log('mobileMenu', mobileMenu);
    if(!mobileMenu.length) return;
    $('.site-info').hide();
    
    const menuArray = mobileMenu[0].children('li');
    const menuButton = menuArray.first();
    menuButton.addClass('mobile-menu-first');
    menuArray.not('.mobile-menu-first').addClass('mobile-menu-slide');
  
    toggleMobileMenu();
    menuButton.click(toggleMobileMenu);

    function toggleMobileMenu() {
      $('.mobile-menu-slide').slideToggle(1000);
      menuButton.show();
    }
  };
})(jQuery);
