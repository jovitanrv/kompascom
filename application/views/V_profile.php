<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $title;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
	  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <style media="screen">
      .tablink { background-color: #F5F5F5;
                float: left;
				        border-bottom-style : none;
                outline: none;
                cursor: pointer;
                font-size: 17px;}
      #signup-box { margin-left: 45%;
                    height : 540px;
                    width: 375px;
                    padding: 30px;
                    background-color: #F5F5F5;
                    box-shadow: -3px -3px 2px rgba(0,0,0,0.4);}
      #navbar { width : 100%;
                height : 45px;
                background-color : #438EB9;
                font-family : Helvetica;
                padding-left : 20px;
                padding-top : 10px;}
      .tabcontent { background-color: #F5F5F5;
                    display: none; }
      #shorturl:hover { cursor: not-allowed;}
      #border { margin-top: 10px;
                border: 1px solid #3399ff;}
      #border:hover { border: 1px solid grey;}
      #profile { height: auto;}
      #password {height: auto;}
      .bawah { width: 375px;
               height: 40px;
               background-color: black;
               text-align: center;
               font-size: 15px;
               padding-top: 10px;
               margin-left: -31px;
               margin-top: 20px;}
      .bawah a { color : white;
                 font-size : 14px;
                 padding-top : 9px;
                 margin-top : 10px; }
      .satu { margin-left: 48%;
			  margin-top : 15px;
              padding-top: 20px;
              font-size: 18px;}

    </style>
  </head>
  <body class="login-layout" style="background-color:white;">
    <div id="navbar">
      <h5 style="color:white;">Selamat datang, <?= $name?></h5>
    </div>
    <div class="main-container">
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          <h3> <br> <br> </h3>
          <div id="signup-box" class="signup-box widget-box no-border visible">
            <div class="widget-main">
              <h4>PENGATURAN <hr></h4>
              <?= $this->session->flashdata('message');?>
              <?= $this->session->flashdata('notfound');?>
              <div class="menutab">
                <button class="tablink" onclick="openpage('profile')" style="margin-left: -10px; width: 75px;">PROFILE</button>
                <button class="tablink" onclick="openpage('password')" style="width:100px;">PASSWORD</button>
              </div>
              
            <div>
              <div id="profile" class="tabcontent" style="display: block;">
             
                <form method="POST" action="<?= site_url('C_profile/profile');?>" accept-charset="UTF-8">
                  <div class="form-group">
                  
                    <br> <br> Nama Depan <br>
                    <input id="border" type="text" class="form-control" name="nama_d" value="<?= $f_name?>" style="border-radius: 0px;">
                    <small class="text-danger"><?= form_error('nama_d')?> </small>
                  </div>
                  <div class="form-group">
                      Nama Belakang <br>
                      <input id="border" type="text" class="form-control" name="nama_b" value="<?= $l_name?>" style="border-radius: 0px;">
                      <small class="text-danger"><?= form_error('nama_b')?> </small>
                  </div>
                  <div class="form-group">
                      Short URL <br>
                      <input class="form-control" disabled name="short_url" type="text" value="<?= $f_name . '827w2'?>" id="shorturl" style="margin-top : 10px; border-radius: 0px;">
                  </div>
                  <br> <br>
                  <button type="submit" class="btn btn-primary" style="width: 100px; border-radius: 0px;">Simpan</button>
                  <br> <br>
                  <div class="bawah">
                    <a href="<?= site_url('C_login/logout');?>">Logout.</a>
                  </div>
                </form>
              </div>
              <div id="password" class="tabcontent">
                <br> <br>
                <form method="POST" action="<?= site_url('C_profile/pswrd');?>" accept-charset="UTF-8">
                <div class="form-group">
                  <input id="border" type="password" class="form-control" name="password" placeholder="Password Anda saat ini" style="border-radius: 0px;">
                  <small class="text-danger"><?= form_error('password')?> </small>
                </div>
                
                <div class="form-group">
                  <input id="border" type="password" class="form-control" name="password_new" placeholder="Password baru Anda" style="border-radius: 0px;">
                  <div style="font-size: 13px;">
                    *Karakter Password harus terdiri dari kombinasi </br> Huruf dan Angka.
                     Karakter yang tidak diperbolehkan " </br> ' ()*/;< >\`{}
                      <small class="text-danger"><?= form_error('password_new')?> </small>
                  </div>
                </div>
                <div class="form-group">
                    <input id="border" class="form-control" name="password_confirmation" placeholder="Konfirmasi Password" type="password" style="border-radius: 0px;" value>
                    <small class="text-danger"><?= form_error('password_confirmation')?> </small>
                </div>
                <div class="form-group">
                    <br>
                    <button type="reset" class="btn btn-secondary" style="width: 100px; margin-right:5px; border-radius: 0px;">Reset</button>
                    <button type="submit" class="btn btn-primary" style="width: 205px; border-radius: 0px;">Simpan</button>
                    <br> <br>
                </div>
                <div class="bawah">
                  <a href="<?= site_url('C_login/logout');?>">Logout.</a>
                </div>
                </form>
              </div>
            </div>
            </div>
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
                    <a href="<?= site_url('Home_C_log');?>"> <img src="<?php echo base_url()?>assets/img/kompas.png" style="width: 180px; margin-left: 40px;"> </a>
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

    <script>
      function openpage(pageName){
        var i, tabcontent, tablink;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }
        // tablinks = document.getElementsByClassName("tablink");
        // for (i = 0; i < tablinks.length; i++) {
        //   tablinks[i].style.backgroundColor = "";
        // }
        document.getElementById(pageName).style.display = "block";
          elmnt.style.backgroundColor = color;
        }
        document.getElementById("defaultOpen").click();
    </script>
  </body>
</html>

