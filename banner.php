<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Image Slider</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
    /* Custom styles to adjust image height */
    .carousel-item img {
        height: 300px;
        object-fit: cover;
        /* This ensures the image covers the entire slide */
    }
    </style>
</head>

<body>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="2000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img/banner1.jpg" class="d-block w-100" alt="First slide">
            </div>
            <div class="carousel-item">
                <img src="./img/banner2.jpg" class="d-block w-100" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img src="./img/banner3.jpg" class="d-block w-100" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img src="./img/banner4.jpg" class="d-block w-100" alt="Fourth slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>