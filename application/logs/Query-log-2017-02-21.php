SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.097641944885254

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.04731297492981

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0625

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.14885807037354

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.043702840805054

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0031991004943848

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.062230110168457

select * from obm where id='8' limit 1 
 Execution Time:0.00045204162597656

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.068843126296997

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00055503845214844

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00038695335388184

select * from reprovacao where plano='31'; 
 Execution Time:0.30352115631104

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.060116052627563

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00033020973205566

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.45561099052429

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.11606597900391

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.15566897392273

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00078320503234863

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.0003209114074707

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00031185150146484

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.16045093536377

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0013082027435303

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00032782554626465

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00031900405883789

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0013909339904785

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00062417984008789

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00075602531433105

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00094914436340332

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00077486038208008

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00057792663574219

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00046396255493164

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00071501731872559

select * from reprovacao where plano='31'; 
 Execution Time:0.00088119506835938

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00087618827819824

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00066304206848145

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00076985359191895

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00067996978759766

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00032305717468262

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0005490779876709

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00024008750915527

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00022101402282715

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00038790702819824

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0024549961090088

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00033307075500488

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00024104118347168

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.001600980758667

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00082898139953613

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00099515914916992

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0012869834899902

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00061511993408203

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00098896026611328

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00056099891662598

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00080108642578125

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0012331008911133

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00060296058654785

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0011990070343018

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.0005958080291748

select * from obm where id='8' limit 1 
 Execution Time:0.0003359317779541

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0013329982757568

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00037002563476562

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00030803680419922

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0017600059509277

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00058197975158691

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00065708160400391

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0012190341949463

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0015180110931396

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00043392181396484

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00035190582275391

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0002589225769043

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00051999092102051

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028610229492188

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0004279613494873

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00031089782714844

select * from obm where id='8' limit 1 
 Execution Time:0.00022983551025391

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00043606758117676

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00040102005004883

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00031900405883789

select * from reprovacao where plano='31'; 
 Execution Time:0.00026178359985352

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0004270076751709

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00026106834411621

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0006868839263916

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00059294700622559

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.0003352165222168

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00096416473388672

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.0010409355163574

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00029802322387695

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00046801567077637

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00046420097351074

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00030517578125

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00029993057250977

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00030612945556641

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00029993057250977

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00034308433532715

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00045299530029297

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00064778327941895

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00081110000610352

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00084400177001953

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0016489028930664

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0016369819641113

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0006098747253418

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0013298988342285

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00068402290344238

select * from obm where id='8' limit 1 
 Execution Time:0.00044512748718262

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00040221214294434

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00026583671569824

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00024080276489258

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00026202201843262

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00024890899658203

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028610229492188

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00040316581726074

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00076794624328613

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0010030269622803

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00063610076904297

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0009148120880127

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0015621185302734

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0027039051055908

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0039830207824707

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00092983245849609

select * from obm where id='8' limit 1 
 Execution Time:0.00035619735717773

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00080108642578125

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00039887428283691

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00033283233642578

select * from reprovacao where plano='31'; 
 Execution Time:0.00038003921508789

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00090312957763672

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00037789344787598

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00055098533630371

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0015311241149902

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00065708160400391

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0010099411010742

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00036311149597168

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00034904479980469

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.0011301040649414

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.000762939453125

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00040221214294434

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00041389465332031

select * from reprovacao where plano='31'; 
 Execution Time:0.00064301490783691

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00072908401489258

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00069999694824219

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0015139579772949

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0021140575408936

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.0006721019744873

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0012528896331787

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00037407875061035

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00033211708068848

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.0011069774627686

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0025191307067871

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0010199546813965

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00039005279541016

select * from reprovacao where plano='31'; 
 Execution Time:0.00055098533630371

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00083494186401367

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004880428314209

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00073099136352539

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0011491775512695

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00043296813964844

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00081801414489746

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.0002589225769043

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.0002281665802002

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00067400932312012

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0015511512756348

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00042390823364258

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00036787986755371

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0021989345550537

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00081205368041992

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00087714195251465

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0012471675872803

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0011019706726074

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0013139247894287

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00038409233093262

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00031304359436035

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0013339519500732

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00052499771118164

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00059890747070312

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00086188316345215

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00058102607727051

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00088596343994141

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00086402893066406

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00084114074707031

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0010120868682861

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0012350082397461

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00078010559082031

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00045299530029297

