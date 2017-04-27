SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.18343806266785

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.13373804092407

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.020869016647339

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.002561092376709

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.1435010433197

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00089907646179199

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0022358894348145

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00088000297546387

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.0004429817199707

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00033092498779297

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00032997131347656

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00032401084899902

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00030708312988281

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.031774044036865

SELECT *
FROM "obm"
WHERE "id" =  11 
 Execution Time:0.00028705596923828

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00025296211242676

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00025796890258789

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00025296211242676

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00024604797363281

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00024890899658203

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (1,10,8,3,9,4,11,5,7) and pj.dataprevista between '2017-01-01' and '2017-03-30' and pn.status=4 and e.id='18' order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.843670129776

select obm, sum(valor) from (select o.nome as obm, pj.valor as valor from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (1,10,8,3,9,4,11,5,7) and pj.dataprevista between '2017-01-01' and '2017-03-30' and pn.status=4 and e.id='18' order by o.nome asc, tipo asc, origemreceita asc) as resultado group by obm 
 Execution Time:0.110102891922

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (1,10,8,3,9,4,11,5,7) and pj.dataprevista between '2017-01-01' and '2017-03-30' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.031192064285278

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.045102834701538

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00036978721618652

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0006251335144043

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00073885917663574

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.0006859302520752

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00066709518432617

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00065088272094727

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00039911270141602

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00039887428283691

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00037908554077148

SELECT *
FROM "obm"
WHERE "id" =  11 
 Execution Time:0.00039100646972656

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.0003960132598877

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00040888786315918

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00040006637573242

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00039196014404297

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00038385391235352

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (1,10,8,3,9,4,11,5,7) and pj.dataprevista between '2017-01-01' and '2017-03-30' and pn.status=4 and e.id='9' order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.00187087059021

select obm, sum(valor) from (select o.nome as obm, pj.valor as valor from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (1,10,8,3,9,4,11,5,7) and pj.dataprevista between '2017-01-01' and '2017-03-30' and pn.status=4 and e.id='9' order by o.nome asc, tipo asc, origemreceita asc) as resultado group by obm 
 Execution Time:0.020503997802734

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (1,10,8,3,9,4,11,5,7) and pj.dataprevista between '2017-01-01' and '2017-03-30' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0020310878753662

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00046896934509277

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00037121772766113

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0020298957824707

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00092911720275879

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.0005500316619873

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00037097930908203

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00032806396484375

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00029802322387695

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00028896331787109

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00032186508178711

SELECT *
FROM "obm"
WHERE "id" =  11 
 Execution Time:0.00029611587524414

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00029897689819336

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00029921531677246

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00029683113098145

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00028300285339355

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00028419494628906

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (1,10,8,3,9,4,11,5,7) and pj.dataprevista between '2017-01-01' and '2017-03-30' and pn.status=4 and e.id='0' order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0030720233917236

select obm, sum(valor) from (select o.nome as obm, pj.valor as valor from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (1,10,8,3,9,4,11,5,7) and pj.dataprevista between '2017-01-01' and '2017-03-30' and pn.status=4 and e.id='0' order by o.nome asc, tipo asc, origemreceita asc) as resultado group by obm 
 Execution Time:0.0022110939025879

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (1,10,8,3,9,4,11,5,7) and pj.dataprevista between '2017-01-01' and '2017-03-30' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0027861595153809

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00068187713623047

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00039100646972656

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00099396705627441

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0010230541229248

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00037407875061035

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00025796890258789

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.0002448558807373

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00023102760314941

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00021100044250488

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00022506713867188

SELECT *
FROM "obm"
WHERE "id" =  11 
 Execution Time:0.00020599365234375

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00021696090698242

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.0002140998840332

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00021100044250488

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00020813941955566

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00020599365234375

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (4) and pj.dataprevista between '2017-01-01' and '2017-03-30' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0019080638885498

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (4) and pj.dataprevista between '2017-01-01' and '2017-03-30' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0011529922485352

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00034499168395996

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0017969608306885

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00054311752319336

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00041794776916504

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00034880638122559

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.0003058910369873

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.0003211498260498

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.0002899169921875

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0003209114074707

