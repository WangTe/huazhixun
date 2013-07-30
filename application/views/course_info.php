<div id="myposition" class="box"><p><a href="<?php echo base_url();?>">首页</a>&nbsp>&nbsp<a href="<?php echo base_url('/course/type');?>">主打课程</a>&nbsp>&nbsp<?php echo $courser['name']?></p></div>
<div class="box">
	<div id="teacher_detail">
		<div class="course_pic">
			<p class="course_name_detail">课程：<?php echo $courser['name']; ?></p>
			<p class="news_time"><b>主讲人：</b><?php echo $courser['professor']; ?> &nbsp;&nbsp;&nbsp;&nbsp; <b>课程类型：</b><?php echo $courser['type']?></p>
			<a href="#"><img src="<?php echo base_url($courser['photo']);?>" width="560" height="355" /></a>
		</div>
		<div class="intro">
			<h2>课程背景：</h2>
			<p style="text-indent:2em;color:#000;line-height:1.8em;">明确了战略和目标却无法保障实现;细化了流程和规范却无法保障执行；设计了考核和奖罚却无法驱动绩效……这一系列的问题困扰着每一个管理者，有没有一种管理模式，可以激活团队和组织，使员工能够创造性工作，而不是被动完成任务；使员工能够主动超越目标，而不是应付考核；《卓越团队管理模式》从组织、文化、人性层面对企业管理过程中面临的实际问题进行深刻剖析，并提供系统解决方案，为您导入“全员、全方位、全过程”的高效能团队管理模式，推动组织管理升级。</p>
			<h2>课程受益：</h2>
			<p style="text-indent:2em;color:#000;line-height:1.8em;">找到组织与团队的深层次管理矛盾；找到提升组织与团队管理的新思路；掌握全新的管理“方法论”；导入“全员、全方位、全过程”的卓越团队管理模式</p>
			<h2>培训对象及课时：</h2>
			<p style="text-indent:2em;color:#000;line-height:1.8em;">企业各层级团队管理者</p>
			<p style="text-indent:2em;color:#000;line-height:1.8em;">2天（12小时）</p>
			<h2>课程纲要：</h2>
			<p style="text-indent:2em;color:#000;line-height:1.8em;">第一单元：组织与团队管理瓶颈</p>
			<p style="text-indent:2em;color:#000;line-height:1.8em;">第二单元：组织高效能管理模式</p>
			<p style="text-indent:2em;color:#000;line-height:1.8em;">第三单元：卓越管理模式的组织实践</p>
			<p style="text-indent:2em;color:#000;line-height:1.8em;">第四单元：组织与团队卓越管理模式构建</p>
		</div>
		<!-- <div class="intro">
			<?php echo $courser['intro']; ?>
		</div> -->
	</div>