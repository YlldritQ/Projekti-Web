-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2024 at 11:57 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `lajmet`
--

CREATE TABLE `lajmet` (
  `ID` int(11) NOT NULL,
  `Titulli` mediumtext NOT NULL,
  `Img_Link` tinytext NOT NULL,
  `Data` date NOT NULL,
  `Description` longtext NOT NULL,
  `Permbajtja` longtext NOT NULL,
  `Video_Link` tinytext DEFAULT NULL,
  `Kategoria` varchar(25) NOT NULL,
  `UserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lajmet`
--

INSERT INTO `lajmet` (`ID`, `Titulli`, `Img_Link`, `Data`, `Description`, `Permbajtja`, `Video_Link`, `Kategoria`, `UserID`) VALUES
(1, 'Ekskluzive: Naim Murseli përballet me babanë për herë të parë pas arrestimit, akuzon Policinë për keqtrajtim', 'Foto/foto1.png', '2024-02-01', 'Vrasja mizore e Liridona Admeajt, krim ky që tronditi vendin para disa javësh po vazhdon të hetohet, ndërkohë që pistat po zgjerohen dhe akoma nuk është konfirmuar motivi i rastit tragjik. Tre persona ndodhen në paraburgim, teksa i dyshuari i fundit u arrestua sot nga Policia. Naim Murseli – burri i të ndjerës ndodhet në Burgun e Sigurisë së Lartë, ku para disa ditësh e ka vizitua babai i tij.', 'Sinjali ka siguruar ekskluzivisht versionin e Murselit, i cili u përballë për herë të parë me babin e tij, i cili pas arrestimit, përmendi hakmarrje. Në një prononcim për Gazetën Sinjali, Shaban Murseli ka deklaruar se gjatë vizitës qe i ka bërë Murselit, ky i fundit e ka akuzuar Policinë e Kosovës për keqtrajtim. Në mes të tjerash ai tha se Murseli i ka rrëfyer një version krejt tjetër për dallim nga ajo qe ka dalë në media, duke pretenduar se ka edhe “dëshmi të forta”.\r\n\r\n“Qysh më tha Naimi nuk jonë të vërteta këto akuzat që janë bërë, ato portalet çka kanë thanë e, asnjo s’jonë të vërteta. Ai e tregon më së miri vet. Unë i besoj të vërtetës, as s’i besoj atij, as portalet, as s’i besoj vetëm të vërtetës i besoj. 15 minuta para vrasjes tha që u ndalë në market, ka ble vezë, qumësht e bukë për mëngjes.” -tha ai.\r\n\r\nPas takimit me Naimin që po dyshohet se e porositi vrasjen e gruas së tij, Shaban Murseli komentoi edhe deklaratën e tij për hakmarrje.Para disa ditësh ai tha se “me pasë ditë unë që e ka bo djali jem, unë isha hakmarrë vetë unë me djalë tem atë ditë – ai s’ish sot gjallë” – gjë për të cilën tha se do ta bënte nëse “100% vërtetohet që e ka bërë”.\r\n\r\nNë vazhdën e zhvillimit të hetimeve, Policia e Kosovës ka arrestuar edhe të dyshuarin e katërt, Tomë Dodaj, i cili dyshohet se ka furnizuar me armën e krimit dy të dyshuarit tjerë, Naim Murselin dhe Granit Plavën.\r\n\r\nNaim Murseli ngarkohet me veprën penale ‘Vrasje e rëndë në bashkëkryerje’.\r\nGranit Plava ngarkohet me veprat penale ‘Vrasje e rëndë’ dhe ‘Mbajtje në pronësi, kontroll ose posedim të paautorizuar të armës’.\r\nKushtrim Kokalla ngarkohet me veprën penale ‘Marrëveshje për të kryer veprën penale ‘Vrasje e rëndë’’.', NULL, 'Kronike', 1),
(2, 'A e dini se stina e dimrit dëmton baterinë e celularit tuaj? Arsyet do t’iu befasojnë', 'Foto/foto2.png', '2024-02-02', 'Sinjali ka siguruar ekskluzivisht versionin e Murselit, i cili u përballë për herë të parë me babin e tij, i cili pas arrestimit, përmendi hakmarrje. Në një prononcim për Gazetën Sinjali, Shaban Murseli ka deklaruar se gjatë vizitës qe i ka bërë Murselit, ky i fundit e ka akuzuar Policinë e Kosovës për keqtrajtim. Në mes të tjerash ai tha se Murseli i ka rrëfyer një version krejt tjetër për dallim nga ajo qe ka dalë në media, duke pretenduar se ka edhe “dëshmi të forta”', 'Sinjali ka siguruar ekskluzivisht versionin e Murselit, i cili u përballë për herë të parë me babin e tij, i cili pas arrestimit, përmendi hakmarrje. Në një prononcim për Gazetën Sinjali, Shaban Murseli ka deklaruar se gjatë vizitës qe i ka bërë Murselit, ky i fundit e ka akuzuar Policinë e Kosovës për keqtrajtim. Në mes të tjerash ai tha se Murseli i ka rrëfyer një version krejt tjetër për dallim nga ajo qe ka dalë në media, duke pretenduar se ka edhe “dëshmi të forta”.\r\n\r\n“Qysh më tha Naimi nuk jonë të vërteta këto akuzat që janë bërë, ato portalet çka kanë thanë e, asnjo s’jonë të vërteta. Ai e tregon më së miri vet. Unë i besoj të vërtetës, as s’i besoj atij, as portalet, as s’i besoj vetëm të vërtetës i besoj. 15 minuta para vrasjes tha që u ndalë në market, ka ble vezë, qumësht e bukë për mëngjes.” -tha ai.\r\n\r\nPas takimit me Naimin që po dyshohet se e porositi vrasjen e gruas së tij, Shaban Murseli komentoi edhe deklaratën e tij për hakmarrje.Para disa ditësh ai tha se “me pasë ditë unë që e ka bo djali jem, unë isha hakmarrë vetë unë me djalë tem atë ditë – ai s’ish sot gjallë” – gjë për të cilën tha se do ta bënte nëse “100% vërtetohet që e ka bërë”.\r\n\r\nNë vazhdën e zhvillimit të hetimeve, Policia e Kosovës ka arrestuar edhe të dyshuarin e katërt, Tomë Dodaj, i cili dyshohet se ka furnizuar me armën e krimit dy të dyshuarit tjerë, Naim Murselin dhe Granit Plavën.\r\n\r\nNaim Murseli ngarkohet me veprën penale ‘Vrasje e rëndë në bashkëkryerje’.\r\nGranit Plava ngarkohet me veprat penale ‘Vrasje e rëndë’ dhe ‘Mbajtje në pronësi, kontroll ose posedim të paautorizuar të armës’.\r\nKushtrim Kokalla ngarkohet me veprën penale ‘Marrëveshje për të kryer veprën penale ‘Vrasje e rëndë’’.\r\n\r\n\r\n\r\nShënim: Personat e apostrofuar në këtë artikull prezumohen të pafajshëm derisa fajësia e tyre të mos provohet me vendim të formës së prerë nga gjykata.', NULL, 'Kulture', 1),
(3, 'Zbulohet plani anti-Sunak, Boris Johnson rikthehet si kryeministër në koalicion me “babain” e Brexit', 'Foto/foto3.png', '2024-02-02', 'Mbi pjatat me ravioli dhe mëlçi viçi, të shoqëruara me verë të kuqe nga Italia e jugut, armiqtë politikë të Rishi Sunak kanë komplotuar lëvizjen e tyre të radhës kundër qeverisë.', 'Te restoranti Giovanni’s i aristokratit siçilian Konti Pino Ragona në Covent Garden të Londrës sipas DailyMail nga Konservatorët që qëndrojnë kundër Sunak është thurur një plan për rrëzimin e kryeministrit para zgjedhjeve parlamentare.\r\n\r\nLetra e saj brutale personale e ndarjes u pasua nga dorëheqja e Ministrit të Emigracionit Robert Jenrick dhe tashmë brenda partisë ka një front që punon qartë e pastër kundër Sunak.\r\n\r\nMes këtyre raportimeve, një tjetër lajm i bujshëm është ai i një plani për të rikthyer Boris Johnson si kryeministër, madje duke marrë në konsideratë edhe një binjakëzim lidershipi me “babain” e Brexit, Nigel Farage.', NULL, 'Kronike', 1),
(4, 'BE njofton për 125 milionë euro ndihmë humanitare për palestinezët', 'Foto/foto4.png', '2024-02-01', 'Komisioni Evropian ka njoftuar se do të ofrojë 125 milionë euro në ndihmë humanitare për popullin palestinez në vitin 2024.', 'Fondet do të shkojnë për mbështetjen e organizatave humanitare që punojnë si në Gaza ashtu edhe në Bregun Perëndimor të pushtuar, tha komisioni në një deklaratë sot.\r\n\r\nNdihma ofrohet përmes agjencive humanitare të OKB-së, organizatave joqeveritare dhe Komitetit Ndërkombëtar të Kryqit të Kuq (ICRC) , si dhe organizatave lokale të ndihmës që janë partnere me to, tha ai.\r\n\r\nNë Gaza, ku komisioni tha se nevojat humanitare janë “në nivelin më të lartë të të gjitha kohërave”, financimi i ri do të fokusohet në përgjigjen e urgjencës për shpëtimin e jetës dhe rivendosjen e aksesit në nevojat bazë si uji, ushqimi, kujdesi shëndetësor, strehimi dhe kanalizimet.\r\n\r\nNë Bregun Perëndimor, ku komisioni tha se shumë komunitete palestineze janë “në rrezik të zhvendosjes ose tashmë të zhvendosur me forcë”, financimi do të ofrojë shërbime mbrojtëse, të tilla si ndihma ligjore ose ndihma materiale, dhe do të mbështesë aksesin e tyre në shërbimet bazë dhe arsimin në emergjencave.', NULL, 'Kronike', 1),
(5, 'Kompletohen 16 ekipet e mbetura në garë për Kupën e Kosovës, caktohet edhe data e shortit', 'Foto/fot5.png', '2024-02-01', 'Komisioni Evropian ka njoftuar se do të ofrojë 125 milionë euro në ndihmë humanitare për popullin palestinez në vitin 2024.', 'Komisioni Evropian ka njoftuar se do të ofrojë 125 milionë euro në ndihmë humanitare për popullin palestinez në vitin 2024.\r\nFondet do të shkojnë për mbështetjen e organizatave humanitare që punojnë si në Gaza ashtu edhe në Bregun Perëndimor të pushtuar, tha komisioni në një deklaratë sot.\r\n\r\nNdihma ofrohet përmes agjencive humanitare të OKB-së, organizatave joqeveritare dhe Komitetit Ndërkombëtar të Kryqit të Kuq (ICRC) , si dhe organizatave lokale të ndihmës që janë partnere me to, tha ai.\r\n\r\nNë Gaza, ku komisioni tha se nevojat humanitare janë “në nivelin më të lartë të të gjitha kohërave”, financimi i ri do të fokusohet në përgjigjen e urgjencës për shpëtimin e jetës dhe rivendosjen e aksesit në nevojat bazë si uji, ushqimi, kujdesi shëndetësor, strehimi dhe kanalizimet.\r\n\r\nNë Bregun Perëndimor, ku komisioni tha se shumë komunitete palestineze janë “në rrezik të zhvendosjes ose tashmë të zhvendosur me forcë”, financimi do të ofrojë shërbime mbrojtëse, të tilla si ndihma ligjore ose ndihma materiale, dhe do të mbështesë aksesin e tyre në shërbimet bazë dhe arsimin në emergjencave.', NULL, 'Sport', 11),
(6, 'Dyshohet se keqpërdorën ujin e ujësjellësit, fabrika ‘Spirit of Drini’ procedohet në Prokurori', 'Foto/foto6.png', '2024-02-01', 'Fabrika për prodhimin e ujit, ‘Spirit of Drini’, është proceduar në Prokurorinë Themelore në Pejë, \' pasi u denoncua publikisht se ka keqpërdorur ujin ilegalisht, raporton Gazeta Sinjali.', 'Këtë e ka konfirmuar zëdhënësi i Prokurorisë, Shkodran Nikçi.\r\n\r\nGjatë ditës së djeshme, menaxhmeti i kompanisë ‘Hidrodrini’ në Pejë kanë njoftuar se pas një aksioni inspektorët kanë hasur në keqpërdorim të madh, ku si pasojë janë shkaktuar humbje të konsiderueshme të ujit të pijes në rajonin e Pejës.\r\n\r\n“Në një aksion gjithëpërfshirës në tërë zonën e mbulueshmërisë, e me efekt mos keqpërodirmin e ujit, Inspektorët rajonal të KRU ‘Hidrodrini’, në kontroll dhe verifikim kanë hasur në një keqpërdorues të madh, konkretisht një Fabrikë për prodhimin e ujit, me lokacion në rajonin e komunës së Pejës.\r\n\r\nGjatë inspektimeve në perimetrin brenda hapësirave të fabrikës, janë gjetur e zbuluar dy lidhje ilegale, njëra Ø 100 dhe tjetra Ø 32.\r\n\r\nNga këto lidhje ilegale, është konstatuar të jenë shkaktuar humbje të konsiderueshme të ujit të pijes” , thuhet në njoftimin e ‘Hidrodrini’.', NULL, 'Shendetesi', 11),
(7, 'Facebook dhe Messenger do të kodojnë mesazhet automatikisht', 'Foto/foto7.png', '2024-02-01', 'Të gjitha bisedat në Facebook dhe Messenger do të kodohen automatikisht, ka njoftuar kompania mëmë Meta.', 'Mesazhet dhe thirrjet e mbrojtura nga enkriptimi nga skaji në fund (E2EE) mund të lexohen vetëm nga dërguesi dhe marrësi.\r\n\r\nKa qenë e mundur të zgjedhësh mesazhet e koduara për vite, por tani do të bëhet pozicioni i paracaktuar.\r\n\r\nKritikët, përfshirë policinë dhe qeverinë e Mbretërisë së Bashkuar, kanë pohuar se shpërndarja do ta bëjë më të vështirë zbulimin e abuzimit seksual të fëmijëve në platformë.\r\n\r\nMbrojtja nënkuptonte se askush, përfshirë Metën, nuk mund të shihte se çfarë dërgohet ose thuhet, “përveç nëse vendosni të raportoni një mesazh tek ne”, ka thënë Loredana Crisan, drejtuese e Messenger në një postim.\r\n\r\n“Kompania ka punuar me ekspertë të jashtëm, akademikë, avokatë dhe qeveri për të identifikuar rreziqet për të siguruar që privatësia dhe siguria të shkojnë dorë për dore” , shkroi ajo.\r\n\r\nPritet që mesazhet në Instagram, i cili gjithashtu është në pronësi të Metës, mund të kripohen si parazgjedhje diku në vitin e ri.\r\n\r\nMeta thotë se njerëzit do të dinë kur bisedat e tyre të përmirësohen dhe të kodohen, sepse do t’u kërkohet të konfigurojnë një metodë rikuperimi për të rivendosin mesazhet e tyre nëse humbasin, ndryshojnë ose shtojnë një pajisje.\r\n\r\nAplikacionet duke përfshirë iMessage, Signal dhe WhatsApp mbrojnë privatësinë e mesazheve me E2EE, por teknologjia është kthyer në një fushë beteje politike.\r\n\r\nAplikacionet dhe mbështetësit e tyre argumentojnë se teknologjia mbron privatësinë dhe sigurinë , përfshirë atë të fëmijëve.\r\n\r\nPor zbatimi i ligjit, disa organizata bamirëse për fëmijë dhe Home Office e kanë kundërshtuar zgjerimin e E2EE.\r\n\r\nFuqitë e reja në Aktin e Sigurisë në internet të miratuar së fundmi mund t’i mundësojnë Ofcom-it të detyrojë kompanitë e teknologjisë të skanojnë materialet e abuzimit të fëmijëve në mesazhe të koduara. Signal dhe WhatsApp kanë thënë se do refuzojnë të përmbushin kërkesa të tilla. Por pavarësisht këtyre kompetencave, ka pasur presion të vazhdueshëm ndaj Metës për të mbajtur zgjerimin e E2EE.\r\n\r\nJames Babbage, drejtori i Kërcënimeve të Përgjithshme në Agjencinë Kombëtare të Krimit (NCA), tha në shtator se nëse Facebook do të prezantonte enkriptimin nga fundi në fund, do të ulte masivisht aftësinë kolektive për të mbrojtur fëmijët.\r\n\r\nSekretarja e atëhershme e Brendshme, Suella Braverman, pretendoi se mesazhet direkte të Facebook Messenger dhe Instagram ishin platformat e zgjedhura për pedofilët në internet. Për BBC ajo u shpreh: Ne po arrestojmë në këtë vend rreth 800 autorë në muaj, po mbrojmë rreth 1200 fëmijë.\r\n\r\nPor Meta argumentoi se kishte shpenzuar vite duke zhvilluar masa të forta sigurie për të parandaluar, zbuluar dhe luftuar abuzimin duke ruajtur sigurinë në internet.\r\n\r\nKur E2EE është i paracaktuar, ne do të përdorim gjithashtu një sërë mjetesh, duke përfshirë inteligjencën artificiale, që i nënshtrohet ligjit në fuqi, për të zbuluar në mënyrë proaktive llogaritë e përfshira në modele keqdashëse sjelljeje, në vend që të skanojmë mesazhe private” , shkroi kompania.\r\n\r\nFirma gjithashtu njoftoi të mërkurën se do të shtonte një sërë veçorish të reja, duke përfshirë aftësinë për të redaktuar mesazhet deri në 15 minuta pasi ato të jenë dërguar.\r\n\r\nNdryshimet do të duhen disa muaj për t’u zbatuar plotësisht, tha kompania.', NULL, 'Kulture', 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lajmet`
--
ALTER TABLE `lajmet`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK` (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lajmet`
--
ALTER TABLE `lajmet`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lajmet`
--
ALTER TABLE `lajmet`
  ADD CONSTRAINT `FK` FOREIGN KEY (`UserID`) REFERENCES `user` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
