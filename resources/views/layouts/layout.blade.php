<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stock Management - @yield('title')</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="flex-center position-ref full-height">
        <nav class="navbar navbar-dark bg-primary navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Stock Management</a>
                <div class="navbar-nav">
                    <a class="nav-link" href="/index">Home</a>
                    <a class="nav-link" href="/products">Products</a>
                    <a class="nav-link" href="/entries">Entries</a>
                    <a class="nav-link" href="#">Customers</a>
                    <a class="nav-link" href="#">Register</a>
                    <a class="nav-link" href="#">Login</a>
                    <a class="nav-link" href="#">About</a>
                    <a class="nav-link" href="#">Help</a>
                </div>
            </div>
        </nav>
    </div>
    <div class="container mt-4">
        @yield('content')
    </div>
</body>

</html>
