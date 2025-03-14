-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Jan 24, 2025 at 03:43 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `virtual_lab_sim`
--

-- --------------------------------------------------------

--
-- Table structure for table `stud_name`
--

CREATE TABLE `stud_name` (
  `student_name` varchar(50) NOT NULL,
  `question_1_marks` float DEFAULT 0,
  `question_2_marks` float DEFAULT 0,
  `question_3_marks` float DEFAULT 0,
  `question_4_marks` float DEFAULT 0,
  `question_5_marks` float DEFAULT 0,
  `question_6_marks` float DEFAULT 0,
  `question_7_marks` float DEFAULT 0,
  `question_8_marks` float DEFAULT 0,
  `question_9_marks` float DEFAULT 0,
  `question_10_marks` float DEFAULT 0,
  `teacher_name` varchar(10) NOT NULL,
  `subject_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stud_name`
--

INSERT INTO `stud_name` (`student_name`, `question_1_marks`, `question_2_marks`, `question_3_marks`, `question_4_marks`, `question_5_marks`, `question_6_marks`, `question_7_marks`, `question_8_marks`, `question_9_marks`, `question_10_marks`, `teacher_name`, `subject_name`) VALUES
('abhi', 0, 0.5, 0.5, 0, 0, 0, 0, 0, 0, 0, '', 'Anatomy'),
('abhi', -0.07, 0.13, 0.29, 0.86, 0.41, 0.11, NULL, NULL, NULL, NULL, '', 'Chemistry'),
('B2', 0, 0, 0, 0.5, 0.5, 0, 0, 0.5, 0.5, 0.5, '', 'Anatomy'),
('Student_1', 5, 4, 5, 1, 5, 3, 2, 4, 5, 4, 'C2', 'Biology'),
('Student_10', 4, 3, 5, 5, 1, 1, 1, 5, 3, 5, 'B2', 'Chemistry'),
('Student_100', 1, 3, 1, 5, 5, 4, 1, 4, 5, 1, 'C1', 'Anatomy'),
('Student_101', 5, 1, 4, 2, 1, 3, 3, 1, 4, 4, 'C1', 'Anatomy'),
('Student_102', 1, 5, 5, 4, 5, 2, 5, 5, 2, 3, 'C2', 'Anatomy'),
('Student_103', 1, 4, 5, 4, 4, 3, 1, 4, 1, 2, 'B3', 'Chemistry'),
('Student_104', 4, 3, 2, 2, 5, 4, 2, 5, 4, 3, 'C2', 'Anatomy'),
('Student_105', 2, 1, 1, 2, 2, 5, 2, 1, 2, 4, 'A3', 'Biology'),
('Student_106', 5, 4, 1, 5, 5, 2, 4, 1, 5, 2, 'C1', 'Chemistry'),
('Student_107', 4, 3, 1, 4, 5, 2, 2, 2, 5, 5, 'A10', 'Chemistry'),
('Student_108', 4, 3, 4, 5, 3, 2, 2, 5, 3, 3, 'B2', 'Biology'),
('Student_109', 5, 5, 1, 1, 3, 1, 5, 2, 3, 5, 'B3', 'Biology'),
('Student_11', 1, 1, 2, 4, 3, 2, 2, 5, 2, 4, 'B2', 'Chemistry'),
('Student_110', 4, 2, 4, 3, 2, 3, 4, 2, 5, 3, 'A10', 'Anatomy'),
('Student_111', 5, 4, 1, 5, 4, 1, 3, 1, 5, 1, 'B3', 'Biology'),
('Student_112', 5, 1, 5, 2, 5, 3, 4, 2, 4, 5, 'A10', 'Chemistry'),
('Student_113', 2, 1, 5, 2, 1, 5, 1, 2, 4, 4, 'A10', 'Biology'),
('Student_114', 2, 2, 2, 5, 4, 2, 4, 2, 4, 3, 'C1', 'Anatomy'),
('Student_115', 4, 5, 5, 2, 3, 1, 5, 5, 4, 2, 'B2', 'Anatomy'),
('Student_116', 4, 4, 2, 2, 4, 5, 5, 3, 5, 3, 'A10', 'Biology'),
('Student_117', 4, 2, 1, 1, 3, 2, 1, 1, 1, 4, 'B3', 'Chemistry'),
('Student_118', 1, 1, 2, 2, 1, 1, 3, 2, 5, 3, 'C2', 'Biology'),
('Student_119', 5, 2, 4, 1, 5, 2, 3, 1, 5, 4, 'A3', 'Anatomy'),
('Student_12', 5, 3, 2, 2, 4, 3, 1, 1, 5, 2, 'B2', 'Anatomy'),
('Student_120', 3, 4, 4, 1, 1, 3, 3, 1, 5, 2, 'C2', 'Biology'),
('Student_121', 3, 4, 4, 3, 3, 4, 1, 1, 2, 3, 'B2', 'Anatomy'),
('Student_122', 4, 3, 2, 2, 4, 3, 2, 1, 4, 5, 'B2', 'Biology'),
('Student_123', 2, 3, 1, 3, 5, 5, 3, 1, 2, 3, 'A10', 'Anatomy'),
('Student_124', 5, 4, 2, 5, 5, 3, 2, 1, 3, 3, 'C2', 'Biology'),
('Student_125', 1, 2, 3, 1, 2, 5, 5, 1, 3, 2, 'C2', 'Chemistry'),
('Student_126', 4, 1, 2, 2, 1, 4, 5, 2, 4, 4, 'B2', 'Chemistry'),
('Student_127', 4, 4, 1, 3, 4, 3, 4, 4, 2, 4, 'C2', 'Anatomy'),
('Student_128', 3, 1, 3, 5, 2, 2, 2, 1, 1, 1, 'B2', 'Biology'),
('Student_129', 2, 5, 3, 3, 3, 1, 2, 1, 3, 1, 'B2', 'Chemistry'),
('Student_13', 5, 5, 1, 3, 5, 3, 3, 2, 3, 1, 'A10', 'Anatomy'),
('Student_130', 3, 4, 5, 1, 4, 1, 5, 3, 2, 1, 'A10', 'Anatomy'),
('Student_131', 1, 4, 5, 1, 1, 4, 2, 2, 3, 2, 'A3', 'Biology'),
('Student_132', 2, 4, 1, 2, 3, 3, 1, 3, 4, 4, 'B2', 'Chemistry'),
('Student_133', 3, 4, 2, 5, 4, 2, 1, 4, 4, 4, 'B2', 'Biology'),
('Student_134', 2, 4, 3, 3, 3, 3, 2, 2, 1, 3, 'C1', 'Anatomy'),
('Student_135', 2, 2, 4, 5, 3, 5, 5, 1, 2, 5, 'A3', 'Anatomy'),
('Student_136', 5, 5, 4, 4, 3, 5, 4, 2, 1, 1, 'B2', 'Chemistry'),
('Student_137', 1, 3, 5, 2, 3, 2, 3, 1, 1, 3, 'C1', 'Chemistry'),
('Student_138', 3, 1, 2, 4, 4, 3, 2, 4, 1, 1, 'B2', 'Chemistry'),
('Student_139', 4, 1, 1, 4, 4, 3, 4, 2, 4, 5, 'A10', 'Chemistry'),
('Student_14', 3, 3, 2, 4, 5, 1, 3, 4, 5, 2, 'A10', 'Biology'),
('Student_140', 5, 3, 1, 3, 1, 3, 3, 3, 3, 5, 'C2', 'Anatomy'),
('Student_141', 1, 3, 5, 4, 4, 5, 1, 1, 1, 2, 'B3', 'Anatomy'),
('Student_142', 2, 1, 3, 5, 5, 5, 3, 2, 3, 3, 'A10', 'Biology'),
('Student_143', 1, 2, 4, 2, 1, 1, 1, 4, 4, 3, 'B2', 'Anatomy'),
('Student_144', 2, 4, 1, 5, 1, 2, 1, 5, 5, 1, 'C2', 'Chemistry'),
('Student_145', 1, 3, 2, 5, 2, 2, 3, 4, 4, 4, 'A10', 'Biology'),
('Student_146', 1, 3, 1, 2, 1, 3, 4, 5, 1, 2, 'C2', 'Biology'),
('Student_147', 4, 1, 4, 2, 5, 5, 2, 3, 2, 2, 'C2', 'Chemistry'),
('Student_148', 2, 4, 2, 2, 2, 3, 5, 5, 2, 4, 'C1', 'Chemistry'),
('Student_149', 1, 1, 4, 3, 4, 5, 2, 5, 3, 3, 'C2', 'Anatomy'),
('Student_15', 4, 4, 5, 1, 5, 4, 2, 1, 4, 1, 'B2', 'Chemistry'),
('Student_150', 5, 1, 4, 4, 4, 4, 1, 3, 1, 4, 'C1', 'Anatomy'),
('Student_151', 3, 4, 3, 5, 1, 2, 5, 4, 2, 1, 'B2', 'Biology'),
('Student_152', 1, 2, 2, 3, 2, 5, 4, 3, 2, 5, 'B2', 'Anatomy'),
('Student_153', 3, 4, 5, 4, 4, 3, 2, 2, 2, 2, 'C2', 'Chemistry'),
('Student_154', 5, 1, 2, 5, 3, 5, 2, 3, 5, 5, 'A10', 'Biology'),
('Student_155', 4, 2, 2, 2, 3, 1, 2, 5, 2, 1, 'A3', 'Biology'),
('Student_156', 3, 1, 5, 2, 2, 1, 1, 5, 4, 5, 'C1', 'Biology'),
('Student_157', 1, 1, 1, 3, 4, 3, 5, 3, 5, 3, 'B3', 'Anatomy'),
('Student_158', 3, 4, 4, 4, 1, 1, 5, 1, 1, 1, 'C2', 'Anatomy'),
('Student_159', 3, 3, 2, 4, 3, 1, 1, 3, 3, 4, 'B3', 'Chemistry'),
('Student_16', 1, 3, 3, 1, 2, 5, 1, 1, 2, 5, 'B3', 'Biology'),
('Student_160', 2, 5, 1, 2, 4, 2, 4, 4, 3, 5, 'A10', 'Chemistry'),
('Student_161', 2, 2, 3, 3, 4, 3, 2, 4, 4, 4, 'C2', 'Biology'),
('Student_162', 4, 1, 1, 2, 3, 4, 5, 3, 5, 2, 'A10', 'Anatomy'),
('Student_163', 4, 1, 1, 4, 5, 3, 3, 2, 4, 2, 'A10', 'Anatomy'),
('Student_164', 1, 5, 2, 1, 5, 4, 2, 5, 2, 2, 'C2', 'Biology'),
('Student_165', 3, 4, 1, 3, 4, 3, 1, 4, 5, 2, 'C2', 'Chemistry'),
('Student_166', 2, 2, 1, 4, 2, 2, 1, 1, 2, 5, 'A10', 'Biology'),
('Student_167', 4, 2, 3, 4, 4, 2, 2, 4, 5, 2, 'B2', 'Chemistry'),
('Student_168', 1, 1, 5, 4, 4, 1, 1, 4, 4, 1, 'C2', 'Biology'),
('Student_169', 5, 5, 1, 2, 4, 5, 2, 4, 1, 1, 'A3', 'Anatomy'),
('Student_17', 5, 5, 4, 5, 5, 1, 1, 5, 1, 5, 'A10', 'Biology'),
('Student_170', 2, 2, 4, 1, 5, 5, 5, 4, 1, 1, 'B3', 'Anatomy'),
('Student_171', 2, 5, 1, 5, 4, 3, 4, 4, 4, 4, 'C2', 'Chemistry'),
('Student_172', 5, 1, 5, 3, 3, 5, 2, 2, 2, 5, 'C1', 'Anatomy'),
('Student_173', 1, 1, 2, 2, 2, 5, 3, 1, 3, 3, 'C1', 'Chemistry'),
('Student_174', 4, 3, 4, 5, 5, 5, 1, 5, 4, 4, 'A10', 'Anatomy'),
('Student_175', 5, 3, 3, 5, 1, 4, 1, 4, 5, 4, 'C2', 'Biology'),
('Student_176', 5, 3, 5, 2, 1, 5, 3, 4, 5, 5, 'B3', 'Anatomy'),
('Student_177', 2, 2, 2, 3, 1, 2, 1, 3, 4, 2, 'B3', 'Chemistry'),
('Student_178', 4, 4, 2, 5, 3, 5, 3, 5, 5, 5, 'B3', 'Anatomy'),
('Student_179', 1, 5, 5, 5, 3, 4, 2, 1, 4, 2, 'A10', 'Chemistry'),
('Student_18', 4, 4, 2, 3, 3, 2, 2, 3, 3, 4, 'B3', 'Chemistry'),
('Student_180', 4, 5, 5, 3, 1, 1, 1, 2, 1, 1, 'B3', 'Chemistry'),
('Student_181', 3, 3, 2, 5, 3, 4, 1, 1, 2, 1, 'B2', 'Chemistry'),
('Student_182', 3, 2, 4, 2, 5, 3, 4, 1, 3, 3, 'C2', 'Chemistry'),
('Student_183', 5, 2, 2, 4, 3, 3, 4, 2, 4, 4, 'A10', 'Chemistry'),
('Student_184', 2, 5, 4, 2, 5, 3, 1, 3, 5, 2, 'A10', 'Biology'),
('Student_185', 5, 4, 4, 4, 3, 5, 1, 5, 3, 1, 'B2', 'Biology'),
('Student_186', 2, 3, 5, 3, 3, 2, 1, 3, 2, 4, 'B3', 'Biology'),
('Student_187', 5, 5, 2, 1, 4, 5, 3, 2, 4, 1, 'C1', 'Biology'),
('Student_188', 1, 1, 1, 5, 4, 2, 3, 2, 2, 1, 'C2', 'Biology'),
('Student_189', 5, 2, 2, 3, 4, 3, 2, 5, 5, 5, 'B2', 'Anatomy'),
('Student_19', 4, 2, 5, 4, 2, 3, 1, 2, 3, 3, 'C1', 'Anatomy'),
('Student_190', 4, 3, 1, 5, 2, 4, 1, 1, 4, 5, 'C1', 'Biology'),
('Student_191', 4, 4, 2, 2, 3, 1, 4, 5, 5, 4, 'B3', 'Chemistry'),
('Student_192', 3, 5, 5, 3, 1, 2, 3, 1, 3, 1, 'A10', 'Anatomy'),
('Student_193', 2, 5, 5, 4, 3, 2, 5, 2, 2, 5, 'B2', 'Chemistry'),
('Student_194', 5, 4, 2, 4, 5, 2, 1, 3, 5, 4, 'C2', 'Biology'),
('Student_195', 5, 1, 1, 2, 3, 4, 3, 4, 4, 3, 'A3', 'Biology'),
('Student_196', 4, 3, 4, 2, 1, 5, 2, 2, 5, 5, 'B2', 'Biology'),
('Student_197', 5, 2, 3, 3, 2, 2, 2, 2, 3, 5, 'B3', 'Anatomy'),
('Student_198', 2, 2, 2, 3, 3, 1, 1, 1, 4, 2, 'A3', 'Anatomy'),
('Student_199', 2, 2, 1, 2, 5, 5, 4, 2, 5, 1, 'B2', 'Chemistry'),
('Student_2', 2, 4, 2, 1, 1, 1, 5, 5, 3, 1, 'B2', 'Anatomy'),
('Student_20', 2, 5, 3, 2, 5, 3, 5, 3, 4, 4, 'C2', 'Chemistry'),
('Student_200', 2, 3, 1, 5, 3, 1, 3, 3, 4, 1, 'C1', 'Chemistry'),
('Student_201', 3, 1, 5, 2, 1, 1, 5, 1, 5, 2, 'C1', 'Biology'),
('Student_202', 5, 2, 5, 4, 1, 4, 4, 4, 2, 5, 'A10', 'Anatomy'),
('Student_203', 2, 3, 5, 4, 2, 5, 5, 1, 5, 3, 'B3', 'Anatomy'),
('Student_204', 3, 5, 3, 2, 2, 4, 4, 4, 3, 2, 'C2', 'Anatomy'),
('Student_205', 1, 5, 5, 5, 4, 4, 5, 1, 2, 3, 'B2', 'Anatomy'),
('Student_206', 4, 2, 4, 4, 5, 1, 3, 3, 2, 1, 'A10', 'Biology'),
('Student_207', 2, 4, 5, 2, 2, 1, 2, 2, 5, 2, 'C1', 'Chemistry'),
('Student_208', 4, 4, 4, 3, 3, 2, 5, 4, 2, 2, 'A10', 'Biology'),
('Student_209', 2, 3, 4, 5, 4, 3, 5, 3, 3, 5, 'A3', 'Chemistry'),
('Student_21', 3, 3, 5, 3, 2, 3, 1, 3, 4, 4, 'B3', 'Biology'),
('Student_210', 4, 4, 2, 2, 3, 5, 4, 5, 4, 4, 'B3', 'Biology'),
('Student_211', 1, 5, 5, 5, 3, 3, 1, 5, 1, 5, 'A10', 'Chemistry'),
('Student_212', 2, 4, 5, 4, 4, 1, 5, 3, 4, 2, 'A3', 'Anatomy'),
('Student_213', 1, 5, 3, 1, 5, 5, 3, 4, 3, 2, 'A3', 'Anatomy'),
('Student_214', 2, 2, 3, 1, 4, 2, 4, 2, 4, 3, 'A3', 'Anatomy'),
('Student_215', 1, 5, 5, 3, 3, 3, 4, 5, 4, 5, 'C2', 'Anatomy'),
('Student_216', 5, 5, 5, 3, 5, 5, 5, 1, 5, 1, 'A3', 'Chemistry'),
('Student_217', 1, 1, 3, 3, 4, 3, 4, 5, 2, 1, 'B2', 'Biology'),
('Student_218', 2, 5, 2, 4, 2, 5, 5, 5, 3, 3, 'B3', 'Anatomy'),
('Student_219', 2, 5, 2, 5, 3, 5, 2, 2, 2, 4, 'B3', 'Anatomy'),
('Student_22', 1, 1, 4, 3, 3, 4, 2, 1, 3, 2, 'B3', 'Anatomy'),
('Student_220', 1, 1, 5, 4, 2, 1, 5, 3, 5, 1, 'A10', 'Biology'),
('Student_221', 2, 5, 2, 1, 1, 3, 5, 4, 1, 5, 'A3', 'Anatomy'),
('Student_222', 1, 4, 3, 2, 3, 3, 1, 3, 3, 5, 'B3', 'Chemistry'),
('Student_223', 3, 1, 1, 5, 4, 5, 3, 2, 2, 2, 'C2', 'Chemistry'),
('Student_224', 5, 3, 3, 3, 4, 5, 2, 5, 3, 3, 'C1', 'Biology'),
('Student_225', 1, 5, 4, 2, 5, 2, 1, 2, 4, 2, 'A10', 'Biology'),
('Student_226', 5, 5, 1, 2, 2, 3, 2, 2, 2, 1, 'C2', 'Chemistry'),
('Student_227', 5, 2, 4, 5, 2, 1, 2, 3, 2, 2, 'B3', 'Chemistry'),
('Student_228', 1, 1, 3, 4, 3, 5, 4, 1, 1, 1, 'B3', 'Biology'),
('Student_229', 4, 4, 3, 3, 1, 1, 1, 3, 3, 2, 'A3', 'Biology'),
('Student_23', 5, 4, 3, 2, 1, 4, 5, 1, 1, 3, 'A3', 'Anatomy'),
('Student_230', 4, 1, 4, 2, 4, 2, 4, 3, 4, 4, 'B3', 'Chemistry'),
('Student_231', 5, 2, 1, 1, 2, 2, 4, 1, 1, 4, 'A10', 'Anatomy'),
('Student_232', 4, 3, 4, 2, 3, 5, 5, 2, 3, 5, 'B3', 'Anatomy'),
('Student_233', 3, 2, 2, 3, 4, 3, 3, 5, 3, 3, 'C2', 'Biology'),
('Student_234', 4, 3, 1, 3, 1, 1, 2, 2, 1, 4, 'B2', 'Anatomy'),
('Student_235', 3, 1, 4, 4, 4, 1, 1, 2, 4, 4, 'A3', 'Biology'),
('Student_236', 5, 4, 3, 1, 4, 1, 3, 1, 3, 4, 'B2', 'Anatomy'),
('Student_237', 1, 5, 1, 2, 5, 3, 4, 4, 2, 2, 'A3', 'Biology'),
('Student_238', 1, 1, 1, 3, 1, 2, 2, 3, 3, 3, 'B3', 'Anatomy'),
('Student_239', 4, 4, 1, 3, 2, 4, 4, 5, 1, 2, 'C2', 'Chemistry'),
('Student_24', 1, 2, 4, 4, 5, 3, 5, 4, 4, 4, 'C2', 'Chemistry'),
('Student_240', 3, 5, 1, 2, 3, 5, 1, 3, 5, 5, 'A10', 'Anatomy'),
('Student_241', 1, 5, 1, 3, 1, 3, 5, 4, 3, 5, 'C1', 'Biology'),
('Student_242', 5, 3, 4, 3, 2, 2, 1, 4, 1, 4, 'C1', 'Chemistry'),
('Student_243', 5, 2, 2, 3, 2, 1, 3, 2, 1, 2, 'B3', 'Biology'),
('Student_244', 5, 4, 2, 2, 4, 1, 2, 3, 1, 3, 'B3', 'Biology'),
('Student_245', 1, 1, 4, 2, 1, 4, 2, 5, 5, 2, 'C2', 'Anatomy'),
('Student_246', 4, 5, 3, 4, 4, 4, 5, 2, 3, 4, 'A3', 'Chemistry'),
('Student_247', 4, 3, 5, 2, 5, 5, 1, 3, 3, 2, 'C2', 'Chemistry'),
('Student_248', 1, 1, 2, 5, 4, 5, 2, 1, 5, 3, 'A10', 'Biology'),
('Student_249', 4, 4, 4, 2, 5, 5, 4, 1, 1, 4, 'C1', 'Anatomy'),
('Student_25', 5, 1, 2, 4, 5, 3, 3, 3, 1, 4, 'A3', 'Anatomy'),
('Student_250', 3, 2, 4, 1, 5, 3, 3, 3, 5, 5, 'A3', 'Chemistry'),
('Student_251', 3, 3, 2, 5, 2, 4, 5, 4, 4, 2, 'B3', 'Chemistry'),
('Student_252', 5, 3, 4, 4, 5, 5, 5, 3, 2, 5, 'C2', 'Anatomy'),
('Student_253', 4, 2, 3, 5, 3, 5, 2, 1, 3, 1, 'C1', 'Chemistry'),
('Student_254', 2, 1, 5, 4, 5, 2, 1, 3, 2, 4, 'B2', 'Biology'),
('Student_255', 1, 4, 5, 4, 5, 1, 5, 1, 1, 4, 'A10', 'Chemistry'),
('Student_256', 1, 3, 3, 1, 3, 4, 4, 4, 5, 2, 'C1', 'Chemistry'),
('Student_257', 4, 4, 1, 4, 3, 5, 5, 1, 1, 2, 'B2', 'Anatomy'),
('Student_258', 4, 4, 3, 2, 4, 1, 3, 1, 4, 4, 'C1', 'Biology'),
('Student_259', 5, 1, 4, 4, 5, 1, 2, 2, 4, 3, 'B3', 'Chemistry'),
('Student_26', 4, 3, 2, 1, 4, 5, 1, 4, 2, 2, 'C2', 'Biology'),
('Student_260', 3, 5, 1, 2, 3, 4, 5, 1, 4, 5, 'C2', 'Chemistry'),
('Student_261', 5, 5, 4, 2, 5, 3, 4, 1, 3, 3, 'B2', 'Biology'),
('Student_262', 4, 3, 3, 5, 1, 4, 1, 4, 5, 4, 'B3', 'Biology'),
('Student_263', 1, 2, 1, 5, 2, 5, 3, 2, 5, 4, 'B2', 'Anatomy'),
('Student_264', 3, 2, 1, 3, 4, 5, 2, 1, 4, 3, 'C1', 'Chemistry'),
('Student_265', 2, 5, 3, 2, 1, 5, 5, 3, 2, 3, 'B2', 'Chemistry'),
('Student_266', 4, 3, 2, 5, 1, 5, 1, 2, 2, 4, 'C2', 'Chemistry'),
('Student_267', 4, 5, 2, 5, 3, 1, 2, 4, 2, 3, 'B2', 'Chemistry'),
('Student_268', 1, 5, 4, 5, 4, 1, 1, 2, 2, 3, 'B3', 'Biology'),
('Student_269', 4, 5, 5, 3, 2, 4, 2, 1, 3, 2, 'C1', 'Chemistry'),
('Student_27', 3, 4, 3, 1, 5, 4, 3, 4, 3, 4, 'B3', 'Biology'),
('Student_270', 3, 2, 5, 4, 4, 3, 3, 2, 3, 2, 'C1', 'Biology'),
('Student_271', 3, 5, 1, 3, 5, 2, 5, 4, 1, 5, 'A10', 'Biology'),
('Student_272', 2, 2, 5, 3, 5, 2, 1, 4, 1, 1, 'C2', 'Anatomy'),
('Student_273', 3, 3, 3, 5, 1, 4, 4, 1, 2, 5, 'C1', 'Biology'),
('Student_274', 4, 2, 4, 2, 2, 4, 5, 4, 2, 4, 'A3', 'Anatomy'),
('Student_275', 4, 4, 4, 5, 4, 5, 5, 5, 5, 5, 'B3', 'Chemistry'),
('Student_276', 4, 4, 1, 5, 1, 4, 2, 5, 5, 2, 'B2', 'Biology'),
('Student_277', 4, 3, 4, 4, 2, 4, 3, 2, 4, 1, 'B2', 'Chemistry'),
('Student_278', 1, 3, 1, 4, 1, 3, 5, 2, 4, 2, 'C1', 'Chemistry'),
('Student_279', 2, 1, 1, 5, 1, 5, 3, 3, 3, 1, 'B3', 'Chemistry'),
('Student_28', 2, 5, 4, 3, 1, 5, 1, 5, 3, 5, 'B3', 'Biology'),
('Student_280', 1, 5, 5, 5, 2, 3, 4, 3, 3, 5, 'C1', 'Anatomy'),
('Student_281', 5, 2, 5, 3, 2, 3, 3, 3, 3, 4, 'A3', 'Chemistry'),
('Student_282', 3, 4, 4, 3, 3, 2, 2, 2, 3, 4, 'B2', 'Chemistry'),
('Student_283', 4, 2, 3, 1, 5, 1, 3, 5, 4, 5, 'A10', 'Chemistry'),
('Student_284', 5, 5, 3, 5, 5, 5, 3, 2, 1, 5, 'C1', 'Biology'),
('Student_285', 1, 2, 5, 3, 2, 2, 3, 3, 5, 4, 'A3', 'Anatomy'),
('Student_286', 4, 1, 4, 2, 4, 2, 5, 5, 5, 3, 'C1', 'Chemistry'),
('Student_287', 2, 3, 3, 4, 3, 2, 3, 4, 4, 3, 'C2', 'Biology'),
('Student_288', 1, 1, 1, 1, 5, 5, 4, 1, 3, 3, 'C2', 'Biology'),
('Student_289', 4, 2, 3, 2, 1, 1, 2, 1, 5, 2, 'A3', 'Biology'),
('Student_29', 2, 3, 3, 2, 1, 3, 2, 5, 2, 1, 'B3', 'Anatomy'),
('Student_290', 2, 4, 1, 3, 3, 3, 5, 1, 2, 1, 'A10', 'Chemistry'),
('Student_291', 3, 4, 2, 3, 4, 4, 2, 4, 5, 2, 'B2', 'Biology'),
('Student_292', 5, 4, 4, 5, 5, 2, 1, 3, 5, 2, 'A10', 'Anatomy'),
('Student_293', 1, 4, 4, 5, 4, 2, 4, 3, 3, 5, 'B2', 'Chemistry'),
('Student_294', 1, 2, 2, 5, 2, 1, 2, 3, 2, 1, 'B2', 'Chemistry'),
('Student_295', 1, 1, 2, 4, 1, 3, 1, 1, 2, 3, 'C1', 'Biology'),
('Student_296', 1, 2, 1, 2, 1, 3, 2, 4, 5, 1, 'C2', 'Anatomy'),
('Student_297', 5, 2, 5, 2, 5, 2, 1, 3, 4, 1, 'B3', 'Anatomy'),
('Student_298', 4, 4, 5, 2, 5, 4, 1, 5, 5, 5, 'A3', 'Anatomy'),
('Student_299', 5, 4, 5, 1, 1, 4, 4, 1, 2, 3, 'C1', 'Chemistry'),
('Student_3', 4, 3, 5, 5, 2, 2, 5, 4, 3, 1, 'A10', 'Chemistry'),
('Student_30', 4, 2, 2, 1, 3, 3, 4, 4, 5, 3, 'C2', 'Chemistry'),
('Student_300', 2, 5, 3, 4, 5, 5, 3, 5, 5, 5, 'B2', 'Biology'),
('Student_31', 1, 2, 3, 2, 1, 3, 3, 4, 2, 3, 'C1', 'Biology'),
('Student_32', 1, 3, 1, 3, 4, 1, 1, 5, 5, 5, 'A10', 'Anatomy'),
('Student_33', 4, 4, 3, 1, 5, 3, 3, 2, 3, 5, 'C2', 'Biology'),
('Student_34', 5, 5, 2, 3, 1, 5, 4, 4, 3, 1, 'B2', 'Chemistry'),
('Student_35', 4, 2, 4, 3, 5, 1, 3, 1, 2, 5, 'C1', 'Biology'),
('Student_36', 4, 4, 2, 4, 1, 1, 4, 1, 4, 1, 'C2', 'Anatomy'),
('Student_37', 5, 5, 1, 3, 3, 1, 3, 3, 4, 2, 'A10', 'Anatomy'),
('Student_38', 1, 4, 5, 2, 3, 3, 3, 1, 3, 2, 'B2', 'Biology'),
('Student_39', 2, 3, 4, 5, 5, 1, 4, 5, 2, 1, 'B3', 'Chemistry'),
('Student_4', 2, 4, 1, 2, 3, 4, 2, 3, 5, 4, 'A10', 'Chemistry'),
('Student_40', 4, 2, 4, 5, 5, 3, 3, 4, 2, 3, 'B2', 'Biology'),
('Student_41', 1, 2, 5, 5, 4, 4, 1, 1, 5, 3, 'B2', 'Chemistry'),
('Student_42', 3, 4, 3, 4, 5, 4, 5, 3, 5, 1, 'A10', 'Chemistry'),
('Student_43', 3, 2, 2, 2, 5, 2, 2, 1, 3, 5, 'C1', 'Chemistry'),
('Student_44', 3, 1, 5, 5, 1, 3, 2, 3, 5, 4, 'A3', 'Biology'),
('Student_45', 4, 1, 1, 4, 4, 4, 5, 2, 3, 5, 'B3', 'Biology'),
('Student_46', 3, 1, 4, 4, 4, 2, 5, 2, 4, 3, 'C1', 'Biology'),
('Student_47', 2, 4, 5, 3, 4, 5, 2, 2, 3, 3, 'B3', 'Anatomy'),
('Student_48', 3, 2, 2, 1, 2, 3, 4, 3, 4, 2, 'B2', 'Anatomy'),
('Student_49', 2, 1, 1, 5, 3, 2, 3, 4, 5, 1, 'A10', 'Biology'),
('Student_5', 1, 1, 5, 1, 2, 4, 1, 3, 4, 1, 'A3', 'Biology'),
('Student_50', 1, 4, 1, 2, 1, 2, 2, 2, 2, 5, 'A10', 'Chemistry'),
('Student_51', 5, 4, 5, 1, 1, 1, 3, 4, 1, 5, 'B2', 'Anatomy'),
('Student_52', 5, 1, 2, 1, 1, 4, 3, 1, 5, 1, 'C2', 'Anatomy'),
('Student_53', 3, 1, 4, 5, 4, 5, 3, 3, 5, 1, 'A3', 'Chemistry'),
('Student_54', 1, 3, 1, 3, 4, 3, 2, 3, 5, 5, 'B3', 'Anatomy'),
('Student_55', 1, 2, 4, 1, 4, 4, 5, 4, 5, 1, 'A10', 'Anatomy'),
('Student_56', 3, 4, 3, 5, 1, 5, 4, 2, 4, 1, 'C2', 'Anatomy'),
('Student_57', 1, 2, 1, 2, 3, 2, 2, 3, 2, 5, 'A10', 'Biology'),
('Student_58', 2, 3, 5, 3, 5, 5, 5, 2, 4, 3, 'A3', 'Biology'),
('Student_59', 3, 5, 5, 1, 3, 3, 1, 5, 5, 5, 'A10', 'Anatomy'),
('Student_6', 1, 4, 2, 5, 2, 2, 1, 3, 3, 4, 'B3', 'Anatomy'),
('Student_60', 3, 3, 2, 2, 3, 2, 4, 2, 1, 4, 'A10', 'Anatomy'),
('Student_61', 4, 5, 2, 2, 2, 1, 1, 5, 2, 4, 'C2', 'Biology'),
('Student_62', 2, 2, 4, 4, 1, 1, 3, 5, 4, 2, 'A10', 'Biology'),
('Student_63', 3, 4, 4, 1, 3, 3, 4, 3, 2, 3, 'C1', 'Chemistry'),
('Student_64', 2, 5, 4, 4, 4, 4, 5, 1, 1, 3, 'C2', 'Biology'),
('Student_65', 4, 1, 5, 4, 4, 1, 1, 1, 3, 2, 'B3', 'Chemistry'),
('Student_66', 2, 5, 2, 4, 2, 3, 1, 2, 2, 2, 'C2', 'Biology'),
('Student_67', 3, 2, 3, 3, 5, 4, 3, 5, 5, 1, 'A3', 'Biology'),
('Student_68', 3, 2, 4, 4, 2, 4, 3, 3, 1, 3, 'B2', 'Biology'),
('Student_69', 3, 4, 3, 4, 3, 5, 5, 2, 2, 5, 'C1', 'Anatomy'),
('Student_7', 4, 5, 4, 4, 3, 2, 1, 5, 5, 3, 'C1', 'Chemistry'),
('Student_70', 4, 3, 2, 1, 2, 3, 5, 2, 5, 5, 'B3', 'Chemistry'),
('Student_71', 3, 2, 3, 1, 2, 3, 3, 1, 4, 2, 'C1', 'Anatomy'),
('Student_72', 4, 1, 5, 3, 4, 2, 2, 5, 5, 5, 'C1', 'Chemistry'),
('Student_73', 3, 1, 2, 3, 2, 1, 2, 1, 1, 5, 'B2', 'Anatomy'),
('Student_74', 3, 4, 2, 5, 2, 3, 2, 2, 2, 5, 'A3', 'Anatomy'),
('Student_75', 3, 2, 5, 2, 4, 4, 5, 5, 5, 2, 'A3', 'Anatomy'),
('Student_76', 4, 2, 1, 2, 3, 1, 3, 2, 1, 4, 'C2', 'Chemistry'),
('Student_77', 1, 5, 1, 1, 4, 5, 3, 2, 3, 4, 'C1', 'Chemistry'),
('Student_78', 1, 5, 1, 2, 2, 1, 3, 3, 4, 4, 'C1', 'Chemistry'),
('Student_79', 4, 2, 3, 5, 4, 4, 2, 3, 5, 4, 'C1', 'Chemistry'),
('Student_8', 3, 5, 1, 2, 1, 2, 3, 2, 2, 5, 'B3', 'Biology'),
('Student_80', 2, 2, 2, 5, 1, 5, 2, 3, 5, 3, 'C2', 'Chemistry'),
('Student_81', 1, 2, 3, 3, 3, 4, 5, 4, 4, 5, 'A3', 'Biology'),
('Student_82', 2, 1, 5, 3, 5, 4, 1, 3, 1, 2, 'A3', 'Biology'),
('Student_83', 4, 5, 2, 5, 5, 3, 2, 4, 4, 4, 'B2', 'Chemistry'),
('Student_84', 1, 4, 4, 5, 2, 2, 4, 3, 2, 1, 'C2', 'Chemistry'),
('Student_85', 1, 5, 5, 4, 5, 2, 2, 3, 1, 1, 'A10', 'Anatomy'),
('Student_86', 3, 5, 2, 4, 5, 4, 5, 5, 5, 5, 'C2', 'Anatomy'),
('Student_87', 3, 1, 1, 2, 3, 1, 5, 3, 2, 2, 'C2', 'Biology'),
('Student_88', 5, 3, 1, 2, 5, 5, 3, 1, 3, 4, 'C1', 'Chemistry'),
('Student_89', 2, 2, 4, 2, 5, 1, 5, 2, 1, 1, 'B2', 'Chemistry'),
('Student_9', 4, 4, 5, 5, 2, 2, 5, 5, 4, 4, 'C1', 'Anatomy'),
('Student_90', 3, 2, 3, 5, 4, 5, 5, 5, 2, 3, 'B2', 'Chemistry'),
('Student_91', 5, 1, 2, 3, 2, 3, 2, 4, 3, 2, 'C2', 'Chemistry'),
('Student_92', 1, 3, 5, 5, 5, 4, 3, 4, 2, 5, 'C1', 'Biology'),
('Student_93', 2, 1, 3, 3, 2, 4, 4, 2, 3, 1, 'B2', 'Biology'),
('Student_94', 4, 5, 5, 1, 3, 5, 1, 3, 3, 1, 'A3', 'Biology'),
('Student_95', 4, 3, 3, 4, 4, 2, 4, 2, 3, 1, 'B3', 'Anatomy'),
('Student_96', 3, 5, 4, 1, 5, 3, 3, 5, 2, 5, 'B3', 'Chemistry'),
('Student_97', 3, 3, 5, 2, 3, 2, 3, 2, 2, 5, 'C2', 'Chemistry'),
('Student_98', 4, 1, 2, 5, 2, 4, 3, 5, 3, 4, 'B2', 'Biology'),
('Student_99', 4, 2, 2, 4, 2, 2, 2, 4, 1, 4, 'A3', 'Biology'),
('ved', 0, 0.5, 0, 0, 0, 0, 0, 0, 0, 0, '', 'Anatomy'),
('ved', 0.29, 0.61, 0.59, 0.53, 0.21, 0.02, 0.67, NULL, NULL, NULL, '', 'Biology'),
('ved', 0, 0, 0.5, 0.5, 0.5, 0.5, 1, 0.5, 1, 0.5, '', 'Chemistry'),
('Vedant', 8.5, 9, 7.5, 8, 8.8, 9.2, 7.7, 8.3, 9.5, 8.9, 'Dr. Smith', 'Anatomy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stud_name`
--
ALTER TABLE `stud_name`
  ADD PRIMARY KEY (`student_name`,`subject_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
