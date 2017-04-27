SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.13909006118774

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.055248975753784

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.33048605918884

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.12430095672607

select og.nome as nome, sum(p.valor) as valor from planejamento as p, origemreceita as og where origemreceita in (select id from origemreceita where status=3) and dataprevista between '2017-01-01' and '2017-12-31' and p.origemreceita=og.id and p.tipo=1 group by og.nome order by og.nome asc 
 Execution Time:0.0026700496673584

select pj.id as planejamento, pj.tipo, pj.plano, p.status, p.obm as obm_id, o.nome as obm, pj.origemreceita as og_id, og.nome as og_nome, pj.detalhamento, pj.valor, pj.dataprevista from planejamento as pj, origemreceita as og, especificacao as ep, plano as p, obm as o where pj.origemreceita = og.id and pj.especificacao = ep.id and pj.tipo=1 and pj.plano=p.id and p.obm=o.id and pj.dataprevista between '2017-01-01' and '2017-12-31' and og.status=3 order by o.nome asc, dataprevista desc 
 Execution Time:0.069576025009155

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00065302848815918

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00063586235046387

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00099802017211914

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00049901008605957

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00058317184448242

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.030957221984863

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00036406517028809

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00070619583129883

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00074100494384766

select origemreceita, sum(valor) from planejamento where plano='36' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00043392181396484

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='36' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.032963991165161

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='36' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00075912475585938

select sum(valor) as total from planejamento where plano='36' and tipo=1 
 Execution Time:0.00037288665771484

select sum(valor) as total from planejamento where plano='36' and tipo=2 
 Execution Time:0.00034594535827637

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00073790550231934

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00031709671020508

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00066590309143066

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00081396102905273

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0005040168762207

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00074291229248047

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0005500316619873

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00047612190246582

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0012099742889404

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='31' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00062704086303711

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.0002739429473877

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00023889541625977

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.00042200088500977

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.00029706954956055

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00028109550476074

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00048398971557617

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00034403800964355

select * from planejamento where plano='35' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00043296813964844

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00028586387634277

select origemreceita, sum(valor) from planejamento where plano='35' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00029492378234863

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='35' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00066494941711426

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='35' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00075697898864746

select sum(valor) as total from planejamento where plano='35' and tipo=1 
 Execution Time:0.00047492980957031

select sum(valor) as total from planejamento where plano='35' and tipo=2 
 Execution Time:0.00027704238891602

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.082710027694702

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0011768341064453

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.031955003738403

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.12776017189026

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00072097778320312

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.003303050994873

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.0014889240264893

select * from obm where id='3' limit 1 
 Execution Time:0.00081014633178711

select * from obm where id='5' limit 1 
 Execution Time:0.00056004524230957

select * from obm where id='7' limit 1 
 Execution Time:0.00031018257141113

select * from plano where status=4 order by datainicio DESC, datafim DESC 
 Execution Time:0.0012588500976562

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00061583518981934

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0008549690246582

SELECT *
FROM "plano"
WHERE "id" =  '29' 
 Execution Time:0.00043487548828125

SELECT *
FROM "plano"
WHERE "id" =  '29' 
 Execution Time:0.00030899047851562

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00029301643371582

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00048589706420898

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00036215782165527

select * from planejamento where plano='29' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00043892860412598

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00034785270690918

select origemreceita, sum(valor) from planejamento where plano='29' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00037097930908203

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='29' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00066995620727539

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='29' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00057101249694824

select sum(valor) as total from planejamento where plano='29' and tipo=1 
 Execution Time:0.00026607513427734

select sum(valor) as total from planejamento where plano='29' and tipo=2 
 Execution Time:0.00031113624572754

select * from plano where status=4 order by datainicio DESC, datafim DESC 
 Execution Time:0.00055789947509766

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00032901763916016

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00030303001403809

select * from plano where status=4 and obm='5' order by datainicio DESC, datafim DESC 
 Execution Time:0.00046110153198242

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003049373626709

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00028109550476074

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.00047707557678223

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.00036001205444336

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00032806396484375

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00062084197998047

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003960132598877

select * from planejamento where plano='35' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00049591064453125

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00071597099304199

select origemreceita, sum(valor) from planejamento where plano='35' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00042295455932617

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='35' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00085091590881348

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='35' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00063705444335938

select sum(valor) as total from planejamento where plano='35' and tipo=1 
 Execution Time:0.00034499168395996

select sum(valor) as total from planejamento where plano='35' and tipo=2 
 Execution Time:0.0003211498260498

