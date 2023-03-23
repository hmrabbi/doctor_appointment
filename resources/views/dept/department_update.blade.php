<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Department Update</title>

    <style>
        h1{
            text-align:center;
            margin-top:30px;
        }
    </style>
  </head>
  <body>
    <section>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
            <h1>Update Department</h1>
            <form action="{{url('/department_update_post',$data->id)}}" method="post">
                @csrf
                <div class="mb-3">
                     <label for="name" class="form-label">Name</label>
                     <input type="text" class="form-control" value="{{$data->name}}">
                </div>

                <div class="mb-3">
                     <label for="updatename" class="form-label">Update Name</label>
                     <input type="text" name="name" class="form-control" required>
                </div>

                 <button type="submit" class="btn btn-primary">Submit</button>
           </form>
            </div>
        </div>
    </div>
    </section>
    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    -->
  </body>
</html>