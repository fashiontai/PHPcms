<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><script language="javascript" type="text/javascript" src="<?php echo JS_PATH;?>dialog.js"></script>
<link href="<?php echo CSS_PATH;?>aihj/table_form.css" rel="stylesheet" type="text/css" />
<!--<link href="<?php echo CSS_PATH;?>dialog.css" rel="stylesheet" type="text/css" />-->
<script type="text/javascript" src="<?php echo JS_PATH;?>dialog.js"></script>
<div class="box">
	<form method="post" action="<?php echo APP_PATH;?>index.php?m=formguide&c=index&a=show&formid=<?php echo $formid;?>&siteid=<?php echo $this->siteid;?>"<?php if($no_allowed) { ?> target="member_login"<?php } ?> name="myform" id="myform">
		<table class="table_form" cellspacing="0">
			<tbody>
				<?php $n=1; if(is_array($forminfos_data)) foreach($forminfos_data AS $field => $info) { ?>
				<?php if($info['formtype']=='omnipotent') { ?>
					<?php $n=1; if(is_array($forminfos_data)) foreach($forminfos_data AS $_fm => $_fm_value) { ?>
						<?php if($_fm_value['iscomnipotent']) { ?>
							<?php $info['form'] = str_replace('{'.$_fm.'}',$_fm_value['form'],$info['form']);?>
						<?php } ?>
					<?php $n++;}unset($n); ?>
				<?php } ?>
				<tr>
			      <th><?php echo $info['name'];?>:</th>
			      <td><?php echo $info['form'];?>  <?php echo $info['tips'];?></td>
			    </tr>
				<?php $n++;}unset($n); ?>
				<tr>
				<th></th>
				<td class="submit">
					<input type="button" id="delect" onclick="iframeClose()" value="取消 ">
					<input type="submit" name="dosubmit" id="dosubmit" value=" 提交 ">
				</td>
				</tr>
			</tbody>
		</table>
	</form>
</div>
<script type="text/javascript">
	function iframeClose(){
		window.parent.document.getElementById("iframe").style.display="none";
	}
</script>