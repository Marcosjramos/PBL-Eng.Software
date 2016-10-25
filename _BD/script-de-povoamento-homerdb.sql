use homerdb;

/*Inserindo registros na tabela adm*/
INSERT INTO adm (id, email, senha) VALUES 
(default,'GabriellyDiasBarros@armyspy.com', 'gabrielly123'),
(default, 'KaueMartinsFerreira@cuvox.de', 'kauemar123'),
(default, 'CaioCardosoBarros@jourrapide.com', 'caio123'),
(default, 'LauraLimaCavalcanti@dayrep.com', 'laura123'),
(default,'NicoleAzevedoCosta@dayrep.com', 'nic123');


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
INSERT INTO clientes (id, nome, email, senha, cpf, telefone, sexo, idEndereco,  dataCadastro) VALUES 
(default, 'Kaua Rodrigues Ribeiro', 'KauaRodriguesRibeiro@dayrep.com', 'k123', '783.374.123-05', '(61)7688-2078', 'M', '1', default),
(default, 'Ryan Silva Costa', 'RyanSilvaCosta@cuvox.de', 'ryan123', '722.159.811-80', '(31)6691-8194', 'M', '2', default),
(default, 'Evelyn Lima Oliveira',  'EvelynLimaOliveira@fleckens.hu', 'eve123', '318.147.462-26', '(81)7721-6693', 'F', '3', default),
(default, 'Vinicius Sousa Almeida', 'ViniciusSousaAlmeida@armyspy.com', 'vin123', '502.966.554-49', '(88)5598-9014', 'M', '4', default),
(default, 'Ana Pereira Barros', 'AnaPereiraBarros@armyspy.com', 'ana123', '580.296.758-79', '(21)7215-4815', 'F', '5', default),
(default, 'Pedro Sousa Lima', 'PedroSousaLima@fleckens.hu', 'p123', '126.792.553-13', '(11)4051-4599', 'M', '6', default),
(default, 'Joao Sousa Azevedo', 'JoaoSousaAzevedo@rhyta.com', 'jo123', '114.135.396-29', '(61)9517-9587', 'M', '7', default),
(default, 'Bianca Ribeiro Melo', 'BiancaRibeiroMelo@gustr.com', 'bi123', '283.191.545-70', '(12)3528-4773', 'F', '8', default),
(default, 'Lara Pinto Pereira', 'LaraPintoPereira@gustr.com', 'lara123', '845.832.244-78', '(63)2324-6528', 'F', '9', default),
(default, 'Giovanna Castro Costa', 'GiovannaCastroCosta@jourrapide.com', 'gio123', '553.951.238-30', '(85)2595-8185', 'F', '10', default),
(default, 'Vinicius Rodrigues Lima',  'ViniciusRodriguesLima@gustr.com', 'vini123', '438.384.940-75', '(55)2735-7226', 'M', '11', default),
(default, 'Laura Ferreira Silva', 'LauraFerreiraSilva@einrot.com', 'lau123', '375.799.907-09', '(27)8025-3980', 'F', '12', default),
(default, 'Nicolas Goncalves Costa', 'NicolasGoncalvesCosta@cuvox.de', 'ngonc123', '953.806.332-50', '(45)6034-3478', 'M', '13', default),
(default, 'Brenda Castro Gomes', 'BrendaCastroGomes@cuvox.de', 'brenda123', '633.838.734-55', '(21)7546-8570', 'F', '14', default),
(default, 'Alex Gomes Alves',  'AlexGomesAlves@jourrapide.com', 'alex123', '632.656.760-21', '(62)8808-4149', 'M', '15', default),
(default, 'Julia Gomes Costa', 'JuliaGomesCosta@cuvox.de', 'julia123', '120.474.191-31', '(11)9078-2245', 'F', '16', default),
(default, 'Igor Souza Almeida', 'IgorSouzaAlmeida@jourrapide.com', 'igor123', '708.995.625-31', '(83)3870-8079', 'M', '17', default),
(default, 'Tania Almeida Pinto', 'TaniaAlmeidaPinto@cuvox.de', 'tania123', '790.461.551-70', '(82)3237-8427', 'F', '18', default),
(default, 'Nicole Castro Araujo', 'NicoleCastroAraujo@fleckens.hu', 'nicole123', '386.535.207-32', '(11)2899-5085', 'F', '19', default),
(default, 'Julio Rodrigues Barbosa', 'JulioRodriguesBarbosa@einrot.com', 'julio123', '732.608.886-16', '(75)2893-9831', 'M', '20', default),
(default, 'Laura Cavalcanti Oliveira', 'LauraCavalcantiOliveira@fleckens.hu', 'cavalcante123', '789.960.415-05', '(11)3766-7681', 'F', '21', default),
(default, 'Kaio Melo Silva', 'KaiMeloSilva@teleworm.us', 'kai123', '302.989.162-31', '(75)4219-6333', 'M', '22', default),
(default, 'Lavinia Melo Ribeiro', 'LaviniaMeloRibeiro@superrito.com', 'lav123', '534.084.618-05', '(11)2085-8767', 'F', '23', default),
(default, 'Marisa Oliveira Cavalcanti', 'MarisaOliveiraCavalcanti@armyspy.com', 'mari123', '639.214.023-95', '(31)6953-3599', 'F', '24', default),
(default, 'Bruno Almeida Costa', 'BrunoAlmeidaCosta@teleworm.us', 'bruno123', '166.217.889-16', '(11)7435-3430', 'M', '25', default);

/*Inserindo registros na tabela homerPrestador*/
INSERT INTO prestadores (id, idCliente, areaAtuacao, tipoConta) VALUES 
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
INSERT INTO historico (id, idCliente, idContratacao) VALUES 
(default, '6', '1'),
(default, '10', '2'),
(default, '14', '3'),
(default, '19', '4'),
(default, '22', '5'),
(default, '25', '6');

/*Inserindo registros na tabela favoritos*/
INSERT INTO favoritos (id, idCliente, idFavorito) VALUES 
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
INSERT INTO anuncios (id, idCliente, titulo, descricao, valor) VALUES 
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
INSERT INTO logusuario (id, idCliente, dataLog, operacao) VALUES 
(default, '5', default, 'Login'),
(default, '10', default, 'Cadastro'),
(default, '21', default, 'Logout'),
(default, '25', default, 'Contratacao'),
(default, '17', default, 'Pesquisa de Prestador'),
(default, '9', default, 'Logout'),
(default, '6', default, 'Contratacao'),
(default, '23', default, 'Pesquisa de Prestador'),
(default, '4', default, 'Anuncio'),
(default, '23', default, 'Cadastro'),
(default, '16', default, 'Pesquisa de Serviço'),
(default, '15', default, 'Login'),
(default, '23', default, 'Denuncia'),
(default, '8', default, 'Login'),
(default, '21', default, 'Cadastro'),
(default, '9', default, 'Anuncio'),
(default, '10', default, 'Avaliacao');

/*Inserindo registros na tabela propaganda*/
INSERT INTO propaganda () VALUES ();
