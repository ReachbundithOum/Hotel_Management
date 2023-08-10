<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juk's Hotel</title>
    <link rel="stylesheet" href="/HotelManagement/Style/style.css" />
    <link rel="shortcut icon" href="/HotelManagement/Images/logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/df974fea5b.js" crossorigin="anonymous"></script>
</head>
<body>
    <!--  Header Start  -->
    <header>
        <div class="container-fluid d-flex align-items-center justify-content-center pr-4 pl-4">
            <div class="logo">
                <a href="#">
                    <img src="/HotelManagement/Images/Logo.png" alt=""  width="150px"/>
                </a>
            </div>
            <nav>
                <ul >
                    <li><a href="/HotelManagement/Pages/home.html" target="_self">home</a></li>
                    <li ><a href="/HotelManagement/Pages/Rooms/room.html" target="_self">rooms</a></li>
                    <li class="menu"><a href="#">offers</a>
                        <div class="sub-menu">
                            <a href="#">dinner</a>
                            <a href="#">wellness</a>
                        </div>
                    </li>
                    <li><a href="#">location</a></li>
                    <li><a href="#">contact</a></li>
                </ul>
            </nav>
                <button type="button" name="btn-now" id="" class="btn-now">
                    <a href="#" style="text-decoration:none;color:#fff;">book <!--<i class="fa fa-chevron-circle-right"></i>--> now</a>
                </button>
        </div>
    </header>
    <!--  Header End  -->
    <!--  Location Selection Start -->

    <!--  Location Selection End -->
    <!--  Footer Selection Start  -->
    <footer>
        <div class="container-footer">
            <div class="row">
                <div class="col-sm-4 f-1">
                    <h6>follow us</h6>
                    <div class="social-icon ">
                        <img src="/HotelManagement/Images/fb.png" alt="Facebook icon" id="fa" />
                        <img src="/HotelManagement/Images/yt.png" alt="Youtube icon" id="yt" />
                        <img src="/HotelManagement/Images/instar.png" alt="Instagram icon" id="in" />
                        <img src="/HotelManagement/Images/tele.png" alt="Telegram icon"  id="te" />
                        <img src="/HotelManagement/Images/pin.png" alt="Pinterest icon" id="pi" />
                        <p>Juk's Hotel © 2023 All rights reserved. <br />
                            Hotel Web Design by Bundith
                        </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <table>
                        <tr>
                            <th ><img src="/HotelManagement/Images/loca.png" alt="" /></th>
                            <th class="text-col-2"><p style="margin-left: -40px;"> ADDRESS <br />Street 123, Wat Village, Phnom Penh, <br /> Cambodia </p></th>
                        </tr>
                        <tr>
                            <th><img src="/HotelManagement/Images/ph.png" alt="" /></th>
                            <th class="text-col-2"><p style="margin-left: -40px;">Telephone <br />+855 963905999 </p></th>
                        </tr>
                        <tr>
                            <th><img src="/HotelManagement/Images/em.png" alt="" /></th>
                            <th class="text-col-2"><p style="margin-left: -40px;">Email <br />bundithoum5724@gmail.com </p></th>
                        </tr>
                    </table>
                </div>
                <div class="col-sm-4">
                    <div class="em-col-3">
                        <h6>dont't miss our secret offer!</h6>
                        <span>Only available for booking direct on the hotel website</span>
                        <input  type="email"
                                placeholder="Your email address"
                                name="email-footer"
                                class="form-control mt-3" required />
                        <button type="submit"
                                name="submit-footer"
                                id=""
                                class="btn btn-success mt-3">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--  Footer Selection End  -->
</body>
</html>