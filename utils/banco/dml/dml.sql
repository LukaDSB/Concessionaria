----------- Tabela categoria ----------- 
SELECT * FROM concessionaria.categoria;

INSERT INTO `concessionaria`.`categoria`
(`id`, `nome`)
VALUES
(id, nome);

UPDATE `concessionaria`.`categoria` 
SET `id` = id, `nome` = nome
WHERE `id` = id;

DELETE FROM `concessionaria`.`categoria`
WHERE `id` = id;

---------- Tabela contato -----------
SELECT * FROM concessionaria.contato;

INSERT INTO `concessionaria`.`contato`
(`id`, `nome`, `email`, `telefone`, `mensagem`)
VALUES (id, nome, email, telefone, mensagem);


UPDATE `concessionaria`.`contato`
SET `id` = id, `nome` = nome, `email` = email, `telefone` = telefone, `mensagem` = mensagem
WHERE `id` = id;


DELETE FROM `concessionaria`.`contato`
WHERE `id` = id;


---------- Tabela marca -----------
SELECT * FROM concessionaria.marca;

INSERT INTO `concessionaria`.`marca`
(`id`, `nome`, `email`, `telefone`, `mensagem`)
VALUES (id, nome, email, telefone, mensagem);

UPDATE `concessionaria`.`marca`
SET `id` = id, `nome` = nome, `email` = email, `telefone` = telefone, `mensagem` = mensagem
WHERE `id` = id;

DELETE FROM `concessionaria`.`marca`
WHERE `id` = id;

---------- Tabela veiculo -----------
SELECT * FROM concessionaria.veiculo;

INSERT INTO `concessionaria`.`veiculo`
(`id`,
`nome`,
`foto`,
`valor`,
`anoFabricacao`,
`anoModelo`,
`cor`,
`combustivel`,
`quilometragem`,
`cambio`,
`placa`,
`descricao`,
`idCategoria`,
`idMarca`,
`idContato`)
VALUES
(id,
nome,
foto,
valor,
anoFabricacao,
anoModelo,
cor,
combustivel,
quilometragem,
cambio,
placa,
descricao,
idCategoria,
idMarca,
idContato);

UPDATE `concessionaria`.`veiculo`
SET
`id` = id,
`nome` = nome,
`foto` = foto,
`valor` = valor,
`anoFabricacao` = anoFabricacao,
`anoModelo` = anoModelo,
`cor` = cor,
`combustivel` = combustivel,
`quilometragem` = quilometragem,
`cambio` = cambio,
`placa` = placa,
`descricao` = descricao,
`idCategoria` = idCategoria,
`idMarca` = idMarca,
`idContato` = idContato
WHERE `id` = id;

DELETE FROM `concessionaria`.`veiculo`
WHERE `id` = id;