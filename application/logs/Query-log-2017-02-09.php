SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.098207950592041

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.081662893295288

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.051587820053101

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.18232297897339

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.043869018554688

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.018541097640991

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,8,7,10,3,9,4,5) ORDER BY datainicio DESC 
 Execution Time:0.11972117424011

select * from obm where id='8' limit 1 
 Execution Time:0.035161018371582

select * from obm where id='7' limit 1 
 Execution Time:0.0005500316619873

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.039709806442261

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00057411193847656

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0004730224609375

select * from reprovacao where plano='31'; 
 Execution Time:0.050607204437256

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.071712970733643

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00061988830566406

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.075421094894409

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.048082828521729

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.079550981521606

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.013206958770752

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00040793418884277

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00033307075500488

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.087173938751221

select * from plano where status=4 order by datainicio DESC, datafim DESC 
 Execution Time:0.0024991035461426

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0018880367279053

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0017189979553223

select * from plano where status=4 and obm='4' order by datainicio DESC, datafim DESC 
 Execution Time:0.00098586082458496

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00074911117553711

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00068402290344238

SELECT *
FROM "plano"
WHERE "id" =  '14' 
 Execution Time:0.00056099891662598

SELECT *
FROM "plano"
WHERE "id" =  '14' 
 Execution Time:0.00044012069702148

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00070095062255859

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0010659694671631

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040102005004883

select * from planejamento where plano='14' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0007319450378418

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00045108795166016

select origemreceita, sum(valor) from planejamento where plano='14' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00071406364440918

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='14' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0013580322265625

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='14' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00079703330993652

select sum(valor) as total from planejamento where plano='14' and tipo=1 
 Execution Time:0.00039505958557129

select sum(valor) as total from planejamento where plano='14' and tipo=2 
 Execution Time:0.0004279613494873

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0019011497497559

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.001255989074707

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00081896781921387

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00078916549682617

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00066089630126953

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00049901008605957

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00026798248291016

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0032720565795898

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00075197219848633

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0012450218200684

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00083088874816895

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00064992904663086

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00053501129150391

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00023698806762695

select st.nome as setor, ss.nome as subsetor, sum(p.valor) as valor from planejamento as p, subsetor as ss, setor as st where plano=31 and ss.id=p.subsetor and ss.setor=st.id group by st.nome, ss.nome 
 Execution Time:0.0024192333221436

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.081031084060669

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0014009475708008

SELECT *
FROM "obm" 
 Execution Time:0.00088691711425781

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0024070739746094

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.0015771389007568

select * from obm where id in (1,7,8,10,3,9,4,5) 
 Execution Time:0.0003969669342041

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00057411193847656

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0012481212615967

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00060200691223145

select * from modulo where id in (20,18,17,19,22,21,15,7,16) 
 Execution Time:0.00057005882263184

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00057291984558105

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00049591064453125

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00059986114501953

select * from obm where id in (1,7,8,10,3,9,4,5) 
 Execution Time:0.00034379959106445

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00043010711669922

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00039100646972656

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00039219856262207

select * from modulo where id in (20,18,17,19,22,21,15,7,16) 
 Execution Time:0.00042200088500977

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00044012069702148

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00032591819763184

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00037002563476562

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00049209594726562

select * from obm where id in (1,7,8,10,3,9,4,5) 
 Execution Time:0.00028491020202637

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00028705596923828

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00028800964355469

select * from acesso where usuario='2' and obm='3' 
 Execution Time:0.00034499168395996

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00034308433532715

select * from modulo where id in (20,18,17,19,22,21,15,7,16) 
 Execution Time:0.00030803680419922

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00042295455932617

SELECT *
FROM "obm"
WHERE "id" =  '1' 
 Execution Time:0.0003049373626709

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00031685829162598

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00043702125549316

select * from obm where id in (1,7,8,10,3,9,4,5) 
 Execution Time:0.00028300285339355

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00034308433532715

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00037384033203125

select * from acesso where usuario='2' and obm='1' 
 Execution Time:0.00030088424682617

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00030994415283203

select * from modulo where id in (20,18,17,19,22,21,15,7,16) 
 Execution Time:0.0003201961517334

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00050997734069824

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0004417896270752

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00036215782165527

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00064682960510254

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00044608116149902

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0014522075653076

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,8,7,10,3,9,4,5) ORDER BY datainicio DESC 
 Execution Time:0.0019059181213379

