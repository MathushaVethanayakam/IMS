<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <style>
        body {
            margin: 0;
            box-sizing: border-box;
        }

        /* CSS for header */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color:#16013B;
        }
        
        .nav-items {
            display: flex;
            justify-content: space-around;
            align-items: center;
            background-color: #16013B;
            margin-left: auto;
            margin-right:20px;
            
            }

        .nav-items a {
            text-decoration: none;
            color:white;;
            padding: 35px 20px;
            
        }
        .intro{
            display: flex;
            flex-direction: row;
            width: 100%;
            height: 520px;
        }
        .intro .part1{
            text-align:left;
            width:40%;
            
            
        }
        .intro .part1 h1{
            margin-left:20px;
            margin-top:40px;
        }
        .intro .part1 h1 p{
            
            margin-top:0;
            font-size:13px;
            color:DarkGray;
        }
        .intro .part1 img {
            display: block;
            width: 100%;
            max-width: 200px;
            object-fit: cover;
            object-position: 50% 50%;
            margin-left:50px;
            margin-top:50px;
        }
        .intro .part2{
            width:60%;
            
        }
        .intro .part2 .slideshow-container {
            max-width: 100%;
            position: relative;
            margin: auto;
            justify-content: right;
            margin-right:0;
        }

        /* Hide the images by default */
        .mySlides {
            display: none;
        }
        .mySlides img{
            width:710px;
            height:600px;
            margin-top:20px;
           
        }
        /* Fading animation */
        .fade {
            animation-name: fade;
            animation-duration: 2s; /* Set the duration for each slide */
        }
        .footer{
            width:100%;
            margin-top:120px;
            background-color: #12012F;
            color:white;
            height:350px;
            
        }
        .footer .foo{
            display: flex;
            flex-direction: row;
            width: 100%;
            height: 280px;
            margin-left:50px;

            
        }
        .footer .foo .foo1
        {
            width:30%;
            margin-top:60px;
            justify-content:center;
            align-items:center;
        }
        .footer .foo .foo2
        {
            width:40%;
            margin-top:60px;
            justify-content:center;
        }
        .footer .foo .foo3
        {
            width:30%;
            margin-top:60px;
        }
        .horizontal_line {
            background-color: gray;
            width: 100%;
            height: 0.2px;
            
            
            }
        </style>
</head>
<body>
<header class="header">
    <nav class="nav-items">
      <a href="{{url('/')}}">Home</a>
      <a href="{{url('/ab')}}">About</a>
      <a href="#" onclick="scrollToBottom()">Contact</a>
      <a href="{{route('login')}}">Login</a>
    </nav>
  </header>
  <main>
        <div class="intro">
            <div class="part1">
                <img src="image/1.png" alt="image" />
                <h1>IMS of Department of Chemistry,<br>University of Jaffna<br><p>Management system specific for laboratories</p>
            </h1>
                
            </div>
            <div class="part2">
                <div class="slideshow-container">
                    <!-- Slide 1 -->
                    <div class="mySlides fade">
                        <img src="image/image12.jpeg" alt="Slide 1">
                    </div>
                    <div class="mySlides fade">
                        <img src="image/image10.jpeg" alt="Slide 2">
                    </div>
                    <!-- Slide 2 -->
                    
                    <div class="mySlides fade">
                        <img src="image/image9.jpeg" alt="Slide 3">
                    </div>
                    <!-- Slide 3 -->
                    <div class="mySlides fade">
                        <img src="image/image11.jpeg" alt="Slide 4">
                    </div>
                    <!-- Slide 4 -->
                    <div class="mySlides fade">
                        <img src="image/image8.jpg" alt="Slide 5">
                    </div>
                </div>
            </div> 
        </div>
    </main>
    <script>
            let slideIndex = 0;

        function showSlides() {
            const slides = document.getElementsByClassName("mySlides");
            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1;
            }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 2000); // Change slide every 2 seconds
        }
        function scrollToBottom() {
            window.scrollTo({
                top: document.body.scrollHeight,
                behavior: 'smooth'
            });
        }
        showSlides(); // Start the slideshow

        

    </script>
    <footer class="footer">
        <div class="foo"> 
            <div class="foo1">
                <p style="color:#C5BDBD;">CONTACT US</p><p> +94 021 221 8193</p>
            </div>
            <div class="foo2">
            <p style="color:#C5BDBD;">ADDRESS </p><b> SRILANKA </b><br><p>Head, Department of Chemistry,<br>Faculty of Science,University of<br> Jaffna,Jaffna<br></p><p style="color:#C5BDBD;">imschemistry@univ.jfn.ac.lk</p>
            </div>
            <div class="foo3">
            <p style="color:#C5BDBD;">FOLLOW </p> <b>ON UNIVERSITY SITE</b><p>University of Jaffna<br>Department of Chemistry</p>
             
            <a href="#" class="fa fa-facebook" style="text-decoration:none; color:#C5BDBD; font-size:20px; margin-left:10px; margin-right:10px;"></a> 
            <a href="#" class="fa fa-globe" style="text-decoration:none; color:#C5BDBD; font-size:20px; margin-left:10px; margin-right:10px;"></a> 
            <a href="#" class="fa fa-linkedin" style="text-decoration:none; color:#C5BDBD; font-size:20px; margin-left:10px; margin-right:10px;"></a> 

        
            </div>
            
        </div>
        <div class="horizontal_line"></div><br>
        <p style="color:gray; text-align:center; font-size:12px;">Copyright © UOJ 2023 All right Reserved</p>       
    </footer>
</body>