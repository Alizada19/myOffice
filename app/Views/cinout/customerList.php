<form id="form1" method="post" enctype="multipart/form-data" action="<?=base_url('codeigniter/public/bringCustomers')?>">
<div style="margin-left:1%;">
	<div>
		<input type="date" name="sdate" id="sdate" style="width:20%; height:30px;	text-align:center;">
	</div>
	<div>
		<input type="date" name="edate" id="edate" style="width:20%; height:30px;	text-align:center;">
	</div>
	<div style="margin-top:5px; margin-bottom:5px;">
		<select id="location" style="width:20%; text-align:center; height:30px;" name="location" >
			<option value="">Select Location</option>	
			<?=$locations?>	
		</select>
	</div>
	<div style="margin-bottom:5px;">
		<input type="submit" name="form1"   style="width:100px;" class="btn btn-primary line" id="search" value="Search" />
	</div>
</div>
</form>
<div id="mainDive">
<div style="width:98%; margin-right:1%; margin-left:1%;">	
	<table class="table table-bordered table-hover">
		<thead>
			<tr style="background-color: #007bff; color:white;">
				<td>NO</td>
				<td>Date</td>
				<td>OUTLET</td>
				<td>NAME</td>
				<td>H/P</td>
				<td>T/R</td>
				<td>GENDER</td>
				<td>AGE</td>
				<td>DOB</td>
				<td>PRODUCT</td>
				<td>INV.AMOUNT</td>
				<td>Action</td>
			</tr>
			<?php
			$i=1;
			foreach($records AS $row)
			{
				if(($row->location)==5)
				{					
					$bgColor="background-color:#f2f2f2";
				}
				else if(($row->location)==6)
				{
					$bgColor="background-color:#fff9c4";
				}
				else if(($row->location)==11)
				{
					$bgColor="background-color:#ADD8E6";
				}
				else
				{
					$bgColor="background-color:#fff9c4";
				}
			?>
				<tr style=<?=$bgColor?>>
					<td><?=$i?></td>
					<td><?=date_format(date_create($row->saveDate), 'd/m/Y')?></td>
					<td><?=bname($row->location)?></td>
					<td><?=$row->cname?></td>
					<td>
						<?php
							if($row->phone!=0)
							{
								echo $row->phone; 
							}
							else
							{
								echo "NA";
							}		
						?>
					</td>
					<td>
						<?php
							if($row->tr==1)
							{
								echo "T";
							}
							else
							{
								echo "R";
							}		
						?>
					</td>
					<td>
						<?php
							if($row->gender==1)
							{
								echo "MALE";
							}
							else
							{
								ECHO "FEMALE";
							}		
						?>
					</td>
					<td><?=calculateAge($row->dob)?></td>
					<td><?=$row->dob?></td>
					<td><?=$row->product?></td>
					<td><?=$row->invamount?></td>
					<td>
						<a title="Edit Record" href="<?=base_url('codeigniter/public/customerView/')?><?=$row->Id?>/0" target="_blankert"><input type="button" name="btn_result"  class="btn btn-primary line" value="View" /></a>
					</td>
				</tr>
			<?php
				$i++;
			}
			?>
		</thead>
		<tbody>
		
			
		</tbody>
	</table>
</div>
</div>