select * from obm where id='8' limit 1 
 Execution Time:0.0010440349578857

select * from obm where id='7' limit 1 
 Execution Time:0.00055408477783203

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0016469955444336

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00061917304992676

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00027203559875488

select * from reprovacao where plano='31'; 
 Execution Time:0.00048589706420898

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0012409687042236

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0005180835723877

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0008089542388916

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.001338005065918

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00050497055053711

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00089001655578613

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00029802322387695

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00024604797363281

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00077104568481445

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0013339519500732

SELECT *
FROM "origemreceita" 
 Execution Time:0.00050997734069824

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0010240077972412

SELECT *
FROM "origemreceita" 
 Execution Time:0.00025010108947754

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0010340213775635

SELECT *
FROM "origemreceita" 
 Execution Time:0.00028109550476074

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00088620185852051

SELECT *
FROM "categoriaeconomica"
ORDER BY "id" 
 Execution Time:0.00029492378234863

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0011739730834961

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00096678733825684

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00084900856018066

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00096893310546875

SELECT *
FROM "especificacao"
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0014388561248779

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0006110668182373

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00041794776916504

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0003509521484375

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00073003768920898

SELECT *
FROM "especificacao"
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00081205368041992

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0019631385803223

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00078797340393066

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0019209384918213

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0011978149414062

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00089097023010254

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0022099018096924

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,8,7,10,3,9,4,5) ORDER BY datainicio DESC 
 Execution Time:0.0017142295837402

select * from obm where id='8' limit 1 
 Execution Time:0.00058293342590332

select * from obm where id='7' limit 1 
 Execution Time:0.00073790550231934

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0006248950958252

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00034904479980469

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00023388862609863

select * from reprovacao where plano='31'; 
 Execution Time:0.00036120414733887

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00068998336791992

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003199577331543

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00063395500183105

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.001338005065918

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00050115585327148

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00064301490783691

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00025606155395508

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00024700164794922

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00079011917114258

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0012471675872803

SELECT *
FROM "objeto"
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00059103965759277

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00099277496337891

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00060296058654785

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0005500316619873

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00089097023010254

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00064516067504883

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00069093704223633

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,8,7,10,3,9,4,5) ORDER BY datainicio DESC 
 Execution Time:0.00080204010009766

select * from obm where id='8' limit 1 
 Execution Time:0.0005650520324707

select * from obm where id='7' limit 1 
 Execution Time:0.00021719932556152

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00060415267944336

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00042414665222168

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00032496452331543

select * from reprovacao where plano='31'; 
 Execution Time:0.00037312507629395

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00057792663574219

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00026798248291016

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00043988227844238

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0012269020080566

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00040483474731445

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00081992149353027

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00027799606323242

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00024104118347168

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00046396255493164

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0015130043029785

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0010440349578857

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00040507316589355

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00052499771118164

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003349781036377

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0004570484161377

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,8,7,10,3,9,4,5) ORDER BY datainicio DESC 
 Execution Time:0.00033807754516602

select * from obm where id='8' limit 1 
 Execution Time:0.00025200843811035

select * from obm where id='7' limit 1 
 Execution Time:0.00023913383483887

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00070595741271973

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003659725189209

SELECT *
FROM "obm" 
 Execution Time:0.00027680397033691

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00069904327392578

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00056815147399902

SELECT *
FROM "obm" 
 Execution Time:0.00033807754516602

SELECT *
FROM "obm"
WHERE "id" =  '4' 
 Execution Time:0.00040102005004883

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00069284439086914

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004889965057373

SELECT *
FROM "obm" 
 Execution Time:0.00023007392883301

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00053286552429199

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00061297416687012

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00066900253295898

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0013010501861572

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00060915946960449

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00057411193847656

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,8,7,10,3,9,4,5) ORDER BY datainicio DESC 
 Execution Time:0.0015869140625

select * from obm where id='8' limit 1 
 Execution Time:0.00037002563476562

select * from obm where id='7' limit 1 
 Execution Time:0.00029492378234863

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00064802169799805

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00035500526428223

SELECT *
FROM "obm" 
 Execution Time:0.00024914741516113

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00048279762268066

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00032186508178711

SELECT *
FROM "obm" 
 Execution Time:0.00023889541625977

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.0002751350402832

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00044703483581543

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00033998489379883

