<?php

         @$halaman = $_GET['halaman'];
         if ($halaman == "siswa") 
         {
            include "modul/siswa/departemen.php";

          }elseif ($halaman == "guru") 

          {include "modul/guru/pengirim.php";
        }
           elseif ($halaman == "arsip_surat") {
              if($_GET ['hal'] == "tambah data" || @$_GET ['hal'] == "edit"|| @$_GET ['hal'] == "hapus") {
            include " modul/arsip/form.php";
          }else{
            include "modul/arsip/data.php"
          }
        }
             

          else{
             include "modul/home.php";

          }

         ?>
     