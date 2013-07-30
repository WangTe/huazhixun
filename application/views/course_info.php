<div id="myposition" class="box"><p><a href="<?php echo base_url();?>">首页</a>&nbsp>&nbsp<a href="<?php echo base_url('/course/type');?>">主打课程</a>&nbsp>&nbsp<?php echo $courser['name']?></p></div>
<div class="box">
	<div class="teacher_detail">
		<div class="course_pic">
			<p class="course_name_detail">课程：<?php echo $courser['name']; ?></p>
			<p class="news_time"><b>主讲人：</b><?php echo $courser['professor']; ?> &nbsp;&nbsp;&nbsp;&nbsp; <b>课程类型：</b><?php echo $courser['type']?></p>			
		</div>
		<div class="intro">
			<?php echo $courser['content'];?>
		</div>		
	</div>