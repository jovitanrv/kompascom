<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
  <head>
    <title><?= $title; ?></title>
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
                    width: 380px;
                    padding: 30px;
                    background-color: #F5F5F5;
                    box-shadow: -3px -3px 2px rgba(0,0,0,0.4);}
      .form-group { font-size: 13px; }
      .bawah { width: 380px;
               height: 35px;
               background-color: black;
               text-align: center;
               font-size: 12px;
               padding-top: 8px;
               margin-left: 45%; }
      .bawah a { color : white; }
      .satu { margin-left: 48%;
              padding-top: 20px;
              font-size: 18px;}
      #border { border: 1px solid #3399ff;}
      #border:hover { border: 1px solid grey;}
      .syarat-ketentuan {	position: absolute;
        			            width: 100%;
        			            z-index: 1;
        			            line-height: 1.8em;
        			            top: 100px;	}
      .box-in { max-width: 900px;
        			  margin: 0 auto;
        		  	padding: 16px 36px 36px;
        		  	background: #F7F7F7;
        		  	position: relative;
        		  	border: 5px solid #bfbbbb;}
      .close-btn { background: #abbac3;
        		       display: inline-block;
        		       color: white;
        		       font-size: 30px;
        		       -webkit-border-radius: 50%;
        		       -moz-border-radius: 50%;
        		       border-radius: 50%;
        		       width: 50px;
        		       height: 50px;
        		       line-height: 50px;
        		       text-align: center;
        		       position: absolute;
        		       right: 10px;
        		       top: 10px;
        		       cursor: pointer; }
                   /* Popup box BEGIN */
             .hover_bkgr_fricc{
                 background:rgba(0,0,0,.4);
                 cursor:pointer;
                 display:none;
                 height:100%;
                 position:fixed;
                 text-align:center;
                 top:0;
                 width:100%;
                 z-index:10000;
             }
             .hover_bkgr_fricc .helper{
                 display:inline-block;
                 height:100%;
                 vertical-align:middle;
             }
             .hover_bkgr_fricc > div {
                 background-color: #fff;
                 box-shadow: 10px 10px 60px #555;
                 display: inline-block;
                 height: auto;
                 max-width: 551px;
                 min-height: 100px;
                 vertical-align: middle;
                 width: 60%;
                 position: relative;
                 border-radius: 8px;
                 padding: 15px 5%;
             }
             .popupCloseButton {
                 background-color: #fff;
                 border: 3px solid #999;
                 border-radius: 50px;
                 cursor: pointer;
                 display: inline-block;
                 font-family: arial;
                 font-weight: bold;
                 position: absolute;
                 top: -20px;
                 right: -20px;
                 font-size: 25px;
                 line-height: 30px;
                 width: 30px;
                 height: 30px;
                 text-align: center;
             }
             .popupCloseButton:hover {
                 background-color: #ccc;
             }
             .trigger_popup_fricc {
                 cursor: pointer;
                 font-size: 20px;
                 margin: 20px;
                 display: inline-block;
                 font-weight: bold;
             }
    </style>
  </head>
  <body class="login-layout" style="background-color:white;">
    <!-- semua -->
    <div class="main-container">
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          
          <div class="syarat-ketentuan">
          <div class="box-in" style="display:none;">
            <h4 class="header green lighter bigger">
                        Syarat dan Ketentuan Keanggotaan Kompas.com
                      </h4>
            <div class="close-btn">
                        x
                      </div>
            <ol>
              <li>
                  Syarat dan Ketentuan Keanggotaan ini merujuk dan berkaitan dengan Privacy Policy dan Terms of Use Kompas.com
                  <br>
                  <a href="http://inside.kompas.com/policy).">http://inside.kompas.com/policy</a>
              </li>
              <li>
                  Setiap anggota harus menggunakan alamat email yang sah dan masih berlaku.
              </li>
              <li>
                  Setiap anggota wajib menjaga tata krama dan berlaku sopan ketika memberikan komentar dan berinteraksi dengan anggota lainnya.
              </li>
              <li>
                  Setiap anggota dilarang untuk memberikan komentar, tautan, atau gambar yang berkaitan dengan SARA, tidak senonoh (pornografi), iklan atau penawaran, hasutan, fitnah dan penyebaran ujaran kebencian yang pada prinsipnya memiliki potensi bertentangan dengan UU ITE.
              </li>
              <li>
                  Setiap anggota wajib mematuhi dan terikat pada segala peraturan dan ketentuan perundangan yang berlaku di wilayah Republik Indonesia.
              </li>
              <li>
                Bila terjadi pelanggaran terhadap Syarat dan Ketentuan Keanggotaan ini, pengelola berhak untuk membekukan keanggotaan, melarang dan mencegah akses terhadap penggunaan fitur dan fasilitas di Kompas.com, hingga pelaporan kepada pihak yang berwajib.
              </li>
            </ol>
          </div>
        </div>
                <h3> <br><br> </h3>
          <div id="signup-box" class="signup-box widget-box no-border visible">
            <div class="widget-main">
              <h4> REGISTRASI</h4> <hr>
              <p style="font-size: 13px;"> Isi form dibawah ini: </p>
              <?= $this->session->flashdata('message');?>
              <form method="POST" action="<?= site_url('C_registration'); ?>" accept-charset="UTF-8">
                <div class="form-group">
                    <input id="border" type="email" class="form-control" name="email" placeholder="Email" value="<?= set_value('email')?>" style="border-radius: 0px;">
                    <small class="text-danger"><?= form_error('email')?> </small>
                </div>
                <div class="form-group">
                    <input id="border" type="text" class="form-control" name="name" placeholder="Nama Lengkap" value="<?= set_value('name')?>" style="border-radius: 0px;">
                    <small class="text-danger"><?= form_error('name')?> </small>
                </div>
                <div class="form-group">
                    <input id="border" type="password" class="form-control" name="password" placeholder="Password" style="border-radius: 0px;">
                    
                    <div style="font-size: 13px;">
                      *Karakter Password harus terdiri dari kombinasi </br> Huruf dan Angka.
                       Karakter yang tidak diperbolehkan " </br> ' ()*/;< >\`{}
                    </div>
                    <small class="text-danger"><?= form_error('password')?> </small>
                </div>
                <div class="form-group">
                    <input id="border" class="form-control" name="password_conf" placeholder="Konfirmasi Password" type="password" style="border-radius: 0px;">
                    <small class="text-danger"><?= form_error('password_conf')?> </small>
                </div>
                <div class="form-group">
                    <input type="radio" name="gender" value="Laki - laki"> Laki - laki
                    <input type="radio" name="gender" value="Perempuan"> Perempuan
                </div>
                <small class="text-danger"><?= form_error('gender')?> </small>
                <br>
                <div class="form-group">
                    <span style="background-color:lightgrey; border: 2px solid #3399ff; width: 200px;
                     padding: 5px; font-size: 20px; font-family: Courier">4miq1W</span>
                    <input type="hidden" name="code_captcha" value="4miq1W">
                    <input id="border" type="text" name="captcha" placeholder="Captcha" style="width: 65%; height: 35px; padding : 8px 4px 6px; margin-left: 8px;">
                    <small class="text-danger"><?= form_error('captcha')?> </small>
                </div>
                <div class="form-group">
                  <input type="checkbox" checked="checked" name="checkbox"> Saya menyetujui <a href="" id="link">Kebijakan Privasi dan Syarat dan Persetujuan</span>
                      <!-- <div class="hover_bkgr_fricc">
                        <span class="helper"></span>
                        <div>
                          <div class="popupCloseButton">X</div>
                          <p>Add any HTML content<br />inside the popup box!</p>
                        </div>
                      </div> -->
                </div>
                <div class="form-group" style="font-size: 13px;">
                    <input type="checkbox" checked="checked" name="checkbox2"> Ya, saya ingin berlangganan Newsletter <a href="http://kompas.com">"Kompas.com"</a>
                </div>
                <div class="form-group">
                    <button type="reset" class="btn btn-secondary" style="width: 80px; margin-right:5px; border-radius: 0px;">Reset</button>
                    <button type="submit" class="btn btn-primary" style="width: 200px; border-radius: 0px;">Daftar</button>
                </div>
              </form>
            </div>
          </div>
          <div class="bawah">
            <a href="<?= site_url('C_login');?>">Kembali ke halaman login</a>
          </div>
          <div class="satu">
            Satu ID untuk semua layanan Kompas.
          </div>
          <br>
          <div style="margin-left:41%; ">
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

    <script type="text/javascript">
        var modal = document.getElementByClassName("syarat-ketentuan")[0];
        var link = document.getElementById('link');
        var close = document.getElementById('close-btn');

        link.onclick = function () {
          modal.style.display = "block";
        }
        close.onclick = function () {
          modal.style.display = "none";
        }


    </script>
  </body>
</html>
