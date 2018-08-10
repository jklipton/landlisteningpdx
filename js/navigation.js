/**
 * File navigation.js.
 *
 * Handles the mobile-menu on mobile devices
 */
(function($) {
  console.log('navigation test running', $);
  const mobileMenu = $('#menu-mobile-menu');
  if(!mobileMenu) return;

  mobileMenu.children('li').hide();
  const menuButton = $('#menu-mobile-menu').firstChild;
  menuButton.show();
})(jQuery);
