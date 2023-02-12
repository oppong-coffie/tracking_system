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

    <div class=" text-center"  style="padding-top: 50px; padding-bottom:50px;" >
        <button class="blue-background-colors mt-4"> Order Tracking</button>
        <h4 class="mt-4">Enter Order ID to Track Parcel</h4>
        <form action="" method="" class="mt-4">
            <input type="text" name="orderId" class="input"><br>
            <a href="tracking_info.php"> <input type=" submit" value="Track Now" class="btn btn-primary mt-4"></a>

        </form>
    </div>

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