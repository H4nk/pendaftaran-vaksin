<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            .word-table {
                border:1px solid black !important; 
                border-collapse: collapse !important;
                width: 100%;
            }
            .word-table tr th, .word-table tr td{
                border:1px solid black !important; 
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h2>Peserta List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Api</th>
		<th>Jadwal</th>
		<th>Nik</th>
		<th>Nama</th>
		<th>Email</th>
		<th>Tgl Lahir</th>
		<th>Alamat</th>
		<th>Hp</th>
		<th>Vaksin</th>
		<th>Ke</th>
		<th>Tgl Vaksin</th>
		<th>St</th>
		
            </tr><?php
            foreach ($peserta_data as $peserta)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $peserta->api ?></td>
		      <td><?php echo $peserta->jadwal ?></td>
		      <td><?php echo $peserta->nik ?></td>
		      <td><?php echo $peserta->nama ?></td>
		      <td><?php echo $peserta->email ?></td>
		      <td><?php echo $peserta->tgl_lahir ?></td>
		      <td><?php echo $peserta->alamat ?></td>
		      <td><?php echo $peserta->hp ?></td>
		      <td><?php echo $peserta->vaksin ?></td>
		      <td><?php echo $peserta->ke ?></td>
		      <td><?php echo $peserta->tgl_vaksin ?></td>
		      <td><?php echo $peserta->st ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>