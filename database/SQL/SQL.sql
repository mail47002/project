-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.24-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for pfandz_db1
CREATE DATABASE IF NOT EXISTS `pfandz_db1` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `pfandz_db1`;

-- Dumping structure for table pfandz_db1.articles
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `media` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table pfandz_db1.articles: ~7 rows (approximately)
REPLACE INTO `articles` (`id`, `title`, `short`, `image`, `media`, `url`, `type`, `cta`) VALUES
	(1, 'Die digitale Pfandtonne', 'Bericht des Franken Fernsehens über unsere Pfandtonne am Hauptbahnhof', '/assets/img/media/ff.png', 'Franken Fernsehen', 'https://www.frankenfernsehen.tv/mediathek/video/pilotprojekt-fuer-flaschensammler-die-digitale-pfandtonne/', 'video', 'Zum Video'),
	(2, 'Nürnberger Pfandnetzwerk', 'Berichterstattung des Bayerischen Rundfunks über das Pfandnetzwerk', '/assets/img/media/br.png', 'BR Fernsehen', 'https://www.br.de/mediathek/video/nuernberger-pfandnetzwerk-digitaler-sammelbehaelter-unterstuetzt-pfandsammler-av:6075d4dbfec1740008bef5f6', 'video', 'Zum Video'),
	(3, 'Dieser Automat soll Armen helfen', 'Die BILD berichtet über die Pfandtonne am Nürnberger Hauptbahnhof.', '/assets/img/media/bild.png', 'BILD', 'https://www.bild.de/regional/nuernberg/nuernberg-news/pfandnetzwerk-praesentiert-neue-tonne-dieser-automat-soll-armen-helfen-76058504.bild.html', 'print', 'Artikel lesen'),
	(4, 'Pfandtonne soll Obdachlosen helfen ', 'Nordbayern.de über unser Pilotprojekt im Raum Nürnberg', '/assets/img/media/nb.png', 'Nordbayern.de', 'https://www.nordbayern.de/region/nuernberg/nurnberger-hauptbahnhof-digitale-pfandtonne-soll-obdachlosen-helfen-1.10994314', 'print', 'Artikel lesen'),
	(5, 'Tonnen, die entlasten', 'Die ersten Leergut-Behälter in öffentliche Bereiche wie dem Hauptbahnhof.', '/assets/img/media/sk.png', 'Straßenkreuzer', 'https://www.strassenkreuzer.info/uncategorized', 'print', 'Artikel lesen'),
	(6, 'Pfandnetzwerk im Radio', 'Radio NRJ über die neuen Pfandtonnen im Sendegebiet Nürnberg', '/assets/img/media/nrg.png', 'Radio NRJ', 'https://pfandnetzwerk.de/media/20210414_Radio_Energy_Nuernberg.mp3', 'radio', NULL),
	(7, '#ZeroWasteArt Vernissage', 'Das Pfandnetzwerk wurde bei der digitalen Vernissage von #ZeroWasteArt vorgestellt', '/assets/img/media/zwa.png', 'Zero Waste Art', 'https://fb.watch/6VcpPbH06A/', 'video', 'Zum Video');

-- Dumping structure for table pfandz_db1.bags
CREATE TABLE IF NOT EXISTS `bags` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qrcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table pfandz_db1.bags: ~2 rows (approximately)
REPLACE INTO `bags` (`id`, `uuid`, `qrcode`, `name`, `description`, `status`, `created_at`, `updated_at`) VALUES
	(1, '5fdd34c6-b6d5-48d7-bc23-a3e5c38a8541', '3280197790b32f9a.png', 'Pratik', 'Hello', 1, '2022-08-08 05:44:21', '2022-08-08 05:44:21'),
	(2, '12200324-301f-46bc-a3db-e825993b150f', '35d460609a91fa52.png', 'Hardik', 'Hello', 1, '2022-08-08 05:44:31', '2022-08-08 05:44:31');

