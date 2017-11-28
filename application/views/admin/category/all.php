						<div class="module">
							<div class="module-head">
								<h3>
									<?php echo isset($content_header) ? $content_header : 'No Header Defined'; ?>
									<span class="badge"><?php echo $this->Category_Model->countall(); ?></span>
									<span class="pull-right"><a href="<?php echo site_url('admin/category/add'); ?>" class="btn btn-danger btn-xs">Add Data</a></span>
								</h3>
								<?php
									if(isset($_SESSION['msg'])){
										echo $_SESSION['msg'];
										unset($_SESSION['msg']);
									}
								?>
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
										<?php
											$data=$this->Category_Model->get_all();
											if($data['bool']==true){
												foreach($data['allData'] as $single){
													?>
													<tr>
														<td><?php echo $single['cat_title']; ?></td>
														<td><?php echo $single['cat_desc']; ?></td>
														<td><img width="50" src="<?php echo base_url(); ?>/assets/uploads/<?php echo $single['cat_img']; ?>" alt="Cat Image" /></td>
														<td class="center">123</td>
														<td class="center">
															<a href="<?php echo site_url('admin/category/edit/'.$single['cat_title'].'/'.$single['cat_id']); ?>" class="btn btn-info btn-xs"><i class="menu-icon icon-pencil"></i></a>
															<a onclick="return confirm('Are you sure to delete this data?')" href="<?php echo site_url('admin/category/delete/'.$single['cat_id']); ?>" class="btn btn-danger btn-xs"><i class="menu-icon icon-trash"></i></a>
														</td>
													</tr>
													<?php
												}
											}else{
												?>
												<tr>
													<td colspan="5"><?php echo $this->lang->line('no_data'); ?></td>
												</tr>
												<?php
											}
										?>
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