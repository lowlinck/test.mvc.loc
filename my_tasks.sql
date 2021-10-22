-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 22 2021 г., 09:41
-- Версия сервера: 5.7.33-log
-- Версия PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mytestdb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `my_tasks`
--

CREATE TABLE `my_tasks` (
  `ID` int(11) NOT NULL,
  `uname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `tasktext` varchar(500) DEFAULT NULL,
  `st` tinyint(4) DEFAULT NULL,
  `adm` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `my_tasks`
--

INSERT INTO `my_tasks` (`ID`, `uname`, `email`, `tasktext`, `st`, `adm`) VALUES
(1, 'lowlink', 'lowl@hd.jd', '5555555Lorem Ipsum - это текст-\"рыба\", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной \"рыбой\" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный диза', 1, 1),
(2, 'lostlink', 'lost@jh.dj', '0000000000Ipsum - это текст-\"рыба\", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной \"рыбой\" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный', 0, 0),
(3, 'tbrwevs', 'sfrdgvrd@rgf.erf', 'wbertreb  erg  wergf qqr', NULL, NULL),
(4, 'tbrwevs', 'sfrdgvrd@rgf.erf', 'wbertrebdebwqertbwqaeasdv  erwg', 0, NULL),
(5, 'rereqgtara', 'qaerghw@dsfg.er', 'qaerqerhgyqyvq43rtvq3tvqvtwervqwetvcwe', 0, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `my_tasks`
--
ALTER TABLE `my_tasks`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `my_tasks`
--
ALTER TABLE `my_tasks`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