select * from plano where status=4 order by datainicio DESC, datafim DESC 
 Execution Time:0.00054311752319336

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003511905670166

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00096297264099121

select * from plano where status=4 and obm='5' order by datainicio DESC, datafim DESC 
 Execution Time:0.00060296058654785

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00049901008605957

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0004570484161377

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.00055098533630371

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.00046896934509277

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00069999694824219

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0010411739349365

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00047683715820312

select * from planejamento where plano='22' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0010089874267578

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00048995018005371

select origemreceita, sum(valor) from planejamento where plano='22' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00072216987609863

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='22' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0011610984802246

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='22' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00087904930114746

select sum(valor) as total from planejamento where plano='22' and tipo=1 
 Execution Time:0.00089097023010254

select sum(valor) as total from planejamento where plano='22' and tipo=2 
 Execution Time:0.00052905082702637

SELECT *
FROM "plano"
WHERE "id" =  '29' 
 Execution Time:0.0026230812072754

SELECT *
FROM "plano"
WHERE "id" =  '29' 
 Execution Time:0.00050711631774902

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.0011970996856689

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0015408992767334

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00078892707824707

select * from planejamento where plano='29' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0021929740905762

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0014259815216064

select origemreceita, sum(valor) from planejamento where plano='29' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00072884559631348

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='29' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0013368129730225

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='29' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00082302093505859

select sum(valor) as total from planejamento where plano='29' and tipo=1 
 Execution Time:0.00047898292541504

select sum(valor) as total from planejamento where plano='29' and tipo=2 
 Execution Time:0.00046992301940918

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0025508403778076

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0018520355224609

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.0030169486999512

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.001694917678833

select og.nome as nome, sum(p.valor) as valor from planejamento as p, origemreceita as og where origemreceita in (select id from origemreceita where status=3) and dataprevista between '2017-01-01' and '2017-12-31' and p.origemreceita=og.id and p.tipo=1 group by og.nome order by og.nome asc 
 Execution Time:0.0011270046234131

select pj.id as planejamento, pj.tipo, pj.plano, p.status, p.obm as obm_id, o.nome as obm, pj.origemreceita as og_id, og.nome as og_nome, pj.detalhamento, pj.valor, pj.dataprevista from planejamento as pj, origemreceita as og, especificacao as ep, plano as p, obm as o where pj.origemreceita = og.id and pj.especificacao = ep.id and pj.tipo=1 and pj.plano=p.id and p.obm=o.id and pj.dataprevista between '2017-01-01' and '2017-12-31' and og.status=3 order by o.nome asc, dataprevista desc 
 Execution Time:0.003242015838623

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00064802169799805

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00087118148803711

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00074481964111328

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004580020904541

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.0013480186462402

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.0010900497436523

select og.nome as nome, sum(p.valor) as valor from planejamento as p, origemreceita as og where origemreceita in (select id from origemreceita where status=3) and dataprevista between '2017-01-01' and '2017-12-31' and p.origemreceita=og.id and p.tipo=1 group by og.nome order by og.nome asc 
 Execution Time:0.0013110637664795

select pj.id as planejamento, pj.tipo, pj.plano, p.status, p.obm as obm_id, o.nome as obm, pj.origemreceita as og_id, og.nome as og_nome, pj.detalhamento, pj.valor, pj.dataprevista from planejamento as pj, origemreceita as og, especificacao as ep, plano as p, obm as o where pj.origemreceita = og.id and pj.especificacao = ep.id and pj.tipo=1 and pj.plano=p.id and p.obm=o.id and pj.dataprevista between '2017-01-01' and '2017-12-31' and og.status=3 order by o.nome asc, dataprevista desc 
 Execution Time:0.0022969245910645

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00048112869262695

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00044608116149902

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.00080108642578125

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.00096583366394043

select og.nome as nome, sum(p.valor) as valor from planejamento as p, origemreceita as og where origemreceita in (select id from origemreceita where status=3) and dataprevista between '2017-01-01' and '2017-12-31' and p.origemreceita=og.id and p.tipo=1 group by og.nome order by og.nome asc 
 Execution Time:0.0011818408966064

