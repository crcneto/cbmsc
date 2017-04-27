SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.039094924926758

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.0032761096954346

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.0012810230255127

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.050059795379639

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00080084800720215

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0015480518341064

SELECT *
FROM "obm" 
 Execution Time:0.00043296813964844

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.035701990127563

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.037198066711426

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.040715932846069

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.019876003265381

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00082206726074219

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.039252996444702

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00056290626525879

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00030016899108887

SELECT *
FROM "obm"
WHERE "id" =  '5' 
 Execution Time:0.00022792816162109

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00037908554077148

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0017991065979004

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0019278526306152

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0011601448059082

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00040602684020996

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00043702125549316

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00068998336791992

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00026798248291016

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00023603439331055

SELECT *
FROM "obm"
WHERE "id" =  '5' 
 Execution Time:0.00022101402282715

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00022983551025391

select * from plano where status=4 order by datainicio DESC, datafim DESC 
 Execution Time:0.0037729740142822

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0023398399353027

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0031120777130127

select * from plano where status=4 and obm='3' order by datainicio DESC, datafim DESC 
 Execution Time:0.00089693069458008

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00076985359191895

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00054407119750977

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00092411041259766

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00051021575927734

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.026220083236694

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.022337913513184

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00060606002807617

select * from planejamento where plano='18' order by tipo ASC, dataprevista ASC 
 Execution Time:0.027431011199951

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0021238327026367

select origemreceita, sum(valor) from planejamento where plano='18' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.14269495010376

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='18' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0018110275268555

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='18' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.0011401176452637

select sum(valor) as total from planejamento where plano='18' and tipo=1 
 Execution Time:0.00052714347839355

select sum(valor) as total from planejamento where plano='18' and tipo=2 
 Execution Time:0.00049901008605957

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00071501731872559

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00028395652770996

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00062108039855957

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00061202049255371

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00042390823364258

select * from planejamento where plano='18' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00065493583679199

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00086307525634766

select origemreceita, sum(valor) from planejamento where plano='18' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00046896934509277

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='18' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0011250972747803

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='18' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.0007479190826416

select sum(valor) as total from planejamento where plano='18' and tipo=1 
 Execution Time:0.00038409233093262

select sum(valor) as total from planejamento where plano='18' and tipo=2 
 Execution Time:0.0002589225769043

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.0012118816375732

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00031709671020508

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0008080005645752

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00060701370239258

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00045490264892578

select * from planejamento where plano='18' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00070905685424805

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0008091926574707

select origemreceita, sum(valor) from planejamento where plano='18' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00045609474182129

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='18' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00081610679626465

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='18' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.0006251335144043

select sum(valor) as total from planejamento where plano='18' and tipo=1 
 Execution Time:0.00026106834411621

select sum(valor) as total from planejamento where plano='18' and tipo=2 
 Execution Time:0.00022506713867188

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00054812431335449

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.0003669261932373

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00065302848815918

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00056195259094238

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0002899169921875

select * from planejamento where plano='18' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0005800724029541

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0003960132598877

select origemreceita, sum(valor) from planejamento where plano='18' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00066184997558594

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='18' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0013678073883057

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='18' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00084900856018066

select sum(valor) as total from planejamento where plano='18' and tipo=1 
 Execution Time:0.00063300132751465

select sum(valor) as total from planejamento where plano='18' and tipo=2 
 Execution Time:0.0006711483001709

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00042104721069336

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00025081634521484

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00043296813964844

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00046896934509277

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00026297569274902

select * from planejamento where plano='18' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00061297416687012

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00075101852416992

select origemreceita, sum(valor) from planejamento where plano='18' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00045514106750488

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='18' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00064611434936523

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='18' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00046801567077637

select sum(valor) as total from planejamento where plano='18' and tipo=1 
 Execution Time:0.00023293495178223

select sum(valor) as total from planejamento where plano='18' and tipo=2 
 Execution Time:0.00025486946105957

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.0016679763793945

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.0010490417480469

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0010287761688232

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00072002410888672

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00053286552429199

select * from planejamento where plano='18' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0010941028594971

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.001288890838623

select origemreceita, sum(valor) from planejamento where plano='18' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00047087669372559

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='18' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00076794624328613

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='18' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00077199935913086

select sum(valor) as total from planejamento where plano='18' and tipo=1 
 Execution Time:0.00025296211242676

select sum(valor) as total from planejamento where plano='18' and tipo=2 
 Execution Time:0.00025105476379395

select * from plano where status=4 order by datainicio DESC, datafim DESC 
 Execution Time:0.0018620491027832

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00043916702270508

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00034213066101074

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00037002563476562

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00024795532226562

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00026893615722656

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00029802322387695

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00026607513427734

select * from planejamento where plano='18' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00035500526428223

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00027894973754883

select origemreceita, sum(valor) from planejamento where plano='18' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00046801567077637

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='18' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00055885314941406

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='18' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00047707557678223

select sum(valor) as total from planejamento where plano='18' and tipo=1 
 Execution Time:0.00024819374084473

select sum(valor) as total from planejamento where plano='18' and tipo=2 
 Execution Time:0.00022697448730469

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.0022690296173096

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00055694580078125

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0015919208526611

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0018651485443115

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0014669895172119

select * from planejamento where plano='18' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0013580322265625

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0013711452484131

select origemreceita, sum(valor) from planejamento where plano='18' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00071382522583008

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='18' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0012900829315186

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='18' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00087618827819824

select sum(valor) as total from planejamento where plano='18' and tipo=1 
 Execution Time:0.0005490779876709

