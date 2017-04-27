SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.061716079711914

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.033283948898315

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.22923803329468

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0010139942169189

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0011730194091797

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.001662015914917

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00124192237854

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.0021581649780273

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00099015235900879

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00074982643127441

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.00085806846618652

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00051093101501465

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00049686431884766

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.00074410438537598

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00032997131347656

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029516220092773

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.0021219253540039

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00079202651977539

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00081396102905273

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0014841556549072

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00086498260498047

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.00094509124755859

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0005030632019043

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00043201446533203

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.001500129699707

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0013599395751953

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.001471996307373

select sum(valor) total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.0015640258789062

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00051093101501465

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00050210952758789

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.00073480606079102

select sum(valor) total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.0012469291687012

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00093483924865723

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00057220458984375

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.00056099891662598

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00072598457336426

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00063109397888184

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.0006101131439209

select sum(valor) total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.00094699859619141

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00035905838012695

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029206275939941

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00058102607727051

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004279613494873

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.00060391426086426

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.00071811676025391

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0011191368103027

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00073504447937012

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0019631385803223

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0013091564178467

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.0038301944732666

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.0012800693511963

select o.nome, sum(p.valor) as valor from planejamento as p, origemreceita as o where o.id = p.origemreceita and tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) group by o.nome 
 Execution Time:0.001209020614624

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00077009201049805

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00067615509033203

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00041317939758301

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028777122497559

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.00056004524230957

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.00064182281494141

select o.nome, sum(p.valor) as valor from planejamento as p, origemreceita as o where o.id = p.origemreceita and tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) group by o.nome 
 Execution Time:0.00089001655578613

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00033092498779297

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00031805038452148

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.00084900856018066

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.0010409355163574

select o.nome, sum(p.valor) as valor from planejamento as p, origemreceita as o where o.id = p.origemreceita and tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) group by o.nome 
 Execution Time:0.0023379325866699

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0011851787567139

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0008399486541748

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0018928050994873

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0012369155883789

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.0016942024230957

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.0014660358428955

select o.nome, sum(p.valor) as valor from planejamento as p, origemreceita as o where o.id = p.origemreceita and tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) group by o.nome 
 Execution Time:0.0014090538024902

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00052499771118164

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0005497932434082

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.00069499015808105

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.0010590553283691

select o.nome, sum(p.valor) as valor from planejamento as p, origemreceita as o where o.id = p.origemreceita and tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) group by o.nome 
 Execution Time:0.0013959407806396

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00056099891662598

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00057291984558105

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.00063991546630859

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.0024669170379639

select o.nome, sum(p.valor) as valor from planejamento as p, origemreceita as o where o.id = p.origemreceita and tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) group by o.nome 
 Execution Time:0.0011229515075684

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0004889965057373

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00054788589477539

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.002377986907959

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.0018081665039062

select o.nome, sum(p.valor) as valor from planejamento as p, origemreceita as o where o.id = p.origemreceita and tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) group by o.nome 
 Execution Time:0.001270055770874

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00045084953308105

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00043702125549316

SELECT *
FROM "origemreceita" 
 Execution Time:0.00066113471984863

SELECT *
FROM "origemreceita" 
 Execution Time:0.00041699409484863

SELECT *
FROM "origemreceita"
WHERE "id" =  '20' 
 Execution Time:0.00040411949157715

SELECT *
FROM "origemreceita" 
 Execution Time:0.00064706802368164

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.042628049850464

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.049178123474121

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.055282115936279

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.078567028045654

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00094103813171387

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0024049282073975

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.0087180137634277

select * from obm where id='3' limit 1 
 Execution Time:0.00081014633178711

select * from obm where id='5' limit 1 
 Execution Time:0.00040221214294434

select * from obm where id='7' limit 1 
 Execution Time:0.00037193298339844

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00059700012207031

SELECT *
FROM "plano"
WHERE "id" =  '37' 
 Execution Time:0.0005800724029541

SELECT *
FROM "plano"
WHERE "id" =  '37' 
 Execution Time:0.0003509521484375

select * from reprovacao where plano='37'; 
 Execution Time:0.042980909347534

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.18287491798401

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00042915344238281

select * from planejamento where plano='37' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00051403045654297

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.045980930328369

select origemreceita, sum(valor) from planejamento where plano='37' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00043296813964844

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='37' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00062799453735352

select sum(valor) as total from planejamento where plano='37' and tipo=1 
 Execution Time:0.00044608116149902

