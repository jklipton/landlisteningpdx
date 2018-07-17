/*
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */

const links = $('.nav');
const prefix = [
  'webkitAnimationEnd',
  'animationend'
];

let isAnim = false;
let currentPage = null;

function checkMobile() {
  return window.screen.availWidth < 700 ? true : false;
};

function handleLinks(nextPage) {
  const landlisteningLink = {
    h2: 'Landlistening',
    target: 'landlistening',
    aria: 'About Landlistening'
  };

  const aboutLink = {
    h2: 'About Sarah',
    target: 'about',
    aria: 'About Sarah'
  };

  const testimonialsLink = {
    h2: 'Testimonials',
    target: 'testimonials',
    aria: 'Testimonals'
  };

  const contactLink = {
    h2: 'Contact',
    target: 'contact',
    aria: 'Contact Info'
  };

  let nav = {};
  nav.landlistening = ['empty', aboutLink, testimonialsLink, contactLink];
  nav.about = ['empty', testimonialsLink, landlisteningLink, contactLink];
  nav.testimonials = ['empty', landlisteningLink, aboutLink, contactLink];
  nav.contact = [landlisteningLink, null, null, 'empty'];

  renderLinks(links, nav[`${$(nextPage)[0].id}`]);
}

function renderLinks(links, array){
  for(let i = 0; i < array.length; i++) { 
    if(!array[i]) continue;
    if(array[i] === 'empty') {
      $(links[i]).addClass('hidden');
      continue;
    }
    $(links[i]).removeClass('hidden')
      .empty()
      .append(`<h2>${array[i].h2}</h2>`)
      .attr('target', array[i].target)
      .attr('aria-label', array[i].aria);
  }
}

function linkClicked(location, target) {
  if(isAnim) {
    return false;
  }

  isAnim = true;

  if(checkMobile()) location = 'mobile';
  const animations = setTransitions(location);
  const nextPage = $(`#${target}`);

  console.log(`Link Target = ${target} || Link Location = ${location} || Link Animation = ${animations}`);

  applyAnimations(nextPage, animations);
}

function resetClasses(next, current, classes) {
  pageView.isAnim = false;
  current.attr('class', classes[0]).removeClass('current-page');
  next.attr('class', classes[1]).addClass('current-page');
}

function setCurrentPage(page) {
  $('section[role="page"]').removeClass('current-page');
  page.addClass('current-page');
}

(function() {
	
  let linkTarget = null;
  let linkLoc = null;
  let linkTargetId = null;

  links.on('click', function(e) {
    pageView.currentPage = $('.current-page');
    const linkLoc = e.currentTarget.id;
    const linkTargetId = e.currentTarget.attributes.target.value;

    linkClicked(linkLoc, linkTargetId);
  });

})();

// (function() {
//   var container, button, menu, links, i, len;

//   container = document.getElementById('site-navigation');
//   if(! container) {
//     return;
//   } 

//   button = container.getElementsByTagName('button')[0];
//   if('undefined' === typeof button) {
//     return;
//   }

//   menu = container.getElementsByTagName('ul')[0];

//   // Hide menu toggle button if menu is empty and return early.
//   if('undefined' === typeof menu) {
//     button.style.display = 'none';
//     return;
//   }

//   menu.setAttribute('aria-expanded', 'false');
//   if(-1 === menu.className.indexOf('nav-menu')) {
//     menu.className += ' nav-menu';
//   }

//   button.onclick = function() {
//     if(-1 !== container.className.indexOf('toggled')) {
//       container.className = container.className.replace(' toggled', '');
//       button.setAttribute('aria-expanded', 'false');
//       menu.setAttribute('aria-expanded', 'false');
//     } else {
//       container.className += ' toggled';
//       button.setAttribute('aria-expanded', 'true');
//       menu.setAttribute('aria-expanded', 'true');
//     }
//   };

//   // Get all the link elements within the menu.
//   links    = menu.getElementsByTagName('a');

//   // Each time a menu link is focused or blurred, toggle focus.
//   for(i = 0, len = links.length; i < len; i++) {
//     links[i].addEventListener('focus', toggleFocus, true);
//     links[i].addEventListener('blur', toggleFocus, true);
//   }

//   /**
// 	 * Sets or removes .focus class on an element.
// 	 */
//   function toggleFocus() {
//     var self = this;

//     // Move up through the ancestors of the current link until we hit .nav-menu.
//     while(-1 === self.className.indexOf('nav-menu')) {

//       // On li elements toggle the class .focus.
//       if('li' === self.tagName.toLowerCase()) {
//         if(-1 !== self.className.indexOf('focus')) {
//           self.className = self.className.replace(' focus', '');
//         } else {
//           self.className += ' focus';
//         }
//       }

//       self = self.parentElement;
//     }
//   }

//   /**
// 	 * Toggles `focus` class to allow submenu access on tablets.
// 	 */
//   (function(container) {
//     var touchStartFn, i,
//       parentLink = container.querySelectorAll('.menu-item-has-children > a, .page_item_has_children > a');

//     if('ontouchstart' in window) {
//       touchStartFn = function(e) {
//         var menuItem = this.parentNode, i;

//         if(! menuItem.classList.contains('focus')) {
//           e.preventDefault();
//           for(i = 0; i < menuItem.parentNode.children.length; ++i) {
//             if(menuItem === menuItem.parentNode.children[i]) {
//               continue;
//             }
//             menuItem.parentNode.children[i].classList.remove('focus');
//           }
//           menuItem.classList.add('focus');
//         } else {
//           menuItem.classList.remove('focus');
//         }
//       };

//       for(i = 0; i < parentLink.length; ++i) {
//         parentLink[i].addEventListener('touchstart', touchStartFn, false);
//       }
//     }
//   }(container));
// })();

