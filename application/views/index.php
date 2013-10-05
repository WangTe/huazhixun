<div class="box">
	<div class="box st_main">
		<div id="st_float">
			<div class="title_2">免费试听课程!</div>
			<div>
				<form action="<?php echo base_url('/apply/add')?>" method="post">
					<table align="center" border="0" cellpadding="0" cellspacing="0" width="88%">
						<tr>
							<td width="30">姓名</td>
							<td><input name="name" type="text" size="8" /></td>
						</tr>
						<tr>
							<td>性别</td>
							<td>
								<select name="sex">
									<option value="未选择">未选择</option>
									<option value="男">男</option>
									<option value="女">女</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>单位</td>
							<td><input name="name" type="text" /></td>
						</tr>
						<tr>
							<td>职务</td>
							<td><input name="name" type="text" /></td>
						</tr>
						<tr>
							<td>住址</td>
							<td><input name="name" type="text" /></td>
						</tr>
						<tr>
							<td>手机</td>
							<td><input name="name" type="text" /></td>
						</tr>
						<tr>
							<td></td>
							<td><input name="name" type="submit" value="报名试听" /></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>
	<div class="index_left_item">
		<div class="title_1">
			<a class="f_l" href="<?php echo base_url('/teacher/type');?>"><p>金牌讲师<span>&nbspGold Teachers</span></p></a>
			<a class="f_r" href="<?php echo base_url('/teacher/type');?>"><p class="more">更多 &gt;</p></a>
			<div class="clear"></div>
		</div>
		<div class="index_content" style="width:960px">
			<ul class="index_content_teacher">
			    <?php foreach ($teachers as $t): ?>
				<li>
					<a href="<?php echo base_url('/teacher/?id=' . $t['id']); ?>"><img src="<?php echo base_url($t['photo']); ?>" width="96" height="124" /></a>
					<div>
						<a href="<?php echo base_url('/teacher/?id=' . $t['id']); ?>"><p class="t_center"><?php  echo $t['name'];?></p></a>
						<p class="teacher_remark"><?php  echo $t['position'];?></p>
					</div>
				</li>
				<?php endforeach; ?>

				<div class="clear"></div>
			</ul>
		</div>
	</div>
	<div class="index_left_item">
		<div class="title_1">
			<a class="f_l" href="<?php echo base_url('/course/type');?>"><p>主打课程<span>&nbspLeading Courses</span></p></a>
			<a class="f_r" href="<?php echo base_url('/course/type');?>"><p class="more">更多 &gt;</p></a>
			<div class="clear"></div>
		</div>
		<div class="index_content" style="width:960px">
			<ul class="index_content_course">
			    <?php foreach ($courses as $c):?>
				<li>
					<a title="<?php  echo $c['name'];?>" href="<?php echo base_url('/course/?id=' . $c['id']); ?>"><img src="<?php echo base_url($c['photo']); ?>" width="147" height="101" /></a>
					<a title="<?php  echo $c['name'];?>" href="<?php echo base_url('/course/?id=' . $c['id']); ?>"><p class="t_center"><?php  echo $c['name'];?></p></a>
					<p class="course_remark"><span></span>&nbsp主讲人：<?php  echo $c['professor'];?></p>
				</li>
				<?php endforeach;?>
				<div class="clear"></div>
			</ul>
		</div>
	</div>
	<div class="index_left">
		<div class="index_left_item">
			<div class="title_1">
				<a class="f_l" href="<?php echo base_url('/project/type');?>"><p>咨询项目<span>&nbspJoint Projects</span></p></a>
				<a class="f_r" href="<?php echo base_url('/project/type');?>"><p class="more">更多 &gt;</p></a>
				<div class="clear"></div>
			</div>
			<div class="index_content">
				<ul class="index_content_project">
				    <?php foreach ($projects as $p): ?>
					<li>
						<a href="<?php echo base_url('/project/?id=' . $p['id']); ?>"><img src="<?php echo base_url($p['photo']); ?>" width="144" height="100" /></a>
						<div><a href="<?php echo base_url('/project/?id=' . $p['id']); ?>"><p class="t_center"><?php  echo $p['name'];?> </p></a></div>
					</li>
					<?php endforeach;?>
					<div class="clear"></div>
				</ul>
			</div>
		</div>
		<div class="index_left_item">
			<div class="title_1">
				<a class="f_l" href="<?php echo base_url('/activity/type');?>"><p>公益<span>&nbspCommonweal</span></p></a>
				<a class="f_r" href="<?php echo base_url('/activity/type');?>"><p class="more">更多 &gt;</p></a>
				<div class="clear"></div>
			</div>
			<div class="index_content">
				<ul class="index_content_project">
				    <?php foreach($activities as $a): ?>
					<li>
						<a href="<?php echo base_url('/activity/?id=' . $a['id']); ?>"><img src="<?php echo base_url($a['photo']); ?>" width="144" height="100" /></a>
						<div><a href="<?php echo base_url('/activity/?id=' . $a['id']); ?>"><p class="t_center"><?php echo $a['name'];?> </p></a></div>
					</li>
					<?php endforeach;?>
					<div class="clear"></div>
				</ul>
			</div>
		</div>
	</div>
	<div class="index_right">
		<div class="index_left_item announcement">
			<div class="title_1">
				<a href="<?php echo base_url('/article/type');?>"><p>讲师动态<span>&nbspTeachers' Dynamic</span></p></a>
			</div>
			<div class="index_content_announcement">
				<marquee onmouseover=this.stop() onmouseout=this.start() direction="up" scrollAmount="2">
					<ul>
						<?php foreach ($news as $n): ?>
						<li><a href="<?php echo base_url('/article/?aid=' . $n['aid']); ?>"><p><?php echo $n['title'];?></p></a>
						<?php endforeach; ?>
					</ul>
				</marquee>
			</div>
		</div>
		<div id="link">
			<div class="title_1">
				<p>友情链接<span>&nbspCooperators</span></p>
			</div>
		    <!-- <div class="f_l link_l"><b>友情链接：</b></div> -->
		    <div>
		        <ul>
		            <?php foreach ($links as $l):?>
		            <li><a href="<?php echo $l['url']; ?>" target="_blank" title="<?php echo  $l['title']; ?>"><?php echo $l['name']; ?></a></li>
		            <?php endforeach;?>
		    		<div class="clear"></div>
		        </ul>
		    </div>
		</div>
		<div id="share_message">
			<p>分享到：</p>
			<a rel="nofollow" href="javascript:void((function(s,d,e){try{}catch(e){}var%20f='http://v.t.sina.com.cn/share/share.php?',u=d.location.href,p=['url=',e(u),'&title=',e(d.title),'&appkey=1392530042'].join('');function a(){if(!window.open([f,p].join(''),'mb',['toolbar=0,status=0,resizable=1,width=620,height=450,left=',(s.width-620)/2,',top=',(s.height-450)/2].join('')))u.href=[f,p].join('');};if(/Firefox/.test(navigator.userAgent)){setTimeout(a,0)}else{a()}})(screen,document,encodeURIComponent));"><img src="static/common/img/sinaicon.gif" alt="分享到新浪微博" title="分享到新浪微博" border='0'></a>
			<a href="javascript:void(0)" onclick="{ var _t = encodeURI(document.title);  var _url = encodeURI(window.location); var _appkey = '333cf198acc94876a684d043a6b48e14'; var _site = encodeURI; var _pic = ''; var _u = 'http://v.t.qq.com/share/share.php?title='+_t+'&url='+_url+'&appkey='+_appkey+'&site='+_site+'&pic='+_pic; window.open( _u,'转播到腾讯微博', 'width=700, height=580, top=180, left=320, toolbar=no, menubar=no, scrollbars=no, location=yes, resizable=no, status=no' );  };" ><IMG border=0 title="转播到腾讯微博" src="static/common/img/tencenticon.png" width=16 height=16></a>
			<a href="tencent://message/?uin=<?php echo $qq;?>" alt="杨老师" title="杨老师"><img src="http://wpa.qq.com/pa?p=1:<?php echo $qq;?>:4" border="0" /></a>
			<div class="clear"></div>
		</div>
	</div>
	<div class="clear"></div>
</div>
