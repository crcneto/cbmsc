SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.12004017829895

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.037331819534302

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.040601968765259

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.19361114501953

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.032140970230103

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0036299228668213

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.082721948623657

select * from obm where id='8' limit 1 
 Execution Time:0.0013179779052734

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.036504030227661

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00062799453735352

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0002439022064209

select * from reprovacao where plano='31'; 
 Execution Time:0.060635089874268

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.16971397399902

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00060415267944336

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.091833114624023

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.024844884872437

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.079240083694458

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00094294548034668

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00024604797363281

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.0002439022064209

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.060957908630371

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0029671192169189

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0009150505065918

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0024509429931641

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00064301490783691

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00082802772521973

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00090718269348145

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00062108039855957

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0015559196472168

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00084400177001953

select * from obm where id='8' limit 1 
 Execution Time:0.0003511905670166

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00082492828369141

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00038599967956543

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00031709671020508

select * from reprovacao where plano='31'; 
 Execution Time:0.00047993659973145

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0010437965393066

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00038695335388184

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00082993507385254

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0012619495391846

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00055193901062012

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00070810317993164

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00028300285339355

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00022506713867188

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00089001655578613

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0012531280517578

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00040102005004883

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00037288665771484

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00036191940307617

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00036716461181641

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040698051452637

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0005950927734375

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00069999694824219

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.11938905715942

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.018864870071411

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.01761794090271

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.022249937057495

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.039565086364746

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0363609790802

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.01080584526062

select * from obm where id='8' limit 1 
 Execution Time:0.00044989585876465

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00080585479736328

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0004730224609375

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00036001205444336

select * from reprovacao where plano='31'; 
 Execution Time:0.00060296058654785

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.021034002304077

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0010290145874023

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.022094964981079

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.13721799850464

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.048645973205566

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00077104568481445

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00022006034851074

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00020408630371094

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00067687034606934

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.069185018539429

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00072407722473145

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00071597099304199

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0019569396972656

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.0011258125305176

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00078415870666504

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0010499954223633

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00080299377441406

