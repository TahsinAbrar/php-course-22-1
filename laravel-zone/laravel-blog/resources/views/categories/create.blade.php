@extends('templates.master')

@section('content')
    <div class="container">
        <div class="row mt-2">
            <div class="col">
                <h1>Add Category</h1>
            </div>
        </div>

        @include('partials.validation_errors')

        <div class="row mt-2 w-75 bg-light mx-auto">
            <div class="col">
                <form action="{{ route('manage.categories.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" required>
                    </div>
{{--                    <div class="mb-3">--}}
{{--                        <label for="title" class="form-label">Slug</label>--}}
{{--                        <input type="text" class="form-control" id="slug" placeholder="Enter Slug" name="slug" required>--}}
{{--                    </div>--}}
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

