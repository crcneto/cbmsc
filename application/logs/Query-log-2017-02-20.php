select * from plano where status=4 order by datainicio DESC, datafim DESC 
 Execution Time:0.060167074203491

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.033011913299561

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0010299682617188

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.12148499488831

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.045675992965698

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.05290699005127

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.18223786354065

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0008399486541748

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.002953052520752

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.0010991096496582

select * from obm where id='1' limit 1 
 Execution Time:0.00085687637329102

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0017540454864502

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0003209114074707

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00024795532226562

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0012059211730957

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.0004880428314209

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00066995620727539

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.051800966262817

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.07679295539856

select st.nome as setor, ss.nome as subsetor, sum(p.valor) as valor from planejamento as p, subsetor as ss, setor as st where plano=31 and ss.id=p.subsetor and ss.setor=st.id group by st.nome, ss.nome 
 Execution Time:0.16254901885986

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.001230001449585

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00050497055053711

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00058221817016602

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00079202651977539

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.068303108215332

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0005650520324707

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00078296661376953

select * from obm where id='1' limit 1 
 Execution Time:0.00032305717468262

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00045919418334961

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00034403800964355

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00026106834411621

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00049591064453125

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00031614303588867

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00043606758117676

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00031018257141113

select * from obm where id='1' limit 1 
 Execution Time:0.00022196769714355

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00043511390686035

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00033283233642578

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00032186508178711

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00051188468933105

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00031399726867676

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028014183044434

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00059604644775391

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.026337862014771

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0032610893249512

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00069999694824219

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0011930465698242

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0012638568878174

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.013898134231567

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0020999908447266

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.0010619163513184

select * from obm where id='1' limit 1 
 Execution Time:0.00043797492980957

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00037312507629395

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00027203559875488

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00023007392883301

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00045919418334961

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00024604797363281

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00052118301391602

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.0003819465637207

select * from obm where id='1' limit 1 
 Execution Time:0.00027799606323242

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00068020820617676

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00065803527832031

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00064396858215332

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00097990036010742

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00066995620727539

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0007929801940918

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.0005338191986084

select * from obm where id='1' limit 1 
 Execution Time:0.0003511905670166

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0017828941345215

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00052809715270996

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00035190582275391

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0019898414611816

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00078988075256348

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0010139942169189

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0012400150299072

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.017162084579468

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0010628700256348

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00079011917114258

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00060510635375977

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0011022090911865

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00055313110351562

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00094699859619141

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00078892707824707

select * from obm where id='1' limit 1 
 Execution Time:0.00046086311340332

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00042295455932617

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00029587745666504

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00024986267089844

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0005190372467041

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00031113624572754

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0004429817199707

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00031709671020508

select * from obm where id='1' limit 1 
 Execution Time:0.00028204917907715

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00049090385437012

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00037097930908203

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00034499168395996

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00061202049255371

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041580200195312

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0005338191986084

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.068326950073242

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.051788091659546

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.055315017700195

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='31' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.001784086227417

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00060606002807617

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00050115585327148

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0010099411010742

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00053095817565918

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00074005126953125

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00080609321594238

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00074005126953125

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0012891292572021

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.0006098747253418

select * from obm where id='1' limit 1 
 Execution Time:0.00025391578674316

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00036001205444336

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00036907196044922

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00025486946105957

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00025200843811035

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00025606155395508

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028681755065918

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00085997581481934

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0007011890411377

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00049996376037598

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00037503242492676

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00031304359436035

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00055098533630371

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00038480758666992

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0005800724029541

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00091004371643066

select * from obm where id='1' limit 1 
 Execution Time:0.00028085708618164

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00044703483581543

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00035214424133301

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00052595138549805

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00066018104553223

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041604042053223

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00065898895263672

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00035595893859863

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00051307678222656

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00071406364440918

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='31' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00059890747070312

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00027990341186523

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00024986267089844

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00089001655578613

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00057005882263184

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0012331008911133

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.001209020614624

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00065708160400391

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0014960765838623

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.0015339851379395

select * from obm where id='1' limit 1 
 Execution Time:0.00039315223693848

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00040817260742188

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00026297569274902

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0002291202545166

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00025105476379395

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00024795532226562

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028204917907715

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00061583518981934

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00058102607727051

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00092816352844238

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00068497657775879

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00056791305541992

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00098586082458496

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00071907043457031

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0013740062713623

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00073504447937012

select * from obm where id='8' limit 1 
 Execution Time:0.00059604644775391

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0022308826446533

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00043392181396484

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00039386749267578

select * from reprovacao where plano='31'; 
 Execution Time:0.00056195259094238

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00086498260498047

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00050616264343262

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00084400177001953

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.13739490509033

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.0013260841369629

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0019979476928711

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00054192543029785

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00051617622375488

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.0011169910430908

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0018589496612549

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00051188468933105

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0003659725189209

