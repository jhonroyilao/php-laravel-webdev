  @extends('common.main')
  @section('title', 'snoopy page')
  @section('content')
  

  <style>
    .fixed-img {
      height: 180px;
      object-fit: cover;
    }
  </style>
</head>

<!-- <nav class="navbar navbar-dark bg-primary">
  <a class="navbar-brand" href="#">
    <img src="/images/snoopy-icon.webp" width="30" height="30" class="d-inline-block align-top" alt="">
    <b>SNOOPY PAGE</b>
  </a>
</nav> -->

<!-- MAIN CONTENT -->
<div class="container py-5">
  <div class="row">

    <!-- LEFT: LOGIN CARD -->
    <div class="col-lg-4 col-12 ">
      <div class="border border-dark bg-light ">
        <div class="card-header text-center bg-warning fw-bold border border-dark">
          SNOOPY LOGIN FORM
        </div>

        <div class="card-body p-3 my-3">

          <form>

            <div class="form-group">
              <label for="exampleInputEmail1">Snoopmail</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
            </div>

            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" placeholder="Password">
            </div>

            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="check">
              <label class="form-check-label" for="check">Check me out</label>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Submit <i class="bi bi-star-fill"></i> </button>

          </form>

        </div>
      </div>

    </div>

    <!-- RIGHT: CONTENT -->
    <div class="col-lg-8 col-12">

      <div class="border border-dark bg-light">

        <div class="card-body p-3">

          <h4 class="text-center fw-bold">ABOUT SNOOPY</h4>

          <p>
            <span class="bg-primary text-light">Snoopy</span> is the iconic, witty, and adventurous pet beagle of Charlie Brown in the long-running 
            <span class="bg-warning">Peanuts</span> comic strip and franchise created by Charles Schulz.
            <br><br>
            Known for his rich fantasy life, he famously portrays personas like the World War I Flying Ace, Joe Cool, and a writer, while often sleeping on top of his doghouse.
          </p>

          <!-- IMAGE GRID -->
          <div class="row no-gutters text-center mb-1">
            <div class="col-4 p-2">
              <img src="/images/1.png" class="img-fluid w-100 border border-dark fixed-img">
            </div>
            <div class="col-4 p-2">
              <img src="/images/giphy.gif" class="img-fluid bg-warning w-100 border border-dark fixed-img">
            </div>
            <div class="col-4 p-2">
              <img src="/images/2.png" class="img-fluid w-100 border border-dark fixed-img">
            </div>
          </div>

          <div class="row no-gutters text-center mb-1">
            <div class="col-4 p-2">
              <img src="/images/gif2.gif" class="img-fluid bg-danger w-100 border border-dark fixed-img">
            </div>
            <div class="col-4 p-2">
              <img src="/images/3.png" class="img-fluid w-100 border border-dark fixed-img">
            </div>
            <div class="col-4 p-2">
              <img src="/images/gif3.gif" class="img-fluid bg-primary w-100 border border-dark fixed-img">
            </div>
          </div>

          <!-- TABLE -->
          <h5 class="text-center fw-bold">COMPARE PLANS</h5>

          <table class="table text-center mt-3">
            <thead>
              <tr>
                <th>Feature</th>
                <th class="text-primary">Free</th>
                <th class="text-danger">Pro</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Public</td>
                <td>✔</td>
                <td>✔</td>
              </tr>
              <tr>
                <td>Private</td>
                <td>—</td>
                <td>✔</td>
              </tr>
              <tr>
                <td>Permission</td>
                <td>—</td>
                <td>✔</td>
              </tr>
            </tbody>
          </table>

        </div>
      </div>

    </div>

  </div>
</div>

</body>
</html>

@endsection