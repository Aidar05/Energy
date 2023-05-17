-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 17 2023 г., 07:25
-- Версия сервера: 10.4.28-MariaDB
-- Версия PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `user`
--

-- --------------------------------------------------------

--
-- Структура таблицы `russian`
--

CREATE TABLE `russian` (
  `id` int(10) NOT NULL,
  `word` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `number` int(100) NOT NULL,
  `id` int(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `record` varchar(100) NOT NULL,
  `wpm` varchar(100) DEFAULT NULL,
  `accuracy` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`number`, `id`, `login`, `password`, `name`, `record`, `wpm`, `accuracy`) VALUES
(1, 604874, 'hdvdj', '202cb962ac59075b964b07152d234b70', 'alikek', '136', '1', '100'),
(2, 358102, 'alikek', 'c8ffe9a587b126f152ed3d89a146b445', 'alikek', '114', '1', '100'),
(5, 844402, 'aset', '202cb962ac59075b964b07152d234b70', 'fowake', '130', '27', '100'),
(7, 890037, 'medet', '202cb962ac59075b964b07152d234b70', '4got10', '110', '27', '96'),
(8, 671014, 'edlbek', '202cb962ac59075b964b07152d234b70', 'nomad', '105', '1', '100'),
(10, 895617, 'azamat', '202cb962ac59075b964b07152d234b70', 'ananas', '109', '2', '100'),
(11, 805515, 'dastan', '202cb962ac59075b964b07152d234b70', 'mahmud', '111', '2', '100'),
(12, 876414, 'pqixel', '202cb962ac59075b964b07152d234b70', 'добросовестный', '111', '2', '100'),
(13, 905098, 'нурхан', '202cb962ac59075b964b07152d234b70', 'krytxy', '110', '1', '100'),
(14, 412937, 'danik', '202cb962ac59075b964b07152d234b70', 'qdero', '109', '2', '100'),
(15, 506299, 'sayat', '202cb962ac59075b964b07152d234b70', 'mogus', '106', '1', '100'),
(17, 300358, 'alikekhdvdj', '202cb962ac59075b964b07152d234b70', 'alikek', '136', '25', '100'),
(19, 114940, 'aiz', '202cb962ac59075b964b07152d234b70', 'aiz', '128', '27', '100'),
(20, 225124, 'qqqqqverc', '202cb962ac59075b964b07152d234b70', 'обганяла', '140', '26', '93');

-- --------------------------------------------------------

--
-- Структура таблицы `words`
--

CREATE TABLE `words` (
  `id` int(11) NOT NULL,
  `word` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `words`
--

INSERT INTO `words` (`id`, `word`) VALUES
(1, 'hello'),
(2, 'world'),
(3, 'and'),
(4, 'something'),
(5, 'other'),
(6, 'you'),
(7, 'like'),
(8, 'new'),
(9, 'year'),
(10, 'after'),
(11, 'pretty'),
(12, 'grand'),
(13, 'volume'),
(14, 'draw'),
(15, 'coach'),
(16, 'provide'),
(17, 'with'),
(18, 'condition'),
(19, 'land'),
(20, 'scope'),
(21, 'craft'),
(22, 'worth'),
(23, 'familiar'),
(24, 'tap'),
(25, 'column'),
(26, 'chest'),
(27, 'include'),
(28, 'point'),
(29, 'celebrate'),
(30, 'abuse'),
(31, 'duck'),
(32, 'root'),
(33, 'cable'),
(34, 'intelligent'),
(35, 'human'),
(36, 'width'),
(37, 'quarter'),
(38, 'height'),
(39, 'amount'),
(40, 'size'),
(41, 'select'),
(42, 'delete'),
(43, 'wide'),
(44, 'expose'),
(45, 'link'),
(46, 'open'),
(47, 'white'),
(48, 'example'),
(49, 'owe'),
(50, 'think'),
(51, 'value'),
(52, 'miss'),
(53, 'field'),
(54, 'accelerate'),
(55, 'steel'),
(56, 'bring'),
(57, 'penalty'),
(58, 'matter'),
(59, 'poverty'),
(60, 'race'),
(61, 'lead'),
(62, 'condition'),
(63, 'squeeze'),
(64, 'bow'),
(65, 'punish'),
(66, 'purple'),
(67, 'witness'),
(68, 'grade'),
(69, 'pipe'),
(70, 'suspect'),
(71, 'liquid'),
(72, 'bold'),
(73, 'case'),
(74, 'waste'),
(75, 'difficulty'),
(76, 'ticket'),
(77, 'flow'),
(78, 'approve'),
(79, 'first'),
(80, 'rope'),
(81, 'feature'),
(82, 'far'),
(83, 'drum'),
(84, 'table'),
(85, 'indeed'),
(86, 'horse'),
(87, 'hostile'),
(88, 'option'),
(89, 'make'),
(90, 'fun'),
(91, 'chop'),
(92, 'general'),
(93, 'awake'),
(94, 'perform'),
(95, 'gentle'),
(96, 'beyond'),
(97, 'deal'),
(98, 'delay'),
(99, 'raise'),
(100, 'start'),
(101, 'below'),
(102, 'climb'),
(103, 'crash'),
(104, 'tell'),
(105, 'follow'),
(106, 'neighbour'),
(107, 'see'),
(108, 'tear'),
(109, 'watch'),
(110, 'seek'),
(111, 'naked'),
(112, 'wear'),
(113, 'grain'),
(114, 'swear'),
(115, 'grave'),
(116, 'pile'),
(117, 'surface'),
(118, 'innocent'),
(119, 'curious'),
(120, 'honey'),
(121, 'match'),
(122, 'equip'),
(123, 'island'),
(124, 'nuclear'),
(125, 'inner'),
(126, 'outer'),
(127, 'spin'),
(128, 'dry'),
(129, 'brick'),
(130, 'move'),
(131, 'garlic'),
(132, 'plant'),
(133, 'victim'),
(134, 'issue'),
(135, 'pound'),
(136, 'candy'),
(137, 'care'),
(138, 'matter'),
(139, 'thank'),
(140, 'cup'),
(141, 'complain'),
(142, 'tap'),
(143, 'cup'),
(144, 'array'),
(145, 'shelter'),
(146, 'привет'),
(147, 'мир'),
(148, 'также'),
(149, 'что'),
(150, 'другое'),
(151, 'ты'),
(152, 'нравиться'),
(153, 'новый'),
(154, 'год'),
(155, 'после'),
(156, 'довольно'),
(157, 'великий'),
(158, 'звук'),
(159, 'рисунок'),
(160, 'тренер'),
(161, 'провести'),
(162, 'вместе'),
(163, 'продув'),
(164, 'земля'),
(165, 'прицел'),
(166, 'строительство'),
(167, 'стоит'),
(168, 'знакомый'),
(169, 'нажать'),
(170, 'столб'),
(171, 'спина'),
(172, 'включать'),
(173, 'мнение'),
(174, 'отмечать'),
(175, 'использовать'),
(176, 'сесть'),
(177, 'права'),
(178, 'кабель'),
(179, 'интеллект'),
(180, 'человек'),
(181, 'ширина'),
(182, 'квартет'),
(183, 'высота'),
(184, 'количество'),
(185, 'размер'),
(186, 'выбрать'),
(187, 'удалить'),
(188, 'если'),
(189, 'взорвать'),
(190, 'ссылка'),
(191, 'открыть'),
(192, 'белый'),
(193, 'пример'),
(194, 'иметь'),
(195, 'думать'),
(196, 'значение'),
(197, 'промазать'),
(198, 'поле'),
(199, 'ускорение'),
(200, 'сталь'),
(201, 'принести'),
(202, 'штраф'),
(203, 'matter'),
(204, 'чистота'),
(205, 'гонка'),
(206, 'лидер'),
(207, 'воздуч'),
(208, 'зажимать'),
(209, 'лук'),
(210, 'наказать'),
(211, 'фиолетовый'),
(212, 'мокрый'),
(213, 'класс'),
(214, 'труба'),
(215, 'подозреваемый'),
(216, 'уничтожить'),
(217, 'лысый'),
(218, 'ключ'),
(219, 'трата'),
(220, 'сложность'),
(221, 'билет'),
(222, 'летать'),
(223, 'доказать'),
(224, 'первый'),
(225, 'верёвка'),
(226, 'будущее'),
(227, 'далеко'),
(228, 'удар'),
(229, 'стул'),
(230, 'внутри'),
(231, 'лошадь'),
(232, 'отель'),
(233, 'функция'),
(234, 'сделать'),
(235, 'весело'),
(236, 'резать'),
(237, 'главный'),
(238, 'встать'),
(239, 'предпочитать'),
(240, 'нежный'),
(241, 'сзади'),
(242, 'сделка'),
(243, 'исправить'),
(244, 'встать'),
(245, 'начинание'),
(246, 'рядом'),
(247, 'вверх'),
(248, 'разить'),
(249, 'сказать'),
(250, 'преследование'),
(251, 'сосед'),
(252, 'взгляд'),
(253, 'слеза'),
(254, 'наблюдение'),
(255, 'охота'),
(256, 'голый'),
(257, 'одежда'),
(258, 'рост'),
(259, 'мольба'),
(260, 'могила'),
(261, 'лекарство'),
(262, 'поверхность'),
(263, 'невмнный'),
(264, 'мелкий'),
(265, 'дорогой'),
(266, 'поиск'),
(267, 'снаряжение'),
(268, 'остров'),
(269, 'взрыв'),
(270, 'кора'),
(271, 'дерево'),
(272, 'круг'),
(273, 'пустыня'),
(274, 'кирпич'),
(275, 'движение'),
(276, 'репчатый'),
(277, 'растение'),
(278, 'избранный'),
(279, 'желание'),
(280, 'фунт'),
(281, 'конфета'),
(282, 'волна'),
(283, 'важно'),
(284, 'спасибо'),
(285, 'кружка'),
(286, 'обьяснение'),
(287, 'нажатие'),
(288, 'кубок'),
(289, 'массив'),
(290, 'защита');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `russian`
--
ALTER TABLE `russian`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`number`);

--
-- Индексы таблицы `words`
--
ALTER TABLE `words`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `russian`
--
ALTER TABLE `russian`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `number` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `words`
--
ALTER TABLE `words`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=291;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
