<div id="mainpic_index" class="box">
    <div id="ad_change">
        <div id="ad_img"> 
        	<?php foreach ($ad_img as $row): ?><a href="<?php echo $row['url']; ?>"><img src="<?php echo $row['path']; ?>" width="960" height="190" /></a><?php endforeach; ?>
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
