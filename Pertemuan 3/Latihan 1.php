<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan soal 1</title>
    <style>
        label{
            margin-right: 125px;
            font-size: 30px ;
            color: red;

        }
    </style>
</head>
<body>
<form action="output 2.php" method="post" autocomplete="off">
    <label>Nilai I</label> <label>Nilai II</label><br>
	<input type="text" name="nilai1">
    <select name="operator">
		<option value="+">+</option>
		<option value="-">-</option>
		<option value="*">*</option>
		<option value="/">/</option>
	</select>
	<input type="text" name="nilai2">
	<input type="submit" name="hitung" value="hitung">
</form>     

</body>
</html