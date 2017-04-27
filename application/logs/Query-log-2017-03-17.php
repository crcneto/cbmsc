select * from tarefa where usuario='2' and status<>3 order by status desc, data_prevista asc 
 Execution Time:0.068166017532349

select * from tarefa where usuario='2' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00040197372436523

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.037567853927612

SELECT *
FROM "categoriaeconomica"
ORDER BY "id" 
 Execution Time:0.00078105926513672

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00079894065856934

SELECT *
FROM "categoriaeconomica"
ORDER BY "id" 
 Execution Time:0.00031304359436035

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.032221794128418

SELECT *
FROM "naturezadespesa"
ORDER BY "id" 
 Execution Time:0.00047683715820312

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.003068208694458

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0010459423065186

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.038748979568481

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.10485315322876

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.03247594833374

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0017549991607666

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.041179895401001

select * from obm where id='4' limit 1 
 Execution Time:0.0010650157928467

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.03717303276062

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00045895576477051

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00036406517028809

select * from reprovacao where plano='36'; 
 Execution Time:0.076176881790161

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.001068115234375

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00047612190246582

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.25538611412048

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.048414945602417

select origemreceita, sum(valor) from planejamento where plano='36' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.14546608924866

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='36' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0015392303466797

select sum(valor) as total from planejamento where plano='36' and tipo=1 
 Execution Time:0.00053715705871582

select sum(valor) as total from planejamento where plano='36' and tipo=2 
 Execution Time:0.00045680999755859

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.071976184844971

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0016038417816162

SELECT *
FROM "origemreceita" 
 Execution Time:0.0002899169921875

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00160813331604

SELECT *
FROM "origemreceita" 
 Execution Time:0.00072002410888672

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00036311149597168

SELECT *
FROM "origemreceita" 
 Execution Time:0.00020790100097656

SELECT *
FROM "origemreceita"
WHERE "id" =  '6' 
 Execution Time:0.00034594535827637

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00056600570678711

SELECT *
FROM "origemreceita" 
 Execution Time:0.00035905838012695

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00056600570678711

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0010280609130859

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0013360977172852

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00086712837219238

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00063085556030273

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00054788589477539

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.0016088485717773

select * from obm where id='4' limit 1 
 Execution Time:0.00043487548828125

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00054001808166504

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00030708312988281

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0002598762512207

select * from reprovacao where plano='36'; 
 Execution Time:0.00040698051452637

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00050806999206543

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00027298927307129

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00059103965759277

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00094008445739746

select origemreceita, sum(valor) from planejamento where plano='36' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00049996376037598

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='36' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00074100494384766

select sum(valor) as total from planejamento where plano='36' and tipo=1 
 Execution Time:0.00036501884460449

select sum(valor) as total from planejamento where plano='36' and tipo=2 
 Execution Time:0.00029897689819336

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00078892707824707

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00041699409484863

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00031304359436035

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0002739429473877

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00050115585327148

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028705596923828

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00064492225646973

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00035810470581055

select * from obm where id='4' limit 1 
 Execution Time:0.00031399726867676

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00039196014404297

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00026106834411621

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00035190582275391

select * from reprovacao where plano='36'; 
 Execution Time:0.00027108192443848

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00049686431884766

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00032305717468262

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00035691261291504

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00054192543029785

select origemreceita, sum(valor) from planejamento where plano='36' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00030612945556641

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='36' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00072002410888672

select sum(valor) as total from planejamento where plano='36' and tipo=1 
 Execution Time:0.0003509521484375

select sum(valor) as total from planejamento where plano='36' and tipo=2 
 Execution Time:0.00032401084899902

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.0004420280456543

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00098395347595215

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00051403045654297

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0002439022064209

select * from reprovacao where plano='36'; 
 Execution Time:0.00069808959960938

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0010230541229248

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0009160041809082

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0011119842529297

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0022439956665039

select origemreceita, sum(valor) from planejamento where plano='36' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00078201293945312

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='36' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0014410018920898

select sum(valor) as total from planejamento where plano='36' and tipo=1 
 Execution Time:0.0004580020904541

select sum(valor) as total from planejamento where plano='36' and tipo=2 
 Execution Time:0.00041699409484863

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.000946044921875

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0022439956665039

SELECT *
FROM "origemreceita" 
 Execution Time:0.00031590461730957

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00040602684020996

SELECT *
FROM "origemreceita" 
 Execution Time:0.00023794174194336

