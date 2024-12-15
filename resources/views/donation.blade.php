@extends('layouts.app')

@section('title', 'Donation')

<!DOCTYPE html>
@section('content')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Page</title>
    <link rel="stylesheet" href="{{ asset('css/donationstyle.css') }}">
</head>
<body>
    <header>
        <h1>Give a Little, Save a Life: Donate Today!</h1>
        <p>
            Let’s donate today! Your generous contributions help us rescue, care for, and find loving homes for cats in need. Every donation makes a difference in their lives. Thank you for your support!
        </p>
        <div>
            <img src="/path/to/cat-donation-illustration.png" alt="Donation Illustration">
        </div>
    </header>

    <section>
        <h2>PawPortal Donation Form</h2>
        <form action="/process-donation" method="POST">
            @csrf <!-- Security Token -->
            <div>
                <label for="first_name">First Name</label>
                <input type="text" id="first_name" name="first_name" required>
            </div>
            <div>
                <label for="last_name">Last Name</label>
                <input type="text" id="last_name" name="last_name" required>
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div>
                <label for="message">Send a message to the PawPortal Rescue Team:</label>
                <textarea id="message" name="message" rows="4"></textarea>
            </div>
            <h3>Your Payment Details</h3>
            <div>
                <label for="card_name">Card Holder Name</label>
                <input type="text" id="card_name" name="card_name" required>
            </div>
            <div>
                <label for="card_number">Card Number</label>
                <input type="text" id="card_number" name="card_number" required>
            </div>
            <div>
                <label for="expiry_date">Expiry</label>
                <input type="text" id="expiry_date" name="expiry_date" placeholder="MM/YY" required>
            </div>
            <div>
                <label for="security_code">Security Number</label>
                <input type="text" id="security_code" name="security_code" placeholder="CCV" required>
            </div>
            <div>
                <label for="amount">Donation Amount</label>
                <input type="number" id="amount" name="amount" placeholder="RM" required>
            </div>
            <button type="submit">Submit and Process Donation</button>
        </form>
    </section>
</body>
@endsection
</html>
