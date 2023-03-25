SET time_zone = "+00:00";

CREATE TABLE `profil` (
  `person_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `age` int COLLATE utf8_swedish_ci NOT NULL,
  `weight` int COLLATE utf8_swedish_ci NOT NULL,
  `length` int COLLATE utf8_swedish_ci NOT NULL,
  `level` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

INSERT INTO `profile` (`film_id`, `filmtitel`, `speltid`, `film_poster`, `recension`, `genre_id`) VALUES
(1, 'Portrait de la jeune fille en feu', '02:01', 'portrait_poster.jpg', '', 1),
(2, 'The Lighthouse', '01:49', 'the_lighthouse_poster.jpg', '', 1),
(3, 'La Paranza dei Bambini\r\n', '01:45', 'paranza_poster.jpg', '', 2),
(4, 'Jumanji', '02:03', 'jumanji_poster.jpg', '', 7),
(5, 'Honey boy', '01:34', 'honey_boy_poster.jpg', '', 1),
(6, 'Knives out', '02:10', 'knives_out_poster.jpg', '', 2),
(7, 'Ad Astra', '02:02', 'adastra_poster.jpg', '', 6),
(8, 'Once upon a time in Hollywood', '02:23', 'hollywood_poster.jpg', '', 3),
(9, 'Black Widow', '02:14', 'black_widow_poster.jpg', '', 6),
(10, 'Down by Law', '01:47', 'down_by_law_poster.jpg', '', 1);