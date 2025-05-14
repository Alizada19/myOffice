
	<input type="hidden" name="ptype" value="1">
	<div class="container mt-5">
		<table class="table table-bordered table-striped custom-table">
			<thead>
				<tr>
					<th colspan="2" class="text-center">Cheque Entry Form</th>
				</tr>
			</thead>
			<tbody>
				<tr>
				    <td>Status:</td>
					<td colspan="3">
					<?php 
					 if($query->status == 1)
					 { 
						echo "Pending";
					 }
					 else if($query->status == 2)
					 {
						 echo "Paid";
					 }
					 else if($query->status == 3)
					 {
						 echo "Conceld";
					 }
					 else if($query->status == 10)
					 {
						 echo "Not Issued";
					 }
					 ?>
					</td>
				</tr>
				<tr>
				    <td>Bank Name:</td>
					<td colspan="3">
						<?=bankname($query->bname)?>
					</td>
				</tr>
				<tr>
					<td style="width: 25%;">Due Date:</td>
					<td colspan="3">
						<?=$query->ddate?>
					</td>
				</tr>
				<tr>
					<td>Cheque No:</td>
					<td colspan="3">
						<?=$query->cno?>
					</td>
				</tr>
				<tr>
					<td>Amount:</td>
					<td colspan="3">
						<?=$query->amount?>
					</td>
				</tr>
				<tr>
					<td>Creditor:</td>
					<td colspan="3">
						<?=getdbc($query->pto)?>
					</td>
				</tr>
				<tr>
					<td>Invoice No:</td>
					<td colspan="3">
						<?=$query->invNo?>
					</td>
				</tr>
				<tr>
					<td>Remark:</td>
					<td colspan="3">
						<?=$query->remark?>
					</td>
				</tr>
			</tbody>
		</table>
		
		
		<div class="submit-btn" style="margin-bottom:10px;">	
			<a title="Edit Record" href="<?=base_url('codeigniter/public/updateCheque/')?><?=$query->Id?>"><input type="button" name="btn_result" style="width:100px;" class="btn btn-primary line" value="Update" /></a>
		</div>
	</div>