select pj.id as planejamento, pj.tipo, pj.plano, p.status, p.obm as obm_id, o.nome as obm, pj.origemreceita as og_id, og.nome as og_nome, pj.detalhamento, pj.valor, pj.dataprevista from planejamento as pj, origemreceita as og, especificacao as ep, plano as p, obm as o where pj.origemreceita = og.id and pj.especificacao = ep.id and pj.tipo=1 and pj.plano=p.id and p.obm=o.id and pj.dataprevista between '2017-01-01' and '2017-12-31' and og.status=3 order by o.nome asc, dataprevista desc 
 Execution Time:0.0020091533660889

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00051689147949219

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00099396705627441

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.0040180683135986

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.0016980171203613

select og.nome as nome, sum(p.valor) as valor from planejamento as p, origemreceita as og where origemreceita in (select id from origemreceita where status=3) and dataprevista between '2017-01-01' and '2017-12-31' and p.origemreceita=og.id and p.tipo=1 group by og.nome order by og.nome asc 
 Execution Time:0.001107931137085

select pj.id as planejamento, pj.tipo, pj.plano, p.status, p.obm as obm_id, o.nome as obm, pj.origemreceita as og_id, og.nome as og_nome, pj.detalhamento, pj.valor, pj.dataprevista from planejamento as pj, origemreceita as og, especificacao as ep, plano as p, obm as o where pj.origemreceita = og.id and pj.especificacao = ep.id and pj.tipo=1 and pj.plano=p.id and p.obm=o.id and pj.dataprevista between '2017-01-01' and '2017-12-31' and og.status=3 order by o.nome asc, dataprevista desc 
 Execution Time:0.0031359195709229

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00057506561279297

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00047707557678223

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.0013320446014404

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.0010988712310791

select og.nome as nome, sum(p.valor) as valor from planejamento as p, origemreceita as og where origemreceita in (select id from origemreceita where status=3) and dataprevista between '2017-01-01' and '2017-12-31' and p.origemreceita=og.id and p.tipo=1 group by og.nome order by og.nome asc 
 Execution Time:0.0011379718780518

select pj.id as planejamento, pj.tipo, pj.plano, p.status, p.obm as obm_id, o.nome as obm, pj.origemreceita as og_id, og.nome as og_nome, pj.detalhamento, pj.valor, pj.dataprevista from planejamento as pj, origemreceita as og, especificacao as ep, plano as p, obm as o where pj.origemreceita = og.id and pj.especificacao = ep.id and pj.tipo=1 and pj.plano=p.id and p.obm=o.id and pj.dataprevista between '2017-01-01' and '2017-12-31' and og.status=3 order by o.nome asc, dataprevista desc 
 Execution Time:0.0015091896057129

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00036883354187012

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00033712387084961

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.0013551712036133

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.00118088722229

select og.nome as nome, sum(p.valor) as valor from planejamento as p, origemreceita as og where origemreceita in (select id from origemreceita where status=3) and dataprevista between '2017-01-01' and '2017-12-31' and p.origemreceita=og.id and p.tipo=1 group by og.nome order by og.nome asc 
 Execution Time:0.0021510124206543

select pj.id as planejamento, pj.tipo, pj.plano, p.status, p.obm as obm_id, o.nome as obm, pj.origemreceita as og_id, og.nome as og_nome, pj.detalhamento, pj.valor, pj.dataprevista from planejamento as pj, origemreceita as og, especificacao as ep, plano as p, obm as o where pj.origemreceita = og.id and pj.especificacao = ep.id and pj.tipo=1 and pj.plano=p.id and p.obm=o.id and pj.dataprevista between '2017-01-01' and '2017-12-31' and og.status=3 order by o.nome asc, dataprevista desc 
 Execution Time:0.0023889541625977

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00040602684020996

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00032687187194824

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.00060296058654785

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.00072407722473145

select og.nome as nome, sum(p.valor) as valor from planejamento as p, origemreceita as og where origemreceita in (select id from origemreceita where status=3) and dataprevista between '2017-01-01' and '2017-12-31' and p.origemreceita=og.id and p.tipo=1 group by og.nome order by og.nome asc 
 Execution Time:0.00081205368041992

select pj.id as planejamento, pj.tipo, pj.plano, p.status, p.obm as obm_id, o.nome as obm, pj.origemreceita as og_id, og.nome as og_nome, pj.detalhamento, pj.valor, pj.dataprevista from planejamento as pj, origemreceita as og, especificacao as ep, plano as p, obm as o where pj.origemreceita = og.id and pj.especificacao = ep.id and pj.tipo=1 and pj.plano=p.id and p.obm=o.id and pj.dataprevista between '2017-01-01' and '2017-12-31' and og.status=3 order by o.nome asc, dataprevista desc 
 Execution Time:0.0017719268798828

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00036716461181641

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00030803680419922

