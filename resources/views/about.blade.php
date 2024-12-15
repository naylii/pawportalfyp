@extends('layouts.app')

@section('title', 'About Us')

<!DOCTYPE html>
<html lang="en">

@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - PawPortal</title>
    <link rel="stylesheet" href="{{ asset('css/aboutstyle.css') }}">
</head>
<body>


    <main class="about-us">
        <section class="what-we-do">
            <h1>What We Do</h1>
            <p>
                PawPortal Rescue is all about creating happy tails and forever families for abandoned and neglected cats.
                The best way to help feline friends thrive is a loving home, and that's where you come in! Whether you're looking to adopt a cuddly companion, donate to our cause, or volunteer your time and talents, PawPortal Rescue is here to connect you with the perfect way to make a difference.
            </p>
            <img src="{{ asset('images/cat-about.png') }}" alt="Illustration of a cat">
        </section>

        <section class="faq">
            <h2>Frequently Asked Questions</h2>
            <div class="faq-categories">
                <div class="category">
                    <h3>Adoption</h3>
                    <ul>
                        <li>How do I adopt a cat?</li>
                        <li>What are the adoption requirements?</li>
                        <li>Can I meet the cats before adopting?</li>
                        <li>What happens after I adopt a cat?</li>
                        <li>Do you adopt cats with special needs?</li>
                    </ul>
                </div>
                <div class="category">
                    <h3>Donation</h3>
                    <ul>
                        <li>How can I donate to PawPortal Rescue?</li>
                        <li>What does my donation support?</li>
                        <li>Can I donate items other than money?</li>
                    </ul>
                </div>
                <div class="category">
                    <h3>Volunteering</h3>
                    <ul>
                        <li>How can I volunteer with PawPortal Rescue?</li>
                        <li>What kind of volunteer opportunities do you have?</li>
                        <li>Do I need any experience to volunteer?</li>
                        <li>How much time commitment is required to volunteer?</li>
                    </ul>
                </div>
                <div class="category">
                    <h3>General</h3>
                    <ul>
                        <li>What is PawPortal Rescue's mission?</li>
                        <li>How can I contact PawPortal Rescue?</li>
                        <li>Where can I find more information about PawPortal Rescue?</li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
</body>

@endsection
</html>
