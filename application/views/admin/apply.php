
	<div id="right">
		<div id="content">
			<div class="title_2">试听报名</div>
			<div class="content">
				<div>
					<table width="100%" border="0" cellpadding="0" cellspacing="0">
						<tr class="title_3">
							<td width="8%">姓名</td>
							<td width="6%">性别</td>
							<td width="30%">公司</td>
							<td width="14%">职位</td>
							<td width="25%">地址</td>
							<td width="12%">手机</td>
							<td>操作</td>
						</tr>
						<?php foreach ($applys as $apply): ?>
						<tr>
							<td><?php echo $apply['name'];?></td>
							<td><?php echo $apply['sex'];?></td>
							<td><?php echo $apply['company'];?></td>
							<td><?php echo $apply['position'];?></td>
							<td><?php echo $apply['address'];?></td>
							<td><?php echo $apply['phone'];?></td>
							<td>
								<a onclick="return del_alert()" href="index.php?d=admin&c=apply&m=del&id=<?php echo $apply['id']; ?>;?>">删除</a>
							</td>
						</tr>
						<?php endforeach;?>
					</table>
					<div class="page">
						<?php echo $page_html; ?>

					</div>
				</div>
			</div>
		</div>
	</div>