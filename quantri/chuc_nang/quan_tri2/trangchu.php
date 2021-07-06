<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<style type="text/css" >
	a.lk_1{font-size:22px;text-decoration:none;color:blue;margin-right:30px}
	a.lk_1:hover {color:red}
</style>
 

<br>
<center>
<a href="index.php" style="font-size:72px;color:blue;text-decoration:none" >Quản Lý ThÔng Tin</a>
</center>
<br><br>	 <div class="dropdown">
                <button class="dropbtn">
                <a href="index.php">Trang Chủ</a></button>
            </div>

            <div class="dropdown">
                <button class="dropbtn">Banner</button>
                <div class="dropdown-content" style="left:0;">
                <a href="?thamso=quan_ly_banner"> Quản Lý Banner</a>
                 
                </div>
            </div>
           
            <div class="dropdown">
                <button class="dropbtn">Sản Phẩm</button>
                <div class="dropdown-content">
                    <a href="?thamso=them_sp">Thêm Sản Phẩm</a>
                      <a href="?thamso=quan_ly_san_pham"> Quản Lý Sản Phẩm</a>
                

                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Khách Hàng</button>
                <div class="dropdown-content">
                    <a href="?thamso=quan_ly_kh">Quản lý Thông Tin Khách Hàng</a>
                    
                </div>
            </div>

             <div class="dropdown">
                <button class="dropbtn"><a href="?thamso=quan_ly_dat_sp"> Thông Tin Hoá Đơn </a></button>
            </div>
            <div class="dropdown">
                <button class="dropbtn"><a href="?thamso=quan_ly_ct_hoa_don"> Thông Tin Chi TiếtHoá Đơn </a></button>
            </div>
            <div class="dropdown">
                <button class="dropbtn"><a href="?thamso=quan_ly_doanh_so"> Doanh Số</a></button>
            </div>
            <div class="dropdown">
                <button class="dropbtn"><a href="?thamso=thoat"> Thoát</a></button>
            </div>

<br><br>
<?php 
	include("chuc_nang/quan_tri2/dieu_huong.php");
?>
