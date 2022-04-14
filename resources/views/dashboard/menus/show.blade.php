@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-md-8">
                <h1 class="mb-2">{{ $menu->title }}</h2>
                
                {!! $menu->desc !!}
                <a href="/dashboard/menus" class="btn btn-primary"><span>Kembali ke Menu</span></a>
                <a href="/dashboard/menus/{{ $menu->slug }}/edit" class="btn btn-warning"><span>Edit</span></a>

                <form action="/dashboard/menus/{{ $menu->slug }}" method="POST">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure to delete this data?')">Delete</button>
                </form>
                
                @if ($menu->image)
                    <div style="max-height:350px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $menu->image) }}" alt="{{ $menu->category->name }}" class="img-fluid mt-3">
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection