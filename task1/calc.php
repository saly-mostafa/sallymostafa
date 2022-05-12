<?php

if($_POST) {
  $fnum = $_POST['first_no'] ;
  $snum = $_POST['second_no']  ;
  $calc = $_POST['calc'] ;
  // $message =' ' ;
  // switch ( $calc ){
  //   case "+" :
  //     $message = $fnum + $snum ;
  //     echo $message ;
  //     break;
  //     case "-" :
  //       $message = $fnum - $snum ;
  //       break;
  //       case "*" :
  //         $message = $fnum * $snum ;
  //         break;
  //         case "/" :
  //           $message = $fnum / $snum ;
  //           break;
            
  // }

if ($calc == "+"){
  $message =  $fnum + $snum ;
  // echo $message ;
}
else if ($calc == "-"){
  $message =  $fnum - $snum ;
  // echo $message;
}
else if ($calc == "*"){
  $message =  $fnum * $snum ;
  // echo $message;
}
else if ($calc == "/"){
  $message =  $fnum / $snum ;
  // echo $message;
}
}
?>

<!doctype html>
<html lang="en">
  <head>
    <title>CALCULATOR</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
        <div class="row">
            <div class="col-12 text-center h1  mt-2  text-primary">
                <h2>
                  My Calc
                </h2>
            </div>
            <div class="col-3 offset-4  mt-5">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="first number">first number</label>
                        <input type="number" name="first_no" id="first number" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>

                    <div class="form-group">
                        <label for="second no">second number</label>
                        <input type="number" name="second_no" id="second no" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <button class="col-2 btn btn-outline-info  rounded btn-sm" name="calc" > + </button>
                    
                    <button class="col-2 btn btn-outline-info  rounded btn-sm" name="calc" > _ </button>
                    
                    <button class="col-2 btn btn-outline-info  rounded btn-sm" name="calc" > * </button>
                    
                    <button class="col-2 btn btn-outline-info  rounded btn-sm" name="calc" > / </button>
                    
                   
                </form>
                <?php
                     if(isset ( $message ) ){
                     echo $message;
                     }
                     ?>
                
            </div>
        </div>
    </div>




      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
