<?php
/**
 * Konfigurasi dasar WordPress.
 *
 * Berkas ini berisi konfigurasi-konfigurasi berikut: Pengaturan MySQL, Awalan Tabel,
 * Kunci Rahasia, Bahasa WordPress, dan ABSPATH. Anda dapat menemukan informasi lebih
 * lanjut dengan mengunjungi Halaman Codex {@link http://codex.wordpress.org/Editing_wp-config.php
 * Menyunting wp-config.php}. Anda dapat memperoleh pengaturan MySQL dari web host Anda.
 *
 * Berkas ini digunakan oleh skrip penciptaan wp-config.php selama proses instalasi.
 * Anda tidak perlu menggunakan situs web, Anda dapat langsung menyalin berkas ini ke
 * "wp-config.php" dan mengisi nilai-nilainya.
 *
 * @package WordPress
 */

// ** Pengaturan MySQL - Anda dapat memperoleh informasi ini dari web host Anda ** //
/** Nama basis data untuk WordPress */
define( 'DB_NAME', 'custoddy' );

/** Nama pengguna basis data MySQL */
define( 'DB_USER', 'root' );

/** Kata sandi basis data MySQL */
define( 'DB_PASSWORD', '' );

/** Nama host MySQL */
define( 'DB_HOST', 'localhost' );

/** Set Karakter Basis Data yang digunakan untuk menciptakan tabel basis data. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Jenis Collate Basis Data. Jangan ubah ini jika ragu. */
define('DB_COLLATE', '');

/**#@+
 * Kunci Otentifikasi Unik dan Garam.
 *
 * Ubah baris berikut menjadi frase unik!
 * Anda dapat menciptakan frase-frase ini menggunakan {@link https://api.wordpress.org/secret-key/1.1/salt/ Layanan kunci-rahasia WordPress.org}
 * Anda dapat mengubah baris-baris berikut kapanpun untuk mencabut validasi seluruh cookies. Hal ini akan memaksa seluruh pengguna untuk masuk log ulang.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'f+wc|ec<YQj.`a}cdaN/mD<NKj@WP<rq8 i-)RSbVgdN;6CAs_vMLm cP.W[.$9a' );
define( 'SECURE_AUTH_KEY',  'K_$n_R(w5?<I_,N!u2VAzOqElbS.g[C^egSAS.)6j=&[IgxQUAX$~I >os~/J{({' );
define( 'LOGGED_IN_KEY',    's;FM#s>OwA.)ldBGV>!1+M6Am2$5F;Vc8VRUsE%Tr/}_BS$+>rH~^J!}4kuP[?>Y' );
define( 'NONCE_KEY',        'v;)S!?@d)Fn?H-Z#b:FhsGYRh8crWtE^:r8(Z$BA,&ZK^|N);e3D_M}_kO]&O^H?' );
define( 'AUTH_SALT',        '<=8IKTP#&#~=X3`JCQ,bW5~{$URa4uYPn^}mF]^&m;i,%uL[|fF8nnrpXC!kXLPW' );
define( 'SECURE_AUTH_SALT', 'J>ShzqUq+D Vz#%kFQxemOt,+0|SBb(SYa?)L.X%?4d2D;De*Koc)Yw5$WT#UDSC' );
define( 'LOGGED_IN_SALT',   '{mR~&e6~X[u;:/?6S/<bp]vZm,eN]iwlwR<o>7gj`@4IkH#$@xh1GWQ7?1/P8F3k' );
define( 'NONCE_SALT',       'W+;#=lVBZa%wogBm}n9O/H,[+zv*X!_l #P4#9N:}@5~)cJ}5@-%o pvBQ#r.G+`' );

/**#@-*/

/**
 * Awalan Tabel Basis Data WordPress.
 *
 * Anda dapat memiliki beberapa instalasi di dalam satu basis data jika Anda memberikan awalan unik
 * kepada masing-masing tabel. Harap hanya masukkan angka, huruf, dan garis bawah!
 */
$table_prefix = 'wp_';

/**
 * Untuk pengembang: Moda pengawakutuan WordPress.
 *
 * Ubah ini menjadi "true" untuk mengaktifkan tampilan peringatan selama pengembangan.
 * Sangat disarankan agar pengembang plugin dan tema menggunakan WP_DEBUG
 * di lingkungan pengembangan mereka.
 */
define('WP_DEBUG', false);

/* Cukup, berhenti menyunting! Selamat ngeblog. */

/** Lokasi absolut direktori WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Menentukan variabel-variabel WordPress berkas-berkas yang disertakan. */
require_once(ABSPATH . 'wp-settings.php');
