<div class="content-wrapper">
    
    <section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">INPUT DATA CI_SESSIONS</h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            
<table class='table table-bordered>'        

	    <tr><td width='200'>Id <?php echo form_error('id') ?></td><td><input type="text" class="form-control" name="id" id="id" placeholder="Id" value="<?php echo $id; ?>" /></td></tr>
	    <tr><td width='200'>Ip Address <?php echo form_error('ip_address') ?></td><td><input type="text" class="form-control" name="ip_address" id="ip_address" placeholder="Ip Address" value="<?php echo $ip_address; ?>" /></td></tr>
	    <tr><td width='200'>Timestamp <?php echo form_error('timestamp') ?></td><td><input type="text" class="form-control" name="timestamp" id="timestamp" placeholder="Timestamp" value="<?php echo $timestamp; ?>" /></td></tr>
	    <tr><td width='200'>Data <?php echo form_error('data') ?></td><td><input type="text" class="form-control" name="data" id="data" placeholder="Data" value="<?php echo $data; ?>" /></td></tr>
	    <tr><td></td><td><input type="hidden" name="" value="<?php echo $; ?>" /> 
	    <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
	    <a href="<?php echo site_url('ci_sessions') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a></td></tr>
	</table></form>        </div>
</div>
</div>