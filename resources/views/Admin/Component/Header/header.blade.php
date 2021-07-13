 <!-- Topbar -->
 <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top RT-shadow" id="TopHeader">
    
    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!--Search -->
    @include('/Admin/Component/Header/component/search')

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- alerts msg and notification -->
        @include('/Admin/Component/Header/component/alerts')        

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- profile -->
        @include('/Admin/Component/Header/component/profile')  
    </ul>

</nav>
<!-- End of Topbar -->