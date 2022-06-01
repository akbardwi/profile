<div id="ajax-page" class="ajax-page-content">
    <div class="ajax-page-wrapper">
        <div class="ajax-page-nav">
            <div class="nav-item ajax-page-prev-next">
                <a class="ajax-page-load" href="hitech.html"><i class="pe-7s-icon pe-7s-angle-left"></i></a>
                <a class="ajax-page-load" href="siadit.html"><i class="pe-7s-icon pe-7s-angle-right"></i></a>
            </div>
            <div class="nav-item ajax-page-close-button">
                <a id="ajax-page-close-button" href="#"><i class="pe-7s-icon pe-7s-close"></i></a>
            </div>
        </div>

        <div class="ajax-page-title">
            <h1>SEMNASTI</h1>
        </div>

        <div class="row">
            <div class="col-sm-7 col-md-7 portfolio-block">
                <div class="owl-carousel portfolio-page-carousel">
                    <div class="item">
                        <img src="https://storage.cloud.google.com/newtaskbucket/assets/images/portfolio/semnasti/1.png" alt="">
                    </div>
                    <div class="item">
                        <img src="https://storage.cloud.google.com/newtaskbucket/assets/images/portfolio/semnasti/2.png" alt="">
                    </div>
                    <div class="item">
                        <img src="https://storage.cloud.google.com/newtaskbucket/assets/images/portfolio/semnasti/3.png" alt="">
                    </div>
                    <div class="item">
                        <img src="https://storage.cloud.google.com/newtaskbucket/assets/images/portfolio/semnasti/4.png" alt="">
                    </div>
                </div>

                <!--
                <div class="portfolio-page-image">
                    <img src="https://storage.cloud.google.com/newtaskbucket/assets/images/portfolio/1.jpg" alt="">
                </div>
                -->

                <script type="text/javascript">
                    function customAjaxScroll() {
                        var windowWidth = $(window).width();
                        if (windowWidth > 991) {
                            // Custom Ajax Page Scroll
                            $("#ajax-page").mCustomScrollbar({
                                scrollInertia: 8,
                                documentTouchScroll: false
                            });
                        } else {
                            $("#ajax-page").mCustomScrollbar('destroy');
                        }
                    }

                    jQuery(document).ready(function($){

                        // Ajax Loaded Page Scroll
                        customAjaxScroll();


                        $('.portfolio-page-carousel').owlCarousel({
                            smartSpeed:1200,
                            items: 1,
                            loop: true,
                            dots: true,
                            nav: true,
                            navText: false,
                            margin: 10
                        });

                    });

                    jQuery(window).on('resize', function() {
                        customAjaxScroll();
                    });
                </script>
            </div>

            <div class="col-sm-5 col-md-5 portfolio-block">
                <!-- Project Description -->
                <div class="block-title">
                    <h3>Deskripsi</h3>
                </div>
                <ul class="project-general-info">
                    <!-- <li><p><i class="fa fa-user"></i> Alex Smith</p></li> -->
                    <li><p><i class="fa fa-globe"></i> <a href="#" target="_blank">Coming Soon</a></p></li>
                    <li><p><i class="fa fa-calendar"></i> 6 Juni 2021</p></li>
                </ul>

                <p class="text-justify">SEMNASTI atau Seminar Nasional Teknik Informatika merupakan acara seminar tahunan yang diselenggarakan oleh Himpunan Mahasiswa Teknik Informatika (HMTI) Universitas Dian Nuswantoro. Sistem backend dari website ini menggunakan CodeIgniter 4</p>
                <!-- /Project Description -->

                <!-- Technology -->
                <div class="tags-block">
                    <div class="block-title">
                        <h3>Teknologi</h3>
                    </div>
                    <ul class="tags">
                        <li><a>HTML5</a></li>
                        <li><a>CSS3</a></li>
                        <li><a>jQuery</a></li>
                        <li><a>PHP8</a></li>
                        <li><a>CodeIgniter 4</a></li>
                    </ul>
                </div>
                <!-- /Technology -->

                <!-- Share Buttons -->
                <!-- <div class="btn-group share-buttons">
                    <div class="block-title">
                        <h3>Share</h3>
                    </div>
                    <a href="#" target="_blank" class="btn"><i class="fa fa-facebook"></i> </a>
                    <a href="#" target="_blank" class="btn"><i class="fa fa-twitter"></i> </a>
                    <a href="#" target="_blank" class="btn"><i class="fa fa-dribbble"></i> </a>
                </div> -->
                <!-- /Share Buttons -->
            </div>
        </div>
    </div>
</div>
