<label class="ks-checkbox-slider ks-on-off ks-solid ks-primary">
   <input value="<?php if($result['companyDeleted']==0) { echo 1;} else { echo 0;} ?>" type="checkbox" onclick="addApproval(this)" name="companyDeleted" id="<?php echo $result['companyId']; ?>" class="" <?php if($result['companyDeleted']==1) { echo 'checked="checked"';} ?>>
	<span class="ks-indicator"></span>
	<span class="ks-on">Yes</span>
	<span class="ks-off">No</span>						
	<span id="checkApproval"></span>
</label>
<script type="text/javascript">
	function addApproval(el){
		var sw_id = el.id, sw_value = $(el).attr('value');
		$.ajax({
			type: "POST",
			url: "ajaxApproval.php",
			data: {sw_id: sw_id, sw_value: sw_value},
			success: function(data){
				$('#checkApproval').html(data);
			}
		});
	}
</script>