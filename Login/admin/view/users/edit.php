<?php if ( ! defined('PATH_PUBLIC')) die ('Bad requested!');
    require_once(PATH_PUBLIC . '/template/admin/header.php');
?>
<div id="wrapper">
	<div class="container">
	    <form method="post" action="admin.php">
	    <input type="hidden" name="id" value="<?php echo $user->id; ?>">
	    <input type="hidden" name="c" value="user">
	    <input type="hidden" name="a" value="update">
	    <div class="row">   		
	    	<h2>Edit user</h2>
	    </div>
	    <div class="row">   		
	    	<label>Email:</label>
	    </div>
	    <div class="row">   		
	    	<input type="text" class="form-control p-2 m-2" name="email" value="<?php echo $user->email; ?>">
	    </div>
	    <div class="row">   		
	    	<label>Password:</label>
	    </div>
	    <div class="row">   	
	    	<input type="text" class="form-control p-2 m-2" name="password" value="<?php echo $user->password; ?>">
	    </div>
	    <div class="row">   		
	    	<label>Role:</label>
	    </div>
	    <div class="row">
	    	<select class="form-control p-2 m-2" name="role">
	    		<option value="admin">Admin</option>
	    		<option value="user">User</option>
	    	</select>
	    </div>
	    <div class="row">   		
	    	<label>Status:</label>
	    </div>
	    <div class="row">
	    	<select class="form-control p-2 m-2" name="status">
	    		<option value="visible">Visible</option>
	    		<option value="disbale">Disable</option>
	    	</select>
	    </div>
	    <div class="row">   
	    	<button class="btn btn-primary p-2 m-2" type="submit">Apply</button>
	    </div>
	    </form>
	</div>
</div>
<?php require_once(PATH_PUBLIC . '/template/admin/footer.php'); ?>