<?php
require 'function.php';
$singlecloud1 = query("SELECT room.id, room_type.type_name, room_type.price 
                       FROM room
                       JOIN room_type ON room.room_type_id = room_type.id
                       WHERE room.id = 1");

$singlecloud2 = query("SELECT room.id, room_type.type_name, room_type.price 
                       FROM room
                       JOIN room_type ON room.room_type_id = room_type.id
                       WHERE room_type.type_name = 'Single Cloud' AND room.id = 2");

$singleground1 = query("SELECT room.id, room_type.type_name, room_type.price 
                        FROM room
                        JOIN room_type ON room.room_type_id = room_type.id
                        WHERE room_type.type_name = 'Single Ground' AND room.id = 11");

$doublecloud1 = query("SELECT room.id, room_type.type_name, room_type.price 
                       FROM room
                       JOIN room_type ON room.room_type_id = room_type.id
                       WHERE room_type.type_name = 'Double Cloud' AND room.id = 21");

$doubleground1 = query("SELECT room.id, room_type.type_name, room_type.price 
                        FROM room
                        JOIN room_type ON room.room_type_id = room_type.id
                        WHERE room_type.type_name = 'Double Ground' AND room.id = 31");

$doubleground2 = query("SELECT room.id, room_type.type_name, room_type.price 
                        FROM room
                        JOIN room_type ON room.room_type_id = room_type.id
                        WHERE room_type.type_name = 'Double Ground' AND room.id = 32");
?>

<html lang="en"><head>
    <meta charset="utf-8">
    <title>CozySnooze</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Header Start -->
        <div class="container-fluid bg-dark px-0">
            <div class="row gx-0">
                <div class="col-lg-3 bg-dark d-none d-lg-block">
                    <a href="index.php" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                        <h1 class="m-0 text-primary">CozySnooze</h1>
                    </a>
                </div>
                <div class="col-lg-4"></div>
                <div class="col-lg-3">
                    <!-- nav -->
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                        <a href="index.php" class="navbar-brand d-block d-lg-none">
                            <h1 class="m-0 text-primary">CozySnooze</h1>
                        </a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0">
                                <a href="index.php" class="nav-item nav-link active">Home</a>
                                <a href="about.php" class="nav-item nav-link">About</a>
                                <a href="facilities.php" class="nav-item nav-link">Facilities</a>
                                <a href="room.php" class="nav-item nav-link">Rooms</a>
                                <div class="nav-item dropdown">
                                    <!-- dropdown pages -->
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                                    <div class="dropdown-menu rounded-0 m-0">
                                        <a href="booking.php" class="dropdown-item">Booking</a>
                                        <a href="team.php" class="dropdown-item">Our Team</a>
                                        <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                                    </div>
                                </div>
                                <a href="contact.php" class="nav-item nav-link">Contact</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Header End -->

        <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h1 class="display-3 text-white mb-4 mt-4 animated slideInDown">Cozy Cubes, Captivating Snooze</h1>
                                <button href="" class="btn btn-primary py-md-3 px-md-5 animated slideInRight" onclick="window.location.href='./booking.php'">Book A Room</button>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item active">
                        <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h1 class="display-3 text-white mb-4 mt-4 animated slideInDown">Cozy Cubes, Captivating Snooze</h1>
                                <button href="" class="btn btn-primary py-md-3 px-md-5 animated slideInRight" onclick="window.location.href='./booking.php'">Book A Room</button>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev" fdprocessedid="0svurh">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next" fdprocessedid="pzjjo5">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->

        
        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <h6 class="section-title text-start text-primary text-uppercase">About Us</h6>
                        <h1 class="mb-4">Welcome to <span class="text-primary">CozySnooze</span></h1>
                        <p class="mb-4">Welcome to CozySnooze, where we offer a cozy and comfortable experience in our capsule hotel. 
                            Our hotel is designed with your comfort in mind, providing a soothing and relaxing environment for your stay.
                            Step into our cozy capsules and find a haven of comfort. Each space is thoughtfully designed with soft hues, plush bedding, 
                            and cozy amenities, providing you with a peaceful retreat during your visit.</p>
                        <div class="row g-3 pb-4">
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s" style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-hotel fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">40</h2>
                                        <p class="mb-0">Rooms</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s" style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-users-cog fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">20</h2>
                                        <p class="mb-0">Staffs</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s" style="visibility: hidden; animation-delay: 0.5s; animation-name: none;">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-users fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">90</h2>
                                        <p class="mb-0">Clients</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-primary py-3 px-5 mt-2" href="#" onclick="alert('Maaf, fitur belum tersedia')">Explore More</a>
                    </div>
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="img/about-1.jpg" style="margin-top: 25%; visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="img/about-2.jpg" style="visibility: visible; animation-delay: 0.3s; animation-name: zoomIn;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="img/about-3.jpg" style="visibility: hidden; animation-delay: 0.5s; animation-name: none;">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="img/about-4.jpg" style="visibility: hidden; animation-delay: 0.7s; animation-name: none;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Room Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s" style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
                    <h6 class="section-title text-center text-primary text-uppercase">Our Rooms</h6>
                    <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Rooms</span></h1>
                </div>
                <div class="row g-4">
                    <!-- Single Cloud Room 1 -->
                    <?php if (!empty($singlecloud1)): ?>
                        <?php foreach ($singlecloud1 as $room): ?>
                            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="room-item shadow rounded overflow-hidden">
                                    <div class="position-relative">
                                        <img class="img-fluid mx-auto d-flex" src="img/room-1.jpg" alt="">
                                        <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">
                                            Rp <?= number_format($room["price"], 0, ',', '.'); ?>/Night
                                        </small>
                                    </div>
                                    <div class="p-4 mt-2">
                                        <div class="d-flex justify-content-between mb-3">
                                            <h5 class="mb-0"><?= $room["type_name"]; ?></h5>
                                            <h6 class="mb-0">Room no.<?= $room["id"]; ?></h6>
                                        </div>
                                        <div class="d-flex mb-3">
                                            <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>1 Single Bed</small>
                                            <small class="border-end me-3 pe-3"><i class="fa fa-shower text-primary me-2"></i>Shared Shower</small>
                                            <small><i class="fa fa-user text-primary me-2"></i>1 Adult</small>
                                        </div>
                                        <p class="text-body mb-3">Fly high! A good sleep accompanied with high-tech features on the upper side of the pod is definitely the dream.</p>
                                        <div class="d-flex justify-content-between">
                                            <a class="btn btn-sm btn-primary rounded py-2 px-4" href="">View Detail</a>
                                            <a class="btn btn-sm btn-dark rounded py-2 px-4" href="booking.php">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    <!-- Double Cloud Room 1 -->
                    <?php if (!empty($doublecloud1)): ?>
                        <?php foreach ($doublecloud1 as $room): ?>
                            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s" style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">
                                <div class="room-item shadow rounded overflow-hidden">
                                    <div class="position-relative">
                                        <img class="img-fluid mx-auto d-flex" src="img/room-2.jpg" alt="">
                                        <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">
                                            Rp <?= number_format($room["price"], 0, ',', '.'); ?>/Night
                                        </small>
                                    </div>
                                    <div class="p-4 mt-2">
                                        <div class="d-flex justify-content-between mb-3">
                                            <h5 class="mb-0"><?= $room["type_name"]; ?></h5>
                                            <h6 class="mb-0">Room no.<?= $room["id"]; ?></h6>
                                        </div>
                                        <div class="d-flex mb-3">
                                            <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>1 Single Bed</small>
                                            <small class="border-end me-3 pe-3"><i class="fa fa-shower text-primary me-2"></i>Shared Shower</small>
                                            <small><i class="fa fa-user text-primary me-2"></i>2 Adults, 2 children</small>
                                        </div>
                                        <p class="text-body mb-3">Ready for a new experience? Climb up to your spacious room and share the excitement with your loved ones.</p>
                                        <div class="d-flex justify-content-between">
                                            <a class="btn btn-sm btn-primary rounded py-2 px-4" href="">View Detail</a>
                                            <a class="btn btn-sm btn-dark rounded py-2 px-4" href="booking.php">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    <!-- Single Ground Room 1 -->
                    <?php if (!empty($singleground1)): ?>
                        <?php foreach ($singleground1 as $room): ?>
                            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.6s" style="visibility: hidden; animation-delay: 0.6s; animation-name: none;">
                                <div class="room-item shadow rounded overflow-hidden">
                                    <div class="position-relative">
                                        <img class="img-fluid mx-auto d-flex" src="img/room-3.jpg" alt="">
                                        <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">
                                            Rp <?= number_format($room["price"], 0, ',', '.'); ?>/Night
                                        </small>
                                    </div>
                                    <div class="p-4 mt-2">
                                        <div class="d-flex justify-content-between mb-3">
                                            <h5 class="mb-0"><?= $room["type_name"]; ?></h5>
                                            <h6 class="mb-0">Room no.<?= $room["id"]; ?></h6>
                                        </div>
                                        <div class="d-flex mb-3">
                                            <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>1 King Bed</small>
                                            <small class="border-end me-3 pe-3"><i class="fa fa-shower text-primary me-2"></i>Shared Shower</small>
                                            <small><i class="fa fa-user text-primary me-2"></i>1 Adult</small>
                                        </div>
                                        <p class="text-body mb-3">Hoping for a much-needed break? This one is an excellent option to make your me time comfy and grounded.</p>
                                        <div class="d-flex justify-content-between">
                                            <a class="btn btn-sm btn-primary rounded py-2 px-4" href="">View Detail</a>
                                            <a class="btn btn-sm btn-dark rounded py-2 px-4" href="booking.php">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    <!-- Double Ground Room 1 -->
                    <?php if (!empty($doubleground1)): ?>
                        <?php foreach ($doubleground1 as $room): ?>
                            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.6s" style="visibility: hidden; animation-delay: 0.6s; animation-name: none;">
                                <div class="room-item shadow rounded overflow-hidden">
                                    <div class="position-relative">
                                        <img class="img-fluid mx-auto d-flex" src="img/room-4.jpg" alt="">
                                        <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">
                                            Rp <?= number_format($room["price"], 0, ',', '.'); ?>/Night
                                        </small>
                                    </div>
                                    <div class="p-4 mt-2">
                                        <div class="d-flex justify-content-between mb-3">
                                            <h5 class="mb-0"><?= $room["type_name"]; ?></h5>
                                            <h6 class="mb-0">Room no.<?= $room["id"]; ?></h6>
                                        </div>
                                        <div class="d-flex mb-3">
                                            <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>1 King Bed</small>
                                            <small class="border-end me-3 pe-3"><i class="fa fa-shower text-primary me-2"></i>Shared Shower</small>
                                            <small><i class="fa fa-user text-primary me-2"></i>2 Adults, 2 children</small>
                                        </div>
                                        <p class="text-body mb-3">Let’s enter a whole new perspective on comfort! Get extra cozy by taking a rest in this homey and spacious “cave” with the one you love.</p>
                                        <div class="d-flex justify-content-between">
                                            <a class="btn btn-sm btn-primary rounded py-2 px-4" href="">View Detail</a>
                                            <a class="btn btn-sm btn-dark rounded py-2 px-4" href="booking.php">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <!-- Room End -->

        <!-- Facilities Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s" style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
                    <h6 class="section-title text-center text-primary text-uppercase">Our Facilities</h6>
                    <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Facilities</span></h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="visibility: hidden; animation-delay: 0.1s; animation-name: none;" onclick="alert('Maaf, fitur belum tersedia')">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-couch fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Communal Space</h5>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s" style="visibility: hidden; animation-delay: 0.2s; animation-name: none;" onclick="alert('Maaf, fitur belum tersedia')">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-mosque fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Mushola</h5>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s" style="visibility: hidden; animation-delay: 0.3s; animation-name: none;" onclick="alert('Maaf, fitur belum tersedia')">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-toilet fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Shared Toilet</h5>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s" style="visibility: hidden; animation-delay: 0.4s; animation-name: none;" onclick="alert('Maaf, fitur belum tersedia')">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-cocktail fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Mini Bar</h5>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s" style="visibility: hidden; animation-delay: 0.5s; animation-name: none;" onclick="alert('Maaf, fitur belum tersedia')">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-shower fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Shared Bathroom</h5>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.6s" style="visibility: hidden; animation-delay: 0.6s; animation-name: none;" onclick="alert('Maaf, fitur belum tersedia')">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-utensils fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Breakfast</h5>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.6s" style="visibility: hidden; animation-delay: 0.6s; animation-name: none;" onclick="alert('Maaf, fitur belum tersedia')">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-parking fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Parking Space</h5>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.6s" style="visibility: hidden; animation-delay: 0.6s; animation-name: none;" onclick="alert('Maaf, fitur belum tersedia')">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-bottle-water fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Water Refill</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facilities End -->


        <!-- Testimonial Start -->
        <div class="container-xxl testimonial mt-5 py-5 bg-dark wow zoomIn" data-wow-delay="0.1s" style="margin-bottom: 90px;">
            <div class="container">
                <div class="owl-carousel testimonial-carousel py-5">
                    <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                        <p>CozySnooze was a delightful retreat! I really love this place. Serene ambiance, comfy capsules, and friendly staff. Highly recommended!</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-1.jpg" style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Andrew Smith</h6>
                                <small>Singer</small>
                            </div>
                        </div>
                        <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                    </div>
                    <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                        <p>CozySnooze exceeded expectations! Soundproof capsules, quiet co-working spaces, and a warm atmosphere. Can't wait to come back!</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-2.jpg" style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Harry Hampton</h6>
                                <small>Guitarist</small>
                            </div>
                        </div>
                        <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                    </div>
                    <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                        <p>CozySnooze wowed me with its creativity! Stylish capsules, inspiring communal areas, and attentive staff. Unforgettable stay!</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-3.jpg" style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Yves</h6>
                                <small>Fashion Designer</small>
                            </div>
                        </div>
                        <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s" style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
                    <h6 class="section-title text-center text-primary text-uppercase">Our Team</h6>
                    <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Staffs</span></h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/team-1.jpg" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Ryan Thomas</h5>
                                <small>Founder</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s" style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/team-2.jpg" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Patricia Bell</h5>
                                <small>Co-Founder</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s" style="visibility: hidden; animation-delay: 0.5s; animation-name: none;">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/team-3.jpg" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Keith Tanaka</h5>
                                <small>General Manager</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s" style="visibility: hidden; animation-delay: 0.7s; animation-name: none;">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/team-4.jpg" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Hannah Kang</h5>
                                <small>Social Media Specialist</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Newsletter Start -->
        <div class="container newsletter mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="row justify-content-center">
                <div class="col-lg-10 border rounded p-1">
                    <div class="border rounded text-center p-1">
                        <div class="bg-white rounded text-center p-5">
                            <h4 class="mb-4">Subscribe Our <span class="text-primary text-uppercase">Newsletter</span></h4>
                            <div class="position-relative mx-auto" style="max-width: 400px;">
                                <input class="form-control w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your email">
                                <button type="button" class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2" href="#" onclick="alert('Maaf, fitur belum tersedia')">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter Start -->
        

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s" style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
            <div class="container pb-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-4">
                        <div class="bg-primary rounded p-4">
                            <a href="index.php"><h1 class="text-white mb-3 text-center">CozySnooze</h1></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h6 class="section-title text-start text-primary text-uppercase mb-4">Contact</h6>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Sumberarum, Moyudan, Sleman, Indonesia</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 345 67890</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>cozysnoozeinfo@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="row gy-5 g-4">
                            <div class="col-md-6">
                                <h6 class="section-title text-start text-primary text-uppercase mb-4">Company</h6>
                                <a class="btn btn-link" href="about.php">About Us</a>
                                <a class="btn btn-link" href="contact.php">Contact Us</a>
                                <a class="btn btn-link" href="#" onclick="alert('Maaf, fitur belum tersedia')">Privacy Policy</a>
                                <a class="btn btn-link" href="#" onclick="alert('Maaf, fitur belum tersedia')">Terms &amp; Condition</a>
                                <a class="btn btn-link" href="#" onclick="alert('Maaf, fitur belum tersedia')">Support</a>
                            </div>
                            <div class="col-md-6">
                                <h6 class="section-title text-start text-primary text-uppercase mb-4">Facilities</h6>
                                <a class="btn btn-link" href="facilities.php">Communal Space</a>
                                <a class="btn btn-link" href="facilities.php">Mushola</a>
                                <a class="btn btn-link" href="facilities.php">Shared Toilet</a>
                                <a class="btn btn-link" href="facilities.php">Mini Bar</a>
                                <a class="btn btn-link" href="facilities.php">Shared Bathroom</a>
                                <a class="btn btn-link" href="facilities.php">Breakfast</a>
                                <a class="btn btn-link" href="facilities.php">Parking Space</a>
                                <a class="btn btn-link" href="facilities.php">Water Refill</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            © <a class="border-bottom" href="#">CozySnooze</a>, All Right Reserved. 
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>


<span id="PING_CONTENT_AUTOPLAY_DETECTION" style="display: none;"></span><span id="PING_IFRAME_FORM_DETECTION" style="display: none;"></span></body></html>