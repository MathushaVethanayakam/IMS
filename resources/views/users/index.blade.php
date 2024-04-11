<head>
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <style>
        
        .container {
            /* Add these styles for maximum height and fixed position */
            max-height: 900px;
            position: relative;
            
            
        }
        .card-container {
            position: relative; /* Ensure relative positioning for the button */
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 50px;
            background-color:#f5f5f5;
           
        }

        .inorganic-container {
            background: linear-gradient(to right, #000066 0%, #ccffff 100%);
            padding: 5px;
            text-align: center;
            color: white;
            border-radius: 5px 5px 0 0;
            height: 30px;
            margin-bottom:2px;
        }

        h6 {
            font-size: 20px;
            color: white;
        }

        .new-container{
            position: absolute;
            top: 10px;
            right: 50px;
            background-color:  #0066CC;
            padding: 5px 10px;
            border-radius: 5px;
        }
        
        .new-container:hover {
            background-color: darkblue;
        }
        .card-table-container {
            max-height: 300px;
            overflow-y: auto;
        }

        .custom-table table {
            font-size: 12px;
        }

        .custom-table thead {
            position: sticky;
            top: 0;
            background-color: black !important;
            z-index: 1;
            text-align: center;
            color:white !important;
        }
        .custom-table td {
            vertical-align: middle; 
            padding: 2px !important;
            text-align: center;
        }
        .custom-table tbody tr {
            border-bottom: 1px solid #dcdcdc;
            padding: 5px 10px;
        }

        .custom-table th, .custom-table td {
            padding: 3px !important;
            text-align: center;
            
        }
    </style>
</head>

</head>

<body style="font-family: 'ubuntu', sans-serif;">
@extends('chemical_layout.alayout')
    @section('content_1')

    <div class="container" style="width: 80%; margin-top:50px;">
        

        <div class="card-container">
            @if (session('success'))
            <div class="alert alert-success" style="max-height: 30px; display: flex; align-items: center; font-size:12px;">
                {{ session('success') }}
            </div>
            @endif
            <div class="inorganic-container">
                <h6><b>User Details</b></h6>
                <div class="new-container">
                    <a href="{{route('users.create')}}" style="text-decoration: none; color: white; font-size:12px;" data-bs-toggle="tooltip"  title="Add New Inoraganic Chemical">+ Add User</a>
                </div>
            </div>
            

            <div class="card-table-container">
                <div class="custom-table">
                    <table class="table table-hover table-borderless">
                        <thead class="bg-light text-black">
                            <tr>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $user->fullname }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role }}</td>
                                <td>
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btn-sm" data-bs-toggle="tooltip"  title="Edit">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <form method="POST" action="{{ route('users.destroy', $user->id) }}" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" data-bs-toggle="tooltip"  title="Delete"><i class="bi bi-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endsection
</body>