SELECT *
FROM "origemreceita"
WHERE "id" =  '6' 
 Execution Time:0.00032377243041992

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00040507316589355

SELECT *
FROM "origemreceita" 
 Execution Time:0.00043487548828125

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00085592269897461

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0005500316619873

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00047087669372559

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00079703330993652

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00060510635375977

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0012719631195068

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00083684921264648

select * from obm where id='4' limit 1 
 Execution Time:0.00030803680419922

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00054121017456055

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00044488906860352

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00039005279541016

select * from reprovacao where plano='36'; 
 Execution Time:0.0007319450378418

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0010578632354736

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00050091743469238

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0011100769042969

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.002018928527832

select origemreceita, sum(valor) from planejamento where plano='36' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00073409080505371

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='36' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0011038780212402

select sum(valor) as total from planejamento where plano='36' and tipo=1 
 Execution Time:0.0003211498260498

select sum(valor) as total from planejamento where plano='36' and tipo=2 
 Execution Time:0.00025081634521484

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00074601173400879

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0015242099761963

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00055789947509766

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00024294853210449

select * from reprovacao where plano='36'; 
 Execution Time:0.00041604042053223

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00076580047607422

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00043797492980957

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00076007843017578

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0011639595031738

select origemreceita, sum(valor) from planejamento where plano='36' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00046205520629883

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='36' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0009310245513916

select sum(valor) as total from planejamento where plano='36' and tipo=1 
 Execution Time:0.00028204917907715

select sum(valor) as total from planejamento where plano='36' and tipo=2 
 Execution Time:0.00024604797363281

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00080990791320801

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00095605850219727

SELECT *
FROM "origemreceita" 
 Execution Time:0.00024104118347168

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00040483474731445

SELECT *
FROM "origemreceita" 
 Execution Time:0.00020503997802734

SELECT *
FROM "origemreceita"
WHERE "id" =  '6' 
 Execution Time:0.00028300285339355

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00040698051452637

SELECT *
FROM "origemreceita" 
 Execution Time:0.00066709518432617

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00060105323791504

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00034594535827637

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00043296813964844

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.001215934753418

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00095200538635254

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.001755952835083

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00089216232299805

select * from obm where id='4' limit 1 
 Execution Time:0.00034999847412109

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0005030632019043

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00044107437133789

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00053715705871582

select * from reprovacao where plano='36'; 
 Execution Time:0.00066614151000977

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0010898113250732

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00053501129150391

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0010700225830078

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0022139549255371

select origemreceita, sum(valor) from planejamento where plano='36' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00079488754272461

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='36' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0010859966278076

select sum(valor) as total from planejamento where plano='36' and tipo=1 
 Execution Time:0.0003669261932373

select sum(valor) as total from planejamento where plano='36' and tipo=2 
 Execution Time:0.0004279613494873

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.0012660026550293

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00052499771118164

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00061821937561035

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00043797492980957

select * from reprovacao where plano='36'; 
 Execution Time:0.00034284591674805

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00071811676025391

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00050711631774902

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00056099891662598

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00086188316345215

select origemreceita, sum(valor) from planejamento where plano='36' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00050592422485352

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='36' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00091719627380371

select sum(valor) as total from planejamento where plano='36' and tipo=1 
 Execution Time:0.0004420280456543

select sum(valor) as total from planejamento where plano='36' and tipo=2 
 Execution Time:0.00038814544677734

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00067496299743652

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0012187957763672

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00067496299743652

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00034189224243164

select * from reprovacao where plano='36'; 
 Execution Time:0.00051498413085938

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00068998336791992

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00049209594726562

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00085711479187012

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0014040470123291

select origemreceita, sum(valor) from planejamento where plano='36' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00053191184997559

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='36' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00098896026611328

select sum(valor) as total from planejamento where plano='36' and tipo=1 
 Execution Time:0.00033712387084961

select sum(valor) as total from planejamento where plano='36' and tipo=2 
 Execution Time:0.0003509521484375

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.0016639232635498

SELECT *
FROM "origemreceita"
WHERE "status" =  2
AND "status" =  3
ORDER BY "nome" ASC 
 Execution Time:0.00055599212646484

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0010530948638916

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0007171630859375

select * from reprovacao where plano='36'; 
 Execution Time:0.0003960132598877

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00057411193847656

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00045514106750488

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0005340576171875

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00072598457336426

