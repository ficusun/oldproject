<div class="rightbar">	


<div class="rightbar-top10">	
<?php foreach($rightbarone as $value) { ?>

					<a href="/user/<?=$value['nic_name'];?>">
						<div class="rightbar-top10-str" align="center"><?=$value['nic_name']; ?></div>
						<div class="rightbar-top10-str" align="center"><?=$value['rating'];?></div>
					</a>

				<?php } ?> 

</div>

<div class="rightbar-top10">	
<?php foreach($rightbartwo as $value) { ?>
					<a href="/user/<?=$value['nic_name'];?>">
						<div class="rightbar-top10-str" align="center"><?=$value['nic_name']; ?></div>
						<div class="rightbar-top10-str" align="center"><?=$value['rating'];?></div>
					</a>
				<?php } ?> 

</div>

<div class="rightbar-top10">	
<?php foreach($rightbarsecond as $value) { ?>
					<a href="/user/<?=$value['nic_name'];?>">
						<div class="rightbar-top10-str" align="center"><?=$value['nic_name']; ?></div>
						<div class="rightbar-top10-str" align="center"><?=$value['rating'];?></div>
					</a>
				<?php } ?> 

</div>

<div id="field">

</div>
  
</div>