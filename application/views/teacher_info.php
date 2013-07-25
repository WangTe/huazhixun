<div class="box">
<div id="myposition"><p><a href="<?php echo base_url();?>">首页</a>&nbsp>>&nbsp<a href="<?php echo base_url('/teacher/list');?>">金牌讲师</a>&nbsp>>&nbsp<?php echo $teacher['name']?></p></div><!-- id.人名 -->
<div id="teacher_detail">
	 <div class="title_4">
		<p>金牌讲师&nbsp&nbsp杨帆</p>
	</div>
	<div id="share_message">
		<p>分享到：</p>
		<a rel="nofollow" href="javascript:void((function(s,d,e){try{}catch(e){}var%20f='http://v.t.sina.com.cn/share/share.php?',u=d.location.href,p=['url=',e(u),'&title=',e(d.title),'&appkey=1392530042'].join('');function a(){if(!window.open([f,p].join(''),'mb',['toolbar=0,status=0,resizable=1,width=620,height=450,left=',(s.width-620)/2,',top=',(s.height-450)/2].join('')))u.href=[f,p].join('');};if(/Firefox/.test(navigator.userAgent)){setTimeout(a,0)}else{a()}})(screen,document,encodeURIComponent));"><img src="<?php echo base_url('static/common/img/sinaicon.gif');?>" alt="分享到新浪微博" title="分享到新浪微博" border='0'></a>
		<a href="javascript:void(0)" onclick="{ var _t = encodeURI(document.title);  var _url = encodeURI(window.location); var _appkey = '333cf198acc94876a684d043a6b48e14'; var _site = encodeURI; var _pic = ''; var _u = 'http://v.t.qq.com/share/share.php?title='+_t+'&url='+_url+'&appkey='+_appkey+'&site='+_site+'&pic='+_pic; window.open( _u,'转播到腾讯微博', 'width=700, height=580, top=180, left=320, toolbar=no, menubar=no, scrollbars=no, location=yes, resizable=no, status=no' );  };" ><IMG border=0 title="转播到腾讯微博" src="<?php echo base_url('static/common/img/tencenticon.png');?>" width=16 height=16></a>
		<a href="tencent://message/?uin=22062284" alt="杨老师" title="杨老师"><img src="http://wpa.qq.com/pa?p=1:22062284:4" border="0" /></a>
		<!-- <a href="javascript:void((function(s,d,e){if(/renren\.com/.test(d.location))return;var f=’http://share.renren.com/share/buttonshare?link=’,u=d.location,l=d.title,p=[e(u),'&title=',e(l)].join(”);function%20a(){if(!window.open([f,p].join(”),’xnshare’,['toolbar=0,status=0,resizable=1,width=626,height=436,left=',(s.width-626)/2,',top=',(s.height-436)/2].join(”)))u.href=[f,p].join(”);};if(/Firefox/.test(navigator.userAgent))setTimeout(a,0);else%20a();})(screen,document,encodeURIComponent));" title="分享到人人网"><img border=0 title="转播到人人网" src="<?php echo base_url('static/common/img/renren.png');?>" width=16 height=16 /></a> -->
		<a class="fav_renren" rel="nofollow" href="javascript:window.open('http://share.renren.com/share/buttonshare.do?link='+encodeURIComponent(document.location.href)+'&amp;title='+encodeURIComponent(document.title));void(0)"><img border=0 title="转播到人人网" src="<?php echo base_url('static/common/img/renren.png');?>" width=16 height=16 /></a>
		<div class="clear"></div>
	</div>
	<div class="teacher_pic">
		<img src="<?php base_url($teacher['photo']);?>" width="170" height="200" />
		<div class="f_l">
			<p class="teacher_name_detail"><?php  echo $teacher['name'];?>&nbsp&nbsp<span><?php  echo $teacher['position'];?></span></p>
			<p class="teacher_qualification">职业资质:</p>
			<h1 style color:#000;font-size:14px;font-weight:bold;margin-top:15px>
				<?php echo nl2br($teacher['quality']); ?>
			</h1>		
		</div>
		<div class="clear"></div>
	</div>
	<div class="intro">
		<div class="title_4">
			<p><?php echo $teacher['name']; ?>简介</p>
		</div>
		<div class="content_main">
			<?php echo $teacher['intro']; ?>
		</div>
	</div> 
</div>
<div class="secondweb_right">
	<div class="right_item">
		<div class="title_1">
			<a class="f_l" href="#"><p>主打课程<span>&nbspLeading Courses</span></p></a>
			<a class="f_r" href="#"><p class="more">更多 &gt;</p></a>
			<div class="clear"></div>
		</div>
		<ul style="margin-top:10px;margin-bottom:10px;">
			<li><a href="#">班组建设与班组长管理能力提升</a></li>
			<li><a href="#">班组建设与班组长管理能力提升</a></li>
			<li><a href="#">基于阳光心态的企业归属和团队信任再造</a></li>
			<li><a href="#">客户经理的沟通与谈判技巧</a></li>
			<li><a href="#">深度管理沟通大纲</a></li>
			<li><a href="#">团队情绪与压力管理</a></li>
			<li><a href="#">销售团队的激励与管理</a></li>
			<li><a href="#">班组建设与班组长管理能力提升</a></li>
		</ul>
	</div>
	<div class="right_item">
		<div class="title_1">
			<a class="f_l" href="#"><p>最新文章<span>&nbspLasttest Papers</span></p></a>
			<a class="f_r" href="#"><p class="more">更多 &gt;</p></a>
			<div class="clear"></div>
		</div>
		<ul style="margin-top:10px;margin-bottom:15px;">
			<li><a href="#">《第五级班组建设与管理模式》</a></li>
			<li><a href="#">《管理者素质能力提升与卓越团队建设》</a></li>
			<li><a href="#">《管理者卓越领导力》</a></li>
			<li><a href="#">《企业应变策略与管理模式升级》</a></li>
			<li><a href="#">《企业卓越执行力塑造》</a></li>
			<li><a href="#">《金牌员工职业化》</a></li>
			<li><a href="#">《顾问式销售》</a></li>
			<li><a href="#">《深度管理沟通》</a></li>
			<li><a href="#">《管理者角色认知与心智改善》</a></li>
		</ul>
	</div>
	<div class="right_item">
		<div class="title_1">
			<a class="f_l" href="#"><p>教学视频<span>&nbspLasttest Papers</span></p></a>
			<a class="f_r" href="#"><p class="more">更多 &gt;</p></a>
			<div class="clear"></div>
		</div>
		<ul style="margin-top:10px;margin-bottom:15px;">
			<li><a href="#">《第五级班组建设与管理模式》</a></li>
			<li><a href="#">《管理者素质能力提升与卓越团队建设》</a></li>
			<li><a href="#">《管理者卓越领导力》</a></li>
			<li><a href="#">《企业应变策略与管理模式升级》</a></li>
			<li><a href="#">《企业卓越执行力塑造》</a></li>
			<li><a href="#">《金牌员工职业化》</a></li>
			<li><a href="#">《顾问式销售》</a></li>
			<li><a href="#">《深度管理沟通》</a></li>
			<li><a href="#">《管理者角色认知与心智改善》</a></li>
		</ul>
	</div>
</div>
<div class="clear">
</div>