select sum(valor) as total from planejamento where plano='18' and tipo=2 
 Execution Time:0.00043082237243652

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.0013430118560791

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00090599060058594

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00067615509033203

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00077199935913086

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00044393539428711

select * from planejamento where plano='18' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00071978569030762

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00037288665771484

select origemreceita, sum(valor) from planejamento where plano='18' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00056600570678711

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='18' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0010139942169189

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='18' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00063109397888184

select sum(valor) as total from planejamento where plano='18' and tipo=1 
 Execution Time:0.00032615661621094

select sum(valor) as total from planejamento where plano='18' and tipo=2 
 Execution Time:0.00032401084899902

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00058698654174805

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00033092498779297

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00036191940307617

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00039887428283691

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00072002410888672

select * from planejamento where plano='18' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00067710876464844

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0007171630859375

select origemreceita, sum(valor) from planejamento where plano='18' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.001039981842041

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='18' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00093507766723633

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='18' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.0004570484161377

select sum(valor) as total from planejamento where plano='18' and tipo=1 
 Execution Time:0.00023293495178223

select sum(valor) as total from planejamento where plano='18' and tipo=2 
 Execution Time:0.00022292137145996

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00055909156799316

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00046706199645996

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0011711120605469

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00050997734069824

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040602684020996

select * from planejamento where plano='18' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00037217140197754

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00040793418884277

select origemreceita, sum(valor) from planejamento where plano='18' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00045990943908691

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='18' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0006718635559082

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='18' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00068783760070801

select sum(valor) as total from planejamento where plano='18' and tipo=1 
 Execution Time:0.00032877922058105

select sum(valor) as total from planejamento where plano='18' and tipo=2 
 Execution Time:0.00033211708068848

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.0015308856964111

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00039887428283691

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.001086950302124

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00084185600280762

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00058197975158691

select * from planejamento where plano='18' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0017299652099609

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0025820732116699

select origemreceita, sum(valor) from planejamento where plano='18' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00080990791320801

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='18' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0018420219421387

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='18' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.0012850761413574

select sum(valor) as total from planejamento where plano='18' and tipo=1 
 Execution Time:0.00063800811767578

select sum(valor) as total from planejamento where plano='18' and tipo=2 
 Execution Time:0.00034499168395996

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.0017502307891846

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.0011610984802246

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0013110637664795

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0010161399841309

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00075697898864746

select * from planejamento where plano='18' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0012061595916748

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0012848377227783

select origemreceita, sum(valor) from planejamento where plano='18' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.0008089542388916

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='18' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0013329982757568

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='18' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00085997581481934

select sum(valor) as total from planejamento where plano='18' and tipo=1 
 Execution Time:0.00064492225646973

select sum(valor) as total from planejamento where plano='18' and tipo=2 
 Execution Time:0.00049901008605957

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.0011379718780518

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00091695785522461

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0003819465637207

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00030207633972168

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00027680397033691

select * from planejamento where plano='18' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00033116340637207

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00030612945556641

select origemreceita, sum(valor) from planejamento where plano='18' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00031900405883789

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='18' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00052595138549805

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='18' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.0004580020904541

select sum(valor) as total from planejamento where plano='18' and tipo=1 
 Execution Time:0.00037002563476562

select sum(valor) as total from planejamento where plano='18' and tipo=2 
 Execution Time:0.00030803680419922

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00059199333190918

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00048017501831055

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00043797492980957

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00047492980957031

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00047779083251953

select * from planejamento where plano='18' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0005650520324707

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00041508674621582

select origemreceita, sum(valor) from planejamento where plano='18' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.0003972053527832

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='18' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00065898895263672

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='18' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00053191184997559

select sum(valor) as total from planejamento where plano='18' and tipo=1 
 Execution Time:0.0003211498260498

select sum(valor) as total from planejamento where plano='18' and tipo=2 
 Execution Time:0.00023698806762695

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00052809715270996

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00040817260742188

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00043702125549316

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00049281120300293

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00044488906860352

select * from planejamento where plano='18' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00050497055053711

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00043487548828125

select origemreceita, sum(valor) from planejamento where plano='18' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00058412551879883

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='18' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0011410713195801

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='18' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.0014650821685791

select sum(valor) as total from planejamento where plano='18' and tipo=1 
 Execution Time:0.00045609474182129

select sum(valor) as total from planejamento where plano='18' and tipo=2 
 Execution Time:0.00036287307739258

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00041103363037109

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00027894973754883

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00056314468383789

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00099921226501465

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00060701370239258

select * from planejamento where plano='18' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0007169246673584

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0006110668182373

select origemreceita, sum(valor) from planejamento where plano='18' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00063991546630859

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='18' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00099706649780273

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='18' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00085282325744629

select sum(valor) as total from planejamento where plano='18' and tipo=1 
 Execution Time:0.00045418739318848

select sum(valor) as total from planejamento where plano='18' and tipo=2 
 Execution Time:0.00042986869812012

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.0004730224609375

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00029706954956055

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00035691261291504

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00062799453735352

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00037407875061035

select * from planejamento where plano='18' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0011601448059082

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00084805488586426

select origemreceita, sum(valor) from planejamento where plano='18' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00041604042053223

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='18' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00055098533630371

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='18' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00045299530029297

select sum(valor) as total from planejamento where plano='18' and tipo=1 
 Execution Time:0.00030088424682617

select sum(valor) as total from planejamento where plano='18' and tipo=2 
 Execution Time:0.00025296211242676

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.0005650520324707

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00034403800964355

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00048398971557617

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00059819221496582

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00053715705871582

