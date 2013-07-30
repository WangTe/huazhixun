<div id="myposition" class="box"><p><a href="<?php echo base_url();?>">首页</a>&nbsp>&nbsp<a href="<?php echo base_url('/teacher/type');?>">金牌讲师</a>&nbsp>&nbsp<?php echo $teacher['name']?></p></div>
<div class="box">
	<div class="teacher_detail">
		<div class="teacher_pic">
			<img src="<?php echo base_url($teacher['photo']);?>" width="170" height="220" />
			<div class="f_l">
				<p class="teacher_name_detail"><?php  echo $teacher['name'];?>&nbsp&nbsp<span><?php  echo $teacher['position'];?></span></p>
				<table align="left" border="0" cellpadding="0" cellspacing="0" width="420">
					<tr>
						<td width="19%" valign="top" class="teacher_qualification">职业资质:</td>
						<td valign="top"><?php echo nl2br($teacher['quality']); ?></td>					
					</tr>
				</table>
				
				<h1 style color:#000;font-size:14px;font-weight:bold;margin-top:15px>
					
				</h1>		
			</div>
			<div class="clear"></div>
		</div>
		<div class="intro">
			<div class="title_4">
				<p><?php echo $teacher['name']; ?>简介</p>
			</div>
			<div class="content_main">
				<?php echo $teacher['intro']; ?>
			</div>
		</div> 
	</div>