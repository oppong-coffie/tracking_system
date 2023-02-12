<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Assets -->
    <!-- Assets -->
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="Assets/bootstrap-4.4.1-dist/bootstrap-4.4.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="Assets/aos-master/dist/aos.css">
    <link rel="stylesheet" href="Assets/fontawesome-free-5.15.3-web/fontawesome-free-5.15.3-web/css/allcss">
</head>

<body>
    <div class="nav-section">
        <!-- NAVIGATION BAR -->
        <!-- NAVIGATION BAR -->
        <div class="p-4">
            <div class="row">
                <div class="col-sm-7">
                    <div class="logo">
                        <img class="logo" src="images/Express-Delivery-Logo-scaled.jpg" alt="">
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="topnav register" id="myTopnav">
                        <div>
                            <a class="a" href="#">HOME</a>
                            <a class="a" href="#">CONTACT</a>
                            <a class="a" href="#">ABOUT</a>
                            <a class="a" href="#">BLOG</a>
                            <a class="a" href="#">TEAM</a>
                            <a class="a" href="order_id.php">TRACK ORDER</a>
                            <a href="javascript:void(0)" class="icon a " onclick="myFunction()">
                                <i class="fa fa-bars"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="nav-section-text text-center white">

            <h3 class="text-white ">Order Tracking</h3>
        </div>
    </div>

    <div class="contain " style="padding :50px;">
    <h4 class="mb-4"> Order Details</h4>
        <div class="row">
            <div class="col-sm-6">
                <div class="delivery_p_info info ">
                    <div class="info_text p-2">
                        <P class="white h6">
                            Delivery Personnel info
                        </P>
                        <form action="" class="mt-4 p-4">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for=""> Name</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-sm-6">
                                    <label for=""> Phone</label>
                                    <input type="text" class="form-control">
                                </div>
                                <label for="" class="mt-4"> Email</label>
                                <input type="text" class="form-control ">

                                <label for="" class="mt-4"> Address</label>
                                <input type="text" class="form-control ">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="reciever_info info">
                    <div class="info_text p-2">
                        <p class="white h6">
                            Reciever Information
                        </p>

                        <form action="" class="mt-4 p-4">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for=""> Name</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-sm-6">
                                    <label for=""> Phone</label>
                                    <input type="text" class="form-control">
                                </div>
                                <label for="" class="mt-4"> Email</label>
                                <input type="text" class="form-control ">

                                <label for="" class="mt-4"> Address</label>
                                <input type="text" class="form-control ">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4 pt-4 mb-4 pb-4">
        <div class="row">
            <div class="col-sm-3 ">
                <div class="icons"></div>
                <h6 class="mt-2 ml-2">Picked</h6>
            </div>

            <div class="col-sm-3">
                <div class="icons"></div>
                <h6  class="mt-2 ml-2">Assort</h6>
            </div>

            <div class="col-sm-3">
                <div class="icons"></div>
                <h6  class="mt-2 ml-2">Delivered</h6>
            </div>

            <div class="col-sm-3">
                <div class="icons"></div>
                <h6  class="mt-2 ml-2">Completed</h6>
            </div>
        </div>
    </div>

    <form action="" method="post" class="text-center">
        <button class="btn btn-primary mb-4">Mark as Delivered </button>
    </form>

    <footer class="nav-section pt-4">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="white pt-4 d-block">
                        <h5 class="">Company</h5>
                        <p><a class="" href="#">HOME</a></p>
                        <p><a class="" href="#">ABOUT US</a></p>
                        <p><a class="" href="#">CONTACT US</a></p>
                        <p><a class="" href="#">BLOG</a></p>
                        <p><a class="" href="#">TEAM</a></p>
                        <p><a class="" href="#">Track Order</a></p>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div>

                    </div>
                </div>

                <div class="col-sm-3">
                    <div>

                    </div>
                </div>

                <div class="col-sm-3">
                    <div>

                    </div>
                </div>
            </div>
        </div>
    </footer>



    <!-- Scripts -->
    <!-- Scripts -->
    <script src="Assets/jquery-3.6.0.min.js"></script>
    <script src="Assets/bootstrap-4.4.1-dist/bootstrap-4.4.1-dist/js/bootstrap.js"></script>
    <script src="Assets/fontawesome-free-5.15.3-web/fontawesome-free-5.15.3-web/js/all.js"></script>
    <script src="Assets/aos-master/dist/aos.js"></script>
    <script src="nav.js"></script>
    <script>
        AOS.int();
    </script>
</body>

</html>