-- Dumping structure for table pfandz_db1.bins
CREATE TABLE IF NOT EXISTS `bins` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `device_id` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL COMMENT '1 = Good, 2 = Not Working,3 = Error',
  `latitude` double(8,2) DEFAULT NULL,
  `longitude` double(8,2) DEFAULT NULL,
  `medium` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_updated_at` datetime DEFAULT NULL,
  `max_volume` int(11) DEFAULT NULL,
  `actual_volume` int(11) DEFAULT NULL,
  `actual_volume_percent` double(8,2) DEFAULT NULL,
  `daily_increment_bottle` float DEFAULT NULL,
  `battery` double(8,2) DEFAULT NULL,
  `daily_decrement_battery` float NOT NULL,
  `temperature` double(8,2) DEFAULT NULL,
  `mess_data` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table pfandz_db1.bins: ~4 rows (approximately)
REPLACE INTO `bins` (`id`, `uuid`, `device_id`, `name`, `description`, `city`, `street`, `zip`, `status`, `latitude`, `longitude`, `medium`, `last_updated_at`, `max_volume`, `actual_volume`, `actual_volume_percent`, `daily_increment_bottle`, `battery`, `daily_decrement_battery`, `temperature`, `mess_data`, `created_at`, `updated_at`) VALUES
	(1, '6fa35bb6-31c5-4420-a6ba-475ef0ecf47a', '0866425036425884', 'Pratik', 'Hello', 'Ahmedabad', 'Sindhubhavan Marg', '380054', 1, 23.04, 72.50, NULL, NULL, NULL, NULL, NULL, 10, NULL, 5, NULL, NULL, '2022-08-08 05:47:17', '2022-08-08 05:48:25'),
	(2, 'c689d26c-f657-4ac2-bf78-69b1ac2792c6', '0868446032694941', 'Hardik', 'Hello', 'Ahmedabad', NULL, '380016', 1, 23.05, 72.61, NULL, NULL, NULL, NULL, NULL, 5, NULL, 10, NULL, NULL, '2022-08-08 05:49:42', '2022-08-08 05:49:42'),
	(3, '90530d4b-9c36-4c47-9a86-b8da4b955af9', '0867035044725826', 'Rohit', 'Hello', 'Dhrangadhra', NULL, '363310', 1, 22.99, 71.47, NULL, NULL, NULL, NULL, NULL, 3, NULL, 4, NULL, NULL, '2022-08-08 05:50:47', '2022-08-08 05:50:47'),
	(4, 'c0bc8e4c-157f-43e5-97a3-8a6726d9bce1', '0860536048866372', 'Kavita', 'Hello', 'Dhrangadhra', NULL, '363310', 1, 23.00, 71.45, NULL, NULL, NULL, NULL, NULL, 4, NULL, 5, NULL, NULL, '2022-08-08 05:51:46', '2022-08-08 05:51:46'),
	(5, 'eb922d53-64ea-4497-bebd-acafcf29ab99', '0860536048879508', 'Dhara', 'Hello', 'Dhandhuka', NULL, NULL, 1, 22.38, 71.98, NULL, NULL, NULL, NULL, NULL, 6, NULL, 10, NULL, NULL, '2022-08-08 05:53:11', '2022-08-08 05:53:11');

-- Dumping structure for table pfandz_db1.bin_bags
CREATE TABLE IF NOT EXISTS `bin_bags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bin_id` int(11) NOT NULL,
  `bag_id` int(11) NOT NULL,
  `start_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `end_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table pfandz_db1.bin_bags: ~8 rows (approximately)
REPLACE INTO `bin_bags` (`id`, `bin_id`, `bag_id`, `start_at`, `end_at`, `created_at`, `updated_at`) VALUES
	(2, 1, 1, '2022-08-08 11:18:25', '2022-08-08 11:18:25', '2022-08-08 05:48:25', '2022-08-08 05:48:25'),
	(3, 2, 2, '2022-08-08 11:19:42', '2022-08-08 11:19:42', '2022-08-08 05:49:42', '2022-08-08 05:49:42'),
	(4, 3, 1, '2022-08-08 11:20:47', '2022-08-08 11:20:47', '2022-08-08 05:50:47', '2022-08-08 05:50:47'),
	(5, 3, 2, '2022-08-08 11:20:47', '2022-08-08 11:20:47', '2022-08-08 05:50:47', '2022-08-08 05:50:47'),
	(6, 4, 1, '2022-08-08 11:21:46', '2022-08-08 11:21:46', '2022-08-08 05:51:46', '2022-08-08 05:51:46'),
	(7, 4, 2, '2022-08-08 11:21:46', '2022-08-08 11:21:46', '2022-08-08 05:51:46', '2022-08-08 05:51:46'),
	(8, 5, 1, '2022-08-08 11:23:11', '2022-08-08 11:23:11', '2022-08-08 05:53:11', '2022-08-08 05:53:11'),
	(9, 5, 2, '2022-08-08 11:23:11', '2022-08-08 11:23:11', '2022-08-08 05:53:11', '2022-08-08 05:53:11');

-- Dumping structure for table pfandz_db1.bin_report_locations
CREATE TABLE IF NOT EXISTS `bin_report_locations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `bin_id` int(11) NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table pfandz_db1.bin_report_locations: ~1 rows (approximately)
REPLACE INTO `bin_report_locations` (`id`, `bin_id`, `note`, `created_at`, `updated_at`) VALUES
	(1, 1, 'Hello', '2022-08-08 07:03:50', '2022-08-08 07:03:50');

-- Dumping structure for table pfandz_db1.bin_report_problems
CREATE TABLE IF NOT EXISTS `bin_report_problems` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `bin_id` int(11) NOT NULL,
  `problem_id` int(11) NOT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table pfandz_db1.bin_report_problems: ~0 rows (approximately)

