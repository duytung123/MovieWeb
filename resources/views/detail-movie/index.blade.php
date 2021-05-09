<!DOCTYPE html>
<html lang="en">

<head>
	     <base href="{{asset('')}}">
       <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Flix 18++
    </title>
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap"
        rel="stylesheet">
    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" />
    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- APP CSS -->
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/details.css">
</head>

<body class="body2">
    <div class="nav-wrapper">
        <div class="container">
            <div class="nav">
                <a href="trangchu" class="logo">
                    <i class='bx bx-movie-play bx-tada main-color'></i>Fl<span class="main-color">i</span>x<sup>18<sup>+</sup></sup>
                    <!-- <p>a<sup>2</sup></p> -->
                </a>
                <ul class="nav-menu" id="nav-menu">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Genre</a></li>
                    <li><a href="#">Movies</a></li>
                    <li><a href="#">Series</a></li>
                    <li><a href="#">About</a></li>
                    <li>
                        <a href="#" class="btn btn-hover">
                            <span>Sign in</span>
                        </a>
                    </li>
                </ul>
                <!-- MOBILE MENU TOGGLE -->
                <div class="hamburger-menu" id="hamburger-menu">
                    <div class="hamburger"></div>
                </div>
            </div>
        </div>
    </div>
			<hr style="    color: white !important;
    margin: 0;
    border: 1px solid;" class="hr">

 
    	<div class="nav1">
    		<nav aria-label="breadcrumb">
				  <ol style="background-color: black" class="breadcrumb">
				    <li class="breadcrumb-item"><a href="">Home</a></li>
				    <li class="breadcrumb-item"><a href="">Library</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Data</li>
				  </ol>
			</nav>
    	</div>
    
	<div class="content">
        <div class="video-play">
        <video id="player" controls width="100%" height="300px">
        <source src="{{$filmId->id_film}}" type="video/mp4">
        </video>
       {{--  <div class="trailer">
            <div>trailer o day</div>
        </div> --}}

        <div class="comment">
            <span>Binh luận về phim</span>
            <div class="comment-content">
                <img class="img-comment" src="./images/black-banner.png" alt="">
                <input class="input-comment" placeholder="nhap noi dung binh luan o day" type="text">
                <hr>
            <div class="comment-orther">
                 <img class="img-comment" src="./images/black-banner.png" alt="">
                 <div class="cc">
             <span>tùng</span> 
              <p>lại 1 câu chuyện dài từ việc giết chó của kẻ ko còn gì để mất :))</p>
                </div>


            </div>

            </div>
      

        </div>
        </div>
     
			<div class="content-mobile">
				<span>{{$filmId->name}}</span>
                <p>Ngày ra rạp: {{$filmId->day_theaters}}</p>
                <p>Chất lượng : {{$filmId->quality}}</p>
                <p>Ngôn ngữ : {{$filmId->language}}</p>
                <p>Nội dung phim : {{$filmId->description}}</p>
			</div>
            
    
    </div>
   
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- OWL CAROUSEL -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous"></script>
    <!-- APP SCRIPT -->
    <script src="js/app.js"></script>

</body>




</html>