select origemreceita, sum(valor) from planejamento where plano='36' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00040984153747559

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='36' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00071907043457031

select sum(valor) as total from planejamento where plano='36' and tipo=1 
 Execution Time:0.00033187866210938

select sum(valor) as total from planejamento where plano='36' and tipo=2 
 Execution Time:0.00030708312988281

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00052499771118164

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00056815147399902

SELECT *
FROM "origemreceita" 
 Execution Time:0.00033998489379883

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00048089027404785

SELECT *
FROM "origemreceita" 
 Execution Time:0.00029397010803223

SELECT *
FROM "origemreceita"
WHERE "id" =  '6' 
 Execution Time:0.00038290023803711

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0004429817199707

SELECT *
FROM "origemreceita" 
 Execution Time:0.00029802322387695

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00063419342041016

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00083112716674805

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00036311149597168

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0005490779876709

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00033998489379883

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00052213668823242

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00046086311340332

select * from obm where id='4' limit 1 
 Execution Time:0.00032901763916016

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00048398971557617

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00037813186645508

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00034880638122559

select * from reprovacao where plano='36'; 
 Execution Time:0.0002739429473877

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00044989585876465

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029993057250977

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00043296813964844

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00057411193847656

select origemreceita, sum(valor) from planejamento where plano='36' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00031685829162598

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='36' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00055813789367676

select sum(valor) as total from planejamento where plano='36' and tipo=1 
 Execution Time:0.00025391578674316

select sum(valor) as total from planejamento where plano='36' and tipo=2 
 Execution Time:0.00025677680969238

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00043916702270508

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00045394897460938

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00033903121948242

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00042986869812012

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00095605850219727

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00034308433532715

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00047898292541504

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00082993507385254

select * from obm where id='4' limit 1 
 Execution Time:0.00028610229492188

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00041317939758301

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00028300285339355

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00024008750915527

select * from reprovacao where plano='36'; 
 Execution Time:0.0002291202545166

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00047492980957031

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00038003921508789

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00054502487182617

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00061202049255371

select origemreceita, sum(valor) from planejamento where plano='36' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00034499168395996

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='36' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00055813789367676

select sum(valor) as total from planejamento where plano='36' and tipo=1 
 Execution Time:0.00026893615722656

select sum(valor) as total from planejamento where plano='36' and tipo=2 
 Execution Time:0.0002281665802002

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00042295455932617

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0016679763793945

SELECT *
FROM "origemreceita" 
 Execution Time:0.00030803680419922

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00045013427734375

SELECT *
FROM "origemreceita" 
 Execution Time:0.00024104118347168

SELECT *
FROM "origemreceita"
WHERE "id" =  '6' 
 Execution Time:0.00031590461730957

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00060415267944336

SELECT *
FROM "origemreceita" 
 Execution Time:0.00079488754272461

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00081586837768555

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00055384635925293

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0016200542449951

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0009148120880127

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00060105323791504

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0014278888702393

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00081992149353027

select * from obm where id='4' limit 1 
 Execution Time:0.00029397010803223

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00044012069702148

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00037217140197754

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00034308433532715

select * from reprovacao where plano='36'; 
 Execution Time:0.00058412551879883

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00071501731872559

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00033712387084961

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00066184997558594

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.001255989074707

select origemreceita, sum(valor) from planejamento where plano='36' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00053501129150391

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='36' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0010528564453125

select sum(valor) as total from planejamento where plano='36' and tipo=1 
 Execution Time:0.0003669261932373

select sum(valor) as total from planejamento where plano='36' and tipo=2 
 Execution Time:0.00033283233642578

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00098085403442383

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0020270347595215

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0010550022125244

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00152587890625

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0015189647674561

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00053215026855469

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0020990371704102

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.0009920597076416

select * from obm where id='4' limit 1 
 Execution Time:0.00099611282348633

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00070786476135254

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00040698051452637

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0003669261932373

select * from reprovacao where plano='36'; 
 Execution Time:0.00045204162597656

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00063109397888184

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00033307075500488

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00091791152954102

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0015428066253662

select origemreceita, sum(valor) from planejamento where plano='36' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00095391273498535

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='36' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0012710094451904

select sum(valor) as total from planejamento where plano='36' and tipo=1 
 Execution Time:0.00032591819763184