select * from obm where id='8' limit 1 
 Execution Time:0.00034785270690918

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00050497055053711

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.000457763671875

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00039100646972656

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00036501884460449

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00035190582275391

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00037789344787598

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00052809715270996

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0006861686706543

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00056719779968262

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00037384033203125

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00027608871459961

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00029611587524414

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00027108192443848

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00032687187194824

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00042104721069336

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00054192543029785

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0016210079193115

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00097393989562988

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0012509822845459

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0010850429534912

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0011029243469238

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0010709762573242

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.0014221668243408

select * from obm where id='8' limit 1 
 Execution Time:0.000762939453125

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0003809928894043

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00025486946105957

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00022697448730469

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00026416778564453

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00027799606323242

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00026607513427734

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00036191940307617

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00060510635375977

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00069093704223633

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00078892707824707

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00060296058654785

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0010688304901123

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004880428314209

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00066399574279785

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00060701370239258

select * from obm where id='8' limit 1 
 Execution Time:0.0003809928894043

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00055098533630371

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00040102005004883

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00034523010253906

select * from reprovacao where plano='31'; 
 Execution Time:0.00040411949157715

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00060796737670898

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041508674621582

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00060009956359863

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0016570091247559

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00071096420288086

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0010640621185303

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00040793418884277

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00035595893859863

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.0011348724365234

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00050091743469238

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00040411949157715

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00034809112548828

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00037622451782227

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00034117698669434

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003969669342041

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0005800724029541

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00069212913513184

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00078105926513672

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00043797492980957

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00044798851013184

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0011649131774902

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00034379959106445

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00042200088500977

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00042200088500977

select * from obm where id='8' limit 1 
 Execution Time:0.00024700164794922

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00049805641174316

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00038504600524902

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0003509521484375

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00036191940307617

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00034499168395996

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003809928894043

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00051689147949219

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0006248950958252

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00051593780517578

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00038290023803711

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00032496452331543

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00058102607727051

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00034809112548828

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0011360645294189

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00046586990356445

select * from obm where id='8' limit 1 
 Execution Time:0.0003349781036377

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00078487396240234

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00040912628173828

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00036907196044922

select * from reprovacao where plano='31'; 
 Execution Time:0.00046586990356445

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00065994262695312

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00039887428283691

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00050997734069824

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0016281604766846

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.0006871223449707

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0010981559753418

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00043702125549316

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00038003921508789

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.0012688636779785

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0010151863098145

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00079989433288574

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00066399574279785

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0012140274047852

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00049281120300293

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00075602531433105

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00069189071655273

select * from obm where id='8' limit 1 
 Execution Time:0.00036287307739258

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00049901008605957

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00035214424133301

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00060105323791504

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00065994262695312

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041604042053223

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00051093101501465

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0012531280517578

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00067806243896484

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00097990036010742

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='31' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00075507164001465

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00035905838012695

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.0003049373626709

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0012149810791016

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00091695785522461

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00053501129150391

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00085902214050293

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0097849369049072

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.015197038650513

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.013076066970825

select * from obm where id='8' limit 1 
 Execution Time:0.0004420280456543

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00045990943908691

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00029683113098145

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00025200843811035

select * from reprovacao where plano='31'; 
 Execution Time:0.00022411346435547

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.015135049819946

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00035405158996582

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.023369073867798

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0042259693145752

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.043272972106934

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00096487998962402

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.0002901554107666

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00024104118347168

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00080609321594238

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00063204765319824

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00037097930908203

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00035381317138672

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0013878345489502

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00072383880615234

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00045204162597656

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00064992904663086

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00071501731872559

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00036811828613281

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00043201446533203

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00027894973754883

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00049805641174316

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029087066650391

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00042986869812012

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00032997131347656

