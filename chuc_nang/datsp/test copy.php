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
                    <td colspan="2"></td>
                    <td colspan="2">Email(*): </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="text" name="name" style="width: 400px;"/></td>
                    <td colspan="2"></td>
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
                </tr>
 </table><br>
 <input type="submit" name="submit" value="Tiếp Tục" style="margin-left: 40%;">
</form><?php } ?>
<br>     <?php


if (isset ( $_POST ['submit'] )) {
    $id_sp=$_POST['id_sp'];
    // $n = $_POST ['q1'];
    // $n1 = $_POST ['n1'];
    // $c=$n+$n1;
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
     

     

 $sql = "SELECT  id_kh FROM kh where ten_kh='$name ' and sdt='$di_dong'";   
      $result = $conn->query($sql); 
   $row = $result->fetch_assoc();
                
}

?>
<form  method="post">
<h1 style="color: red;"><center>XÁC NHẬN THÔNG TIN </center></h1>
 <table>
  <tr>
                    <td colspan="2">Họ&nbsp;và&nbsp;Tên(*): </td>
                    <td colspan="2"></td>
                    <td colspan="2">Gmail(*): </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="text" name="name1" value="<?php echo($name)?>" style="width: 400px;" disabled/></td>
                    <td colspan="2"></td>
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
                    <td><input type="number"  value="<?php echo($tong)?>"  ></td>
                    <td><input type="text" name="ngay_dat" id="date" ></td>
                    <td ><input type="text" name=" id_sp1" value="<?php echo ($id_sp)?>" style="display: none;"></td>
                    <td>
                            <input type="text" name="id_kh" value="<?php  echo $row['id_kh']; ?>" style="display: none;">
                        </td>
                          <td><input type="number" name="tong_tien" value="<?php echo($tong)?>" style="display: none;"></td>
                          <td><input type="number" name="nguoi_lon1"  value="<?php echo($nguoi_lon)?>" style="display: none;"></td>
                         
                          <td><input type="number" name="so_nguoi" value="<?php echo($t)?>" style="display: none;"></td>
                        
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
    
    $name1=$_POST['name1'];
    $email1=$_POST['email1'];
    $di_dong1=$_POST['di_dong1'];
    $dia_chi1=$_POST['dia_chi1'];
    $nguoi_lon1=$_POST['nguoi_lon1'];
    $tre_em1=$_POST['tre_em1'];
    $tre_con1=$_POST['tre_con1'];
    $gia=$_POST['gia'];
    $gia_tre_con=$_POST['gia_tre_con'];
    $tien=$_POST['tien'];
    $tong_tien=$_POST['tong_tien'];
    $chuyen_khoan=$_POST['chuyen_khoan'];
    $dk=$_POST['dk'];
    $ma_tour1=$_POST['ma_tour1'];
    $id_kh=$_POST['id_kh'];
    $ngay_dat=$_POST['ngay_dat'];
    $so_nguoi=$_POST['so_nguoi'];


 
            //thực hiện việc lưu trữ dữ liệu vào db

              $sqll = "INSERT INTO hd(
                id_kh,
                ngay_dat,
                 tien
                ) VALUES (
                '$id_kh',
                '$ngay_dat',
                '$tong_tien'
                )";
           
              // thực thi câu $sql với biến conn lấy từ file connection.php
          
               mysqli_query($conn,$sqll);
              
//               echo '<script language="javascript">';
// echo 'alert("chúc mừng bạn đã đăng ký thành công")';
// echo '</script>';
              

    $sql = "SELECT  Sohd FROM hd where id_kh='$id_kh ' and ngay_dat='$ngay_dat'";   
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
                    <td colspan="2"><input type="text" name="sohd" value="<?php  echo $row['Sohd']; ?>" style="width: 300px;" disabled/></td>
                    <td  colspan="2"><input type="text" name="ngay_dat1" id="date"  value="<?php echo($ngay_dat)?>"style="width: 300px;" disabled></td>
                    <td  colspan="2"><input type="text" name="tong_tien" value="<?php echo($tong_tien)?>"style="width: 300px;" disabled ></td>
                    
                </tr><br>
                
                          
                        
            
 </table><br>
                    <input type="text" name="sohd1" value="<?php  echo $row['Sohd']; ?>" style="width: 400px; display: none;"/>
                    <input type="text" name=" ma_tour2" value="<?php echo ($ma_tour1)?>" style="display: none;" >
                   <input type="number" name="nguoi_lon2"  value="<?php echo($nguoi_lon1)?>" style="display: none;">
                 <input type="number" name="tre_em2" value="<?php echo($tre_em1)?>"style="display: none;">
                   <input type="number" name="so_nguoi1" value="<?php echo($so_nguoi)?>" style="display: none;" >
  <div class="text-center">
 <input type="submit" name="ht" value="Hoàn Thành"></div></form>
<?php
if (isset($_POST['ht'])) {
    $Sohd1=$_POST['sohd1'];
    $ma_tour2=$_POST['ma_tour2'];
    $nguoi_lon2=$_POST['nguoi_lon2'];
    $tre_em2=$_POST['tre_em2'];
    $so_nguoi1=$_POST['so_nguoi1'];
    $sql="INSERT into cthdd(Sohd,ma_tour,SNL,STN,TSN) VALUES ('$Sohd1','$ma_tour2','$nguoi_lon2','$tre_em2','$so_nguoi1')";
    mysqli_query($conn,$sql);
}
?>
          
