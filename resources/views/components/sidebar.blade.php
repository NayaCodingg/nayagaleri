<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color:#cfacad;">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                <i class="bi bi-incognito"></i>
                </div>
                <div class="sidebar-brand-text mx-3">NoysGallery</div>
            </a>

            <!-- Divider -->
            <div class="horizontal-line" style="width:25 0px; height:2px; background-color:white;" ></div>

            <!-- Nav Item - Home -->
            <li class="nav-item active">
                <a class="nav-link" href="{{route('page.home')}}">
                <i class="bi bi-house-door-fill"></i>
                    <span>home</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="{{route('page.foto')}}">
                <i class="bi bi-images"></i>
                    <span>foto</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="{{route('page.album')}}">
                <i class="bi bi-grid-1x2-fill"></i>
                    <span>album</span></a>
            </li>

            <div class="horizontal-line" style="width:200px; height:2px; background-color:white;" ></div>

            <li class="nav-item active">
                <a class="nav-link" href="{{route('page.komentar')}}">
                <i class="bi bi-chat-square-text-fill"></i>
                    <span>komentar</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="{{route('page.like')}}">
                <i class="bi bi-chat-right-heart-fill"></i>
                    <span>like</span></a>
            </li>

            <div class="horizontal-line" style="width:200px; height:2px; background-color:white;" ></div>

            <li class="nav-item active">
                <a class="nav-link" href="{{route('page.save')}}">
                <i class="bi bi-bookmarks-fill"></i>
                    <span>save</span></a>
            </li>


</ul>