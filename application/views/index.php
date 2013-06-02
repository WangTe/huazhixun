<div>
	<div id="mainpic_index" class="box">
	    <div id="ad_change">
	        <div id="ad_img"> 
	        	<?php foreach ($ad_img as $row): ?><a href="<?php echo $row['url']; ?>"><img src="static/common/img/13541035064144.jpg" width="960" height="190" /></a><?php endforeach; ?>
	        </div>
	        <div class="img_num">
	            <div style="float:right">
	                <p class="img_numcheck">1</p>
	                <?php for($i = 2; $i <= $ad_img_num; ++$i):?>
	                <p><?php echo $i;?></p>
	                
	                <?php endfor; ?>
	            </div>
	        </div>
	    </div>
	</div>
</div>
<div class="box">
	<div class="index_left">
		<div>
			<div class="title_1">
				<div>
					<img src="static/common/img/1001200901131912080FE41CFAC3EB3342B8E31DFBE58671E.gif" />
					<a href="#"><p>讲师</p></a>
					<div class="clear"></div>
				</div>
			</div>
			<div class="index_content">
				<ul class="index_content_teacher">
					<li>
						<a href="#"><img src="static/common/img/杨帆.png" height="106" /></a>
						<div class="f_l">
							<span>杨帆：</span>
							中国高企委职业教育专业委员会  特聘专家；北京大学经济学院 客座教授；北京大学政府管理学院  客座教授；中国竞争力研究中心特聘专家；
						</div>
						<div class="clear"></div>
					</li>
					<li>
						<a href="#"><img src="static/common/img/杨帆.png" height="106" /></a>
						<div class="f_l">
							<span>杨帆：</span>
							中国高企委职业教育专业委员会  特聘专家；北京大学经济学院 客座教授；北京大学政府管理学院  客座教授；中国竞争力研究中心特聘专家；
						</div>
						<div class="clear"></div>
					</li>
					<li>
						<a href="#"><img src="static/common/img/杨帆.png" height="106" /></a>
						<div class="f_l">
							<span>杨帆：</span>
							中国高企委职业教育专业委员会  特聘专家；北京大学经济学院 客座教授；北京大学政府管理学院  客座教授；中国竞争力研究中心特聘专家；
						</div>
						<div class="clear"></div>
					</li>
					<li>
						<a href="#"><img src="static/common/img/杨帆.png" height="106" /></a>
						<div class="f_l">
							<span>杨帆：</span>
							中国高企委职业教育专业委员会  特聘专家；北京大学经济学院 客座教授；北京大学政府管理学院  客座教授；中国竞争力研究中心特聘专家；
						</div>
						<div class="clear"></div>
					</li>
					<div class="clear"></div>
				</ul>
			</div>
		</div>
		<div>
			<div class="title_1">
				<div>
					<img src="static/common/img/1001200901131912080FE41CFAC3EB3342B8E31DFBE58671E.gif" />
					<a href="#"><p>课程</p></a>
					<div class="clear"></div>
				</div>
			</div>
			<div class="index_content">
				<ul class="index_content_course">
					<li>
						<img src="static/common/img/video_img4.jpg" width="205" />
						<p>管理者素质能力提升与卓越团队建设 主讲人：杨帆</p>
					</li>
					<li>
						<img src="static/common/img/video_img4.jpg" width="205" />
						<p>管理者素质能力提升与卓越团队建设 主讲人：杨帆</p>
					</li>
					<li>
						<img src="static/common/img/video_img4.jpg" width="205" />
						<p>管理者素质能力提升与卓越团队建设 主讲人：杨帆</p>
					</li>
					<div class="clear"></div>
				</ul>
			</div>
		</div>
		<div>
			<div class="title_1">
				<div>
					<img src="static/common/img/1001200901131912080FE41CFAC3EB3342B8E31DFBE58671E.gif" />
					<a href="#"><p>项目</p></a>
					<div class="clear"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="index_right">
	</div>
</div>
<div id="link" class="box">
    <div class="f_l link_l"><b>友情链接：</b></div>
    <div>
        <ul>
        	<?php foreach ($links as $row): ?>
            <li><a href="<?php echo $row['url']; ?>" target="_blank" title="<?php echo $row['title']; ?>"><?php echo $row['name']; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="clear"></div>
</div>