SELECT *
FROM "obm"
WHERE "id" =  11 
 Execution Time:0.00031089782714844

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00030994415283203

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00032901763916016

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00032615661621094

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00029397010803223

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00030398368835449

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (4) and pj.dataprevista between '2017-01-01' and '2017-12-01' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0030350685119629

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (4) and pj.dataprevista between '2017-01-01' and '2017-12-01' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0019891262054443

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00044107437133789

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0027921199798584

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00079607963562012

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00037097930908203

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00028896331787109

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00028800964355469

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00027894973754883

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00028586387634277

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0003209114074707

SELECT *
FROM "obm"
WHERE "id" =  11 
 Execution Time:0.00026202201843262

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00025582313537598

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00025200843811035

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00025606155395508

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.000244140625

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00024795532226562

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (11) and pj.dataprevista between '2017-01-01' and '2017-12-01' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0028409957885742

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (11) and pj.dataprevista between '2017-01-01' and '2017-12-01' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0015490055084229

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00044107437133789

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00057196617126465

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003359317779541

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00028610229492188

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00022983551025391

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00021505355834961

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00022101402282715

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00021100044250488

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00021815299987793

SELECT *
FROM "obm"
WHERE "id" =  11 
 Execution Time:0.00020003318786621

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.0001981258392334

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00019979476928711

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00020313262939453

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00022101402282715

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00020885467529297

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (7) and pj.dataprevista between '2017-01-01' and '2017-12-01' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0021209716796875

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (7) and pj.dataprevista between '2017-01-01' and '2017-12-01' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0013799667358398

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00060319900512695

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00037407875061035

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00058507919311523

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00032377243041992

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00023317337036133

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.0002140998840332

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00020313262939453

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.0001990795135498

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00020408630371094

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00020003318786621

SELECT *
FROM "obm"
WHERE "id" =  11 
 Execution Time:0.00020194053649902

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00021910667419434

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00025606155395508

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00025320053100586

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.0002439022064209

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00022506713867188

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (7) and pj.dataprevista between '2017-01-01' and '2017-12-01' and pn.status=4 and e.id='0' order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0012340545654297

select obm, sum(valor) from (select o.nome as obm, pj.valor as valor from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (7) and pj.dataprevista between '2017-01-01' and '2017-12-01' and pn.status=4 and e.id='0' order by o.nome asc, tipo asc, origemreceita asc) as resultado group by obm 
 Execution Time:0.0012240409851074

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (7) and pj.dataprevista between '2017-01-01' and '2017-12-01' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0011470317840576

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00029301643371582

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00025701522827148

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0010020732879639

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00047612190246582

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00081205368041992

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004889965057373

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00043392181396484

SELECT *
FROM "origemreceita" 
 Execution Time:0.00034403800964355

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.11592197418213

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.037015199661255

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.066915035247803

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.016350984573364

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.034440994262695

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.1400740146637

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.040641069412231

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.12807679176331

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00084495544433594

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.029047012329102

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.033070087432861

select * from obm where id='3' limit 1 
 Execution Time:0.0071699619293213

select * from obm where id='5' limit 1 
 Execution Time:0.0003819465637207

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00064396858215332

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00035190582275391

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00054097175598145

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00063896179199219

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00054287910461426

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0013129711151123

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00042295455932617

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00061988830566406

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00060296058654785

select * from obm where id='3' limit 1 
 Execution Time:0.00044488906860352

select * from obm where id='5' limit 1 
 Execution Time:0.00043296813964844

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00080204010009766

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00068998336791992

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00051498413085938

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00090909004211426

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00052595138549805

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00079703330993652

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00061488151550293

select * from obm where id='3' limit 1 
 Execution Time:0.00045394897460938

select * from obm where id='5' limit 1 
 Execution Time:0.00044488906860352

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00048303604125977

SELECT *
FROM "plano"
WHERE "id" =  '37' 
 Execution Time:0.00088310241699219

SELECT *
FROM "plano"
WHERE "id" =  '37' 
 Execution Time:0.00037002563476562

select * from reprovacao where plano='37'; 
 Execution Time:0.1668381690979

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.14835000038147

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00043606758117676

select * from planejamento where plano='37' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00094795227050781

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.098361015319824

select origemreceita, sum(valor) from planejamento where plano='37' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.001323938369751

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='37' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00092291831970215

select sum(valor) as total from planejamento where plano='37' and tipo=1 
 Execution Time:0.00054597854614258

select sum(valor) as total from planejamento where plano='37' and tipo=2 
 Execution Time:0.00056695938110352

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.094637870788574

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00040507316589355

