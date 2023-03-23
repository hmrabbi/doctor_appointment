<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Add Department</title>

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
            <h1>Add Department</h1>
            <form action="{{url('department_add')}}" method="post">
                @csrf
                <div class="mb-3">
                     <label for="name" class="form-label">Name</label>
                     <input type="text" name="name" class="form-control" placeholder="name" required>
                </div>
                 <button type="submit" class="btn btn-primary">Submit</button>
           </form>
            </div>
        </div>
    </div>
    </section>
    <br><br>
    

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8">


                <table class="table">
                    <thead>
                         <tr>
                             <th scope="col">Sl No</th>
                             <th scope="col">DepartName</th>
                             <th scope="col">Action</th>
                             <th scope="col">Edit</th>
                         </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $data)
                          <tr>
                             <th scope="row">{{$data->id}}</th>
                             <td>{{$data->name}}</td>
                             <td><a class="btn btn-danger" href="{{url('/department_delete',$data->id)}}">Delete</a></td>
                             <td><a class="btn btn-success" href="{{url('/department_update',$data->id)}}">Update</a></td>
                         </tr>
                         @endforeach
                   </tbody>
                   </table>
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