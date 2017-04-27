SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.11746883392334

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.054711103439331

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0015819072723389

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0011270046234131

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00097417831420898

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00094199180603027

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00050497055053711

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003058910369873

select og.id, og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome, og.id order by nome asc 
 Execution Time:0.33275294303894

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.10258197784424

select og.nome as nome, sum(p.valor) as valor from planejamento as p, origemreceita as og where origemreceita in (select id from origemreceita where status=3) and dataprevista between '2017-01-01' and '2017-12-31' and p.origemreceita=og.id and p.tipo=1 group by og.nome order by og.nome asc 
 Execution Time:0.0018980503082275

select pj.id as planejamento, pj.tipo, pj.plano, p.status, p.obm as obm_id, o.nome as obm, pj.origemreceita as og_id, og.nome as og_nome, pj.detalhamento, pj.valor, pj.dataprevista from planejamento as pj, origemreceita as og, especificacao as ep, plano as p, obm as o where pj.origemreceita = og.id and pj.especificacao = ep.id and pj.tipo=1 and pj.plano=p.id and p.obm=o.id and pj.dataprevista between '2017-01-01' and '2017-12-31' and og.status=3 order by o.nome asc, dataprevista desc 
 Execution Time:0.0556960105896

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00055909156799316

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00049901008605957

select og.id, og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome, og.id order by nome asc 
 Execution Time:0.0027279853820801

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.0013759136199951

select og.nome as nome, sum(p.valor) as valor from planejamento as p, origemreceita as og where origemreceita in (select id from origemreceita where status=3) and dataprevista between '2017-01-01' and '2017-12-31' and p.origemreceita=og.id and p.tipo=1 group by og.nome order by og.nome asc 
 Execution Time:0.0011360645294189

select pj.id as planejamento, pj.tipo, pj.plano, p.status, p.obm as obm_id, o.nome as obm, pj.origemreceita as og_id, og.nome as og_nome, pj.detalhamento, pj.valor, pj.dataprevista from planejamento as pj, origemreceita as og, especificacao as ep, plano as p, obm as o where pj.origemreceita = og.id and pj.especificacao = ep.id and pj.tipo=1 and pj.plano=p.id and p.obm=o.id and pj.dataprevista between '2017-01-01' and '2017-12-31' and og.status=3 order by o.nome asc, dataprevista desc 
 Execution Time:0.0026919841766357

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00045609474182129

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00047206878662109

select og.id, og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome, og.id order by nome asc 
 Execution Time:0.0011160373687744

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.0013079643249512

select og.nome as nome, sum(p.valor) as valor from planejamento as p, origemreceita as og where origemreceita in (select id from origemreceita where status=3) and dataprevista between '2017-01-01' and '2017-12-31' and p.origemreceita=og.id and p.tipo=1 group by og.nome order by og.nome asc 
 Execution Time:0.00075006484985352

select pj.id as planejamento, pj.tipo, pj.plano, p.status, p.obm as obm_id, o.nome as obm, pj.origemreceita as og_id, og.nome as og_nome, pj.detalhamento, pj.valor, pj.dataprevista from planejamento as pj, origemreceita as og, especificacao as ep, plano as p, obm as o where pj.origemreceita = og.id and pj.especificacao = ep.id and pj.tipo=1 and pj.plano=p.id and p.obm=o.id and pj.dataprevista between '2017-01-01' and '2017-12-31' and og.status=3 order by o.nome asc, dataprevista desc 
 Execution Time:0.0013930797576904

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00039982795715332

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00032591819763184

select og.id, og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2016-01-01' and data_final<='2016-12-31' group by nome, og.id order by nome asc 
 Execution Time:0.0048308372497559

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2016-01-01' and '2016-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2016-01-01' and data_final<='2016-12-31' group by og.id) 
 Execution Time:0.0014891624450684

select og.nome as nome, sum(p.valor) as valor from planejamento as p, origemreceita as og where origemreceita in (select id from origemreceita where status=3) and dataprevista between '2016-01-01' and '2016-12-31' and p.origemreceita=og.id and p.tipo=1 group by og.nome order by og.nome asc 
 Execution Time:0.0013461112976074

