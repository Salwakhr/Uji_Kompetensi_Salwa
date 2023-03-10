<!DOCTYPE html>
<html lang="en">

<head>
<link href="../css/tabelc.css?version=<?= filemtime("../css/tabelc.css")?>" rel="stylesheet">
</head>
<body>
<?php
$title = 'transaksi';
require 'functions.php';
require 'navbar.php';
$query = "SELECT transaksi.*,member.nama_member , detail_transaksi.total_harga FROM transaksi INNER JOIN member ON member.id_member = transaksi.member_id INNER JOIN detail_transaksi ON detail_transaksi.transaksi_id = transaksi.id_transaksi ";
$data = ambildata($conn,$query);
?> 
 <div>
                        <a href="transaksi_cari_member.php"><button class="btn2"> 𝘛𝘢𝘮𝘣𝘢𝘩 𝘋𝘢𝘵𝘢
</button>
                        <a href="transaksi_konfirmasi.php"><button class="btn2">
𝘒𝘰𝘯𝘧𝘪𝘳𝘮𝘢𝘴𝘪 𝘗𝘦𝘮𝘣𝘢𝘺𝘢𝘳𝘢𝘯
</button>
                    </div>
<table>
     <thead>
        <tr>
        <th><label>no </label></th>
          <th><label>Invoice</label></th>
          <th><label>member</label></th>
          <th><label>status</label></th>
          <th><label>pembayaran</label></th>
          <th><label>total harga</label></th>
          <th width="15%"><label>Aksi</label></th>
        </tr>
      </thead>
      <tbody>
      <?php $no=1; foreach($data as $transaksi): ?>
        <tr class="data-label">
             <td><?= $no++ ?></td>
            <td><?= $transaksi['kode_invoice'] ?></td>
            <td><?= $transaksi['nama_member'] ?></td>
            <td><?= $transaksi['status'] ?></td>
            <td><?= $transaksi['status_bayar'] ?></td>
            <td><?= $transaksi['total_harga'] ?></td>
             <td width="15%"> <a href="transaksi_detail.php?id=<?= $transaksi['id_transaksi']; ?>"><button class="button1">detail</button></td>
           
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
</body>