select * from planejamento where plano='18' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00096011161804199

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00050902366638184

select origemreceita, sum(valor) from planejamento where plano='18' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.0005340576171875

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='18' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00088095664978027

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='18' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00082898139953613

select sum(valor) as total from planejamento where plano='18' and tipo=1 
 Execution Time:0.00098299980163574

select sum(valor) as total from planejamento where plano='18' and tipo=2 
 Execution Time:0.00052404403686523

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.0042309761047363

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00059080123901367

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0015270709991455

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0012998580932617

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00089597702026367

select * from planejamento where plano='18' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0012528896331787

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0012309551239014

select origemreceita, sum(valor) from planejamento where plano='18' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00070405006408691

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='18' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0011849403381348

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='18' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00080204010009766

select sum(valor) as total from planejamento where plano='18' and tipo=1 
 Execution Time:0.00047898292541504

select sum(valor) as total from planejamento where plano='18' and tipo=2 
 Execution Time:0.00042104721069336

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00046586990356445

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00036406517028809

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00036096572875977

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00047898292541504

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003960132598877

select * from planejamento where plano='18' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0003509521484375

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00029611587524414

select origemreceita, sum(valor) from planejamento where plano='18' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00031495094299316

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='18' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0005800724029541

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='18' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00075292587280273

select sum(valor) as total from planejamento where plano='18' and tipo=1 
 Execution Time:0.00042819976806641

select sum(valor) as total from planejamento where plano='18' and tipo=2 
 Execution Time:0.00038695335388184

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00050115585327148

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00041389465332031

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00040292739868164

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00050997734069824

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00051498413085938

select * from planejamento where plano='18' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00056099891662598

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00047016143798828

select origemreceita, sum(valor) from planejamento where plano='18' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00050210952758789

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='18' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00080418586730957

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='18' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00054311752319336

select sum(valor) as total from planejamento where plano='18' and tipo=1 
 Execution Time:0.0003969669342041

select sum(valor) as total from planejamento where plano='18' and tipo=2 
 Execution Time:0.00037503242492676

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00054383277893066

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00042295455932617

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00046682357788086

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00063300132751465

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00038790702819824

select * from planejamento where plano='18' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00051784515380859

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00032401084899902

select origemreceita, sum(valor) from planejamento where plano='18' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00032687187194824

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='18' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00057482719421387

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='18' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00048017501831055

select sum(valor) as total from planejamento where plano='18' and tipo=1 
 Execution Time:0.00022006034851074

select sum(valor) as total from planejamento where plano='18' and tipo=2 
 Execution Time:0.00020003318786621

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00052309036254883

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00039386749267578

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00047898292541504

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00051188468933105

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004889965057373

select * from planejamento where plano='18' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0005791187286377

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00050997734069824

select origemreceita, sum(valor) from planejamento where plano='18' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00048303604125977

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='18' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00069379806518555

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='18' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00059700012207031

select sum(valor) as total from planejamento where plano='18' and tipo=1 
 Execution Time:0.00034403800964355

select sum(valor) as total from planejamento where plano='18' and tipo=2 
 Execution Time:0.0010688304901123

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00049710273742676

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00042009353637695

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00044393539428711

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00045514106750488

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00036907196044922

select * from planejamento where plano='18' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00052690505981445

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00041890144348145

select origemreceita, sum(valor) from planejamento where plano='18' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00041913986206055

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='18' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00089001655578613

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='18' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00072503089904785

select sum(valor) as total from planejamento where plano='18' and tipo=1 
 Execution Time:0.0003821849822998

select sum(valor) as total from planejamento where plano='18' and tipo=2 
 Execution Time:0.00088000297546387

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00063514709472656

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00043916702270508

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00038385391235352

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00035810470581055

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028896331787109

select * from planejamento where plano='18' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0005338191986084

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00033903121948242

select origemreceita, sum(valor) from planejamento where plano='18' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.0003209114074707

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='18' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00057888031005859

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='18' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00049996376037598

select sum(valor) as total from planejamento where plano='18' and tipo=1 
 Execution Time:0.00027203559875488

select sum(valor) as total from planejamento where plano='18' and tipo=2 
 Execution Time:0.00024104118347168

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.0020599365234375

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00057697296142578

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0016250610351562

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0012991428375244

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00097203254699707

select * from planejamento where plano='18' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0014910697937012

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0015518665313721

select origemreceita, sum(valor) from planejamento where plano='18' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00084900856018066

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='18' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0015139579772949

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='18' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.0010049343109131

select sum(valor) as total from planejamento where plano='18' and tipo=1 
 Execution Time:0.00041604042053223

select sum(valor) as total from planejamento where plano='18' and tipo=2 
 Execution Time:0.00032496452331543

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00056910514831543

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00035285949707031

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00041294097900391

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00034713745117188

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00036287307739258

select * from planejamento where plano='18' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00041699409484863

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00034713745117188

select origemreceita, sum(valor) from planejamento where plano='18' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00040102005004883

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='18' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0010449886322021

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='18' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00076603889465332

select sum(valor) as total from planejamento where plano='18' and tipo=1 
 Execution Time:0.001079797744751

select sum(valor) as total from planejamento where plano='18' and tipo=2 
 Execution Time:0.00058102607727051

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00074887275695801

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.001234769821167

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0007169246673584

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00074005126953125

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00068306922912598

select * from planejamento where plano='18' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00067806243896484

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0006110668182373

select origemreceita, sum(valor) from planejamento where plano='18' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00063991546630859

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='18' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0008549690246582

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='18' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.0011200904846191

select sum(valor) as total from planejamento where plano='18' and tipo=1 
 Execution Time:0.00027108192443848

select sum(valor) as total from planejamento where plano='18' and tipo=2 
 Execution Time:0.00025296211242676

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00066208839416504

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.0010290145874023

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00041985511779785

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00073814392089844

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00033998489379883

select * from planejamento where plano='18' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00045609474182129

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00041484832763672

select origemreceita, sum(valor) from planejamento where plano='18' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00042414665222168

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='18' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00077104568481445

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='18' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00056290626525879

select sum(valor) as total from planejamento where plano='18' and tipo=1 
 Execution Time:0.00028705596923828

select sum(valor) as total from planejamento where plano='18' and tipo=2 
 Execution Time:0.00025296211242676

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00043106079101562

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00029087066650391

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00030088424682617

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00032496452331543

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00031208992004395

select * from planejamento where plano='18' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00032401084899902

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00028491020202637

select origemreceita, sum(valor) from planejamento where plano='18' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00029301643371582

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='18' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00050115585327148

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='18' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00048112869262695

select sum(valor) as total from planejamento where plano='18' and tipo=1 
 Execution Time:0.00027894973754883

select sum(valor) as total from planejamento where plano='18' and tipo=2 
 Execution Time:0.00027203559875488

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00044512748718262

select * from plano where status=4 order by datainicio DESC, datafim DESC 
 Execution Time:0.0024268627166748

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0015859603881836

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0012969970703125

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00051498413085938

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00027108192443848

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0004570484161377

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00051498413085938

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00039887428283691

select * from planejamento where plano='18' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0007178783416748

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0003201961517334

select origemreceita, sum(valor) from planejamento where plano='18' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00063991546630859

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='18' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00093293190002441

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='18' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00058293342590332

select sum(valor) as total from planejamento where plano='18' and tipo=1 
 Execution Time:0.00026893615722656

select sum(valor) as total from planejamento where plano='18' and tipo=2 
 Execution Time:0.00028896331787109

select * from plano where status=4 order by datainicio DESC, datafim DESC 
 Execution Time:0.00049805641174316

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00035405158996582

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00032687187194824

SELECT *
FROM "plano"
WHERE "id" =  '15' 
 Execution Time:0.00039291381835938

SELECT *
FROM "plano"
WHERE "id" =  '15' 
 Execution Time:0.00024700164794922

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00025701522827148

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00072503089904785

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00066494941711426

select * from planejamento where plano='15' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00090384483337402

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00075697898864746

select origemreceita, sum(valor) from planejamento where plano='15' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00058293342590332

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='15' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0011420249938965

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='15' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00065493583679199

select sum(valor) as total from planejamento where plano='15' and tipo=1 
 Execution Time:0.00034999847412109

select sum(valor) as total from planejamento where plano='15' and tipo=2 
 Execution Time:0.00031399726867676

SELECT *
FROM "plano"
WHERE "id" =  '15' 
 Execution Time:0.0011289119720459

SELECT *
FROM "plano"
WHERE "id" =  '15' 
 Execution Time:0.0011398792266846

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00058794021606445

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00062012672424316

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00056600570678711

select * from planejamento where plano='15' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0008089542388916

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00094294548034668

select origemreceita, sum(valor) from planejamento where plano='15' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00089883804321289

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='15' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.001507043838501

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='15' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.0010199546813965

select sum(valor) as total from planejamento where plano='15' and tipo=1 
 Execution Time:0.0007941722869873

select sum(valor) as total from planejamento where plano='15' and tipo=2 
 Execution Time:0.00057792663574219

SELECT *
FROM "plano"
WHERE "id" =  '15' 
 Execution Time:0.00043702125549316

SELECT *
FROM "plano"
WHERE "id" =  '15' 
 Execution Time:0.00025296211242676

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00026607513427734

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00027585029602051

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00025415420532227

select * from planejamento where plano='15' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00033283233642578

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00027894973754883

select origemreceita, sum(valor) from planejamento where plano='15' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00029897689819336

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='15' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0007319450378418

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='15' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00075292587280273

select sum(valor) as total from planejamento where plano='15' and tipo=1 
 Execution Time:0.00030803680419922

select sum(valor) as total from planejamento where plano='15' and tipo=2 
 Execution Time:0.00027990341186523

SELECT *
FROM "plano"
WHERE "id" =  '15' 
 Execution Time:0.0006868839263916

SELECT *
FROM "plano"
WHERE "id" =  '15' 
 Execution Time:0.00096988677978516

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00048089027404785

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00044393539428711

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040578842163086

select * from planejamento where plano='15' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00052690505981445

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00043416023254395

select origemreceita, sum(valor) from planejamento where plano='15' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00050997734069824

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='15' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.000823974609375

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='15' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00051403045654297

select sum(valor) as total from planejamento where plano='15' and tipo=1 
 Execution Time:0.0002589225769043

