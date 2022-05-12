<!DOCTYPE html>
<div id="header"></div>
    <meta charset="UTF-8">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
     @media print { 
            .visible-print {
                display: inherit !important;
            }

            .hidden-print {
                display: none !important;
            }
        }
/*    body {
        overflow: hidden;
    }*/

    
    h1{
         margin-left: 20px;
         margin-top: 0;
     }

     h2{
         margin-left: 20px;
         margin-top: 0;
     }

     .page-header{
         margin: 0px;
     }

     .grupochecks{
         margin-left: 50px;
         margin-top: 20px;
         margin-bottom: 20px;
     }

     .help-block{
        padding: 4px;
     }

 </style>
 <?php

include("config.php");
   $error = $password = '';
   error_reporting(E_ERROR | E_WARNING | E_PARSE);
  
   session_start();
   
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
$pswUser = md5($_POST["password"]);



      $myusername = mysqli_real_escape_string($link,$_POST['username']);
      $mypassword = mysqli_real_escape_string($link,$_POST['password']); 
      $mypassword = md5($mypassword);


      $sql = "SELECT id FROM usuarios WHERE username = '$myusername' and passcode = '$mypassword'";
      $result = mysqli_query($link,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      $error = "";
    
      if($count == 1) {
         $_SESSION['login_user']="myusername";
         $_SESSION['login_user'] = $myusername;

                header("location: listadoOF.php");
              
              }
      
      else{
         $error = "Tu nombre de usuario o contraseña son invalidos";
      }
   }
 
   
?>
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="imagenes/logo.png" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="dist/styles.css" rel="stylesheet" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
<!--   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
 -->  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>


</head>
<body>
<div class="d-flex" id="wrapper" style="max-height:1000px">
      
            <!-- Page content wrapper-->
            <div id="page-content-wrapper" >
                <!-- Top navigation-->
               
                <!-- Page content-->
                <div class="container-fluid">
                    

  <div class="container">

<div class="wrapper fadeInDown">
<div id="formContent">


    <div class="fadeIn first">
      <img src="imagenes/logo.png" id="icon" alt="User Icon" style="margin-top:15px;margin-bottom:15px;" />
    </div>
    <form action ="" method = "post">
    <div class="form-row" style="margin-left:100px">
        <div style="max-width: 250px;" >
      <input type="text" name = "username"  name="login" class="form-control" placeholder="Usuario">
      </div>
    </div>
    <div class="form-row" style="margin-left:100px">
        <div style="max-width: 250px;" >
      <input type="password" name = "password"  name="login" class="form-control" placeholder="Contraseña">
      </div>
    </div>
    <div class="form-row">
      <input type="submit" class="btn btn-primary" value="Aceptar">
    </div> 
     <?php echo $error ?>
     <div> 

<p style = "font-size:11px; color:#cc0000; margin-top:10px">
</p> 

</div>

</div>
</div>

    </form>

  </div>

                </div>
            </div>
</div>
             <!-- Bootstrap core JS-->
             <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="dist/scripts.js"></script>
</body>
<style type="text/css">
         .container{
        max-width: 100%;
        
     }
     .fc-basic-view .fc-body .fc-row {
    min-height: 10em; /* ensure that all rows are at least this tall */
}

.form-control{
    font-size: 20px;
}
.form-row{
    margin-bottom: 10px;
}
* {
  box-sizing: border-box;
}

a {
  color: #92badd;
  display:inline-block;
  text-decoration: none;
  font-weight: 400;
}

h2 {
  text-align: center;
  font-size: 16px;
  font-weight: 600;
  text-transform: uppercase;
  display:inline-block;
  margin: 40px 8px 10px 8px; 
  color: #cccccc;

}



.wrapper {
      
  background-image: url("imagenes/fondo2.png");
  background-repeat: no-repeat;
  /* background-size: 90%; */
  display: flex;
  align-items: center;
  flex-direction: column; 
  justify-content: center;
  width: 100%;
  height: 915px;
  margin-top: 5px;
 
}

#formContent {
  -webkit-border-radius: 10px 10px 10px 10px;
  border-radius: 10px 10px 10px 10px;
  background: #fff;
  padding: 30px;    
  width: 90%;
  max-width: 450px;
  min-height: 250px;
  position: relative;
  padding: 0px;
  -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  text-align: center;
  border: 1px solid rgba(180, 180, 167, .6);
  margin-top: -200px;
}
::-webkit-input-placeholder {
   text-align: center;
}

:-moz-placeholder { /* Firefox 18- */
   text-align: center;  
}

::-moz-placeholder {  /* Firefox 19+ */
   text-align: center;  
}

:-ms-input-placeholder {  
   text-align: center; 
}
</style>
</html>

