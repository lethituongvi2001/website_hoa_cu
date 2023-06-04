<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/style.css">

  <style>
    body {
      width: 100%;
      background-image: url("images/bg/1.jpg");
      background-repeat: no-repeat;
      background-size: cover;
    }

    * {
      box-sizing: border-box;
    }

    /* Add styles to the form container */

    .container {

      position: relative;
      font-weight: bold;
      top: 5%;
      margin: 40px;
      position: absolute;
      right: 32.5%;
      color: pink;
      max-width: 500px;
      padding: 20px;
      background-color: rgba(57, 104, 86, 0.7);
      border-radius: 10px;
    }

    /* Full-width input fields */
    input[type=text],
    input[type=password] {
      width: 100%;
      padding: 15px;
      margin: 10px 0;
      border: none;
      background: white;
    }

    .btn-1,
    .btn-2 {
      font-weight: bold;
      background-color: #8FB996;
      color: #01110A;
      border-radius: 20px;

      padding: 16px 20px;
      border: none;
      cursor: pointer;
      opacity: 0.9;

    }
  </style>
</head>

<body>

  <div class="container">

    <div class="row">
      <p><?php if (isset($tb)) echo $tb; ?></p>
      <h2 class="form-title" align="center" style="margin:-5px;">Đăng Kí</h2>
      <div class="column">
        <form method="POST" action="index.php?action=themkhachhang">

          <label for="fname">Họ Tên</label>
          <input type="text" id="name" name="txthoten" placeholder="Họ Tên..">

          <label for="lname">Email</label>
          <input type="text" id="email" name="txtemail" placeholder="Email..">

          <label for="lname">Số Điện Thoại</label>
          <input type="text" id="sodienthoai" name="txtsodienthoai" placeholder="Số Điện Thoại..">

          <label for="subject">Mật Khẩu</label>
          <input type="password" id="pass" name="txtmatkhau" placeholder="Mật Khẩu..">

          <label for="subject">Nhập Lại Mật Khẩu</label>
          <input type="password" id="re_pass" name="txtnlmatkhau" placeholder="Nhập Lại Mật Khẩu..">

          <div align="center">
            <input class="btn-1" type="submit" value="Đăng ký">
            <input class="btn-2" type="reset" value="Làm lại">
          </div>
          <br>
          <div align="center"><a style="color: #F7A072;" href="index.php"><span></span>Trang Chủ</a></li>
          </div>
        </form>
      </div>

    </div>
  </div>

</body>

</html>