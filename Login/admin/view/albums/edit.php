<?php if ( ! defined('PATH_PUBLIC')) die ('Bad requested!');
    require_once(PATH_PUBLIC . '/template/admin/header.php');
?>
<body>
    <div class="wrapper">
        <div class="sidebar" data-color="red" data-image="public/img/sidebar-2.jpg" >
            <div class="logo">
                <a href="admin.php?c=home" class="simple-text">
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="admin.php?c=home">
                            <i class="material-icons">home</i>
                            <p>home</p>
                        </a>
                    </li>
                    <li>
                        <a href="admin.php?c=notification">
                            <i class="material-icons">notifications</i>
                            <p>Notifications</p>
                        </a>
                    </li>
                    <li>
                        <a href="admin.php?c=profile">
                            <i class="material-icons">account_box</i>
                            <p>Admin Profile</p>
                        </a>
                    </li>
                    <li>
                        <a href="admin.php?c=setting">
                            <i class="material-icons">settings</i>
                            <p>Settings</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="https://goo.gl/CYpD4c">Channel</a>
                        <a class="navbar-brand" href="https://nguyenvanbinh3479.github.io/">Blog</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="admin.php?c=notification" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">notifications</i>
                                    <span class="notification">1</span>
                                    <p class="hidden-lg hidden-md">Notifications</p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="admin.php?c=notification">Tuấn responded to your email</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="admin.php?c=profile" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">person</i>
                                    <p class="hidden-lg hidden-md">Profile</p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="admin.php?c=login">Logout</a>
                                    </li>
                                    <li>
                                        <a href="admin.php?c=setting">Settings</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <form class="navbar-form navbar-right" role="search">
                            <div class="form-group  is-empty">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="material-input"></span>
                            </div>
                            <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                <i class="material-icons">search</i>
                                <div class="ripple-container"></div>
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
					<form method="post" action="admin.php">
						<input type="hidden" name="id" value="<?php echo $album->id; ?>">
						<input type="hidden" name="c" value="album">
						<input type="hidden" name="a" value="update">
						<div class="row">   		
							<h2>Edit album</h2>
						</div>
						<div class="row">   		
							<label>anh:</label>
						</div>
						<div class="row">   	
							<input type="text" class="form-control p-2 m-2" name="anh" value="<?php echo $album->anh; ?>">
						</div>
						<div class="row">   		
							<label>ten:</label>
						</div>
						<div class="row">   	
							<input type="text" class="form-control p-2 m-2" name="ten" value="<?php echo $album->ten; ?>">
						</div>
						<div class="row">   		
							<label>casi:</label>
						</div>
						<div class="row">   	
							<select class="form-control p-2 m-2" name="casi_id">
                                <?php
                                foreach ($list_casi as $value)
                                {
                                    $casi = (array)$value;
                                    $id = $casi['id'];
                                    $id_casi = $album->casi_id;
                                    $name = $casi['ten'];
                                    if ($id_casi == $id) {
                                        echo "<option value='$id' selected>$name
                                        </option>";
                                    }else {

                                        echo "<option value='$id'> $name
                                        </option>";
                                    }
                                }            
                                ?>
							</select>
						</div>
						<div class="row">   		
							<label>theloai:</label>
						</div>
						<div class="row">   	
							<select class="form-control p-2 m-2" name="theloai_id">
                                <?php
                                foreach ($list_theloai as $value)
                                {
                                    $theloai = (array)$value;
                                    $id = $theloai['id'];
                                    $id_theloai = $album->theloai_id;
                                    $name = $theloai['ten'];
                                    if ($id_theloai == $id) {
                                        echo "<option value='$id' selected>$name
                                        </option>";
                                    }else {

                                        echo "<option value='$id'> $name
                                        </option>";
                                    }
                                }            
                                ?>
							</select>
						</div>
						<div class="row">   
                            <button class="btn btn-warning p-2 m-2" type="submit" onclick="alert('Add success !')">Apply</button>                           
                            <button class="btn btn-warning p-2 m-2" type="submit" style="padding: 12px 0"><a href="admin.php?c=album" style="color: white; padding: 14px 30px;">Cancel</a></button>                          
					    </div>
					</form>
				</div>
			</div>
<?php require_once(PATH_PUBLIC . '/template/admin/footer.php'); ?>