<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juk's Hotel</title>
    <link rel="stylesheet" href="/HotelManagement/Style/style.css" />
    <link rel="shortcut icon" href="/HotelManagement/Images/logo.png" type="image/x-icon">
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
                    <li><a href="./home.html" target="_self">home</a></li>
                    <li ><a href="/HotelManagement/Pages/Rooms/room.html" target="_self">rooms</a>
                        <!-- <div class="sub-menu">
                            <a href="#">deluxe urban</a>
                            <a href="#">deluxe living</a>
                            <a href="#">junior suite</a>
                            <a href="#">executive suite</a>
                        </div> -->
                    </li>
                    <li class="menu"><a href="#">offers</a>
                        <div class="sub-menu">
                            <a href="./Offers/dinner.html" target="_self">dinner</a>
                            <a href="./Offers/wellness.html" target="_self">wellness</a>
                        </div>
                    </li>
                    <li><a href="./location.html" target="_self">location</a></li>
                    <li><a href="#">contact</a></li>
                </ul>
            </nav>
                <button type="submit"
                        name="btn-book"
                        class="btn-book">
                    <a href="#">Book Now</a>
                </button>
        </div>
    </header>
    <!--  Header End  -->
    <main>
        <div class="container-contact">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Hotel Fact Sheet</h3>
                    <a href="/HotelManagement/Images/d-1.jpg" download=""><!--Not yet found any idea how to do it download pdf-->
                        <button type="button" 
                                class="btnPDF">Download PDF <i class="fa fa-file-pdf-o"></i>
                        </button>
                    </a>
                    <h3 style="margin-top: 3rem;">Location & Map</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3908.773460838467!2d104.89215657512553!3d11.
                            56809134409261!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31095173761d4a53%3A0xcd09ff2f4d326e3f!2z4Z6c4Z634Z6R4Z-
                            S4Z6Z4Z624Z6f4Z-S4Z6Q4Z624Z6T4oCLIOGen-GfiuGet-Gej-Get-GegA!5e0!3m2!1skm!2skh!4v1687318395781!5m2!1skm!2skh" 
                            width="550" height="400" style="border:0;border-radius: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                <div class="col-sm-6">
                    <div class="contact-detail">
                        <h3>More to tell you</h3>
                        <div class="detail-side" style="padding: 1rem;">
                            <h4 class="fw-bold">Juk's Hotel</h4>
                            <table>
                                <tbody>
                                    <tr>
                                        <td>GPS :</td>
                                        <td style="padding-left: 20px;">13.3548527,103.8575525,17z</td>
                                    </tr>
                                    <tr>
                                        <td>Address :</td>
                                        <td style="padding-left: 20px;">No. 86A, Street 110, មហាវិថី សហពន្ធ័រុស្ស៊ី (១១០), ភ្នំពេញ</td>
                                    </tr>
                                    <tr>
                                        <td>Tel :</td>
                                        <td style="padding-left: 20px;">023880612</td>
                                    </tr>
                                    <tr>
                                        <td>Mobile :</td>
                                        <td style="padding-left: 20px;">023880612</td>
                                    </tr>
                                    <tr>
                                        <td>Email :</td>
                                        <td style="padding-left: 20px;">Setecu@gmail.com</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <h3>drop us a message</h3>
                        <div class="form-group">
                            <label for="name" class="form-label mb-2">Name</label>
                            <input type="text" class="form-control" id="name" required/>
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label mb-2">Email</label>
                            <input type="email" class="form-control" id="email" />
                        </div>
                        <div class="form-group">
                            <label for="country" class="form-label mb-2">Country</label>
                            <input type="text" class="form-control" id="country" required/>
                        </div>
                        <div class="form-group">
                            <p>Comment</p>
                            <textarea id="message" rows="5" class="form-control" required></textarea>
                        </div>
                        <button type="button"
                                name="btn-contact"
                                class="btn-contact ">
                            <a href="#"> Send </a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--  Button Scroll Start -->
    <button onclick="topFunction()" id="myBtn">
        <i class="fa fa-arrow-up"></i>
    </button>
    <!--  Button Scroll End -->
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
    <script src="/HotelManagement/Javascript/index.js"></script>
</body>
</html>