SELECT *
FROM "plano"
WHERE "id" =  '37' 
 Execution Time:0.00034117698669434

SELECT *
FROM "plano"
WHERE "id" =  '37' 
 Execution Time:0.00034904479980469

select * from reprovacao where plano=0; 
 Execution Time:0.00048708915710449

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00056886672973633

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00035905838012695

select * from planejamento where plano='37' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00053119659423828

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0012340545654297

select origemreceita, sum(valor) from planejamento where plano='37' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00046610832214355

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='37' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00071501731872559

select sum(valor) as total from planejamento where plano='37' and tipo=1 
 Execution Time:0.00028610229492188

select sum(valor) as total from planejamento where plano='37' and tipo=2 
 Execution Time:0.00023984909057617

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00068092346191406

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00063204765319824

SELECT *
FROM "origemreceita" 
 Execution Time:0.00051188468933105

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00046396255493164

SELECT *
FROM "origemreceita" 
 Execution Time:0.00021696090698242

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00086498260498047

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00080513954162598

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00058484077453613

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0011250972747803

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00049281120300293

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0012571811676025

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00060892105102539

select * from obm where id='3' limit 1 
 Execution Time:0.0002748966217041

select * from obm where id='5' limit 1 
 Execution Time:0.00023508071899414

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00038909912109375

SELECT *
FROM "plano"
WHERE "id" =  '37' 
 Execution Time:0.00029182434082031

SELECT *
FROM "plano"
WHERE "id" =  '37' 
 Execution Time:0.00023198127746582

select * from reprovacao where plano='37'; 
 Execution Time:0.0003960132598877

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00046992301940918

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003809928894043

select * from planejamento where plano='37' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00041389465332031

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0011651515960693

select origemreceita, sum(valor) from planejamento where plano='37' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00034785270690918

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='37' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00055909156799316

select sum(valor) as total from planejamento where plano='37' and tipo=1 
 Execution Time:0.00043010711669922

select sum(valor) as total from planejamento where plano='37' and tipo=2 
 Execution Time:0.00029420852661133

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00082302093505859

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00038599967956543

SELECT *
FROM "origemreceita" 
 Execution Time:0.00029087066650391

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00047707557678223

SELECT *
FROM "origemreceita" 
 Execution Time:0.00029802322387695

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00054097175598145

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00031495094299316

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00053000450134277

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00087785720825195

SELECT *
FROM "especificacao"
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00061798095703125

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00095605850219727

SELECT *
FROM "categoriaeconomica"
ORDER BY "id" 
 Execution Time:0.00043201446533203

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.0013439655303955

SELECT *
FROM "origemreceita" 
 Execution Time:0.00042510032653809

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00033783912658691

SELECT *
FROM "origemreceita" 
 Execution Time:0.00021100044250488

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.0010249614715576

SELECT *
FROM "origemreceita" 
 Execution Time:0.00027084350585938

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00038599967956543

SELECT *
FROM "origemreceita" 
 Execution Time:0.00027084350585938

SELECT *
FROM "origemreceita"
WHERE "id" =  '17' 
 Execution Time:0.00029897689819336

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00029897689819336

SELECT *
FROM "origemreceita" 
 Execution Time:0.00018906593322754

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00035214424133301

SELECT *
FROM "origemreceita" 
 Execution Time:0.00023388862609863

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.0004420280456543

SELECT *
FROM "origemreceita" 
 Execution Time:0.00040602684020996

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.0003819465637207

SELECT *
FROM "origemreceita" 
 Execution Time:0.00028204917907715

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00034999847412109

SELECT *
FROM "origemreceita" 
 Execution Time:0.00021910667419434

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00037479400634766

SELECT *
FROM "origemreceita" 
 Execution Time:0.00021600723266602

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00036001205444336

SELECT *
FROM "origemreceita" 
 Execution Time:0.00019407272338867

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00030779838562012

SELECT *
FROM "origemreceita" 
 Execution Time:0.00018906593322754

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00030779838562012

SELECT *
FROM "origemreceita" 
 Execution Time:0.00019407272338867

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00053787231445312

SELECT *
FROM "origemreceita" 
 Execution Time:0.00042390823364258

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00043487548828125

SELECT *
FROM "origemreceita" 
 Execution Time:0.00034308433532715

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00040698051452637

SELECT *
FROM "origemreceita" 
 Execution Time:0.00023913383483887

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00044703483581543

