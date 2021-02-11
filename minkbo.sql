-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 12 Oca 2021, 21:46:28
-- Sunucu sürümü: 10.4.13-MariaDB
-- PHP Sürümü: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `minkbo`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admins`
--

CREATE TABLE `admins` (
  `aid` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `admins`
--

INSERT INTO `admins` (`aid`, `name`, `surname`, `password`, `email`, `address`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Samet', 'Alemdaroğlu', '$2y$10$Rlg0DGm9e.UqK7FGzKuM0.Hye.nC90XJyhdfMwg5zts4osEY3las.', 'admin@admin.com', 'Fatsa/ORDU', '5345722515', '2021-01-12 18:33:51', '2021-01-12 18:33:51');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `advertisements`
--

CREATE TABLE `advertisements` (
  `aid` int(10) UNSIGNED NOT NULL,
  `img` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `advertisements`
--

INSERT INTO `advertisements` (`aid`, `img`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, '', 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500\'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır.', '1', '2021-01-12 18:33:51', '2021-01-12 18:33:51');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(10) UNSIGNED NOT NULL,
  `pid` int(10) UNSIGNED NOT NULL,
  `uid` int(10) UNSIGNED NOT NULL,
  `comment_parent` int(11) NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `config`
--

CREATE TABLE `config` (
  `cid` int(10) UNSIGNED NOT NULL,
  `c_name` text COLLATE utf8_unicode_ci NOT NULL,
  `c_value` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `config`
--

INSERT INTO `config` (`cid`, `c_name`, `c_value`) VALUES
(1, 'smtp_port', '587'),
(2, 'smtp_host', 'plesk.dnshosting.me'),
(3, 'smtp_username', 'info@datatr.xyz'),
(4, 'smtp_password', 'D@f96lh1'),
(5, 'smtp_sender_email', 'info@minkbo.com'),
(6, 'smtp_sender_name', 'MinkBO');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contracts`
--

