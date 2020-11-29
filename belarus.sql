-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Ноя 29 2020 г., 21:36
-- Версия сервера: 10.4.14-MariaDB
-- Версия PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `belarus`
--

-- --------------------------------------------------------

--
-- Структура таблицы `catalogs`
--

CREATE TABLE `catalogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `catalogs`
--

INSERT INTO `catalogs` (`id`, `name`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Образование', NULL, NULL, NULL),
(2, 'Правоохранительные органы', NULL, NULL, NULL),
(3, 'Бизнес', NULL, NULL, NULL),
(4, 'Искусство', NULL, NULL, NULL),
(5, 'Здравоохранение', NULL, NULL, NULL),
(6, 'Спорт', NULL, NULL, NULL),
(7, 'Информационные технологии', NULL, NULL, NULL),
(8, 'Журналистика', NULL, NULL, NULL),
(9, 'Нетрудоустроенный', NULL, NULL, NULL),
(10, 'Общественная деятельность', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `candidat_id` int(11) NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `candidat_id`, `body`, `status`, `created_at`, `updated_at`) VALUES
(1, 6, 'Самозванец!!!', NULL, '2020-11-28 22:13:30', '2020-11-28 22:13:30'),
(2, 6, 'Анафема', NULL, '2020-11-28 22:20:24', '2020-11-28 22:20:24');

-- --------------------------------------------------------

--
-- Структура таблицы `condidats`
--

CREATE TABLE `condidats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `who_is` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `how_is` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_rod` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `counts` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `condidats`
--

INSERT INTO `condidats` (`id`, `name`, `who_is`, `how_is`, `date_rod`, `user_id`, `picture`, `color`, `status`, `counts`, `created_at`, `updated_at`) VALUES
(2, 'Алексей Самусенко', '<p>был задержан 5 ноября в рамках уголовного дела по ст. 342 УК (действия, грубо нарушающие общественный порядок). У него дома был проведен обыск. За два дня до этого был задержан брат Алексея Ким Самусенко.</p>\r\n\r\n<p>Алексею предъявили обвинение по ст. 342 УК РБ, он помещен в СИЗО-1 на ул. Володарского.</p>', 'Адрес: СИЗО-1, ул. Володарского, 2, г. Минск, 220030', '5', 1, '20_11_26_04_29_28.jpg', NULL, '5', NULL, '2020-11-26 13:29:28', '2020-11-26 13:29:28'),
(3, 'Дарья Чульцова', '<p>Журналистка телеканала &quot;Белсат&quot;. Вместе с журналисткой Екатериной Андреевой стала фигурантками уголовного дела об организации действий, грубо нарушающих общественный порядок (ст. 342 УК), после прямого эфира с места жестокого разгона силовиками демонстрантов на &quot;площади перемен&quot; в Минске 15 ноября.</p>\r\n\r\n<p>После административного ареста она не вышла на свободу.</p>\r\n\r\n<p><a href=\"https://ca.weboproxy.com/index.php?q=nqTYqdSbYWaooafKpp-fnGOiqslnptZopJbYqJJpaGZraJw\">Заявление о признании политзаключенной</a></p>\r\n\r\n<p><strong>День рождения: 20 февраля 1997 года</strong></p>', 'Адрес: СИЗО, ул. Советская, 22А, г. Жодино, 222163', '8', 1, '20_11_26_05_33_23.jpg', NULL, '5', NULL, '2020-11-26 14:33:23', '2020-11-26 14:33:23'),
(4, 'Екатерина Андреева (Бахвалова)', '<p>Журналистка телеканала &quot;Белсат&quot;. Вместе с журналисткой Дарьей Чульцовой стала фигурантками уголовного дела об организации действий, грубо нарушающих общественный порядок (ст. 342 УК), после прямого эфира с места жестокого разгона силовиками демонстрантов на &quot;площади перемен&quot; в Минске 15 ноября.</p>\r\n\r\n<p>После семи суток административного ареста она не вышла на свободу. Екатерину перевели в изолятор в Жодино.</p>\r\n\r\n<p><a href=\"https://ca.weboproxy.com/index.php?q=nqTYqdSbYWaooafKpp-fnGOiqslnptZopJbYqJJpaGZraJw\">Заявление о признании политзаключенной</a></p>', 'Адрес: СИЗО, ул. Советская, 22А, г. Жодино, 222163', '8', 1, '20_11_26_05_46_50.jpg', NULL, '5', NULL, '2020-11-26 14:46:50', '2020-11-26 14:46:50'),
(5, 'Хорошко Виталий Викторович', '<p>Заведующий кафедрой ПИКС БГУИР</p>\r\n\r\n<p>Уличён в необоснованных отчислениях студентов, а также увольнении несогласных преподавателей.</p>', 'Тел.: 86-01, 293-86-01, \r\nE-mail: khoroshko1986@gmail.com', '1', 1, '20_11_26_06_04_29.jpg', NULL, '2', NULL, '2020-11-26 15:04:29', '2020-11-26 15:04:29'),
(6, 'Лукашенко Александр Григорьевич', '<p>Самопровозглашенный.</p>', 'Контактов с этим человеком нет.', '9', 1, '20_11_26_06_18_47.jpg', NULL, '2', NULL, '2020-11-26 15:18:47', '2020-11-26 15:18:47'),
(7, 'Агафонов Александр Дмитриевич', '<p>Начальник управления экономики</p>\r\n\r\n<p>Является руководителем следственной группы по делу Тихановского, &laquo;вагнеровцев&raquo;, Статкевича и массовым беспорядкам, им выносились постановления о привлечении в качестве обвиняемого в отношении фигурантов. Ранее отстранялся от должности и понижался в связи с крупными взятками в его управлении.</p>', 'Адрес Центральный аппарат следственного комитета: 	Минск, ул. Фрунзе 19', '2', 1, '20_11_29_01_47_30.jpg', NULL, '2', NULL, '2020-11-28 22:47:30', '2020-11-28 22:47:30'),
(8, 'Асовик Павел Владимирович', '<p>ОМОН УВД Минского облисполкома. 12.09.2020 участвовал в задержаниях мирных девушек на Женском марше в Минске, ранее лжесвидетельствовал в суде.</p>', 'Адрес работодателя: 	Минск, ул. Кальварийская 29<br />\r\nЛичный номер телефона: 	375447342177<br />\r\nЭл. почта: 	pasha9427@mail.ru<br />\r\nВКонтакте: 	https://vk.com/id69366851<br />', '2', 1, '20_11_29_01_52_52.jpg', NULL, '2', NULL, '2020-11-28 22:52:53', '2020-11-28 22:52:53'),
(9, 'Лихачевский Дмитрий Викторович', '<p>Кандидат технических наук, доцент.</p>\r\n\r\n<p>Уличён в растратах бюджетных средств.</p>\r\n\r\n<p>Отчислял студентов по политическим мативам.</p>', 'Адрес: г.Минск, Бровки 4, аудитория 314, 2 корпус БГУИР <br />\r\nТелефон: +375 17 293-85-83 <br />\r\ne-mail: likhachevskyd@bsuir.by <br />', '1', 1, '20_11_29_01_44_42.jpg', NULL, '2', NULL, '2020-11-29 10:44:42', '2020-11-29 10:44:42'),
(10, 'Тихановская Светлана Георгиевна', '<p>Законный президент Республики Беларусь</p>', 'https://twitter.com/strana888', '10', 1, '20_11_29_02_40_33.jpg', NULL, '3', 1, '2020-11-29 11:40:34', '2020-11-29 11:41:14'),
(11, 'Ермошина Лидия Михайловна', '<p>Главный фальсификатор страны. Организовывала фальсификации на выборах на протяжении всего срока правления А.Г.Лукашенко.</p>', 'Контактов с этим человеком нет', '10', 1, '20_11_29_09_44_39.jpg', NULL, '2', NULL, '2020-11-29 18:44:39', '2020-11-29 18:44:39'),
(12, 'Тихановский Сергей Леонидович', '<p>По надуманному поводу был арестован, с целью недопустить до участия в выборах президента 2020.</p>', 'https://www.youtube.com/channel/UCFPC7r3tWWXWzUIROLx46mg', '8', 1, '20_11_29_10_22_02.jpg', NULL, '5', NULL, '2020-11-29 19:22:02', '2020-11-29 19:22:02'),
(13, 'Колесникова Мария Александровна', '<p>7 сентября похищена неизвестными в центре Минска. Утром 8 сентября появилась информация о том, что Марию Колесникову пытались насильно депортировать из Беларуси в Украину, но она порвала свой паспорт и снова была задержана. В последствии - арестована</p>', 'https://www.facebook.com/maria.kalesnikava, https://www.linkedin.com/in/maria-kalesnikava-35a110136/, https://twitter.com/by_kalesnikava', '10', 1, '20_11_29_11_35_39.jpg', NULL, '5', NULL, '2020-11-29 20:35:39', '2020-11-29 20:35:39');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `maintexts`
--

CREATE TABLE `maintexts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang` enum('by','ru','en','fr') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ru',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catalog` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `maintexts`
--

