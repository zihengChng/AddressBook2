<!--Edit user Profile Use Modal-->
<div class="modal fade" id="editProfile" tabindex="-1">
	<div class="modal-dialog">
	<script type="text/javascript" src="../js/image.js"></script>

		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
				<h3 class="modal-title">Edit Info</h3>
			</div>
			<div class="modal-body">
				<form id="edit-profile-form" name="edit-profile-form" action="../php/editProfile.php" method="POST" enctype="multipart/form-data">
					<div class="form-group label-static">
						<label class="control-label" for="username">Username</label>
						<input type="text" class="form-control" id="username" name="username" value="" readonly>
					</div>
					<div class="form-group label-static">
						<label class="control-label" for="email">Email</label>
						<input type="email" class="form-control" id="email" name="email" value="">
					</div>
					<div class="form-group label-static">
						<label class="control-label" for="phonenumber">Phone Number</label>
						<!-- <input type="number" class="form-control" id="phonenumber" name="phonenumber" value=""> -->
						<input type="text" class="form-control" id="phonenumber" name="phonenumber" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
					</div>
					<div class="form-group label-static">
						<label class="control-label" for="gender">Gender</label><br>
						<label class="radio-inline">
							<input type="radio" name="gender" id="male" value="Male">Male
						</label>
						<label class="radio-inline">
							<input type="radio" name="gender" id="female" value="Female">Female
						</label>
					</div>
					<div class="form-group label-static">
						<label class="control-label" for="date">Date</label>
						<input type="date" name="date" id="date" class="form-control">
					</div>
					<div class="form-group label-static">
						<label class="control-label" for="avatar">Avatar</label>
						<input type="file" name="avatar" id="avatar">
						<input type="text" readonly  class="form-control" placeholder="Choose a file">
					</div>
			</form>				
			</div>
			<div class="modal-footer">
				<input type="submit" name="submit" class="btn btn-raised btn-inverse" form="edit-profile-form">
				<button type="button" class="btn btn-raised btn-inverse" data-dismiss="modal">Cancel</button>
			</div>
		</div>
	</div>
</div>
<!--Add Group Use Modal-->
<div class="modal fade" id="addGroup" tabindex="-2">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
				<h3 class="modal-title">Add New Group</h3>
			</div>
			<div class="modal-body">
				<form name="addGroup-form" method="" action="">
					<div class="form-group label-floating">
						<label class="control-label" for="groupname">Group Name</label>
						<input type="text" class="form-control" id="groupname" name="groupNameAdd">
					</div>
					<div class="form-group label-floating">
						<label class="control-label" for="gDescription">Description</label>
						<textarea class="form-control" id="gDescription" name="groupDesAdd"></textarea>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-raised btn-inverse" data-dismiss="modal">Cancel</button>
				<button type="submit" class="btn btn-raised btn-inverse addgroup" form="addGroup-form">Add</button>
			</div>
		</div>
	</div>
</div>
<!--Edit Group Use Modal-->
<div class="modal fade" id="editGroup" tabindex="-3">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
				<h3 class="modal-title">Edit Group</h3>
			</div>
			<div class="modal-body">
				<form name="editGroup-form" method="post" action="editView.php">
					<div class="form-group label-static">
						<label class="control-label" for="groupname">Group Name</label>
						<input type="text" class="form-control" id="groupname" name="groupNameEdit">
						<input type="hidden" name="groupIdEdit">
					</div>
					<div class="form-group label-static">
						<label class="control-label" for="gDescription">Description</label>
						<textarea class="form-control" id="gDescription" name="groupDesEdit"></textarea>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-raised btn-inverse" data-dismiss="modal">Cancel</button>
				<button type="submit" class="btn btn-raised btn-inverse update" form="editGroup-form" name="update">Save Change</button>
			</div>
		</div>
	</div>
