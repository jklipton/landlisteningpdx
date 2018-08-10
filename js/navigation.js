/**
 * File navigation.js.
 *
 * Handles the mobile-menu on mobile devices
 */
(function($) {
  console.log('navigation test running', $);
  const mobileMenu = $('#menu-mobile-menu');
  if(!mobileMenu) return;

  const menuArray = mobileMenu.children('li');
  const menuButton = menuArray.first();
  
  toggleMobileMenu();
  menuButton.click(toggleMobileMenu);

  function toggleMobileMenu() {
    menuArray.toggle();
    menuButton.show();
  }
})(jQuery);
