-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2018 at 09:33 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `darjeeling`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `booking_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `fullname`, `email`, `destination`, `phone`, `comment`, `booking_date`) VALUES
(19, 'omkar cha', 'omkarchanda06@gmail.com', '1', '8008159387', 'gerge', '2018-12-04');

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `id` int(11) NOT NULL,
  `placename` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`id`, `placename`, `description`, `image`) VALUES
(1, 'Darjeeling RopeWay', 'The Darjeeling Ropeway is a ropeway in the town of Darjeeling in the Indian state of West Bengal.[1] The ropeway is a popular tourist destination in the town. It consists of sixteen cars and plies between the "North Point" in the town of Darjeeling and Singla on the banks of the Ramman river. The journey on the ropeway offers beautiful views of the hills and the valleys around Darjeeling.\nThe ropeway, which was started in 1968 and revamped in 1988, was stopped in October 2003 after four tourists died when the cable snapped causing two cars to plummet down the hill. In 2005, the state forest and public works department (PWD) ministers formed a three-member committee to oversee safety issues. The committee, which included a PWD engineer and two Kalyani Government Engineering College teachers, found the services unfit after a trial run.[2] The ropeway was reopened on 2 February 2012.\n', 'darjeelingropeway.JPG'),
(2, 'Himalayan mountaineering institute', 'The Himalayan Mountaineering Institute (HMI darjeeling) was established in Darjeeling, India on 4 November 1954[1] to encourage mountaineering as an organized sport in India. The first ascent of Mount Everest in 1953 by Tenzing Norgay and Edmund Hillary sparked a keen interest in establishing mountaineering as a well-respected endeavour for people in the region. With the impetus provided by the first prime minister of India, Jawaharlal Nehru, HMI was established in Darjeeling. Narendra Dhar Jayal, the pioneer of Indian Mountaineering, was the founding principal of the institute. Tenzing Norgay was the first director of field training for HMI.\nHMI regularly conducts Adventure, Basic and Advanced Mountaineering courses. These are very comprehensive courses. They are also highly subsidised to encourage mountaineering as a sport\n', 'himalayaninstitute.jpg'),
(3, 'Ging gompa', 'Ging Gompa is a Buddhist monastery in Darjeeling, India\nSangchhen Thong Delling monastery is located at Ging, at about 10 km from the town of Darjeeling. In the past it was an integral belief of lamaism that un-enlightened souls should not put anything in writing as anything written by him would be of an "un-enlightened" nature and that would help no one. Hence the real history of this monastery has been lost in the mists of time and one can only hope that future research will throw some light on its past. However, it can be safely said that it is one of the oldest monastery in Darjeeling. The monastery practices Nyingmapa tradition of Tibetan Buddhism.\nIn a signboard hung in front of the monastery the year of establishment is written as being 1818. However, this is a subject of debate and must remain open until further supporting evidences emerge. However there is an official document vide which the land on which the monastery is built was granted to the lamas of Pemayangtse (of Sikkim) in 1879. This is the "Freehold grant" given by the Lt. Governor of Bengal to Lama of Pemayangtse, Sikkim vide deed dated 28.2.1879. It is recorded that "19 acres of land at Ging bounded on the North-east , the eastern Lebong road, North and west, western Lebong road and south leading from Darjeeling to Rangeet, South and South West Govt. Ging road from Western Lebong to Darjeeling road" given to build the Ging monastery belonging to Lamas of Pemayangtse monastery in West Sikkim.This document is still being maintained at the archives of the Ecclesiastical Department of Sikkim. So, it can be accepted for a fact that the monastery was built by the Lamas of Pemayangtse not later than 1879 at its present location at Ging.\n', 'ginggompa.JPG'),
(4, 'Rock Garden', 'The Rock Garden (also known as Barbotey Rock Garden)[1] at Chunnu Summer Falls and Ganga Maya Park are recently added tourist attractions in the hilly town of Darjeeling in the state of West Bengal, India. It is a showpiece meant to lure people to Darjeeling after political agitations disrupted tourism in the 1980s. There is another rock garden in Darjeeling known as Sir John Anderson Rock Garden, which is part of Lloyd''s Botanical Garden.\n\nThe British secured Darjeeling from the Raja of Sikkim in 1835 and developed the area. They introduced tea gardens in the area. Townships sprang up, hotels were built and the population in the area grew rapidly. From a mere 100 souls in 1839, the population had shot up to 10,000 by 1849. Spread on hill slopes at an altitude of 2,134 metres (7,000 feet), the town and the area became a major centre of tourist attraction.[3]\nIn the 1980s, the movement of the Gorkha National Liberation Front (GNLF) was in full swing in the Darjeeling Hills. The unrest affected the arrival of tourists and Darjeeling started losing out as a tourist destination. With the formation of Darjeeling Gorkha Autonomous Hill Council (DGAHC) in 1988, relative peace returned to the area. Since tea and tourism were the mainstays of the economy of the region, DGAHC initiated efforts to lure tourists back to Darjeeling. We are now focusing on not only Darjeeling town as a tourist centre, but also the region outside it, D.T. Tamlong, principal secretary, DGAHC told Frontline.[4\n', 'garden.jpg'),
(5, 'Mahankal Temple', 'The Mahakal Temple or Mahakal Mandir Nepali Translation: The master of Kaali is a sacred Hindu templelocated in Darjeeling in the state of West Bengal, India dedicated to the Hindu god Lord Shiva, the third god in the Hindu triumvirate. The Temple was built in 1782 by Lama Dorjey Rinzing and is perched atop the Observatory Hill in Darjeeling and is an amalgamation of Hindu and Buddhist religions. It is a unique religious site where both religions coexist harmoniously Mahakal Temple stands as a historical edifice on the spot where a Buddhist Monastery named ''Dorje-Ling'' once stood which was built by Lama Dorjey Rinzing in 1765. Legend has it that three Shiva-Lingas representing Brahma, Vishnu and Maheshwar (Lord Shiva)manifested themselves at the site in 1782. The monastery itself was plundered and destroyed in 1815 during the Gorkha invasion after which it was shifted to Bhutia Busty about a mile away and was called the Bhutia Busty Monastery. The Temple is a much revered and visited religious shrine of the area.[3][5] Legend has it that the name Darjeeling was derived from the name of the monastery Dorje-Ling itself.  The main Mahakal temple is devoted to Lord Shiva and it witness devotees from all sections of society and religions most visiting the temple for both leisure or pilgrimage. Bells and hundreds of colorful prayer flags line the up-hill walk and the shrine.', 'mahankal.JPG'),
(6, 'Kangchenjunga', ' Kangchenjunga, also spelled Kanchenjunga, is the third highest mountain in the world. It lies between Nepal and Sikkim, India, with three of the five peaks (Main, Central and South) directly on the border,[3][4] and the remaining two (West and Kangbachen) in Nepal''s Taplejung District.[5] It rises with an elevation of 8,586 m (28,169 ft) in a section of the Himalayas called Kangchenjunga Himal delimited in the west by the Tamur River, in the north by the Lhonak Chu and Jongsang La, and in the east by the Teesta River.[1] Until 1852, Kangchenjunga was assumed to be the highest mountain in the world, but calculations based on various readings and measurements made by the Great Trigonometrical Survey of India in 1849 came to the conclusion that Mount Everest, known as Peak XV at the time, was the highest. Allowing for further verification of all calculations, it was officially announced in 1856 that Kangchenjunga is the third highest mountain in the world.[6] Kangchenjunga was first climbed on 25 May 1955 by Joe Brown and George Band, who were part of a British expedition. They stopped short of the summit in accordance with the promise given to the Chogyal that the top of the mountain would remain intact. Every climber or climbing group that has reached the summit has followed this tradition.[7] Other members of this expedition included John Angelo Jackson and Tom Mackinon', 'kanchenajunga.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `fullname` text NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fullname`, `username`, `password`, `email`, `phone`, `created_at`) VALUES
(19, 'omkar chanda', '', '123456', 'omkarchanda06@gmail.com', '8008159387', '2018-12-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
