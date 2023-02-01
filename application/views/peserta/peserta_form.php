<div class="content-wrapper">
    
    <section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">INPUT DATA PESERTA</h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            
<table class='table table-bordered>'        

	    <tr><td width='200'>Api <?php echo form_error('api') ?></td><td><input type="text" class="form-control" name="api" id="api" placeholder="Api" value="<?php echo $api; ?>" /></td></tr>
	    <tr><td width='200'>Jadwal <?php echo form_error('jadwal') ?></td><td><input type="text" class="form-control" name="jadwal" id="jadwal" placeholder="Jadwal" value="<?php echo $jadwal; ?>" /></td></tr>
	    <tr><td width='200'>Nik <?php echo form_error('nik') ?></td><td><input type="text" class="form-control" name="nik" id="nik" placeholder="Nik" value="<?php echo $nik; ?>" /></td></tr>
	    <tr><td width='200'>Nama <?php echo form_error('nama') ?></td><td><input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $nama; ?>" /></td></tr>
	    <tr><td width='200'>Email <?php echo form_error('email') ?></td><td><input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" /></td></tr>
	    <tr><td width='200'>Tgl Lahir <?php echo form_error('tgl_lahir') ?></td><td><input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder="Tgl Lahir" value="<?php echo $tgl_lahir; ?>" /></td></tr>
	    <tr><td width='200'>Alamat <?php echo form_error('alamat') ?></td><td><input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" value="<?php echo $alamat; ?>" /></td></tr>
	    <tr><td width='200'>Hp <?php echo form_error('hp') ?></td><td><input type="text" class="form-control" name="hp" id="hp" placeholder="Hp" value="<?php echo $hp; ?>" /></td></tr>
	    <tr><td width='200'>Vaksin <?php echo form_error('vaksin') ?></td><td><input type="text" class="form-control" name="vaksin" id="vaksin" placeholder="Vaksin" value="<?php echo $vaksin; ?>" /></td></tr>
	    <tr><td width='200'>Ke <?php echo form_error('ke') ?></td><td><input type="text" class="form-control" name="ke" id="ke" placeholder="Ke" value="<?php echo $ke; ?>" /></td></tr>
	    <tr><td width='200'>Tgl Vaksin <?php echo form_error('tgl_vaksin') ?></td><td><input type="date" class="form-control" name="tgl_vaksin" id="tgl_vaksin" placeholder="Tgl Vaksin" value="<?php echo $tgl_vaksin; ?>" /></td></tr>
	    <tr><td width='200'>St <?php echo form_error('st') ?></td><td><input type="text" class="form-control" name="st" id="st" placeholder="St" value="<?php echo $st; ?>" /></td></tr>
	    <tr><td></td><td><input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
	    <a href="<?php echo site_url('peserta') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a></td></tr>
	</table></form>        </div>
</div>
</div>