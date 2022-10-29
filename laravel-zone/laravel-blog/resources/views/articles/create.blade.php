@extends('templates.master')

@section('content')
    <div class="container">
        <div class="row mt-2">
            <div class="col">
                <h1>Add Post</h1>
            </div>
        </div>

        @include('partials.validation_errors')

        <div class="row mt-2 w-75 bg-light mx-auto">
            <div class="col">
                <form action="{{ route('manage.articles.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Enter Title" name="title" value="{{ old('title') }}">
                    </div>
                    <div class="form-floating mb-3">
                        <textarea name="description" class="form-control" placeholder="Write Here" id="floatingTextarea2" style="height: 100px">{{ old('description') }}</textarea>
                        <label for="floatingTextarea2">Description</label>
                    </div>
                    <div class="mb-3">
                        <select name="category_id" class="form-select" aria-label="Default select example">
                            <option @if(!empty(old('category_id'))) selected @endif>--- Select Category ---</option>
                            @foreach($categories as $key => $category)
                            <option @if(old('category_id')) selected @endif value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="author_name" class="form-label">Author Name</label>
                        <input type="text" class="form-control" id="author_name" placeholder="Enter Author Name" name="author_name"  value="{{ old('author_name') }}">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Default file input example</label>
                        <input name="image" class="form-control" type="file" id="formFile">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit">
                            Add Post
                        </button>
                    </div>

                </form>
            </div>
        </div>

    </div>
@endsection