SELECT *
FROM "obm" 
 Execution Time:0.00023889541625977

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00047206878662109

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00037908554077148

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00032806396484375

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00052690505981445

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00037503242492676

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00050115585327148

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,8,7,10,3,9,4,5) ORDER BY datainicio DESC 
 Execution Time:0.00047087669372559

select * from obm where id='8' limit 1 
 Execution Time:0.00030088424682617

select * from obm where id='7' limit 1 
 Execution Time:0.00030088424682617

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0005190372467041

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00050997734069824

SELECT *
FROM "obm" 
 Execution Time:0.0003349781036377

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00043392181396484

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029897689819336

SELECT *
FROM "obm" 
 Execution Time:0.00023198127746582

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00026106834411621

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.000640869140625

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00052189826965332

SELECT *
FROM "obm" 
 Execution Time:0.00041317939758301

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00041580200195312

SELECT *
FROM "origemreceita" 
 Execution Time:0.00021982192993164

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0005190372467041

SELECT *
FROM "origemreceita" 
 Execution Time:0.00031208992004395

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00076699256896973

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00063085556030273

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0010690689086914

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0012340545654297

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00087785720825195

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.001835823059082

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,8,7,10,3,9,4,5) ORDER BY datainicio DESC 
 Execution Time:0.0011229515075684

select * from obm where id='8' limit 1 
 Execution Time:0.00032997131347656

select * from obm where id='7' limit 1 
 Execution Time:0.00028300285339355

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00052595138549805

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00031495094299316

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00026893615722656

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00047588348388672

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029587745666504

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00051784515380859

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,8,7,10,3,9,4,5) ORDER BY datainicio DESC 
 Execution Time:0.00039386749267578

select * from obm where id='8' limit 1 
 Execution Time:0.00028514862060547

select * from obm where id='7' limit 1 
 Execution Time:0.00025391578674316

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00042200088500977

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00027203559875488

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00025415420532227

select * from reprovacao where plano='21'; 
 Execution Time:0.000244140625

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00055193901062012

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00033807754516602

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00038695335388184

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00081110000610352

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00037693977355957

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00069403648376465

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.00027298927307129

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00022792816162109

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00043296813964844

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00050497055053711

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00037813186645508

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0003809928894043

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00075197219848633

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00078701972961426

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00058794021606445

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,8,7,10,3,9,4,5) ORDER BY datainicio DESC 
 Execution Time:0.0011191368103027

select * from obm where id='8' limit 1 
 Execution Time:0.0010809898376465

select * from obm where id='7' limit 1 
 Execution Time:0.00081110000610352

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00083088874816895

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00060820579528809

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0010001659393311

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0013971328735352

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00073385238647461

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0013689994812012

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0019211769104004

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00069904327392578

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00079989433288574

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='31' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00067782402038574

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00029516220092773

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00030398368835449

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00056099891662598

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00040388107299805

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00036191940307617

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00054597854614258

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00045609474182129

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00054001808166504

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,8,7,10,3,9,4,5) ORDER BY datainicio DESC 
 Execution Time:0.00037693977355957

select * from obm where id='8' limit 1 
 Execution Time:0.00030183792114258

select * from obm where id='7' limit 1 
 Execution Time:0.00028800964355469

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00045990943908691

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00032901763916016

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00024700164794922

select * from reprovacao where plano='31'; 
 Execution Time:0.00021004676818848

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00041508674621582

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029492378234863

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0004119873046875

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0006401538848877

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00034308433532715

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00058388710021973

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00028491020202637

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.000244140625

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00041699409484863

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00070691108703613

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00031709671020508

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00040006637573242

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00076103210449219

SELECT *
FROM "especificacao"
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0004420280456543

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00055193901062012

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00049209594726562

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00043487548828125

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00069379806518555

SELECT *
FROM "especificacao"
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0010819435119629

SELECT *
FROM "especificacao"
WHERE "id" =  '30' 
 Execution Time:0.00052809715270996

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00056219100952148

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00042390823364258

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00033187866210938

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00076699256896973

SELECT *
FROM "especificacao"
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00054001808166504

SELECT *
FROM "especificacao"
WHERE "id" =  '30' 
 Execution Time:0.00041794776916504

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00046300888061523

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00045895576477051

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00044012069702148

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00059700012207031

SELECT *
FROM "especificacao"
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00055503845214844

