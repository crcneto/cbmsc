SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.040781021118164

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.07109808921814

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.040798187255859

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.12722492218018

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.054321050643921

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00060606002807617

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.088663101196289

select * from obm where id='8' limit 1 
 Execution Time:0.00055623054504395

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.046300888061523

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00037717819213867

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00050902366638184

select * from reprovacao where plano='31'; 
 Execution Time:0.09240198135376

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.20884299278259

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00054407119750977

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.075773954391479

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.025444030761719

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.079479932785034

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.001129150390625

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.0012109279632568

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00035905838012695

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.060675144195557

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.001643180847168

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00052785873413086

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00047588348388672

select * from reprovacao where plano=0; 
 Execution Time:0.0007331371307373

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0011889934539795

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00078511238098145

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.001129150390625

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0016779899597168

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00074005126953125

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0013399124145508

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00045013427734375

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00038790702819824

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.0010290145874023

SELECT *
FROM "modulo"
ORDER BY "nome" ASC 
 Execution Time:0.0033109188079834

SELECT *
FROM "setor"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0010268688201904

SELECT *
FROM "subsetor"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00081706047058105

SELECT *
FROM "subsetor" 
 Execution Time:0.00040292739868164

SELECT *
FROM "setor"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00092506408691406

SELECT *
FROM "subsetor"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00045514106750488

SELECT *
FROM "subsetor" 
 Execution Time:0.00024604797363281

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0011260509490967

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00079107284545898

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00061202049255371

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0011739730834961

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0013248920440674

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0019359588623047

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.0012428760528564

select * from obm where id='8' limit 1 
 Execution Time:0.00045299530029297

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00068283081054688

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00030088424682617

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00022411346435547

select * from reprovacao where plano='31'; 
 Execution Time:0.00041389465332031

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00063514709472656

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0002751350402832

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00071811676025391

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0018899440765381

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00057411193847656

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00064897537231445

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00026988983154297

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00028896331787109

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00047087669372559

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00083398818969727

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00027298927307129

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00024104118347168

select * from reprovacao where plano=0; 
 Execution Time:0.00039386749267578

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00062084197998047

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003960132598877

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00061583518981934

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00095510482788086

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.0004878044128418

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00080299377441406

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00024104118347168

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00022697448730469

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00055193901062012

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00069999694824219

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00064897537231445

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0003058910369873

select * from reprovacao where plano=0; 
 Execution Time:0.0010139942169189

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0016288757324219

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00086498260498047

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0011298656463623

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0011258125305176

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00042200088500977

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0010061264038086

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00046491622924805

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00043988227844238

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00065708160400391

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00069689750671387

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00053811073303223

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00076508522033691

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0010089874267578

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00055217742919922

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00078201293945312

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00094795227050781

select * from obm where id='8' limit 1 
 Execution Time:0.00062394142150879

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0012021064758301

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00070619583129883

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00085306167602539

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00099921226501465

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004429817199707

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0010991096496582

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.0017871856689453

select * from obm where id='8' limit 1 
 Execution Time:0.00035214424133301

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0023760795593262

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00090408325195312

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0016520023345947

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00084209442138672

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00051116943359375

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0011839866638184

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.0012540817260742

select * from obm where id='8' limit 1 
 Execution Time:0.00033998489379883

select id from modulo where nome='controledeacesso' order by id asc limit 1 
 Execution Time:0.00076484680175781

select * from acesso where usuario='2' and modulo='17' and nivel>0 
 Execution Time:0.00082015991210938

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00038790702819824

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00059294700622559

select * from obm where id in (1,4,5,3,9,7,8,10) 
 Execution Time:0.00076484680175781

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00060200691223145

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00090384483337402

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00042104721069336

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.0004279613494873

select id from modulo where nome='controledeacesso' order by id asc limit 1 
 Execution Time:0.0005638599395752

select * from acesso where usuario='2' and modulo='17' and nivel>0 
 Execution Time:0.00052285194396973

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00043392181396484

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004730224609375

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.0006098747253418

select * from obm where id in (1,4,5,3,9,7,8,10) 
 Execution Time:0.0004279613494873

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00043892860412598

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00041294097900391

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00045895576477051

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.0045459270477295

select id from modulo where nome='controledeacesso' order by id asc limit 1 
 Execution Time:0.00039792060852051

select * from acesso where usuario='2' and modulo='17' and nivel>0 
 Execution Time:0.00049400329589844

SELECT *
FROM "usuario"
WHERE "id" =  '7' 
 Execution Time:0.00027704238891602

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029301643371582

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.0004878044128418

select * from obm where id in (1,4,5,3,9,7,8,10) 
 Execution Time:0.00025701522827148

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00028705596923828

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00033807754516602

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00029301643371582

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00040316581726074

select id from modulo where nome='controledeacesso' order by id asc limit 1 
 Execution Time:0.0013980865478516

select * from acesso where usuario='2' and modulo='17' and nivel>0 
 Execution Time:0.00085997581481934

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00031399726867676

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00032401084899902

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00045490264892578

select * from obm where id in (1,4,5,3,9,7,8,10) 
 Execution Time:0.00049185752868652

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0007631778717041

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00039315223693848

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00030207633972168

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00029802322387695

select id from modulo where nome='controledeacesso' order by id asc limit 1 
 Execution Time:0.00082802772521973

select * from acesso where usuario='2' and modulo='17' and nivel>0 
 Execution Time:0.00063514709472656

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00031590461730957

SELECT *
FROM "obm"
WHERE "id" =  '5' 
 Execution Time:0.00022006034851074

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00033307075500488

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00049209594726562

select * from obm where id in (1,4,5,3,9,7,8,10) 
 Execution Time:0.00045108795166016

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00040197372436523

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00035786628723145

select * from acesso where usuario='2' and obm='5' 
 Execution Time:0.00029897689819336

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00032591819763184

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00035405158996582

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00058603286743164

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00069499015808105

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00038886070251465

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00080990791320801

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00038003921508789

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0004580020904541

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00031208992004395

select * from obm where id='8' limit 1 
 Execution Time:0.00022006034851074

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00046586990356445

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00049901008605957

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00040292739868164

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00055098533630371

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00036907196044922

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0011730194091797

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00039196014404297

select * from obm where id='8' limit 1 
 Execution Time:0.00026893615722656

select * from obm where id='5' limit 1 
 Execution Time:0.00025296211242676

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00059199333190918

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00050592422485352

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00046396255493164

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00089097023010254

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00047516822814941

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00075101852416992

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.0015370845794678

select * from obm where id='8' limit 1 
 Execution Time:0.00043606758117676

select * from obm where id='5' limit 1 
 Execution Time:0.00040388107299805

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.058845996856689

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00063300132751465

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00059080123901367

SELECT *
FROM "usuario" 
 Execution Time:0.00054597854614258

select id from modulo where nome='controledeacesso' order by id asc limit 1 
 Execution Time:0.00038599967956543

select * from acesso where usuario='2' and modulo='17' and nivel>0 
 Execution Time:0.00037002563476562

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029206275939941

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00039887428283691

select * from obm where id in (1,4,5,3,9,7,8,10) 
 Execution Time:0.00025081634521484

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0002741813659668

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00045895576477051

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00038695335388184

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00033283233642578