select * from obm where id='8' limit 1 
 Execution Time:0.00024294853210449

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00046682357788086

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00037503242492676

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00023698806762695

select * from reprovacao where plano='31'; 
 Execution Time:0.00022196769714355

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00040292739868164

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00025486946105957

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00034403800964355

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00060105323791504

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00033187866210938

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00062108039855957

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00025486946105957

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00022721290588379

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00055503845214844

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00064182281494141

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00047898292541504

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00035500526428223

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00041508674621582

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00040721893310547

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0010321140289307

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00062298774719238

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00067496299743652

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00056791305541992

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00043511390686035

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00037312507629395

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00062894821166992

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00039792060852051

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00054097175598145

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00045013427734375

select * from obm where id='8' limit 1 
 Execution Time:0.00033783912658691

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0006711483001709

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00028085708618164

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00023102760314941

select * from reprovacao where plano='31'; 
 Execution Time:0.00028300285339355

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00040006637573242

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00025320053100586

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00037598609924316

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.001025915145874

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.0004580020904541

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00079607963562012

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00028085708618164

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00023508071899414

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00071978569030762

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00094413757324219

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0006108283996582

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0005338191986084

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00089812278747559

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00058293342590332

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00088691711425781

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00067806243896484

select * from obm where id='8' limit 1 
 Execution Time:0.00044107437133789

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00046801567077637

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00028395652770996

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0002751350402832

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0006258487701416

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00032591819763184

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00049686431884766

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.030855178833008

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00049400329589844

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0011749267578125

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='31' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00077104568481445

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.0010480880737305

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00035905838012695

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00057291984558105

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00088691711425781

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00028181076049805

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00049400329589844

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003058910369873

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00043511390686035

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00034904479980469

select * from obm where id='8' limit 1 
 Execution Time:0.0002589225769043

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00046706199645996

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00037288665771484

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00026917457580566

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00048112869262695

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029706954956055

select a.obm from acesso as a, modulo as m where usuario='7' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00047492980957031

SELECT * FROM plano WHERE status<4 and status>0 and obm in (4) ORDER BY datainicio DESC 
 Execution Time:0.0004279613494873

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00082206726074219

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.0010809898376465

select * from obm where id in (1,4,5,3,9,7,8,10) 
 Execution Time:0.00061583518981934

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.01655387878418

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0011341571807861

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.0010809898376465

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.0047099590301514

SELECT *
FROM "usuario"
WHERE "id" =  '7' 
 Execution Time:0.00056290626525879

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00054001808166504

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00072503089904785

select * from obm where id in (1,4,5,3,9,7,8,10) 
 Execution Time:0.00043082237243652

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00047898292541504

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00047206878662109

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00051498413085938

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00048089027404785

SELECT *
FROM "usuario"
WHERE "id" =  '7' 
 Execution Time:0.0005180835723877

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00040292739868164

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00048208236694336

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.0005650520324707

select * from obm where id in (1,4,5,3,9,7,8,10) 
 Execution Time:0.00027108192443848

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00028395652770996

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00045204162597656

select * from acesso where usuario='7' and obm='3' 
 Execution Time:0.00028181076049805

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00028014183044434

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00043392181396484

SELECT *
FROM "usuario"
WHERE "id" =  '7' 
 Execution Time:0.00040984153747559

SELECT *
FROM "obm"
WHERE "id" =  '1' 
 Execution Time:0.00030183792114258

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00039100646972656

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.0006568431854248

select * from obm where id in (1,4,5,3,9,7,8,10) 
 Execution Time:0.00030612945556641

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00031304359436035

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00033283233642578

select * from acesso where usuario='7' and obm='1' 
 Execution Time:0.00026893615722656

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00030398368835449

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00033402442932129

SELECT *
FROM "usuario"
WHERE "id" =  '7' 
 Execution Time:0.00036501884460449

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00025200843811035

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028300285339355

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00041294097900391

select * from obm where id in (1,4,5,3,9,7,8,10) 
 Execution Time:0.0002439022064209

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00026082992553711

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00026297569274902

