<?php include_once('inc/_base.php'); ?>
<?php 
$page_title = 'UntitledCompany';
$page_description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, optio magnam maxime excepturi? Aliquam voluptas sunt laborum sequi enim quisquam doloremque, voluptatum maiores repellendus qui, et fugiat exercitationem expedita dolorum.';
$page_keywords = 'court, transcript, toronto, durham, transcription, contractor, online, court reporter, criminal, ontario, appeals, Bail Reviews, trials, ajax, whitby, pickering, scarborough, north york';
?>
<?php ob_start(); ?>
<link rel="canonical" href="<?= BASE_URL; ?>" />
<?php $insertStyles = ob_get_contents(); ob_end_clean(); ?>
<?php include_once('inc/header.php'); ?>

<!-- Banner
================================================== -->
<section id="banner" class="banner">
    <div id="myCarousel" class="carousel slide">
        <div class="tint"></div>
        <!-- <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol> -->
        <!-- Carousel items -->
        <div class="carousel-inner">
            <div class="item active">
                <img id="parallaxed" src="images/headers/banner1.jpg">

                <div class="carousel-caption">
                    <h1>This Is Sample Text</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, autem suscipit itaque.</p>
                    <a href="#" class="btn">Learn More</a>
                </div>

            </div>
            <div class="item" >
                <img src="images/headers/banner2.jpg">
            </div>
        </div>
        <!-- Carousel nav -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>

        <a href="#intro" class="icon-o down-button floating"><i class="fa fa-chevron-down"></i></a>
    </div>
</section>

<!-- Main Content
================================================== -->

<section class="listed-content">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-4 col-sm-4">
                <div class="listed-content-icon icon large">
                    <i class="fa fa-rocket"></i>
                </div>
                <h3>Creative design</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dignissim placerat lectus, at ornare sapien tempor eget. Etiam vel vestibulum nisl</p>
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="listed-content-icon icon large">
                    <i class="fa fa-users"></i>
                </div>
                <h3>Built for humans</h3>                
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dignissim placerat lectus, at ornare sapien tempor eget. Etiam vel vestibulum nisl</p>
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="listed-content-icon icon large">
                    <i class="fa fa-cog"></i>
                </div>
                <h3>Easy customization</h3>                
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dignissim placerat lectus, at ornare sapien tempor eget. Etiam vel vestibulum nisl</p>
            </div>
        </div>
    </div><!-- /.container -->
</section>

<section class="listed-content">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="listed-content-image image-item">
                    <div class="image image-hover-fx">
                        <img src="images/sample-img.jpg" alt="">
                        <div class="image-overlay"></div>
                        <a href="img/portfolio/photo (1).jpg" rel="prettyPhoto[pp_gal]" class="portfolio-zoom"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
                <h3>Bootstrap Call To Action</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam adipiscing, metus eu imperdiet ornare, urna lorem porttitor tortor, at condimentum massa erat sed sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam adipiscing.</p>
                <a href="">Read More <i class="fa fa-chevron-circle-right"></i></a>
            </div>
            <div class="col-md-4">
                <div class="image-item">
                    <div class="image image-hover-fx">
                        <img src="images/sample-img.jpg" alt="">
                        <div class="image-overlay"></div>
                        <a href="img/portfolio/photo (1).jpg" rel="prettyPhoto[pp_gal]" class="portfolio-zoom"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
                <h3>Bootstrap Call To Action</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam adipiscing, metus eu imperdiet ornare, urna lorem porttitor tortor, at condimentum massa erat sed sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam adipiscing.</p>
                <a href="">Read More <i class="fa fa-chevron-circle-right"></i></a>
            </div>
            <div class="col-md-4">
                <div class="image-item">
                    <div class="image image-hover-fx">
                        <img src="images/sample-img.jpg" alt="">
                        <div class="image-overlay"></div>
                        <a href="img/portfolio/photo (1).jpg" rel="prettyPhoto[pp_gal]" class="portfolio-zoom"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
                <h3>Bootstrap Call To Action</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam adipiscing, metus eu imperdiet ornare, urna lorem porttitor tortor, at condimentum massa erat sed sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam adipiscing.</p>
                <a href="">Read More <i class="fa fa-chevron-circle-right"></i></a>
            </div>
        </div>
    </div><!-- /.container -->
</section>

<section class="gallery-block">
    <div class="container">
        <div class="row">
            <div class="gallery-item col-md-4">
                <div class="image-item">
                    <div class="image image-hover-fx">
                        <img src="images/sample-img.jpg" alt="">
                        <div class="image-overlay"></div>
                        <a href="#" class="portfolio-zoom"><i class="fa fa-eye"></i></a>
                        <p class="title-fx">Sample Title</p>
                    </div>
                </div>
            </div>
            <div class="gallery-item col-md-4">
                <div class="image-item">
                    <div class="image image-hover-fx">
                        <img src="images/sample-img.jpg" alt="">
                        <div class="image-overlay"></div>
                        <a href="#" class="portfolio-zoom"><i class="fa fa-eye"></i></a>
                        <p class="title-fx">Sample Title</p>
                    </div>
                </div>
            </div>
            <div class="gallery-item col-md-4">
                <div class="image-item">
                    <div class="image image-hover-fx">
                        <img src="images/sample-img.jpg" alt="">
                        <div class="image-overlay"></div>
                        <a href="#" class="portfolio-zoom"><i class="fa fa-eye"></i></a>
                        <p class="title-fx">Sample Title</p>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container -->
