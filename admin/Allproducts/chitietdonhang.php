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
    <?php
    $tongtien = 1;
    ?>
    <h3>Chi tiết đơn hàng</h3>
    <br>
    <table class="table table-hover">
      <tr>
        <th>Họ tên</th>
        <th>Số điện thoại</th>
        <th>Tên mặt hàng</th>
        <th>Số lượng</th>
        <th>Đơn giá</th>
        <th>Thành tiền</th>

      </tr>

      <?php foreach ($chitiet as $ct) :  ?>
        <tr>
          <td style="font-size:16px;font-family:OpenSans;"><?php echo $ct["hoten"]; ?></td>
          <td style="font-size:16px;font-family:OpenSans;"><?php echo $ct["sodienthoai"]; ?></td>
          <?php $mathang = $mh->laymathangtheoid($ct["mathang_id"]); ?>
          <td style="font-size:16px;font-family:OpenSans;"><?php echo $mathang["tenmathang"]; ?></td>
          <td style="font-size:16px;font-family:OpenSans;"><?php echo $ct["soluong"]; ?></td>
          <td style="font-size:16px;font-family:OpenSans;"><?php echo number_format($mathang["giaban"]) . "đ"; ?></td>

          <td style="font-size:16px;font-family:OpenSans;"><?php echo number_format($ct["tongtien"]) . "đ"; ?></td>
          </td>
        </tr>
      <?php

      endforeach; ?>


    </table>

  </div>

</div>




<?php include("../view/bottom.php"); ?>