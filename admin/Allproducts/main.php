<?php include("../view/top.php");
require_once("../../model/database.php");
require_once("../../model/mathang.php");
require_once("../../model/donhang.php");
require_once("../../model/nguoidung.php");
require_once("../../model/khachhang.php");
$dh = new DONHANG();
$mh = new MATHANG();

$donhang = $dh->doctatcadonhang();

?>

<br><br>
<div class="container">
  <div class="row">
    <?php //var_dump($donhang);
    $tongtien = 1;
    ?>
    <h3>Quản lý đơn hàng</h3>
    <br>
    <table class="table table-hover">
      <tr>
        <th>Họ tên</th>
        <th>Số điện thoại</th>
        <th>Địa chỉ</th>
        <th>Tổng tiền</th>
        <th>Chi tiết</th>

      </tr>

      <?php foreach ($donhang as $dh) : ?>
        <tr>
          <td style="font-size:16px;font-family:OpenSans;"><?php echo $dh["hoten"]; ?></td>
          <td style="font-size:16px;font-family:OpenSans;"><?php echo $dh["sodienthoai"]; ?></td>
          <td style="font-size:16px;font-family:OpenSans;"><?php echo $dh["diachi"]; ?></td>
          <td style="font-size:16px;font-family:OpenSans;"><?php echo number_format($dh["tongtien"]) . "đ"; ?></td>
          <td><a href="?action=dhchitiet&id=<?php echo $dh["id"]; ?>">Chi tiết</a></td>
        </tr>
      <?php

      endforeach; ?>


    </table>

  </div>

</div>




<?php include("../view/bottom.php"); ?>