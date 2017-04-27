SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.20501494407654

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.080096960067749

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.051735877990723

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.16056108474731

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.033123970031738

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00067400932312012

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.12139797210693

select * from obm where id='8' limit 1 
 Execution Time:0.046669006347656

select * from obm where id='4' limit 1 
 Execution Time:0.00034809112548828

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0026030540466309

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0012779235839844

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0016138553619385

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.002216100692749

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00097894668579102

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0019979476928711

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.0010378360748291

select * from obm where id='8' limit 1 
 Execution Time:0.00042605400085449

select * from obm where id='4' limit 1 
 Execution Time:0.00038599967956543

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0014140605926514

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00031590461730957

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00023102760314941

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0011558532714844

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00045514106750488

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0011100769042969

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.23873615264893

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.033799171447754

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00076389312744141

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0003211498260498

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00029206275939941

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0005648136138916

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00046610832214355

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00067400932312012

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00084304809570312

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00070405006408691

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0013260841369629

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00053501129150391

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00055813789367676

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00076913833618164

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00047898292541504

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0005030632019043

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00092601776123047

select * from obm where id='8' limit 1 
 Execution Time:0.00030684471130371

select * from obm where id='4' limit 1 
 Execution Time:0.00027894973754883

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00049495697021484

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00031709671020508

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0003509521484375

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0003359317779541

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00030899047851562

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00033998489379883

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.023315906524658

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0011000633239746

select * from planejamento where id='78'; 
 Execution Time:0.00055408477783203

select * from planejamento where id='78' 
 Execution Time:0.00069093704223633

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00060486793518066

UPDATE "plano" SET "id" = '31', "obm" = '8', "datainicio" = '2017-01-01', "datafim" = '2017-12-31', "ts" = '2017-02-08 17:48:24.899787', "usuario" = '2', "status" = 1, "reprovacao" = '2017-03-14 01:03:11', "usuarioreprovacao" = '2', "aprovacao" = '2017-02-14 02:02:32', "responsavel" = '2', "obmavaliacaopendente" = '8' WHERE "id" =  '31' 
 Execution Time:0.1659791469574

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00093579292297363

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00065898895263672

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00094699859619141

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.072296142578125

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00060796737670898

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00055885314941406

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00063920021057129

select * from obm where id='4' limit 1 
 Execution Time:0.00035810470581055

select * from obm where id='8' limit 1 
 Execution Time:0.00035500526428223

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00042390823364258

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0002601146697998

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0002448558807373

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00027585029602051

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00025701522827148

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0002899169921875

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0011250972747803

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00072503089904785

select * from planejamento where id='78'; 
 Execution Time:0.00060510635375977

select * from planejamento where id='78' 
 Execution Time:0.0011818408966064

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00088000297546387

update plano set aprovacao=null, responsavel=null where id='31' 
 Execution Time:0.024976015090942

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00075697898864746

UPDATE "plano" SET "id" = '31', "obm" = '8', "datainicio" = '2017-01-01', "datafim" = '2017-12-31', "ts" = '2017-02-08 17:48:24.899787', "usuario" = '2', "status" = 1, "reprovacao" = '2017-03-14 02:03:17', "usuarioreprovacao" = '2', "aprovacao" = NULL, "responsavel" = NULL, "obmavaliacaopendente" = '8' WHERE "id" =  '31' 
 Execution Time:0.0095241069793701

select * from planejamento where id='78'; 
 Execution Time:0.0018990039825439

select * from planejamento where id='78' 
 Execution Time:0.00057792663574219

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00079894065856934

update plano set aprovacao=null, responsavel=null where id='31' 
 Execution Time:0.018718957901001

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00069093704223633

UPDATE "plano" SET "id" = '31', "obm" = '8', "datainicio" = '2017-01-01', "datafim" = '2017-12-31', "ts" = '2017-02-08 17:48:24.899787', "usuario" = '2', "status" = 1, "reprovacao" = '2017-03-14 02:03:09', "usuarioreprovacao" = '2', "aprovacao" = NULL, "responsavel" = NULL, "obmavaliacaopendente" = '8' WHERE "id" =  '31' 
 Execution Time:0.0046150684356689

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00077009201049805

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00046014785766602

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00040197372436523

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00077605247497559

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00044512748718262

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0004580020904541

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00079584121704102

select * from obm where id='4' limit 1 
 Execution Time:0.00037407875061035

select * from obm where id='8' limit 1 
 Execution Time:0.00038790702819824

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00042915344238281

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00030207633972168

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00033688545227051

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00049400329589844

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029897689819336

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0004279613494873

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00032591819763184

