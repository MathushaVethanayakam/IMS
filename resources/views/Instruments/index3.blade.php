<head>
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <style>
        .card-container {
            position: relative;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 50px;
            background-color:#f5f5f5;
         
        }

        .organic-container {
            background: linear-gradient(to right, #000066 0%, #ccffff 100%);
            padding: 5px;
            text-align: center;
            color: white;
            border-radius: 5px 5px 0 0;
            height: 30px;
            
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
            background-color: #7c0a02 !important;
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

<body style="font-family: 'ubuntu', sans-serif; ">
    @extends('chemical_layout.llayout')
    @section('content_2')
    
    <div class="container" style="width: 80%; height:100%; margin-top:50px;">
        


        <div class="card-container">
            @if (session('success'))
            <div class="alert alert-success" style="max-height: 30px; display: flex; align-items: center; font-size:12px;">
                {{ session('success') }}
            </div>
            @endif
            <div class="organic-container">
                <h6><b>Laboratory Instruments</b></h6>
                
            </div>
            

            <div class="card-table-container">
                <div class="custom-table">
                    <table class="table table-hover table-borderless">
                        <thead class="bg-light text-black">
                            <tr>
                                <th>Instrument Id</th>
                                <th>Instrument Name</th>
                                <th>Available</th>
                                <th>Last Update</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($instruments as $instrument)
                            <tr>
                                <td>{{ $instrument->instrument_id }}</td>
                                <td>{{ $instrument->instrument_name }}</td>
                                <td>{{ $instrument->available }}</td>
                                <td>{{ $instrument->last_update }}</td>
                                
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

