<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Appointment Create</title>
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
                    <h1>Add Appointment</h1>
                    
                 <form action="{{url('appointment_add')}}" method="post">
                     @csrf
                     <div class="mb-3">
                          <label for="appointment" class="form-label">Appointment No</label>
                         <input type="number" name="appointment_no" class="form-control" placeholder="Appointment No" required>
                      </div>

                     <div class="mb-3">
                          <label for="date" class="form-label">Appointment Date</label>
                         <input type="date" name="appointment_date" class="form-control" placeholder="Appointment Date" required>
                     </div>

                     <div class="mb-3">
                          <label for="date" class="form-label">DoctorId</label>
                         <input type="number" name="doctor_id" class="form-control" placeholder="Doctor Id" required>
                     </div>

                     <div class="mb-3">
                          <label for="patient" class="form-label">Patient Name</label>
                         <input type="text" name="patient_name" class="form-control" placeholder="Patient Name" required>
                     </div>

                     <div class="mb-3">
                          <label for="phone" class="form-label">Patient Phone</label>
                         <input type="number" name="patient_phone" class="form-control" placeholder="Patient Phone" required>
                     </div>

                     <div class="mb-3">
                          <label for="fee" class="form-label">Fee</label>
                         <input type="number" name="total_fee" class="form-control" placeholder="Total Fee" required>
                     </div>

                     <div class="mb-3">
                          <label for="amount" class="form-label">Paid Amount</label>
                         <input type="number" name="paid_amount" class="form-control" placeholder="Paid Amount" required>
                      </div>
                         <button type="submit" class="btn btn-primary">Submit</button>
                 </form>
            </div>
         </div>
      </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <table class="table bordered">
                         <thead>
                             <tr>
                                 <th scope="col">Sl</th>
                                 <th scope="col">appoin_no</th>
                                 <th scope="col">appoint_date</th>
                                 <th scope="col">doctor_id</th>
                                 <th scope="col">patient_name</th>
                                 <th scope="col">patient_phone</th>
                                 <th scope="col">total_fee</th>
                                 <th scope="col">paid</th>
                                 <th scope="col">Action</th>
                                 <th scope="col">Edit</th>
                             </tr>
                         </thead>
                         <tbody>
                            @foreach($appointment as $appointment)
                              <tr>
                                 <th scope="row">{{$appointment->id}}</th>
                                 <td>{{$appointment->appointment_no}}</td>
                                 <td>{{$appointment->appointment_date}}</td>
                                 <td>{{$appointment->doctor_id}}</td>
                                 <td>{{$appointment->patient_name}}</td>
                                 <td>{{$appointment->patient_phone}}</td>
                                 <td>{{$appointment->total_fee}}</td>
                                 <td>{{$appointment->paid_amount}}</td>
                                 <td><a class="btn btn-danger" href="{{url('/appointment_delete',$appointment->id)}}">Delete</a></td>
                                 <td><a class="btn btn-success" href="{{url('/appointment_update',$appointment->id)}}">Update</a></td>
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