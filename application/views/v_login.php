 <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>

            <h3>Welcome to SALES1CRM</h3>

            <p>Login in. To see it in action.</p>
           <?php
		   
				//ECHO base_url();
				echo form_open('/user_auth/user_login_process');
			?>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Username" name="username" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="password" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                <a href="#"><small>Forgot password?</small></a>
               
            </form>
           <!-- <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>-->
        </div>
    </div>