select sum(valor) as total from planejamento where plano='15' and tipo=2 
 Execution Time:0.00027203559875488

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00048184394836426

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0010159015655518

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00054001808166504

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00038790702819824

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00037598609924316

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00035786628723145

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00030803680419922

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00028800964355469

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00028800964355469

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00028896331787109

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00029778480529785

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00028491020202637

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00028300285339355

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00027585029602051

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (4,8,5,7) and pj.dataprevista between '2016-01-01' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.5064160823822

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00047898292541504

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004570484161377

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00057697296142578

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00032901763916016

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00043511390686035

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0005950927734375

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00044012069702148

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00030183792114258

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00033211708068848

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.0003349781036377

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0011000633239746

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00038385391235352

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00030112266540527

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00026297569274902

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00031900405883789

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00031518936157227

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00026488304138184

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-29' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0019080638885498

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00031590461730957

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0017580986022949

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0005030632019043

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00029897689819336

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00025606155395508

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00023889541625977

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00026488304138184

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00023794174194336

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00028800964355469

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00038814544677734

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00033712387084961

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00032401084899902

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00031089782714844

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00027585029602051

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0022571086883545

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0012729167938232

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0012540817260742

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.0007178783416748

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00060415267944336

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00067305564880371

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00056600570678711

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00060677528381348

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00065898895263672

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00056099891662598

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00026106834411621

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00024819374084473

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00024890899658203

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00022697448730469

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0020039081573486

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041604042053223

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00067496299743652

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00098395347595215

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.0003349781036377

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.0002748966217041

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00022101402282715

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00040793418884277

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00026583671569824

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00042200088500977

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00039887428283691

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00040102005004883

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00046682357788086

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0004429817199707

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0032100677490234

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00047397613525391

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00057411193847656

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00033116340637207

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00030684471130371

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00029993057250977

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00029301643371582

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00021004676818848

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00020909309387207

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0001978874206543

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00020289421081543

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0007941722869873

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00066304206848145

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00054407119750977

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.001600980758667

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00044703483581543

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00047397613525391

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00034403800964355

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00030016899108887

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00087118148803711

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00081205368041992

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00049996376037598

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00023698806762695

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00021815299987793

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00023913383483887

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00030708312988281

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.0002138614654541

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00016999244689941

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0016181468963623

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00038409233093262

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00089097023010254

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00061607360839844

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00042319297790527

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00046801567077637

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00030112266540527

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00021910667419434

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00034809112548828

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00051999092102051

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00049400329589844

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00055408477783203

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00060796737670898

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00058507919311523

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0035858154296875

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00053715705871582

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00077986717224121

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00042200088500977

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00049209594726562

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00032186508178711

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00033807754516602

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00031781196594238

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.0003049373626709

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0002601146697998

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.0002291202545166

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0002751350402832

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00064802169799805

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00035214424133301

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0019919872283936

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0013861656188965

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00055599212646484

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00026178359985352

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00047612190246582

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00051593780517578

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00051403045654297

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00041007995605469

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00032401084899902

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00047492980957031

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00044703483581543

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00037908554077148

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00034999847412109

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00031304359436035

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0015618801116943

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0005030632019043

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00045490264892578

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00048303604125977

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00045895576477051

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.0004570484161377

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00045084953308105

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00044798851013184

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00044107437133789

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00045585632324219

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00044393539428711

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00044703483581543

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00031805038452148

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00024080276489258

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0013859272003174

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00042819976806641

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00056815147399902

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00059604644775391

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00046706199645996

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00041913986206055

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00098896026611328

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0012240409851074

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00058817863464355

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00040292739868164

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00037598609924316

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00038790702819824

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00035810470581055

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0003662109375

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0034089088439941

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00044393539428711

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0005340576171875

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00030422210693359

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00027298927307129

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00020503997802734

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00018501281738281

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0001978874206543

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00018596649169922

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00018310546875

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00018501281738281

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00021100044250488

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00019502639770508

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00018906593322754

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0014350414276123

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00066804885864258

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0016660690307617

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00029301643371582

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00020694732666016

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00029706954956055

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00028610229492188

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00031781196594238

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00030899047851562

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00029897689819336

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00050997734069824

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00034618377685547

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00065803527832031

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00050902366638184

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0028581619262695

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00032305717468262

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00087094306945801

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00055122375488281

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00040197372436523

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00041294097900391

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00055718421936035

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0006558895111084

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00062704086303711

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00065803527832031

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00060009956359863

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00065207481384277

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00058698654174805

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00061798095703125

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0049901008605957

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00051283836364746

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00052809715270996

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00034999847412109

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00033402442932129

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00032806396484375

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00037980079650879

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00031399726867676

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00032281875610352

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00034189224243164

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00099015235900879

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00085997581481934

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.0004270076751709

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00038504600524902

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0018789768218994

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00048303604125977

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00057315826416016

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.0011298656463623

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00045895576477051

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00035285949707031

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00029087066650391

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00028610229492188

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00031304359436035

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00029301643371582

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00030803680419922

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00029110908508301

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.0002899169921875

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00024199485778809

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0012111663818359

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00031113624572754

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00060606002807617

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00036501884460449

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00032401084899902

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00032997131347656

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.0003209114074707

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00030708312988281

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00028395652770996

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00025200843811035

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00027894973754883

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0002739429473877

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00033402442932129

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00027203559875488

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0015079975128174

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00037217140197754

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0006568431854248

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00038385391235352

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00088095664978027

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.0003960132598877

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00036311149597168

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00034189224243164

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00032806396484375

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00035214424133301

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00033879280090332

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00033402442932129

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00032210350036621

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00030398368835449

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.00130295753479

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00042080879211426

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00053501129150391

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00027990341186523

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00024199485778809

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00023007392883301

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00025486946105957

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00025820732116699

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00043201446533203

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00078701972961426

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.0003969669342041

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00027704238891602

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00025415420532227

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0003509521484375

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0026559829711914

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00062990188598633

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0014889240264893

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00064492225646973

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.0005500316619873

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.0006110668182373

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00056195259094238

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00044393539428711

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00057101249694824

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00048518180847168

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00049901008605957

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00050210952758789

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00050997734069824

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00046992301940918

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0016071796417236

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0005948543548584

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00045609474182129

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00026416778564453

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00023913383483887

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00023388862609863

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00023412704467773

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00022983551025391

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.0002131462097168

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0001981258392334

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00019001960754395

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00018787384033203

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00018620491027832

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00018596649169922

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0013890266418457

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029993057250977

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00048398971557617

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.0003349781036377

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.0003049373626709

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00027012825012207

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00030398368835449

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00030303001403809

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00030207633972168

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00030708312988281

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00029993057250977

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00028181076049805

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00030207633972168

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00025415420532227

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0012149810791016

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003361701965332

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00057411193847656

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00028705596923828

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00034189224243164

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00036287307739258

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00036001205444336

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0003809928894043

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00035691261291504

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00051498413085938

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00030803680419922

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0004889965057373

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00037813186645508

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00035881996154785

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0034868717193604

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00035500526428223

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00050783157348633

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00036287307739258

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00051784515380859

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00041794776916504

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00026702880859375

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00027918815612793

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00028896331787109

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00023913383483887

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00022602081298828

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00025081634521484

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00021910667419434

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00022077560424805

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0013551712036133

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00034999847412109

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00065112113952637

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00039291381835938

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00029301643371582

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00027203559875488

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00024795532226562

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00029993057250977

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00025486946105957

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00025606155395508

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00024700164794922

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00027990341186523

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00034189224243164

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00040888786315918

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0025548934936523

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00057291984558105

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00054192543029785

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00089120864868164

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00059103965759277

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00049710273742676

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00037813186645508

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0003509521484375

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00029110908508301

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00028014183044434

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00027608871459961

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00027918815612793

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00033998489379883

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00037598609924316

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0027229785919189

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00069308280944824

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004730224609375

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00029611587524414

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00036096572875977

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00026512145996094

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00019407272338867

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00019001960754395

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00018215179443359

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00020289421081543

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00017905235290527

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00017595291137695

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00017404556274414

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00021791458129883

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0035960674285889

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00042581558227539

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0013809204101562

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00049185752868652

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00037789344787598

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00039386749267578

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00037312507629395

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00037288665771484

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00036382675170898

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00048613548278809

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00043988227844238

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00043582916259766

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.0004119873046875

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00041103363037109

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0035121440887451

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00064516067504883

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0027439594268799

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.0003969669342041

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00032210350036621

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00032901763916016

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.0003199577331543

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00035786628723145

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00032687187194824

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0003969669342041

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00033998489379883

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00032615661621094

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00040388107299805

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00032711029052734

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0038859844207764

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00064516067504883

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00054383277893066

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00035214424133301

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00030994415283203

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00029206275939941

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00027203559875488

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00027108192443848

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00023317337036133

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00023198127746582

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00025010108947754

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0002288818359375

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00022196769714355

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00022101402282715

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.001317024230957

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003199577331543

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00054192543029785

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00031900405883789

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00032496452331543

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00028014183044434

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00026583671569824

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00028491020202637

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.0002598762512207

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00026798248291016

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00032210350036621

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00026512145996094

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.0002589225769043

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00028705596923828

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0027201175689697

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00068283081054688

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00053000450134277

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00047183036804199

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00031805038452148

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00031399726867676

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00031495094299316

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00031685829162598

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00031590461730957

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00043106079101562

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00026202201843262

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00032401084899902

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.0003809928894043

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0005040168762207

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0029861927032471

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00059914588928223

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00066900253295898

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.0004580020904541

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00036096572875977

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00030708312988281

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00035786628723145

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00034594535827637

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00029802322387695

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00033211708068848

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00029087066650391

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00026082992553711

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00036501884460449

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00030398368835449

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0017361640930176

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00037908554077148

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00051188468933105

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00031590461730957

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00030398368835449

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00026893615722656

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.0001990795135498

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00016498565673828

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.0001671314239502

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00021505355834961

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00021219253540039

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0002439022064209

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00094103813171387

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00061488151550293

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0031349658966064

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00063991546630859

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040197372436523

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.0002138614654541

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00020408630371094

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00020003318786621

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00041890144348145

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00043010711669922

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.0003821849822998

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00035905838012695

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00034999847412109

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00034999847412109

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00046491622924805

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00043201446533203

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0025758743286133

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00060296058654785

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00048208236694336

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00033712387084961

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00032496452331543

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00032305717468262

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00033688545227051

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00032496452331543

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.0003209114074707

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00027298927307129

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00026202201843262

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00025582313537598

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00025296211242676

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00023579597473145

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0019199848175049

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00043702125549316

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00049185752868652

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00047206878662109

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.0004878044128418

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.0005040168762207

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00047802925109863

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00044107437133789

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00039076805114746

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00047206878662109

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00045990943908691

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00046706199645996

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00041508674621582

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00046706199645996

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0021498203277588

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00059103965759277

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0007481575012207

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00032496452331543

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00034594535827637

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00034213066101074

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00038599967956543

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00042390823364258

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00037312507629395

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0003209114074707

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00028896331787109

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00029206275939941

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00028705596923828

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00030899047851562

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0017118453979492

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00042009353637695

