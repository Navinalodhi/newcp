<?php
$page = 'article';
$postsize=count($post);
$linkview=$count-$pageno*16;
$pageno=$pageno+1;
?>
<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta name="keywords" content="">
		<meta name="description" content="Article description to make google serach access">
		<link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>assets/images/logo/favicon.png"/>
		<title>Article Website - Think,Smile,Explore your world.</title>
		
		<!--CSS files are linked here-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/main-sheet.css" >
 
		<!-- REVOLUTION BANNER CSS SETTINGS -->
		<!--<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">-->
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap-theme.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/revolution-slider.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/jssocials.css" />
    	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/jssocials-theme-flat.css" />
		<link href="https://fonts.googleapis.com/css?family=Lato|BioRhyme:300|Rubik|Open+Sans" rel="stylesheet">
	</head>

	<body class="art-works">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="header" >
					<nav class="navbar navbar-default">
						<div class="container-fluid">
						    <div class="navbar-header">
						    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>                        
								</button>
						      	<a class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/images/logo/colorpencil.png" alt="article-logo" /></a>
						    </div>
						    <div class="collapse navbar-collapse" id="myNavbar">
							
								<ul class="nav navbar-nav navbar-right">
									<li><a href="/">Home</a></li>
					  				<li><a href="https://imagiobox.com/aves">About Us</a></li>
					  				<li><a href="<?php echo base_url();?>Avesacademy_c/contactus">Contact Us</a></li>
					  				<li><a href="<?php echo base_url();?>Avesacademy_c/articlesearch/1">Explore</a></li>
					  				<?php
								if(!isset($_COOKIE['login'])) {
									?>
					  				<li><a href="<?php echo base_url();?>Avesacademy_c/login" id ="login" class="btn button-link rose-madder" role="button">Login</a></li>
					  				<?php
					  			}
					  			?>
					  			<?php
								if(isset($_COOKIE['login'])) {
									?>
				  			
									<li><a href="<?php echo base_url();?>app/dashboard/logout" id ="login" class="btn button-link rose-madder" role="button">Logout</a></li>
				  				<?php
				  			}
				  			?>
					  				
							    </ul>
							</div>
						</div>
					</nav>
				</div>
			</div>
			<div class="row">
				<div class="layout-nav">
						<div class="scrolling-tabs-container">
							<div class="fade-left">
								<i aria-hidden="true" class="fa fa-angle-left"></i>
							</div>
							<div class="fade-right">
								<i aria-hidden="true" class="fa fa-angle-right"></i>
							</div>
							<ul class="nav-links scrolling-tabs">
								<li class="home">
									<a title="all" href="#">
										<span>
										 All
										</span>
									</a>
								</li>

								<li class="active"><a title="Drawings" href="#">
									<span>
										 Drawings
									</span></a>
								</li>
								<li class=""><a title="Stories" href="#">
									<span>
										Stories
									</span></a>
								</li>
								<li class=""><a title="Short stories" href="#">
									<span>
										Short stories
									</span></a>
								</li>
								<li class=""><a title="Poems" href="#">
									<span>
										Poems
									</span></a>
								</li>
								<li class=""><a title="autobiography" href="#">
									<span>
										autobiography
									</span></a>
								</li>
								<li class=""><a title="Novels" href="#">
									<span>
										Novels
									</span></a>
								</li>
								<li class=""><a title="History" href="#">
									<span>
										History
									</span></a>
								</li>
							</ul>
						</div>
				</div>
				<div class="content-wrapper page-with-layout-nav">
					<div class="alert-wrapper">
						<div class="flash-container flash-container-page">
						</div>

					</div>
				</div>
			</div>
			<div class="row">
			
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id ="top-banner" >
					<div class="col-xs-8 col-xs-offset-2 margin-22">
		    			<div class="input-group">
                			<div class="input-group-btn search-panel">
                    			<button type="button" class="btn btn-default dropdown-toggle set-40 " data-toggle="dropdown">
                    			<span id="search_concept">Filter by</span> 
                    			<span class="caret"></span>
                    			</button>
                    			<ul class="dropdown-menu filterchange" id="search-drop" role="menu" >
                      				<li id="student"><a class="dropDown" href="student">Student Name</a></li>
                      				<li id="articletag"><a class="dropDown" href="articletag">Tag</a></li>
                      				<li id="article"><a class="dropDown" href="article">Article</a></li>
                      				<li id="teacher"><a class="dropDown" href="teacher">School Name</a></li>
                    			</ul>
                			</div>
                			
                			<input type="hidden" name="search_param" value="all" id="search_param">  
                			<div id="searchparamitem">       
                			<input type="text" class="form-control " id="searchitem" name="searchitem" placeholder="Search term...">
                			</div>
                			<span class="input-group-btn">
                    			<button class="btn btn-default set-40 promt-search" type="button"><span class="glyphicon glyphicon-search "></span></button>
                			</span>
                			
            			</div>
        			</div>
        			<div id="cardchange">
					<?php
			for($i=0;$i<$postsize;$i++)
			{
				?>
				
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3" >
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 single-article-box">
							<!--<div class="single-article-image">
								<img src="assets/images/article/single-article1.jpg" alt="top-category" />
								<div class="single-article-image-overlay">
								</div>
								<div class="share"></div>
							</div>-->
							
							<a href="<?php echo base_url('/index.php/Avesacademy_c/articledetail')."/".$post[$i]['article_id'];?>"><div class="category-card">
								<div class="category-image">
										<?php
										
											if($post[$i]['article_filetype']=='image')
											{
												
												?>
											<img src="<?php echo base_url("/upload/articleimage/".$post[$i]['article_file']);?>" alt="top-category" />
											<?php
											}
											else
											if($post[$i]['article_filetype']=='video')
											{
												
											?>
											<img src="<?php echo base_url("/upload/articleimage/videodefault.jpg");?>" alt="top-category" />
											<?php
											}
											else
											{
											?>
											<img src="<?php echo base_url("/upload/articleimage/pdfdefault.png");?>" alt="top-category" />
											<?php
											}
											?>
									<div class="category-image-overlay">
									</div>
									<!--<div class="popularity">
										<img src="assets/images/icons/like-dark.png" alt="thumbs-up" />77
									</div>-->
								</div>
								<div class="category-details">
									<div class="category-name">
									<?php echo $post[$i]['student_name']?>
									</div>
									<div class="like-btn">
										
										<img class="likeBtn" data-article-id="<?php echo $post[$i]['article_id'] ?>" src="<?php echo base_url();?>assets/images/icons/like-dark.png" alt="share" />
										<div class="like-count"><?php echo $post[$i]['article_like'];?></div>
									</div>
									
									
								</div>			
							</div></a>

							<!--
								<div class="single-article-details">
									<div class="profile-img">
										
									</div>
									
									
									<div class="share-btn">
										<img src="assets/images/icons/share-lite.png" alt="share" />
									</div>
								</div>
								!-->
						</div>
					</div>

					<?php
				}
				?>
				</div>
					
					
			</div>
		</div>

		
