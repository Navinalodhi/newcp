$(document).ready(function(){

	'use strict';

	var imageInput = document.getElementById("image-input");
	var videoInput = document.getElementById("video-input");
	var pdfInput = document.getElementById("pdf-input");
	var items = document.querySelectorAll(".timeline li");


	$('input:file').change(function(){
		var id = $(this).attr('id');
		var parentId = $(this).parent().attr('id');

		var fileName = $(this).val().split('\\').pop();

		$(this).parent().css({"border-color":"green"});
		$('#'+parentId+' > .icon-disable').css({"display":"none"});
		$("#art_title").attr("value", fileName);

		//$(".img > .icon-disable").css({"display":"none"});
		
		var elements = $('.icon-set').not('#'+parentId);

		elements.each(function() {
    		// do something with `item` (or `this` is also `item` if you like)
    		$(this).children().first().css({"display":"block"});
		});	

		//$(".video > .icon-disable").css({"display":"block"});
		//$(".pdf > .icon-disable").css({"display":"block"});
	
	});
	//portfolio script is placed here

  	// check if an element is in viewport
	// http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
    function isElementInViewport(el) {
    	var rect = el.getBoundingClientRect();
    	return (
    	  rect.top >= 0 &&
    	  rect.left >= 0 &&
    	  rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
    	  rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    	);
	}

    function callbackFunc() {
       for (var i = 0; i < items.length; i++) {
       	  if (isElementInViewport(items[i])) {
            items[i].classList.add("in-view");
          }
        }
    }

    // listen for events
    window.addEventListener("load", callbackFunc);
    window.addEventListener("resize", callbackFunc);
    window.addEventListener("scroll", callbackFunc);

//portfolio script ends here.
	

});