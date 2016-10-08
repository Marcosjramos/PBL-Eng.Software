use homerdb;
/*Inserindo registros na tabela usuario*/
INSERT INTO usuario 
(id, email, senha)
VALUES (default, 'GabriellyDiasBarros@armyspy.com', 'gabrielly123'), 
(default,'KaueMartinsFerreira@cuvox.de', 'arthur123'),
(default, 'CaioCardosoBarros@jourrapide.com', 'caio123'),
(default, 'LauraLimaCavalcanti@dayrep.com', 'laura123'),
(default, 'NicoleAzevedoCosta@dayrep.com', 'nic123'),
(default, 'KauaRodriguesRibeiro@dayrep.com', 'k123'),
(default, 'RyanSilvaCosta@cuvox.de', 'ryan123'),
(default, 'EvelynLimaOliveira@fleckens.hu', 'eve123'),
(default, 'ViniciusSousaAlmeida@armyspy.com', 'vin123'),
(default, 'AnaPereiraBarros@armyspy.com', 'ana123'),
(default, 'PedroSousaLima@fleckens.hu', 'p123'),
(default, 'JoaoSousaAzevedo@rhyta.com', 'jo123'),
(default, 'BiancaRibeiroMelo@gustr.com', 'bi123'),
(default, 'LaraPintoPereira@gustr.com', 'lara123'),
(default, 'GiovannaCastroCosta@jourrapide.com', 'gio123'),
(default, 'ViniciusRodriguesLima@gustr.com', 'vini123'),
(default, 'LauraFerreiraSilva@einrot.com', 'lau123'),
(default, 'NicolasGoncalvesCosta@cuvox.de', 'ngonc123'),
(default, 'BrendaCastroGomes@cuvox.de', 'brenda123'),
(default, 'AlexGomesAlves@jourrapide.com', 'alex123'),
(default, 'JuliaGomesCosta@cuvox.de', 'julia123'),
(default, 'IgorSouzaAlmeida@jourrapide.com', 'igor123'),
(default, 'TaniaAlmeidaPinto@cuvox.de', 'tania123'),
(default, 'NicoleCastroAraujo@fleckens.hu', 'nicole123'),
(default, 'JulioRodriguesBarbosa@einrot.com', 'julio123'),
(default, 'LauraCavalcantiOliveira@fleckens.hu', 'cavalcante123'),
(default, 'KaiMeloSilva@teleworm.us', 'kai123'),
(default, 'LaviniaMeloRibeiro@superrito.com', 'lav123'),
(default, 'MarisaOliveiraCavalcanti@armyspy.com', 'mari123'),
(default, 'BrunoAlmeidaCosta@teleworm.us', 'bruno123');

/*Inserindo registros na tabela adm*/
INSERT INTO adm (id, idUsuario) VALUES 
(default,'1'),
(default, '2'),
(default, '3'),
(default, '4'),
(default,'5');


/*Inserindo registros na tabela endereco*/
INSERT INTO endereco (id, estado, cidade, bairro, rua, numero, cLatitude, cLongitude) VALUES
(default, 'Distrito Federal', 'Lago Sul', 'Centro', 'Quadra SHIS QI 21', '299', '-15.900174', '47.852057'),
(default, 'Minas Gerais', 'Sete Lagoas', 'São Francisco de Assis', 'Rua Itapoá', '58', '-19.530353', '-44.304343'),
(default, 'Pernanbuco', 'Paulista', 'Pau Amarelo', 'Rua São Paulo', '758', '-7.823851', '-34.827899'),
(default, 'Ceará', 'Sobral', 'Alto da Brasília', 'Rua Vitória', '1693', '-3.88692', '-40.217874'),
(default, 'Rio de Janeiro', 'Itaguaí', 'Água Fria', 'Rua Maria Teresa Castilho', '397', '-22.1913626', '-43.898712'),
(default, 'São Paulo', 'São Paulo', 'Água Fria', 'Rua Isidore de Laet', '1304', '-23.681622', '-46.618721' ),
(default, 'Distrito Federal', 'Ceilândia', 'Ceilândia Sul', 'Quadra QNP 32 Conjunto D', '1725', '15.841471', '-48.03014'),
(default, 'São Paulo', 'São José dos Campos', 'Jardim Satélite', 'Rua Estrela Dalva', '1610', '23.105832', '-45.919234'),
(default, 'Tocantins', 'Gurupi', 'Setor Central', 'Rua Quatorze de Novembro', '658', '-11.76396', '-48.872628'),
(default, 'Ceará', 'Fortaleza', 'Vila União', 'Rua Treze de Abril', '926', '-3.766344', '-38.502532'),
(default, 'Rio Grande do Sul', 'Cruz Alta', 'Centro', 'Rua Abílio Rocha,', '1558', '-28.702168', '-53.656209'),
(default, 'Espírito Santo', 'Vila Velha', 'Santa Mônica Popular', 'Rua Vinte e Nove', '413', '-20.41255', '-40.235059'),
(default, 'Paraná', 'Toledo', 'Jardim Concórdia', 'Rua Vitorino Sartori', '772', '-24.740564', '-53.84462'),
(default, 'Rio de Janeiro', 'Rio de Janeiro', 'Manguinhos', 'Beco Alcides Gerard', '1179', '-22.910212', '-43.250523'),
(default, 'Goiás', 'Goiânia', 'Setor Oeste', 'Rua 9', '1544', '16.604699', '-49.35783'),
(default, 'São Paulo', 'Santos', 'Saboó', 'Largo da Saudade', '414', '-23.913989', '-46.322766'), 			
(default, 'Paraíba', 'Patos', 'Monte Castelo', 'Rua Solon Medeiros', '395', '-7.071592', '-37.427163'),
(default, 'Alagoas', 'Maceió', 'Levada', 'Rua Dezesseis de Setembro', '1330', '9.623675', '-35.766291'),
(default, 'São Paulo', 'Itaquaquecetuba', 'Veraneio Maracanã', 'Estrada São Simão', '59', '-23.512376', '-46.328064'),
(default, 'Bahia', 'Santo Antônio de Jesus', 'Centro', 'Rua E', '867', '-12.985227', '-39.317641'),
(default, 'São Paulo', 'Jundiaí', 'Bairro dos Fernandos', 'Avenida Nossa Senhora Auxiliadora', '38', '-23.263917', '-46.950043'),
(default, 'Bahia', 'Feira de Santana', 'Parque Ipê', 'Rua Goiânia', '150', '-12.314618', '-39.072009'),
(default, 'São Paulo', 'São Paulo', 'Vila Natal', 'Rua Assaí Natal', '510', '-23.656788', '-46.536242'),
(default, 'Minas Gerais', 'Belo Horizonte', 'Cachoeirinha', 'Rua Olavo Andrade', '1251', '-19.839414', '-44.037385'),
(default, 'São Paulo', 'Jundiaí', 'Jardim Bonfiglioli', 'Rua Kenia', '350', '-23.192807', '-46.819525');

/*Inserindo registros na tabela homer*/
INSERT INTO homer (id, idusuario, nome, cpf, telefone, sexo, idEndereco) VALUES 
(default, '6', 'Kaua Rodrigues Ribeiro', '783.374.123-05', '(61)7688-2078', 'M', '1'),
(default, '7', 'Ryan Silva Costa', '722.159.811-80', '(31)6691-8194', 'M', '2'),
(default, '8', 'Evelyn Lima Oliveira', '318.147.462-26', '(81)7721-6693', 'F', '3'),
(default, '9', 'Vinicius Sousa Almeida', '502.966.554-49', '(88)5598-9014', 'M', '4'),
(default, '10', 'Ana Pereira Barros', '580.296.758-79', '(21)7215-4815', 'F', '5'),
(default, '11', 'Pedro Sousa Lima', '126.792.553-13', '(11)4051-4599', 'M', '6'),
(default, '12', 'Joao Sousa Azevedo', '114.135.396-29', '(61)9517-9587', 'M', '7'),
(default, '13', 'Bianca Ribeiro Melo', '283.191.545-70', '(12)3528-4773', 'F', '8'),
(default, '14', 'Lara Pinto Pereira', '845.832.244-78', '(63)2324-6528', 'F', '9'),
(default, '15', 'Giovanna Castro Costa', '553.951.238-30', '(85)2595-8185', 'F', '10'),
(default, '16', 'Vinicius Rodrigues Lima', '438.384.940-75', '(55)2735-7226', 'M', '11'),
(default, '17', 'Laura Ferreira Silva', '375.799.907-09', '(27)8025-3980', 'F', '12'),
(default, '18', 'Nicolas Goncalves Costa', '953.806.332-50', '(45)6034-3478', 'M', '13'),
(default, '19', 'Brenda Castro Gomes', '633.838.734-55', '(21)7546-8570', 'F', '14'),
(default, '20', 'Alex Gomes Alves', '632.656.760-21', '(62)8808-4149', 'M', '15'),
(default, '21', 'Julia Gomes Costa', '120.474.191-31', '(11)9078-2245', 'F', '16'),
(default, '22', 'Igor Souza Almeida', '708.995.625-31', '(83)3870-8079', 'M', '17'),
(default, '23', 'Tania Almeida Pinto', '790.461.551-70', '(82)3237-8427', 'F', '18'),
(default, '24', 'Nicole Castro Araujo', '386.535.207-32', '(11)2899-5085', 'F', '19'),
(default, '25', 'Julio Rodrigues Barbosa', '732.608.886-16', '(75)2893-9831', 'M', '20'),
(default, '26', 'Laura Cavalcanti Oliveira', '789.960.415-05', '(11)3766-7681', 'F', '21'),
(default, '27', 'Kaio Melo Silva', '302.989.162-31', '(75)4219-6333', 'M', '22'),
(default, '28', 'Lavinia Melo Ribeiro', '534.084.618-05', '(11)2085-8767', 'F', '23'),
(default, '29', 'Marisa Oliveira Cavalcanti', '639.214.023-95', '(31)6953-3599', 'F', '24'),
(default, '30', 'Bruno Almeida Costa', '166.217.889-16', '(11)7435-3430', 'M', '25');

/*Inserindo registros na tabela homerPrestador*/
INSERT INTO homerprestador (id, idHomer, areaAtuacao, tipoConta) VALUES 
(default, '16', 'Diarista', 'normal'),
(default, '17', 'Encanador', 'normal'),
(default, '18', 'Jardineira', 'normal'),
(default, '19', 'Manicure', 'normal'),
(default, '20', 'Pintor', 'normal'),
(default, '21', 'Eletricista', 'profissional'),
(default, '22', 'Marceneiro', 'profissional'),
(default, '23', 'Técnico em TI', 'profissional'),
(default, '24', 'Pedicure', 'profissional'),
(default, '25', 'Pedreiro', 'profissional');


/*Inserindo registros na tabela contratacao*/
INSERT INTO contratacao (id, idCliente, idPrestador, idEndereco, dataInicio, dataFim, estadoServico, valor) VALUES
(default, '6', '21', '1', '2016-09-02', '2016-09-03', '1', '100'),
(default, '10', '23', '5', '2016-09-02', '2016-09-02', '0', '200'),
(default, '14', '19', '9', '2016-09-02', '2016-09-02', '1', '80'),
(default, '19', '25', '14', '2016-09-02', '2016-09-02', '1', '90'),
(default, '22', '25', '20', '2016-09-02', '2016-09-02', '0', '140'),
(default, '25', '22', '25', '2016-09-02', '2016-09-02', '0', '60');

/*Inserindo registros na tabela historico*/
INSERT INTO historico (id, idHomer, idContratacao) VALUES 
(default, '6', '1'),
(default, '10', '2'),
(default, '14', '3'),
(default, '19', '4'),
(default, '22', '5'),
(default, '25', '6');

/*Inserindo registros na tabela favoritos*/
INSERT INTO favoritos (id, idHomer, idFavoritado) VALUES 
(default, '6', '16'),
(default, '6', '20'),
(default, '6', '25'),
(default, '12', '17'),
(default, '12', '24'),
(default, '18', '21'),
(default, '18', '23'),
(default, '18', '24'),
(default, '20', '16'),
(default, '20', '21'),
(default, '20', '25'),
(default, '23', '21'),
(default, '23', '23'),
(default, '25', '22'),
(default, '25', '24');

/*Inserindo registros na tabela anuncios*/
INSERT INTO anuncios (id, idHomer, titulo, descricao, valor) VALUES 
(default, '22', 'Trabalho como Encanador', '', '100.0'),
(default, '6', 'Procuro Pintor!', 'Preciso de um pintor!', '80.0'),
(default, '25', 'Trabalho como Pedreiro!', 'Horários: 7hrs a 12hrs', '120.0'),
(default, '24', 'Procuro Manicure', 'Pelo turno matutino', '50.0'),
(default, '17', 'Procuro Encanador', 'Trabalho simples', '70.0'),
(default, '12', 'Procuro Eletricista', 'Trabalho para mais de um dia', '120.0'),
(default, '9', 'Procuro Diarista', 'Pelo turno matutino', '50.0'),
(default, '15', 'Procuro Marceneiro', 'Trabalho simples', '70.0'),
(default, '10', 'Procuro Eletricista', 'Trabalho para mais de um dia', '120.0');

/*Inserindo registros na tabela denuncias*/
INSERT INTO denuncia (id, idDenunciante, idDenunciado, dataDenuncia, descricao, resultado) VALUES 
(default, '7', '21', '2016-06-03', 'Trabalho incompleto.', 'Aprovada'),
(default, '12', '19', '2016-07-15', 'Pagamento não realizado', 'Aprovada'),
(default, '21', '25', '2016-09-29', 'Serviço de má qualidade', 'Reprovada'),
(default, '19', '23', '2016-10-05', '', 'Aprovada'),
(default, '25', '22', '2016-08-10', 'Trabalho incompleto', 'Reprovada');

/*Inserindo registros na tabela avaliacao*/
INSERT INTO avaliacao (id, idAvaliador, idAvaliado, stars, comentario) VALUES 
(default, '6', '22', '4', 'Trabalho bem feito.'),
(default, '9', '23', '2', 'Trabalho mal feito.'),
(default, '14', '25', '5', 'Trabalho terminado rapidamente.'),
(default, '20', '19', '5', 'Serviço completo.'),
(default, '7', '21', '4', 'Trabalho bem feito.'),
(default, '25', '24', '5', 'Trabalho muito bem feito.'),
(default, '20', '21', '3', 'Trabalho razoável.'),
(default, '18', '19', '5', 'Serviço completo.'),
(default, '12', '18', '2', 'Não terminou o serviço no horário.'),
(default, '21', '16', '5', 'Trabalho bem feito.');

/*Inserindo registros na tabela logsusuario*/
INSERT INTO logusuario (id, idUsuario, dataLog, operacao) VALUES 
(default, '5', '2016-09-19', 'Login'),
(default, '10', '2016-10-03', 'Cadastro'),
(default, '21', '2016-10-07', 'Logout'),
(default, '25', '2016-10-07', 'Contratacao'),
(default, '17', '2016-10-01', 'Pesquisa de Prestador'),
(default, '9', '2016-09-12', 'Logout'),
(default, '6', '2016-08-30', 'Contratacao'),
(default, '23', '2016-07-20', 'Pesquisa de Prestador'),
(default, '4', '2016-10-03', 'Anuncio'),
(default, '23', '2016-09-04', 'Cadastro'),
(default, '16', '2016-08-05', 'Pesquisa de Serviço'),
(default, '15', '2016-10-03', 'Login'),
(default, '23', '2016-09-04', 'Denuncia'),
(default, '8', '2016-10-03', 'Login'),
(default, '21', '2016-09-04', 'Cadastro'),
(default, '9', '2016-10-03', 'Anuncio'),
(default, '10', '2016-09-04', 'Avaliacao');

/*Inserindo registros na tabela propaganda*/
INSERT INTO propaganda () VALUES ();
