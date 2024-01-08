<!DOCTYPE html>
<html>
  <head>
    <style>
      body{
        background-image:url("Images/aero1.jpeg");
        background:cover;
        background-color: #ddd;
        overflow: hidden;
      }

.topnav {
  position:relative;
  padding:10px;
  overflow: hidden;
  background-color: rgba(0,0,0,0.60);
  width: 98%;
  border-radius:10px;
}
.topnav img {
  position:relative;
  z-index: 100;
  overflow: hidden;
  background-color: transperent ;
  width:80px;
  height:50px;
  padding: 0px;
  margin-left: 60px;
  align-items: center;

}
.topnav span:hover{
    color: #ffffff;
}
.topnav span{
    position: relative;
    color:rgb(232, 206, 12);
    font-size: 25px;
    margin-left: 0px;
}
.topnav a {
    float:right;
    display: block;
    color: #ffffff;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
    margin:0 25px;


}
.topnav a:hover {
    background-color: rgb(243, 225, 37);
    color: black;
    border-radius: 10px;
}
  
.topnav a.active {
    background-color: #ddd;
    color: black;
}
  
.topnav .icon {
    display: none;
}

      h1{
        position:fixed;
        margin-top:8%;
        color: rgb(232, 206, 12);
        margin-left:330px;
        text-align: center;
        font-size: 23px;
        font-family: 'Times New Roman', Times, serif;
        width:50%;
        height:55%;
        background-color:rgba(0,0,0,0.5);
        border-radius:15px;
      }
      p{
        color:white;
      }
      p:hover{
        color:rgb(232, 206, 12);
      }

 button{
      border-radius: 20px;
      border:1px solid #cf5f2e;
      background:#ff4b2b;
      color:rgb(255, 255, 255) ;
      font-size: 12px;
      font-weight: bold;
      padding: 12px 45px;
      letter-spacing: 1px;
      text-transform: uppercase;
      transition: transform 80ms ease-in;
      margin-top:10%;
      box-shadow: 0px 5px 10px 2px rgb(135, 131, 131) ;
      margin-left: 45%;
      }
      button:hover{
        color:white;
      }
      button:active{
        transform:scale(.95);
      }

      /*---------------Footer------------------*/
  
footer {
    text-align: center;
    margin-bottom: 0rem;
    padding-bottom: 20px;
    background-color: black;
    color: white;
    margin:37rem 0;
    height:80px;
    width:100%;
}
footer hr {
    margin: 2rem 0;
    text-align:center;
}


    </style>
  </head>

  <body>
<?php
     $servername= "localhost";
     $username= "root";
     $password = "";
     $db_name = "brand";
     
     $conn = new mysqli('localhost','root','','brand',);
     if($conn->connect_error){
       die('Connection Failed : '.$conn->connect_error);
     }

      $departure = mysqli_real_escape_string($conn, $_REQUEST['from']);
      $arrival = mysqli_real_escape_string($conn, $_REQUEST['to']);
	    $class = mysqli_real_escape_string($conn, $_REQUEST['class']);
      $D_Date = mysqli_real_escape_string($conn, $_REQUEST['D_Date']);
      $R_Date = mysqli_real_escape_string($conn, $_REQUEST['R_Date']);
      $triptype = mysqli_real_escape_string($conn, $_REQUEST['triptype']);
      $amount =  mysqli_real_escape_string($conn, $_REQUEST['amount']);
      $seats =  mysqli_real_escape_string($conn, $_REQUEST['seats']);
     

      $sql = "INSERT INTO airline (departure, arrival, class, D_Date, R_Date, triptype,amount,seats)
      VALUES ('$departure', '$arrival', '$class', '$D_Date', '$R_Date', '$triptype', '3000','$seats')";

echo'<div class="topnav" id="TopNavigationSection">
<img src="images/bt.png"><span>Brand Travels</span>
    <a href="javascript:void(0);" class="icon" onclick="TopNavToggle()"><i class="fa fa-bars"></i></a>
    <a href="../contact.html"><i class="fa fa-fw fa-phone"></i> Contact Us</a>
    <a href="../Home.html#sec-b919"><i class="fa fa-fw fa-info"></i> About Us</a>
    <a href="../Home.html"><i class="fa fa-fw fa-home"></i> Home</a>
 
</div>';
if ($conn->query($sql) === TRUE) {
  
  echo "<h1>You Have Successfully Booked Your Ticket<br>The Ticket will be sent to Email!<br><br><br><p>Thank You! for Booking from Brand Travels!<p>
  <p>Trainline means everyday savings of 35%<br>
  You all find all the latest train deals and discounts on Brand Travels & you can book with us from all around the India here.<br> 
  If you are looking for other ways to save money on rail travel, why not visit our Brand Travels guide.<p></h1>";
}

      $conn->close();
    ?>
    <footer>
     <hr/>&copy; 2023 Akash Hiremath | Abu Bakkar
     </footer>
  </body>
               
</html>