select sum(valor) as total from planejamento where plano='37' and tipo=2 
 Execution Time:0.00038003921508789

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.076189041137695

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.0005190372467041

SELECT *
FROM "plano"
WHERE "id" =  '37' 
 Execution Time:0.00027894973754883

SELECT *
FROM "plano"
WHERE "id" =  '37' 
 Execution Time:0.00024199485778809

select * from reprovacao where plano=0; 
 Execution Time:0.00042200088500977

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00047993659973145

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00027012825012207

select * from planejamento where plano='37' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00042891502380371

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0011000633239746

select origemreceita, sum(valor) from planejamento where plano='37' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00072097778320312

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='37' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0016860961914062

select sum(valor) as total from planejamento where plano='37' and tipo=1 
 Execution Time:0.00057506561279297

select sum(valor) as total from planejamento where plano='37' and tipo=2 
 Execution Time:0.00054502487182617

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.0013868808746338

SELECT *
FROM "origemreceita" 
 Execution Time:0.00035190582275391

SELECT *
FROM "origemreceita" 
 Execution Time:0.00030899047851562

SELECT *
FROM "origemreceita"
WHERE "id" =  '20' 
 Execution Time:0.0002748966217041

SELECT *
FROM "origemreceita" 
 Execution Time:0.0004880428314209

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0014169216156006

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00051999092102051

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.00087618827819824

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.0010089874267578

select o.nome, sum(p.valor) as valor from planejamento as p, origemreceita as o where o.id = p.origemreceita and tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) group by o.nome 
 Execution Time:0.0014350414276123

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00038790702819824

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00043892860412598

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.00061392784118652

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.00069785118103027

select o.nome, sum(p.valor) as valor from planejamento as p, origemreceita as o where o.id = p.origemreceita and tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) group by o.nome 
 Execution Time:0.0013539791107178

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0011799335479736

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00048398971557617

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.0028901100158691

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.0016269683837891

select o.nome, sum(p.valor) as valor from planejamento as p, origemreceita as o where o.id = p.origemreceita and tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) group by o.nome 
 Execution Time:0.0013058185577393

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0012249946594238

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00083088874816895

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.0010159015655518

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.0010809898376465

select o.nome, sum(p.valor) as valor from planejamento as p, origemreceita as o where o.id = p.origemreceita and tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) group by o.nome 
 Execution Time:0.0015268325805664

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0011510848999023

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.019387006759644

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.00093293190002441

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.00092983245849609

select o.nome, sum(p.valor) as valor from planejamento as p, origemreceita as o where o.id = p.origemreceita and tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) group by o.nome 
 Execution Time:0.00083518028259277

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00045609474182129

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00048089027404785

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.0010280609130859

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.0020468235015869

select o.nome, sum(p.valor) as valor from planejamento as p, origemreceita as o where o.id = p.origemreceita and tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) group by o.nome 
 Execution Time:0.0021560192108154

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00057697296142578

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00048708915710449

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.00080490112304688

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.00094985961914062

select o.nome, sum(p.valor) as valor from planejamento as p, origemreceita as o where o.id = p.origemreceita and tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) group by o.nome 
 Execution Time:0.0015220642089844

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0012919902801514

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00097513198852539

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.00084400177001953

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.0010268688201904

select o.nome, sum(p.valor) as valor from planejamento as p, origemreceita as o where o.id = p.origemreceita and tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) group by o.nome 
 Execution Time:0.001183032989502

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00059199333190918

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004730224609375

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.0032010078430176

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.0017600059509277

select o.nome, sum(p.valor) as valor from planejamento as p, origemreceita as o where o.id = p.origemreceita and tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) group by o.nome 
 Execution Time:0.002187967300415

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0011608600616455

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00077104568481445

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.0008389949798584

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.00080394744873047

select o.nome, sum(p.valor) as valor from planejamento as p, origemreceita as o where o.id = p.origemreceita and tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) group by o.nome 
 Execution Time:0.00096893310546875

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0005190372467041

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00055885314941406

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.0030848979949951

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.0022680759429932

select o.nome, sum(p.valor) as valor from planejamento as p, origemreceita as o where o.id = p.origemreceita and tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) group by o.nome 
 Execution Time:0.0013489723205566

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0011148452758789

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00078296661376953

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.0017387866973877

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.0014569759368896

select o.nome, sum(p.valor) as valor from planejamento as p, origemreceita as o where o.id = p.origemreceita and tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) group by o.nome 
 Execution Time:0.0021209716796875

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00084400177001953

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00070881843566895

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.00090694427490234

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.00095701217651367