select id from modulo where nome='controledeacesso' order by id asc limit 1 
 Execution Time:0.00060200691223145

select * from acesso where usuario='2' and modulo='17' and nivel>0 
 Execution Time:0.00063896179199219

SELECT *
FROM "usuario"
WHERE "id" =  '7' 
 Execution Time:0.00045418739318848

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00050806999206543

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00074100494384766

select * from obm where id in (1,4,5,3,9,7,8,10) 
 Execution Time:0.00048494338989258

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0004889965057373

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00046801567077637

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00046801567077637

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00045490264892578

select id from modulo where nome='controledeacesso' order by id asc limit 1 
 Execution Time:0.00044703483581543

select * from acesso where usuario='2' and modulo='17' and nivel>0 
 Execution Time:0.0005040168762207

SELECT *
FROM "usuario"
WHERE "id" =  '7' 
 Execution Time:0.00034999847412109

SELECT *
FROM "obm"
WHERE "id" =  '5' 
 Execution Time:0.00030684471130371

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00034093856811523

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00047898292541504

select * from obm where id in (1,4,5,3,9,7,8,10) 
 Execution Time:0.00032615661621094

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00035214424133301

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00043702125549316

select * from acesso where usuario='7' and obm='5' 
 Execution Time:0.00034189224243164

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00030994415283203

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00029993057250977

select id from modulo where nome='controledeacesso' order by id asc limit 1 
 Execution Time:0.0011091232299805

select * from acesso where usuario='2' and modulo='17' and nivel>0 
 Execution Time:0.00040578842163086

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00035190582275391

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00057601928710938

select * from obm where id in (1,4,5,3,9,7,8,10) 
 Execution Time:0.00029110908508301

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00032401084899902

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00034999847412109

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00043320655822754

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00033688545227051

select id from modulo where nome='controledeacesso' order by id asc limit 1 
 Execution Time:0.00043606758117676

select * from acesso where usuario='2' and modulo='17' and nivel>0 
 Execution Time:0.00036811828613281

SELECT *
FROM "usuario"
WHERE "id" =  '7' 
 Execution Time:0.00027990341186523

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003049373626709

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.0004429817199707

select * from obm where id in (1,4,5,3,9,7,8,10) 
 Execution Time:0.00028896331787109

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00036096572875977

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00030708312988281

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00029110908508301

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00028300285339355

select id from modulo where nome='controledeacesso' order by id asc limit 1 
 Execution Time:0.00059103965759277

select * from acesso where usuario='2' and modulo='17' and nivel>0 
 Execution Time:0.00035786628723145

SELECT *
FROM "usuario"
WHERE "id" =  '7' 
 Execution Time:0.00026798248291016

SELECT *
FROM "obm"
WHERE "id" =  '5' 
 Execution Time:0.00023198127746582

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028491020202637

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00040698051452637

select * from obm where id in (1,4,5,3,9,7,8,10) 
 Execution Time:0.00024199485778809

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00026607513427734

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00028514862060547

select * from acesso where usuario='7' and obm='5' 
 Execution Time:0.00028085708618164

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00036716461181641

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00032210350036621

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0006859302520752

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0005640983581543

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0012362003326416

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0008091926574707

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00035500526428223

select a.obm from acesso as a, modulo as m where usuario='7' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0005040168762207

SELECT * FROM plano WHERE status<4 and status>0 and obm in (4) ORDER BY datainicio DESC 
 Execution Time:0.00037908554077148

select id from modulo where nome='controledeacesso' order by id asc limit 1 
 Execution Time:0.00047183036804199

select * from acesso where usuario='2' and modulo='17' and nivel>0 
 Execution Time:0.00046801567077637

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040411949157715

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00057005882263184

select * from obm where id in (1,4,5,3,9,7,8,10) 
 Execution Time:0.00051784515380859

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00038003921508789

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00040984153747559

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00042200088500977

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.0003669261932373

select id from modulo where nome='controledeacesso' order by id asc limit 1 
 Execution Time:0.00044798851013184

select * from acesso where usuario='2' and modulo='17' and nivel>0 
 Execution Time:0.00045013427734375

SELECT *
FROM "usuario"
WHERE "id" =  '7' 
 Execution Time:0.00038886070251465

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040602684020996

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00047492980957031

select * from obm where id in (1,4,5,3,9,7,8,10) 
 Execution Time:0.00032520294189453

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00035881996154785

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00039887428283691

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00048303604125977

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00047802925109863

select id from modulo where nome='controledeacesso' order by id asc limit 1 
 Execution Time:0.00043797492980957

select * from acesso where usuario='2' and modulo='17' and nivel>0 
 Execution Time:0.00036096572875977

SELECT *
FROM "usuario"
WHERE "id" =  '7' 
 Execution Time:0.00032901763916016

SELECT *
FROM "obm"
WHERE "id" =  '5' 
 Execution Time:0.00029993057250977

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00034618377685547

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00046205520629883

select * from obm where id in (1,4,5,3,9,7,8,10) 
 Execution Time:0.00029993057250977

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00032496452331543

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00039100646972656

select * from acesso where usuario='7' and obm='5' 
 Execution Time:0.00032997131347656

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00031805038452148

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00031709671020508

select id from modulo where nome='controledeacesso' order by id asc limit 1 
 Execution Time:0.00053095817565918

select * from acesso where usuario='2' and modulo='17' and nivel>0 
 Execution Time:0.00056791305541992

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00049090385437012

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00064206123352051

select * from obm where id in (1,4,5,3,9,7,8,10) 
 Execution Time:0.00045299530029297

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00049185752868652

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00051307678222656

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00048685073852539

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00047087669372559

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00043296813964844

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00034403800964355

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00028109550476074

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00060796737670898

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00032305717468262

select a.obm from acesso as a, modulo as m where usuario='7' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00056099891662598

SELECT * FROM plano WHERE status<4 and status>0 and obm in (5,4) ORDER BY datainicio DESC 
 Execution Time:0.00034093856811523

select * from obm where id='5' limit 1 
 Execution Time:0.00024986267089844

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0022850036621094

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.00081491470336914

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.00037598609924316

select * from reprovacao where plano='35'; 
 Execution Time:0.00068998336791992

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0019340515136719

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0005650520324707

select * from planejamento where plano='35' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00072479248046875

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0013461112976074

select origemreceita, sum(valor) from planejamento where plano='35' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00061297416687012

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='35' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00088596343994141

select sum(valor) as total from planejamento where plano='35' and tipo=1 
 Execution Time:0.00030016899108887

select sum(valor) as total from planejamento where plano='35' and tipo=2 
 Execution Time:0.00023412704467773

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00076198577880859

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00080609321594238

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.00068402290344238

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.00061202049255371

select * from reprovacao where plano=0; 
 Execution Time:0.00021505355834961

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00076007843017578

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00033187866210938

select * from planejamento where plano='35' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00035595893859863

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00060009956359863

select origemreceita, sum(valor) from planejamento where plano='35' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00037407875061035

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='35' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00053095817565918

select sum(valor) as total from planejamento where plano='35' and tipo=1 
 Execution Time:0.00027298927307129

select sum(valor) as total from planejamento where plano='35' and tipo=2 
 Execution Time:0.00021696090698242

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00046420097351074

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00033688545227051

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.00024294853210449

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.00021982192993164

