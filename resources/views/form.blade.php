@extends('common.main')
@section('title', 'Registration Form')
@section('content')

<div class="container py-5 ">

<form method="POST" action="{{ route('addUser') }}">
  @csrf


  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header bg-primary text-white fw-bold shadow-lg">
            Registration</i>
        </div>
        <div class="card-body p-3">

        @if($errors-> any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                    {{ $error}}
            </div>
        @endforeach

        @endif
            <div class="mb-3">
              <label for="first_name" class="form-label">First Name</label>
              <input type="text" class="form-control" id="first_name" name="first_name" >
            </div>

            <div class="mb-3">
              <label for="middle_name" class="form-label">Midle Name</label>
              <input type="text" class="form-control" id="middle_name" name="middle_name">
            </div>

            <div class="mb-3">
              <label for="last_name" class="form-label">Last Name</label>
              <input type="text" class="form-control" id="last_name" name="last_name" required>
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Email Address</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
          
        </div>
      </div>
    </div>
  </div>
</div>

</form>

@endsection
