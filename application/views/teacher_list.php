<div id="myposition" class="box"><p><a href="<?php echo base_url();?>">首页</a>&nbsp&gt&nbsp<a href="<?php echo base_url('/teacher/type');?>">金牌讲师</a>&nbsp&gt&nbsp<?php echo $teachers['name']?></p></div>
<div class="box">
	<div id="teacher_detail">
			<div class="title_1">
				<a class="f_l" href="<?php echo base_url('/teacher/type');?>"><p>金牌讲师</p></a>
				<div class="clear"></div>
			</div>
		<div class="teacher_list">
			<ul>
				<?php foreach ($teachers as $t):?>
				<li>
					<a href="<?php echo base_url('/teacher/type/?id=' . $t['id']); ?>"><img src="<?php echo base_url($t['photo']); ?>" width="102" height="132" /></a>
					<div>
						<a href="<?php echo base_url('/teacher/type/?id=' . $t['id']); ?>"><p class="t_center"><?php  echo $t['name'];?></p></a>
						<p class="teacher_remark"><?php  echo $t['position'];?></p>
					</div>
				</li>
				<?php endforeach; ?>
				<div class="clear"></div>
				<div id="page">
	        	<?php echo $page_html; ?>
	            </div>
			</ul>
		</div>
	</div>