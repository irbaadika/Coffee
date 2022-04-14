@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Menu</h1>
    </div>

    @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive col-lg-8">
        <a href="/dashboard/menus/create" class="btn btn-success mb-3">Create new menu</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Category</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($menus as $menu)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $menu->title }}</td>
                <td>{{ $menu->category->name }}</td>
                <td>
                    <a href="/dashboard/menus/{{ $menu->slug }}" class="text-decoration-none">View</a>
                    <a href="/dashboard/menus/{{ $menu->slug }}/edit" class="text-decoration-none d-inline">Edit</a>

                    <form action="/dashboard/menus/{{ $menu->slug }}" method="POST">
                        @method('delete')
                        @csrf
                        <button class="text-decoration-none border-0 btn btn-danger" onclick="return confirm('Are you sure to delete this data?')">Delete</button>
                    </form>
                </td>
              </tr>
              @endforeach
            
          </tbody>
        </table>
      </div>
      
@endsection