    <!-- Navbar Section Start -->
    <?php
    define("TITLE", "Contact");
    define("PAGE", "contact");
    require_once("header-footer/header.php");
    ?>
    <!-- Navbar Section End -->


    <!-- Header Section Start -->
    <section>
        <div class="about_header">
            <div class="img-parent">
                <div class="img">
                    <img src="photos/contact_header.jpg" class="img-fluid" alt="">
                </div>
                <div class="img-overlay"></div>
            </div>
            <div class="img-content">
                <h6>Contact us</h6>
            </div>
        </div>
    </section>
    <!-- Header Section End -->

    <!-- Contact Main Section Start -->
    <section>
        <div class="contact_main_section container">
            <div class="row">
                <div class="col-sm-4">
                    <h6>Contact Details</h6>
                    <h5>Dummy Details</h5>
                </div>

                <div class="offset-sm-2 col-sm-6">
                    <h6>Connect With Us</h6>

                    <form action="" id="contact_form_id">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Name</label>
                            <small id="contact_name_mess"></small>
                            <input type="text" class="font-weight-bold form-control" id="contact_name" placeholder="Enter Your Name">
                        </div>
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Email</label>
                            <small id="contact_email_mess"></small>
                            <input type="email" id="contact_email" class="font-weight-bold form-control" placeholder="Enter Your Email">
                        </div>
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Phone Number</label>
                            <small id="contact_p_number_mess"></small>
                            <input type="number" id="contact_p_number" class="font-weight-bold form-control" placeholder="Enter Your Number">
                        </div>
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Country</label>
                            <small id="contact_country_mess"></small>
                            <input type="text" class="font-weight-bold form-control" id="contact_country" placeholder="Enter Your Country">
                        </div>
                        <button id="contact_button" class="btn">Submit Now</button>
                        <div id="contact_main_mess"></div>
                    </form>

                </div>

            </div>
        </div>
    </section>
    <!-- Contact Main Section End -->




    <!-- Footer Section Start -->
    <?php require_once("header-footer/footer.php"); ?>
    <!-- Footer Section End -->