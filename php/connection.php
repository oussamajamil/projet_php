<?php
$conn=new mysqli("localhost","root","","bibliotheque");

if(!$conn)
{
    echo 'probleme de connection'.mysqli_error($conn);
}


function inputetext($placholder,$font,$name,$id)
{
$ch="
<div class=\"input-group mb-3 justify-content-center\">
<div class=\"input-group-prepend\">
<span class=\"input-group-text bg-warning\"><i class='$font'></i></span>
</div>
<input type=\"text\" class=\"form-control\" placeholder='$placholder' name='$name' id='$id'/>
</div>";
  echo $ch;

}
function buttonAPP($name,$id,$class,$title,$icons)
{
  $btn="
  <button type=\"submit\" name='$name' id='$id' class='$class' title='$title'>$icons</button>";
  echo $btn;
}

if(isset($_POST['add']))
{
 $id_add=trim($_POST['id']);
 $Nom_livre=trim($_POST['Nom_Livre']);
 $auteur=trim($_POST['auteur']);
 $moneyd=trim($_POST['prix']);

   $sql1="INSERT INTO livre(nom_livre,auteur,prix)VALUES('$Nom_livre','$auteur','$moneyd')";
   $res=mysqli_query($conn,$sql1);
   if($res)
   {
    echo '<script>alert("bien ajouter");</script>';
   }
   else
   {
    echo '<script>alert("errer ajouter");</script>';
   }
 }

 if(isset($_POST['DELETE']))
 {
  $id_add=trim($_POST['id']);

  if(!empty($id_add))
  {
   $sql="DELETE FROM livre where id='$id_add'";
   $res=mysqli_query($conn,$sql);
   if($res)
   {
    echo '<script>alert("bien supprimer");</script>'; 
   }
   else
   {
     echo '<script>alert("erreur supprimer");</script>'; 
   }

  }
  else
  {
    echo "<script>alert('remplir id the book deleted!!!');</script>";
  }
 }

 if(isset($_POST['update']))
 {
  $id_add=trim($_POST['id']);
  $Nom_livre=trim($_POST['Nom_Livre']);
  $auteur=trim($_POST['auteur']);
  $moneyd=trim($_POST['prix']);
  if(!empty($id_add) && !empty($Nom_livre) && !empty($auteur) && !empty($moneyd))
  {
    $sql="UPDATE livre SET Nom_Livre='$Nom_livre' and auteur='$auteur' and prix='$moneyd' Where id='$id_add'";
    $res=mysqli_query($conn,$sql);
    if($res)
    {
     echo '<script>alert("bien modifier");</script>'; 
    }
    else
    {
      echo '<script>alert("erreur modification ");</script>'; 
    }
 
  }
 }

 if(isset($_POST['deletes']))
 {
   $sql="DELETE FROM livre'";
   $res=mysqli_query($conn,$sql);
   if($res)
   {
    echo '<script>alert("bien supprimer");</script>'; 
   }
   else
   {
     echo '<script>alert("erreur supprimer");</script>'; 
   }
 }

?> 
