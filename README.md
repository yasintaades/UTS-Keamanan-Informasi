Kasus Supir

Sebuah perusahaan travel membangun sistem aplikasi untuk mengelola armada mobil, supir, dan rute perjalanan. Aplikasi ini menyimpan data:
Supir: nama, nomor telp, nomor SIM (yang dienkripsi demi keamanan), dan alamat supir.
Mobil: nama mobil, plat nomor, warna, dan ID supir yang mengendarai.
Jadwal: mobil_id, supir_id, tanggal_jalan, dan kota tujuan.

Relasi antar entitas:
- Satu supir mengendarai satu mobil.
- Satu mobil memiliki satu jadwal.
- Satu jadwal bisa digunakan oleh beberapa mobil (misal: jam & rute sama tapi mobil berbeda).

Nomor SIM adalah data pribadi dan sensitif. Jika bocor, bisa disalahgunakan (misalnya untuk identitas palsu atau pemalsuan data). Oleh karena itu, penyimpanannya harus aman, yaitu dengan enkripsi.
Maka pendekatannya adalah dengan menggunakan algoritma AES (Advanced Encryption Standard). sehingga Nomor SIM dienkripsi sebelum disimpan di database.