select * from reprovacao where plano='31'; 
 Execution Time:0.0007779598236084

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0014150142669678

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00086688995361328

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.001453161239624

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0026750564575195

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00061798095703125

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00082898139953613

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00024986267089844

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00023078918457031

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00068092346191406

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00041103363037109

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00031900405883789

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00029301643371582

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0008080005645752

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00040888786315918

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00027084350585938

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0003359317779541

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00039887428283691

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0008540153503418

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00052714347839355

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00057601928710938

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.042126893997192

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.021177053451538

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00082111358642578

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00089883804321289

select * from obm where id='8' limit 1 
 Execution Time:0.00053000450134277

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.025931119918823

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00049400329589844

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00042009353637695

select * from reprovacao where plano='31'; 
 Execution Time:0.00059795379638672

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.019576072692871

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00034904479980469

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00064206123352051

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0011470317840576

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.23733615875244

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0011649131774902

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00040507316589355

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00025701522827148

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.011311054229736

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.052535057067871

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.019822835922241

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00050091743469238

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00056290626525879

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00038409233093262

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00056004524230957

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00043296813964844

select * from obm where id='8' limit 1 
 Execution Time:0.00033402442932129

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00088286399841309

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0005340576171875

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00046300888061523

select * from reprovacao where plano='31'; 
 Execution Time:0.00065517425537109

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00073909759521484

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00056695938110352

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00059390068054199

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0019490718841553

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00080204010009766

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0020990371704102

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00053811073303223

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00075483322143555

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.0021629333496094

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.12727284431458

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00076389312744141

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00039005279541016

select * from reprovacao where plano='31'; 
 Execution Time:0.000885009765625

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0015180110931396

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00061893463134766

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.001727819442749

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.002493143081665

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.0019400119781494

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0012540817260742

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00034880638122559

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00028896331787109

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00096893310546875

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00052905082702637

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00043606758117676

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00040316581726074

select * from reprovacao where plano='31'; 
 Execution Time:0.00032305717468262

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00072216987609863

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.001105785369873

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00058507919311523

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00097203254699707

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00060915946960449

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00061488151550293

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00025486946105957

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00025010108947754

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.0003969669342041

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0030059814453125

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0013980865478516

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00045490264892578

select * from reprovacao where plano='31'; 
 Execution Time:0.00057291984558105

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00046682357788086

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003058910369873

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00036287307739258

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.001244068145752

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00066089630126953

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0006859302520752

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00025105476379395

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00022506713867188

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00067019462585449

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00055217742919922

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00042295455932617

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00038480758666992

select * from reprovacao where plano='31'; 
 Execution Time:0.0003199577331543

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00064396858215332

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00049495697021484

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00055599212646484

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0023369789123535

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00058102607727051

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00093793869018555

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00028896331787109

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00036001205444336

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00047707557678223

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00043702125549316

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00034308433532715

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00031304359436035

select * from reprovacao where plano='31'; 
 Execution Time:0.00024890899658203

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00082802772521973

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0010068416595459

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00049614906311035

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00072693824768066

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00038290023803711

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00066709518432617

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00030517578125

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.0002751350402832

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00053310394287109

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0005340576171875

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00040388107299805

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0003809928894043

select * from reprovacao where plano='31'; 
 Execution Time:0.0003359317779541

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00070905685424805

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00047492980957031

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00056886672973633

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0011258125305176

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00081992149353027

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0013549327850342

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00039982795715332

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00036501884460449

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00055384635925293

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.010816097259521

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00035405158996582

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00027918815612793

select * from reprovacao where plano='31'; 
 Execution Time:0.00024104118347168

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00059986114501953

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00056099891662598

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00056600570678711

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00092601776123047

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.0011038780212402

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00072193145751953

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00064587593078613

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00058698654174805

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00094699859619141

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00043988227844238

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00033807754516602

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00025796890258789

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0004730224609375

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00034689903259277

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00042390823364258

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00031495094299316

