<?php $uri = basename($_SERVER['REQUEST_URI']); ?>
<div class="sidebar pe-4 pb-3" style="background-color: #000000;opacity:0.8;">
    <nav class="navbar  navbar-dark">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>CLMS</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle " src="img/admin.jpg" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0"><?php echo $fn ?></h6>
                <span style="color: #F99417;">Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100 ">
            <a href="adminhomepage.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2" style="color: white;"></i>Dashboard</a>

            <a href="add_assistant.php" class="nav-item nav-link"><i class="fa fa-user" aria-hidden="true"></i>
                Add Lab Assistant</a>
            <a href="add_assistant.php" class="nav-item nav-link"><i class="fa fa-building"></i>
                Add Laboratory</a>
            <a href="form.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Schedules</a>
        </div>
    </nav>
</div>