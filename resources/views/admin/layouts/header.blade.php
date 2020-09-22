
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{ route('admin.home') }} "><img src="{!! asset('images/logo.png') !!}" alt="Logo"></a>
                <a class="navbar-brand hidden" href="{{ route('admin.home') }}"><img src="{!! asset('images/logo.png') !!}" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i>Dashboard</a>
                    </li>
                    <h3 class="menu-title"><a href=" {{ route('admin.users') }} "> User</a></h3>
    

                    <h3 class="menu-title"><a href="{{ route('admin.blog') }}"> Blog</a></h3>
                    <li>
                        <a href="{{ route('admin.unpublish') }} "> <i class="menu-icon fa fa-book"></i> Unposted Blog</a>
                    </li>
                    <li>
                        <a href=" {{ route('admin.blog.create') }} "> <i class="menu-icon fa fa-book"></i> Create New Blog</a>
                    </li>

                     <h3 class="menu-title"><a href="{{ route('admin.opportunity') }}"> Opportunities</a></h3>
                     <li>
                        <a href="{{ route('admin.opportunity.create') }} "> <i class="menu-icon fa fa-laptop"></i>Create New opportunities</a>
                    </li>
                    <li>
                        <a href="widgets.html"> <i class="menu-icon fa fa-laptop"></i>Scholarships</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Internship</a>
                        <ul class="sub-menu children dropdown-menu">

                            <li><i class="fa fa-id-badge"></i><a href="{{ route('admin.intern') }}">Internships</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="{{ route('admin.intern.create') }}">Create Internship</a></li>                          
                        </ul>
                    </li>
                    <li>
                        <a href="widgets.html"> <i class="menu-icon fa fa-laptop"></i>Grants</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>

    
    <div id="right-panel" class="right-panel">
         <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                       
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->
        