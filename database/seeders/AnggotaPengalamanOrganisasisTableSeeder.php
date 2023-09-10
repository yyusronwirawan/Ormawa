<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AnggotaPengalamanOrganisasisTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('anggota_pengalaman_organisasis')->delete();
        
        \DB::table('anggota_pengalaman_organisasis')->insert(array (
            0 => 
            array (
                'id' => '1',
                'nama' => 'Palang Merah Remaja',
                'dari' => '2017',
                'sampai' => '2018',
                'jabatan' => 'Anggota',
                'keterangan' => NULL,
                'anggota_id' => '1',
                'created_at' => '2023-02-11 00:40:11',
                'updated_at' => '2023-02-11 00:40:11',
            ),
            1 => 
            array (
                'id' => '2',
                'nama' => 'Palang Merah Remaja',
                'dari' => '2018',
                'sampai' => '2019',
                'jabatan' => 'Sekertaris Umum',
                'keterangan' => NULL,
                'anggota_id' => '1',
                'created_at' => '2023-02-11 00:40:11',
                'updated_at' => '2023-02-11 00:40:11',
            ),
            2 => 
            array (
                'id' => '3',
                'nama' => 'Majelis Perwakilan Kelas',
                'dari' => '2017',
                'sampai' => '2018',
                'jabatan' => 'Anggota',
                'keterangan' => NULL,
                'anggota_id' => '1',
                'created_at' => '2023-02-11 00:40:11',
                'updated_at' => '2023-02-11 00:40:11',
            ),
            3 => 
            array (
                'id' => '4',
                'nama' => 'Majelis Perwakilan Kelas',
                'dari' => '2018',
                'sampai' => '2019',
                'jabatan' => 'Ketua Umum',
                'keterangan' => NULL,
                'anggota_id' => '1',
                'created_at' => '2023-02-11 00:40:11',
                'updated_at' => '2023-02-11 00:40:11',
            ),
            4 => 
            array (
                'id' => '5',
                'nama' => 'DKM Ulil Albab USB YPKP',
                'dari' => '2020',
                'sampai' => '2021',
                'jabatan' => 'Anggota',
                'keterangan' => NULL,
                'anggota_id' => '1',
                'created_at' => '2023-02-11 00:40:11',
                'updated_at' => '2023-02-11 00:40:11',
            ),
            5 => 
            array (
                'id' => '6',
                'nama' => 'DKM Ulil Albab USB YPKP',
                'dari' => '2021',
                'sampai' => NULL,
                'jabatan' => 'Media Divisi dan Informasi',
                'keterangan' => NULL,
                'anggota_id' => '1',
                'created_at' => '2023-02-11 00:40:11',
                'updated_at' => '2023-02-11 00:40:11',
            ),
            6 => 
            array (
                'id' => '7',
                'nama' => 'Karmapack',
                'dari' => '2021',
                'sampai' => NULL,
            'jabatan' => 'Anggota Bidang Komunikasi dan Informasi (KOMINFO)',
                'keterangan' => NULL,
                'anggota_id' => '1',
                'created_at' => '2023-02-11 00:40:11',
                'updated_at' => '2023-02-11 00:40:11',
            ),
            7 => 
            array (
                'id' => '8',
                'nama' => 'OSIS SMPN 2 Sindangbarang',
                'dari' => '2012',
                'sampai' => '2013',
                'jabatan' => 'Ketua bidang kerohanian',
                'keterangan' => NULL,
                'anggota_id' => '6',
                'created_at' => '2023-02-11 00:40:11',
                'updated_at' => '2023-02-11 00:40:11',
            ),
            8 => 
            array (
                'id' => '9',
            'nama' => 'Himpunan Mahasiswa Islam (HMI)',
                'dari' => '2021',
                'sampai' => NULL,
                'jabatan' => 'Kader',
                'keterangan' => NULL,
                'anggota_id' => '30',
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            9 => 
            array (
                'id' => '10',
                'nama' => 'karang Taruna Kecamatan Cibinong',
                'dari' => '2022',
                'sampai' => '2026',
                'jabatan' => 'WAKIL SEKRETARIS IV',
                'keterangan' => NULL,
                'anggota_id' => '30',
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            10 => 
            array (
                'id' => '11',
                'nama' => 'PGRI Ranting Saripudin',
                'dari' => '2022',
                'sampai' => '2026',
                'jabatan' => 'Anggota pengembangan bidang olahraga',
                'keterangan' => NULL,
                'anggota_id' => '30',
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            11 => 
            array (
                'id' => '12',
            'nama' => 'Aliansi Mahasiswa Jawa barat (ALAM JABAR)',
                'dari' => '2021',
                'sampai' => NULL,
                'jabatan' => 'Kader',
                'keterangan' => NULL,
                'anggota_id' => '30',
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            12 => 
            array (
                'id' => '13',
            'nama' => 'Himpunan Mahasiswa Pendidikan Guru Sekolah Dasar (HIMASEDA) Invada',
                'dari' => '2021',
                'sampai' => '2022',
                'jabatan' => 'Anggota',
                'keterangan' => NULL,
                'anggota_id' => '30',
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            13 => 
            array (
                'id' => '14',
                'nama' => 'Karmapack',
                'dari' => '2019',
                'sampai' => NULL,
                'jabatan' => 'Anggota',
                'keterangan' => NULL,
                'anggota_id' => '33',
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            14 => 
            array (
                'id' => '15',
                'nama' => 'Himpunan Mahasiswa Ekonomi Syariah',
                'dari' => '2022',
                'sampai' => NULL,
                'jabatan' => 'Anggota',
                'keterangan' => NULL,
                'anggota_id' => '54',
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            15 => 
            array (
                'id' => '16',
                'nama' => 'Paskibra Smkn 1 Tanggeung',
                'dari' => '2019',
                'sampai' => '2021',
                'jabatan' => 'Ketua paskibra',
                'keterangan' => '-',
                'anggota_id' => '57',
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            16 => 
            array (
                'id' => '17',
                'nama' => 'HMJ Ekonomi Syariah',
                'dari' => '2020',
                'sampai' => '2021',
                'jabatan' => 'Staff PAO',
                'keterangan' => NULL,
                'anggota_id' => '68',
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            17 => 
            array (
                'id' => '18',
            'nama' => 'Ikatan Keluarga Alumni YASPIDA (IKMADA) Bandung',
                'dari' => '2020',
                'sampai' => '2022',
                'jabatan' => 'Ketua bidang PAO',
                'keterangan' => NULL,
                'anggota_id' => '68',
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            18 => 
            array (
                'id' => '19',
            'nama' => 'Forum Studi Ekonomi Islam (FORDES) UIN BANDUNG',
                'dari' => '2021',
                'sampai' => '2022',
                'jabatan' => 'Staff Human Resource Development',
                'keterangan' => NULL,
                'anggota_id' => '68',
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            19 => 
            array (
                'id' => '20',
                'nama' => 'UPTQ UIN Bandung',
                'dari' => '2020',
                'sampai' => '2022',
                'jabatan' => 'Anggota',
                'keterangan' => NULL,
                'anggota_id' => '68',
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            20 => 
            array (
                'id' => '21',
                'nama' => 'OSIS SMPN 1 CIKADU',
                'dari' => '2015',
                'sampai' => '2017',
                'jabatan' => 'Ketua Bidang',
                'keterangan' => '2 priode',
                'anggota_id' => '69',
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            21 => 
            array (
                'id' => '22',
                'nama' => 'OSIS SMKN 1 CIKADU',
                'dari' => '2019',
                'sampai' => '2020',
                'jabatan' => 'Sekertaris',
                'keterangan' => NULL,
                'anggota_id' => '69',
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            22 => 
            array (
                'id' => '23',
                'nama' => 'DKR KWARAN CIKADU',
                'dari' => '2019',
                'sampai' => '2022',
                'jabatan' => 'Sekertaris',
                'keterangan' => NULL,
                'anggota_id' => '69',
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            23 => 
            array (
                'id' => '24',
                'nama' => 'Paskibra Kecamatan Cikadu',
                'dari' => '2018',
                'sampai' => '2019',
                'jabatan' => 'Anggota',
                'keterangan' => NULL,
                'anggota_id' => '69',
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            24 => 
            array (
                'id' => '25',
            'nama' => 'Himpunan Mahasiswa Manajeman ( HIMAMAN )',
                'dari' => '2022',
                'sampai' => '2023',
                'jabatan' => 'Divisi Social',
                'keterangan' => NULL,
                'anggota_id' => '69',
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            25 => 
            array (
                'id' => '26',
                'nama' => 'OSIS MTS AL-HUDA RAWAHANJA',
                'dari' => '2015',
                'sampai' => '2016',
                'jabatan' => 'KETUA OSIS',
                'keterangan' => NULL,
                'anggota_id' => '77',
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            26 => 
            array (
                'id' => '27',
                'nama' => 'BES MAS AL-MANSHURIYAH',
                'dari' => '2018',
                'sampai' => '2019',
                'jabatan' => 'WAKIL KETUA DPT',
                'keterangan' => NULL,
                'anggota_id' => '77',
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            27 => 
            array (
                'id' => '28',
                'nama' => 'DKR KWARRAN PAGELARAN',
                'dari' => '2018',
                'sampai' => '2019',
                'jabatan' => 'WAKIL KETUA',
                'keterangan' => NULL,
                'anggota_id' => '77',
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            28 => 
            array (
                'id' => '29',
                'nama' => 'HIMAPSI UNIVERSITAS MUHAMMADIYAH BANDUNG',
                'dari' => '2021',
                'sampai' => '2022',
                'jabatan' => 'ANGGOTA BIDANG MINAT DAN BAKAT',
                'keterangan' => NULL,
                'anggota_id' => '77',
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            29 => 
            array (
                'id' => '30',
                'nama' => 'BEWARA PERS UNIVERSITAS MUHAMMADIYAH BANDUNG',
                'dari' => '2021',
                'sampai' => '2022',
                'jabatan' => 'KOOR VIDEO DAN FOTO',
                'keterangan' => 'DIVISI PEMBERITAAN',
                'anggota_id' => '77',
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            30 => 
            array (
                'id' => '31',
                'nama' => 'UKM FOTOGRAFI UNIVERSITAS MUHAMMADIYAH BANDUNG',
                'dari' => '2021',
                'sampai' => '2022',
                'jabatan' => 'ANGGOTA BIDANG MINAT DAN BAKAT',
                'keterangan' => NULL,
                'anggota_id' => '77',
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            31 => 
            array (
                'id' => '32',
                'nama' => 'SANTRI MENDUNIA JAWA BARAT',
                'dari' => '2020',
                'sampai' => '2022',
                'jabatan' => 'KOOR DESIGN MANAGEMENT',
                'keterangan' => NULL,
                'anggota_id' => '77',
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            32 => 
            array (
                'id' => '33',
                'nama' => 'Karmapack',
                'dari' => '2020',
                'sampai' => '2024',
                'jabatan' => 'Sekbid Kominfo',
                'keterangan' => NULL,
                'anggota_id' => '79',
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            33 => 
            array (
                'id' => '34',
                'nama' => 'OSIS MAN 3 Cianjur',
                'dari' => '2018',
                'sampai' => '2019',
                'jabatan' => 'Ketua',
                'keterangan' => NULL,
                'anggota_id' => '79',
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            34 => 
            array (
                'id' => '35',
                'nama' => 'Unit Kegiatan Santri Futsal dan Sepak Bola Al-Ihsan',
                'dari' => '2022',
                'sampai' => '2023',
                'jabatan' => 'Ketua',
                'keterangan' => NULL,
                'anggota_id' => '79',
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            35 => 
            array (
                'id' => '36',
                'nama' => 'Lembaga Dakwah kampus Stisip Guna Nusantara',
                'dari' => '2022',
                'sampai' => '2023',
                'jabatan' => 'Divisi Syiar',
                'keterangan' => 'Pengelola Media sosial',
                'anggota_id' => '80',
                'created_at' => '2023-02-11 00:40:13',
                'updated_at' => '2023-02-11 00:40:13',
            ),
            36 => 
            array (
                'id' => '37',
                'nama' => 'Palang Merah Remaja',
                'dari' => '2017',
                'sampai' => '2020',
                'jabatan' => 'Bendahara umum',
                'keterangan' => '-',
                'anggota_id' => '81',
                'created_at' => '2023-02-11 00:40:13',
                'updated_at' => '2023-02-11 00:40:13',
            ),
            37 => 
            array (
                'id' => '38',
                'nama' => 'Gerakan Mengajar Desa',
                'dari' => '2020',
                'sampai' => '2022',
                'jabatan' => 'Tutor inspiratif',
                'keterangan' => NULL,
                'anggota_id' => '81',
                'created_at' => '2023-02-11 00:40:13',
                'updated_at' => '2023-02-11 00:40:13',
            ),
            38 => 
            array (
                'id' => '39',
                'nama' => 'Palang Merah Remaja',
                'dari' => '2019',
                'sampai' => '2021',
                'jabatan' => 'Wakil Ketua PMR',
                'keterangan' => NULL,
                'anggota_id' => '85',
                'created_at' => '2023-02-11 00:40:13',
                'updated_at' => '2023-02-11 00:40:13',
            ),
            39 => 
            array (
                'id' => '40',
            'nama' => 'pecinta alam (PA) Kota Pagaralam',
                'dari' => '2019',
                'sampai' => '2021',
                'jabatan' => 'Wakil ketua',
                'keterangan' => NULL,
                'anggota_id' => '89',
                'created_at' => '2023-03-16 16:45:38',
                'updated_at' => '2023-03-16 16:46:16',
            ),
            40 => 
            array (
                'id' => '41',
                'nama' => 'DKR KWARAN TANGGEUNG',
                'dari' => '2016',
                'sampai' => '2018',
                'jabatan' => 'Anggota',
                'keterangan' => NULL,
                'anggota_id' => '39',
                'created_at' => '2023-03-21 12:16:55',
                'updated_at' => '2023-03-21 12:16:55',
            ),
            41 => 
            array (
                'id' => '42',
                'nama' => 'GP ANSOR',
                'dari' => '2019',
                'sampai' => NULL,
                'jabatan' => 'Anggota',
                'keterangan' => NULL,
                'anggota_id' => '39',
                'created_at' => '2023-03-21 12:17:55',
                'updated_at' => '2023-03-21 12:17:55',
            ),
            42 => 
            array (
                'id' => '43',
                'nama' => 'OSIS MAN 3 Cianjur',
                'dari' => '2017',
                'sampai' => '2018',
                'jabatan' => 'KETUA UMUM',
                'keterangan' => NULL,
                'anggota_id' => '39',
                'created_at' => '2023-03-21 12:21:08',
                'updated_at' => '2023-03-21 12:21:08',
            ),
        ));
        
        
    }
}