-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2020 at 01:29 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `group5`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Mobile` varchar(50) DEFAULT NULL,
  `Fax` varchar(50) DEFAULT NULL,
  `YearEstablish` int(3) DEFAULT NULL,
  `Offer` text DEFAULT NULL,
  `Salary` varchar(50) DEFAULT NULL,
  `Numbers` int(10) DEFAULT NULL,
  `Bonus` text DEFAULT NULL,
  `StartDayOffer` date DEFAULT NULL,
  `EndDayOffer` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `Address`, `Mobile`, `Fax`, `YearEstablish`, `Offer`, `Salary`, `Numbers`, `Bonus`, `StartDayOffer`, `EndDayOffer`) VALUES
(1, '6F, 8F, AC Building, 78 Duy Tân, Cầu Giấy, Hà Nội', '(+84)24-7303-9996', '(+81)3-6261-5637', 1991, 'Thực tập tại VTI với các vị trí:\r\n10 Fresher IOS\r\n10 Fresher Android\r\n05 Fresher Ruby\r\n05 Fresher Tester\r\n20 Fresher Java\r\n10 Fresher AWS', '1000$ - 5000$', 10, 'Môi trường làm việc tại VTI vô cùng năng động, chuyên nghiệp, luôn cập nhật những xu hướng công nghệ mới nhất (AI, Cloud Computing, Robotics, DeepLens).\r\nHệ thống đánh giá năng lực review 2 lần/ năm, chế độ đãi ngộ cạnh tranh, tăng lương đột biến theo kết quả thực hiện.\r\nHàng năm VTI dành tặng 100% chi phí chuyến du lịch Nhật Bản cho 02 cá nhân đạt thành tích xuất sắc nhất năm.\r\nNhân viên được hưởng chế độ nghỉ mát hàng năm, teambuilding 3 lần/ năm, các hoạt động thể thao và giải trí, đào tạo phong phú (Yoga, bơi lội, Kendo, Zumba...).\r\nĐến với VTI, bạn sẽ được tham gia khóa học tiếng Nhật, các buổi Seminar công nghệ miễn phí và cơ hội Onsite làm việc tại Nhật Bản.\r\nVTi hỗ trợ nhân viên tham gia các kì thi chứng chỉ công nghệ (CMMi, Scrum, Agile, AWS, v.v...).', '2020-07-23', '2021-02-10'),
(2, '2nd Floor, CT1-CT2 Green Park Tower, Dương Đình Nghệ, Yên Hòa, Cầu Giấy, Hà Nội', '(+84)962.623.140', NULL, 2017, 'Tuyển thực tập sinh vị trí: Fullstack Developer', '2000$', 15, 'HONEST - ENTHUSIASM - RESPONSIBILITY - CREATION', '2020-07-15', '2022-07-15'),
(3, '4th floor, Tòa nhà Tây Hà, 19 Tố Hữu, Hà Nội, Việt Nam', '0982171732', NULL, 2009, 'Thực tập sinh app:\r\ngame Quy Kiem 3D\r\ngame Nhat Kiem Giang Ho\r\ngame Vua Tam Quoc\r\ngame Tinh Kiem 3D', '1500$ - 2000$', 30, 'fb.com/FuntapCorpCareers', '2020-07-03', '2025-02-21'),
(4, 'Toà nhà FPT, 17 Duy Tân, Dịch Vọng Hậu, Cầu Giấy, HN', '096 912 52 48', NULL, 1990, 'Fullstack Java Web Developer: https://bitly.com.vn/kdX3y\r\nJava SE Developer: https://bitly.com.vn/DzTli\r\nFullstack .Net Web Developer: https://bitly.com.vn/NzLdb\r\nFront-end Developer: https://bitly.com.vn/Dbugn\r\nEmbedded Developer: https://bitly.com.vn/tATGj\r\nWeb Application Testing: https://bit.ly/2NS8vMM\r\nProfessional React Developer: https://bit.ly/2CzP756', '1000$ - 2500$', 45, '6 LÝ DO nên học lập trình tại FPT Software Academy:\r\n✅ Đào tạo để làm việc: chương trình đào tạo thực tế với yêu cầu của công việc được xây dựng bởi đội ngũ chuyên gia hàng đầu làm việc tại FPT Software - công ty phần mềm số 1 Việt Nam.\r\n✅ Hình thức đào tạo linh hoạt: kết hợp học offline tại Trung tâm và online tại nhà (Blended Learning ).\r\n✅ Mô hình đào tạo 3 chiều: ngoài đội ngũ giảng viên (Trainer) FPT Software Acadmey còn có các trợ giảng (Mentor) và quản lý lớp (Admin) giúp tăng tương tác, hỗ trợ học viên tốt nhất.\r\n✅ Thực chiến với chuyên gia: Hơn 60% thời lượng thực hành giúp học viên nắm vững kiến thức, thực hành trên các dự án thật.\r\n✅ 100% cam kết việc làm sau tốt nghiệp với mức thu nhập khởi điểm lên tới 14M/tháng\r\n✅ Miễn phí khóa học kỹ năng mềm dành cho lập trình viên (trị giá 3.000.000 VNĐ): Tiếng anh chuyên ngành IT, kỹ năng trình bày, kỹ năng viết mail, kỹ năng tạo CV, kỹ năng trả lời phỏng vấn, làm việc nhóm và báo cáo công việc', NULL, NULL),
(5, 'Tầng 5 - TTTM, Tòa Ecolife - 58 Tố Hữu, Nam Từ Liêm, Hà Nội\r\nTầng 6 - Tòa Bạch Đằng - 51 Xô Viết Nghệ Tĩnh, Hòa Cường Nam, Hải Châu, Đà Nằng', '02466874606', NULL, 2015, 'Internship (Frontend/backend/AI)\r\nFresher (Frontend/Backend/Game Developer)\r\nJunior/Senior (Mobile/ Tester)', '2200$ - 3000$', 5, 'Môi trường trẻ\r\nLàm việc vì đam mê\r\nTrách nhiệm và kỉ luật cao\r\nTinh thần tự học và chia sẻ kiến thức\r\nTin tưởng - Chia sẻ - Trung thực.', '2020-07-21', NULL),
(6, NULL, '090 515 15 55', NULL, 2016, 'Devops Engineer\r\nFullstack Developer\r\nQA Tester (Auto/Manual)', '1000$ - 2000$', 17, 'Tuyển dụng OPEN COMMERCE GROUP (BEEKETING PREVIOUSLY)\r\nWebsite: http://opencommercegroup.com/', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `StudentCode` int(10) DEFAULT NULL,
  `Birth` date DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `Mobile` varchar(50) DEFAULT NULL,
  `Department` varchar(50) DEFAULT NULL,
  `Major` varchar(50) DEFAULT NULL,
  `Level` varchar(50) DEFAULT NULL,
  `TrainingSystem` varchar(50) DEFAULT NULL,
  `TrainingProgram` varchar(50) DEFAULT NULL,
  `GPA` varchar(4) DEFAULT NULL,
  `YearOfCourse` varchar(50) DEFAULT NULL,
  `Forte` text DEFAULT NULL,
  `Skill` text DEFAULT NULL,
  `Favourite` text DEFAULT NULL,
  `Nation` varchar(50) DEFAULT NULL,
  `District` varchar(50) DEFAULT NULL,
  `Commune` varchar(50) DEFAULT NULL,
  `Street` varchar(50) DEFAULT NULL,
  `HomeNumber` varchar(50) DEFAULT NULL,
  `Prize` text DEFAULT NULL,
  `NumberCMT` varchar(100) DEFAULT NULL,
  `CompanyID` int(11) NOT NULL,
  `TeacherID` int(11) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `StudentCode`, `Birth`, `Gender`, `Mobile`, `Department`, `Major`, `Level`, `TrainingSystem`, `TrainingProgram`, `GPA`, `YearOfCourse`, `Forte`, `Skill`, `Favourite`, `Nation`, `District`, `Commune`, `Street`, `HomeNumber`, `Prize`, `NumberCMT`, `CompanyID`, `TeacherID`) VALUES
(18020001, 18020001, '2000-07-21', '0', '0919001009', 'K63-2018-CLC', 'chơi game', '2', 'Hệ chuẩn', '4.0 năm', '3.45', '2019-2020', 'Code, nghiên cứu khoa học', 'pro all', 'code', 'Việt Nam', 'Hà Nội', 'Cầu Giấy', 'Xuân Thủy', '144', 'Giải nhất toàn quốc môn toán 2020', '012345678909', 2, 99990000),
(18021290, 18021290, '2000-03-27', '1', '0943934631', 'Công Nghệ Thông tin', 'Mạng Máy Tính Và Truyền Thông Dữ Liệu', '2', 'Chuẩn', '4,5 năm', '4.0', '2019-2020', 'chắm chỉ, ngoan khỏi nói', 'Code web', 'đi dạo', 'Việt Nam', 'Nam Định', 'Mỹ Thắng', 'Bườn 3', NULL, 'Giải bét môn toán 2018-2019', '036200002548', 4, 99990005),
(18021313, 18021313, '2000-01-14', '1', '0369180227', 'Công nghệ thông tin', 'Truyền thông và Mạng máy tính', '2', 'chuẩn', '4,5 năm', '3,44', '2019-2020', 'Học nhanh, chăm chỉ', 'tìm hiểu và làm bài tập nhóm tốt', 'code app, code web', 'Việt Nam', 'Nam Định', 'Vụ Bản', 'Vụ Nữ', '12', 'Học Bổng Salary Học kì 1 năm học 2018-2019', '039810108374', 3, 99990004);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `Age` int(10) DEFAULT NULL,
  `Gender` int(3) DEFAULT NULL,
  `Mobile` varchar(50) DEFAULT NULL,
  `Department` varchar(50) DEFAULT NULL,
  `Major` varchar(50) DEFAULT NULL,
  `NumberCMT` varchar(50) DEFAULT NULL,
  `Position` varchar(50) DEFAULT NULL,
  `Office` varchar(50) DEFAULT NULL,
  `Offer` text DEFAULT NULL,
  `TopicResearch` text DEFAULT NULL,
  `Numbers` int(10) DEFAULT NULL,
  `StartDayOffer` date DEFAULT NULL,
  `EndDayOffer` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `Age`, `Gender`, `Mobile`, `Department`, `Major`, `NumberCMT`, `Position`, `Office`, `Offer`, `TopicResearch`, `Numbers`, `StartDayOffer`, `EndDayOffer`) VALUES
(99990000, 40, 1, '096 912 52 49', 'Electronics and Computer Engineering', 'Research Interests: Intelligent Robots (Fuzzy Logi', '036200002222', 'Head of Electronics and Computer Engineering Depar', '404-SS3', 'Nhóm nghiên cứu khoa học bộ khoa Điện Tử viễn Thông \r\nLab: thí nghiệm thông minh', 'Robot thông minh (Logic mờ, Fusion Fusion, Robot nối mạng); Kiến trúc máy tính và hệ thống dựa trên bộ vi xử lý; Đo lường và Kiểm soát dựa trên Máy tính và Vi điều khiển; Thiết bị điện tử.', 5, '2020-07-21', '2022-07-21'),
(99990001, 36, 0, '0943115555', 'Truyền thông không dây', 'Công nghệ tần số siêu cao Anten thông minh Kỹ thuậ', '033302022569', NULL, NULL, 'Sinh viên tham gia nhóm Lab nghiên cứu công nghệ tần số siêu cao phục vụ 5G', 'Công nghệ tần số siêu cao Anten thông minh', 3, NULL, NULL),
(99990003, 45, 1, '0379180000', 'Network and Communication Systems', 'Research Interests: Intelligent Robots (Fuzzy Logi', '036612', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(99990004, 40, 0, '096 912 52 99', 'Bộ môn Các Hệ thống Thông tin', 'Cơ sở dữ liệu Thực hành Phân tích thiết kế các hệ ', NULL, 'Quan lý dữ liệu không gian, Tối ưu hóa truy vấn, C', '404-GD9', 'Xử lý dữ liệu lớn', 'Tối ưu hóa truy vấn, Cơ sở dữ liệu quy mô lớn', 5, NULL, NULL),
(99990005, 48, 1, '0943933889', 'Phòng Thí nghiệm An toàn thông tin', 'An ninh mạng An toàn và an ninh mạng', '03956464131', 'Các mạng không dây và di động Chủ đề lựa chọn về a', '403-G2', 'Sinh viên nghiên cứu Security', 'An ninh mạng\r\nAn toàn và an ninh mạng', 5, '2020-07-21', '2022-07-25'),
(99990006, 30, 1, '09876543210', 'Bộ môn Các Hệ thống Thông tin', 'Khai phá quy trình nghiệp vụ', '012345678912', 'Khai phá quy trình nghiệp vụ', NULL, 'Quy trình nghiệp vụ', NULL, 1, NULL, NULL),
(99990007, 36, 1, '012344567899', 'Truyền thông và Mạng máy tính', 'Mạng máy tính Các hệ phân tán', NULL, 'Internet of Things, các hệ thống nhúng', '403-G2', 'Lab nghiên cứu Internetofthigs', 'IOT', 15, '2020-07-20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `category` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Name`, `Email`, `Password`, `category`) VALUES
(1, 'VTI Technology', 'hr@vti.com.vn', 'congnghetrongtamtay', 1),
(2, 'MIICHISOFT', 'phuongdtt@miichisoft.com', 'honest', 1),
(3, 'FunTap', 'hr@funtap.vn', 'gamenumber1', 1),
(4, 'FPT_Software', 'FA@Fsoft.com.vn', 'fpt123ghio', 1),
(5, 'ncc_company', 'hr@ncc.asia', 'ctycophan12ncc', 1),
(6, 'OpenCommerce', 'jobs@brodev.com', 'opencommercevn', 1),
(18020001, 'Trần Thị Thu Trang', 'trangtri@gmail.com', 'trangclc', 3),
(18020002, 'Nguyễn Hoài Thu', 'thunguyen@gmail.com', 'nguyenthu1234', 3),
(18020003, 'Trần Ngọc Linh', 'Linhc@gmail.com', 'ccclinh1111', 3),
(18020004, 'Hoàng Trung Thực', 'ThucAplus@gmail.com', 'apluskonoinhieu', 3),
(18020005, 'Phạm Văn Huy', 'huythaibinh@gmail.com', 'thaibinhmohoiroi', 3),
(18020006, 'Nguyễn Văn An', 'anbinh@gmail.com', 'anggaming', 3),
(18020007, 'Hoàng Tuấn Vũ', 'vuoppa@gmail.com', 'oppanhinho', 3),
(18021212, 'Võ Thị Vân', 'vanmmt@gmail.com', 'vanvo', 3),
(18021290, 'Trần Đức Toản', 'ductoan2732000@gmail.com', 'toantran', 3),
(18021313, 'Phạm Văn Trọng', 'trongnt@gmail.com', 'trongnt', 3),
(99990000, 'Trần Quang Vinh', 'vinhtq@vnu.edu.vn', 'quangvinhvnu', 2),
(99990001, 'Trần Thị Thúy Quỳnh', 'quynhttt@vnu.edu.vn', 'quynhdtvt', 2),
(99990003, 'Lâm Sinh Công', 'congls@vnu.edu.vn', 'congdhcn', 2),
(99990004, 'Dư Phương Hạnh', 'duphuonghanh@vnu.edu.vn', 'hanhdhcn', 2),
(99990005, 'Lê Đại Thọ', 'ledaitho@vnu.edu.vn', 'thosecurity', 2),
(99990006, 'Lê Đức Trọng', 'trongduc@vnu.vn', 'trong_nlhdh', 2),
(99990007, 'Phạm Mạnh Linh', 'linhpm.vn@gmail.com', 'linh_mmt', 2),
(99990008, 'Nguyễn Trí Thành', 'ntthanhvn@vnu.edu.vn', 'thanh_ktmt', 2),
(99990009, 'Dương Lê Minh', 'duongleminh@gmail.com', 'minh_cvht', 2),
(99990010, 'Nguyễn Quang Minh', 'Minh_97', 'minhml', 2),
(99990011, 'Hoàng Xuân Tùng', 'TS.Hoang xuan tung', 'tung_ttvmmt', 2),
(99990012, 'Hồ Đắc Phương', 'Ho Dac Phuong', 'phuong_mmt', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_students_company` (`CompanyID`),
  ADD KEY `FK_students_teacher` (`TeacherID`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Nickname` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18021314;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99990008;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99990013;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `company`
--
ALTER TABLE `company`
  ADD CONSTRAINT `FK_company_id_user` FOREIGN KEY (`id`) REFERENCES `user` (`id`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `FK_students_company` FOREIGN KEY (`CompanyID`) REFERENCES `company` (`id`),
  ADD CONSTRAINT `FK_students_id_user` FOREIGN KEY (`id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_students_teacher` FOREIGN KEY (`TeacherID`) REFERENCES `teacher` (`id`);

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `FK_teacher_id_user` FOREIGN KEY (`id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
