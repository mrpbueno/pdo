CREATE TABLE `alunos` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nome` varchar(255) NOT NULL,
  `nota` int(11) NOT NULL
) DEFAULT CHARSET=utf8;

INSERT INTO `alunos` (`id`, `nome`, `nota`) VALUES
(1, 'Aluno 1', 7),
(2, 'Aluno 2', 5),
(3, 'Aluno 3', 9),
(4, 'Aluno 4', 3),
(5, 'Aluno 5', 8),
(6, 'Aluno 6', 7),
(7, 'Aluno 7', 6),
(8, 'Aluno 8', 10),
(9, 'Aluno 9', 2),
(10, 'Aluno 10', 1),
(11, 'Aluno 11', 6),
(12, 'Aluno 12', 5),
(13, 'Aluno 13', 7),
(14, 'Aluno 14', 5),
(15, 'Aluno 15', 8),
(16, 'Aluno 16', 7),
(17, 'Aluno 17', 6),
(18, 'Aluno 18', 1),
(19, 'Aluno 19', 2),
(20, 'Aluno 20', 4);