INSERT INTO `maintexts` (`id`, `name`, `body`, `url`, `lang`, `status`, `picture`, `catalog`, `user_id`, `created_at`, `updated_at`) VALUES
(7, 'Дед Добрей', '<div align=\"center\">\r\n<img src=\"/arts/ded/temp_2.gif\">\r\n<br />\r\n</div>\r\n<p align=\"center\">\r\n<img src=\"/arts/ded/test.jpg\" />\r\n</p>\r\n<p align=\"center\">\r\n<img src=\"/arts/ded/test_2.jpg\" />\r\n</p>\r\n<p align=\"center\">\r\n<img src=\"/arts/ded/test_3.jpg\" />\r\n</p>\r\n<p align=\"center\">\r\n<img width=\"100%\" src=\"/arts/ded/test_4.jpg\" />\r\n</p>', 'ded_dobrey', 'ru', NULL, '20_11_01_12_24_38.jpg', NULL, 1, '2020-10-31 21:24:39', '2020-10-31 21:24:39');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_06_20_210813_create_condidats_table', 1),
(5, '2020_07_08_090158_create_vote_users_table', 1),
(6, '2020_10_10_164421_create_maintexts_table', 2),
(7, '2020_11_01_101719_create_catalogs_table', 3),
(8, '2020_11_26_154614_create_statuses_table', 3),
(9, '2020_11_29_010434_create_comments_table', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `statuses`
--

CREATE TABLE `statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `statuses`
--

INSERT INTO `statuses` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Просто хороший человек', NULL, NULL),
(2, 'Чёрный список', NULL, NULL),
(3, 'Кандидат в президенты', NULL, NULL),
(4, 'Парламентёр', NULL, NULL),
(5, 'Политический заключенный', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mikhalkevich', 'mikhalkevich@ya.ru', NULL, '$2y$10$2b7TxyOd7FFLwa2nvPeXY.427dan4VGtkavoS6FwPH.IWqO0414TW', NULL, '2020-10-10 13:17:08', '2020-10-10 13:17:08');

-- --------------------------------------------------------

--
-- Структура таблицы `vote_users`
--

CREATE TABLE `vote_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `condidat_id` int(11) NOT NULL,
  `cookie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `vote_users`
--

INSERT INTO `vote_users` (`id`, `condidat_id`, `cookie`, `ip`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, '+', '127.0.0.1', 1, '2020-10-31 20:33:33', '2020-10-31 20:33:33'),
(2, 1, '+', '127.0.0.1', 1, '2020-10-31 21:09:48', '2020-10-31 21:09:48'),
(3, 10, '+', '127.0.0.1', 1, '2020-11-29 11:41:14', '2020-11-29 11:41:14'),
(4, 1, '-', '127.0.0.1', 1, '2020-11-29 11:41:26', '2020-11-29 11:41:26');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `catalogs`
--
ALTER TABLE `catalogs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `condidats`
--
ALTER TABLE `condidats`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `maintexts`
--
ALTER TABLE `maintexts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Индексы таблицы `vote_users`
--
ALTER TABLE `vote_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `catalogs`
--
ALTER TABLE `catalogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `condidats`
--
ALTER TABLE `condidats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `maintexts`
--
ALTER TABLE `maintexts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `vote_users`
--
ALTER TABLE `vote_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
