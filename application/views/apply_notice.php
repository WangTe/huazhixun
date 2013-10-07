
<div class="box">
	<div>
        <div class="text">
            <?php if($success == TRUE): ?>
            <p class="apply_notice">恭喜你，免费试听课程申请成功，请耐心等待我们下一步的通知</p>
            <?php else: ?>
            <p class="apply_notice">申请失败，<?php echo $error; ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>