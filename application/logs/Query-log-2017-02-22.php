SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.097249031066895

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.094041109085083

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.04051685333252

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.1495840549469

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.043712854385376

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.001410961151123

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.11021900177002

select * from obm where id='8' limit 1 
 Execution Time:0.00062298774719238

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.20145702362061

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00045609474182129

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00035977363586426

select * from reprovacao where plano='31'; 
 Execution Time:0.073574066162109

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.038586854934692

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00037002563476562

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.076611042022705

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.036611080169678

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.079610824584961

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0011940002441406

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00044012069702148

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00043892860412598

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.071913003921509

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.001802921295166

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00044512748718262

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0003359317779541

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0020179748535156

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00081014633178711

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00096988677978516

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0012788772583008

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0011000633239746

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00098514556884766

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0006098747253418

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00077700614929199

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0008089542388916

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0011048316955566

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0025789737701416

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.0014698505401611

select * from obm where id='8' limit 1 
 Execution Time:0.0005180835723877

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0011968612670898

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00082778930664062

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00039911270141602

select * from reprovacao where plano='31'; 
 Execution Time:0.00067496299743652

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0014300346374512

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00077986717224121

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0013060569763184

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0016758441925049

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00074601173400879

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0013859272003174

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00046110153198242

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00036811828613281

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.0011780261993408

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.0019600391387939

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.00069808959960938

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.055150032043457

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00077915191650391

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00031805038452148

SELECT *
FROM "obm" 
 Execution Time:0.00032806396484375

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00060796737670898

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00049209594726562

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00043892860412598

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00077509880065918

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003209114074707

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00066208839416504

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00055408477783203

select * from obm where id='8' limit 1 
 Execution Time:0.00028109550476074

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00083088874816895

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00047993659973145

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00043678283691406

select * from reprovacao where plano='31'; 
 Execution Time:0.00065898895263672

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00071501731872559

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00048208236694336

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00085306167602539

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0020649433135986

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.006382942199707

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0012660026550293

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00044107437133789

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.0003809928894043

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.0011909008026123

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00046300888061523

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00043010711669922

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0003819465637207

SELECT *
FROM "usuario" 
 Execution Time:0.00051593780517578

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00066804885864258

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00047183036804199

SELECT *
FROM "obm" 
 Execution Time:0.00037097930908203

select st.nome as setor, ss.nome as subsetor, sum(p.valor) as valor from planejamento as p, subsetor as ss, setor as st where plano=31 and ss.id=p.subsetor and ss.setor=st.id group by st.nome, ss.nome 
 Execution Time:0.0031168460845947

select st.nome as setor, ss.nome as subsetor, sum(p.valor) as valor from planejamento as p, subsetor as ss, setor as st where plano=31 and ss.id=p.subsetor and ss.setor=st.id group by st.nome, ss.nome 
 Execution Time:0.0012788772583008

