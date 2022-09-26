<?php
//koneksi
require 'function.php';

$Buku = query("SELECT * FROM buku");

//isi tabel







?>






<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

    <h1 class="center">Daftar Buku Tutorial bertahan hidup di era revolusi industri 4.0</h1>


   
    <div class="container">

    <table>
        <thead>
          <tr>
              <th>Judul</th>
              <th>Penerbit</th>
              <th>Pengarang</th>
              <th>Gambar</th>
              <th >Opsi</th>
          </tr>
        </thead>
        <?php foreach($Buku as $book) : ?>
        <tbody>
          
          <tr>
         
            <td><?= $book["Judul"]  ?></td>
            <td><?= $book["Penerbit"]  ?></td>
            <td><?= $book["Pengarang"]  ?></td>
            <td> <img src="img/<?= $book["Gambar"] ?>" alt="" width="100px" height="100px"></td>
            <td>
            <a href="ubah.php?id=<?= $book['id_buku']?>" class="waves-effect waves-light btn blue lighten-3 center"><i class="material-icons left"></i>Change</a>
            <a href="hapus.php?id=<?= $book['id_buku']?>" onclick="return confirm('Delete the data?')" class="waves-effect waves-light btn blue lighten-3"><i class="material-icons left"></i>Delete</a>
            
         </td>
          </tr>
          
        </tbody>

        
        <?php endforeach;?>
      </table>

      <div class="button center">
      <a href="tambah.php" class="waves-effect waves-light btn blue lighten-3 "><i class="material-icons left"></i>Add data</a>
      </div>
    </div>
     
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>