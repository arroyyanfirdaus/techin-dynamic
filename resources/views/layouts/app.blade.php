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
            margin-right: 20px;
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
            padding: -20px 0;

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

        /* .main-title */
        .main-title {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .subtitle {
            font-size: 18px;
            color: #2aec82;
            /* Adjust color as needed */
            margin-bottom: 20px;
        }

        .scrolling-container {
            overflow: hidden;
            position: relative;
            width: 100%;
            padding: 20px 0;
            /* Adds spacing at the top and bottom of the container */
        }

        .scrolling-wrapper {
            display: flex;
            white-space: nowrap;
            /* margin-bottom: 10px; */
            /* Adds space between the top and bottom row */
        }

        /* Animation for top row - moves to the left */
        .top-row {
            animation: scroll-left 10s linear infinite;
        }

        /* Animation for bottom row - moves to the right */
        .bottom-row {
            animation: scroll-right 10s linear infinite;
            /* margin-top: 10px; */
            /* Alternatively, add space above the bottom row */
        }

        /* Scroll Left Animation */
        @keyframes scroll-left {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        /* Scroll Right Animation */
        @keyframes scroll-right {
            0% {
                transform: translateX(-50%);
            }

            100% {
                transform: translateX(0);
            }
        }

        .tech-card {
            flex: 0 0 auto;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            /* Center-align the content */
            width: 220px;
            height: 120px;
            margin: 0 10px;
            transition: transform 0.2s ease-in-out, border 0.2s ease-in-out;
            border: 2px solid transparent;
            /* Default border is transparent */
            display: flex;
            flex-direction: column;
            justify-content: center;
            /* Center content vertically */
            align-items: center;
            /* Center content horizontally */
            cursor: pointer;
            /* Change cursor to pointer on hover */
        }

        .scrolling-wrapper img {
            width: 40px;
            height: 40px;
            margin-bottom: 10px;
        }

        .scrolling-wrapper h5 {
            font-size: 16px;
            margin: 0;
            /* No extra margin at the top */
            color: #333;
            /* Darker color for better contrast */
            font-weight: 600;
            /* Bold font for the title */
        }

        .scrolling-wrapper p {
            font-size: 14px;
            color: #777;
            margin-top: 5px;
            margin-bottom: 0;
            /* No extra margin at the bottom */
        }

        .tech-card:hover {
            animation-play-state: paused;
            /* Pause animation on hover */
        }

        /* Ensures the animation continues running when not hovered */
        .top-row:hover,
        .bottom-row:hover {
            animation-play-state: paused;
        }

        /* Stop animation and add blue border when hovered */
        .tech-card:hover {
            animation-play-state: paused;
            /* Pause animation on hover */
            border: 2px solid #007BFF;
            /* Blue border on hover */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            /* Slightly enhance the shadow for better focus */
        }

        .footer {
            background-color: #f8f9fa;
            /* Light gray background */
            padding: 80px 0;
            color: #333;
            /* Dark text color */
        }

        .footer h4 {
            margin-bottom: 20px;
            color: #007BFF;
            /* Blue heading color */
        }

        .footer p {
            margin-bottom: 10px;
            color: #555;
            /* Slightly lighter text for paragraph */
        }

        .footer .footer-links ul {
            list-style: none;
            padding: 0;
        }

        .footer .footer-links ul li {
            margin-bottom: 10px;
        }

        .footer .footer-links ul li a {
            color: #007BFF;
            /* Blue link color */
            text-decoration: none;
        }

        .footer .footer-links ul li a:hover {
            text-decoration: underline;
        }

        .footer .footer-contact p {
            margin-bottom: 10px;
        }

        .footer .footer-contact i {
            margin-right: 10px;
            color: #007BFF;
            /* Blue icon color */
        }

        .footer .footer-about p {
            max-width: 300px;
            color: #555;
        }


        .card {
            border: none;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card-title {
            font-size: 1rem;
            font-weight: bold;
        }

        .card-text {
            font-size: 0.9rem;

        }

        .badge {
            font-size: 0.8rem;
        }

        .text-center.mb-5 {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 10px;
        }
    </style>
</head>


<body>
    @include('layouts.navbar') <!-- Navbar Include -->

    <div class="container-fluid">
        @yield('content')
    </div>

    <!-- JavaScript and Bootstrap JS -->
</body>

</html>
