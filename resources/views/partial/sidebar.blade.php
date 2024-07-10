<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
      <div
        class="brand-logo d-flex align-items-center justify-content-between"
      >
        <a href="./index.html" class="text-nowrap logo-img">
          <img
            src="{{asset ('asset/template/src/assets/images/logos/chamber.png')}}"
            width="250"
            alt=""
            style="width: 300pxq; margin-right: 20px"
          />
        </a>
        <div
          class="close-btn d-xl-none d-block sidebartoggler cursor-pointer"
          id="sidebarCollapse"
        >
          <i class="ti ti-x fs-8"></i>
        </div>
      </div>
      <!-- Sidebar navigation-->
      <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
        <ul id="sidebarnav">
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Home</span>
          </li>
          <li class="sidebar-item ">
            <a
              class="sidebar-link @yield('dashboard')"
              href="{{route ('dashboard')}}"
              aria-expanded="false"
            >
              <span>
                <i class="ti ti-layout-dashboard"></i>
              </span>
              <span class="hide-menu">Dashboard</span>
            </a>
          </li>
          <li class="sidebar-item ">
            <a
              class="sidebar-link @yield('mahasiswa')"
              {{-- href="{{route ('mahasiswa')}}" --}}
              aria-expanded="false"
            >
              <span>
                <i class="ti ti-layout-dashboard"></i>
              </span>
              <span class="hide-menu">Data Mahasiswa</span>
            </a>
          </li>
          <li class="sidebar-item ">
            <a
              class="sidebar-link @yield('hp')"
              href="{{route ('index')}}"
              aria-expanded="false"
            >
              <span>
                <i class="ti ti-layout-dashboard"></i>
              </span>
              <span class="hide-menu">Smartphone</span>
            </a>
          </li>
          <li class="sidebar-item ">
            <a
              class="sidebar-link @yield('mobil')"
              href="{{route ('mobil')}}"
              aria-expanded="false"
            >
              <span>
                <i class="ti ti-layout-dashboard"></i>
              </span>
              <span class="hide-menu">Mobil</span>
            </a>
          </li>
          <li class="sidebar-item ">
            <a
              class="sidebar-link @yield('kom')"
              href="{{route ('komputer')}}"
              aria-expanded="false"
            >
              <span>
                <i class="ti ti-layout-dashboard"></i>
              </span>
              <span class="hide-menu">Konmputer</span>
            </a>
          </li>
          <li class="sidebar-item ">
            <a
              class="sidebar-link @yield('ktn')"
              href="{{route ('kantin')}}"
              aria-expanded="false"
            >
              <span>
                <i class="ti ti-layout-dashboard"></i>
              </span>
              <span class="hide-menu">Kantin</span>
            </a>
          </li>
          <li class="sidebar-item ">
            <a
              class="sidebar-link @yield('pswt')"
              href="{{route ('pesawat')}}"
              aria-expanded="false"
            >
              <span>
                <i class="ti ti-layout-dashboard"></i>
              </span>
              <span class="hide-menu">Pesawat</span>
            </a>
          </li>
          <li class="sidebar-item ">
            <a
              class="sidebar-link @yield('pr')"
              href="{{route('produk')}}"
              aria-expanded="false"
            >
              <span>
                <i class="ti ti-layout-dashboard"></i>
              </span>
              <span class="hide-menu">Data Produk</span>
            </a>
          </li>
          <li class="sidebar-item ">
            <a
              class="sidebar-link @yield('gr')"
              href="{{route('guru')}}"
              aria-expanded="false"
            >
              <span>
                <i class="ti ti-layout-dashboard"></i>
              </span>
              <span class="hide-menu">Data Guru</span>
            </a>
          </li>
          <li class="sidebar-item ">
            <a
              class="sidebar-link @yield('pg')"
              href="{{route('pegawai')}}"
              aria-expanded="false"
            >
              <span>
                <i class="ti ti-layout-dashboard"></i>
              </span>
              <span class="hide-menu">Data Pegawai</span>
            </a>
          </li>

        </ul>

      </nav>
      <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
  </aside>
