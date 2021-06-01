<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top">
    <div class="container-fluid">
        <div class="navbar-wrapper">
            <div class="navbar-minimize">
                <button class="btn btn-just-icon btn-white btn-fab btn-round">
                    <i class="material-icons text_align-center visible-on-sidebar-regular">lock</i>
                    <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">lock_open</i>
                </button>
            </div>
        </div>
        <button class="navbar-toggler" type="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
        <h4><strong>Welcome  <?php echo $_SESSION['username']." as [".$_SESSION['role']."]"; ?></strong></h4>
        </div>
    </div>
</nav>
<div class="sidebar" data-color="purple" data-background-color="white">
    <div class="logo">
        <a href="index.html" class="logo d-flex align-items-center">
            <img src="assets/img/logo.png"width="100%" alt="">
        </a>
    </div>
    <div class="sidebar-wrapper">
        <?php
        if($_SESSION['role'] != "customer")
        {
        ?>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="home">
                    <i class="material-icons">home</i>
                    <p>Home</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="user">
                    <i class="material-icons">people</i>
                    <p>Users</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="assignTeam">
                    <i class="material-icons">event</i>
                    <p>Open Service Request</p>
                </a>
            </li>
        </ul>
        <?php }else{
            ?>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="home">
                    <i class="material-icons">home</i>
                    <p>Home</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="service">
                    <i class="material-icons">event</i>
                    <p>Service Request</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="report">
                    <i class="material-icons">summarize</i>
                    <p>Report</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="invoice">
                    <i class="material-icons">receipt</i>
                    <p>Invoice</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="my-list">
                    <i class="material-icons">list</i>
                    <p>My List</p>
                </a>
            </li>
        </ul>
        <?php }
            ?>
    </div>
</div>