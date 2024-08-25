<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech in Dynamic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tambahkan Google Fonts Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #F6F8FD;
        }

        /* Navbar Styles */
        .navbar {
            background-color: rgba(255, 255, 255, 0.5);
            /* Transparansi 50% */
            backdrop-filter: blur(10px);
            /* Efek blur pada latar belakang */
            -webkit-backdrop-filter: blur(10px);
            /* Efek blur pada latar belakang untuk Safari */

            z-index: 1000;
            /* Memastikan navbar tetap di atas elemen lain */
            padding: 10px 0;
            /* Padding pada navbar */
        }


        .sticky-top {
            position: -webkit-sticky;
            /* For Safari */
            position: sticky;
            top: 0;
        }

        .navbar-nav .nav-link {
            padding: 0 25px;
            margin: 0 20px;
            color: #000
        }

        /* Navbar Brand */
        .navbar-brand {
            display: flex;
            align-items: center;
            color: #000;
        }

        .navbar-brand img {
            margin-right: 10px;
        }

        .navbar-brand div {
            display: flex;
            flex-direction: column;
            justify-content: center;
            font-weight: 700;
            font-size: 1rem;
        }


        /* Hero Section */
        .hero-section {
            padding: 30px 0;

        }

        .hero-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 30px 0;
        }

        .hero-text {
            max-width: 50%;
        }

        .hero-text h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .hero-text p {
            margin-bottom: 30px;
            color: #444;
        }

        .hero-image img {
            width: 100%;
            border-radius: 10px;
            max-width: 100%;
        }

        /* Button Styles */
        .button-group {
            display: flex;
            gap: 20px;
        }

        .order-button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
        }

        .btn-whatsapp {
            background-color: #e0e0e0;
            color: #000;
            padding: 10px 20px;
            border-radius: 50px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
        }

        .whatsapp-icon {
            width: 24px;
            height: 24px;
            margin-right: 10px;
        }

        .btn:hover {
            transform: translateY(-2px);
            transition: transform 0.2s;
        }

        /* Search Button */
        .search-button {
            background-color: #e0e0e0;
            border-radius: 50%;
            width: 48px;
            height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: none;
        }

        .search-icon {
            width: 25px;
            height: 25px;
        }

        .signup-button {
            background-color: #e0e0e0;
            color: #000;
            border-radius: 25px;
            padding: 10px 20px;
            text-decoration: none;
            font-weight: 600;
            border: none;
        }

        /* gallery section */
        .additional-section {
            padding: 60px 0;
            background-color: #F6F8FD;
            /* Warna background yang berbeda */
            text-align: center;
        }

        .section-heading {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 30px;
        }

        .section-description {
            font-size: 1.2rem;
            margin-bottom: 50px;
            color: #555;
        }

        .service-item {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .service-item:hover {
            transform: translateY(-5px);
        }

        .service-image {
            width: 100px;
            height: 100px;
            margin-bottom: 20px;
            object-fit: cover;
            border-radius: 50%;
        }

        .service-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .service-description {
            color: #555;
        }

        /* .additional-section */
        .additional-section {
            padding: 60px 0;
            background-color: #f8f9fa;
            text-align: center;
        }

        .program-image {
            max-width: 100%;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .section-title {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 20px;
            text-align: left;
        }

        .features-list {
            list-style: none;
            padding-left: 0;
            text-align: left;
            margin-bottom: 30px;
        }

        .features-list li {
            font-size: 1.2rem;
            margin-bottom: 10px;
            position: relative;
            padding-left: 30px;
        }

        .features-list li::before {
            content: '✔';
            color: #00c853;
            position: absolute;
            left: 0;
            top: 0;
            font-size: 1.5rem;
        }

        .order-button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            display: inline-block;
        }
    </style>
</head>


<body>
    @include('layouts.navbar') <!-- Navbar Include -->

    <div class="container">
        @yield('content')
    </div>

    <!-- JavaScript and Bootstrap JS -->
</body>

</html>