select * from reprovacao where plano=0; 
 Execution Time:0.00027012825012207

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00039505958557129

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00027084350585938

select * from planejamento where plano='35' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00029897689819336

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00057101249694824

select origemreceita, sum(valor) from planejamento where plano='35' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00039386749267578

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='35' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00064682960510254

select sum(valor) as total from planejamento where plano='35' and tipo=1 
 Execution Time:0.00030994415283203

select sum(valor) as total from planejamento where plano='35' and tipo=2 
 Execution Time:0.00029397010803223

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00050902366638184

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00091099739074707

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.00054311752319336

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.00065517425537109

select * from reprovacao where plano=0; 
 Execution Time:0.0010459423065186

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0011780261993408

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00072598457336426

select * from planejamento where plano='35' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0011508464813232

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0015521049499512

select origemreceita, sum(valor) from planejamento where plano='35' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.0011169910430908

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='35' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0014431476593018

select sum(valor) as total from planejamento where plano='35' and tipo=1 
 Execution Time:0.00059890747070312

select sum(valor) as total from planejamento where plano='35' and tipo=2 
 Execution Time:0.00058102607727051

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00082802772521973

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00036716461181641

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.00028085708618164

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.0002589225769043

select * from reprovacao where plano=0; 
 Execution Time:0.00023388862609863

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00043106079101562

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00025391578674316

select * from planejamento where plano='35' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00044393539428711

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.000640869140625

select origemreceita, sum(valor) from planejamento where plano='35' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00040388107299805

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='35' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00065898895263672

select sum(valor) as total from planejamento where plano='35' and tipo=1 
 Execution Time:0.00034594535827637

select sum(valor) as total from planejamento where plano='35' and tipo=2 
 Execution Time:0.00025010108947754

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.0005340576171875

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00094413757324219

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.00072097778320312

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.00069093704223633

select * from reprovacao where plano=0; 
 Execution Time:0.0011138916015625

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0011842250823975

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00061607360839844

select * from planejamento where plano='35' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00092196464538574

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0017971992492676

select origemreceita, sum(valor) from planejamento where plano='35' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00073409080505371

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='35' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00077700614929199

select sum(valor) as total from planejamento where plano='35' and tipo=1 
 Execution Time:0.00074505805969238

select sum(valor) as total from planejamento where plano='35' and tipo=2 
 Execution Time:0.00056195259094238

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.0010669231414795

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00069284439086914

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.00045895576477051

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.00042390823364258

select * from reprovacao where plano=0; 
 Execution Time:0.00036501884460449

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00078988075256348

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00047993659973145

select * from planejamento where plano='35' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0006101131439209

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0010261535644531

select origemreceita, sum(valor) from planejamento where plano='35' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00056099891662598

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='35' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0011191368103027

select sum(valor) as total from planejamento where plano='35' and tipo=1 
 Execution Time:0.00050806999206543

select sum(valor) as total from planejamento where plano='35' and tipo=2 
 Execution Time:0.00046086311340332

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00083208084106445

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00045490264892578

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.00029110908508301

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.00025296211242676

select * from reprovacao where plano=0; 
 Execution Time:0.0002899169921875

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00061202049255371

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00045013427734375

select * from planejamento where plano='35' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00081491470336914

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0014247894287109

select origemreceita, sum(valor) from planejamento where plano='35' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.0010790824890137

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='35' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.001554012298584

select sum(valor) as total from planejamento where plano='35' and tipo=1 
 Execution Time:0.0007169246673584

select sum(valor) as total from planejamento where plano='35' and tipo=2 
 Execution Time:0.00066709518432617

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.0009610652923584

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.00049901008605957

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.00042104721069336

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.0003819465637207

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0013530254364014

select nivel from acesso where usuario='7' and modulo='21'  and obm='5' 
 Execution Time:0.00069403648376465

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004270076751709

select * from planejamento where plano='35' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0005500316619873

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00074195861816406

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00046682357788086

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00052094459533691

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00035595893859863

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00050687789916992

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00034189224243164

select a.obm from acesso as a, modulo as m where usuario='7' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00058913230895996

SELECT * FROM plano WHERE status<4 and status>0 and obm in (5,4) ORDER BY datainicio DESC 
 Execution Time:0.00045490264892578

select * from obm where id='5' limit 1 
 Execution Time:0.00034904479980469

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0014309883117676

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00043296813964844

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00030398368835449

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00066900253295898

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00039887428283691

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00045013427734375

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00034999847412109

select * from obm where id='8' limit 1 
 Execution Time:0.00025391578674316

select * from obm where id='5' limit 1 
 Execution Time:0.00024199485778809

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0007939338684082

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00046110153198242

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00040507316589355

select * from reprovacao where plano='31'; 
 Execution Time:0.0006561279296875

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00097298622131348

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00048112869262695

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0010690689086914

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0016360282897949

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00076985359191895

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0011579990386963

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00043606758117676

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00035905838012695

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.0011579990386963

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00064206123352051

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00055193901062012

SELECT *
FROM "obm" 
 Execution Time:0.00039792060852051

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00063705444335938

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00032210350036621

SELECT *
FROM "obm" 
 Execution Time:0.00020885467529297

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0002899169921875

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0011799335479736

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00071191787719727

SELECT *
FROM "obm" 
 Execution Time:0.00051784515380859

select id from modulo where nome='controledeacesso' order by id asc limit 1 
 Execution Time:0.0010068416595459

select * from acesso where usuario='2' and modulo='17' and nivel>0 
 Execution Time:0.00086283683776855

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00039291381835938

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00048589706420898

select * from obm where id in (1,4,5,3,9,7,8,10) 
 Execution Time:0.00034379959106445

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00037479400634766

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00091099739074707

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00036907196044922

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00061583518981934

select id from modulo where nome='controledeacesso' order by id asc limit 1 
 Execution Time:0.00041484832763672

select * from acesso where usuario='2' and modulo='17' and nivel>0 
 Execution Time:0.0004270076751709

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00035715103149414

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00039196014404297

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00039482116699219

select * from obm where id in (1,4,5,3,9,7,8,10) 
 Execution Time:0.00024890899658203

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00028610229492188

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00029420852661133

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00034713745117188

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00035595893859863

select id from modulo where nome='controledeacesso' order by id asc limit 1 
 Execution Time:0.00050711631774902

select * from acesso where usuario='2' and modulo='17' and nivel>0 
 Execution Time:0.00049209594726562

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00040006637573242

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00034594535827637

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041604042053223

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00061702728271484

select * from obm where id in (1,4,5,3,9,7,8,10) 
 Execution Time:0.00038409233093262

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00040793418884277

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00038886070251465

select * from acesso where usuario='2' and obm='3' 
 Execution Time:0.0004580020904541

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.0003969669342041

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.0004270076751709

select id from modulo where nome='controledeacesso' order by id asc limit 1 
 Execution Time:0.00050902366638184

select * from acesso where usuario='2' and modulo='17' and nivel>0 
 Execution Time:0.00054502487182617

SELECT *
FROM "usuario"
WHERE "id" =  '7' 
 Execution Time:0.00040984153747559

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0003669261932373

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00056314468383789

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.0006411075592041

