<div class="secondweb_right">
	<div class="right_item">
		<div class="title_1">
			<a class="f_l" href="<?php echo base_url('/course/type'); ?>"><p>主打课程<span>&nbspLeading Courses</span></p></a>
			<a class="f_r" href="<?php echo base_url('/course/type'); ?>"><p class="more">更多 &gt;</p></a>
			<div class="clear"></div>
		</div>
		<ul style="margin-top:10px;margin-bottom:10px;">
			<?php foreach($course as $c): ?>		
			<li><a href="<?php echo base_url('/course/?id=' . $c['id']); ?>"><?php echo $c['name']?></a></li>
			<?php endforeach;?>
		</ul>
	</div>
	<div class="right_item">
		<div class="title_1">
			<a class="f_l" href="<?php echo base_url('/article/type'); ?>"><p>讲师动态<span>&nbspLatest Dynamic</span></p></a>
			<a class="f_r" href="<?php echo base_url('/article/type'); ?>"><p class="more">更多 &gt;</p></a>
			<div class="clear"></div>
		</div>
		<ul style="margin-top:10px;margin-bottom:15px;">
			<?php foreach($news as $a): ?>				
			<li><a href="<?php echo base_url('/article/?aid=' . $a['aid']); ?>"><?php echo $a['title']?></a></li>
			<?php endforeach;?>
		</ul>
	</div>
	<div class="right_item">
		<div class="title_1">
			<a class="f_l" href="<?php echo base_url('/project/type'); ?>"><p>咨询项目<span>&nbspTeaching Video</span></p></a>
			<a class="f_r" href="<?php echo base_url('/project/type'); ?>"><p class="more">更多 &gt;</p></a>
			<div class="clear"></div>
		</div>
		<ul style="margin-top:10px;margin-bottom:15px;">
			<?php foreach($project as $p): ?>						
			<li><a href="<?php echo base_url('/project/?id=' . $p['id']); ?>"><?php echo $p['name']?></a></li>
			<?php endforeach;?>						
		</ul>
	</div>
</div>
<div class="clear">
</div>
</div>