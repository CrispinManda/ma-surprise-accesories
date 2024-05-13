<?php
/*
 * Template Name: our services
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
        <p class="mb-4">There are various types of cameras available, including dome cameras, bullet cameras, PTZ (Pan-Tilt-Zoom) cameras, and specialized cameras for specific purposes like license plate recognition or facial recognition.</p>
        <a class="btn request-quotation-btn" href="#" data-bs-toggle="modal" data-bs-target="#cctvQuotationModal">
            <i class="fa fa-arrow-right text-white me-3"></i>Quotation
        </a>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="cctvQuotationModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="cctvQuotationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="cctvQuotationModalLabel"> Quotation Request Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="cctv-quotation-form" action="#" method="post">
                    <!-- Your form fields here -->
                    <div class="mb-3">
                        <label for="customer-name" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="customer-name" name="customer-name" required>
                    </div>
                    <!-- Add other form fields -->
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



                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="service-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/icon/icon-8.png" alt="Icon">
                        </div>
                        <h4 class="mb-3"> Access control and Softwares</h4>
                        <p class="mb-4"> Our Access control systems and software are critical components of modern security infrastructure, allowing businesses and organizations to manage and monitor access to physical spaces, information, and resources.</p>
                        <a class="btn request-quotation-btn" href="#" data-bs-toggle="modal" data-bs-target="#cctvQuotationModal">
                        <i class="fa fa-arrow-right text-white me-3"></i>Quotation
        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="service-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/icon/icon-9.png" alt="Icon">
                        </div>
                        <h4 class="mb-3">Electric/Razor Fences</h4>
                        <p class="mb-4">Our Electric razor fences are designed to provide a strong physical barrier while also delivering an electric shock to deter intruders from attempting to breach the perimeter.</p>
                        <a class="btn request-quotation-btn" href="#" data-bs-toggle="modal" data-bs-target="#cctvQuotationModal">
                        <i class="fa fa-arrow-right text-white me-3"></i>Quotation
        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="service-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/icon/icon-3.png" alt="Icon">
                        </div>
                        <h4 class="mb-3">Office/Home Internet Installation</h4>
                        <p class="mb-4">Our Office and home internet installation involve setting up the necessary infrastructure to connect to the internet reliably and securely.</p>
                        <a class="btn request-quotation-btn" href="#" data-bs-toggle="modal" data-bs-target="#cctvQuotationModal">
                        <i class="fa fa-arrow-right text-white me-3"></i>Quotation
        </a>
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





    <?php get_footer(); ?>