select * from plano where status=4 order by datainicio DESC, datafim DESC 
 Execution Time:0.0029408931732178

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0011501312255859

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00087189674377441

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00041007995605469

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00026893615722656

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00060415267944336

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00056695938110352

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00035500526428223

select * from planejamento where plano='18' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00075101852416992

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00032210350036621

select origemreceita, sum(valor) from planejamento where plano='18' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00050187110900879

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='18' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0011379718780518

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='18' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00099086761474609

select sum(valor) as total from planejamento where plano='18' and tipo=1 
 Execution Time:0.0004420280456543

select sum(valor) as total from planejamento where plano='18' and tipo=2 
 Execution Time:0.00029301643371582

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00059199333190918

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.0010600090026855

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00075507164001465

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00028800964355469

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00024509429931641

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00028204917907715

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00054693222045898

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00051498413085938

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00044417381286621

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00043296813964844

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00034213066101074

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00038719177246094

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0025410652160645

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00051593780517578

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0011248588562012

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00040984153747559

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00033307075500488

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00031900405883789

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.0003349781036377

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00033998489379883

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00032687187194824

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00033998489379883

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00031399726867676

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00031614303588867

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00032496452331543

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00045084953308105

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0030138492584229

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00073599815368652

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00055694580078125

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00042581558227539

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00035595893859863

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00033903121948242

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00036478042602539

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00035214424133301

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.0012259483337402

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00039100646972656

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00030994415283203

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00031781196594238

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00033092498779297

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00036811828613281

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0020051002502441

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00048112869262695

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0005340576171875

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00030994415283203

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00033998489379883

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00029611587524414

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00028204917907715

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00027894973754883

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00027084350585938

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00033783912658691

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00027894973754883

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00031113624572754

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00023388862609863

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00021886825561523

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0013141632080078

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00038886070251465

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00071001052856445

