
	<nav class="navbar-default navbar-static-side" role="navigation">
		<div class="sidebar-collapse">
			<ul class="nav metismenu" id="side-menu">
				<li class="nav-header">
					<div class="dropdown profile-element"> <span>
						<img alt="image" class="img-circle" src="<?=base_url();?>/assets/img/profile_small.jpg" />
						 </span>
						<a data-toggle="dropdown" class="dropdown-toggle" href="#">
						<span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">David Williams</strong>
						 </span> <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> </span> </a>
						<ul class="dropdown-menu animated fadeInRight m-t-xs">
							<li><a href="profile.html">Profile</a></li>
							<li><a href="contacts.html">Contacts</a></li>
							<li><a href="mailbox.html">Mailbox</a></li>
							<li class="divider"></li>
							<li><a href="login.html">Logout</a></li>
						</ul>
					</div>
					<div class="logo-element">
					   1CRM
					</div>
				</li>
				<?php
				//print_r($menus);exit();
					foreach($menus as $menulist){
					$redirect 	= $menulist -> mainmenu_redirect;
					$icon 		= $menulist -> mainmenu_icon;
					$desc 		= $menulist -> mainmenu_desc;
					echo "
							 <li>
								<a href=".base_url().$redirect.">
									<i class=\"fa ".$icon." \"></i> 
										<span class=\"nav-label\">".$desc."</span>
								</a>
							</li>
					";	
					}
				?>
			  
			   
			</ul>

		</div>
	</nav>
	
	