@extends('templates.master')


@section('content')
    <div class="container table-container mt-5">
            <div class="row mb-2 justify-content-around ">
                <div class="col-6"><h2>All Posts</h2></div>
                <div class="col-6 text-end">
                    <a class="btn btn-outline-primary" href="addpost.html">Add Post</a>
                </div>
            </div>
            <div class="row">
                <div class="col">

                    <table
                        class="table table-striped table-hover table-bordered text-center"
                    >
                        <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Category</th>
                            <th scope="col">Date</th>
                            <th scope="col">Author</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                            @unless(empty($articles))
                                @foreach($articles as $article)
                                <tr>
                                    <th scope="row">{{ $article->id }}</th>
                                    <td>{{ $article->title }}</td>
                                    <td>{{ $article->category }}</td>
                                    <td>{{ $article->created_at }}</td>
                                    <td>{{ $article->author_name }}</td>
                                    <td class="text-center text-success">
                                        <a href="{{ route('manage.articles.edit', $article->id) }}"><i class="fas fa-edit"></i></a>
                                    </td>
                                    <td class="text-center text-danger">
                                        <form action="{{ route('manage.articles.destroy', $article->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger" type="submit"><i class="fa-solid fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            @else
                                <tr>
                                    <td>No data found</td>
                                </tr>
                            @endunless
                        </tbody>
                    </table>
                </div>
            </div>
</div>
@endsection


@section('pagination')
    @include('partials.pagination')
@endsection
