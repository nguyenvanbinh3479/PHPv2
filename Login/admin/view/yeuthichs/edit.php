<?php if ( ! defined('PATH_PUBLIC')) die ('Bad requested!');
    require_once(PATH_PUBLIC . '/template/admin/header.php');
?>
<div id="wrapper">
	<div class="container">
	    <form method="post" action="admin.php">
	    <input type="hidden" name="id" value="<?php echo $yeuthich->id; ?>">
	    <input type="hidden" name="c" value="yeuthich">
	    <input type="hidden" name="a" value="update">
	    <div class="row">   		
	    	<h2>Edit yeuthich</h2>
	    </div>
		<div class="row">   		
	    	<label>baihat_id:</label>
	    </div>
	    <div class="row">
	    	<select class="form-control p-2 m-2" name="baihat_id">
	    		<option value="admin">Admin</option>
	    		<option value="yeuthich">yeuthich</option>
	    	</select>
	    </div>
		<div class="row">   		
	    	<label>user_id:</label>
	    </div>
	    <div class="row">
	    	<select class="form-control p-2 m-2" name="user_id">
	    		<option value="admin">Admin</option>
	    		<option value="yeuthich">yeuthich</option>
	    	</select>
	    </div>
	    <div class="row">   
	    	<button class="btn btn-primary p-2 m-2" type="submit">Apply</button>
	    </div>
	    </form>
	</div>
</div>
<?php require_once(PATH_PUBLIC . '/template/admin/footer.php'); ?>