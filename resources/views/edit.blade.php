@extends('common.main')

@section('title', 'Edit Post')
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
</style>

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-lg-6">

            <div class="fixed-box">

                <div class="section-header">
                    EDIT POST
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

                    <form
                        method="POST"
                        action="{{ route('posts.update', $post->id) }}"
                    >

                        @csrf

                        <div class="form-group mb-3">

                            <label>Title</label>

                            <input
                                type="text"
                                name="title"
                                class="form-control"
                                value="{{ $post->title }}"
                            >

                        </div>

                        <div class="form-group mb-3">

                            <label>Description</label>

                            <textarea
                                name="description"
                                class="form-control"
                                rows="4"
                            >{{ $post->description }}</textarea>

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Status
                            </label>

                            <select class="form-select" name="status">

                                @foreach($statuses as $status)

                                    <option
                                        value="{{ $status->id }}"
                                        {{ $post->status == $status->id ? 'selected' : '' }}
                                    >
                                        {{ $status->display_name }}
                                    </option>

                                @endforeach

                            </select>

                        </div>

                        <button
                            type="submit"
                            class="btn btn-success w-100"
                        >
                            Update Post
                        </button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection