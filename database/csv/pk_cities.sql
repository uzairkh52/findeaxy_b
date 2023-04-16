-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2023 at 08:26 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `findeasy_backup`
--

-- --------------------------------------------------------

--
-- Table structure for table `pk_cities`
--

CREATE TABLE `pk_cities` (
  `city_name` varchar(19) DEFAULT NULL,
  `city_state` varchar(18) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pk_cities`
--

INSERT INTO `pk_cities` (`city_name`, `city_state`) VALUES
('Karachi', 'Sindh'),
('Lahore', 'Punjab'),
('Faisalabad', 'Punjab'),
('Rawalpindi', 'Punjab'),
('Gujranwala', 'Punjab'),
('Peshawar', 'Khyber Pakhtunkhwa'),
('Multan', 'Punjab'),
('Saidu Sharif', 'Khyber Pakhtunkhwa'),
('Hyderabad City', 'Sindh'),
('Islamabad', 'Islāmābād'),
('Quetta', 'Balochistān'),
('Bahawalpur', 'Punjab'),
('Sargodha', 'Punjab'),
('Sialkot City', 'Punjab'),
('Sukkur', 'Sindh'),
('Larkana', 'Sindh'),
('Chiniot', 'Punjab'),
('Shekhupura', 'Punjab'),
('Jhang City', 'Punjab'),
('Dera Ghazi Khan', 'Punjab'),
('Gujrat', 'Punjab'),
('Rahimyar Khan', 'Punjab'),
('Kasur', 'Punjab'),
('Mardan', 'Khyber Pakhtunkhwa'),
('Mingaora', 'Khyber Pakhtunkhwa'),
('Nawabshah', 'Sindh'),
('Sahiwal', 'Punjab'),
('Mirpur Khas', 'Sindh'),
('Okara', 'Punjab'),
('Mandi Burewala', 'Punjab'),
('Jacobabad', 'Sindh'),
('Saddiqabad', 'Punjab'),
('Kohat', 'Khyber Pakhtunkhwa'),
('Muridke', 'Punjab'),
('Muzaffargarh', 'Punjab'),
('Khanpur', 'Punjab'),
('Gojra', 'Punjab'),
('Mandi Bahauddin', 'Punjab'),
('Abbottabad', 'Khyber Pakhtunkhwa'),
('Turbat', 'Balochistān'),
('Dadu', 'Sindh'),
('Bahawalnagar', 'Punjab'),
('Khuzdar', 'Balochistān'),
('Pakpattan', 'Punjab'),
('Tando Allahyar', 'Sindh'),
('Ahmadpur East', 'Punjab'),
('Vihari', 'Punjab'),
('Jaranwala', 'Punjab'),
('New Mirpur', 'Azad Kashmir'),
('Kamalia', 'Punjab'),
('Kot Addu', 'Punjab'),
('Nowshera', 'Khyber Pakhtunkhwa'),
('Swabi', 'Khyber Pakhtunkhwa'),
('Khushab', 'Punjab'),
('Dera Ismail Khan', 'Khyber Pakhtunkhwa'),
('Chaman', 'Balochistān'),
('Charsadda', 'Khyber Pakhtunkhwa'),
('Kandhkot', 'Sindh'),
('Chishtian', 'Punjab'),
('Hasilpur', 'Punjab'),
('Attock Khurd', 'Punjab'),
('Muzaffarabad', 'Azad Kashmir'),
('Mianwali', 'Punjab'),
('Jalalpur Jattan', 'Punjab'),
('Bhakkar', 'Punjab'),
('Zhob', 'Balochistān'),
('Dipalpur', 'Punjab'),
('Kharian', 'Punjab'),
('Mian Channun', 'Punjab'),
('Bhalwal', 'Punjab'),
('Jamshoro', 'Sindh'),
('Pattoki', 'Punjab'),
('Harunabad', 'Punjab'),
('Kahror Pakka', 'Punjab'),
('Toba Tek Singh', 'Punjab'),
('Samundri', 'Punjab'),
('Shakargarh', 'Punjab'),
('Sambrial', 'Punjab'),
('Shujaabad', 'Punjab'),
('Hujra Shah Muqim', 'Punjab'),
('Kabirwala', 'Punjab'),
('Mansehra', 'Khyber Pakhtunkhwa'),
('Lala Musa', 'Punjab'),
('Chunian', 'Punjab'),
('Nankana Sahib', 'Punjab'),
('Bannu', 'Khyber Pakhtunkhwa'),
('Pasrur', 'Punjab'),
('Timargara', 'Khyber Pakhtunkhwa'),
('Parachinar', 'Khyber Pakhtunkhwa'),
('Chenab Nagar', 'Punjab'),
('Gwadar', 'Balochistān'),
('Abdul Hakim', 'Punjab'),
('Hassan Abdal', 'Punjab'),
('Tank', 'Khyber Pakhtunkhwa'),
('Hangu', 'Khyber Pakhtunkhwa'),
('Risalpur Cantonment', 'Khyber Pakhtunkhwa'),
('Karak', 'Khyber Pakhtunkhwa'),
('Kundian', 'Punjab'),
('Umarkot', 'Sindh'),
('Chitral', 'Khyber Pakhtunkhwa'),
('Dainyor', 'Gilgit-Baltistan'),
('Kulachi', 'Khyber Pakhtunkhwa'),
('Kalat', 'Balochistān'),
('Kotli', 'Azad Kashmir'),
('Gilgit', 'Gilgit-Baltistan'),
('Narowal', 'Punjab'),
('Khairpur Mir’s', 'Sindh'),
('Khanewal', 'Punjab'),
('Jhelum', 'Punjab'),
('Haripur', 'Khyber Pakhtunkhwa'),
('Shikarpur', 'Sindh'),
('Rawala Kot', 'Azad Kashmir'),
('Hafizabad', 'Punjab'),
('Lodhran', 'Punjab'),
('Malakand', 'Khyber Pakhtunkhwa'),
('Attock City', 'Punjab'),
('Batgram', 'Khyber Pakhtunkhwa'),
('Matiari', 'Sindh'),
('Ghotki', 'Sindh'),
('Naushahro Firoz', 'Sindh'),
('Alpurai', 'Khyber Pakhtunkhwa'),
('Bagh', 'Azad Kashmir'),
('Daggar', 'Khyber Pakhtunkhwa'),
('Leiah', 'Punjab'),
('Tando Muhammad Khan', 'Sindh'),
('Chakwal', 'Punjab'),
('Badin', 'Sindh'),
('Lakki', 'Khyber Pakhtunkhwa'),
('Rajanpur', 'Punjab'),
('Dera Allahyar', 'Balochistān'),
('Shahdad Kot', 'Sindh'),
('Pishin', 'Balochistān'),
('Sanghar', 'Sindh'),
('Upper Dir', 'Khyber Pakhtunkhwa'),
('Thatta', 'Sindh'),
('Dera Murad Jamali', 'Balochistān'),
('Kohlu', 'Balochistān'),
('Mastung', 'Balochistān'),
('Dasu', 'Khyber Pakhtunkhwa'),
('Athmuqam', 'Azad Kashmir'),
('Loralai', 'Balochistān'),
('Barkhan', 'Balochistān'),
('Musa Khel Bazar', 'Balochistān'),
('Ziarat', 'Balochistān'),
('Gandava', 'Balochistān'),
('Sibi', 'Balochistān'),
('Dera Bugti', 'Balochistān'),
('Eidgah', 'Gilgit-Baltistan'),
('Uthal', 'Balochistān'),
('Khuzdar', 'Balochistān'),
('Chilas', 'Gilgit-Baltistan'),
('Panjgur', 'Balochistān'),
('Gakuch', 'Gilgit-Baltistan'),
('Qila Saifullah', 'Balochistān'),
('Kharan', 'Balochistān'),
('Aliabad', 'Gilgit-Baltistan'),
('Awaran', 'Balochistān'),
('Dalbandin', 'Balochistān');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
