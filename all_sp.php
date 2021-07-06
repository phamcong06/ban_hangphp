<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/index.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="http://webquangnam.com/jsShare/hoa-dao-roi.js"></script>
    </head>
    <body>
    <div class="banner">
        <div class="logo">
        <?php include("chuc_nang/banner/banner.php")?>
        </div>
        <?php include("chuc_nang/menu/menu.php")?>
        <div class="quang_cao">
        <?php include("chuc_nang/quang_cao/quang_cao.php")?>
        </div>
       
    </div>
    <div class="container">
        <div class="thuong_hieu">
            <center>
                <h6 style="color:#926625;">
                    Mỹ Phẩm 
                </h6>
                <h6>
                    THƯƠNG HIỆU
                </h6>
            </center>
           <div class="logo_th">
           <?php include("chuc_nang/thuong_hieu/thuong_hieu.php")?>
           </div>
        </div>
        <div class="ban_chay">
            <div class="time">
                <div class="title">
                    <center>
                        <h6 style="color:#926625;">
                             Đang Bán Chạy
                        </h6>
                        <h4>
                             HOT TRONG TUÂN NÀY
                        </h4>
                    </center>
                </div>
                <div class="showtime">
                    <p></p>
                <script type="text/javascript">

            var p = document.querySelector('p');    
            var tet = new Date("Jun 1 ,2021 15:48:00").getTime();
            //Tổng số giây 
            var countDown = setInterval(run,1000);
            function run(){
 
            var now = new Date().getTime();
            //Số s đến thời gian hiện tại
            var timeRest = tet - now;
            //Số s còn lại để đến tết;
            var day = Math.floor(timeRest/(1000*60*60*24));
            //Số ngày còn lại
            var hours = Math.floor(timeRest%(1000*60*60*24)/(1000*60*60));
            // Số giờ còn lại
            var minute = Math.floor(timeRest%(1000*60*60)/(1000*60));
            // Số phút còn lại
            var sec = Math.floor(timeRest%(1000*60)/(1000));
            // Số giây còn lại
            p.innerHTML = day+' DAY '+hours+' : ' + minute + ' : ' + sec +"  ";
                        if(timeRest <= 0){
                        clearInterval(countDown);
                        p.innerHTML = "Mặt Hàng này đã hết";
                        }              
                        }
                </script>
                </div>
            </div>
            <div class="mat_hang">
                <?php include("chuc_nang/mat_hang/mat_hang.php")?>
                <script type="">
                    $(document).ready(function(){
                        $('.mat_hang').mouseover(function(){
                            $('.chi_tiet').show(3000);
                        });
                        $('.mat_hang').click(function(){
                            $('.chi_tiet').hide(3000);
                        })
                    });
                </script>
            </div>
        </div>
        <div class="khuyen_mai">
            <div class="title">
                <center>
                        <h6 style="color:#926625;">
                            ALL SẢN PHẨM
                        </h6>
                        
                    </center>
            </div>
          
            <div class="col-12">
                <div class="row">
                    <div class="col-5" >
                        <?php include("chuc_nang/all_sp/all_sp.php")?>
                    </div>
                 </div>
               
              
            </div>
        </div>
        
    </div>
    <div class="map" style="background-color:#fff;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3919.6278538415554!2d106.67250126529136!3d10.763137492330584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1zNjgvMTBEIFRy4bqnbiBOaMOibiBUw7RuLCBQLjIsIFEuMTAsIFRQLkNITQ!5e0!3m2!1svi!2s!4v1621748945933!5m2!1svi!2s" width="1920" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            <div class="end text-center" style="background-color: rgb(187 175 151);">
        <h4>© 2021 - All rights reserved by F1GEN TECHNOLOGY CO., LTD. Powered by Haravan </h4>
        <h4>Power by Web.vn</h4>
        </div>
    </div>
    </body>
</html>