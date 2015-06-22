<?php include template("manage_header");?>

<div id="content-wrap">  <!--content start-->
  <div id="content">
    <div id="sidebar" >  <!-- left blck start-->
      <div class="sidebox">
       <ul class="sidemenu"><?php echo mcurrent_misc('subscribe'); ?></ul></div>
	</div>
	</div>
    <div id="main"> 
      <div class="box">
            <h2>Битые ссылки</h2>				
                <div id="list">
				<form method="get" >
					<table id="orders-list" cellspacing="0" cellpadding="0" border="0" class="coupons-table">
					<tr><th width="80">ID</th><th width="400">Битая ссылка</th><th width="300">Путь на битую ссылку</th><th width="80">Дата</th><th width="80">Убрать ссылку</th></tr>
					<?php if(is_array($arrLinks) ){foreach($arrLinks AS $one) { ?>
					<tr <?php echo $index%2?'row-b':'class="row-a"'; ?> id="order-list-id-<?php echo $one['id']; ?>">
						<td><?php echo $one['id']; ?></td>
						<td><a class="deal-title" href="<?php echo $one['dead_link']; ?>" target="_blank"><?php echo $one['dead_link']; ?></a></td>						
						<td><a class="deal-title" href="<?php echo $one['dead_way']; ?>" target="_blank"><?php echo $one['dead_way']; ?></a></td>						

						<td nowrap><?php echo $one['date']; ?></td>
						
						<td>
							<input type="checkbox" name="check[<?php echo $one['id']; ?>]" value="1"/>
						</td>
					</tr>
					<?php }}?>
					<input type="submit" value="Убрать ссылки">
                </form>
					<tr><td colspan="5"><div id="no"><?php echo $pagestring; ?></div></tr>
                    </table>
                    
				</div>
            </div>

        </div>
    </div>
</div>

<?php include template("manage_footer");?>
