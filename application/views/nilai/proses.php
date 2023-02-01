<div class="content-wrapper">
    
    <section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Proses Penilaian</h3>
            </div>
<div class="row">
<div class="col-xs-12">
<div class="box">
<div class="box-header">
<h3 class="box-title">SOAL KE <?= $ke;?></h3>
<div class="box-tools">
<a href="<?= base_url('Nilai/scoreboard/'.$api.'/');?>" target="_blank" class="btn btn-block btn-success">Scoreboard</a>
</div>
</div>

<div class="box-body table-responsive no-padding">
<table class="table table-hover">
<tbody><tr>
<th>REGU</th>
<th>Kabupaten/Kota</th>
<th>Skor</th>
</tr>
<?php foreach($peserta->result() as $h){?>
<tr>
<td><?= $h->regu;?></td>
<td><?= $this->Db_model->get_kab($h->kab);?></td>
<td><form action="<?= base_url('Nilai/proses');?>" method="post">
<div class="box-body">
<div class="col-xs-3">
<input type='number' name="nilai" class="form-control input-sm" value="<?= $this->Db_model->get_nilai($h->api,$h->kab,$ke);?>">
<input type='hidden' name="kab" class="form-control" value="<?= $h->kab;?>">
<input type='hidden' name="api" class="form-control" value="<?= $h->api;?>">
<input type='hidden' name="soal" class="form-control" value="<?= $ke;?>">
</div>

</div>

</form></td>
</tr>
<?php } ?>

</tbody></table>

</div>
<div class="btn-group">
<a href="<?= base_url('Nilai/index/'.$api.'/'.$back.'');?>" class="btn btn-default">Soal Ke <?= $back ;?></a>
<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
<span class="caret"></span>Loncat Nilai
</button><ul class="dropdown-menu">
<?php
$max = $this->Db_model->get_max_soal($h->api);
for($i = 1; $i <= $max; $i++){
    echo '<li><a href='.base_url('Nilai/index/'.$api.'/'.$i.'').'>Soal Ke - '.$i.'</a></li>';
}

?>


</ul>

<a href="<?= base_url('Nilai/index/'.$api.'/'.$next.'');?>"class="btn btn-default">Soal Ke <?= $next ;?></a>
</div>
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
<br>

</div>
<table border="1" width="90%">
            <tr>
			<th>KAB/KOTA</th> 
			<th>SKOR</th> 
	

			</tr>
			<?php foreach($peserta->result() as $t){?>
			 <tr>
			 <td><?= $this->Db_model->get_kab($t->kab);?><h3 align="center"><?= $this->Db_model->get_total($api,$t->kab);?></h3></td>
			 <td><?php for($i = 1; $i <= $max; $i++){
    echo '<span class="label label-success"><span class="label label-warning">'.$i.'</span> '.$this->Db_model->get_nilai($api,$t->kab,$i).'</span> '; 
} ?></td>
			 
			 
			 </tr>

			
			<?php }?>
        </table>   
</div>
</div>






       </div>
</div>
</div>