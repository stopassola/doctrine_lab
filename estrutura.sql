create table produtos (
codigo bigint NOT NULL AUTO_INCREMENT,
nome varchar(250) NOT NULL,
descricao text,
preco numeric(12,2),
peso numeric(10,3),
PRIMARY KEY (codigo));

insert into produtos (nome,preco) values ("Whey Protein 3W Morango",61.9);
insert into produtos (nome,preco) values ("Whey Protein Optimum Baunilha",178.9);
insert into produtos (nome,preco) values ("Poliaminoacid 38000 ZMA Morango 600ml - Integral",35.9);
insert into produtos (nome,preco) values ("Albumin Super Chocolate 500 grs Millennium",16.9);
insert into produtos (nome,preco) values ("Flex Bar Whey Baunilha 6Un. - Integral",17.4);
insert into produtos (nome,preco) values ("Mass Nutri 15000 Banana/Morango 3Kg - Integral",54.9);
insert into produtos (nome,preco) values ("Maltodextrina Pura 900grs Frutas - MidWay",10.9);
insert into produtos (nome,preco) values ("Shark Cartilage 1000 mg 60tbs - Universal",51.6);
insert into produtos (nome,preco) values ("BCAA Top 3000 mg 240 caps - Integralmedica",69.9);
insert into produtos (nome,preco) values ("Animal Mega Packs 44 - Integral",84.9);
insert into produtos (nome,preco) values ("ZMA Pro Testosterone 90caps - Universal",67.4);
insert into produtos (nome,preco) values ("Nitro Pró II 90 tabletes - Probiótica",41.9);
