        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
                <!-- Sidebar scroll-->
                <div class="scroll-sidebar">
                        <!-- Sidebar navigation-->
                        @if (Auth::check() && Auth::user()->role->id == 1)
                        <nav class="sidebar-nav">
                                <ul id="sidebarnav" class="pt-4">
                                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= route('admin.dashboard.index') ?>" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Kependudukan</span></a>
                                                <ul aria-expanded="false" class="collapse  first-level">
                                                        <li class="sidebar-item"><a href="<?= route('keloladata-datapenduduk.index') ?>" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Data Penduduk
                                                                        </span></a></li>
                                                        <li class="sidebar-item"><a href="<?= route('keloladata-datakelahiran.index') ?>" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Data Kelahiran
                                                                        </span></a></li>
                                                        <li class="sidebar-item"><a href="<?= route('keloladata-datakematian.index') ?>" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Data Kematian
                                                                        </span></a></li>
                                                        <li class="sidebar-item"><a href="<?= route('keloladata-datapindahdatang.index') ?>" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Data Pindah Datang
                                                                        </span></a></li>
                                                        <li class="sidebar-item"><a href="<?= route('keloladata-datapindahkeluar.index') ?>" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Data Pindah Keluar
                                                                        </span></a></li>
                                                </ul>
                                        </li>
                                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Laporan </span></a>
                                                <ul aria-expanded="false" class="collapse  first-level">
                                                        <li class="sidebar-item"><a href="<?= route('laporandaftarpenduduk.index') ?>" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Laporan Daftar Penduduk
                                                                        </span></a></li>
                                                </ul>
                                        </li>
                                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= route('profildesakecamatan.index') ?>" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Profil Desa</span></a></li>
                                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Data Kecamatan</span></a>
                                                <ul aria-expanded="false" class="collapse  first-level">
                                                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= route('data-umum-kecamatan.edit') ?>" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Data Umum</span></a></li>
                                                        <li class="sidebar-item"><a href="<?= route('masterdata-desa.index') ?>" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Desa
                                                                        </span></a></li>
                                                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= route('profil-kecamatan.edit') ?>" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Profil Kecamatan</span></a></li>
                                                </ul>
                                        </li>
                                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= route('dataaparaturdesa.index') ?>" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Data Aparatur Desa</span></a></li>
                                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Pengaturan</span></a>
                                                <ul aria-expanded="false" class="collapse  first-level">
                                                        <li class="sidebar-item"><a href="<?= route('masterdata-alamat.index') ?>" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Alamat</span></a></li>
                                                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= route('kelolapengguna.index') ?>" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Pengguna</span></a></li>
                                                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('user.password.edit') }}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Ubah Password</span></a></li>
                                                </ul>
                                        </li>
                                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Keluar</span></a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                </form>
                                        </li>
                                </ul>
                        </nav>
                        @else
                        <nav class="sidebar-nav">
                                <ul id="sidebarnav" class="pt-4">
                                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= route('operatordesa.dashboard.index') ?>" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Kependudukan</span></a>
                                                <ul aria-expanded="false" class="collapse  first-level">
                                                        <li class="sidebar-item"><a href="<?= route('keloladata-datapendudukdesa.index') ?>" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Data Penduduk
                                                                        </span></a></li>
                                                        <li class="sidebar-item"><a href="<?= route('keloladata-datakelahirandesa.index') ?>" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Data Kelahiran
                                                                        </span></a></li>
                                                        <li class="sidebar-item"><a href="<?= route('keloladata-datakematiandesa.index') ?>" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Data Kematian
                                                                        </span></a></li>
                                                        <li class="sidebar-item"><a href="<?= route('keloladata-datapindahdatangdesa.index') ?>" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Data Pindah Datang
                                                                        </span></a></li>
                                                        <li class="sidebar-item"><a href="<?= route('keloladata-datapindahkeluardesa.index') ?>" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Data Pindah Keluar
                                                                        </span></a></li>
                                                </ul>
                                        </li>
                                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Laporan </span></a>
                                                <ul aria-expanded="false" class="collapse  first-level">
                                                        <li class="sidebar-item"><a href="<?= route('laporandaftarpendudukoperatordesa.index') ?>" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Laporan Daftar Penduduk
                                                                        </span></a></li>
                                                </ul>
                                        </li>
                                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= route('profil-desa.edit') ?>" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Profil Desa</span></a></li>
                                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= route('pengaturan-desa.index') ?>" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Data Aparatur Desa</span></a></li>
                                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Pengaturan</span></a>
                                                <ul aria-expanded="false" class="collapse  first-level">
                                                        <li class="sidebar-item"><a href="<?= route('masterdata-alamatdesa.index') ?>" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Alamat
                                                                        </span></a></li>
                                                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('kelolapenggunaoperatordesa.index') }}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Pengguna</span></a></li>
                                                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('user.password.edit') }}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Ubah Password</span></a></li>
                                                </ul>
                                        </li>
                                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Keluar</span></a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                </form>
                                        </li>
                                </ul>
                        </nav>
                        @endif
                        <!-- End Sidebar navigation -->
                </div>
                <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->