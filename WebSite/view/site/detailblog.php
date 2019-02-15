<!DOCTYPE html>
<html>
<head>
	<title>Blog</title>
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- 	<script src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
	<!-- Fotorama -->
	<link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.5.2/fotorama.css" rel="stylesheet">
	<script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.5.2/fotorama.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="../CSS/pages.css" />
</head>
<body>
	<header>
    <div class="topbar">
      <div class="container-fluid">
        <div class="topbar-left">
          <ul class="st-list socials">
            <li>
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-instagram"></i></a>
            </li>
          </ul>
          <ul class="st-list topbar-items">
            <li class="hidden-xs hidden-sm">
              <a href="mailto:contact@shinetheme.com" target="">contact@shinetheme.com</a>
            </li>
          </ul>
        </div>
        <div class="topbar-right">
					<ul class="st-list topbar-items">
						<li><a href="#">Login</a></li>
						<li><a href="#">Sign up</a></li>
						<li class="dropdown dropdown-currency hidden-sm hidden-xs">
							<a class="drop " href="#">EUR<i class="fa fa-angle-down"></i></a>
							<ul class="dropmenu dropdown-currency">
								<li><a href="#">USD</a></li>
								<li><a href="#">AUD</a></li>
							</ul>
						</li>
						<li class="dropdown dropdown-language hidden-sm hidden-xs">
							<a class="drop" href="#">English<i class="fa fa-angle-down"></i></a>
							<ul class="dropmenu">
								<li><a href="https://homap.travelerwp.com/fr/">Français</a></li>
								<li><a href="https://homap.travelerwp.com/fr/">Français</a></li>
							</ul>
						</li>
					</ul>
				</div>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="head1">
      <div class="container">
        <div class="toggle">
          <i class="fa fa-bars menu1"></i>
        </div>
        <div class="header1left">
          <img src="https://travelhotel.wpengine.com/wp-content/uploads/2018/11/logo_homap-4.svg">
          <div class="menu">
            <nav id="st-main-menu" >
              <a href="#" class="back-menu"><i class="fa fa-angle-left"></i></a>
              <ul id="main-menu">
                <li><a href="../HTML/HomePage.html">HOME</a></li>
                <li><a href="#">LISTING<i class="fa fa-angle-down"></i></a>
                  <ul class="sub-menu">
                    <li><a href="">Full Map Layout</a></li>
                    <li><a href="#">Half Map Layout</a></li>
                    <li><a href="../HTML/slidebar.html">Slidebar Layout</a></li>
                  </ul>
                </li>
                <li><a href="#">HOTEL<i class="fa fa-angle-down"></i></a>
                  <ul class="sub-menu">
                    <li><a href="../HTML/detailhotel1.html">Hotel Detail 1</a></li>
                    <li><a href="#">Hotel Detail 2</a></li>
                    <li><a href="#">Hotel Detail 3</a></li>
                    <li><a href="../HTML/roomdetail1.html">Room Detail</a></li>
                  </ul>
                </li>
                <li><a href="#">HOUSE<i class="fa fa-angle-down"></i></a>
                  <ul class="sub-menu">
                    <li><a href="#">House Detail 1</a></li>
                    <li><a href="#">House Detail 2</a></li>
                  </ul>
                </li>
                <li><a href="#">PAGES<i class="fa fa-angle-down"></i></a>
                  <ul class="sub-menu">
                    <li><a href="../HTML/aboutus.html">About Us</a></li>
                    <li><a href="../HTML/blog1.html">Blog</a></li>
                    <li><a href="#">404 Page</a></li>
                  </ul>
                </li>
                <li><a href="../HTML/Contact.html">Contact</a></li>
              </ul>
            </nav>
            <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script type="text/javascript"> 
    $(document).ready(function(){
    	 $(".btn").on("click",function() {
    $(".input").toggleClass("inclicked");
    $(".btn").toggleClass("close");
  });
       $("li").click(function(event) {
         $('.fa.fa-angle-down').toggleClass('daonguoc');
         t = $(this);
         t.parent().find('ul.sub-menu').slideToggle();
       });
     
       $('.menu1').click(function(){
       $("nav").toggleClass('open'); 
       });
       $('.fa.fa-angle-left').click(function(){
          var t = $(this);

     t.parent().find('ul').next().slideToggle();
       $("nav").removeClass('open'); });


//        $('li.dropdown.dropdown-currency').click(function(){
//     	$('ul.dropmenu.dropdown-currency').toggleClass('open2');

// });
//        // $('.fa.fa-angle-down').click(function(){
//        // 	$('ul.dropmenu.dropdown-currency').css('display','none');
//        // }
     })
  </script>
  </script>
          </div>
        </div>
        <div class="header1right">
          <form action="" method="get" class="header-search hidden-sm">
            <input type="text" class="form-control" name="s" value="">
            <i class="fa fa-search"></i>
          </form>
          <i class="fa fa-cart-plus"></i>
        </div>
      </div>
    </div>
  </header>

	<div class="main-content">
		<div class="banner1">
			<div class="container">
				<h1>Blog</h1>
			</div>
		</div>
		<div class="st-breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul>
						<li class="hiddenn">Home</li>
						<li class="hiddenn active">Blog</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="st-blog">
			<div class="row">
				<div class="col-sm-9 col-xs-12">
					<div class="content">
						<div class="blog-wrapper">
							<div class="article">
								<div class="header">
									<header class="post-header">
										<a href="#" class="hover-img">
											<img width="830" height="500" src="https://homap.travelerwp.com/wp-content/uploads/2018/11/los_angeles_3-870x500.jpg" alt="" class="attachment">
										</a>
									</header>
									<div class="cate">
										<a style="background: #f9ca24" href="#">Parks and Carnivals</a>
									</div>
								</div>
								<div class="post-inner">
									<h4 class="post-title">
										<a href="#" class="text-darken">Pure Luxe in Punta Mita</a>

									</h4>
									<div class="meta">
										<ul>
											
											<li>Nov 30, 2018</li>
											<li><a href="#">1 COMMENT</a></li>
										</ul>
									</div>
									<div class="post-description">
										<p>On the Insert tab, the galleries include items that are designed to coordinate with the overall look of your document. You can use these galleries to insert tables, headers, footers, lists, cover pages, and other document building blocks. When you create pictures, charts, or diagrams, they also coordinate with your current document look. You can […]</p>
										<p>You can easily change the formatting of selected text in the document text by choosing a look for the selected text from the Quick Styles gallery on the Home tab. You can also format text directly by using the other controls on the Home tab. Most controls offer a choice of using the look from the current theme or using a format that you specify directly.</p>
										<p>To change the overall look of your document, choose new Theme elements on the Page Layout tab. To change the looks available in the Quick Style gallery, use the Change Current Quick Style Set command. Both the Themes gallery and the Quick Styles gallery provide reset commands so that you can always restore the look of your document to the original contained in your current template.</p>
										<p>On the Insert tab, the galleries include items that are designed to coordinate with the overall look of your document. You can use these galleries to insert tables, headers, footers, lists, cover pages, and other document building blocks. When you create pictures, charts, or diagrams, they also coordinate with your current document look.</p>
										<p>You can easily change the formatting of selected text in the document text by choosing a look for the selected text from the Quick Styles gallery on the Home tab. You can also format text directly by using the other controls on the Home tab. Most controls offer a choice of using the look from the current theme or using a format that you specify directly.</p>
										<p>To change the overall look of your document, choose new Theme elements on the Page Layout tab. To change the looks available in the Quick Style gallery, use the Change Current Quick Style Set command. Both the Themes gallery and the Quick Styles gallery provide reset commands so that you can always restore the look of your document to the original contained in your current template.</p>
										<p>On the Insert tab, the galleries include items that are designed to coordinate with the overall look of your document. You can use these galleries to insert tables, headers, footers, lists, cover pages, and other document building blocks. When you create pictures, charts, or diagrams, they also coordinate with your current document look.</p>
										<p>You can easily change the formatting of selected text in the document text by choosing a look for the selected text from the Quick Styles gallery on the Home tab. You can also format text directly by using the other controls on the Home tab. Most controls offer a choice of using the look from the current theme or using a format that you specify directly.</p>
										<p>To change the overall look of your document, choose new Theme elements on the Page Layout tab. To change the looks available in the Quick Style gallery, use the Change Current Quick Style Set command. Both the Themes gallery and the Quick Styles gallery provide reset commands so that you can always restore the look of your document to the original contained in your current template.</p>
									</div>

								</div>
								<div class="st-flex space-between">
									<div class="tagcloud">
										<a href="https://homap.travelerwp.com/tag/beaches/" class="tag-cloud-link tag-link-103 tag-link-position-1">Beaches</a>
										<a href="https://homap.travelerwp.com/tag/beaches/" class="tag-cloud-link tag-link-103 tag-link-position-1">Beaches</a>
										<a href="https://homap.travelerwp.com/tag/beaches/" class="tag-cloud-link tag-link-103 tag-link-position-1">Beaches</a>
									</div>
									<div class="share">
										<p>Share</p>
										<a href="#" class="share-item"><i class="fa fa-facebook"></i></a>
										<a href="#" class="share-item">
											<i class="fa fa-twitter"></i>
										</a>
									</div>
								</div>
								<div class="author-info">
									<div class="media">
										<div class="media-left">
											<img alt="avatar" width="100" height="100" src="https://homap.travelerwp.com/wp-content/uploads/bfi_thumb/people_8-1-37jk0455tzdm7akn7j6oe8.jpg" class="avatar avatar-96 photo origin round">
										</div>
										<div class="media-content">
											<h4 class="media-heading">Travis Tan</h4>
										</div>
									</div>
								</div>
								<div class="pagination1 clearfix">
									<div class="nav-links">
										<div class="nav-previous"><a href="https://homap.travelerwp.com/tiptoe-through-the-tulips-of-washington/" rel="prev"><span class="meta-nav" aria-hidden="true"><i class="fa fa-angle-left"></i>Previous</span> </a></div>
										<div class="nav-next"><a href="https://homap.travelerwp.com/the-castle-on-the-cliff-majestic-magic-manoir/" rel="next"><span class="meta-nav" aria-hidden="true">Next</span> <i class="fa fa-angle-right"></i></a></div>
									</div>
								</div>
								<div class="comment-wrapper">
									<h2 class="title">Comment (1)</h2>
									<ol class="comment-list">
										<li id="comment-166" class="st_reviews even thread-even depth-1">
											<div id="div-comment-166" class="acticle comment clearfix">
												<div class="comment-item-head">
													<div class="media">
														<div class="media-left">
															<img alt="WordPress Booking Theme" src="https://secure.gravatar.com/avatar/?s=50&amp;d=mm&amp;r=g" srcset="https://secure.gravatar.com/avatar/?s=100&amp;d=mm&amp;r=g 2x" class="avatar avatar-50 photo avatar-default" height="50" width="50">
														</div>
														<div class="media-body">
															<h4 class="media-heading">Customer</h4>
															<div class="date">07/01/2019</div>
														</div>
													</div>
												</div>
												<div class="comment-item-body">
                                <div class="comment-content">
                    <p>hi, this is fun!</p>
                </div>
                <span class="comment-reply">
                    <a rel="nofollow" class="comment-reply-link" href="https://homap.travelerwp.com/pure-luxe-in-punta-mita/?replytocom=166#respond" onclick="return addComment.moveForm( &quot;div-comment-166&quot;, &quot;166&quot;, &quot;respond&quot;, &quot;8012&quot; )" aria-label="Reply to Sergio">Reply</a>            </span>
            </div>
											</div>
										</li>
										<li id="comment-166" class="st_reviews even thread-even depth-1">
											<div id="div-comment-166" class="acticle comment clearfix">
												<div class="comment-item-head">
													<div class="media">
														<div class="media-left">
															<img alt="WordPress Booking Theme" src="https://secure.gravatar.com/avatar/?s=50&amp;d=mm&amp;r=g" srcset="https://secure.gravatar.com/avatar/?s=100&amp;d=mm&amp;r=g 2x" class="avatar avatar-50 photo avatar-default" height="50" width="50">
														</div>
														<div class="media-body">
															<h4 class="media-heading">Customer</h4>
															<div class="date">07/01/2019</div>
														</div>
													</div>
												</div>
												<div class="comment-item-body">
                                <div class="comment-content">
                    <p>hi, this is fun!</p>
                </div>
                <span class="comment-reply">
                    <a rel="nofollow" class="comment-reply-link" href="https://homap.travelerwp.com/pure-luxe-in-punta-mita/?replytocom=166#respond" onclick="return addComment.moveForm( &quot;div-comment-166&quot;, &quot;166&quot;, &quot;respond&quot;, &quot;8012&quot; )" aria-label="Reply to Sergio">Reply</a>            </span>
            </div>
											</div>
										</li>
									</ol>
									<div id="write-comment">
										<div id="respon" class="comment-respon">
											<h3 id="reply-title" class="comment-reply-title">
												Leave a Reply
											</h3>
											<form action="" method="post" id="commentform" class="comment-form">
												<p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p>
												<div class="row">
                                        <div class="col-xs-12">
                                            <textarea name="comment" class="form-control has-matchHeight" placeholder="Comment*"></textarea>
                                        </div>
                                        <div class="col-xs-12 col-sm-4">
                                            <input type="text" class="form-control" name="author" placeholder="Name*">
                                        </div>
                                        <div class="col-xs-12 col-sm-4">
                                            <input type="email" class="form-control" name="email" placeholder="Email*">
                                        </div>
                                        <div class="col-xs-12 col-sm-4">
                                            <input type="url" class="form-control" name="url" placeholder="Webiste">
                                        </div>
                                    </div>
                                    <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Post Comment"> <input type="hidden" name="comment_post_ID" value="8012" id="comment_post_ID">
