<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Profile - Akbar Dwi Syahputra" />
    <meta name="keywords" content="vcard, resposnive, retina, resume, jquery, css3, bootstrap, Unique, portfolio" />
    <meta name="author" content="akbardwi1403" />
    <link rel="shortcut icon" href="<?= base_url(); ?>/assets/favicon.ico">

    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/normalize.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/animate.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/transition-animations.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/jquery.mCustomScrollbar.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/main-red.css" type="text/css">
    <!-- This styles needs for demo -->
    <!-- <link rel="stylesheet" href="<?= base_url(); ?>/assets/preview/lmpixels-demo-panel.css" type="text/css"> -->
    <!-- /This styles needs for demo -->
    <script src="<?= base_url(); ?>/assets/js/jquery-2.1.3.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/modernizr.custom.js"></script>
</head>

<body>
    <!-- Loading animation -->
    <div class="preloader">
        <div class="preloader-animation">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>
    <!-- /Loading animation -->

    <div id="page" class="page">
        <!-- Header -->
        <header id="site_header" class="header mobile-menu-hide header-color-light">
            <div class="my-photo tilt-effect">
                <img src="<?= base_url(); ?>/assets/images/photo.png" alt="image">
            </div>

            <div class="site-title-block">
                <h1 class="site-title">Akbar Dwi Syahputra</h1>
            </div>

            <!-- Navigation -->
            <div class="site-nav">
                <!-- Main menu -->
                <ul id="nav" class="site-main-menu">
                    <li>
                        <a class="pt-trigger" href="#home" data-animation="21"><i class="menu-icon pe-7s-icon pe-7s-home"></i>Beranda</a><!-- href value = data-id without # of .pt-page. -->
                    </li>
                    <li>
                        <a class="pt-trigger" href="#about_me" data-animation="17"><i class="menu-icon pe-7s-icon pe-7s-user"></i>Tentang Saya</a>
                    </li>
                    <li>
                        <a class="pt-trigger" href="#resume" data-animation="18"><i class="menu-icon pe-7s-icon pe-7s-id"></i>Resume</a>
                    </li>
                    <li>
                        <a class="pt-trigger" href="#portfolio" data-animation="19"><i class="menu-icon pe-7s-icon pe-7s-portfolio"></i>Portfolio</a>
                    </li>
                    <li>
                        <a class="pt-trigger" href="#contact" data-animation="20"><i class="menu-icon pe-7s-icon pe-7s-mail"></i>Kontak</a>
                    </li>
                </ul>
                <!-- /Main menu -->
            </div>
            <!-- Navigation -->
        </header>
        <!-- /Header -->

        <!-- Mobile Header -->
        <div class="mobile-header mobile-visible">
            <div class="mobile-logo-container">
                <div class="mobile-site-title">Akbar Dwi Syahputra</div>
            </div>

            <a class="menu-toggle mobile-visible">
                <i class="fa fa-bars"></i>
            </a>
        </div>
        <!-- /Mobile Header -->

        <!-- Main Content -->
        <div id="main" class="site-main">
            <!-- Page changer wrapper -->
            <div class="pt-wrapper" style="background-image: url(<?= base_url(); ?>/assets/images/bg.png);">
                <!-- Subpages -->
                <div class="subpages">

                    <!-- Home Subpage -->
                    <section class="pt-page pt-page-1 section-without-bg section-paddings-0 table" data-id="home">
                        <div class="section-inner">
                            <div class="home-page-block">
                                <h2>Akbar Dwi Syahputra</h2>
                                <div class="owl-carousel text-rotation">
                                    <div class="item">
                                        <p class="home-page-description">Mahasiswa Universitas Dian Nuswantoro</p>
                                    </div>
                                    <div class="item">
                                        <p class="home-page-description">Backend Developer</p>
                                    </div>
                                    <div class="item">
                                        <p class="home-page-description">Bangkit Academy 2022 - Cloud Computing</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End of Home Subpage -->

                    <!-- About Me Subpage -->
                    <section class="pt-page pt-page-2" data-id="about_me">
                        <div class="border-block-top-110"></div>
                        <div class="section-inner">
                            <div class="section-title-block">
                                <div class="section-title-wrapper clearfix">
                                    <h2 class="section-title">Tentang Saya</h2>
                                    <h5 class="section-description">Mahasiswa, Backend Developer</h5>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6 col-md-6 col-lg-4 subpage-block">
                                    <div class="my-photo-block tilt-effect">
                                        <img src="<?= base_url(); ?>/assets/images/photo.png" alt="">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6 col-lg-4">
                                    <h3>Deskripsi</h3>
                                    <p>Perkenalkan saya Akbar Dwi Syahputra, sekarang saya masih menempuh pendidikan dibangku perkuliahan. Saya adalah mahasiswa jurusan Teknik Informatika di Universitas Dian Nuswantoro Semarang. Saya memiliki hobi dibidang programming, khususnya web backend developer.</p>
                                    <p>Dibalik hobi saya tadi sudah ada beberapa website yang saya buat contohnya seperti website dari organisasi dikampus saya dan beberapa website dari luar Universitas.</p>
                                </div>

                                <div class="col-sm-6 col-md-6 col-lg-4 subpage-block">
                                    <ul class="info-list">
                                        <li><span class="title">Umur</span><span class="value"><?= $umur; ?></span></li>
                                        <li><span class="title">Tanggal Lahir</span><span class="value">14 Maret 2001</span></li>
                                        <li><span class="title">Alamat</span><span class="value">Kab. Batang, Jawa Tengah</span></li>
                                        <li><span class="title">Negara</span><span class="value">Indonesia</span></li>
                                        <li><span class="title">Email</span><span class="value"><a href="mailto:admin@mail.akbardwi.my.id">admin@mail.akbardwi.my.id</a></span></li>
                                    </ul>

                                    <ul class="social-links">
                                        <li><a class="tip social-button" href="https://twitter.com/akbardwi1403" title="Twitter"><i class="fa fa-twitter"></i></a></li> <!-- Full list of social icons: http://fontawesome.io/icons/#brand -->
                                        <li><a class="tip social-button" href="https://www.facebook.com/akbardwi.syahputra/" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li><a class="tip social-button" href="https://www.instagram.com/akbardwisyahputra/" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                                        <li><a class="tip social-button" href="https://www.linkedin.com/in/akbar-dwi-syahputra-4691a0186/" title="LinkedIn"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a class="tip social-button" href="https://github.com/akbardwi" title="Github"><i class="fa fa-github"></i></a></li>
                                        <!--<li><a class="tip social-button" href="#" title="last.fm"><i class="fa fa-lastfm"></i></a></li>-->
                                        <!--<li><a class="tip social-button" href="#" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>-->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End of About Me Subpage -->

                    <!-- Resume Subpage -->
                    <section class="pt-page pt-page-3" data-id="resume">
                        <div class="border-block-top-110"></div>
                        <div class="section-inner">
                            <div class="section-title-block">
                                <div class="section-title-wrapper">
                                    <h2 class="section-title">Resume</h2>
                                    <h5 class="section-description">Pengalaman 6 Tahun</h5>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6 col-md-4 subpage-block">
                                    <div class="block-title">
                                        <h3>Education</h3>
                                    </div>
                                    <div class="timeline">
                                        <!-- Single event -->
                                        <div class="timeline-event te-primary">
                                            <h5 class="event-date">2019 - Sekarang</h5>
                                            <h4 class="event-name">Universitas Dian Nuswantoro</h4>
                                            <span class="event-description">Teknik Informatika - S1</span>
                                            <!-- <p>Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed tortor.</p> -->
                                        </div>
                                        <!-- Single event -->
                                        <div class="timeline-event te-primary">
                                            <h5 class="event-date">2016 - 2019</h5>
                                            <h4 class="event-name">SMA N 2 Batang</h4>
                                            <span class="event-description">Jurusan MIPA</span>
                                            <!-- <p>Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed tortor.</p> -->
                                        </div>
                                        <!-- Single event -->
                                        <div class="timeline-event te-primary">
                                            <h5 class="event-date">2013 - 2016</h5>
                                            <h4 class="event-name">SMP N 3 Batang</h4>
                                            <!-- <span class="event-description">University of Studies</span>
                                            <p>Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed tortor.</p> -->
                                        </div>
                                        <!-- Single event -->
                                        <div class="timeline-event te-primary">
                                            <h5 class="event-date">2007 - 2013</h5>
                                            <h4 class="event-name">SD N Watesalit 01 Batang</h4>
                                            <!-- <span class="event-description">University of Studies</span>
                                            <p>Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed tortor.</p> -->
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-4 subpage-block">
                                    <div class="block-title">
                                        <h3>Pengalaman</h3>
                                    </div>
                                    <div class="timeline">
                                        <!-- Single event -->
                                        <div class="timeline-event te-primary">
                                            <h5 class="event-date">Aug 2021 - Des 2021</h5>
                                            <h4 class="event-name">Backend Developer</h4>
                                            <span class="event-description">Tim PHP2D HMTI Udinus</span>
                                            <p>Membuat sistem agribisnis berbasis web untuk menunjang kegiatan masyarakat di desa Pagergunung, Temanggung.</p>
                                        </div>
                                        <!-- Single event -->
                                        <div class="timeline-event te-primary">
                                            <h5 class="event-date">Nov 2020 - Aug 2021</h5>
                                            <h4 class="event-name">Backend Developer</h4>
                                            <span class="event-description">HMTI Udinus</span>
                                            <p>Membuat sistem dari website acara kegiatan di HMTI Udinus.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-4 subpage-block">
                                    <!-- <div class="block-title">
                                        <h3>Design Skills</h3>
                                    </div>
                                    <div class="skills-info">
                                        <h4>Web Design</h4>
                                        <div class="skill-container">
                                            <div class="skill-percentage skill-1"></div>
                                        </div>

                                        <h4>Graphic Design</h4>
                                        <div class="skill-container">
                                            <div class="skill-percentage skill-2"></div>
                                        </div>

                                        <h4>Print Design</h4>
                                        <div class="skill-container">
                                            <div class="skill-percentage skill-3"></div>
                                        </div>
                                    </div> -->

                                    <div class="block-title">
                                        <h3>Skill Pemrograman</h3>
                                    </div>
                                    <div class="skills-info">
                                        <h4>PHP</h4>
                                        <div class="skill-container">
                                            <div class="skill-percentage skill-8"></div>
                                        </div>

                                        <h4>CodeIgniter 4</h4>
                                        <div class="skill-container">
                                            <div class="skill-percentage skill-7"></div>
                                        </div>

                                        <h4>NodeJS</h4>
                                        <div class="skill-container">
                                            <div class="skill-percentage skill-6"></div>
                                        </div>

                                        <h4>Python</h4>
                                        <div class="skill-container">
                                            <div class="skill-percentage skill-7"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <div class="download-cv-block">
                                        <a class="button" target="_blank" href="#">Download CV</a>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </section>
                    <!-- End Resume Subpage -->


                    <!-- Portfolio Subpage -->
                    <section class="pt-page pt-page-4" data-id="portfolio">
                        <div class="border-block-top-110"></div>
                        <div class="section-inner">
                            <div class="section-title-block">
                                <div class="section-title-wrapper">
                                    <h2 class="section-title">Portfolio</h2>
                                    <h5 class="section-description">My Best Works</h5>
                                </div>
                            </div>

                            <!-- Portfolio Content -->
                            <div class="portfolio-content">

                                <!-- Portfolio filter -->
                                <ul id="portfolio_filters" class="portfolio-filters">
                                    <li class="active">
                                        <a class="filter btn btn-sm btn-link active" data-group="all">Semua</a>
                                    </li>
                                    <li>
                                        <a class="filter btn btn-sm btn-link" data-group="php2d">PHP2D</a>
                                    </li>
                                    <li>
                                        <a class="filter btn btn-sm btn-link" data-group="hmti">HMTI</a>
                                    </li>
                                    <li>
                                        <a class="filter btn btn-sm btn-link" data-group="tugas">Tugas</a>
                                    </li>
                                </ul>
                                <!-- End of Portfolio filter -->

                                <!-- Portfolio Grid -->
                                <div id="portfolio_grid" class="portfolio-grid portfolio-masonry masonry-grid-3">

                                    <!-- Portfolio Item 1 -->
                                    <figure class="item" data-groups='["all", "php2d"]'>
                                        <a class="ajax-page-load" href="siadit.html">
                                            <img src="<?= base_url(); ?>/assets/images/portfolio/siadit/1.png" alt="">
                                            <div>
                                                <h5 class="name">SiAdit</h5>
                                                <small>Website</small>
                                                <i class="pe-7s-icon pe-7s-display2"></i>
                                            </div>
                                        </a>
                                    </figure>
                                    <!-- /Portfolio Item 1 -->
                                    <!-- Portfolio Item 2 -->
                                    <figure class="item" data-groups='["all", "tugas"]'>
                                        <a class="ajax-page-load" href="sifarmasi.html">
                                            <img src="<?= base_url(); ?>/assets/images/portfolio/sifarmasi/1.png" alt="">
                                            <div>
                                                <h5 class="name">SiFarmasi</h5>
                                                <small>Website</small>
                                                <i class="pe-7s-icon pe-7s-display2"></i>
                                            </div>
                                        </a>
                                    </figure>
                                    <!-- /Portfolio Item 2 -->
                                    <!-- Portfolio Item 3 -->
                                    <figure class="item" data-groups='["all", "hmti"]'>
                                        <a class="ajax-page-load" href="hitech.html">
                                            <img src="<?= base_url(); ?>/assets/images/portfolio/hitech/1.png" alt="">
                                            <div>
                                                <h5 class="name">Hi-Tech HMTI Udinus 2021</h5>
                                                <small>Website</small>
                                                <i class="pe-7s-icon pe-7s-display2"></i>
                                            </div>
                                        </a>
                                    </figure>
                                    <!-- /Portfolio Item 3 -->
                                    <!-- Portfolio Item 4 -->
                                    <figure class="item" data-groups='["all", "hmti"]'>
                                        <a class="ajax-page-load" href="semnasti.html">
                                            <img src="<?= base_url(); ?>/assets/images/portfolio/semnasti/1.png" alt="">
                                            <div>
                                                <h5 class="name">SEMNASTI HMTI Udinus 2021</h5>
                                                <small>Website</small>
                                                <i class="pe-7s-icon pe-7s-display2"></i>
                                            </div>
                                        </a>
                                    </figure>
                                    <!-- /Portfolio Item 4 -->
                                </div>
                                <!-- /Portfolio Grid -->

                            </div>
                            <!-- /Portfolio Content -->
                        </div>
                    </section>
                    <!-- /Portfolio Subpage -->

                    <!-- Contact Subpage -->
                    <section class="pt-page pt-page-5" data-id="contact">
                        <div class="border-block-top-110"></div>
                        <div class="section-inner">
                            <div class="section-title-block">
                                <div class="section-title-wrapper">
                                    <h2 class="section-title">Kontak</h2>
                                    <h5 class="section-description">Hubungi Saya</h5>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6 col-md-6 subpage-block">
                                    <div class="block-title">
                                        <h3>Hubungi Saya</h3>
                                    </div>
                                    <p>Jika Anda ingin terhubung, berteman atau mengajukan kerjasama silahkan bisa hubungi saya melalui media sosial yang telah tersedia atau bisa juga melalui form disamping.</p>
                                    <div class="contact-info-block">
                                        <div class="ci-icon">
                                            <i class="pe-7s-icon pe-7s-map-marker"></i>
                                        </div>
                                        <div class="ci-text">
                                            <h5>Batang, Jawa Tengah</h5>
                                        </div>
                                    </div>
                                    <div class="contact-info-block">
                                        <div class="ci-icon">
                                            <i class="pe-7s-icon pe-7s-mail"></i>
                                        </div>
                                        <div class="ci-text">
                                            <h5><a href="mailto:admin@mail.akbardwi.my.id">admin@mail.akbardwi.my.id</a></h5>
                                        </div>
                                    </div>
                                    <div class="contact-info-block">
                                        <div class="ci-icon">
                                            <i class="pe-7s-icon pe-7s-check"></i>
                                        </div>
                                        <div class="ci-text">
                                            <h5>Freelance</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6 subpage-block">
                                    <div class="block-title">
                                        <h3>Formulir Kontak</h3>
                                    </div>
                                    <form id="contact-form" method="post" action="<?= base_url('contact'); ?>">

                                        <div class="messages"></div>
                                        <input type="hidden" class="txt_profile_token" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
                                        <div class="controls">
                                            <div class="form-group">
                                                <input id="form_name" type="text" name="name" class="form-control" placeholder="Full Name" required="required" data-error="Name is required.">
                                                <div class="form-control-border"></div>
                                                <i class="form-control-icon pe-7s-user"></i>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-group">
                                                <input id="form_email" type="email" name="email" class="form-control" placeholder="Email Address" required="required" data-error="Valid email is required.">
                                                <div class="form-control-border"></div>
                                                <i class="form-control-icon pe-7s-mail"></i>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-group">
                                                <textarea id="form_message" name="message" class="form-control" placeholder="Message for Me" rows="4" required="required" data-error="Please, leave me a message."></textarea>
                                                <div class="form-control-border"></div>
                                                <i class="form-control-icon pe-7s-comment"></i>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <input type="submit" class="button btn-send" value="Send message">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Contact Subpage -->

                </div>
            </div>
            <!-- /Page changer wrapper -->
        </div>
        <!-- /Main Content -->
    </div>

    <!-- Demo Color changer -->
    <!-- <a id="lm_demo_panel_switcher" class="lm-demo-panel-switcher right"><i class="fa fa-gear"></i></a>
    <div id="lm_demo_panel" class="lm-demo-panel right panel-color-red active">
        <div class="demo-panel-title">Template Style</div>
        <div id="t_style" class="demo-panel-options">
            <a class="current-t-style t-style-switcher" data-id="template-style-light">
                <div class="preview w-border t-style t-style-light">Light</div>
            </a>
            <a class="t-style-switcher" data-id="template-style-dark">
                <div class="preview t-style t-style-dark">Dark</div>
            </a>
        </div>

        <div class="demo-panel-title">Main Color</div>
        <div id="main_color" class="demo-panel-options">
            <a data-id="red" class="current-main-color">
                <div class="preview color-1">&nbsp;</div>
            </a>
            <a data-id="blue">
                <div class="preview color-2">&nbsp;</div>
            </a>
            <a data-id="green">
                <div class="preview color-3">&nbsp;</div>
            </a>
            <a data-id="orange">
                <div class="preview color-4">&nbsp;</div>
            </a>
            <a data-id="yellow">
                <div class="preview color-5">&nbsp;</div>
            </a>
            <a data-id="violet">
                <div class="preview color-6">&nbsp;</div>
            </a>
        </div>

        <div class="demo-panel-title">Nav Color</div>
        <div id="header_color" class="demo-panel-options">
            <a class="current-h-color inverse h-color-switcher" data-id="header-color-light">
                <div class="preview h-color h-color-1 w-border">&nbsp;</div>
            </a>
            <a class="h-color-switcher" data-id="header-color-main">
                <div class="preview h-color h-color-2">&nbsp;</div>
            </a>
            <a class="h-color-switcher" data-id="header-color-dark">
                <div class="preview h-color h-color-3">&nbsp;</div>
            </a>
        </div>

        <div class="demo-panel-title mobile-hidden">Nav Position</div>
        <div id="header_position" class="demo-panel-options mobile-hidden">
            <a class="current-layout layout-switcher" data-id="layout-menu-left">
                <div class="preview layout left">Left</div>
            </a>
            <a class="layout-switcher" data-id="layout-menu-top">
                <div class="preview layout top">Top</div>
            </a>
            <a class="layout-switcher" data-id="layout-menu-bottom">
                <div class="preview layout bottom">Bottom</div>
            </a>
        </div>
    </div> -->
    <!-- /Demo Color changer -->

    <script src="<?= base_url(); ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/pages-switcher.js"></script>
    <script src="<?= base_url(); ?>/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/validator.js"></script>
    <script src="<?= base_url(); ?>/assets/js/jquery.shuffle.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/masonry.pkgd.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/owl.carousel.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/tilt.jquery.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/jquery.hoverdir.js"></script>
    <script src="<?= base_url(); ?>/assets/js/main.js"></script>

    <!-- Demo Color changer Script -->
    <script src="<?= base_url(); ?>/assets/preview/lmpixels-demo-panel.js"></script>
    <!-- /Demo Color changer Script -->
</body>
</html>