				<?php error_reporting(0);
			              require_once("connection.php");
			              
	
			      $sql = "SELECT * FROM san_pham where id_sp='3'";
			$result = $conn->query($sql); 
			 while($row = $result->fetch_assoc()) {?>

			  

			<h1 style="color: red;"><center>THÔNG TIN LIÊN LẠC</center></h1>
			<form method="post">
 <table>
  <tr>
                    <td colspan="2">Họ&nbsp;và&nbsp;Tên(*): </td>
                    <td colspan="2">&emsp;&emsp;&emsp;</td>
                    <td colspan="2">Email(*): </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="text" name="name" style="width: 400px;"/></td>
                    <td colspan="3">&emsp;&emsp;&emsp;</td>
                    <td colspan="2"><input type="text" name="gmail" style="width: 400px;"></td>
                    
                </tr><br>
                <tr>
                    <td colspan="2">Di&nbsp;Động(*): </td>
                    <td colspan="2"></td>
                    <td colspan="2">Địa&nbsp;Chỉ: </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="name" name="sdt" style="width: 400px;"></td>
                    <td colspan="2"></td>
                    <td colspan="2"><input type="name" name="dia_chi" style="width: 400px;"></td>
                    
                </tr><br>
                <tr>
                    <td>Số Lượng(*)</td>
                  
             
                </tr>
                <tr>
                    <td><input type="number" name="so_luong"min="0" max="20" step="1" value="1"></td>
                    <td><input type="text" name="id_sp" value="<?php echo $row['id_sp']?>" style="display: none;"></td>
                    <td><input type="text" name="gia" value="<?php echo $row['gia']?>" style="display: none;"></td>
                </tr>
 </table><br>
 <input type="submit" name="submit" value="Tiếp Tục" style="margin-left: 40%;">
</form><?php } ?>
<br>     <?php


if (isset ( $_POST ['submit'] )) {
    $id_sp=$_POST['id_sp'];
    
    $name=$_POST['name'];
    $gmail=$_POST['gmail'];
    $sdt=$_POST['sdt'];
    $dia_chi=$_POST['dia_chi'];
    $so_luong=$_POST['so_luong'];

    $gia=$_POST['gia'];
  
    $tong=($gia*$so_luong);
   
    if ($name == "" || $dia_chi == "" || $sdt == "" ) {
          echo '<script language="javascript">';
echo 'alert("bạn vui lòng nhập đầy đủ thông tin")';
echo '</script>';
$die();
}else{
            //thực hiện việc lưu trữ dữ liệu vào db
              $sql = "INSERT INTO kh(
                ten_kh,
                sdt,
                gmail,
                dia_chi
                ) VALUES (
                '$name',
                '$sdt',
                '$gmail',
                '$dia_chi'
                
                )";
          
              // thực thi câu $sql với biến conn lấy từ file connection.php
              mysqli_query($conn,$sql);
              
//               echo '<script language="javascript">';
// echo 'alert("chúc mừng bạn đã đăng ký thành công")';
// echo '</script>';
              
          }
     

     

 $sql = "SELECT  id_kh FROM kh where ten_kh='$name ' and sdt='$sdt'";   
      $result = $conn->query($sql); 
   $row = $result->fetch_assoc();
                
}

