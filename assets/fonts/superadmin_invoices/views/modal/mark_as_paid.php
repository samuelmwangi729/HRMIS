<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button> 
			<h4 class="modal-title"><?=lang('mark_as_paid')?></h4>
		</div>
		<?php echo form_open(base_url().'invoices/mark_as_paid'); ?>
			<div class="modal-body">
				<p><?=lang('mark_as_paid_notice')?></p>
				<input type="hidden" name="invoice" value="<?=$invoice?>">
			</div>
			<div class="modal-footer"> <a href="#" class="btn btn-danger" data-dismiss="modal"><?=lang('close')?></a>
				<button type="submit" class="btn btn-success"><?=lang('mark_as_paid')?></button>
			</div>
		</form>
	</div>
</div>