-- Dumping structure for table pfandz_db1.bin_users
CREATE TABLE IF NOT EXISTS `bin_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bin_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table pfandz_db1.bin_users: ~5 rows (approximately)
REPLACE INTO `bin_users` (`id`, `bin_id`, `user_id`, `created_at`, `updated_at`) VALUES
	(2, 1, 3, '2022-08-08 05:48:25', '2022-08-08 05:48:25'),
	(3, 2, 3, '2022-08-08 05:49:42', '2022-08-08 05:49:42'),
	(4, 3, 3, '2022-08-08 05:50:47', '2022-08-08 05:50:47'),
	(5, 4, 3, '2022-08-08 05:51:46', '2022-08-08 05:51:46'),
	(6, 5, 3, '2022-08-08 05:53:11', '2022-08-08 05:53:11');

-- Dumping structure for table pfandz_db1.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table pfandz_db1.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table pfandz_db1.faqs
CREATE TABLE IF NOT EXISTS `faqs` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `question` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table pfandz_db1.faqs: ~11 rows (approximately)
REPLACE INTO `faqs` (`id`, `question`, `answer`) VALUES
	(15, 'Wie kann ich das Pfandnetzwerk unterstützen?', 'Ohne die Vernetzung vieler unterstützungsbereiter Personen und Unternehmen, gäbe es kein Pfandnetzwerk. Die Unterstützungsmöglichkeiten sind sehr vielfältig. Neben Sponsoren und Aufstellorten, werden ständig auch neue Vereine, Partner, Städte und Regionen gesucht, die gerne ein Teil des Netzwerkes werden wollen. Bei Interesse oder weiteren guten Ideen zu diesem Thema, gerne über das Kontaktformular melden.'),
	(16, 'Wie finanziert sich das Pfandnetzwerk?', 'Das Pfandnetzwerk bietet ein funktionierendes Gesamtsystem, welches durch  Unterstützer aus der jeweiligen Region finanziert wird. Die Sponsoren -ihnen werden sehr interessante und hochfrequentierte Aufstellorte angeboten- , bewerben mit dem eigenen Logo auf der Pfandtonne ihre Firma. Gleichzeitig unterstützen sie das nachhaltige und soziale Projekt.'),
	(17, 'Wie kommen wir in unserer Region an eine Pfandtonne?', 'Es handelt sich beim Pfandnetzwerk nicht nur um hochwertige Pfandtonnen, sondern ein schlüssiges Gesamtkonzept. Um das Thema in einer neuen Region anzugehen, müssen viele Partner dieser Region mit ins Boot geholt werden. Egal ob ihr Interessenten von einer Gemeinde oder Stadt seid, einen Aufstellort anbieten möchtet, mit eurem Verein die Logistik planen wollt oder einfach eine Anregung habt - meldet euch gerne und wir versuchen gemeinsam die Pfandtonnen auch in eure Region zu bringen.'),
	(18, 'Welche Produkte dürfen in die Pfandtonnen eingeworfen werden?', 'In die Pfandtonnen dürfen alle Flaschen und Dosen eingeworfen werden. Wichtig dabei ist nur, dass es sich um bepfandete Behälter, beispielsweise aus Glas, Kunststoff oder Blech handelt.\nEs gibt unterschiedliche Pfandsysteme in Deutschland. Durch die manuelle Entleerung und Sortierung der Pfandtonnen ist die Herkunft oder das konkrete Pfandsiegel nicht relevant. Die Pfandbeauftragten sind Profis auf ihrem Gebiet und ordnen die jeweiligen Produkte den korrekten Entsorgungswegen zu. Die zwei bekanntesten Pfandsysteme sind das DPG-Pfandsystem (Einweg) und das Mehrweg-Zeichen.'),
	(19, 'Was passiert mit Gegenständen die eigentlich nicht in die Pfandtonne gehören?', 'Wir haben bei der Formgebung der Pfandtonne, der Gestaltung und z.B. den runden Einwurfklappen (die man von Glascontainern kennt) darauf geachtet, dass der Zweck eindeutig kommunizert wird. Das Hauptziel war von Beginn an, nicht mit einem Mülleimer verwechselt zu werden, was größtenteils funktioniert. Dadurch haben wir tatsächlich fast ausschließlich Flaschen in den Behältern. Sollte sich dennoch mal etwas anderes hinein verirren, kümmern sich die Pfandbeauftragten um die korrekte Entsorgung.'),
	(20, 'Wieviel der Pfandeinnahmen kommt tatsächlich bei den sozialen Vereinen an?', 'Das Pfandnetzwerk bietet ein funktionierendes Gesamtsystem, welches durch  Unterstützer aus der jeweiligen Region finanziert wird. Die Pfandtonnen, alle benötigten Informationen, regelmäßige Füllstandsmeldungen und die Nutzung der Plattform wird so den Vereinen kostenfrei zur Verfügung gestellt. Die Pfandeinnahmen können zu 100% für die Entsorgungslogistik und damit auch die Bezahlung der Mitarbeiter des Vereins verwendet werden.'),
	(21, 'Wie wird mit Pfandsammlern umgegangen?', 'Grundsätzlich bietet das deutsche Pfandsystem eine Möglichkeit für etwas Unterstützung sozial benachteiligter Menschen, denn was für Einige ein Wegwerfprodukt im Centbereich darstellt, kann für Andere eine relevante Einnahmequelle sein. So wird bei der Standortauswahl der Pfandtonnen auf die dortige Situation der Pfandsammler geachtet. Durch das Pfandnetzwerk und weitere gute Aktionen sollte aber das menschenunwürdige Durchwühlen von Mülleimern in Zukunft immer mehr der Vergangenheit angehören. Die sozialen Vereine, mit denen wir zusammenarbeiten, sind "sehr nah an den Pfandsammlern dran" und somit an der Verbesserung ihrer Lebensumstände interessiert. Sozial benachteiligte Personen können sich an die Vereine wenden und dann ggf. selbst Pfandbeauftragte werden. Somit kommt nicht nur die Pfandeinnahme in die richtigen Hände, sondern es werden neue Chancen durch eine verantwortungsvolle Aufgabe und ein Anstellungsverhältnis geschaffen.'),
	(22, 'Wie funktioniert die digitale Pfandtonne?', 'In jeder Pfandtonne befindet sich ein Füllstandssensor mit eigener Stromversorgung. Dieser prüft regelmäßig den Füllstand und übermittelt den jeweils aktuellen Wert in unsere Datenbank. Anhand der Erfahrungswerte der Füllgeschwindigkeit, sind je nach Standort unterschiedliche Warnstufen konfiguriert. Wird eine Warnstufe erreicht, geht eine Benachrichtigung an den Pfandbeauftragten des jeweiligen Vereins, der sich um eine zeitnahe Entleerung kümmert.'),
	(23, 'Können die Pfandtonnen auch im Außenbereich aufgestellt werden?', 'Ja. Grundsätzlich sind die Pfandtonnen für den Innen- und den Außenbereich geeignet. Für eine detaillierte Prüfung eines jeden Standortes werden jedoch sehr viele Informationen benötigt, die wir gerne gemeinsam besprechen können.'),
	(24, 'Wird eine Stromversorgung für die digitalen Komponenten der Pfandtonne benötigt?', 'Nein. Um möglichst flexibel zu sein, hat jede Pfandtonne ihre eigene Stromversorgung. Somit werden keine Anschlüsse benötigt und die Pfandtonnen können z.B. auch auf einem Festivalgelände auf der freien Fläche eingesetzt werden.'),
	(25, 'Wie häufig werden die Pfandtonnen entleert?', 'Der Entleerungsrhythmus hängt von vielen Faktoren ab. Z.B. sorgen der Standort, die Jahreszeit, die Spendenbereitschaft und viele weitere Faktoren für ganz unterschiedliche Füllgeschwindigkeiten der Pfandtonnen. Zudem wird durch unsere Plattform eine logistisch sinnvolle Entleerungsroute vorgeschlagen, die auch noch nicht komplett gefüllte Pfandtonnen entleert, wenn diese auf der Route liegen.');

-- Dumping structure for table pfandz_db1.locations
CREATE TABLE IF NOT EXISTS `locations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('frei','genehmigt','in Prüfung','belegt') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table pfandz_db1.locations: ~0 rows (approximately)