select * from obm where id='4' limit 1 
 Execution Time:0.00023388862609863

select * from obm where id='1' limit 1 
 Execution Time:0.00033903121948242

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00044107437133789

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00030612945556641

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00036907196044922

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00075411796569824

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00033211708068848

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0006709098815918

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00064992904663086

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0010108947753906

select * from planejamento where id='78'; 
 Execution Time:0.00057291984558105

select * from planejamento where id='78' 
 Execution Time:0.00041007995605469

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00037193298339844

update plano set aprovacao=null, responsavel=null where id='31' 
 Execution Time:0.65735912322998

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0003809928894043

UPDATE "plano" SET "id" = '31', "obm" = '8', "datainicio" = '2017-01-01', "datafim" = '2017-12-31', "ts" = '2017-02-08 17:48:24.899787', "usuario" = '2', "status" = 1, "reprovacao" = '2017-03-14 02:03:40', "usuarioreprovacao" = '2', "aprovacao" = NULL, "responsavel" = NULL, "obmavaliacaopendente" = '1' WHERE "id" =  '31' 
 Execution Time:0.014638185501099

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00087499618530273

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00078701972961426

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00071287155151367

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0010290145874023

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00072097778320312

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00094485282897949

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00055599212646484

select * from obm where id='4' limit 1 
 Execution Time:0.0002589225769043

select * from obm where id='1' limit 1 
 Execution Time:0.00028800964355469

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00055289268493652

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00045394897460938

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00042915344238281

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0021438598632812

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00080609321594238

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0010359287261963

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0010089874267578

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0010690689086914

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00083112716674805

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0006711483001709

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00041890144348145

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00034284591674805

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00027894973754883

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00030398368835449

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00084900856018066

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00078797340393066

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0007328987121582

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00046014785766602

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00036811828613281

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00043296813964844

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.0003809928894043

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00044608116149902

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00074505805969238

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0025620460510254

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00090599060058594

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0007469654083252

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00070595741271973

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0010190010070801

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00072383880615234

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00097012519836426

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00086498260498047

select * from obm where id='4' limit 1 
 Execution Time:0.00064897537231445

select * from obm where id='1' limit 1 
 Execution Time:0.00064611434936523

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00057482719421387

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00039386749267578

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00033688545227051

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0008389949798584

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00037503242492676

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00094199180603027

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00089216232299805

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00094699859619141

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00056719779968262

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00026202201843262

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00023388862609863

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00044393539428711

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00031208992004395

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0005338191986084

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.058559894561768

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.03911018371582

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.021622896194458

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00045204162597656

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00035810470581055

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.10927605628967

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0019228458404541

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.001291036605835

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00061392784118652

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0020830631256104

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00081491470336914

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.001011848449707

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0010221004486084

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00064682960510254

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00062894821166992

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0003809928894043

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00034403800964355

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00036191940307617

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00035595893859863

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041699409484863

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00061511993408203

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00060701370239258

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00043296813964844

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00025391578674316

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00023889541625977

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00055694580078125

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00027108192443848

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00071811676025391

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0013949871063232

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00095987319946289

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00084304809570312

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00061988830566406

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00051593780517578

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00055193901062012

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00054597854614258

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00058293342590332

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00044107437133789

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00098395347595215

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00087499618530273

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00077390670776367

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00061202049255371

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00077295303344727

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00092387199401855

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00086593627929688

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.001039981842041

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0010581016540527

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00075507164001465

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00062799453735352

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0005340576171875

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00057196617126465

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00059390068054199

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00049996376037598

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00072598457336426

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00078892707824707

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00052809715270996

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0011510848999023

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00045299530029297

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00026988983154297

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00024604797363281

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00027298927307129

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00039505958557129

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00040698051452637

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00083684921264648

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00065207481384277

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0006411075592041

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00069403648376465

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00078701972961426

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00053787231445312

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00064182281494141

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00088906288146973

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00036501884460449

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0002598762512207

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00023102760314941

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00025296211242676

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00023794174194336

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00027608871459961

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0006248950958252

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00069594383239746

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00037693977355957

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00025105476379395

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00022292137145996

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00040721893310547

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00026607513427734

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00035810470581055

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00053000450134277

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00087308883666992

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00088596343994141

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00062012672424316

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00059914588928223

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00063896179199219

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00055694580078125

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00052404403686523

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0011129379272461

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0010249614715576

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0011188983917236

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00047993659973145

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00050497055053711

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00045680999755859

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.0003669261932373

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00037813186645508

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.034329891204834

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0011141300201416

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0014209747314453

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00074601173400879

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00069618225097656

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0006868839263916

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00069117546081543

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00074601173400879

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00092077255249023

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00086808204650879

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00068306922912598

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0012750625610352

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0010459423065186

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0014560222625732

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00062084197998047

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00093913078308105

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00088691711425781

