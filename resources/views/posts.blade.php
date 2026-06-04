@extends('common.main')

@section('title', 'Posts Page')

@section('content')

<style>
    .fixed-box {
        border: 1px solid #000;
        background: #f8f9fa;
    }

    .section-header {
        background: #ffc107;
        font-weight: bold;
        text-align: center;
        padding: 10px;
        border-bottom: 1px solid #000;
    }

    table th,
    table td {
        vertical-align: middle;
    }
</style>

<div class="container py-5">
   <!-- SEARCH 
        
        <div class="container mb-4" >
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form class="d-flex">
                        <div class="input-group">
                            <input class="form-control form-control-lg" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-primary px-4" type="submit">
                                    <i class="bi bi-search"></i>
                                </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
-->
    <div class="mb-5">
    <form method="GET" action="{{ route('posts.search') }}" class="d-flex" role="search">
    <input
        class="form-control me-2"
        type="search"
        name="search"
        placeholder="Search"
        value="{{ request('search') }}"
    />
    <button class="btn btn-success" type="submit">Search</button>
</form>
  </div>


    <div class="row">
        <!-- LEFT SIDE -->
        <div class="col-lg-4 col-12 mb-3">
            <div class="fixed-box">

                <div class="section-header">
                    CREATE NEW POST
                </div>

                <div class="p-3">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('posts.store') }}">
                        @csrf

                        <div class="form-group mb-3">
                            <label>Title</label>

                            <input
                                type="text"
                                name="title"
                                class="form-control"
                                value="{{ old('title') }}"
                            >
                        </div>

                        <div class="form-group mb-3">
                            <label>Description</label>

                            <textarea
                                name="description"
                                class="form-control"
                                rows="4"
                            >{{ old('description') }}</textarea>
                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Status
                            </label>

                            <select class="form-select" name="status">

                                <option value=""></option>

                                @foreach($statuses as $status)

                                    <option value="{{ $status->id }}">
                                        {{ $status->display_name }}
                                    </option>

                                @endforeach

                            </select>
                        </div>

                        <button
                            type="submit"
                            class="btn btn-primary w-100"
                        >
                            Submit Post
                        </button>

                    </form>
                </div>
            </div>
        </div>

        <!-- RIGHT SIDE -->
        <div class="col-lg-8 col-12">

            <div class="fixed-box">

                <div class="section-header">
                    POSTS LIST
                </div>

                <div class="p-3">

                    <table class="table table-bordered text-center">

                        <thead class="table-dark text-centered">
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Created By</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th>Edit</th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach($posts as $post)
                                <tr>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->description }}</td>
                                    <td>{{ $post->created_by }}</td>
                                    <td>{{ $post->status_display_name }}</td>
                                    <td>{{ $post->created_at }}</td>
                                    <td>
                                            <a
                                                href="{{ route('posts.edit', $post->id) }}"
                                                class="bi bi-pencil-square"
                                            ></a>
                                            
                                            <form action= "{{ route('posts.delete', $post->id)}}" method='POST'>
                                            @csrf
                                            @method('delete')
                                            
    
                                            <button type="submit" class="btn btn-link p-0">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                            </form>
                                     </td>
                                 
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

     

        
    </div>
</div>

@endsection