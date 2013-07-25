<div class="box">
<div id="myposition"><p><a href="#">首页</a>&nbsp&gt&gt&nbsp最新动态</p></div>
<div id="teacher_detail">
	<div class="title_4">
		<p>最新动态</p>
	</div>
	<div id="share_message">
		<p>分享到：</p>
		<a rel="nofollow" href="javascript:void((function(s,d,e){try{}catch(e){}var%20f='http://v.t.sina.com.cn/share/share.php?',u=d.location.href,p=['url=',e(u),'&title=',e(d.title),'&appkey=1392530042'].join('');function a(){if(!window.open([f,p].join(''),'mb',['toolbar=0,status=0,resizable=1,width=620,height=450,left=',(s.width-620)/2,',top=',(s.height-450)/2].join('')))u.href=[f,p].join('');};if(/Firefox/.test(navigator.userAgent)){setTimeout(a,0)}else{a()}})(screen,document,encodeURIComponent));"><img src="<?php echo base_url('static/common/img/sinaicon.gif') ?>" alt="分享到新浪微博" title="分享到新浪微博" border='0'></a>
		<a href="javascript:void(0)" onclick="{ var _t = encodeURI(document.title);  var _url = encodeURI(window.location); var _appkey = '333cf198acc94876a684d043a6b48e14'; var _site = encodeURI; var _pic = ''; var _u = 'http://v.t.qq.com/share/share.php?title='+_t+'&url='+_url+'&appkey='+_appkey+'&site='+_site+'&pic='+_pic; window.open( _u,'转播到腾讯微博', 'width=700, height=580, top=180, left=320, toolbar=no, menubar=no, scrollbars=no, location=yes, resizable=no, status=no' );  };" ><IMG border=0 title="转播到腾讯微博" src="<?php echo base_url('static/common/img/tencenticon.png') ?>" width=16 height=16></a>
		<a href="tencent://message/?uin=22062284" alt="杨老师" title="杨老师"><img src="http://wpa.qq.com/pa?p=1:22062284:4" border="0" /></a>
		<!-- <a href="javascript:void((function(s,d,e){if(/renren\.com/.test(d.location))return;var f=’http://share.renren.com/share/buttonshare?link=’,u=d.location,l=d.title,p=[e(u),'&title=',e(l)].join(”);function%20a(){if(!window.open([f,p].join(”),’xnshare’,['toolbar=0,status=0,resizable=1,width=626,height=436,left=',(s.width-626)/2,',top=',(s.height-436)/2].join(”)))u.href=[f,p].join(”);};if(/Firefox/.test(navigator.userAgent))setTimeout(a,0);else%20a();})(screen,document,encodeURIComponent));" title="分享到人人网"><img border=0 title="转播到人人网" src="static/common/img/renren.png" width=16 height=16 /></a> -->
		<a class="fav_renren" rel="nofollow" href="javascript:window.open('http://share.renren.com/share/buttonshare.do?link='+encodeURIComponent(document.location.href)+'&amp;title='+encodeURIComponent(document.title));void(0)"><img border=0 title="转播到人人网" src="<?php echo base_url('static/common/img/renren.png')?>" width=16 height=16 /></a>
		<div class="clear"></div>
	</div>
	<div id="content_right" class="list_content_right">
        <div>
            <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
            	<?php foreach ($news as $row): ?>
                <tr>
                    <td><p><a href="<?php echo base_url('article/?aid=' . $row['aid']); ?>"><?php echo $row['title'];?></a></p></td>
                    <td width="200" align="center"><?php echo $row['add_date']; ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <!-- <div id="page">
        	<?php echo $page_html; ?>
        </div> -->
    </div>
</div>