select * from obm where id in (1,4,5,3,9,7,8,10) 
 Execution Time:0.00038313865661621

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00047087669372559

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00050091743469238

select * from acesso where usuario='7' and obm='3' 
 Execution Time:0.00035595893859863

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00044584274291992

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00043416023254395

select id from modulo where nome='controledeacesso' order by id asc limit 1 
 Execution Time:0.00047898292541504

select * from acesso where usuario='2' and modulo='17' and nivel>0 
 Execution Time:0.00046896934509277

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.0003659725189209

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00033807754516602

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00036096572875977

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00050997734069824

select * from obm where id in (1,4,5,3,9,7,8,10) 
 Execution Time:0.00032711029052734

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00035381317138672

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00035405158996582

select * from acesso where usuario='6' and obm='3' 
 Execution Time:0.00036001205444336

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00035810470581055

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00035500526428223

select id from modulo where nome='controledeacesso' order by id asc limit 1 
 Execution Time:0.00038313865661621

select * from acesso where usuario='2' and modulo='17' and nivel>0 
 Execution Time:0.0003349781036377

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00034904479980469

SELECT *
FROM "obm"
WHERE "id" =  '5' 
 Execution Time:0.00023412704467773

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028109550476074

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00041103363037109

select * from obm where id in (1,4,5,3,9,7,8,10) 
 Execution Time:0.00025105476379395

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00026512145996094

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00026798248291016

select * from acesso where usuario='6' and obm='5' 
 Execution Time:0.00024294853210449

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00028705596923828

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00039005279541016

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00057291984558105

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00046992301940918

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00054788589477539

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0013980865478516

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00043392181396484

select a.obm from acesso as a, modulo as m where usuario='6' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00049090385437012

SELECT * FROM plano WHERE status<4 and status>0 and obm in (8) ORDER BY datainicio DESC 
 Execution Time:0.00037407875061035

select * from obm where id='8' limit 1 
 Execution Time:0.00035381317138672

select id from modulo where nome='controledeacesso' order by id asc limit 1 
 Execution Time:0.00044012069702148

select * from acesso where usuario='2' and modulo='17' and nivel>0 
 Execution Time:0.00040698051452637

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003972053527832

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.0005040168762207

select * from obm where id in (1,4,5,3,9,7,8,10) 
 Execution Time:0.00034618377685547

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0003821849822998

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00091195106506348

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00046205520629883

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00039315223693848

select id from modulo where nome='controledeacesso' order by id asc limit 1 
 Execution Time:0.00054311752319336

select * from acesso where usuario='2' and modulo='17' and nivel>0 
 Execution Time:0.00057101249694824

SELECT *
FROM "usuario"
WHERE "id" =  '7' 
 Execution Time:0.00045680999755859

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00089001655578613

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00072908401489258

select * from obm where id in (1,4,5,3,9,7,8,10) 
 Execution Time:0.00042605400085449

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00049591064453125

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00053095817565918

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.0004889965057373

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00046300888061523

select id from modulo where nome='controledeacesso' order by id asc limit 1 
 Execution Time:0.00050997734069824

select * from acesso where usuario='2' and modulo='17' and nivel>0 
 Execution Time:0.001317024230957

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.0003511905670166

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00031709671020508

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00039315223693848

select * from obm where id in (1,4,5,3,9,7,8,10) 
 Execution Time:0.00025510787963867

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00029301643371582

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0004279613494873

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00041103363037109

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.0004270076751709

select id from modulo where nome='controledeacesso' order by id asc limit 1 
 Execution Time:0.0003960132598877

select * from acesso where usuario='2' and modulo='17' and nivel>0 
 Execution Time:0.00033092498779297

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00027704238891602

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00054287910461426

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029587745666504

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00039792060852051

select * from obm where id in (1,4,5,3,9,7,8,10) 
 Execution Time:0.00025606155395508

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00028014183044434

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0002739429473877

select * from acesso where usuario='6' and obm='8' 
 Execution Time:0.00024580955505371

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00027108192443848

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.0002748966217041

select id from modulo where nome='controledeacesso' order by id asc limit 1 
 Execution Time:0.0011200904846191

select * from acesso where usuario='2' and modulo='17' and nivel>0 
 Execution Time:0.00040578842163086

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00051593780517578

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00037598609924316

select * from obm where id in (1,4,5,3,9,7,8,10) 
 Execution Time:0.00022482872009277

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00036406517028809

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0004570484161377

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00024509429931641

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00023603439331055

select * from plano where status=4 order by datainicio DESC, datafim DESC 
 Execution Time:0.00048112869262695

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00031590461730957

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00030398368835449

select * from plano where status=4 and obm='3' order by datainicio DESC, datafim DESC 
 Execution Time:0.00049519538879395

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00031900405883789

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00031805038452148

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00039100646972656

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00024986267089844

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00026988983154297

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00042891502380371

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028300285339355

select * from planejamento where plano='18' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00033402442932129

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00027894973754883

select origemreceita, sum(valor) from planejamento where plano='18' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00031208992004395

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='18' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0006711483001709

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='18' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00070500373840332

select sum(valor) as total from planejamento where plano='18' and tipo=1 
 Execution Time:0.00027108192443848

select sum(valor) as total from planejamento where plano='18' and tipo=2 
 Execution Time:0.00024795532226562

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00057792663574219

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00047898292541504

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00047111511230469

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00087285041809082

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00055909156799316

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00068998336791992

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00067996978759766

select * from obm where id='8' limit 1 
 Execution Time:0.00040578842163086

select * from obm where id='5' limit 1 
 Execution Time:0.0010631084442139

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.00037288665771484

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.00027012825012207

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00030112266540527

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0004570484161377

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0002751350402832

select * from planejamento where plano='35' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00033307075500488

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00027012825012207

select origemreceita, sum(valor) from planejamento where plano='35' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.0002899169921875

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='35' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00057482719421387

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='35' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00048995018005371

select sum(valor) as total from planejamento where plano='35' and tipo=1 
 Execution Time:0.00026297569274902

select sum(valor) as total from planejamento where plano='35' and tipo=2 
 Execution Time:0.00026988983154297

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0027151107788086

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0017039775848389

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0012748241424561

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00095391273498535

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040102005004883

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00084805488586426

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.0011429786682129

select * from obm where id='8' limit 1 
 Execution Time:0.0003199577331543

select * from obm where id='5' limit 1 
 Execution Time:0.00028896331787109

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00049304962158203

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00029206275939941

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00054097175598145

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00058197975158691

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00026917457580566

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00061202049255371

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00028300285339355

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00045108795166016

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00075006484985352

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='31' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00052595138549805

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00025701522827148

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00023794174194336

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0026681423187256

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00077700614929199

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00046491622924805

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00036096572875977

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00043487548828125

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00077605247497559

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00046396255493164

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00050592422485352

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00045490264892578

select * from obm where id='8' limit 1 
 Execution Time:0.00025105476379395

select * from obm where id='5' limit 1 
 Execution Time:0.00029516220092773

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00039100646972656

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00028896331787109

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00027203559875488

select * from reprovacao where plano='31'; 
 Execution Time:0.00034093856811523

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00044107437133789

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00027179718017578

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00035691261291504

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00064206123352051

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.0004880428314209

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00061607360839844

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00025510787963867

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00023579597473145

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00054287910461426

