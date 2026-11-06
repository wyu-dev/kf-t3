# 📖 Latih Tubi Akidah Tahun 3 (Pendidikan Islam KSSR Semakan)

Aplikasi web interaktif latihan kendiri bagi topik **Akidah Tahun 3** (Sekolah Rendah). Dibina berasaskan **Laravel 12 / Modern PHP** dengan antara muka mesra kanak-kanak, sokongan sintesis audio dan sistem penggayaan Tailwind CSS. Sedia untuk dihoskan terus di **GitHub Pages** atau sebagai aplikasi Laravel penuh.

---

## 🌟 Ciri-Ciri Utama

1. **⚡ Butang "Jana Latihan"**:
   - Memilih **30 soalan secara rawak** merangkumi kesemua 5 topik Akidah secara seimbang.
   - Mengambil 6 soalan bagi setiap topik (3 Rendah, 2 Sederhana, 1 Tinggi) dan mencampurkannya secara rawak.

2. **📚 Bank 50 Soalan Komprehensif (Berdasarkan Silibus KSSR Semakan)**:
   - **Topik 1: Beriman kepada Kitab** (10 soalan: 5 rendah, 3 sederhana, 2 tinggi)
   - **Topik 2: Beriman kepada Hari Kiamat** (10 soalan: 5 rendah, 3 sederhana, 2 tinggi)
   - **Topik 3: Sifat Mukhalafatu Lil Hawadith** (10 soalan: 5 rendah, 3 sederhana, 2 tinggi)
   - **Topik 4: Sifat Qiyamuhu Binafsih** (10 soalan: 5 rendah, 3 sederhana, 2 tinggi)
   - **Topik 5: Islam dan Sains (Haiwan)** (10 soalan: 5 rendah, 3 sederhana, 2 tinggi)

3. **📝 Pelbagai Format Soalan**:
   - **Objektif** (3 pilihan jawapan A, B, C)
   - **Benar / Salah** (Kad interaktif dengan ikon)
   - **Isi Tempat Kosong** (Pilihan perkataan yang boleh diklik)

4. **💡 Maklum Balas Segera (Instant Feedback)**:
   - **Jawapan Betul**: Ucapan tahniah `🎉 Tahniah! Jawapan anda tepat!`, kesan bunyi arpeggio ceria dan penjelasan topik.
   - **Jawapan Salah**: Penjelasan punca/sebab, penerangan konsep dan paparan jawapan yang betul dengan jelas.

5. **🎯 Sasaran Pencapaian 80%**:
   - Sasaran lulus cemerlang ialah **80% (sekurang-kurangnya 24 / 30 betul)**.
   - **Mencapai ≥ 80%**: Sambutan bunga api (*confetti*), gred *Mumtaz*, dan pengiktirafan cemerlang.
   - **Kurang daripada 80%**: Mesej motivasi dan butang **"🔄 Cuba Lagi (Set Soalan Lain)"** untuk menjana set 30 soalan rawak yang baharu.

6. **🔊 Kesan Bunyi Tanpa Aset Luar**:
   - Menggunakan *Web Audio API* terbina dalam pelayar web tanpa memerlukan muat turun fail audio luar. Butang kawalan audio turut disediakan.

---

## 🚀 Cara Menjalankan Secara Tempatan (Local Development)

### Keperluan Sistem:
- PHP >= 8.2 (Disokong penuh pada PHP 8.4)
- Composer

### Langkah Pemasangan:
```bash
# 1. Klon repositori
git clone <URL_REPOSITORI_ANDA>
cd LT

# 2. Pasang kebergantungan (jika belum)
composer install

# 3. Tetapkan fail persekitaran
cp .env.example .env
php artisan key:generate

# 4. Jalankan migrasi dan seeder bank soalan
php artisan migrate --seed

# 5. Jalankan pelayan pembangunan Laravel
php artisan serve
```

Buka pelayar web anda di: `http://127.0.0.1:8000`

---

## 🌐 Cara Menghoskan di GitHub (GitHub Pages)

Aplikasi ini telah siap dibina dengan versi mandiri di dalam direktori `docs/` supaya anda boleh menghoskan laman ini secara **PERCUMA di GitHub Pages** tanpa perlu menyewa pelayan PHP:

### Langkah-langkah:
1. **Mulakan Git dan Muat Naik ke GitHub**:
   ```bash
   git init
   git add .
   git commit -m "Initial commit - Latih Tubi Akidah Tahun 3"
   git branch -M main
   git remote add origin https://github.com/<username-anda>/<nama-repo>.git
   git push -u origin main
   ```

2. **Aktifkan GitHub Pages**:
   - Di repositori GitHub anda, pergi ke tab **Settings**.
   - Di menu sebelah kiri, klik **Pages**.
   - Di bahagian **Build and deployment** -> **Source**:
     - Pilih **Deploy from a branch**.
     - Branch: Pilih `main`.
     - Folder: Pilih `/docs`.
   - Klik butang **Save**.

3. **Selesai!** Dalam masa 1-2 minit, laman web anda akan disiarkan di:
   `https://<username-anda>.github.io/<nama-repo>/`

> **Nota:** Sekiranya anda menambah atau menyunting soalan di pangkalan data Laravel, anda boleh menjana semula fail `docs/index.html` pada bila-bila masa dengan arahan:
> ```bash
> php artisan quiz:export-static
> ```

---

## 🧪 Ujian Automasi (Automated Tests)

Semua logik permohonan, pemilihan soalan rawak, struktur pangkalan data dan API telah diliputi dengan ujian automasi:

```bash
php artisan test
```

---

## 📂 Struktur Fail Utama

- `app/Models/Topic.php` & `app/Models/Question.php`: Model data topik dan soalan.
- `database/seeders/AkidahQuestionSeeder.php`: Bank lengkap 50 soalan Akidah Tahun 3.
- `app/Http/Controllers/QuizController.php`: Logik pemilihan rawak 30 soalan dan API.
- `resources/views/quiz/index.blade.php`: Antara muka interaktif lengkap dengan audio dan animasi.
- `app/Console/Commands/ExportStaticQuiz.php`: Perintah eksport ke versi statik GitHub Pages.
- `docs/index.html`: Versi sedia-guna untuk GitHub Pages.
- `tests/Feature/QuizTest.php`: Ujian unit & integrasi.
