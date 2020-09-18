
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="/admin"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>




            <li>
                <a href="#" data-toggle="collapse" data-target="#users"><i class="fa fa-wrench fa-fw "></i> Users<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse" id="users">
                    <li>
                        <a href="{{route('users.index')}}">All Users</a>
                    </li>
                    <li>
                        <a href="{{route('users.create')}}">Create User</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>




            <li>
                <a href="#" data-toggle="collapse" data-target="#posts"><i class="fa fa-wrench fa-fw"></i> Posts<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse" id="posts">
                    <li>
                        <a href="{{route('posts.index')}}">All Posts</a>
                    </li>
                    <li>
                        <a href="{{route('posts.create')}}">Create Post</a>
                    </li>
                    <li>
                        <a href="{{route('comments.index')}}">Comments</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>




            <li>
                <a href="#" data-toggle="collapse" data-target="#categories"><i class="fa fa-wrench fa-fw"></i> Categories<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse" id="categories">
                    <li>
                        <a href="{{route('categories.index')}}">All Categories</a>
                    </li>
                    <li>
                        <a href="{{route('categories.create')}}">Create Category</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>





            <li>
                <a href="#" data-toggle="collapse" data-target="#media"><i class="fa fa-wrench fa-fw" ></i> Media<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse" id="media">
                    <li>
                        <a href="{{route('media.index')}}">All Media</a>
                    </li>
                    <li>
                        <a href="{{route('media.create')}}">Create Media</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>

        </ul>
    </div>






    <!-- /.sidebar-collapse -->
</div>