select id from modulo where nome='controledeacesso' order by id asc limit 1 
 Execution Time:0.0021400451660156

select * from acesso where usuario='2' and modulo='17' and nivel>0 
 Execution Time:0.00061202049255371

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029301643371582

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00048613548278809

select * from obm where id in (1,4,5,3,9,7,8,10) 
 Execution Time:0.00028204917907715

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00049901008605957

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00082087516784668

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00034308433532715

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00067996978759766

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0025668144226074

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0015499591827393

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00083398818969727

SELECT *
FROM "usuario" 
 Execution Time:0.00083303451538086

select id from modulo where nome='controledeacesso' order by id asc limit 1 
 Execution Time:0.0009758472442627

select * from acesso where usuario='2' and modulo='17' and nivel>0 
 Execution Time:0.0006098747253418

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00032186508178711

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00049781799316406

select * from obm where id in (1,4,5,3,9,7,8,10) 
 Execution Time:0.00029492378234863

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00030112266540527

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00071310997009277

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00035190582275391

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00031495094299316

select id from modulo where nome='controledeacesso' order by id asc limit 1 
 Execution Time:0.0027859210968018

select * from acesso where usuario='2' and modulo='17' and nivel>0 
 Execution Time:0.001039981842041

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0010089874267578

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00065994262695312

select * from obm where id in (1,4,5,3,9,7,8,10) 
 Execution Time:0.0004889965057373

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00072503089904785

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0022380352020264

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00055098533630371

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00049400329589844

select id from modulo where nome='controledeacesso' order by id asc limit 1 
 Execution Time:0.0027129650115967

select * from acesso where usuario='2' and modulo='17' and nivel>0 
 Execution Time:0.0012280941009521

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00098395347595215

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00057196617126465

select * from obm where id in (1,4,5,3,9,7,8,10) 
 Execution Time:0.0003201961517334

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00056695938110352

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.000885009765625

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00067400932312012

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00081014633178711

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.00072598457336426

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.00088906288146973

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.0010840892791748

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00056695938110352

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004880428314209

SELECT *
FROM "obm" 
 Execution Time:0.00034189224243164

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00049591064453125

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00034904479980469

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00033092498779297

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00053501129150391

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00037884712219238

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00070977210998535

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.0003659725189209

select * from obm where id='8' limit 1 
 Execution Time:0.0002448558807373

select * from obm where id='5' limit 1 
 Execution Time:0.00023198127746582

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00041103363037109

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00043797492980957

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00026202201843262

select * from reprovacao where plano='31'; 
 Execution Time:0.00023007392883301

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00040984153747559

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028800964355469

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00035905838012695

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00058794021606445

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00035190582275391

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00059413909912109

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00025486946105957

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00023293495178223

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00042891502380371

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00061488151550293

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00039887428283691

SELECT *
FROM "obm" 
 Execution Time:0.00022697448730469

select id from modulo where nome='controledeacesso' order by id asc limit 1 
 Execution Time:0.00047397613525391

select * from acesso where usuario='2' and modulo='17' and nivel>0 
 Execution Time:0.00044798851013184

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00036978721618652

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.0004880428314209

select * from obm where id in (1,4,5,3,9,7,8,10) 
 Execution Time:0.00029587745666504

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00038313865661621

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00037813186645508

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00038790702819824

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00072383880615234

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00063395500183105

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00053215026855469

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00090694427490234

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0014200210571289

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00048398971557617

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00069713592529297

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00048398971557617

select * from obm where id='8' limit 1 
 Execution Time:0.00034093856811523

select * from obm where id='5' limit 1 
 Execution Time:0.00053310394287109

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00040316581726074

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00028204917907715

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00025200843811035

select * from reprovacao where plano='31'; 
 Execution Time:0.00024199485778809

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00049495697021484

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00044012069702148

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00048303604125977

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00060200691223145

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.0003669261932373

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00082707405090332

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00038790702819824

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00038599967956543

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00065088272094727

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.00053501129150391

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.00080084800720215

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00098180770874023

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00042819976806641

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028610229492188

SELECT *
FROM "obm" 
 Execution Time:0.00021696090698242

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00062108039855957

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00030994415283203

SELECT *
FROM "obm" 
 Execution Time:0.0002591609954834

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0004119873046875

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028300285339355

SELECT *
FROM "obm" 
 Execution Time:0.00021100044250488

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00042581558227539

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00031399726867676

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00034689903259277

SELECT *
FROM "usuario" 
 Execution Time:0.00024604797363281

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00041699409484863

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029611587524414

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00027608871459961

SELECT *
FROM "usuario" 
 Execution Time:0.00023293495178223

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00059103965759277

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00030207633972168

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00027894973754883

SELECT *
FROM "usuario" 
 Execution Time:0.00021696090698242

select id from modulo where nome='controledeacesso' order by id asc limit 1 
 Execution Time:0.00056099891662598

select * from acesso where usuario='2' and modulo='17' and nivel>0 
 Execution Time:0.00052595138549805

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0007479190826416

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.0014920234680176

select * from obm where id in (1,4,5,3,9,7,8,10) 
 Execution Time:0.00051403045654297

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00041294097900391

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00042009353637695

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.0004279613494873

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00041699409484863

SELECT *
FROM "setor"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0019819736480713

SELECT *
FROM "setor"
ORDER BY "nome" 
 Execution Time:0.00053691864013672

SELECT *
FROM "setor"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00085711479187012

SELECT *
FROM "subsetor"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00074100494384766

SELECT *
FROM "subsetor" 
 Execution Time:0.00034618377685547

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00042295455932617

SELECT *
FROM "postograd"
ORDER BY "nome" 
 Execution Time:0.00030994415283203

SELECT *
FROM "modulo"
ORDER BY "nome" ASC 
 Execution Time:0.00040817260742188

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00045895576477051

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00033783912658691

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0002591609954834

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0004730224609375

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00030016899108887

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00059604644775391

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00041604042053223

select * from obm where id='8' limit 1 
 Execution Time:0.00059103965759277

select * from obm where id='5' limit 1 
 Execution Time:0.00028300285339355

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00046586990356445

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00031304359436035

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00028491020202637

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00045490264892578

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029301643371582

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00065898895263672

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00041007995605469

select * from obm where id='8' limit 1 
 Execution Time:0.00031495094299316

select * from obm where id='5' limit 1 
 Execution Time:0.00034308433532715

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0013160705566406

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00054693222045898

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00076794624328613

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00047707557678223

select * from plano where status=4 order by datainicio DESC, datafim DESC 
 Execution Time:0.00096416473388672

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00074291229248047

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00094103813171387

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00067305564880371

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0006568431854248

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00049209594726562

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0010929107666016

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00039386749267578

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00050592422485352

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00083112716674805

select * from obm where id='8' limit 1 
 Execution Time:0.00035214424133301

select * from obm where id='5' limit 1 
 Execution Time:0.00042390823364258

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.00067591667175293

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.00033998489379883

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.00030708312988281

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0003209114074707

select nivel from acesso where usuario='2' and modulo='21'  and obm='5' 
 Execution Time:0.00033187866210938

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003361701965332

