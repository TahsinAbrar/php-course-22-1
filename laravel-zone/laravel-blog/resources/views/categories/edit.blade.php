@extends('templates.master')

@section('content')
    <div class="container">
        <div class="row mt-2">
            <div class="col">
                <h1>Edit Post: {{ $category->title }}</h1>
            </div>
        </div>
        <div class="row mt-2 w-75 bg-light mx-auto">
            <div class="col">
                <form action="{{ route('manage.categories.update', $category->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <input type="hidden" name="_method" value="put">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Enter Title" name="title" value="{{ $category->title }}">
                    </div>
                    <div class="mb-3">
                        <label for="author_name" class="form-label">Author Name</label>
                        <input type="text" class="form-control" id="author_name" placeholder="Enter Author Name" name="author_name" value="{{ $category->author_name }}">
                    </div>
                    <div class="form-floating mb-3">
                        <textarea
                            name="description"
                            class="form-control"
                            placeholder="Write Here"
                            id="floatingTextarea2"
                            style="height: 100px"
                        >{{ $category->description }}</textarea>
                        <label for="floatingTextarea2">Description</label>
                    </div>
                    <div class="mb-3">
                        <select name="category" class="form-select" aria-label="Default select example">
                            <option selected>Category</option>
                            <option value="1" @if ($category->category == 1) selected @endif>One</option>
                            <option value="2" @if ($category->category == 2) selected @endif>Two</option>
                            <option value="3" @if ($category->category == 3) selected @endif>Three</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Default file input example</label>
                        <input name="image" class="form-control" type="file" id="formFile">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit">
                            Update
                        </button>
                    </div>

                </form>
            </div>
        </div>

    </div>
@endsection

