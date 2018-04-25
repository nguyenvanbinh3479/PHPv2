<?php if ( ! defined('PATH_PUBLIC')) die ('Bad requested!');
    require_once(PATH_PUBLIC . '/template/admin/header.php');
?>
<div id="wrapper">
	<div class="container">
	    <form method="post" action="admin.php">
	    <input type="hidden" name="c" value="chitietplaylist">
	    <input type="hidden" name="a" value="store">
	    <div class="row">   		
	    	<h2>Create chitietplaylist</h2>
	    </div>
	    <div class="row">   		
	    	<label>playlist:</label>
	    </div>
	    <div class="row">
	    	<select class="form-control p-2 m-2" name="playlist_id">
	    		<option value="visible">Visible</option>
	    		<option value="disbale">Disable</option>
	    	</select>
	    </div>
		<div class="row">   		
	    	<label>bai hat:</label>
	    </div>
	    <div class="row">
	    	<select class="form-control p-2 m-2" name="baihat_id">
	    		<option value="visible">Visible</option>
	    		<option value="disbale">Disable</option>
	    	</select>
	    </div>
	    </div>
	    <div class="row">   
	    	<button class="btn btn-primary p-2 m-2" type="submit">Apply</button>
	    </div>
	    </form>
	</div>
</div>
<?php require_once(PATH_PUBLIC . '/template/admin/footer.php'); ?>