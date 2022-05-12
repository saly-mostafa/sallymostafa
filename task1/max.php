<?php


if($_POST){
    $firstnum = $_POST['first_no'] ;
    $secondnum = $_POST['second_no'] ;
    $thirdnum = $_POST['third_no'] ;

 if($firstnum > $secondnum && $firstnum > $thirdnum &&  $secondnum < $thirdnum ){
    $message = $firstnum .= "  :IS MAX NUMBER"  .'   '  . $secondnum .='  :IS MIN NUMBER' ; 
  }
  elseif($firstnum > $secondnum && $firstnum > $thirdnum &&  $secondnum > $thirdnum ){
    $message = $firstnum .= "  :IS MAX NUMBER"  .'   '  . $thirdnum .='  :IS MIN NUMBER' ; 
  }
  elseif(
    $secondnum > $firstnum && $secondnum > $thirdnum &&  $firstnum < $thirdnum ){
        $message = $secondnum .= "  :IS MAX NUMBER"  .'   '  . $firstnum .='   :IS MIN NUMBER' ;
    }
    elseif(
        $secondnum > $firstnum && $secondnum > $thirdnum &&  $firstnum > $thirdnum ){
            $message = $secondnum .= "  :IS MAX NUMBER"  .'   '  . $thirdnum .='   :IS MIN NUMBER' ;
        }
    elseif(
            $thirdnum > $firstnum && $thirdnum > $secondnum &&  $secondnum < $firstnum ){
                $message = $thirdnum .= " :IS MAX NUMBER"  .'   '  . $secondnum .='   :IS MIN NUMBER' ;
            }
            elseif(
                $thirdnum > $firstnum && $thirdnum > $secondnum &&  $secondnum > $firstnum){
                    $message = $thirdnum .= "  :IS MAX NUMBER"  .'   '  . $firstnum .='   :IS MIN NUMBER' ;
                }
  }
?>

<!doctype html>
<html lang="en">

<head>
    <title>Max number</title>
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
                        <label for="first number">first number</label>
                        <input type="number" name="first_no" id="first number" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="second no">second number</label>
                        <input type="number" name="second_no" id="second no" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="third no">third number</label>
                        <input type="number" name="third_no" id="third no" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <button class="col-12 btn btn-outline-info rounded btn-sm"> Get  The Max. </button>
                    <?php
                     if(isset ( $message ) ){
                     echo $message;
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