SELECT *
FROM "especificacao"
WHERE "id" =  '30' 
 Execution Time:0.0003659725189209

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00040388107299805

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00032591819763184

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00027298927307129

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00043582916259766

SELECT *
FROM "especificacao"
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00046610832214355

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00087499618530273

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0008089542388916

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0004880428314209

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00070595741271973

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00026106834411621

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00042915344238281

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,8,7,10,3,9,4,5) ORDER BY datainicio DESC 
 Execution Time:0.00069212913513184

select * from obm where id='8' limit 1 
 Execution Time:0.00023508071899414

select * from obm where id='7' limit 1 
 Execution Time:0.00020503997802734

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00076103210449219

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00038599967956543

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00029611587524414

select * from reprovacao where plano='31'; 
 Execution Time:0.0004270076751709

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00065302848815918

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00034499168395996

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00066304206848145

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0014040470123291

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00071001052856445

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0011320114135742

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00035381317138672

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00032305717468262

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00081014633178711

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00048589706420898

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00056314468383789

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00041413307189941

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00082111358642578

SELECT *
FROM "especificacao"
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00077581405639648

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00054001808166504

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00052404403686523

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00037908554077148

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00052785873413086

SELECT *
FROM "especificacao"
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00049591064453125

SELECT *
FROM "especificacao"
WHERE "id" =  '30' 
 Execution Time:0.00047993659973145

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00084805488586426

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00034880638122559

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0006101131439209

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.001223087310791

SELECT *
FROM "especificacao"
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0012068748474121

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00044393539428711

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00029397010803223

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00025296211242676

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00045609474182129

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00044393539428711

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00064301490783691

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,8,7,10,3,9,4,5) ORDER BY datainicio DESC 
 Execution Time:0.00057888031005859

select * from obm where id='8' limit 1 
 Execution Time:0.00046300888061523

select * from obm where id='7' limit 1 
 Execution Time:0.00087380409240723

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00041890144348145

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00031399726867676

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00023603439331055

select * from reprovacao where plano='31'; 
 Execution Time:0.00023293495178223

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00047707557678223

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00031208992004395

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0003669261932373

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00055480003356934

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00032687187194824

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0007929801940918

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00034403800964355

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00026583671569824

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00043201446533203

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00047588348388672

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00036406517028809

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0003199577331543

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0005190372467041

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00038409233093262

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00050020217895508

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,8,7,10,3,9,4,5) ORDER BY datainicio DESC 
 Execution Time:0.00039792060852051

select * from obm where id='8' limit 1 
 Execution Time:0.00034713745117188

select * from obm where id='7' limit 1 
 Execution Time:0.00033998489379883

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00062394142150879

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00037813186645508

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00031495094299316

select * from reprovacao where plano='21'; 
 Execution Time:0.00048398971557617

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00050497055053711

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00032806396484375

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0008549690246582

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0011358261108398

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.0004727840423584

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00065088272094727

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.00027918815612793

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.0002598762512207

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.0008080005645752

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00053906440734863

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00039577484130859

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00035309791564941

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00088596343994141

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00051093101501465

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00041389465332031

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00027680397033691

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00023603439331055

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0004432201385498

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00025200843811035

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0010430812835693

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,8,7,10,3,9,4,5) ORDER BY datainicio DESC 
 Execution Time:0.00089502334594727

select * from obm where id='8' limit 1 
 Execution Time:0.00058817863464355

select * from obm where id='7' limit 1 
 Execution Time:0.00052285194396973

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00062417984008789

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00037789344787598

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00031709671020508

select * from reprovacao where plano='21'; 
 Execution Time:0.00061297416687012

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00055694580078125

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003669261932373

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0010471343994141

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00080704689025879

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00057101249694824

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00076413154602051

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.00034809112548828

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00032997131347656

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00083088874816895

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00046300888061523

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.0003960132598877

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00041103363037109

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00068902969360352

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00032997131347656

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00054788589477539

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00039982795715332

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00033903121948242

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0008549690246582

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00043296813964844

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00062203407287598

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00042295455932617

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00043487548828125

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00085306167602539

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00047087669372559

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00070595741271973

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,8,7,10,3,9,4,5) ORDER BY datainicio DESC 
 Execution Time:0.00065398216247559

select * from obm where id='8' limit 1 
 Execution Time:0.00046110153198242

select * from obm where id='7' limit 1 
 Execution Time:0.00028109550476074

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00041699409484863

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00037312507629395

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00028514862060547

