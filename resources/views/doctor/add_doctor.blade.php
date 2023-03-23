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
            <div class="col-md-12">
                    <h1>Add Doctor</h1>
                    @if(session()->has('message'))
                         <div class="alert alert-success">
                           <button type="button" class="close" data-dismiss="alert" area-hidden="true">X</button>
                           {{session()->get('message')}}
                         </div>
                    @endif
                 <form action="{{url('doctor_create')}}" method="post">
                     @csrf

                     <div class="mb-3">
                          <label for="departmentid" class="form-label">DepartmentId</label>
                         <input type="number" name="department_id" class="form-control" placeholder="department_id" required>
                     </div>

                     <div class="mb-3">
                          <label for="name" class="form-label">Name</label>
                         <input type="text" name="name" class="form-control" placeholder="name" required>
                     </div>

                     <div class="mb-3">
                          <label for="phone" class="form-label">Phone</label>
                         <input type="number" name="phone" class="form-control" placeholder="Phone Number" required>
                     </div>

                     <div class="mb-3">
                          <label for="fee" class="form-label">Fee</label>
                         <input type="number" name="fee" class="form-control" placeholder="Fee" required>
                     </div>
                         <button type="submit" class="btn btn-primary">Submit</button>
                 </form>
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