@extends('dashboard.index')

@section('judul','Rumah Sakit')

@section('content')
<h1>Welcome to the Home Page</h1>

<div class="card-container">
    @for ($i = 1; $i <= 3; $i++) <div class="card">
        <img src="{{ asset('images/image' . $i . '.jpg') }}" alt="Ini harusnya gambar">
        <div class="card-content">
            <h2>Card Title {{ $i }}</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <p>
                <strong>Emergency Number:</strong>
                <a href="tel:+123456789">+123456789</a>
            </p>
            <p>
                <strong>Location:</strong>
                <a href="https://maps.google.com?q=latitude,longitude" target="_blank">View on Map</a>
            </p>
            <button>Contact Us</button>
        </div>
</div>
@endfor
</div>
@endsection