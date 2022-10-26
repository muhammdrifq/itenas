<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #F69000;">

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <img src="{{ asset('assets/dist/img/index.png') }}" class="img-circle elevation-2"
                     alt="User Image">
             </div>
             <div class="info">
                 <a href="#" class="d-block" style="color: #ffffff;">{{ Auth::user()->name }}</a>
             </div>
         </div>

         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">
                 <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                 <li class="nav-item">
                     <a href="#" class="nav-link ">
                         <i class="nav-icon fas fa-tachometer-alt" style="color: #ffffff;"></i>
                         <p style="color: #ffffff;">
                             Dashboard
                             {{-- <i class="right fas fa-angle-left"></i> --}}
                         </p>
                     </a>

                 </li>
                 <li class="nav-item">
                     <a href="{{ route('prodi.index') }}"
                         class="nav-link ">
                         <i class="nav-icon fas fa-th" style="color: #ffffff;"></i>
                         <p style="color: #ffffff;">
                            Data Prodi
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ route('semester.index') }}" class="nav-link ">
                         <i class="nav-icon fas fa-th" style="color: #ffffff;"></i>
                         <p style="color: #ffffff;">
                             Data Semester
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ route('dosen.index') }}" class="nav-link ">
                         <i class="nav-icon fas fa-copy" style="color: #ffffff;"></i>
                         <p style="color: #ffffff;">
                             Data dosen
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ route('koor.index') }}"
                         class="nav-link ">
                         <i class="nav-icon fas fa-copy" style="color: #ffffff;"></i>
                         <p style="color: #ffffff;">
                             Data Kordinator
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ route('kelas.index') }}"
                         class="nav-link ">
                         <i class="nav-icon fas fa-copy" style="color: #ffffff;"></i>
                         <p style="color: #ffffff;">
                             Data Kelas
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ route('mahasiswa.index') }}" class="nav-link ">
                         <i class="nav-icon fas fa-copy" style="color: #ffffff;"></i>
                         <p style="color: #ffffff;">
                            Data Mahasiswa
                         </p>
                     </a>
                 </li>
                 

                
             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>