SELECT *
FROM "origemreceita" 
 Execution Time:0.00031900405883789

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00036907196044922

SELECT *
FROM "origemreceita" 
 Execution Time:0.00021815299987793

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.0003960132598877

SELECT *
FROM "origemreceita" 
 Execution Time:0.00020718574523926

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00041294097900391

SELECT *
FROM "origemreceita" 
 Execution Time:0.00049686431884766

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00039196014404297

SELECT *
FROM "origemreceita" 
 Execution Time:0.00020885467529297

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00058317184448242

SELECT *
FROM "origemreceita" 
 Execution Time:0.00027203559875488

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00069499015808105

SELECT *
FROM "origemreceita" 
 Execution Time:0.00030303001403809

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00065398216247559

SELECT *
FROM "origemreceita" 
 Execution Time:0.00041699409484863

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00039410591125488

SELECT *
FROM "origemreceita" 
 Execution Time:0.00025796890258789

SELECT *
FROM "origemreceita"
WHERE "id" =  '8' 
 Execution Time:0.00031304359436035

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00055193901062012

SELECT *
FROM "origemreceita" 
 Execution Time:0.00037121772766113

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00094914436340332

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00042080879211426

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00030207633972168

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00058102607727051

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00032186508178711

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00059604644775391

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00040483474731445

select * from obm where id='3' limit 1 
 Execution Time:0.00032305717468262

select * from obm where id='5' limit 1 
 Execution Time:0.00030207633972168

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00039076805114746

SELECT *
FROM "plano"
WHERE "id" =  '37' 
 Execution Time:0.00035881996154785

SELECT *
FROM "plano"
WHERE "id" =  '37' 
 Execution Time:0.00025200843811035

select * from reprovacao where plano='37'; 
 Execution Time:0.00020599365234375

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0004119873046875

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00031495094299316

select * from planejamento where plano='37' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00046801567077637

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00067806243896484

select origemreceita, sum(valor) from planejamento where plano='37' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00037717819213867

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='37' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0005347728729248

select sum(valor) as total from planejamento where plano='37' and tipo=1 
 Execution Time:0.00042009353637695

select sum(valor) as total from planejamento where plano='37' and tipo=2 
 Execution Time:0.0004270076751709

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.0012800693511963

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00037789344787598

SELECT *
FROM "origemreceita" 
 Execution Time:0.00022387504577637

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00038599967956543

SELECT *
FROM "origemreceita" 
 Execution Time:0.00028705596923828

SELECT *
FROM "origemreceita"
WHERE "id" =  '8' 
 Execution Time:0.00028491020202637

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00029492378234863

SELECT *
FROM "origemreceita" 
 Execution Time:0.00015783309936523

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00048518180847168

SELECT *
FROM "origemreceita" 
 Execution Time:0.00031089782714844

SELECT *
FROM "origemreceita"
WHERE "id" =  '7' 
 Execution Time:0.00039386749267578

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00042986869812012

SELECT *
FROM "origemreceita" 
 Execution Time:0.00024294853210449

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00082087516784668

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00047612190246582

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00053906440734863

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0009009838104248

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00070691108703613

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0022950172424316

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00064992904663086

select * from obm where id='3' limit 1 
 Execution Time:0.001366138458252

select * from obm where id='5' limit 1 
 Execution Time:0.00048613548278809

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00034403800964355

SELECT *
FROM "plano"
WHERE "id" =  '37' 
 Execution Time:0.00026893615722656

SELECT *
FROM "plano"
WHERE "id" =  '37' 
 Execution Time:0.00032806396484375

select * from reprovacao where plano='37'; 
 Execution Time:0.00030994415283203

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00049996376037598

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00027704238891602

select * from planejamento where plano='37' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0002901554107666

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00054502487182617

select origemreceita, sum(valor) from planejamento where plano='37' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00029683113098145

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='37' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00053215026855469

select sum(valor) as total from planejamento where plano='37' and tipo=1 
 Execution Time:0.0002751350402832

select sum(valor) as total from planejamento where plano='37' and tipo=2 
 Execution Time:0.0002589225769043

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00042200088500977

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00045180320739746

SELECT *
FROM "origemreceita" 
 Execution Time:0.00022387504577637

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00039386749267578

SELECT *
FROM "origemreceita" 
 Execution Time:0.00027704238891602

SELECT *
FROM "origemreceita"
WHERE "id" =  '7' 
 Execution Time:0.00027585029602051

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00040888786315918

