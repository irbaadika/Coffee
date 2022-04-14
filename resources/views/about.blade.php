@extends('layouts.main')
@section('container')
    <link rel="stylesheet" href="css/home.css">
    <div class="home">
        <h1>SIKOPI</h1>
        <p>Find Us</p>
        <p>Email : {{ $email }}</p>
        <p>Telephone : {{ $no }}</p>
    </div>
@endsection

