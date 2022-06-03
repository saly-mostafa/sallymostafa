
 <?php    
if($_POST){

$username = $_POST['username'];
$interset1 = $_POST['loanamount'];
$years = $_POST['loanyears'] ;

if($years <= 3){
    $interset_rate_per_year = ($interset1 * 10 )/100 ;
}else{
    $interset_rate_per_year = ($interset1 * 15 )/100 ;
}

$total=  $interset_rate_per_year * $years;
$loanafterinterset =  $interset1 + $total ;
$monthsinyear = $years * 12 ;
$monthly = $total / $monthsinyear ;
 
}
?>

<!doctype html>
<html lang="en">

<head>
    <title>BANK</title>
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
                    BANK
                </h2>
            </div>
            <div class="col-4 offset-4  mt-5 bg-info">
                <form action="" method="POST" >
                    <div class="form-group">
                        <label for="username " >User Namer</label>
                        <input type="text" name="username" id="username" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="loanamount">Loan Amount</label>
                        <input type="number" name="loanamount" id="loanamount" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="loanyears">Loan Years</label>
                        <input type="number" name="loanyears" id="loanyears" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <button class="col-12 btn btn-outline-info bg-warning rounded btn-sm"> CALCULATE </button><br><br>
                </form>
            </div>
</div>
</div>
            

<?php if($_POST) {?>
<table class="table col-8 offset-2 table-success table-striped">
<thead>
<tr>
<th scope="col">user name</th>
<th scope="col">interset rate</th>
<th scope="col">loan after interset</th>
<th scope="col">monthly</th>

</tr>
</thead>
<tbody>
<tr> 

<td> <?= $username ?? "" ?> </td>
<td><?= $interset_rate_per_year ?? ""?> </td>
<td ><?= $total ?? "" ?> </td>
<td> <?= $monthly ?? "" ?></td>
</tr>

</tbody>
</table>
<?php
}
?>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="//code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  

    </body>

</html>