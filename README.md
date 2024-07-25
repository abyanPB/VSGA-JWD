# Sistem Pendaftaran Beasiswa KIPK

## Deskripsi
Sistem Pendaftaran Beasiswa KIPK adalah sebuah aplikasi berbasis web yang memungkinkan mahasiswa untuk mendaftar beasiswa KIPK secara online. Sistem ini menyediakan form pendaftaran dengan validasi yang sesuai untuk memastikan data yang masuk memenuhi syarat pendaftaran beasiswa.

## Fitur Utama
1. **Pendaftaran Beasiswa KIPK**: Mahasiswa dapat mendaftar beasiswa KIPK dengan mengisi form yang disediakan.
2. **Validasi Data**: Sistem melakukan validasi terhadap data yang diinput, seperti format email, nomor HP, dan IPK.
3. **Pengecekan File Upload**: Sistem memastikan file yang diupload sesuai dengan format yang diizinkan (.pdf, .jpg, .jpeg, .png, .zip) dan tidak melebihi ukuran maksimal 5MB.
4. **Kondisi IPK**: Jika IPK di bawah 3.0, mahasiswa tidak dapat melanjutkan pendaftaran beasiswa.
5. **Interface yang Responsif**: Menggunakan Bootstrap untuk memastikan tampilan yang responsif dan menarik.

## Teknologi yang Digunakan
- HTML
- CSS
- JavaScript
- Bootstrap 5.3.3

## Cara Menggunakan
1. **Kloning Repository**: Kloning repository ini ke komputer Anda.
    ```bash
    git clone https://github.com/username/repo-name.git
    ```
2. **Buka File HTML**: Buka file `index.html` di browser Anda.
3. **Isi Form Pendaftaran**: Isi form pendaftaran dengan data yang valid.
4. **Upload Berkas**: Upload berkas yang dibutuhkan dalam format yang diizinkan.
5. **Submit Form**: Klik tombol "Daftar" untuk mengirimkan pendaftaran.

## Struktur Direktori
├──assets
  ├──brand
  ├──dist
  ├──js
  ├──pricing.css
├──component
├──controllers
├──images
├──pages
├──readme.md


## Validasi Form
- **Nama**: Harus diisi.
- **Email**: Harus diisi dengan format email yang valid.
- **Nomor HP**: Harus diisi dengan format angka saja.
- **Semester Saat Ini**: Pilih dari 1 hingga 8.
- **IPK Terakhir**: Harus diisi dengan nilai IPK.
- **Pilih Beasiswa**: Pilih Beasiswa.
- **Upload Berkas Syarat**: Upload berkas dalam format yang diizinkan (.pdf, .jpg, .jpeg, .png, .zip) dengan ukuran maksimal 5MB.

## Kontribusi
Jika Anda ingin berkontribusi dalam pengembangan proyek ini, silakan fork repository ini dan buat pull request dengan perubahan yang Anda usulkan.

## Lisensi
Proyek ini dilisensikan di bawah VSGA-JWD.

## Kontak
Untuk informasi lebih lanjut, silakan hubungi [abyanpb@gmail.com].
