<!DOCTYPE html>
<html>
    <head>
        <title><?php if(isset($title)) echo $title; ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="public/css/style.css">
        <link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
        <script src="public/js/jquery-3.2.1.slim.min.js"></script>
        <script type="text/javascript" src="public/js/bootstrap.min.js"></script>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Admin Panel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Users
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="admin.php?c=user&a=index">Danh sach user</a>
                  <a class="dropdown-item" href="admin.php?c=user&a=create">Them moi user</a>
                </div>
              </li>  
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Album
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="admin.php?c=album&a=index">Danh sach album</a>
                  <a class="dropdown-item" href="admin.php?c=album&a=create">Them moi album</a>
                </div>
              </li>       
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Bai Hat
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="admin.php?c=baihat&a=index">Danh sach baihat</a>
                  <a class="dropdown-item" href="admin.php?c=baihat&a=create">Them moi baihat</a>
                </div>
              </li>       
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Binh Luan
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="admin.php?c=binhluan&a=index">Danh sach binhluan</a>
                  <a class="dropdown-item" href="admin.php?c=binhluan&a=create">Them moi binhluan</a>
                </div>
              </li>       
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Ca Si
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="admin.php?c=casi&a=index">Danh sach casi</a>
                  <a class="dropdown-item" href="admin.php?c=casi&a=create">Them moi casi</a>
                </div>
              </li>       
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Chi Tiet Playlist
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="admin.php?c=chitietplaylist&a=index">Danh sach chitietplaylist</a>
                  <a class="dropdown-item" href="admin.php?c=chitietplaylist&a=create">Them moi chitietplaylist</a>
                </div>
              </li>       
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Playlist
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="admin.php?c=playlist&a=index">Danh sach playlist</a>
                  <a class="dropdown-item" href="admin.php?c=playlist&a=create">Them moi playlist</a>
                </div>
              </li>       
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  The Loai
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="admin.php?c=theloai&a=index">Danh sach theloai</a>
                  <a class="dropdown-item" href="admin.php?c=theloai&a=create">Them moi theloai</a>
                </div>
              </li>    
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Yeu Thich
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="admin.php?c=yeuthich&a=index">Danh sach yeuthich</a>
                  <a class="dropdown-item" href="admin.php?c=yeuthich&a=create">Them moi yeuthich</a>
                </div>
              </li>                
            </ul>            
        </div>

        <ul class="nav navbar-nav navbar-right">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Setting
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
              </li>
        </ul>
    </nav>

    
                  
                  
                  
                  
                  
                  
                  