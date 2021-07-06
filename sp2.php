<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/sp1.css" rel="stylesheet">
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
        <div class="san_pham">
            <h6><a href="http://localhost:8080/7ngay/index.php#">Trang Chủ</a>/<a href="">Mỹ Phẩm</a></h6><br>
            <div class="img-sp">
                <div class="img-con">
                <img src="img/img-sp/img-sp1.jpg" id="img-one">
                <img src="img/img-sp/img-sp11.jpg" id="img-two">
                </div>
                <div class="img-change">
                    <img src="img/img-sp/img-sp1.jpg" alt=""id="change" class="btn">
                </div>
                <script>
                    $(document).ready(function(){
                        $('#img-one').click(function(){
                            $('#change').attr("src","img/img-sp/img-sp1.jpg");
                        });
                        $('#img-two').click(function(){
                            $('#change').attr("src","img/img-sp/img-sp11.jpg");
                        });
                        
                    });
                </script>
            </div>
            <div class="thong_tin"> <?php include("chuc_nang/thong_tinsp/sp2.php")?>
                <script>
                    $('input.input-qty').each(function() {
                    var $this = $(this),
                        qty = $this.parent().find('.is-form'),
                        min = Number($this.attr('min')),
                        max = Number($this.attr('max'))
                    if (min == 0) {
                        var d = 0
                    } else d = min
                    $(qty).on('click', function() {
                        if ($(this).hasClass('minus')) {
                        if (d > min) d += -1
                        } else if ($(this).hasClass('plus')) {
                        var x = Number($this.val()) + 1
                        if (x <= max) d += 1
                        }
                        $this.attr('value', d).val(d)
                    })
                    })
                </script>
            </div>
           
        </div>
        <div class="mo-ta" style="margin-left:5px;">
            <?php include("chuc_nang/mo-tasp/mo-tasp1.php")?>
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