select o.nome, sum(p.valor) as valor from planejamento as p, origemreceita as o where o.id = p.origemreceita and tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) group by o.nome 
 Execution Time:0.0015687942504883

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0007479190826416

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0012941360473633

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00062704086303711

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003809928894043

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.00061511993408203

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.00066995620727539

select o.nome, sum(p.valor) as valor from planejamento as p, origemreceita as o where o.id = p.origemreceita and tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) group by o.nome 
 Execution Time:0.00084590911865234

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00034022331237793

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003049373626709

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.00057601928710938

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.00072002410888672

select o.nome, sum(p.valor) as valor from planejamento as p, origemreceita as o where o.id = p.origemreceita and tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) group by o.nome 
 Execution Time:0.0008399486541748

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00034713745117188

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00032305717468262

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.0012741088867188

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.001762866973877

select o.nome, sum(p.valor) as valor from planejamento as p, origemreceita as o where o.id = p.origemreceita and tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) group by o.nome 
 Execution Time:0.0021049976348877

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00050997734069824

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041508674621582

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.0035660266876221

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.0018260478973389

select o.nome, sum(p.valor) as valor from planejamento as p, origemreceita as o where o.id = p.origemreceita and tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) group by o.nome 
 Execution Time:0.0015420913696289

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0010190010070801

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00095295906066895

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.00091004371643066

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.00092291831970215

select o.nome, sum(p.valor) as valor from planejamento as p, origemreceita as o where o.id = p.origemreceita and tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) group by o.nome 
 Execution Time:0.0014419555664062

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00053882598876953

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00053000450134277

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.00066018104553223

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.00095796585083008

select o.nome, sum(p.valor) as valor from planejamento as p, origemreceita as o where o.id = p.origemreceita and tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) group by o.nome 
 Execution Time:0.0011570453643799

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00047421455383301

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004580020904541

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00082206726074219

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00054097175598145

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.000946044921875

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.0010678768157959

select o.nome, sum(p.valor) as valor from planejamento as p, origemreceita as o where o.id = p.origemreceita and tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) group by o.nome 
 Execution Time:0.0013120174407959

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0004880428314209

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004279613494873

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.00088000297546387

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.001101016998291

select o.nome, sum(p.valor) as valor from planejamento as p, origemreceita as o where o.id = p.origemreceita and tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) group by o.nome 
 Execution Time:0.0018000602722168

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0016090869903564

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00061297416687012

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.00065994262695312

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.00072479248046875

select o.nome, sum(p.valor) as valor from planejamento as p, origemreceita as o where o.id = p.origemreceita and tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) group by o.nome 
 Execution Time:0.0015461444854736

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0010261535644531

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00038886070251465

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.0007321834564209

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.0010669231414795

select o.nome, sum(p.valor) as valor from planejamento as p, origemreceita as o where o.id = p.origemreceita and tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) group by o.nome 
 Execution Time:0.001183032989502

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00038790702819824

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00032711029052734

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.00075697898864746

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.0011050701141357

select o.nome, sum(p.valor) as valor from planejamento as p, origemreceita as o where o.id = p.origemreceita and tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) group by o.nome 
 Execution Time:0.0023510456085205

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00037407875061035

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00072598457336426

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.00058794021606445

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.00064587593078613

select o.nome, sum(p.valor) as valor from planejamento as p, origemreceita as o where o.id = p.origemreceita and tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) group by o.nome 
 Execution Time:0.00085902214050293

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00034689903259277

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0002748966217041

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.00065088272094727

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.00075006484985352

select o.nome, sum(p.valor) as valor from planejamento as p, origemreceita as o where o.id = p.origemreceita and tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) group by o.nome 
 Execution Time:0.0012271404266357

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00051712989807129

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00031280517578125

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0020718574523926

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0013761520385742

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.00064587593078613

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.00070095062255859

select o.nome, sum(p.valor) as valor from planejamento as p, origemreceita as o where o.id = p.origemreceita and tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) group by o.nome 
 Execution Time:0.0008702278137207

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00034713745117188

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00033283233642578

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.00084900856018066

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.00098514556884766

select o.nome, sum(p.valor) as valor from planejamento as p, origemreceita as o where o.id = p.origemreceita and tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) group by o.nome 
 Execution Time:0.0016510486602783

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0005640983581543

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.075195789337158

