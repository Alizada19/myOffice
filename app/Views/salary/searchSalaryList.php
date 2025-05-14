<form id="form1" method="post" enctype="multipart/form-data" action="<?=base_url('codeigniter/public/salary/searchSalary')?>">
<div style="margin-left:1%;">
	<div>
		<input type="month" name="sdate" id="sdate"  value="<?=date_format(date_create($sdate), 'Y-m');?>" style="width:20%; height:30px;	text-align:center;">
	</div>
	<div style="margin-top:5px; margin-bottom:5px;">
		<select id="location" style="width:20%; text-align:center; height:30px;" name="location" >
			<option value="">Select Location</option>	
			<?=$locations?>	
		</select>
	</div>
	<div style="margin-top:5px; margin-bottom:5px;">
		<select id="nat" style="width:20%; text-align:center; height:30px;" name="nat">
			<option value="">Select Type</option>	
			<?=$nat?>	
		</select>
	</div>
	<div style="margin-bottom:5px;">
		<input type="submit" name="form1"   style="width:100px;" class="btn btn-primary line" onclick="submitForm('<?=base_url('codeigniter/public/salary/searchSalary')?>')" id="search" value="Search" />
	</div>
</div>
</form>
<div id="mainDive">
<div style="width:98%; margin-right:1%; margin-left:1%;">	
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<td>No</td>
				<td>STAFF NAME</td>
				<td>NATIONALITY</td>
				<td>BASIC SALARY (RM)</td>
				<td>GROSS SALARY (RM)</td>
				<td>NET SALARY</td>
				<td>ACTION</td>
			</tr>
		</thead>
		<tbody>
		<?php
		$i=1;
		foreach($records AS $row)
		{
		?>
			<tr>
				<td><?=$i?></td>
				<td><?=getEmp($row->empId)?></td>
				<td><?=getNat2($row->nat)?></td>
				<td><?='RM '.number_format($row->bsalary, 2)?></td>
				<td><?='RM '.number_format($row->gSalary, 2)?></td>
				<td><?='RM '.number_format($row->netSalary, 2)?></td>
				<td>
					<a style="test-decoration: none;" title="View Record" href="<?=base_url('codeigniter/public/salary/view/')?><?=$row->Id?>/2" target="_blank">View</a>
				</td>
			</tr>
		<?php
			$i++;
		}
		?>
		<tr>
			<td colspan="3" >TOTAL</td>
			<td colspan="1" ><?='RM '.number_format($total->tbsalary, 2)?></td>
			<td colspan="1" ><?='RM '.number_format($total->tgSalary, 2)?></td>
			<td colspan="2" ><?='RM '.number_format($total->tnetSalary, 2)?></td>
		</tr>		
		</tbody>
	</table>
</div>
<div class="row" style="margin:15px 15px 15px 1%;;width:40%;">	
   <input type="button" value="Generate File" name="btn_result" onclick="submitForm('<?=base_url('codeigniter/public/salary/generateFile')?>')" style="width:200px;" class="btn btn-primary line"></button>
	
   <input type="button" value="Generate Payslip" name="btn_result" onclick="submitForm('<?=base_url('codeigniter/public/salary/generatePayslipAll')?>')" style="width:200px; margin-left:10px;" class="btn btn-primary line"></button>
</div>
</div>

<script>
function submitForm(actionUrl) {
    let form = document.getElementById("form1");
    form.action = actionUrl;  // Change form action dynamically
	//form.target = "_blank";
    form.submit();  // Submit the form
}
</script>