-- Dumping structure for table pfandz_db1.logs
CREATE TABLE IF NOT EXISTS `logs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bin_id` int(11) NOT NULL,
  `response` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table pfandz_db1.logs: ~0 rows (approximately)

-- Dumping structure for table pfandz_db1.media
CREATE TABLE IF NOT EXISTS `media` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mediable_id` int(11) DEFAULT NULL,
  `mediable_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table pfandz_db1.media: ~6 rows (approximately)
REPLACE INTO `media` (`id`, `uuid`, `mediable_id`, `mediable_type`, `file`, `created_at`, `updated_at`) VALUES
	(1, '567b0d03-566d-43a2-a80c-5f9457c5538e', 1, 'App\\Models\\Bin', '8fc9ab4ddd571396.png', '2022-08-08 05:47:17', '2022-08-08 05:47:17'),
	(2, 'dc55acb3-a95b-4406-b58b-12ae45a0f888', 1, 'App\\Models\\Bin', '7e26acadcb53de27.png', '2022-08-08 05:47:17', '2022-08-08 05:47:17'),
	(3, 'e236cb51-b375-4d8c-bf76-d099937358ac', 2, 'App\\Models\\Bin', '6184a08b5ebe0d41.png', '2022-08-08 05:49:43', '2022-08-08 05:49:43'),
	(4, '52542639-5f1e-4f3f-bde9-700431fedeb0', 3, 'App\\Models\\Bin', '8c6502f473a337b8.png', '2022-08-08 05:50:47', '2022-08-08 05:50:47'),
	(5, '6874f6f8-6b12-4e3b-91d5-00de21a531b5', 4, 'App\\Models\\Bin', '439b4f38955f256f.png', '2022-08-08 05:51:46', '2022-08-08 05:51:46'),
	(6, '679b1b60-25d9-44dd-80ea-81b3f45aad1e', 5, 'App\\Models\\Bin', '1d0f8e1ddd38c354.png', '2022-08-08 05:53:11', '2022-08-08 05:53:11');

-- Dumping structure for table pfandz_db1.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table pfandz_db1.migrations: ~0 rows (approximately)

