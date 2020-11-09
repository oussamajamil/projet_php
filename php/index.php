<?php
require_once('../php/connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../css/style.css">

    <title>Document</title>
</head>
<body>

    <form action="" method="post">
    <div class="container">
        <div class="row justify-content-center bg-dark mt-1">
           <h1 style="color:white" class="shadow"><i class="fas fa-book-reader">&nbsp;&nbsp;</i>Bibliotheque</h1> 
        </div>
        <div class="row mt-4">
            <?php inputetext("ID","fas fa-book","id","id");?>
        </div>

        <div class="row mt-4">
        <?php inputetext("NOM_livre","fat fa-book-user","Nom_Livre","nom");?>
        </div>

<div class="row mt-4">
    <div class="col-sm-6">
    <?php inputetext("Auteur","fat fa-user-alt","auteur","auteur");?>
    </div>
    <div class="col-sm-6">
    <?php inputetext("Prix","fat fa-book-user","prix","prix");?>
    </div>
</div>
<div class="row mt-4 btn">
    <?php  buttonAPP("add","add","btn btn-success ml-4","add book","<i class='fas fa-plus'></i>");?>
    <?php  buttonAPP("DELETE","delete","btn btn-warning ml-4","delete book ","<i class='fas fa-trash-alt'></i>");?>
    <?php  buttonAPP("update","update","btn btn-primary ml-4","updat book","<i class='fas fa-edit'></i>");?>
    <?php  buttonAPP("deletes all","all","btn btn-danger ml-4","delete all","<i class='fas fa-ban'></i>");?>
</div>
</form>
<table class="table-bordered table-striped ">
    <thead>
        <tr>
            <th>id</th>
            <th>Nom_livre</th>
            <th>auteur</th>
            <th>money</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql="SELECT * FROM livre";
        $res=mysqli_query($conn,$sql);        
        ?>
        <?php
        while($row=mysqli_fetch_array($res)):;
        ?>
        <tr>
        <td><?= $row['id']; ?></td>
        <td><?=$row['nom_livre']; ?></td>
        <td><?= $row['auteur']; ?></td>
        <td><?= $row['prix']; ?></td>
        <td style="color: orange;"><i class='fas fa-edit'></i><td>

        </tr>
       <?php endwhile;?> 

        

        
    </tbody>
</table>
</body>
</html>