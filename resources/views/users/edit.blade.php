@extends('chemical_layout.alayout')

@section('content_1')

<style>
    .centered-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 60%;
        margin-top:40px;
    }

    .form-container {
        border: 1px solid #ccc;
        border-radius: 10px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        padding: 25px;
        width: 50%;
        background-color: #f5f5f5;
        
    }

    .form-group.row {
        margin-bottom: 20px;
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
        <h4 style="text-align:center; padding:10px;">Edit Users</h4>
        @if ($errors->any())
        <div class="alert alert-danger" style="padding: 6px; height: auto;">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form method="POST" action="{{ route('users.update' , $user->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="fullname" class="col-form-label">Full Name</label>
                    <input type="text" class="form-control" id="fullname" name="fullname" value="{{$user->fullname}}">
                </div>
                <div class="col-md-6">
                    <label for="username" class="col-form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" value="{{$user->username}}" disabled>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="email" class="col-form-label">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}">
                </div>
                <div class="col-md-6">
                    <label for="role" class="col-form-label">Role:</label>
                    <select id="role" class="form-control" name="role" value="{{$user->role}}">
                        <option value="" disabled selected hidden>Select Role</option>
                        <option value="lecturer">Lecturer</option>
                        <option value="lab assistant">Lab Assistant</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>
            </div>
            <div class="btn-container">
                <button type="submit" class="btn btn-primary" style=" font-size:12px; ">Update</button>
            </div>
        </form>
    </div>
</div>

@endsection
