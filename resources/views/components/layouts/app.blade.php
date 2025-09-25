<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Laravel 10 Livewire CRUD Application Tutorial - AllPHPTricks.com' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Retro Theme Styles -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">

    <style>
        body {
            /* 1. Set the background to a retro yellow and use a pixelated font */
            background-color: #fefce8; /* A creamy, retro yellow */
            font-family: 'Press Start 2P', cursive;
            color: #43382c; /* A dark brown for better readability */
        }

        .container {
            /* 2. Make the main content area look like a distinct, retro box */
            background-color: #ffffff;
            border: 4px solid #000000;
            box-shadow: 8px 8px 0px #000000; /* A hard, pixel-style shadow */
            margin-top: 2rem;
            margin-bottom: 2rem;
            padding: 2rem;
        }

        h3 {
            text-align: center;
            margin-bottom: 2rem !important;
            color: #000000;
        }

        /* 3. Style buttons and forms to match the theme */
        .btn {
            border: 2px solid #000000;
            box-shadow: 4px 4px 0px #000000;
            transition: all 0.1s ease-in-out;
            border-radius: 0; /* Sharp corners */
        }

        .btn:hover {
            box-shadow: 2px 2px 0px #000000;
            transform: translate(2px, 2px);
        }

        .form-control {
            border: 2px solid #000000;
            border-radius: 0; /* Sharp corners for inputs */
        }

        .form-control:focus {
            border-color: #000000;
            box-shadow: 0 0 0 0.25rem rgba(0, 0, 0, 0.15);
        }
    </style>
</head>
<body>
<div class="container">
    <h3 class="mt-3">Laravel 10 Livewire CRUD Demo</h3>

    {{ $slot }}

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
