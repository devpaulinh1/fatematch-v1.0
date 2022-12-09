USE db_fatematch;

CREATE TABLE tb_jogos(
	id_jogo INT(11) NOT NULL AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    capa VARCHAR(255) NOT NULL,
    PRIMARY KEY (id_jogo)
);

INSERT INTO tb_jogos(nome, capa) VALUES('Call of Duty Warzone', 'views/resources/site/games_images/cod_warzone.jpg');
INSERT INTO tb_jogos(nome, capa) VALUES('Counter Strike: Go', 'views/resources/site/games_images/cs_go.jpg');
INSERT INTO tb_jogos(nome, capa) VALUES('FIFA 23', 'views/resources/site/games_images/fifa_23.jpg');
INSERT INTO tb_jogos(nome, capa) VALUES('League of Legends', 'views/resources/site/games_images/lol.jpg');
INSERT INTO tb_jogos(nome, capa) VALUES('Need for Speed Heat', 'views/resources/site/games_images/nfs_heat.jpg');
INSERT INTO tb_jogos(nome, capa) VALUES('Valorant', 'views/resources/site/games_images/valorant.jpg');

CREATE TABLE tb_salas(
	id_sala INT(11) NOT NULL AUTO_INCREMENT,
    id_jogo INT(11) NOT NULL,
    id_usuario_criador INT(11) NOT NULL,
    banner VARCHAR(255) NOT NULL,
    max_jogadores INT(11) NOT NULL,
    jogadores INT(11) NOT NULL,
    media FLOAT,
    hr_inicio TIME NOT NULL,
    hr_fim TIME NOT NULL,
    dia VARCHAR(64) NOT NULL,
    comentario VARCHAR(255),
	PRIMARY KEY (id_sala),
    FOREIGN KEY (id_jogo) REFERENCES tb_jogos (id_jogo),
    FOREIGN KEY (id_usuario_criador) REFERENCES tb_usuarios (id_usuario)
);

INSERT INTO tb_salas(id_jogo, id_usuario, banner, max_jogadores, jogadores, hr_inicio, hr_fim, dia, comentario) VALUES(1, 2, 'views/resources/site/groups_images/WZ-Season-Three-Announce-TOUT.jpg', 4, 1, '00:00', '04:00', 'quarta-feira', 'Duo para o novo COD Warzone');
INSERT INTO tb_salas(id_jogo, id_usuario, banner, max_jogadores, jogadores, hr_inicio, hr_fim, dia, comentario) VALUES(2, 2, 'views/resources/site/groups_images/ss_d196d945c6170e9cadaf67a6dea675bd5fa7a046.1920x1080.jpg', 5, 1, '23:00', '04:00', 'terça-feira', 'Squad para rankeada.');
INSERT INTO tb_salas(id_jogo, id_usuario, banner, max_jogadores, jogadores, hr_inicio, hr_fim, dia, comentario) VALUES(3, 2, 'views/resources/site/groups_images/ea-sports-fifa-23-is-coming-to-the-epic-games-store-1920x1080-398e19351a82.jpg', 2, 1, '22:00', '03:00', 'sexta-feira', 'Dupla para FUT Draft');
INSERT INTO tb_salas(id_jogo, id_usuario, banner, max_jogadores, jogadores, hr_inicio, hr_fim, dia, comentario) VALUES(3, 2, 'views/resources/site/groups_images/c5e0c88412.jpg', 11, 1, '21:00', '23:00', 'sexta-feira', 'Quero jogar Pro Clubs.');
INSERT INTO tb_salas(id_jogo, id_usuario, banner, max_jogadores, jogadores, hr_inicio, hr_fim, dia, comentario) VALUES(3, 2, 'views/resources/site/groups_images/maxresdefault.jpg', 2, 1, '20:00', '21:00', 'sábado', 'X1, quem vem?');
INSERT INTO tb_salas(id_jogo, id_usuario, banner, max_jogadores, jogadores, hr_inicio, hr_fim, dia, comentario) VALUES(4, 2, 'views/resources/site/groups_images/EGS_LeagueofLegends_RiotGames_S1_2560x1440-ee500721c06da3ec1e5535a88588c77f.jpg', 5, 1, '19:00', '22:00', 'domingo', 'Interesse: Clash.');
INSERT INTO tb_salas(id_jogo, id_usuario, banner, max_jogadores, jogadores, hr_inicio, hr_fim, dia, comentario) VALUES(5, 2, 'views/resources/site/groups_images/maxresdefault1.jpg', 2, 1, '18:00', '21:00', 'quarta-feira', 'Preciso de ajuda para farmar respeito.');
INSERT INTO tb_salas(id_jogo, id_usuario, banner, max_jogadores, jogadores, hr_inicio, hr_fim, dia, comentario) VALUES(5, 2, 'views/resources/site/groups_images/ss_6994870577a41882c458cd00d852d8092116c81c.1920x1080.jpg', 4, 1, '17:00', '19:00', 'quinta-feira', 'Preciso de ajuda para farmar dinheiro.');

CREATE TABLE tb_usuarios_salas(
	id INT(11) NOT NULL AUTO_INCREMENT,
    id_usuario INT(11) NOT NULL,
    id_sala INT(11) NOT NULL,
	PRIMARY KEY (id),
    FOREIGN KEY (id_usuario) REFERENCES tb_usuarios (id_usuario),
    FOREIGN KEY (id_sala) REFERENCES tb_salas (id_sala)
);

INSERT INTO tb_usuarios_salas(id_usuario, id_sala) VALUES(1, 1);
INSERT INTO tb_usuarios_salas(id_usuario, id_sala) VALUES(1, 2);
INSERT INTO tb_usuarios_salas(id_usuario, id_sala) VALUES(1, 3);
INSERT INTO tb_usuarios_salas(id_usuario, id_sala) VALUES(1, 4);
INSERT INTO tb_usuarios_salas(id_usuario, id_sala) VALUES(1, 5);
INSERT INTO tb_usuarios_salas(id_usuario, id_sala) VALUES(1, 6);
INSERT INTO tb_usuarios_salas(id_usuario, id_sala) VALUES(1, 7);
INSERT INTO tb_usuarios_salas(id_usuario, id_sala) VALUES(1, 8);
INSERT INTO tb_usuarios_salas(id_usuario, id_sala) VALUES(2, 3);
