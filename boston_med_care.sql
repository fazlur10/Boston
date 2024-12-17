-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2024 at 10:07 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boston_med_care`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `service_type` int(11) DEFAULT NULL,
  `appointment_date` date NOT NULL,
  `appointment_time` time NOT NULL,
  `message` text DEFAULT NULL,
  `status` tinyint(4) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `language` enum('en','ar') DEFAULT 'en'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `name`, `phone`, `service_type`, `appointment_date`, `appointment_time`, `message`, `status`, `created_at`, `updated_at`, `language`) VALUES
(21, 'fazlur', '77778888', 1, '2024-11-08', '09:00:00', '123', 0, '2024-11-07 08:55:22', '2024-11-07 08:55:22', 'en'),
(22, 'fazlur rahman fareedu', '77778888', 1, '2024-11-14', '09:00:00', 'test', 0, '2024-11-09 07:30:24', '2024-11-09 07:30:24', 'en'),
(23, 'fazlur rahman fareedu', '77778888', 1, '2024-11-14', '09:00:00', 'test', 0, '2024-11-09 07:30:29', '2024-11-09 07:30:29', 'en'),
(24, 'fazlur', '77778888', 1, '2024-12-08', '09:00:00', 'test final', 0, '2024-12-07 10:01:19', '2024-12-07 10:01:19', 'en'),
(25, 'fazlur', '77811111', 2, '2024-12-17', '09:15:00', 'fgf', 0, '2024-12-08 13:22:11', '2024-12-08 13:22:11', 'en');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `doctor_name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `doctor_name`, `title`, `description`, `image_path`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Dr.Fateh Al-Sabaaie', 'Orthodontic Specialist', '<p> Graduate of French universities and hospitals.\r\nMember of the American Association of Orthodontists.\r\nMore than 25 years of experience </p>', 'assets/images/doctors/demo-doctor.jpg', 1, '2024-12-08 13:54:29', '2024-12-08 14:03:46'),
(2, 'Dr.Farhad Al-Atasi', 'Consultant Gum Doctor', '', 'assets/images/doctors/demo-doctor.jpg', 1, '2024-12-08 13:54:29', '2024-12-08 14:03:46'),
(3, 'Dr.Ahmad Al-Hamad', 'General Dentist', '', 'assets/images/doctors/demo-doctor.jpg', 1, '2024-12-08 13:57:17', '2024-12-08 14:03:46'),
(4, 'Dr. Nadia Abdulwahab', 'General Dentist', '', 'assets/images/doctors/demo-doctor-f.jpg', 1, '2024-12-08 13:57:17', '2024-12-17 09:07:39'),
(5, 'Dr. Mohammed Al-Mubarak', 'First deputy Dermatology Specialist', '', 'assets/images/doctors/demo-doctor.jpg\r\n', 2, '2024-12-08 14:05:46', '2024-12-08 14:05:46'),
(6, 'Dr. Ahmed Abdel Razzaq ', 'Dermatology consultant', '', 'assets/images/doctors/demo-doctor.jpg\r\n', 2, '2024-12-08 14:05:46', '2024-12-08 14:05:46');

-- --------------------------------------------------------

--
-- Table structure for table `main_services`
--