-- Dumping structure for table pfandz_db1.oauth_access_tokens
CREATE TABLE IF NOT EXISTS `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `client_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_access_tokens_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table pfandz_db1.oauth_access_tokens: ~30 rows (approximately)
REPLACE INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
	('078d5ba29a773ecf5a86e62dd94023533856b98b54acb783b83d9e543d98e9f4e1e650ecfe426fa8', 2, 3, 'LaravelAuthApp', '[]', 0, '2022-07-11 06:01:04', '2022-07-11 06:01:04', '2023-07-11 11:31:04'),
	('093f3625c142cee1a40f5d48800e676ee9d1d8129704ed7d0ba1e5f477eca90e29f122f2238b87eb', 3, 3, 'LaravelAuthApp', '[]', 0, '2022-07-15 01:05:09', '2022-07-15 01:05:09', '2023-07-15 06:35:09'),
	('0cfa39a88d5202ac93dbc351561c1ba9c2d1fdb2d84cfda5301d54790a054a6bd672b8a6e5e4e71c', 2, 3, 'LaravelAuthApp', '[]', 0, '2022-07-11 06:55:54', '2022-07-11 06:55:54', '2023-07-11 12:25:54'),
	('144358b57193ecf1ab47700fa0fa550b788c25d88d9efb7fc501b4d89bbd84e0fc3c628cccd1f990', 2, 3, 'LaravelAuthApp', '[]', 0, '2022-07-11 06:52:11', '2022-07-11 06:52:11', '2023-07-11 12:22:11'),
	('18a804a4a1e72b5075b63567de185498862257677fab3bff4f68662525b09f2126bbce639b87a19a', 2, 3, 'LaravelAuthApp', '[]', 0, '2022-07-15 02:00:21', '2022-07-15 02:00:21', '2023-07-15 07:30:21'),
	('1f3466493516cef2d26dba7e651fda86a5ac450bd11a358be59692ad84d94816d5b59a31b9a7131b', 1, 3, 'LaravelAuthApp', '[]', 0, '2022-07-11 01:11:58', '2022-07-11 01:11:58', '2023-07-11 06:41:58'),
	('2656ea2cc89f3b67854d987ff82cf6277f292d50ed5148b72216b832c4a7a2c01baa362d02f31a89', 2, 3, 'LaravelAuthApp', '[]', 0, '2022-07-12 05:46:46', '2022-07-12 05:46:46', '2023-07-12 11:16:46'),
	('2e0fadf5723152743a3c77075bdd78e0ac43428fad5e19486dbc50714445d61d3ab295de6a633a6e', 2, 3, 'LaravelAuthApp', '[]', 0, '2022-07-12 05:45:26', '2022-07-12 05:45:26', '2023-07-12 11:15:26'),
	('2f55074d79d82bbc7c58417d2098c5e72eb025d7863b21859b0d40b0825441121a063917f2a6828a', 2, 3, 'LaravelAuthApp', '[]', 0, '2022-07-15 00:53:16', '2022-07-15 00:53:16', '2023-07-15 06:23:16'),
	('31220625801dc92b54c234dde41924102816c55131379f2cb32d2beaa6af797721e3253b480dad48', 3, 3, 'LaravelAuthApp', '[]', 0, '2022-08-04 06:38:16', '2022-08-04 06:38:16', '2023-08-04 12:08:16'),
	('3d9aa9b03cbc8ddbcda5a5d8d09dedec98b1dde9da1e699afa4bf56f9a8ca2c3272a45679dac1469', 2, 3, 'LaravelAuthApp', '[]', 0, '2022-07-15 00:57:28', '2022-07-15 00:57:28', '2023-07-15 06:27:28'),
	('4162074a530b0617d994716c9214576159a2236727f36902ba1d1a4d29c601a9737c8be026b352bc', 1, 3, 'LaravelAuthApp', '[]', 0, '2022-07-11 03:45:24', '2022-07-11 03:45:24', '2023-07-11 09:15:24'),
	('4607c6000e1986abe58b2181d5f1ae0be2cdd2e113ac83edea0e647d7410256423539ddd351acf05', 1, 3, 'LaravelAuthApp', '[]', 0, '2022-07-11 03:48:30', '2022-07-11 03:48:30', '2023-07-11 09:18:30'),
	('4bfffd0aba859f48470da5dcf20d173839797bf7a5d986fd2121070904e2b58cc8d12c26bf5835a5', 3, 3, 'LaravelAuthApp', '[]', 0, '2022-07-15 01:59:46', '2022-07-15 01:59:46', '2023-07-15 07:29:46'),
	('4e5fc7241d8a49eb067a1e2d38afc84eed9ada1b088aacd5a86ad4921a4a4645cedc20d9a0d63be9', 2, 3, 'LaravelAuthApp', '[]', 0, '2022-07-15 00:53:26', '2022-07-15 00:53:26', '2023-07-15 06:23:26'),
	('4f434075b3908da6383cee925c013a4990266c7187efaab7c9cff3d07289f1d12ba0e21c8ec7893e', 2, 3, 'LaravelAuthApp', '[]', 0, '2022-07-12 05:46:58', '2022-07-12 05:46:58', '2023-07-12 11:16:58'),
	('5d8685d5cccff720674644c824ec55cf9764da0f854dc6e593360846622a1010b39e443417e683e0', 2, 3, 'LaravelAuthApp', '[]', 0, '2022-07-15 00:02:32', '2022-07-15 00:02:32', '2023-07-15 05:32:32'),
	('5e83022feb938dacd352670faaa9aa180c63b94755cb0406912426abea01381fcc71d34260a337ca', 2, 3, 'LaravelAuthApp', '[]', 0, '2022-07-15 04:38:09', '2022-07-15 04:38:09', '2023-07-15 10:08:09'),
	('6b06270277dcc8a10a3dfe3509c52abe89fc6852164bb46ee1133bf7bf9521ea41a7d6a439e04326', 2, 3, 'LaravelAuthApp', '[]', 0, '2022-07-15 00:52:58', '2022-07-15 00:52:58', '2023-07-15 06:22:58'),
	('6fb1ef9a59c3ae9410d77ee967391ec5285b0ec826328fc64f24d50c698df9a6be511e682bd8c242', 2, 3, 'LaravelAuthApp', '[]', 0, '2022-07-15 00:53:21', '2022-07-15 00:53:21', '2023-07-15 06:23:21'),
	('7972c30f1457b6bd6cdacf13944f74db5011c45311344c21ec2cc884fb474342284aea0bc70228fa', 3, 3, 'LaravelAuthApp', '[]', 0, '2022-07-13 06:38:21', '2022-07-13 06:38:21', '2023-07-13 12:08:21'),
	('7b62dd00b6e09535a384f731c8ec9d902c5739c143f66d4cddaec18ad376999b2410c607009e1acd', 2, 3, 'LaravelAuthApp', '[]', 0, '2022-07-11 07:03:42', '2022-07-11 07:03:42', '2023-07-11 12:33:42'),
	('833ea038ae7a2346651ae51feffddb5d31cedf4450aba84b8dcf39b93d29934dfcb6195d9125265e', 2, 3, 'LaravelAuthApp', '[]', 0, '2022-07-11 07:23:42', '2022-07-11 07:23:42', '2023-07-11 12:53:42'),
	('8eb817e2d79940a261fa2f68f06214c9c4afd2e3d08432dca506e65b948d27eae5e75cc667edbbe7', 3, 3, 'LaravelAuthApp', '[]', 0, '2022-07-13 06:43:59', '2022-07-13 06:43:59', '2023-07-13 12:13:59'),
	('9422f61815df1129d7e17d641a19616a5d07ec67c6b00e8f787b1bf1f9bf140c79547324e9b498b3', 3, 3, 'LaravelAuthApp', '[]', 0, '2022-07-13 06:38:32', '2022-07-13 06:38:32', '2023-07-13 12:08:32'),
	('9e02f3cc1304ba653c418594f8e3504e81399a873024fbf669d41e15bb82accecdd72346838d5bdb', 2, 3, 'LaravelAuthApp', '[]', 0, '2022-07-15 01:27:44', '2022-07-15 01:27:44', '2023-07-15 06:57:44'),
	('d0d733cadef9f63a13e84e87afb7227a15b71142e6fdea0dacb1aa7f331eab864a234b59c654e4f4', 2, 3, 'LaravelAuthApp', '[]', 0, '2022-07-14 23:38:36', '2022-07-14 23:38:36', '2023-07-15 05:08:36'),
	('e31136d5c88d756ee4e4f4302f79ceffb41a457cbdd80ae4a9c0db53899ea65401c9ae768417a7ea', 2, 3, 'LaravelAuthApp', '[]', 0, '2022-07-14 23:43:20', '2022-07-14 23:43:20', '2023-07-15 05:13:20'),
	('eeb58e2e51481755cbc4f9b9268f17ac26b7f0de2ed01030f39b431f0e057b4c003a9d2eaacd3c60', 2, 3, 'LaravelAuthApp', '[]', 0, '2022-07-15 00:42:37', '2022-07-15 00:42:37', '2023-07-15 06:12:37'),
	('f5e0eae8f4a181e2ca0b76ae99b8e2402ffd1ec0a5043b5b5f522f2bc3cb9c058e66ae88bc5067e7', 1, 3, 'LaravelAuthApp', '[]', 0, '2022-07-11 03:43:13', '2022-07-11 03:43:13', '2023-07-11 09:13:13'),
	('f61b2454a45dec33f154f3c126bf3cbc85f363120fe21cde8ae7c03837afadbdb982a0254cb4fe97', 1, 3, 'LaravelAuthApp', '[]', 0, '2022-07-11 03:47:51', '2022-07-11 03:47:51', '2023-07-11 09:17:51'),
	('f6b3aa3c04a8015a426165f8323a9eb10c1c21f9ba30b2f4ae8952daf7bc990784ede68159dc4751', 3, 3, 'LaravelAuthApp', '[]', 0, '2022-08-08 06:18:27', '2022-08-08 06:18:27', '2023-08-08 11:48:27'),
	('f7c3f947c037d55e8e6756ab146e91a912684c64c08da27767226081df20e6f70d789b5cab21062c', 2, 3, 'LaravelAuthApp', '[]', 0, '2022-07-11 07:21:12', '2022-07-11 07:21:12', '2023-07-11 12:51:12');

