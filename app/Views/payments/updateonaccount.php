<form id="form1" method="post" action="<?=base_url('codeigniter/public/')?>saveUpdateOnaccount">
	<input type="hidden" name="ptype" value="2">
	<div class="container mt-5">
		<table class="table table-bordered table-striped custom-table">
			<thead>
				<tr>
					<th colspan="2" class="text-center">Update Account Entry Form</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td colspan="4">
						<select class="form-select form-select-sm" id="pto" name="pto" required>
							<option value="">Pay To</option>
							<?=$pstr?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Invoice No:</td>
					<td colspan="3">
						<input class="form-control form-control-sm" name="invno" id="invno" type="text" value="<?=$query->invNo?>" placeholder="Invoice No" />
					</td>
				</tr>
				<tr>
					<td style="width: 25%;">Invoice Date:</td>
					<td colspan="3">
						<input class="form-control form-control-sm" name="invDate" id="invDate" type="date" value="<?=$query->invDate?>"  required />
					</td>
				</tr>
				<tr>
					<td style="width: 25%;">Due Date:</td>
					<td colspan="3">
						<input class="form-control form-control-sm" name="ddate" id="ddate" type="date" value="<?=$query->ddate?>"  required />
					</td>
				</tr>
				<tr>
					<td>Amount:</td>
					<td colspan="3">
						<input class="form-control form-control-sm" name="amount" id="amount" type="text" value="<?=$query->amount?>"  placeholder="RM 0" required />
					</td>
				</tr>
				<tr>
					<td colspan="4">
						<select class="form-select form-select-sm" id="pto" name="pto" required>
							<option value="">Pay To</option>
							<?=$dcstr?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Remark:</td>
					<td colspan="3">
						<input class="form-control form-control-sm" name="remark" id="remark"  type="text" value="<?=$query->remark?>" placeholder="Remark" />
					</td>
				</tr>
			</tbody>
		</table>
		
		<div class="submit-btn" style="margin-bottom:10px;">
			<button class="btn btn-primary btn-sm">Save</button>
		</div>
	</div>
</form>	
