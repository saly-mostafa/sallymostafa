<?php 
// $num=$_post('ournumber');
$answers = [
  '0'=>'bad',
  '3'=>'good',
  '5'=>'very_good',
  '10'=>'excellent',
];
  $radio1 = $_POST['radio1'];
  $radio2 = $_POST['radio2'];
  $radio3 = $_POST['radio3'];
  $radio4 = $_POST['radio4'];
  $radio5 = $_POST['radio5'];
  $total = array_search($radio1,$answers) + array_search($radio2,$answers) + array_search($radio3,$answers) + array_search($radio4,$answers) + array_search($radio5,$answers)
?>



<!doctype html>
<html lang="en">

<head>
    <title>HOSPITAL REVIEW RESULT</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
<div class="container bg-info">
        <div class="row">
            <div class="col-12 text-center h2  mt-2  text-light">
                <h2>
                    THE RESULT
                </h2>
            </div>
            <div class="col-10   mt-5 bg-info">
                <form action="result.php" method="POST" >
                
    <table class="table col-8 offset-2 table-success table-striped">
  <thead>
    <tr>
      <th scope="col">Question</th>
      <th scope="col">Review</th>
      
    </tr>
  </thead>
  <tbody>
    <?php 
     
      
    ?>
  
    <tr>
      <th> 1- Are you satisfied with the level of cleanliness?</th>
      <td>  <?= $radio1 ?></td>
      
    </tr>
    <tr>
      <th>2- Are you satisfied with the service prices?</th>
      <td>  <?= $radio2 ?> </td>
      
    </tr>
    <tr>
      <th> 3- Are you satisfied with the nursing service?</th>
      <td>  <?= $radio3 ?> </td>
      
    </tr>
    <tr>
      <th> 4- Are you satisfied with the level of the doctor?</th>
      <td> <?= $radio4 ?> </td>
      
    </tr>
    <tr>
      <th>5- Are you satisfied with the calmness in the hospital ?</th>
      <td> <?= $radio5 ?> </td>
      
    </tr>
  </tbody>
</table>
<label class="col-8 offset-2 btn btn-outline-info bg-warning rounded btn-sm" name="total_review"> The Total Review : </lable>
</form>
</div>
        </div>
    </div>

    <?php
if($total=18){
      echo 'we will call you at '. $num .'.';
    }
    else{
      echo "thank you ." ;
    }

    ?>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>