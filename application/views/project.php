<div id="myposition" class="box"><p><a href="<?php echo base_url();?>">首页</a>&nbsp>&nbsp<a href="<?php echo base_url('/project/type');?>">咨询项目</a>&nbsp>&nbsp<?php echo $projecter['name'];?></p></div>
<div class="box">
	<div class="teacher_detail">
		<div class="course_pic">
			<p class="course_name_detail">项目：<?php echo $projecter['name']; ?></p>
	        <?php if (trim($projecter['photo']) != ''):?><img src="<?php echo base_url($projecter['photo']);?>" width="500" height="350"/><?php endif;?>
		</div>	        
		<div id="content_right" class="article_border">
	        <div>	        	
	            <div class="news_main">
	                <?php echo $projecter['content']; ?>
	            </div>
	        </div>
	    </div>
	</div>