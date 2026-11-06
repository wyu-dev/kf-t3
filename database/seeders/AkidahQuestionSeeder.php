<?php

namespace Database\Seeders;

use App\Models\Topic;
use App\Models\Question;
use Illuminate\Database\Seeder;

class AkidahQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Topik 1: Beriman kepada Kitab
        $topic1 = Topic::create([
            'topic_number' => 1,
            'title' => 'Beriman kepada Kitab',
            'slug' => 'beriman-kepada-kitab',
            'description' => 'Mempercayai kitab-kitab suci yang diturunkan oleh Allah SWT kepada para rasul sebagai panduan hidup manusia.',
            'icon' => 'book-open',
        ]);

        $topic1Questions = [
            // Aras Rendah (5 soalan)
            [
                'difficulty' => 'rendah',
                'type' => 'objective',
                'question_text' => 'Beriman kepada kitab-kitab Allah merupakan Rukun Iman yang ke-...',
                'options' => ['Ketiga', 'Keempat', 'Kelima'],
                'correct_answer' => 'Ketiga',
                'explanation' => 'Beriman kepada Kitab ialah Rukun Iman yang ke-3 selepas beriman kepada Allah dan beriman kepada Malaikat.',
            ],
            [
                'difficulty' => 'rendah',
                'type' => 'objective',
                'question_text' => 'Berapakah jumlah kitab suci utama yang wajib diketahui oleh setiap orang Islam?',
                'options' => ['4 buah kitab', '10 buah kitab', '25 buah kitab'],
                'correct_answer' => '4 buah kitab',
                'explanation' => 'Terdapat 4 buah kitab suci utama yang wajib kita ketahui iaitu Taurat, Zabur, Injil dan Al-Quran.',
            ],
            [
                'difficulty' => 'rendah',
                'type' => 'true_false',
                'question_text' => 'Kitab Taurat telah diturunkan oleh Allah SWT kepada Nabi Musa a.s.',
                'options' => ['Benar', 'Salah'],
                'correct_answer' => 'Benar',
                'explanation' => 'Benar. Kitab Taurat diwahyukan kepada Nabi Musa a.s. sebagai pedoman kaum Bani Israil pada zamannya.',
            ],
            [
                'difficulty' => 'rendah',
                'type' => 'objective',
                'question_text' => 'Kitab Zabur diturunkan oleh Allah SWT kepada Nabi ...',
                'options' => ['Nabi Daud a.s.', 'Nabi Isa a.s.', 'Nabi Adam a.s.'],
                'correct_answer' => 'Nabi Daud a.s.',
                'explanation' => 'Kitab Zabur diturunkan secara khusus kepada Nabi Daud a.s.',
            ],
            [
                'difficulty' => 'rendah',
                'type' => 'fill_in_the_blank',
                'question_text' => 'Kitab suci terakhir yang diturunkan kepada Nabi Muhammad s.a.w. ialah ________.',
                'options' => ['Al-Quran', 'Injil', 'Taurat'],
                'correct_answer' => 'Al-Quran',
                'explanation' => 'Al-Quran merupakan mukjizat agung dan kitab suci terakhir yang diwahyukan kepada Nabi Muhammad s.a.w. untuk seluruh umat manusia.',
            ],

            // Aras Sederhana (3 soalan)
            [
                'difficulty' => 'sederhana',
                'type' => 'objective',
                'question_text' => 'Antara peranan Al-Quran dalam kehidupan seharian ialah sebagai "penyembuh hati". Apakah maksud peranan tersebut?',
                'options' => [
                    'Membaca dan menghayati Al-Quran mendatangkan ketenangan jiwa',
                    'Al-Quran hanya disimpan di dalam almari perubatan',
                    'Al-Quran menggantikan ubat hospital secara mutlak'
                ],
                'correct_answer' => 'Membaca dan menghayati Al-Quran mendatangkan ketenangan jiwa',
                'explanation' => 'Al-Quran menjadi penyembuh hati (syifa\') kerana bacaannya memberikan ketenangan, motivasi dan kedamaian jiwa kepada orang beriman.',
            ],
            [
                'difficulty' => 'sederhana',
                'type' => 'true_false',
                'question_text' => 'Kitab Injil diturunkan oleh Allah kepada Nabi Isa a.s. sebagai panduan hidup kaumnya.',
                'options' => ['Benar', 'Salah'],
                'correct_answer' => 'Benar',
                'explanation' => 'Benar. Nabi Isa a.s. menerima Kitab Injil sebelum diangkat ke langit.',
            ],
            [
                'difficulty' => 'sederhana',
                'type' => 'fill_in_the_blank',
                'question_text' => 'Al-Quran membenarkan intipati kitab terdahulu dan ________ hukum-hukum syariat yang sudah tidak lagi relevan.',
                'options' => ['memansuhkan', 'mengabaikan', 'memusnahkan'],
                'correct_answer' => 'memansuhkan',
                'explanation' => 'Al-Quran menyempurnakan ajaran terdahulu dan memansuhkan hukum syariat terdahulu yang khusus untuk zaman lampau.',
            ],

            // Aras Tinggi (2 soalan)
            [
                'difficulty' => 'tinggi',
                'type' => 'objective',
                'question_text' => 'Ahmad sentiasa membaca Al-Quran dengan bertajwid serta berusaha memahami maksud ayat untuk diamalkan. Tindakan Ahmad membuktikan...',
                'options' => [
                    'Sikap mencintai dan memuliakan Al-Quran sebagai panduan hidup',
                    'Sikap menunjuk-nunjuk kemahiran membaca di hadapan rakan',
                    'Amalan membaca semata-mata untuk lulus peperiksaan sekolah'
                ],
                'correct_answer' => 'Sikap mencintai dan memuliakan Al-Quran sebagai panduan hidup',
                'explanation' => 'Membaca dengan tartil/tajwid dan mengamalkan ajaran Al-Quran adalah bukti nyata seseorang benar-benar mencintai Al-Quran.',
            ],
            [
                'difficulty' => 'tinggi',
                'type' => 'objective',
                'question_text' => 'Mengapakah umat Islam wajib beriman kepada semua kitab suci terdahulu walaupun hanya mengamalkan syariat Al-Quran?',
                'options' => [
                    'Kerana semua kitab tersebut asalnya diturunkan oleh Allah SWT kepada rasul-Nya',
                    'Kerana semua kitab tersebut ditulis dalam bahasa Arab yang sama',
                    'Kerana isi kandungan semua kitab tidak mempunyai sebarang perbezaan syariat'
                ],
                'correct_answer' => 'Kerana semua kitab tersebut asalnya diturunkan oleh Allah SWT kepada rasul-Nya',
                'explanation' => 'Kita wajib meyakini asal usul ketuhanan semua kitab suci tersebut (wahyu Allah), manakala Al-Quran menyempurnakan hukum-hakam untuk akhir zaman.',
            ],
        ];

        foreach ($topic1Questions as $q) {
            $topic1->questions()->create($q);
        }

        // 2. Topik 2: Beriman kepada Hari Kiamat
        $topic2 = Topic::create([
            'topic_number' => 2,
            'title' => 'Beriman kepada Hari Kiamat',
            'slug' => 'beriman-kepada-hari-kiamat',
            'description' => 'Meyakini dengan sepenuh hati bahawa seluruh alam ini akan musnah dan manusia dibangkitkan semula untuk dihisab amalannya.',
            'icon' => 'clock',
        ]);

        $topic2Questions = [
            // Aras Rendah (5 soalan)
            [
                'difficulty' => 'rendah',
                'type' => 'objective',
                'question_text' => 'Beriman kepada Hari Kiamat merupakan Rukun Iman yang ke-...',
                'options' => ['Kelima', 'Ketiga', 'Keenam'],
                'correct_answer' => 'Kelima',
                'explanation' => 'Beriman kepada Hari Kiamat atau hari akhirat adalah Rukun Iman ke-5.',
            ],
            [
                'difficulty' => 'rendah',
                'type' => 'objective',
                'question_text' => 'Apakah hukum beriman kepada Hari Kiamat bagi setiap orang Islam?',
                'options' => ['Fardu Ain (Wajib)', 'Fardu Kifayah', 'Sunat Muakkad'],
                'correct_answer' => 'Fardu Ain (Wajib)',
                'explanation' => 'Hukum beriman kepada Hari Kiamat ialah Fardu Ain, iaitu wajib atas setiap individu Muslim.',
            ],
            [
                'difficulty' => 'rendah',
                'type' => 'true_false',
                'question_text' => 'Hari Kiamat bermaksud hari berakhirnya seluruh kehidupan di alam dunia dan manusia dihisab.',
                'options' => ['Benar', 'Salah'],
                'correct_answer' => 'Benar',
                'explanation' => 'Benar. Pada hari kiamat dunia akan hancur dan semua manusia dibangkitkan semula di Padang Mahsyar.',
            ],
            [
                'difficulty' => 'rendah',
                'type' => 'true_false',
                'question_text' => 'Sesiapa yang mengingkari dan menafikan kewujudan Hari Kiamat boleh menjadi kafir (keluar dari Islam).',
                'options' => ['Benar', 'Salah'],
                'correct_answer' => 'Benar',
                'explanation' => 'Benar. Mengingkari mana-mana rukun iman membatalkan keislaman seseorang.',
            ],
            [
                'difficulty' => 'rendah',
                'type' => 'fill_in_the_blank',
                'question_text' => 'Hari berakhirnya seluruh alam dan kehidupan di dunia dipanggil Hari ________.',
                'options' => ['Kiamat', 'Keraian', 'Rehat'],
                'correct_answer' => 'Kiamat',
                'explanation' => 'Hari Kiamat ialah hari kehancuran alam semesta mengikut kehendak dan ketetapan Allah SWT.',
            ],

            // Aras Sederhana (3 soalan)
            [
                'difficulty' => 'sederhana',
                'type' => 'objective',
                'question_text' => 'Antara berikut, peristiwa manakah yang dikategorikan sebagai tanda kecil Hari Kiamat?',
                'options' => [
                    'Ilmu agama diangkat dan maksiat berleluasa',
                    'Matahari terbit dari sebelah barat',
                    'Keluarnya Dabbatul Ardh (binatang bumi)'
                ],
                'correct_answer' => 'Ilmu agama diangkat dan maksiat berleluasa',
                'explanation' => 'Kematian para ulama (ilmu diangkat) dan maksiat berleluasa adalah tanda-tanda kecil kiamat. Matahari terbit dari barat dan keluarnya Dabbatul Ardh pula adalah tanda-tanda besar.',
            ],
            [
                'difficulty' => 'sederhana',
                'type' => 'true_false',
                'question_text' => 'Kemunculan Dajjal dan turunnya Nabi Isa a.s. merupakan tanda-tanda kecil Hari Kiamat.',
                'options' => ['Benar', 'Salah'],
                'correct_answer' => 'Salah',
                'explanation' => 'Salah. Kemunculan Dajjal dan turunnya Nabi Isa a.s. adalah Tanda-tanda Besar Hari Kiamat.',
            ],
            [
                'difficulty' => 'sederhana',
                'type' => 'fill_in_the_blank',
                'question_text' => 'Antara tanda besar kiamat ialah matahari terbit dari sebelah ________.',
                'options' => ['barat', 'timur', 'selatan'],
                'correct_answer' => 'barat',
                'explanation' => 'Apabila matahari terbit dari barat, pintu taubat telah ditutup secara rasmi bagi seluruh manusia.',
            ],

            // Aras Tinggi (2 soalan)
            [
                'difficulty' => 'tinggi',
                'type' => 'objective',
                'question_text' => 'Haziq berpeluang meniru dalam peperiksaan tanpa dilihat guru, namun dia tidak melakukannya. Apakah kaitan tindakannya dengan keimanan kepada Hari Kiamat?',
                'options' => [
                    'Dia yakin setiap amalannya disaksikan Allah dan akan dihisab pada hari pembalasan',
                    'Dia takut rakan sebelahnya akan meminjam pemadamnya',
                    'Dia malas menulis jawapan yang ditiru'
                ],
                'correct_answer' => 'Dia yakin setiap amalannya disaksikan Allah dan akan dihisab pada hari pembalasan',
                'explanation' => 'Keyakinan kepada Hari Akhirat mendidik jiwa murid agar sentiasa amanah, jujur dan menjauhi maksiat walaupun tiada manusia melihat.',
            ],
            [
                'difficulty' => 'tinggi',
                'type' => 'objective',
                'question_text' => 'Bagaimanakah penghayatan Hari Kiamat mendidik seorang murid daripada bersikap tamak terhadap harta dunia?',
                'options' => [
                    'Dia sedar bahawa harta dunia hanya pinjaman sementara dan amalan soleh yang kekal di akhirat',
                    'Dia membuang semua wang simpanannya ke dalam tong sampah',
                    'Dia berhenti makan dan minum kerana dunia akan musnah'
                ],
                'correct_answer' => 'Dia sedar bahawa harta dunia hanya pinjaman sementara dan amalan soleh yang kekal di akhirat',
                'explanation' => 'Orang beriman menggunakan harta untuk kebaikan dan sedekah, tidak tamak haloba kerana menyedari akhirat adalah matlamat yang kekal.',
            ],
        ];

        foreach ($topic2Questions as $q) {
            $topic2->questions()->create($q);
        }

        // 3. Topik 3: Sifat Mukhalafatu Lil Hawadith
        $topic3 = Topic::create([
            'topic_number' => 3,
            'title' => 'Sifat Mukhalafatu Lil Hawadith',
            'slug' => 'sifat-mukhalafatu-lil-hawadith',
            'description' => 'Meyakini bahawa Allah SWT berbeza dan sama sekali tidak menyerupai makhluk ciptaan-Nya dalam zat, sifat mahupun perbuatan.',
            'icon' => 'shield-check',
        ]);

        $topic3Questions = [
            // Aras Rendah (5 soalan)
            [
                'difficulty' => 'rendah',
                'type' => 'objective',
                'question_text' => 'Apakah erti sifat Mukhalafatu Lil Hawadith bagi Allah SWT?',
                'options' => [
                    'Berbeza dengan segala yang baharu (makhluk)',
                    'Sama seperti manusia dan alam sekitar',
                    'Memerlukan bantuan makhluk untuk hidup'
                ],
                'correct_answer' => 'Berbeza dengan segala yang baharu (makhluk)',
                'explanation' => 'Mukhalafatu Lil Hawadith bererti Allah Maha Berbeza dan tiada suatu pun yang serupa dengan-Nya.',
            ],
            [
                'difficulty' => 'rendah',
                'type' => 'fill_in_the_blank',
                'question_text' => 'Mukhalafatu Lil Hawadith tergolong dalam sifat ________ bagi Allah SWT.',
                'options' => ['Wajib', 'Mustahil', 'Harus'],
                'correct_answer' => 'Wajib',
                'explanation' => 'Sifat Mukhalafatu Lil Hawadith ialah salah satu daripada 20 sifat Wajib bagi Allah (sifat ke-4).',
            ],
            [
                'difficulty' => 'rendah',
                'type' => 'true_false',
                'question_text' => 'Allah SWT mempunyai bentuk fizikal, bertangan dan berkaki sama seperti manusia.',
                'options' => ['Benar', 'Salah'],
                'correct_answer' => 'Salah',
                'explanation' => 'Salah. Allah Maha Suci daripada memiliki tubuh badan bendawi, anggota atau rupa fizikal seperti manusia.',
            ],
            [
                'difficulty' => 'rendah',
                'type' => 'true_false',
                'question_text' => 'Surah As-Syura ayat 11 menegaskan bahawa tiada sesuatu pun yang serupa dengan Allah SWT.',
                'options' => ['Benar', 'Salah'],
                'correct_answer' => 'Benar',
                'explanation' => 'Benar. Firman Allah: "Laisa kamitslihi syai\'un" yang bermaksud tiada sesuatupun yang serupa dengan-Nya.',
            ],
            [
                'difficulty' => 'rendah',
                'type' => 'objective',
                'question_text' => 'Lawan bagi sifat Mukhalafatu Lil Hawadith ialah Mumathalatuhu Lil Hawadith yang bermaksud ...',
                'options' => ['Menyerupai makhluk', 'Mendengar bisikan', 'Berkuasa penuh'],
                'correct_answer' => 'Menyerupai makhluk',
                'explanation' => 'Sifat mustahil bagi Allah ialah Mumathalatuhu Lil Hawadith (bersamaan/menyerupai makhluk).',
            ],

            // Aras Sederhana (3 soalan)
            [
                'difficulty' => 'sederhana',
                'type' => 'objective',
                'question_text' => 'Mengikut dalil aqli (akal fikiran), sekiranya Allah SWT sama seperti makhluk, ini membuktikan bahawa Allah...',
                'options' => [
                    'Mempunyai kelemahan, had umur dan kekurangan',
                    'Lebih perkasa daripada segala-galanya',
                    'Mampu menjelajah seluruh alam'
                ],
                'correct_answer' => 'Mempunyai kelemahan, had umur dan kekurangan',
                'explanation' => 'Makhluk mempunyai sifat lapar, letih, mati dan terhad. Jika Tuhan menyerupai makhluk, maka Tuhan juga lemah, dan ini mustahil bagi Tuhan.',
            ],
            [
                'difficulty' => 'sederhana',
                'type' => 'true_false',
                'question_text' => 'Orang yang benar-benar memahami sifat Mukhalafatu Lil Hawadith tidak akan sesekali menyembah patung atau lukisan berhala.',
                'options' => ['Benar', 'Salah'],
                'correct_answer' => 'Benar',
                'explanation' => 'Benar. Kerana Allah Maha Berbeza daripada sebarang bentuk patung atau gambaran imaginasi akal manusia.',
            ],
            [
                'difficulty' => 'sederhana',
                'type' => 'fill_in_the_blank',
                'question_text' => 'Sifat baharu seperti penat, tidur, lapar dan binasa hanya wujud pada diri ________.',
                'options' => ['makhluk', 'Tuhan', 'pencipta'],
                'correct_answer' => 'makhluk',
                'explanation' => 'Hanya makhluk yang diciptakan mempunyai sifat baharu, manakala Allah Maha Qadim dan Maha Sempurna.',
            ],

            // Aras Tinggi (2 soalan)
            [
                'difficulty' => 'tinggi',
                'type' => 'objective',
                'question_text' => 'Seorang murid bertanya: "Bolehkah kita membayangkan atau melukis rupa bentuk Allah SWT?". Jawapan terbaik berdasarkan akidah Islam ialah...',
                'options' => [
                    'Tidak boleh sama sekali, kerana akal manusia terbatas dan Allah tidak menyerupai apa-apa makhluk',
                    'Boleh, sekiranya menggunakan warna putih dan cahaya',
                    'Boleh dilukis mengikut imaginasi masing-masing'
                ],
                'correct_answer' => 'Tidak boleh sama sekali, kerana akal manusia terbatas dan Allah tidak menyerupai apa-apa makhluk',
                'explanation' => 'Allah tidak boleh dibayangkan atau digambarkan kerana apa sahaja yang terlintas di fikiran manusia, Allah berbeza sama sekali daripadanya.',
            ],
            [
                'difficulty' => 'tinggi',
                'type' => 'objective',
                'question_text' => 'Bagaimanakah kefahaman sifat Mukhalafatu Lil Hawadith melindungi akidah seseorang daripada bahaya syirik?',
                'options' => [
                    'Menyedari bahawa tiada makhluk yang setanding atau memiliki sifat ketuhanan seperti Allah',
                    'Menjadikan seseorang tidak mahu menghormati sesama manusia',
                    'Membuatkan seseorang berasa ragu-ragu dengan kebesaran alam semesta'
                ],
                'correct_answer' => 'Menyedari bahawa tiada makhluk yang setanding atau memiliki sifat ketuhanan seperti Allah',
                'explanation' => 'Dengan meyakini keunikan mutlak zat Allah, hati manusia terpelihara daripada memuja, menyembah atau menyamakan makhluk dengan Allah.',
            ],
        ];

        foreach ($topic3Questions as $q) {
            $topic3->questions()->create($q);
        }

        // 4. Topik 4: Sifat Qiyamuhu Binafsih
        $topic4 = Topic::create([
            'topic_number' => 4,
            'title' => 'Sifat Qiyamuhu Binafsih',
            'slug' => 'sifat-qiyamuhu-binafsih',
            'description' => 'Meyakini bahawa Allah SWT berdiri dengan sendiri-Nya dan tidak berhajat kepada bantuan sesiapa atau tempat bertempat.',
            'icon' => 'sparkles',
        ]);

        $topic4Questions = [
            // Aras Rendah (5 soalan)
            [
                'difficulty' => 'rendah',
                'type' => 'objective',
                'question_text' => 'Apakah maksud sifat Qiyamuhu Binafsih bagi Allah SWT?',
                'options' => [
                    'Allah berdiri dengan sendiri-Nya tanpa memerlukan bantuan sesiapa',
                    'Allah memerlukan bantuan para malaikat untuk mencipta bumi',
                    'Allah berpindah dari satu tempat ke tempat yang lain'
                ],
                'correct_answer' => 'Allah berdiri dengan sendiri-Nya tanpa memerlukan bantuan sesiapa',
                'explanation' => 'Qiyamuhu Binafsih bermaksud Allah wujud dengan sendiri, tidak berhajat kepada tempat mahupun pembantu.',
            ],
            [
                'difficulty' => 'rendah',
                'type' => 'fill_in_the_blank',
                'question_text' => 'Qiyamuhu Binafsih merupakan sifat ________ bagi Allah SWT.',
                'options' => ['Wajib', 'Mustahil', 'Harus'],
                'correct_answer' => 'Wajib',
                'explanation' => 'Qiyamuhu Binafsih ialah sifat ke-3 dalam sifat wajib bagi Allah SWT.',
            ],
            [
                'difficulty' => 'rendah',
                'type' => 'true_false',
                'question_text' => 'Allah SWT memerlukan pertolongan malaikat untuk mentadbir langit dan bumi.',
                'options' => ['Benar', 'Salah'],
                'correct_answer' => 'Salah',
                'explanation' => 'Salah. Allah Maha Berkuasa dan tidak memerlukan bantuan sesiapa; malaikat hanya mentaati perintah-Nya.',
            ],
            [
                'difficulty' => 'rendah',
                'type' => 'true_false',
                'question_text' => 'Surah Al-Ankabut ayat 6 menyatakan bahawa Allah SWT Maha Kaya (tidak berhajat) kepada sekalian alam.',
                'options' => ['Benar', 'Salah'],
                'correct_answer' => 'Benar',
                'explanation' => 'Benar. Firman Allah menegaskan bahawa Allah Maha Kaya dan bebas daripada sebarang kebergantungan kepada makhluk.',
            ],
            [
                'difficulty' => 'rendah',
                'type' => 'objective',
                'question_text' => 'Lawan bagi sifat Qiyamuhu Binafsih ialah Qiyamuhu Bighairihi yang bererti berdiri dengan ...',
                'options' => ['Bantuan orang lain', 'Kekuatan sendiri', 'Kebijaksanaan sendiri'],
                'correct_answer' => 'Bantuan orang lain',
                'explanation' => 'Mustahil bagi Allah berhajat kepada pertolongan selain-Nya (Qiyamuhu Bighairihi).',
            ],

            // Aras Sederhana (3 soalan)
            [
                'difficulty' => 'sederhana',
                'type' => 'objective',
                'question_text' => 'Dalil aqli membuktikan bahawa sekiranya Allah SWT memerlukan bantuan, ini bermakna Allah...',
                'options' => [
                    'Lemah dan memerlukan sesuatu untuk menyempurnakan diri-Nya',
                    'Maha Bijaksana membahagikan tugas',
                    'Mempunyai kuasa tanpa had sempadan'
                ],
                'correct_answer' => 'Lemah dan memerlukan sesuatu untuk menyempurnakan diri-Nya',
                'explanation' => 'Sesuatu yang memerlukan bantuan membuktikan ia tidak mampu melakukannya sendiri (lemah), dan sifat lemah mustahil bagi Allah.',
            ],
            [
                'difficulty' => 'sederhana',
                'type' => 'true_false',
                'question_text' => 'Manusia sentiasa berhajat kepada rezeki, udara dan pertolongan Allah pada setiap saat.',
                'options' => ['Benar', 'Salah'],
                'correct_answer' => 'Benar',
                'explanation' => 'Benar. Seluruh makhluk bersifat fakir (amat berhajat) kepada rahmat dan pemeliharaan Allah SWT.',
            ],
            [
                'difficulty' => 'sederhana',
                'type' => 'fill_in_the_blank',
                'question_text' => 'Kefahaman tentang sifat Qiyamuhu Binafsih mendidik manusia agar menjauhi sikap ________ dan bangga diri.',
                'options' => ['sombong', 'pemurah', 'sabar'],
                'correct_answer' => 'sombong',
                'explanation' => 'Menyedari diri sendiri sentiasa berhajat kepada pertolongan Allah mengikis sifat takbur dan sombong.',
            ],

            // Aras Tinggi (2 soalan)
            [
                'difficulty' => 'tinggi',
                'type' => 'objective',
                'question_text' => 'Encik Razak seorang jutawan yang dermawan. Dia sentiasa bersolat dan memohon doa kepada Allah setiap hari tanpa rasa jemu. Mengapa?',
                'options' => [
                    'Kerana dia menginsafi bahawa kekayaannya hanyalah kurniaan Allah, dan dia tetap berhajat kepada Allah',
                    'Kerana dia takut perniagaannya diambil alih oleh pekerjanya',
                    'Kerana dia mahu penduduk kampung mengundinya sebagai ketua'
                ],
                'correct_answer' => 'Kerana dia menginsafi bahawa kekayaannya hanyalah kurniaan Allah, dan dia tetap berhajat kepada Allah',
                'explanation' => 'Penghayatan sifat Qiyamuhu Binafsih menyedarkan manusia betapa kayanya seseorang, dia tetap kerdil dan memerlukan Allah Yang Maha Kaya.',
            ],
            [
                'difficulty' => 'tinggi',
                'type' => 'objective',
                'question_text' => 'Mengapakah orang Islam diajar agar hanya berdoa dan memohon pertolongan hakiki kepada Allah semata-mata?',
                'options' => [
                    'Kerana hanya Allah yang tidak berhajat kepada apa-apa dan berkuasa mutlak memberi manfaat',
                    'Kerana makhluk tidak pandai bertutur bahasa Arab',
                    'Kerana berdoa kepada selain Allah memerlukan bayaran wang'
                ],
                'correct_answer' => 'Kerana hanya Allah yang tidak berhajat kepada apa-apa dan berkuasa mutlak memberi manfaat',
                'explanation' => 'Hanya Allah Yang Maha Berdiri Sendiri yang berkuasa mengurniakan segala keperluan makhluk tanpa perantara yang berkuasa mandiri.',
            ],
        ];

        foreach ($topic4Questions as $q) {
            $topic4->questions()->create($q);
        }

        // 5. Topik 5: Islam dan Sains (Haiwan)
        $topic5 = Topic::create([
            'topic_number' => 5,
            'title' => 'Islam dan Sains (Haiwan)',
            'slug' => 'islam-dan-sains-haiwan',
            'description' => 'Memerhati keajaiban penciptaan haiwan dalam sains sebagai bukti keagungan, kebijaksanaan dan kewujudan Allah SWT.',
            'icon' => 'feather',
        ]);

        $topic5Questions = [
            // Aras Rendah (5 soalan)
            [
                'difficulty' => 'rendah',
                'type' => 'objective',
                'question_text' => 'Siapakah yang mencipta segala jenis haiwan di darat, air dan udara dengan penuh teliti?',
                'options' => ['Allah SWT', 'Alam semula jadi semata-mata', 'Para saintis makmal'],
                'correct_answer' => 'Allah SWT',
                'explanation' => 'Semua makhluk bernyawa termasuk haiwan diciptakan oleh Allah Yang Maha Pencipta (Al-Khaliq).',
            ],
            [
                'difficulty' => 'rendah',
                'type' => 'fill_in_the_blank',
                'question_text' => 'Lebah dapat membina sarang heksagon yang kukuh dan menghasilkan madu kerana mendapat ________ daripada Allah.',
                'options' => ['ilham', 'latihan manusia', 'buku panduan'],
                'correct_answer' => 'ilham',
                'explanation' => 'Surah An-Nahl menceritakan bahawa Allah mengilhamkan lebah kepintaran membina sarang dan menghasilkan madu yang berkhasiat.',
            ],
            [
                'difficulty' => 'rendah',
                'type' => 'true_false',
                'question_text' => 'Ikan diciptakan Allah dengan insang bagi membolehkannya menyerap oksigen dan bernafas di dalam air.',
                'options' => ['Benar', 'Salah'],
                'correct_answer' => 'Benar',
                'explanation' => 'Benar. Reka bentuk insang membuktikan ketelitian Allah mencipta organ yang sesuai dengan habitat hidupan.',
            ],
            [
                'difficulty' => 'rendah',
                'type' => 'true_false',
                'question_text' => 'Burung terbang bermigrasi beribu-ribu batu tanpa sesat kerana mempunyai kompas semula jadi kurniaan Allah.',
                'options' => ['Benar', 'Salah'],
                'correct_answer' => 'Benar',
                'explanation' => 'Benar. Sistem navigasi burung adalah salah satu bukti kekuasaan dan kebijaksanaan Allah Yang Maha Pengatur.',
            ],
            [
                'difficulty' => 'rendah',
                'type' => 'objective',
                'question_text' => 'Antara nama Allah yang berkait rapat dengan penciptaan segala hidupan ialah Al-Khaliq yang bermaksud Maha ...',
                'options' => ['Pencipta', 'Pemaaf', 'Mendengar'],
                'correct_answer' => 'Pencipta',
                'explanation' => 'Al-Khaliq bererti Maha Pencipta sekalian makhluk.',
            ],

            // Aras Sederhana (3 soalan)
            [
                'difficulty' => 'sederhana',
                'type' => 'objective',
                'question_text' => 'Semut hidup bekerjasama dalam koloni teratur dan mampu mengangkat beban berkali ganda berat badannya. Fakta ini membuktikan bahawa...',
                'options' => [
                    'Allah mencipta setiap makhluk dengan keistimewaan dan sistem tersendiri',
                    'Semut mempelajari kemahiran itu di sekolah khas semut',
                    'Semut mempunyai saiz otak yang lebih besar daripada gajah'
                ],
                'correct_answer' => 'Allah mencipta setiap makhluk dengan keistimewaan dan sistem tersendiri',
                'explanation' => 'Kekuatan dan organisasi semut adalah bukti nyata hikmah serta kebijaksanaan penciptaan Allah SWT.',
            ],
            [
                'difficulty' => 'sederhana',
                'type' => 'true_false',
                'question_text' => 'Dalam Al-Quran, terdapat lebih daripada 20 jenis nama haiwan yang disebut seperti lebah, semut, gajah dan lembu.',
                'options' => ['Benar', 'Salah'],
                'correct_answer' => 'Benar',
                'explanation' => 'Benar. Al-Quran menyebut pelbagai haiwan sebagai dalil dan perumpamaan untuk renungan akal manusia.',
            ],
            [
                'difficulty' => 'sederhana',
                'type' => 'fill_in_the_blank',
                'question_text' => 'Amalan memerhatikan keajaiban ciptaan haiwan untuk mengagumi kebesaran Allah dinamakan sebagai amalan ________.',
                'options' => ['tafakur', 'berangan-angan', 'sukan'],
                'correct_answer' => 'tafakur',
                'explanation' => 'Tafakur bermaksud berfikir secara mendalam tentang tanda-tanda kebesaran ciptaan Allah SWT.',
            ],

            // Aras Tinggi (2 soalan)
            [
                'difficulty' => 'tinggi',
                'type' => 'objective',
                'question_text' => 'Bagaimanakah kepelbagaian ciri haiwan (unta di padang pasir, beruang kutub di salji) membantah teori bahawa haiwan wujud secara kebetulan?',
                'options' => [
                    'Kerana setiap haiwan dilengkapi anatomi yang sangat tepat dan serasi dengan tempat tinggalnya, membuktikan wujudnya Perancang Maha Bijaksana',
                    'Kerana haiwan sendiri yang memilih untuk berpindah ke kutub utara',
                    'Kerana saintis yang meletakkan haiwan-haiwan tersebut di habitat masing-masing'
                ],
                'correct_answer' => 'Kerana setiap haiwan dilengkapi anatomi yang sangat tepat dan serasi dengan tempat tinggalnya, membuktikan wujudnya Perancang Maha Bijaksana',
                'explanation' => 'Penyesuaian tubuh haiwan yang amat jitu dengan habitat membuktikan ciptaan ini dirancang rapi oleh Tuhan Yang Maha Mengetahui dan Maha Mengatur.',
            ],
            [
                'difficulty' => 'tinggi',
                'type' => 'objective',
                'question_text' => 'Setelah mempelajari tajuk penciptaan haiwan, apakah tindakan yang paling wajar diamalkan oleh seorang murid Tahun 3?',
                'options' => [
                    'Menyayangi haiwan, tidak menyeksa kucing jalanan serta bersyukur melihat keindahan ciptaan Allah',
                    'Mengurung burung di dalam sangkar tanpa diberi makan dan minum',
                    'Membaling batu ke arah sarang lebah untuk bergurau'
                ],
                'correct_answer' => 'Menyayangi haiwan, tidak menyeksa kucing jalanan serta bersyukur melihat keindahan ciptaan Allah',
                'explanation' => 'Kefahaman akidah melahirkan rasa kasih sayang (ihsan) dan rahmah terhadap haiwan sebagai makhluk ciptaan Allah yang perlu disantuni.',
            ],
        ];

        foreach ($topic5Questions as $q) {
            $topic5->questions()->create($q);
        }
    }
}

