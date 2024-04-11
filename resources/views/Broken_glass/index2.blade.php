<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .custom-container {
            max-width: 80%;
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
            padding: 0.2rem 0.4rem; /* Adjusted the top and bottom padding */
           
        }

        .table-lg tbody tr td {
            vertical-align: middle; /* Align table data vertically to the middle of the row */
            
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
            padding-top:3px;
           
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
    @extends('chemical_layout.alayout')
    @section('content_1')
    <div class="container-fluid my-5 custom-container" style="margin-bottom:20px; margin-right:80px;">
        
        <h4 class="text-white mb-4" style="text-align:center; background: linear-gradient(to right, #000066 0%, #ccffff 100%);  margin-top:20px;">Broken Glass Details in Laboratory</h4>
        <div class="table-responsive" style="max-height: 350px; overflow-y: auto; ">
        <table class="table table-border-bottom table-hover table-lg text-center">
            <thead class="thead-light thead-fixed">
                <tr>
                    <th>ID</th>
                    <th>Student Name</th>
                    <th>Registration Number</th>
                    <th>Date</th>
                    <th>Recorded Person</th>
                    <th>Description</th>
                    <th>Amount to Pay (Rs)</th>
                    <th>Compensation</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($glasses as $glass)
                <tr>
                    <td>{{ $glass->id }}</td>
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
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

        
    </div>
    
    @endsection
</body>
