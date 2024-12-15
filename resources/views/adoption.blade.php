@extends('layouts.app')

@section('title', 'Adoption')

<!DOCTYPE html>
@section('content')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Page</title>
    <link rel="stylesheet" href="{{ asset('css/adoptionstyle.css') }}">
</head>

<body>
  <div class="container">
    <header>
      <h1>Find Your Purrfect Match</h1>
    </header>
    <main>
      <aside class="filter">
        <h2>Filter</h2>
        <form>
          <div class="filter-group">
            <label for="gender">Gender:</label>
            <select id="gender">
              <option value="any">Any</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </div>
          <div class="filter-group">
            <label for="age">Genera Age:</label>
            <select id="age">
              <option value="any">Any</option>
              <option value="kitten">Kitten</option>
              <option value="adult">Adult</option>
              <option value="senior">Senior</option>
            </select>
          </div>
          <div class="filter-group">
            <label for="child-friendly">Child-Friendly:</label>
            <select id="child-friendly">
              <option value="any">All Children</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select>
          </div>
          <button type="submit" class="filter-btn">Apply Filters</button>
        </form>
      </aside>
      <section class="cats">
        <div class="cat-card">
          <img src="cat1.jpg" alt="Cat 1">
          <h3>Viv</h3>
          <p>Gender: Female<br>Age: Kitten<br>Child-Friendly: Yes</p>
          <button class="adopt-btn">Adopt Me</button>
        </div>
        <div class="cat-card">
          <img src="cat2.jpg" alt="Cat 2">
          <h3>Francesco</h3>
          <p>Gender: Male<br>Age: Adult<br>Child-Friendly: No</p>
          <button class="adopt-btn">Adopt Me</button>
        </div>
        <!-- Add more cat cards here -->
        <button class="load-more">Load More</button>
      </section>
    </main>
  </div>
</body>
@endsection
</html>
