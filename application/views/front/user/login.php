<div class="panel panel-default content-wrapper">
	<div class="panel-heading">
		<h3 class="panel-title">
			<?php echo isset($content_header) ? $content_header :''; ?>
		</h3>
	</div>
	<div class="panel-body">
		<!-- User Wrapper Start -->
		<div class="row">
			<div class="col-md-12">
				<table class="table table-bordered">
					<tr>
						<th>Email/Phone</th>
						<td><input type="email" name="email" class="form-control" /></td>
					</tr>
					<tr>
						<th>Password</th>
						<td><input type="password" name="pwd" class="form-control" /></td>
					</tr>
					<tr>
						<td colspan="2"><input type="submit" class="btn btn-danger" value="login" /></td>
					</tr>
				</table>
			</div>
		</div>
		<!-- User Wrapper End -->
		
	</div>
</div>