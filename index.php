<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once "includes/head.php";
    ?>
    <title>TA Past Questions Home Page</title>
</head>

<body>
    <div class="wrapper">
        <!-- Header Start -->
        <div class="header home">
            <div class="container-fluid">
                <?php
                require_once "includes/header.php";
                ?>

                <div class="hero row align-items-center">
                    <div class="col-md-7">
                        <h2>Accurate</h2>
                        <h2><span>Free</span> Reference</h2>
                        <p>Giving Students an edge over the messed up system</p>
                        <a class="btn" href="level1.php">Explore Now</a>
                    </div>
                    <div class="col-md-5">
                        <div class="form">
                            <h3 class="">Quote of the day</h3>
                            <p>Approach the world with less judgement and more curiosity. Less fear more empathy. Less hate more love.</p>
                            <strong>John Cena</strong>
                            <!-- <form>
                                <input class="form-control" type="text" placeholder="Your Name">
                                <input class="form-control" type="text" placeholder="Mobile Number">
                                <div class="control-group">
                                    <select class="custom-select">
                                        <option selected>Choose a service</option>
                                        <option value="1">House Cleaning</option>
                                        <option value="2">Apartment Cleaning</option>
                                        <option value="3">Office Cleaning</option>
                                    </select>
                                </div>
                                <textarea class="form-control" placeholder="Comment"></textarea>
                                <button class="btn btn-block">Get A Quote</button>
                            </form> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- Team Start -->
        <div class="team">
            <div class="container">
                <div class="section-header">
                    <p>Team Members</p>
                    <h2>Meet Our Hardworking Admins</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 ">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-1.jpg" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Josh Dunn</h2>
                                <h3>CEO</h3>
                                <div class="team-social">
                                    <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-2.jpg" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Mollie Ross</h2>
                                <h3>Team Manager</h3>
                                <div class="team-social">
                                    <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-3.jpg" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Dylan Adams</h2>
                                <h3>Cleaner</h3>
                                <div class="team-social">
                                    <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-4.jpg" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Jennifer Page</h2>
                                <h3>Cleaner</h3>
                                <div class="team-social">
                                    <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- FAQs Start -->
        <div class="faqs">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="section-header left">
                            <p>You Might Ask</p>
                            <h2>Frequently Asked Questions</h2>
                        </div>
                        <img src="img/faqs.jpg" alt="Image">
                    </div>
                    <div class="col-md-7">
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="true">
                                        <span>1</span> Lorem ipsum dolor sit amet?
                                    </a>
                                </div>
                                <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link" data-toggle="collapse" href="#collapseTwo">
                                        <span>2</span> Lorem ipsum dolor sit amet?
                                    </a>
                                </div>
                                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link" data-toggle="collapse" href="#collapseThree">
                                        <span>3</span> Lorem ipsum dolor sit amet?
                                    </a>
                                </div>
                                <div id="collapseThree" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link" data-toggle="collapse" href="#collapseFour">
                                        <span>4</span> Lorem ipsum dolor sit amet?
                                    </a>
                                </div>
                                <div id="collapseFour" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link" data-toggle="collapse" href="#collapseFour">
                                        <span>5</span> Lorem ipsum dolor sit amet?
                                    </a>
                                </div>
                                <div id="collapseFour" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn" href="">Ask more</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- FAQs End -->


        <!-- Pricing Plan Start -->
        <!-- <div class="price">
            <div class="container">
                <div class="section-header">
                    <p>Pricing Plan</p>
                    <h2>No Extra Hidden Charges</h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="price-item">
                            <div class="price-header">
                                <div class="price-icon">
                                    <i class="fa fa-home"></i>
                                </div>
                                <div class="price-title">
                                    <h2>Standard</h2>
                                </div>
                                <div class="price-pricing">
                                    <h2><small>$</small>99</h2>
                                </div>
                            </div>
                            <div class="price-body">
                                <div class="price-des">
                                    <ul>
                                        <li>3 Bedrooms cleaning</li>
                                        <li>2 Bathrooms cleaning</li>
                                        <li>1 Living room Cleaning</li>
                                        <li>Vacuum Cleaning</li>
                                        <li>Within 6 Hours</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="price-footer">
                                <div class="price-action">
                                    <a href=""><i class="fa fa-shopping-cart"></i>Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="price-item featured-item">
                            <div class="price-header">
                                <div class="price-icon">
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="price-title">
                                    <h2>Premium</h2>
                                </div>
                                <div class="price-pricing">
                                    <h2><small>$</small>149</h2>
                                </div>
                            </div>
                            <div class="price-body">
                                <div class="price-des">
                                    <ul>
                                        <li>5 Bedrooms cleaning</li>
                                        <li>3 Bathrooms cleaning</li>
                                        <li>2 Living room Cleaning</li>
                                        <li>Vacuum Cleaning</li>
                                        <li>Within 6 Hours</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="price-footer">
                                <div class="price-action">
                                    <a href=""><i class="fa fa-shopping-cart"></i>Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="price-item">
                            <div class="price-header">
                                <div class="price-icon">
                                    <i class="fa fa-gift"></i>
                                </div>
                                <div class="price-title">
                                    <h2>Enterprise</h2>
                                </div>
                                <div class="price-pricing">
                                    <h2><small>$</small>199</h2>
                                </div>
                            </div>
                            <div class="price-body">
                                <div class="price-des">
                                    <ul>
                                        <li>8 Bedrooms cleaning</li>
                                        <li>5 Bathrooms cleaning</li>
                                        <li>3 Living room Cleaning</li>
                                        <li>Vacuum Cleaning</li>
                                        <li>Within 12 Hours</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="price-footer">
                                <div class="price-action">
                                    <a href=""><i class="fa fa-shopping-cart"></i>Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Pricing Plan End -->


        <!-- Newsletter Start -->
        <!-- <div class="newsletter">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h2>Get A Free Quote</h2>
                        <p>
                            Lorem ipsum dolor sit amet adipiscing elit
                        </p>
                    </div>
                    <div classq="col-md-4">
                        <div class="form">
                            <input class="form-control" placeholder="Email here">
                            <button class="btn">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Newsletter End -->


        <!-- Testimonial Start -->
        <div class="testimonial">
            <div class="container">
                <div class="section-header">
                    <p>Client Review</p>
                    <h2>Client Says About Service</h2>
                </div>
                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="img/testimonial-1.jpg" alt="">
                        </div>
                        <div class="testimonial-content">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                            </p>
                            <h3>Customer Name</h3>
                            <h4>Profession</h4>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="img/testimonial-2.jpg" alt="">
                        </div>
                        <div class="testimonial-content">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                            </p>
                            <h3>Customer Name</h3>
                            <h4>Profession</h4>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="img/testimonial-3.jpg" alt="">
                        </div>
                        <div class="testimonial-content">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                            </p>
                            <h3>Customer Name</h3>
                            <h4>Profession</h4>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="img/testimonial-4.jpg" alt="">
                        </div>
                        <div class="testimonial-content">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                            </p>
                            <h3>Customer Name</h3>
                            <h4>Profession</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Call to Action Start -->
        <div class="call-to-action">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-9">
                        <h2>Build a service like this one</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit
                        </p>
                    </div>
                    <div class="col-md-3">
                        <a class="btn" href="https://htmlcodex.com/contact">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to Action End -->


        <!-- Blog Start -->
        <!-- <div class="blog">
            <div class="container">
                <div class="section-header">
                    <p>Latest From Blog</p>
                    <h2>Stay Updated From Our Blog</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-item">
                            <img src="img/blog-1.jpg" alt="Blog">
                            <h3>Lorem ipsum dolor</h3>
                            <div class="meta">
                                <i class="fa fa-list-alt"></i>
                                <a href="">Flour Cleaning</a>
                                <i class="fa fa-calendar-alt"></i>
                                <p>11-Jun-20</p>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum
                            </p>
                            <a class="btn" href="">Learn More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-item">
                            <img src="img/blog-2.jpg" alt="Blog">
                            <h3>Lorem ipsum dolor</h3>
                            <div class="meta">
                                <i class="fa fa-list-alt"></i>
                                <a href="">Glass Cleaning</a>
                                <i class="fa fa-calendar-alt"></i>
                                <p>11-Jun-20</p>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum
                            </p>
                            <a class="btn" href="">Learn More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-item">
                            <img src="img/blog-3.jpg" alt="Blog">
                            <h3>Lorem ipsum dolor</h3>
                            <div class="meta">
                                <i class="fa fa-list-alt"></i>
                                <a href="">Carpet Cleaning</a>
                                <i class="fa fa-calendar-alt"></i>
                                <p>11-Jun-20</p>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum
                            </p>
                            <a class="btn" href="">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Blog End -->


        <!-- Footer Start -->
        <?php
        require_once "includes/footer.php";
        ?>
        <!-- Footer End -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    </div>
    <?php
    require_once "includes/scripts.php";
    ?>
</body>

</html>