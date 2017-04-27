SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.08995795249939

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.080363988876343

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.040971040725708

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.12687087059021

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.03276801109314

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00079083442687988

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.099352121353149

select * from obm where id='8' limit 1 
 Execution Time:0.014412879943848

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0022850036621094

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00058293342590332

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0007941722869873

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.001460075378418

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00060486793518066

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0013289451599121

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00084495544433594

select * from obm where id='8' limit 1 
 Execution Time:0.0004270076751709

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.14655208587646

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00051689147949219

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00037217140197754

select * from reprovacao where plano='31'; 
 Execution Time:0.18536591529846

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.059783220291138

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00053501129150391

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.098548173904419

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.05859899520874

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.079395055770874

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00077509880065918

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.0002739429473877

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00027203559875488

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.049740791320801

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0004270076751709

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00028181076049805

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00024080276489258

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00026798248291016

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00026106834411621

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004122257232666

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00037717819213867

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00043082237243652