select * from planejamento where plano='35' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00081801414489746

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0020029544830322

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0010929107666016

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00065708160400391

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00074291229248047

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0025680065155029

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00050687789916992

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00061607360839844

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.0008549690246582

select * from obm where id='8' limit 1 
 Execution Time:0.0003509521484375

select * from obm where id='5' limit 1 
 Execution Time:0.00032901763916016

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00060296058654785

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00042104721069336

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00028395652770996

select * from reprovacao where plano='31'; 
 Execution Time:0.00044012069702148

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00068402290344238

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029492378234863

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00062298774719238

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00069499015808105

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00046300888061523

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00084519386291504

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00030994415283203

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00036501884460449

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00075197219848633

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0005030632019043

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00040698051452637

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00037598609924316

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00039196014404297

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00038290023803711

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00043702125549316

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00059819221496582

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00064611434936523

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0010619163513184

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00067782402038574

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00087594985961914

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00080704689025879

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00056314468383789

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0012919902801514

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.0010771751403809

select * from obm where id='8' limit 1 
 Execution Time:0.00052881240844727

select * from obm where id='5' limit 1 
 Execution Time:0.00044107437133789

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.00039911270141602

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.00043296813964844

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00051689147949219

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00074100494384766

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00057792663574219

SELECT *
FROM "obm" 
 Execution Time:0.00049781799316406

select id from modulo where nome='controledeacesso' order by id asc limit 1 
 Execution Time:0.00040984153747559

select * from acesso where usuario='2' and modulo='17' and nivel>0 
 Execution Time:0.0003809928894043

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00034403800964355

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00043702125549316

select * from obm where id in (1,4,5,3,9,7,8,10) 
 Execution Time:0.00028800964355469

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00033807754516602

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00037097930908203

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.0003199577331543

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00058507919311523

select id from modulo where nome='controledeacesso' order by id asc limit 1 
 Execution Time:0.0016210079193115

select * from acesso where usuario='2' and modulo='17' and nivel>0 
 Execution Time:0.00095200538635254

SELECT *
FROM "usuario"
WHERE "id" =  '7' 
 Execution Time:0.00046706199645996

SELECT *
FROM "obm"
WHERE "id" =  '1' 
 Execution Time:0.00036787986755371

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00047492980957031

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00076413154602051

select * from obm where id in (1,4,5,3,9,7,8,10) 
 Execution Time:0.0004279613494873

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00049614906311035

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00031399726867676

select * from acesso where usuario='7' and obm='1' 
 Execution Time:0.00024795532226562

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00028514862060547

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00030803680419922

select id from modulo where nome='controledeacesso' order by id asc limit 1 
 Execution Time:0.0003969669342041

select * from acesso where usuario='2' and modulo='17' and nivel>0 
 Execution Time:0.00034093856811523

SELECT *
FROM "usuario"
WHERE "id" =  '7' 
 Execution Time:0.00026798248291016

SELECT *
FROM "obm"
WHERE "id" =  '5' 
 Execution Time:0.00022292137145996

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00027704238891602

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00040984153747559

select * from obm where id in (1,4,5,3,9,7,8,10) 
 Execution Time:0.00027894973754883

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00030279159545898

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00028109550476074

select * from acesso where usuario='7' and obm='5' 
 Execution Time:0.000244140625

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00026798248291016

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00026702880859375

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0006711483001709

SELECT *
FROM "origemreceita" 
 Execution Time:0.0004580020904541

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00054001808166504

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00047183036804199

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00063586235046387

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0011889934539795

SELECT *
FROM "especificacao"
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0014410018920898

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00049710273742676

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00030303001403809

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00026297569274902

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00047087669372559

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029587745666504

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00042891502380371

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00033116340637207

select * from obm where id='8' limit 1 
 Execution Time:0.00023412704467773

select * from obm where id='5' limit 1 
 Execution Time:0.00024294853210449

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00044703483581543

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00036001205444336

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00029611587524414

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00052690505981445

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00034904479980469

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00058293342590332

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00039505958557129

select * from obm where id='8' limit 1 
 Execution Time:0.00029706954956055

select * from obm where id='5' limit 1 
 Execution Time:0.00026202201843262

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00053501129150391

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00041508674621582

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00032401084899902

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0005338191986084

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00035619735717773

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00049519538879395

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00040698051452637

select * from obm where id='8' limit 1 
 Execution Time:0.00030899047851562

select * from obm where id='5' limit 1 
 Execution Time:0.0003349781036377

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00038599967956543

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00028800964355469

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00039792060852051

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00050997734069824

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029516220092773

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00036406517028809

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0002739429473877

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00030708312988281

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00062108039855957

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='31' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00054502487182617

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00028514862060547

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00025200843811035

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00069689750671387

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00046515464782715

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00029802322387695

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00055813789367676

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00092196464538574

select a.obm from acesso as a, modulo as m where usuario='7' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00097298622131348

SELECT * FROM plano WHERE status<4 and status>0 and obm in (5,4) ORDER BY datainicio DESC 
 Execution Time:0.0003511905670166

select * from obm where id='5' limit 1 
 Execution Time:0.00025320053100586

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.00040006637573242

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.00030112266540527

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00029587745666504

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00042986869812012

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029110908508301

select * from planejamento where plano='35' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00049901008605957

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00034809112548828

select origemreceita, sum(valor) from planejamento where plano='35' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00032782554626465

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='35' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00059294700622559

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='35' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00051093101501465

select sum(valor) as total from planejamento where plano='35' and tipo=1 
 Execution Time:0.00027608871459961

select sum(valor) as total from planejamento where plano='35' and tipo=2 
 Execution Time:0.00023293495178223

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00085711479187012

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00033998489379883

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00026702880859375

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00049209594726562

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029397010803223

select a.obm from acesso as a, modulo as m where usuario='7' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0004119873046875

SELECT * FROM plano WHERE status<4 and status>0 and obm in (5,4) ORDER BY datainicio DESC 
 Execution Time:0.00031018257141113

select * from obm where id='5' limit 1 
 Execution Time:0.0002281665802002

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0004580020904541

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.00029706954956055

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.00024604797363281

select * from reprovacao where plano='35'; 
 Execution Time:0.00022006034851074

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00042009353637695

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028395652770996

select * from planejamento where plano='35' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00037097930908203

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00060677528381348

select origemreceita, sum(valor) from planejamento where plano='35' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00037908554077148

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='35' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00057506561279297

select sum(valor) as total from planejamento where plano='35' and tipo=1 
 Execution Time:0.00027585029602051

select sum(valor) as total from planejamento where plano='35' and tipo=2 
 Execution Time:0.00023508071899414

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00040197372436523

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00086712837219238

SELECT *
FROM "origemreceita" 
 Execution Time:0.00038003921508789

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00049495697021484

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0003809928894043

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00034093856811523

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00054216384887695

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00035905838012695

select a.obm from acesso as a, modulo as m where usuario='7' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00057291984558105

SELECT * FROM plano WHERE status<4 and status>0 and obm in (5,4) ORDER BY datainicio DESC 
 Execution Time:0.00039005279541016

select * from obm where id='5' limit 1 
 Execution Time:0.00035285949707031

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00040197372436523

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.00030899047851562

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.0002439022064209

select * from reprovacao where plano='35'; 
 Execution Time:0.0002131462097168

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00046610832214355

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040102005004883

