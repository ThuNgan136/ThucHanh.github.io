<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<fieldset>
    <legend>Lab5_4_2<legend>
    <form action="lab5_4_2.php" method="get">
    Nhập tên sản phầm cần tìm :<input type="text" name="ten" ><br>
    Cách tìm:<input type="radio" name="ct" value="Gan_dung">Gần đúng
		  <input type="radio" name="ct" value="Chinh_xac">Chính xác<br>
    Loại sản phẩm:<br>
        <input type="checkbox" name="loai[]" value="1">Loại 1<br>
		<input type="checkbox" name="loai[]" value="2">Loại 2<br>
		<input type="checkbox" name="loai[]" value="3">Loại 3<br>
        <input type="checkbox" name="loai[]" value="4">Tất cả<br>
    <input type="submit" value="submit" name="submit">
</fieldset>
</body>
</html>
