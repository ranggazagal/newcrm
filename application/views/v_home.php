<!DOCTYPE html>
<html lang="en">
<?php
				$this->load->view('v_header');
				echo '<body>
						<div id="wrapper">';
							//print_r($menu);exit();
							$this->data['menus'] = $menu;
							$this->load->view('v_navigator', $this->data);	
				echo '	 	<div id="page-wrapper" class="gray-bg dashbard-1">
								<div class="row border-bottom">';
									$this->load->view('v_topview');	
									$this->load->view('v_dashboard');
				echo '			</div>';
				echo '		</div>';
									$this->load->view('v_footer');
				echo '	</div>
					  </body>
					 </html>
			';
