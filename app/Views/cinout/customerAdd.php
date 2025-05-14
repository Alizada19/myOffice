<style>
	.styled-dropdown {
		  appearance: none; /* Removes default dropdown arrow */
		  -webkit-appearance: none; /* Removes dropdown arrow in Safari */
		  -moz-appearance: none; /* Removes dropdown arrow in Firefox */
		  padding: 10px;
		  border: 1px solid #ccc;
		  
		  background-color: white;
		
		  color: #333;
		  text-align: left;
		}

		.styled-dropdown:focus {
		  outline: none;
		  border-color: #007BFF; /* Optional: Highlight border color on focus */
		}

		.styled-dropdown::-ms-expand {
		  display: none; /* Hides the dropdown arrow in IE */
		}
		
		
</style>
<form id="reportform" action="<?=base_url('codeigniter/public/customerSave')?>" method="post">
<table class="table table-bordered table-hover" style="width:40%;text-align:center;margin-left:30%; margin-right:30%;">
	<thead>
		<tr>
			<td  colspan="4" style="text-align:center;font-weight:bold;">CUSTOMER DETAILS</td>
		</tr>
	</thead>
	<tbody>
	<tr>
		<td>OUTLET</td>
		<td style="padding:0px 0px 0px 0px;">
			<select id="location" class="styled-dropdown" style="width:100%; text-align:center; height:35px;border:none;" name="location" >
				<?=$locations?>
			</select>
		</td>
	</tr>
	<tr>
		<td>NAME</td>
		<td style="padding:0px 0px 0px 0px;"><input type="text" name="cname" id="cname" placeholder="NAME" onblur="makeCapital(this.value,'cname')" style="border:none; text-align:center; width:100%;height:35px;" required></td>
	</tr>
	<tr>
		<td>H/P</td>
		<td style="padding:0px 0px 0px 0px;"><input type="text" name="phone" id="phone" placeholder="H/P" style="border:none; text-align:center; width:100%;height:35px;" required></td>
	</tr>
	<tr>
		<td>T/R</td>
		<td>
			T
			<input type="radio" name="tr" id="tr" value="1" style="margin-left:5px; margin-right:50px;">
			R
			<input type="radio" name="tr" id="tr" value="2" style="margin-left:5px; margin-right:5px;" checked>
		</td>
	</tr>
	<tr>
		<td>GENDER</td>
		<td>
			MALE
			<input type="radio" name="gender" id="gender" value="1" style="margin-left:5px; margin-right:35px;" checked>
			FEMALE
			<input type="radio" name="gender" id="gender" value="2" style="margin-left:5px; margin-right:5px;">
		</td>
	</tr>
	<tr>
		<td>DOB</td>
		<td style="padding:0px 0px 0px 0px;"><input type="date" name="dob" id="dob" placeholder="T/R" style="border:none; text-align:center; width:100%;height:35px;"></td>
	</tr>
	<tr>
		<td>PRODUCT</td>
		<td style="padding:0px 0px 0px 0px;"><input type="text" name="product" id="product" onblur="makeCapital(this.value,'product')" placeholder="PRUDUCT" style="border:none; text-align:center; width:100%;height:35px;"></td>
	</tr>
	<tr>
		<td>INV AMOUNT</td>
		<td style="padding:0px 0px 0px 0px;"><input type="text" name="invamount" id="invamount" placeholder="AMOUNT" style="border:none; text-align:center; width:100%;height:35px;"></td>
	</tr>
	</tbody>
</table>
	<div class="row" style="margin:15px 15px 15px 30%;;width:70%;">	
	   <input type="submit" value="Save Details" name="btn_result" style="width:200px;" class="btn btn-primary line"></button>
	</div>
</div>
</form>
<table class="table table-bordered table-hover" style="width:98%;text-align:center;margin-left:1%; margin-right:1%;">
	<thead>
		<tr>
			<td  colspan="7" style="text-align:center;font-weight:bold;">CUSTOMERS</td>
		</tr>
	</thead>
	<tbody>
	<tr>
		<td style="text-align:center;font-weight:bold;">No</td>
		<td style="text-align:center;font-weight:bold;">NAME</td>
		<td style="text-align:center;font-weight:bold;">H/P</td>
		<td style="text-align:center;font-weight:bold;">T/R</td>
		<td style="text-align:center;font-weight:bold;">GENDER</td>
		<td style="text-align:center;font-weight:bold;">AGE</td>
		<td style="text-align:center;font-weight:bold;">DOB</td>
		<td style="text-align:center;font-weight:bold;">PRODUCT</td>
		<td style="text-align:center;font-weight:bold;">INV AMOUNT</td>
		<td style="text-align:center;font-weight:bold;">ACTION</td>
	</tr>
	<?php
	$i=1;
	foreach($records AS $row2)
	{
	?>
		<tr>
			<td><?=$i?></td>
			<td><?=$row2->cname?></td>
			<td><?=$row2->phone?></td>
			<td>
				<?php
					if($row2->tr==1)
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
				if($row2->gender==1)
				{
					echo "MALE";
				}
				else
				{
					echo "FEMALE";
				}		
			?>
			
			</td>
			<td><?=calculateAge($row2->dob)?></td>
			<td><?=$row2->dob?></td>
			<td><?=$row2->product?></td>
			<td><?=$row2->invamount?></td>
			<td>
				<a title="Edit Record" href="<?=base_url('codeigniter/public/customerView/')?><?=$row2->Id?>/0" target="_blankert"><input type="button" name="btn_result"  class="btn btn-primary line" value="View" /></a>
			</td>
		</tr>
	<?php
		$i++;
	}
	?>
	</tbody>
</table>
<script>
function makeCapital(value, id)
{
	myString = value.toUpperCase();
	document.getElementById(id).value = myString;
	//document.getElementById(id).style="background-color:#b3d7ff87;font-size:30px;font-weight:bold";
}
</script>
