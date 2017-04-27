select * from tarefa where usuario='2' and status<>3 order by status desc, data_prevista asc 
 Execution Time:0.11285996437073

select * from tarefa where usuario='2' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00052189826965332

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.064874172210693

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.037654161453247

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.073567867279053

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.13801598548889

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.032863855361938

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.001910924911499

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.074253082275391

select * from obm where id='4' limit 1 
 Execution Time:0.0005650520324707

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00042605400085449

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00028204917907715

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00024080276489258

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00025200843811035

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00034093856811523

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00027585029602051

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.17270803451538

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.18233609199524

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0011501312255859

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00077295303344727

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00092697143554688

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0011789798736572

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0005791187286377

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00056290626525879

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.0005190372467041

select * from obm where id='4' limit 1 
 Execution Time:0.00034403800964355

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.025825977325439

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00049304962158203

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00041794776916504

select * from reprovacao where plano='36'; 
 Execution Time:0.00046086311340332

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0010781288146973

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00052094459533691

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0010359287261963

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.034806966781616

select origemreceita, sum(valor) from planejamento where plano='36' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.25578093528748

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='36' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0010361671447754

select sum(valor) as total from planejamento where plano='36' and tipo=1 
 Execution Time:0.00036096572875977

select sum(valor) as total from planejamento where plano='36' and tipo=2 
 Execution Time:0.00032615661621094

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.050673007965088

select * from tarefa where usuario='2' and status<>3 order by status desc, data_prevista asc 
 Execution Time:0.0016670227050781

select * from tarefa where usuario='2' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00036001205444336

select * from tarefa where usuario='2' and status<>3 order by status desc, data_prevista asc 
 Execution Time:0.00093889236450195

select * from tarefa where usuario='2' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00037884712219238

