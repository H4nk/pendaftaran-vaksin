<div class="content-wrapper">
    
    <section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">INPUT DATA JADWAL</h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            
<table class='table table-bordered>'        

	    <tr><td width='200'>Vaksin <?php echo form_error('vaksin') ?></td><td><input type="text" class="form-control" name="vaksin" id="vaksin" placeholder="Vaksin" value="<?php echo $vaksin; ?>" /></td></tr>
	    <tr><td width='200'>Ket <?php echo form_error('ket') ?></td><td><input type="text" class="form-control" name="ket" id="ket" placeholder="Ket" value="<?php echo $ket; ?>" /></td></tr>
	    <tr><td width='200'>St <?php echo form_error('st') ?></td><td><input type="text" class="form-control" name="st" id="st" placeholder="St" value="<?php echo $st; ?>" /></td></tr>
	    <tr><td></td><td><input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
	    <a href="<?php echo site_url('jadwal') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a></td></tr>
	</table></form>        </div>
</div>
</div>