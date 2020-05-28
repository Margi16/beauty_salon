<?php
		
        include "/public_html/config_new.php";
        if(isset($_GET['services'])){
            switch($_GET['services'])
            {
                case "facial":
                    $services='facial';
                break;
                case "threading":
                    $services='threading';
                break;    
                case "bleach":
                    $services='bleach';
                break;
                
                case "make-up":
                    $services='make-up';
                break;
                case "hair":
                    $services='hair';
                break;
                case "waxing":
                    $services='waxing';
                break;
                case "manipedi":
                    $services='manipedi';
                break;
            case "bodymassage":
                $services='bodymassage';
            break;
                default:
                $services='facial';
            
            }
        }
        if(isset($_POST['btn_submit'])){
        
        $username = $_POST['name'];
        $myphno=$_POST['phno'];
        $myage=$_POST['age'];
        $mygender=$_POST['gender'];
        $myaddress=$_POST['address'];
        $appdate=$_POST['date'];
        $apptime=$_POST['Time'];
        $myservices=$_POST['services'];
        
    
    //insert data into the table db_login 20-02-2020
        
            $sql_insert = "INSERT INTO `db_login` ( `username`, `myphno`,`myage`,`mygender`,`myaddress`,`appdate`,`apptime`,`myservices`) VALUES ('$username', '$myphno','$myage','$mygender','$myaddress','$appdate','$apptime','$myservices')" ;
            echo $sql_insert;
            // exit;
                $retval = mysqli_query($con,$sql_insert);
             if(! $retval ) {
                   die('Could not enter data: ' . mysql_error());
                }
                
            
                
                echo "Entered data successfully\n";
                 echo "<meta http-equiv='refresh' content='0'>";
                
               }
        
        
        
        ?>
<html>
    <head>
        <title>Book Online</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta charset="utf-8">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link rel="stylesheet" type="text/css" href="book.css">
    </head>
    <body>
        <div class="header">
            <div class="header-left">
                <a href="companyinfo.html" class="logo" style="color: #ffffff;">The<span>Salon</span></a> 
            </div>
            <div class="header-right"> 
                <a href="contactus.html">Contact us</a>
                <a href="book.html">Book online</a>
                <div class="dropdown">
                    <button class="dropbtn">Services
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                       <a href="facial.html">Facial</a>
                       <a href="threading.html">Threading</a>
                       <a href="bleach.html">Bleach</a>
                       <a href="makeup.html">Make-up</a>
                       <a href="hair.html">Hair</a>
                       <a href="waxing.html">Waxing</a>
                       <a href="manipedi.html">Manicure & Pedicure</a>
                       <a href="bodymassage.html">Body Massage</a>
                    </div>
               </div>                                
                <a href="index.html">Home</a>
            </div>
        </div>    
        <h1 style="color: blanchedalmond;text-align: center;">Schedule your Salon appointment with us!</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" style="color: blanchedalmond;" id="book">
            <label for="name" style="color: blanchedalmond;font-size: 30px;">Name:</label>
            <input type="text" id="name" name="name" ><br><br>
            <label for="phno" style="color: blanchedalmond;font-size: 30px;">Phone number:</label>
            <input type="text" id="phno" name="phno" ><br><br>
            <label for="age" style="color: blanchedalmond;font-size: 30px;">Age:</label>
            <input type="number" id="age" name="age"><br><br>
            <label for="gender" style="color: blanchedalmond;font-size: 30px;">Gender:</label><br>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male" style="color: blanchedalmond;font-size: 30px;">Male</label><br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female" style="color: blanchedalmond;font-size: 30px;">Female</label><br><br>
            <label for="address" style="color: blanchedalmond;font-size: 30px;">Address:</label><br>
            <textarea rows="4" cols="50" name="address" form="book" style="font-size: 30px;"></textarea><br>
            
        <p style="color: blanchedalmond;font-size: 30px;" >Date: <input type="text" id="date" name="date" placeholder="YYYY/MM/DD"></p>
     
     <p style="color: blanchedalmond;font-size: 30px;">Time:
        <input list="Time" name="Time">
        <datalist id="Time">
          <option value="5 PM">
          <option value="5:30 PM">
          <option value="6 PM">
          <option value="6:30 PM">
          <option value="7 PM">
        </datalist>
    </p>  
    <p style="color: blanchedalmond;font-size: 30px;">Service you want(only one at a time):<br>
    <input type="checkbox" name="services" id="facial" value="facial" <?php $services="" ;if($services=='facial') {?> checked <?php }?>> Facial<br>
    <input type="checkbox" name="services" id="threading" value="threading"  <?php if($services=='threading') {?> checked <?php }?> > Threading<br>
    <input type="checkbox" name="services" id="bleach" value="bleach" <?php if($services=='bleach') {?> checked <?php }?>> Bleach<br>
    <input type="checkbox" name="services" id="make-up" value="make-up"  <?php if($services=='make-up') {?> checked <?php }?>> Make-up<br>
    <input type="checkbox" name="services" id="hair" value="hair"  <?php if($services=='hair') {?> checked <?php }?>> Hair <br>
    <input type="checkbox" name="services" id="waxing" value="waxing"  <?php if($services=='waxing') {?> checked <?php }?>> Waxing <br>
    <input type="checkbox" name="services" id="manipedi" value="manipedi"  <?php if($services=='manipedi') {?> checked <?php }?>> Manicure & Pedicure <br>
    <input type="checkbox" name="services" id="bodymassage" value="bodymassage"  <?php if($services=='bodymassage') {?> checked <?php }?>> Body Massage <br>
    </p> 
    <input type="submit" value="submit" style="box-sizing: border-box;background-color: blanchedalmond;color: darkblue;" name="btn_submit">
    </form> 

	
	
      
            <footer class="footer-distributed">
                <h1 class="footer_head">The<span>Salon</span></h1>
                <div class="footer-left">
         
                
         
                <p class="footer-links">
                <a href="index.html">Home</a>
            .
                <a href="book.html">Book Online</a>
            .
                <a href="contactus.html">Contact Us</a>
                </p>
         
                <p class="footer-company-name">The Salon,2020</p>
                </div>
         
                <div class="footer-center">
         
                <div>
                <i class="fa fa-map-marker"></i>
                <p><span>Vellore Institute of Technology</span> Vellore,Tamil Nadu,India</p>
                </div>
         
                <div>
                <i class="fa fa-phone"></i>
                <p>+91 6351786820</p>
                </div>
         
                <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:support@company.com">thesalon@gmail.com</a></p>
                </div>
         
                </div>
         
                <div class="footer-right">
         
                <p class="footer-company-about">
                <span>About the company</span>
                This is a beauty parlour with many facilities available.
                </p>
         
                <div class="footer-icons">
         
                    <a href="https://www.facebook.com/TheSalon-103129611373386/"><i class="fa fa-facebook"></i></a>
                    <a href="https://twitter.com/margi_the"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.linkedin.com/in/the-salon-9994701a7/"><i class="fa fa-linkedin"></i></a>
                    <a href="https://www.instagram.com/margi__the_salon/?hl=en"><i class="fa fa-instagram"></i></a>
         
                </div>
         
                </div>
         
                </footer>
    </body>
</html>