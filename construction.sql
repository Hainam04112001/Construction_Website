-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2023 at 09:19 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `construction`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `name`, `username`, `password`, `email`, `address`, `phone`, `image`) VALUES
(1, 'Lê Hải Nam', 'hainam@gmail.com', 'admin12', 'hainam@gmail.com', 'address', '1212121212', 'man.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `phone`, `email`, `message`, `date`) VALUES
(1, 'Nam', '1111111111232', 'lehainam04112001@gmail.com', 'aaaaaaaaa', '2023-10-04 08:14:54');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `image`, `message`, `date`) VALUES
(1, 'Nam', 'nam@aaa.com', 'CEO.jpg', 'aaaa', '2023-10-07 08:47:18'),
(8, 'Giao', 'giao@gmail.com', 'man.jpg', 'goodddđ', '2023-10-07 08:47:34'),
(9, 'Giao', 'giao@gmail.com', 'man.jpg', 'goodddđ', '2023-10-07 08:47:34'),
(11, 'Giao', 'giao@gmail.com', 'CEO.jpg', 'goodddđ', '2023-10-07 08:47:34'),
(12, 'Giao', 'giao@gmail.com', 'man.jpg', 'goodddđ', '2023-10-07 08:47:34'),
(13, 'Nam', 'nam@aaa.com', 'CEO.jpg', 'Dự án có chất lượng, kỹ sư xây dựng giỏi', '2023-10-07 08:47:18');

-- --------------------------------------------------------

--
-- Table structure for table `navigation`
--

CREATE TABLE `navigation` (
  `id` int(11) NOT NULL,
  `page_name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `navigation`
--

INSERT INTO `navigation` (`id`, `page_name`, `link`, `status`) VALUES
(1, 'Trang Chủ', 'index.php', 'Published'),
(2, 'Giới thiệu', 'index.php#about', 'Published'),
(3, 'Dự án', 'project.php', 'Published'),
(4, 'Chọn chúng tôi', 'index.php#why', 'Unpublished'),
(5, 'Team', 'team.php', 'Published'),
(6, 'Testimonial', 'index.php#testimonial1', 'Unpublished'),
(7, 'Bình Luận', 'feedback.php', 'Published'),
(8, 'Liên Hệ', 'contact.php', 'Published');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `details` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_name`, `category`, `image`, `details`) VALUES
(2, 'Electrical Work in ATS flat no 501', 'Electrical', 'project1.jpg,project2.jpg,project3.jpg', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa doloremque repudiandae distinctio neque cum. Est soluta ad libero at error, officiis aperiam placeat inventore iusto voluptates doloremque enim pariatur nostrum nobis asperiores aspernatur eveniet aut iste corrupti laboriosam, quis eaque culpa dolorum. Ab voluptas laboriosam iusto. Sed dolorum doloremque nulla.'),
(3, 'Carpentry Work in ATS flat no 501', 'Carpentry', 'project1.jpg,project3.jpg,project4.jpg', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa doloremque repudiandae distinctio neque cum. Est soluta ad libero at error, officiis aperiam placeat inventore iusto voluptates doloremque enim pariatur nostrum nobis asperiores aspernatur eveniet aut iste corrupti laboriosam, quis eaque culpa dolorum. Ab voluptas laboriosam iusto. Sed dolorum doloremque nulla.'),
(17, 'Nam1', 'Electrical', 'project1.jpg,project2.jpg,project3.jpg', 'sạch'),
(18, 'Nhà Bếp', 'Electrical', 'nha_bep1.jpg,nha_bep2.jpg,nha_bep3.jpg,project3.jpg', 'Những mẫu tủ bếp gỗ óc chó đẹp của Hải Nam đều được thiết kế và thi công từ 100% gỗ tự nhiên nhập khẩu với đầy đủ kiểu dáng và kích thước vì vậy quý vị hoàn toàn yên tâm về kiểu dáng cũng như chất lượng của tủ bếp gỗ Đồng Gia.'),
(19, 'Nhà khách', 'Electrical', 'Phong_khach.jpg,Phong_khach1.jpg,Phong_khach2.jpg,Phong_khach3.jpg', 'MẪU SOFA GỖ ÓC CHÓ CAO CẤP CHO PHÒNG KHÁCH BIỆT THỰ\r\nNói đến Sofa gỗ óc chó của Hải Nam, chúng ta có thể hình dung chân thực nhất về những không gian biệt thự rộng lớn với hàng trăm công trình thành công và tạo nên dấu ấn khác biệt.\r\n\r\nNhững mẫu Sofa phòng khách biệt thự của Hải Nam luôn tạo nên cảm giác thoải mái, đẳng cấp cho mỗi không gian, để mỗi căn nhà trở nên sang trọng và thêm nhiều điểm nhấn độc đáo hơn.');

-- --------------------------------------------------------

--
-- Table structure for table `projects_category`
--

CREATE TABLE `projects_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects_category`
--

INSERT INTO `projects_category` (`id`, `category_name`) VALUES
(2, 'Electrical'),
(3, 'Carpentry'),
(8, 'Sleep');

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `name`, `link`, `status`) VALUES
(2, 'Instagram', '#', 'Published'),
(3, 'Twitter', '#', 'Published'),
(4, 'Linkedin', '#', 'Published'),
(9, 'Facebook', '#', 'Published');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `less_details` varchar(200) NOT NULL,
  `details` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `designation`, `image`, `less_details`, `details`) VALUES
(2, 'Raman Sharma', 'Supervisor', 'human1.jpg', 'Lorem ipsum dolor sit amet Lorem ipsum Lorem ipsum dolor sit amet consectetur adipisicingLorem ipsum dolor sit amet consectetur adipisicing', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem necessitatibus animi voluptates, minima quis ullam, perferendis corrupti placeat ipsa hic velit inventore, nesciunt obcaecati? Inventore nisi perspiciatis ea est nemo.'),
(6, 'Lê Hải Nam', 'Quản Lý', 'man.jpg', 'Kỹ sư xây dựng Hải Nam là một chuyên gia xuất sắc trong lĩnh vực xây dựng, mang lại sự đóng góp lớn cho đội ngũ chúng tôi. Với kiến thức sâu rộng và kinh nghiệm đa dạng, anh ấy đã chơi một vai trò qua', 'Trình Độ Học Vấn:\r\nHải Nam có bằng cử nhân chuyên ngành Xây dựng từ một trường đại học uy tín, giúp anh ấy có cơ sở kiến thức vững chắc và chuyên sâu về các khía cạnh kỹ thuật của ngành.\r\n\r\nKinh Nghiệm Đa Dạng:\r\nAnh ấy đã tích lũy được nhiều năm kinh nghiệm làm việc trong ngành xây dựng, tham gia vào nhiều dự án đa dạng từ những công trình nhỏ đến các dự án quy mô lớn.\r\n\r\nNăng Động và Sáng Tạo:\r\nHải Nam luôn đem đến tinh thần năng động và sự sáng tạo trong mọi dự án. Anh ấy là người luôn tìm kiế');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navigation`
--
ALTER TABLE `navigation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects_category`
--
ALTER TABLE `projects_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `navigation`
--
ALTER TABLE `navigation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `projects_category`
--
ALTER TABLE `projects_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
