/*---------------------------------------------------------
Theme Name: Mars | Multipurpose Parallax Error Pages
Theme URI: http://grapestheme.com/mars
Author: Grapestheme
Author URI: http://themeforest.net/user/Grapestheme
Description: Mars | Multipurpose Parallax Error Pages
Version: 0.1.1
License: ThemeForest Regular & Extended License
License URI: http://themeforest.net/licenses/regular-extended
---------------------------------------------------------*/
/*
  ---------------------------------------------------------
              ++++++ TABLE of CONTENTS ++++++
  ---------------------------------------------------------

1)    Basic JavaScript Setting
2)    JavaScript FUNCTION
3)    window.resize FUNCTION 
4)    window.scroll FUNCTION
5)    window.load FUNCTION
6)    document.ready FUNCTION

---------------------------------------------------------*/

/* ===================================
    Basic JavaScript Setting
====================================== */
(function($) {
    "use strict";

/* ===================================
    JavaScript FUNCTION
====================================== */

//CenterAlign FUNCTION  
function centerAlign() {
    //vertical aligning to center
    $.main = $('.main'),
    $.mainContent = $('.main_content'),
    $.contentMargin = ($(window).height() - $.mainContent.height()) / 2;
    $.main.css({height : $(window).height() + "px"});
    $.mainContent.css({"margin-top": $.contentMargin + "px"});
}

/* ===================================
    window.resize FUNCTION
====================================== */
$(window).resize(function(e) {
  	centerAlign();
});// End Window Resize

/* ===================================
    window.scroll FUNCTION
====================================== */
$(window).scroll(function(e) {
    // Code Here
});// End Window Scroll

/* ===================================
    window.load FUNCTION
====================================== */
$(window).load(function(e) {
    // Code Here
});// End Window Load


/* ===================================
    document.ready FUNCTION
====================================== */
$(document).ready(function(e) {

    centerAlign();

    //Parallax Setup
    $('#scene').parallax({
      scalarX: 10,
      scalarY: 10,
      frictionX: 0.1,
      frictionY: 0.1,
    });
    
});// End Ready


})(jQuery);