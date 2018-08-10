/**
 * File navigation.js.
 *
 * Handles the mobile-menu on mobile devices
 */
(function() {
  const mobileMenu = $('#menu-mobile-menu');
  if(!mobileMenu) return;

  mobileMenu.children('li').hide();
  const menuButton = $('#menu-mobile-menu').firstChild;
  menuButton.show();
})();
