-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 12, 2023 at 11:57 PM
-- Server version: 5.7.40
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bmg`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikels`
--

DROP TABLE IF EXISTS `artikels`;
CREATE TABLE IF NOT EXISTS `artikels` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `judul_artikel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_artikel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail_artikel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penulis` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag_artikel` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_artikel` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artikels`
--

INSERT INTO `artikels` (`id`, `judul_artikel`, `isi_artikel`, `thumbnail_artikel`, `penulis`, `tag_artikel`, `kategori_artikel`, `created_at`, `updated_at`) VALUES
(1, 'Molestias enim aut velit sit.', 'Temporibus dolorem dolor est velit. Corrupti dolor repellat veritatis quia distinctio rem. Nostrum ipsum enim quo provident facere non repudiandae. Qui fuga asperiores in nemo sit esse et.', 'https://via.placeholder.com/640x480.png/00dd33?text=deserunt', 'kambali.setiawan', 'Totam beatae ipsam.', 'Bisnis', '2023-09-12 04:22:54', '2023-09-12 04:22:54'),
(2, 'Minima nihil nulla ad dolor omnis hic.', 'Ut voluptatem tempore dolor culpa. Iste cum eum nesciunt dolor temporibus est. Quam voluptates placeat quo qui aut quia asperiores quaerat.', 'https://via.placeholder.com/640x480.png/002200?text=et', 'ifa70', 'Aspernatur corporis.', 'Teknologi', '2023-09-12 04:22:54', '2023-09-12 04:22:54'),
(3, 'Cupiditate tempora aliquid vitae sapiente.', 'Asperiores modi maxime occaecati et sit veniam laborum. Repellat officiis tempore magni et perspiciatis ut eum deleniti. Delectus velit harum neque id. Fugiat repellendus dolore possimus cumque et omnis.', 'https://via.placeholder.com/640x480.png/0011ee?text=officia', 'ysinaga', 'Ut eos.', 'Teknologi', '2023-09-12 04:22:54', '2023-09-12 04:22:54'),
(4, 'At vel laudantium hic ex.', 'Sint sit voluptatem doloribus dolorem deleniti. Et rerum repellat omnis quibusdam reiciendis. Voluptates et qui optio. Dolorum eos enim eveniet unde sunt et sunt itaque.', 'https://via.placeholder.com/640x480.png/001133?text=similique', 'maryanto05', 'Commodi voluptatem adipisci.', 'Teknologi', '2023-09-12 04:22:54', '2023-09-12 04:22:54'),
(5, 'Saepe non illo quia blanditiis.', 'Aut et facilis consequatur quas est omnis sit facilis. Sapiente voluptatem sunt ab at vel eum. Qui qui quia minus hic quam eum officiis. Aliquid et qui aliquam et ut possimus.', 'https://via.placeholder.com/640x480.png/00ddee?text=nobis', 'laksita.kanda', 'Eaque dolores iure.', 'Bisnis', '2023-09-12 04:22:54', '2023-09-12 04:22:54'),
(6, 'Facilis necessitatibus sint qui corrupti impedit magnam.', 'Quia minus alias quas. Exercitationem aut error fugit.', 'https://via.placeholder.com/640x480.png/0066ff?text=expedita', 'rahayu.tania', 'Et quaerat.', 'Bisnis', '2023-09-12 04:22:54', '2023-09-12 04:22:54'),
(7, 'Quasi ea qui enim possimus tenetur est et autem.', 'Enim magnam sint consequatur et nobis. Qui sed et magni possimus. Natus sed quaerat molestiae similique ut illo.', 'https://via.placeholder.com/640x480.png/001188?text=nobis', 'unjani98', 'Atque excepturi id.', 'Kesehatan', '2023-09-12 04:22:54', '2023-09-12 04:22:54'),
(8, 'Unde quia nihil dicta exercitationem rem.', 'Est molestias libero quia ut a nihil qui. Vel animi facilis natus. Eos id itaque eligendi voluptas nemo at nihil ut.', 'https://via.placeholder.com/640x480.png/00cc11?text=quod', 'teddy.hassanah', 'Et ut illum.', 'Bisnis', '2023-09-12 04:22:54', '2023-09-12 04:22:54'),
(10, 'Ea facilis modi quos adipisci iste amet.', 'Eligendi labore nihil voluptas molestias maxime qui ea. Reprehenderit ratione blanditiis dolorem ipsum optio tempora. Non excepturi ea dignissimos optio ipsam molestiae repellendus.', 'https://via.placeholder.com/640x480.png/002288?text=dicta', 'jsitorus', 'Quod consectetur reiciendis.', 'Kesehatan', '2023-09-12 04:22:54', '2023-09-12 04:22:54'),
(11, 'Repellendus aut veniam ex qui aperiam.', 'Cupiditate consequatur nulla sit dolorem nemo eligendi. Ducimus sunt perferendis ipsam illum voluptatibus sequi earum. Illo impedit possimus qui nihil veritatis. Nihil quaerat vero blanditiis dolores.', 'https://via.placeholder.com/640x480.png/00ee11?text=debitis', 'umi99', 'Et et.', 'Kesehatan', '2023-09-12 06:24:26', '2023-09-12 06:24:26'),
(12, 'Et temporibus eum natus iusto.', 'Ipsum ut sunt rerum. Aspernatur sit sed ad. Est minima perspiciatis magnam neque dolor voluptatem inventore qui. Est qui optio accusamus voluptatum placeat quis quae.', 'https://via.placeholder.com/640x480.png/009900?text=ratione', 'dhalim', 'Vero repellat fuga.', 'Teknologi', '2023-09-12 06:24:26', '2023-09-12 06:24:26'),
(13, 'Sit qui sint debitis sed qui voluptas.', 'Error est totam eum ad. Nihil culpa exercitationem et aut praesentium eligendi. Aut dicta eius rerum sapiente. Aut iusto nesciunt consectetur et porro perspiciatis. Vel architecto et optio omnis aliquam.', 'https://via.placeholder.com/640x480.png/001144?text=dolor', 'unjani.zulaika', 'Omnis debitis.', 'Teknologi', '2023-09-12 06:24:26', '2023-09-12 06:24:26'),
(14, 'Excepturi beatae sint porro ratione.', 'Asperiores fugit possimus voluptate ullam. Pariatur at consequatur iusto. Voluptatem quidem ratione in animi provident repellat.', 'https://via.placeholder.com/640x480.png/000011?text=officia', 'keisha.thamrin', 'Quo et voluptatem.', 'Kesehatan', '2023-09-12 06:24:26', '2023-09-12 06:24:26'),
(15, 'Optio vero doloremque explicabo cum a ut.', 'Commodi cupiditate dignissimos minima architecto iste natus. Repellendus dolorem qui possimus nulla nam. Sed eos rerum autem.', 'https://via.placeholder.com/640x480.png/0088ee?text=non', 'fiswahyudi', 'Autem quam sit.', 'Kesehatan', '2023-09-12 06:24:26', '2023-09-12 06:24:26'),
(16, 'Ut soluta ducimus fuga iste inventore tempore incidunt.', 'Nihil veritatis aut dolore ipsa dolor. Itaque aut rerum debitis. Deserunt cum aut rerum et illo voluptatem. Eos incidunt voluptatem vitae quos perspiciatis.', 'https://via.placeholder.com/640x480.png/00dd77?text=ab', 'budiyanto.galih', 'Quis ullam.', 'Teknologi', '2023-09-12 06:24:26', '2023-09-12 06:24:26'),
(17, 'Et voluptatibus excepturi qui qui sit et voluptatem.', 'Beatae qui provident perferendis ut ad harum repudiandae. Ipsum quis recusandae incidunt sit. Quasi expedita harum quod soluta est tempore. Beatae laboriosam mollitia non illum quae. Consequatur illo optio quia voluptatem distinctio odio est.', 'https://via.placeholder.com/640x480.png/003333?text=ut', 'uwulandari', 'Quas animi.', 'Bisnis', '2023-09-12 06:24:26', '2023-09-12 06:24:26'),
(18, 'Doloremque soluta voluptas aut.', 'Dolor officiis cum culpa quis repudiandae adipisci. Eos rerum necessitatibus et consequatur id vero. Consequatur quis provident aperiam. Porro quas consequatur et consequuntur sed amet aut.', 'https://via.placeholder.com/640x480.png/006600?text=nobis', 'alika.purnawati', 'Repellat delectus quam.', 'Teknologi', '2023-09-12 06:24:26', '2023-09-12 06:24:26'),
(19, 'Menjaga kesehatan adalah kewajiban setiap orang', 'Sehat adalah hal terpenting karena apa aja bisa dilakukan tanpa khawatir', 'https://via.placeholder.com/640x480.png/0044cc?text=sed', 'hidayat.sakti', 'Quasi ut.', 'Bisnis', '2023-09-12 06:25:02', '2023-09-12 06:25:02'),
(20, 'Id perspiciatis aut harum porro enim odit atque.', 'Quia accusamus molestias ea fugit nihil harum. Qui accusantium perspiciatis assumenda culpa in nesciunt. Quia et eos cupiditate iusto et dolores ut.', 'https://via.placeholder.com/640x480.png/007700?text=sint', 'kani50', 'Mollitia excepturi.', 'Teknologi', '2023-09-12 06:25:02', '2023-09-12 06:25:02'),
(21, 'Architecto animi numquam aut excepturi est.', 'Rerum iure excepturi assumenda et debitis. Natus nobis eos qui qui vitae quam qui. Ex dolores rerum et doloribus.', 'https://via.placeholder.com/640x480.png/005511?text=deleniti', 'ctarihoran', 'Libero consequatur.', 'Bisnis', '2023-09-12 06:25:02', '2023-09-12 06:25:02'),
(22, 'Expedita minima tempora atque et enim exercitationem dolorem.', 'Necessitatibus est quas velit consequatur incidunt. Assumenda perferendis nesciunt ea veniam voluptas in est. Et incidunt suscipit aperiam doloremque autem.', 'https://via.placeholder.com/640x480.png/003300?text=voluptatibus', 'wani64', 'Culpa excepturi.', 'Kesehatan', '2023-09-12 06:25:02', '2023-09-12 06:25:02'),
(23, 'Omnis aut culpa labore cum dolorum impedit nobis.', 'Officiis labore quam sit excepturi quaerat. Saepe aspernatur fugit velit ea quis. Quisquam voluptas recusandae sint consequatur minima repellendus ipsa. Nostrum nulla aspernatur consequatur mollitia in sint perspiciatis molestiae.', 'https://via.placeholder.com/640x480.png/002277?text=et', 'wahyudin.teguh', 'Quae nihil.', 'Kesehatan', '2023-09-12 06:25:02', '2023-09-12 06:25:02'),
(24, 'Magni quibusdam qui dignissimos fugit voluptate.', 'Tempore expedita non ea et deleniti. Nisi ex nisi rerum animi maxime ipsam cupiditate. Rerum necessitatibus aut perspiciatis molestiae aut provident accusantium.', 'https://via.placeholder.com/640x480.png/001144?text=sed', 'purwanto93', 'Recusandae occaecati dignissimos.', 'Kesehatan', '2023-09-12 06:25:02', '2023-09-12 06:25:02'),
(25, 'Maxime expedita ut similique dicta.', 'Id iure dolorum quas itaque animi tempore sed dolorum. Consequatur iste error sint dolores. Et ut ad aliquam nam culpa. Eum dignissimos doloremque eum illo ut optio.', 'https://via.placeholder.com/640x480.png/007788?text=dolorem', 'kiandra.mangunsong', 'Vitae minima.', 'Kesehatan', '2023-09-12 06:25:02', '2023-09-12 06:25:02'),
(26, 'Id repellat quia perspiciatis tempora.', 'Et perspiciatis accusantium quia qui iusto ut. Doloremque maiores aut harum ut vel consectetur. Velit quia quam voluptatum velit. Nihil et recusandae fuga molestiae.', 'https://via.placeholder.com/640x480.png/001111?text=delectus', 'adriansyah.ellis', 'Impedit voluptatibus.', 'Bisnis', '2023-09-12 06:25:02', '2023-09-12 06:25:02'),
(27, 'Et debitis atque eos aliquid nulla occaecati.', 'Excepturi quis aut veniam reiciendis et et. Quisquam officiis repellat ut recusandae.', 'https://via.placeholder.com/640x480.png/00aa22?text=quidem', 'budi.nababan', 'Veniam tempore perspiciatis.', 'Bisnis', '2023-09-12 06:25:02', '2023-09-12 06:25:02'),
(28, 'Iste consequatur et excepturi.', 'Ipsam praesentium hic corrupti magnam ut. Commodi qui voluptatum fuga inventore repellat. Accusantium in et qui aliquid magni modi pariatur. Quasi nisi dolorem aspernatur eveniet id et.', 'https://via.placeholder.com/640x480.png/008800?text=sit', 'wastuti.raina', 'Ut fuga animi.', 'Teknologi', '2023-09-12 06:25:02', '2023-09-12 06:25:02'),
(29, 'Quia sit quis veniam nam est est.', 'Et hic fugit quia dicta explicabo. Ducimus quae voluptatibus accusamus. Est aut ut reiciendis dicta rerum.', 'https://via.placeholder.com/640x480.png/003377?text=in', 'bpratama', 'Quia blanditiis aspernatur.', 'Teknologi', '2023-09-12 06:25:02', '2023-09-12 06:25:02'),
(30, 'Quis ipsum magnam quis ducimus aperiam ut ad.', 'Omnis animi eos eius omnis velit sequi non. Nobis vero sed officiis reprehenderit recusandae laborum. Amet aut consequatur quia molestiae tempore.', 'https://via.placeholder.com/640x480.png/006699?text=et', 'marbun.yani', 'Voluptatem enim.', 'Kesehatan', '2023-09-12 06:25:02', '2023-09-12 06:25:02'),
(31, 'Nihil est aut ut quis.', 'Libero in tenetur qui veniam quis dicta. Est repellat quo deserunt et nemo voluptates aut labore. Ut quia deserunt voluptas ratione est quia.', 'https://via.placeholder.com/640x480.png/0022ff?text=et', 'laksmiwati.tania', 'Tempora voluptate qui.', 'Bisnis', '2023-09-12 06:25:02', '2023-09-12 06:25:02'),
(32, 'Facilis qui minima maxime itaque est.', 'Nobis temporibus rem et quas consequatur veniam. Distinctio et assumenda mollitia eaque. Et quaerat alias rerum dicta quos alias. Aperiam quo aut qui tenetur.', 'https://via.placeholder.com/640x480.png/0066ff?text=est', 'rahayu.padma', 'Quam illo molestiae.', 'Bisnis', '2023-09-12 06:25:02', '2023-09-12 06:25:02'),
(33, 'Iure et aut est amet aperiam.', 'Deserunt adipisci omnis voluptatum dolores. Voluptatum ut dolorem ut molestiae illo numquam eius minima. Dignissimos inventore corporis nam tempore ea. Omnis vel repellat aut qui omnis temporibus et labore.', 'https://via.placeholder.com/640x480.png/003300?text=aut', 'mansur.hartaka', 'Ut perspiciatis nesciunt.', 'Teknologi', '2023-09-12 06:25:02', '2023-09-12 06:25:02'),
(34, 'Fugiat natus eius natus.', 'Quisquam similique aliquid vel nobis ut fuga maxime. Corporis deserunt molestiae occaecati ipsa ducimus perspiciatis atque iste. Non nam provident totam facere aut est iure.', 'https://via.placeholder.com/640x480.png/00dd11?text=cupiditate', 'lasmono90', 'Deserunt dolorum velit.', 'Kesehatan', '2023-09-12 06:25:02', '2023-09-12 06:25:02'),
(35, 'Quam laudantium veritatis assumenda quia sit.', 'Sint quia doloremque facere reprehenderit. Doloribus voluptas aspernatur ad iste. Sed quis a nesciunt magnam facilis.', 'https://via.placeholder.com/640x480.png/0022ff?text=odio', 'asirwada91', 'Molestiae sequi ut.', 'Bisnis', '2023-09-12 06:25:02', '2023-09-12 06:25:02'),
(36, 'Vitae atque vitae dolorem.', 'Aliquam perferendis culpa dolor qui reprehenderit. Voluptas perferendis sunt magnam. A ab sunt perspiciatis aut officiis. Dicta voluptas sequi eveniet et.', 'https://via.placeholder.com/640x480.png/00cc33?text=praesentium', 'qhandayani', 'Placeat in omnis.', 'Kesehatan', '2023-09-12 06:25:02', '2023-09-12 06:25:02'),
(37, 'Voluptatum qui laborum exercitationem autem dolorum non.', 'Hic harum esse voluptas suscipit eius quia. Magni sed fuga commodi aspernatur officia. Accusantium eum at rerum ad quisquam possimus sit.', 'https://via.placeholder.com/640x480.png/00aa11?text=nesciunt', 'xfirgantoro', 'Eaque nesciunt.', 'Kesehatan', '2023-09-12 06:25:02', '2023-09-12 06:25:02'),
(38, 'Quibusdam voluptatem voluptatem illum numquam commodi unde reiciendis est.', 'Commodi soluta minima est voluptatibus qui consequatur. Et qui vel dolore est iure. Rem odit deleniti debitis iste.', 'https://via.placeholder.com/640x480.png/00ff33?text=sed', 'kamaria73', 'Provident dolorem est.', 'Kesehatan', '2023-09-12 06:25:02', '2023-09-12 06:25:02'),
(39, 'Chatgpt akan mengubah dunia', '<p><em>Chatgpt akan mengubah dunia ini karena dia AI yang cerdas</em></p>', 'https://chat.openai.com/', 'perdi', 'chatgpt', 'Teknologi', '2023-09-12 10:44:24', '2023-09-12 10:44:24'),
(40, 'Jasamarga sahamnya naik ugal-ugalan', '<p><strong>Jasamarga sahamnya naik ugal-ugalan diperkirakan karena puncak arus mudik</strong></p>', 'https://detik.com/', 'anton', 'mudik', 'Bisnis', '2023-09-12 10:44:58', '2023-09-12 11:01:33');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(13, '2014_10_12_000000_create_users_table', 1),
(17, '2023_09_12_024128_create_artikels_table', 2),
(18, '2014_10_12_100000_create_password_resets_table', 3),
(19, '2019_08_19_000000_create_failed_jobs_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Perdianto', 'perdianto_27email@yahoo.co.id', NULL, '$2y$10$v6v0sx3qXZOYt5QgFVYDo.cuXOp.T6xKKxrRtzhF0o4yWQaiTmmVq', NULL, '2023-09-11 20:33:40', '2023-09-11 20:33:40');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
