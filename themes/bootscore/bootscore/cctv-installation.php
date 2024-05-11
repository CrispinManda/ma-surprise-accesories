<?php
/*
 * Template Name: Custom Template
 * Description: A custom template for Bootscore theme.
 */
?>

<?php get_header(); ?>


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center">
                <div class="bg-primary mb-3 mx-auto" style="width: 60px; height: 2px;"></div>
                <!-- <h1 class="display-5 mb-5">CCTV Installation S</h1> -->
            </div>
            <div class="row g-0 service-row">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="service-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/icon/icon-6.png" alt="Icon">
                        </div>
                        <h4 class="mb-3">Commercial CCTV System</h4>
                        <p class="mb-4">Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem</p>
                        <a class="btn" href=""><i class="fa fa-arrow-right text-white me-3"></i>Read More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="service-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/icon/icon-8.png" alt="Icon">
                        </div>
                        <h4 class="mb-3">Finger Print Access</h4>
                        <p class="mb-4">Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem</p>
                        <a class="btn" href=""><i class="fa fa-arrow-right text-white me-3"></i>Read More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="service-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/icon/icon-9.png" alt="Icon">
                        </div>
                        <h4 class="mb-3">Fire Detection And Safety</h4>
                        <p class="mb-4">Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem</p>
                        <a class="btn" href=""><i class="fa fa-arrow-right text-white me-3"></i>Read More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="service-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/icon/icon-3.png" alt="Icon">
                        </div>
                        <h4 class="mb-3">Smart Home Security</h4>
                        <p class="mb-4">Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem</p>
                        <a class="btn" href=""><i class="fa fa-arrow-right text-white me-3"></i>Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Projects Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-primary mb-3 mx-auto" style="width: 60px; height: 2px;"></div>
                <h1 class="display-5 mb-5">Our Projects</h1>
            </div>
            <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-12 text-center">
                    <ul class="list-inline mb-5" id="portfolio-flters">
                        <li class="mx-2 active" data-filter="*">All</li>
                        <li class="mx-2" data-filter=".first">Complete Projects</li>
                        <li class="mx-2" data-filter=".second">Ongoing Projects</li>
                    </ul>
                </div>
            </div>
            <div class="row g-4 portfolio-container">
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-inner">
                        <img class="img-fluid w-100" src="https://lh3.googleusercontent.com/p/AF1QipPjz5K6BumQOJJiNHNjNLox59up3AYKPDwLxhcI=s1360-w1360-h1020">
                        <div class="text-center p-4">
                            <p class="text-primary mb-2">Business Security</p>
                            <h5 class="lh-base mb-0">Smart CCTV Security Systems That Fits Your Business</h5>
                        </div>
                        <div class="portfolio-text text-center bg-white p-4">
                            <p class="text-primary mb-2">Business Security</p>
                            <h5 class="lh-base mb-3">Smart CCTV Security Systems That Fits Your Business</h5>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href="https://i.pinimg.com/564x/96/1e/e3/961ee353a4bd9fcf0a034a1987648696.jpg"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.3s">
                    <div class="portfolio-inner">
                        <img class="<?php echo get_template_directory_uri(); ?>/img-fluid w-100" src="https://i.pinimg.com/564x/ee/6b/13/ee6b134bf09270ed8a6079fc1a878526.jpg" alt="">
                        <div class="text-center p-4">
                            <p class="text-primary mb-2">Fire Detection</p>
                            <h5 class="lh-base mb-0">Smart CCTV Security Systems That Fits Your Business</h5>
                        </div>
                        <div class="portfolio-text text-center bg-white p-4">
                            <p class="text-primary mb-2">Fire Detection</p>
                            <h5 class="lh-base mb-3">Smart CCTV Security Systems That Fits Your Business</h5>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href="https://i.pinimg.com/564x/96/1e/e3/961ee353a4bd9fcf0a034a1987648696.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.5s">
                    <div class="portfolio-inner">
                        <img class="<?php echo get_template_directory_uri(); ?>/img-fluid w-100" src="https://i.pinimg.com/564x/96/1e/e3/961ee353a4bd9fcf0a034a1987648696.jpg" alt="">
                        <div class="text-center p-4">
                            <p class="text-primary mb-2">Access Control</p>
                            <h5 class="lh-base mb-0">Smart CCTV Security Systems That Fits Your Business</h5>
                        </div>
                        <div class="portfolio-text text-center bg-white p-4">
                            <p class="text-primary mb-2">Access Control</p>
                            <h5 class="lh-base mb-3">Smart CCTV Security Systems That Fits Your Business</h5>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href="https://i.pinimg.com/564x/67/56/51/675651ed293ed92aaf4dc9cf444a5b67.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-inner">
                        <img class="<?php echo get_template_directory_uri(); ?>/img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/img/portfolio-4.jpg" alt="">
                        <div class="text-center p-4">
                            <p class="text-primary mb-2">Alarm Systems</p>
                            <h5 class="lh-base mb-0">Smart CCTV Security Systems That Fits Your Business</h5>
                        </div>
                        <div class="portfolio-text text-center bg-white p-4">
                            <p class="text-primary mb-2">Alarm Systems</p>
                            <h5 class="lh-base mb-3">Smart CCTV Security Systems That Fits Your Business</h5>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href="<?php echo get_template_directory_uri(); ?>/img/portfolio-4.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.3s">
                    <div class="portfolio-inner">
                        <img class="<?php echo get_template_directory_uri(); ?>/img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/img/portfolio-5.jpg" alt="">
                        <div class="text-center p-4">
                            <p class="text-primary mb-2">CCTV & Video</p>
                            <h5 class="lh-base mb-0">Smart CCTV Security Systems That Fits Your Business</h5>
                        </div>
                        <div class="portfolio-text text-center bg-white p-4">
                            <p class="text-primary mb-2">CCTV & Video</p>
                            <h5 class="lh-base mb-3">Smart CCTV Security Systems That Fits Your Business</h5>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href="<?php echo get_template_directory_uri(); ?>/img/portfolio-5.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.5s">
                    <div class="portfolio-inner">
                        <img class="<?php echo get_template_directory_uri(); ?>/img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/img/portfolio-6.jpg" alt="">
                        <div class="text-center p-4">
                            <p class="text-primary mb-2">Smart Home</p>
                            <h5 class="lh-base mb-0">Smart CCTV Security Systems That Fits Your Business</h5>
                        </div>
                        <div class="portfolio-text text-center bg-white p-4">
                            <p class="text-primary mb-2">Smart Home</p>
                            <h5 class="lh-base mb-3">Smart CCTV Security Systems That Fits Your Business</h5>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href="<?php echo get_template_directory_uri(); ?>/img/portfolio-6.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Projects End -->


    <!-- Quote Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container quote px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="<?php echo get_template_directory_uri(); ?>/img/quote.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 quote-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <div class="bg-primary mb-3" style="width: 60px; height: 2px;"></div>
<div class="container">
    <h2 class="mt-5">CCTV Quotation Request Form</h2>
    <form id="cctv-quotation-form" action="#" method="post" class="mt-3">
        <div class="mb-3">
            <label for="customer-name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="customer-name" name="customer-name" required>
        </div>

        <div class="mb-3">
            <label for="customer-email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="customer-email" name="customer-email" required>
        </div>

        <div class="mb-3">
            <label for="customer-phone" class="form-label">Phone Number:</label>
            <input type="tel" class="form-control" id="customer-phone" name="customer-phone" required>
        </div>

        <div class="mb-3">
            <label for="installation-location" class="form-label">Installation Location:</label>
            <textarea class="form-control" id="installation-location" name="installation-location" rows="4" required></textarea>
        </div>

        <div class="mb-3">
            <label for="additional-details" class="form-label">Additional Details:</label>
            <textarea class="form-control" id="additional-details" name="additional-details" rows="4"></textarea>
        </div>

        <button type="submit" name="submit_cctv_quotation" class="btn btn-primary">Submit</button>
    </form>
</div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->



    <?php get_footer(); ?>