<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- bootstrap css  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body class=" bg-body-secondary">

    <div class="container-lg mt-5">
        <div class="row">
            <div class="col-6 offset-3 bg-body-tertiary pt-4 ps-5 pe-5 pb-5 rounded">
                <div class="login-form">
                    <div class="row mb-4">
                        <div class="col-3 offset-4 d-flex align-items-center justify-content-center">
                            <img src="{{ asset('image/uni-logo.png') }}" class="w-100 d-block">
                            <h5>ONTARIO <br> <span>University</span></h5>
                        </div>
                    </div>
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

</body>

<!-- bootstrap js  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</html>
