 
// datepicker
/* Bootstrap 5 JS included */
/* vanillajs-datepicker 1.1.4 JS included */

const getDatePickerTitle = elem => {
  // From the label or the aria-label
  const label = elem.nextElementSibling;
  let titleText = '';
  if (label && label.tagName === 'LABEL') {
    titleText = label.textContent;
  } else {
    titleText = elem.getAttribute('aria-label') || '';
  }
  return titleText;
}

const elems = document.querySelectorAll('.datepicker_input');
for (const elem of elems) {
  const datepicker = new Datepicker(elem, {
    'format': 'dd/mm/yyyy', // UK format
    title: getDatePickerTitle(elem)
  });
}
 
// profile JS

$('.profile-detail').click(function (e) {
  $(".profile-detail").toggleClass("rotale-icon");
  e.stopPropagation();
});
$(document).click(function () {
  $(".profile-detail").removeClass('rotale-icon');
  
  
});

// contact log js

$('body').on('click', '.logshow', function () {
  $('.contactlogs').addClass('shows');
});
$('body').on('click', '.closelog', function () {
  $('.contactlogs').removeClass('shows');
});

$('.logbtn').click(function () {
  $('.addlogs').show();
});
$('.btn-save').click(function () {
  $('.addlogs').hide();
});



// top bar dropdown JS
// end-vk-cb
$('.select-dropdown__button, .select-dropdown__list').on('click', function (e) {
  $(this).parentsUntil('li').find('ul').toggleClass('active');
  $(this).parents(".select-dropdown").toggleClass("selected");
  $(this).parents('li').siblings('li').find('div').removeClass('selected')
  $(this).parents('li').siblings('li').find('ul').removeClass('active')
  // $(this).parentsUntil('li').siblings('li').find('ul').removeClass('active')
  $(".profile-detail .dropdown__filter li").removeClass("active");
  e.stopPropagation();
});
$('.select-dropdown__list-item').on('click', function (e) {
  var itemValue = $(this).text();
  $(this).parents('ul').prev('.select-dropdown__button').find('span').text(itemValue)
  $(this).parents('ul').removeClass('active');
  $(this).parents(".select-dropdown").toggleClass("selected");
  e.stopPropagation();
});




$('.custom-tab li button').click(function () {
  $(this).addClass('active')
  $(this).parents('li').siblings('li').find('button').removeClass('active')
  var x = $(this).attr('data-bs-target');
  $('.tab-content').find("#" + x).removeClass('hide-tab').addClass('show-tab')
  $('.tab-content').find("#" + x).siblings('div').removeClass('show-tab').addClass('hide-tab')
})

// tabs js

jQuery(".grid-link").click(function () {
  $(".grid-view ").addClass('show-view');
  $(".grid-view ").removeClass('hide-view');
  $('.list-view').addClass('hide-view');
  $('.list-view').removeClass('show-view');
  $('.expired-list').addClass('hide-view');
  $('.expired-list').removeClass('show-view');
});
jQuery(".list-link").click(function () {
  $(".grid-view ").addClass('hide-view');
  $(".grid-view ").removeClass('show-view');
  $(".list-view").removeClass('hide-view');
  $('.list-view').addClass('show-view');
  $('.expired-list').addClass('hide-view');
  $('.expired-list').removeClass('show-view');
});
jQuery(".expiered-ticket").click(function () {
  $(".grid-view ").addClass('hide-view');
  $(".grid-view ").removeClass('show-view');
  $(".list-view").addClass('hide-view');
  $('.list-view').removeClass('show-view');
  $('.expired-list').removeClass('hide-view');
  $('.expired-list').addClass('show-view');
  $(".view-flt ul li a").removeClass("active");
});





jQuery("a.side-show-last").click(function () {
  $(this).next(".cstm-dropdown").slideToggle('normal');
});

$(document).click(function () {
  $(".select-dropdown__list").removeClass('active');
  $(".select-dropdown").removeClass("selected");
  $('.dropdown__filter').find('li').removeClass('active')
});

jQuery(".side-show-last").click(function () {
  jQuery(this).toggleClass("intro");

});


// $("ul.drop-list").slideToggle("slow");
jQuery(".toggle-wrap figure").click(function () {
  $("body").toggleClass("hide-sidebar");
});










// nav-active
jQuery(document).ready(function ($) {
  // Get current path and find target link
  var path = window.location.pathname.split("/").pop();
  // Account for home page with empty path
  if (path == '') {
    path = 'dashboard.html';
  }
  var target = $('.sidebar-list > li > a[href="' + path + '"]');
  var subtarget = $('.drop-list > li > a[href="' + path + '"]');
  // Add active class to target link
  target.addClass('active');
  subtarget.parents('li').find('a').addClass('active');
  $('.cstm-dropdown').find('.active').parents('.cstm-dropdown').addClass('active-drop');
});





// vk-cb
jQuery('.flex-sidemenu .circle').click(function () {
  jQuery(this).toggleClass('togle');
  jQuery('.side-menu').toggleClass('menu-small');
  jQuery('.top-bar').toggleClass('menu-small');
  jQuery('.content-wrap').toggleClass('menu-small');
});

$('.dropdown__filter-selected').on('click', function () {
  $(this).parents(".cards").toggleClass("cstm-zindex");
  $(this).parents('.cards').siblings('.cards').removeClass('cstm-zindex')

  $(this).next('li').toggleClass('active');
  $(this).parents('.cards').siblings('.cards').find('li').removeClass('active')

  $('.select-dropdown.custom-select').removeClass('selected')
  $('ul.select-dropdown__list').removeClass('active')
  // e.stopPropagation();
});
$('.dropdown__filter-selected').on('click', function () {


  $('.select-dropdown.custom-select').removeClass('selected')

  // e.stopPropagation();
});




document.addEventListener('DOMContentLoaded', function () {
  const gridButton = document.getElementById('gridButton');
  const listButton = document.getElementById('listButton');
  const itemsGrids = document.getElementsByClassName('grid-view')[0];
  const itemsLists = document.getElementsByClassName('list-view')[0];
  gridButton.classList.add('active');
  itemsGrids.classList.add('active');


  gridButton.addEventListener('click', function () {
    gridButton.classList.add('active');
    listButton.classList.remove('active');
    itemsGrids.classList.add('active');
    itemsLists.classList.remove('active');
  });

  listButton.addEventListener('click', function () {
    gridButton.classList.remove('active');
    listButton.classList.add('active');
    itemsGrids.classList.remove('active');
    itemsLists.classList.add('active');
  });
});