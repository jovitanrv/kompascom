<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
  <head>

    <title><?= $title?></title>
    <!-- bootstrap -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://asset.kompas.com/data/2017/wp/css/kcm2017-wp.min.css?v=29" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


    <style media="screen">
      #signup-box { margin-left: 45%;
                    width: 375px;
                    height : 370px;
                    padding: 30px;
                    background-color: #F5F5F5;
                    box-shadow: -3px -3px 2px rgba(0,0,0,0.4);}
      .form-group { font-size: 13px; }
      .bawah { width: 375px;
               height: 40px;
               background-color: #EF4646;
               text-align: center;
               font-size: 15px;
               padding-top: 10px;
               margin-left: 45%; }
      .bawah a { color : white;
                 font-size : 14px;
                 padding-top : 9px;
                 margin-top : 10px; }
      .btn { background-color: #EF4646;
             margin-top : 5px;
             height : 37px;
             width : 100px; }
      .satu { margin-left: 48%;
              padding-top: 20px;
              font-size: 18px;}
      #border { border: 1px solid #3399ff;}
      #border:hover { border: 1px solid grey;}
      h6 { font-size : 13px; padding-bottom : 4px; }
    </style>
  </head>
  <body class="login-layout" style="background-color:white;">
    <!-- semua -->
    <div class="main-container">
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
                <h3> <br><br> </h3>
          <div id="signup-box" class="signup-box widget-box no-border visible">
            <div class="widget-main">
              <h4>LUPA PASSWORD <hr></h4>
              <h6 style="padding-top:10px;">Untuk mereset password anda, silahkan masukkan alamat email kompasID anda.</h6>
              <?= $this->session->flashdata('message');?>
              <form method="POST" action="<?= site_url('C_frgt_pass'); ?>" accept-charset="UTF-8">
                <div class="form-group">
                    <input id="border" type="email" class="form-control" name="email" placeholder="Email" value="<?= set_value('email')?>" style="border-radius: 0px;">
                </div>
                <div class="form-group">
                    <span style="background-color:lightgrey; border: 2px solid #3399ff; width: 200px;
                     padding: 5px; font-size: 20px; font-family: Courier;">4miq1W</span>
                    <input type="hidden" name="code_captcha" value="4miq1W" >
                    <input id="border" type="text" name="captcha" placeholder="Captcha" style="width: 217px; height: 37px; padding : 8px 4px 6px; margin-left: 8px;">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn" style="width: 110px; height:37px; border-radius: 0px; float:right; color:white;">Kirim!</button>
                </div>
              </form>
            </div>
          </div>
          <div class="bawah">
            <a href="<?= site_url('C_login'); ?>">Kembali ke halaman login</a>
          </div>
          <div class="satu">
            Satu ID untuk semua layanan Kompas.
          </div>
          <br>
          <div style="margin-left:42%; ">
            <table>
              <tr>
                <td>
                  <div style="cursor:pointer">
                    <a href="<?= base_url()?>"> <img src="<?php echo base_url()?>assets/img/kompas.png" style="width: 180px; margin-left: 40px;"> </a>
                  </div>
                </td>
                <td>
                  <div style="cursor:pointer">
                    <a href="http://kompasiana.com"> <img src="<?php echo base_url()?>assets/img/kompasiana.png" style="width: 180px;"> </a>
                  </div>
                </td>
              </tr>
            </table>
           </div>
        </div>
      </div>
    </div>


  </body>
</html>
