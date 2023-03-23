<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Doctor</title>
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
                  <h1>Doctor List</h1>
                <table class="table">
                    <thead>
                         <tr>
                             <th scope="col">Sl No</th>
                             <th scope="col">DepartId</th>
                             <th scope="col">Name</th>
                             <th scope="col">Phone</th>
                             <th scope="col">Fee</th>
                             <th scope="col">Action</th>
                             <th scope="col">Edit</th>
                         </tr>
                    </thead>
                    <tbody>
                        @foreach($doctor as $doctor)
                          <tr>
                             <th scope="row">{{$doctor->id}}</th>
                             <td>{{$doctor->department_id}}</td>
                             <td>{{$doctor->name}}</td>
                             <td>{{$doctor->phone}}</td>
                             <td>{{$doctor->fee}}</td>
                             <td><a class="btn btn-danger" href="{{url('doctor_delete',$doctor->id)}}">Delete</a></td>
                             <td><a class="btn btn-success" href="{{url('doctor_update',$doctor->id)}}">Update</a></td>
                             
                         </tr>
                         @endforeach  
                   </tbody>
                   </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    -->
  </body>
</html>