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
                <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="red">
                                    <h4 class="title">Danh Sách Bình Luận</h4>
                                    <p class="category">cập nhật mới nhất</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-danger">
                                          <th>STT</th>
                                          <th>bai hat</th>
                                          <th>user</th>
                                          <th>noi_dung</th>
                                          <th>Edit</th>
                                          <th>Delete</th>
                                      </thead>
                                      <tbody>
                                        <?php foreach ($list_binhluan as $binhluan) { ?>    
                                          <tr>
                                            <td><?php echo increment_once($index); ?></td>
                                            <?php 
                                                $arr = (array) $list_baihat;
                                                foreach ($arr as $key => $value) {
                                                    $baihat = (array) $value;
                                                    if ($baihat['id'] == $binhluan->baihat_id)   
                                                    echo '<td> '. $baihat['ten'] .' </td>';
                                                }
                                            ?>

                                            <?php 
                                                $arr = (array) $list_user;
                                                foreach ($arr as $key => $value) {
                                                    $user = (array) $value;
                                                    if ($user['id'] == $binhluan->user_id)   
                                                    echo '<td> '. $user['email'] .' </td>';
                                                }
                                            ?>
                                            <td><?php echo $binhluan->noi_dung; ?></td>
                                            <td><a href="admin.php?c=binhluan&a=edit&id=<?php echo $binhluan->id; ?>">Edit</a></td>
                                            <td><a href="admin.php?c=binhluan&a=delete&id=<?php echo $binhluan->id; ?>">Delete</a></td>
                                          </tr>
                                        <?php } ?>
                                      </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row col-lg-8">   
                            <button class="btn btn-danger" type="submit" style="padding: 12px 0"><a href="admin.php?c=binhluan&a=create" style="color: white; padding: 14px 30px;">Create</a></button>                          
                          </div>
                        </div>
                      </div>

<?php require_once(PATH_PUBLIC . '/template/admin/footer.php'); ?>