select * from reprovacao where plano='31'; 
 Execution Time:0.00023198127746582

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00043201446533203

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029420852661133

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00038599967956543

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00053596496582031

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.0003049373626709

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00056290626525879

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00025510787963867

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00025105476379395

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00043892860412598

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00046801567077637

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00035881996154785

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00034594535827637

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00052809715270996

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00036191940307617

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00049400329589844

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,8,7,10,3,9,4,5) ORDER BY datainicio DESC 
 Execution Time:0.00040507316589355

select * from obm where id='8' limit 1 
 Execution Time:0.00030398368835449

select * from obm where id='7' limit 1 
 Execution Time:0.00028300285339355

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00045418739318848

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.0002901554107666

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00023102760314941

select * from reprovacao where plano='21'; 
 Execution Time:0.00024294853210449

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00042200088500977

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0002591609954834

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00036501884460449

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00058412551879883

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00032806396484375

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00065493583679199

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.00026917457580566

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00023603439331055

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00051093101501465

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00049805641174316

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00042414665222168

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0003659725189209

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00058913230895996

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040888786315918

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0005638599395752

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,8,7,10,3,9,4,5) ORDER BY datainicio DESC 
 Execution Time:0.00047588348388672

select * from obm where id='8' limit 1 
 Execution Time:0.00037693977355957

select * from obm where id='7' limit 1 
 Execution Time:0.00051307678222656

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00052690505981445

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00039100646972656

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.0003361701965332

select * from reprovacao where plano='21'; 
 Execution Time:0.00036001205444336

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00062799453735352

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00047612190246582

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00043797492980957

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00084900856018066

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00045299530029297

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00074005126953125

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.00027108192443848

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.0002439022064209

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.0004270076751709

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00046396255493164

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00036001205444336

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00031900405883789

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00053000450134277

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00037121772766113

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00049400329589844

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,8,7,10,3,9,4,5) ORDER BY datainicio DESC 
 Execution Time:0.00040292739868164

select * from obm where id='8' limit 1 
 Execution Time:0.00031614303588867

select * from obm where id='7' limit 1 
 Execution Time:0.00027894973754883

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00048708915710449

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00031495094299316

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00023698806762695

select * from reprovacao where plano='31'; 
 Execution Time:0.00020599365234375

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00041723251342773

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00026202201843262

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00032901763916016

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00052499771118164

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00031089782714844

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0006248950958252

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00028705596923828

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00023412704467773

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00040507316589355

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00049996376037598

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00039386749267578

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00035810470581055

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00055289268493652

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00033998489379883

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00054597854614258

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,8,7,10,3,9,4,5) ORDER BY datainicio DESC 
 Execution Time:0.00039196014404297

select * from obm where id='8' limit 1 
 Execution Time:0.00054597854614258

select * from obm where id='7' limit 1 
 Execution Time:0.00040912628173828

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00056982040405273

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00045490264892578

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00039100646972656

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00065708160400391

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00042605400085449

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00069403648376465

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,8,7,10,3,9,4,5) ORDER BY datainicio DESC 
 Execution Time:0.00055813789367676

select * from obm where id='8' limit 1 
 Execution Time:0.00036096572875977

select * from obm where id='7' limit 1 
 Execution Time:0.00035881996154785

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00042605400085449

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00028204917907715

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00030207633972168

select * from reprovacao where plano='31'; 
 Execution Time:0.00034499168395996

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0005040168762207

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00044918060302734

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00064992904663086

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0018718242645264

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.0013020038604736

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00081706047058105

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00027298927307129

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00023007392883301

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00043606758117676

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00046992301940918

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0003659725189209

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00032782554626465

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00054597854614258

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00033092498779297

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00051403045654297

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,8,7,10,3,9,4,5) ORDER BY datainicio DESC 
 Execution Time:0.00047993659973145

select * from obm where id='8' limit 1 
 Execution Time:0.00030398368835449

select * from obm where id='7' limit 1 
 Execution Time:0.00030708312988281

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00043702125549316

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00026297569274902

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00024700164794922

select * from reprovacao where plano='21'; 
 Execution Time:0.0003359317779541

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00065803527832031

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00034308433532715

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00039410591125488

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00072097778320312

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00037693977355957

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00064802169799805

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.0002598762512207

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00024104118347168

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00040411949157715

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00054693222045898

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0006098747253418

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00054717063903809

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00072622299194336

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00047087669372559

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00072503089904785

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,8,7,10,3,9,4,5) ORDER BY datainicio DESC 
 Execution Time:0.00052595138549805

