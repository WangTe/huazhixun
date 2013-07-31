<div id="myposition" class="box"><p><a href="<?php echo base_url();?>">首页</a>&nbsp>&nbsp<a href="<?php echo base_url('/activity/type');?>">公益</a>&nbsp>&nbsp<?php echo $activity['name'];?></p></div>
<div class="box">
	<div class="teacher_detail">
		<div class="course_pic">
			<p class="course_name_detail">项目：<?php echo $activity['name']; ?></p>
	        <?php if (trim($activity['photo']) != ''):?><img src="<?php echo base_url($activity['photo']);?>" width="500" height="350"/><?php endif;?>
		</div>	
		<div id="content_right" class="article_border">
	        <div>	        	
	            <div class="news_main">
	                <?php echo $activity['content']; ?>
	            </div>
	        </div>
	    </div>
	</div>