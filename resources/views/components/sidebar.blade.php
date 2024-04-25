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
                <span class="nav-link"  data-toggle="modal" data-target="#exampleModalCenter" type="button">
                    <span>+ Album</span>
                </span>

                <!-- Button trigger modal -->

  <form action="/upl_album" method="post" class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    @csrf
    @method('POST')
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">New Album</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        {{-- <input type="text" name=""> --}}
        <input type="text" class="form-control" placeholder="Album Name" name="albumname" aria-label="albumname" aria-describedby="basic-addon1">
        <input type="text" class="form-control" placeholder="Description" name="desc" aria-label="albumname" aria-describedby="basic-addon1">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </form>
            </li>
            <li class="nav-item active">
              <a href="/albums" class="nav-link"  >
                  <span>MyAlbums</span>
              </a>
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Post</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Components:</h6>
                        <a class="collapse-item" href="{{route('page.upfoto.upload')}}">Upload</a>
                        <a class="collapse-item" href="{{route('page.foto')}}">Foto</a>
                    </div>
                </div>
            </li>
            <div class="horizontal-line" style="width:200px; height:2px; background-color:white;" ></div>

            <li class="nav-item active">
                <a class="nav-link" href="{{route('page.komentar')}}">
                <i class="bi bi-chat-square-text-fill"></i>
                    <span>komentar</span></a>
            </li>

           

            <div class="horizontal-line" style="width:200px; height:2px; background-color:white;" ></div>

            <li class="nav-item active">
                <a class="nav-link" href="{{route('page.save')}}">
                <i class="bi bi-bookmarks-fill"></i>
                    <span>save</span></a>
            </li>


</ul>
