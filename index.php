<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
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

    <meta name="description" content="The description of a page" />
    <meta name="google" content="notranslate" />
    <title>ActiveBox</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>

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
            <h1 class="intro__title">Your Favorite One Page Multi Purpose Template</h1>
            <h2 class="intro__subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna vel scelerisque nisl consectetur et.</h2>
            <a class="btn  btn--red" href="authorization.php">Registration</a>
        </div>
    </div>
</div>


<!-- Features -->
<div class="container" id="features">
    <div class="features">
        <div class="features__item">
            <img class="features__icon" src="img/features/feature-1.png" alt="">
            <h4 class="features__title">Easily Customised</h4>
            <div class="features__text">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla</div>
        </div>

        <div class="features__item">
            <img class="features__icon" src="img/features/feature-2.png" alt="">
            <h4 class="features__title">Responsive REady</h4>
            <div class="features__text">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla</div>
        </div>

        <div class="features__item">
            <img class="features__icon" src="img/features/feature-3.png" alt="">
            <h4 class="features__title">Modern Design</h4>
            <div class="features__text">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla</div>
        </div>

        <div class="features__item">
            <img class="features__icon" src="img/features/feature-4.png" alt="">
            <h4 class="features__title">Clean Code</h4>
            <div class="features__text">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla</div>
        </div>

        <div class="features__item">
            <img class="features__icon" src="img/features/feature-5.png" alt="">
            <h4 class="features__title">Ready to Ship</h4>
            <div class="features__text">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla</div>
        </div>

        <div class="features__item">
            <img class="features__icon" src="img/features/feature-6.png" alt="">
            <h4 class="features__title">Download for Free</h4>
            <div class="features__text">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla</div>
        </div>
    </div>
</div>



<!-- Works -->
<div class="works" id="works">
    <div class="works__item">
        <img class="works__photo" src="img/works/work-1.jpg" alt="">
        <div class="works__content">
            <div class="works__title">Project Name</div>
            <div class="works__text">User Interface Design</div>
        </div>
    </div>

    <div class="works__item">
        <img class="works__photo" src="img/works/work-2.jpg" alt="">
        <div class="works__content">
            <div class="works__title">Project Name</div>
            <div class="works__text">User Interface Design</div>
        </div>
    </div>

    <div class="works__item">
        <img class="works__photo" src="img/works/work-3.jpg" alt="">
        <div class="works__content">
            <div class="works__title">Project Name</div>
            <div class="works__text">User Interface Design</div>
        </div>
    </div>

    <div class="works__item">
        <img class="works__photo" src="img/works/work-4.jpg" alt="">
        <div class="works__content">
            <div class="works__title">Project Name</div>
            <div class="works__text">User Interface Design</div>
        </div>
    </div>

    <div class="works__item">
        <img class="works__photo" src="img/works/work-5.jpg" alt="">
        <div class="works__content">
            <div class="works__title">Project Name</div>
            <div class="works__text">User Interface Design</div>
        </div>
    </div>

    <div class="works__item">
        <img class="works__photo" src="img/works/work-6.jpg" alt="">
        <div class="works__content">
            <div class="works__title">Project Name</div>
            <div class="works__text">User Interface Design</div>
        </div>
    </div>

    <div class="works__item">
        <img class="works__photo" src="img/works/work-7.jpg" alt="">
        <div class="works__content">
            <div class="works__title">Project Name</div>
            <div class="works__text">User Interface Design</div>
        </div>
    </div>

    <div class="works__item">
        <img class="works__photo" src="img/works/work-8.jpg" alt="">
        <div class="works__content">
            <div class="works__title">Project Name</div>
            <div class="works__text">User Interface Design</div>
        </div>
    </div>
</div>



<!-- Team -->
<div class="team" id="team">
    <div class="container">
        <div class="team__inner">

            <div class="team__item">
                <img class="team__photo" src="img/team/team-1.jpg" alt="">
                <div class="team__name">Ruth Woods</div>
                <div class="team__prof">Founder, CEO</div>
                <div class="team__text">
                    <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
                </div>

                <div class="social">
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

            <div class="team__item">
                <img class="team__photo" src="img/team/team-2.jpg" alt="">
                <div class="team__name">Timothy Reed</div>
                <div class="team__prof">Co-Founder, Developer</div>
                <div class="team__text">
                    <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
                </div>
                <div class="social">
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

            <div class="team__item">
                <img class="team__photo" src="img/team/team-3.jpg" alt="">
                <div class="team__name">Victoria Valdez</div>
                <div class="team__prof">UI Designer</div>
                <div class="team__text">
                    <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
                </div>
                <div class="social">
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

            <div class="team__item">
                <img class="team__photo" src="img/team/team-4.jpg" alt="">
                <div class="team__name">Beverly Little</div>
                <div class="team__prof">Data Scientist</div>
                <div class="team__text">
                    <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
                </div>
                <div class="social">
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

        </div>
    </div>
</div>



<!-- Testimonials -->
<div class="reviews" id="reviews">
    <div class="container">

        <div class="reviews__slider" id="reviewsSlider">
            <div class="slick-item">
                <div class="reviews__item">
                    <div class="reviews__photo">
                        <img class="reviews__img" src="img/reviews/review-1.jpg" alt="">
                    </div>
                    <div class="reviews__content">
                        <div class="reviews__text">“Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec sed odio dui. Aenean eu leo quam...”</div>
                        <div class="reviews__author">Susan Sims, Interaction Designer at XYZ</div>
                    </div>
                </div>
            </div>

            <div class="slick-item">
                <div class="reviews__item">
                    <div class="reviews__photo">
                        <img class="reviews__img" src="img/reviews/review-1.jpg" alt="">
                    </div>
                    <div class="reviews__content">
                        <div class="reviews__text">“Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat iure sed placeat laborum, labore explicabo impedit qui! Laudantium, unde voluptates sit animi tenetur veniam dolorem corrupti magnam, ipsum ab, recusandae!”</div>
                        <div class="reviews__author">Susan Sims, Interaction Designer at XYZ</div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>



<!-- Download -->
<div class="download" id="download">
    <div class="container">
        <h3 class="download__title">Are You Ready to Start? Download Now For Free!</h3>
        <div class="download__text">
            <p>Fusce dapibus, tellus ac cursus commodo</p>
        </div>
        <a class="btn  btn--red  btn--long" href="#">Download Here</a>
    </div>
</div>



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
                <div>Copyright © 2022 ActiveBox. All Rights Reserved</div>
                <div>Made <span>by Artem Degtiarev</span></div>
            </div>
        </div>
    </div>
</footer>




<!-- Javascript -->
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="app.js"></script>


</body>
</html>
