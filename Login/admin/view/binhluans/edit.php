<?php if ( ! defined('PATH_PUBLIC')) die ('Bad requested!');
    require_once(PATH_PUBLIC . '/template/admin/header.php');
?>
<div id="wrapper">
	<div class="container">
	    <form method="post" action="admin.php">
	    <input type="hidden" name="binhluan_id" value="<?php echo $binhluan->user_id; ?>">
	    <input type="hidden" name="c" value="binhluan">
	    <input type="hidden" name="a" value="update">
	    <div class="row">   		
	    	<h2>Edit binhluan</h2>
	    </div>
	    <div class="row">   		
	    	<label>bai hat:</label>
	    </div>
		<div class="row">
	    	<select class="form-control p-2 m-2" name="baihat_id">
	    		<option value="admin">Admin</option>
	    		<option value="binhluan">binhluan</option>
	    	</select>
	    </div>
		<div class="row">   		
	    	<label>binhluan:</label>
	    </div>
		<div class="row">
	    	<select class="form-control p-2 m-2" name="binhluan_id">
	    		<option value="admin">Admin</option>
	    		<option value="binhluan">binhluan</option>
	    	</select>
	    </div>
		<div class="row">   		
	    	<label>noi dung:</label>
	    </div>
	    <div class="row">   	
	    	<input type="text" class="form-control p-2 m-2" name="noi_dung" value="<?php echo $binhluan->noi_dung; ?>">
	    </div>
	    <div class="row">   
	    	<button class="btn btn-primary p-2 m-2" type="submit">Apply</button>
	    </div>
	    </form>
	</div>
</div>
<?php require_once(PATH_PUBLIC . '/template/admin/footer.php'); ?>