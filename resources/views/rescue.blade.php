@extends('layouts.app')

@section('title', 'Emergency Rescue')

<!DOCTYPE html>
@section('content')
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Emergency Rescue</title>
  <link rel="stylesheet" href="{{ asset('css/rescuestyle.css') }}">
</head>
<body>
  <header>
    <h1>Cat Emergency? <br> We’ll be the cat’s meow of rescue!</h1>
  </header>

  <section class="tips">
    <h2>Here are some tips if you find a kitten!</h2>
    <div class="tips-list">
      <div class="tip">
        <p><strong>1.</strong> Assess the situation: See if the mother is nearby. If not, watch from a distance to check if she returns. Do not disturb kittens for 24 hours after birth.</p>
      </div>
      <div class="tip">
        <p><strong>2.</strong> Provide shelter: If the kitten is alone, place it in a box with soft blankets in a warm, quiet spot. Do not over-handle the kitten.</p>
      </div>
      <div class="tip">
        <p><strong>3.</strong> Keep them warm: Kittens cannot regulate body temperature. Place a heating pad (on low) under a blanket, but leave room for the kitten to move away if it’s too warm.</p>
      </div>
      <div class="tip">
        <p><strong>4.</strong> Food and water (if needed): Only give kittens food and water suitable for their age. Kittens under four weeks old need special kitten formula.</p>
      </div>
      <div class="tip">
        <p><strong>5.</strong> Contact a rescue organization: If the kitten is sick, injured, or the mother does not return, call a rescue organization for assistance.</p>
      </div>
    </div>
  </section>

  <section class="emergency-form">
    <div class="form-container">
      <h2>Emergency Report Form</h2>
      <form action="#" method="POST">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Your Name" required>

        <label for="phone">Phone Number</label>
        <input type="tel" id="phone" name="phone" placeholder="+60" required>

        <label for="time">Time</label>
        <div class="time-inputs">
          <input type="date" id="date" name="date" required>
          <input type="time" id="time" name="time" required>
        </div>

        <label for="message">Details of the report</label>
        <textarea id="message" name="message" rows="4" placeholder="Describe the emergency..." required></textarea>

        <button type="submit">Send Message</button>
      </form>
    </div>
    <div class="contact-info">
      <h2>Our Helpline</h2>
      <p><strong>Tel:</strong> +60452615261</p>
      <p><strong>Email:</strong> info@pawportal.com</p>
      <p><strong>Address:</strong><br>
        PawPortal HQ,<br>
        International Islamic University Malaysia,<br>
        Jln Gombak, 53100 Kuala Lumpur,<br>
        Selangor.
      </p>
    </div>
  </section>
</body>
@endsection
</html>