-- Dumping structure for table pfandz_db1.oauth_auth_codes
CREATE TABLE IF NOT EXISTS `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `client_id` bigint(20) unsigned NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_auth_codes_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table pfandz_db1.oauth_auth_codes: ~0 rows (approximately)

-- Dumping structure for table pfandz_db1.oauth_clients
CREATE TABLE IF NOT EXISTS `oauth_clients` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_clients_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table pfandz_db1.oauth_clients: ~4 rows (approximately)
REPLACE INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
	(1, NULL, 'Laravel Personal Access Client', 'feETkGp1dJhMxs0GTpPHdxB8i29zOns0opn3D0Cs', NULL, 'http://localhost', 1, 0, 0, '2022-07-10 23:49:21', '2022-07-10 23:49:21'),
	(2, NULL, 'Laravel Password Grant Client', 'DZMQKr6nbYOwjvhkVBR1HkU2FrMcMucWKYS5Erqf', 'users', 'http://localhost', 0, 1, 0, '2022-07-10 23:49:21', '2022-07-10 23:49:21'),
	(3, NULL, 'Laravel Personal Access Client', 'CcbwMDFJFiMGBj8bXEnenaJDVmeGt0ECx1FTl6eE', NULL, 'http://localhost', 1, 0, 0, '2022-07-10 23:51:55', '2022-07-10 23:51:55'),
	(4, NULL, 'Laravel Password Grant Client', 'ZcnzQwfIPbd4LXYa1yhBHrwtTkrinPTDzhXgULw8', 'users', 'http://localhost', 0, 1, 0, '2022-07-10 23:51:55', '2022-07-10 23:51:55');

-- Dumping structure for table pfandz_db1.oauth_personal_access_clients
CREATE TABLE IF NOT EXISTS `oauth_personal_access_clients` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `client_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table pfandz_db1.oauth_personal_access_clients: ~2 rows (approximately)
REPLACE INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
	(1, 1, '2022-07-10 23:49:21', '2022-07-10 23:49:21'),
	(2, 3, '2022-07-10 23:51:55', '2022-07-10 23:51:55');

