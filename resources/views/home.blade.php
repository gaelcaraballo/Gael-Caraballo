@extends('nav.nav')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <!-- Image Cards -->
            <div class="col-md-5 col-sm-12 mt-5">
                <a href="#" class="text-center">
                    <div class="cardHolders">
                        <a href="design.blade.php">
                            <img src="{{asset('firstCardPortada.png')}}" alt="First Card" class="img-fluid">
                        </a>
                    </div>
                </a>
            </div>
            <div class="col-md-5 col-sm-12 mt-5">
                <a href="#" class="text-center">
                    <div class="cardHolders">
                        <a href="photography.blade.php">
                            <img src="public/assets/secondCardPortada.png" alt="Second Card" class="img-fluid">
                        </a>
                    </div>
                </a>
            </div>
        </div>
    </div>
    </body>
    <script crossorigin="anonymous"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection
