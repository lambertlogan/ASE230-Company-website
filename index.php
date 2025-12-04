
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Orion Aerospace Dynamics</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
    <meta name="keywords" content="bootstrap 5, premium, marketing, multipurpose" />
    <meta content="Themesbrand" name="author" />
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />

    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- icon -->
    <link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/pe-icon-7-stroke.css" />

    <link href="css/style.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/colors/cyan.css" id="color-opt">
</head>

<body data-bs-theme="light">

    <!-- STRAT NAVBAR -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-white navbar-custom sticky sticky-white" role="navigation"
        id="navbar">
        <div class="container">
            <!-- LOGO -->
            <a class="navbar-brand logo text-uppercase" href="index.php">
                <i class="mdi mdi-alien"></i>Orion Aerospace Dynamics
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu text-dark"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav navbar-center" id="navbar-navlist">
                    <li class="nav-item">
                        <a data-scroll href="#home" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a data-scroll href="#services" class="nav-link">Products</a>
                    </li>
                    <li class="nav-item">
                        <a data-scroll href="#about" class="nav-link">About</a>
                    </li>
					<li class="nav-item">
                        <a data-scroll href="#awards" class="nav-link">Awards</a>
                    </li>
                    <li class="nav-item">
                        <a data-scroll href="#contact" class="nav-link">Contact</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->

    <!--START HOME-->
    <section class="section bg-home home-half" id="home" data-image-src="images/bg-home.jpg">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-white text-center">
                    <h1 class="home-title">Orion Aerospace Dynamics</h1>
                    <p class="pt-3 home-desc mx-auto"><?php
						include_once "lib/readText.php";
						echo readTextFile("data/Mission.txt");
					?></p>

                    <!-- Modal -->
                    <div class="modal fade" id="watchvideomodal"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-body p-0" style="margin-bottom: -8px;">
                                    <video id="VisaChipCardVideo" class="video-box" controls  width="800" >
                                        <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4" >
                                        <!--Browser does not support <video> tag -->
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END HOME-->

    <!--START SERVICES-->
    <section class="section bg-light " id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1 class="section-title text-center">Our Products</h1>
                    <div class="section-title-border mt-3"></div>
                </div>
            </div>
            <div class="row mt-5">
			
<!-- products json logic-->
			<?php 
			include_once "lib/readJson.php";
			$products = readJsonFile("data/Products.json")["products"];
			
			for ($x = 0; $x < 4; $x++){
                echo '<div class="col-lg-4 mt-4">';
                    echo '<div class="services-box">';
                        echo '<div class="d-flex">';
                            echo '<i class="pe-7s-diamond text-primary"></i>';
                            echo '<div class="ms-4">';
				
									echo "<h2>" . $products[$x]["name"] . "</h2>\n";
									foreach ($products[$x]["applications"] as $app) {
										echo "<h4>• " . $app . "</h4>\n";
									}
									echo "<p>" . $products[$x]["description"] . "</p>\n";

                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
			}
			?>
            </div>
    </section>

    <!--START ABOUT-US-->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="about-title mx-auto text-center">
                        <h2>About who we are</h2>
                        <p class="text-muted pt-4"><?php
							include_once "lib/readText.php";
							echo readTextFile("data/About.txt");
						?></p>
                    </div>
                </div>
            </div>
			<div class="row">
				
<!-- team member json logic-->
				<?php
					include_once "lib/readJson.php";
					$members = readJsonFile("data/Team.json")["team"];

					foreach ($members as $member) {
						echo '<div class="col-lg-3 col-sm-6">';
							echo '<div class="team-box text-center">';
								echo '<div class="team-wrapper">';
									echo '<div class="team-member">';
										echo '<img alt="" src="' . $member["image"] . '" class="img-fluid rounded">';
									echo '</div>';
								echo '</div>';
								echo '<h4 class="team-name">' . $member["name"] . '</h4>';
								echo '<p class="text-uppercase team-designation">' . $member["position"] . '</p>';
								echo '<p class="text-muted">' . $member["description"] . '</p>';
							echo '</div>';
						echo '</div>';
					}
				?>
			</div>
        </div>
    </section>
    <!--END ABOUT-US-->

    <!--START AWARDS-->
    <section class="section" id="awards">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1 class="section-title text-center">Awards</h1>
                </div>
            </div>
            <div class="row mt-5">
				
<!-- CSV logic -->
				<?php
				include_once "lib/readCsv.php"; 
				$awards = readCsvFile("data/Awards.csv");
				
				foreach ($awards as $award) {
                echo '<div class="col-lg-4">';
                    echo '<div class="testimonial-box mt-4">';
                        echo '<div class="testimonial-decs p-4">';
                            echo '<div class="testi-icon">';
                                echo '<i class="mdi mdi-format-quote-open display-1"></i>';
                            echo '</div>';
                            echo '<img src="images/awards/trophy.png" alt=""';
                                echo 'class="img-fluid mx-auto d-block img-thumbnail rounded-circle mb-4">';
                            echo '<div class="p-1">';
                                echo '<h5 class="text-center text-uppercase mb-3">' . $award[1] .' - <span
                                        class="text-muted text-capitalize">' . $award[0] . '</span></h5>';
                                echo '<p class="text-muted text-center mb-0">' . $award[2] . ' </p>';
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
				}
				?>
            </div>
        </div>
    </section>
    <!--END AWARDS-->

    <!-- CONTACT FORM START-->
    <section class="section " id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1 class="section-title text-center">Get In Touch</h1>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="mt-4 pt-4">
                        <p class="mt-4"><span class="h5">Office Address 1:</span><br> <span
                                class="text-muted d-block mt-2">4461 Cedar Street Moro, AR 72368</span></p>
                        <p class="mt-4"><span class="h5">Office Address 2:</span><br> <span
                                class="text-muted d-block mt-2">2467 Swick Hill Street <br />New Orleans, LA
                                70171</span></p>
                        <p class="mt-4"><span class="h5">Working Hours:</span><br> <span
                                class="text-muted d-block mt-2">9:00AM To 6:00PM</span></p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="custom-form mt-4 pt-4">
                        <form method="post" name="myForm" onsubmit="return validateForm()">
                            <p id="error-msg"></p>
                            <div id="simple-msg"></div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group mt-2">
                                        <input name="name" id="name" type="text" class="form-control"
                                            placeholder="Your name*">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mt-2">
                                        <input name="email" id="email" type="email" class="form-control"
                                            placeholder="Your email*">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mt-2">
                                        <input type="text" class="form-control" id="subject"
                                            placeholder="Your Subject.." />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mt-2">
                                        <textarea name="comments" id="comments" rows="4" class="form-control"
                                            placeholder="Your message..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 text-end">
                                    <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary"
                                        value="Send Message">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTACT FORM END-->
	
    <!-- javascript -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/smooth-scroll.polyfills.min.js"></script>
    <script src="js/gumshoe.polyfills.min.js"></script>
    <!-- Main Js -->
    <script src="js/app.js"></script>
</body>

</html>