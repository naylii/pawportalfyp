@extends('layouts.app')

@section('title', 'PawPortal Rescue')

<!DOCTYPE html>

@section('content')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PawPortal</title>
    <link rel="stylesheet" href="{{ asset('css/welcomestyle.css') }}">
</head>
<body>
    <main>

        <section class="welcomeheader">
            <div class="welcomeleft">
                <div class="welcometext">
                    <h1>"Whiskers of Wonder,<br>Paws of Magic!"</h1>
                    <p>
                        Welcome to PawPortal, your go-to online platform for cat adoption and rescue services. Connect with potential adopters, make donations, report emergencies, and other resources. Join us in ensuring the welfare of cats and building a compassionate community, dedicated to their care.
                    </p>
                    <button>Adopt Now</button>
                </div>
                <div class="welcomeimage">
                    <img src="{{ asset('images/welcome/catheader.png') }}">
                </div>
            </div>
        </section>


        <section class="welcomeabout">
            <h2>What is PawPortal Rescue?</h2>
            <div class="description-box">
                <p>
                    PawPortal Rescue is an innovative online platform dedicated to connecting cats in need with loving homes and providing essential support services. It facilitates cat adoption, manages cat-related emergencies, oversees donations, and coordinates temporary hosting for cats. Through a user-friendly interface, PawPortal Rescue ensures a streamlined process for adopters, volunteers, and donors, while maintaining a high standard of care and transparency.
                </p>

                <button>Read More</button>
            </div>

        </section>

        <section class="cats">
            <img src="{{ asset('images/welcome/cat1.png') }}">
            <img src="{{ asset('images/welcome/cat2.png') }}">
            <img src="{{ asset('images/welcome/cat3.png') }}">
        </section>


        <section class="services">
            <h2>Services</h2> <p>Some services provided by our portal:</p>
            <div class="service-cards">
                <!-- Adoption Service -->
                <div class="card adoption">
                    <img src="{{ asset('images/adoption-cat.png') }}" alt="Adoption">
                    <h3>Adoption</h3>
                    <p>Learn more</p>
                </div>
                <!-- Donation Service -->
                <div class="card donation">
                    <img src="{{ asset('images/donation-cat.png') }}" alt="Donation">
                    <h3>Donation</h3>
                    <p>Learn more</p>
                </div>
                <!-- Emergency Reporting -->
                <div class="card emergency">
                    <img src="{{ asset('images/emergency-cat.png') }}" alt="Emergency Reporting">
                    <h3>Emergency Reporting</h3>
                    <p>Learn more</p>
                </div>
                <!-- Temporary Hosting -->
                <div class="card hosting">
                    <img src="{{ asset('images/hosting-cat.png') }}" alt="Temporary Hosting">
                    <h3>Temporary Hosting</h3>
                    <p>Learn more</p>
                </div>
            </div>
        </section>

    </main>
</body>
 @endsection
</html>