select * from obm where id='8' limit 1 
 Execution Time:0.00022792816162109

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00040292739868164

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00026202201843262

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00026392936706543

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00028491020202637

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00028610229492188

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00026297569274902

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00046205520629883

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00044798851013184

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00042295455932617

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00036501884460449

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00037598609924316

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00048494338989258

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00039291381835938

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00030994415283203

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00037312507629395

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00049996376037598

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00054097175598145

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00049495697021484

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00042414665222168

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.080671072006226

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00073122978210449

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00051093101501465

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0010371208190918

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.001370906829834

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00055599212646484

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00078201293945312

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00048208236694336

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0013301372528076

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.0017499923706055

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00053715705871582

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00067281723022461

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00090193748474121

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00053811073303223

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00040102005004883

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00038909912109375

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.023038864135742

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00042605400085449

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00037002563476562

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00052285194396973

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0006098747253418

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00048518180847168

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00030112266540527

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0002601146697998

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00027012825012207

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.0003819465637207

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00046801567077637

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0034282207489014

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.001215934753418

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0026710033416748

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00036311149597168

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00025105476379395

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0012319087982178

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.0004570484161377

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00056290626525879

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00071406364440918

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00065112113952637

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00051617622375488

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00037908554077148

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00036001205444336

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00031495094299316

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00025796890258789

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00027799606323242

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00033807754516602

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00046110153198242

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0011758804321289

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00047612190246582

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00082802772521973

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0003669261932373

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00034093856811523

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00033187866210938

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0003659725189209

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00043106079101562

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00048685073852539

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00038599967956543

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00040197372436523

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0022099018096924

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00082588195800781

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0010411739349365

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00093793869018555

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00071382522583008

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00070405006408691

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00042295455932617

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00042104721069336

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0003819465637207

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00034284591674805

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00043797492980957

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00063085556030273

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00072002410888672

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.001859188079834

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0005190372467041

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0003349781036377

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00032496452331543

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00030803680419922

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00034403800964355

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00048112869262695

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00050497055053711

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0010650157928467

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0004279613494873

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00034904479980469

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00028204917907715

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.0002439022064209

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00026512145996094

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00033307075500488

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00079822540283203

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.002216100692749

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00039887428283691

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00034499168395996

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00039911270141602

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00029802322387695

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00030803680419922

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0003969669342041

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00050616264343262

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00072693824768066

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0005340576171875

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00046110153198242

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.016198873519897

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00044107437133789

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0010240077972412

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00062394142150879

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0006401538848877

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0005040168762207

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00043082237243652

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00040912628173828

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00040197372436523

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00043487548828125

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00055789947509766

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0015039443969727

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00072407722473145

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.005073070526123

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00044107437133789

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0005340576171875

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0008540153503418

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00049114227294922

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00070405006408691

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00075101852416992

select * from obm where id='8' limit 1 
 Execution Time:0.00040221214294434

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00052404403686523

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0004279613494873

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00035500526428223

select * from reprovacao where plano='31'; 
 Execution Time:0.00037407875061035

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00080180168151855

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00059008598327637

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0005040168762207

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00089001655578613

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00050497055053711

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0022289752960205

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00043106079101562

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00029802322387695

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.0011310577392578

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00055789947509766

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00035810470581055

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00030684471130371

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00031304359436035

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00029492378234863

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00033092498779297

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0004119873046875

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00049018859863281

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00050902366638184

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00039005279541016

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00037693977355957

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0021250247955322

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00084900856018066

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0016789436340332

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00099301338195801

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00069808959960938

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00370192527771

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00057601928710938

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0013358592987061

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0010418891906738

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00036382675170898

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00043702125549316

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00052404403686523

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00068902969360352

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00052809715270996

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00043582916259766

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00040483474731445

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00036501884460449

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.0003659725189209

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00039815902709961

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00038814544677734

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00042414665222168

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0022001266479492

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.001471996307373

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0004570484161377

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00040602684020996

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00028896331787109

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029802322387695

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00043392181396484

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00065708160400391

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00056791305541992

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00050020217895508

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00037002563476562

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0004889965057373

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028204917907715

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00058078765869141

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00033688545227051

select * from obm where id='8' limit 1 
 Execution Time:0.00026893615722656

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00039100646972656

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00035905838012695

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00025677680969238

select * from reprovacao where plano='31'; 
 Execution Time:0.00020909309387207

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00040292739868164

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00026106834411621

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00038409233093262

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00057005882263184

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00040102005004883

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00060296058654785

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00027799606323242

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00024914741516113

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00042295455932617

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0011110305786133

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0006721019744873

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00060415267944336

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00026702880859375

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00024008750915527

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00045299530029297

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00087094306945801

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.001492977142334

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00072789192199707

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0014579296112061

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00052094459533691

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00087308883666992

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00039005279541016

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00051498413085938

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00044488906860352

select * from obm where id='8' limit 1 
 Execution Time:0.00025606155395508

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00081610679626465

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00037312507629395

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00026488304138184

select * from reprovacao where plano='31'; 
 Execution Time:0.00045490264892578

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00046110153198242

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00027108192443848

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00040817260742188

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0012779235839844

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00056099891662598

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00067710876464844

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00027298927307129

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00024318695068359

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00085091590881348

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0003809928894043

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00024318695068359

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00022697448730469

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0002448558807373

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00024008750915527

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00027799606323242

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00034189224243164

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00054478645324707

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00060105323791504

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00042986869812012

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00036191940307617

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00062298774719238

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00037407875061035

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00053787231445312

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00083804130554199

select * from obm where id='8' limit 1 
 Execution Time:0.00052189826965332

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00043916702270508

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00040602684020996

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00026702880859375

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0002601146697998

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00024986267089844

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028395652770996

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00035214424133301

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00043606758117676

