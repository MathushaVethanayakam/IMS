<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        .custom-container {
            max-width: 85%;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            background-color:#f5f5f5;
            
            
        }
        
        .table-scroll {
            max-height: 300px; /* Set a fixed height for the table container */
            overflow-y: auto; /* Enable vertical scroll */
        }

        .table-lg {
            font-size: 12px; /* Decreased font size to 12px for table data */
        }

        .table-lg tbody tr th,
        .table-lg tbody tr td {
            padding: 0.1rem 0.4rem; /* Adjusted the top and bottom padding */
           
        }

        .table-lg tbody tr td {
            vertical-align: middle; /* Align table data vertically to the middle of the row */
            padding-top:2px;
            
        }

        /* Decrease button size */
        .btn-sm {
            padding: 0.1rem 0.2rem; /* Adjusted padding to decrease button size */
            font-size: 12px; /* Adjusted font size */
        }

        .btn-edit {
            background-color: #000080;
            color: white;
        }

        .table-lg tbody tr {
            border-bottom: 2px solid #dee2e6; /* Adjust the border-bottom style for rows */
        }

        /* Fixed table heading */
        .thead-fixed {
            position: sticky;
            top: 0;
            background-color: black !important;
            z-index: 1;
            text-align: center;
            color:white !important;
        }
        .bg-gold{
            background-color: #FDD017 !important
        }
    </style>
</head>
<body style="font-family: 'ubuntu', sans-serif;">
    @extends('chemical_layout.llayout')
    @section('content_2')
    <div class="container-fluid my-5 custom-container" style="margin-bottom:20px; margin-right:60px; ">
        <div class="row justify-content-end my-2">
            <div class="col-auto">
                <a href="{{ route('broken_glass.create') }}" class="btn btn-success btn-sm" style="border-radius:10px;font-size:12px;"> Add Broken Glass Details</a>
            </div>
        </div>
        <h4 class="text-white mb-4" style="text-align:center; background: linear-gradient(to right, #000066 0%, #ccffff 100%);">Broken Glass Details in Laboratory</h4>
        <div class="table-responsive" style="max-height: 350px; overflow-y: auto; ">
        <table class="table table-border-bottom table-hover table-lg text-center">
            <thead class="thead-light thead-fixed">
                <tr>
                    
                    <th>Student Name</th>
                    <th>Registration Number</th>
                    <th>Date</th>
                    <th>Recorded Person</th>
                    <th>Description</th>
                    <th>Amount to Pay (Rs)</th>
                    <th>Compensation</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($glasses as $glass)
                <tr>
                    
                    <td>{{ $glass->student_name }}</td>
                    <td>{{ $glass->reg_no }}</td>
                    <td>{{ $glass->date }}</td>
                    <td>{{ $glass->recorded_person }}</td>
                    <td>{{ $glass->description }}</td>
                    <td>{{ number_format($glass->amount_to_pay, 2) }}</td>
                    <td>
                        <span class="badge {{ $glass->compensation === 'OK' ? 'bg-success' : 'bg-gold text-black' }} " >
                            {{ $glass->compensation }}
                        </span>
                    </td>
                    <td>
                        <a href="{{ route('broken_glass.edit', $glass->id) }}" class="btn btn-primary btn-sm btn-edit"><i class="fa fa-edit"></i></a>
                        <form action="{{ route('broken_glass.destroy', $glass->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

        
    </div>
    
    @endsection
</body>
