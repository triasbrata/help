<?php
RepoBind::setRepo('Eloquent');
// RepoBind::setRepo('Dummy');
RepoBind::bind('Admin\Data\Tambahan\AgamaController','Agama','agama');
RepoBind::bind('Admin\Data\Tambahan\AksesInternetController','AksesInternet','akses_inet');
RepoBind::bind('Admin\Data\Tambahan\JenisKelaminController','JenisKelamin','jenis_kelamin');
RepoBind::bind('Admin\Data\Tambahan\SuplaiAirController','SuplaiAir','suplai_air');
RepoBind::bind('Admin\Data\Tambahan\SumberListrikController','SumberListrik','sumber_listrik');
RepoBind::bind('Admin\Data\Administrasi\Sekolah\StatusSekolahController','StatusSekolah','status_sekolah');
RepoBind::bind('Admin\Data\Administrasi\Sekolah\BentukPendidikanController','BentukPendidikan','bentuk_pendidikan');
RepoBind::bind('Admin\Data\Administrasi\Sekolah\SertifikatIsoController','SertifikatIso','sertifikat_iso');
RepoBind::bind('Admin\Data\Administrasi\Sekolah\StatusKepemilikanController','StatusKepemilikan','status_kepemilikan');
RepoBind::bind('Admin\Data\Akreditasi\LembagaController','Lembaga','lembaga_akreditasi');
RepoBind::bind('Admin\Data\Akreditasi\NilaiController','Nilai','nilai_akreditasi');
RepoBind::bind('Admin\Data\Region\ProvinsiController','Provinsi','provinsi');
RepoBind::bind('Admin\Data\Region\KabupatenController','Kabupaten','kabupaten');
RepoBind::bind('Admin\Data\Region\KecamatanController','Kecamatan','kecamatan');
RepoBind::bind('Admin\Data\Region\KelurahanController','Kelurahan','kelurahan');
RepoBind::bind('Admin\Data\Region\KategoriWilayahController','KategoriWilayah','kategori_wilayah');
RepoBind::bind('Admin\Data\Penyelenggaraan\WaktuPenyelengaraanController','WaktuPenyelengaraan','waktu_penyelenggaraan');
RepoBind::bind('Admin\Data\Penyelenggaraan\TahunAjaranController','TahunAjaran','tahun_ajaran');
RepoBind::bind('Admin\Data\Penyelenggaraan\SemesterController','Semester','semester');
RepoBind::bind('Admin\YayasanController','Yayasan','yayasan');
RepoBind::bind('Admin\Sekolah\Program\InkuisiController','Inkuisi','inkuisi');
RepoBind::bind('Admin\Sekolah\Program\LayananKhususController','LayananKhusus','layanan_khsusus');
RepoBind::bind('Admin\Sekolah\AkreditasiController','Akreditasi','akreditasi');
RepoBind::bind('Admin\Sekolah\PerizinanController','Perizinan','perizinan');
RepoBind::bind('Admin\Sekolah\RekeningController','Rekening','perizinan');
RepoBind::bind('Admin\Sekolah\PeriodikController','Periodik','periodik');
RepoBind::bind('Admin\Sekolah\LokasiSekolahController','LokasiSekolah','lokasi');
RepoBind::bind('Admin\Sekolah\SanitasiController','Sanitasi','sanitasi');
RepoBind::bind('Admin\Sekolah\SertifikasiIsoController','SertifikasiIso','sertifikasi');
RepoBind::bind('Admin\Sekolah\SiswaController','Siswa','siswa');
RepoBind::bind('Admin\Sekolah\TambahanController','Tambahan','tambahan');
RepoBind::bind('Admin\Data\Program\DataKebutuhanKhususController','DataKebutuhanKhusus','data_kebutuhan_khusus');
RepoBind::bind('Admin\Data\Program\DataLayananKhususController','DataLayananKhusus','data_layanan_khusus');