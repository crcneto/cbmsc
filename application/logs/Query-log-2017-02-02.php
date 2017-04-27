SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.085614204406738

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.030431985855103

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0027890205383301

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00088691711425781

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00043702125549316

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00037598609924316

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.0003361701965332

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00030994415283203

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00031709671020508

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00028204917907715

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00032401084899902

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.0002899169921875

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00030303001403809

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00029087066650391

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00030016899108887

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (3,4,8,5,7) and pj.dataprevista between '2016-01-27' and '2017-02-24' and pn.status=4 and e.id='9' order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.41233086585999

select obm, sum(valor) from (select o.nome as obm, pj.valor as valor from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (3,4,8,5,7) and pj.dataprevista between '2016-01-27' and '2017-02-24' and pn.status=4 and e.id='9' order by o.nome asc, tipo asc, origemreceita asc) as resultado group by obm 
 Execution Time:0.10598301887512

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (3,4,8,5,7) and pj.dataprevista between '2016-01-27' and '2017-02-24' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0026021003723145

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.031728982925415

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00055193901062012

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0023629665374756

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0018351078033447

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0011930465698242

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.031951904296875

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.040430068969727

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.019755125045776

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00054216384887695

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00090909004211426

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00031900405883789

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00030899047851562

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0012619495391846

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00074195861816406

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00064897537231445

select * from reprovacao where plano='21'; 
 Execution Time:0.027830123901367

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00041508674621582

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00032401084899902

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00089383125305176

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.15255808830261

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.0016109943389893

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.002051830291748

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.0010418891906738

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00054001808166504

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.09850287437439

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00098299980163574

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00092101097106934

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00034308433532715

select * from reprovacao where plano='21'; 
 Execution Time:0.00087094306945801

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00097179412841797

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00037384033203125

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00070595741271973

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0013108253479004

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00041985511779785

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00087690353393555

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.0002739429473877

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00029397010803223

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00098490715026855

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00077009201049805

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00026488304138184

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00023508071899414

select * from reprovacao where plano=0; 
 Execution Time:0.00040507316589355

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00045180320739746

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041389465332031

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00057721138000488

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00089597702026367

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00038695335388184

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00073909759521484

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.00025606155395508

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00024104118347168

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00070905685424805

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00088906288146973

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00029206275939941

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00022792816162109

select * from reprovacao where plano=0; 
 Execution Time:0.00044012069702148

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0004889965057373

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00051712989807129

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00062108039855957

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00096392631530762

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00045895576477051

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00091099739074707

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.00028896331787109

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00025105476379395

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00071501731872559

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0018191337585449

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.001115083694458

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0012950897216797

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00091314315795898

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00081706047058105

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00082612037658691

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.0004119873046875

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0003809928894043

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0023629665374756

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00086307525634766

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00035500526428223

select * from reprovacao where plano='21'; 
 Execution Time:0.00069499015808105

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0010149478912354

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00067305564880371

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0010709762573242

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0018479824066162

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00071191787719727

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0011930465698242

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.00037717819213867

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00034499168395996

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.0010991096496582

