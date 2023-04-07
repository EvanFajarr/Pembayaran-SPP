<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="/assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            {{-- {{ auth()->guard('user')->user()->username_15483 }} --}}
                            {{-- <span
                                class="user-level text-capitalize">{{ auth()->guard('user')->user()->level->level_15483 }}</span>
                        </span> --}}
                    </a>
                    <div class="clearfix"></div>
                </div>
            </div>
         
                
           
            <ul class="nav nav-primary">
                <li class="nav-item @if (Request::is('home')) active @endif">
                    <a href="/hisory" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>home</p>
                    </a>
                </li>
               
             
            </ul>
        </div>
    </div>
</div>
