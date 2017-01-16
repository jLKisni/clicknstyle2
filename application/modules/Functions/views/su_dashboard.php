<!-- Right side column. Contains the navbar and content of the page -->
          <aside class="right-side">
              <!-- Content Header (Page header) -->
              <section class="content-header">
                  <h1>
                    Welcome,
                      <small><?php echo ucfirst($userdetails->userName); ?></small>
                  </h1>
                  <ol class="breadcrumb">
                      <li><a href="<?php echo base_url();?>Functions"><i class="fa fa-home"></i> Home</a></li>
                      <li class="active"><?php echo $title;?></li>
                  </ol>
              </section>

              <!-- Main content -->
              <section class="content">


                <div class="row">

          <div class="col-md-1" align="center">



        <form action="<?php echo base_url();?>Functions/Su_Account_management/updateprofile" method="post">

          </div>
          <div class="col-md-5">

          <h2>Staff Information</h2>
              <input type="hidden" name="staff_id" value="<?php echo $userdetails->personnel_id;?>"/>
              <div class="form-group">
                <label for="nickname">Nickname:</label>
                <input type="text" class="form-control" name="nickname" value="<?php echo $userdetails->nickName;?>" id="nickname" required>
              </div>

              <div class="form-group">
                <label for="firstname">Firstname:</label>
                <input type="text" class="form-control" name="firstname" value="<?php echo $userdetails->firstName;?>" id="firstname" required>
              </div>

              <div class="form-group">
                <label for="lastname">Lastname:</label>
                <input type="text" class="form-control" name="lastname" value="<?php echo $userdetails->lastName;?>" id="lastname" required>
              </div>

              <div class="form-group">
                <label for="contactnumber">Contact Number:</label>
                <input type="text" class="form-control" name="contactnumber" value="<?php echo $userdetails->contactNo;?>" id="contactnumber" required>
              </div>

             <div align="right"> <button type="submit" class="btn btn-success">Update Profile</button></div>


             </form>


          </div>



				<div class="col-md-1" align="center">

				</div>


					<div class="col-md-5">
					<h2>Account Information</h2>
					 <form class="accountInfo" method="post">
             <div class="alert alert-danger" role="alert" hidden></div>
					  <div class="form-group">
					    <label for="username">Username:</label>
					    <input type="text" class="form-control" value="<?php echo $userdetails->userName;?>" id="username">
					  </div>
					  <div class="form-group">
					    <label for="password">New Password:</label>
					    <input type="password" class="form-control" name="password" id="password" value="">
					  </div>
					  <div align="right"><button type="submit" name="submit" class="btn btn-primary">Update Account</button></div>
					</form>

				</div>


	</div> <!-- row -->

              </section><!-- /.content -->
          </aside><!-- /.right-side -->
