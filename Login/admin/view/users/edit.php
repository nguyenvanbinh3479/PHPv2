<?php if ( ! defined('PATH_PUBLIC')) die ('Bad requested!');
    require_once(PATH_PUBLIC . '/template/admin/header.php');
?>
<body>
    <div class="wrapper">
        <div class="sidebar" data-color="red" data-image="public/img/sidebar-2.jpg" >
            <div class="logo">
                <a href="admin.php?c=home" class="simple-text">
                    M.S.C - UNIVERSE
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
							<input type="password" class="form-control p-2 m-2" name="password" value="<?php echo $user->password; ?>">
						</div>
						<div class="row">   		
							<label>Role: </label>
						</div>
						<div class="row">
							<select class="form-control p-2 m-2" name="role">
                                <?php 
                                $role = $user->role;
                                    if ($role == "admin") {
                                       echo "<option value='$role' selected>admin</option>";
                                       echo "<option value='user'>user</option>";
                                    }else {
                                       echo "<option value='$role' selected>user</option>";
                                       echo "<option value='admin'>admin</option>";
                                    }
                                ?>
							</select>
						</div>
						<div class="row">   		
							<label>Status:</label>
						</div>
						<div class="row">
							<select class="form-control p-2 m-2" name="status">
                                <?php 
                                    $status = $user->status;
                                    $visible = "visible";
                                    if ($status == "visible") {
                                       echo "<option value='$status' selected>visible</option>";
                                       echo "<option value='disable'>disable</option>";
                                    }else {
                                       echo "<option value='$status' selected>disable</option>";
                                       echo "<option value='$visible'>visible</option>";
                                    }
                                ?>
							</select>
						</div>
						<div class="row">   
                            <button class="btn btn-success p-2 m-2" type="submit" onclick="alert('Add success !')">Apply</button>                          
                            <button class="btn btn-success p-2 m-2" type="submit" style="padding: 12px 0"><a href="admin.php?c=user" style="color: white; padding: 14px 30px;">Cancel</a></button>                          
					    </div>
                    </form>
                </div>
            </div>
<?php require_once(PATH_PUBLIC . '/template/admin/footer.php'); ?>