</div>
<!--Add New Contacts Modal-->
<div class="modal fade" id="addContact">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
				<h3 class="modal-title">Add New Contact</h3>
			</div>
			<div class="modal-body">
				<form id="addContact-form" method="POST" action="../php/addContact.php" enctype="multipart/form-data">
					<div class="form-group label-floating">
						<label class="control-label" for="cName">Contact Name</label>
						<input type="text" class="form-control" id="cName" name="contactname">
						<input type="hidden" name="passid" >
					</div>
					<div class="form-group label-floating">
						<label class="control-label" for="phone">Phone Number</label>
						<input type="text" class="form-control" id="phone" name="phonenumber" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
					</div>
					<div class="form-group label-floating">
						<label class="control-label" for="company">Company Number</label>
						<input type="text" class="form-control" id="company" name="companynumber" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
					</div>
					<div class="form-group label-floating">
						<label class="control-label" for="home_num">Home Number</label>
						<input type="text" class="form-control" id="home_num" name="homenumber" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
					</div>
					<div class="form-group label-floating">
						<label class="control-label" for="email">Email</label>
						<input type="email" class="form-control" id="email" name="email">
					</div>
					<div class="form-group label-floating">
						<label class="control-label" for="company">Company</label>
						<input type="text" class="form-control" id="company" name="company">
					</div>
					<div class="form-group label-floating">
						<label class="control-label" for="education">Education</label>
						<input type="text" class="form-control" id="education" name="education">
					</div>
					<div class="form-group label-floating">
						<label class="control-label" for="birthday">Birthday</label>
						<input type="date" id="birthday" name="birthday">
					</div>
					<div class="form-group label-static">
						<label class="control-label" for="avatar">Avatar</label>
						<input type="file" name="avatars" id="avatars">
						<input type="text" readonly  class="form-control" placeholder="Choose a file">
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-raised btn-inverse" data-dismiss="modal">Cancel</button>
				<button type="submit" class="btn btn-raised btn-inverse addContact" form="addContact-form" name="addContact">Add</button>
			</div>
		</div>
	</div>
</div>
<!--Edit New Contacts Modal-->
<div class="modal fade" id="editContact">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
				<h3 class="modal-title">Edit Contact</h3>
			</div>
			<div class="modal-body">
				<form id="editContact-form" method="POST" action="../php/editDetail.php" enctype="multipart/form-data">
					<div class="form-group label-static">
						<label class="control-label" for="eName">Contact Name</label>
						<input type="text" class="form-control" id="eName" name="contactname">
						<input type="hidden" name="passidupdate">
						<input type="hidden" name="groupid">
					</div>
					<div class="form-group label-static">
						<label class="control-label" for="ePhone">Phone Number</label>
						<input type="text" class="form-control" id="ePhone" name="phonenumber" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
					</div>
					<div class="form-group label-static">
						<label class="control-label" for="eCompany">Company Number</label>
						<input type="text" class="form-control" id="eCompany" name="companynumber" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
					</div>
					<div class="form-group label-static">
						<label class="control-label" for="eHome_num">Home Number</label>
						<input type="text" class="form-control" id="eHome_num" name="homenumber" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
					</div>
					<div class="form-group label-static">
						<label class="control-label" for="eEmail">Email</label>
						<input type="email" class="form-control" id="eEmail" name="email" value="">
					</div>
					<div class="form-group label-static">
						<label class="control-label" for="eCompany">Company</label>
						<input type="text" class="form-control" id="eCompany" name="company">
					</div>
					<div class="form-group label-static">
						<label class="control-label" for="eEducation">Education</label>
						<input type="text" class="form-control" id="eEducation" name="education">
					</div>
					<div class="form-group label-static">
						<label class="control-label" for="eBirthday">Birthday</label>
						<input type="date" id="eBirthday" name="birthday" class="form-control">
					</div>
					<div class="form-group label-static">
						<label class="control-label" for="avatar">Avatar</label>
						<input type="file" name="avatars" id="avatars">
						<input type="text" readonly  class="form-control" placeholder="Choose a file">
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-raised btn-inverse" data-dismiss="modal">Cancel</button>
				<button type="submit" class="btn btn-raised btn-inverse updateContact" form="editContact-form" name="update">Save Change</button>
			</div>
		</div>
	</div>
</div>
<!--View Detailed Modal-->
<div class="modal fade" id="viewDetail">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
				<h3 class="modal-title">View Contact</h3>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-5">
						<img width="140px" height="140px" class="img-circle" onerror="this.src='../img/profile/default-user.png';">
					</div>
					<div class="col-md-7">
						<table class="table">
							<tbody>
								<tr>
									<div>
										<h4><b class="detailName"></b></h4>
									</div>
									<div>
										<h4><span class="material-icons">phone_iphone</span></span><b class="detailPhoneNo"></b></h4>
									</div>
									<div>
										<h4><span class="material-icons">home</span><b class="detailHomeNo"></b></h4>
									</div>
									<div>
										<h4><span class="material-icons">email</span><b class="detailEmail"></b></h4>
									</div>
									<div>
										<h4><span class="material-icons">business</span><b class="detailCompany"></b></h4>
									</div>
									<div>
										<h4><span class="material-icons">phone</span><b class="detailCompanyNo"></b></h4>
									</div>
									<div>
										<h4><span class="material-icons">school</span><b class="detailEdu"></b></h4>
									</div>
									<div>
										<h4><span class="material-icons">cake</span><b class="detailBday"></b></h4>
									</div>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="../js/image.js"></script>

<script type="text/javascript" src="../js/addgroup.js"></script>
<script type="text/javascript" src="../js/edit.js"></script>