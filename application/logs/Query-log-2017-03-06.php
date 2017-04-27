select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.025114059448242

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.001046895980835

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.082608938217163

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0035350322723389

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.03375506401062

SELECT *
FROM "obm" 
 Execution Time:0.00043296813964844

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00044393539428711

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00048685073852539

SELECT *
FROM "obm" 
 Execution Time:0.00021791458129883

SELECT *
FROM "obm"
WHERE "id" =  '11' 
 Execution Time:0.00024700164794922

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0018959045410156

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00092792510986328

SELECT *
FROM "obm" 
 Execution Time:0.00053501129150391

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0036699771881104

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0016248226165771

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.020348072052002

SELECT *
FROM "usuario" 
 Execution Time:0.0013408660888672

select id from modulo where nome='controledeacesso' order by id asc limit 1 
 Execution Time:0.0018429756164551

select * from acesso where usuario='2' and modulo='17' and nivel>0 
 Execution Time:0.00061202049255371

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004119873046875

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00075888633728027

select * from obm where id in (1,4,5,3,9,7,8,10) 
 Execution Time:0.001007080078125

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0010719299316406

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.001863956451416

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00072002410888672

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00073003768920898

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00072908401489258

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00060105323791504

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00059199333190918

SELECT *
FROM "usuario" 
 Execution Time:0.00050711631774902

select id from modulo where nome='controledeacesso' order by id asc limit 1 
 Execution Time:0.00041604042053223

select * from acesso where usuario='2' and modulo='17' and nivel>0 
 Execution Time:0.00033402442932129

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029516220092773

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00043606758117676

select * from obm where id in (1,4,5,3,9,7,8,10) 
 Execution Time:0.00027704238891602

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00046396255493164

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00083017349243164

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00033092498779297

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00031781196594238

select id from modulo where nome='controledeacesso' order by id asc limit 1 
 Execution Time:0.0018758773803711

select * from acesso where usuario='2' and modulo='17' and nivel>0 
 Execution Time:0.00069403648376465

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00059008598327637

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00041079521179199

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00070810317993164

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00099396705627441

select * from obm where id in (1,4,5,3,9,7,8,10) 
 Execution Time:0.00040483474731445

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00046801567077637

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0013339519500732

select * from acesso where usuario='2' and obm='9' 
 Execution Time:0.00099802017211914

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00047683715820312

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.0003969669342041

SELECT *
FROM "modulo"
ORDER BY "nome" ASC 
 Execution Time:0.0020449161529541

SELECT *
FROM "setor"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.047117948532104

SELECT *
FROM "setor"
ORDER BY "nome" 
 Execution Time:0.00054311752319336

SELECT *
FROM "setor"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0016469955444336

SELECT *
FROM "subsetor"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.023538112640381

SELECT *
FROM "subsetor" 
 Execution Time:0.00067806243896484

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.031676054000854

SELECT *
FROM "origemreceita" 
 Execution Time:0.00057196617126465

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.033230066299438

SELECT *
FROM "categoriaeconomica"
ORDER BY "id" 
 Execution Time:0.00055480003356934

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0019340515136719

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.02771520614624

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.04010796546936

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.1159200668335

SELECT *
FROM "especificacao"
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.02552604675293

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0013480186462402

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0010819435119629

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0010008811950684

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0017261505126953

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00070977210998535

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0031929016113281

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.038862943649292

select * from obm where id='8' limit 1 
 Execution Time:0.00059795379638672

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00093293190002441

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00044488906860352

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00031900405883789

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00081205368041992

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00049400329589844

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.14582300186157

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00091195106506348

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.070769071578979

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0011360645294189

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='31' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00066804885864258

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00034713745117188

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00034999847412109

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0006568431854248

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00030016899108887

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0008399486541748

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0007178783416748

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00034117698669434

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0008399486541748

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00046491622924805

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00071215629577637

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0012729167938232

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='31' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00092697143554688

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00044512748718262

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00039911270141602

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0012729167938232

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00028705596923828

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00078606605529785

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00074505805969238

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00058388710021973

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0019280910491943

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0014169216156006

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00071191787719727

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0013790130615234

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='31' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00098395347595215

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00047707557678223

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00043606758117676

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0006258487701416

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00048089027404785

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00052285194396973

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00079703330993652

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00037384033203125

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00051999092102051

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00083208084106445

select * from obm where id='8' limit 1 
 Execution Time:0.00034213066101074

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0006411075592041

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00030779838562012

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00025701522827148

select * from reprovacao where plano='31'; 
 Execution Time:0.029703140258789

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00078892707824707

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00034499168395996

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00068092346191406

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00071001052856445

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00049495697021484

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00072288513183594

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00032305717468262

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00025391578674316

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00082898139953613

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00052404403686523

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00043821334838867

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00033187866210938

