<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    @media screen and (max-width: 800px) {
  .left, .main, .right {
    width: 100%; /* The width is 100%, when the viewport is 800px or smaller */
  }
  } 


html,body
{

    width: 100%;
    height: 100%;
    margin: 0px;
    padding: 0px;
    overflow-x: hidden; 
}



    .carousel-caption {
    position: absolute;
    top:290px;
    left:0;
    width:100%;
    text-align:left;
    transform: translateX(-15%);
    }

    .carousel-inner{
        max-height:800px;
    }

    .carousel-inner img{
        max-height:800px;
    }

    @media only screen and (max-width:360px)
    {
        .carousel-inner{
            max-height:500px;
        }

        .carousel-item img{
            max-height:500px;
        }
        .carousel-caption{
            text-align:center;
            transform: translateX(-15%);
            left:5%;
            position:absolute;
            max-width:100%;
            max-height:100%;
        }
    }

    #news a{
        color:#9d0000;
        text-decoration:none;

    }







  </style>


  <title>CSIT DEPARTMENT</title>
  <link rel="icon" href="./Images/cvr-logo.jpg" type="image/x-icon">
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>


  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link href="styles.css" rel="stylesheet">
    

</head>
<body>

    <header style="margin-bottom:75px">
  <nav class="navbar fixed-top navbar-expand-lg bg-secondary navbar-dark ">
    <div class="container-fluid" style="margin-left:10px;">
      <a class="navbar-brand" href="index.php">
        <img src="./logo.png" alt="Avatar Logo" style="width:250px;height:50px;" > 
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="collapsibleNavbar">
        <ul class="navbar-nav ms-auto order-0">
           <li class="nav-item active"> <a class="nav-link" href="index.php">Home </a> </li>
            <li class="nav-item "> <a class="nav-link" href="./About.html">About us </a> </li>
           <li class="nav-item"><a class="nav-link" href="faculty.php"> Faculty </a></li>
           <li class="nav-item"><a class="nav-link" href="infrastructure.html"> Infrastructure </a></li>
           <li class="nav-item"><a class="nav-link" href="placements.php"> Placements </a></li>
           <li class="nav-item dropdown">
              <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown">  Student Corner  </a>
               <ul class="dropdown-menu">
                 <li><a class="dropdown-item" href="Timetable.html"> Timetable</a></li>
                 <li><a class="dropdown-item" href="Resources.html"> E-Resources </a></li>
                 <li><a class="dropdown-item" href="student-club.html"> Student Clubs </a></li>
               </ul>
           </li>
           <li class="nav-item"><a class="nav-link" href="contact.html"> Contact us </a></li>
       </ul>
      
       </div>
    </div>
  </nav>
</header>

  <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="./Images/home2.jpg" class="img-fluid d-block vh-100 vw-100 object-cover" alt="slide 1" >
        <div class="carousel-caption "  >



            <h3 >Computer  Science and Information Technology</h3>
            <div class="d-grid gap-2 d-md-block" >
                <center>
                <p><a class="btn btn-primary" href="About.html" role="button">Read More</a></p>
                </center>
                
            </div>



        </div>
      </div>
      <div class="carousel-item" data-bs-interval="10000">
        <img src="./Images/faculty.jpg" class="img-fluid  d-block vh-100 vw-100 object-cover" alt="..." >
        <div class="carousel-caption  ">
          <h3 >Faculty</h3>
            <div class="d-grid gap-2 d-md-block" >
                <center>
                <p><a class="btn btn-primary" href="./faculty.php" role="button">Read More</a></p>
                </center>
                
            </div>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="10000">
        <img src="./Images/Infrastructure3.jpg" class="d-block vh-100 vw-100 object-cover" alt="..." >
        <div class="carousel-caption ">
          <h3>Infrastructure</h3>
          <div class="d-grid gap-2 d-md-block" >
                <center>
                <p><a class="btn btn-primary" href="./infrastructure.html" role="button">Read More</a></p>
                </center>
                
            </div>
          
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <br>
  <div class="container-fluid" style="  border-radius: 25px;border: 2px solid black;margin-left:5px;margin-right:25px;width:98%">
    <h2 style="text-align:center">Overview</h2>
    <p style="text-align:justify">The Computer Science and Information Technology is one of the popular courses among the fields of Engineering. 
This B.Tech course provides the knowledge on programming languages, web development, computer networking, artificial intelligence, machine learning, Internet of things, data science, cyber security. 
This course mainly focuses on teaching the students the skills required for computer programmers in IT industry.
 Students acquire a variety of Computer Science and Information Technology concepts, and the course is organised around the engineering skills that a graduate engineer should have. 
The CSIT department also offers the assistance in developing promising projects.

The program is designed with an intent to educate the engineering students on the emerging areas of Artificial Intelligence (AI), Machine Learning (ML), Internet of Things (IoT) and Data Sciences (DS) by introducing them as core courses. The program also educates the students with the related courses like statistics, R Programming, Big Data Analytics & Platforms, etc. Further, each student can choose from various streams in their professional electives that includes cutting edge technologies like Cyber Security (CS), Blockchain technologies, NoSQL Databases, Social Media Analytics, Neural Networks & Fuzzy Systems, Deep Learning and many more.<a href="About.html">Read More</a>
</p>
  </div>
  <br>
  <br>

  <div class="container-fluid" style="margin-left:5px;margin-right:10px; width:97%">
    <h2 style="text-align:center">Message from HOD</h2>
    <br>
    <div class="row">
      <div class="col-sm-5">
      <img src="faculty1.jpg" class="img-fluid" style="max-width:100%" >
      </div>
      <div class="col-sm-7" style=" background-color:steelblue">
      <h3 style="text-align:center">Dr. Lakshmi H N</h3>
      <h4 style="text-align:center">Professor and Head</h4>
        <p style="text-align:justify">The impact of Computer Science and Information Technology on our everyday lives is significantly increasing as they are the fastest growing fields in engineering. 
