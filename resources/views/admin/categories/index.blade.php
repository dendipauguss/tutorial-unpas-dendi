@extends('admin.index')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Post Categories</h1>
    </div>
    <div class="col-lg-6 mb-5">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <p>
            <a href="/dashboard/categories/create" class="btn btn-success btn-center"><i class="bi bi-plus-square"
                    style="font-size: 100%"></i> Add New
                Category</a>
        </p>

        <div class="table-responsive">
            <table class="table table-striped table-bordered table-lg table-hover text-center">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Category Name</th>
                        <th scope="col-4">Action</th>
                    </tr>
                </thead>
                <tbody class="table-secondary">
                    @foreach ($categories as $category)
                        <tr>
                            <td class="col">{{ $loop->iteration }}</td>
                            <td class="col">{{ $category->name }}</td>
                            <td class="col-4">
                                <a href="/dashboard/categories/{{ $category->slug }}" class="btn btn-info"><i
                                        class="bi bi-eye"></i></a>
                                <a href="/dashboard/categories/{{ $category->slug }}/edit" class="btn btn-warning"><i
                                        class="bi bi-pencil-square"></i></a>
                                <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
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
