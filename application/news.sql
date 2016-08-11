-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.5.48 - MySQL Community Server (GPL)
-- ОС Сервера:                   Win32
-- HeidiSQL Версия:              9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп структуры базы данных news
CREATE DATABASE IF NOT EXISTS `news` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `news`;


-- Дамп структуры для таблица news.news
CREATE TABLE IF NOT EXISTS `news` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `slug` varchar(50) NOT NULL,
  `time_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `category` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `image_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID` (`ID`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы news.news: ~8 rows (приблизительно)
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` (`ID`, `title`, `content`, `slug`, `time_update`, `category`, `image_name`) VALUES
	(1, 'Новость 1', 'Это первая новость. Об установке бутстрапа. Перед скачиванием убедитесь что у Вас имеется удобный редактор кода (мы рекомендуем Sublime Text 2), а так же какое-либо понимание и знание технологий HTML и CSS. Здесь мы не дадим описание исходных файлов, но они находятся в свободном доступе на GitHub.', 'novost_1_', '2016-08-10 17:42:04', 4, NULL),
	(2, 'Топ-5 книг по саморазвитию (с картинкой)', '1. Тина Силиг. «Сделай себя сам»\r\n\r\nЭта книга будет полезна, прежде всего, тем, кто хочет создать свой бизнес, поддерживать его и развивать: «Сделай себя сам» не только содержит практические советы, но и помогает научиться думать в правильном ключе — так, как думают настоящие предприниматели.\r\n\r\nКнига учит не принимать сложности, вроде отсутствия стартового капитала, как непреодолимое препятствие, но рассматривать их как стимул для самосовершенствования, как вехи на пути к тому «себе», каким вы хотите стать — успешному, уверенному в себе человеку, который видит возможности, предоставляемые ему окружающим миром, и может применять их по своему усмотрению. Нет идеи? Книга поможет её найти. Опускаются руки? Книга подскажет, где взять энергию и энтузиазм, необходимые для начала карьеры бизнесмена, и как использовать своё воображение по максимуму.\r\n\r\n2. Келли Макгонигал. «Сила воли»\r\n\r\nКелли Макгонигал в своей книге помогает воспитать и укрепить силу воли, её методика подходит для каждого человека. Вниманию читателя предлагается десятинедельный курс, в ходе которого он, выполняя практические задания и следуя указанным в книге рекомендациям, сможет лучше понять свои возможности — иными словами, осознать, что способен на всё, чего сам захочет: избавиться от вредной привычки, создать собственный бизнес, заняться спортом или найти работу, которая станет любимой. Строго следовать всем рекомендациям необязательно: вы можете найти и применять в своей жизни методику, подходящую именно вам.\r\n\r\nКроме того, книга может научить держать себя в руках тогда, когда это особенно трудно, и управлять своими эмоциями и желаниями, когда это необходимо.\r\n\r\n3. Нейл Фьоре. «Легкий способ перестать откладывать дела на потом»\r\n\r\nКнига содержит в первую очередь советы о том, как бороться с прокрастинацией — постоянным откладыванием на потом неприятных мыслей и дел, которые совсем не хочется делать, несмотря на явную необходимость. Многие люди в современном мире действительно склонны поступать подобным образом, и в итоге, прилагая неимоверные усилия, делают всё за один день. Результатом часто становится не удовлетворение, а, напротив, стресс и полнейшее нежелание двигаться дальше.\r\n\r\n4. Лес Хьюитт, Джек Кэнфилд, Марк Виктор Хансен. «Цельная жизнь»\r\n\r\nЧасто основной трудностью в достижении своих целей является неумение расставлять приоритеты — определять для себя цель и планировать шаги для её осуществления. Кроме того, книга поможет понять, какие из намеченных целей действительно важны и могут помочь вам в будущем, а от каких стоит отказаться, поскольку ничего полезного они в себе не несут.\r\n\r\nДругой камень преткновения-то, что, поставив перед собой цель, человек не всегда может найти время для её осуществления или же, напротив, с головой погружается в работу, забывая об отдыхе и личной жизни. Книга содержит методики, помогающие находить время на всё и в равной степени наслаждаться всеми аспектами жизни.\r\n\r\n5. М. Дж. Райн. «В этом году я…»\r\n\r\n«В этом году я…» — ещё одна книга о том, как повысить вашу эффективность. Если вы опасаетесь перемен в своей жизни, в книге вы найдёте полезные советы о том, как преодолеть свой страх и научиться наслаждаться переменами. Благодаря изложенным в книге советам вкупе с практическими методиками и иллюстрациями из жизни людей, у которых получилось сделать свою жизнь именно такой, как они хотят, любой человек может понять свои собственные уникальные преимущества, научиться использовать их себе во благо и сделать свою жизнь во всех смыслах богаче и интереснее, осуществить планы и исполнить мечты.\r\n\r\n"Спасибо за внимание!', 'top-5_knig_po_samorazvitiyu_%28s_kartinkoy%29', '2016-08-10 17:51:06', 4, 'CjUJxqgtweE1.jpg'),
	(3, 'Новость категории криминал 1', 'Новость категории криминал 1', 'novost_kategorii_kriminal_1', '2016-08-10 17:59:36', 3, NULL),
	(4, 'Новость категории криминал 2', 'Новость категории криминал 2', 'novost_kategorii_kriminal_2', '2016-08-10 17:59:50', 3, NULL),
	(5, 'Новость категории криминал 3', 'Новость категории криминал 3', 'novost_kategorii_kriminal_3', '2016-08-10 17:59:59', 3, NULL),
	(6, 'Новость категории криминал 4', 'Новость категории криминал 4', 'novost_kategorii_kriminal_4', '2016-08-10 18:00:07', 3, NULL),
	(7, 'Новость категории криминал 5', 'Новость категории криминал 5', 'novost_kategorii_kriminal_5', '2016-08-10 18:00:15', 3, NULL),
	(8, 'Новость категории криминал 6', 'Новость категории криминал 6', 'novost_kategorii_kriminal_6', '2016-08-10 18:00:27', 3, NULL);
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
