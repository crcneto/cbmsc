SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.10590386390686

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.062522888183594

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.062945127487183

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.21593189239502

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.04413104057312

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0015230178833008

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.054285049438477

select * from obm where id='1' limit 1 
 Execution Time:0.00051403045654297

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0010340213775635

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00062394142150879

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00070905685424805

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0016548633575439

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00043416023254395

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00038599967956543

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00063991546630859

select * from obm where id='1' limit 1 
 Execution Time:0.00021815299987793

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00058794021606445

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00057387351989746

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00048589706420898

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00091409683227539

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00057101249694824

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00080394744873047

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00056982040405273

select * from obm where id='1' limit 1 
 Execution Time:0.0004119873046875

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00085091590881348

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00033402442932129

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0003058910369873

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.14331007003784

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00064206123352051

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00307297706604

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00062799453735352

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00048089027404785

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0026009082794189

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00083303451538086

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0014619827270508

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0008091926574707

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00059103965759277

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0033071041107178

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00095295906066895

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00056982040405273

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00040888786315918

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00027203559875488

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00072813034057617

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00034022331237793

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0018770694732666

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0004279613494873

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00033092498779297

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0036108493804932

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00076603889465332

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00062203407287598

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.000579833984375

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00047183036804199

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00070691108703613

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00036501884460449

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00053906440734863

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.0005340576171875

select * from obm where id='1' limit 1 
 Execution Time:0.00025415420532227

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00050711631774902

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00037097930908203

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00028395652770996

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00077295303344727

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003659725189209

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00057792663574219

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00074982643127441

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00044107437133789

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00055813789367676

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.0004880428314209

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0016980171203613

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0005490779876709

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00054097175598145

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00040578842163086

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00042605400085449

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00070714950561523

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028705596923828

select a.obm from acesso as a, modulo as m where usuario='7' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00050687789916992

SELECT * FROM plano WHERE status<4 and status>0 and obm in (4) ORDER BY datainicio DESC 
 Execution Time:0.0009911060333252

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00061202049255371

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00048494338989258

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00037121772766113

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0006709098815918

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00038599967956543

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0008690357208252

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00089001655578613

select * from obm where id='1' limit 1 
 Execution Time:0.00040817260742188

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00055813789367676

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00086688995361328

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0010249614715576

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0010230541229248

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00053977966308594

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00066113471984863

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00049281120300293

select * from obm where id='1' limit 1 
 Execution Time:0.00036501884460449

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00048589706420898

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00037312507629395

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00033116340637207

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0003359317779541

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00037288665771484

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0008549690246582

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00035214424133301

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00049877166748047

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00028800964355469

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00024700164794922

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.001539945602417

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00094699859619141

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0019161701202393

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0011382102966309

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00072693824768066

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00075984001159668

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00056099891662598

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00037884712219238

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00058293342590332

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.091721057891846

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00041007995605469

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00022292137145996

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00020694732666016

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00023102760314941

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00022387504577637

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00023698806762695

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00072717666625977

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00060796737670898

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00034689903259277

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00024604797363281

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00026392936706543

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00027608871459961

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003049373626709

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0006568431854248

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0019979476928711

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00050091743469238

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00042104721069336

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0021829605102539

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00097489356994629

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.001431941986084

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0013930797576904

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00058579444885254

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00032305717468262

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00029516220092773

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00035691261291504

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00036191940307617

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00036287307739258

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00070714950561523

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0014321804046631

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00029802322387695

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00022292137145996

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0013060569763184

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00055408477783203

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00066304206848145

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0007929801940918

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00071978569030762

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0004429817199707

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00034213066101074

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00037717819213867

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.0003659725189209

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00054407119750977

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00076198577880859

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00049209594726562

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0003349781036377

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00023984909057617

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00026798248291016

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00024199485778809

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028109550476074

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00048184394836426

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00061392784118652

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00039100646972656

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00038695335388184

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00040912628173828

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00033998489379883

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00034785270690918

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00080513954162598

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00055098533630371

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00033807754516602

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00037717819213867

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00036311149597168

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00042200088500977

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040006637573242

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0010750293731689

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00062417984008789

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00045490264892578

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00037789344787598

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0012819766998291

