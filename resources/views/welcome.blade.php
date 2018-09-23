<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>RANR</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('portfolio/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('portfolio/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('portfolio/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('portfolio/css/templatemo-style.css') }}">
    <script src="{{ asset('portfolio/js/vendor/modernizr-2.6.2.min.js') }}"></script>
</head>
<body>

<div class="responsive-header visible-xs visible-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="top-section">
                    <div class="profile-image">
                        <img src="{{ asset('portfolio/img/profile.jpg') }}" alt="Volton">
                    </div>
                    <div class="profile-content">
                        <h3 class="profile-title">Volton</h3>
                        <p class="profile-description">Web Developer</p>
                    </div>
                </div>
            </div>
        </div>
        <a href="#" class="toggle-menu"><i class="fa fa-bars"></i></a>
        <div class="main-navigation responsive-menu">
            <ul class="navigation">
                <li><a href="#top"><i class="fa fa-home"></i>Home</a></li>
                <li><a href="#about"><i class="fa fa-user"></i>About Me</a></li>
                <li><a href="#projects"><i class="fa fa-newspaper-o"></i>My Gallery</a></li>
                <li><a href="#contact"><i class="fa fa-envelope"></i>Contact me.</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="sidebar-menu hidden-xs hidden-sm">
    <div class="top-section">
        <div class="profile-image">
            <img src="{{ asset('portfolio/img/profile.jpg') }}" alt="">
        </div>
        <h3 class="profile-title">Raul Ariel Noguera Rocha</h3>
        <p class="profile-description">Web Developer</p>
    </div>
    <div class="main-navigation">
        <ul class="navigation">
            <li><a href="#top"><i class="fa fa-globe"></i>Welcome</a></li>
            <li><a href="#about"><i class="fa fa-pencil"></i>About Me</a></li>
            <li><a href="#projects"><i class="fa fa-paperclip"></i>My Gallery</a></li>
            <li><a href="#contact"><i class="fa fa-link"></i>Contact Me</a></li>
        </ul>
    </div>
    <div class="social-icons">
        <ul>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            <li><a href="#"><i class="fa fa-rss"></i></a></li>
        </ul>
    </div>
</div>


<div class="banner-bg" id="top">
    <div class="banner-overlay"></div>
    <div class="welcome-text">
        <h2>Simple Design | Personal Portfolio</h2>
        <h5>This is a mobile friendly layout with Bootstrap v3.3.1 framework. Maecenas eu ante at nunc posuere fringilla sit amet non dolor. Proin condimentum fermentum nunc.</h5>
    </div>
</div>

<div class="main-content">
    <div class="fluid-container">

        <div class="content-wrapper">

            <div class="page-section" id="about">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="widget-title">Learn About Me</h4>
                        <div class="about-image">
                            <img src="{{ asset('portfolio/img/8.jpg') }}" alt="">
                        </div>
                        <p>Volton is free website design from <span class="blue">template</span><span class="green">mo</span>. You can use this template for any purpose. Please tell your friends about it. Thank you. Credit goes to <a rel="nofollow" href="http://unsplash.com" target="_parent">Unsplash</a> for images used in this design. You can <strong>change menu icons</strong> by checking <a rel="nofollow" href="http://fontawesome.info/font-awesome-icon-world-map/" target="_parent">Font Awesome</a> (version 4). Example: <strong>&lt;i class=&quot;fa fa-camera&quot;&gt;&lt;/i&gt;</strong></p>
                        <hr>
                    </div>
                </div>
            </div>

            <div class="page-section" id="projects">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="widget-title">PHOTOS OF WHAT I DO</h4>
                        <p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Maecenas et lorem molestie, maximus justo dignissim, cursus nisl. Nullam at ante quis ex pharetra pulvinar quis id dolor. Integer lorem odio, euismod ut sem sit amet, imperdiet condimentum diam.</p>
                    </div>
                </div>
                <div class="row projects-holder">
                    <div class="col-md-4 col-sm-6">
                        <div class="project-item">
                            <img src="{{ asset('portfolio/img/1.jpg') }}" alt="">
                            <div class="project-hover">
                                <div class="inside">
                                    <h5><a href="#">Pellentesque porta ligula</a></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam cursus</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="project-item">
                            <img src="{{ asset('portfolio/img/2.jpg') }}" alt="">
                            <div class="project-hover">
                                <div class="inside">
                                    <h5><a href="#">Pellentesque porta ligula</a></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam cursus</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="project-item">
                            <img src="{{ asset('portfolio/img/3.jpg') }}" alt="">
                            <div class="project-hover">
                                <div class="inside">
                                    <h5><a href="#">Pellentesque porta ligula</a></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam cursus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="project-item">
                            <img src="{{ asset('portfolio/img/4.jpg') }}" alt="">
                            <div class="project-hover">
                                <div class="inside">
                                    <h5><a href="#">Pellentesque porta ligula</a></h5>
                                    <p>Quisque mattis sit amet dolor eu scelerisque. Vivamus bibendum massa et nisl tempus commodo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="project-item">
                            <img src="{{ asset('portfolio/img/5.jpg') }}" alt="">
                            <div class="project-hover">
                                <div class="inside">
                                    <h5><a href="#">Pellentesque porta ligula</a></h5>
                                    <p>Quisque mattis sit amet dolor eu scelerisque. Vivamus bibendum massa et nisl tempus commodo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="project-item">
                            <img src="{{ asset('portfolio/img/6.jpg') }}" alt="">
                            <div class="project-hover">
                                <div class="inside">
                                    <h5><a href="#">Pellentesque porta ligula</a></h5>
                                    <p>Quisque mattis sit amet dolor eu scelerisque. Vivamus bibendum massa et nisl tempus commodo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>

            <div class="page-section" id="contact">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="widget-title">PLACE TO TALK WITH ME</h4>
                        <p>Vestibulum ac iaculis erat, in semper dolor. Maecenas et lorem molestie, maximus justo dignissim, cursus nisl. Nullam at ante quis ex pharetra pulvinar quis id dolor. Integer lorem odio, euismod ut sem sit amet, imperdiet condimentum diam.</p>
                    </div>
                </div>
                <div class="row">
                    <form action="#" method="post" class="contact-form">
                        <fieldset class="col-md-4 col-sm-6">
                            <input type="text" id="your-name" placeholder="Your Name...">
                        </fieldset>
                        <fieldset class="col-md-4 col-sm-6">
                            <input type="email" id="email" placeholder="Your Email...">
                        </fieldset>
                        <fieldset class="col-md-4 col-sm-12">
                            <input type="text" id="your-subject" placeholder="Subject...">
                        </fieldset>
                        <fieldset class="col-md-12 col-sm-12">
                            <textarea name="message" id="message" cols="30" rows="6" placeholder="Leave your message..."></textarea>
                        </fieldset>
                        <fieldset class="col-md-12 col-sm-12">
                            <input type="submit" class="button big default" value="Send Message">
                        </fieldset>
                    </form>
                </div>
            </div>
            <hr>

            <div class="row" id="footer">
                <div class="col-md-12 text-center">
                    <p class="copyright-text">Copyright &copy; 2015 Company Name</p>
                </div>
            </div>

        </div>

    </div>
</div>

<script src="{{ asset('portfolio/js/vendor/jquery-1.10.2.min.js') }}"></script>
<script src="{{ asset('portfolio/js/min/plugins.min.js') }}"></script>
<script src="{{ asset('portfolio/js/min/main.min.js') }}"></script>

</body>
</html>