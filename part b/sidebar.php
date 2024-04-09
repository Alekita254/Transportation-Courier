  <aside class="main-sidebar sidebar-dark-warning elevation-4 bg-gradient-primary">
    <div class="dropdown bg-gradient-primary">
   	<a href="./" class="brand-link bg-gradient-primary">
        <?php if($_SESSION['login_type'] == 1): ?>
        <h4 class="text-center p-0 m-0"><b>ADMIN PANEL</b></h4>
        <?php else: ?>
        <h4 class="text-center p-0 m-0"><b>STAFF PANEL</b></h4>
        <?php endif; ?>

    </a>
      
    </div>

    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <?php if($_SESSION['login_type'] == 1): ?>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-building"></i>
                    <span>Branches</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="./index.php?page=new_branch">Add New</a>
                        <a class="collapse-item" href="./index.php?page=branch_list">List</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-users"></i>
                    <span>Branch Staff</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="index.php?page=new_staff">Add New</a>
                        <a class="collapse-item" href="index.php?page=staff_list">List</a>
                    </div>
                </div>
            </li>
            <?php endif; ?>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-boxes"></i>
                    <span>Parcels</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="index.php?page=new_parcel">Add New</a>
                        <a class="collapse-item" href="index.php?page=parcel_list">List All</a>
                        <?php 
                            $status_arr = array("Item Accepted<br/>by Courier","Collected","Shipped","In-Transit","Arrived At<br/>Destination","Out for Delivery","Ready to Pickup","Delivered","Picked-up","Unsuccessfull<br/>Delivery Attempt");
                            foreach($status_arr as $k =>$v):
                        ?>
                                <a href="./index.php?page=parcel_list&s=<?php echo $k ?>" class="collapse-item">
                                <p><?php echo $v ?></p>
                                </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="./index.php?page=track">
                    <i class="fas fa-search"></i>
                    <span>Track Parcel</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./index.php?page=reports">
                  <i class="fa fa-file" aria-hidden="true"></i>
                  <span>Reports</span></a>
            </li>
        </ul>
  </aside>
  <script>
  	$(document).ready(function(){
      var page = '<?php echo isset($_GET['page']) ? $_GET['page'] : 'home' ?>';
  		var s = '<?php echo isset($_GET['s']) ? $_GET['s'] : '' ?>';
      if(s!='')
        page = page+'_'+s;
  		if($('.nav-link.nav-'+page).length > 0){
             $('.nav-link.nav-'+page).addClass('active')
  			if($('.nav-link.nav-'+page).hasClass('tree-item') == true){
            $('.nav-link.nav-'+page).closest('.nav-treeview').siblings('a').addClass('active')
  				$('.nav-link.nav-'+page).closest('.nav-treeview').parent().addClass('menu-open')
  			}
        if($('.nav-link.nav-'+page).hasClass('nav-is-tree') == true){
          $('.nav-link.nav-'+page).parent().addClass('menu-open')
        }

  		}
     
  	})
  </script>