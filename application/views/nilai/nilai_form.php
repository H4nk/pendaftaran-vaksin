<div class="content-wrapper">
    
    <section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">INPUT DATA NILAI</h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            
<table class='table table-bordered>'        

	    <tr><td width='200'>Api <?php echo form_error('api') ?></td><td><input type="text" class="form-control" name="api" id="api" placeholder="Api" value="<?php echo $api; ?>" /></td></tr>
	    <tr><td width='200'>Soal <?php echo form_error('soal') ?></td><td><input type="text" class="form-control" name="soal" id="soal" placeholder="Soal" value="<?php echo $soal; ?>" /></td></tr>
	    <tr><td width='200'>Regu <?php echo form_error('regu') ?></td><td><input type="text" class="form-control" name="regu" id="regu" placeholder="Regu" value="<?php echo $regu; ?>" /></td></tr>
	    <tr><td width='200'>Nilai <?php echo form_error('nilai') ?></td><td><input type="text" class="form-control" name="nilai" id="nilai" placeholder="Nilai" value="<?php echo $nilai; ?>" /></td></tr>
	    <tr><td></td><td><input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
	    <a href="<?php echo site_url('nilai') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a></td></tr>
	</table></form>        </div>
</div>
</div>