<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 footer" id="footer" >
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 footer-left">
						<img src="<?php echo base_url()?>assets/images/logo/colorpencil.png" alt="article-logo" />
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 categories">
						<h6>Aves academy</h6>
						<!--<ul>
							<li><a href="articles.html">Writings</a></li>
							<li><a href="articles.html">Drawings</a></li>
							<li><a href="articles.html">Biography</a></li>
							<li><a href="articles.html">History</a></li>
							<li><a href="articles.html">Novel</a></li>
							<li><a href="articles.html">Stories</a></li>
							<li><a href="articles.html">Short Stories</a></li>
						</ul>-->
					<p>Our Branches:</p>
						<p>Mumbai, Maharashtra</p>
 						<p>Kollam, Kerala</p>
						<p>E-mail:	info@imagiobox.com</p>
						<p>Phone: 7907713977</p>
						</p>
					</div>
					<!--<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 authors">
						<h6>Aves support</h6>
						<ul>
							<li><a href="">Contact Us</a></li>
							<li><a href="">Privacy & Policy</a></li>
							<li><a href="">About Us</a></li>
							<li><a href="">FeedBack</a></li>
							<li><a href="">Site map</a></li>
							<li><a href="">Need help</a></li>
						</ul>  
					</div>-->
					<div class="col-xs-12 col-sm-12 col-md-offset-3 col-lg-offset-3 col-xl-offset-3 col-md-3 col-lg-3 col-xl-3 social-links">
						<h6>Social Links</h6>
						<div class="facebook col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
							<a href="https://www.facebook.com/avesorganisation"><img src="<?php echo base_url()?>assets/images/icons/social/facebook-box.png" alt="facebook-icon" /></a>
						</div>
						<div class="twitter col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
							<a href="https://twitter.com/imagiobox"><img src="<?php echo base_url()?>assets/images/icons/social/twitter-box.png" alt="twitter-icon" /></a>
						</div>
						<div class="instagram col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
							<a href="https://instagram.com/avesorganisation"><img src="<?php echo base_url()?>assets/images/icons/social/instagram-box.png" alt="instagram-icon" /></a>
						</div>
						<div class="youtube col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
							<a href="https://youtube.com/channel/UCl8K-dvzQ1RtRG5V0e-AUEQ"><img src="<?php echo base_url()?>assets/images/icons/social/youtube-box.png" alt="youtube-icon" /></a>
						</div>
					</div>
				</div>
			</div>
		<!--Javascript files are linked here-->
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.12.0.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/responsiveslides.min.js"></script>
        <!--<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>-->
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/jscookie.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/main-script.js"></script>
        <!-- jQuery REVOLUTION Slider  -->
        <script src="<?php echo base_url();?>assets/js/jssocials.min.js"></script>
        <script>
$('.promt-search').on('keypress',function(e){
	
	if(e.which == 13) {
       
    
    ajax();
    
    
  }
  
    
});
</script>

<script >
function search()
{
	var filter=document.getElementById('search_param').value;
	var text=document.getElementById('searchitem').value;
	
	return [filter,text];
	
}
function isEmpty(val){
    return (val === undefined || val == null || val.length <= 0) ? true : false;
}

var timer = null;
$('#searchitem').keydown(function(){
       clearTimeout(timer); 
       timer = setTimeout(ajax, 300)
});

$('.dropDown').on('click',function(){
	//console.log($(this).attr('href'));
	document.getElementById('search_param').value = $(this).attr('href');
   ajax();
  	
});

$('.promt-search').on('click',function(){
	

    ajax();
  	
});

function ajax(){
	

    var result=search();
    var filterstatus=isEmpty(result[0]);
    var searchstatus=isEmpty(result[1]);
    if(filterstatus===false && result[0]!="all")
    {
    	var filtervalue=result[0];
    }
    else
    {
    	var filtervalue="student";
    }
    if(searchstatus===false)
    {
    	var searchvalue=result[1];
    	$.ajax({
 	 		method: "GET",
 	 		type: "GET",
 	 		url: "/Avesacademy_c/searchajax",
 	 		data: {search:searchvalue,filter:filtervalue},
 	 		
 	 		success:function(data){
 	 			
 	 			$('#cardchange').html(data);
 	 			$('.likeBtn').each(function(i, obj) {
    				checkIfLiked(this);
				}); 
 	 		},
 	 		error:function(data){
 	 			console.log(data);
 	 		}
 	 	});
    }
  	
}
</script>
</body>
</html>
