<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
    a {
        margin: auto;
        display: block;
        text-align: center;
        text-decoration: none;
        font-size: 20px;
        font-weight: bold;
    }
</style>
<body>
    <div class="container">
        <form class="border p-3 mt-5" action="{{route('posts.update', $my_post->id)}}" method="post">
            @csrf
            @method("PUT")
            <h1 class="text-center">Edit Post: {{$my_post->title}}</h1>
            <div class="mb-3">
                <input type="text" class="form-control" value="{{$my_post->title}}" name="title">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" value="{{$my_post->body}}" name="body">
            </div>
            <input type="submit" value="Update" class="btn btn-success m-auto d-table">
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
