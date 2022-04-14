@extends('layouts.main')
@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="mb-2">{{ $menu->title }}</h2>
                <h5><a href="/categories/{{ $menu->category->slug }}" class="text-decoration-none">{{ $menu->category->name }}</a></h5>
                @if ($menu->image)
                    <div style="max-height:350px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $menu->image) }}" alt="{{ $menu->category->name }}" class="img-fluid mt-3">
                    </div>
                @endif
                {!! $menu->desc !!}
                <a href="/menu" class="text-decoration-none">Kembali ke Menu</a>
            </div>
        </div>
    </div>

    
@endsection