<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Appontment Update</title>
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
                    <h1>Update Appointment</h1>
                    
                 <form action="{{url('appointment_update_post',$appointment->id)}}" method="post">
                     @csrf
                     <div class="mb-3">
                          <label for="appointment" class="form-label">Appointment No</label>
                         <input type="number" name="appointment_no" class="form-control" value="{{$appointment->appointment_no}}">
                      </div>

                     <div class="mb-3">
                          <label for="date" class="form-label">Appointment Date</label>
                         <input type="date" name="appointment_date" class="form-control" value="{{$appointment->appointment_date}}">
                     </div>

                     <div class="mb-3">
                          <label for="date" class="form-label">Doctor Id</label>
                         <input type="number" name="doctor_id" class="form-control" value="{{$appointment->doctor_id}}">
                     </div>

                     <div class="mb-3">
                          <label for="patient" class="form-label">Patient Name</label>
                         <input type="text" name="patient_name" class="form-control"  value="{{$appointment->patient_name}}">
                     </div>

                     <div class="mb-3">
                          <label for="phone" class="form-label">Patient Phone</label>
                         <input type="number" name="patient_phone" class="form-control" value="{{$appointment->patient_phone}}">
                     </div>

                     <div class="mb-3">
                          <label for="fee" class="form-label">Fee</label>
                         <input type="number" name="total_fee" class="form-control" value="{{$appointment->total_fee}}">
                     </div>

                     <div class="mb-3">
                          <label for="amount" class="form-label">Paid Amount</label>
                         <input type="number" name="paid_amount" class="form-control" value="{{$appointment->paid_amount}}">
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