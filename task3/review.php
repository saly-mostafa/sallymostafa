<?php 
session_start();
if($_POST){
  $_SESSION['num']=$_POST['yournumber'];
}
?>



<!doctype html>
<html lang="en">

<head>
    <title>HOSPITAL REVIEW</title>
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
                    YOUR REVIEW
                </h2>
            </div>
            <div class="col-10   mt-5 bg-info">
                <form action="result.php" method="POST" >
                
    <table class="table col-8 offset-2 table-success table-striped">
  <thead>
    <tr>
      <th scope="col">Question</th>
      <th scope="col">bad</th>
      <th scope="col">good</th>
      <th scope="col">very good</th>
      <th scope="col">exsellent</th>
    </tr>
  </thead>
  <tbody>
    <tr> 
      <th>1- Are you satisfied with the level of cleanliness?</th>
      <td> <input type="radio" name="radio1" value='bad'> </td>
      <td> <input type="radio" name="radio1" value ='good'></td>
      <td > <input type="radio" name="radio1" value ='very_good'></td>
      <td> <input type="radio" name="radio1" value ='excellent'></td>
    </tr>
    <tr>
      <th> 2- Are you satisfied with the service prices?</th>
      <td> <input type="radio" name="radio2" value='bad'> </td>
      <td> <input type="radio" name="radio2" value='good'></td>
      <td > <input type="radio" name="radio2"value='very_good'></td>
      <td> <input type="radio" name="radio2" value='excellent'></td>
    </tr>
    <tr>
      <th> 3- Are you satisfied with the nursing service?</th>
      <td> <input type="radio" name="radio3"  value='bad'> </td>
      <td> <input type="radio" name="radio3" value='good'></td>
      <td > <input type="radio" name="radio3" value='very_good'></td>
      <td> <input type="radio" name="radio3" value='excellent'></td>
    </tr>
    <tr>
      <th> 4- Are you satisfied with the level of the doctor?</th>
      <td> <input type="radio" name="radio4" value='bad'> </td>
      <td> <input type="radio" name="radio4" value='good'></td>
      <td > <input type="radio" name="radio4" value='very_good'></td>
      <td> <input type="radio" name="radio4" value='excellent'></td>
    </tr>
    <tr>
      <th> 5- Are you satisfied with the calmness in the hospital ?</th>
      <td> <input type="radio" name="radio5" value='bad'> </td>
      <td> <input type="radio" name="radio5" value='good'></td>
      <td > <input type="radio" name="radio5" value='very_good'></td>
      <td> <input type="radio" name="radio5" value='excellent'></td>
    </tr>
  </tbody>
</table>
<button class="col-8 offset-2 btn btn-outline-info bg-warning rounded btn-sm" name="result" > result </button>
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