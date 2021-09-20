<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ABCD BANKING</title>
</head>
<link rel="stylesheet" href="styling.css">
<link rel="stylesheet"  media="screen and (max-width:900px)" href="phone.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@500&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@500&family=Bree+Serif&display=swap" rel="stylesheet">

<body>
    <nav id="navbar">
        <div id="logo">
            <img src="money-3614661_1280.png" alt="ABCD BANK">
        </div>
        <ul>
            <li class="item"><a href="#home">Home</a></li>
            <li class="item"><a href="#services-container">Services</a></li>
            <li class="item"><a href="#contact">Contact Us</a></li>
        

        </ul>
    </nav>
    <section id="home">
        <h1 class="h-primary">Welcome to Online Banking</h1>
        <p>
            Lorem ipsum dolor sit amet  adipisicing elit. Voluptatum neque obcaecati consequuntur delectus corporis minima id, facilis facere earum. Sapie perspiciatis,  inventore adipisci consequatur quos itaque vero laboriosam nostrum.
        </p>
        <a href="viewusers.php"><button type="button" class="btn btn-secondary">Make Payments</button></a>
    </section>
    <section id="services-container">
        <h1 class="h-primary center">Our Services</h1>
            <div id="services">
                <div class="box">
                    <img src="empire-2983246_1920.jpg" alt="">
                    <h2 class="h-secondary center">Customers</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium animi, necessitatibus incidunt rerum numquam tenetur provident dolorum beatae reiciendis, ipsam recusandae molestiae unde harum asperiores obcaecati quo accusamus, est inventore deserunt placeat dignissimos minima?</p>
                    <a href="clients.php"><button type="button" class="btn btn-secondary">Customers</button></a>
                    
                </div>
                <div class="box">
                    <img src="blockchain-3019120_1920.png" alt="">
                    <h2 class="h-secondary center">Online Transaction</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium animi, necessitatibus incidunt rerum numquam tenetur provident dolorum beatae reiciendis, ipsam recusandae molestiae unde harum asperiores obcaecati quo accusamus, est inventore deserunt placeat dignissimos minima?</p>
                    <a href="viewusers.php"><button type="button" class="btn btn-secondary">Transfer amount</button></a>
                    
                </div>
                <div class="box">
                    <img src="money-1885540_1920.jpg" alt="">
                    <h2 class="h-secondary center">History</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium animi, necessitatibus incidunt rerum numquam tenetur provident dolorum beatae reiciendis, ipsam recusandae molestiae unde harum asperiores obcaecati quo accusamus, est inventore deserunt placeat dignissimos minima?</p>
                    <a href="history.php"><button type="button" class="btn btn-secondary">View transaction</button></a>
                    
                </div>
            </div>

    </section>
    <section id="contact">
        <h1 class="h-primary center">Contact Us</h1>
        <div id="contact-box">
            <form action="index.php" method="POST">
                <div class="form-group">
                    <label for="Name">Name:</label>
                    <input type="text" name="Name" id="Name" placeholder="Enter Your Name:">
                </div>
                <div class="form-group">
                    <label for="Email">Email id:</label>
                    <input type="Email" name="Email" id="Email" placeholder="Enter Your Email Id:">
                </div>
                <div class="form-group">
                    <label for="Phone">Phone number:</label>
                    <input type="Phone" name="Phone" id="Phone" placeholder="Enter Your Phone Number:">
                </div>
                <div class="form-group">
                    <label for="Message">Message:</label>
                    <textarea name="Message" id="Message" cols="30" rows="10" placeholder="Enter your Query here"></textarea>
                </div>
                <input type="submit" class="btn">

            </form>
        </div>
        
    </section>
    <footer>
        <div class="center">
            copyright &copy;www.myOnlinebank.com.All rights resereved
        </div>
    </footer>
    
    
</body>
</html>

<!-- <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ABCD Banking System</title>
    <script src="https://use.fontawesome.com/f06226ee8d.js"></script>
    <style media="screen">
      *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }
      .main{
        height: 93vh;
        background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQOnPYS5WTV7iSMrd3dv1kgxI8b9UCiJeI4Vg&usqp=CAU);
        margin: 0;
        margin-top: -70px;
        background-repeat: no-repeat;
        background-size: cover;
      }
      .heading{
        display: flex;
        justify-content: center;
      }
      .head{
        font-size: 50px;
        margin-top: 70px;
      }
      .cont{
        margin-top: 40px;
      }
      .icon{
        margin-top: 50px;
      }
      .fa-university{
        padding: 3px 3px;
      }
      .one{
        display:flex;
        justify-content:space-around;
        align-items: center;
        margin-top: 40px;
      }
      footer{
        background: black;
        color: white;
        padding: 9px 20px;
      }
    .center{
      text-align: center;
      text-decoration: none;
      display:flex;
      justify-content:center;
      align-items:center;
      }
    </style>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>

  <body>

    <div class="outer"> -->
      <!-- navbar -->
      <!-- <nav class="navbar navbar-expand-sm bg-secondary navbar-dark justify-content-between">
        <a class="navbar-brand" href="#"><i class="fa fa-university fa-lg"></i>ABCD BANK</a>
        <ul class="navbar-nav navbar-right ">

          <li class="nav-item active">
            <a class="nav-link" href="index.php">HOME</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="viewusers.php">TRANSFER AMOUNT</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="history.php">TRANSACTION HISTORY</a>
          </li>
        </ul>
      </nav>

      <div class="main"> -->

        <!-- <div class="heading">
          <h2 class="head">WELCOME TO ABCD BANK</h2>
        </div>


        <div class="one">
          <div class="t1 ">
            <h1><i class="fa fa-rupee fa-5x icon"></i></h1>
            <a href="viewusers.php"><button type="button" class="btn btn-secondary">Transfer amount</button></a>
          </div>


          <div class="t1">
            <h1><i class="fa fa-history fa-5x icon"></i></h1>
            <a href="history.php"><button type="button" class="btn btn-secondary">View transaction</button></a>
          </div>
        </div>

      </div>
    </div> -->

  <!-- <footer>
    <div class="center">
      copyright &copy;www.myOnlinebank.com.All rights resereved
    </div>
  </footer>


  </body>
</html> -->

