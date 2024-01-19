
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
    h1 {
        color: #6c757d;
    }
    a {
        margin: auto;
        display: block;
        text-align: center;
        text-decoration: none;
        font-size: 20px;
        font-weight: bold;
        color: #6c757d;
        margin-bottom: 15px;
    }
</style>
<body>

    <div class="container-fluid">
        <h1 class="text-center mt-3 mb-3">All Posts</h1>

        <table class="table">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Body</th>
            <th scope="col">Processor</th>
            </tr>
        </thead>
        <tbody>
            @foreach($my_posts as $post)
                <tr>
                <th scope="row">{{$post->id}}</th>
                <td>{{$post->title}}</td>
                <td>{{$post->body}}</td>
                <td>
                    <a href="{{route('posts.edit', $post->id)}}" class="btn btn-secondary" role="button">Edit</a>
                    <a href="{{route('posts.delete', $post->id)}}" class="btn btn-danger" role="button">Delete</a>
                </td>
                </tr>
            @endforeach
        </tbody>
        </table>
        <a href="{{route('posts.create')}}" >Back To Added New Post</a>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
