<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('template', function () {
    return view('admin.template.base');
});

Route::get('index', function (){
	return view('template.base');
});

Route::get('admin/beranda', function (){
	return view('admin.beranda');
});

Route::get('admin/sambutan-ketua-pengadilan', function (){
	return view('admin.sambutan-ketua-pengadilan.index');
});

Route::get('admin/visi-misi', function (){
	return view('admin.visi-misi.index');
});

Route::get('admin/sejarah-pengadilan', function (){
	return view('admin.sejarah-pengadilan.index');
});

Route::get('admin/struktur-organisasi', function (){
	return view('admin.struktur-organisasi.index');
});

Route::get('admin/sambutan-ketua-pengadilan', function (){
	return view('admin.sambutan-ketua-pengadilan.index');
});

Route::get('admin/wilayah-yuridiksi', function (){
	return view('admin.sambutan-ketua-pengadilan.index');
});

Route::get('admin/profil-hakim', function (){
	return view('admin.profil-hakim.index');
});

Route::get('admin/profil-kepaniteraan', function (){
	return view('admin.profil-kepaniteraan.index');
});

Route::get('admin/profil-kesekretariatan', function (){
	return view('admin.profil-kesekretariatan.index');
});

Route::get('admin/profil-pegawai-tidak-tetap', function (){
	return view('admin.sambutan-ketua-pengadilan.index');
});

Route::get('admin/tugas-pokok-fungsi', function (){
	return view('admin.tugas-pokok-fungsi.index');
});

Route::get('admin/profil-role-model', function (){
	return view('admin.profil-role-model.index');
});

Route::get('admin/kepaniteraan-pidana', function (){
	return view('admin.kepaniteraan-pidana.index');
});

Route::get('admin/kepaniteraan-hukum', function (){
	return view('admin.kepaniteraan-hukum.index');
});

Route::get('admin/rencana-strategis', function (){
	return view('admin.rencana-strategis.index');
});

Route::get('admin/rencana-kerja-anggaran', function (){
	return view('admin.rencana-kerja-anggaran.index');
});

Route::get('admin/pengawasan-kode-etik', function (){
	return view('admin.pengawasan-kode-etik.index');
});

Route::get('admin/jam-kerja-jam-layanan-ptsp', function (){
	return view('admin.profil-role-model.index');
});

Route::get('admin/jenis-layanan', function (){
	return view('admin.jenis-layanan.index');
});

Route::get('admin/standar-pelayanan', function (){
	return view('admin.standar-pelayanan.index');
});

Route::get('admin/maklumat-pelayanan', function (){
	return view('admin.maklumat-pelayanan.index');
});

Route::get('admin/kompensasi-pelayanan', function (){
	return view('admin.kompensasi-pelayanan.index');
});

Route::get('admin/profil-role-model', function (){
	return view('admin.profil-role-model.index');
});

Route::get('admin/prosedur-pelayanan-penyandang-disabilitas', function (){
	return view('admin.prosedur-pelayanan-penyandang-disabilitas.index');
});

Route::get('admin/sarana-prasarana-penyandang-disabilitas', function (){
	return view('admin.sarana-prasarana-penyandang-disabilitas.index');
});

Route::get('admin/mou-kerjasama-pelatihan', function (){
	return view('admin.mou-kerjasama-pelatihan.index');
});

Route::get('admin/tata-tertib', function (){
	return view('admin.tata-tertib.index');
});

Route::get('admin/hasil-penelitian', function (){
	return view('admin.hasil-penelitian.index');
});

Route::get('admin/ringkasan-laporan-akuntabilitas-kinerja-instansi-pemerintah', function (){
	return view('admin.ringkasan-laporan-akuntabilitas-kinerja-instansi-pemerintah.index');
});

Route::get('admin/ringkasan-daftar-aset-inventaris', function (){
	return view('admin.ringkasan-daftar-aset-inventaris.index');
});

Route::get('admin/laporan-pengawasan-pengendalian-bmn', function (){
	return view('admin.laporan-pengawasan-pengendalian-bmn.index');
});

Route::get('admin/laporan-pelaksanaan-kegiatan', function (){
	return view('admin.laporan-pelaksanaan-kegiatan.index');
});

Route::get('admin/laporan-keuangan', function (){
	return view('admin.laporan-keuangan.index');
});

Route::get('admin/sakip', function (){
	return view('admin.sakip.index');
});

Route::get('admin/laporan-pelayanan-informasi-publik', function (){
	return view('admin.laporan-pelayanan-informasi-publik.index');
});

Route::get('admin/lhkpn', function (){
	return view('admin.lhkpn.index');
});

Route::get('admin/lhkasn', function (){
	return view('admin.lhkasn.index');
});

Route::get('admin/laporan-skm', function (){
	return view('admin.laporan-skm.index');
});

Route::get('admin/laporan-spak', function (){
	return view('admin.laporan-spak.index');
});

Route::get('admin/laporan-survei-harian', function (){
	return view('admin.laporan-survei-harian.index');
});

Route::get('admin/pengadaan-barang-jasa', function (){
	return view('admin.pengadaan-barang-jasa.index');
});

Route::get('admin/dasar-hukum', function (){
	return view('admin.dasar-hukum.index');
});

Route::get('admin/daftar-informasi-publik', function (){
	return view('admin.daftar-informasi-publik.index');
});

Route::get('admin/hak-pemohon-informasi', function (){
	return view('admin.hak-pemohon-informasi.index');
});

Route::get('admin/layanan-prosedur-biasa', function (){
	return view('admin.layanan-prosedur-biasa.index');
});

Route::get('admin/layanan-prosedur-khusus', function (){
	return view('admin.layanan-prosedur-khusus.index');
});

Route::get('admin/prosedur-keberatan-layanan-informasi', function (){
	return view('admin.prosedur-keberatan-layanan-informasi.index');
});

Route::get('admin/biaya-permohonan-informasi', function (){
	return view('admin.biaya-permohonan-informasi.index');
});

Route::get('admin/regulasi-pengaduan', function (){
	return view('admin.regulasi-pengaduan.index');
});

Route::get('admin/prosedur-pengaduan', function (){
	return view('admin.prosedur-pengaduan.index');
});

Route::get('admin/layanan-aspirasi-pengaduan-online', function (){
	return view('admin.layanan-aspirasi-pengaduan-online.index');
});

Route::get('admin/layanan-aspirasi-pengaduan-online', function (){
	return view('admin.layanan-aspirasi-pengaduan-online.index');
});