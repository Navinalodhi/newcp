/*javascript codes are here*/
$(document).ready(function(){
	$(function() {
		//$("#login").click(function(){

		//});
    	$(".rslides").responsiveSlides({
		  auto: true,             // Boolean: Animate automatically, true or false
		  speed: 500,            // Integer: Speed of the transition, in milliseconds
		  timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
		  pager: false,           // Boolean: Show pager, true or false
		  nav: true,             // Boolean: Show navigation, true or false
		  random: false,          // Boolean: Randomize the order of the slides, true or false
		  pause: false,           // Boolean: Pause on hover, true or false
		  pauseControls: true,    // Boolean: Pause when hovering controls, true or false
		  //prevText: "<<",   // String: Text for the "previous" button
		  //nextText: ">>",       // String: Text for the "next" button
		  maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
		  navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
		  manualControls: "",     // Selector: Declare custom pager navigation
		  namespace: "centered-btns",   // String: Change the default namespace used
		  before: function(){},   // Function: Before callback
		  after: function(){}     // Function: After callback
		});
  	});
  	//document.body.style.overflow = "hidden";
  	$(".share").jsSocials({
            shares: ["twitter", "facebook", "linkedin","whatsapp"]
    });
	$('#user_dob').datepicker({
        format: "dd/mm/yyyy"
    });
  	
});