select sum(valor) as total from planejamento where plano='36' and tipo=2 
 Execution Time:0.00025582313537598

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00073814392089844

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00045394897460938

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00031495094299316

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00029397010803223

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00036215782165527

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00030398368835449

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029706954956055

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00036096572875977

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00041794776916504

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0013489723205566

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00078511238098145

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0010800361633301

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0013620853424072

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0005490779876709

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.001629114151001

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00089693069458008

select * from obm where id='4' limit 1 
 Execution Time:0.00048708915710449

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0027940273284912

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00057220458984375

select * from plano where status=4 order by datainicio DESC, datafim DESC 
 Execution Time:0.00096511840820312

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004880428314209

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0017352104187012

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00068211555480957

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0013201236724854

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00045394897460938

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00073790550231934

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00032901763916016

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0012218952178955

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00047206878662109

select * from obm where id='4' limit 1 
 Execution Time:0.00027799606323242

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.000640869140625

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00049495697021484

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00079607963562012

select * from reprovacao where plano='36'; 
 Execution Time:0.00042891502380371

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00044703483581543

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029206275939941

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00063085556030273

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00080204010009766

select origemreceita, sum(valor) from planejamento where plano='36' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00047802925109863

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='36' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00072121620178223

select sum(valor) as total from planejamento where plano='36' and tipo=1 
 Execution Time:0.00026202201843262

select sum(valor) as total from planejamento where plano='36' and tipo=2 
 Execution Time:0.00023603439331055

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00072288513183594

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0015850067138672

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.001021146774292

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0010550022125244

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0038070678710938

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.001723051071167

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0012121200561523

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0014560222625732

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.001060962677002

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00099706649780273

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00048398971557617

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0011551380157471

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0012049674987793

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00064706802368164

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00074887275695801

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0012340545654297

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0013971328735352

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00050997734069824

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0004880428314209

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00044989585876465

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00047898292541504

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00046491622924805

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00050902366638184

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00042891502380371

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00048398971557617

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00051403045654297

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0029549598693848

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0010120868682861

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0010478496551514

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00041484832763672

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00044393539428711

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00056600570678711

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00093507766723633

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00048208236694336

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00035190582275391

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00029206275939941

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00058507919311523

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00032901763916016

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00048398971557617

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00036787986755371

select * from obm where id='4' limit 1 
 Execution Time:0.00026488304138184

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00036406517028809

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00029897689819336

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00027108192443848

select * from reprovacao where plano='36'; 
 Execution Time:0.0003199577331543

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00048398971557617

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028681755065918

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00033807754516602

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00057482719421387

select origemreceita, sum(valor) from planejamento where plano='36' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00032210350036621

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='36' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00078797340393066

select sum(valor) as total from planejamento where plano='36' and tipo=1 
 Execution Time:0.00033187866210938

select sum(valor) as total from planejamento where plano='36' and tipo=2 
 Execution Time:0.00031185150146484

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00049090385437012

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00090289115905762

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00078511238098145

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0011739730834961

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0016260147094727

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00068283081054688

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0022299289703369

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.0012350082397461

select * from obm where id='3' limit 1 
 Execution Time:0.00054788589477539

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00045299530029297

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0003211498260498

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00023698806762695

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00045299530029297

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028419494628906

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00059914588928223

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00043702125549316

select * from obm where id='3' limit 1 
 Execution Time:0.00033307075500488

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00046801567077637

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00035691261291504

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00029087066650391

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00048208236694336

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029897689819336

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00043392181396484

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00034284591674805

select * from obm where id='3' limit 1 
 Execution Time:0.00032901763916016

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00041699409484863

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00032496452331543

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00026702880859375

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00049805641174316

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00045204162597656

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00063395500183105

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00044584274291992

select * from obm where id='3' limit 1 
 Execution Time:0.0003049373626709

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00079512596130371

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00067281723022461

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00053906440734863

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00033807754516602

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0010700225830078

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00044798851013184

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00055694580078125

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00043606758117676

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00034809112548828

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00076889991760254

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0010831356048584

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00058603286743164

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00050497055053711

select * from obm where id='3' limit 1 
 Execution Time:0.00038790702819824

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0005488395690918

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00047397613525391

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00056600570678711

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0010988712310791

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041007995605469

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.001410961151123

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00094890594482422

select * from obm where id='3' limit 1 
 Execution Time:0.00031399726867676

select * from obm where id='5' limit 1 
 Execution Time:0.00028586387634277

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00076413154602051

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00051498413085938

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00086188316345215

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00049710273742676

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0019311904907227

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.000885009765625

