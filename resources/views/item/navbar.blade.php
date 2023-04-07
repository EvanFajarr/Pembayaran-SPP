<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
    <div class="container-fluid">
        <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
            <li class="nav-item dropdown hidden-caret">
                <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                    <div class="avatar-sm">
                        <img src="/assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-user animated fadeIn">
                    <div class="dropdown-user-scroll scrollbar-outer">
                        <li>
                            <div class="user-box">
                                <div class="avatar-lg"><img src="/assets/img/profile.jpg" alt="image profile"
                                        class="avatar-img rounded"></div>
                                <div class="u-text">

                               </div>
                        </li>
                        <li>
                           

                            <form action="{{ url('/logout') }}" method="post">
                                @csrf
                                   <button type="submit" class="btn btn-outline-warning "><i class="bi bi-box-arrow-right">Logout Siswa </i></button>
                              </form>
                           
                        </li>
                    </div>
                </ul>
            </li>
        </ul>
    </div>
</nav>
