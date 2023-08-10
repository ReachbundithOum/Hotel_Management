
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angkor Starlit Hotel</title>
    <link rel="stylesheet" href="../HotelManagement/style/style.css" />
    <link rel="icon" href="../HotelManagement/images/Angkor-Starlit.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/df974fea5b.js" crossorigin="anonymous"></script>
</head>
<body> 
    <?php
        include_once 'pages/header.php';
    ?>
    <?php
        if(isset($_GET['pg'])){
            include 'pages/'. $_GET['pg'].'.php';
        } else if(isset($_GET['room'])){
            include 'pages/rooms/'. $_GET['room'].'.php';
        } else if(isset($_GET['offer'])){
            include 'pages/offers/'. $_GET['offer'].'.php';
        } else {
            include 'pages/home.php';
        }
    ?>
    <?php
        include_once 'pages/footer.php';
    ?>



        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery-3.0.0.min.js"></script>
        <script src="js/plugin.js"></script>
        <!-- sidebar -->
        <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="js/custom.js"></script>
        <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
        <script src="../HotelManagement/Javascript/index.js"></script>
</body>
</html>