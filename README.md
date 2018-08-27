# ajax-checkbox-update-with-yes-no
Ajax Checkbox Udate with Yes No View
   <input value="<?php if($result['companyDeleted']==0) { echo 1;} else { echo 0;} ?>" type="checkbox" onclick="addApproval(this)" name="companyDeleted" id="<?php echo $result['companyId']; ?>" class="" <?php if($result['companyDeleted']==1) { echo 'checked="checked"';} ?>>
   use it 0 = No and 1 = Yes.
   name companyDeleted as you want
   var sw_id = el.id, sw_value = $(el).attr('value'); 
   use for check for value 0 or 1 
   
