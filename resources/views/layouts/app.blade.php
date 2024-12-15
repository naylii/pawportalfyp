<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Include CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- Standardized Navbar -->
    <nav class="navbar">
        <ul>
            <li class="logo">PawPortal</li>
            <div class="menu">
                <li><a href="/" class="{{ Request::is('/') ? 'active' : '' }}">Home</a></li>
                <li><a href="/about" class="{{ Request::is('about') ? 'active' : '' }}">About Us</a></li>
                <li><a href="/adoption" class="{{ Request::is('adoption') ? 'active' : '' }}">Adoption</a></li>
                <li><a href="/donation" class="{{ Request::is('donation') ? 'active' : '' }}">Donation</a></li>
                <li><a href="/hosting" class="{{ Request::is('hosting') ? 'active' : '' }}">Hosting</a></li>
                <li><a href="/rescue" class="{{ Request::is('rescue') ? 'active' : '' }}">Rescue</a></li>
                <li><a href="/login" class="box {{ Request::is('login') ? 'active' : '' }}">Log In</a></li>
                <li><a href="/signup" class="box {{ Request::is('signup') ? 'active' : '' }}">Sign Up</a></li>
            </div>
        </ul>
    </nav>

    <!-- Main Content Section -->
    <div class="content">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
        <div class="contact-info">
            <h3>Contact us</h3>
            <p>Email: <a href="mailto:info@pawportal.com">info@pawportal.com</a></p>
            <p>Phone: <a href="tel:+9050870001">905-087-0001</a></p>
            <p>Address: 1234 Main St<br>Moonstone City, Selangor, Malaysia.</p>
        </div>
        <div class="subscribe-section">
            <form class="subscribe-form">
                <input type="email" placeholder="Email" required>
                <button type="submit">Subscribe to update</button>
            </form>
        </div>
        </div>
        <div class="footer-bottom">
            <p>© 2024 PawPortal. All Rights Reserved. <a href="#">Privacy Policy</a></p>
        <div class="social-icons">
            <a href="#" aria-label="Facebook"><i class="icon-facebook"></i></a>
            <a href="#" aria-label="Twitter"><i class="icon-twitter"></i></a>
            <a href="#" aria-label="LinkedIn"><i class="icon-linkedin"></i></a>
        </div>
        </div>

    </footer>
</body>
</html>