select * from acesso where usuario='7' and obm='9' 
 Execution Time:0.00026297569274902

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00028491020202637

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00028586387634277

SELECT *
FROM "usuario"
WHERE "id" =  '7' 
 Execution Time:0.0005190372467041

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00039291381835938

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00046610832214355

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00061702728271484

select * from obm where id in (1,4,5,3,9,7,8,10) 
 Execution Time:0.00039410591125488

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00043487548828125

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00043082237243652

select * from acesso where usuario='7' and obm='7' 
 Execution Time:0.00034594535827637

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00040817260742188

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00043416023254395

SELECT *
FROM "usuario"
WHERE "id" =  '7' 
 Execution Time:0.00040912628173828

SELECT *
FROM "obm"
WHERE "id" =  '10' 
 Execution Time:0.00028705596923828

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00030803680419922

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00042986869812012

select * from obm where id in (1,4,5,3,9,7,8,10) 
 Execution Time:0.00028705596923828

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00030994415283203

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00031495094299316

select * from acesso where usuario='7' and obm='10' 
 Execution Time:0.00026297569274902

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00043106079101562

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00042390823364258

SELECT *
FROM "usuario"
WHERE "id" =  '7' 
 Execution Time:0.00038886070251465

SELECT *
FROM "obm"
WHERE "id" =  '4' 
 Execution Time:0.00027608871459961

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041699409484863

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00064277648925781

select * from obm where id in (1,4,5,3,9,7,8,10) 
 Execution Time:0.00029516220092773

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00033903121948242

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00039196014404297

select * from acesso where usuario='7' and obm='4' 
 Execution Time:0.00028109550476074

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00029706954956055

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00029301643371582

SELECT *
FROM "usuario"
WHERE "id" =  '7' 
 Execution Time:0.00046992301940918

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00036001205444336

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00038504600524902

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00046181678771973

select * from obm where id in (1,4,5,3,9,7,8,10) 
 Execution Time:0.00031495094299316

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00056195259094238

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00035309791564941

select * from acesso where usuario='7' and obm='8' 
 Execution Time:0.00029683113098145

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00034999847412109

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00035190582275391

SELECT *
FROM "usuario"
WHERE "id" =  '7' 
 Execution Time:0.00037503242492676

SELECT *
FROM "obm"
WHERE "id" =  '5' 
 Execution Time:0.00028610229492188

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029397010803223

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00040197372436523

select * from obm where id in (1,4,5,3,9,7,8,10) 
 Execution Time:0.00025415420532227

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00029397010803223

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00028514862060547

select * from acesso where usuario='7' and obm='5' 
 Execution Time:0.00022602081298828

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00026512145996094

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00033903121948242

SELECT *
FROM "modulo"
ORDER BY "nome" ASC 
 Execution Time:0.00061297416687012

select id from modulo where nome='controledeacesso' order by id asc limit 1 
 Execution Time:0.00060582160949707

select * from acesso where usuario='2' and modulo='17' and nivel>0 
 Execution Time:0.00038790702819824

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003659725189209

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00049185752868652

select * from obm where id in (1,4,5,3,9,7,8,10) 
 Execution Time:0.00026297569274902

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0003352165222168

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00041484832763672

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.0004580020904541

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00042891502380371

select id from modulo where nome='controledeacesso' order by id asc limit 1 
 Execution Time:0.00053691864013672

select * from acesso where usuario='2' and modulo='17' and nivel>0 
 Execution Time:0.00040793418884277

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00033116340637207

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00042605400085449

select * from obm where id in (1,4,5,3,9,7,8,10) 
 Execution Time:0.00030398368835449

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0006248950958252

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00038695335388184

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00031805038452148

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00038981437683105

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00043511390686035

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00029802322387695

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00025010108947754

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00052618980407715

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029087066650391

select a.obm from acesso as a, modulo as m where usuario='7' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00052499771118164

SELECT * FROM plano WHERE status<4 and status>0 and obm in (4) ORDER BY datainicio DESC 
 Execution Time:0.00034904479980469

