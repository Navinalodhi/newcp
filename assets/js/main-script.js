/*javascript codes are here*/
$(document).ready(function(){
	$(function() {
		$("#login").click(function(){

		});
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
  	
    
    
  	
});

$(document).ready(function(e){
    $('.search-panel .dropdown-menu').find('a').click(function(e) {
		e.preventDefault();
		var param = $(this).attr("href").replace("#","");
		var concept = $(this).text();
		$('.search-panel span#search_concept').text(concept);
		$('.input-group #search_param').val(param);
	});
});


$(document.body).on('click', '.likeBtn',function(e){
	e.preventDefault();
    	console.log('clicked btn');
    	likeArticle(this);   	   	
    });
    
    var onGoing = 0;
    
    function likeArticle(element){
    		console.log('reached');
	    	var userLikes = Cookies.get('userLikes');
	    	var likes = [];
	    	var liked = 0;
	    	
	    	if(onGoing === 0){
		    	onGoing = 1;
		    	
		    	var articleId = $(element).data('article-id');
		    	
		    	if(userLikes){
		    	
		    	   likes = JSON.parse(userLikes);
		    	   if(jQuery.inArray(articleId, likes) >= 0){
		    	   	liked = 1;
		    	   }
		    	}
		    	
		    	if(liked == 0){
		    	
		    		$(element).attr("src","https://colorpencil.me/assets/images/icons/like-filled.png");
			    	    	
			    	    	var nextElement = $(element).parent().children(".like-count");
			    	    	
			    	    	if(nextElement){
			    	    		console.log('yesss');
			    	    		
			    	    		var currentVal = parseInt($(nextElement).text());
			    	    		$(nextElement).text(currentVal+1);
			    	    	}else{
			    	    		console.log('nooo');
			    	    	}
			    	    	
			    	$.ajax({
			    	    
			    	    url : "https://colorpencil.me/app/ajax/like",
			    	    method : "POST",
			    	    data :"id="+articleId,
			    	    
			    	    success:function(result){
			    	    	console.log('Liked');
			    	    	likes.push(articleId);
			    	    	Cookies.set('userLikes',JSON.stringify(likes));
			    	    	onGoing = 0;
			    	    	
			    	    }
			    	   
			    	});
			    	
			    	
		    	}else{
		    	
		    		$(element).attr("src","https://colorpencil.me/assets/images/icons/like-dark.png");
			    	    	var nextElement = $(element).parent().children(".like-count");
			    	    	
			    	    	if(nextElement){
			    	    		console.log('yesss');
			    	    		
			    	    		var currentVal = parseInt($(nextElement).text());
			    	    		$(nextElement).text(currentVal-1);
			    	    	}
			    	    	
		    		$.ajax({
			    	    
			    	    url : "https://colorpencil.me/app/ajax/unlike",
			    	    method : "POST",
			    	    data :"id="+articleId,
			    	    
			    	    success:function(result){
			    	    	console.log('Unliked');
			    	    	var index = likes.indexOf(articleId);
					likes.splice(index, 1);
			    	    	Cookies.set('userLikes',JSON.stringify(likes));
			    	    	onGoing = 0;
			    	    	
			    	    }
			    	   
			    	});
		    	}
	    	}
	 }
	 
	 
	 $('.likeBtn').each(function(i, obj) {
    	checkIfLiked(this);
	}); 

	 function checkIfLiked(id){
	 	var userLikes = Cookies.get('userLikes');
	    
	    	var articleId = $(id).data('article-id');
	    	
	    	if(userLikes){
	    	
	    	   likes = JSON.parse(userLikes);
	    	   if(jQuery.inArray(articleId, likes) >= 0){
	    	   	$(id).attr("src","https://colorpencil.me/assets/images/icons/like-filled.png");
	    	   }
	    	}
	 }
