<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="public/assets/css/common.css" rel="stylesheet">
    <link href="public/assets/css/photo.css" rel="stylesheet">
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <title>Gael Caraballo</title>
</head>
<body>
<nav class="navbar navbar-light bg-light justify-content-center text-center">
    <div class="row d-flex">
        <h5 class="mb-3"><b>Gael Caraballo</b></h5>
        <div class="col text-center">
            <h3 class="mb-3"><a class="navButtons" href="index.blade.php">Portafolio</a></h3>
        </div>
        <div class="col text-center">
            <h3 class="mb-3"><a class="navButtons" href="about.blade.php">Sobre mí</a></h3>
        </div>
        <div class="col text-center">
            <h3 class="mb-3"><a href="contact.blade.php" class="navButtons">Contacto</a></h3>
        </div>
    </div>
</nav>
<div aria-hidden="true" aria-labelledby="imageModalLabel" class="modal fade" id="imageModal" tabindex="-1">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="imageModalLabel">Image Preview</h5>
                <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"></button>
            </div>
            <div class="modal-body text-center">
                <img id="previewImage" src="#" alt="Preview" class="img-fluid">
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row row-cols-1 row-cols-md-4 justify-content-center"> <!-- Center the columns -->
        <!-- Image Cards -->
        <div class="col mt-3">
            <a class="text-center" data-bs-target="#imageModal" data-bs-toggle="modal" href="#"
               onclick="showImage('public/assets/photography/IMG_0524.JPG')">
                <div class="cardHolders">
                    <img alt="First Card" class="img-fluid" loading="lazy" src="public/assets/photography/IMG_0524.JPG">
                </div>
            </a>
        </div>
        <div class="col mt-3">
            <a class="text-center" data-bs-target="#imageModal" data-bs-toggle="modal" href="#"
               onclick="showImage('public/assets/photography/IMG_1098.JPG')">
                <div class="cardHolders">
                    <img alt="First Card" class="img-fluid" loading="lazy" src="public/assets/photography/IMG_1098.JPG">
                </div>
            </a>
        </div>
        <div class="col mt-3">
            <a class="text-center" data-bs-target="#imageModal" data-bs-toggle="modal" href="#"
               onclick="showImage('public/assets/photography/IMG_5064.PNG')">
                <div class="cardHolders">
                    <img alt="First Card" class="img-fluid" loading="lazy" src="public/assets/photography/IMG_5064.PNG">
                </div>
            </a>
        </div>
        <div class="col mt-3">
            <a class="text-center" data-bs-target="#imageModal" data-bs-toggle="modal" href="#"
               onclick="showImage('public/assets/photography/IMG_5075.PNG')">
                <div class="cardHolders">
                    <img alt="First Card" class="img-fluid" loading="lazy" src="public/assets/photography/IMG_5075.PNG">
                </div>
            </a>
        </div>
        <div class="col mt-3">
            <a class="text-center" data-bs-target="#imageModal" data-bs-toggle="modal" href="#"
               onclick="showImage('public/assets/photography/IMG_5386.jpg')">
                <div class="cardHolders">
                    <img alt="First Card" class="img-fluid" loading="lazy" src="public/assets/photography/IMG_5386.jpg">
                </div>
            </a>
        </div>
        <div class="col mt-3">
            <a class="text-center" data-bs-target="#imageModal" data-bs-toggle="modal" href="#"
               onclick="showImage('public/assets/photography/IMG_5458.JPG')">
                <div class="cardHolders">
                    <img alt="First Card" class="img-fluid" loading="lazy" src="public/assets/photography/IMG_5458.JPG">
                </div>
            </a>
        </div>
        <div class="col mt-3">
            <a class="text-center" data-bs-target="#imageModal" data-bs-toggle="modal" href="#"
               onclick="showImage('public/assets/photography/IMG_5459.JPG')">
                <div class="cardHolders">
                    <img alt="First Card" class="img-fluid" loading="lazy" src="public/assets/photography/IMG_5459.JPG">
                </div>
            </a>
        </div>
        <div class="col mt-3">
            <a class="text-center" data-bs-target="#imageModal" data-bs-toggle="modal" href="#"
               onclick="showImage('public/assets/photography/IMG_5460.JPG')">
                <div class="cardHolders">
                    <img alt="First Card" class="img-fluid" loading="lazy" src="public/assets/photography/IMG_5460.JPG">
                </div>
            </a>
        </div>
    </div>
</div>
<script crossorigin="anonymous"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script crossorigin="anonymous"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function showImage(imageSrc) {
        const previewImage = document.getElementById('previewImage');
        previewImage.src = imageSrc;
    }
</script>
</body>
</html>
