SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.11716198921204

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.091558933258057

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.062680959701538

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.048694133758545

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.050746202468872

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.10741591453552

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.0005340576171875

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00041699409484863

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.044435024261475

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.0011959075927734

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00079894065856934

select * from reprovacao where plano='21'; 
 Execution Time:0.061321973800659

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.057358980178833

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0024199485778809

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.063846826553345

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.095277070999146

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.10770988464355

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.010185956954956

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.00037908554077148

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00037217140197754

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0033478736877441

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0033369064331055

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.0004580020904541

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00034904479980469

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00034093856811523

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00033807754516602

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0003662109375

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.0003352165222168

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00032901763916016

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00032496452331543

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00029993057250977

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.0003349781036377

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00033211708068848

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-01-01' and '2016-12-31' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.19743609428406

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00061202049255371

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003361701965332

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.021229028701782

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.0062410831451416

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00032186508178711

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00027585029602051

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00025200843811035

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0002589225769043

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00028705596923828

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00075697898864746

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00049400329589844

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00048303604125977

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00047421455383301

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00047206878662109

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (4,8,5,7) and pj.dataprevista between '2016-01-01' and '2016-12-31' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0062479972839355

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.001835823059082

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0007789134979248

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00094008445739746

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00049400329589844

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.02126407623291

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.00099277496337891

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.076381921768188

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00048685073852539

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0014700889587402

SELECT *
FROM "obm" 
 Execution Time:0.00029492378234863

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00066900253295898

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041580200195312

SELECT *
FROM "obm" 
 Execution Time:0.00037693977355957

SELECT *
FROM "obm"
WHERE "id" =  '4' 
 Execution Time:0.00040817260742188