?>
<form  method="post">
<h1 style="color: red;"><center>XÁC NHẬN THÔNG TIN </center></h1>
 <table>
  <tr>
                    <td colspan="2">Họ&nbsp;và&nbsp;Tên(*): </td>
                    <td colspan="2">&emsp;&emsp;&emsp;</td>
                    <td colspan="2">Gmail(*): </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="text" name="name1" value="<?php echo($name)?>" style="width: 400px;" disabled/></td>
                    <td colspan="2">&emsp;&emsp;&emsp;</td>
                    <td colspan="2"><input type="text" name="gmail1" value="<?php echo($gmail)?>" style="width: 400px;"disabled></td>
                    
                </tr><br>
                <tr>
                    <td colspan="2">Di&nbsp;Động(*): </td>
                    <td colspan="2"></td>
                    <td colspan="2">Địa&nbsp;Chỉ: </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="text" name="sdt1" value="<?php echo($sdt)?>" style="width: 400px;"disabled></td>
                    <td colspan="2"></td>
                    <td colspan="2"><input type="text" name="dia_chi1" value="<?php echo($dia_chi)?>" style="width: 400px;"disabled></td>
                    
                </tr><br>
                <tr>
                    <td>Số Lượng(*)</td>
                                      
                </tr>
                <tr>
                    
                   
          
                    <td><input type="number" name="so_luong1" value="<?php echo($so_luong)?>" disabled ></td>
                    <td><input type="number" name="so_tien" value="<?php echo($tong)?>" style="display: none;"  ></td>
                    <td><input type="text" name="date" id="date" style="display: none;" ></td>
                    <td ><input type="text" name=" id_sp1" value="<?php echo ($id_sp)?>"style="display: none;"  ></td>
                        <td>
                            <input type="text" name="id_kh1" value="<?php  echo $row['id_kh']; ?>" style="display: none;" >
                        </td>
                          <td><input type="number" name="so_luong1" value="<?php echo($so_luong)?>"style="display: none;" ></td>
                          
                         
                        
                        
                </tr>
 </table><br>
 
<script>

    var today = new Date();
   var date = today.getDate()+'-'+(today.getMonth()+1)+'-'+today.getFullYear();
        document.getElementById("date").value=date ;


</script>
<br>
   
           
                    <div class="text-center">

                    <input type="submit" name="registration" value="Đăng ký"></div></form>
                    <?php 
                    if (isset ( $_POST ['registration'] )) {
       
                    $id_sp1=$_POST['id_sp1'];
                    $id_kh1=$_POST['id_kh1'];
                    $date=$_POST['date'];
                    $so_luong1=$_POST['so_luong1'];
                    $so_tien=$_POST['so_tien'];

 
            //thực hiện việc lưu trữ dữ liệu vào db

              $sqll = "INSERT INTO hd(
                id_kh,
                date,
                 so_tien
                ) VALUES (
                '$id_kh1',
                '$date',
                '$so_tien'
                )";
           
              // thực thi câu $sql với biến conn lấy từ file connection.php
          
               mysqli_query($conn,$sqll);
              

              

    $sql = "SELECT  * FROM hd where id_kh='$id_kh1' and date ='$date'";   
      $result = $conn->query($sql); 
   $row = $result->fetch_assoc();
}
                    ?><br>
<form  method="post">
<h1 style="color: red;"><center>Chi Tiết Hoá Đơn </center></h1>
 <table border="1">
  <tr>
                    <td colspan="2">Số Hoá Đơn </td>
                    <td colspan="2">Ngày Đăng Ký</td>
                    <td colspan="2">Tổng Tiền </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="text" name="id_hd" value="<?php  echo $row['id_hd']; ?>" style="width: 300px;" disabled/></td>
                    <td  colspan="2"><input type="text" name="ngay_dat1" id="date"  value="<?php echo($date)?>"style="width: 300px;" disabled></td>
                    <td  colspan="2"><input type="text" name="so_tien" value="<?php echo($so_tien)?>"style="width: 300px;" disabled ></td>
                    
                </tr><br>
                
                          
                        
            
 </table><br>
                    <input type="text" name="id_hd1" value="<?php  echo $row['id_hd']; ?>"style="display: none;" />
                    <input type="text" name=" id_sp2" value="<?php echo ($id_sp1)?>" style="display: none;"  >
                   <input type="number" name="so_luong2"  value="<?php echo($so_luong1)?>" style="display: none;" >
              
  <div class="text-center">
 <input type="submit" name="ht" value="Hoàn Thành"></div></form>
<?php
if (isset($_POST['ht'])) {
    $id_hd1=$_POST['id_hd1'];
    $id_sp2=$_POST['id_sp2'];
    $so_luong2=$_POST['so_luong2'];
    
    $sql="INSERT into cthd(id_hd,id_sp,so_luong) VALUES ('$id_hd1','$id_sp2','$so_luong2')";
    mysqli_query($conn,$sql);
                 echo '<script language="javascript">';
 echo 'alert("Cảm ơn bạn đã đặt hàng bên shop chúng tôi")';
echo '</script>';
}
?>
          
