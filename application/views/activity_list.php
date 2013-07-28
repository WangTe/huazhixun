<div id="myposition" class="box"><p><a href="<?php echo base_url();?>">首页</a>&nbsp&gt&nbsp公益</p></div>
<div class="box">
	<div id="teacher_detail">
		<div class="title_1">
				<p class="f_l">公益</p>
				<div class="clear"></div>
			</div>
		<div class="course_list">
			<ul>
				<?php $i = 0;?>
				<?php foreach ($activities as $a):?>
				<li>
					<a title="<?php  echo $a['name'];?>" href="<?php echo base_url('/activity/?id=' . $a['id']); ?>"><img src="<?php echo base_url($a['photo']); ?>" width="147" height="101" /></a>
					<a title="<?php  echo $a['name'];?>" href="<?php echo base_url('/activity/?id=' . $a['id']); ?>"><p class="t_center"><?php  echo $a['name'];?></p></a>
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