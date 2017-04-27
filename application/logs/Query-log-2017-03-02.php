select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.034579038619995

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.00079798698425293

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.060874938964844

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.032171964645386

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.048017024993896

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.040532112121582

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.13277506828308

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.038320064544678

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0013668537139893

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.075004100799561

select * from obm where id='8' limit 1 
 Execution Time:0.00052499771118164

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00044798851013184

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00034904479980469

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.078639030456543

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.046684980392456

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00062894821166992

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.09774112701416

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.014841079711914

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.0679931640625

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.018553972244263

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='31' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00064396858215332

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00036311149597168

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00035500526428223

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0021309852600098

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00061988830566406

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0030980110168457

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0018060207366943

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00047492980957031

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00038504600524902

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00038003921508789

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00037097930908203

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00037503242492676

SELECT *
FROM "obm"
WHERE "id" =  11 
 Execution Time:0.0003659725189209

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.0003819465637207

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00040102005004883

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00034618377685547

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00033903121948242

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00034093856811523

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (8) and pj.dataprevista between '2015-01-01' and '2016-12-31' and pn.status=4 and e.id='0' order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.16631889343262

select obm, sum(valor) from (select o.nome as obm, pj.valor as valor from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (8) and pj.dataprevista between '2015-01-01' and '2016-12-31' and pn.status=4 and e.id='0' order by o.nome asc, tipo asc, origemreceita asc) as resultado group by obm 
 Execution Time:0.048779010772705

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (8) and pj.dataprevista between '2015-01-01' and '2016-12-31' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0014450550079346

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0005650520324707

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041699409484863

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00054812431335449

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00032210350036621

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00026893615722656

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00021505355834961

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.0002140998840332

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.0002291202545166

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00020098686218262

SELECT *
FROM "obm"
WHERE "id" =  11 
 Execution Time:0.00021195411682129

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00022792816162109

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00020790100097656

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00021100044250488

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00019502639770508

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00019693374633789

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (8) and pj.dataprevista between '2015-01-01' and '2016-12-31' and pn.status=4 and e.id='9' order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0019278526306152

select obm, sum(valor) from (select o.nome as obm, pj.valor as valor from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (8) and pj.dataprevista between '2015-01-01' and '2016-12-31' and pn.status=4 and e.id='9' order by o.nome asc, tipo asc, origemreceita asc) as resultado group by obm 
 Execution Time:0.0011870861053467

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (8) and pj.dataprevista between '2015-01-01' and '2016-12-31' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0012290477752686

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0014669895172119

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00036787986755371

select * from plano where status=4 order by datainicio DESC, datafim DESC 
 Execution Time:0.0017421245574951

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0015590190887451

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.001133918762207

select * from plano where status=4 and obm='8' order by datainicio DESC, datafim DESC 
 Execution Time:0.0032689571380615

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0011551380157471

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00091290473937988

SELECT *
FROM "plano"
WHERE "id" =  '23' 
 Execution Time:0.00049400329589844

SELECT *
FROM "plano"
WHERE "id" =  '23' 
 Execution Time:0.00035309791564941

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00048518180847168

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00061202049255371

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003359317779541

select * from planejamento where plano='23' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00068783760070801

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00037193298339844

select origemreceita, sum(valor) from planejamento where plano='23' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00048589706420898

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='23' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0010948181152344

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='23' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.0012869834899902

select sum(valor) as total from planejamento where plano='23' and tipo=1 
 Execution Time:0.00059890747070312

select sum(valor) as total from planejamento where plano='23' and tipo=2 
 Execution Time:0.0005650520324707

select * from plano where status=4 order by datainicio DESC, datafim DESC 
 Execution Time:0.001755952835083

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0020060539245605

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0015270709991455

select * from plano where status=4 and obm='7' order by datainicio DESC, datafim DESC 
 Execution Time:0.00069284439086914

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00035786628723145

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00080990791320801

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00068211555480957

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00052690505981445

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0012898445129395

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00046086311340332

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00053906440734863

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00031208992004395

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00023388862609863

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00021100044250488

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00020599365234375

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00020694732666016

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.0001990795135498

SELECT *
FROM "obm"
WHERE "id" =  11 
 Execution Time:0.00019407272338867

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00020098686218262

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.0005500316619873

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00022387504577637

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00033783912658691

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00041890144348145

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (1,4,10,8,3,9,11,5,7) and pj.dataprevista between '2016-01-01' and '2016-12-31' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0020999908447266

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (1,4,10,8,3,9,11,5,7) and pj.dataprevista between '2016-01-01' and '2016-12-31' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.00282883644104

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00060606002807617

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00050783157348633

