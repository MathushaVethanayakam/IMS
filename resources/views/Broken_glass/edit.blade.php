<body style="font-family:'ubuntu',serif; font-size:16px;">
@extends('chemical_layout.layout')

@section('content')
    <div class="container col-md-6 my-4">
        <div class="rounded-sm  shadow p-4" style="border-radius:10px; background-color:white" >
            <h5 style="text-align:center; padding:2px;"><b>Edit Broken Glass Details</b></h5>
            <form action="{{ route('broken_glass.update', $glass->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group row mb-2">
                    <label for="student_name" class="col-sm-4 col-form-label">Student Name</label>
                    <div class="col-sm-8">
                        <input type="text" name="student_name" class="form-control" value="{{ $glass->student_name }}">
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="reg_no" class="col-sm-4 col-form-label">Registration Number</label>
                    <div class="col-sm-8">
                        <input type="text" name="reg_no" class="form-control" value="{{ $glass->reg_no }}">
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="date" class="col-sm-4 col-form-label">Date</label>
                    <div class="col-sm-8">
                        <input type="date" name="date" class="form-control" value="{{ $glass->date }}">
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="recorded_person" class="col-sm-4 col-form-label">Recorded Person</label>
                    <div class="col-sm-8">
                        <input type="text" name="recorded_person" class="form-control" value="{{ $glass->recorded_person }}">
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="description" class="col-sm-4 col-form-label">Description</label>
                    <div class="col-sm-8">
                        <textarea name="description" class="form-control">{{ $glass->description }}</textarea>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="amount_to_pay" class="col-sm-4 col-form-label">Amount to Pay</label>
                    <div class="col-sm-8">
                        <input type="text" name="amount_to_pay" class="form-control" value="{{ $glass->amount_to_pay }}">
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="compensation" class="col-sm-4 col-form-label">Compensation</label>
                    <div class="col-sm-8">
                        <select name="compensation" class="form-control">
                            <option value="OK" {{ $glass->compensation == 'OK' ? 'selected' : '' }}>OK</option>
                            <option value="Pending" {{ $glass->compensation == 'Pending' ? 'selected' : '' }}>Pending</option>
                        </select>
                    </div>
                </div>

                <div class="text-center" >
                    <button type="submit" class="btn btn-primary btn-sm" style="font-size:14px; padding:5px 10px;">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection

</body>
