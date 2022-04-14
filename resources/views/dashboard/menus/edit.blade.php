@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Menu</h1>
    </div>

    <div class="col-lg-8">
        <form method="POST" action="/dashboard/menus/{{ $menu->slug }}" class="mb-5" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control" @error('title') is-invalid @enderror id="title" name="title" required autofocus value="{{ old('title', $menu->title) }}">
              @error('title')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="slug" class="form-label">Slug</label>
              <input type="text" class="form-control" id="slug" name="slug" required value="{{ old('slug',$menu->slug) }}">
            </div>

            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" name="category_id">
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                        
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Upload Image</label>
                <input class="form-control" type="file" id="image" name="image">
            </div>

            <div class="mb-3">
                <label for="desc" class="form-label">Description</label>
                <input id="desc" type="hidden" name="desc" value="{{ old('desc', $menu->desc) }}">
                <trix-editor input="desc"></trix-editor>
            </div>

            <button type="submit" class="btn btn-primary">Create Menu</button>
        </form>
    </div>

    <script>
        document.addEventListener('trix-file-accept', function(e){
            e.preventDefault();
        })
    </script>

@endsection