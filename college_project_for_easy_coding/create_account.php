<?php
define("TITLE", "Create Account");
define("PAGE", "create_account");
?>
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
    <!-- Link AOS -->
    <!-- <link rel="stylesheet" href="css/aos.css"> -->
    <!-- Link Custom Css -->
    <link rel="stylesheet" href="css/style.css">
    <title> <?php echo TITLE; ?> | Easy Coding</title>
</head>

<body>

    <style>
        .navbar {
            padding: .1px;
            background: #000;
        }

        footer {
            padding: 0.8px;
        }
    </style>


    <nav class="navbar navbar-expand-sm fixed-top">
        <a href="index.php" class="navbar-brand"><span>E</span>asy College</a>
        <div>
            <ul class="navbar-nav">
                <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                <li class="nav-item"><a href="infrastructure.php" class="nav-link">Infrastructure</a></li>
                <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                <li class="nav-item"><a href="faculty.php" class="nav-link">Faculty</a></li>
                <li class="nav-item"><a href="" data-toggle="modal" data-target="#popupforlogin" class="nav-link">Login</a></li>
                <li class="nav-item"><a href="create_account.php" class="nav-link  <?php if (PAGE == 'create_account') {
                                                                                        echo 'active';
                                                                                    } ?> ">Create Account</a></li>
                <li class="nav-item"><a href="" class="nav-link">Logout</a></li>
            </ul>
        </div>
    </nav>

    <!-- Create Form Start -->
    <section>
        <div class="container create_account_form">
            <div class="row justify-content-center">
                <div class="col-sm-9">
                    <form action="" id="create_form_id">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Name</label>
                            <small id="create_name_mess"></small>
                            <input type="text" class="font-weight-bold form-control" id="create_name" placeholder="Enter Your Name">
                        </div>
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Email</label>
                            <small id="create_email_mess"></small>
                            <input type="email" class="font-weight-bold form-control" id="create_email" placeholder="Enter Your Email">
                        </div>
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Password</label>
                            <small id="create_pass_mess"></small>
                            <span id="custom_message">Password is <span id="add_message"></span></span>
                            <input type="password" id="password" class="font-weight-bold form-control create_password" placeholder="Enter Your Password">
                        </div>
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Address</label>
                            <small id="create_address_mess"></small>
                            <input type="text" class="font-weight-bold form-control" id="create_address" placeholder="Enter Your Address">
                        </div>
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Phone Number</label>
                            <small id="create_phone_mess"></small>
                            <input type="number" class="font-weight-bold form-control" id="create_phone_number" placeholder="Enter Your Number">
                        </div>
                        <button class="btn" id="create_button">Create Account</button>
                        <span id="create_main_message"></span>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Create Form End -->

    <!-- Custom Script Start -->
    <script>
        var password = document.getElementById("password");
        var message = document.getElementById("custom_message");
        var add_mess = document.getElementById("add_message");

        password.addEventListener("input", () => {
            if (password.value.length > 0) {
                message.style.display = "inline";
            } else {
                message.style.display = "none";
            }

            if (password.value.length < 5) {
                password.style.borderColor = "red";
                message.style.color = "red";
                add_mess.innerHTML = "Weak";
            } else if (password.value.length >= 5 && password.value.length < 10) {
                password.style.borderColor = "orange";
                message.style.color = "orange";
                add_mess.innerHTML = "Medium";
            } else if (password.value.length > 10) {
                password.style.borderColor = "green";
                message.style.color = "green";
                add_mess.innerHTML = "Strong";
            }

        })
    </script>
    <!-- Custom Script End -->


    <!-- Script For Bootstrap -->
    <script src="js/jquery.js"></script>
    <script src="js/pooper.js"></script>
    <script src="js/bootstrap.min.js"></script>


    <!-- Custom JS -->
    <script src="js/custom.js"></script>

    <!-- Footer Section Start -->
    <footer class="fixed-bottom">
        <a href="">2021 | Easy Coding | All Right Reserved</a>
    </footer>
    <!-- Footer Section End -->