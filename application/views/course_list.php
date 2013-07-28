<div id="myposition" class="box"><p><a href="<?php echo base_url();?>">首页</a>&nbsp&gt&nbsp<a href="<?php echo base_url('/course/type');?>">主打课程</a></p></div>
<div class="box">
	<div id="teacher_detail">
		<div class="course_list">
			<ul>
				<?php $i = 0;?>
				<?php foreach ($courses as $c):?>
				<li>
					<a title="<?php  echo $c['name'];?>" href="<?php echo base_url('/course/?id=' . $c['id']); ?>"><img src="<?php echo base_url($c['photo']); ?>" width="147" height="101" /></a>
					<a title="<?php  echo $c['name'];?>" href="<?php echo base_url('/course/?id=' . $c['id']); ?>"><p class="t_center"><?php  echo $c['name'];?></p></a>
					<p class="course_remark"><span></span>&nbsp主讲人：<?php  echo $c['professor'];?></p>
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