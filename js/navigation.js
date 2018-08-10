/**
 * File navigation.js.
 *
 * Handles the mobile-menu on mobile devices
 */
(function($) {
  
  $('.site-info').show();
  console.log('show site info');
  mobileNavInit();

  function mobileNavInit() {
    const mobileMenu = $('#menu-mobile-menu');
    if(!mobileMenu) return;
    $('.site-info').hide();
    console.log('hide site info');

    const menuArray = mobileMenu.children('li');
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