select * from reprovacao where plano=0; 
 Execution Time:0.00076794624328613

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00079917907714844

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00068187713623047

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0009758472442627

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0014641284942627

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.001708984375

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0013558864593506

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00060582160949707

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00057697296142578

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.001521110534668

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0022618770599365

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0007328987121582

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0010578632354736

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0010671615600586

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00059294700622559

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0017850399017334

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.001788854598999

select * from obm where id='8' limit 1 
 Execution Time:0.0004730224609375

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00043702125549316

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0003049373626709

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00026202201843262

select * from reprovacao where plano='31'; 
 Execution Time:0.00042390823364258

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00043296813964844

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028514862060547

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00036811828613281

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0006248950958252

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.0003509521484375

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00061678886413574

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00027680397033691

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00024700164794922

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00073003768920898

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00041007995605469

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00026202201843262

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00023102760314941

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00077915191650391

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00041103363037109

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028300285339355

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00038790702819824

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00042009353637695

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0032808780670166

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00096392631530762

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0013911724090576

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0013258457183838

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00065207481384277

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.001727819442749

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.0010559558868408

select * from obm where id='8' limit 1 
 Execution Time:0.00034403800964355

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00062704086303711

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00044703483581543

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00042486190795898

select * from reprovacao where plano='31'; 
 Execution Time:0.00049114227294922

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0010490417480469

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00054407119750977

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00077295303344727

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0012891292572021

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00051116943359375

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00099897384643555

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00030303001403809

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00024890899658203

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00072407722473145

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00062918663024902

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00037980079650879

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0027060508728027

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00080108642578125

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00032401084899902

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00024199485778809

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00031089782714844

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00063705444335938

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00066995620727539

SELECT *
FROM "obm"
WHERE "id" =  11 
 Execution Time:0.00034189224243164

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.0003199577331543

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00029802322387695

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00025510787963867

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00021004676818848

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00020384788513184

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (3,7) and pj.dataprevista between '2016-01-01' and '2016-12-31' and pn.status=4 and e.id='0' order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.14527106285095

select obm, sum(valor) from (select o.nome as obm, pj.valor as valor from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (3,7) and pj.dataprevista between '2016-01-01' and '2016-12-31' and pn.status=4 and e.id='0' order by o.nome asc, tipo asc, origemreceita asc) as resultado group by obm 
 Execution Time:0.0019268989562988

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (3,7) and pj.dataprevista between '2016-01-01' and '2016-12-31' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.001345157623291

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00052118301391602

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00032901763916016

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00055313110351562

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00031590461730957

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.000244140625

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00021004676818848

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00020599365234375

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00034999847412109

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00029420852661133

SELECT *
FROM "obm"
WHERE "id" =  11 
 Execution Time:0.00035405158996582

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00026297569274902

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00022006034851074

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00021004676818848

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00020098686218262

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00034594535827637

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (4) and pj.dataprevista between '2016-01-01' and '2016-12-31' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0023410320281982

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (4) and pj.dataprevista between '2016-01-01' and '2016-12-31' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0013718605041504

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00033402442932129

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00034713745117188

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.000823974609375

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00042295455932617

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00029802322387695

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00039005279541016

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00039005279541016

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00039196014404297

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00047707557678223

SELECT *
FROM "obm"
WHERE "id" =  11 
 Execution Time:0.00049185752868652

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00040698051452637

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00054097175598145

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00044798851013184

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00043201446533203

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00040888786315918

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (4) and pj.dataprevista between '2016-01-01' and '2016-12-31' and pn.status=4 and e.id='18' order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0023438930511475

select obm, sum(valor) from (select o.nome as obm, pj.valor as valor from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (4) and pj.dataprevista between '2016-01-01' and '2016-12-31' and pn.status=4 and e.id='18' order by o.nome asc, tipo asc, origemreceita asc) as resultado group by obm 
 Execution Time:0.00096416473388672

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (4) and pj.dataprevista between '2016-01-01' and '2016-12-31' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0014739036560059

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0011839866638184

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00032997131347656

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00054121017456055

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00034308433532715

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00022792816162109

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00021195411682129

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00023198127746582

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.0002901554107666

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00026988983154297

SELECT *
FROM "obm"
WHERE "id" =  11 
 Execution Time:0.00031089782714844

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00028300285339355

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00023698806762695

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00021100044250488

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00051999092102051

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00041985511779785

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (4) and pj.dataprevista between '2016-01-01' and '2016-12-31' and pn.status=4 and e.id='9' order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0028190612792969

select obm, sum(valor) from (select o.nome as obm, pj.valor as valor from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (4) and pj.dataprevista between '2016-01-01' and '2016-12-31' and pn.status=4 and e.id='9' order by o.nome asc, tipo asc, origemreceita asc) as resultado group by obm 
 Execution Time:0.0010151863098145

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (4) and pj.dataprevista between '2016-01-01' and '2016-12-31' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0017428398132324

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00061416625976562

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00082612037658691

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00057792663574219

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00032997131347656

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00025796890258789

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00021791458129883

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00042200088500977

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00021004676818848

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00024008750915527

