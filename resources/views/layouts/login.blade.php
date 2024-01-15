<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>

    <div class="container-fluid">
        <form class="border mt-4 p-4 " action="" method="POST">
            @csrf
        <h1 class="text-center mb-3">Login</h1>
        <div class="mb-3">
            <input type="email" class="form-control" placeholder="Enter Email" name="email">
        </div>
        <div class="mb-3">
            <input type="password" class="form-control"  placeholder="Enter Password" name="password">
        </div>
        <button type="submit" class="btn btn-primary m-auto d-block">Submit</button>
        </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>