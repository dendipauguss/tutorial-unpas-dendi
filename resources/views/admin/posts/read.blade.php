@extends('admin.index')

@section('container')
    <div
        class="container d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <div class="row my-2">
            <div class="col-lg-8">
                <h2 class="mb-3">
                    {{ $post['title'] }}
                </h2>

                <a href="/dashboard/posts" class="btn btn-success"><i class="bi bi-arrow-left"></i> Back to
                    All My Posts</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><i class="bi bi-pencil-square"></i>
                    Edit</a>
                <button href="" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                        class="bi bi-trash"></i> Delete</button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi Hapus
                                </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Apakah yakin ingin dihapus ?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger" autofocus>Yes</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                @if ($post->image)
                    <div style="max-height: 400px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                            class="img-fluid mt-3">
                    </div>
                @else
                    <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}"
                        alt="{{ $post->category->name }}" class="img-fluid mt-3">
                @endif

                <article class="my-3 fs-5">
                    {{-- Get Data dengan escape (dapat mengeksekusi isi yang terdapat code khusus) --}}
                    {!! $post->body !!}
                </article>

                <!-- Get Data tanpa escape (hanya menampilkan isi) -->
                {{-- {{ $post->body }} --}}
            </div>
        </div>
    </div>
@endsection
