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
                    Home
                </li>
                <li>
                    Sample
                </li>
                <li>Course</li>
                <li>How its works</li>
                <li>Contact US</li>
                <li>More</li>
                <li>Login</li><div class="container"></div>
               </ul>
            </div>
            
        </div>
        <div id="mid">
           
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <h3 style="padding-top:60px;
                            margin-bottom: 0.5rem;
                            font-weight: 500;
                            line-height: 1.2; color: #0d6efd;">Welcome AssignmentHelp</h3>
                            <p class=" text-warning ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam exercitationem assumenda facilis tempore sed dolorum, necessitatibus amet sunt dolores! Maiores pariatur dignissimos quis facere quae cupiditate, quaerat ipsa dolorem aliquam.</p>
                            <button class="btn text-light" style="background-color: #0d6efd;">Enqury</button>
                        </div>
                        <div class="col-lg-6"></div>
                    </div>
                
            </div>
        </div>
        <section>
            <h3 style="padding-top:60px;
            margin-bottom: 0.5rem;
            font-weight: 500;
            line-height: 1.2; color: #0d6efd; text-align: center;" class="revealstop1  mt-5">Our Team</h3>
            <p class="text-warning text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo laborum dolores provident adipisci quos ipsum odio animi consectetur maxime </p>
            <div class="jumbotron mt-5">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="card1">
                                
                            
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="card1"></div>
                        </div>
                        <div class="col-lg-2">
                            <div class="card1"></div>
                        </div>
                        <div class="col-lg-2">
                            <div class="card1"></div>
                        </div>
                        
                        <div class="col-lg-2">
                            <div class="card1"></div>
                        </div>
                        <div class="col-lg-2">
                            <div class="card1"></div>
                        </div>
                        
                    </div>
                </div>
            </div>


        </section>
    

        <div class="container mt-5">
            <div class="row mt-5">
                <div class="col-lg-6">
                    <img style="margin-top: 60px;" src="https://www.seekpng.com/png/detail/824-8247150_click-happy-customers-cartoon.png" height="300px" width="500px" alt="">
                </div>
                <div class="col-lg-6">
                    <h3 style="padding-top:90px;
                            margin-bottom: 0.5rem;
                            font-weight: 500;
                            line-height: 1.2; color: #0d6efd;" class="revealstop1 ">Clients</h3>
                             <p class=" text-warning revealsleft active ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam exercitationem assumenda facilis tempore sed dolorum, necessitatibus amet sunt dolores! Maiores pariatur dignissimos quis facere quae cupiditate, quaerat ipsa dolorem aliquam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, sed laborum eos nobis in illum, odio placeat temporibus deleniti, eaque excepturi nisi quaerat. Quas eveniet error in beatae labore tempore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum unde tempore consequuntur sapiente! Fuga veritatis quasi dicta molestias quam architecto rerum ut, in soluta nobis vel ullam corporis ducimus esse.</p>
                </div>
            </div>
        </div>


        <div class="container mt-5">
            <div class="row mt-5">
                <div class="col-lg-6">
                    <h3 style="padding-top:40px;
                    margin-bottom: 0.5rem;
                    font-weight: 500;
                    line-height: 1.2; color: #0d6efd; text-align: center;" class="revealstop1  ">Our Services</h3>
                    <div class="">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card11"></div>
                                </div>
                                <div class="col-lg-6 mt-5">
                                    <div class="card11"></div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6 ">
                                    <div class="card11"></div>
                                </div>
                                <div class="col-lg-6 mt-5">
                                    <div class="card11"></div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-lg-6">
                    <div class="col-lg-6">
                        <img style="margin-top: 60px;" src="https://www.seekpng.com/png/detail/824-8247150_click-happy-customers-cartoon.png" height="300px" width="500px" alt="">
                    </div>
                </div>
            </div>
        </div>

        

        
    
</body>
</html>