select pj.id as planejamento, pj.tipo, pj.plano, p.status, p.obm as obm_id, o.nome as obm, pj.origemreceita as og_id, og.nome as og_nome, pj.detalhamento, pj.valor, pj.dataprevista from planejamento as pj, origemreceita as og, especificacao as ep, plano as p, obm as o where pj.origemreceita = og.id and pj.especificacao = ep.id and pj.tipo=1 and pj.plano=p.id and p.obm=o.id and pj.dataprevista between '2016-01-01' and '2016-12-31' and og.status=3 order by o.nome asc, dataprevista desc 
 Execution Time:0.0034091472625732

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00075817108154297

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00056195259094238

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00098490715026855

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0015890598297119

select og.id, og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome, og.id order by nome asc 
 Execution Time:0.0008699893951416

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.0009770393371582

select og.nome as nome, sum(p.valor) as valor from planejamento as p, origemreceita as og where origemreceita in (select id from origemreceita where status=3) and dataprevista between '2017-01-01' and '2017-12-31' and p.origemreceita=og.id and p.tipo=1 group by og.nome order by og.nome asc 
 Execution Time:0.0012269020080566

select pj.id as planejamento, pj.tipo, pj.plano, p.status, p.obm as obm_id, o.nome as obm, pj.origemreceita as og_id, og.nome as og_nome, pj.detalhamento, pj.valor, pj.dataprevista from planejamento as pj, origemreceita as og, especificacao as ep, plano as p, obm as o where pj.origemreceita = og.id and pj.especificacao = ep.id and pj.tipo=1 and pj.plano=p.id and p.obm=o.id and pj.dataprevista between '2017-01-01' and '2017-12-31' and og.status=3 order by o.nome asc, dataprevista desc 
 Execution Time:0.002018928527832

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00054097175598145

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00049901008605957

select og.id, og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome, og.id order by nome asc 
 Execution Time:0.00057601928710938

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.00060915946960449

select og.nome as nome, sum(p.valor) as valor from planejamento as p, origemreceita as og where origemreceita in (select id from origemreceita where status=3) and dataprevista between '2017-01-01' and '2017-12-31' and p.origemreceita=og.id and p.tipo=1 group by og.nome order by og.nome asc 
 Execution Time:0.00075912475585938

select pj.id as planejamento, pj.tipo, pj.plano, p.status, p.obm as obm_id, o.nome as obm, pj.origemreceita as og_id, og.nome as og_nome, pj.detalhamento, pj.valor, pj.dataprevista from planejamento as pj, origemreceita as og, especificacao as ep, plano as p, obm as o where pj.origemreceita = og.id and pj.especificacao = ep.id and pj.tipo=1 and pj.plano=p.id and p.obm=o.id and pj.dataprevista between '2017-01-01' and '2017-12-31' and og.status=3 order by o.nome asc, dataprevista desc 
 Execution Time:0.0011749267578125

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00034689903259277

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00031089782714844

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.035675048828125

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.037560939788818

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.039750099182129

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.11605000495911

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0006859302520752

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0034968852996826

SELECT * FROM plano WHERE status<4 and status>0 and obm in (4,5,1,3,9,7,8,10,11) ORDER BY datainicio DESC 
 Execution Time:0.028619050979614

select * from obm where id='3' limit 1 
 Execution Time:0.00033903121948242

select * from obm where id='5' limit 1 
 Execution Time:0.00025010108947754

select * from obm where id='11' limit 1 
 Execution Time:0.00025606155395508

select * from obm where id='7' limit 1 
 Execution Time:0.00028419494628906

select * from plano where status=4 order by datainicio DESC, datafim DESC 
 Execution Time:0.00051093101501465

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00030899047851562

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.012905836105347

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.00087904930114746

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.00066399574279785

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00099802017211914

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.01298999786377

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00058484077453613

select * from planejamento where plano='22' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00086307525634766

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00052189826965332

select origemreceita, sum(valor) from planejamento where plano='22' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00055384635925293

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='22' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0010249614715576

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='22' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.0006110668182373

select sum(valor) as total from planejamento where plano='22' and tipo=1 
 Execution Time:0.00029301643371582

select sum(valor) as total from planejamento where plano='22' and tipo=2 
 Execution Time:0.00030612945556641

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.0005180835723877

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.00037097930908203

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.0003209114074707

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00075793266296387

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00043702125549316

select * from planejamento where plano='35' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00048995018005371

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00061488151550293

select origemreceita, sum(valor) from planejamento where plano='35' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.0005490779876709

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='35' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0012190341949463

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='35' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00085902214050293

select sum(valor) as total from planejamento where plano='35' and tipo=1 
 Execution Time:0.0004730224609375

select sum(valor) as total from planejamento where plano='35' and tipo=2 
 Execution Time:0.00049114227294922

