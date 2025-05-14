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
			<?=bname($row->location)?>
		</td>
	</tr>
	<tr>
		<td>NAME</td>
		<td style="padding:0px 0px 0px 0px;"><?=$row->cname?></td>
	</tr>
	<tr>
		<td>H/P</td>
		<td style="padding:0px 0px 0px 0px;"><?=$row->phone?></td>
	</tr>
	<tr>
		<td>T/R</td>
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
	</tr>
	<tr>
		<td>GENDER</td>
		<td>
			<?php
				if($row->gender==1)
				{
					echo "MALE";
				}
				else
				{
					echo "FEMALE";
				}	
			?>
		</td>
	</tr>
	<tr>
		<td>DOB</td>
		<td style="padding:0px 0px 0px 0px;"><?=date_format(date_create($row->dob), 'd/m/Y')?></td>
	</tr>
	<tr>
		<td>PRODUCT</td>
		<td style="padding:0px 0px 0px 0px;"><?=$row->product?></td>
	</tr>
	<tr>
		<td>INV AMOUNT</td>
		<td style="padding:0px 0px 0px 0px;"><?=$row->invamount?></td>
	</tr>
	</tbody>
</table>
	<div class="row" style="margin:15px 15px 15px 30%;;width:70%;">	
	    <a title="Edit Record" href="<?=base_url('codeigniter/public/customerUpdate/')?><?=$row->Id?>"><input type="button" name="btn_result" style="width:200px;" class="btn btn-primary line" value="Update" /></a>
	</div>
</div>

