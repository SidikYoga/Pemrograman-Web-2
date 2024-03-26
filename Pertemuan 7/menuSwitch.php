<?php  
       
       $nilai1 = 0;
       $nilai2 = 0;
       $operator = "";
       $hasil = 0;

        if(isset($_POST["submit"])){  
             $nilai1    = $_POST['nilai1'];
             $nilai2 	= $_POST['nilai2'];
             $operator	= $_POST['operator'];

             switch ($operator){
                case '+':
                    $hasil = $nilai1 + $nilai2;   
                break;
                case '-':
                    $hasil = $nilai1 - $nilai2;
                break;
                case '*':
                    $hasil = $nilai1 * $nilai2;
                break;
                case '/':
                    $hasil = $nilai1 / $nilai2;
                break;
             }
          }
       
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Switch Case</title>
    <style>
        label{
            margin-right: 125px;
            font-size: 30px ;
            color: red;

        }
    </style>
</head>
<body>
    <center><h3>MENU SWITCH CASE</h3></center>
<fieldset>
    <legend>Operator</legend>
    <form action="" method="post" autocomplete="off">
        <label>Nilai I</label> <label>Nilai II</label><br>
        <input type="text" name="nilai1">
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="text" name="nilai2">
        <input type="submit" name="submit" value="Hitung">
    </form>     
</fieldset>
<fieldset>
    <legend>Hasil Operator</legend>
    <?php echo "$nilai1 $operator $nilai2 = $hasil "?>
</fieldset>
</body>
</html