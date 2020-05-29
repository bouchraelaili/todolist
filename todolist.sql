-- --------------------------------------------------------
-- Hôte :                        127.0.0.1
-- Version du serveur:           5.7.24 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Listage de la structure de la base pour project
CREATE DATABASE IF NOT EXISTS `project` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `project`;

-- Listage de la structure de la table project. task
CREATE TABLE IF NOT EXISTS `task` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `taskText` varchar(50) DEFAULT NULL,
  `done` int(11) DEFAULT '0',
  `todolist_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_task_todolist` (`todolist_id`),
  CONSTRAINT `FK_task_todolist` FOREIGN KEY (`todolist_id`) REFERENCES `todolist` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Listage des données de la table project.task : ~1 rows (environ)
/*!40000 ALTER TABLE `task` DISABLE KEYS */;
INSERT INTO `task` (`id`, `taskText`, `done`, `todolist_id`) VALUES
	(1, 'task1', 0, 1),
	(2, 'task2', 0, 1);
/*!40000 ALTER TABLE `task` ENABLE KEYS */;

-- Listage de la structure de la table project. todolist
CREATE TABLE IF NOT EXISTS `todolist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_todolist_user` (`user_id`),
  CONSTRAINT `FK_todolist_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Listage des données de la table project.todolist : ~1 rows (environ)
/*!40000 ALTER TABLE `todolist` DISABLE KEYS */;
INSERT INTO `todolist` (`id`, `name`, `color`, `user_id`) VALUES
	(1, 'todolist1', '#E91E63F2', 1);
/*!40000 ALTER TABLE `todolist` ENABLE KEYS */;

-- Listage de la structure de la table project. user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `photo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Listage des données de la table project.user : ~1 rows (environ)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `firstname`, `lastname`, `username`, `email`, `password`, `photo`) VALUES
	(1, 'bouchera', 'elaili', 'bch', 'bouchera@gmail.com', 'bouchera555', '../assets/images/5ecad71a264f69.12360233.jpg'),
	(2, 'bouchra', 'elayli', 'bouchera', 'admin@gmail.com', NULL, '../assets/images/5ecad86f566699.19860607.jpg'),
	(3, 'bouchra', 'elayli', 'bouchera', 'admin@gmail.com', '123', '../assets/images/5ecad9a2bfabe2.05952448.jpg');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
