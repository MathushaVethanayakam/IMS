<body style="font-family:'ubuntu',serif; ">
@extends('chemical_layout.layout')
@section('content')
<style>
    .centered-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
       
    }

    .form-container {
        border: 1px solid #ccc;
        border-radius: 10px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        padding: 20px;
        width: 75%; 
        background-color:#f5f5f5;
    }

    .form-group.row {
        margin-bottom: 40px;
    }
    .btn-primary {
        background-color: #0066CC; 
        color: black;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        cursor: pointer;
        transition: background-color 0.3s;
        
    }

    .btn-primary:hover {
        background-color: darkblue; 
    }
    .btn-container {
        text-align: center; 
    }
   
    
</style>
<div class="centered-container">
    <div class="container-fluid form-container">
        
            <h4 style="text-align:center; padding:10px;">Update Organic Chemical</h4>
            @if ($errors->any())
    <div class="alert alert-danger"  style=" padding: 6px; height: auto;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
            <form method="POST" action="{{ route('organicupdate',['id' => $organicChemical->id]) }}">
            @csrf
            <div class="form-group row">
            <label for="chemical_id" class="col-md-3 col-form-label">Chemical ID:</label>
            <div class="col-md-8">
                <input type="number" min="1" class="form-control" id="chemical_id" name="chemical_id" value="{{ $organicChemical->chemical_id }}" data-bs-toggle="tooltip"  title="You can't edit chemical ID.If you want to edit chemical ID,first delete detail and add that as new details.." disabled>
                
                <input type="hidden" name="chemical_id" value="{{ $organicChemical->chemical_id }}">
            </div>
        </div>

            <div class="form-group row">
                <label for="chemical_name" class="col-md-3 col-form-label">Chemical Name:</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="chemical_name" name="chemical_name" value="{{ $organicChemical->chemical_name }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="quantity" class="col-md-3 col-form-label">Quantity:</label>
                <div class="col-md-8">
                    <input type="number" min="1" step="0.001" class="form-control" id="quantity" name="quantity" value="{{ $organicChemical->quantity }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="last_update" class="col-md-3 col-form-label">Last Update:</label>
                <div class="col-md-8">
                    <input type="date" class="form-control" id="last_update" name="last_update" value="{{ $organicChemical->last_update}}">
                </div>
            </div>
            <div class="btn-container">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection






