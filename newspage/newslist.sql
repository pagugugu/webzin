USE web03;

create table newslist(
title varchar(50) not null,
subtitle varchar(50) not null,
wdate VARCHAR(30) NOT null,
writer varchar(20) not null,
imgfile  varchar(50) NOT null,
outline text not null,
likecont int(4),
link varchar(50) not null,
tablename VARCHAR(20) NOT null,
PRIMARY KEY(title)
);

desc newslist;


INSERT INTO newslist(title, subtitle, wdate, writer, imgfile, outline, likecont, link, tablename) VALUES('이루어진 꿈 조승우', '무대에 중심을 두는 배우', 'DECEMBER 10, 2021', '배경희', 'jsw1.jpg', '여기, 자신을 지탱하는 무게 중심이 있는 곳은 언제나 무대라고 말하는 이가 있다. 20년이란 시간 동안 뮤지컬과 드라마, 영화계에서 한 번도 잊힌 적 없지만, 손에 쥐어지는 차고 넘치는 선택 가운데 뮤지컬을 단 한 번도 잊지 않았던 배우, 그리고 자신이 무대를 잊을 수 없는 까닭을 누구보다 큰 목소리로 세상에 증명하는 배우. 그는 여전히 무대에 서기 전 이렇게 기도한다. 어제와 오늘, 내일이 같을 무대이지만 항상 오늘 처음 서는 것처럼 느껴지게 해달라고. 예언처럼 말하면 그의 기도는 이루어질 것이다. 그 자신보다 더 간절하게 그가 이 무대에 익숙해져서 이곳을 떠나지 않길 기도할 관객이 너무도 많으니까.', 0, 'col1', 'news1');
