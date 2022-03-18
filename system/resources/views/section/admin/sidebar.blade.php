<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link collapsed" href="{{url('admin/beranda')}}" class="nav-link active">
        <i class="bi bi-grid"></i>
        <span>Beranda</span>
      </a>
    </li><!-- End Dashboard Nav -->

    
    <li class="nav-item">
      <a class="nav-link collapsed" href="{{url('admin/sambutan-ketua-pengadilan')}}">
        <i class="bi bi-grid"></i>
        <span>Sambutan ketua pengadilan</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="{{url('admin/visi-misi')}}">
        <i class="bi bi-grid"></i>
        <span>Visi dan Misi</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#pengadilan-nav" data-bs-toggle="collapse" href="">
        <i class="bi bi-menu-button-wide"></i><span>Profil Pengadilan</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="pengadilan-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{url('admin/sejarah-pengadilan')}}">
            <i class="bi bi-circle"></i><span>Sejarah Pengadilan</span>
          </a>
        </li>
        <li>
          <a href="{{url('admin/struktur-organisasi')}}">
            <i class="bi bi-circle"></i><span>Struktur Organisasi</span>
          </a>
        </li>
        <li>
          <a href="{{url('admin/wilayah-yuridiksi')}}">
            <i class="bi bi-circle"></i><span>Wilayah Yuridiksi</span>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#Pegawai-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-journal-text"></i><span>Profil Pegawai dan Hakim</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="Pegawai-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{url('admin/profil-hakim')}}">
            <i class="bi bi-circle"></i><span>Profil Hakim</span>
          </a>
        </li>
        <li>
          <a href="{{url('admin/profil-kepaniteraan')}}">
            <i class="bi bi-circle"></i><span>Profil Kepaniteraan</span>
          </a>
        </li>
        <li>
          <a href="{{url('admin/profil-kesekretariatan')}}">
            <i class="bi bi-circle"></i><span>Profil Kesekretariatan</span>
          </a>
        </li>
        <li>
          <a href="{{url('admin/profil-pegawai-tidak-tetap')}}">
            <i class="bi bi-circle"></i><span>Profil Pegawai tidak tetap</span>
          </a>
        </li>
      </ul>
    </li>


    <li class="nav-item">
      <a class="nav-link collapse " href="{{url('admin/tugas-pokok-fungsi')}}">
        <i class="bi bi-file-earmark"></i>
        <span>Tugas Pokok dan Fungsi</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="{{url('admin/profil-role-model')}}">
        <i class="bi bi-grid"></i>
        <span>Profil Role dan Model</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#kepaniteran-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-layout-text-window-reverse"></i><span>Kepaniteraan</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="kepaniteran-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{url('admin/kepaniteraan-pidana')}}">
            <i class="bi bi-circle"></i><span>Kepaniteraan Pidana</span>
          </a>
        </li>
        <li>
          <a href="{{url('admin/kepaniteraan-perdata')}}">
            <i class="bi bi-circle"></i><span>Kepaniteraan Perdata</span>
          </a>
        </li>
        <li>
          <a href="{{url('admin/kepaniteraan-hukum')}}">
            <i class="bi bi-circle"></i><span>Kepaniteraan Hukum</span>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#Sistem-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-bar-chart"></i><span>Sistem Pengelolaan Pengadilan</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="Sistem-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{url('admin/rencana-strategis')}}">
            <i class="bi bi-circle"></i><span>Rencana Strategis</span>
          </a>
        </li>
        <li>
          <a href="{{url('admin/rencana-kerja-anggaran')}}">
            <i class="bi bi-circle"></i><span>Rencana Kerja dan Anggaran</span>
          </a>
        </li>
        <li>
          <a href="{{url('admin/pengawasan-kode-etik')}}">
            <i class="bi bi-circle"></i><span>Pengawasan dan Kode Etik</span>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#ptsp-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-gem"></i><span>PTSP</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="ptsp-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{url('admin/jam-kerja-jam-layanan-ptsp')}}">
            <i class="bi bi-circle"></i><span>Jam Kerja dan jam layanan PTSP</span>
          </a>
        </li>
        <li>
          <a href="{{url('admin/jenis-layanan')}}">
            <i class="bi bi-circle"></i><span>Jenis Layanan</span>
          </a>
        </li>
        <li>
          <a href="{{url('admin/standar-pelayanan')}}">
            <i class="bi bi-circle"></i><span>Standar Pelayanan</span>
          </a>
        </li>
        <li>
          <a href="{{url('admin/maklumat-pelayanan')}}">
            <i class="bi bi-circle"></i><span>Maklumat Pelayanan</span>
          </a>
        </li>
        <li>
          <a href="{{url('admin/kompensasi-pelayanan')}}">
            <i class="bi bi-circle"></i><span>Kompensasi Pelayanan</span>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#layanan-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-gem"></i><span>Layanan Disabilitas</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="layanan-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{url('admin/prosedur-pelayanan-penyandang-disabilitas')}}">
            <i class="bi bi-circle"></i><span>Prosedur Pelayanan Penyandang Disabilitas</span>
          </a>
        </li>
        <li>
          <a href="{{url('admin/sarana-prasarana-penyandang-disabilitas')}}">
            <i class="bi bi-circle"></i><span>Sarana dan Prasarana bagi peyandang disabilitas</span>
          </a>
        </li>
        <li>
          <a href="{{url('admin/mou-kerjasama-pelatihan')}}">
            <i class="bi bi-circle"></i><span>MoU Kerja sama dan pelatihan</span>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="{{url('admin/tata-tertib')}}">
        <i class="bi bi-grid"></i>
        <span>Tata Tertib</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#laporan-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-gem"></i><span>Laporan</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="laporan-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{url('admin/hasil-penelitian')}}">
            <i class="bi bi-circle"></i><span>Hasil Penelitian</span>
          </a>
        </li>
        <li>
          <a href="{{url('admin/ringkasan-laporan-akuntabilitas-kinerja-instansi-pemerintah')}}">
            <i class="bi bi-circle"></i><span>Ringkasan Laporan Akuntabilitas kinerja instansi pemerintah</span>
          </a>
        </li>
        <li>
          <a href="{{url('admin/ringkasan-daftar-aset-inventaris')}}">
            <i class="bi bi-circle"></i><span>ringkasan daftar aset dan inventaris</span>
          </a>
        </li>
        <li>
          <a href="{{url('admin/laporan-pengawasan-pengendalian-bmn')}}">
            <i class="bi bi-circle"></i><span>Laporan pengawasan dan pengendalian BMN</span>
          </a>
        </li>
        <li>
          <a href="{{url('admin/laporan-pelaksanaan-kegiatan')}}">
            <i class="bi bi-circle"></i><span>Laporan pelaksanaan kegiatan</span>
          </a>
        </li>
        <li>
          <a href="{{url('admin/laporan-keuangan')}}">
            <i class="bi bi-circle"></i><span>Laporan keuangan</span>
          </a>
        </li>
        <li>
          <a href="{{url('admin/sakip')}}">
            <i class="bi bi-circle"></i><span>SAKIP</span>
          </a>
        </li>
        <li>
          <a href="{{url('admin/laporan-pelayanan-informasi-publik')}}">
            <i class="bi bi-circle"></i><span>Laporan pelayanan informasi publik</span>
          </a>
        </li>
        <li>
          <a href="{{url('admin/lhkpn')}}">
            <i class="bi bi-circle"></i><span>LHKPN</span>
          </a>
        </li>
        <li>
          <a href="{{url('admin/lhkasn')}}">
            <i class="bi bi-circle"></i><span>LHKASN</span>
          </a>
        </li>
        <li>
          <a href="{{url('admin/laporan-skm')}}">
            <i class="bi bi-circle"></i><span>Laporan SKM</span>
          </a>
        </li>
        <li>
          <a href="{{url('admin/laporan-spak')}}">
            <i class="bi bi-circle"></i><span>Laporan SPAK</span>
          </a>
        </li>
        <li>
          <a href="{{url('admin/laporan-survei-harian')}}">
            <i class="bi bi-circle"></i><span>Laporan survei harian</span>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#lelang-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-gem"></i><span>Lelang barang dan jasa</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="lelang-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{url('admin/pengadaan-barang-jasa')}}">
            <i class="bi bi-circle"></i><span>Pengadaan barang dan jasa</span>
          </a>
        </li>
        
      </ul>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#prosedur-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-gem"></i><span>Prosedur permohonan Informasi</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="prosedur-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{url('admin/dasar-hukum')}}">
            <i class="bi bi-circle"></i><span>Dasar hukum</span>
          </a>
        </li>
        <li>
          <a href="{{url('admin/daftar-informasi-publik')}}">
            <i class="bi bi-circle"></i><span>Daftar informasi publik</span>
          </a>
        </li>
        <li>
          <a href="{{url('admin/hak-pemohon-informasi')}}">
            <i class="bi bi-circle"></i><span>Hak pemohon Informasi</span>
          </a>
        </li>
        <li>
          <a href="{{url('admin/layanan-prosedur-biasa')}}">
            <i class="bi bi-circle"></i><span>Layanan prosedur biasa</span>
          </a>
        </li>
        <li>
          <a href="{{url('admin/layanan-prosedur-khusus')}}">
            <i class="bi bi-circle"></i><span>Layanan prosedur khusus</span>
          </a>
        </li>
        <li>
          <a href="{{url('admin/prosedur-keberatan-layanan-informasi')}}">
            <i class="bi bi-circle"></i><span>prosedur keberatan layanan informasi</span>
          </a>
        </li>
        <li>
          <a href="{{url('admin/biaya-permohonan-informasi')}}">
            <i class="bi bi-circle"></i><span>Biaya permohonan Informasi</span>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#pengaduan-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-gem"></i><span>Pengaduan Layanan Publik</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="pengaduan-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{url('admin/regulasi-pengaduan')}}">
            <i class="bi bi-circle"></i><span>Dasar hukum/Regulasi Pengaduan</span>
          </a>
        </li>
        <li>
          <a href="{{url('admin/prosedur-pengaduan')}}">
            <i class="bi bi-circle"></i><span>Prosedur Pengaduan</span>
          </a>
        </li>
        <li>
          <a href="{{url('admin/layanan-aspirasi-pengaduan-online')}}">
            <i class="bi bi-circle"></i><span>Layanan Aspirasi dan Pengaduan Online Rakyat(LAPOR)</span>
          </a>
        </li>
      </ul>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('admin/survei-kepuasan-publik')}}">
          <i class="bi bi-grid"></i>
          <span>Survei Kepuasan Publik</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('admin/formulir-gugatan-sederhana')}}">
          <i class="bi bi-grid"></i>
          <span>Formulir Gugatan Sederhana</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('admin/prosedur-perkara-prodeo')}}">
          <i class="bi bi-grid"></i>
          <span>Prosedur Perkara Prodeo</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('admin/surat-keterangan-elektronik')}}">
          <i class="bi bi-grid"></i>
          <span>Surat Keterangan Elektronik</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#hukum-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>Layanan Hukum Bagi Masyarakat Kurang mampu</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="hukum-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{url('admin/peraturan-kebijakan')}}">
              <i class="bi bi-circle"></i><span>Peraturan dan Kebijakan</span>
            </a>
          </li>
          <li>
            <a href="{{url('admin/prosedur-pembebasan-biaya-perkara')}}">
              <i class="bi bi-circle"></i><span>Prosedur Pembebasan Biaya Perkara (Prodeo)</span>
            </a>
          </li>
          <li>
            <a href="{{url('admin/zitting-plaats')}}">
              <i class="bi bi-circle"></i><span>Zitting Plaats</span>
            </a>
          </li>
          <li>
            <a href="{{url('admin/pos-bantuan-hukum')}}">
              <i class="bi bi-circle"></i><span>Pos Bantuan Hukum</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#pengajuan-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>Prosedur Pengajuan Perkara dan Biaya Perkara</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="pengajuan-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{url('admin/prosedur-pengajuan-perkara')}}">
              <i class="bi bi-circle"></i><span>Prosedur Pengajuan Perkara</span>
            </a>
          </li>
          <li>
            <a href="{{url('admin/biaya-proses-penyelesain-perkara')}}">
              <i class="bi bi-circle"></i><span>Biaya Proses Penyelesaian Perkara</span>
            </a>
          </li>
          <li>
            <a href="{{url('admin/panjar-perkara-radius')}}">
              <i class="bi bi-circle"></i><span>Panjar Perkara dan Radius</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#berita-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>Informasi</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="berita-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{url('admin/informasi-terkini')}}">
              <i class="bi bi-circle"></i><span>informasi Terkini</span>
            </a>
          </li>
          <li>
            <a href="{{url('admin/artikel')}}">
              <i class="bi bi-circle"></i><span>Artikel</span>
            </a>
          </li>
          <li>
            <a href="{{url('admin/foto-galeri')}}">
              <i class="bi bi-circle"></i><span>Foto Gallery</span>
            </a>
          </li>
          <li>
            <a href="{{url('admin/video')}}">
              <i class="bi bi-circle"></i><span>Video</span>
            </a>
          </li>
        </ul>
      </li>

      





    </ul>
  </aside>