<input type="hidden" name="comment_parent" id="comment_parent" value="0">
</p>
											</form>
										</div>
									</div>
								</div>
							</div>
							


									
								
									
						</div>
					</div>
					
				</div>
				<div class="col-sm-3 col-xs-12">
				<div class="sidebar-right">
					<div class="search-1">
						<form action="https://homap.travelerwp.com/" class="search" method="get">
							<input type="text" class="form-control" name="s" placeholder="Search...">
							<button type="submit">
								<i class="fa fa-search"></i>
							</button> 
						</form>
					</div>
					<div class="text-2">
						<div class="sidebar-title">
							<h4>ABOUT US</h4>
						</div>
						<div class="textwidget">
							<img src="https://travelhotel.wpengine.com/wp-content/uploads/2018/11/about_1.jpg" alt="" class="alignnone" width="263px" height="151px">
							<p>Nam dapibus nisl vitae elit fringilla rutrum. Aenean sollicitudin, erat a elementum rutrum, neque sem pretium metus, quis mollis nisl nunc et massa</p>
						</div>
					</div>
					<div class="categories">
						<div class="sidebar-title">
							<h4>CATEGORIES</h4>
						</div>
						<ul>
							<li>
								<span style="background: #eb4d4b"></span>
								<a class="sidebar-content" href="https://homap.travelerwp.com/category/beauty-beaches/">Beauty Beaches</a>
							</li>
							<li>
								<span style="background: #30336b"></span>
								<a class="sidebar-content" href="https://homap.travelerwp.com/category/cultural-events/">Cultural Events</a>
							</li>
							<li>
								<span style="background: #ff7979"></span>
								<a class="sidebar-content" href="https://homap.travelerwp.com/category/mountains/">Moutains</a>
							</li>
							<li>
								<span style="background: #6ab04c"></span>
								<a class="sidebar-content" href="https://homap.travelerwp.com/category/national-parks/">National Parks</a>
							</li>
							<li>
								<span style="background: #22a6b3"></span>
								<a class="sidebar-content" href="https://homap.travelerwp.com/category/museums/">Museum</a>
							</li>
							<li>
								<span style="background: #f9ca24"></span>
								<a class="sidebar-content" href="https://homap.travelerwp.com/category/parks-and-carnivals/">Parks and Carnivals</a>
							</li>
						</ul>
					</div>
					<div class="list-post">
						<div class="sidebar-title">
							<h4>RECENT POST</h4>
						</div>
						<ul class="thumb-list">
							<li>
								<div class="thumb">
									<a href="https://homap.travelerwp.com/pure-luxe-in-punta-mita/"></a>
									<img src="https://homap.travelerwp.com/wp-content/uploads/2018/11/los_angeles_3-100x100.jpg" width="100px" height="100px" alt="">
								</div>
								<div class="content">	
									<div class="cate cate-1">
										<a href="https://homap.travelerwp.com/category/parks-and-carnivals/" style="color: #f9ca24 !important">Parks and Carnivals</a>
									</div>
									<h5 class="thumb-list-item-title">
										<a class="active" href="https://homap.travelerwp.com/pure-luxe-in-punta-mita/">Pure Luxe in Punta Mita</a>
									</h5>
								</div>
							</li>
							<li>
								<div class="thumb">
									<a href="https://homap.travelerwp.com/pure-luxe-in-punta-mita/"></a>
									<img src="https://homap.travelerwp.com/wp-content/uploads/2018/11/los_angeles_3-100x100.jpg" width="100px" height="100px" alt="">
								</div>
								<div class="content">	
									<div class="cate cate-1">
										<a href="https://homap.travelerwp.com/category/parks-and-carnivals/" style="color: #f9ca24 !important">Parks and Carnivals</a>
									</div>
									<h5 class="thumb-list-item-title">
										<a class="active" href="https://homap.travelerwp.com/pure-luxe-in-punta-mita/">Pure Luxe in Punta Mita</a>
									</h5>
								</div>
							</li>
							<li>
								<div class="thumb">
									<a href="https://homap.travelerwp.com/pure-luxe-in-punta-mita/"></a>
									<img src="https://homap.travelerwp.com/wp-content/uploads/2018/11/los_angeles_3-100x100.jpg" width="100px" height="100px" alt="">
								</div>
								<div class="content">	
									<div class="cate cate-1">
										<a href="https://homap.travelerwp.com/category/parks-and-carnivals/" style="color: #f9ca24 !important">Parks and Carnivals</a>
									</div>
									<h5 class="thumb-list-item-title">
										<a class="active" href="https://homap.travelerwp.com/pure-luxe-in-punta-mita/">Pure Luxe in Punta Mita</a>
									</h5>
								</div>
							</li>
							<li>
								<div class="thumb">
									<a href="https://homap.travelerwp.com/pure-luxe-in-punta-mita/"></a>
									<img src="https://homap.travelerwp.com/wp-content/uploads/2018/11/los_angeles_3-100x100.jpg" width="100px" height="100px" alt="">
								</div>
								<div class="content">	
									<div class="cate cate-1">
										<a href="https://homap.travelerwp.com/category/parks-and-carnivals/" style="color: #f9ca24 !important">Parks and Carnivals</a>
									</div>
									<h5 class="thumb-list-item-title">
										<a class="active" href="https://homap.travelerwp.com/pure-luxe-in-punta-mita/">Pure Luxe in Punta Mita</a>
									</h5>
								</div>
							</li>
						</ul>
					</div>
					<div class="tag-cloud-2">
						<div class="slidebar-title">
							<h4>TAGS</h4>
						</div>
						<div class="tagcloud">
							<a href="https://homap.travelerwp.com/tag/beaches/" class="tag-cloud-link tag-link-103 tag-link-position-1">Beaches</a>
							<a href="https://homap.travelerwp.com/tag/beaches/" class="tag-cloud-link tag-link-104 tag-link-position-2">Beuty</a>
							<a href="https://homap.travelerwp.com/tag/beaches/" class="tag-cloud-link tag-link-100 tag-link-position-3">Carnivals</a>
							<a href="https://homap.travelerwp.com/tag/beaches/" class="tag-cloud-link tag-link-105 tag-link-position-4">Cultural</a>
							<a href="https://homap.travelerwp.com/tag/beaches/" class="tag-cloud-link tag-link-36 tag-link-position-5">Moutains</a>
							<a href="https://homap.travelerwp.com/tag/beaches/" class="tag-cloud-link tag-link-106 tag-link-position-6">Museums</a>
							<a href="https://homap.travelerwp.com/tag/beaches/" class="tag-cloud-link tag-link-101 tag-link-position-7">National</a>
							<a href="https://homap.travelerwp.com/tag/beaches/" class="tag-cloud-link tag-link-102 tag-link-position-8">Parks</a>
							<a href="https://homap.travelerwp.com/tag/beaches/" class="tag-cloud-link tag-link-97 tag-link-position-9">Tiptoe</a>
							<a href="https://homap.travelerwp.com/tag/beaches/" class="tag-cloud-link tag-link-98 tag-link-position-10">Tulips</a>
							<a href="https://homap.travelerwp.com/tag/beaches/" class="tag-cloud-link tag-link-99 tag-link-position-11">Washington</a>
						</div>
					</div>
				</div>
			</div> 
			</div>
			
		</div>

	</div>
	</div>
	<footer>
		<div class="mailchimp">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-10 col-lg-offset-1">
                    <div class="col-xs-12  col-md-7 col-lg-6">
                        <div class="media">
                            <div class="media-left">
                                <img src="https://homap.travelerwp.com/wp-content/themes/traveler/v2/images/svg/ico_email_subscribe.svg" alt="" class="media-object">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading st-heading-section f24">Get Updates & More</h4>
                                <p class="f16 c-grey">Thoughtful thoughts to your inbox</p> 
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12  col-md-5 col-lg-6">
                        <form action="" class="subcribe-form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="your Email">
                                <input type="submit" name="submit" value="Subcribe">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="container">

    <div class="row">
            <div id="footer_content">
                <div class="col-lg-3 col-sm-3 col-xs-12 col-md-12">
                <h4 style="font-weight: 600;font-size: 14px;">NEED HELP?</h4>
                <br />
            

                <div  class="footer_content_element">
                    <p class="footer_content_element1" >Call Us</p>
                    <h4 class="footer1" style="font-weight: 600;font-size: 18px; color: #1A2B48 ; padding-left: 15px;  " >+ 00 222 44 5678</h4>
                </div>
                <br />
        
                <div class="footer_content_element">
                    <p class="footer_content_element1" >Email for Us</p>
                    <h4 class="footer1" style="font-weight: 600; font-size: 18px; color: #1A2B48 ; padding-left: 15px;  " >hello@yoursite.com</h4>
                </div>
                <br />
            
                <div class="footer_content_element">
                    <p class="footer_content_element1" >Follow Us</p>
                    <p style="padding-left: 15px;"><span ><img src="https://travelhotel.wpengine.com/wp-content/uploads/2018/12/ico_twitter_footer.png"  ></span><span style="padding-left: 15px;"><img src="https://travelhotel.wpengine.com/wp-content/uploads/2018/12/ico_twitter_footer.png" ></span><span style="padding-left: 15px;"><img src="https://travelhotel.wpengine.com/wp-content/uploads/2018/12/ico_instagram_footer.png"  ></span></p>
                </div>
                <br />
                


            </div>
            <div class="col-lg-3 col-sm-3 col-xs-12 col-md-12">
                <h4 style="font-weight: 600;font-size: 14px;">COMPANY</h4>
                <br />
            
                <div class="footer_content1_element">
                    <div class="footer_content1_element1" ">
                        <a href="" ><p>About Us</p></a>
                        <br>
                    
                        <a href="" ><p>ACommunity Blog</p></a>
                        <br>
                        
                        <a href="" ><p>Rewards</p></a>
                        <br>
                    
                        <a href="" ><p>Word with Us</p></a>
                        <br>
                        
                        <a href="" ><p>Meet the Team</p></a>
                        <br>
                        <br>
                        
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-3 col-sm-3 col-xs-12 col-md-12">
                <h4 style="font-weight: 600;font-size: 14px;">SUPPORT</h4>
                <br />
        
                <div class="footer_content1_element">
                    <div class="footer_content1_element1" ">
                        <a href="" style="color: #1A2B48"><p>Acount</p></a>
                        <br>
                    
                        <a href="" style="color: #1A2B48"><p>Legal</p></a>
                        <br>
                        
                        <a href="" style="color: #1A2B48"><p>Contact</p></a>
                        <br>
                    
                        <a href="" style="color: #1A2B48"><p>Affiliate Program</p></a>
                        <br>
                        
                        <a href="" style="color: #1A2B48"><p>Privacy policy</p></a>
                        <br>
                        <br>
                        
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-3 col-sm-3 col-xs-12 col-md-12">
                <h4 style="font-weight: 600;font-size: 14px;">SETTING</h4>
                <br />
                
                <div class="footer_content1_element">
                    <div class="footer_content1_element1" ">
                        <p style="font-size: 14px;color: #5E6D77;" >Languages</p>
                        <select style=" width: 180px; height: 40px; border-radius: 4px;" >
                            <option>English</option>
                            <option>France</option>
                            <option>Spanish</option>
                        </select>
                        <br />
                        <br />
                        <br />
                        <p style="font-size: 14px;color: #5E6D77;" >Currencies</p>
                        <select style=" width: 180px; height: 40px; border-radius: 4px;" >
                            <option>EUR</option>
                            <option>USD</option>
                            <option>AUD</option>
                        </select>

                        
                    </div>
                    
                </div>
            </div>
            </div>
        </div>
        

        <div class="row">
            <div class="footer_sub">

            <div class="col-lg-4">
                <div class="footer_sub_L">
                    <p style=" font-size: 15px; color: #768092;">Copyright © 2018 by <a href="#">ShineTheme</a></p>
                
                
            </div>
                
            </div>
            <div class="col-lg-5"></div>
            <div class="col-lg-3">
                <div class="footer_sub_R">
                <p><span style="margin-left: 15px;"><img src="https://homap.travelerwp.com/wp-content/themes/traveler/v2/images/svg/ico_paymethod.svg"></span></p>
                </div>
            </div>
            </div>
        </div>
        </div>
        </div>
       </div>
	</footer>
</body>
</html>
<!-- <script
  src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js">
  	
  </script>
  <script >
  	$(document).ready(function(){
  		$('.toggle').click(function(){
  		$('.menu').toggleClass('visible');	
  		});
  	});
  </script> -->