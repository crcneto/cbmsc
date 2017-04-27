SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.083276987075806

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.073583126068115

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.051516771316528

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.12759709358215

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.044247150421143

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0028910636901855

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.085881948471069

select * from obm where id='8' limit 1 
 Execution Time:0.014348030090332

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00056004524230957

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00033307075500488

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00030279159545898

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00037097930908203

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00031805038452148

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00034379959106445

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.12461400032043

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.044075012207031

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.057204008102417

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00056886672973633

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00023007392883301

select * from reprovacao where plano='31'; 
 Execution Time:0.087813854217529

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00098180770874023

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00048708915710449

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00079584121704102

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.20240020751953

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.068613052368164

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0011920928955078

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00050497055053711

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00048089027404785

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.08698582649231

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0018651485443115

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0010480880737305

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00046110153198242

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0015270709991455

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00085306167602539

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0013108253479004

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0019478797912598

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00050783157348633

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0013110637664795

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00031399726867676

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00030112266540527

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00096297264099121

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0019049644470215

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00073599815368652

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00033187866210938

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0014560222625732

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0010738372802734

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0017919540405273

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0025808811187744

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00094079971313477

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0017139911651611

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00060009956359863

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.0005791187286377

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.0013229846954346

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0024750232696533

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0010838508605957

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0005791187286377

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0015640258789062

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00097799301147461

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0015819072723389

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0023000240325928

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00089097023010254

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0016689300537109

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00057482719421387

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00053095817565918

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.0013711452484131

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00055384635925293

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00030207633972168

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00027918815612793

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0019960403442383

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.0015120506286621

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00045299530029297

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00066685676574707

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00052618980407715

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0029230117797852

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0012619495391846

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0020458698272705

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0012049674987793

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00075697898864746

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0014939308166504

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00091886520385742

select * from obm where id='8' limit 1 
 Execution Time:0.00047588348388672

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.000823974609375

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.001323938369751

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0014398097991943

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0011389255523682

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00052690505981445

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0013270378112793

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.0016160011291504

select * from obm where id='8' limit 1 
 Execution Time:0.00079011917114258

select * from obm where id='4' limit 1 
 Execution Time:0.00050997734069824

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00078892707824707

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00046110153198242

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00055122375488281

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00069999694824219

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00045084953308105

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00046396255493164

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00068497657775879

select * from obm where id='8' limit 1 
 Execution Time:0.00026202201843262

select * from obm where id='4' limit 1 
 Execution Time:0.00022101402282715

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00040698051452637

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00027990341186523

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00034093856811523

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0010459423065186

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00049901008605957

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00027894973754883

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00037598609924316

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00039887428283691

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.001276969909668

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00056290626525879

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00051283836364746

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00049996376037598

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00051403045654297

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00054407119750977

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00077199935913086

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00072789192199707

