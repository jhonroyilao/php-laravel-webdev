<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Page Not Found</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light text-center py-5">
    <div class="container">
        <h1 class="text-danger">Oops! Page not found.</h1>
        <p class="text-muted">The page you requested doesn't exist.</p>
        <img src="{{ asset('images/404.jpg') }}" alt="404 image" class="img-fluid mb-3" style="max-width:320px;">
        <p><a href="{{ route('homeAlias') }}" class="btn btn-primary">Return home</a></p>
    </div>
</body>
</html>