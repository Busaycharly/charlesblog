<!-- Header
		    ================================================== -->
            <header class="clearfix second-style">
            <!-- Bootstrap navbar -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation">

                <!-- Top line -->
                <div class="top-line">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9">
                                <ul class="top-line-list">
                                <li>
                                <span class="time-now">
                                    <script language=javascript>
                                        todaysDate = new Date();
                                        dayarray = new
                                        Array("Sun", "Mon", "Tues", "Wed", "Thur", "Fri",
                                            "Saturday");
                                        montharray = new Array("Jan", "Feb", "Mar", "Apr",
                                            "May", "Jun", "Jul", "Aug", "Sept", "Oct", "Nov", "Dec");
                                        document.write(dayarray[todaysDate.getDay()] + ", " +
                                            montharray[todaysDate.getMonth()] + " " + todaysDate.getDate() + ", ");
                                        if (todaysDate.getYear() <
                                            1000) {
                                            document.write(todaysDate.getYear() + 1900);
                                        } else {
                                            document.write(todaysDate.getYear());
                                        }
                                    </script>
                                </span>


                            </li>
                            <li> <span class="font-extra-bold m-t-xl m-b-xs" id="time" style="font-weight:bold">
                                    <script>
                                        function checkTime(i) {
                                            if (i < 10) {
                                                i = "0" + i;
                                            }
                                            return i;
                                        }

                                        function startTime() {
                                            var today = new Date();
                                            var h = today.getHours();
                                            var m = today.getMinutes();
                                            var s = today.getSeconds();
                                            // add a zero in front of numbers<10
                                            m = checkTime(m);
                                            s = checkTime(s);
                                            document.getElementById('time').innerHTML = h + ":" + m + ":" + s;
                                            t = setTimeout(function() {
                                                startTime()
                                            }, 500);
                                        }
                                        startTime();
                                    </script>
                                </span></li>
                                    <li><a href="superadmin/index.php">Admin LogIn</a></li>
                                    <li><a href="contact.php">Contact Us</a></li>
                               </ul>
                            </div>
                            <div class="col-md-3">
                                <ul class="social-icons">
                                    <li><a class="facebook" href="https://web.facebook.com/theinsiderng" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="twitter" href="https://twitter.com/theinsiderngcom" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Top line -->

                <!-- Logo & advertisement -->
                <div class="logo-advertisement">
                    <div class="container">

                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
                            <!-- <a class="navbar-brand" href="index.php"><img src="bloglogo.JPG" atl=""></a> -->
                        </div>

                        <!-- <div class="advertisement">
                            <div class="desktop-advert">
                                <span>Advertisement</span>
                                <img src="upload/addsense/728x90-white.jpg" alt="">
                            </div>
                            <div class="tablet-advert">
                                <span>Advertisement</span>
                                <img src="upload/addsense/468x60-white.jpg" alt="">
                            </div>
                        </div> -->
                    </div>
                </div>
                <!-- End Logo & advertisement -->

                <!-- navbar list container -->
                <div class="nav-list-container">
                    <div class="container">
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-left">

                                <li><a class="home" href="index.php">Home</a></li>
                                <!-- <li><a class="world" href="cat.php?cat=World">World</a></li> -->
                                <li><a class="travel" href="cat.php?cat=sports">Sports</a></li>
                                <li><a class="tech" href="cat.php?cat=politics">Politics</a></li>
                                <!-- <li><a class="fashion" href="cat.php?cat=fashion">Fashion</a></li> -->
                                <!-- <li><a class="video" href="videocat.php?vid=Video">Video</a></li> -->
                                <li><a class="sport" href="cat.php?cat=crime">Crime</a></li>
                                <li><a class="video" href="videocat.php?cat=video">video</a></li>
                                <!-- <li class="drop"><a class="features" href="#">Features</a></li> -->
                            </ul>
                            <form class="navbar-form navbar-right" role="search" method="post" action="search.php">
                                <input type="text" id="search" name="search" placeholder="Search here">
                                <button type="submit" id="search-submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                </div>
                <!-- End navbar list container -->

            </nav>
            <!-- End Bootstrap navbar -->

        </header>
        <!-- End Header -->
