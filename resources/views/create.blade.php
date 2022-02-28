<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>


    <div class="container">
        <h2>Blog</h2>



        @if ($errors->any())

            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                         <li>{{ $error }}</li>
                    @endforeach

                </ul>
            </div>
        @endif


        <form action="{{ url('/store') }}" method="post" enctype="multipart/form-data">

            @csrf


            <div class="form-group">
                <label for="exampleInputName">Title</label>
                <input type="text" class="form-control" id="exampleInputTitle" aria-describedby="" name="title"
                    placeholder="Enter Name" value="{{ old('title') }}">
            </div>


            <div class="form-group">
                <label for="exampleInputEmail">Content</label>
                <input type="email" class="form-control" id="exampleInputContent" aria-describedby=""
                    name="content" placeholder="Enter content" value="{{old('content')}}">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword">Image</label>
                <input type="file" name="image" value="{{ old('image') }}">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <br>

</body>

</html>