select * from obm where id='4' limit 1 
 Execution Time:0.0005040168762207

select * from obm where id='1' limit 1 
 Execution Time:0.00055408477783203

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00063395500183105

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00042295455932617

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00037980079650879

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00040006637573242

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.0003659725189209

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00043106079101562

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00057387351989746

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00047111511230469

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.001025915145874

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00029110908508301

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00024700164794922

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00029301643371582

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00025296211242676

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00060415267944336

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00045895576477051

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00041913986206055

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00047993659973145

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00034999847412109

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0003349781036377

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00034713745117188

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.0003509521484375

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00037598609924316

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0005340576171875

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00055503845214844

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00054597854614258

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00039482116699219

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00079894065856934

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0013120174407959

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00036501884460449

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0011749267578125

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00095891952514648

select * from obm where id='4' limit 1 
 Execution Time:0.0005190372467041

select * from obm where id='1' limit 1 
 Execution Time:0.00043797492980957

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00049710273742676

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00024795532226562

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00023794174194336

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00026702880859375

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00024008750915527

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00026893615722656

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00045013427734375

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00098204612731934

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00075602531433105

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00052189826965332

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00048995018005371

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00053000450134277

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00058507919311523

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00061583518981934

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00091004371643066

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00097107887268066

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00040507316589355

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00026512145996094

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00024795532226562

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0002739429473877

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00027799606323242

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029206275939941

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00042104721069336

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00042986869812012

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00048685073852539

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00029492378234863

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00039505958557129

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00054311752319336

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00057196617126465

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0010697841644287

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.0010170936584473

select * from obm where id='4' limit 1 
 Execution Time:0.00093698501586914

select * from obm where id='1' limit 1 
 Execution Time:0.00058102607727051

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00063109397888184

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00041890144348145

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00037002563476562

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0003669261932373

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00041604042053223

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041007995605469

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00056099891662598

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00059199333190918

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0007789134979248

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00058317184448242

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00056004524230957

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00059604644775391

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00059199333190918

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00063800811767578

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00093293190002441

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00095987319946289

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00047087669372559

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00024008750915527

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00022196769714355

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00024199485778809

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00023293495178223

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00025200843811035

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00041103363037109

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00091791152954102

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00039100646972656

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00025510787963867

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00023579597473145

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0002598762512207

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00023889541625977

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0002741813659668

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00039291381835938

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00041604042053223

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00048708915710449

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00038981437683105

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0003349781036377

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00055408477783203

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00034999847412109

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00048208236694336

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00038790702819824

select * from obm where id='4' limit 1 
 Execution Time:0.00024509429931641

select * from obm where id='1' limit 1 
 Execution Time:0.00034785270690918

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00081801414489746

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00059795379638672

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00041604042053223

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00063395500183105

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028300285339355

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00041007995605469

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00029301643371582

select * from obm where id='4' limit 1 
 Execution Time:0.00021100044250488

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00084996223449707

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00037288665771484

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00028705596923828

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00061798095703125

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00036311149597168

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00028800964355469

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0011141300201416

select origemreceita, sum(valor) from planejamento where plano='36' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00062704086303711

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='36' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00078105926513672

select sum(valor) as total from planejamento where plano='36' and tipo=1 
 Execution Time:0.0004119873046875

select sum(valor) as total from planejamento where plano='36' and tipo=2 
 Execution Time:0.00038504600524902

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.0016708374023438

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00042200088500977

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00041389465332031

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00042605400085449

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00058507919311523

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004580020904541

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00046896934509277

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0011467933654785

select origemreceita, sum(valor) from planejamento where plano='36' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.001032829284668

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='36' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0012509822845459

select sum(valor) as total from planejamento where plano='36' and tipo=1 
 Execution Time:0.00061416625976562

select sum(valor) as total from planejamento where plano='36' and tipo=2 
 Execution Time:0.00059103965759277

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.0014619827270508

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00063204765319824

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00041890144348145

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00038313865661621

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00069499015808105

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00042295455932617

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00049591064453125

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0015671253204346

select origemreceita, sum(valor) from planejamento where plano='36' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00063610076904297

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='36' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00097393989562988

select sum(valor) as total from planejamento where plano='36' and tipo=1 
 Execution Time:0.0010318756103516

