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
                    <li class="active">
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
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Material Dashboard Heading</h4>
                                    <p class="category">Created using Roboto Font Family</p>
                                </div>
                                <div class="card-content">
                                    <div id="typography">
                                        <div class="title">
                                            <h2>Typography</h2>
                                        </div>
                                        <div class="row">
                                            <div class="tim-typo">
                                                <h1>
                                                    <span class="tim-note">Header 1</span>The Life of Material Dashboard </h1>
                                            </div>
                                            <div class="tim-typo">
                                                <h2>
                                                    <span class="tim-note">Header 2</span>The life of Material Dashboard </h2>
                                            </div>
                                            <div class="tim-typo">
                                                <h3>
                                                    <span class="tim-note">Header 3</span>The life of Material Dashboard </h3>
                                            </div>
                                            <div class="tim-typo">
                                                <h4>
                                                    <span class="tim-note">Header 4</span>The life of Material Dashboard </h4>
                                            </div>
                                            <div class="tim-typo">
                                                <h5>
                                                    <span class="tim-note">Header 5</span>The life of Material Dashboard </h5>
                                            </div>
                                            <div class="tim-typo">
                                                <h6>
                                                    <span class="tim-note">Header 6</span>The life of Material Dashboard </h6>
                                            </div>
                                            <div class="tim-typo">
                                                <p>
                                                    <span class="tim-note">Paragraph</span>
                                                    I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.</p>
                                            </div>
                                            <div class="tim-typo">
                                                <span class="tim-note">Quote</span>
                                                <blockquote>
                                                    <p>
                                                        I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.
                                                    </p>
                                                    <small>
                                                        Kanye West, Musician
                                                    </small>
                                                </blockquote>
                                            </div>
                                            <div class="tim-typo">
                                                <span class="tim-note">Muted Text</span>
                                                <p class="text-muted">
                                                    I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...
                                                </p>
                                            </div>
                                            <div class="tim-typo">
                                                <span class="tim-note">Primary Text</span>
                                                <p class="text-primary">
                                                    I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                                            </div>
                                            <div class="tim-typo">
                                                <span class="tim-note">Info Text</span>
                                                <p class="text-info">
                                                    I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                                            </div>
                                            <div class="tim-typo">
                                                <span class="tim-note">Success Text</span>
                                                <p class="text-success">
                                                    I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                                            </div>
                                            <div class="tim-typo">
                                                <span class="tim-note">Warning Text</span>
                                                <p class="text-warning">
                                                    I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...
                                                </p>
                                            </div>
                                            <div class="tim-typo">
                                                <span class="tim-note">Danger Text</span>
                                                <p class="text-danger">
                                                    I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                                            </div>
                                            <div class="tim-typo">
                                                <h2>
                                                    <span class="tim-note">Small Tag</span>
                                                    Header with small subtitle
                                                    <br>
                                                    <small>Use "small" tag for the headers</small>
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php require_once(PATH_PUBLIC . '/template/admin/footer.php'); ?>                