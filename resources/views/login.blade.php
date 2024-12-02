<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('style/dist/css') }}"> -->
    <link href='https://fonts.googleapis.com/css?family=Konkhmer Sleokchher' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
</head>

<body>


    <div style="transition: 1s;" data-aos="zoom-in">
        <form class="form" action="{{ route('login.process') }}" method="POST">
            @csrf
            <div class="card-title">
                <i class='fas fa-book-open' style="font-size: 19px;"></i>
                <div class="title">
                    <h2>E-LEARNING</h2>
                </div>
            </div>
            <p class="form-title">Login</p>
            <div class="input-container">
                <h5 class="label">USERNAME</h5>
                <input type="text" name="username" placeholder="Enter username" required>
                <span></span>
            </div>
            <div class="input-container">
                <h5 class="label">PASSWORD</h5>
                <input type="password" name="password" placeholder="Enter your password" required>
            </div>
            <button style="margin-top: 16px;" type="submit" class="submit">
                <p style="margin-top: -8px;">LOGIN</p>
            </button>
        </form>
    </div>

    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>