select * from obm where id='8' limit 1 
 Execution Time:0.00037193298339844

select * from obm where id='3' limit 1 
 Execution Time:0.00037312507629395

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00041699409484863

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00030994415283203

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00025081634521484

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00048208236694336

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00027799606323242

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00043606758117676

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,8,7,10,3,9,4,5) ORDER BY datainicio DESC 
 Execution Time:0.00033307075500488

select * from obm where id='8' limit 1 
 Execution Time:0.00024890899658203

select * from obm where id='3' limit 1 
 Execution Time:0.00021696090698242

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00041890144348145

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00030612945556641

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00026512145996094

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00049304962158203

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00030398368835449

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00043606758117676

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,8,7,10,3,9,4,5) ORDER BY datainicio DESC 
 Execution Time:0.00031495094299316

select * from obm where id='8' limit 1 
 Execution Time:0.00021910667419434

select * from obm where id='3' limit 1 
 Execution Time:0.00020980834960938

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00043201446533203

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00029182434082031

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00025796890258789

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00066208839416504

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00034403800964355

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00048494338989258

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,8,7,10,3,9,4,5) ORDER BY datainicio DESC 
 Execution Time:0.00031495094299316

select * from obm where id='8' limit 1 
 Execution Time:0.00022196769714355

select * from obm where id='3' limit 1 
 Execution Time:0.0002129077911377

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0013959407806396

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0010321140289307

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00079607963562012

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00054097175598145

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00030899047851562

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00041103363037109

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,8,7,10,3,9,4,5) ORDER BY datainicio DESC 
 Execution Time:0.00031399726867676

select * from obm where id='8' limit 1 
 Execution Time:0.0002291202545166

select * from obm where id='3' limit 1 
 Execution Time:0.00021886825561523

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00040793418884277

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00031113624572754

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0002739429473877

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00044703483581543

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040698051452637

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0013988018035889

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,8,7,10,3,9,4,5) ORDER BY datainicio DESC 
 Execution Time:0.00081992149353027

select * from obm where id='8' limit 1 
 Execution Time:0.00036406517028809

select * from obm where id='1' limit 1 
 Execution Time:0.00036406517028809

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00042414665222168

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00032305717468262

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00031113624572754

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00046014785766602

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00026988983154297

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00042200088500977

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,8,7,10,3,9,4,5) ORDER BY datainicio DESC 
 Execution Time:0.00028705596923828

select * from obm where id='8' limit 1 
 Execution Time:0.00026297569274902

select * from plano where status=4 order by datainicio DESC, datafim DESC 
 Execution Time:0.00072789192199707

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00095582008361816

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00094413757324219

select * from plano where status=4 and obm='7' order by datainicio DESC, datafim DESC 
 Execution Time:0.00063800811767578

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00050902366638184

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00051188468933105

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00054001808166504

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00084900856018066

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00085902214050293

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0013561248779297

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0010719299316406

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.001215934753418

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0005650520324707

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00049281120300293

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00099492073059082

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='21' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00094413757324219

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.00044012069702148

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.0003969669342041

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00075697898864746

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004270076751709

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00049996376037598

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00050806999206543

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00043702125549316

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00079202651977539

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00043296813964844

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00064897537231445

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,8,7,10,3,9,4,5) ORDER BY datainicio DESC 
 Execution Time:0.00049304962158203

select * from obm where id='8' limit 1 
 Execution Time:0.00032615661621094

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00092887878417969

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0010931491851807

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00075387954711914

select * from reprovacao where plano='31'; 
 Execution Time:0.00052380561828613

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00075507164001465

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00038719177246094

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00078392028808594

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0011570453643799

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00053787231445312

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00073599815368652

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00034689903259277

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00027608871459961

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00077700614929199

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.41358995437622

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.093287944793701

SELECT *
FROM "obm" 
 Execution Time:0.00080204010009766

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0014920234680176

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0014891624450684

SELECT *
FROM "obm" 
 Execution Time:0.00065898895263672

SELECT *
FROM "obm"
WHERE "id" =  '5' 
 Execution Time:0.00068402290344238

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0014989376068115

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00083398818969727

