<style>
    <?php
        include('csss/styleadmin.css');
    ?>
</style>
<h4>Xem đơn hàng</h4>
 <?php
    $code=$_GET['code'];
    $sql_lietke_dh="SELECT * FROM tbl_cart_detail ,tbl_sanpham  WHERE tbl_cart_detail.id_sanpham=tbl_sanpham.id_sanpham 
        AND tbl_cart_detail.code_cart=$code
        ORDER BY tbl_cart_detail.id_cart_detail DESC";
    $result_lietke_dh= mysqli_query($connect,$sql_lietke_dh);
?>
<h4>Liệt kê danh mục sản phẩm</h4>
 <table class="product_list"> 
     <tr>
         <th>ID</th>
         <th>Mã đơn hàng</th>
         <th>Tên Sản phẩm</th>
         <th>Hình </th>
         <th>Số lượng</th>
         <th>Đơn giá</th>
         <th>Thành tiền</th>
         
     </tr>
     <?php
    $i=0;
    $tongtien=0;
    while($row=mysqli_fetch_array($result_lietke_dh)){
        $i++;
        $thanhtien= $row['giasanpham'] * $row['soluongmua'];
        $tongtien+=$thanhtien;
     ?>
     <tr>
         <td><?php echo $i ?></td>
         <td><?php echo $row['code_cart'] ?></td>
         <td><?php echo $row['tensanpham']?></td>
         <td style="width:150px;height:150px;" >
                            <img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?> " width="100%" >   
         </td>
         <td><?php echo $row['soluongmua']?></td>
         <td><?php echo number_format($row['giasanpham'],0,',','.').'VNĐ' ?></td>
         <td><?php echo number_format($thanhtien,0,',','.').'VNĐ' ?></td>
         
     </tr>
     <?php
    }
    ?>
     <tr>
         <th colspan="7">Tổng tiền : <?php echo number_format($tongtien,0,',','.').'VNĐ' ?></th>
         
     </tr>
     <tr>
    
     </tr>
    
 </table>


 