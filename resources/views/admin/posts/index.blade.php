@extends('admin.index')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Posts</h1>
    </div>
    <div class="col-lg-8 mb-5">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <p>
            <a href="/dashboard/posts/create" class="btn btn-success btn-center"><i class="bi bi-plus-square"
                    style="font-size: 100%"></i> Add New
                Post</a>
        </p>

        <div class="table-responsive">
            <table class="table table-striped table-bordered table-lg table-hover">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Title</th>
                        <th scope="col">Category</th>
                        <th scope="col-3">Action</th>
                    </tr>
                </thead>
                <tbody class="table-secondary">
                    @foreach ($posts as $post)
                        <tr>
                            <td class="col text-center">{{ $loop->iteration }}</td>
                            <td class="col">{{ $post->title }}</td>
                            <td class="col">{{ $post->category->name }}</td>
                            <td class="col-3 text-center">
                                <a href="/dashboard/posts/{{ $post->slug }}" class="btn btn-info"><i
                                        class="bi bi-eye"></i></a>
                                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><i
                                        class="bi bi-pencil-square"></i></a>
                                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger"><i class="bi bi-trash"
                                            onclick="return confirm('Apakah yakin ingin dihapus ?')"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
