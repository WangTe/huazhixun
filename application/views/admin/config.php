
	<div id="right">
		<div id="content">
			<div class="title_2">配置管理</div>
			<div class="content">
				<div>
					    <?php echo form_open($form_url); ?>
						<table width="100%" border="0" cellpadding="0" cellspacing="0">
							<tr class="title_3">
								<td colspan="2">编辑配置管理</td>
							</tr>
							<tr>
								<td width="9%">名称</td>
								<td width="91%">内容</td>
							</tr>
							<tr>							    
								<td width="9%">地址</td>							
								<td width="91%"><input name="address" type="text" value="<?php echo $address;?>" size="80" /></td>																					
							</tr>
							<tr>							    
								<td width="9%">电话</td>							
								<td width="91%"><input name="phone" type="text" value="<?php echo $phone;?>" size="80" /></td>																					
							</tr>
							<tr>							    
								<td width="9%">传真</td>							
								<td width="91%"><input name="fax" type="text" value="<?php echo $fax;?>" size="80" /></td>																					
							</tr>
							<tr>							    
								<td width="9%">qq</td>							
								<td width="91%"><input name="qq" type="text" value="<?php echo $qq;?>" size="80" /></td>																					
							</tr>																												
						</table>
						<div class="button"><button type="submit">提交</button></div>
					</form>
				</div>
			</div>
		</div>
	</div>
					