SELECT *
FROM "obm"
WHERE "id" =  11 
 Execution Time:0.0002739429473877

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00023293495178223

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00020503997802734

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00023078918457031

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00020909309387207

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00021195411682129

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (1,4,10,8,3,9,11,5,7) and pj.dataprevista between '2016-01-01' and '2016-12-31' and pn.status=4 and e.id='9' order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0034639835357666

select obm, sum(valor) from (select o.nome as obm, pj.valor as valor from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (1,4,10,8,3,9,11,5,7) and pj.dataprevista between '2016-01-01' and '2016-12-31' and pn.status=4 and e.id='9' order by o.nome asc, tipo asc, origemreceita asc) as resultado group by obm 
 Execution Time:0.0019888877868652

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (1,4,10,8,3,9,11,5,7) and pj.dataprevista between '2016-01-01' and '2016-12-31' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0016689300537109

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00083613395690918

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00060319900512695

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00077199935913086

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00032711029052734

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00024199485778809

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00059103965759277

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00030112266540527

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00027298927307129

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00023102760314941

SELECT *
FROM "obm"
WHERE "id" =  11 
 Execution Time:0.00021100044250488

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00020718574523926

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00020408630371094

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00020289421081543

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00020003318786621

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00019693374633789

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (1,4,10,8,3,9,11,5,7) and pj.dataprevista between '2016-01-01' and '2016-12-31' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0023410320281982

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (1,4,10,8,3,9,11,5,7) and pj.dataprevista between '2016-01-01' and '2016-12-31' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0023589134216309

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00047087669372559

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00037312507629395

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00050711631774902

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00050091743469238

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00040316581726074

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00083804130554199

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00056099891662598

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0026299953460693

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.0010509490966797

select * from obm where id='8' limit 1 
 Execution Time:0.00048708915710449

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00042200088500977

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0003201961517334

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0002601146697998

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00066900253295898

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00032901763916016

select a.obm from acesso as a, modulo as m where usuario='7' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00060796737670898

SELECT * FROM plano WHERE status<4 and status>0 and obm in (5,4) ORDER BY datainicio DESC 
 Execution Time:0.00050711631774902

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00090885162353516

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041079521179199

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00087618827819824

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00050878524780273

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00038695335388184

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00040483474731445

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00034499168395996

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00033998489379883

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.0003058910369873

SELECT *
FROM "obm"
WHERE "id" =  11 
 Execution Time:0.00023913383483887

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00021505355834961

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00019693374633789

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00020694732666016

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00027203559875488

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00022602081298828

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (9,11,5) and pj.dataprevista between '2017-01-01' and '2017-12-31' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0012750625610352

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (9,11,5) and pj.dataprevista between '2017-01-01' and '2017-12-31' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0020589828491211

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0005030632019043

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0010139942169189

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00058388710021973

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00031399726867676

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0004119873046875

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00032401084899902

SELECT *
FROM "obm" 
 Execution Time:0.00024890899658203

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00058507919311523

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00030303001403809

SELECT *
FROM "obm" 
 Execution Time:0.00020217895507812

SELECT *
FROM "obm"
WHERE "id" =  '4' 
 Execution Time:0.00026488304138184

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.001101016998291

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00045609474182129

SELECT *
FROM "obm" 
 Execution Time:0.00034999847412109

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00055789947509766

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00046992301940918

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00030899047851562

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00057005882263184

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00033903121948242

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0005030632019043

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00092792510986328

select * from obm where id='8' limit 1 
 Execution Time:0.00033688545227051

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00066208839416504

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00039100646972656

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00042104721069336

select * from reprovacao where plano='31'; 
 Execution Time:0.00072503089904785

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0011520385742188

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00049901008605957

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0011639595031738

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.001427173614502

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00068783760070801

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0009920597076416

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00036191940307617

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00031208992004395

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00091409683227539

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00067591667175293

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00039291381835938

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00044393539428711

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00075697898864746

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00031399726867676

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00044989585876465

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00053620338439941

select * from obm where id='8' limit 1 
 Execution Time:0.00027298927307129

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00085616111755371

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00036382675170898

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0011329650878906

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00057601928710938

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00056099891662598

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028800964355469

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00024104118347168

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00020408630371094

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00019502639770508

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00023794174194336

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00022292137145996

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00024199485778809

SELECT *
FROM "obm"
WHERE "id" =  11 
 Execution Time:0.00027203559875488

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00028109550476074

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00022697448730469

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00021481513977051

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00021886825561523

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00023221969604492

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (1,10,8,3,9,4,11,5,7) and pj.dataprevista between '2016-01-01' and '2016-12-31' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0018081665039062

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (1,10,8,3,9,4,11,5,7) and pj.dataprevista between '2016-01-01' and '2016-12-31' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0024330615997314

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00036883354187012

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00026583671569824

