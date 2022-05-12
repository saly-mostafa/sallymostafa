<?php
if($_POST){
$subject1 = $_POST['first_subject'];
$subject2 = $_POST['second_subject'];
$subject3 = $_POST['third_subject'];
$subject4 = $_POST['fourth_subject'];
$subject5 = $_POST['fifth_subject'];

$degreesagual =  $subject1 +$subject2 + $subject3 + $subject4 + $subject5 ;

define('maxdgree',500);
$dgreeper = ( $degreesagual / 500) * 100 ;


}

?>

<!doctype html>
<html lang="en">
  <head>
    <title>STUDENT GRADE</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
        <div class="row">
            <div class="col-12 text-center h2  mt-2  text-primary">
                <h2>
                    Get the max. number 
                </h2>
            </div>
            <div class="col-4 offset-4  mt-5">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="firstsubject">PHYSICS</label>
                        <input type="number" name="first_subject" id="firstsubject" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="second subject">CHEMISTRY</label>
                        <input type="number" name="second_subject" id="second subject" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="third subject">BIOLOGY</label>
                        <input type="number" name="third_subject" id="third subject" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>

                    <div class="form-group">
                        <label for="fourth subject">MATHEMATICS</label>
                        <input type="number" name="fourth_subject" id="fourth subject" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="fifth subject">COPUTEER</label>
                        <input type="number" name="fifth_subject" id="fifth subject" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>

                    <button class="col-12 btn btn-outline-info rounded btn-sm"> Get  The GRADE </button><br><br>
                    <?php
                     if(isset ( $degreesagual ) ){
                     echo  "The  Student Total  Dgrees Is  : ". ' ' . $degreesagual ;
                     }
                     

                     if(isset ( $dgreeper ) ){
                      echo "The  Student persentage Is  : ". ' ' . $dgreeper . ' ' . "%" ;
                      }
                      
switch($dgreeper){
  case $dgreeper >= 90 :
    echo " Grade A" ;
    break;
    case $dgreeper >= 80:
      echo " Grade B" ;
      break;
      case $dgreeper >= 70:
        echo " Grade C" ;
        break;
        case $dgreeper >= 60:
          echo " Grade D" ;
          break;
          case $dgreeper >= 40:
            echo " Grade E" ;
            break;
            default :
              echo " Grade F" ;        
}

                     ?>
                </form>
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