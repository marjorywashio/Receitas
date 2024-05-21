-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02-Abr-2024 às 15:40
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `receita`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `receita`
--

DROP TABLE IF EXISTS `receita`;
CREATE TABLE `receita` (
  `idReceita` int(11) NOT NULL,
  `titulo` varchar(300) NOT NULL,
  `ingredientes` text NOT NULL,
  `modoPreparo` text NOT NULL,
  `qtdePessoas` int(10) NOT NULL,
  `tempoPreparo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `receita`
--

INSERT INTO `receita` (`idReceita`, `titulo`, `ingredientes`, `modoPreparo`, `qtdePessoas`, `tempoPreparo`) VALUES
(1, 'Bolo de chocolate', '1 xícara (chá) de leite morno\r\n3 ovos\r\n4 colheres (sopa) de margarina derretida\r\n2 xícaras (chá) de açúcar\r\n1 xícara (chá) de chocolate em pó\r\n2 xícaras (chá) de farinha de trigo\r\n1 colher (sopa) de fermento químico em pó', 'Massa:\r\nBata bem todos os ingredientes da massa (menos o fermento) no liquidificador, aproximadamente 2 a 3 minutos.\r\nAcrescente o fermento e bata por mais uns 15 segundos.\r\nColoque em uma forma redonda, untada com manteiga e polvilhada com farinha de trigo.\r\nAsse por cerca de 40 minutos em forno médio (180º C), preaquecido.\r\n\r\nCobertura:\r\nLeve todos os ingredientes ao fogo até engrossar, em ponto de brigadeiro.\r\nCubra o bolo em seguida.', 6, '40min'),
(2, 'Chocolate quente', '2 xícaras (chá) de leite\r\n1 colher (sopa) de amido de milho\r\n3 colheres (sopa) de chocolate em pó\r\n4 colheres (sopa) de açúcar\r\n1 canela em pau\r\n1 caixinha de creme de leite\r\n', 'Em um liquidificador, bata o leite, o amido de milho, o chocolate em pó e o açúcar.\r\nDespeje a mistura em uma panela com a canela e leve ao fogo baixo, mexendo sempre até ferver.\r\nDesligue, adicione o creme de leite e mexa bem até obter uma mistura homogênea.\r\nRetire a canela e sirva quente.', 4, '10min'),
(3, 'Pão de queijo', '2 copos americanos de leite\r\n1 copo americano de água\r\n1/3 de copo americano de óleo\r\n1 colher de sopa de sal\r\n500 g de polvilho doce\r\nQueijo ralado a gosto\r\n3 ovos inteiros', 'Ferva o leite com a água e o óleo.\r\nEm uma vasilha misture o polvilho e o sal.\r\nJogue o liquido fervido e misture com uma colher grande.\r\nEspere esfriar e despeje o queijo ralado e os ovos.\r\nMisture a massa com a mão amassando bem até virar uma cola caseira dura.\r\nFaça bolinhas do tamanho que preferir.\r\nAsse em forno bem quente até dourar.\r\nSirva quentinho.', 10, '25min'),
(4, 'Estrogonofe de carne', '400g de carne (filé mignon, chã de dentro ou alcatra)\r\nPimenta\r\nCominho\r\nSal\r\n1/2 cebola ralada\r\n1 caixa e meia de creme de leite\r\n3 colheres (sopa) de catchup\r\n3 colheres (sopa) de extrato de tomate\r\n1 colher (sopa) de mostarda\r\nÓleo para fritar', 'Carne\r\nCorte a carne selecionada em tirinhas, tempere com a pimenta, cominho e sal (eu coloco 1 ou 2 pitadas de cada, no máximo).\r\nDeixe descansar a carne por 20 minutos para apurar o gosto.\r\nColoque óleo suficiente para fritar poucas quantidades de tirinhas (7 ou 8), esquente bem o óleo.\r\nComece a fritura com poucas tirinhas para que o óleo não vire uma sopa, retire as tiras e reserve.\r\nNão deixe fritar muito para que a carne não fique dura.\r\n\r\nMolho\r\nTroque o óleo da panela e refogue a cebola ralada.\r\nDepois de dourada, jogue todas as tirinhas de carne dentro da panela e mexa.\r\nFrite por 3 minutos e jogue na panela o creme de leite, catchup, extrato de tomate e mostarda.\r\nDeixe ferver um pouco, sempre misturando.\r\nSirva com arroz branco e batata palha.', 6, '35min');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `receita`
--
ALTER TABLE `receita`
  ADD PRIMARY KEY (`idReceita`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `receita`
--
ALTER TABLE `receita`
  MODIFY `idReceita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
