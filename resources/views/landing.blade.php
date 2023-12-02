<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Medical Landing Page</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <style>

        body {
            background-color: #111827; /* Light gray background */
            font-family: 'Figtree', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .header {
            background-color: #1F2937; /* White header background */
            border-bottom: 1px solid #364050; /* Border color */
            color: #E1D9D1; /* Dark text color */
            padding: 1rem;
            text-align: center;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Optional shadow */
        }

        .logo {
            width: 60px;
            height: 60px;
            background-color: #E1D9D1; /* Blue background for the logo */
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding-left: 20px"
        }

        .logo img {
            width: 60%;
            height: auto;
        }

        .content {
            text-align: center;
            padding: 2rem;
            color: #E1D9D1;
        }

        .cta-buttons {
            display: flex;
            justify-content: center;
            margin-top: 2rem;
        }

        .cta-button {
            padding: 1rem 2rem;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
            font-size: 1.2rem;
            transition: background-color 0.3s ease;
            margin: 0 1rem;
            cursor: pointer;
        }

        .cta-button {
            background-color: #27ae60; /* Green button color */
            color: #E1D9D1; /* White text color */
        }

        .cta-button:hover {
            background-color: #218c53; /* Darker green on hover */
        }

    </style>
</head>
<body class="antialiased">
    <div class="header">
        <div class="logo">
            <a>
                <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
            </a>
        </div>
        <a href="{{ route('login') }}" class="text-lg font-semibold hover:text-gray-700" style="padding-right: 20px">Log in</a>
        </div>
    </div>

    <div class="content">
        <h2>Welcome to our Medical Platform</h2>
        <p>Providing high-quality medical services to improve your health.</p>

        <div class="cta-buttons">
            <a href="{{ route('login') }}" class="cta-button">Get Started</a>
        </div>
    </div>
</body>
</html>