Long before AICTE could identify them as emerging fields, the CVR College of Engineering has introduced a brand-new B.Tech programme in Computer Science and Information Technology in 2019. CVR is the first college to propose this course in Telangana. B.Tech in Computer Science and Information Technology is a trending career path that most students opt for. This new programme combined the best aspects of CSE and IT, giving CSIT graduates more chances than CSE and IT course graduates. The emerging fields that are a part of the new programme have been accepted by the AICTE and the national level committee as part of the National Perspective Plan for Engineering Education.The department was started in the year 2019 with 60-student intake (B.Tech) which now has been increased to 120. The department contains 8 lab units with the sophisticated open source tools required for B.Tech curriculum.  Students are urged to work on creative projects, and the department is very considerate and helps them in every way to finish them.</p>
      </div>
    </div>
  </div>
  
    <br>
    <br>

    <section id="news" class="">
    <div class="container" >
      <div class="row">
      <div class="col-md-5 newsTalk" style="background-color:ghostwhite">
    <header><h2 style="text-align:center">News and Announcements</h2></header>
      <div >
      <ul><li>
            <hr>

          <div class="Text-box"><a href="https://drive.google.com/file/d/1iz6xfQdJpptfDYSrPfvjua0RAaUsbqFG/view?usp=share_link" target="_blank" rel="noopener noreferrer">B.Tech III Year II Semester I Mid Examinations</a></div>
          </li><li>
            <hr>

            <div class="Text-box"><a href="https://drive.google.com/file/d/1d9wNIwMij6D9GiX91nlU4weAu02kElNx/view?usp=share_link" target="_blank" rel="noopener noreferrer">Rescheduled B.Tech II Year I Semester Regular (R18:2021 Batch) and II/I&I/II (R18, R15, R12) Supplementary Examinations</a></div>
          </li><li>
            <hr>

            <div class="Text-box"><a href="https://drive.google.com/file/d/1l-04PknTSheKkXut93fPsFvTrPzcA1y4/view?usp=share_link" target="_blank" rel="noopener noreferrer">B.Tech I Year I Semester II Mid Examinations</a></div>
          </li><li>
            <hr>

            <div class="Text-box"><a href="https://drive.google.com/file/d/1eJMCEvzeGTRSl-y0Rdl7LGlbxTtmOE39/view?usp=share_link" target="_blank" rel="noopener noreferrer">B.Tech IV Year II Semester I Mid Examinations</a></div>
          </li><li>
            <hr>

            <div class="Text-box"><a href="https://drive.google.com/file/d/1wt_AtzuKeKBcUg789gJColIf4zFC9SDv/view?usp=share_link" target="_blank" rel="noopener noreferrer">B.Tech I Year I Semester Regular (R22:2022 Batch) and Supplementary (R12/R15/R18: 2013-2021 Batches) Examinations Notification</a></div>
          </li>
      </ul>
    </div>
  </div>
  <div class="col-md-1">
  </div>
  <br>
  <div class="col-md-5 newsTalk" style="background-color:ghostwhite;border-radius:10px" >
    <header><h2 style="text-align:center">Events</h2></header>
      <div class="LatestBlog" >
      <ul><li>
            <hr>

            <div class="Text-box"><a href="https://drive.google.com/file/d/1B2oSlAUw5hCmlimsjxPzBpHHq9c6FRyG/view?usp=share_link" target="_blank" rel="noopener noreferrer"> 2 Days Workshop on Neural Network and Deep Learning Models</a></div>
          </li><li>
            <hr>

            <div class="Text-box"><a href="https://drive.google.com/file/d/15TaStcAG6kphSkbt0htKeTds68Td--xb/view?usp=share_link" target="_blank" rel="noopener noreferrer">2 Days of Workshop on Big Data Analytics Through Apache Hadoop, Spark & Tableau</a></div>
          </li><li>
            <hr>

            <div class="Text-box"><a href="https://drive.google.com/file/d/1svbGgJLMmiblSPcF0KcOdG1fqBfQPmbe/view?usp=share_link" target="_blank" rel="noopener noreferrer">3 Days Workshop on Cyber Security & Ethical Hacking</a></div>
          </li>
      </ul>
    </div>
  </div>
  </div>
    </div>
  </section>

  <br>



<footer id="footer">
  <div class="container-fluid" style="background-color: black;">

      <br>
      <center>
        <h3 style=" font-size:36px;color:white; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">       CVR COLLEGE OF ENGINEERING    </h3>
        <h5 style=" color:white; ">       COMPUTER SCIENCE AND INFORMATION TECHNOLOGY    </h5>
        </center>

      <div class="container">
      <center>
        <a href="https://www.facebook.com/cvr.coe" class="fa fa-facebook"></a>
        <a href="https://twitter.com/cvrcoenews?ref_src=twsrc%5Etfw" class="fa fa-twitter"></a>
        <a href="https://www.instagram.com/cvr_csit_studenthub/" class="fa fa-instagram"></a>
        <a href="https://www.linkedin.com/school/cvrcoe/" class="fa fa-linkedin"></a>
        </center>

    </div>

      <div class="credit" style="text-align:center; color:white">    Copyright ©2023:<span>CSIT Department</span>.All Rights Reserved </div>

    
  </div>
  </footer>


  

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>