-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 17, 2023 lúc 11:03 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `uwc 2.0`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `back officer`
--

CREATE TABLE `back officer` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `BirthDay` date NOT NULL,
  `Address` varchar(1000) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Image` varchar(500) DEFAULT NULL,
  `Identity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `back officer`
--

INSERT INTO `back officer` (`ID`, `Name`, `BirthDay`, `Address`, `Email`, `Phone`, `Gender`, `Image`, `Identity`) VALUES
(1, 'Trần Văn A', '1995-09-01', 'Phường Thảo Điền, Quận 2, TP.Hồ Chí Minh', 'nva@gmail.com', '1237825256', 'Nam', '', '1234567891011'),
(2, 'Phạm Thị C', '1999-12-16', 'Phường 7, Quận 3, TP.Hồ Chí Minh', 'ptc@gmail.com', '6589658959', 'Nữ', '', '1234567891012'),
(3, 'Lê Văn D', '1980-09-10', 'Phường Cầu Kho, Quận 1, TP.Hồ Chí Minh', 'lvd@gmail.com', '5574252247', 'Nam', '', '1234567891013'),
(4, 'Nguyễn Thị M', '1985-04-10', 'Phường Bến Thành, Quận 1, TP.Hồ Chí Minh', 'ntm@gmail.com', '5689265512', 'Nữ', '', '1234567891014'),
(5, 'Hồ Văn C', '1998-01-01', 'Phường 7, Quận 3, TP.Hồ Chí Minh', 'hvc@gmail.com', '5353668300', 'Nam', '', '1234567891015'),
(6, 'Lê Văn N', '1999-06-01', 'Phường Thủ Thiêm, Quận 2, TP.Hồ Chí Minh', 'lvn@gmail.com', '6455825521', 'Nam', '', '1234567891016');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `calender`
--

