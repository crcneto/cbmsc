create table municipio(
    id serial unique not null,
    nome varchar(60),
    abrev varchar(45),
    habitantes bigint,
    status integer not null default 2
);
insert into municipio (nome, abrev, habitantes) values ('Itajai', 'ITJ', 200000);

create table obm(
    id serial unique not null,
    nome varchar(60) not null unique,
    abrev varchar(45) not null,
    municipio bigint references municipio(id),
    superior bigint references obm(id),
    status integer not null default 2,
    ts timestamp not null default now()
);
insert into obm (nome, abrev, municipio, superior) values ('CBMSC', 'CBMSC', 1, 1);

create table modulo(
    id serial unique not null,
    nome varchar(45) not null,
    status integer not null default 2,
    ts timestamp not null default now()
);
insert into modulo (nome) values ('controledeacesso');
insert into modulo (nome) values ('modulo');
insert into modulo (nome) values ('municipio');
insert into modulo (nome) values ('obm');
insert into modulo (nome) values ('planejamento');
insert into modulo (nome) values ('setor');
insert into modulo (nome) values ('subsetor');
insert into modulo (nome) values ('usuario');
insert into modulo (nome) values ('postograd');
insert into modulo (nome) values ('configcontabil');

create table setor(
    id serial unique not null,
    nome varchar(60) not null,
    status integer not null default 2,
    ts timestamp not null default now()
);
insert into setor (nome) values ('Operacional');
insert into setor (nome) values ('Administartivo');

create table subsetor(
    id serial unique not null,
    nome varchar(60) not null,
    setor integer references setor(id),
    status integer not null default 2,
    ts timestamp not null default now()
);

create table postograd(
id serial unique not null,
nome varchar(60),
abrev varchar(10),
status integer not null default 2
);
insert into postograd (nome, abrev) values ('Soldado', 'SD');
insert into postograd (nome, abrev) values ('Cabo', 'CB');

create table usuario(
    id serial unique not null,
    matricula bigint unique,
    apelido varchar(50), 
    nome varchar(60), 
    email varchar(60) not null unique,
    obm integer references obm(id),
    postograd integer references postograd(id),
    senha varchar not null,
    status integer not null default 2
);
insert into usuario (matricula, apelido, nome, email, obm, postograd, senha) values (9272038, 'Neto', 'Claudio Neto', 'crcneto@cbm.sc.gov.br', 1, 2, md5('0000'));

create table origemreceita(
    id serial unique not null,
    nome varchar(60) not null,
    status integer not null default 2,
    ts timestamp default now()
);

create table categoriaeconomica(
    id integer primary key not null unique,
    nome varchar(60) not null,
    descricao text,
    ts timestamp not null default now(),
    status integer not null default 2
);
create table naturezadespesa(
    id integer primary key not null unique,
    nome varchar(60) not null,
    descricao text,
    ts timestamp not null default now(),
    status integer not null default 2
);

create table aplicacao(
    id integer unique not null,
    nome varchar(60) not null,
    descricao varchar,
    status integer not null default 2,
    ts timestamp default now()
);

create table objeto(
    id integer unique not null,
    nome varchar(120) not null,
    descricao varchar,
    status integer not null default 2,
    ts timestamp default now() 
);

create table desdobramento(
    id serial unique not null,
    nome varchar(120) not null,
    descricao varchar,
    status integer not null default 2,
    ts timestamp default now()
);

/*insert into desdobramento (id, nome, descricao) values (0, 'Padrão', 'Criado apenas para uso futuro.');*/

create table especificacao(
    id serial unique not null,
    nro integer,
    nome varchar not null,
    categoria integer references categoriaeconomica(id),
    natureza integer references naturezadespesa(id),
    aplicacao integer references aplicacao(id),
    objeto integer references objeto(id),
    desdobramento integer references desdobramento(id) default 0,
    status integer not null default 2,
    ts timestamp default now()
);

create table plano(
    id serial unique not null,
    obm integer references obm(id),
    datainicio date not null,
    datafim date not null,
    ts timestamp not null default now(),
    usuario integer not null references usuario(id),
    status integer not null default 2,
    obmavaliacaopendente integer references obm(id),
    reprovacao timestamp,
    usuarioreprovacao integer references usuario(id),
    aprovacao timestamp,
    responsavel integer references usuario(id)
);

/*Substituido*/
create table reprovacao(
    id serial unique not null,
    plano bigint references plano(id) not null,
    operador bigint references usuario(id),
    ts timestamp default now(),
    motivo text
);

create table planejamento(
    id serial unique not null,
    plano bigint references plano(id),
    tipo integer default 2, /*1=receita 2=despesa*/
    origemreceita integer references origemreceita(id),
    especificacao integer references especificacao(id),
    detalhamento varchar,
    qtd float not null default 1,
    valor double precision not null default 0.00,
    dataprevista date default  now()+interval '1 year',
    subsetor integer references subsetor(id),
    obs varchar,
    operador integer references usuario(id),
    status integer not null default 2,
    ts timestamp default now(),
    indeferimento varchar,
    ind_operador integer references usuario(id),
    ind_ts timestamp
);

create table acesso(
    id serial unique not null,
    usuario bigint references usuario(id) not null,
    obm integer references obm(id),
    modulo integer references modulo(id),
    nivel integer not null default 1,
    operador integer references usuario(id) not null,
    ts timestamp default now()
);

create table logs(
    id serial unique not null,
    transacao varchar not null,
    usuario bigint references usuario(id) not null,
    ts timestamp not null default now()
);

create table tarefa(
    id serial unique not null,
    usuario integer references usuario(id),
    data_prevista date,
    tarefa varchar,
    obs varchar,
    data_conclusao date,
    status integer default 2
);

create table receitarestrita(
    id serial unique not null, 
    receita integer references origemreceita(id),
    data_inicial date,
    data_final date,
    valor double precision not null default 0.00,
    obs varchar,
    operador integer references usuario(id),
    ts timestamp default now()
);