CREATE TABLE `contracts` (
  `cid` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `contracts`
--

INSERT INTO `contracts` (`cid`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Hizmet Koşulları', 'Yinelenen bir sayfa içeriğinin okuyucunun dikkatini dağıttığı bilinen bir gerçektir. Lorem Ipsum kullanmanın amacı, sürekli \'buraya metin gelecek, buraya metin gelecek\' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda birçok masaüstü yayıncılık paketi ve web sayfa düzenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında \'lorem ipsum\' anahtar sözcükleri ile arama yapıldığında henüz tasarım aşamasında olan çok sayıda site listelenir. \r\n            Yıllar içinde, bazen kazara, bazen bilinçli olarak (örneğin mizah katılarak), çeşitli sürümleri geliştirilmiştir.', '1', '2021-01-12 18:33:51', '2021-01-12 18:33:51'),
(2, 'Gizlilik Sözleşmesi', 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500\'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır. Beşyüz yıl boyunca varlığını sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sıçramıştır.\r\n             1960\'larda Lorem Ipsum pasajları da içeren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum sürümleri içeren masaüstü yayıncılık yazılımları ile popüler olmuştur.', '1', '2021-01-12 18:33:51', '2021-01-12 18:33:51'),
(3, 'Üyelik Sözleşmesi', 'Yaygın inancın tersine, Lorem Ipsum rastgele sözcüklerden oluşmaz. \r\n            Kökleri M.Ö. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir geçmişi vardır. \r\n            Virginia\'daki Hampden-Sydney College\'dan Latince profesörü Richard McClintock, bir Lorem Ipsum pasajında geçen ve anlaşılması en güç \r\n            sözcüklerden biri olan \'consectetur\' sözcüğünün klasik edebiyattaki örneklerini incelediğinde kesin bir kaynağa ulaşmıştır. \r\n            Lorm Ipsum, Çiçero tarafından M.Ö. 45 tarihinde kaleme alınan \'de Finibus Bonorum et Malorum\' (İyi ve Kötünün Uç Sınırları) eserinin 1.10.32 ve \r\n            1.10.33 sayılı bölümlerinden gelmektedir. Bu kitap, ahlak kuramı üzerine bir tezdir ve Rönesans döneminde çok popüler olmuştur. ', '1', '2021-01-12 18:33:51', '2021-01-12 18:33:51');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `events`
--

CREATE TABLE `events` (
  `eid` int(10) UNSIGNED NOT NULL,
  `owner_uid` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `users` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '[]' CHECK (json_valid(`users`)),
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `location` text COLLATE utf8_unicode_ci NOT NULL,
  `event_time` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `friend_requests`
--

CREATE TABLE `friend_requests` (
  `id` int(10) UNSIGNED NOT NULL,
  `uid` int(10) UNSIGNED NOT NULL,
  `friend_uid` int(10) UNSIGNED NOT NULL,
  `unread` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `groups`
--

CREATE TABLE `groups` (
  `gid` int(10) UNSIGNED NOT NULL,
  `owner_uid` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `users` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '[]' CHECK (json_valid(`users`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `messages`
--

CREATE TABLE `messages` (
  `mid` int(10) UNSIGNED NOT NULL,
  `sender_uid` int(10) UNSIGNED NOT NULL,
  `receiver_uid` int(10) UNSIGNED NOT NULL,
  `receiver_unread` tinyint(4) NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `moderators`
--

CREATE TABLE `moderators` (
  `mid` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `moderators`
--

INSERT INTO `moderators` (`mid`, `name`, `surname`, `password`, `email`, `address`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Berk', 'Çetin', '$2y$10$Sw13H92W24cPbndEIDJtD.yQDSG00LmzLPc8DUPa3MHj5RvnuclXC', 'moderator@moderator.com', 'Denizli/Türkiye', '5345722515', '2021-01-12 18:33:51', '2021-01-12 18:33:51');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `notifications`
--

CREATE TABLE `notifications` (
  `nid` int(10) UNSIGNED NOT NULL,
  `uid` int(10) UNSIGNED NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `req_user_id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED DEFAULT NULL,
  `group_id` int(10) UNSIGNED DEFAULT NULL,
  `event_id` int(10) UNSIGNED DEFAULT NULL,
  `unread` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `posts`
--

CREATE TABLE `posts` (
  `pid` int(10) UNSIGNED NOT NULL,
  `uid` int(10) UNSIGNED NOT NULL,
  `gid` int(10) UNSIGNED DEFAULT NULL,
  `type` enum('normal','secret') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'normal',
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `likes` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '[]' CHECK (json_valid(`likes`)),
  `attachments` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '[]' CHECK (json_valid(`attachments`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pw_reset`
--

CREATE TABLE `pw_reset` (
  `rid` int(10) UNSIGNED NOT NULL,
  `uid` int(10) UNSIGNED NOT NULL,
  `token` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `reports`
--

CREATE TABLE `reports` (
  `rid` int(10) UNSIGNED NOT NULL,
  `sender_uid` int(10) UNSIGNED NOT NULL,
  `reported_uid` int(10) UNSIGNED DEFAULT NULL,
  `reported_pid` int(10) UNSIGNED DEFAULT NULL,
  `reported_gid` int(10) UNSIGNED DEFAULT NULL,
  `reported_eid` int(10) UNSIGNED DEFAULT NULL,
  `reported_cid` int(10) UNSIGNED DEFAULT NULL,
  `unread` tinyint(4) NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `uid` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` text COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `gender` enum('Erkek','Kadın','Diğer') COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `friends` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '[]' CHECK (json_valid(`friends`)),
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `banner` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `job` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `saved_posts` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '[]' CHECK (json_valid(`saved_posts`)),
  `secret_opt_name` tinyint(4) NOT NULL DEFAULT 1,
  `session_status` enum('cevrimici','cevrimdisi') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'cevrimdisi',
  `email_verified` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `lastlogin` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`uid`, `name`, `surname`, `email`, `username`, `password`, `birthday`, `gender`, `city`, `state`, `friends`, `image`, `banner`, `description`, `job`, `saved_posts`, `secret_opt_name`, `session_status`, `email_verified`, `status`, `lastlogin`, `created_at`, `updated_at`) VALUES
(1, 'hüseyin', 'erdağlı', 'hsyn-99@hotmail.com', 'Erdagli574', '$2y$10$2Qn4SkePHNnoVzY2i.hQ2e1S1G3JECBW8oDkSgaOUx4iqppccVGqi', '1995-11-11', 'Erkek', 'Balıkesir', 'Edremit', '[]', 'default.svg', 'def-banner.png', 'Bu alanda kendinizi tanıtabilir veya yaşantınız hakkında bilgiler verebilirsiniz.', 'Belirtilmedi', '[]', 1, 'cevrimdisi', 1, 1, '2021-01-12 18:33:51', '2021-01-12 18:33:51', '2021-01-12 18:33:51'),
(2, 'Anıl Ege', 'Kara', 'user@user.com', 'user', '$2y$10$yHsdHhDxIqqV2QdffJRRM.16Sgd.OpqxQjI1c.//q2IZfLrsFv5JK', '1995-11-11', 'Erkek', 'Ankara', 'Çankaya', '[]', 'default2.jpg', 'def-banner2.jpg', 'Bu alanda kendinizi tanıtabilir veya yaşantınız hakkında bilgiler verebilirsiniz.', 'Belirtilmedi', '[]', 1, 'cevrimici', 1, 1, '2021-01-12 20:34:00', '2021-01-12 18:33:51', '2021-01-12 18:33:51'),
(3, 'sametWfBM', 'alemdaroğlu', 'sametWfBM@hotmail.com', 'sametWfBM', '$2y$10$cDiCgCXEPDZ5Cv.5/5oTo.MMTvfQmoyWesA1PurJZQO.1ybmJB0OS', '1995-11-11', 'Erkek', 'Ordu', 'Fatsa', '[]', 'default.svg', 'def-banner.png', 'Bu alanda kendinizi tanıtabilir veya yaşantınız hakkında bilgiler verebilirsiniz.', 'Belirtilmedi', '[]', 1, 'cevrimdisi', 1, 1, '2021-01-12 18:33:51', '2021-01-12 18:33:51', '2021-01-12 18:33:51'),
(4, 'sametPqXX', 'alemdaroğlu', 'sametPqXX@hotmail.com', 'sametPqXX', '$2y$10$h4y52gjFVdULGcrggLMpX.RpAh9tGHQAQbPvFuBgHEdFl6oGyxnMe', '1995-11-11', 'Erkek', 'Ordu', 'Fatsa', '[]', 'default.svg', 'def-banner.png', 'Bu alanda kendinizi tanıtabilir veya yaşantınız hakkında bilgiler verebilirsiniz.', 'Belirtilmedi', '[]', 1, 'cevrimdisi', 1, 1, '2021-01-12 18:33:51', '2021-01-12 18:33:51', '2021-01-12 18:33:51'),
(5, 'sametJvBR', 'alemdaroğlu', 'sametJvBR@hotmail.com', 'sametJvBR', '$2y$10$AeUbspJRRSmsgoOTxWCrp.gPH.KMAjQrxIGvOO19U1hkFUrrC/KgG', '1995-11-11', 'Erkek', 'Ordu', 'Fatsa', '[]', 'default.svg', 'def-banner.png', 'Bu alanda kendinizi tanıtabilir veya yaşantınız hakkında bilgiler verebilirsiniz.', 'Belirtilmedi', '[]', 1, 'cevrimdisi', 1, 1, '2021-01-12 18:33:51', '2021-01-12 18:33:51', '2021-01-12 18:33:51'),
(6, 'sametXzOI', 'alemdaroğlu', 'sametXzOI@hotmail.com', 'sametXzOI', '$2y$10$CBiiUQvp4/mzF/cz5PPg8u1vAJxWEkhHpQWnKFYJpR8/Ze6OOVypK', '1995-11-11', 'Erkek', 'Ordu', 'Fatsa', '[]', 'default.svg', 'def-banner.png', 'Bu alanda kendinizi tanıtabilir veya yaşantınız hakkında bilgiler verebilirsiniz.', 'Belirtilmedi', '[]', 1, 'cevrimdisi', 1, 1, '2021-01-12 18:33:51', '2021-01-12 18:33:51', '2021-01-12 18:33:51'),
(7, 'sametGwFP', 'alemdaroğlu', 'sametGwFP@hotmail.com', 'sametGwFP', '$2y$10$RlrI3dB73oKpKIfsDmlZNO.89rbegvDhMH.NAoQPEh6vkyjM5.ie2', '1995-11-11', 'Erkek', 'Ordu', 'Fatsa', '[]', 'default.svg', 'def-banner.png', 'Bu alanda kendinizi tanıtabilir veya yaşantınız hakkında bilgiler verebilirsiniz.', 'Belirtilmedi', '[]', 1, 'cevrimdisi', 1, 1, '2021-01-12 18:33:52', '2021-01-12 18:33:52', '2021-01-12 18:33:52'),
(8, 'sametLmLR', 'alemdaroğlu', 'sametLmLR@hotmail.com', 'sametLmLR', '$2y$10$BO8TAoVMlDjkLQzT1F7wTufS/aExL1Lka7fJhB7qxOhKhccH4v4D6', '1995-11-11', 'Erkek', 'Ordu', 'Fatsa', '[]', 'default.svg', 'def-banner.png', 'Bu alanda kendinizi tanıtabilir veya yaşantınız hakkında bilgiler verebilirsiniz.', 'Belirtilmedi', '[]', 1, 'cevrimdisi', 1, 1, '2021-01-12 18:33:52', '2021-01-12 18:33:52', '2021-01-12 18:33:52'),
(9, 'sametXeOZ', 'alemdaroğlu', 'sametXeOZ@hotmail.com', 'sametXeOZ', '$2y$10$wMRl06ODM/1AW9/MvgkZvuj8AtA3frPmkdSkhY0U4skJG/Ghy3ohu', '1995-11-11', 'Erkek', 'Ordu', 'Fatsa', '[]', 'default.svg', 'def-banner.png', 'Bu alanda kendinizi tanıtabilir veya yaşantınız hakkında bilgiler verebilirsiniz.', 'Belirtilmedi', '[]', 1, 'cevrimdisi', 1, 1, '2021-01-12 18:33:52', '2021-01-12 18:33:52', '2021-01-12 18:33:52'),
(10, 'sametJyHN', 'alemdaroğlu', 'sametJyHN@hotmail.com', 'sametJyHN', '$2y$10$HDNYTlxl2KuvMgiZc69mAeIoHe3cbw9teKCu9QR6Gf23G0ztcpt2u', '1995-11-11', 'Erkek', 'Ordu', 'Fatsa', '[]', 'default.svg', 'def-banner.png', 'Bu alanda kendinizi tanıtabilir veya yaşantınız hakkında bilgiler verebilirsiniz.', 'Belirtilmedi', '[]', 1, 'cevrimdisi', 1, 1, '2021-01-12 18:33:52', '2021-01-12 18:33:52', '2021-01-12 18:33:52'),
(11, 'sametJiWZ', 'alemdaroğlu', 'sametJiWZ@hotmail.com', 'sametJiWZ', '$2y$10$fKHQ2glL1eFoAf5yFTlEJuUwj2vp/FumhMO2bwfXX2ZPw0HSViznO', '1995-11-11', 'Erkek', 'Ordu', 'Fatsa', '[]', 'default.svg', 'def-banner.png', 'Bu alanda kendinizi tanıtabilir veya yaşantınız hakkında bilgiler verebilirsiniz.', 'Belirtilmedi', '[]', 1, 'cevrimdisi', 1, 1, '2021-01-12 18:33:52', '2021-01-12 18:33:52', '2021-01-12 18:33:52'),
(12, 'sametUqRW', 'alemdaroğlu', 'sametUqRW@hotmail.com', 'sametUqRW', '$2y$10$KhtdKTGHOl8YBssEE.WynuLIA33Deg6B5ZeOs1GJsQK6p9zN/fble', '1995-11-11', 'Erkek', 'Ordu', 'Fatsa', '[]', 'default.svg', 'def-banner.png', 'Bu alanda kendinizi tanıtabilir veya yaşantınız hakkında bilgiler verebilirsiniz.', 'Belirtilmedi', '[]', 1, 'cevrimdisi', 1, 1, '2021-01-12 18:33:52', '2021-01-12 18:33:52', '2021-01-12 18:33:52');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users_ip_history`
--

CREATE TABLE `users_ip_history` (
  `hid` int(10) UNSIGNED NOT NULL,
  `uid` int(10) UNSIGNED NOT NULL,
  `ip_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `logged_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `users_ip_history`
--

INSERT INTO `users_ip_history` (`hid`, `uid`, `ip_address`, `logged_at`) VALUES
(1, 2, '127.0.0.1', '2021-01-12 23:34:00');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`aid`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Tablo için indeksler `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`aid`);

--
-- Tablo için indeksler `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `comments_pid_foreign` (`pid`),
  ADD KEY `comments_uid_foreign` (`uid`);

--
-- Tablo için indeksler `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`cid`),
  ADD UNIQUE KEY `config_c_name_unique` (`c_name`) USING HASH;

--
-- Tablo için indeksler `contracts`
--
ALTER TABLE `contracts`
  ADD PRIMARY KEY (`cid`);

--
-- Tablo için indeksler `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`eid`),
  ADD KEY `events_owner_uid_foreign` (`owner_uid`);

--
-- Tablo için indeksler `friend_requests`
--
ALTER TABLE `friend_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `friend_requests_uid_foreign` (`uid`),
  ADD KEY `friend_requests_friend_uid_foreign` (`friend_uid`);

--
-- Tablo için indeksler `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`gid`),
  ADD KEY `groups_owner_uid_foreign` (`owner_uid`);

--
-- Tablo için indeksler `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`mid`),
  ADD KEY `messages_sender_uid_foreign` (`sender_uid`),
  ADD KEY `messages_receiver_uid_foreign` (`receiver_uid`);

--
-- Tablo için indeksler `moderators`
--
ALTER TABLE `moderators`
  ADD PRIMARY KEY (`mid`),
  ADD UNIQUE KEY `moderators_email_unique` (`email`);

--
-- Tablo için indeksler `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`nid`),
  ADD KEY `notifications_uid_foreign` (`uid`),
  ADD KEY `notifications_req_user_id_foreign` (`req_user_id`),
  ADD KEY `notifications_post_id_foreign` (`post_id`),
  ADD KEY `notifications_group_id_foreign` (`group_id`),
  ADD KEY `notifications_event_id_foreign` (`event_id`);

--
-- Tablo için indeksler `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `posts_uid_foreign` (`uid`),
  ADD KEY `posts_gid_foreign` (`gid`);

--
-- Tablo için indeksler `pw_reset`
--
ALTER TABLE `pw_reset`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `pw_reset_uid_foreign` (`uid`);

--
-- Tablo için indeksler `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `reports_sender_uid_foreign` (`sender_uid`),
  ADD KEY `reports_reported_uid_foreign` (`reported_uid`),
  ADD KEY `reports_reported_pid_foreign` (`reported_pid`),
  ADD KEY `reports_reported_gid_foreign` (`reported_gid`),
  ADD KEY `reports_reported_eid_foreign` (`reported_eid`),
  ADD KEY `reports_reported_cid_foreign` (`reported_cid`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`) USING HASH;

--
-- Tablo için indeksler `users_ip_history`
--
ALTER TABLE `users_ip_history`
  ADD PRIMARY KEY (`hid`),
  ADD KEY `users_ip_history_uid_foreign` (`uid`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admins`
--
ALTER TABLE `admins`
  MODIFY `aid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `aid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `config`
--
ALTER TABLE `config`
  MODIFY `cid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `contracts`
--
ALTER TABLE `contracts`
  MODIFY `cid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `events`
--
ALTER TABLE `events`
  MODIFY `eid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `friend_requests`
--
ALTER TABLE `friend_requests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `groups`
--
ALTER TABLE `groups`
  MODIFY `gid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `messages`
--
ALTER TABLE `messages`
  MODIFY `mid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `moderators`
--
ALTER TABLE `moderators`
  MODIFY `mid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `notifications`
--
ALTER TABLE `notifications`
  MODIFY `nid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `posts`
--
ALTER TABLE `posts`
  MODIFY `pid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `pw_reset`
--
ALTER TABLE `pw_reset`
  MODIFY `rid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `reports`
--
ALTER TABLE `reports`
  MODIFY `rid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `users_ip_history`
--
ALTER TABLE `users_ip_history`
  MODIFY `hid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_pid_foreign` FOREIGN KEY (`pid`) REFERENCES `posts` (`pid`),
  ADD CONSTRAINT `comments_uid_foreign` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`);

--
-- Tablo kısıtlamaları `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_owner_uid_foreign` FOREIGN KEY (`owner_uid`) REFERENCES `users` (`uid`);

--
-- Tablo kısıtlamaları `friend_requests`
--
ALTER TABLE `friend_requests`
  ADD CONSTRAINT `friend_requests_friend_uid_foreign` FOREIGN KEY (`friend_uid`) REFERENCES `users` (`uid`),
  ADD CONSTRAINT `friend_requests_uid_foreign` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`);

--
-- Tablo kısıtlamaları `groups`
--
ALTER TABLE `groups`
  ADD CONSTRAINT `groups_owner_uid_foreign` FOREIGN KEY (`owner_uid`) REFERENCES `users` (`uid`);

--
-- Tablo kısıtlamaları `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_receiver_uid_foreign` FOREIGN KEY (`receiver_uid`) REFERENCES `users` (`uid`),
  ADD CONSTRAINT `messages_sender_uid_foreign` FOREIGN KEY (`sender_uid`) REFERENCES `users` (`uid`);

--
-- Tablo kısıtlamaları `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `events` (`eid`),
  ADD CONSTRAINT `notifications_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `groups` (`gid`),
  ADD CONSTRAINT `notifications_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`pid`),
  ADD CONSTRAINT `notifications_req_user_id_foreign` FOREIGN KEY (`req_user_id`) REFERENCES `users` (`uid`),
  ADD CONSTRAINT `notifications_uid_foreign` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`);

--
-- Tablo kısıtlamaları `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_gid_foreign` FOREIGN KEY (`gid`) REFERENCES `groups` (`gid`),
  ADD CONSTRAINT `posts_uid_foreign` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`);

--
-- Tablo kısıtlamaları `pw_reset`
--
ALTER TABLE `pw_reset`
  ADD CONSTRAINT `pw_reset_uid_foreign` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`);

--
-- Tablo kısıtlamaları `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `reports_reported_cid_foreign` FOREIGN KEY (`reported_cid`) REFERENCES `comments` (`comment_id`),
  ADD CONSTRAINT `reports_reported_eid_foreign` FOREIGN KEY (`reported_eid`) REFERENCES `events` (`eid`),
  ADD CONSTRAINT `reports_reported_gid_foreign` FOREIGN KEY (`reported_gid`) REFERENCES `groups` (`gid`),
  ADD CONSTRAINT `reports_reported_pid_foreign` FOREIGN KEY (`reported_pid`) REFERENCES `posts` (`pid`),
  ADD CONSTRAINT `reports_reported_uid_foreign` FOREIGN KEY (`reported_uid`) REFERENCES `users` (`uid`),
  ADD CONSTRAINT `reports_sender_uid_foreign` FOREIGN KEY (`sender_uid`) REFERENCES `users` (`uid`);

--
-- Tablo kısıtlamaları `users_ip_history`
--
ALTER TABLE `users_ip_history`
  ADD CONSTRAINT `users_ip_history_uid_foreign` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
