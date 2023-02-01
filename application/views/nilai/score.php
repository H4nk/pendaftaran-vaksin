<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
/* Pengaturan border-collapse jenis,ukuran serta warna huruf secara keseluruhan tabel */
table{
    border-collapse:collapse;
    font:normal normal 12px Verdana,Arial,Sans-Serif;
    color:#333333;
}
/* Mengatur warna latar, warna teks, ukruan font dan jenis bold (tebal) pada header tabel */
table th {
    background:#00BFFF;
    color:#DCDCDC;
    font-weight:bold;
    font-size:14px;
}
/* Mengatur border dan jarak/ruang pada kolom */
table th,
table td {
    vertical-align:top;
    padding:5px 10px;
    border:1px solid #696969;
}
/* Mengatur warna baris */
table tr {
    background:#F5FFFA;
}
/* Mengatur warna baris genap (akan menghasilkan warna selang seling pada baris tabel) */
table tr:nth-child(even) {
    background:#F0F8FF;
}
</style>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">

      <a class="navbar-brand" href="#">CC DINIYAH</a>
    </div>
<p class="navbar-text">PORADIN KE 5 TINGKAT SUMBAR
</p>


    <!-- Collect the nav links, forms, and other content for toggling -->
    
  </div><!-- /.container-fluid -->
</nav>

<div class="container">
<div class="row">
  <div class="col-xs-8">
    <div class="custom">
<table border="1" width="90%">
            <tr>
			<th>SOAL</th> 
						<?php foreach($peserta->result() as $t){?>
	<th>
	<?=$this->Db_model->get_kab($t->kab);?>
	<?php $j[]=$t->kab;?>
	
	
	</th> 
						<?php }?>
		
	

			</tr>
		<?php	$max = $this->Db_model->get_max_soal($api);
for($i = 1; $i <= $max; $i++){ ?>
			 <tr>
			 <td align='center'><?= $i;?></td> 
			 <td><?= $this->Db_model->get_nilai($api,$j[0],$i);?></td> 
			 <td><?= $this->Db_model->get_nilai($api,$j[1],$i);?></td> 
			 </tr>	
			 <?php } ?>


			
		
        </table>      </div>
  </div>
  <div class="col-xs-4">
    <div class="custom">
<table border="1" width="90%">
            <tr>
			<th>KAB/KOTA</th> 
			<th>SKOR</th> 
	

			</tr>
			<?php foreach($peserta->result() as $t){?>
			 <tr>
			 <td><?= $this->Db_model->get_kab($t->kab);?></td>
			 <td><h3 align="center"><?= $this->Db_model->get_total($api,$t->kab);?></h3></td>
			 
			 
			 </tr>

			
			<?php }?>
        </table>      </div>
  </div>
</div>
</div>