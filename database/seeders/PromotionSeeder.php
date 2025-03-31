<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromotionSeeder extends Seeder
{
    public function run()
    {
        DB::table('promotions')->insert([
            [
                'title' => 'SMA Harapan Bangsa',
                'description' => '"Membentuk Generasi Unggul, Berkarakter, dan Berprestasi"
                                    SMA Harapan Bangsa adalah sekolah unggulan yang menekankan pendidikan karakter, akademik, serta pengembangan soft skills. Dengan fasilitas lengkap, laboratorium modern, dan guru profesional, kami mendukung siswa dalam mencapai prestasi akademik dan non-akademik.

                                    ✨ Kelebihan:
                                    ✅ Program bimbingan beasiswa luar negeri
                                    ✅ Ekstrakurikuler lengkap (robotika, debat, olahraga)
                                    ✅ Kerjasama dengan universitas ternama',
                'image' => 'images/xmcq8Ko9n3tvjYRdDzFouhzPxBzvYKsytw1MLTT8.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'SMP Bintang Cendekia',
                'description' => '📌 "Membangun Karakter dan Prestasi sejak Dini"
                                SMP Cendekia Mulia menerapkan metode pembelajaran interaktif dengan teknologi digital. Kami berfokus pada pengembangan karakter dan potensi akademik siswa melalui pendekatan holistik.

                                ✨ Kelebihan:
                                ✅ Guru berkualitas dengan metode active learning
                                ✅ Program bilingual (Bahasa Inggris & Mandarin)
                                ✅ Kurikulum berbasis STEM

                                ',
                'image' => 'images/s4LbmwIsTX8WGWWL2T6amgWLWwAShOfMkezC8Ikq.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'SD Cahaya Nusantara',
                'description' => '"Membimbing Anak dengan Cinta dan Inovasi"
                                    SD Cahaya Nusantara adalah sekolah dasar unggulan dengan konsep pembelajaran berbasis proyek. Kami menanamkan nilai-nilai disiplin, kreativitas, dan kemandirian sejak dini.

                                    ✨ Kelebihan:
                                    ✅ Kelas kecil untuk pembelajaran lebih efektif
                                    ✅ Pembelajaran berbasis eksperimen
                                    ✅ Program pendidikan karakter

                                    ',
                'image' => 'images/eS7xN2y4H8SZJyuWc2sez66sWhK0WOFweHDl609f.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'SMK Teknologi Nusantara',
                'description' => '📌 "Siap Kerja, Siap Berwirausaha"
                            SMK Teknologi Nusantara adalah sekolah vokasi terbaik yang membekali siswa dengan keahlian industri 4.0. Kami menawarkan jurusan Teknik Komputer, Otomotif, dan Rekayasa Perangkat Lunak dengan praktik langsung di dunia industri.

                            ✨ Kelebihan:
                            ✅ Sertifikasi keahlian yang diakui industri
                            ✅ Program magang di perusahaan ternama
                            ✅ Fasilitas bengkel dan lab IT lengkap',
                'image' => 'images/q4RfO3dmAwJOkJVTwG8SAnQk0fIoed6XvQU9PVpg.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'SMA Negeri 1 Kota Baru',
                'description' => 'SMA Negeri 1 Kota Baru adalah sekolah negeri terbaik dengan berbagai program unggulan akademik dan ekstrakurikuler.',
                'image' => 'images/Ky43VXGPHlGCwSmJC5ln66b6HyVrqqv2yE0cku5k.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'SMP Al-Azhar Syifa Budi',
                'description' => 'SMP Al-Azhar Syifa Budi menggabungkan pendidikan umum dan agama Islam dalam satu kurikulum yang terpadu.',
                'image' => 'images/Lv1EMgKKxnKvnbB7Xc0DYxxg7RjpSrB0nCIvj6VE.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'SD Global Mandiri',
                'description' => 'SD Global Mandiri berkomitmen memberikan pendidikan berkualitas dengan sistem pembelajaran internasional.',
                'image' => 'images/B0iTx0HCvlyAwHjA2EWpyzFy6jRAlLVvivYMYKdu.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'SMK Kesehatan Medika',
                'description' => 'SMK Kesehatan Medika adalah sekolah kejuruan kesehatan yang menghasilkan tenaga medis profesional.',
                'image' => 'images/fOewpk5RJaXyfkc9WqxteSLrjLr7FyrvbMBCmNGx.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'SMA Cahaya Insan',
                'description' => 'SMA Cahaya Insan menyediakan lingkungan belajar yang nyaman dan mendukung prestasi siswa.',
                'image' => 'images/4rbWhvsILQljCOSFDl7QoLlYt6RO2tdo9q6FYzto.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'SMP Kreatif Indonesia',
                'description' => 'SMP Kreatif Indonesia membekali siswa dengan keterampilan kreatif dan inovatif dalam berbagai bidang.',
                'image' => 'images/7awRpbmD6r0uKy6VIpoi6A6rf27AwyHZhqgeXWCM.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
