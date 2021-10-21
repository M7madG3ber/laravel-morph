<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Morph</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>

<body>
    <div class="section">
        <div class="container">

            <div class="row pt-3">
                <div class="col-sm-12">
                    <h3>Laravel Morph Relation</h3>
                </div>
            </div>

            <br>
            <br>
            <hr>
            <hr>
            <br>
            <br>

            <form action="" method="POST" enctype="multipart/form-data">
                <div class="row">

                    <div class="col-sm-12">
                        <h5># Post Form</h5>
                    </div>


                    @csrf

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" value="{{ old('title') }}" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Photo</label>
                            <input required type="file" name="photo" class="form-control">
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <button class="btn btn-primary" type="submit">Save</button>
                    </div>

                </div>
            </form>

            <br>
            <br>
            <hr>
            <hr>
            <br>
            <br>

            <div class="row">
                <div class="col-sm-12">
                    <h5>Posts</h5>
                </div>
                <div class="col-sm-12">

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Image</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->title }}</td>
                                <td>
                                    <img style="width: 50px;height: 50px" src="{{  $post->photo->url }}" alt="photo">
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</body>

</html>
