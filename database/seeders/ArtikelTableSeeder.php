<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArtikelTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('artikel')->delete();
        
        \DB::table('artikel')->insert(array (
            0 => 
            array (
                'id' => '27',
                'nama' => 'Perempuan berhak menjadi manusia sepenuhnya',
                'slug' => 'perempuan-berhak-menjadi-manusia-sepenuhnya',
                'foto' => '/assets/artikel/perempuan-16502068100.png',
            'detail' => '<p style="text-align: center; "><img style="width: 399.4px; height: 399.4px;" data-bs-filename="243879440_1199208743908116_8009084175971361223_n.jpg" src="/assets/artikel/perempuan-16502068100.png"><p style="text-align: center; "><img style="width: 400.4px; height: 400.4px;" data-bs-filename="243879440_1199208743908116_8009084175971361223_n.jpg" src="/assets/artikel/perempuan-16502068101.png"><br></p><p>"Kita dapat menjadi manusia sepenuhnya, tanpa berhenti menjadi wanita sepenuhnya. RA Kartini"<br style=""><br style="">Perempuan berhak menjadi manusia sepenuhnya, sesuai apa yang diinginkan. Mengejar keinginan dan cita-cita tanpa harus melupakan peran utamanya sebagai Ibu dan istri nantinya.<br style=""><br style="">Join Us:<br style="">}Youtube (Orda Karmapack)<br style=""><a href="https://youtube.com/channel/UCYLkZIjHmDkQH7j7qfVIHbg" target="_blank">https://youtube.com/channel/UCYLkZIjHmDkQH7j7qfVIHbg</a><br style="">}Instagram (orda_karmapack)<br style=""><a href="https://instagram.com/orda_karmapack?utm_medium=copy_link" target="_blank">https://instagram.com/orda_karmapack?utm_medium=copy_link</a><br style="">}Facebook (Orda Karmapack)<br style=""><a href="https://www.facebook.com/karmapack.id" target="_blank">https://www.facebook.com/karmapack.id</a><br style=""><br style=""><a class=" xil3i" href="https://www.instagram.com/explore/tags/karmapack/" tabindex="0" style="border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; overflow-wrap: break-word;">#karmapack</a><br style=""><a class=" xil3i" href="https://www.instagram.com/explore/tags/ordakarmapack/" tabindex="0" style="border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; overflow-wrap: break-word;">#ordakarmapack</a><br style=""><a class=" xil3i" href="https://www.instagram.com/explore/tags/halingkuaing/" tabindex="0" style="border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; overflow-wrap: break-word;">#halingkuaing</a><br style=""><a class=" xil3i" href="https://www.instagram.com/explore/tags/inicianjurkidul/" tabindex="0" style="border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; overflow-wrap: break-word;">#inicianjurkidul</a><br style=""><a class=" xil3i" href="https://www.instagram.com/explore/tags/infocianjur/" tabindex="0" style="border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; overflow-wrap: break-word;">#infocianjur</a><br style=""><a class=" xil3i" href="https://www.instagram.com/explore/tags/infocianjur24jam/" tabindex="0" style="border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; overflow-wrap: break-word;">#infocianjur24jam</a><br style=""><a class=" xil3i" href="https://www.instagram.com/explore/tags/karmapackkabinetmasagi/" tabindex="0" style="border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; overflow-wrap: break-word;">#karmapackkabinetmasagi</a><br style=""><a class=" xil3i" href="https://www.instagram.com/explore/tags/keperempuanankarmapack/" tabindex="0" style="border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; overflow-wrap: break-word;">#keperempuanankarmapack</a><br style=""><a class=" xil3i" href="https://www.instagram.com/explore/tags/perempuanbersatukarmapackmaju/" tabindex="0" style="border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; overflow-wrap: break-word;">#perempuanbersatukarmapackmaju</a><br style=""><a class=" xil3i" href="https://www.instagram.com/explore/tags/kominfokarmapack/" tabindex="0" style="border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; overflow-wrap: break-word;">#kominfokarmapack</a><br style=""><a class=" xil3i" href="https://www.instagram.com/explore/tags/karmapackmengudara/" tabindex="0" style="border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; overflow-wrap: break-word;">#karmapackmengudara</a><br></p><p></p><p></p></p>
',
                'excerpt' => '“Kita dapat menjadi manusia sepenuhnya, tanpa berhenti menjadi wanita sepenuhnya.” RA Kartini',
                'counter' => '75',
                'date' => '2021-09-01',
                'status' => '1',
                'created_at' => '2022-04-17 14:46:50',
                'updated_at' => '2023-09-06 03:45:38',
                'user_id' => '1',
            ),
            1 => 
            array (
                'id' => '28',
                'nama' => 'Peringatan Hari Pengkhianatan G30S PKI',
                'slug' => '2021-peringatan-hari-pengkhianatan-g30s-pki',
                'foto' => '/assets/artikel/2021-perin16502083510.png',
            'detail' => '<p style="text-align: center; "><img style="width: 429.2px; height: 429.2px;" data-bs-filename="243376117_865703194118466_5174505604356463028_n.jpg" src="/assets/artikel/2021-perin16502083510.png"><p style="text-align: center; "><br></p><p style="text-align: left;">Tidak ada kematian yang sia sia, begitu juga dengan kematian pahlawan kita di tanggal 30 September, mereka mati atas nama bangsa indonesia.<br></p><div class="MOdxS " style="border: 0px solid rgb(0, 0, 0); font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; -webkit-box-align: stretch; align-items: stretch; display: inline; -webkit-box-orient: vertical; -webkit-box-direction: normal; flex-direction: column; flex-shrink: 0; position: relative;"><span class="_7UhW9   xLCgt      MMzan   KV-D4            se6yk       T0kll " style="border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 18px; vertical-align: baseline; display: inline !important;">Join Us:<br>}Youtube (Orda Karmapack)<br><a href="https://youtube.com/channel/UCYLkZIjHmDkQH7j7qfVIHbg" target="_blank">https://youtube.com/channel/UCYLkZIjHmDkQH7j7qfVIHbg</a><br>}Instagram (orda_karmapack)<br><a href="https://instagram.com/orda_karmapack?utm_medium=copy_link" target="_blank">https://instagram.com/orda_karmapack?utm_medium=copy_link</a><br>}Facebook (Orda Karmapack)<br><a href="https://www.facebook.com/karmapack.id" target="_blank">https://www.facebook.com/karmapack.id</a><br><br><a class=" xil3i" href="https://www.instagram.com/explore/tags/karmapack/" tabindex="0" style="font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; border: 0px; vertical-align: baseline; overflow-wrap: break-word;">#karmapack</a><br><a class=" xil3i" href="https://www.instagram.com/explore/tags/ordakarmapack/" tabindex="0" style="font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; border: 0px; vertical-align: baseline; overflow-wrap: break-word;">#ordakarmapack</a><br><a class=" xil3i" href="https://www.instagram.com/explore/tags/halingkuaing/" tabindex="0" style="font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; border: 0px; vertical-align: baseline; overflow-wrap: break-word;">#halingkuaing</a><br><a class=" xil3i" href="https://www.instagram.com/explore/tags/inicianjurkidul/" tabindex="0" style="font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; border: 0px; vertical-align: baseline; overflow-wrap: break-word;">#inicianjurkidul</a><br><a class=" xil3i" href="https://www.instagram.com/explore/tags/infocianjur/" tabindex="0" style="font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; border: 0px; vertical-align: baseline; overflow-wrap: break-word;">#infocianjur</a><br><a class=" xil3i" href="https://www.instagram.com/explore/tags/infocianjur24jam/" tabindex="0" style="font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; border: 0px; vertical-align: baseline; overflow-wrap: break-word;">#infocianjur24jam</a><br><a class=" xil3i" href="https://www.instagram.com/explore/tags/karmapackkabinetmasagi/" tabindex="0" style="font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; border: 0px; vertical-align: baseline; overflow-wrap: break-word;">#karmapackkabinetmasagi</a><br><a class=" xil3i" href="https://www.instagram.com/explore/tags/kominfokarmapack/" tabindex="0" style="font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; border: 0px; vertical-align: baseline; overflow-wrap: break-word;">#kominfokarmapack</a><br><a class=" xil3i" href="https://www.instagram.com/explore/tags/karmapackmengudara/" tabindex="0" style="font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; border: 0px; vertical-align: baseline; overflow-wrap: break-word;">#karmapackmengudara</a></span></div></p>
',
                'excerpt' => 'Tidak ada kematian yang sia sia, begitu juga dengan kematian pahlawan kita di tanggal 30 September, mereka mati atas nama bangsa indonesia.',
                'counter' => '27',
                'date' => '2021-09-30',
                'status' => '1',
                'created_at' => '2022-04-17 15:12:31',
                'updated_at' => '2023-09-06 00:43:54',
                'user_id' => '1',
            ),
            2 => 
            array (
                'id' => '29',
                'nama' => 'Hari Dongeng Sedunia 20 Maret, Berikut Sejarahnya',
                'slug' => 'hari-dongeng-sedunia-20-maret-berikut-sejarahnya',
                'foto' => '/assets/artikel/hari-donge16508588100.png',
            'detail' => '<p style="text-align: center; "><img style="width: 432.833px; height: 519.8px;" data-bs-filename="275992630_338274278350229_4965771253315453026_n.webp" src="/assets/artikel/hari-donge16508588100.png"><br><p>Menurut Kamus Besar Bahasa Indonesia (KBBI), dongeng diartikan sebagai cerita yang tidak benar-benar terjadi, terutama menggambarkan kejadian-kejadian masa lalu.</p><p>Meski tak benar-benar terjadi, jalan cerita yang menarik, membuat dongeng disukai oleh anak-anak.</p><p>Di Indonesia, beberapa dongeng yang kerap diceritakan adalah Dongeng Sangkuriang, Roro Jonggrang, Malin Kundang, Danau Toba, hingga cerita soal Timun Mas.</p><p>Sejarah Hari Dongeng Sedunia 20 Maret&nbsp;</p><p>Lantas, bagaimana sejarah Hari Dongeng Sedunia?&nbsp;</p><p>Dikutip dari Days of The Year, sejarah Hari Dongeng Dunia dimulai di Swedia pada 1991.&nbsp;</p><p>Saat itu, mereka telah merayakan Alla Berattares Dag (Hari Semua Pendongeng) yang digelar saat ekuinoks Maret.&nbsp;</p><p>Tak lama kemudian, perayaan itu telah menyebar ke seluruh penjuru dunia. Pada 1997, perayaan telah menyebar ke Australia dan Amerika Latin dan menyebar ke seluruh Skandinavia pada 2002.</p><p>Kemudian, pada 2009 menandai pertama kalinya perayaan itu dilakukan di enam benua dan 20 Maret ditetapkan sebagai Hari Dongeng Sedunia.&nbsp;</p><p>Saat ini, Hari Dongeng Sedunia berlangsung setiap tahun dan berpusat di sekitar tema yang berbeda. Tujuan perayaan ini adalah untuk merayakan seni mendongeng lisan, sehingga semakin banyak orang menceritakan dan mendengarkan cerita dalam bahasa masing-masing.</p><p>Manfaat membacakan cerita atau dongeng</p><p style="text-align: center; "><img style="width: 750px;" data-bs-filename="60ffb2528e6d7.jpg" src="/assets/artikel/hari-donge16508588101.png"></p><p style="text-align: center; "><span style="font-size: 10px;">KG Media bersama media anak meluncurkan kanal berisikan konten dongeng berbasis audio melalui platform siniar (podcast), yaitu Dongeng Pilihan Orangtua.</span><br></p><p>(KG Media) Ada bukti yang menunjukkan bahwa manfaat sering dibacakan sebagai seorang anak jauh melampaui keterampilan literasi, dikutip dari BBC.&nbsp;</p><p><b>1. Membentuk pandangan dunia&nbsp;</b></p><p>Membacakan cerita untuk anak-anak dapat menunjukkan kepada mereka tempat-tempat yang jauh, orang-orang luar biasa, dan situasi yang membuka mata untuk memperluas dan memperkaya dunia mereka. Ini juga bisa menjadi cara yang bagus untuk membantu mereka menghadapi situasi kehidupan nyata yang perlu mereka tangani.&nbsp;</p><p><br></p><p><b>2. Lebih mudah memahami orang lain</b></p><p>Para ilmuwan telah menemukan bahwa anak-anak yang membacakan fiksi untuk mereka secara teratur merasa lebih mudah untuk memahami orang lain.&nbsp;</p><p>Anak-anak ini menunjukkan lebih banyak empati dan memiliki teori pikiran yang berkembang lebih baik.&nbsp;</p><p><br></p><p><b>3. Membantu anak menghadapi dunia nyata</b></p><p>Para peneliti telah menemukan bahwa aktivitas otak yang terjadi ketika kita membaca fiksi sangat mirip dengan mengalami situasi itu dalam kehidupan nyata.&nbsp;</p><p>Jadi, membaca tentang suatu situasi membantu anak-anak mencari cara untuk menyelesaikannya dalam kenyataan.</p><p><br style="color: rgb(42, 42, 42); font-family: Roboto, sans-serif; background-color: rgb(18, 18, 18);">Artikel ini telah tayang di&nbsp;<a href="https://www.kompas.com/" style="vertical-align: baseline; outline: 0px; transition: all 0.2s ease 0s;">Kompas.com</a>&nbsp;dengan judul "Hari Dongeng Sedunia 20 Maret, Berikut Sejarahnya", Klik untuk baca:&nbsp;<a href="https://www.kompas.com/tren/read/2022/03/20/103100565/hari-dongeng-sedunia-20-maret-berikut-sejarahnya?page=all" style="vertical-align: baseline; outline: 0px; transition: all 0.2s ease 0s;">https://www.kompas.com/tren/read/2022/03/20/103100565/hari-dongeng-sedunia-20-maret-berikut-sejarahnya?page=all</a>.<br style="">Penulis : Ahmad Naufal Dzulfaroh<br style="">Editor : Sari Hardiyanto<br></p><p></p><p></p></p>
',
            'excerpt' => 'Menurut Kamus Besar Bahasa Indonesia (KBBI), dongeng diartikan sebagai cerita yang tidak benar-benar terjadi, terutama menggambarkan kejadian-kejadian masa lalu.',
                'counter' => '68',
                'date' => '2022-04-20',
                'status' => '1',
                'created_at' => '2022-04-25 03:50:37',
                'updated_at' => '2023-09-06 06:21:42',
                'user_id' => '1',
            ),
            3 => 
            array (
                'id' => '30',
                'nama' => 'Peringatan Hari Hutan Internasional',
                'slug' => 'peringatan-hari-hutan-internasional2022',
                'foto' => '/assets/artikel/peringatan16508596430.png',
                'detail' => '<p class="MsoNormal" style="text-align: center; margin-bottom: 0cm; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style=\'font-size:10.5pt;font-family:"Helvetica",sans-serif;mso-fareast-font-family:
"Times New Roman";color:#222222;mso-fareast-language:IN\'><br></span><img style="width: 367.4px; height: 441.22px;" data-bs-filename="276121008_719900469175542_1271108511653924704_n.webp" src="/assets/artikel/peringatan16508596430.png"><p class="MsoNormal" style="text-align: center; margin-bottom: 0cm; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><img style="width: 800px;" data-bs-filename="Peringatan-Hari-Hutan-Internasional.gif" src="/assets/artikel/peringatan16508596431.png"><br></p><p class="MsoNormal" style="text-align: center; margin-bottom: 0cm; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style=\'font-size:10.5pt;font-family:"Helvetica",sans-serif;mso-fareast-font-family:
"Times New Roman";color:#222222;mso-fareast-language:IN\'>Peringatan Hari Hutan
Internasional</span></p><p class="MsoNormal" style="margin-bottom: 0cm; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style=\'font-size:10.5pt;font-family:"Helvetica",sans-serif;mso-fareast-font-family:
"Times New Roman";color:#222222;mso-fareast-language:IN\'><p><br></p></span></p><p class="MsoNormal" style="margin-bottom: 0cm; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style=\'font-size:10.5pt;font-family:"Helvetica",sans-serif;mso-fareast-font-family:
"Times New Roman";color:#222222;mso-fareast-language:IN\'><p><br></p></span></p><p class="MsoNormal" style="margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style=\'font-size:10.5pt;font-family:"Helvetica",sans-serif;
mso-fareast-font-family:"Times New Roman";color:#222222;mso-fareast-language:
IN\'>Sejak tahun 2012, Majelis Umum PBB telah menetapkan tanggal 21 Maret
sebagai peringatan Hari Hutan Internasional. Tahun 2022 bertema: &acirc;&#128;&#156;<i>Forests
and sustainable production and consumption</i>&acirc;&#128;&#157;.<a name="_ednref1"></a><a href="https://pslh.ugm.ac.id/peringatan-hari-hutan-internasional/#_edn1"><span style="color:#56C696">[i]</span></a>&nbsp;Tema
tersebut berarti seluruh pihak harus mengakhiri berbagai bentuk pola konsumsi
dan produksi yang tidak berkelanjutan sehingga berdampak negatif terhadap
kelestarian ekosistem hutan. Sudah saatnya, seluruh stakeholders turut
memberikan dukungan yang nyata dan kredibel atas setiap upaya pengelolaan hutan
berkelanjutan yang telah dilaksanakan oleh negara dan masyarakat.<p></p></span></p><p class="MsoNormal" style="margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style=\'font-size:10.5pt;font-family:"Helvetica",sans-serif;
mso-fareast-font-family:"Times New Roman";color:#222222;mso-fareast-language:
IN\'>Peringatan Hari Hutan Internasional meningkatkan kesadaran akan pentingnya
ekosistem hutan. Menurut laporan PBB berjudul &acirc;&#128;&#156;<a href="https://www.un.org/esa/forests/wp-content/uploads/2021/04/Global-Forest-Goals-Report-2021.pdf"><span style="color:#56C696">the Global Forest Goals Report 2021</span></a>&acirc;&#128;&#157;
diterbitkan oleh Departemen Ekonomi dan Urusan Sosial PBB (the UN Department of
Economic and Social Affairs/ UN DESA), melalui Sekretariat Forum PBB tentang
Hutan (United Nations Forum on Forests Secretariat/ UNFFS), luasan hutan di
permukaan daratan bumi saat ini, mencapai 4 miliar hektar, atau setara 31% dari
luas daratan di dunia.<a name="_ednref2"></a><a href="https://pslh.ugm.ac.id/peringatan-hari-hutan-internasional/#_edn2"><span style="color:#56C696">[ii]</span></a>&nbsp;Seluruh
negara di dunia didorong untuk melakukan upaya secara lokal, nasional dan
internasional untuk melaksanakan kegiatan terkait upaya pelestarian ekosistem
hutan. Mengingat berbagai manfaat yang telah diberikan oleh ekosistem hutan,
antara lain yaitu:<a name="_ednref3"></a><a href="https://pslh.ugm.ac.id/peringatan-hari-hutan-internasional/#_edn3"><span style="color:#56C696">[iii]</span></a><p></p></span></p><ul type="disc">
<li class="MsoNormal" style="color: rgb(34, 34, 34); line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style=\'font-size:10.5pt;font-family:"Helvetica",sans-serif;
mso-fareast-font-family:"Times New Roman";mso-fareast-language:IN\'>Sektor
kehutanan menciptakan lapangan kerja bagi sedikitnya 33 juta orang dan
hasil hutan digunakan oleh miliaran orang. Diperkirakan lebih dari
setengah produksi ekonomi dunia (seperti PDB) bergantung pada jasa
ekosistem, termasuk yang disediakan oleh hutan. Lebih dari setengah total
penduduk dunia diperkirakan menggunakan hasil hutan bukan kayu adalah
penunjang kesejahteraan dan sumber mata pencaharian masyarakat.<p></p></span></li>
<li class="MsoNormal" style="color: rgb(34, 34, 34); line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style=\'font-size:10.5pt;font-family:"Helvetica",sans-serif;
mso-fareast-font-family:"Times New Roman";mso-fareast-language:IN\'>Hutan
sangat penting untuk kesehatan planet dan kesejahteraan manusia. Hutan
menutupi hampir sepertiga dari permukaan tanah bumi dan menyediakan
barang-barang seperti kayu, bahan bakar, makanan dan pakan ternak,
membantu memerangi perubahan iklim, melindungi keanekaragaman hayati,
tanah, sungai dan waduk, dan berfungsi sebagai area di mana orang bisa
dekat dengan alam.<p></p></span></li>
<li class="MsoNormal" style="color: rgb(34, 34, 34); line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style=\'font-size:10.5pt;font-family:"Helvetica",sans-serif;
mso-fareast-font-family:"Times New Roman";mso-fareast-language:IN\'>Menggunakan
hutan secara berkelanjutan akan membantu kita beralih ke ekonomi yang
didasarkan atas bahan baku yang terbarukan, dapat digunakan kembali, dan
dapat didaur ulang. Kayu dapat digunakan untuk berbagai tujuan, dengan
dampak lingkungan yang lebih rendah daripada banyak bahan alternatif. Kayu
yang digunakan sekali dapat digunakan kembali dan didaur ulang, sehingga
memperpanjang umurnya dan semakin mengurangi jejak materialnya.<p></p></span></li>
<li class="MsoNormal" style="color: rgb(34, 34, 34); line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style=\'font-size:10.5pt;font-family:"Helvetica",sans-serif;
mso-fareast-font-family:"Times New Roman";mso-fareast-language:IN\'>Memperluas
penggunaan hasil hutan berkontribusi pada netralitas karbon. Ilmu pengetahuan
dan inovasi menghasilkan produk baru yang menarik dari kayu dan pohon,
termasuk tekstil, makanan, bahan bangunan, kosmetik, biokimia, bioplastik,
dan obat-obatan. Mengganti bahan yang kurang berkelanjutan dengan kayu
terbarukan dan produk berbasis pohon dapat mengurangi jejak karbon.<p></p></span></li>
<li class="MsoNormal" style="color: rgb(34, 34, 34); line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style=\'font-size:10.5pt;font-family:"Helvetica",sans-serif;
mso-fareast-font-family:"Times New Roman";mso-fareast-language:IN\'>Kayu
yang lestari adalah bahan penting untuk menghijaukan kota. Sektor bangunan
dan konstruksi bertanggung jawab atas hampir 40 persen emisi gas rumah
kaca terkait energi secara global. Inovasi memungkinkan penggunaan lebih
banyak kayu di gedung-gedung tinggi dan infrastruktur lainnya, membantu
&acirc;&#128;&#156;menghijaukan&acirc;&#128;&#157; kota, karena kayu menyimpan karbon, membutuhkan lebih
sedikit energi untuk diproduksi daripada banyak bahan konstruksi lainnya,
dan menyediakan insulasi yang baik.<p></p></span></li>
<li class="MsoNormal" style="color: rgb(34, 34, 34); line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style=\'font-size:10.5pt;font-family:"Helvetica",sans-serif;
mso-fareast-font-family:"Times New Roman";mso-fareast-language:IN\'>Hutan
sangat penting untuk menunjang produksi pangan. Jasa ekosistem hutan,
seperti habitat keanekaragaman hayati, pengaturan iklim, kualitas air dan
tanah, dan penyerbukan sangatlah penting untuk sistem pangan pertanian
berkelanjutan dan memberi makan populasi global yang terus bertambah.
Selain itu, lebih dari tiga perempat rumah tangga pedesaan di seluruh
dunia diperkirakan memanen makanan liar dari hutan dan lingkungan lainnya.<p></p></span></li>
<li class="MsoNormal" style="color: rgb(34, 34, 34); line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style=\'font-size:10.5pt;font-family:"Helvetica",sans-serif;
mso-fareast-font-family:"Times New Roman";mso-fareast-language:IN\'>Diperlukan
lebih banyak tindakan untuk menghentikan deforestasi dan degradasi hutan.
Sejak tahun 1990, dunia telah kehilangan 420 juta hektar hutan (lebih
besar dari luas negara India), dan masih terjadi deforestasi seluas 10
juta hektar per/ tahun, terutama karena ekspansi lahan pertanian.
Pengelolaan hutan secara lestari dapat mengurangi deforestasi dan
degradasi, memulihkan lanskap yang terdegradasi, dan menyediakan lapangan
kerja dan material terbarukan bagi masyarakat.<p></p></span></li>
<li class="MsoNormal" style="color: rgb(34, 34, 34); line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style=\'font-size:10.5pt;font-family:"Helvetica",sans-serif;
mso-fareast-font-family:"Times New Roman";mso-fareast-language:IN\'>Pilih
produk kayu dari sumber yang legal dan berkelanjutan. Konsumen dapat
berkontribusi pada pemanfaatan hutan yang berkelanjutan dengan memilih
produk kayu dengan label atau sertifikasi yang menegaskan bahwa produk
tersebut berasal dari sumber yang legal dan berkelanjutan.<p></p></span></li>
</ul><p class="MsoNormal" style="margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style=\'font-size:10.5pt;font-family:"Helvetica",sans-serif;
mso-fareast-font-family:"Times New Roman";color:#222222;mso-fareast-language:
IN\'>&nbsp;</span></p><p class="MsoNormal" style="text-align: center; margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><img style="width: 709.247px; height: 319.388px;" data-bs-filename="Peringatan-Hari-Hutan-Internasional-2.jpg" src="/assets/artikel/peringatan16508596432.png"><span style=\'font-size:10.5pt;font-family:"Helvetica",sans-serif;
mso-fareast-font-family:"Times New Roman";color:#222222;mso-fareast-language:
IN\'><br></span></p><p class="MsoNormal" align="center" style="margin-bottom: 11.25pt; text-align: center; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><b><span style=\'font-size:10.5pt;
font-family:"Helvetica",sans-serif;mso-fareast-font-family:"Times New Roman";
color:#222222;mso-fareast-language:IN\'>Foto: sertifikasi ramah lingkungan untuk
produk kehutanan, yang menjadi salah satu indikator bagi konsumen untuk
menentukan hasil produksi hutan yang lestari.</span></b><span style=\'font-size:
10.5pt;font-family:"Helvetica",sans-serif;mso-fareast-font-family:"Times New Roman";
color:#222222;mso-fareast-language:IN\'><p></p></span></p><p class="MsoNormal" style="margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style=\'font-size:10.5pt;font-family:"Helvetica",sans-serif;
mso-fareast-font-family:"Times New Roman";color:#222222;mso-fareast-language:
IN\'>Selaras dengan hal tersebut, Sekretaris Jenderal PBB Ant&Atilde;&sup3;nio Guterres juga
mengungkapkan, bahwa hutan yang sehat sangat penting bagi manusia dan planet
ini. Hutan berfungsi sebagai filter alami, menyediakan udara dan air bersih,
dan mereka adalah surga keanekaragaman hayati. Membantu mengatur iklim kita
dengan mempengaruhi pola curah hujan, mendinginkan daerah perkotaan dan
menyerap sepertiga dari emisi gas rumah kaca. Hutan menjadi sumber mata
pencaharian bagi banyak komunitas dan masyarakat adat, serta sumber dari
obat-obatan, makanan, sekaligus tempat perlindungan. Sayangnya, masih terjadi
kerusakan atau kehancuran hutan sekitar 10 juta hektar hutan setiap tahunnya.<p></p></span></p><p class="MsoNormal" style="margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style=\'font-size:10.5pt;font-family:"Helvetica",sans-serif;
mso-fareast-font-family:"Times New Roman";color:#222222;mso-fareast-language:
IN\'>Indonesia sebagai salah satu negara pemilik hutan terluas di dunia, sejak
era orde baru telah mengandalkan hutan sebagai penunjang pertumbuhan
ekonominya. Karenanya kelestarian hutan menjadi suatu keniscayaan dalam upaya
mewujudkan pembangunan berkelanjutan di Indonesia. Menurut Laporan State Forest
Indonesian Tahun 2020, yang diterbitkan Kementerian Kehutanan dan Lingkungan
Hidup bekerjasama dengan FAO (Food and Agriculture Organization) Perserikatan
Bangsa-Bangsa, luasan kawasan di Indonesia yang ditetapkan sebagai Kawasan
Hutan mencapai 120 Juta Ha, atau seluas 64 persen dari seluruh wilayah daratan
Indonesia. Karena letak geografisnya, Indonesia merupakan salah satu negara
dengan tingkat keanekaragaman hayati dan endemisitas yang sangat tinggi, serta
memiliki tingkat keanekaragaman hayati yang lebih tinggi daripada negara lain
di dunia.<a name="_ednref4"></a><a href="https://pslh.ugm.ac.id/peringatan-hari-hutan-internasional/#_edn4"><span style="color:#56C696">[iv]</span></a><p></p></span></p><p class="MsoNormal" style="margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style=\'font-size:10.5pt;font-family:"Helvetica",sans-serif;
mso-fareast-font-family:"Times New Roman";color:#222222;mso-fareast-language:
IN\'>Kawasan yang ditetapkan sebagai kawasan Hutan Produksi Indonesia seluas
68,8 juta hektar, dimana luasan kawasan yang telah diberikan konsesi mencapai
34,18 juta hektar, sedangkan sisanya 34,62 juta hektar belum dibebankan izin.<a name="_ednref5"></a><a href="https://pslh.ugm.ac.id/peringatan-hari-hutan-internasional/#_edn5"><span style="color:#56C696">[v]</span></a>&nbsp;Sedangkan
menurut Laporan Status Hutan dan Kehutanan Indonesia pada tahun 2018, luasan
kawasan hutan yang telah diberikan izin konsesi mencapai 30,7 Juta Hektar, dan
seluas 38,1 juta hektar sisanya belum dibebani izin apapun.<a name="_ednref6"></a><a href="https://pslh.ugm.ac.id/peringatan-hari-hutan-internasional/#_edn6"><span style="color:#56C696">[vi]</span></a><p></p></span></p><p class="MsoNormal" style="margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style=\'font-size:10.5pt;font-family:"Helvetica",sans-serif;
mso-fareast-font-family:"Times New Roman";color:#222222;mso-fareast-language:
IN\'>&nbsp;<p></p></span></p><p class="MsoNormal" style="margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><img style="width: 1113.2px;" data-bs-filename="Peringatan-Hari-Hutan-Internasional-3.jpg" src="/assets/artikel/peringatan16508596433.png"><br></p><p class="MsoNormal" align="center" style="margin-bottom: 11.25pt; text-align: center; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><b><span style=\'font-size:10.5pt;
font-family:"Helvetica",sans-serif;mso-fareast-font-family:"Times New Roman";
color:#222222;mso-fareast-language:IN\'>Foto: Kayu bulat (<i>tangiable</i>) yang
masih menjadi tumpuan ekonomi hutan di Indonesia</span></b><span style=\'font-size:10.5pt;font-family:"Helvetica",sans-serif;mso-fareast-font-family:
"Times New Roman";color:#222222;mso-fareast-language:IN\'><p></p></span></p><p class="MsoNormal" style="margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style=\'font-size:10.5pt;font-family:"Helvetica",sans-serif;
mso-fareast-font-family:"Times New Roman";color:#222222;mso-fareast-language:
IN\'>Menurut data Statistik Produksi Kehutanan 2020 yang diterbitkan oleh BPS,
pada tahun 2020 Hutan di Indonesia menghasilkan kayu bulat sebesar 61,02 juta
m&Acirc;&sup3;. Sebesar 68,39 persen produksi kayu bulat di Indonesia berasal dari Pulau
Sumatra, mencapai 41,73 juta m&Acirc;&sup3;. Produksi kayu bulat terbesar adalah kayu
akasia sebanyak 32,114 juta m&Acirc;&sup3; (52,63 persen), kayu kelompok rimba campuran
sebanyak 20,655 juta m&Acirc;&sup3; (33,85 persen), kayu kelompok meranti sebanyak 4,795
juta m&Acirc;&sup3; (7,86 persen), kayu kelompok indah sebanyak 0,492 juta m&Acirc;&sup3; (0,81
persen), kayu kelompok eboni sebanyak 0,001 juta m&Acirc;&sup3; (0,00 persen), sedangkan
sisanya kayu lainnya sebanyak 2,961 juta m&Acirc;&sup3; (4,85 persen).<a name="_ednref7"></a><a href="https://pslh.ugm.ac.id/peringatan-hari-hutan-internasional/#_edn7"><span style="color:#56C696">[vii]</span></a><p></p></span></p><p class="MsoNormal" style="margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style=\'font-size:10.5pt;font-family:"Helvetica",sans-serif;
mso-fareast-font-family:"Times New Roman";color:#222222;mso-fareast-language:
IN\'>Sedangkan produksi kayu olahan pada tahun 2020, berupa chip dan partikel
sebesar 21,54 juta m&Acirc;&sup3; dan 12,33 juta ton, diikuti oleh bubur kayu sebesar 8,18
juta ton, kayu lapis sebesar 3,88 juta m&Acirc;&sup3;, kayu gergajian sebesar 3,72 juta m&Acirc;&sup3;,
veneer sebesar 2,04 juta m&Acirc;&sup3;, papan serat sebesar 0,69 juta m&Acirc;&sup3;, barecore sebesar
0,38 juta m&Acirc;&sup3;, moulding/dowel sebesar 0,28 juta m&Acirc;&sup3;, dan papan partikel sebesar
0,02 juta m&Acirc;&sup3;. Sedangkan sisa kayu olahan lainnya sebanyak 0,34 juta m&Acirc;&sup3; dan 0,03
juta ton. Sebagian besar produk kayu olahan dihasilkan di Pulau Sumatera dan
Pulau Jawa. Produksi kayu olahan berupa chip &amp; partikel, bubur kayu, dan
papan serat sebagian besar berasal dari pulau Sumatera. Produksi kayu olahan
dengan jenis kayu lapis, kayu gergajian, veneer, barecore, dan moulding/ dowel
sebagian besar berasal dari pulau Jawa.<p></p></span></p><p class="MsoNormal" style="margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style=\'font-size:10.5pt;font-family:"Helvetica",sans-serif;
mso-fareast-font-family:"Times New Roman";color:#222222;mso-fareast-language:
IN\'>Kemudian untuk produk hasil hutan bukan kayu (HHBK) dengan jenis rotan,
getah karet, dan sagu banyak yang berasal dari pulau Sumatera. Produksi hutan
bukan kayu dengan jenis bambu, getah pinus, daun kayu putih, gondorukem, madu,
dan terpentin sebagian besar berasal dari pulau Jawa. Sementara, sebagian besar
produksi hutan bukan kayu dengan jenis sagu dan minyak kayu putih berasal dari
pulau Maluku dan Papua.<a name="_ednref8"></a><a href="https://pslh.ugm.ac.id/peringatan-hari-hutan-internasional/#_edn8"><span style="color:#56C696">[viii]</span></a><p></p></span></p><p class="MsoNormal" style="margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style=\'font-size:10.5pt;font-family:"Helvetica",sans-serif;
mso-fareast-font-family:"Times New Roman";color:#222222;mso-fareast-language:
IN\'>Sampai saat ini, sebagian besar masyarakat Indonesia masih memiliki
ketergantungan ekonomi terhadap potensi kawasan hutan. Sebanyak 25.800 desa,
atau 34,1% dari total 74.954 desa di seluruh Indonesia, merupakan
wilayah-wilayah yang berbatasan langsung dengan kawasan hutan. Kawasan konservasi
terestrial seluas 22,1 juta hektar dikelilingi oleh 6.381 desa, dengan sebagian
besar penduduknya memiliki ketergantungan terhadap sumberdaya alam untuk
pemenuhan kebutuhan hidupnya.<a name="_ednref9"></a><a href="https://pslh.ugm.ac.id/peringatan-hari-hutan-internasional/#_edn9"><span style="color:#56C696">[ix]</span></a><p></p></span></p><p class="MsoNormal" style="margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style=\'font-size:10.5pt;font-family:"Helvetica",sans-serif;
mso-fareast-font-family:"Times New Roman";color:#222222;mso-fareast-language:
IN\'>Pengelolaan hutan yang lestari dan pemanfaatannya atas sumber daya adalah
kunci untuk memerangi perubahan iklim dan berkontribusi pada kemakmuran dan
kesejahteraan generasi sekarang dan mendatang. Hutan juga memainkan peran
penting dalam pengentasan kemiskinan dan dalam pencapaian Tujuan Pembangunan
Berkelanjutan (SDGs). Selain itu, Hutan, melalui jasa ekosistemnya, adalah
solusi kunci berbasis alam untuk membangun kembali ekonomi global pascapandemi
dengan cara melestarikan alam, sambil mendorong pertumbuhan ekonomi.<a name="_ednref10"></a><a href="https://pslh.ugm.ac.id/peringatan-hari-hutan-internasional/#_edn10"><span style="color:#56C696">[x]</span></a><p></p></span></p><p class="MsoNormal" style="text-align: center; margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><img style="width: 920px;" data-bs-filename="Peringatan-Hari-Hutan-Internasional-4.png" src="/assets/artikel/peringatan16508596434.png"><br></p><p class="MsoNormal" align="center" style="margin-bottom: 11.25pt; text-align: center; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><b><span style=\'font-size:10.5pt;
font-family:"Helvetica",sans-serif;mso-fareast-font-family:"Times New Roman";
color:#222222;mso-fareast-language:IN\'>Tema Hari Hutan Internasional Tahun
2022, &acirc;&#128;&#156;Choose Sustainable Wood for People and Planet&acirc;&#128;&#157;</span></b><span style=\'font-size:10.5pt;font-family:"Helvetica",sans-serif;mso-fareast-font-family:
"Times New Roman";color:#222222;mso-fareast-language:IN\'><p></p></span></p><p class="MsoNormal" style="margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style=\'font-size:10.5pt;font-family:"Helvetica",sans-serif;
mso-fareast-font-family:"Times New Roman";color:#222222;mso-fareast-language:
IN\'>Seluruh manfaat dan upaya pengelolaan ekosistem hutan telah terangkum dalam
Rencana Strategis PBB untuk Hutan 2017&acirc;&#128;&#147;2030 (The United Nations Strategic Plan
for Forests 2017&acirc;&#128;&#147;2030) yang memberikan kerangka kerja global untuk tindakan
pengelolaan seluruh jenis hutan secara berkelanjutan dan untuk menghentikan
deforestasi dan degradasi hutan.<p></p></span></p><p class="MsoNormal" style="margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style=\'font-size:10.5pt;font-family:"Helvetica",sans-serif;
mso-fareast-font-family:"Times New Roman";color:#222222;mso-fareast-language:
IN\'>Rencana Strategis PBB untuk Hutan 2017-2030 dibuat dengan misi untuk
mempromosikan pengelolaan hutan lestari dan meningkatkan kontribusi hutan dan
pohon ke Agenda 2030 untuk pembangunan berkelanjutan. Rencana tersebut juga
menggariskan, bahwa untuk menciptakan dunia di mana hutan dapat memberikan
manfaat ekonomi, sosial, lingkungan, dan budaya bagi generasi sekarang dan
mendatang, maka yang pertama dan utama, adalah dibutuhkan lebih banyak hutan.
Sehingga berbagai anggapan yang mempertentangkan antara keberlanjutan pembangunan
dan kelestarian hutan, sehingga menciptakan pembenaran sebuah deforestasi,
patut dikaji kembali secara mendalam.<p></p></span></p><p class="MsoNormal" style="margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style=\'font-size:10.5pt;font-family:"Helvetica",sans-serif;
mso-fareast-font-family:"Times New Roman";color:#222222;mso-fareast-language:
IN\'>Inti dari Rencana Strategis adalah enam Tujuan Hutan Global (Global Forest
Goals/ GFGs) dan 26 target terkait yang bersifat sukarela dan universal. Enam
Tujuan Hutan Global yang secara langsung mendukung Tujuan Pembangunan
Berkelanjutan PBB, mencakup:<a name="_ednref11"></a><a href="https://pslh.ugm.ac.id/peringatan-hari-hutan-internasional/#_edn11"><span style="color:#56C696">[xi]</span></a><p></p></span></p><ol start="1" type="1">
<li class="MsoNormal" style="color: rgb(34, 34, 34); line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style=\'font-size:10.5pt;font-family:"Helvetica",sans-serif;
mso-fareast-font-family:"Times New Roman";mso-fareast-language:IN\'>Membalikkan
kehilangan tutupan hutan di seluruh dunia melalui pengelolaan hutan
lestari, termasuk perlindungan, restorasi, aforestasi dan reboisasi, dan
meningkatkan upaya untuk mencegah degradasi hutan dan berkontribusi pada
upaya dunia untuk mengatasi perubahan iklim.<p></p></span></li>
<li class="MsoNormal" style="color: rgb(34, 34, 34); line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style=\'font-size:10.5pt;font-family:"Helvetica",sans-serif;
mso-fareast-font-family:"Times New Roman";mso-fareast-language:IN\'>Meningkatkan
manfaat ekonomi, sosial dan lingkungan berbasis hutan, termasuk dengan
meningkatkan mata pencaharian masyarakat yang bergantung pada hutan.<p></p></span></li>
<li class="MsoNormal" style="color: rgb(34, 34, 34); line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style=\'font-size:10.5pt;font-family:"Helvetica",sans-serif;
mso-fareast-font-family:"Times New Roman";mso-fareast-language:IN\'>Meningkatkan
kawasan hutan lindung di seluruh dunia dan kawasan hutan yang dikelola
secara lestari lainnya secara signifikan, serta proporsi hasil hutan dari
hutan yang dikelola secara lestari.</span></li><li class="MsoNormal" style="color: rgb(34, 34, 34); line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style=\'font-size:10.5pt;font-family:"Helvetica",sans-serif;
mso-fareast-font-family:"Times New Roman";mso-fareast-language:IN\'>Memobilisasi
sumber daya keuangan baru dan tambahan yang meningkat secara signifikan
dari semua sumber untuk pelaksanaan pengelolaan hutan lestari dan
memperkuat kerjasama dan kemitraan ilmiah dan teknis.<p></p></span></li>
<li class="MsoNormal" style="color: rgb(34, 34, 34); line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style=\'font-size:10.5pt;font-family:"Helvetica",sans-serif;
mso-fareast-font-family:"Times New Roman";mso-fareast-language:IN\'>Mempromosikan
kerangka tata kelola untuk menerapkan pengelolaan hutan lestari, termasuk
melalui instrumen hutan PBB, dan meningkatkan kontribusi hutan pada Agenda
2030 untuk Pembangunan Berkelanjutan.<p></p></span></li>
<li class="MsoNormal" style="color: rgb(34, 34, 34); line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style=\'font-size:10.5pt;font-family:"Helvetica",sans-serif;
mso-fareast-font-family:"Times New Roman";mso-fareast-language:IN\'>Meningkatkan
kerja sama, koordinasi, koherensi, dan sinergi dalam isu-isu terkait hutan
di semua tingkatan, termasuk di dalam sistem Perserikatan Bangsa-Bangsa
dan di seluruh organisasi anggota Kemitraan Kolaboratif di Hutan, serta
lintas sektor dan pemangku kepentingan terkait.</span></li></ol><p style="color: rgb(34, 34, 34); line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><img style="width: 1113.2px;" data-bs-filename="Peringatan-Hari-Hutan-Internasional-5-1536x675.png" src="/assets/artikel/peringatan16508596435.png"><span style=\'font-size:10.5pt;font-family:"Helvetica",sans-serif;
mso-fareast-font-family:"Times New Roman";mso-fareast-language:IN\'><br></span></p><ol start="1" type="1">
</ol><p class="MsoNormal" style="margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><img style="width: 1113.2px;" data-bs-filename="Peringatan-Hari-Hutan-Internasional-6-1536x668.png" src="/assets/artikel/peringatan16508596436.png"><br></p><p class="MsoNormal" style="margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style=\'font-size:10.5pt;font-family:"Helvetica",sans-serif;
mso-fareast-font-family:"Times New Roman";color:#222222;mso-fareast-language:
IN\'>Semoga peringatan Hari Hutan Internasional menjadi momentum untuk
mengingatkan kembali nilai dan manfaat keberadaan ekosistem hutan, sekaligus
mendorong komitmen atas pelestarian ekosistem hutan di seluruh dunia. Selamat
Hari Hutan Internasional&acirc;&#128;&brvbar;<p></p></span></p><p class="MsoNormal" style="margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><a name="_edn1"></a><a href="https://pslh.ugm.ac.id/peringatan-hari-hutan-internasional/#_ednref1"><span style=\'font-size:10.5pt;font-family:"Helvetica",sans-serif;
mso-fareast-font-family:"Times New Roman";color:#56C696;mso-fareast-language:
IN\'>[i]</span></a><span style=\'font-size:10.5pt;font-family:
"Helvetica",sans-serif;mso-fareast-font-family:"Times New Roman";color:#222222;
mso-fareast-language:IN\'>&nbsp;Lihat dalam: (<a href="https://www.fao.org/international-day-of-forests/en/"><span style="color:#56C696">https://www.fao.org/international-day-of-forests/en/</span></a>)<p></p></span></p><p class="MsoNormal" style="margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><a name="_edn2"></a><a href="https://pslh.ugm.ac.id/peringatan-hari-hutan-internasional/#_ednref2"><span style=\'font-size:10.5pt;font-family:"Helvetica",sans-serif;
mso-fareast-font-family:"Times New Roman";color:#56C696;mso-fareast-language:
IN\'>[ii]</span></a><span style=\'font-size:10.5pt;font-family:
"Helvetica",sans-serif;mso-fareast-font-family:"Times New Roman";color:#222222;
mso-fareast-language:IN\'>&nbsp;United Nations Department of Economic and Social
Affairs, United Nations Forum on Forests Secretariat (2021). The Global Forest
Goals Report 2021<p></p></span></p><p class="MsoNormal" style="margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><a name="_edn3"></a><a href="https://pslh.ugm.ac.id/peringatan-hari-hutan-internasional/#_ednref3"><span style=\'font-size:10.5pt;font-family:"Helvetica",sans-serif;
mso-fareast-font-family:"Times New Roman";color:#56C696;mso-fareast-language:
IN\'>[iii]</span></a><span style=\'font-size:10.5pt;font-family:
"Helvetica",sans-serif;mso-fareast-font-family:"Times New Roman";color:#222222;
mso-fareast-language:IN\'>&nbsp;Lihat dalam: (<a href="https://www.fao.org/international-day-of-forests/key-messages/en/"><span style="color:#56C696">https://www.fao.org/international-day-of-forests/key-messages/en/</span></a>)<p></p></span></p><p class="MsoNormal" style="margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><a name="_edn4"></a><a href="https://pslh.ugm.ac.id/peringatan-hari-hutan-internasional/#_ednref4"><span style=\'font-size:10.5pt;font-family:"Helvetica",sans-serif;
mso-fareast-font-family:"Times New Roman";color:#56C696;mso-fareast-language:
IN\'>[iv]</span></a><span style=\'font-size:10.5pt;font-family:
"Helvetica",sans-serif;mso-fareast-font-family:"Times New Roman";color:#222222;
mso-fareast-language:IN\'>&nbsp;Ministry of environment and Forestry, republic
of Indonesia (2021), State Forest Indonesian Tahun 2020<p></p></span></p><p class="MsoNormal" style="margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><a name="_edn5"></a><a href="https://pslh.ugm.ac.id/peringatan-hari-hutan-internasional/#_ednref5"><span style=\'font-size:10.5pt;font-family:"Helvetica",sans-serif;
mso-fareast-font-family:"Times New Roman";color:#56C696;mso-fareast-language:
IN\'>[v]</span></a><span style=\'font-size:10.5pt;font-family:
"Helvetica",sans-serif;mso-fareast-font-family:"Times New Roman";color:#222222;
mso-fareast-language:IN\'>&nbsp;<i>Ibid.</i><p></p></span></p><p class="MsoNormal" style="margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><a name="_edn6"></a><a href="https://pslh.ugm.ac.id/peringatan-hari-hutan-internasional/#_ednref6"><span style=\'font-size:10.5pt;font-family:"Helvetica",sans-serif;
mso-fareast-font-family:"Times New Roman";color:#56C696;mso-fareast-language:
IN\'>[vi]</span></a><span style=\'font-size:10.5pt;font-family:
"Helvetica",sans-serif;mso-fareast-font-family:"Times New Roman";color:#222222;
mso-fareast-language:IN\'>&nbsp;Kementerian Lingkungan Hidup dan Kehutanan,
(2019), Status Hutan dan Kehutanan Indonesia Tahun 2018<p></p></span></p><p class="MsoNormal" style="margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><a name="_edn7"></a><a href="https://pslh.ugm.ac.id/peringatan-hari-hutan-internasional/#_ednref7"><span style=\'font-size:10.5pt;font-family:"Helvetica",sans-serif;
mso-fareast-font-family:"Times New Roman";color:#56C696;mso-fareast-language:
IN\'>[vii]</span></a><span style=\'font-size:10.5pt;font-family:
"Helvetica",sans-serif;mso-fareast-font-family:"Times New Roman";color:#222222;
mso-fareast-language:IN\'>&nbsp;Badan Pusat Statistik, &acirc;&#128;&#156;Statistik Produksi
Kehutanan 2020&acirc;&#128;&#157;, dokumen dapat diakses di (<a href="https://www.bps.go.id/publication/2021/07/30/d45441e7214b3c12c9653c45/statistik-produksi-kehutanan-2020.html"><span style="color:#56C696">https://www.bps.go.id/publication/2021/07/30/d45441e7214b3c12c9653c45/statistik-produksi-kehutanan-2020.html</span></a>)<p></p></span></p><p class="MsoNormal" style="margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><a name="_edn8"></a><a href="https://pslh.ugm.ac.id/peringatan-hari-hutan-internasional/#_ednref8"><span style=\'font-size:10.5pt;font-family:"Helvetica",sans-serif;
mso-fareast-font-family:"Times New Roman";color:#56C696;mso-fareast-language:
IN\'>[viii]</span></a><span style=\'font-size:10.5pt;font-family:
"Helvetica",sans-serif;mso-fareast-font-family:"Times New Roman";color:#222222;
mso-fareast-language:IN\'>&nbsp;<i>Ibid.</i><p></p></span></p><p class="MsoNormal" style="margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><a name="_edn9"></a><a href="https://pslh.ugm.ac.id/peringatan-hari-hutan-internasional/#_ednref9"><span style=\'font-size:10.5pt;font-family:"Helvetica",sans-serif;
mso-fareast-font-family:"Times New Roman";color:#56C696;mso-fareast-language:
IN\'>[ix]</span></a><span style=\'font-size:10.5pt;font-family:
"Helvetica",sans-serif;mso-fareast-font-family:"Times New Roman";color:#222222;
mso-fareast-language:IN\'>&nbsp;Kementerian Lingkungan Hidup dan Kehutanan,
(2019), Status Hutan dan Kehutanan Indonesia Tahun 2018<p></p></span></p><p class="MsoNormal" style="margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><a name="_edn10"></a><a href="https://pslh.ugm.ac.id/peringatan-hari-hutan-internasional/#_ednref10"><span style=\'font-size:10.5pt;font-family:"Helvetica",sans-serif;
mso-fareast-font-family:"Times New Roman";color:#56C696;mso-fareast-language:
IN\'>[x]</span></a><span style=\'font-size:10.5pt;font-family:
"Helvetica",sans-serif;mso-fareast-font-family:"Times New Roman";color:#222222;
mso-fareast-language:IN\'>&nbsp;Lihat dalam: (<a href="https://www.unep.org/resources/factsheet/investing-forests-build-back-better-greener"><span style="color:#56C696">https://www.unep.org/resources/factsheet/investing-forests-build-back-better-greener</span></a>)<p></p></span></p><p class="MsoNormal" style="margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><a name="_edn11"></a><a href="https://pslh.ugm.ac.id/peringatan-hari-hutan-internasional/#_ednref11"><span style=\'font-size:10.5pt;font-family:"Helvetica",sans-serif;
mso-fareast-font-family:"Times New Roman";color:#56C696;mso-fareast-language:
IN\'>[xi]</span></a><span style=\'font-size:10.5pt;font-family:
"Helvetica",sans-serif;mso-fareast-font-family:"Times New Roman";color:#222222;
mso-fareast-language:IN\'>&nbsp;United Nations Department of Economic and Social
Affairs, United Nations Forum on Forests Secretariat (2021). The Global Forest
Goals Report 2021<p></p></span></p><p class="MsoNormal" style="margin-bottom: 11.25pt; line-height: 150%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">













































































</p><p class="MsoNormal"><p>&nbsp;</p></p></p>
',
                'excerpt' => 'Sejak tahun 2012, Majelis Umum PBB telah menetapkan tanggal 21 Maret sebagai peringatan Hari Hutan Internasional. Tahun 2022 bertema: “Forests and sustainable production and consumption”',
                'counter' => '54',
                'date' => '2022-04-21',
                'status' => '1',
                'created_at' => '2022-04-25 04:07:23',
                'updated_at' => '2023-09-06 06:12:37',
                'user_id' => '1',
            ),
            4 => 
            array (
                'id' => '31',
                'nama' => 'Tema Hari Buku dan Hak Cipta Sedunia 23 April 2022 dan Sejarahnya',
                'slug' => 'tema-hari-buku-dan-hak-cipta-sedunia-23-april-2022-dan-sejarahnya',
                'foto' => '/assets/artikel/tema-hari-16508601090.png',
            'detail' => '<p style="text-align: center; "><img style="width: 350px; height: 420.547px;" data-bs-filename="278987778_958380894820976_8231711504543053067_n.webp" src="/assets/artikel/tema-hari-16508601090.png"><p style="text-align: left;"><br></p><p>Organisasi Pendidikan, Keilmuan, dan Kebudayaan PBB (UNESCO) memperingati Hari Buku dan Hak Cipta Sedunia pada 23 April 2022.&nbsp;</p><p>UNESCO menciptakan World Book and Copyright Day untuk meningkatkan kesadaran bahwa membaca adalah hal yang sangat penting dan banyak mempengaruhi kehidupan.&nbsp;</p><p>"Melalui membaca dan memperingati Hari Buku dan Hak Cipta Sedunia, 23 April, kita dapat membuka diri kepada orang lain meskipun jauh, dan kita dapat bepergian berkat imajinasi," tulis UNESCO. Dalam persiapan Hari Buku dan Hak Cipta Sedunia, UNESCO mendorong Anda untuk membaca buku dan mengeksplorasi topik, format, atau genre baru yang tidak biasa. "Tujuan kami adalah untuk melibatkan orang dalam membaca, dan untuk bersenang-senang melakukannya," ujar UNESCO.&nbsp;</p><p><br></p><p><b>Tema Hari Buku Sedunia 2022&nbsp;</b></p><p>Dalam lamannya, UNESCO menuliskan, sebagai perayaan Hari Buku dan Hak Cipta Sedunia tahun ini, UNESCO telah membuat tantangan Bookfacechallenge. Tantangan ini meminta Anda untuk mengunggah foto bersama sampul buku yang unik.&nbsp;</p><p>Usahakan agar sampul buku tersebut cocok atau matching dengan wajah Anda.&nbsp;</p><p>Pandemi juga mengingatkan kita semua akan pentingnya buku dan membaca untuk kenyamanan dan mengisi waktu.&nbsp;</p><p>"Kami selalu senang melihat ketika sebuah judul telah disajikan dengan baik, karena sampul yang baik dapat membuat atau menghancurkan sebuah judul," tulis UNESCO. UNESCO mengajak siswa, guru, pembaca dari seluruh dunia serta industri buku dan layanan perpustakaan untuk bersaksi dan mengekspresikan kecintaan mereka terhadap membaca dengan berpartisipasi dalam tantangan ini.&nbsp;</p><p>Sejarah Hari Buku dan Hak Cipta Sedunia Hari Buku dan Hak Cipta Sedunia adalah perayaan untuk mempromosikan kenikmatan buku dan membaca. Setiap tahun, pada tanggal 23 April, perayaan diadakan di seluruh dunia untuk mengenali ruang lingkup buku.&nbsp;</p><p>Buku adalah penghubung antara masa lalu dan masa depan, jembatan antar generasi dan lintas budaya.&nbsp;</p><p>Tanggal 23 April dipilih karena ini adalah tanggal simbolis dalam sastra dunia, di mana beberapa penulis terkemuka, William Shakespeare, Miguel de Cervantes dan Inca Garcilaso de la Vega meninggal. Tanggal ini juga merupakan hari diadakannya Konferensi Umum UNESCO di Paris pada tahun 1995, untuk memberikan penghormatan di seluruh dunia kepada buku dan penulis. Dengan memperjuangkan buku dan hak cipta, UNESCO membela kreativitas, keragaman, dan akses yang setara ke pengetahuan, dengan pekerjaan di seluruh bidang.</p><div><br></div></p>
',
                'excerpt' => 'UNESCO menciptakan World Book and Copyright Day untuk meningkatkan kesadaran bahwa membaca adalah hal yang sangat penting dan banyak mempengaruhi kehidupan.',
                'counter' => '203',
                'date' => '2022-04-23',
                'status' => '1',
                'created_at' => '2022-04-25 04:15:09',
                'updated_at' => '2023-09-06 08:36:23',
                'user_id' => '1',
            ),
            5 => 
            array (
                'id' => '32',
                'nama' => 'Sejarah dan Tema Hari Keadilan Sosial Sedunia pada 20 Februari 2022',
                'slug' => 'sejarah-dan-tema-hari-keadilan-sosial-sedunia-pada-20-februari-2022-baca-selengkapnya-di-artikel-sejarah-dan-tema-hari-keadilan-sosial-sedunia-pada-20-februari-2022-httpstirtoidgo2g',
                'foto' => '/assets/artikel/sejarah-da16508901690.png',
            'detail' => '<p style="text-align: center; "><img style="width: 355.392px; height: 426.8px;" data-bs-filename="274312330_3375202526044616_3965931927643614004_n.webp" src="/assets/artikel/sejarah-da16508901690.png"><p>Tanggal 20 Februari diperingati sebagai World Day of Social Justice atau Hari Keadilan Sosial Sedunia.Hari peringatan yang dirayakan secara global tersebut akan jatuh pada Minggu (20/2/2022).</p><p>Sejarah mencatat, Hari Keadilan Sosial Sedunia telah diperingati sejak 2009.&nbsp; Setiap tahunnya, peringatan Hari Keadilan Sosial Sedunia mengangkat satu tema dan pesan tertentu. Hari Keadilan Sosial Sedunia merupakan peringatan untuk menjamin keadilan bagi seluruh komunitas global melalui pekerjaan, perlindungan sosial, dialog sosial, serta prinsip-prinsip dan hak dasar di tempat kerja.</p><p> Peringatan ini dideklarasikan oleh Majelis Umum Perserikatan Bangsa-Bangsa (PBB) sebagai upaya mempromosikan pembangunan sosial dan martabat manusia. Misi global yang diusung pada peringatan Hari Keadilan Sosial Sedunia adalah mengatasi sejumlah isu seperti diskriminasi, kemiskinan, dan kesetaraan gender. </p><p><b>Sejarah Hari Keadilan Sosial Sedunia </b></p><p>Melansir laman resmi PBB, tanggal 20 Februari ditetapkan sebagai Hari Keadilan Sosial Sedunia pada 26 November 2007 oleh Majelis Umum PBB. Penetapannya dipicu oleh banyaknya masalah ketidakadilan sosial di dunia khususnya dari sektor ekonomi. </p><p>Masalah-masalah tersebut bahkan diakui masih ada hingga saat ini, termasuk ketidaksetaraan gender, rasisme sistemik, hingga pengangguran. Hari Keadilan Sosial Sedunia kemudian dideklarasikan pertama kalinya tanggal 8 Juni 2008, sebagai langkah dari PBB menuju komitmen untuk keadilan sosial yang berkelanjutan dan globalisasi yang adil. Menyusul deklarasi tersebut, Hari Keadilan Sosial Sedunia dirayakan untuk pertama kalinya pada 2009. </p><p>Setiap tahunnya peringatan Hari Kedilan Sosial Sedunia menjadi momen untuk komunitas dunia membantu mewujudkan keadilan sosial di masa sekarang dan masa depan. Guru-guru dan orang tua berperan penting dalam mengajarkan pentingnya ideologi keadilan sosial bagi anak-anak muda agar generasi berikutnya tidak melakukan kesalahan yang sama seperti generasi sebelumnya. Tema Hari Keadilan Sosial Sedunia 2022 Tahun ini Hari Keadilan Sosial Sedunia mengangkat tema "Achieving Social Justice through Formal Employment" yang artinya mencapai keadilan sosial melalui pekerjaan formal. </p><p>PBB mengungkapkan bahwa tema ini membawa misi dalam mempromosikan transisi masyarakat dari pekerjaan informal ke pekerjaan formal untuk mengurangi kemiskinan dan ketidaksetaraan. Hal ini mengacu pada kondisi ekonomi dunia yang rentan selama pandemi COVID-19, dimana lebih dari 60 persen masyarakat dunia masih bekerja di sektor informal. Pekerjaan informal cenderung tidak memiliki perlindungan sosial, tunjangan, dan dua kali berisiko memiliki penghasilan lebih kecil dibanding pekerjaan formal. Banyaknya jumlah masyarakat yang bekerja di sektor informal bukan karena pilihan, melainkan karena kurangnya kesempatan dalam perekonomian formal. Oleh karena itu, tema tahun ini mendorong seluruh komunitas dunia untuk melakukan formalisasi, yaitu meningkatkan kemampuan ekonomi formal agar dapat menyediakan kesempatan kerja yang layak serta mampu menyerap masyarakat dari sektor informal. Beberapa strategi diantaranya adalah dengan memanfaatkan partisipasi penuh perempuan dalam angkatan kerja, pemanfaatan teknologi informasi, hingga pencegahan informalisasi pekerjaan<br style=""><br style="">Baca selengkapnya di artikel "Sejarah dan Tema Hari Keadilan Sosial Sedunia pada 20 Februari 2022",&nbsp;<a href="https://tirto.id/go2G" style="touch-action: manipulation;">https://tirto.id/go2G</a><br></p></p>
',
                'excerpt' => 'Sejarah mencatat, Hari Keadilan Sosial Sedunia telah diperingati sejak 2009. Setiap tahunnya, peringatan Hari Keadilan Sosial Sedunia mengangkat satu tema dan pesan tertentu.',
                'counter' => '69',
                'date' => '2022-02-20',
                'status' => '1',
                'created_at' => '2022-04-25 12:36:09',
                'updated_at' => '2023-09-04 06:55:57',
                'user_id' => '1',
            ),
            6 => 
            array (
                'id' => '33',
                'nama' => 'Hari Perawat Nasional 2022: Tema dan Sejarah',
                'slug' => 'hari-perawat-nasional-2022-tema-dan-sejarah',
                'foto' => '/assets/artikel/hari-peraw16508904700.png',
            'detail' => '<p style="text-align: center; line-height: 1.5;"><img style="width: 355.892px; height: 427.4px;" data-bs-filename="276032436_491127839342891_2638356714960767855_n.webp" src="/assets/artikel/hari-peraw16508904700.png"><br><p style="line-height: 1.5;">Pada tahun ini, peringatan Hari Perawat Nasional 2022 masih tetap berlangsung di tengah pandemi Covid-19. Peringatan tersebut mengambil tema \'Perawat Bersama Rakyat Menuju Bangsa Sehat Bebas dari Covid-19\'.<br style="-webkit-font-smoothing: antialiased; backface-visibility: hidden;"><br style="-webkit-font-smoothing: antialiased; backface-visibility: hidden;">Sebagaimana diketahui, perawat mengambil peran penting selama pandemi Covid-19 berlangsung di Indonesia sejak Maret 2020 lalu. Perawat terus menjalankan tugasnya merawat pasien meski berada di tengah ancaman risiko penularan Covid-19 yang tinggi.<br style="-webkit-font-smoothing: antialiased; backface-visibility: hidden;"><br style="-webkit-font-smoothing: antialiased; backface-visibility: hidden;">Hingga 17 Maret 2022, data Lapor Covid-19 menyebutkan sebanyak 2.066 tenaga kesehatan meninggal dunia dalam menangani pandemi Covid-19. Sebanyak 67o di antaranya adalah perawat.<br style="-webkit-font-smoothing: antialiased; backface-visibility: hidden;"><br style="-webkit-font-smoothing: antialiased; backface-visibility: hidden;"><b><span style="font-size: 18px;">Sejarah Hari Perawat Nasional</span></b><br style="-webkit-font-smoothing: antialiased; backface-visibility: hidden;">Sejarah Hari Perawat Nasional sendiri tak lepas dari pendirian Persatuan Perawat Nasional Indonesia (PPNI) pada 17 Maret 1974 silam. Organisasi ini dicetuskan dengan alasan tenaga keperawatan yang harus berada di bawah organisasi profesi.<br style="-webkit-font-smoothing: antialiased; backface-visibility: hidden;"></p><p style="line-height: 1.5;"></p><div style="text-align: center;"><img data-bs-filename="ilustrasi-tenaga-kesehatan-di-masa-pandemi_169.jpeg" style="width: 620px;" src="/assets/artikel/hari-peraw16508904701.png"></div><div style="text-align: center;"><span style="font-size: 11px;">Ilustrasi. Hari Perawat Nasional diperingati setiap 17 Maret. (iStock/Kiwis)</span></div><div style="text-align: center;"><span style="font-size: 11px;"><br></span></div><p>Jauh sebelum itu, organisasi perawat telah eksis seiring keberadaan rumah sakit Residen Vpabast pada 1918 di Batavia. Rumah sakit itu kini dikenal sebagai RS Ciptomangunkusumo (RSCM) di Cikini, Jakarta.<br style="-webkit-font-smoothing: antialiased; backface-visibility: hidden;"><br style="-webkit-font-smoothing: antialiased; backface-visibility: hidden;">Saat itu, beberapa perkumpulan atau organisasi perawat telah tercatat. Misalnya saja Perkumpulan Kaum Verpleger fster Indonesia (PKVI), Persatuan Djuru Kesehatan Indonesia (PDKI), Persatuan Perawat Indonesia (PPI), dan Ikatan Perawat Indonesia (IPI).<br style="-webkit-font-smoothing: antialiased; backface-visibility: hidden;"><br style="-webkit-font-smoothing: antialiased; backface-visibility: hidden;">Sejumlah organisasi di atas mengadakan pertemuan di Bandung yang dipimpin oleh Maskoed Soerjasumantri. Pertemuan itu menghasilkan kesepakatan terbentuknya satu wadah bernama Persatuan Perawat Indonesia.<br style="-webkit-font-smoothing: antialiased; backface-visibility: hidden;"><br style="-webkit-font-smoothing: antialiased; backface-visibility: hidden;">Peringatan Hari Perawat Nasional Indonesia kali ini menandai 48 tahun usia PPNI.<br></p></p>
',
                'excerpt' => 'Pada tahun ini, peringatan Hari Perawat Nasional 2022 masih tetap berlangsung di tengah pandemi Covid-19. Peringatan tersebut mengambil tema \'Perawat Bersama Rakyat Menuju Bangsa Sehat Bebas dari Covid-19\'.',
                'counter' => '63',
                'date' => '2022-03-17',
                'status' => '1',
                'created_at' => '2022-04-25 12:41:10',
                'updated_at' => '2023-09-04 15:24:00',
                'user_id' => '1',
            ),
            7 => 
            array (
                'id' => '34',
                'nama' => 'Akses Jalan Cianjur Selatan Rusak Parah, Warga Tuntut Perbaikan',
                'slug' => 'akses-jalan-cianjur-selatan-rusak-parah-warga-tuntut-perbaikan',
                'foto' => '/assets/artikel/akses-jala16508908150.png',
            'detail' => '<p style="text-align: center; margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;"><img style="width: 50%;" data-bs-filename="IMG-20220219-WA0020.jpg" src="/assets/artikel/akses-jala16508908150.png"><span style="list-style: none; border: 0px; outline: none;"><br></span><p style="margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;"><span style="list-style: none; border: 0px; outline: none;">Cianjur</span>&nbsp;&acirc;&#128;&#147; Kesal karena akses jalan provinsi di wilayah Cianjur selatan rusak parah, warga pun protes dengan menanami pohon pisang di sepanjang jalan dan menuntut adanya perbaikan.</p><p style="margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;">Pasalnya,&nbsp;<a href="https://cianjurtoday.com/tag/jalan-provinsi" style="list-style: none; border: 0px; outline: none; transition: all 0.15s ease 0s;">jalan provinsi</a>&nbsp;di Cianjur selatan mulai dari Kecamatan&nbsp;<a href="https://cianjurtoday.com/tag/cilaku" style="list-style: none; border: 0px; outline: none; transition: all 0.15s ease 0s;">Cilaku</a>&nbsp;hingga&nbsp;<a href="https://cianjurtoday.com/tag/sindangbarang" style="list-style: none; border: 0px; outline: none; transition: all 0.15s ease 0s;">Sindangbarang</a>&nbsp;tersebut merupakan akses vital kegiatan masyarakat.</p><div class="stream-item stream-item-in-post stream-item-inline-post aligncenter" style="margin: 6px auto; list-style: none; border: 0px; outline: none; text-align: center; position: relative; z-index: 2; clear: both;"></div><p style="margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;">Kondisi&nbsp;<a href="https://cianjurtoday.com/tag/jalan-rusak" style="list-style: none; border: 0px; outline: none; transition: all 0.15s ease 0s;">jalan rusak</a>&nbsp;semakin parah saat hujan tiba, bahkan beberapa lokasi banyak badan jalan yang amblas dan sangat membahayakan. Mulai dari Kecamatan Cilaku, Cibeber, Campaka, Sukanagara, Pagelaran, Tanggeung, Cibinong, dan Sindangbarang.&nbsp;</p><p style="margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;">Salah seorang mahasiswa Cianjur, Agus Rama Tunggaraga mengatakan, aksi tanam pohon pisang di jalan provinsi ini sebagai bentuk protes masyarakat, akibat jalan rusak di wilayah Cianjur menuju selatan yang belum kunjung diperbaiki.</p><p style="margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;">&acirc;&#128;&#156;Saya asli orang Cianjur selatan, cape setiap pulang jalannya rusak begini. Makanya, saya bersama teman mahasiswa lainnya sengaja membuat aksi tanam pohon pisang di sepanjang jalan 8 kecamatan ini,&acirc;&#128;&#157; ujarnya kepada wartawan, Jumat (18/2/2022).&nbsp;</p><p style="margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;">Tak hanya itu, warga pun turut memasang foto Gubernur Jawa Barat, Ridwan Kamil dan membentangkan spanduk berisikan sejumlah ungkapan protes.</p><p style="margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;">Mulai desakan agar Gubernur segera melakukan perbaikan jalan hingga imbauan hati-hati pada masyarakat saat melintasi jalan, karena kondisinya yang rusak parah.&nbsp;</p><p style="margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;">&acirc;&#128;&#156;Sebagai gubernur, Ridwan Kamil harus bertanggungjawab terhadap pembangunan. Jangan hanya pencitraan di media sosial, tapi bangun yang benar infrastrukturnya. Kami sudah jenuh, jalan ke Cianjur selatan rusak parah, kami menuntut agar ada perbaikan dan pembangunan,&acirc;&#128;&#157; ungkapnya.&nbsp;</p><p style="margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;">Ia menegaskan, mahasiswa dan masyarakat Cianjur akan turun ke jalan menggelar aksi, jika Pemprov Jawa Barat tidak merespon tuntutan perbaikan jalan tersebut.&nbsp;</p><p style="margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;">&acirc;&#128;&#156;Jalan ini akses utama untuk banyak kegiatan masyarakat. Kalau tidak direspon, berarti Pemprov tidak memperhatikan pembangunan daerah. Kami akan turun ke jalan menggelar aksi,&acirc;&#128;&#157; tegasnya.&nbsp;</p><h2 id="h-jalan-cianjur-selatan-dibiarkan-rusak-bertahun-tahun" style="margin-bottom: 0.5em; list-style: none; border: 0px; outline: none; overflow-wrap: break-word; line-height: 1.4;">Jalan Cianjur Selatan Dibiarkan Rusak Bertahun-tahun</h2><p style="margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;">Terpisah, warga Sindangbarang, H Abdul Rasyid menerangkan, akses jalan menuju Cianjur selatan memang sudah bertahun-tahun tidak ada perbaikan. Kalaupun ada, hanya sebatas penambalan dan biasanya tidak bertahan lama.</p><p style="margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;">&acirc;&#128;&#156;Sudah lama tidak ada perbaikan. Lupa saya, kapan terakhir jalan bagus. Karena sekarang kondisinya rusak parah,&acirc;&#128;&#157; imbuhnya.</p><p style="margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;">Ia menuturkan, kondisi jalan rusak tersebut sering menjadi penyebab kecelakaan bagi pengendara yang melintas.</p><p style="margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;">&acirc;&#128;&#156;Sering yang kecelakaan, apalagi saat hujan. Lubang jalan tidak terlihat karena tertutup genangan air,&acirc;&#128;&#157; tambahnya.</p><p style="margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;">Ia berharap, perbaikan akses jalan provinsi di Cianjur selatan tersebut segera mendapat perhatian pemerintah, agar bisa memberi rasa aman dan nyaman bagi pengguna jalan.</p><p style="margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;">&acirc;&#128;&#156;Saya berharap segera ada perbaikan, agar masyarakat bisa nyaman beraktivitas,&acirc;&#128;&#157; tutupnya.(ren/sis)</p><p style="margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;">Sumber:&nbsp;<a href="https://cianjurtoday.com/" style="background-color: rgb(255, 255, 255); list-style: none; border: 0px; outline: none; transition: all 0.15s ease 0s;">CIANJURTODAY.COM</a></p></p>
',
                'excerpt' => 'Kesal karena akses jalan provinsi di wilayah Cianjur selatan rusak parah, warga pun protes dengan menanami pohon pisang di sepanjang jalan dan menuntut adanya perbaikan.',
                'counter' => '44',
                'date' => '2022-02-19',
                'status' => '1',
                'created_at' => '2022-04-25 12:46:55',
                'updated_at' => '2023-09-05 22:37:55',
                'user_id' => '1',
            ),
            8 => 
            array (
                'id' => '35',
                'nama' => 'Kabupaten Cianjur Selatan akan Punya 14 Kecamatan dan 161 Desa',
                'slug' => 'kabupaten-cianjur-selatan-akan-punya-14-kecamatan-dan-161-desa',
                'foto' => '/assets/artikel/kabupaten-16508911620.png',
            'detail' => '<p style="text-align: center; margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;"><img style="width: 50%;" data-bs-filename="Kabupaten-Cianjur-Selatan-akan-Punya-14-Kecamatan-dan-161-Desa.jpg" src="/assets/artikel/kabupaten-16508911620.png"><br><p style="margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;"><a href="https://cianjurtoday.com/tag/pemekaran" style="list-style: none; border: 0px; outline: none; transition: all 0.15s ease 0s;">Pemekaran</a>&nbsp;Cianjur Selatan mulai masuk ke babak baru. Dewan Perwakilan Rakyat Daerah (DPRD) Provinsi Jawa Barat membentuk panitia khusus (pansus) berkaitan tiga calon daerah persiapan otonom baru (CDPOB).</p><p style="margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;">Pansus ini akan membahas terkait CDPOB, yaitu Kabupaten Garut Utara, Tasikmalaya Selatan, dan Cianjur Selatan.</p><p style="margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;">Sadar Muslihat terpilih sebagai Ketua Pansus dalam rapat paripurna di Gedung DPRD Jabar, Kota Bandung, Jumat (11/2/2022).</p><div class="stream-item stream-item-in-post stream-item-inline-post aligncenter" style="margin: 6px auto; list-style: none; border: 0px; outline: none; text-align: center; position: relative; z-index: 2; clear: both;"></div><p style="margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;">Dalam rapat paripurna tersebut,&nbsp;<a href="https://jabarprov.go.id/" style="list-style: none; border: 0px; outline: none; transition: all 0.15s ease 0s;">Pemprov Jabar</a>&nbsp;mengusulkan Kabupaten Cianjur Selatan sebagai CDPOB setelah melalui serangkaian proses persetujuan. Mulai dari tingkat desa hingga DPRD dan Pemkab Cianjur.</p><p style="margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;">Gubernur Jawa Barat, Ridwan Kamil mengatakan Luas wilayah Kabupaten Cisel rencananya akan memiliki luas 2.311 Kilometer persegi.</p><div class="crp_related  " style="padding-top: 20px; padding-right: 10px; padding-left: 10px; margin-bottom: 20px; list-style: none; border: 1px solid rgb(248, 248, 248); outline: none; border-radius: 10px; box-shadow: rgba(0, 0, 0, 0.16) 0px 2px 2px 0px;"><h3 style="margin-bottom: 0.5em; list-style: none; border: 0px; outline: none; line-height: 1.4; overflow-wrap: break-word;">Baca Juga:</h3><ul style="padding-left: 15px; margin-bottom: 20px; margin-left: 20px; border: 0px; outline: none; overflow-wrap: break-word;"><li style="margin-bottom: 5px; list-style: none disc; border: 0px; outline: none;"><a href="https://cianjurtoday.com/inilah-daftar-373-pejabat-cianjur-yang-telah-dilantik/" target="_blank" class="crp_link post-10430" style="list-style: none; border: 0px; outline: none; transition: all 0.15s ease 0s;"><span class="crp_title" style="list-style: none; border: 0px; outline: none;">Inilah Daftar 373 Pejabat Cianjur yang Telah Dilantik</span></a></li><li style="margin-bottom: 5px; list-style: none disc; border: 0px; outline: none;"><a href="https://cianjurtoday.com/tiga-dob-jabar-disahkan-bagaimana-dengan-cianjur-selatan/" target="_blank" class="crp_link post-25597" style="list-style: none; border: 0px; outline: none; transition: all 0.15s ease 0s;"><span class="crp_title" style="list-style: none; border: 0px; outline: none;">Tiga DOB Jabar Disahkan, Bagaimana dengan Cianjur Selatan?</span></a></li><li style="margin-bottom: 5px; list-style: none disc; border: 0px; outline: none;"><a href="https://cianjurtoday.com/pemekaran-cisel-mulai-dibahas-dprd-jabar-dan-forkopimda/" target="_blank" class="crp_link post-58409" style="list-style: none; border: 0px; outline: none; transition: all 0.15s ease 0s;"><span class="crp_title" style="list-style: none; border: 0px; outline: none;">Pemekaran Cisel Mulai Dibahas DPRD Jabar dan Forkopimda&acirc;&#128;&brvbar;</span></a></li><li style="margin-bottom: 5px; list-style: none disc; border: 0px; outline: none;"><a href="https://cianjurtoday.com/soal-pemekaran-cipanas-dprd-harus-melibatkan-dewan-baru/" target="_blank" class="crp_link post-7543" style="list-style: none; border: 0px; outline: none; transition: all 0.15s ease 0s;"><span class="crp_title" style="list-style: none; border: 0px; outline: none;">Soal Pemekaran Cipanas, DPRD: Harus Melibatkan Dewan Baru</span></a></li><li style="margin-bottom: 5px; list-style: none disc; border: 0px; outline: none;"><a href="https://cianjurtoday.com/pemkab-cianjur-alokasikan-anggaran-rp177-miliar-untuk-pemekaran/" target="_blank" class="crp_link post-58487" style="list-style: none; border: 0px; outline: none; transition: all 0.15s ease 0s;"><span class="crp_title" style="list-style: none; border: 0px; outline: none;">Pemkab Cianjur Alokasikan Anggaran Rp177 miliar untuk&acirc;&#128;&brvbar;</span></a></li><li style="margin-bottom: 5px; list-style: none disc; border: 0px; outline: none;"><a href="https://cianjurtoday.com/fraksi-pkb-siap-kawal-persetujuan-bersama-pemekaran-cianjur-selatan/" target="_blank" class="crp_link post-19155" style="list-style: none; border: 0px; outline: none; transition: all 0.15s ease 0s;"><span class="crp_title" style="list-style: none; border: 0px; outline: none;">Fraksi PKB Siap Kawal Persetujuan Bersama Pemekaran Cianjur&acirc;&#128;&brvbar;</span></a></li></ul><div class="crp_clear" style="list-style: none; border: 0px; outline: none;"></div></div><p style="margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;">&acirc;&#128;&#156;Di dalamnya nanti ada 14 kecamatan dan 161 desa,&acirc;&#128;&#157; Ucap Emil sapaan akrab Ridwan Kamil.</p><p style="margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;">Emil menambahkan, Luas&nbsp;<a href="https://cianjurtoday.com/tag/kabupaten-cianjur" style="list-style: none; border: 0px; outline: none; transition: all 0.15s ease 0s;">Kabupaten Cianjur</a>&nbsp;sebagai daerah induk otomatis akan menyusut menjadi 1.303 kilometer yang sebelumnya memiliki luas wilayah sekitar 3,614 kilometer persegi.</p><p style="margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;">Selain itu dana sebesar Rp177,4 miliar juga akan dikucurkan Kabupaten Cianjur kepada Kabupaten Cisel setelah diresmikan menjadi daerah persiapan selama tiga tahun berturut-turut.</p><p style="margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;">&acirc;&#128;&#156;Kabupaten Cianjur Selatan akan berbatasan dengan Cianjur di sebelah Utara, lalu berbatasan dengan Samudera Hindia di bagian selatan. Sementara itu, di bagian barat berbatasan dengan Kabupaten Sukabumi, dan Kabupaten Bandung serta Bandung Barat di bagian timur,&acirc;&#128;&#157; ucap Emil.</p><h2 id="h-pmck-sambut-baik-rencana-pemekaran-cianjur-selatan" style="margin-bottom: 0.5em; list-style: none; border: 0px; outline: none; overflow-wrap: break-word; line-height: 1.4;">PMCK Sambut Baik Rencana Pemekaran Cianjur Selatan</h2><p style="margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;">Sebelumnya, Paguyuban Masyarakat&nbsp;<a href="https://cianjurtoday.com/tag/cianjur-kidul" style="list-style: none; border: 0px; outline: none; transition: all 0.15s ease 0s;">Cianjur Kidul</a>&nbsp;(PMCK) menyambut baik pengkajian calon Daerah Otonomi Baru (DOB). Pasalnya, selama bertahun-tahun, upaya pemekaran tersebut akhirnya dapat terwujud.</p><p style="margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;">Namun demikian, PMCK tetap harus bersabar terlebih dahulu. Sebab, saat ini moratorium masih berlaku dan pengajuan masih membutuhkan proses yang pelaksanaanya pada tahun 2022.</p><p style="margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;">Ketua PMCK, Ceng Badri mengatakan, hal tersebut sebagai representasi aspirasi dari masyarakat Cisel dan pihaknya bersyukur bahwa keseriusan DOB kembali terdengar.</p><p style="margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;">&acirc;&#128;&#156;Kami tentunya berterima kasih kepada Pemerintah Kabupaten (Pemkab) Cianjur dan tim teknis bentukan Bupati Cianjur terkait adanya percepatan proses aspirasi masyarakat Cisel,&acirc;&#128;&#157; ujarnya kepada Cianjur Today, Jumat (3/9/2021). (arm)</p></p>
',
            'excerpt' => 'Pemekaran Cianjur Selatan mulai masuk ke babak baru. Dewan Perwakilan Rakyat Daerah (DPRD) Provinsi Jawa Barat membentuk panitia khusus (pansus) berkaitan tiga calon daerah persiapan otonom baru (CDPOB).',
                'counter' => '47',
                'date' => '2022-03-09',
                'status' => '1',
                'created_at' => '2022-04-25 12:52:42',
                'updated_at' => '2023-09-06 00:01:48',
                'user_id' => '1',
            ),
            9 => 
            array (
                'id' => '36',
                'nama' => 'Tes youtube',
                'slug' => 'tes-youtube',
                'foto' => '',
                'detail' => '<p><br><div class="embed-container"><br></div><div class="embed-container"><iframe src="https://www.youtube.com/embed/WH1SduDRL_Y?autoplay=1&amp;fs=1&amp;iv_load_policy=&amp;showinfo=1&amp;rel=0&amp;cc_load_policy=1&amp;start=0&amp;modestbranding&amp;end=0&amp;controls=1" frameborder="0" width="100%" height="500px" type="text/html" allowfullscreen="true"></iframe></div><p></p></p>
',
                'excerpt' => 'Testing video youtube',
                'counter' => '54',
                'date' => '2022-04-27',
                'status' => '1',
                'created_at' => '2022-04-28 07:19:02',
                'updated_at' => '2023-09-05 09:07:37',
                'user_id' => '1',
            ),
            10 => 
            array (
                'id' => '37',
                'nama' => 'Salat dan Disiplin Waktu',
                'slug' => 'salat-dan-disiplin-waktu',
                'foto' => '/assets/artikel/salat-dan-16624444290.png',
            'detail' => '<p><b>Oleh Adi Permana*</b><p style="text-align: center; "><img style="width: 502px;" data-bs-filename="FB_IMG_1499216303997 (2) (1).jpg" src="/assets/artikel/salat-dan-16624444290.png"><b><br></b></p><p><em style=\'border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(94, 94, 94); font-family: "Source Sans Pro", "Segoe UI", "Helvetica Neue", Arial, sans-serif; font-size: 16px;\'>"Demi waktu. Sesungguhnya manusia itu benar-benar dalam kerugian. Kecuali orang-orang yang beriman, dan beramal soleh, dan saling menasehati supaya mentaati kebenaran dan nasehat menasehati supaya menetapi kesabaran"&nbsp;(Q.S Al-\'asr)</em></p><p><span style=\'color: rgb(94, 94, 94); font-family: "Source Sans Pro", "Segoe UI", "Helvetica Neue", Arial, sans-serif; font-size: 16px;\'>Setiap orang memiliki waktu yang sama, yaitu 24 jam. Tapi tidak setiap orang pandai memanfaatkan waktu yang sama itu. Artinya, ada orang yang bisa menggunakan waktu yang singkat itu untuk kegiatan bermanfaat, ada pula yang sebaliknya. Seperti kutipan ayat di atas, kita (manusia) benar-benar dalam kerugian jika tak pandai menggunakan waktu untuk hal-hal positif (kebaikan).</span><br style=\'color: rgb(94, 94, 94); font-family: "Source Sans Pro", "Segoe UI", "Helvetica Neue", Arial, sans-serif; font-size: 16px;\'><span style=\'color: rgb(94, 94, 94); font-family: "Source Sans Pro", "Segoe UI", "Helvetica Neue", Arial, sans-serif; font-size: 16px;\'>Apakah kalian sering bertanya pada diri sendiri atau kagum pada orang-orang yang sukses? Jangan jauh-jauh, kita ambil contoh orang-orang di sekeliling kita. Misalnya ada yang sejak muda sukses berkarier, mendapat beasiswa pendidikan, jadi interpreuneur muda, berprestasi dan banyak lagi. Mengapa mereka bisa seperti itu tetapi kita belum? Pertanyaan itu juga berlaku untuk saya sebenarnya, dan memang harus sering dimunculkan, bisa ditulis di dinding kamar? Di gadget, atau tempat lain. Tujuannya untuk memotivasi diri sendiri.</span><br style=\'color: rgb(94, 94, 94); font-family: "Source Sans Pro", "Segoe UI", "Helvetica Neue", Arial, sans-serif; font-size: 16px;\'><br style=\'color: rgb(94, 94, 94); font-family: "Source Sans Pro", "Segoe UI", "Helvetica Neue", Arial, sans-serif; font-size: 16px;\'><span style=\'color: rgb(94, 94, 94); font-family: "Source Sans Pro", "Segoe UI", "Helvetica Neue", Arial, sans-serif; font-size: 16px;\'>Seperti halnya tulisan ini. Saya sebenarnya sengaja menulis tulisan dengan tema memanfaatkan waktu bukan untuk sosoan menceramahi, karena jujur saya juga termasuk orang yang tak pandai memanfaatkan waktu. Intinya adalah untuk berbagi, seperti pepatah seorang ulama Islam, bahwa manusia memang harus selalu diberi nasehat, karena manusia seringkali lupa.</span><br style=\'color: rgb(94, 94, 94); font-family: "Source Sans Pro", "Segoe UI", "Helvetica Neue", Arial, sans-serif; font-size: 16px;\'><span style=\'color: rgb(94, 94, 94); font-family: "Source Sans Pro", "Segoe UI", "Helvetica Neue", Arial, sans-serif; font-size: 16px;\'>Tulisan ini juga sebenarnya terinspirasi dari materi khutbah yang disampaikan oleh khotib pada salat Jumat beberapa waktu lalu. Saya yang biasanya, eh kadang-kadang maksudnya, tidur saat cermah khotib, kala itu begitu antusias dengan materi yang disampaikannya. Inilah mungkin yang dinamakan mendapat hidayah. Alhamdulilah&Atilde;&#131;&AElig;&#146;&Atilde;&#130;&Acirc;&cent;&Atilde;&#131;&Acirc;&cent;&Atilde;&cent;&acirc;&#130;&not;&Aring;&iexcl;&Atilde;&#130;&Acirc;&not;&Atilde;&#131;&acirc;&#128;&#154;&Atilde;&#130;&Acirc;&brvbar;</span><br style=\'color: rgb(94, 94, 94); font-family: "Source Sans Pro", "Segoe UI", "Helvetica Neue", Arial, sans-serif; font-size: 16px;\'><br style=\'color: rgb(94, 94, 94); font-family: "Source Sans Pro", "Segoe UI", "Helvetica Neue", Arial, sans-serif; font-size: 16px;\'><span style=\'color: rgb(94, 94, 94); font-family: "Source Sans Pro", "Segoe UI", "Helvetica Neue", Arial, sans-serif; font-size: 16px;\'>Jadi pada Jumat itu, khotib menyampaikan materi tentang memperbaiki salat. Salah satu poinnya yaitu memperbaiki waktu pelaksanaan salat. Banyak di antara kita sering kali salat tidak di awal waktu, berleha-leha pada salat. &Atilde;&#131;&AElig;&#146;&Atilde;&#130;&Acirc;&cent;&Atilde;&#131;&Acirc;&cent;&Atilde;&cent;&acirc;&#130;&not;&Aring;&iexcl;&Atilde;&#130;&Acirc;&not;&Atilde;&#131;&acirc;&#128;&brvbar;&Atilde;&cent;&acirc;&#130;&not;&Aring;&#147;</span><em style=\'border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(94, 94, 94); font-family: "Source Sans Pro", "Segoe UI", "Helvetica Neue", Arial, sans-serif; font-size: 16px;\'>Fawailul lismusollin, alladziina hum ansolaatihim saahuun,</em><span style=\'color: rgb(94, 94, 94); font-family: "Source Sans Pro", "Segoe UI", "Helvetica Neue", Arial, sans-serif; font-size: 16px;\'>&Atilde;&#131;&AElig;&#146;&Atilde;&#130;&Acirc;&cent;&Atilde;&#131;&Acirc;&cent;&Atilde;&cent;&acirc;&#130;&not;&Aring;&iexcl;&Atilde;&#130;&Acirc;&not;&Atilde;&#131;&acirc;&#128;&#154;&Atilde;&#130;&Acirc;&#157; ucap sang khotib menyampaikan Surat Al-Ma&Atilde;&#131;&AElig;&#146;&Atilde;&#130;&Acirc;&cent;&Atilde;&#131;&Acirc;&cent;&Atilde;&cent;&acirc;&#130;&not;&Aring;&iexcl;&Atilde;&#130;&Acirc;&not;&Atilde;&#131;&Acirc;&cent;&Atilde;&cent;&acirc;&#130;&not;&Aring;&frac34;&Atilde;&#130;&Acirc;&cent;un :5-6. Ayat tersebut memiliki arti, &Atilde;&#131;&AElig;&#146;&Atilde;&#130;&Acirc;&cent;&Atilde;&#131;&Acirc;&cent;&Atilde;&cent;&acirc;&#130;&not;&Aring;&iexcl;&Atilde;&#130;&Acirc;&not;&Atilde;&#131;&acirc;&#128;&brvbar;&Atilde;&cent;&acirc;&#130;&not;&Aring;&#147;</span><em style=\'border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(94, 94, 94); font-family: "Source Sans Pro", "Segoe UI", "Helvetica Neue", Arial, sans-serif; font-size: 16px;\'>Maka kecelakaanlah bagi orang-orang yang salat, (yaitu) orang-orang yang lalai dari salatnya.</em><span style=\'color: rgb(94, 94, 94); font-family: "Source Sans Pro", "Segoe UI", "Helvetica Neue", Arial, sans-serif; font-size: 16px;\'>&Atilde;&#131;&AElig;&#146;&Atilde;&#130;&Acirc;&cent;&Atilde;&#131;&Acirc;&cent;&Atilde;&cent;&acirc;&#130;&not;&Aring;&iexcl;&Atilde;&#130;&Acirc;&not;&Atilde;&#131;&acirc;&#128;&#154;&Atilde;&#130;&Acirc;&#157; Lalai di sana maksudnya adalah salat yang sering dinanti-nanti, hingga akhirnya salah di akhir waktu.</span><br style=\'color: rgb(94, 94, 94); font-family: "Source Sans Pro", "Segoe UI", "Helvetica Neue", Arial, sans-serif; font-size: 16px;\'><span style=\'color: rgb(94, 94, 94); font-family: "Source Sans Pro", "Segoe UI", "Helvetica Neue", Arial, sans-serif; font-size: 16px;\'>Maka, kata khotib, setiap kali kita lalai dalam salat akan ada konsekuensi (sanksi) yang bakal dihadapi. Khotib mengibaratkan seperti ini, ada seorang guru mengatakan kepada murid kelasnya bahwa besok harus datang ke sekolah pukul 07.00 pagi, dan mengikuti kegiatan belajar sampai pukul 13.00. Berarti waktu sekolah adalah dari pukul 07.00-13.00. Lalu ada seorang murid yang datang pukul 09.00. Lantas murid itu pun tentu ditegur oleh gurunya karena tak mengikuti aturan guru, tapi murid itu berdalih, bukankah pukul 09.00 masih termasuk waktu sekolah? Ya jawabannya murid itu memang benar, tapi salah. Kesalahannya yaitu terdapat pada tidak disiplin dalam waktu.</span><br style=\'color: rgb(94, 94, 94); font-family: "Source Sans Pro", "Segoe UI", "Helvetica Neue", Arial, sans-serif; font-size: 16px;\'><span style=\'color: rgb(94, 94, 94); font-family: "Source Sans Pro", "Segoe UI", "Helvetica Neue", Arial, sans-serif; font-size: 16px;\'>Salat pun demikian. Allah telah menyuruh kepada kita untuk salat pada waktu yang telah ditentukan. Berarti kalau waktunya salat ya salat. Meskipun waktu salat dzuhur dari pukul 12.00-15.00, bukan berarti kita bisa seenaknya salat kapan saja selama rentang waktu itu. Kira-kira begitulah materi khutbah yang disampaikan khotib.</span><br style=\'color: rgb(94, 94, 94); font-family: "Source Sans Pro", "Segoe UI", "Helvetica Neue", Arial, sans-serif; font-size: 16px;\'><br style=\'color: rgb(94, 94, 94); font-family: "Source Sans Pro", "Segoe UI", "Helvetica Neue", Arial, sans-serif; font-size: 16px;\'><span style=\'color: rgb(94, 94, 94); font-family: "Source Sans Pro", "Segoe UI", "Helvetica Neue", Arial, sans-serif; font-size: 16px;\'>Lantas apa korelasinya dengan memanfaatkan waktu? Hubungannya yaitu terdapat pada kedisiplinan dalam waktu. Islam sendiri mengajarkan kepada kita untuk selalu disiplin waktu. Segala sesuatu ada waktunya. Kapan puasa, salat, zakat, naik haji, dzikir yang baik, dan banyak lagi. Kalau kamu kapan nikah? *eh.</span><br style=\'color: rgb(94, 94, 94); font-family: "Source Sans Pro", "Segoe UI", "Helvetica Neue", Arial, sans-serif; font-size: 16px;\'><br style=\'color: rgb(94, 94, 94); font-family: "Source Sans Pro", "Segoe UI", "Helvetica Neue", Arial, sans-serif; font-size: 16px;\'><span style=\'color: rgb(94, 94, 94); font-family: "Source Sans Pro", "Segoe UI", "Helvetica Neue", Arial, sans-serif; font-size: 16px;\'>Konsep disiplin waktu itu pula yang mestinya diterapkan oleh kita dalam berkegiatan sehari-hari. Maksudnya kita harus punya rencana-rencana kegiatan apa saja yang akan digunakan dalam 24 jam. Agar kita bisa memaksimalkan waktu itu, dan agar tidak ada waktu yang terbuang sia-sia.</span><br style=\'color: rgb(94, 94, 94); font-family: "Source Sans Pro", "Segoe UI", "Helvetica Neue", Arial, sans-serif; font-size: 16px;\'><span style=\'color: rgb(94, 94, 94); font-family: "Source Sans Pro", "Segoe UI", "Helvetica Neue", Arial, sans-serif; font-size: 16px;\'>Banyak hal bisa dilakukan oleh kita dalam memanfaatkan waktu luang. Saya sendiri, dalam memanfaatkan waktu itu digunakan untuk membaca dan menulis. Jadi kalau ada waktu luang, saya berusaha untuk membaca, apalagi saat ini kita sudah dimudahkan dengan kehadiran smartphone. Menulis tidak usah ribet-ribet menggunakan laptop, lewat gawai pun bisa. Asik.</span><br style=\'color: rgb(94, 94, 94); font-family: "Source Sans Pro", "Segoe UI", "Helvetica Neue", Arial, sans-serif; font-size: 16px;\'><span style=\'color: rgb(94, 94, 94); font-family: "Source Sans Pro", "Segoe UI", "Helvetica Neue", Arial, sans-serif; font-size: 16px;\'>Apalagi kalau semester akhir, waktu luangnya banyak sekali. Bagi yang masih semester bawah tentu banyak juga waktu luangnya. Daripada tiap hari main tidak jelas, atau sekedar tidur-tiduran di indekos, lebih baik datang ke sekre organisasi, ngobrol soal politik, tugas kuliah, atau curhat urusan hati. Hehe</span><br style=\'color: rgb(94, 94, 94); font-family: "Source Sans Pro", "Segoe UI", "Helvetica Neue", Arial, sans-serif; font-size: 16px;\'><br style=\'color: rgb(94, 94, 94); font-family: "Source Sans Pro", "Segoe UI", "Helvetica Neue", Arial, sans-serif; font-size: 16px;\'><strong style=\'border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(94, 94, 94); font-family: "Source Sans Pro", "Segoe UI", "Helvetica Neue", Arial, sans-serif; font-size: 16px;\'>"Janganlah jadi mahasiswa kebanyakan, jadilah seorang minoritas namun diakui sejarah!"</strong><br style=\'color: rgb(94, 94, 94); font-family: "Source Sans Pro", "Segoe UI", "Helvetica Neue", Arial, sans-serif; font-size: 16px;\'><br style=\'color: rgb(94, 94, 94); font-family: "Source Sans Pro", "Segoe UI", "Helvetica Neue", Arial, sans-serif; font-size: 16px;\'><span style=\'color: rgb(94, 94, 94); font-family: "Source Sans Pro", "Segoe UI", "Helvetica Neue", Arial, sans-serif; font-size: 16px;\'>Ya intinya adalah mari kita manfaatkan waktu 24 jam ini dengan hal-hal yang produktif! Menghasilkan karya. Biar hidup kita punya prestice yang lebih, maka berkaryalah, maka produktiflah. Jangan sampai waktu kita digunakan untuk hal-hal yang kurang baik. Apalagi kalau kerjaannya tidur, bangun, ngopi, makan, nonton film, tidur lagi, begitu terus. Kalian yang baca tulisan ini bukan termasuk orang macam itu kan?</span><br style=\'color: rgb(94, 94, 94); font-family: "Source Sans Pro", "Segoe UI", "Helvetica Neue", Arial, sans-serif; font-size: 16px;\'><br style=\'color: rgb(94, 94, 94); font-family: "Source Sans Pro", "Segoe UI", "Helvetica Neue", Arial, sans-serif; font-size: 16px;\'><span style=\'color: rgb(94, 94, 94); font-family: "Source Sans Pro", "Segoe UI", "Helvetica Neue", Arial, sans-serif; font-size: 16px;\'>*Penulis merupakan alumni Karmapack angkatan 2012. Pernah menjadi Pemimpin Redaksi di Lembaga Pers Mahasiswa Suaka UIN SGD Bandung dan aktif di komunitas lainnya.</span><span style=\'color: rgb(94, 94, 94); font-family: "Source Sans Pro", "Segoe UI", "Helvetica Neue", Arial, sans-serif; font-size: 16px;\'><br></span><br></p><p></p><p></p><p></p></p>
',
            'excerpt' => 'Setiap orang memiliki waktu yang sama, yaitu 24 jam. Tapi tidak setiap orang pandai memanfaatkan waktu yang sama itu. Artinya, ada orang yang bisa menggunakan waktu yang singkat itu untuk kegiatan bermanfaat, ada pula yang sebaliknya. Seperti kutipan ayat di atas, kita (manusia) benar-benar dalam kerugian jika tak pandai menggunakan waktu untuk hal-hal positif (kebaikan).',
                'counter' => '47',
                'date' => '2017-10-26',
                'status' => '1',
                'created_at' => '2022-09-06 13:06:02',
                'updated_at' => '2023-09-05 21:23:37',
                'user_id' => '1',
            ),
            11 => 
            array (
                'id' => '38',
                'nama' => '53 Anggota Pengurus KARMAPACK Resmi Dilantik',
                'slug' => '53-anggota-pengurus-karmapack-resmi-dilantik-2019',
                'foto' => '/assets/artikel/53-anggota16624453440.png',
            'detail' => '<p style="text-align: center; "><img style="width: 640px;" data-bs-filename="pengurus.jpg" src="/assets/artikel/53-anggota16624453440.png"><p style="text-align: center; "><span style="font-size: 11px;"><i>Sesi poto bersama Pengurus KARMAPACK, dalam acara Pelantikan pengurus KARMAPACK periode 2019-2020</i></span><br></p><p>Sesi poto bersama Pengurus KARMAPACK, dalam acara Pelantikan pengurus KARMAPACK periode 2019-2020</p><p>KARMAPACK&acirc;&#128;&#148;Sebanyak 53 Pengurus Keluarga Mahasiswa dan Pelajar Cianjur Kidul (KARMAPACK) Periode 2019-2020 resmi dilantik setelah mengucapkan ikrar dengan Khidmat. Pelantikan diselenggarakan di Aula Kecamatan Cibiru, Kota Bandung. Minggu (07/04/2019).</p><p>Pelantikan turut dihadiri oleh Perwakilan Dewan Pembina KARMAPACK, Asep Sahrudin, Alumni KARMAPACK, Isep Sahroni, Muchtar Arifin dan Lutfi Kamil, Demisioner KARMAPACK, Dindin Saepudin, Khoerusalam dan tamu undangan dari perwakilan setiap Organisasi Daerah (ORDA) di UIN Bandung.</p><p>Isep Sahroni yang turut mendukung kinerja dan semangat baru dalam Kepengurusan KARMAPACK periode 2019-2020. Disamping itu, ia juga menuntut kepada seluruh pengurus untuk lebih aktif dan progresif dari sebelumnya supaya bisa lebih maju. Tidak hanya eksistensi di kampus, ia juga berekspektasi tinggi kepada seluruh pengurus supaya bisa mencetak kader terbaik untuk Cianjur Selatan, Salah satunya lewat program kerja.</p><p>"Temen-temen eksistensi di kampus itu harus, jadikan itu semua sebagai pembelajaran untuk mengkader diri sendiri," tuturnya.</p><p>Ketua Umum periode 2019-2020, Rudi Habibie mengaku disamping kebahagiaan dan rasa syukurnya, ia merasakan beberapa kekhawatiran dimana harus mengemban amanah dengan baik dan menghindari segala sesuatu yang dianggap bisa berakibat fatal dalam massa kepengurusannya.</p><p>" Massa Kepengurusan sekarang harus lebih progresif, lebih menjaga kultur kekeluargaan serta tetap menjaga sikap indevendensi," tuturnya</p><p>Saat disingguh Kinerja, Rudi Habibie menegaskan bahwa untuk massa kepengurusnnya bakalan mempertahankan program-program sebelumnya tetapi disamping itu menambah beberapa program unggulan, salah satunya Mengenai Intelektual, Kebudayaan dan spiritualnya.</p><p>"KARMAPACK hari ini tidak hanya sebatas berproses dalam struktural, melainkan Lebih menanamkan nilai-nilai cinta dan kasih sayang dalam ukwah kekeluargaan," tutupnya.</p><p>Penulis: Hikmat SB</p></p>
',
            'excerpt' => 'Pelantikan turut dihadiri oleh Perwakilan Dewan Pembina KARMAPACK, Asep Sahrudin, Alumni KARMAPACK, Isep Sahroni, Muchtar Arifin dan Lutfi Kamil, Demisioner KARMAPACK, Dindin Saepudin, Khoerusalam dan tamu undangan dari perwakilan setiap Organisasi Daerah (ORDA) di UIN Bandung.',
                'counter' => '28',
                'date' => '2019-04-08',
                'status' => '1',
                'created_at' => '2022-09-06 13:22:24',
                'updated_at' => '2023-09-06 07:54:41',
                'user_id' => '1',
            ),
            12 => 
            array (
                'id' => '39',
                'nama' => 'Nama',
                'slug' => 'nama',
                'foto' => '',
                'detail' => '<p>Testing</p>
',
                'excerpt' => 'Kilasan',
                'counter' => '2',
                'date' => '2023-02-19',
                'status' => '0',
                'created_at' => '2023-02-19 22:14:06',
                'updated_at' => '2023-03-16 17:08:08',
                'user_id' => '1',
            ),
            13 => 
            array (
                'id' => '40',
                'nama' => 'DISKUSI PUBLIK',
                'slug' => 'diskusi-publik',
                'foto' => '/assets/artikel/diskusi-pu16789612170.png',
            'detail' => '<div class="_a9zs" style=\'display: inline; color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;\'><img data-bs-filename="330374136_875625676874459_7239910307577273849_n.webp" style="width: 640.4px;" src="/assets/artikel/diskusi-pu16789612170.png"><br><div class="_a9zs" style=\'display: inline; color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;\'>Alhamdulillah hirobbil alamin diskusi publik dengan tema "Peran Mahasiswa dan Pelajar dalam Mengawal Demokrasi" dalam rangka memperingati hari ulang tahun Karmapack ke-18 telah selesai dilaksanakan.<br><br>kami ucapkan terimakasih kepada semua pihak yang telah terlibat dalam kegiatan ini. Sampai jumpa di kegiatan selanjutnya &eth;&#159;&#145;&#139;&eth;&#159;&#145;&#139;<br><br>18 Tahun KARMAPACK<br>"Meningkatkan Semangat, Menguatkan Persaudaraan "<br><br>11 Februari 2023<br><br>HALING KU AING!<br><br>Instagram :&nbsp;<a class="x1i10hfl xjbqb8w x6umtig x1b1mbwd xaqea5y xav7gou x9f619 x1ypdohk xt0psk2 xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz notranslate _a6hd" href="https://www.instagram.com/orda_karmapack/" role="link" tabindex="0" style="cursor: pointer; text-align: inherit; outline: none; border-width: 0px; border-style: initial; border-color: initial; -webkit-tap-highlight-color: transparent; list-style: none; touch-action: manipulation; display: inline;">@orda_karmapack</a><br>Facebook : Orda Karmapack<br>__________________________<br><a class="x1i10hfl xjbqb8w x6umtig x1b1mbwd xaqea5y xav7gou x9f619 x1ypdohk xt0psk2 xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz  _aa9_ _a6hd" href="https://www.instagram.com/explore/tags/ordakarmapack/" role="link" tabindex="0" style="cursor: pointer; text-align: inherit; outline: none; border-width: 0px; border-style: initial; border-color: initial; -webkit-tap-highlight-color: transparent; list-style: none; touch-action: manipulation; display: inline; overflow-wrap: break-word;">#ordakarmapack</a>&nbsp;<a class="x1i10hfl xjbqb8w x6umtig x1b1mbwd xaqea5y xav7gou x9f619 x1ypdohk xt0psk2 xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz  _aa9_ _a6hd" href="https://www.instagram.com/explore/tags/karmapack/" role="link" tabindex="0" style="cursor: pointer; text-align: inherit; outline: none; border-width: 0px; border-style: initial; border-color: initial; -webkit-tap-highlight-color: transparent; list-style: none; touch-action: manipulation; display: inline; overflow-wrap: break-word;">#karmapack</a>&nbsp;<a class="x1i10hfl xjbqb8w x6umtig x1b1mbwd xaqea5y xav7gou x9f619 x1ypdohk xt0psk2 xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz  _aa9_ _a6hd" href="https://www.instagram.com/explore/tags/karmapack2022/" role="link" tabindex="0" style="cursor: pointer; text-align: inherit; outline: none; border-width: 0px; border-style: initial; border-color: initial; -webkit-tap-highlight-color: transparent; list-style: none; touch-action: manipulation; display: inline; overflow-wrap: break-word;">#karmapack2022</a>&nbsp;<a class="x1i10hfl xjbqb8w x6umtig x1b1mbwd xaqea5y xav7gou x9f619 x1ypdohk xt0psk2 xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz  _aa9_ _a6hd" href="https://www.instagram.com/explore/tags/kabinetsabilulungan/" role="link" tabindex="0" style="cursor: pointer; text-align: inherit; outline: none; border-width: 0px; border-style: initial; border-color: initial; -webkit-tap-highlight-color: transparent; list-style: none; touch-action: manipulation; display: inline; overflow-wrap: break-word;">#kabinetsabilulungan</a>&nbsp;<a class="x1i10hfl xjbqb8w x6umtig x1b1mbwd xaqea5y xav7gou x9f619 x1ypdohk xt0psk2 xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz  _aa9_ _a6hd" href="https://www.instagram.com/explore/tags/halingkuaing/" role="link" tabindex="0" style="cursor: pointer; text-align: inherit; outline: none; border-width: 0px; border-style: initial; border-color: initial; -webkit-tap-highlight-color: transparent; list-style: none; touch-action: manipulation; display: inline; overflow-wrap: break-word;">#halingkuaing</a>&nbsp;<a class="x1i10hfl xjbqb8w x6umtig x1b1mbwd xaqea5y xav7gou x9f619 x1ypdohk xt0psk2 xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz  _aa9_ _a6hd" href="https://www.instagram.com/explore/tags/harlah/" role="link" tabindex="0" style="cursor: pointer; text-align: inherit; outline: none; border-width: 0px; border-style: initial; border-color: initial; -webkit-tap-highlight-color: transparent; list-style: none; touch-action: manipulation; display: inline; overflow-wrap: break-word;">#harlah</a>&nbsp;<a class="x1i10hfl xjbqb8w x6umtig x1b1mbwd xaqea5y xav7gou x9f619 x1ypdohk xt0psk2 xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz  _aa9_ _a6hd" href="https://www.instagram.com/explore/tags/harlahkarmapack18/" role="link" tabindex="0" style="cursor: pointer; text-align: inherit; outline: none; border-width: 0px; border-style: initial; border-color: initial; -webkit-tap-highlight-color: transparent; list-style: none; touch-action: manipulation; display: inline; overflow-wrap: break-word;">#harlahkarmapack18</a>&nbsp;<a class="x1i10hfl xjbqb8w x6umtig x1b1mbwd xaqea5y xav7gou x9f619 x1ypdohk xt0psk2 xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz  _aa9_ _a6hd" href="https://www.instagram.com/explore/tags/harlahkarmapackke18/" role="link" tabindex="0" style="cursor: pointer; text-align: inherit; outline: none; border-width: 0px; border-style: initial; border-color: initial; -webkit-tap-highlight-color: transparent; list-style: none; touch-action: manipulation; display: inline; overflow-wrap: break-word;">#harlahkarmapackke18</a>&nbsp;<a class="x1i10hfl xjbqb8w x6umtig x1b1mbwd xaqea5y xav7gou x9f619 x1ypdohk xt0psk2 xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz  _aa9_ _a6hd" href="https://www.instagram.com/explore/tags/orda/" role="link" tabindex="0" style="cursor: pointer; text-align: inherit; outline: none; border-width: 0px; border-style: initial; border-color: initial; -webkit-tap-highlight-color: transparent; list-style: none; touch-action: manipulation; display: inline; overflow-wrap: break-word;">#orda</a>&nbsp;<a class="x1i10hfl xjbqb8w x6umtig x1b1mbwd xaqea5y xav7gou x9f619 x1ypdohk xt0psk2 xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz  _aa9_ _a6hd" href="https://www.instagram.com/explore/tags/cianjur/" role="link" tabindex="0" style="cursor: pointer; text-align: inherit; outline: none; border-width: 0px; border-style: initial; border-color: initial; -webkit-tap-highlight-color: transparent; list-style: none; touch-action: manipulation; display: inline; overflow-wrap: break-word;">#cianjur</a>&nbsp;<a class="x1i10hfl xjbqb8w x6umtig x1b1mbwd xaqea5y xav7gou x9f619 x1ypdohk xt0psk2 xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz  _aa9_ _a6hd" href="https://www.instagram.com/explore/tags/cianjurkidul/" role="link" tabindex="0" style="cursor: pointer; text-align: inherit; outline: none; border-width: 0px; border-style: initial; border-color: initial; -webkit-tap-highlight-color: transparent; list-style: none; touch-action: manipulation; display: inline; overflow-wrap: break-word;">#cianjurkidul</a>&nbsp;<a class="x1i10hfl xjbqb8w x6umtig x1b1mbwd xaqea5y xav7gou x9f619 x1ypdohk xt0psk2 xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz  _aa9_ _a6hd" href="https://www.instagram.com/explore/tags/diskusi/" role="link" tabindex="0" style="cursor: pointer; text-align: inherit; outline: none; border-width: 0px; border-style: initial; border-color: initial; -webkit-tap-highlight-color: transparent; list-style: none; touch-action: manipulation; display: inline; overflow-wrap: break-word;">#diskusi</a>&nbsp;<a class="x1i10hfl xjbqb8w x6umtig x1b1mbwd xaqea5y xav7gou x9f619 x1ypdohk xt0psk2 xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz  _aa9_ _a6hd" href="https://www.instagram.com/explore/tags/diskusipublik/" role="link" tabindex="0" style="cursor: pointer; text-align: inherit; outline: none; border-width: 0px; border-style: initial; border-color: initial; -webkit-tap-highlight-color: transparent; list-style: none; touch-action: manipulation; display: inline; overflow-wrap: break-word;">#diskusipublik</a>&nbsp;<a class="x1i10hfl xjbqb8w x6umtig x1b1mbwd xaqea5y xav7gou x9f619 x1ypdohk xt0psk2 xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz  _aa9_ _a6hd" href="https://www.instagram.com/explore/tags/mahasiswa/" role="link" tabindex="0" style="cursor: pointer; text-align: inherit; outline: none; border-width: 0px; border-style: initial; border-color: initial; -webkit-tap-highlight-color: transparent; list-style: none; touch-action: manipulation; display: inline; overflow-wrap: break-word;">#mahasiswa</a>&nbsp;<a class="x1i10hfl xjbqb8w x6umtig x1b1mbwd xaqea5y xav7gou x9f619 x1ypdohk xt0psk2 xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz  _aa9_ _a6hd" href="https://www.instagram.com/explore/tags/pelajar/" role="link" tabindex="0" style="cursor: pointer; text-align: inherit; outline: none; border-width: 0px; border-style: initial; border-color: initial; -webkit-tap-highlight-color: transparent; list-style: none; touch-action: manipulation; display: inline; overflow-wrap: break-word;">#pelajar</a></div></div>
',
                'excerpt' => 'Alhamdulillah hirobbil alamin diskusi publik dengan tema "Peran Mahasiswa dan Pelajar dalam Mengawal Demokrasi" dalam rangka memperingati hari ulang tahun Karmapack ke-18 telah selesai dilaksanakan.',
                'counter' => '232',
                'date' => '2023-02-11',
                'status' => '1',
                'created_at' => '2023-03-16 17:06:57',
                'updated_at' => '2023-09-06 13:27:36',
                'user_id' => '1',
            ),
        ));
        
        
    }
}