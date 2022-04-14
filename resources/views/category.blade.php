@extends('layouts.main')
@section('container')
<h1 class="mb-5">Menu Category : {{ $category }}</h1>
<div class="card mb-3">
                @if ($menus[0]->image)
                    <div style="max-height:350px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $menus[0]->image) }}" alt="{{ $menus[0]->category->name }}" class="img-fluid mt-3">
                    </div>
                @endif
    <div class="card-body text-center">
        <h5 class="card-title">{{ $menus[0]->title }}</h5>
        <p>
            <small class="text-muted">
                <a href="/categories/{{ $menus[0]->category->slug }}" class="text-decoration-none">{{ $menus[0]->category->name }}</a>
            </small>
        </p>
        <p class="card-text">{{ $menus[0]->pendek }}</p>
        <a href="/menus/{{ $menus[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
    </div>
</div>

<div class="container">
    <div class="row">
        @foreach ($menus->skip(1) as $menu)
        <div class="col-md-4 mb-3">
            <div class="card">
                @if ($menus[0]->image)
                    <div style="max-height:350px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $menus[0]->image) }}" alt="{{ $menus[0]->category->name }}" class="img-fluid mt-3">
                    </div>
                @endif
                <div class="card-body">
                  <h5 class="card-title">{{ $menu->title }}</h5>
                  <p>
                    <small class="text-muted">
                        <a href="/categories/{{ $menus[0]->category->slug }}" class="text-decoration-none">{{ $menus[0]->category->name }}</a>
                    </small>
                </p>
                  <p class="card-text">{{ $menu->pendek }}</p>
                  <a href="/menus/{{ $menu->slug }}" class="btn btn-primary">Read more</a>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
    
