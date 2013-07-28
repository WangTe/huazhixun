<div id="myposition" class="box"><p><a href="<?php echo base_url();?>">首页</a>&nbsp&gt&nbsp咨询项目</p></div>
<div class="box">
	<div id="teacher_detail">
			<div class="title_1">
				<p class="f_l">咨询项目</p>
				<div class="clear"></div>
			</div>
		<div class="course_list">
			<ul>
				<?php $i = 0;?>
				<?php foreach ($projects as $p):?>
				<li>
					<a title="<?php  echo $p['name'];?>" href="<?php echo base_url('/project/?id=' . $p['id']); ?>"><img src="<?php echo base_url($p['photo']); ?>" width="147" height="101" /></a>
					<a title="<?php  echo $p['name'];?>" href="<?php echo base_url('/project/?id=' . $p['id']); ?>"><p class="t_center"><?php  echo $p['name'];?></p></a>			
				</li>
				<?php $i++;?>
				<?php endforeach ?>
				<div class="clear"></div>
				<div id="page">
	        	<?php echo $page_html; ?>
	            </div> 
			</ul>
		</div>
	</div>