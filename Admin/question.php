<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    require_once("header.php");
    if($_SESSION["role"] != "Admin"){
        header("location:../Registeration/login.php");
    }
    ?>
<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-md-12">
                        <div class="bg-secondary rounded h-100 p-4">
                <form action="" method="post">
                  <label class="form-label" for="form3Example1m">Question</label>
                      <input type="text" id="form3Example1m" class="form-control text-white "  name="ques" required/>
                  <br>
                      <label class="form-label" for="form3Example1n">Answer</label>
                      <br>

                     <textarea name="ans" class="form-control  text-white "></textarea>
                <div class="d-flex justify-content-end pt-3">
                  <button type="submit" class="btn btn-Primary btn-lg ms-2" name="btn">Add</button>
                </div>
                </form>
</div>
    
<?php
if(isset($_POST["btn"])){
    $ques = $_POST["ques"];
    $ans = $_POST["ans"];
   
    $query1 = "INSERT INTO `questions`(`Question`, `Answer`) VALUES ('$ques','$ans')";
    $run = mysqli_query($cnct,$query1);
    if($run){
  echo " <script>
    alert('Successfully added');
    window.location.href = 'question.php';
    </script>";
 }
 
else{
    echo " <script>
    alert('Not added');
    window.location.href = 'question.php';
    </script>";
}
}



?>


<?php
    require_once("footer.php");
    ?>
</body>
</html>