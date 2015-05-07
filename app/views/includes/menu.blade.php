<nav id="myNavbar" class="navbar navbar-inverse" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--<a class="navbar-brand" href="#">Brand</a>-->
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="#">Orders</a></li>
                   <!-- <li><a href="#">Users</a></li>-->
					<li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Users<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ URL::to('group') }}">List Groups</a></li>
                            <li><a href="{{ URL::to('group/create') }}">Add Group</a></li>
                            <li class="divider"></li>
							<li><a href="{{ URL::to('user') }}">List Users</a></li>
                            <li><a href="{{ URL::to('user/create') }}">Add User</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Products<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ URL::to('category') }}">List Categories</a></li>
                            <li><a href="{{ URL::to('category/create') }}">Add Category</a></li>
                            <li class="divider"></li>
							<li><a href="{{ URL::to('product') }}">List Products</a></li>
                            <li><a href="{{ URL::to('product/create') }}">Add Product</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Admin <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Goto Shop</a></li>
                            <li><a href="{{ URL::to('logout') }}">Logout</a></li>
                            <!--<li class="divider"></li>
                            <li><a href="#">Settings</a></li>-->
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>