<?php

echo '<h1><img src="'.base_url('library/himport.png').'" width="32" height="32" style="vertical-align: middle;" /> '.$this->lang->line('groupv_importgrouph7').'</h1>';

$ConfigTableTo = $this->Groups_model->GroupsList();

echo '<div class="BorderDiv">';

echo form_open('import-group-wizard/');

$ExtraOptions = ' style = "width: 100%;" ';

echo $this->lang->line('groupv_groupname7').' <br /> '.form_dropdown('groups_name', $ConfigTableTo, '', $ExtraOptions).'<br />';
echo form_error('groups_name','<div class="error">', '</div>');
echo '<br />';
echo form_hidden('formsubmit','yes');
$SubmitButton = array('name' => 'zaloguj', 'value' => $this->lang->line('groupv_selectgroupsubmit7'), 'style' => 'width: 100%;');
echo form_submit($SubmitButton);
echo form_close();
echo '</div>';

?>