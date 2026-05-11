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

    <div class="row">

        <!-- LEFT SIDE -->
        <div class="col-lg-4 col-12 mb-3">

            <div class="fixed-box">

                <div class="section-header">
                    CREATE NEW POST
                </div>

                <div class="p-3">

                    {{-- VALIDATION ERRORS --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                          <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>

                    @endif
                    <form method="POST" action="/add-post">
                        @csrf
                        <!-- TITLE -->
                        <div class="form-group mb-3">
                            <label>Title</label>
                            <input
                                type="text"
                                name="title"
                                class="form-control"
                                value="{{ old('title') }}"
                            >
                        </div>

                        <!-- DESCRIPTION -->
                        <div class="form-group mb-3">
                            <label>Description</label>
                            <textarea
                                name="description"
                                class="form-control"
                                rows="4"
                            >{{ old('description') }}</textarea>
                        </div>

                        <!-- buttom -->
                        <button
                            type="submit"
                            class="btn btn-primary w-100">
                            Submit Post
                        </button>

                    </form>
                </div></div>
        </div>

        <!-- RIGHT SIDE -->
        <div class="col-lg-8 col-12">
            <div class="fixed-box">
                <div class="section-header">
                    POSTS LIST
                </div>
                <div class="p-3">
                    <table class="table table-bordered text-center">
                        <thead class="table-dark">
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Created By</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($posts) > 0)
                            @foreach($posts as $p)
                                    <tr>
                                        <td>{{ $p->title }}</td>
                                        <td>{{ $p->description }}</td>
                                        <td>{{ $p->created_by }}</td>
                                        <td>{{ $p->status_name }}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="4">
                                        No posts yet
                                    </td>
                                </tr>

                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection