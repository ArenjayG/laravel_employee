@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-secondary">{{ __('Employee Management') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

    <div class="card-header">
                <h3 class="card-title">Add New Employee</h3>
              </div>
    <form>
    
              <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">First Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Last Name</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Middle Name</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Country</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Please Select your Country">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">State</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Please Select your state">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">City</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Please Select City">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Zip</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Age</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Birthday</label>
                    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Hired Date</label>
                    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Department</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>

    <!-- /.content -->
@endsection