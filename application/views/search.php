<div class="box">
    <div id="search">
       	<form action="" method="get">
            <div id="keyword">
                <table width="710" border="0" align="center" cellspacing="0">
                    <tr>
                        <td width="130" style="font-size: 14px;"><b>关键字搜索：</b></td>
                        <td width="80" style="font-size: 14px;">
                        	<select name="f">
                        		<option value="article" <?php if($f == 'article') echo 'selected="selected"'; ?>>文章</option>
                        		<option value="teacher" <?php if($f == 'teacher') echo 'selected="selected"'; ?>>讲师</option>
                        		<option value="course" <?php if($f == 'course') echo 'selected="selected"'; ?>>课程</option>
                        		<option value="project" <?php if($f == 'project') echo 'selected="selected"'; ?>>项目</option>
                        		<option value="activity" <?php if($f == 'activity') echo 'selected="selected"'; ?>>公益</option>
                        	</select>
                        </td>
                    	<td width="351"><input name="keyword" type="text" value="<?php echo $keyword; ?>" size="50" style="font-size: 14px; border: 1px solid #A6B4FF; padding: 4px;" /></td>
                    	<td width="78"><input type="submit" value="搜索" style="font-size: 14px; border: 1px solid #A6B4FF; height:26px; width: 60px;" /></td>
                	</tr>
            	</table>
        	</div>
        </form>
    </div>
    <div id="space"></div>
    <div class="search" id="s_content">
        <table width="960" border="0" align="center" cellspacing="0">
            <tr class="lefttd">
                <td width="694">标题</td>
                <td width="145">时间</td>
            </tr>
        <?php if($f == 'article' || trim($f) == ''): ?>
            <?php foreach($rows as $row): ?>
            <tr>
            	<td><a href="<?php echo base_url('article/?aid=' . $row['aid']); ?>" target="_blank"><?php echo str_replace($keyword, '<font color="red">' . $keyword . '</font>', $row['title']); ?></a></td>
            	<td><?php echo date('Y-m-d', $row['add_time']); ?></td>
            </tr>
			<?php endforeach; ?>
		<?php else: ?>
            <?php foreach($rows as $row): ?>
            <tr>
            	<td><a href="<?php echo base_url($f . '/?id=' . $row['id']); ?>" target="_blank"><?php echo str_replace($keyword, '<font color="red">' . $keyword . '</font>', $row['name']); ?></a></td>
            	<td><?php echo date('Y-m-d', $row['add_time']); ?></td>
            </tr>
			<?php endforeach; ?>
		<?php endif; ?>
		</table>
        <div id="page">
        	<?php echo $page_html; ?>
        </div>
	</div>
</div>