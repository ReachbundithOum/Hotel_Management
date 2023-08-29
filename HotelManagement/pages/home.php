<style>
    .text-block{
        position: absolute;
        bottom: 585px;
        right: 1rem;
        background-color: #bd9c58;
        color: #fff;
        padding: .7rem .6rem 0;
        border-radius: 5px;
        width: auto;
    }
    .text-block p{
        font-size: .9rem;
        font-weight: 300;
    }
</style>
    <!--  Carousel Start  -->
    <div class="container-carousel" style="position:relative;">
        <div id="carouselSlide" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000" >
                    <img src="../HotelManagement/images/Carousel/carousel1.jpg" alt="" width="100%" height="650px" />
                    <div class="text-block">
                        <p><i class="fa fa-phone"></i> +885 (0)92 213 824 | <i class="fa fa-edit"></i><a href="#" class="text-decoration-none text-white"> Manage Your Booking </a></p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="../HotelManagement/images/Carousel/carousel2.jpg" alt="" width="100%" height="650px" />
                    <div class="text-block">
                        <p><i class="fa fa-phone"></i> +885 (0)92 213 824 | <i class="fa fa-edit"></i><a href="#" class="text-decoration-none text-white"> Manage Your Booking </a></p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="../HotelManagement/images/Carousel/carousel4.jpg" alt="" width="100%" height="650px" />
                    <div class="text-block">
                        <p><i class="fa fa-phone"></i> +885 (0)92 213 824 | <i class="fa fa-edit"></i><a href="#" class="text-decoration-none text-white"> Manage Your Booking </a></p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="../HotelManagement/images/Carousel/carousel5.jpg" alt="" width="100%" height="650px" />
                    <div class="text-block">
                        <p><i class="fa fa-phone"></i> +885 (0)92 213 824 | <i class="fa fa-edit"></i><a href="#" class="text-decoration-none text-white"> Manage Your Booking </a></p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="../HotelManagement/images/Carousel/carousel6.jpg" alt="" width="100%" height="650px" />
                    <div class="text-block">
                        <p><i class="fa fa-phone"></i> +885 (0)92 213 824 | <i class="fa fa-edit"></i><a href="#" class="text-decoration-none text-white"> Manage Your Booking </a></p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselSlide" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselSlide" data-bs-slide="next" >
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    
    <!--  Carousel End  -->
    <!--  Main Selection Start  -->
    <main>
        <div class="main-top">
            <div>
                <h3>FIND A ROOM</h3>
                <div class="row" style="background-color: #494a4b;padding:0px 15px 25px 25px;border-radius:10px;">
                    <div class="col-lg-2 col-sm-2">
                        <h6 class="mt-3 text-white">ARRIVAL DATE</h6>
                        <input  type="date"
                                name="arrival"
                                id="arrival"
                                class="form-control"/>
                    </div>
                    <div class="col-lg-2 col-sm-2">
                        <h6 class="mt-3 text-white">DEPARTURE DATE</h6>
                            <input  type="date"
                                    name="departure"
                                    id="departure"
                                    class="form-control"/>
                    </div>
                    <div class="col-lg-2 col-sm-2">
                        <h6 class="mt-3 text-white">ADULT</h6>
                        <select name="adult" 
                                id="adult"
                                class="form-select">
                            <option value="1">1 adult</option>
                            <option value="2">2 adults</option>
                            <option value="3">3 adults</option>
                            <option value="4">4 adults</option>
                            <option value="5">5 adults</option>
                        </select>
                    </div>
                    <!-- <div class="col-lg-2 col-sm-2">
                        <h6 class="text-center mt-3">CHILDRENS</h6>
                            <select name="children" 
                                    id="children"
                                    class="form-select">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                    </div> -->
                    <div class="col-lg-4 col-sm-4">
                        <h6 class="mt-3 text-white">ROOMS</h6>
                                <select name="rooms" 
                                        id="rooms"
                                        class="form-select">
                                    <option value="1">DELUXE DOUBLE ROOM</option>
                                    <option value="2">DELUXE DOUBLE POOL VIEW</option>
                                    <option value="3">DELUXE DOUBLE OR TWIN ROOM</option>
                                    <option value="4">DELUXE DOUBLE OR TWIN POOL VIEW</option>
                                    <option value="5">DELUXE TRIPLE ROOM</option>
                                    <option value="6">DELUXE TRIPLE POOL ROOM</option>
                                    <option value="7">SUITE POOL VIEW</option>
                                </select>
                    </div>
                    <div class="col-lg-2 col-sm-2">
                        <button class="btn-book-now"
                                style=" display:inline-block;text-align:center;
                                        border-radius:5px;margin-top:43px;padding:7px 0;
                                        max-width:150px;width:100%;font-weight:500;
                                        color:#fff;border:none;outline:none;
                                        background-color:#bd9c58;">FIND NOW</button>
                    </div>
                </div>
            </div>
            <h2 class="text-center text-uppercase p-3 mt-5" style="color:#987d46;">" Angkor Starlit Hotel "</h2>
            <p>សាលារៀន</p>
                <div class="room-line"></div>
            <p> Angkor Starlit Hotel is ideally located in a leafy street in the center of Siem Reap, 
                in the vibrant Wat Bo area, the hotel boast 50’s-inspired, complemented by large 
                green area and vertical gardens. This peaceful area adjacent to the river is just 
                steps away from the old market, shopping and entertainment district, and 15 minutes 
                ride from the UNESCO World Heritage Site of Angkor Wat, while Siem Reap International 
                Airport is access within an 8 km drive. At Angkor Starlit Hotel, guests can enjoy a rejuvenating 
                spa treatment, a 20-meter swimming pool and an appetizing food selection of local Khmer 
                cuisine and continental dishes. Guests can also approach the front desk for tour arrangements,
                ticketing and concierge service.</p>
        </div>
        <div class="main-body">
            <div class="row"><!--F1-->
                <div class="col-sm-3"><a href="#">
                    <img src="../HotelManagement/Images/m-1.jpg" alt="m-1" class="img"  width="100%"   /></a>
                    <div class="col-text">
                        <p>special offers</p>
                        <span>  We offer several attractively priced packages 
                                that will enrich your stay at Viroth’s. Enjoy our unique...
                        </span><br /><br />
                        <button class="more-detail-btn">
                            <a href="index.php?offer=special-offer">More Details</a>
                        </button>
                    </div>                               
                </div>
                <div class="col-sm-3"><a href="#">
                    <img src="../HotelManagement/Images/m-2.jpg" alt="m-1" class="img"  width="100%" /></a>
                    <div class="col-text">
                        <p>rooms & suite</p>
                        <span>  We have thirty-five spacious rooms and suites 
                                tastefully and comfortably furnished.These are...
                        </span><br /><br />
                        <button class="more-detail-btn">
                            <a href="index.php?room=room">More Details</a>
                        </button>
                    </div>                               
                </div>
                <div class="col-sm-3"><a href="#">
                    <img src="../HotelManagement/Images/m-3.jpg" alt="m-1" class="img"  width="100%" /></a>
                    <div class="col-text">
                        <p>wellness</p>
                        <span>  Keep fit and well during your stay 
                                by making use of our treadmills and other state of the art...
                        </span><br /><br />
                        <button class="more-detail-btn">
                            <a href="index.php?offer=wellness">More Details</a>
                        </button>
                    </div>                               
                </div>
                <div class="col-sm-3"><a href="#">
                    <img src="../HotelManagement/Images/m-4.jpg" alt="m-1" class="img"  width="100%" /></a>
                    <div class="col-text">
                        <p>dining</p>
                        <span>  Juk's Hotel has both a poolside dining area as 
                                well as a glass enclosed air-conditioned dining...
                        </span><br /><br />
                        <button class="more-detail-btn">
                            <a href="index.php?offer=dinner">More Details</a>
                        </button>
                    </div>                               
                </div>
            </div><!--F1 End-->
            <div class="food-selection mt-5"><!--F2-->
                <h2 class="text-center text-uppercase">restaurant & bar</h2>
                <p class="text-center mb-5" style="text-align: justify;font-size: 0.9rem;">Savor the varied cuisines of Cambodia and the world with freshly sourced ingredients on our rooftop restaurant and bar.</p>
                <div class="row">
                    <div class="col-sm-6">
                        <div id="carouselSlideFood" class="carousel slide" data-bs-ride="carousel" >
                            <div class="carousel-inner" style="border-radius: 5px;">
                                <div class="carousel-item active" data-bs-interval="3000" >
                                    <img src="../HotelManagement/Images/d-1.jpg" alt="d-1" style="border-radius:5px;" width="100%"  />
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="../HotelManagement/Images/d-2.jpg" alt="d-1" style="border-radius:5px;" width="100%"  />
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="../HotelManagement/Images/d-3.jpg" alt="d-1" style="border-radius:5px;" width="100%"  />
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="../HotelManagement/Images/d-4.jpg" alt="d-1" style="border-radius:5px;" width="100%"  />
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="../HotelManagement/Images/d-5.jpg" alt="d-1" style="border-radius:5px;" width="100%"  />
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="../HotelManagement/Images/d-6.jpg" alt="d-1" style="border-radius:5px;" width="100%"  />
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="../HotelManagement/Images/d-7.jpg" alt="d-1" style="border-radius:5px;" width="100%"  />
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="../HotelManagement/Images/d-8.jpg" alt="d-1" style="border-radius:5px;" width="100%"  />
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselSlideFood" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselSlideFood" data-bs-slide="next" >
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="food-text">
                            <h5 class="text-uppercase mb-4 fw-bold">Food Is The Ingredient That Binds Us Together</h5>
                            <hr class="Hr-line"/>
                            <span> The restaurant at Angkor Starlit Hotel consists of a spacious poolside dining area with bar 
                                as well as an elegant glass enclosed space for your dining comfort and pleasure. We 
                                also provide dining services in our guest rooms. At any of these locations you may 
                                enjoy refreshments and light dishes as well as full course meals that represent both 
                                gastronomic worlds: choose from international dishes, or a seasonally inspired Khmer menu.
                            </span>
                            <hr />
                            <span >
                                Food brings us together, sustains our bodies and souls and connects us to our culture.
                                It's the centrepiece of our lives and one of our greatest motivations at Treeline. 
                                We have four different dining options for you to choose from so whether it's morning, 
                                noon or night you’ll discover something special.
                            </span>
                        </div>
                        <button class="more-detail-btn mt-3">
                            <a href="#">Read More</a>
                        </button>
                    </div>
                </div>
            </div><!--F2 End-->
            <div class="room-selection">
                <div class="row">
                    <h2 class="text-center text-uppercase mt-5">rooms</h2>
                    <p class="text-center mb-5" style="font-size: 0.9rem;">The rooms at Treeline Urban Resort are designed and fabricated to an impeccable
                        standard. With an organic and minimalist aesthetic,  our interior design combines sustainably sourced 
                        native timber and stone features with locally handmade soft furnishings to create a place of serene, 
                        laid-back luxury.</p>
                    <div class="col-sm-6">
                        <h5 class="text-uppercase mb-4 fw-bold">comfort & quality</h5>
                            <hr class="Hr-line"/>
                        <span>The rooms at Treeline Urban Resort are designed and fabricated to an impeccable standard.
                            With an organic and minimalist aesthetic, our interior design combines sustainably sourced
                            native timber and stone features with locally handmade soft furnishings to create a place of serene,
                            laidback luxury.
                        </span> <br />
                        <button class="more-detail-btn mt-3">
                            <a href="#">Read More</a>
                        </button>
                    </div>
                    <div class="col-sm-6">
                        <div id="carouselSlideRoom" class="carousel slide" data-bs-ride="carousel" >
                            <div class="carousel-inner" style="border-radius: 5px;">
                                <div class="carousel-item active" data-bs-interval="3000" >
                                    <img src="../HotelManagement/Images/r-1.jpg" alt="r-1" style="border-radius:5px;" width="100%"  />
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="../HotelManagement/Images/r-2.jpg" alt="r-1" style="border-radius:5px;" width="100%"  />
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="../HotelManagement/Images/r-3.jpg" alt="r-1" style="border-radius:5px;" width="100%"  />
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="../HotelManagement/Images/r-4.jpg" alt="r-1" style="border-radius:5px;" width="100%"  />
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="../HotelManagement/Images/r-5.jpg" alt="r-1" style="border-radius:5px;" width="100%"  />
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselSlideRoom" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselSlideRoom" data-bs-slide="next" >
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--  Main Selection End  -->
    <!--  Button Scroll Start -->
    <button onclick="topFunction()" id="myBtn">
        <i class="fa fa-arrow-up"></i>
    </button>
    <!--  Button Scroll End -->
    