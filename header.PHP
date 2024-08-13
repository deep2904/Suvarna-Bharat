<!DOCTYPE html>
<html>

<head>
    <title>Suvarna Bharta</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

    <style>
        * {
            background-color: beige;
            color:black;
        }

        div.gallery {
            border: 1px solid #ccc;
        }

        div.gallery:hover {
            border: 1px solid #777;
        }

        div.gallery img {
            width: 100%;
            height: auto;
        }

        div.desc {
            padding: 15px;
            text-align: center;
        }

        * {
            box-sizing: border-box;
        }

        .responsive {
            padding: 0 6px;
            float: left;
            width: 24.99999%;
        }

        @media only screen and (max-width: 700px) {
            .responsive {
                width: 49.99999%;
                margin: 6px 0;
            }
        }

        @media only screen and (max-width: 500px) {
            .responsive {
                width: 100%;
            }
        }

        .clearfix:after {
            content: "";
            display: table;
            clear: both;
        }


        /* <-----------------------------------------------------------------------------------------------------------
        extra                                                                                                               
        --------------------------------------------------------------------------------------------------------> */
        /*--------------------------------------------------------------
# Portfolio Details
--------------------------------------------------------------*/
.portfolio-details {
  padding-top: 40px;
}

.portfolio-details .portfolio-details-slider img {
  width: 100%;
}

.portfolio-details .portfolio-details-slider .swiper-pagination {
  margin-top: 20px;
  position: relative;
}

.portfolio-details .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet {
  width: 12px;
  height: 12px;
  background-color: #fff;
  opacity: 1;
  border: 1px solid #4e73df;
}

.portfolio-details .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet-active {
  background-color: #4e73df;
}

.portfolio-details .portfolio-info {
  padding: 30px;
  box-shadow: 0px 0 30px rgba(51, 66, 66, 0.08);
}

.portfolio-details .portfolio-info h3 {
  font-size: 22px;
  font-weight: 700;
  margin-bottom: 20px;
  padding-bottom: 20px;
  border-bottom: 1px solid #eee;
}

.portfolio-details .portfolio-info ul {
  list-style: none;
  padding: 0;
  font-size: 15px;
}

.portfolio-details .portfolio-info ul li+li {
  margin-top: 10px;
}

.portfolio-details .portfolio-description {
  padding-top: 30px;
}

.portfolio-details .portfolio-description h2 {
  font-size: 26px;
  font-weight: 700;
  margin-bottom: 20px;
}

.portfolio-details .portfolio-description p {
  padding: 0;
}
/*--------------------------------------------------------------
# Team
--------------------------------------------------------------*/
.team {
  /* background: #fff; */
  padding: 60px 0;
}

.team .member {
  margin-bottom: 10px;
  margin-left: 10px;
  overflow: hidden;
  border-radius: 10px;
  background: #fff;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.4);
}

.team .member .member-img {
  position: relative;
  overflow: hidden;
}

.team .member .social {
  position: absolute;
  left: 0;
  bottom: 30px;
  right: 0;
  opacity: 0;
  transition: ease-in-out 0.3s;
  display: flex;
  align-items: center;
  justify-content: center;
}

.team .member .social a {
  transition: color 0.3s;
  color: #334242;
  margin: 0 3px;
  border-radius: 50px;
  width: 36px;
  height: 36px;
  background: rgba(0, 193, 193, 0.8);
  display: inline-block;
  transition: ease-in-out 0.3s;
  color: #fff;
  display: inline-flex;
  align-items: center;
  justify-content: center;
}

.team .member .social a:hover {
  background: #4e73df;
}

.team .member .social i {
  font-size: 18px;
  line-height: 0;
}

.team .member .member-info {
  padding: 25px 15px;
}

.team .member .member-info h4 {
  font-weight: 700;
  margin-bottom: 5px;
  font-size: 18px;
  color: #334242;
}

.team .member .member-info span {
  display: block;
  font-size: 13px;
  font-weight: 400;
  color: #aaaaaa;
}

.team .member .member-info p {
  font-style: italic;
  font-size: 14px;
  line-height: 26px;
  color: #777777;
}

.team .member:hover .social {
  opacity: 1;
  bottom: 15px;
}


section {
  padding: 60px 0;
}

.section-title {
  text-align: center;
  padding-bottom: 30px;
}

.section-title h2 {
  font-size: 33px;
  font-weight: bold;
  text-transform: uppercase;
  position: relative;
  margin-bottom: 20px;
  margin-top: 10px;
  padding-bottom: 25px;
  color: #f8f9fa;
 
}
.rows{
 
    display:flex;
    margin-left: 20%;
    
    /* width:100%; */
    
}

</style>
</head>

<body>

    <div class="w3-bar w3-border w3-blue w3-large">

        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="img/lh1.jpg" alt="Logo" style="width:50px;" class="rounded-pill">&nbsp;&nbsp; Suvarna Bharat
            </a>
        </div>

        <a href="index.php" class="w3-bar-item w3-button w3-border-right ">Home</a> <!--style="width:33%" -->
        <a href="culture.php" class="w3-bar-item w3-button w3-border-right ">Culture</a><!-- for activate :w3-grey -->
        <a href="heritage.php" class="w3-bar-item w3-button w3-border-right">Heritage</a>
        <a href="contactus.php" class="w3-bar-item w3-button w3-border-right">Contact Us</a>
        <a href="about.php" class="w3-bar-item w3-button w3-border-right">About</a>


        <!-- <div class="w3-dropdown-hover w3-blue">
            <button class="w3-button">Culture</button>
            <div class="w3-dropdown-content w3-bar-block w3-card-4">
                <a href="#" class="w3-bar-item w3-button">Gujarat</a>
                <a href="#" class="w3-bar-item w3-button">Rajsthan</a>
                <a href="#" class="w3-bar-item w3-button">Maharasth</a>
            </div>
        </div>

        <div class="w3-dropdown-hover w3-blue">
            <button class="w3-button">Heritage</button>
            <div class="w3-dropdown-content w3-bar-block w3-card-4">
                <a href="#" class="w3-bar-item w3-button">Gujarat</a>
                <a href="#" class="w3-bar-item w3-button">Rajsthan</a>
                <a href="#" class="w3-bar-item w3-button">Maharasth</a>
            </div> 
        </div>-->

        <input type="text" class="w3-bar-item w3-input w3-white w3-mobile" placeholder="Search..">
        <button class="w3-bar-item w3-button w3-green w3-mobile">Go</button>

        <!-- <a href="#" class="w3-bar-item w3-button w3-border-right"><i class="fa fa-search w3-blue"></i></a> -->
        <a href="#" class="w3-bar-item w3-button w3-border-right"><i class="fa fa-sign-in w3-blue"></i></a>
    </div>


</body>

</html>