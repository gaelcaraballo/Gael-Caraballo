@extends('nav.nav')
@section('content')
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
                   onclick="showImage('public/assets/design/balenyaStFeliu.png')">
                    <div class="cardHolders">
                        <img alt="First Card" class="img-fluid" loading="lazy"
                             src="{{route('assets/design/balenyaStFeliu.png')}}">
                    </div>
                </a>
            </div>
            <div class="col mt-3">
                <a class="text-center" data-bs-target="#imageModal" data-bs-toggle="modal" href="#"
                   onclick="showImage('public/assets/design/centellesBalenya.png')">
                    <div class="cardHolders">
                        <img alt="First Card" class="img-fluid" loading="lazy"
                             src="{{route('assets/design/centellesBalenya.png')}}">
                    </div>
                </a>
            </div>
            <div class="col mt-3">
                <a class="text-center" data-bs-target="#imageModal" data-bs-toggle="modal" href="#"
                   onclick="showImage('public/assets/design/Coro.png')">
                    <div class="cardHolders">
                        <img alt="First Card" class="img-fluid" loading="lazy" src="public/assets/design/Coro.png">
                    </div>
                </a>
            </div>
            <div class="col mt-3">
                <a class="text-center" data-bs-target="#imageModal" data-bs-toggle="modal" href="#"
                   onclick="showImage('public/assets/design/DavidMaya.png')">
                    <div class="cardHolders">
                        <img alt="First Card" class="img-fluid" loading="lazy" src="public/assets/design/DavidMaya.png">
                    </div>
                </a>
            </div>
            <div class="col mt-3">
                <a class="text-center" data-bs-target="#imageModal" data-bs-toggle="modal" href="#"
                   onclick="showImage('public/assets/design/Izqui.png')">
                    <div class="cardHolders">
                        <img alt="First Card" class="img-fluid" loading="lazy" src="public/assets/design/Izqui.png">
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
@endsection
