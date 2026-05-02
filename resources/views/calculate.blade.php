<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate</title>
</head>
<body class="
    bg-warning" <!-- di nakikita dahil sa bg pic-->

    style="
    font-family: Helvetica, sans-serif;
    background: url('/images/pylon2022.jpg') no-repeat center center fixed;
    
">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-8">
                <div class="card shadow-lg border-3 border border-dark " style="background: rgba(255, 255, 255, 255);">
                    <div class="card-header text-white" style="background: #9a0d02;">
                        <h2 class="mb-0 text-center">Calculation Results</h2>
                    </div>
                    <div class="card-body">
                        <p class="h4 text-warning mb-2">Addition: <span class="fw-bold text-dark">{{ $add }}</span></p>
                        <p class="h4 text-danger mb-2">Subtraction: <span class="fw-bold text-dark">{{ $subtract }}</span></p>
                        <p class="h4 text-primary mb-2">Product: <span class="fw-bold text-dark">{{ $product }}</span></p>
                        <p class="h4 text-success mb-2">Division: <span class="fw-bold text-dark">{{ $divide }}</span></p>
    
                        <hr>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label text-secondary">Email address</label>
                            <input type="email" class="form-control border-info" id="exampleFormControlInput1" placeholder="jhcnroyilao@iskolarngbayan.pup.edu.ph">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label text-secondary">Text area:</label>
                            <textarea class="form-control border-success" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mt-4">
                          <a href="{{ url('/home') }}" class="btn btn-outline-primary">Return to Home</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-border">
        <div class="row "> 
            <div class="col-lg-4 col-md-6 col-sm-4 border border-3 bg-danger d-flex justify-content-center py-4"> <!-- first column-->
                <div>
                    <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">@</span>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2">@example.com</span>
                    </div>

                    <label for="basic-url" class="form-label">Your vanity URL</label>
                    <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                    </div>

                    <div class="input-group mb-3">
                    <span class="input-group-text">$</span>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                    <span class="input-group-text">.00</span>
                    </div>

                    <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                    <span class="input-group-text">@</span>
                    <input type="text" class="form-control" placeholder="Server" aria-label="Server">
                    </div>

                    <div class="input-group">
                    <span class="input-group-text">With textarea</span>
                    <textarea class="form-control" aria-label="With textarea"></textarea>
                    </div>
                </div>

            </div>

            <div class="col-lg-4 col-md-6 col-sm-4 border border-3 bg-warning d-flex justify-content-center py-4"> <!-- second column-->
                <div class="card" style="width: 300px; height: 500px;">
                <img class="card-img-top" src="/images/yellow-s.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">SNOOPY <3<3</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 col-sm-4 border border-3 bg-primary d-flex justify-content-center py-4 ">  <!-- third column-->
                <div class="card" style="width: 300px; height: 500px;">
                <img class="card-img-top" src="/images/blue-s.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">OOPPS!</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                </div>
            </div>


        </div>
    </div>

</body>

<style>
    .card-body{
        background: rgba(255, 255, 255, 0.8);
    }
</style>

</html>