SELECT *
FROM "especificacao"
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.058292865753174

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00071406364440918

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00049591064453125

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00084900856018066

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00069403648376465

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.0005030632019043

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00068116188049316

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00062298774719238

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0020079612731934

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0013711452484131

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00033116340637207

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00026488304138184

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0020401477813721

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00088191032409668

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0010678768157959

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0019629001617432

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00073099136352539

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00043916702270508

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00026583671569824

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00025510787963867

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0002748966217041

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00023102760314941

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.000244140625

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00030994415283203

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00033998489379883

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0006260871887207

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00059199333190918

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00060796737670898

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00051283836364746

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00044608116149902

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00062894821166992

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00075602531433105

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0023159980773926

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0021820068359375

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00058603286743164

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00054788589477539

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00047111511230469

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00056004524230957

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00061392784118652

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00074219703674316

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0012109279632568

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0014560222625732

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0010910034179688

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00034189224243164

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0013329982757568

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00072002410888672

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00073909759521484

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00087308883666992

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00078487396240234

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0018188953399658

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00037288665771484

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00027894973754883

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0013101100921631

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00057005882263184

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00072288513183594

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00084495544433594

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00082516670227051

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00039887428283691

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00027608871459961

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00026488304138184

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00028300285339355

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00029206275939941

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00050497055053711

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00059795379638672

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00066709518432617

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0031259059906006

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00057506561279297

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0004730224609375

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.002561092376709

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.0009920597076416

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.001323938369751

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0010430812835693

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00089216232299805

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00078582763671875

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00066900253295898

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00077295303344727

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00057697296142578

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00052595138549805

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00073885917663574

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00068187713623047

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00075793266296387

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0011899471282959

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00028610229492188

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00018787384033203

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0027070045471191

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00078105926513672

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0012528896331787

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0014209747314453

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00062799453735352

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0005948543548584

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00039982795715332

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00037407875061035

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00038290023803711

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.0003509521484375

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003960132598877

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00047612190246582

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00056004524230957

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0018467903137207

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0008089542388916

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0012209415435791

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0020370483398438

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00084996223449707

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00094199180603027

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00124192237854

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00095701217651367

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0014181137084961

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0003669261932373

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00033187866210938

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0013120174407959

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00049090385437012

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00061511993408203

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00080108642578125

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00062394142150879

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00048494338989258

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00032687187194824

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00026512145996094

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00027990341186523

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00025701522827148

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003049373626709

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00039792060852051

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00049805641174316

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00054788589477539

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00033712387084961

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00028800964355469

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00037980079650879

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00030994415283203

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00034117698669434

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00048589706420898

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0004730224609375

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00053501129150391

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00043201446533203

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00038003921508789

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00039887428283691

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.0003809928894043

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00044989585876465

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00055408477783203

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00068998336791992

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0013489723205566

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00040102005004883

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.000244140625

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0011758804321289

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00044894218444824

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00055480003356934

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00072884559631348

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00061988830566406

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00046801567077637

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00034308433532715

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00030517578125

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00031304359436035

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00032711029052734

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00037097930908203

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0004730224609375

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00056195259094238

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00080704689025879

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00033402442932129

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00029206275939941

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00029301643371582

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.0002739429473877

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00082707405090332

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00077009201049805

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00045680999755859

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00046491622924805

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00029397010803223

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00031900405883789

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00031590461730957

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00030803680419922

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00034117698669434

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00042009353637695

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0006561279296875

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00054693222045898

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00044512748718262

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00035881996154785

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0003659725189209

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00030803680419922

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00033998489379883

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00042581558227539

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00075602531433105

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00039911270141602

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00034904479980469

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00039315223693848

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00040888786315918

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.0003809928894043

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041604042053223

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00057101249694824

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00068402290344238

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00067400932312012

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0011470317840576

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00038504600524902

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00035405158996582

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.0003349781036377

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00037503242492676

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00052404403686523

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00054597854614258

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0004570484161377

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00029492378234863

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00030803680419922

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00030803680419922

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.0003659725189209

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00039386749267578

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00056719779968262

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0007331371307373

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0008690357208252

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0004279613494873

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00037193298339844

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0003511905670166

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00035500526428223

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00039076805114746

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00052905082702637

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00071001052856445

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0028119087219238

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00051712989807129

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00039815902709961

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00029897689819336

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00026702880859375

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004270076751709

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00063204765319824

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00081992149353027

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00044798851013184

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00031304359436035

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00027704238891602

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00029182434082031

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00028109550476074

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00027108192443848

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00033903121948242

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0003972053527832

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00036406517028809

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00028204917907715

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00032806396484375

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00039291381835938

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00039291381835938

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00043392181396484

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0012578964233398

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00087904930114746

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0005030632019043

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00043296813964844

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00035905838012695

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0003819465637207

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.0003659725189209

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041699409484863

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00055098533630371

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00066184997558594

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00052094459533691

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00041317939758301

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00037479400634766

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00041699409484863

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00038695335388184

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0016191005706787

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00069117546081543

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00072908401489258

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00034618377685547

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00024199485778809

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00023293495178223

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00031685829162598

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00034594535827637

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041484832763672

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00082707405090332

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00048398971557617

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00043797492980957

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0003662109375

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00042104721069336

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0003809928894043

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00034499168395996

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0010380744934082

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00095319747924805

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0004889965057373

