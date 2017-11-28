						<div class="module">
							<div class="module-head">
								<h3>
									<?php echo isset($content_header) ? $content_header : 'No Header Defined'; ?>
									<span class="pull-right"><a href="<?php echo site_url('admin/category/add'); ?>" class="btn btn-danger btn-xs">Add Data</a></span>
								</h3>
							</div>
							<div class="module-body table">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 display" width="100%">
									<thead>
										<tr>
											<th>Title</th>
											<th>Desc</th>
											<th>Image</th>
											<th>Projects</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<tr class="gradeU">
											<td>Data 1</td>
											<td>Data Description</td>
											<td><img width="50" src="<?php echo base_url(); ?>/assets/imgs/1.jpg" alt="Cat Image" /></td>
											<td class="center">123</td>
											<td class="center">
												<a href="#" class="btn btn-info btn-xs"><i class="menu-icon icon-pencil"></i></a>
												<a href="#" class="btn btn-danger btn-xs"><i class="menu-icon icon-trash"></i></a>
											</td>
										</tr>
									</tbody>
									<tfoot>
										<tr>
											<th>Title</th>
											<th>Desc</th>
											<th>Image</th>
											<th>Projects</th>
											<th>Action</th>
										</tr>
									</tfoot>
								</table>
							</div>
						</div><!--/.module-->