select sum(valor) as total from planejamento where plano='36' and tipo=2 
 Execution Time:0.00064897537231445

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00089001655578613

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00034594535827637

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00024104118347168

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0002140998840332

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00049185752868652

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00030899047851562

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00040817260742188

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00071310997009277

select origemreceita, sum(valor) from planejamento where plano='36' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00036811828613281

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='36' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00061702728271484

select sum(valor) as total from planejamento where plano='36' and tipo=1 
 Execution Time:0.00029611587524414

select sum(valor) as total from planejamento where plano='36' and tipo=2 
 Execution Time:0.00027799606323242

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00048494338989258

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00044608116149902

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00033998489379883

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00024509429931641

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00043582916259766

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028586387634277

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00036716461181641

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00057721138000488

select origemreceita, sum(valor) from planejamento where plano='36' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00034999847412109

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='36' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.068051099777222

select sum(valor) as total from planejamento where plano='36' and tipo=1 
 Execution Time:0.00055503845214844

select sum(valor) as total from planejamento where plano='36' and tipo=2 
 Execution Time:0.00041103363037109

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00074505805969238

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00049495697021484

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00038790702819824

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00024294853210449

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00045013427734375

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00071191787719727

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00036406517028809

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00098896026611328

select origemreceita, sum(valor) from planejamento where plano='36' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00046992301940918

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='36' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00069212913513184

select sum(valor) as total from planejamento where plano='36' and tipo=1 
 Execution Time:0.00032901763916016

select sum(valor) as total from planejamento where plano='36' and tipo=2 
 Execution Time:0.00031590461730957

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00077915191650391

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00044703483581543

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00027704238891602

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00023198127746582

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00051188468933105

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003349781036377

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00044608116149902

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0018830299377441

select origemreceita, sum(valor) from planejamento where plano='36' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00074315071105957

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='36' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0013711452484131

select sum(valor) as total from planejamento where plano='36' and tipo=1 
 Execution Time:0.00042200088500977

select sum(valor) as total from planejamento where plano='36' and tipo=2 
 Execution Time:0.00041294097900391

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00099086761474609

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00088381767272949

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00040316581726074

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00031495094299316

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00034403800964355

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00035905838012695

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00043296813964844

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00059199333190918

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00068116188049316

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0008549690246582

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00055313110351562

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00052285194396973

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00054788589477539

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.0005490779876709

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00060701370239258

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00077319145202637

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0008997917175293

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00049114227294922

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0003960132598877

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00036191940307617

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00052881240844727

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00034403800964355

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00054383277893066

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00042104721069336

select * from obm where id='4' limit 1 
 Execution Time:0.00032901763916016

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0003819465637207

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00028586387634277

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00023198127746582

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00043392181396484

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00031113624572754

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00035691261291504

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00057005882263184

select origemreceita, sum(valor) from planejamento where plano='36' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00030422210693359

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='36' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00055503845214844

select sum(valor) as total from planejamento where plano='36' and tipo=1 
 Execution Time:0.000244140625

select sum(valor) as total from planejamento where plano='36' and tipo=2 
 Execution Time:0.00023293495178223

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00044584274291992

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00048303604125977

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00050902366638184

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00035405158996582

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0005791187286377

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0006411075592041

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0011720657348633

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0013971328735352

select origemreceita, sum(valor) from planejamento where plano='36' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00094795227050781

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='36' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0013408660888672

select sum(valor) as total from planejamento where plano='36' and tipo=1 
 Execution Time:0.00063610076904297

select sum(valor) as total from planejamento where plano='36' and tipo=2 
 Execution Time:0.00060892105102539

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.0011379718780518

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00081491470336914

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00037693977355957

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00033307075500488

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00050020217895508

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00050806999206543

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00055599212646484

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00057506561279297

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00066590309143066

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00084710121154785

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00066685676574707

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00064992904663086

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00069522857666016

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.0006861686706543

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00073695182800293

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00094079971313477

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00080490112304688

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00046992301940918

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00050997734069824

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00036501884460449

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00058197975158691

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00037097930908203

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0005030632019043

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00040292739868164

select * from obm where id='4' limit 1 
 Execution Time:0.00027894973754883

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00056099891662598

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00029397010803223

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00032186508178711

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00045394897460938

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029683113098145

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00035214424133301

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0010120868682861

select origemreceita, sum(valor) from planejamento where plano='36' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00050091743469238

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='36' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0006859302520752

select sum(valor) as total from planejamento where plano='36' and tipo=1 
 Execution Time:0.00026798248291016

select sum(valor) as total from planejamento where plano='36' and tipo=2 
 Execution Time:0.00023603439331055

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00077915191650391

