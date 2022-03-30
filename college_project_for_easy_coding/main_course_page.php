<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link Bootstrap Css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Link Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Link Custom Css -->
    <link rel="stylesheet" href="css/style.css">
    <title>Courses | Easy Coding</title>
</head>

<style>
    .navbar {
        background: #000;
    }
</style>

<body>

    <!-- Navbar Section Start -->
    <nav class="navbar navbar-expand-sm fixed-top">
        <a href="index.php" class="navbar-brand"><span>E</span>asy College</a>

        <div>
            <ul class="navbar-nav">
                <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                <li class="nav-item"><a href="infrastructure.php" class="nav-link">Infrastructure</a></li>
                <li class="nav-item"><a href="main_course_page.php" class="nav-link active">Courses</a></li>
            </ul>
        </div>

    </nav>
    <!-- Navbar Section End -->

    <!-- Main Course Section Start -->
    <section>
        <div class="container main_course">
            <div class="row">
                <div class="col-sm-5">
                    <img src="photos/c4.jpg" class="img-fluid" alt="">
                </div>
                <div class="offset-sm-2 col-sm-5">
                    <p>#1 on Trending</p>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i><br>
                    <h6>CourseName</h6>
                    <span>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo tenetur debitis deserunt dolore et illo aut doloribus similique quia nihil voluptatum sit praesentium doloremque veritatis, odit porro, ipsa, nesciunt asperiores. <br><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima tempore illum fugiat est aperiam quaerat alias, nihil accusamus qui incidunt, eius error dicta. Veniam pariatur sit rem doloribus, natus provident?
                    </span><br>

                    <button data-toggle="modal" data-target="#popupforlogin" class="btn font-weight-bold">Buy Now</button>



                </div>
            </div>
        </div>
    </section>
    <!-- Main Course Section End -->

    <!-- Footer Section Start -->
    <footer class="fixed-bottom">
        <a href="">2021 | Easy Coding | All Right Reserved</a>
    </footer>
    <!-- Footer Section End -->






    <!--========== POPUP SECTION START ============-->


    <!-- Popup For Login Account Start -->

    <div class="modal fade" id="popupforlogin">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                    <!-- Login Account Start -->
                    <div class="container">
                        <div class="row_custom">
                            <div class="col-sm-11">
                                <form action="">
                                    <div id="login_main_message"></div>
                                    <div class="form-group">
                                        <label for="" class="font-weight-bold">Email</label>

                                        <small id="login_email_mess"></small>

                                        <input type="email" class="font-weight-bold form-control" id="login_email" placeholder="Enter Your Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="font-weight-bold">Password</label>

                                        <small id="login_password_mess"></small>

                                        <input type="password" class="font-weight-bold form-control" id="login_password" placeholder="Enter Your Password">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Login Account End -->


                </div>
                <div class="modal-footer">
                    <div class="mr-2" id="spinner"></div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" id="login_button" class="btn btn-danger">Login</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Popup For Login Account End -->

    <!--========== POPUP SECTION END ============-->


    <!-- Script For Bootstrap -->
    <script src="js/jquery.js"></script>
    <script src="js/pooper.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom JS -->
    <script src="js/custom.js"></script>


</body>

</html>