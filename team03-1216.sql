-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- 생성 시간: 21-12-16 00:23
-- 서버 버전: 5.7.31
-- PHP 버전: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `web03`
--
CREATE DATABASE IF NOT EXISTS `web03` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `web03`;

-- --------------------------------------------------------

--
-- 테이블 구조 `news1`
--

DROP TABLE IF EXISTS `news1`;
CREATE TABLE IF NOT EXISTS `news1` (
  `id` int(4) NOT NULL,
  `writer` varchar(20) NOT NULL,
  `email` varchar(40) DEFAULT NULL,
  `passwd` varchar(20) DEFAULT NULL,
  `topic` varchar(50) NOT NULL,
  `content` mediumtext NOT NULL,
  `hit` int(3) NOT NULL,
  `wdate` varchar(20) NOT NULL,
  `space` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `news1`
--

INSERT INTO `news1` (`id`, `writer`, `email`, `passwd`, `topic`, `content`, `hit`, `wdate`, `space`) VALUES
(4, '배경희', '202140@jnu.ac.kr', '1111', '[Re]임시글 작성', ' 안녕하세요~\r\n\r\n\r\n--------------< 원본글 >-------------\r\n안녕하세요\r\n ', 1, '2021-12-16', 2),
(3, 'The Musical', 'jw060117@gmail.com', '1111', '[Re][Re]임시글 작성', ' daslfhal;sfh\r\n\r\n\r\n--------------< 원본글 >-------------\r\n 안녕하세요~\r\n\r\n\r\n--------------< 원본글 >-------------\r\n안녕하세요\r\n \r\n ', 1, '2021-12-16', 3),
(2, '김민주', 'nah9181918@gmail.com', '1111', '[Re][Re][Re]임시글 작성', ' 누가누가 지칠까\r\n\r\n\r\n--------------< 원본글 >-------------\r\n daslfhal;sfh\r\n\r\n\r\n--------------< 원본글 >-------------\r\n 안녕하세요~\r\n\r\n\r\n--------------< 원본글 >-------------\r\n안녕하세요\r\n \r\n \r\n ', 0, '2021-12-16', 4),
(1, '김민주', 'minsu34@naver.com', '1111', '안녕하세요!!', 'ㄴ아ㅗㄻ내ㅔㄹ', 10, '2021-12-16', 0),
(5, '이은유', '202140@jnu.ac.kr', '1111', '임시글 작성', '안녕하세요', 5, '2021-12-15', 0);

-- --------------------------------------------------------

--
-- 테이블 구조 `news2`
--

DROP TABLE IF EXISTS `news2`;
CREATE TABLE IF NOT EXISTS `news2` (
  `id` int(4) NOT NULL,
  `writer` varchar(20) CHARACTER SET latin1 NOT NULL,
  `email` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `passwd` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `topic` varchar(50) CHARACTER SET latin1 NOT NULL,
  `content` text CHARACTER SET latin1 NOT NULL,
  `hit` int(3) NOT NULL,
  `wdate` varchar(20) CHARACTER SET latin1 NOT NULL,
  `space` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `news2`
--

INSERT INTO `news2` (`id`, `writer`, `email`, `passwd`, `topic`, `content`, `hit`, `wdate`, `space`) VALUES
(1, 'ì •ìœ ë¯¸', 'meme51@hotmail.com', '1111', 'ìœ ë‚œížˆ ë‚´ì„±ì ì´ì—ˆë˜ ì¡°ìŠ¹ìš° ', 'ì‚¬ì‹¤ ë‚´ì„±ì ì€ ëª¨ë¥´ê² ì§€ë§Œ í™”ë ¤í•œ ì¸ìƒì„ ì‚´ì•„ì£¼ì–´ ê³ ë§™ë‹¤', 0, '2021-12-14', 0);

-- --------------------------------------------------------

--
-- 테이블 구조 `news3`
--

DROP TABLE IF EXISTS `news3`;
CREATE TABLE IF NOT EXISTS `news3` (
  `id` int(4) NOT NULL,
  `writer` varchar(20) CHARACTER SET latin1 NOT NULL,
  `email` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `passwd` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `topic` varchar(50) CHARACTER SET latin1 NOT NULL,
  `content` text CHARACTER SET latin1 NOT NULL,
  `hit` int(3) NOT NULL,
  `wdate` varchar(20) CHARACTER SET latin1 NOT NULL,
  `space` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `news4`
--

DROP TABLE IF EXISTS `news4`;
CREATE TABLE IF NOT EXISTS `news4` (
  `id` int(4) NOT NULL,
  `writer` varchar(20) CHARACTER SET latin1 NOT NULL,
  `email` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `passwd` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `topic` varchar(50) CHARACTER SET latin1 NOT NULL,
  `content` text CHARACTER SET latin1 NOT NULL,
  `hit` int(3) NOT NULL,
  `wdate` varchar(20) CHARACTER SET latin1 NOT NULL,
  `space` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `news5`
--

DROP TABLE IF EXISTS `news5`;
CREATE TABLE IF NOT EXISTS `news5` (
  `id` int(4) NOT NULL,
  `writer` varchar(20) CHARACTER SET latin1 NOT NULL,
  `email` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `passwd` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `topic` varchar(50) CHARACTER SET latin1 NOT NULL,
  `content` text CHARACTER SET latin1 NOT NULL,
  `hit` int(3) NOT NULL,
  `wdate` varchar(20) CHARACTER SET latin1 NOT NULL,
  `space` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `news6`
--

DROP TABLE IF EXISTS `news6`;
CREATE TABLE IF NOT EXISTS `news6` (
  `id` int(4) NOT NULL,
  `writer` varchar(20) CHARACTER SET latin1 NOT NULL,
  `email` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `passwd` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `topic` varchar(50) CHARACTER SET latin1 NOT NULL,
  `content` text CHARACTER SET latin1 NOT NULL,
  `hit` int(3) NOT NULL,
  `wdate` varchar(20) CHARACTER SET latin1 NOT NULL,
  `space` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `news7`
--

DROP TABLE IF EXISTS `news7`;
CREATE TABLE IF NOT EXISTS `news7` (
  `id` int(4) NOT NULL,
  `writer` varchar(20) CHARACTER SET latin1 NOT NULL,
  `email` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `passwd` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `topic` varchar(50) CHARACTER SET latin1 NOT NULL,
  `content` text CHARACTER SET latin1 NOT NULL,
  `hit` int(3) NOT NULL,
  `wdate` varchar(20) CHARACTER SET latin1 NOT NULL,
  `space` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `news8`
--

DROP TABLE IF EXISTS `news8`;
CREATE TABLE IF NOT EXISTS `news8` (
  `id` int(4) NOT NULL,
  `writer` varchar(20) CHARACTER SET latin1 NOT NULL,
  `email` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `passwd` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `topic` varchar(50) CHARACTER SET latin1 NOT NULL,
  `content` text CHARACTER SET latin1 NOT NULL,
  `hit` int(3) NOT NULL,
  `wdate` varchar(20) CHARACTER SET latin1 NOT NULL,
  `space` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `news9`
--

DROP TABLE IF EXISTS `news9`;
CREATE TABLE IF NOT EXISTS `news9` (
  `id` int(4) NOT NULL,
  `writer` varchar(20) CHARACTER SET latin1 NOT NULL,
  `email` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `passwd` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `topic` varchar(50) CHARACTER SET latin1 NOT NULL,
  `content` text CHARACTER SET latin1 NOT NULL,
  `hit` int(3) NOT NULL,
  `wdate` varchar(20) CHARACTER SET latin1 NOT NULL,
  `space` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `news10`
--

DROP TABLE IF EXISTS `news10`;
CREATE TABLE IF NOT EXISTS `news10` (
  `id` int(4) NOT NULL,
  `writer` varchar(20) CHARACTER SET latin1 NOT NULL,
  `email` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `passwd` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `topic` varchar(50) CHARACTER SET latin1 NOT NULL,
  `content` text CHARACTER SET latin1 NOT NULL,
  `hit` int(3) NOT NULL,
  `wdate` varchar(20) CHARACTER SET latin1 NOT NULL,
  `space` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `newslist`
--

DROP TABLE IF EXISTS `newslist`;
CREATE TABLE IF NOT EXISTS `newslist` (
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `subtitle` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `wdate` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `writer` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `imgfile` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `outline` text COLLATE utf8_unicode_ci NOT NULL,
  `likecont` int(11) NOT NULL,
  `link` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tablename` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`title`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 테이블의 덤프 데이터 `newslist`
--

INSERT INTO `newslist` (`title`, `subtitle`, `wdate`, `writer`, `imgfile`, `outline`, `likecont`, `link`, `tablename`) VALUES
('CHOU SEUNG WOO', '\"그 누구도 아닌 조승우\"', 'DECEMBER 10, 2021', 'Bueng Seong Park', 'jsw3.jpg', '필자가 조승우를 처음 본 것은 2001년 〈오페라의 유령〉 오디션장이었다. 조승우가 오디션장에 들어서자 해외 스태프들은 라울이 나타났다고 쑥덕였다. 〈오페라의 유령〉 오디션은 전례가 없이 까다로웠고 이미 널리 알려진 이야기지만 여러 번 콜백을 하는 과정에서 오해가 생기면서 조승우는 영화를 선택했다. 이미 몇 편의 뮤지컬에 출연한 경력이 있지만 당시만 해도 내게는 영화 〈춘향뎐〉의 이도령을 맡은 신인 배우의 인상이 강했다. 막상 대면한 조승우는 20대 초반이라고는 믿기지 않을 정도로 담대했다. 즉흥적으로 추가 진행된 오디션에서는 주어진 장면을 분석하면서 주위에 스스럼없이 극적 상황을 물어보는데 안정감이 느껴졌다. 20대 젊은 배우의 지나칠 정도의 예의 바름도 없었고 세심하게 의식하거나 어려워하는 기색도 없었다. 연륜이란 단어가 어울리지 않지만 이상하게 연륜이 느껴졌달까.', 2, 'col03', 'news3'),
('2000-2020 ⟨더뮤지컬⟩에 담긴 조승우의 기록', '⟨더뮤지컬⟩에 남겨진 그의 기록을 남긴다', 'DECEMBER 10, 2021', 'The Musical', 'jsw2.jpg', '⟨2004⟩남자 배우라면 누구나 \'지킬\'과 \'하이드\'를 꿈꿀거예요. 저 역시 고등학생 때부터 \'꼭 해보고 싶은 작품\'으로 <지킬 앤 하이드〉를 꼽았어요. 한 인물이 두 역을 하는 게 아니라, 극과 극의 성격을 가진 두 사람이 한 인물을 표현하는 것이잖아요. 굉장히 어려운 배역이지만 그만큼 도전하고 싶은 역이죠. 엄청난 집중력과 에너지를 필요로 하는 배역이에요.', 3, 'col02', 'news2'),
('이루어진 꿈 조승우', '무대에 중심을 두는 배우', 'DECEMBER 10, 2021', '배경희', 'jsw1.jpg', '여기, 자신을 지탱하는 무게 중심이 있는 곳은 언제나 무대라고 말하는 이가 있다. 20년이란 시간 동안 뮤지컬과 드라마, 영화계에서 한 번도 잊힌 적 없지만, 손에 쥐어지는 차고 넘치는 선택 가운데 뮤지컬을 단 한 번도 잊지 않았던 배우, 그리고 자신이 무대를 잊을 수 없는 까닭을 누구보다 큰 목소리로 세상에 증명하는 배우. 그는 여전히 무대에 서기 전 이렇게 기도한다. 어제와 오늘, 내일이 같을 무대이지만 항상 오늘 처음 서는 것처럼 느껴지게 해달라고. 예언처럼 말하면 그의 기도는 이루어질 것이다. 그 자신보다 더 간절하게 그가 이 무대에 익숙해져서 이곳을 떠나지 않길 기도할 관객이 너무도 많으니까.', 19, 'col01', 'news1'),
('조승우라는 보물찾기', '\'보물\' 조승우는 여전히 보물을 찾고 있다', 'DECEMBER 10, 2021', 'Tae Hoon Lee', 'jsw4.jpg', '기록할 ‘기記’자를 쓰지만, 기자記者는 본래 듣는 직업이다. 쓰고자 하는 대상의 본질에 가장 가깝게 접근한 사람들의 의견을 자주 많이 깊이 들으려 노력한다. 그 노력의 결정結晶이 기사記事다.', 3, 'col04', 'news4'),
('천상 배우 조승우와 뮤지컬', '그의 천부적 자질과 노력', 'DECEMBER 10, 2021', 'Myeong Hoon Jung', 'jsw5.jpg', '그의 출연 회차는 피케팅이라 불릴 만큼 순간에 매진되며 편당 출연료까지 회자되곤 한다. 그는 2000년부터 무대와 매체를 오가며 대중들에게 확실히 각인되었고, 12편의 작품으로 자신의 색채를 보여주었다. 그에게 열광하는 이유는 무엇일까. 그의 출연작품을 통해 이를 짚어보기로 한다.', 0, 'col05', 'news5'),
('선악을 넘어서', '대본에 갇힌 캐릭터를 현실로', 'DECEMBER 10, 2021', 'Cheol Hee Jeon', 'jsw6.jpg', '영화 〈내부자들〉(2015)은 우장훈 검사(조승우)가정치깡패 출신인 안상구(이병헌)와 손을 잡고 정경유착 세력을 심판한다는 내용을 담고 있다. 이를 두고 참신한 서사라고 하긴 힘들다. 정의로운 검사가 외압에도 불구하고 마침내 악인을 처벌한다는 내용의 한국영화가 드물지 않았기 때문이다. 검사(경찰)의 가가 악당을 잡기 위해 깡패와 공조한다는 설정 또한 몇몇 홍콩 영화로부터 이어져온 클리셰였음을 부정할 수 없다.', 0, 'col06', 'news6'),
('승우의 열아홉 생', '이몽룡에서 젊은 타짜, 그리고 그 너머', 'DECEMBER 10, 2021', 'Mi Gyeong Park', 'jsw7.jpg', ' 천재지관 승우의 첫 생은 꿈꾸는 용, 몽룡이었다. 눈빛보소, 꿰어 뚫을 듯한 시력, 도드라진 이마반듯하고, 숱많아 두터운 눈썹 또한 가지런하다. 반듯한 콧날 아래 입술 또렷하며 그린 듯한 귀, 가름한 턱선이 한눈에 도령상이다. 그러니 조선 숙종기남원부사의 아들로, 천인지일인이 되어 배우 승우가 처음 탄생한 것이다. 소년등과일불행이라 해도소년등과 후의 염려일 것이라, 암행어사로 돌아온승우는 일단 탐관오리를 소탕하는 동시에 지조의연인 춘향을 구출하는 일타양피, 반전의 사내가 되는 것이다. 멋지게.', 0, 'col07', 'news7'),
('내가 조승우를 좋아하는 이유', '좀 더 \'잘\' 좋아하고 싶다는 마음', 'DECEMBER 10, 2021', '조승우 팬페이지 운영자', 'jsw8.jpg', '2000년의 어느 날, 〈춘향던〉 의 \'이몽룡\'으로 스크린에서 반짝이는 신인배우 조승우를 처음 만났던 순간에는 내가 그를 가장 좋아하는 배우로서 오랫동안 응원하리라고 생각지 못했다. 〈춘향뎐〉의 \'이도령\'을 시작으로, 햇빛 비추는 창가에서 와니의 눈을 그려주던 〈와니와 준하〉의 \'영민’, 엘리베이터 앞에서 부스스한 얼굴로 인주에게 활짝 웃던 〈후아유〉의 \'지형태\', 뮤지컬 〈카르멘〉 의 사랑에 미친 \'돈 호세’를 연이어 만나면서 나는 점점 그의 충성도 높은 팬이 되어갔다.', 0, 'col08', 'news8'),
('깊은 물속과 같은 조승우 캐릭터', '조승우 배우가 연기에 깊게 빠져 있을 때', 'DECEMBER 10, 2021', 'Jeong Hoon Lee', 'jsw9.png', '나는 조승우 배우가 연기에 깊게 빠져 있을 때, 자신의 예술을 펼치는 내적인 공간이 있다는 것을 느꼈다. 그 공간은 침체되면서도 잔잔한, 깊은 물속과 같은 세계였다. 그는 다양한 얼굴을 가지고 있다. 무대 밖에서는 순박하게 보이던 그가 무대위에서는 폭발적인 카리스마를 보여주기도 하고 느긋한, 클래식한 면을 가지고 있기도 하다.', 0, 'col09', 'news9'),
('대중에게 항상 선(善)인 배우 조승우', '작품을 보는 사람들에게 조금이나마 선한 영향을 끼칠 수 있는 연기', 'DECEMBER 10, 2021', 'Jin Yong An', 'jsw1.jpg', '지난 7월 열린 종합편성채널 JTBC 드라마 〈라이프〉의 제작발표회에서 배우 이동욱이 동료 배우 조승우를 가리켜 한 말이다. 최근 들어 이처럼 조승우를 적확하게 표현한 이는 없었다. 실제 키는 170cm 남짓이지만 스크린에서, TV 속에서, 무대 위에서 연기하고 있는 그를 보고 있노라면 한없이 커 보인다. 굳이 한 사람의 물리적 키를 거론하는 것이 무례할 수 있다고? 조승우는 자신을 칭찬하는 이동욱에게 “너무 마음에 드는 훌륭한 배우다. 키가 너무 커서 고개가 아픈 거 말고는…”이라고 너스레를 떨 정도로 아량 넓은 배우다.', 0, 'col10', 'news10');

-- --------------------------------------------------------

--
-- 테이블 구조 `photo`
--

DROP TABLE IF EXISTS `photo`;
CREATE TABLE IF NOT EXISTS `photo` (
  `wname` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `summary` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `wdate` date DEFAULT NULL,
  `userfile` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 테이블의 덤프 데이터 `photo`
--

INSERT INTO `photo` (`wname`, `summary`, `wdate`, `userfile`) VALUES
('조승우', '지킬 앤 하이드, 지킬/하이드 역', '2021-12-12', 'jsw1.jpg'),
('조승우', '닥터 지바고, 유리 지바고 역', '2021-12-12', 'jsw2.jpg'),
('조승우', '헤드윅, 헤드윅/토미 역', '2021-12-12', 'jsw3.jpg'),
('전미도', '닥터 지바고, 라라 역', '2021-12-12', 'jmd1.png'),
('전미도', '베르테르, 로테 역', '2021-12-12', 'jmd2.png'),
('전미도', '맨 오브 라만차, 알돈자 역', '2021-12-12', 'jmd3.png'),
('박강현', '마리앙투아네트, 악셀 폰 페르젠 백작 역', '2021-12-14', 'pkh1.jpg'),
('박강현', '하데스 타운, 오르페우스 역', '2021-12-14', 'pkh2.jpg'),
('박강현', '그레이트 코멧, 아나톨 역', '2021-12-12', 'pkh3.jpg'),
('민경아', '지킬 앤 하이드, 엠마 역', '2021-12-12', 'mka1.jpg'),
('민경아', '시카고, 록시 하트 역', '2021-12-12', 'mka2.jpg'),
('민경아', '레베카, 나 역', '2021-12-12', 'mka3.jfif');

-- --------------------------------------------------------

--
-- 테이블 구조 `poll`
--

DROP TABLE IF EXISTS `poll`;
CREATE TABLE IF NOT EXISTS `poll` (
  `ans1` int(3) DEFAULT NULL,
  `ans2` int(3) DEFAULT NULL,
  `ans3` int(3) DEFAULT NULL,
  `ans4` int(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 테이블의 덤프 데이터 `poll`
--

INSERT INTO `poll` (`ans1`, `ans2`, `ans3`, `ans4`) VALUES
(2, 1, 1, 0);

-- --------------------------------------------------------

--
-- 테이블 구조 `polletc`
--

DROP TABLE IF EXISTS `polletc`;
CREATE TABLE IF NOT EXISTS `polletc` (
  `name` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cont` int(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 테이블의 덤프 데이터 `polletc`
--

INSERT INTO `polletc` (`name`, `cont`) VALUES
('신영숙', 2);

-- --------------------------------------------------------

--
-- 테이블 구조 `signin`
--

DROP TABLE IF EXISTS `signin`;
CREATE TABLE IF NOT EXISTS `signin` (
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `pw` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `bday` date NOT NULL,
  `imgname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sday` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 테이블의 덤프 데이터 `signin`
--

INSERT INTO `signin` (`name`, `id`, `pw`, `tel`, `email`, `bday`, `imgname`, `sday`) VALUES
('이은유', 'jw060117', 'jw060!34', '01057578092', 'jw060117@jnu.ac.kr', '2001-03-18', 'test.png', '2021-12-11'),
('김민주', '202967', 'lbsfui', '01040992389', '202967@jnu.ac.kr', '2001-06-27', 'test.png', '2021-12-11'),
('표형규', 'lsajgob', 'asfte', '01057578092', 'jw060117@gmail.com', '2021-12-11', '이은유.png', '2021-12-11'),
('이은유', 'zsdfyhyaer', 'asehyadfwd', '01057578092', 'jw060117@gmail.com', '2021-11-29', 'aryasvrew.jpg', '2021-12-11'),
('이은유', 'wuyhgwer', 'afhdfvq', '01057578092', 'jw060117@gmail.com', '2021-11-29', 'atbqatvgqa.png', '2021-12-11'),
('이은유', 'FAGBQA', 'davraGSDAFVA', '01057578092', 'jw060117@gmail.com', '2021-11-29', 'AFWEQ.png', '2021-12-11'),
('표형규', 'atgqave', 'aybdf', '01057578092', 'rlshdnr4550@nate.com', '2021-12-08', 'zsd ga.jpg', '2021-12-11'),
('dldmsdb', 'zzrtbae', 'vbhbxxxdfvtg', '01057578092', 'rlshdnr4550@nate.com', '2021-12-14', 'atb at.png', '2021-12-11'),
('표형규', 'zdgbfvgasg', 'jcvhddtgrs', '01057578092', 'sgvvbta@naver.com', '2021-12-06', 'zgfdCEds.png', '2021-12-11'),
('이창효', 'agetbebdtjs', 'zsvdtfaysyvsd', '01057578092', 'nah9181918@gmail.com', '2021-12-07', 'sd bervbhgv.png', '2021-12-11'),
('표형규', 'ahabtqa', 'mujsefaD', '01057578092', 'jw060117@gmail.com', '2021-12-29', 'ATGVA.png', '2021-12-11'),
('abyae', 'zybactWDR', 'sbus acfWE', '01057578092', 'jw060117@gmail.com', '2021-12-02', 'RAvewt.png', '2021-12-11'),
('이은유', 'tsnus', 'zsrtrvfa', '01057578092', '202140@jnu.ac.kr', '2021-12-03', 'gaz ga.png', '2021-12-11'),
('이은유', 'sfyatvqa', 'SEtvfgcf', '01057578092', 'jw060117@gmail.com', '2021-11-30', 'atvetvq.png', '2021-12-11'),
('이은유', '6ㄹ7ㅗ9ㅗ6ㅇ', 'jw060!34', '01083736892', 'jw060117@gmail.com', '2021-11-16', '이으유.jpg', '2021-12-11'),
('관리자', 'admin', '1111', '0100000000', '000000@0000000.000', '2021-01-12', '관리자.png', '2021-12-12');

-- --------------------------------------------------------

--
-- 테이블 구조 `testboard`
--

DROP TABLE IF EXISTS `testboard`;
CREATE TABLE IF NOT EXISTS `testboard` (
  `id` int(4) NOT NULL,
  `writer` varchar(20) CHARACTER SET latin1 NOT NULL,
  `email` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `passwd` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `topic` varchar(50) CHARACTER SET latin1 NOT NULL,
  `content` text CHARACTER SET latin1 NOT NULL,
  `hit` int(3) NOT NULL,
  `wdate` varchar(20) CHARACTER SET latin1 NOT NULL,
  `space` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
