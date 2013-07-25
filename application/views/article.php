<div class="box">
<div id="myposition"><p><a href="#">首页</a>&nbsp&gt&gt&nbsp最新动态</p></div>
<div id="teacher_detail">
	<div class="title_4">
		<p>最新动态</p>
	</div>
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