SELECT *
FROM "obm" 
 Execution Time:0.00038313865661621

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0015928745269775

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00075578689575195

SELECT *
FROM "obm" 
 Execution Time:0.00024700164794922

SELECT *
FROM "obm"
WHERE "id" =  '5' 
 Execution Time:0.00032806396484375

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00085210800170898

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00042486190795898

SELECT *
FROM "obm" 
 Execution Time:0.00018882751464844

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0016679763793945

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00076007843017578

SELECT *
FROM "obm" 
 Execution Time:0.00029301643371582

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00038790702819824

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0015530586242676

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0010509490966797

SELECT *
FROM "obm" 
 Execution Time:0.00028610229492188

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.030501842498779

SELECT *
FROM "origemreceita" 
 Execution Time:0.00060606002807617

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00042009353637695

SELECT *
FROM "origemreceita" 
 Execution Time:0.00019216537475586

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.031744956970215

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.037590026855469

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.04052209854126

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.11561799049377

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00050783157348633

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0014591217041016

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,8,7,10,3,9,4,5) ORDER BY datainicio DESC 
 Execution Time:0.040498971939087

select * from obm where id='8' limit 1 
 Execution Time:0.00056600570678711

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00079488754272461

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00035405158996582

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00026106834411621

select * from reprovacao where plano='31'; 
 Execution Time:0.02816104888916

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.075146913528442

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00051212310791016

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.050710916519165

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.025873184204102

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.057464122772217

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0015931129455566

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.0006871223449707

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00068879127502441

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.075793027877808

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00075507164001465

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00050210952758789

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0004270076751709

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00082492828369141

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00038003921508789

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0013580322265625

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,8,7,10,3,9,4,5) ORDER BY datainicio DESC 
 Execution Time:0.00088715553283691

select * from obm where id='8' limit 1 
 Execution Time:0.0007779598236084

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00084495544433594

SELECT *
FROM "origemreceita" 
 Execution Time:0.00034999847412109

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00054097175598145

SELECT *
FROM "origemreceita" 
 Execution Time:0.00027704238891602

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0022640228271484

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0011990070343018

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00063800811767578

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00086379051208496

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00038790702819824

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0013589859008789

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,8,7,10,3,9,4,5) ORDER BY datainicio DESC 
 Execution Time:0.0017399787902832

select * from obm where id='8' limit 1 
 Execution Time:0.00052905082702637

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00070786476135254

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00032401084899902

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00035786628723145

select * from reprovacao where plano='31'; 
 Execution Time:0.00052714347839355

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00080418586730957

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00050020217895508

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00066113471984863

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0013120174407959

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00067806243896484

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00069308280944824

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00028395652770996

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00023508071899414

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.0010190010070801

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0011341571807861

SELECT *
FROM "objeto"
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00089097023010254

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00073599815368652

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00057697296142578

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00050091743469238

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0011470317840576

SELECT *
FROM "especificacao"
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0010249614715576

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0004889965057373

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0005500316619873

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00040721893310547

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00058293342590332

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003969669342041

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00053000450134277

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,8,7,10,3,9,4,5) ORDER BY datainicio DESC 
 Execution Time:0.00066709518432617

select * from obm where id='8' limit 1 
 Execution Time:0.00028514862060547

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00050497055053711

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0003509521484375

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00029087066650391

select * from reprovacao where plano='31'; 
 Execution Time:0.00023293495178223

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00043702125549316

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0002739429473877

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00034904479980469

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00060510635375977

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00037789344787598

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00058817863464355

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00027704238891602

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00024604797363281

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.0004119873046875

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00065803527832031

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00051593780517578

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00047111511230469

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00076389312744141

SELECT *
FROM "especificacao"
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00081801414489746

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0020179748535156

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.000701904296875

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0004889965057373

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00088405609130859

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00038290023803711

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00053191184997559

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,8,7,10,3,9,4,5) ORDER BY datainicio DESC 
 Execution Time:0.00092101097106934

select * from obm where id='8' limit 1 
 Execution Time:0.00035405158996582

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0007631778717041

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0004119873046875

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00031900405883789

select * from reprovacao where plano='31'; 
 Execution Time:0.00047492980957031

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00066781044006348

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00034809112548828

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00065016746520996

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0011038780212402

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00055718421936035

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00073719024658203

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00028300285339355

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00025081634521484

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00073599815368652

