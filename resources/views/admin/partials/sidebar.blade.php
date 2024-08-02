  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="/admin" class="brand-link">
          <img src="{{ asset('assets/img/newlogopt.png') }}" alt="" class="brand-image img-circle elevation-3"
              style="opacity: .8">
          <span class="brand-text font-weight-light"><i class="far fa-user-circle fa-spin"></i> Admin Humas</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <!-- Add icons to th e links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-item">
                      <a href="/admin" class="nav-link">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                              Dashboard
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('gallery') }}" class="nav-link">
                          <i class="nav-icon far fa-image"></i>
                          <p>
                              Gallery
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('slider') }}" class="nav-link">
                          <i class="nav-icon far fa-images"></i>
                          <p>
                              Slider
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('artikel') }}" class="nav-link">
                          <i class="nav-icon fas fa-book"></i>
                          <p>
                              Artikel
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('dokumen') }}" class="nav-link">
                          <i class="nav-icon far fa-file-archive"></i>
                          <p>
                              Dokumen
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('agenda') }}" class="nav-link">
                          <i class="nav-icon far fa-calendar-alt"></i>
                          <p>
                              Agenda
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('profil') }}" class="nav-link">
                          <i class="nav-icon far fa-user"></i>
                          <p>
                              Profil
                          </p>
                      </a>
                  </li>
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
