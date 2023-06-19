<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Registration form</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	   <link href="https://fonts.googleapis.com/css?family=Cardo:400i|Open+Sans:700|Raleway:300,400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicons/favicon-16x16.png">
    <link rel="manifest" href="img/favicons/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">



</head>
<body>

<!-- Header -->
<header class="header" id="header">
    <div class="container">
        <div class="header__inner">
            <div class="header__logo">
                <img src="img/activebox-logo.png" alt="">
            </div>

            <nav class="nav" id="nav">
                <a class="nav__link" href="#" data-scroll="#features">Features</a>
                <a class="nav__link" href="#" data-scroll="#works">Works</a>
                <a class="nav__link" href="#" data-scroll="#team">Our Team</a>
                <a class="nav__link" href="#" data-scroll="#reviews">Testimonials</a>
                <a class="nav__link" href="#" data-scroll="#download">Download</a>
            </nav>

            <button class="burger" type="button" id="navToggle">
                <span class="burger__item">Menu</span>
            </button>

        </div>
    </div>
</header>
<!-- Intro -->
<div class="intro" id="intro">
    <div class="container">
        <div class="intro__inner">
            <h1 class="intro__title">Our registration page </h1>
            <h2 class="intro__subtitle">In order to register please scroll down and complete the form</h2>
            <a class="btn  btn--red" href="#">Our contacts</a>
        </div>
    </div>
</div>

<!-- Sprite -->
<svg style="display: none;">

    <symbol id="facebook" viewBox="0 0 430.113 430.114">
        <g>
            <path d="M158.081,83.3c0,10.839,0,59.218,0,59.218h-43.385v72.412h43.385v215.183h89.122V214.936h59.805
                c0,0,5.601-34.721,8.316-72.685c-7.784,0-67.784,0-67.784,0s0-42.127,0-49.511c0-7.4,9.717-17.354,19.321-17.354
                c9.586,0,29.818,0,48.557,0c0-9.859,0-43.924,0-75.385c-25.016,0-53.476,0-66.021,0C155.878-0.004,158.081,72.48,158.081,83.3z"/>
        </g>
    </symbol>

    <symbol id="twitter" viewBox="0 0 612 612">
        <g>
            <path d="M612,116.258c-22.525,9.981-46.694,16.75-72.088,19.772c25.929-15.527,45.777-40.155,55.184-69.411
                c-24.322,14.379-51.169,24.82-79.775,30.48c-22.907-24.437-55.49-39.658-91.63-39.658c-69.334,0-125.551,56.217-125.551,125.513
                c0,9.828,1.109,19.427,3.251,28.606C197.065,206.32,104.556,156.337,42.641,80.386c-10.823,18.51-16.98,40.078-16.98,63.101
                c0,43.559,22.181,81.993,55.835,104.479c-20.575-0.688-39.926-6.348-56.867-15.756v1.568c0,60.806,43.291,111.554,100.693,123.104
                c-10.517,2.83-21.607,4.398-33.08,4.398c-8.107,0-15.947-0.803-23.634-2.333c15.985,49.907,62.336,86.199,117.253,87.194
                c-42.947,33.654-97.099,53.655-155.916,53.655c-10.134,0-20.116-0.612-29.944-1.721c55.567,35.681,121.536,56.485,192.438,56.485
                c230.948,0,357.188-191.291,357.188-357.188l-0.421-16.253C573.872,163.526,595.211,141.422,612,116.258z"/>
        </g>
    </symbol>

    <symbol id="linkedin" viewBox="0 0 430.117 430.118">
        <g>
            <path  d="M398.355,0H31.782C14.229,0,0.002,13.793,0.002,30.817v368.471
                c0,17.025,14.232,30.83,31.78,30.83h366.573c17.549,0,31.76-13.814,31.76-30.83V30.817C430.115,13.798,415.904,0,398.355,0z
                 M130.4,360.038H65.413V165.845H130.4V360.038z M97.913,139.315h-0.437c-21.793,0-35.92-14.904-35.92-33.563
                c0-19.035,14.542-33.535,36.767-33.535c22.227,0,35.899,14.496,36.331,33.535C134.654,124.415,120.555,139.315,97.913,139.315z
                 M364.659,360.038h-64.966V256.138c0-26.107-9.413-43.921-32.907-43.921c-17.973,0-28.642,12.018-33.327,23.621
                c-1.736,4.144-2.166,9.94-2.166,15.728v108.468h-64.954c0,0,0.85-175.979,0-194.192h64.964v27.531
                c8.624-13.229,24.035-32.1,58.534-32.1c42.76,0,74.822,27.739,74.822,87.414V360.038z M230.883,193.99
                c0.111-0.182,0.266-0.401,0.42-0.614v0.614H230.883z"/>
        </g>
    </symbol>

</svg>



	<div class="center container mt-4">
		<?php
			if($_COOKIE['user'] == ''):
		?>
		<div class="row center-block">
			<div class="col"><br>
				<h1>Registration</h1><br>
				<form action="check.php" method="post">
					<input type="text" class="form-control" name="login" id="login" placeholder="Login"><br>
					<input type="text" class="form-control" name="name" id="name" placeholder="Name"><br>
					<input type="password" class="form-control" name="pass" id="pass" placeholder="Password"><br>
					<button class="btn btn-success" type="submit">Registration</button><br>
				</form>
			</div>
			<div class="col"><br>
				<h1>Login</h1><br>
				<form action="auth.php" method="post">
					<input type="text" class="form-control" name="login" id="login" placeholder="Login"><br>
					<input type="password" class="form-control" name="pass" id="pass" placeholder="Password"><br>
					<button class="btn btn-success" type="submit">Login</button>
				</form>
			</div>
			<?php else: ?>
				<p>Hi, <?php echo htmlspecialchars($_COOKIE['user'], ENT_QUOTES, 'UTF-8'); ?>. To exit click <a href="exit.php">here</a>.</p
		<?php endif;?>
		</div>
	</div><br><br><br>

	<!-- Footer -->
<footer class="footer">
    <div class="container">

        <div class="footer__inner">
            <div class="footer__block">
                <h4 class="footer__title">Location</h4>
                <address class="footer__address">
                    <div>3481 Melrose Place</div>
                    <div>Beverly Hills, CA 90210</div>
                </address>
            </div>

            <div class="footer__block">
                <h4 class="footer__title">Share with Love</h4>
                <div class="social  social--footer">
                    <a class="social__item" href="#" target="_blank">
                        <svg class="social__icon">
                            <use xlink:href="#facebook"></use>
                        </svg>
                    </a>
                    <a class="social__item" href="#" target="_blank">
                        <svg class="social__icon">
                            <use xlink:href="#twitter"></use>
                        </svg>
                    </a>
                    <a class="social__item" href="#" target="_blank">
                        <svg class="social__icon">
                            <use xlink:href="#linkedin"></use>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="footer__block">
                <h4 class="footer__title">About ActiveBox</h4>
                <div class="footer__text">
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec ullamcorper nulla non metus auctor fringilla.</p>
                </div>
            </div>
        </div><!-- /.footer__inner -->

    </div><!-- /.container -->

    <div class="copyright">
        <div class="container">
            <div class="copyright__text">
                <div>Copyright © 2021 ActiveBox. All Rights Reserved</div>
                <div>Made <span>by Artem Degtiarev & Umidjon Murodov</span></div>
            </div>
        </div>
    </div>
</footer>

</body>
</html>