<?php
include('index_conn.php');
$today = date("d-M-Y");
if (isset($_REQUEST['vid'])){
    $sql1 = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `myblogvideo` WHERE category='$_REQUEST[vid]'";
    $result = mysqli_query($conn, $sql1);
    $row = mysqli_fetch_array($result);
    $newcategory = $row['category']; 
}
?>
<!doctype html>
<html lang="en" class="no-js">

<!-- Mirrored from nunforest.com/hotmagazine/default/news-category5.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Jul 2020 02:47:35 GMT -->
<head>

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

            
	<?php
include('top_nav.php');
	?>

		<!-- block-wrapper-section
			================================================== -->
		<section class="block-wrapper">
			<div class="container">

				<!-- block content -->
				<div class="block-content non-sidebar">
               
					<!-- grid box --> 
					<div class="grid-box">
                    
						<div class="title-section">
                       </div>

						<div class="row">
                        <?php
                        $sql1 = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM myblogvideo WHERE category='video'";
                        $result = mysqli_query($conn, $sql1);
                        if(mysqli_num_rows($result) > 0){
                            while ($row = mysqli_fetch_array($result)){
                        ?>
							<div class="col-md-4">
								<div class="news-post standard-post2">
                                <div class="post-gallery">
								<a><img src="app/vimages/<?php echo $row['images'];?>" alt="" height="210px"></a>
										<a class="category-post world"></a> 
									</div>
									<div class="post-title">
										<h2><a <?php echo "href='video.php?id=".$row['id']."'"?>><?php echo $row['headline']; ?></a></h2>
										<ul class="post-tags">
											<li><i class="fa fa-clock-o"></i><?php echo $row['newDate']; ?></li>
											
											<!-- <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li> -->
										</ul>
									</div>
									<!-- <div class="post-content">
										
										<a <?php echo $row['embed']; ?>class="read-more-button"><i class="fa fa-arrow-circle-right"></i>watch video</a>
									</div> -->
								</div>
							</div>
                            <?php
}
}
                                     
                                    
mysqli_close($conn);
                
?>   

						</div>
                      
					</div>
					<!-- End grid box -->
                   	
                    
				</div>
				<!-- End block content -->
			</div>
		</section>
		<!-- End block-wrapper-section -->
        <!-- google addsense -->
					<div class="advertisement">
						<div class="desktop-advert">
							<span>Advertisement</span>
							<img src="upload/addsense/728x90-white.jpg" alt="">
						</div>
						<div class="tablet-advert">
							<span>Advertisement</span>
							<img src="upload/addsense/468x60-white.jpg" alt="">
						</div>
						<div class="mobile-advert">
							<span>Advertisement</span>
							<img src="upload/addsense/300x250.jpg" alt="">
						</div>
					</div>
					<!-- End google addsense -->

					

	</div>

	<!-- <?php
include('footer.php');
	?> -->
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
	<script type="text/javascript" src="js/retina-1.1.0.min.js"></script>
	<script type="text/javascript" src="js/plugins-scroll.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

</body>

<!-- Mirrored from nunforest.com/hotmagazine/default/news-category5.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Jul 2020 02:47:38 GMT -->
</html>