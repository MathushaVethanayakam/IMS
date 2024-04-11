
<body style="font-family:'ubuntu',san-serif">
@extends('chemical_layout.layout')

@section('content')
    <div class="container col-md-6 my-4 ">
        <div class="rounded-sm shadow p-4" style=" border-radius:10px; background-color:white; height:80%">
            <h5 style="text-align:center;   "><b>Create Broken Glass Detail</b></h5>
            <br>
            
            <form action="{{ route('broken_glass.store') }}" method="POST">
                @csrf

                <div class="form-group row mb-2">
                    <label for="student_name" class="col-sm-4 col-form-label">Student Name</label>
                    <div class="col-sm-8">
                        <input type="text" name="student_name" class="form-control">
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="reg_no" class="col-sm-4 col-form-label">Registration Number</label>
                    <div class="col-sm-8">
                        <input type="text" name ="reg_no" class="form-control">
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="date" class="col-sm-4 col-form-label">Date</label>
                    <div class="col-sm-8">
                        <input type="date" name="date" class="form-control">
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="recorded_person" class="col-sm-4 col-form-label">Recorded Person</label>
                    <div class="col-sm-8">
                        <input type="text" name="recorded_person" class="form-control">
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="description" class="col-sm-4 col-form-label">Description</label>
                    <div class="col-sm-8">
                        <textarea name="description" class="form-control"></textarea>
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="amount_to_pay" class="col-sm-4 col-form-label">Amount to Pay</label>
                    <div class="col-sm-8">
                        <input  type="number" min="1" step="0.01" name="amount_to_pay" class="form-control">
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="compensation" class="col-sm-4 col-form-label">Compensation</label>
                    <div class="col-sm-8">
                        <div class="form-check">
                            <input type="radio" name="compensation" value="OK" class="form-check-input" id="compensationOK">
                            <label class="form-check-label" for="compensationOK">OK</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="compensation" value="Pending" class="form-check-input" id="compensationPending">
                            <label class="form-check-label" for="compensationPending">Pending</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <div class="col-sm-4"></div> 
                    <div class="col-sm-8 text-center"> 
                        <button type="submit" class="btn btn-primary btn-sm" style="margin-right:140px;border-radius:10px;font-size:14px;"><b>Create Broken Glass Detail</b></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
@endsection