SELECT *
FROM "origemreceita" 
 Execution Time:0.00021982192993164

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00040197372436523

SELECT *
FROM "origemreceita" 
 Execution Time:0.00024294853210449

SELECT *
FROM "origemreceita"
WHERE "id" =  '6' 
 Execution Time:0.00026893615722656

SELECT *
FROM "origemreceita" 
 Execution Time:0.00044989585876465

SELECT *
FROM "origemreceita" 
 Execution Time:0.00031614303588867

SELECT *
FROM "origemreceita"
WHERE "id" =  '7' 
 Execution Time:0.00032997131347656

SELECT *
FROM "origemreceita" 
 Execution Time:0.00032591819763184

SELECT *
FROM "origemreceita"
WHERE "id" =  '8' 
 Execution Time:0.00031089782714844

SELECT *
FROM "origemreceita" 
 Execution Time:0.0003049373626709

SELECT *
FROM "origemreceita" 
 Execution Time:0.00031113624572754

SELECT *
FROM "origemreceita" 
 Execution Time:0.00041794776916504

SELECT *
FROM "origemreceita"
WHERE "id" =  '6' 
 Execution Time:0.00040197372436523

SELECT *
FROM "origemreceita" 
 Execution Time:0.00031399726867676

SELECT *
FROM "origemreceita" 
 Execution Time:0.00025010108947754

SELECT *
FROM "origemreceita" 
 Execution Time:0.00050687789916992

SELECT *
FROM "origemreceita" 
 Execution Time:0.00029706954956055

SELECT *
FROM "origemreceita"
WHERE "id" =  '6' 
 Execution Time:0.00026583671569824

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0004119873046875

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00034689903259277

SELECT *
FROM "origemreceita" 
 Execution Time:0.00053501129150391

SELECT *
FROM "origemreceita" 
 Execution Time:0.00039505958557129

SELECT *
FROM "origemreceita"
WHERE "id" =  '7' 
 Execution Time:0.00029087066650391

SELECT *
FROM "origemreceita" 
 Execution Time:0.00028705596923828

SELECT *
FROM "origemreceita"
WHERE "id" =  '6' 
 Execution Time:0.00024700164794922

SELECT *
FROM "origemreceita" 
 Execution Time:0.00029802322387695

SELECT *
FROM "origemreceita" 
 Execution Time:0.00041317939758301

SELECT *
FROM "origemreceita" 
 Execution Time:0.00029778480529785

SELECT *
FROM "origemreceita" 
 Execution Time:0.0010828971862793

SELECT *
FROM "origemreceita" 
 Execution Time:0.00030112266540527

SELECT *
FROM "origemreceita"
WHERE "id" =  '8' 
 Execution Time:0.00025200843811035

SELECT *
FROM "origemreceita" 
 Execution Time:0.00032591819763184

SELECT *
FROM "origemreceita" 
 Execution Time:0.00028586387634277

SELECT *
FROM "origemreceita"
WHERE "id" =  '6' 
 Execution Time:0.00025701522827148

SELECT *
FROM "origemreceita" 
 Execution Time:0.00041294097900391

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00048279762268066

SELECT *
FROM "categoriaeconomica"
ORDER BY "id" 
 Execution Time:0.00043797492980957

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00043010711669922

SELECT *
FROM "categoriaeconomica"
ORDER BY "id" 
 Execution Time:0.00026798248291016

SELECT *
FROM "categoriaeconomica"
WHERE "id" =  '4' 
 Execution Time:0.018357992172241

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00093507766723633

SELECT *
FROM "aplicacao"
ORDER BY "nome" 
 Execution Time:0.0006718635559082

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00063586235046387

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00033211708068848

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00077199935913086

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00046801567077637

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00026392936706543

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00022983551025391

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00019717216491699

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00019192695617676

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00020718574523926

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00019598007202148

SELECT *
FROM "obm"
WHERE "id" =  11 
 Execution Time:0.00019192695617676

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00019598007202148

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00021815299987793

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00021100044250488

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00023198127746582

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00022101402282715

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (1,10,8,3,9,4,11,5,7) and pj.dataprevista between '2017-01-01' and '2017-12-31' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.002439022064209

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (1,10,8,3,9,4,11,5,7) and pj.dataprevista between '2017-01-01' and '2017-12-31' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0033259391784668

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00054001808166504

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00049114227294922

