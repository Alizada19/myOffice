
	<input type="hidden" name="ptype" value="1">
	<div class="container mt-5">
		<table class="table table-bordered table-striped custom-table">
			<thead>
				<tr>
					<th colspan="2" class="text-center">On Account Entry Form</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Invoice No:</td>
					<td colspan="3">
						<?=$query->invNo?>
					</td>
				</tr>
				<tr>
					<td style="width: 25%;">Invoice Date:</td>
					<td colspan="3">
						<?=$query->invDate?>
					</td>
				</tr>
				<tr>
					<td style="width: 25%;">Due Date:</td>
					<td colspan="3">
						<?=$query->ddate?>
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
					<td>Remark:</td>
					<td colspan="3">
						<?=$query->remark?>
					</td>
				</tr>
			</tbody>
		</table>
		
		
		<div class="submit-btn" style="margin-bottom:10px;">	
			<a title="Edit Record" href="<?=base_url('codeigniter/public/updateOnaccount/')?><?=$query->Id?>"><input type="button" name="btn_result" style="width:100px;" class="btn btn-primary line" value="Update" /></a>
		</div>
	</div>
