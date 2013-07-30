<div id="myposition" class="box"><p><a href="<?php echo base_url();?>">首页</a>&nbsp>&nbsp<a href="<?php echo base_url('/article/type');?>">讲师动态</a>&nbsp>&nbsp<?php echo $article['title'];?></p></div>
<div class="box">
	<div class="teacher_detail">
		<div id="content_right" class="article_border">
	        <div>
	        	<p class="news_title"><?php echo $article['title']; ?></p>
	            <p class="news_time">发布时间：<?php echo $article['add_date']; ?></p>
	            <div class="news_main">
	                <?php echo $article['content']; ?>
	            </div>
	        </div>
	    </div>
	</div>