CREATE TABLE `main_services` (
  `id` int(11) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `service_name_ar` varchar(255) DEFAULT NULL,
  `description_ar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `main_services`
--

INSERT INTO `main_services` (`id`, `service_name`, `description`, `image_path`, `created_at`, `updated_at`, `service_name_ar`, `description_ar`) VALUES
(1, 'Dental', 'A charming smile begins with our specialized services', 'assets/images/dental-main-service.jpg', '2024-11-02 08:57:29', '2024-11-02 08:57:29', NULL, NULL),
(2, 'Derma', 'Healthy and beautiful skin starts here', 'assets/images/derma-main-service.jpg', '2024-11-02 09:01:41', '2024-11-02 09:04:02', NULL, NULL),
(3, 'Plastic Surgery', 'Your Journey towards beauty begins with our services. Surgeries performed for functional or aesthetic purposes, in the simple sense, restore symmetry and balance to a part of the body by restoring the appropriate beauty standards for this part.\r\nPlastic surgery requires careful planning and consultation with specialist doctors to ensure\r\npatient safety and achieve the desired results.', 'assets/images/plastic-surgery-main-service.jpg', '2024-11-02 09:01:41', '2024-12-08 08:06:01', NULL, NULL),
(4, 'Hair Treatments', 'Your hair is the crown of your beauty', 'assets/images/hair-main-service.jpg\r\n', '2024-11-02 09:03:25', '2024-11-02 09:04:11', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sub_services`
--

CREATE TABLE `sub_services` (
  `id` int(11) NOT NULL,
  `service_type` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `sub_service_name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `sub_service_name_ar` varchar(255) DEFAULT NULL,
  `description_ar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `sub_services`
--

INSERT INTO `sub_services` (`id`, `service_type`, `image_path`, `sub_service_name`, `description`, `created_at`, `updated_at`, `sub_service_name_ar`, `description_ar`) VALUES
(1, 1, 'assets/images/subservices/dental-implants.jpg', 'Dental Implants', '<p>It is a medical procedure used to compensate for missing teeth by placing metal implants\r\nin the jaw, which act as an alternative to the root of the tooth. Then, teeth are installed\r\nabove the implant.</p>\r\n\r\n<p><b>Advantages:</b></p>\r\n<ul>\r\n    <li>Improves appearance and self-confidence.</li>\r\n    <li>Restores the ability to chew food properly.</li>\r\n    <li>Preserves the jawbone and prevents its erosion.</li>\r\n</ul>\r\n\r\n<p><b>Important Tips:</b></p>\r\n<ul>\r\n    <li>Follow the doctor\'s instructions and visit them every 6 months for teeth and implant cleaning.</li>\r\n    <li>Adhering to your doctor\'s advice significantly contributes to the success of dental implants and supports overall oral health.</li>\r\n</ul>\r\n', '2024-12-07 09:36:03', '2024-12-07 09:43:33', NULL, NULL),
(2, 1, 'assets/images/subservices/dental-surgery.jpg\r\n', 'Dental Surgery', '<p>It is a department of dentistry that deals with the diagnosis and treatment of problems of\r\nthe mouth, teeth, and gums through surgical procedures such as the extraction of impacted\r\nwisdom teeth, surgical extraction of dental roots, and surgical removal of cysts.</p>\r\n\r\n<p><b>Surgical Procedures:</b></p>\r\n<ul>\r\n    <li><b>Anesthesia:</b> This is done using local or general anesthesia depending on the type of surgery.</li>\r\n    <li><b>Operation:</b> The duration of the operation varies based on the procedure, ranging from minutes to hours.</li>\r\n    <li><b>Post-operative Care:</b> Strictly follow the instructions of the attending physician and ensure proper oral hygiene.</li>\r\n</ul>\r\n', '2024-12-07 09:39:20', '2024-12-07 09:43:50', NULL, NULL),
(3, 1, 'assets/images/subservices/orthodontics-maxillofacial.jpg', 'Orthodontics and maxillofacial', '<p>It is a department in dentistry that focuses on achieving the most beautiful alignment of teeth and correcting the relationship between the jaws.</p>\r\n\r\n<p><b>Types of Orthodontics:</b></p>\r\n<ul>\r\n    <li><b>Clear Foil Orthodontics:</b> An orthodontic system based on the use of removable transparent molds, making it a more comfortable and elegant cosmetic option with a faster treatment period.</li>\r\n    <li><b>Metal Orthodontics:</b> A traditional orthodontic device consisting of brackets and wires fixed to the teeth, which works to gradually modify the position of the teeth.</li>\r\n    <li><b>Skeletal Orthodontics:</b> Helps to restore the natural relationship between the jaws.</li>\r\n    <li><b>Functional Orthodontics:</b> Helps to repair some bad habits that affect the function of the teeth.</li>\r\n</ul>\r\n\r\n<p><b>Orthodontic Objectives:</b></p>\r\n<ul>\r\n    <li><b>Correction of Deviations:</b> Treatment of crooked, spaced, or crowded teeth.</li>\r\n    <li><b>Optimization of Occlusion:</b> Ensures that the upper and lower teeth overlap properly.</li>\r\n    <li><b>Improved Appearance:</b> Enhances the smile and boosts self-confidence.</li>\r\n</ul>\r\n', '2024-12-07 14:57:43', '2024-12-07 14:57:43', NULL, NULL),
(4, 1, 'assets/images/subservices/endodontics-treatment.jpg', 'Endodontics treatment', '<p><b>Endodontics</b> (or root canal treatment) is a medical procedure used to treat inflammation or \r\ninfection in the dental pulp, the inner part of the tooth that contains nerve tissue and blood vessels.</p>\r\n\r\n<p><b>Treatment Steps:</b></p>\r\n<ul>\r\n    <li>Diagnosis</li>\r\n    <li>Sedation</li>\r\n    <li>Removal of the pulp</li>\r\n    <li>Channel cleaning</li>\r\n    <li>Duct filling</li>\r\n    <li>Crown installation</li>\r\n</ul>\r\n\r\n<p><b>Important Tips:</b></p>\r\n<ul>\r\n    <li>Follow up on doctor\'s appointments to monitor recovery and ensure no complications occur.</li>\r\n</ul>\r\n', '2024-12-08 06:22:17', '2024-12-08 06:22:17', NULL, NULL),
(5, 1, 'assets/images/subservices/periodontal.jpg', 'Periodontal treatment', '<p><b>Periodontal Treatment</b> involves a set of procedures aimed at treating gum problems, such as gingivitis and periodontitis.</p>\r\n\r\n<p><b>Symptoms of Gingivitis:</b></p>\r\n<ul>\r\n    <li>Redness and swelling of the gums</li>\r\n    <li>Bleeding gums when using a brush or floss</li>\r\n    <li>Persistent bad breath</li>\r\n    <li>Retraction of the gums or their separation from the teeth</li>\r\n</ul>\r\n\r\n<p><b>Laser for Gum Treatment:</b></p>\r\n<p>Laser uses for periodontal treatment include a variety of procedures aimed at improving the health of the gums and tissues surrounding the teeth.</p>\r\n\r\n<p><b>Most Prominent Uses:</b></p>\r\n<ul>\r\n    <li>Laser Treatment for Gum Inflammation</li>\r\n    <li>Laser Treatment for Gum Disease</li>\r\n    <li>Laser Gum Contouring</li>\r\n    <li>Laser Removal of Excess Tissue</li>\r\n    <li>Laser Gum Whitening</li>\r\n    <li>Laser Treatment for Oral Fungal Infections</li>\r\n</ul>\r\n\r\n<p><b>Important Tips:</b></p>\r\n<ul>\r\n    <li>Adhere to good oral hygiene, including brushing twice a day and flossing</li>\r\n    <li>Visit the dentist regularly for examination and cleaning</li>\r\n    <li>Avoid smoking and limit sugar intake</li>\r\n</ul>\r\n', '2024-12-08 06:25:28', '2024-12-08 06:25:28', NULL, NULL),
(6, 1, 'assets/images/subservices/pediatric-dental.jpg', 'Pediatric dental treatment', '<p><b>Pediatric Dental Treatment</b> is a vital part of public health care, playing an essential role in promoting oral health and preventing future problems.</p>\r\n\r\n<p><b>The Importance of Children\'s Dental Care:</b></p>\r\n<ul>\r\n    <li><b>Development of Permanent Teeth:</b> Milk teeth affect the growth of permanent teeth, so they must be well cared for.</li>\r\n    <li><b>Caries Prevention:</b> Good care helps reduce the risk of caries and other dental problems.</li>\r\n    <li><b>Promoting Healthy Habits:</b> Teaching children the importance of dental care from a young age promotes healthy habits for life.</li>\r\n</ul>\r\n\r\n<p><b>Important Tips:</b></p>\r\n<ul>\r\n    <li>Follow up on periodic examination appointments to ensure dental health.</li>\r\n</ul>\r\n', '2024-12-08 06:31:30', '2024-12-08 06:31:30', NULL, NULL),
(7, 1, 'assets/images/subservices/hollywood-smile.jpg', 'Hollywood smile', '<p><b>Hollywood Smile</b> is a term used to refer to a set of cosmetic procedures aimed at improving the appearance of a smile, giving it a perfect and attractive appearance.</p>\r\n\r\n<p><b>Steps:</b></p>\r\n<ul>\r\n    <li><b>Initial Assessment:</b> The dentist evaluates oral health to determine individual needs.</li>\r\n    <li><b>Treatment Plan:</b> A personalized treatment plan is developed that includes the necessary procedures to obtain the desired smile.</li>\r\n    <li><b>Carrying Out Treatment:</b> This includes procedures such as teeth whitening, veneer fitting, or any other modifications.</li>\r\n</ul>\r\n\r\n<p><b>Important Tips:</b></p>\r\n<ul>\r\n    <li>Visit your dentist every 6 months for examination and cleaning.</li>\r\n    <li>Consult a doctor if you need any maintenance of the fittings.</li>\r\n</ul>\r\n', '2024-12-08 06:32:57', '2024-12-08 06:32:57', NULL, NULL),
(8, 1, 'assets/images/subservices/dental-prosthodontics.jpg', 'Dental Prosthodontics', '<p><b>Dental Prostheses</b> are medical procedures used to compensate for missing or damaged teeth and improve oral function and smile appearance.</p>\r\n\r\n<p><b>Types of Dental Prostheses:</b></p>\r\n<ul>\r\n    <li>Zircon</li>\r\n    <li>Emax</li>\r\n    <li>Ceramics</li>\r\n    <li>Metal with Ceramic</li>\r\n</ul>\r\n\r\n<p><b>Indo Crown:</b></p>\r\n<p>It is a type of dental crown used in dentistry and is often used to cover damaged or weak teeth. It is considered a popular option after root canal treatment and when there is significant caries. It is designed to resemble the shape and color of natural teeth, making it a beautiful yet practical option.</p>\r\n\r\n<p><b>Important Tips:</b></p>\r\n<ul>\r\n    <li>Visit the dentist regularly to monitor the condition of the prosthesis.</li>\r\n</ul>\r\n', '2024-12-08 06:34:34', '2024-12-08 06:34:34', NULL, NULL),
(9, 1, 'assets/images/subservices/teeth-whitening.jpg', 'Teeth whitening', '<p><b>Teeth Whitening</b> is a cosmetic procedure that aims to lighten the color of the teeth and remove stains and pigmentation, giving a person a brighter smile.</p>\r\n\r\n<p><b>Types of Teeth Whitening:</b></p>\r\n<ul>\r\n    <li><b>In-Clinic Whitening:</b></li>\r\n    <ul>\r\n        <li>Ordinary Bleach</li>\r\n        <li>Laser Whitening</li>\r\n    </ul>\r\n    <li><b>Home Bleaching Molds:</b></li>\r\n</ul>\r\n\r\n<p><b>Important Tips:</b></p>\r\n<ul>\r\n    <li>Oral hygiene care</li>\r\n    <li>Avoid smoking</li>\r\n    <li>Follow-up with home bleaching</li>\r\n    <li>Strictly follow the instructions given by the doctor after bleaching.</li>\r\n</ul>\r\n', '2024-12-08 06:36:03', '2024-12-08 06:36:03', NULL, NULL),
(10, 1, 'assets/images/subservices/teeth-cleaning.jpg', 'Teeth cleaning ', '<p><b>Teeth Cleaning</b> is an essential part of your oral health care routine.</p>\r\n\r\n<p><b>The Importance of Cleaning Teeth:</b></p>\r\n<ul>\r\n    <li><b>Caries Prevention:</b> Protects teeth from decay and cavities.</li>\r\n    <li><b>Maintain Healthy Gums:</b> Prevents gum diseases such as gingivitis and periodontitis.</li>\r\n    <li><b>Improve Mouth Odor:</b> Keeps breath fresh and pleasant.</li>\r\n    <li><b>Public Health Promotion:</b> Supports overall oral and physical well-being.</li>\r\n</ul>\r\n\r\n<p><b>Important Tips:</b></p>\r\n<ul>\r\n    <li>It is advisable to clean the teeth in the clinic every 6 months.</li>\r\n    <li>Some individuals, such as those with certain dental or gum conditions or a history of cavities, may be advised to visit the dentist every 3-4 months.</li>\r\n</ul>\r\n', '2024-12-08 06:37:38', '2024-12-08 06:37:38', NULL, NULL),
(11, 1, 'assets/images/subservices/other-dental.jpg', 'Other Dental Treatments', '<p><b>Dental Fillings:</b></p>\r\n<p><b>Dental Fillings</b> are materials used to seal holes caused by decay or damage to the teeth. They aim to restore the shape and function of the teeth and improve their appearance. The types of fillings vary, with the appropriate type chosen based on the location of the decay, the required tolerance, and the desired aesthetic appearance.</p>\r\n\r\n<p><b>Inlay and Onlay Fillings:</b></p>\r\n<p>Porcelain is used as an alternative treatment method in cases where healthy tooth tissue is damaged and there is advanced tooth decay. These fillings, which are durable and long-lasting, easily adapt to the structure of the teeth, reducing the possibility of food escaping and eliminating the risk of tooth decay.</p>\r\n\r\n<ul>\r\n    <li><b>Best Used:</b> In cases where the damage rate is high.</li>\r\n    <li><b>Application:</b> Only the damaged part of the tooth is treated, preserving the healthy tooth tissue.</li>\r\n</ul>\r\n\r\n<p><b>With us, your smile is in safe hands.</b></p>\r\n', '2024-12-08 06:40:30', '2024-12-08 06:40:30', NULL, NULL),
(12, 2, 'assets/images/subservices/laser-treatment.jpg', 'Full Laser Treatment', '<p><b>Laser Uses in Skin Care</b></p>\r\n<p>Laser is a versatile technology in the field of skin care, used in various cosmetic procedures to enhance appearance and treat imperfections.</p>\r\n\r\n<p><b>Applications of Laser in Skin Care:</b></p>\r\n<ul>\r\n    <li><b>Hair Removal:</b> Effectively removes unwanted hair, whether thick or fine, providing lasting results compared to traditional methods.</li>\r\n    <li><b>Bleaching:</b> Helps lighten unwanted hair color for a more natural appearance.</li>\r\n    <li><b>Skin Rejuvenation:</b> Stimulates collagen production, improving skin brightness and smoothness.</li>\r\n    <li><b>Treatment of Pigmentation Problems:</b> Addresses pigmentation issues such as melasma and freckles, helping to unify skin tone.</li>\r\n    <li><b>Scars and Acne Scars:</b> Techniques like fractional laser reduce the appearance of scars and acne marks, enhancing skin texture.</li>\r\n    <li><b>Pink Lips:</b> Laser techniques add a natural pink tone to lips, giving them an attractive appearance.</li>\r\n    <li><b>Tattoo Removal:</b> Breaks up pigment under the skin for effective tattoo removal.</li>\r\n</ul>\r\n\r\n<p>In short, laser technology provides comprehensive and diverse solutions to improve skin appearance and address various imperfections.</p>\r\n', '2024-12-08 07:39:04', '2024-12-08 07:39:04', NULL, NULL),
(13, 2, 'assets/images/subservices/cosmetic-procedures.jpg', 'Cosmetic procedures ', '<p><b>Cosmetology</b> is a set of techniques and procedures used to improve the appearance of the skin and enhance its beauty. These technologies vary to suit the needs of different individuals.</p>\r\n\r\n<p><b>Filler:</b></p>\r\n<p>Filler is a substance injected under the skin to fill in wrinkles, improve facial volume, and add a youthful appearance to the skin. It is commonly used in areas such as the cheeks, lips, and chin. Fillers restore volume lost due to aging, giving the skin a fuller and more youthful appearance. They vary between hyaluronic acid and permanent fillers, with effects typically lasting 6 months to a year, depending on the type of filler used.</p>\r\n\r\n<p><b>Botox:</b></p>\r\n<p>Botox is a substance used to reduce wrinkles and expressive lines by preventing muscle contraction. It is commonly injected into areas like the forehead, around the eyes (laugh lines), and around the mouth. The effect of Botox usually begins to appear after a few days and lasts for 3 to 6 months before new sessions are required. This technique is fast, efficient, and helps achieve a more youthful and smooth appearance.</p>\r\n\r\n<p><b>Cosmetic Threads:</b></p>\r\n<p>Cosmetic threads are used to lift and tighten the skin in a non-surgical way. Fine sutures are inserted under the skin, stimulating collagen production and improving skin elasticity. This technique is ideal for reducing wrinkles and sagging in areas like the face and neck. Results typically last from 6 to 18 months, depending on the type of threads used and how the skin responds.</p>\r\n', '2024-12-08 07:41:46', '2024-12-08 07:41:46', NULL, NULL),
(14, 2, 'assets/images/subservices/body-lift-sculpting.jpg', 'Body lift and sculpting', '<p><b>Body lift and sculpting</b> are cosmetic procedures aimed at improving the appearance of the body by reducing excess fat and tightening the skin.</p>\r\n\r\n<p><b>Non-surgical procedures:</b></p>\r\n<ul>\r\n    <li><b>Laser techniques:</b> Used to tighten skin and reduce fat by heating tissue and stimulating collagen production.</li>\r\n    <li><b>Radiofrequency:</b> Heats deep tissues to stimulate skin tightening and improve its elasticity.</li>\r\n    <li><b>Injections (such as cryo or mesotherapy):</b> Used to reduce fat in specific areas.</li>\r\n</ul>\r\n\r\n<p><b>Benefits:</b></p>\r\n<ul>\r\n    <li>Improving body appearance and shape.</li>\r\n    <li>Boosting self-confidence.</li>\r\n    <li>Reducing sagging resulting from weight loss or aging.</li>\r\n</ul>\r\n', '2024-12-08 07:43:36', '2024-12-08 07:43:36', NULL, NULL),
(15, 2, 'assets/images/subservices/peeling-brightening.jpg', 'Peeling and brightening', '<p><b>Peeling</b> is a cosmetic procedure used to improve the appearance of the skin by removing damaged or dead surface layers. It helps renew cells and enhance skin freshness. Peeling is used to treat multiple problems such as pigmentation, wrinkles, and acne scars.</p>\r\n\r\n<p><b>Care after peeling:</b></p>\r\n<ul>\r\n    <li>Use moisturizers and sunscreens to protect the skin.</li>\r\n    <li>Avoid direct exposure to sunlight.</li>\r\n    <li>Follow your doctor\'s instructions regarding appropriate skin care products after peeling.</li>\r\n</ul>\r\n\r\n<p><b>Skin lightening</b> is a set of procedures and techniques aimed at improving skin tone and reducing the appearance of pigmentation and dark spots.</p>\r\n\r\n<p><b>Skin lightening benefits:</b></p>\r\n<ul>\r\n    <li>Improving the appearance of the skin and unifying its color.</li>\r\n    <li>Reducing the appearance of dark spots and pigmentation.</li>\r\n    <li>Enhancing skin radiance and making it look healthier.</li>\r\n</ul>\r\n', '2024-12-08 07:45:41', '2024-12-08 07:45:41', NULL, NULL),
(16, 2, 'assets/images/subservices/facial.jpg', 'Skin cleaning (Facial)', '<p><b>Skin cleansing in the clinic</b> is a specialized cosmetic procedure that aims to remove impurities and excess fat from the skin, which helps improve its appearance and health. This procedure is an essential part of your skin care routine, especially for people who suffer from problems such as acne, excess shine, or enlarged pores.</p>\r\n\r\n<p><b>Benefits of skin cleansing:</b></p>\r\n<ul>\r\n    <li>Improving skin texture and overall appearance.</li>\r\n    <li>Reduce the appearance of acne and remove blackheads.</li>\r\n    <li>Reduce excess shine and improve skin tone.</li>\r\n    <li>Enhance skin hydration and radiance.</li>\r\n    <li>Support with all skin treatments.</li>\r\n</ul>\r\n\r\n<p><b>Taking care of your skin is our priority.</b></p>\r\n', '2024-12-08 07:46:50', '2024-12-08 07:46:50', NULL, NULL),
(17, 4, 'assets/images/subservices/stem-cell-hair.jpg', 'Stem Cells for Hair', '<p><b>The use of stem cells to treat hair problems</b> is a modern field in cosmetic medicine and depends on the ability of these cells to renew and repair. Stem cells are considered a promising source in treating hair loss and stimulating hair growth.</p>\r\n\r\n<p><b>Benefits of using stem cells:</b></p>\r\n<ul>\r\n    <li>Improving hair density: Treatment can increase hair density and reduce hair loss.</li>\r\n    <li>Natural results: The results are natural and permanent, as the hair follicles grow healthily.</li>\r\n    <li>Less Pain: The treatment is relatively painless compared to some other treatments.</li>\r\n</ul>\r\n', '2024-12-08 08:09:43', '2024-12-08 08:09:43', NULL, NULL),
(20, 4, 'assets/images/subservices/plasma.jpg', 'Plasma', '<p><b>Plasma for Hair</b><br>Platelet-rich plasma (PRP) treatment is an innovative technology used to stimulate hair growth and treat hair loss. This method relies on the use of the patient\'s own blood components to promote natural healing.</p>\r\n\r\n<p><b>Benefits of plasma for hair:</b></p>\r\n<ul>\r\n    <li><b>Stimulating hair growth:</b> Plasma helps stimulate hair follicles and promote new hair growth.</li>\r\n    <li><b>Strengthening hair:</b> It enhances hair health and increases its density.</li>\r\n    <li><b>Reducing hair loss:</b> It reduces hair loss by improving scalp health.</li>\r\n    <li><b>Safe and Natural:</b> Because it relies on endogenous ingredients from the patient\'s body, the risk of adverse reactions is low.</li>\r\n</ul>\r\n\r\n<p><i>Because your hair deserves the best.</i></p>\r\n', '2024-12-08 08:15:30', '2024-12-08 08:15:30', NULL, NULL),
(21, 3, 'assets/images/subservices/abdominoplasty.jpg', 'Abdominoplasty', '<p> Abdominoplasty, commonly known as a tummy tuck, is a cosmetic surgery designed to remove excess skin and fat from the abdomen. It also tightens the underlying muscles, resulting in a smoother, firmer abdominal contour. This procedure is popular for individuals who have experienced significant weight loss or pregnancy and are seeking a more toned and youthful appearance. </p>', '2024-12-08 08:23:25', '2024-12-08 08:23:25', '', ''),
(22, 3, 'assets/images/subservices/brachioplasty.jpg', 'Brachioplasty', '<p> Brachioplasty, or an arm lift, is a surgical procedure that reshapes and tightens the skin and tissue of the upper arms. It is typically performed to remove excess skin after significant weight loss or due to aging, offering a more defined and youthful look to the arms. This procedure helps improve both the appearance and comfort of the arms. </p>', '2024-12-08 08:23:25', '2024-12-08 08:23:25', NULL, NULL),
(23, 3, 'assets/images/subservices/blepharoplasty.jpg', 'Blepharoplasty', '<p> Blepharoplasty is a surgical procedure that involves the removal of excess skin, fat, and muscle around the eyelids. It can be performed on the upper eyelids, lower eyelids, or both, and is often done to correct sagging or puffiness that may occur due to aging. This procedure can rejuvenate the eyes, giving a more refreshed and youthful appearance. </p>', '2024-12-08 08:25:33', '2024-12-08 08:25:33', NULL, NULL),
(24, 3, 'assets/images/subservices/neck-lift.jpg', 'Neck Lift', '<p> A neck lift is a cosmetic procedure aimed at improving the appearance of the neck and jawline by removing excess skin and fat. It also tightens the muscles of the neck, helping to reduce sagging and improve the definition of the chin and neckline. This procedure is ideal for individuals looking to achieve a more youthful, rejuvenated profile. </p>', '2024-12-08 08:25:33', '2024-12-08 08:25:33', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `time_slots`
--

CREATE TABLE `time_slots` (
  `id` int(11) NOT NULL,
  `slot_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `time_slots`
--

INSERT INTO `time_slots` (`id`, `slot_time`) VALUES
(1, '09:00:00'),
(2, '09:15:00'),
(3, '09:30:00'),
(4, '09:45:00'),
(5, '10:00:00'),
(6, '10:15:00'),
(7, '10:30:00'),
(8, '10:45:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_type` (`service_type`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_category_id` (`category_id`);

--
-- Indexes for table `main_services`
--
ALTER TABLE `main_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_services`
--
ALTER TABLE `sub_services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_type` (`service_type`);

--
-- Indexes for table `time_slots`
--
ALTER TABLE `time_slots`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `main_services`
--
ALTER TABLE `main_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sub_services`
--
ALTER TABLE `sub_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `time_slots`
--
ALTER TABLE `time_slots`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`service_type`) REFERENCES `main_services` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `doctors`
--
ALTER TABLE `doctors`
  ADD CONSTRAINT `fk_category_id` FOREIGN KEY (`category_id`) REFERENCES `main_services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sub_services`
--
ALTER TABLE `sub_services`
  ADD CONSTRAINT `sub_services_ibfk_1` FOREIGN KEY (`service_type`) REFERENCES `main_services` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