SELECT *
FROM "categoriaeconomica"
ORDER BY "id" 
 Execution Time:0.00038504600524902

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00057005882263184

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00033807754516602

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.0002739429473877

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00024080276489258

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00027298927307129

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00026893615722656

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00021505355834961

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00020790100097656

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00023913383483887

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00023007392883301

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00023102760314941

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00077390670776367

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0020298957824707

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00044798851013184

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0014030933380127

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00048398971557617

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00040721893310547

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00033903121948242

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00034594535827637

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00035381317138672

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00034499168395996

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00031399726867676

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00032377243041992

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0003199577331543

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00031304359436035

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00034308433532715

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0026350021362305

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00067782402038574

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00056004524230957

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00043797492980957

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00024795532226562

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00021505355834961

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00020909309387207

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00025606155395508

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00034809112548828

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00029516220092773

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00029611587524414

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00023317337036133

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00022983551025391

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00021696090698242

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00021505355834961

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0017960071563721

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00065898895263672

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00037384033203125

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00054311752319336

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00036501884460449

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00029897689819336

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.0002739429473877

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00026607513427734

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00031590461730957

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00030899047851562

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0003349781036377

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00031018257141113

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00026988983154297

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00026106834411621

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00030612945556641

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0021700859069824

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0017218589782715

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00051999092102051

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00081300735473633

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00038003921508789

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00025105476379395

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00024104118347168

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00036096572875977

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0002739429473877

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00025200843811035

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00022292137145996

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00021791458129883

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00021696090698242

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00021100044250488

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00022411346435547

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0014879703521729

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0007939338684082

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0005338191986084

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041604042053223

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00040197372436523

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00033903121948242

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00024795532226562

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00023603439331055

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00023388862609863

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00025701522827148

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00023698806762695

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00026297569274902

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00025415420532227

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.0002899169921875

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00024700164794922

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0025889873504639

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00069308280944824

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00057506561279297

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00055098533630371

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00033402442932129

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00031399726867676

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00095415115356445

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00025486946105957

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00027799606323242

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00075793266296387

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00054097175598145

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00047183036804199

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00022315979003906

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00019502639770508

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00019502639770508

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0012660026550293

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00052499771118164

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00033402442932129

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00062108039855957

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00036120414733887

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.0003209114074707

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00028610229492188

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00035786628723145

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0003819465637207

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00034809112548828

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00045919418334961

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00093889236450195

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00077700614929199

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00036811828613281

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00027585029602051

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0021378993988037

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00046610832214355

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00054001808166504

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00049304962158203

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00029206275939941

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.0002589225769043

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00025486946105957

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00025296211242676

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00025415420532227

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00024890899658203

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00021791458129883

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00021195411682129

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00023412704467773

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00043296813964844

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00044488906860352

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.00152587890625

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00060701370239258

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041484832763672

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00057506561279297

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00033783912658691

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00037097930908203

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00033712387084961

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00034093856811523

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00029397010803223

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00028181076049805

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00023889541625977

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00030398368835449

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00031614303588867

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00031399726867676

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00026106834411621

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0012390613555908

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00050711631774902

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029683113098145

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00095391273498535

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00051307678222656

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00052690505981445

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.0004580020904541

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00043988227844238

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00027108192443848

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00032305717468262

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00026988983154297

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00025296211242676

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00024914741516113

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.0002439022064209

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00037193298339844

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0027079582214355

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00063610076904297

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00064301490783691

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00049710273742676

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00040793418884277

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00033998489379883

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.0003199577331543

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.0003209114074707

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0003209114074707

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00035190582275391

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00032520294189453

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00026202201843262

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00024700164794922

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.0002129077911377

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00020885467529297

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0012238025665283

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00035691261291504

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00032401084899902

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00053787231445312

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.0004730224609375

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00037598609924316

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.0003049373626709

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00030803680419922

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0011999607086182

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00078105926513672

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00029397010803223

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00021100044250488

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00019216537475586

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00032997131347656

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00027179718017578

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0015602111816406

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00042986869812012

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00022006034851074

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00046586990356445

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.0002739429473877

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00028109550476074

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.0002448558807373

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00024986267089844

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00025701522827148

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00022292137145996

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00026893615722656

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00023102760314941

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00023388862609863

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00022697448730469

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0002901554107666

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0018420219421387

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0011601448059082

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00047206878662109

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0043420791625977

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00060296058654785

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00054788589477539

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00049781799316406

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00046014785766602

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0005490779876709

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.0005190372467041

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00055599212646484

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00045108795166016

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0014638900756836

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.0005180835723877

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00047206878662109

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0041489601135254

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00082087516784668

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00045514106750488

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00062394142150879

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00036191940307617

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00029993057250977

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00029492378234863

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00029397010803223

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00030708312988281

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00034308433532715

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0003659725189209

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00028204917907715

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00026202201843262

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00022602081298828

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00022411346435547

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0015718936920166

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00040388107299805

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00043392181396484

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00075507164001465

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00056982040405273

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00048089027404785

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00043797492980957

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00035285949707031

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00031495094299316

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00032210350036621

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00035214424133301

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00047707557678223

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00048208236694336

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00045895576477051

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0004880428314209

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0020480155944824

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00091695785522461

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00053501129150391

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00093483924865723

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00064277648925781

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00041580200195312

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.0030369758605957

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.0003659725189209

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00030803680419922

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00030803680419922

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00032687187194824

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00029397010803223

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00030398368835449

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00032401084899902

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0003509521484375

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0024499893188477

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00053501129150391

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00048613548278809

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00065398216247559

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00045919418334961

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.0009009838104248

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00057196617126465

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00023984909057617

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00021600723266602

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00024199485778809

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00028705596923828

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00021600723266602

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00019693374633789

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00018787384033203

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00018811225891113

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0011899471282959

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00028681755065918

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00025796890258789

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00044703483581543

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00026106834411621

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00023484230041504

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00020718574523926

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.0002138614654541

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00022602081298828

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00021505355834961

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00020408630371094

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00020480155944824

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00020003318786621

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.0001981258392334

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00019383430480957

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0012738704681396

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0003349781036377

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028705596923828

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0006859302520752

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00051593780517578

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00050711631774902

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00050997734069824

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00054407119750977

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00067305564880371

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.0005791187286377

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00069594383239746

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00047016143798828

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00053811073303223

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00055503845214844

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0010280609130859

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0024528503417969

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00062799453735352

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00051403045654297

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00087904930114746

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00068306922912598

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00061893463134766

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00057888031005859

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00063490867614746

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00030303001403809

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.0003359317779541

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00026082992553711

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00023293495178223

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00038480758666992

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00026702880859375

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00027990341186523

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0037410259246826

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00069999694824219

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00056004524230957

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0041358470916748

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00056004524230957

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00042986869812012

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00044488906860352

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.0004429817199707

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00072908401489258

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00043201446533203

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00045204162597656

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.0004270076751709

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00041007995605469

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00050210952758789

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00054407119750977

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.003197193145752

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0007479190826416

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00046610832214355

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0030949115753174

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00060606002807617

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.0004570484161377

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00038695335388184

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00031495094299316

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0004570484161377

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00047993659973145

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00052309036254883

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.0005040168762207

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0005040168762207

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00038695335388184

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00024008750915527

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0032720565795898

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00073909759521484

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004429817199707

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00055694580078125

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00040197372436523

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00036001205444336

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00065898895263672

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00075483322143555

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00052189826965332

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00043606758117676

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0003509521484375

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00046205520629883

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00041794776916504

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.0003969669342041

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00046586990356445

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0027790069580078

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00068998336791992

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00063705444335938

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00059914588928223

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00053691864013672

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00046610832214355

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00049090385437012

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00046992301940918

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00047612190246582

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00038814544677734

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00034093856811523

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00049209594726562

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0005030632019043

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00049400329589844

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00047397613525391

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0020809173583984

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00047993659973145

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00048303604125977

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00063490867614746

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00042200088500977

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00035190582275391

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00032806396484375

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00036787986755371

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00037813186645508

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00041389465332031

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00034809112548828

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.0003349781036377

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00027298927307129

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00043988227844238

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00060296058654785

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0014069080352783

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00033903121948242

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028610229492188

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00078988075256348

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00047683715820312

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.0004580020904541

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00045990943908691

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00045013427734375

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00045204162597656

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00042295455932617

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00023913383483887

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00021815299987793

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0002138614654541

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00018501281738281

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00018811225891113

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.001176118850708

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00041890144348145

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00046491622924805

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00045990943908691

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00028705596923828

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00026202201843262

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00025486946105957

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00025081634521484

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00025200843811035

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00032711029052734

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00034499168395996

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.0002601146697998

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00025200843811035

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00024700164794922

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00034689903259277

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0023620128631592

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00070500373840332

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00037908554077148

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00043296813964844

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00025200843811035

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00020813941955566

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00023913383483887

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.0002448558807373

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00025677680969238

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00025010108947754

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00027298927307129

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00022101402282715

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00018787384033203

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00018596649169922

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00015592575073242

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0011980533599854

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00023102760314941

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00021886825561523

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0005950927734375

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.0004570484161377

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00040483474731445

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00050210952758789

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00052499771118164

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00050902366638184

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00050592422485352

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00053286552429199

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00044488906860352

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00027608871459961

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00029706954956055

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00043106079101562

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0022969245910645

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00041818618774414

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00033688545227051

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00056290626525879

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00037288665771484

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00033402442932129

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00033283233642578

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.0003058910369873

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00029897689819336

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00029087066650391

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0003209114074707

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.0003049373626709

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00030398368835449

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00031590461730957

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00031900405883789

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-08-30' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0021209716796875

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00046896934509277

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00039911270141602

