<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
crossorigin="anonymous"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
crossorigin="anonymous"></script> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
<script>
    
    function revealstop1() {
      var revealstop1 = document.querySelectorAll(".revealstop1");
    
      for (var i = 0; i < revealstop1.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = revealstop1[i].getBoundingClientRect().top;
        var elementVisible = 150;
    
        if (elementTop < windowHeight - elementVisible) {
            revealstop1[i].classList.add("active");
        } else {
            revealstop1[i].classList.remove("active");
        }
      }
    }
    
    window.addEventListener("scroll", revealstop1);
    
       
    function revealsleft() {
      var revealsleft = document.querySelectorAll(".revealsleft");
    
      for (var i = 0; i < revealsleft.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = revealsleft[i].getBoundingClientRect().top;
        var elementVisible = 150;
    
        if (elementTop < windowHeight - elementVisible) {
            revealsleft[i].classList.add("active");
        } else {
            revealsleft[i].classList.remove("active");
        }
      }
    }
    
    window.addEventListener("scroll", revealsleft);
    
    
      
    function revealsright() {
      var revealsright = document.querySelectorAll(".revealsright");
    
      for (var i = 0; i < revealsright.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = revealsright[i].getBoundingClientRect().top;
        var elementVisible = 150;
    
        if (elementTop < windowHeight - elementVisible) {
            revealsright[i].classList.add("active");
        } else {
            revealsright[i].classList.remove("active");
        }
      }
    }
    
    window.addEventListener("scroll", revealsright);
    </script>



<body>

    
        <div id="header" class="bg-">

            <div class="logo">
                <section>
                    <div class="text-center">
                        <h2 class=" pt-3" style="color: #0d6efd;"><u>AssignmentHelp</u></h2>
                    </div>
                </section>
            </div>
            <div class="menu">

               <ul class="text-warning">
                <li>
                   <a href="index.php"> Home</a>
                </li>
                <li>
                   <a href="sample.php"> Sample</a>
                </li>
                <li>Course</li>
                <li>How its works</li>
                <li>Contact US</li>
                <li>More</li>
                <li>Login</li><div class="container"></div>
               </ul>
            </div>
            
        </div>