select * from planejamento where plano='35' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00036716461181641

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00066900253295898

select origemreceita, sum(valor) from planejamento where plano='35' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00033307075500488

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='35' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00068807601928711

select sum(valor) as total from planejamento where plano='35' and tipo=1 
 Execution Time:0.00025796890258789

select sum(valor) as total from planejamento where plano='35' and tipo=2 
 Execution Time:0.00023388862609863

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00044894218444824

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00059914588928223

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00049209594726562

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0004420280456543

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00091409683227539

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00033998489379883

select a.obm from acesso as a, modulo as m where usuario='7' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00043797492980957

SELECT * FROM plano WHERE status<4 and status>0 and obm in (5,4) ORDER BY datainicio DESC 
 Execution Time:0.00039196014404297

select * from obm where id='5' limit 1 
 Execution Time:0.00083208084106445

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00045013427734375

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.00032782554626465

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.00026106834411621

select * from reprovacao where plano='35'; 
 Execution Time:0.0002288818359375

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00057101249694824

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00033187866210938

select * from planejamento where plano='35' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00036120414733887

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00053882598876953

select origemreceita, sum(valor) from planejamento where plano='35' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.0003049373626709

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='35' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00058317184448242

select sum(valor) as total from planejamento where plano='35' and tipo=1 
 Execution Time:0.00026202201843262

select sum(valor) as total from planejamento where plano='35' and tipo=2 
 Execution Time:0.0002589225769043

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00046706199645996

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0004270076751709

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00036406517028809

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00039005279541016

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0008089542388916

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040006637573242

select a.obm from acesso as a, modulo as m where usuario='7' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00052881240844727

SELECT * FROM plano WHERE status<4 and status>0 and obm in (5,4) ORDER BY datainicio DESC 
 Execution Time:0.00047206878662109

select * from obm where id='5' limit 1 
 Execution Time:0.0011649131774902

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00045585632324219

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00035309791564941

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00028896331787109

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00052404403686523

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00048613548278809

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00057888031005859

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00038385391235352

select * from obm where id='8' limit 1 
 Execution Time:0.00026416778564453

select * from obm where id='5' limit 1 
 Execution Time:0.00025296211242676

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00040507316589355

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.00032210350036621

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.00029206275939941

select * from reprovacao where plano='35'; 
 Execution Time:0.00026488304138184

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00050687789916992

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00039100646972656

select * from planejamento where plano='35' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00041699409484863

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00058484077453613

select origemreceita, sum(valor) from planejamento where plano='35' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00035881996154785

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='35' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00086402893066406

select sum(valor) as total from planejamento where plano='35' and tipo=1 
 Execution Time:0.00043201446533203

select sum(valor) as total from planejamento where plano='35' and tipo=2 
 Execution Time:0.00037813186645508

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00064897537231445

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00036811828613281

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.00027918815612793

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.00025010108947754

select * from reprovacao where plano=0; 
 Execution Time:0.00035595893859863

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00050115585327148

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00035405158996582

select * from planejamento where plano='35' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00043702125549316

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00066304206848145

select origemreceita, sum(valor) from planejamento where plano='35' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00042009353637695

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='35' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00061893463134766

select sum(valor) as total from planejamento where plano='35' and tipo=1 
 Execution Time:0.00027585029602051

select sum(valor) as total from planejamento where plano='35' and tipo=2 
 Execution Time:0.00035405158996582

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00051593780517578

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00049090385437012

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00036191940307617

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00035905838012695

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00055599212646484

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00039005279541016

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00048208236694336

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00039982795715332

select * from obm where id='8' limit 1 
 Execution Time:0.00033903121948242

select * from obm where id='5' limit 1 
 Execution Time:0.00073814392089844

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00042104721069336

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.00039911270141602

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.00028300285339355

select * from reprovacao where plano='35'; 
 Execution Time:0.00040602684020996

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0006110668182373

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040602684020996

select * from planejamento where plano='35' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00070691108703613

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00072407722473145

select origemreceita, sum(valor) from planejamento where plano='35' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00053000450134277

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='35' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00071406364440918

select sum(valor) as total from planejamento where plano='35' and tipo=1 
 Execution Time:0.00029611587524414

select sum(valor) as total from planejamento where plano='35' and tipo=2 
 Execution Time:0.00026297569274902

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00065207481384277

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00050091743469238

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00038480758666992

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0008089542388916

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0011320114135742

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00033211708068848

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00042605400085449

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00033020973205566

select * from obm where id='8' limit 1 
 Execution Time:0.00024008750915527

select * from obm where id='5' limit 1 
 Execution Time:0.00022792816162109

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00096511840820312

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.00041699409484863

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.00029397010803223

select * from reprovacao where plano='35'; 
 Execution Time:0.00020599365234375

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00040483474731445

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0002598762512207

select * from planejamento where plano='35' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00036001205444336

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00062012672424316

select origemreceita, sum(valor) from planejamento where plano='35' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00036883354187012

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='35' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00062704086303711

select sum(valor) as total from planejamento where plano='35' and tipo=1 
 Execution Time:0.00033307075500488

select sum(valor) as total from planejamento where plano='35' and tipo=2 
 Execution Time:0.00024890899658203

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00043392181396484

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00066781044006348

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00060081481933594

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0005490779876709

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00072407722473145

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00056600570678711

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00072884559631348

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00062108039855957

select * from obm where id='8' limit 1 
 Execution Time:0.00051093101501465

select * from obm where id='1' limit 1 
 Execution Time:0.00038409233093262

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.00088906288146973

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.00037193298339844

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.0003199577331543

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00032806396484375

select nivel from acesso where usuario='2' and modulo='21'  and obm='5' 
 Execution Time:0.00032496452331543

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00035691261291504

select * from planejamento where plano='35' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00084710121154785

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00099897384643555

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00055313110351562

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00095200538635254

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00085711479187012

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.001561164855957

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00070691108703613

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00098204612731934

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00099587440490723

select * from obm where id='8' limit 1 
 Execution Time:0.00095701217651367

select * from obm where id='5' limit 1 
 Execution Time:0.00079679489135742

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00041913986206055

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.00035190582275391

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.00027012825012207

select * from reprovacao where plano='35'; 
 Execution Time:0.00028300285339355

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00042891502380371

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040197372436523

select * from planejamento where plano='35' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00047802925109863

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0007021427154541

select origemreceita, sum(valor) from planejamento where plano='35' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00032711029052734

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='35' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00057888031005859

select sum(valor) as total from planejamento where plano='35' and tipo=1 
 Execution Time:0.00025486946105957

select sum(valor) as total from planejamento where plano='35' and tipo=2 
 Execution Time:0.00025010108947754

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00044894218444824

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00079822540283203

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0010650157928467

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00087809562683105

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0011470317840576

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00064587593078613

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00096702575683594

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00037598609924316

select * from obm where id='8' limit 1 
 Execution Time:0.00030994415283203

select * from obm where id='1' limit 1 
 Execution Time:0.00032401084899902

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0005040168762207

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00052189826965332

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.001121997833252

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00057888031005859

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00043296813964844

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00052404403686523

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.0003960132598877

select * from obm where id='8' limit 1 
 Execution Time:0.00029587745666504

