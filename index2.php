<?php
include('index_conn.php');
?>
<!doctype html>
<html lang="en" class="no-js">

<!-- Mirrored from nunforest.com/hotmagazine/politics/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Jul 2020 02:30:15 GMT -->
<head>
	<title>charles news</title>

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
		<header class="clearfix">
			<!-- Bootstrap navbar -->
			

		</header>
		<!-- End Header -->
		<?php include('top_nav.php');?>
		<!-- heading-news-section2
			================================================== -->
		<!-- <section class="heading-news2">

			<div class="container">

				<div class="iso-call heading-news-box">

					<div class="news-post image-post default-size">
					<?php
			$sql="SELECT * DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `myblogtable` WHERE category='Nigeria' ORDER BY `id` DESC LIMIT 0, 1";
			$result= mysqli_query($conn, $sql);
			if(mysqli_num_rows($result)>0){
				while($row=mysqli_fetch_array($result)){

			?>
						<img src="app/image/<?php echo $row['image'];?>">
						<div class="hover-box">
							<div class="inner-hover">

							<a class="category-post" href="politics-category.html"><?php echo $row['category'];?></a>
							<h2><a <?php echo "href='news.php?a=".$row['a']."'"; ?>><?php echo $row['headline'];?> </a></h2>
								<ul class="post-tags">
									<li><i class="fa fa-clock-o"></i><span><?php echo $row['newDate'];?></span></li>
									<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
								</ul>
								<!-- <p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.</p> -->
							</div>
						</div>
						<?php   }}?>
					</div>

					<div class="image-slider snd-size">
						<span class="top-stories">TOP STORIES</span>
						<ul class="bxslider">

						<?php
			$sql="SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `myblogtable` WHERE category='sports' ORDER BY `id` DESC LIMIT 0, 1";
			$result= mysqli_query($conn, $sql);
			if(mysqli_num_rows($result)>0){
				while($row=mysqli_fetch_array($result)){
			?>


							<li>
								<div class="news-post image-post">
								<img src="app/image/<?php echo $row['image'];?>">
									<div class="hover-box">
										<div class="inner-hover">
											<a class="category-post" href="politics-category.html"><?php echo $row['category'];?></a>
											<h2><a <?php echo "href='news.php?a=".$row['a']."'"; ?>><?php echo $row['headline'];?> </a></h2>
											<ul class="post-tags">
												<li><i class="fa fa-clock-o"></i><?php echo $row['newDate'];?></li>
												<li><i class="fa fa-photo"></i>Photo Credit: <a href="#"><?php echo $row['credit'];?></a></li>
												<li><a href="#"><i class="fa fa-comments-o"></i><span>200</span></a></li>
												<li><i class="fa fa-eye"></i><?php echo $row['postview'];?></li>
											</ul>
										</div>
									</div>
								</div>
							</li>

							<?php
				}}
							?>
							<!-- <li>
								<div class="news-post image-post">
									<img src="upload/news-posts/h2.jpg" alt="">
									<div class="hover-box">
										<div class="inner-hover">
											<a class="category-post" href="politics-category.html">Economy</a>
											<h2><a href="single-post.html">Franca do të bashkëpunojë me Kosovën në ekonomi. </a></h2>
											<ul class="post-tags">
												<li><i class="fa fa-clock-o"></i>27 may 2013</li>
												<li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
												<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
												<li><i class="fa fa-eye"></i>872</li>
											</ul>
										</div>
									</div>
								</div>
							</li> -->
							<!-- <li>
								<div class="news-post image-post">
									<img src="upload/news-posts/h8.jpg" alt="">
									<div class="hover-box">
										<div class="inner-hover">
											<a class="category-post" href="politics-category.html">Nation</a>
											<h2><a href="single-post.html">Porti i Durresit më i vizituari në ballkan kete vit. </a></h2>
											<ul class="post-tags">
												<li><i class="fa fa-clock-o"></i>27 may 2013</li>
												<li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
												<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
												<li><i class="fa fa-eye"></i>872</li>
											</ul>
										</div>
									</div>
								</div>
							</li> -->
						</ul>
					</div>

					<div class="news-post image-post">
					
					<?php
			$sql="SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `myblogtable` WHERE category='politics' ORDER BY `id` DESC LIMIT 0, 1";
			$result= mysqli_query($conn, $sql);
			if(mysqli_num_rows($result)>0){
				while($row=mysqli_fetch_array($result)){
			?>
						<img src="app/image/<?php echo $row['image'];?>">
						<div class="hover-box">
							<div class="inner-hover">
							<a class="category-post" href="politics-category.html"><?php echo $row['category'];?></a>
							<h2><a <?php echo "href='news.php?a=".$row['a']."'"; ?>><?php echo $row['headline'];?> </a></h2>
								<ul class="post-tags">
								<li><i class="fa fa-clock-o"></i><?php echo $row['newDate'];?></li>
									<li><a href="#"><i class="fa fa-comments-o"></i><span>20</span></a></li>
								</ul>
								<!-- <p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.</p> -->
							</div>
						</div>
						<?php }} ?>
					</div>
					

					<div class="news-post image-post">
					<?php
			$sql="SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `myblogtable` WHERE category='crime' ORDER BY `id` DESC LIMIT 0, 1";
			$result= mysqli_query($conn, $sql);
			if(mysqli_num_rows($result)>0){
				while($row=mysqli_fetch_array($result)){

			?>
						<img src="app/image/<?php echo $row['image'];?>">
						<div class="hover-box">
							<div class="inner-hover">
							<a class="category-post" href="politics-category.html"><?php echo $row['category'];?></a>
							<h2><a <?php echo "href='news.php?a=".$row['a']."'"; ?>> </a></h2>
								<ul class="post-tags">
								<li><i class="fa fa-clock-o"></i><?php echo $row['newDate'];?></li>
									<li><a href="#"><i class="fa fa-comments-o"></i><span>20</span></a></li>
								</ul>
								<!-- <p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.</p> -->
							</div>
						</div>
						<?php }} ?>
					</div>

					<div class="news-post image-post">
					<?php
			$sql="SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `myblogtable` WHERE category='nigeria' ORDER BY `id` DESC LIMIT 0, 1";
			$result= mysqli_query($conn, $sql);
			if(mysqli_num_rows($result)>0){
				while($row=mysqli_fetch_array($result)){

			?>
						<img src="app/image/<?php echo $row['image'];?>">
						<div class="hover-box">
							<div class="inner-hover">
							<a class="category-post" href="politics-category.html"><?php echo $row['category'];?></a>
							<h2><a <?php echo "href='news.php?a=".$row['a']."'"; ?>><?php echo $row['headline'];?> </a></h2>
								<ul class="post-tags">
								<li><i class="fa fa-clock-o"></i><?php echo $row['newDate'];?></li>
									<li><a href="#"><i class="fa fa-comments-o"></i><span>20</span></a></li>
								</ul>
								<!-- <p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.</p> -->
							</div>
						</div>
						<?php }} ?>
					</div>

					
				</div>
			</div>

		</section> -->
		<!-- End heading-news-section -->

		<!-- <ticker-news-section -->
			<!-- ================================================== --> 
		<section class="ticker-news">

			<div class="container">
				<div class="ticker-news-box">
					<span class="Fg-news">breaking news</span>
					
				</div>
			</div>

		</section>
		<!-- End ticker-news-section -->

		<!-- block-wrapper-section
			================================================== -->
		<section class="block-wrapper">
			<div class="container">
				<div class="row">

					<div class="col-md-2 col-sm-0 sidebar-sticky">

						<!-- <sidebar> -->
						<div class="sidebar small-sidebar theiaStickySidebar">

							<div class="widget review-widget">
								<div class="title-section">
									<h1><span>Review</span></h1>
								</div>

								<ul class="review-posts-list">
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
									<li>
									<?php
			$sql="SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `myblogtable` WHERE category='crime' ORDER BY `id` DESC LIMIT  1";
			$result= mysqli_query($conn, $sql);
			if(mysqli_num_rows($result)>0){
				while($row=mysqli_fetch_array($result)){

			?>
									<li><img src="app/image/<?php echo $row['image'];?>">
						<div class="hover-box">
							<div class="inner-hover">
							<a class="category-post" href="crime-category.html"><?php echo $row['category'];?></a>
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
			$sql="SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `myblogtable` WHERE category='sport' ORDER BY `id` DESC LIMIT  1";
			$result= mysqli_query($conn, $sql);
			if(mysqli_num_rows($result)>0){
				while($row=mysqli_fetch_array($result)){

			?>
									<li><img src="app/image/<?php echo $row['image'];?>">
						<div class="hover-box">
							<div class="inner-hover">
							<a class="category-post" href="sport-category.html"><?php echo $row['category'];?></a>
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
			$sql="SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `myblogtable` WHERE category='politics' ORDER BY `id` DESC LIMIT 0, 1";
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

							<!-- grid box -->
							<div class="grid-box">

								<div class="title-section">
									<h1><span>Today's Featured</span></h1>
								</div>

								<ul class="category-filter-posts">
									<li><a class="active" href="#">All</a></li>
									<li><a href="cat.php?cat=sports">Sports</a></li>
									<li><a href="cat.php?cat=politics">Politics</a></li>
									<li><a href="cat.php?cat=crime">Crime</a></li>
									<li><a href="cat.php?cat=nigeria">Nigeria</a></li>
								</ul>

								<div class="image-post-slider">
									<ul class="bxslider">
										<li>
										<?php
			$sql="SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `myblogtable` WHERE category='nigeria' ORDER BY `id` DESC LIMIT 2, 1";
			$result= mysqli_query($conn, $sql);
			if(mysqli_num_rows($result)>0){
				while($row=mysqli_fetch_array($result)){

			?>
											<div class="news-post image-post2">
												<div class="post-gallery">
												<img src="app/image/<?php echo $row['image'];?>">
													<div class="hover-box">
														<div class="inner-hover">
														<a class="category-post" href="nigeria-category.html"><?php echo $row['category'];?></a>
															<h2><a <?php echo "href='news.php?a=".$row['a']."'"; ?>><?php echo $row['headline'];?> </a></h2>
															<ul class="post-tags">
															<li><i class="fa fa-clock-o"></i><?php echo $row['newDate'];?></li>
																
																
															</ul>
														</div>
													</div>
												</div>
											</div>
											<?php }} ?>
										</li>
										<li>
										<?php
			$sql="SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `myblogtable` WHERE category='crime' ORDER BY `id` DESC LIMIT 1, 1";
			$result= mysqli_query($conn, $sql);
			if(mysqli_num_rows($result)>0){
				while($row=mysqli_fetch_array($result)){

			?>
											<div class="news-post image-post2">
												<div class="post-gallery">
												<img src="app/image/<?php echo $row['image'];?>">
													<div class="hover-box">
														<div class="inner-hover">
														<a class="category-post" href="sports-category.html"><?php echo $row['category'];?></a>
														<h2><a <?php echo "href='news.php?a=".$row['a']."'"; ?>><?php echo $row['headline'];?> </a></h2>
															<ul class="post-tags">
															<li><i class="fa fa-clock-o"></i><?php echo $row['newDate'];?></li>
																
															</ul>
														</div>
													</div>
												</div>
											</div>
											<?php }} ?>
										</li>
									</ul>
								</div>

								<div class="row">
									<div class="col-md-6">
										<ul class="list-posts">
								

											<li>
											<?php
			$sql="SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `myblogtable` WHERE category='crime' ORDER BY `id` DESC LIMIT 0, 1";
			$result= mysqli_query($conn, $sql);
			if(mysqli_num_rows($result)>0){
				while($row=mysqli_fetch_array($result)){

			?>
												<img src="app/image/<?php echo $row['image'];?>">
												<div class="post-content">
												<h2><a <?php echo "href='news.php?a=".$row['a']."'"; ?>><?php echo $row['headline'];?> </a></h2>
													<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i><?php echo $row['newDate'];?></li> 
													</ul>
												</div>
											</li>
											<?php  }}?>

											<li>
											<?php
			$sql="SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `myblogtable` WHERE category='nigeria' ORDER BY `id` DESC LIMIT 0, 1";
			$result= mysqli_query($conn, $sql);
			if(mysqli_num_rows($result)>0){
				while($row=mysqli_fetch_array($result)){

			?>
												<img src="app/image/<?php echo $row['image'];?>">
												<div class="post-content">
												<h2><a <?php echo "href='news.php?a=".$row['a']."'"; ?>><?php echo $row['headline'];?> </a></h2>
													<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i><?php echo $row['newDate'];?></li> 
													</ul>
												</div>
												<?php }} ?>
											</li>

											<li>
											<?php
			$sql="SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `myblogtable` WHERE category='sports' ORDER BY `id` DESC LIMIT 0, 1";
			$result= mysqli_query($conn, $sql);
			if(mysqli_num_rows($result)>0){
				while($row=mysqli_fetch_array($result)){

			?>

                                                <img src="app/image/<?php echo $row['image'];?>">  
												<div class="post-content">
												<h2><a <?php echo "href='news.php?a=".$row['a']."'"; ?>><?php echo $row['headline'];?> </a></h2>
													<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i><?php echo $row['newDate'];?></li> 
													</ul>
												</div>
												<?php }} ?>
											</li>
										</ul>
									</div>

									<div class="col-md-6">
										<ul class="list-posts">
											<li>
											<?php
			$sql="SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `myblogtable` WHERE category='sports' ORDER BY `id` DESC LIMIT 1, 1";
			$result= mysqli_query($conn, $sql);
			if(mysqli_num_rows($result)>0){
				while($row=mysqli_fetch_array($result)){

			?>
												<img src="app/image/<?php echo $row['image'];?>">
												<div class="post-content">
												<h2><a <?php echo "href='news.php?a=".$row['a']."'"; ?>><?php echo $row['headline'];?> </a></h2>
													<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i><?php echo $row['newDate'];?></li> 
													</ul>
												</div>
											</li>
											<?php }}
											?>

											<li>
											<?php
			$sql="SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `myblogtable` WHERE category='politics' ORDER BY `id` DESC LIMIT 1, 1";
			$result= mysqli_query($conn, $sql);
			if(mysqli_num_rows($result)>0){
				while($row=mysqli_fetch_array($result)){

			?>
												<img src="app/image/<?php echo $row['image'];?>">
												<div class="post-content">
												<h2><a <?php echo "href='news.php?a=".$row['a']."'"; ?>><?php echo $row['headline'];?> </a></h2>
													<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i><?php echo $row['newDate'];?></li>
													</ul>
												</div>
												<?php }} ?>
											</li>

											<li>
											<?php
			$sql="SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `myblogtable` WHERE category='crime' ORDER BY `id` DESC LIMIT 1, 1";
			$result= mysqli_query($conn, $sql);
			if(mysqli_num_rows($result)>0){
				while($row=mysqli_fetch_array($result)){

			?>
												<img src="app/image/<?php echo $row['image'];?>">
												<div class="post-content">
												<h2><a <?php echo "href='news.php?a=".$row['a']."'"; ?>><?php echo $row['headline'];?> </a></h2>
													<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i><?php echo $row['newDate'];?></li>
													</ul>
												</div>
												<?php }} ?>
											</li>
										</ul>
									</div>

								</div>

								<div class="center-button">
									<a href="#"><i class="fa fa-refresh"></i> More from featured</a>
								</div>

							</div>
							<!-- End grid box -->

							<!-- google addsense -->
							<!-- <div class="advertisement">
								<div class="desktop-advert">
									<span>Advertisement</span>
									<img src="upload/addsense/600x80.jpg" alt="">
								</div>
								<div class="tablet-advert">
									<span>Advertisement</span>
									<img src="upload/addsense/468x60-white.jpg" alt="">
								</div>
								<div class="mobile-advert">
									<span>Advertisement</span>
									<img src="upload/addsense/300x250.jpg" alt="">
								</div>
							</div> -->
							<!-- End google addsense -->

							<!-- carousel box -->
							<div class="carousel-box owl-wrapper">

								<div class="title-section">
									<!-- <h1><span>Popular</span></h1> -->
								</div>

								<div class="owl-carousel" data-num="2">
								
									<div class="item">
										
									</div>

								</div> 

							</div>
							<!-- End carousel box -->

						</div>
						<!-- End block content -->

					</div>

					<div class="col-md-3 col-sm-4 sidebar-sticky">

						<!-- sidebar -->
						<div class="sidebar large-sidebar theiaStickySidebar">

							<!-- <div class="widget social-widget">
								<div class="title-section">
									<h1><span>Stay Connected</span></h1>
								</div>
								<ul class="social-share">
									<li>
										<a href="#" class="rss"><i class="fa fa-rss"></i></a>
										<span class="number">9,455</span>
										<span>Subscribers</span>
									</li>
									<li>
										<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
										<span class="number">56,743</span>
										<span>Fans</span>
									</li>
									<li>
										<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
										<span class="number">43,501</span>
										<span>Followers</span>
									</li>
									<li>
										<a href="#" class="google"><i class="fa fa-google-plus"></i></a>
										<span class="number">35,003</span>
										<span>Followers</span>
									</li>
								</ul>
							</div> -->

							<div class="widget features-slide-widget">
								<div class="title-section">
									<h1><span>Featured Posts</span></h1>
								</div>
								<div class="image-post-slider">
									<ul class="bxslider">
										<li>
										<?php
			$sql="SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `myblogtable` WHERE category='nigeria' ORDER BY `id` DESC LIMIT 0, 1";
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
										</li>
										<li>
										
											<?php
			$sql="SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `myblogtable` WHERE category='sports' ORDER BY `id` DESC LIMIT 0, 1";
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
										</li>
										
									</ul>
								</div>
								<ul class="list-posts">
									<li>
									<?php
			$sql="SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `myblogtable` WHERE category='politics' ORDER BY `id` DESC LIMIT 0, 1";
			$result= mysqli_query($conn, $sql);
			if(mysqli_num_rows($result)>0){
				while($row=mysqli_fetch_array($result)){

			?>
									<img src="app/image/<?php echo $row['image'];?>">
										<div class="post-content">
										<h2><a <?php echo "href='news.php?a=".$row['a']."'"; ?>><?php echo $row['headline'];?> </a></h2>
											<ul class="post-tags">
											<li><i class="fa fa-clock-o"></i><?php echo $row['newDate'];?></li>
											</ul>
										</div>
										<?php }} ?>
									</li>

									<li>
									<?php
			$sql="SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `myblogtable` WHERE category='nigeria' ORDER BY `id` DESC LIMIT 0, 1";
			$result= mysqli_query($conn, $sql);
			if(mysqli_num_rows($result)>0){
				while($row=mysqli_fetch_array($result)){

			?>
										<img src="app/image/<?php echo $row['image'];?>">
										<div class="post-content">
										<h2><a <?php echo "href='news.php?a=".$row['a']."'"; ?>><?php echo $row['headline'];?> </a></h2>
											<ul class="post-tags">
											<li><i class="fa fa-clock-o"></i><?php echo $row['newDate'];?></li>
											</ul>
										</div>
										<?php }} ?>
									</li>
								</ul>
							</div>

							<div class="advertisement">
								<!-- <div class="desktop-advert">
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
								</div> -->
							</div>

							<!-- <div class="widget tab-posts-widget"> 

								<ul class="nav nav-tabs" id="myTab">
									<li class="active">
							<div class="tab-content">
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
									</div>
									<div class="tab-pane" id="option2">
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
							</div> 			<a href="#option1" data-toggle="tab">Popular</a>
									</li>
									<li>
										<a href="#option2" data-toggle="tab">Recent</a>
									</li>
								</ul> --> -->

								

						</div>
						<!-- End sidebar -->

					</div>

				</div>

			</div>
		</section>
		<!-- End block-wrapper-section -->

		<!-- list line posts section -->
		
		<!-- End list line posts section --
		<!-- feature-video-section 
			================================================== -->
		<!-- <section class="feature-video">
			<div class="container">
				<div class="title-section white">
					<h1><span>Politics Original Videos</span></h1>
				</div>

				<div class="features-video-box owl-wrapper">
					<div class="owl-carousel" data-num="4">
					<?php
					$sql="SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `myblogvideo` ORDER BY `id` DESC LIMIT 0, 4";
					$result= mysqli_query($conn, $sql);
					if(mysqli_num_rows($result)>0){
						while ($row=mysqli_fetch_array($result)){		
				?>
					
						<div class="item news-post video-post">
							<img src="app/image/<?php echo $row['images'];?>">

							<a href="https://www.youtube.com/watch?v=LL59es7iy8Q" class="video-link"><i class="fa fa-play-circle-o"></i></a>
							<div class="hover-box">
								<h2><a <?php echo "href='video.php?=".$row['id']."'" ?>><?php echo $row['headline'];?></a></h2>
								<ul class="post-tags">
									<li><i class="fa fa-clock-o"></i>27 may 2013</li>
								</ul>
							</div>
							
						</div>
				</div>
				
				<?php
					}
				}
				?>
			</div>
			</div>
		</section>  -->
		<!-- End feature-video-section -->

		<!-- block-wrapper-section
			================================================== -->
		<section class="block-wrapper">
			<div class="container">
				<div class="row">

					
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
								<p>whatsapp number:07039574836 </p>
								<p>Email:akinsikubusayocharles@gmail.com</p><br> <br> <br> <br> <br> 
								<!-- <a href="index-2.php"><img src="bloglogo.JPG" height="115px" width="300px"></a> -->
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
						<p>&copy; COPYRIGHT 2023 busaycharly@gmail.com</p>
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

<!-- Mirrored from nunforest.com/hotmagazine/politics/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Jul 2020 02:31:48 GMT -->
</html>