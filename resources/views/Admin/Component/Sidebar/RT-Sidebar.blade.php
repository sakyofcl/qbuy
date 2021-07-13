@include('/Admin/Component/Sidebar/Component/SB-Dropdown')
@include('/Admin/Component/Sidebar/Component/SB-Userdetail')




<ul class="navbar-nav bg-gradient-primary RT-shadow sidebar sidebar-dark accordion" id="accordionSidebar">
    
    <!-- company info -->
    <?php
        echo company('RT-Admin','assets/img/logo/favicon.png','#');
    ?>

    <hr class="sidebar-divider my-0">

    <!-- dropdown links -->

    <!--Dashboard -->
        <?php 
            echo dropdown('D-0','Dashboard','/','fas fa-fw fa-tachometer-alt');
        ?>
    <!-- End Dashboard -->
    <hr class="sidebar-divider">

    <!-- Category -->
        <?php
            echo dropdownHeader('manage category');
            echo dropdown('D-1','category','#','fas fa-fw fa-cog',[['link'=>'#','name'=>'add']],'cat');
        ?>
    <!-- End Category -->
    <hr class="sidebar-divider">

    
    <!-- Sidebar Toggler-->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>