-- Dumping structure for table pfandz_db1.oauth_refresh_tokens
CREATE TABLE IF NOT EXISTS `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table pfandz_db1.oauth_refresh_tokens: ~0 rows (approximately)

-- Dumping structure for table pfandz_db1.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table pfandz_db1.password_resets: ~2 rows (approximately)
REPLACE INTO `password_resets` (`email`, `token`, `created_at`, `updated_at`) VALUES
	('demo111111@yopmail.com', '$2y$10$qSFnl3yr//MKhOHpCTX03OWAwBSlInBtRBcGB1b3YC3RIjkBYDVw6', '2022-08-08 05:35:42', NULL),
	('demo222222@yopmail.com', '$2y$10$d8Uckvd1268AUEDbEv8x7.h/6oOGnhB1x02z57aKbeDW.IAzK36TO', '2022-08-08 05:38:29', NULL);

-- Dumping structure for table pfandz_db1.problems
CREATE TABLE IF NOT EXISTS `problems` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table pfandz_db1.problems: ~1 rows (approximately)
REPLACE INTO `problems` (`id`, `title`, `remark`, `created_at`, `updated_at`) VALUES
	(1, 'Hello', 'Hello', '2022-08-08 07:02:52', '2022-08-08 07:02:52');

-- Dumping structure for table pfandz_db1.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table pfandz_db1.roles: ~2 rows (approximately)
REPLACE INTO `roles` (`id`, `role`, `created_at`, `updated_at`) VALUES
	(1, 'Admin', '2022-07-27 07:05:21', '2022-07-27 07:05:21'),
	(2, 'Club', '2022-07-27 07:05:21', '2022-07-27 07:05:21'),
	(3, 'User', '2022-07-27 07:06:02', '2022-07-27 07:06:02');

-- Dumping structure for table pfandz_db1.testimonials
CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `headline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table pfandz_db1.testimonials: ~7 rows (approximately)
REPLACE INTO `testimonials` (`id`, `name`, `text`, `headline`, `logo`, `position`, `image`) VALUES
	(1, 'Daniel Fink', 'Sehr gerne unterstützen wir den Straßenkreuzer e.V. durch die Finanzierung von zwei Pfandtonnen. Das Pfandnetzwerk bietet eine moderne Möglichkeit der nachhaltigen Entsorgung in Kombination mit sozialer Integration, super!', 'Moderne, nachhaltige Entsorgung', 'https://pfandnetzwerk.de/assets/img/brand/2.png', 'Geschäftsführer', 'https://pfandnetzwerk.de/assets/img/avatar/df.jpg'),
	(2, 'Walter Grzesiek', 'Erst Airport, dann Berufsschulen, und nun erobern die \nersten Leergut-Behälter öffentliche Bereiche wie den\nHauptbahnhof: Das Pfandprojekt des Straßenkreuzers\nwächst. Das stärkt solidarisches Handeln, sichert eine\nbessere Recyclingquote – und Arbeitsplätze.', 'Sichert Recycling & Arbeitsplätze', 'https://pfandnetzwerk.de/assets/img/brand/5.png', 'Vorstand', 'https://pfandnetzwerk.de/assets/img/avatar/sk.jpg'),
	(3, 'Oliver Pazsch', 'Bei der UmweltBank arbeiten wir jeden Tag daran, eine lebenswerte Welt für uns und kommende Generationen zu schaffen. Wir unterstützen das Pfandnetzwerk, denn es trägt zum Umweltschutz bei, schafft Arbeitsplätze und hilft Menschen in sozialer Not. Kurzum: Ein herausragendes Beispiel, wie man die Welt grüner und zugleich gerechter gestalten kann.', 'Für eine lebenswerte Welt', 'https://pfandnetzwerk.de/assets/img/brand/3.png', 'Pressesprecher', 'https://pfandnetzwerk.de/assets/img/avatar/uwb.jpg'),
	(4, 'Lorenz Schreiber', 'Es freut uns, dass Edelstahl-Trinkflaschen immer beliebter werden. Kauft man unterwegs doch mal vereinzelt Plastikflaschen, dann ist entscheidend was nach dem Austrinken damit passiert… Das Pfandnetzwerk zeigt vorbildlich, wie man Nachhaltigkeit und Soziales miteinander verbinden kann. Pionierleistung, die wir gerne unterstützen!', 'Wenn Plastikflaschen – dann so!', 'https://pfandnetzwerk.de/assets/img/brand/1.png', 'Co-Founder', 'https://pfandnetzwerk.de/assets/img/avatar/ls.jpg'),
	(5, 'Christian Vogel', 'Mehr Recycling von Wertstoffen sowie eine eigenverantwortliche, sinnstiftende und vor allem eine bezahlte Tätigkeit für die Ehrenamtlichen vom Straßenkreuzer e.V. -  es ist eine Win-Win-Situation, die das Pfandnetzwerk anstößt. Die ersten Schritte sind immer die schwierigsten, deshalb unterstützt die Stadt Nürnberg Herrn Overweg gerne und hofft, dass das Konzept bei Sponsoren und natürlich der Bürgerschaft gut ankommt und gut angenommen wird!\n', 'Weniger Müll auf Nürnbergs Straßen', 'https://pfandnetzwerk.de/assets/img/brand/7.png', 'Bürgermeister', 'https://pfandnetzwerk.de/assets/img/avatar/cv.jpg'),
	(6, 'Johannes Hanek', 'Für uns, Meusel & Beck, ist es eine Ehre, als Partner dabei sein zu dürfen. Wir unterstützen mit Freuden jene, die dank des Projektes ihr bescheidenes Einkommen aufbessern können. Wir dienen gerne der Umwelt, dazu fühlen wir uns seit jeher verpflichtet. Und nicht zuletzt freuen wir uns, wenn jemand unsere technischen Fertigkeiten auf ein spannendes, sozial geprägtes Projekt anwendet. Dafür geben wir gerne unseren guten Namen.', 'Wir unterstützen mit Freuden', 'https://pfandnetzwerk.de/assets/img/brand/8.png', 'Geschäftsführer', 'https://pfandnetzwerk.de/assets/img/avatar/jh.jpg'),
	(7, 'Heiko Linder', 'Wir unterstützen das Pfandnetzwerk gerne. Wir stehen für eine regionale und ganzheitliche Energiewende. Da passt die gelebte Nachhaltigkeit des Pfandnetzwerks - weniger Plastikmüll verbunden mit der Unterstützung eines guten Zwecks vor Ort –  wunderbar zu uns und unserer Philosophie.', 'Das passt zu unserer Philosophie!', 'https://pfandnetzwerk.de/assets/img/brand/9.png', 'Leiter Konzernkommunikation', 'https://pfandnetzwerk.de/assets/img/avatar/hl.png');

