@extends('chemical_layout.layout')

@section('content')

    <head>
        
        <style>
            section {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            padding: 80px 50px 50px 120px;
           
            
        }

        .card {
            width: min(100%, 250px);
            background: rgba(255, 255, 255);
            border-radius: 16px;
            font-family: "Poppins", sans-serif;
            z-index: 5;
        }

        .card>img {
            display: block;
            width: 100%;
            max-width: 400px;
            object-fit: cover;
            object-position: 50% 50%;
            border-radius: 16px 16px 0 0;
            filter: contrast(40%);
            transition: all 0.6s cubic-bezier(0.43, 0.41, 0.22, 0.91);
        }

        .card>img:hover {
            filter: contrast(100%);
        }

        .card-content {
            display: flex;
            flex-direction: column;
            padding: 15px 10px 15px;
        }

        .card-content>p {
            margin-bottom: 5px;
        }

        .card-content>p:nth-child(1) {
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 10px;
            color: #1e40af;
        }

        .card-content>p:nth-child(2) {
            font-size: 0.8rem;
            font-weight: 400;
            color: #6b7280;
        }

        @media (max-width: 960px) {
            section {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 600px) {
            section {
                grid-template-columns: repeat(1, 1fr);
            }
        }

        </style>
</head>
<body>

    <h4 style="color:#F6DEE2;  width:100%;  margin-top:30px; text-align:center;margin-bottom:0;"><b>Welcome to our Inventory Management System</b></h4>
  
  <section>
    <div class="card">
      <img src="image/image1.jpeg" alt="image" />
      <div class="card-content">
        <p>chemicals</p>
        <p>It contains all laboratory orgnaic and inorganic chemicals.</p>
      </div>
    </div>
    <div class="card">
      <img src="image/image2.jpeg" alt="image" />
      <div class="card-content">
        <p>Equipments</p>
        <p>It contains all Laboratory instruments and glass wares </p>
      </div>
    </div>

    <div class="card">
      <img src="image/image3.jpeg" alt="image" />

      <div class="card-content">
        <p>Broken glasses</p>
        <p>It contain all laboratory broken items details.</p>
      </div>
    </div>
    
  </section>
  
</body>
@endsection