</section>

<section class="background-block">
    <img src="images/background-img.jpg" alt="" class="background-image" style="transform:scaleX(-1)">
    <div class="container">
        <div class="row">
            <div class="background-content col-md-6 pull-right">
                <h2>SAMPLE TITLE</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto cum provident ab, quaerat dolor eos ea odit. Numquam dolor totam dolorum voluptatibus excepturi similique tempore explicabo ratione. Quaerat quibusdam reiciendis cum laudantium cupiditate aperiam est officiis optio nostrum! Praesentium explicabo nesciunt nemo dolores eos commodi aliquid, repellat maxime laboriosam, veritatis temporibus vero! Magnam, ut laboriosam illo odio recusandae consequuntur quis similique aliquam, eius sapiente dolorum nihil atque sint nesciunt animi! Sunt, eaque, laborum! Vitae facere perferendis recusandae assumenda laudantium, quasi, odit reprehenderit omnis consequatur labore quia! Nobis aperiam repellendus sapiente minus, dolore, saepe cumque quibusdam sit quaerat quam quasi iste.</p>
                <a href="#" class="btn">Learn More</a>
            </div>
        </div>
    </div>
</section>

<section class="editorial-block">
    <div class="container">
        <div class="row">
            <article class="primary col-md-8">
                <h2><a href="#">Article Post Title</a></h2>

                <div class="entry-meta">
                    <a href="#">February 31, 2013</time></a>
                </div><!-- .entry-meta -->

                <div class="comments-link">
                    <a href="#"><span class="leave-reply">Reply</span></a>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate sunt in culpa qui officia deserunt mollit anim id est laborum … <a href="#">Read More</a>
                </p>
                <div class="entry-meta">
                    <span class="cat-links">Posted in <a href="#">Uncategorized</a></span> |
                    <span class="comments-link"><a href="#">Leave a reply</a></span>
                </div><!-- #entry-meta -->
            </article>

            <div class="secondary col-md-4">
                <aside>
                    <h3>Sample Title</h3>
                    <ul class="menu">
                        <li class="current-menu-item"><a href="#">Product Category</a></li>
                        <li><a href="#">Product Category</a></li>
                        <li><a href="#">Product Category</a></li>
                        <li><a href="#">Product Category</a></li>
                    </ul>
                </aside>
            </div><!-- /.col4 #secondary -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>


<section class="editorial-block">
    <div class="container">
        <div class="row">
            <div class="secondary col-md-4">
                <aside>
                    <h3>Sample Title</h3>
                    <ul class="menu">
                        <li class="current-menu-item"><a href="#">Product Category</a></li>
                        <li><a href="#">Product Category</a></li>
                        <li><a href="#">Product Category</a></li>
                        <li><a href="#">Product Category</a></li>
                    </ul>
                </aside>
            </div><!-- /.col4 #secondary -->

            <div class="primary col-md-8">
                <h2><a href="#">Article Post Title</a></h2>

                <div class="entry-meta">
                    <a href="#">February 31, 2013</time></a>
                </div><!-- .entry-meta -->

                <div class="comments-link">
                    <a href="#"><span class="leave-reply">Reply</span></a>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate sunt in culpa qui officia deserunt mollit anim id est laborum … <a href="#">Read More</a>
                </p>
                <div class="entry-meta">
                    <span class="cat-links">Posted in <a href="#">Uncategorized</a></span> |
                    <span class="comments-link"><a href="#">Leave a reply</a></span>
                </div><!-- #entry-meta -->
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

<section class="callout background-image">
    <img src="images/sample-img.jpg" alt="">
    <h2>SAMPLE TITLE TEXT</h2>
    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, quos.</p>
</section>

<section class="split-block">
    <div class="container">
        <div class="row">
            <div class="split-content col-md-7">
                <h2><a href="#">Example Title</a></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate sunt in culpa qui officia deserunt mollit anim id est laborum … <a href="#">Read More</a>
                </p>
            </div>
            <div class="split-image col-md-5">
                <img src="images/sample-img.jpg" alt="">
            </div><!-- /.col4 #secondary -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

<section>
    <div class="container block-centered--medium">
        <div class="row contact-form">
            <form method="POST" action="contact-form.php" id="contactForm">
                <h1 class="text-center">Join our mailing list for special pricing<br /> and to stay up to date</h1>
                <div class="row form-fields">
                    <div class="col-md-12">
                        <div class="margin-bottom-small">
                            <input type="text"name="inputFirstName" placeholder="First Name">
                        </div>
                        <div class="margin-bottom-small">
                            <input type="text"name="inputLastName" placeholder="Last Name">
                        </div>
                        <div class="margin-bottom-small">
                            <input type="text"name="inputEmail" placeholder="Email">
                        </div>
                        <div class="margin-bottom-small">
                            <textarea name="inputMessage" id="" placeholder="Message"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input type="submit" value="SUBMIT" class="btn" id="submitBtn">
                    </div>
                </div>
            </form>
        </div>
    </div><!-- /.container -->
</section>

<?php include_once('inc/footer.php'); ?>