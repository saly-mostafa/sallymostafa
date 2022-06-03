<?php 
$name='clintname';
$num='yournumber';
?>



<!doctype html>
<html lang="en">

<head>
    <title>HOSPITAL</title>
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
                    CLINT INFORMATION
                </h2>
            </div>
            <div class="col-4  offset-4 mt-5 ">
                <form action="review.php" method="POST" >
                    <div class="form-group">
                        <label for="username " >Clint Name</label>
                        <input type="text" name="clintname" id="clintname" class="form-control" placeholder="" aria-describedby="helpId">
                        <label for="number"> Your Number</label>
                        <input type="number" name="yournumber" id="yournumber" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <button class="col-3 btn btn-outline-info bg-light rounded btn-sm"> sign in </button><br><br>
                </form>
            </div>