<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<<?php
 $id = $_GET["id"];


$severname="localhost";
$passwork="";
$username="root";
$db="baikiemtra_php";

$conn= new mysqli($severname,$passwork,$username,$db);

$sql= "select * from danhba where id=$id";

$ds =$conn ->query($sql);
if($ds->num_rows>0){
    while($row=$ds->fetch_assoc()){
        $list=$row;
        break;
    }
}

?>
<body>
    <div class="container">
        <div class="row">
            <form action="updateNumber.php"method="post">
                <input value="<?php echo $list["id"]?>" type="hidden" name="id" >
                <input value="<?php echo $list["Name"] ?>" type="text" name="Name" placeholder="Name" style="border-radius: 10px;">
                <input value="<?php echo $list["PhoneNumber"] ?>" type="number" name="PhoneNumber" placeholder="PhoneNumber"style="border-radius: 10px;">
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>    




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>