-- Dumping structure for table pfandz_db1.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `club_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` enum('En','De') COLLATE utf8mb4_unicode_ci DEFAULT 'De',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table pfandz_db1.users: ~3 rows (approximately)
REPLACE INTO `users` (`id`, `role_id`, `club_id`, `name`, `email`, `profile_image`, `language`, `email_verified_at`, `password`, `phone`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 1, NULL, 'Admin', 'admin@111yopmail.net', NULL, 'De', NULL, '$2y$10$D/RihQAUj9gWzvF0jGuU9eG2ZWnxeY5OkCJKWFMRV5ui8vTGmwyJe', NULL, 1, NULL, '2022-08-08 05:30:58', '2022-08-08 05:39:55'),
	(2, 2, NULL, 'Rajpath', 'demo111111@yopmail.com', '', 'De', NULL, '$2a$10$BNCpNXxnehMUPHTuQJ9Lm./c3D5HdE.KgOesT1eJYN.PejFXXhcLe', '8487906883', 0, NULL, '2022-08-08 05:35:42', '2022-08-08 06:24:21'),
	(3, 3, 2, 'Hardik', 'demo2221111@yopmail.com', '1659959661.png\n', 'De', NULL, '$2a$10$m6W0g.3aHrpPSILYHputz.xZV9dH.l6ItGDivb1DaBoHlhjKoLcrG', '546464621', 1, NULL, '2022-08-08 05:38:29', '2022-08-08 06:22:26');

-- Dumping structure for table pfandz_db1.user_actions
CREATE TABLE IF NOT EXISTS `user_actions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bin_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `type` enum('empty','report_amount','report_problem','new_location') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `old_bag_id` int(11) DEFAULT NULL,
  `new_bag_id` int(11) DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disposable_bottles` int(11) DEFAULT NULL,
  `returnable_bottles` int(11) DEFAULT NULL,
  `no_deposite_bottles` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table pfandz_db1.user_actions: ~1 rows (approximately)
REPLACE INTO `user_actions` (`id`, `uuid`, `bin_id`, `user_id`, `type`, `old_bag_id`, `new_bag_id`, `remark`, `disposable_bottles`, `returnable_bottles`, `no_deposite_bottles`, `created_at`, `updated_at`) VALUES
	(1, '1df94f47-db4d-4093-b674-9ef34c4733f5', 1, 3, 'report_amount', 1, NULL, 'Hello', 10, 10, 10, '2022-08-08 07:00:44', '2022-08-08 07:00:44');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