CREATE TABLE `calender` (
  `ID` int(11) NOT NULL,
  `Owner_ID` int(11) NOT NULL,
  `Task list` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `calender`
--

INSERT INTO `calender` (`ID`, `Owner_ID`, `Task list`) VALUES
(1, 5, '1'),
(2, 6, '8');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `employee`
--

CREATE TABLE `employee` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `BirthDay` date NOT NULL,
  `Address` varchar(1000) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Role` varchar(50) NOT NULL,
  `Identity` varchar(100) NOT NULL,
  `Image` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `employee`
--

INSERT INTO `employee` (`ID`, `Name`, `BirthDay`, `Address`, `Email`, `Phone`, `Gender`, `Password`, `Role`, `Identity`, `Image`) VALUES
(1, 'Nguyễn Văn A', '2000-01-16', 'Phường Linh Trung, Thành phố Thủ Đức, TP.Hồ Chí Minh', 'a@gmail.com', '0123456789', 'Nam', '12345', 'Collector', '1234567891017', ''),
(2, 'Đặng Thị T', '2001-06-16', 'TP Thủ Đức, TP.Hồ Chí Minh', 'dtt@gmail.com', '5355579511', 'Nữ', '2585333852', 'Janitor', '1234567891018', ''),
(3, 'Trần Văn L', '1996-04-09', 'Quận Tân Bình, TP.Hồ Chí Minh', 'tvl@gmail.com', '2558655724', 'Nam', '353215102', 'Collector', '1234567891019', ''),
(4, 'Đỗ Văn H', '1995-04-10', 'Quận Bình Tân, TP.Hồ Chí Minh', 'dvh@gmail.com', '5225222525', 'Nam', '524201420424', 'Janitor', '1234567891020', ''),
(5, 'Hồ Văn G', '2004-02-09', 'Quận 7, TP.Hồ Chí Minh', 'hvg@gmail.com', '2520522125', 'Nam', '5521dccv', 'Janitor', '1234567891021', ''),
(6, 'Nguyễn Thị A', '2002-12-11', 'Quận Phú Nhuận, TP.Hồ Chí Minh', 'nta@gmail.com', '5252151512', 'Nữ', 'dggn22', 'Collector', '1234567891022', ''),
(7, 'Lê Thị B', '2003-04-15', 'Quận Bình Thạnh, TP.Hồ Chí Minh', 'ltb@gmail.com', '5301505324', 'Nữ', 'dfg22', 'Janitor', '1234567891023', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mcp`
--

CREATE TABLE `mcp` (
  `ID` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Capacity` int(11) NOT NULL,
  `Status` int(11) NOT NULL,
  `Location` varchar(800) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `mcp`
--

INSERT INTO `mcp` (`ID`, `Name`, `Capacity`, `Status`, `Location`) VALUES
(1, 'MCP1', 50, 50, '27, đường số 6, phường Linh Xuân, thành phố Thủ Đức, TP. Hồ Chí Minh'),
(2, 'MCP 2', 600, 80, '01, đường số 6, phường Linh Xuân, TP Thủ Đức, TPHCM'),
(3, 'MCP 3', 500, 100, '10, đường số 6, phường Linh Xuân, TP Thủ Đức, TPHCM'),
(4, 'MCP 4', 600, 10, '15, đường số 6, phường Linh Xuân, TP Thủ Đức, TPHCM'),
(5, 'MCP 6\r\n', 40, 30, '08, đường số 6, phường Linh Xuân, TP Thủ Đức, TPHCM'),
(6, 'MCP 4', 70, 25, '30, đường số 6, phường Linh Xuân, TP Thủ Đức, TPHCM'),
(7, 'MCP 5', 90, 20, '35, đường số 6, phường Linh Xuân, TP Thủ Đức, TPHCM');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `notification`
--

CREATE TABLE `notification` (
  `ID` int(11) NOT NULL,
  `Content` varchar(3000) NOT NULL,
  `Receiver_ID` int(11) NOT NULL,
  `Sender_ID` int(11) NOT NULL,
  `Task_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `notification`
--

INSERT INTO `notification` (`ID`, `Content`, `Receiver_ID`, `Sender_ID`, `Task_ID`) VALUES
(1, 'Một công việc mới vừa được bàn giao cho bạn', 5, 5, 1),
(2, 'Một công việc mới vừa được bàn giao cho bạn', 6, 5, 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `route`
--

CREATE TABLE `route` (
  `ID` int(11) NOT NULL,
  `Begin_location` varchar(800) NOT NULL,
  `End_location` varchar(800) NOT NULL,
  `MCP_list` varchar(500) NOT NULL,
  `Name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `route`
--

INSERT INTO `route` (`ID`, `Begin_location`, `End_location`, `MCP_list`, `Name`) VALUES
(1, '1, đường số 6, phường Linh Xuân, TP Thủ Đức, TPHCM', '300, đường số 6, phường Linh Xuân, TP Thủ Đức, TPHCM', '1,2,3', 'Route 1'),
(2, '1, đường số 8, phường Linh Xuân, TP Thủ Đức, TPHCM', '500, đường số 8, phường Linh Xuân, TP Thủ Đức, TPHCM', '4,5,6', 'Route 2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `task`
--

CREATE TABLE `task` (
  `ID` int(11) NOT NULL,
  `Staff ID` int(11) NOT NULL,
  `MCP ID` int(11) DEFAULT NULL,
  `Status` varchar(50) NOT NULL,
  `Assign Date` date NOT NULL,
  `Duration` time NOT NULL,
  `Vehicle ID` int(11) NOT NULL,
  `Route ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `task`
--

INSERT INTO `task` (`ID`, `Staff ID`, `MCP ID`, `Status`, `Assign Date`, `Duration`, `Vehicle ID`, `Route ID`) VALUES
(1, 5, 1, 'In Progress', '2023-04-21', '00:00:03', 4, NULL),
(8, 6, NULL, 'In Progress', '2023-04-19', '00:00:02', 1, 1),
(9, 2, 3, 'Completed', '2023-04-18', '00:00:01', 6, NULL),
(10, 3, NULL, 'In Progress', '2023-04-16', '00:00:05', 3, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vehicle`
--

CREATE TABLE `vehicle` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Vehicle Number` varchar(200) NOT NULL,
  `Weight` int(11) NOT NULL,
  `Capacity` int(11) NOT NULL,
  `Type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `vehicle`
--

INSERT INTO `vehicle` (`ID`, `Name`, `Vehicle Number`, `Weight`, `Capacity`, `Type`) VALUES
(1, 'Truck 1', '123', 500, 700, 'Truck'),
(2, 'Truck 2', '1230', 400, 600, 'Truck'),
(3, 'Truck 3', '12593', 1000, 100, 'Truck'),
(4, 'Troller 1', '562215', 50, 30, 'Troller'),
(5, 'Troller 2', '5963225', 40, 60, 'Troller'),
(6, 'Troller 3', '36632525', 20, 50, 'Troller');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `back officer`
--
ALTER TABLE `back officer`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `calender`
--
ALTER TABLE `calender`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Owner_ID` (`Owner_ID`);

--
-- Chỉ mục cho bảng `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `mcp`
--
ALTER TABLE `mcp`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Receiver_ID` (`Receiver_ID`),
  ADD KEY `Sender_ID` (`Sender_ID`),
  ADD KEY `Task_ID` (`Task_ID`);

--
-- Chỉ mục cho bảng `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `MCP_ID` (`MCP ID`),
  ADD KEY `Staff_ID` (`Staff ID`),
  ADD KEY `Vehicle_ID` (`Vehicle ID`),
  ADD KEY `Route_ID` (`Route ID`);

--
-- Chỉ mục cho bảng `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `back officer`
--
ALTER TABLE `back officer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `calender`
--
ALTER TABLE `calender`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `employee`
--
ALTER TABLE `employee`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `mcp`
--
ALTER TABLE `mcp`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `notification`
--
ALTER TABLE `notification`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `route`
--
ALTER TABLE `route`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `task`
--
ALTER TABLE `task`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `calender`
--
ALTER TABLE `calender`
  ADD CONSTRAINT `calender_ibfk_1` FOREIGN KEY (`Owner_ID`) REFERENCES `employee` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `notification_ibfk_3` FOREIGN KEY (`Task_ID`) REFERENCES `task` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `task_ibfk_1` FOREIGN KEY (`MCP ID`) REFERENCES `mcp` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `task_ibfk_2` FOREIGN KEY (`Staff ID`) REFERENCES `employee` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `task_ibfk_3` FOREIGN KEY (`Vehicle ID`) REFERENCES `vehicle` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `task_ibfk_4` FOREIGN KEY (`Route ID`) REFERENCES `route` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
