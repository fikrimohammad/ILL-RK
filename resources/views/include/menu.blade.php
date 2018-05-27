<li class="nav-item dropdown">
    <a class="dropdown-toggle" href="javascript:void(0)">
        <span class="icon-holder">
            <i class="c-blue-900 ti-book"></i>
        </span>
        <span class="title">Pengelolaan Koleksi</span>
        <span class="arrow">
            <i class="ti-angle-right"></i>
        </span>
    </a>
    <ul class="dropdown-menu">
        <li><a class="sidebar-link" href="{{route('books.index')}}">Pengelolaan Buku</a></li>
        <li><a class="sidebar-link" href="{{route('thesis.index')}}">Pengelolaan Tugas Akhir</a></li>
    </ul>
</li>
<li class="nav-item dropdown">
    <a class="dropdown-toggle" href="javascript:void(0)">
        <span class="icon-holder">
            <i class="c-blue-900 ti-clipboard"></i>
        </span>
        <span class="title">Peminjaman</span>
        <span class="arrow">
            <i class="ti-angle-right"></i>
        </span>
    </a>
    <ul class="dropdown-menu">
        <li><a class="sidebar-link" href="{{route('loan.pending')}}">Permintaan Peminjaman</a></li>
        <li><a class="sidebar-link" href="{{route('loan.active')}}">Peminjaman Aktif</a></li>
        <li><a class="sidebar-link" href="{{route('loan.history')}}">Historis Peminjaman</a></li>
    </ul>
</li>
<li class="nav-item">
    <a class='sidebar-link' href="{{url('/librarian/manage-policy')}}">
          <span class="icon-holder">
            <i class="c-blue-900 ti-view-list-alt"></i>
          </span>
        <span class="title">Kebijakan Ruang Baca</span>
    </a>
</li>