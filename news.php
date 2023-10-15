<?php
include('index_conn.php');
$today = date("d-M-Y");
if (isset($_REQUEST['a'])){

	$view_query= "UPDATE `myblogtable` SET postview=postview + " . 1 . " WHERE a = '$_REQUEST[a]'";
	$send_viewquery = mysqli_query($conn, $view_query);

    // $sql1 = "SELECT * FROM myblogtable WHERE headline='$_REQUEST[a]'";
    // $result = mysqli_query($conn, $sql1);
    // $row = mysqli_fetch_array($result);
}
?>

<!doctype html>
<html lang="en" class="no-js">

<!-- Mirrored from nunforest.com/hotmagazine/politics/single-post.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Jul 2020 02:49:53 GMT -->
<head>
	<title> <?php echo $row['headline'];?></title>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,400italic' rel='stylesheet' type='text/css'>
	<link href="../../../maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="screen">	
	<link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css" media="screen">	
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css" media="screen">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/ticker-style.css"/>
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">

</head>
<body>

	<!-- Container -->
	<div id="container">

		<!-- Header
		    ================================================== -->
		<?php  include('top_nav.php');?>
		<!-- End Header -->

		<!-- block-wrapper-section
			================================================== -->
		<section class="block-wrapper">
			<div class="container">
				<div class="row">

					<div class="col-md-2 col-sm-0 sidebar-sticky">

						<!-- sidebar -->
						<div class="sidebar small-sidebar theiaStickySidebar">

							<div class="widget review-widget">
								<div class="title-section">
									<h1><span>Review</span></h1>
								</div>

								<ul class="review-posts-list">
								<?php

			if (isset($_REQUEST['a'])){
			$a = $_REQUEST['a'];
			$sql="SELECT * FROM `myblogtable` WHERE headline= '$a'";
			$result= mysqli_query($conn, $sql);
			if(mysqli_num_rows($result)>0){
				while($row=mysqli_fetch_array($result)){

			?>
					<li><img src="app/image/<?php echo $row['image'];?>">
						<div class="hover-box">
							<div class="inner-hover">
							<a class="category-post" href="politics-category.html"><?php echo $row['category'];?></a>
							<h2><a <?php echo "href='news.php?a=".$row['a']."'"; ?>><?php echo $row['headline'];?> </a></h2>
								<ul class="post-tags">
								<li><i class="fa fa-clock-o"></i><?php echo $row['date'];?></li>
									<li><a href="#"><i class="fa fa-comments-o"></i><span>20</span></a></li>
								</ul>
					</li>
									<?php   }}}?>	
							<li>

									<?php
			$sql="SELECT * FROM `myblogtable` WHERE category='crime' ORDER BY `id` DESC LIMIT 0, 1";
			$result= mysqli_query($conn, $sql);
			if(mysqli_num_rows($result)>0){
				while($row=mysqli_fetch_array($result)){

			?>
									<li><img src="app/image/<?php echo $row['image'];?>">
						<div class="hover-box">
							<div class="inner-hover">
							<a class="category-post" href="politics-category.html"><?php echo $row['category'];?></a>
							<h2><a <?php echo "href='news.php?a=".$row['a']."'"; ?>><?php echo $row['headline'];?> </a></h2>
								<ul class="post-tags">
								<li><i class="fa fa-clock-o"></i><?php echo $row['date'];?></li>
									<li><a href="#"><i class="fa fa-comments-o"></i><span>20</span></a></li>
								</ul>
										
									
									</li>
									<?php   }}?>
									</li> 
									<li>
									<?php
			$sql="SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `myblogtable` WHERE category='sport' ORDER BY `id` DESC LIMIT 0, 1";
			$result= mysqli_query($conn, $sql);
			if(mysqli_num_rows($result)>0){
				while($row=mysqli_fetch_array($result)){

			?>
									<li><img src="app/image/<?php echo $row['image'];?>">
						<div class="hover-box">
							<div class="inner-hover">
							<a class="category-post" href="politics-category.html"><?php echo $row['category'];?></a>
							<h2><a <?php echo "href='news.php?a=".$row['a']."'"; ?>><?php echo $row['headline'];?> </a></h2>
								<ul class="post-tags">
								<li><i class="fa fa-clock-o"></i><?php echo $row['newDate'];?></li>
									<li><a href="#"><i class="fa fa-comments-o"></i><span>20</span></a></li>
								</ul>
										
									
									</li>
									<?php   }}?>
									</li>
									<li>
									<?php
			$sql="SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `myblogtable` WHERE category='nigeria' ORDER BY `id` DESC LIMIT 0, 1";
			$result= mysqli_query($conn, $sql);
			if(mysqli_num_rows($result)>0){
				while($row=mysqli_fetch_array($result)){

			?>
									<li><img src="app/image/<?php echo $row['image'];?>">
						<div class="hover-box">
							<div class="inner-hover">
							<a class="category-post" href="politics-category.html"><?php echo $row['category'];?></a>
							<h2><a <?php echo "href='news.php?a=".$row['a']."'"; ?>><?php echo $row['headline'];?> </a></h2>
								<ul class="post-tags">
								<li><i class="fa fa-clock-o"></i><?php echo $row['newDate'];?></li>
									<li><a href="#"><i class="fa fa-comments-o"></i><span>20</span></a></li>
								</ul>
										
									
									</li>
									<?php   }}?>
									</li> 
									<li>
									<?php
			$sql="SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `myblogtable` WHERE category='sport' ORDER BY `id` DESC LIMIT 0, 1";
			$result= mysqli_query($conn, $sql);
			if(mysqli_num_rows($result)>0){
				while($row=mysqli_fetch_array($result)){

			?>
									<li><img src="app/image/<?php echo $row['image'];?>">
						<div class="hover-box">
							<div class="inner-hover">
							<a class="category-post" href="politics-category.html"><?php echo $row['category'];?></a>
							<h2><a <?php echo "href='news.php?a=".$row['a']."'"; ?>><?php echo $row['headline'];?> </a></h2>
								<ul class="post-tags">
								<li><i class="fa fa-clock-o"></i><?php echo $row['newDate'];?></li>
									<li><a href="#"><i class="fa fa-comments-o"></i><span>20</span></a></li>
								</ul>
										
									
									</li>
									<?php   }}?>
									</li>
									<li>
									<?php
			$sql="SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `myblogtable` WHERE category='crime' ORDER BY `id` DESC LIMIT 0, 1";
			$result= mysqli_query($conn, $sql);
			if(mysqli_num_rows($result)>0){
				while($row=mysqli_fetch_array($result)){

			?>
									<li><img src="app/image/<?php echo $row['image'];?>">
						<div class="hover-box">
							<div class="inner-hover">
							<a class="category-post" href="politics-category.html"><?php echo $row['category'];?></a>
							<h2><a <?php echo "href='news.php?a=".$row['a']."'"; ?>><?php echo $row['headline'];?> </a></h2>
								<ul class="post-tags">
								<li><i class="fa fa-clock-o"></i><?php echo $row['newDate'];?></li>
									<li><a href="#"><i class="fa fa-comments-o"></i><span>20</span></a></li>
								</ul>
										
									
									</li>
									<?php   }}?>
									</li>
									<li>
									<?php
			$sql="SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `myblogtable` WHERE category='nigeria' ORDER BY `id` DESC LIMIT 0, 1";
			$result= mysqli_query($conn, $sql);
			if(mysqli_num_rows($result)>0){
				while($row=mysqli_fetch_array($result)){

			?>
									<li><img src="app/image/<?php echo $row['image'];?>">
						<div class="hover-box">
							<div class="inner-hover">
							<a class="category-post" href="politics-category.html"><?php echo $row['category'];?></a>
							<h2><a <?php echo "href='news.php?a=".$row['a']."'"; ?>><?php echo $row['headline'];?> </a></h2>
								<ul class="post-tags">
								<li><i class="fa fa-clock-o"></i><?php echo $row['newDate'];?></li>
									<li><a href="#"><i class="fa fa-comments-o"></i><span>20</span></a></li>
								</ul>
										
									
									</li>
									<?php   }}?>
									</li>
								</ul>
							</div>

						</div>

					</div>

					<div class="col-md-7 col-sm-8 content-blocker">

						<!-- block content -->
						<div class="block-content">

							<!-- single-post box -->
							<div class="single-post-box">
							<?php
								include('index_conn.php');
								$today = date("d-M-Y");
								if (isset($_REQUEST['a'])){
									$sql1 = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM myblogtable WHERE a='$_REQUEST[a]'";
									$result = mysqli_query($conn, $sql1);
									$row = mysqli_fetch_array($result);
								}
								?>


								<div class="title-post">
									<h1> <?php echo $row['headline'];?></h1>
									<ul class="post-tags">
										<li><i class="fa fa-clock-o"></i> <?php echo $row['newDate'];?></li>
										<li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
										<li><a href="#"><i class="fa fa-comments-o"></i><span>0</span></a></li>
										<li><i class="fa fa-eye"></i><?php echo $row['postview'];?></li>
									</ul>
								</div>

								

								<div class="post-gallery">
								<img src="app/image/<?php echo $row['image'];?>">
									<span class="image-caption">Photo Credit: <?php echo $row['credit'];?></span>
								</div>

								<div class="post-content">

								<p> <?php echo $row['content'];?>" </p>


									

									<!-- <blockquote>
										 <p>Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet, lectus arcu pulvinar risus, vitae facilisis libero dolor a purus. Sed vel lacus. Mauris nibh felis, adipiscing varius, adipiscing in, lacinia vel, tellus. </p> 
									</blockquote> -->
								</div>

								<!-- <div class="article-inpost">
									<div class="row">
										<div class="col-md-6">
											<div class="image-content">
												<div class="image-place">
													<img src="upload/news-posts/single-art2.jpg" alt="">
													<div class="hover-image">
														<a class="zoom" href="upload/news-posts/single-art2.jpg"><i class="fa fa-arrows-alt"></i></a>
													</div>
												</div>
												<span class="image-caption">Cras eget sem nec dui volutpat ultrices.</span>
											</div>
										</div>
										<div class="col-md-6">
											<div class="image-content">
												<div class="image-place">
													<img src="upload/news-posts/single-art3.jpg" alt="">
													<div class="hover-image">
														<a class="zoom" href="upload/news-posts/single-art3.jpg"><i class="fa fa-arrows-alt"></i></a>
													</div>
												</div>
												<span class="image-caption">Cras eget sem nec dui volutpat ultrices.</span>
											</div>
										</div>
									</div>
								</div>

								<div class="post-content">

									<p>Suspendisse mauris. Fusce accumsan mollis eros. Pellentesque a diam sit amet mi ullamcorper vehicula. Integer adipiscing risus a sem. Nullam quis massa sit amet nibh viverra malesuada. Nunc sem lacus, accumsan quis, faucibus non, congue vel, arcu. Ut scelerisque hendrerit tellus. Integer sagittis. Vivamus a mauris eget arcu gravida tristique. Nunc iaculis mi in ante. Vivamus imperdiet nibh feugiat est.</p>

								</div> -->


								<div class="post-tags-box">
									<ul class="tags-box">
										<li><i class="fa fa-tags"></i><span>Tags:</span></li>
										<li><a href="#">News</a></li>
										<li><a href="#">Fashion</a></li>
										<li><a href="#">Politics</a></li>
										<li><a href="#">Sport</a></li>
									</ul>
								</div>

								<div class="share-post-box">
									<ul class="share-box">
										<li><i class="fa fa-share-alt"></i><span>Share Post</span></li>
										<li><a class="facebook" href="#"><i class="fa fa-facebook"></i>Share on Facebook</a></li>
										<li><a class="twitter" href="#"><i class="fa fa-twitter"></i>Share on Twitter</a></li>
										
									</ul>
								</div>

								<div class="prev-next-posts">
									<div class="prev-post">
										<div class="post-content">
										<?php
			$sql="SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `myblogtable` WHERE category='crime' ORDER BY `id` DESC LIMIT 0, 1";
			$result= mysqli_query($conn, $sql);
			if(mysqli_num_rows($result)>0){
				while($row=mysqli_fetch_array($result)){

			?>
										<h2><a <?php echo "href='news.php?a=".$row['a']."'"; ?>><?php echo $row['headline'];?> </a></h2>
											<ul class="post-tags">
											<li><i class="fa fa-clock-o"></i><?php echo $row['newDate'];?></li>
												<li><a href="#"><i class="fa fa-comments-o"></i><span>11</span></a></li>
											</ul>
										</div>
										<?php }} ?>
									</div>
									<div class="next-post">
										<div class="post-content">
										<?php
			$sql="SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `myblogtable` WHERE category='politics' ORDER BY `id` DESC LIMIT 0, 1";
			$result= mysqli_query($conn, $sql);
			if(mysqli_num_rows($result)>0){
				while($row=mysqli_fetch_array($result)){

			?>
										<h2><a <?php echo "href='news.php?a=".$row['a']."'"; ?>><?php echo $row['headline'];?> </a></h2>
											<ul class="post-tags">
											<li><i class="fa fa-clock-o"></i><?php echo $row['newDate'];?></li>
												<li><a href="#"><i class="fa fa-comments-o"></i><span>8</span></a></li>
											</ul>
										</div>
										<?php }} ?>
									</div>
								</div>

								<div class="about-more-autor">
									<ul class="nav nav-tabs">
										<li class="active">
											<a href="#about-autor" data-toggle="tab">About The Autor</a>
										</li>
										
									</ul>

									<div class="tab-content">

										<div class="tab-pane active" id="about-autor">
											<div class="autor-box">
												<!-- <img src="images/autor.JPEG" alt=""> -->
												<div class="autor-content">
													<div class="autor-title">
														<!-- <h1><span>Akinsiku Busayo</span><a href="autor-details.html"></a></h1> -->
														<ul class="autor-social">
															<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
															<!-- <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li> -->
															<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
															<!-- <li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li> -->
															<li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
															<!-- <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li> -->
															<!-- <li><a href="#" class="dribble"><i class="fa fa-dribbble"></i></a></li> -->
														</ul>
													</div>
													<p>
														Akinsiku Busayo will give you real and genuine news about whats going on around the wolrd 
													</p>
												</div>
											</div>
										</div>

										<!-- <div class="tab-pane" id="more-autor">
											<div class="more-autor-posts">

												<div class="news-post image-post3">
													<img src="upload/news-posts/im4.jpg" alt="">
													<div class="hover-box">
														<h2><a href="single-post.html">Donec odio. Quisque volutpat mattis eros.</a></h2>
														<ul class="post-tags">
															<li><i class="fa fa-clock-o"></i>27 may 2013</li>
														</ul>
													</div>
												</div>

												<div class="news-post image-post3">
													<img src="upload/news-posts/im5.jpg" alt="">
													<div class="hover-box">
														<h2><a href="single-post.html">Nullam malesuada erat ut turpis. </a></h2>
														<ul class="post-tags">
															<li><i class="fa fa-clock-o"></i>27 may 2013</li>
														</ul>
													</div>
												</div>

												<div class="news-post image-post3">
													<img src="upload/news-posts/im6.jpg" alt="">
													<div class="hover-box">
														<h2><a href="single-post.html">Suspendisse urna nibh.</a></h2>
														<ul class="post-tags">
															<li><i class="fa fa-clock-o"></i>27 may 2013</li>
														</ul>
													</div>
												</div>

											</div>
										</div> -->

									</div>
								</div>

								<!-- carousel box -->
								<div class="carousel-box owl-wrapper">
									<div class="title-section">
										<h1><span>You may also like</span></h1>
									</div>
									<div class="owl-carousel" data-num="3">
									
										<div class="item news-post image-post3">
										<?php
			$sql="SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `myblogtable` WHERE category='crime' ORDER BY `id` DESC LIMIT 0, 1";
			$result= mysqli_query($conn, $sql);
			if(mysqli_num_rows($result)>0){
				while($row=mysqli_fetch_array($result)){

			?>
										<img src="app/image/<?php echo $row['image'];?>" height="215px">
											<div class="hover-box">
												<h2><a <?php echo "href='news.php?a=".$row['a']."'"; ?>><?php echo $row['headline'];?> </a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i><?php echo $row['newDate'];?></li>
												</ul>
											</div>
											<?php   }}?>
										</div>
									
										<div class="item news-post image-post3">
										<?php
			$sql="SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `myblogtable` WHERE category='sports' ORDER BY `id` DESC LIMIT 0, 1";
			$result= mysqli_query($conn, $sql);
			if(mysqli_num_rows($result)>0){
				while($row=mysqli_fetch_array($result)){

			?>
											<img src="app/image/<?php echo $row['image'];?>" height="215px">
											<div class="hover-box">
												<h2><a <?php echo "href='news.php?a=".$row['a']."'"; ?>><?php echo $row['headline'];?> </a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i><?php echo $row['newDate'];?></li>
												</ul>
											</div>
											<?php   }}?>
										</div>
									
										
									
										<div class="item news-post image-post3">
										<?php
			$sql="SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `myblogtable` WHERE category='nigeria' ORDER BY `id` DESC LIMIT 0, 1";
			$result= mysqli_query($conn, $sql);
			if(mysqli_num_rows($result)>0){
				while($row=mysqli_fetch_array($result)){

			?>
										<img src="app/image/<?php echo $row['image'];?>" height="215px">
											<div class="hover-box">
												<h2><a <?php echo "href='news.php?a=".$row['a']."'"; ?>><?php echo $row['headline'];?> </a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i><?php echo $row['newDate'];?></li>
												</ul>
											</div>
											<?php   }}?>
										</div>
									
										<div class="item news-post image-post3">
										<?php
			$sql="SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `myblogtable` WHERE category='politics' ORDER BY `id` DESC LIMIT 0, 1";
			$result= mysqli_query($conn, $sql);
			if(mysqli_num_rows($result)>0){
				while($row=mysqli_fetch_array($result)){

			?>
											<img src="app/image/<?php echo $row['image'];?>" height="215px">
											<div class="hover-box">
												<h2><a <?php echo "href='news.php?a=".$row['a']."'"; ?>><?php echo $row['headline'];?> </a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i><?php echo $row['newDate'];?></li>
												</ul>
											</div>
											<?php   }}?>
										</div>

									</div>
								</div>
								<!-- End carousel box -->

								<!-- contact form box -->
								<div class="contact-form-box">
									<div class="title-section">
										<h1><span>Leave a Comment</span> </h1>
									</div>
									<!-- begin wwww.htmlcommentbox.com -->
									<div id="HCB_comment_box"><a href="http://www.htmlcommentbox.com">Comment Form</a> is loading comments...</div>
									<link rel="stylesheet" type="text/css" href="//www.htmlcommentbox.com/static/skins/bootstrap/twitter-bootstrap.css?v=0" />
									<script type="text/javascript" id="hcb">
										/*<!--*/
										if (!window.hcb_user) {
											hcb_user = {};
										}(function() {
											var s = document.createElement("script"),
												l = hcb_user.PAGE || ("" + window.location).replace(/'/g, "%27"),
												h = "//www.htmlcommentbox.com";
											s.setAttribute("type", "text/javascript");
											s.setAttribute("src", h + "/jread?page=" + encodeURIComponent(l).replace("+", "%2B") + "&mod=%241%24wq1rdBcg%244baItRbaNv3yJqDXwdeSy1" + "&opts=16862&num=10&ts=1522069891681");
											if (typeof s != "undefined") document.getElementsByTagName("head")[0].appendChild(s);
										})(); /*-->*/
									</script>
									<!-- end www.htmlcommentbox.com -->
								</div>
								<!-- End contact form box -->

							</div>
							<!-- End single-post box -->

						</div>
						<!-- End block content -->

					</div>


					<div class="col-md-3 col-sm-4 sidebar-sticky">

						<!-- sidebar -->
						<div class="sidebar large-sidebar theiaStickySidebar">

							<div class="widget social-widget">
								<div class="title-section">
									<h1><span>Stay Connected</span></h1>
								</div>
								<ul class="social-share">
									<!-- <li>
										<a href="#" class="rss"><i class="fa fa-rss"></i></a>
										<span class="number">9,455</span>
										<span>Subscribers</span>
									</li> -->
									<!-- <li>
										<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
										<span class="number">omoniyi michael</span>
										<span>Fans</span>
									</li> -->
									<li>
									<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
										<span class="">@busaycharly</span>
									</li> 
									<!-- <li>
										<a href="#" class="google"><i class="fa fa-google-plus"></i></a>
										<span class="number">35,003</span>
										<span>Followers</span>
									</li> -->
								</ul>
							</div>

							<div class="widget features-slide-widget">
								<div class="title-section">
									<h1><span>Featured Posts</span></h1>
								</div>
							
										<?php
			$sql="SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `myblogtable` WHERE category='crime' ORDER BY `id` DESC LIMIT 0, 1";
			$result= mysqli_query($conn, $sql);
			if(mysqli_num_rows($result)>0){
				while($row=mysqli_fetch_array($result)){

			?>
											<div class="news-post image-post2">
												<div class="post-gallery">
												<img src="app/image/<?php echo $row['image'];?>">
													<div class="hover-box">
														<div class="inner-hover">
														<h2><a <?php echo "href='news.php?a=".$row['a']."'"; ?>><?php echo $row['headline'];?> </a></h2>
															<ul class="post-tags">
															<li><i class="fa fa-clock-o"></i><?php echo $row['newDate'];?></li>
																<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<?php }} ?>
											</div>
										</li>
										<!-- <li>
											<div class="news-post image-post2">
												<div class="post-gallery">
													<img src="upload/news-posts/im1.jpg" alt="">
													<div class="hover-box">
														<div class="inner-hover">
															<h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
															<ul class="post-tags">
																<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</li> -->
										<!-- <li>
											<div class="news-post image-post2">
												<div class="post-gallery">
													<img src="upload/news-posts/im2.jpg" alt="">
													<div class="hover-box">
														<div class="inner-hover">
															<h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
															<ul class="post-tags">
																<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</li> -->
									</ul>
								<!-- </div>
								<ul class="list-posts">
									<li>
										<img src="upload/news-posts/listw1.jpg" alt="">
										<div class="post-content">
											<h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
											<ul class="post-tags">
												<li><i class="fa fa-clock-o"></i>27 may 2013</li>
											</ul>
										</div>
									</li>

									<li>
										<img src="upload/news-posts/listw2.jpg" alt="">
										<div class="post-content">
											<h2><a href="single-post.html">Sed arcu. Cras consequat.</a></h2>
											<ul class="post-tags">
												<li><i class="fa fa-clock-o"></i>27 may 2013</li>
											</ul>
										</div>
									</li>
								</ul>
							</div> -->

							<!-- <div class="advertisement">
								<div class="desktop-advert">
									<span>Advertisement</span>
									<img src="upload/addsense/250x250.jpg" alt="">
								</div>
								<div class="tablet-advert">
									<span>Advertisement</span>
									<img src="upload/addsense/200x200.jpg" alt="">
								</div>
								<div class="mobile-advert">
									<span>Advertisement</span>
									<img src="upload/addsense/300x250.jpg" alt="">
								</div>
							</div>

							<div class="advertisement">
								<div class="desktop-advert">
									<span>Advertisement</span>
									<img src="upload/addsense/250x250.jpg" alt="">
								</div>

							<div class="widget tab-posts-widget"> -->

								<!-- <ul class="nav nav-tabs" id="myTab"> -->
									<!-- <li class="active">
										<a href="#option1" data-toggle="tab">Popular</a>
									</li>
									<li>
										<a href="#option2" data-toggle="tab">Recent</a>
									</li>
								</ul> -->

								<!-- <div class="tab-content">
									<div class="tab-pane active" id="option1">
										<ul class="list-posts">
											<li>
												<img src="upload/news-posts/listw1.jpg" alt="">
												<div class="post-content">
													<h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i>27 may 2013</li>
													</ul>
												</div>
											</li>

											<li>
												<img src="upload/news-posts/listw2.jpg" alt="">
												<div class="post-content">
													<h2><a href="single-post.html">Sed arcu. Cras consequat. </a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i>27 may 2013</li>
													</ul>
												</div>
											</li>

											<li>
												<img src="upload/news-posts/listw3.jpg" alt="">
												<div class="post-content">
													<h2><a href="single-post.html">Phasellus ultrices nulla quis nibh. Quisque a lectus.  </a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i>27 may 2013</li>
													</ul>
												</div>
											</li>

											<li>
												<img src="upload/news-posts/listw4.jpg" alt="">
												<div class="post-content">
													<h2><a href="single-post.html">Donec consectetuer ligula vulputate sem tristique cursus. </a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i>27 may 2013</li>
													</ul>
												</div>
											</li>

											<li>
												<img src="upload/news-posts/listw5.jpg" alt="">
												<div class="post-content">
													<h2><a href="single-post.html">Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi. </a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i>27 may 2013</li>
													</ul>
												</div>
											</li>
										</ul>
									</div> -->
									<!-- <div class="tab-pane" id="option2">
										<ul class="list-posts">

											<li>
												<img src="upload/news-posts/listw3.jpg" alt="">
												<div class="post-content">
													<h2><a href="single-post.html">Phasellus ultrices nulla quis nibh. Quisque a lectus. </a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i>27 may 2013</li>
													</ul>
												</div>
											</li>

											<li>
												<img src="upload/news-posts/listw4.jpg" alt="">
												<div class="post-content">
													<h2><a href="single-post.html">Donec consectetuer ligula vulputate sem tristique cursus. </a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i>27 may 2013</li>
													</ul>
												</div>
											</li>

											<li>
												<img src="upload/news-posts/listw5.jpg" alt="">
												<div class="post-content">
													<h2><a href="single-post.html">Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i>27 may 2013</li>
													</ul>
												</div>
											</li>
											<li>
												<img src="upload/news-posts/listw1.jpg" alt="">
												<div class="post-content">
													<h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i>27 may 2013</li>
													</ul>
												</div>
											</li>

											<li>
												<img src="upload/news-posts/listw2.jpg" alt="">
												<div class="post-content">
													<h2><a href="single-post.html">Sed arcu. Cras consequat.</a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i>27 may 2013</li>
													</ul>
												</div>
											</li>
										</ul>										
									</div>
								</div>
							</div>

						</div> -->
						<!-- End sidebar -->

					</div>

				</div>

			</div>
		</section>
		<!-- End block-wrapper-section -->

		<!-- footer 
			================================================== -->
		<footer>
			<div class="container">
				<div class="footer-widgets-part">
					<div class="row">
						<div class="col-md-3">
							<div class="widget text-widget">
								<h1>About</h1>
								<p>whatsapp number:09050358471 </p>
								<p>Email:busaycharly@gmail.com</p><br> <br> <br> <br> <br> 
								<a href="index-2.html"><img src="bloglogo.JPG" height="115px" width="300px"></a>
							</div>
						</div>
						<div class="col-md-3">

							<div class="widget tags-widget">
								<h1>Popular Tags</h1>
								<ul class="tag-list">
									<li><a href="cat.php?cat=crime">Crime</a></li>
									<li><a href="videocat.php?cat=video">Video</a></li>
									<li><a href="cat.php?cat=politics">Politics</a></li>
									<li><a href="cat.php?cat=sports">Sport</a></li>
									
								</ul>
							</div>

						</div>
						<!-- <div class="col-md-3">
							<div class="widget posts-widget">
								<h1>Random Post</h1>
								<ul class="list-posts">
									<li>
										<img src="upload/news-posts/listw4.jpg" alt="">
										<div class="post-content">
											<a href="politics-category.html">World</a>
											<h2><a href="single-post.html">Pellentesque odio nisi, euismod in ultricies in, diam. </a></h2>
											<ul class="post-tags">
												<li><i class="fa fa-clock-o"></i>27 may 2013</li>
											</ul>
										</div>
									</li>

									<li>
										<img src="upload/news-posts/listw1.jpg" alt="">
										<div class="post-content">
											<a href="politics-category.html">Election</a>
											<h2><a href="single-post.html">Sed arcu. Cras consequat.</a></h2>
											<ul class="post-tags">
												<li><i class="fa fa-clock-o"></i>27 may 2013</li>
											</ul>
										</div>
									</li>

									<li>
										<img src="upload/news-posts/listw3.jpg" alt="">
										<div class="post-content">
											<a href="politics-category.html">Opinion</a>
											<h2><a href="single-post.html">Phasellus ultrices nulla quis nibh. Quisque a lectus.</a></h2>
											<ul class="post-tags">
												<li><i class="fa fa-clock-o"></i>27 may 2013</li>
											</ul>
										</div>
									</li>
								</ul>
							</div>
						</div> -->
						<!-- <div class="col-md-3">
							<div class="widget flickr-widget">
								<h1>Flickr Photos</h1>
								<ul class="flickr-list">
									<li><a href="#"><img src="upload/flickr/1.jpg" alt=""></a></li>
									<li><a href="#"><img src="upload/flickr/2.jpg" alt=""></a></li>
									<li><a href="#"><img src="upload/flickr/3.jpg" alt=""></a></li>
									<li><a href="#"><img src="upload/flickr/4.jpg" alt=""></a></li>
									<li><a href="#"><img src="upload/flickr/5.jpg" alt=""></a></li>
									<li><a href="#"><img src="upload/flickr/6.jpg" alt=""></a></li>
								</ul>
								<a href="#">View more photos...</a>
							</div>
						</div> -->
					</div>
				</div>
				<div class="footer-last-line">
					<div class="row">
						<div class="col-md-6">
							<p>&copy; COPYRIGHT 2023 CharlesBlog</p>
						</div>
						<div class="col-md-6">
							<nav class="footer-nav">
								<ul>
									<li><a href="index.php">Home</a></li>
									<!-- <li><a href="index-2.html">Purchase Theme</a></li>
									<li><a href="about.html">About</a></li>
									<li><a href="contact.html">Contact</a></li> -->
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- End footer -->

	</div>
	<!-- End Container -->
	
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.migrate.js"></script>
	<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.ticker.js"></script>
	<script type="text/javascript" src="js/jquery.imagesloaded.min.js"></script>
  	<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/theia-sticky-sidebar.js"></script>
	<script type="text/javascript" src="js/sticky.js"></script>
	<script type="text/javascript" src="js/retina-1.1.0.min.js"></script>
	<script type="text/javascript" src="js/plugins-scroll.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

</body>

<!-- Mirrored from nunforest.com/hotmagazine/politics/single-post.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Jul 2020 02:50:20 GMT -->
</html>