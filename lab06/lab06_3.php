<?php
// Hàm lấy dữ liệu từ form POST
function postIndex($index, $value = "")
{
  // Nếu biến $_POST[$index] chưa tồn tại thì trả về giá trị mặc định $value
  if (!isset($_POST[$index])) return $value;
  // Nếu có thì trả về dữ liệu sau khi loại bỏ khoảng trắng thừa
  return trim($_POST[$index]);
}

// Hàm kiểm tra tính hợp lệ của username
function checkUserName($string)
{
  // Biểu thức chính quy cho phép: chữ cái a-z, A-Z, số 0-9, ký tự ., _ và -
  if (preg_match("/^[a-zA-Z0-9._-]*$/", $string))
    return true; // Nếu khớp thì hợp lệ
  return false;   // Nếu không khớp thì không hợp lệ
}

// Hàm kiểm tra định dạng email
function checkEmail($string)
{
  // Biểu thức chính quy kiểm tra email: phần trước @, tên miền, và phần mở rộng
  if (preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/", $string))
    return true;  // Email hợp lệ
  return false;  // Email không hợp lệ
}
function checkpass($string)
{
  $errors = [];
  // Độ dài tối thiểu 8 ký tự
  if (strlen($string) < 8) {
    $errors[] = "Mật khẩu phải có ít nhất 8 ký tự.";
  }
  // Có ít nhất 1 chữ hoa
  if (!preg_match('/[A-Z]/', $string)) {
    $errors[] = "Mật khẩu phải có ít nhất 1 chữ hoa.";
  }
  // Có ít nhất 1 chữ thường
  if (!preg_match('/[a-z]/', $string)) {
    $errors[] = "Mật khẩu phải có ít nhất 1 chữ thường.";
  }

  // Có ít nhất 1 chữ số
  if (!preg_match('/[0-9]/', $string)) {
    $errors[] = "Mật khẩu phải có ít nhất 1 chữ số.";
  }

  // Có ít nhất 1 ký tự đặc biệt
  if (!preg_match('/[\W]/', $string)) {
    $errors[] = "Mật khẩu phải có ít nhất 1 ký tự đặc biệt.";
  }
  if (empty($errors)) {
    echo "Mật khẩu hợp lệ!";
  } else {
    foreach ($errors as $a) {
      echo $a . "<br>";
    }
  }
  function ktrasdt($a)
  {
    if (!preg_match('/^(0)[0-9]{9,10}$/', $a) || strlen($a) != 10) {
      echo "vui long nhap sdt la so va du 10 so";
    }
    else
    {
      echo"sdt hop le";
    }
  }
  function ktraNS($ns)
  {
    if (!preg_match('/^(\d{2})\/(\d{2})\/(\d{4})$/', $ns)) {
      echo "Định dạng ngày sinh không hợp lệ.";
    } else {
      echo "Định dạng ngày sinh hợp lệ.";
    }
  }
}

// Lấy dữ liệu từ form
$sm = postIndex("submit");     // Nút submit
$username = postIndex("username"); // Username nhập vào
$email = postIndex("email");       // Email nhập vào
$pass = postIndex("password");                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
$sdt = postIndex("phone");
$date = postIndex("date");


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" ...>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Lab6_3</title>
  <style>
    /* Định dạng khung form */
    fieldset {
      width: 50%;
      margin: 100px auto;
    }

    .info {
      width: 600px;
      color: #006;
      background: #6FC;
      margin: 0 auto
    }

    #frm1 input {
      width: 300px
    }
  </style>
</head>

<body>
  <fieldset>
    <legend style="margin:0 auto">Đăng ký thông tin </legend>
    <!-- Form gửi dữ liệu bằng phương thức POST -->
    <form action="lab06_3.php" method="post" enctype="multipart/form-data" id='frm1'>
      <table align="center">
        <tr>
          <td width="88">UserName</td>
          <td width="317"><input type="text" name="username" value="<?php echo $username; ?>" />*</td>
        </tr>
        <tr>
          <td>Mật khẩu</td>
          <td><input type="text" name="password" />*</td>
        </tr>
        <tr>
          <td>Email</td>
          <td><input type="text" name="email" value="<?php echo $email; ?>" />*</td>
        </tr>
        <tr>
          <td>Ngày sinh</td>
          <td><input type="text" name="date" />*</td>
        </tr>
        <tr>
          <td>Điện thoại</td>
          <td><input type="text" name="phone" /></td>
        </tr>

        <tr>
          <td colspan="2" align="center">
            <input type="submit" value="submit" name="submit">
          </td>
        </tr>
      </table>
    </form>
  </fieldset>

  <?php
  // Nếu nút submit được nhấn
  if ($sm != "") {
  ?>
    <div class="info">Lỗi<br />
      <?php
      // Kiểm tra username hợp lệ
      if (checkUserName($username) == false) {
        echo "Username: Các ký tự được phép: a-z, A-Z, số 0-9, ký tự ., _ và - <br>";
      } else {
        echo"username hop le";
        echo "<br>";
      }
      // Kiểm tra email hợp lệ
      if (checkEmail($email) == false) {
        echo "Định dạng email sai!<br>";
        echo "<br>";
      } else {
        echo "mail hop le";
        echo "<br>";
      }
      checkpass($pass); 
      echo "<br>";
      ktrasdt($sdt); 
      echo "<br>";
      ktraNS($date); 
      echo "<br>";

      ?>

    </div>
  <?php
  }
  ?>
</body>

</html>