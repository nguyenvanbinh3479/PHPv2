<?php if ( ! defined('PATH_PUBLIC')) die ('Bad requested!');
    require_once(PATH_PUBLIC . '/template/admin/header.php');
?>
<div id="wrapper">
	<div class="container">
	    <form method="post" action="admin.php">
	    <input type="hidden" name="c" value="playlist">
	    <input type="hidden" name="a" value="store">
	    <div class="row">   		
	    	<h2>Create playlist</h2>
	    </div>
	    <div class="row">   		
	    	<label>user_id:</label>
	    </div>
	    <div class="row">
	    	<select class="form-control p-2 m-2" name="user_id">
	    		<option value="visible">Visible</option>
	    		<option value="disbale">Disable</option>
	    	</select>
	    </div>
	    <div class="row">   		
	    	<label>ten:</label>
	    </div>
	    <div class="row">   	
	    	<input type="text" class="form-control p-2 m-2" name="ten" required>
	    </div>
		<div class="row">   		
	    	<label>anh:</label>
	    </div>
	    <div class="row">   	
	    	<input type="text" class="form-control p-2 m-2" name="anh" required>
	    </div>
	    <div class="row">   
	    	<button class="btn btn-primary p-2 m-2" type="submit">Apply</button>
	    </div>
	    </form>
	</div>
</div>
<?php require_once(PATH_PUBLIC . '/template/admin/footer.php'); ?>