select * from obm where id='1' limit 1 
 Execution Time:0.00028896331787109

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00046682357788086

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00039315223693848

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00033116340637207

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00055599212646484

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00036501884460449

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00051093101501465

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00042200088500977

select * from obm where id='8' limit 1 
 Execution Time:0.00030994415283203

select * from obm where id='1' limit 1 
 Execution Time:0.00029420852661133

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0012950897216797

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00040698051452637

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00028395652770996

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00054097175598145

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00038790702819824

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00053787231445312

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00040292739868164

select * from obm where id='8' limit 1 
 Execution Time:0.00030684471130371

select * from obm where id='1' limit 1 
 Execution Time:0.0003049373626709

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00053596496582031

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00047111511230469

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00062298774719238

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00095796585083008

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00061583518981934

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00096607208251953

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00069403648376465

select * from obm where id='8' limit 1 
 Execution Time:0.0005040168762207

select * from plano where status=4 order by datainicio DESC, datafim DESC 
 Execution Time:0.00055193901062012

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00034785270690918

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00064992904663086

select * from plano where status=4 and obm='5' order by datainicio DESC, datafim DESC 
 Execution Time:0.00058412551879883

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00034308433532715

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00043916702270508

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.00052094459533691

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.0003960132598877

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0003809928894043

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00066494941711426

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00047087669372559

select * from planejamento where plano='35' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00060200691223145

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00045204162597656

select origemreceita, sum(valor) from planejamento where plano='35' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00049304962158203

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='35' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0010280609130859

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='35' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00086116790771484

select sum(valor) as total from planejamento where plano='35' and tipo=1 
 Execution Time:0.00044703483581543

select sum(valor) as total from planejamento where plano='35' and tipo=2 
 Execution Time:0.00036811828613281

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00076699256896973

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0011870861053467

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00079011917114258

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004889965057373

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00035285949707031

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00032210350036621

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00031805038452148

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.0003049373626709

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00028800964355469

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00031208992004395

SELECT *
FROM "obm"
WHERE "id" =  11 
 Execution Time:0.00033020973205566

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00034308433532715

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00029301643371582

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00023007392883301

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (9,11) and pj.dataprevista between '2017-01-01' and '2017-12-31' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.03581690788269

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (9,11) and pj.dataprevista between '2017-01-01' and '2017-12-31' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0011038780212402

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00036406517028809

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00079894065856934

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00048398971557617

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00036406517028809

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00033092498779297

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00031518936157227

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00030112266540527

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00031805038452148

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00034189224243164

SELECT *
FROM "obm"
WHERE "id" =  11 
 Execution Time:0.00030899047851562

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00029301643371582

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00029301643371582

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00031018257141113

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (5) and pj.dataprevista between '2017-01-01' and '2017-12-31' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.002410888671875

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (5) and pj.dataprevista between '2017-01-01' and '2017-12-31' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0019769668579102

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00049805641174316

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00045919418334961

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00048398971557617

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040888786315918

SELECT *
FROM "obm" 
 Execution Time:0.00028204917907715

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00037598609924316

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00037908554077148

SELECT *
FROM "obm" 
 Execution Time:0.00036382675170898

SELECT *
FROM "obm"
WHERE "id" =  '5' 
 Execution Time:0.0003960132598877

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00044417381286621

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028800964355469

SELECT *
FROM "obm" 
 Execution Time:0.00021505355834961

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00094008445739746

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003969669342041

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00065803527832031

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00044894218444824

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00031089782714844

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00032591819763184

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00030303001403809

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00029897689819336

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00029397010803223

SELECT *
FROM "obm"
WHERE "id" =  11 
 Execution Time:0.0003058910369873

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.0003049373626709

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00027608871459961

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00028514862060547

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.0002899169921875

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00029993057250977

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (9,11,5) and pj.dataprevista between '2017-01-01' and '2017-12-31' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0021929740905762

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (9,11,5) and pj.dataprevista between '2017-01-01' and '2017-12-31' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0013880729675293

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00033092498779297

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028800964355469

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00058507919311523

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00034689903259277

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00024509429931641

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00022292137145996

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00022006034851074

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00021791458129883

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.0002131462097168

SELECT *
FROM "obm"
WHERE "id" =  11 
 Execution Time:0.0002129077911377

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00025606155395508

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00021505355834961

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00021100044250488

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00020003318786621

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00020599365234375

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (9,11,5) and pj.dataprevista between '2017-01-01' and '2017-12-31' and pn.status=4 and e.id='9' order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0017530918121338

select obm, sum(valor) from (select o.nome as obm, pj.valor as valor from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (9,11,5) and pj.dataprevista between '2017-01-01' and '2017-12-31' and pn.status=4 and e.id='9' order by o.nome asc, tipo asc, origemreceita asc) as resultado group by obm 
 Execution Time:0.0012500286102295

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (9,11,5) and pj.dataprevista between '2017-01-01' and '2017-12-31' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.00152587890625

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00058102607727051

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00038290023803711

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.000823974609375

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00059914588928223

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00035500526428223

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.0003199577331543

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.0003058910369873

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00032806396484375

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00036191940307617

SELECT *
FROM "obm"
WHERE "id" =  11 
 Execution Time:0.00032687187194824

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00029587745666504

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00032496452331543

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00030899047851562

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00025606155395508

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00030708312988281

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (1,4,10,8,3,9,11,5,7) and pj.dataprevista between '2017-01-01' and '2017-12-31' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0031330585479736

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (1,4,10,8,3,9,11,5,7) and pj.dataprevista between '2017-01-01' and '2017-12-31' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0025620460510254

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00064897537231445

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0016040802001953

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0007939338684082

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00048494338989258

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00030303001403809

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00033307075500488

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00032210350036621

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00036001205444336

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00034189224243164

SELECT *
FROM "obm"
WHERE "id" =  11 
 Execution Time:0.0003349781036377

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00032997131347656

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00031399726867676

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00029897689819336

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00032901763916016

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00030899047851562

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (1,4,10,8,3,9,11,5,7) and pj.dataprevista between '2017-01-01' and '2017-12-31' and pn.status=4 and e.id='9' order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0018839836120605

select obm, sum(valor) from (select o.nome as obm, pj.valor as valor from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (1,4,10,8,3,9,11,5,7) and pj.dataprevista between '2017-01-01' and '2017-12-31' and pn.status=4 and e.id='9' order by o.nome asc, tipo asc, origemreceita asc) as resultado group by obm 
 Execution Time:0.0018670558929443

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (1,4,10,8,3,9,11,5,7) and pj.dataprevista between '2017-01-01' and '2017-12-31' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0019900798797607

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0003969669342041

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00032281875610352

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00064492225646973

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00038003921508789

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00025391578674316

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00023484230041504

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00024604797363281

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00020909309387207

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00021004676818848

SELECT *
FROM "obm"
WHERE "id" =  11 
 Execution Time:0.00021719932556152

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00023293495178223

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00021100044250488

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00020694732666016

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.0002140998840332

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00021600723266602

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (1,4,10,8,3,9,11,5,7) and pj.dataprevista between '2017-01-01' and '2017-12-31' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.002000093460083

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (1,4,10,8,3,9,11,5,7) and pj.dataprevista between '2017-01-01' and '2017-12-31' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0017859935760498

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0004119873046875

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003669261932373

