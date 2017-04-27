SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.11903882026672

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.048626899719238

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.051568031311035

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.075784921646118

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.02887487411499

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.055740833282471

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00046491622924805

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00031304359436035

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.14350199699402

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.0005190372467041

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00044608116149902

select * from reprovacao where plano='21'; 
 Execution Time:0.051180124282837

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.23105502128601

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00037693977355957

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.1336829662323

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.15906596183777

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.42855095863342

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0016980171203613

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.00063300132751465

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00059199333190918

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.072417020797729

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0010828971862793

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.0014820098876953

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00043177604675293

select * from reprovacao where plano='21'; 
 Execution Time:0.00046205520629883

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00078821182250977

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00054097175598145

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0010659694671631

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0022740364074707

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00054097175598145

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0008690357208252

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.00028586387634277

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00033712387084961

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.0010919570922852

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0029709339141846

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.0011441707611084

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00036406517028809

select * from reprovacao where plano='21'; 
 Execution Time:0.00055098533630371

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00077986717224121

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00053310394287109

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00086712837219238

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0011539459228516

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00043702125549316

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0007479190826416

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.00024104118347168

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.0002439022064209

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00067996978759766

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00074911117553711

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00044393539428711

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00038790702819824

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0006859302520752

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00072813034057617

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00073885917663574

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00025701522827148

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00021505355834961

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00045990943908691

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00037097930908203

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00030612945556641

select * from reprovacao where plano='21'; 
 Execution Time:0.00043487548828125

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00077486038208008

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00035500526428223

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00074410438537598

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0011169910430908

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00072693824768066

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00077581405639648

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.0003819465637207

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00034499168395996

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00075602531433105

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0017070770263672

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00067710876464844

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.0006401538848877

select * from reprovacao where plano='21'; 
 Execution Time:0.0023410320281982

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0011889934539795

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00067996978759766

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00087308883666992

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0018699169158936

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00062799453735352

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0010910034179688

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.00047516822814941

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.0003960132598877

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00090193748474121

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0033669471740723

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00089097023010254

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.0003199577331543

select * from reprovacao where plano='21'; 
 Execution Time:0.00056195259094238

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00087809562683105

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00050210952758789

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00080609321594238

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0013899803161621

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00055503845214844

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0021250247955322

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.0003960132598877

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00030803680419922

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.0011131763458252

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0014331340789795

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00037884712219238

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00024199485778809

select * from reprovacao where plano='21'; 
 Execution Time:0.00023603439331055

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00037598609924316

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00036096572875977

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00043702125549316

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00074100494384766

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00037908554077148

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00061511993408203

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.00031685829162598

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00029206275939941

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00058484077453613

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0031561851501465

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.0015308856964111

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00049018859863281

select * from reprovacao where plano='21'; 
 Execution Time:0.00075697898864746

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0015678405761719

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00094914436340332

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0014560222625732

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0021231174468994

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00095391273498535

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0014538764953613

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.00039792060852051

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00033402442932129

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00097298622131348

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0021569728851318

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00081300735473633

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00044083595275879

select * from reprovacao where plano='21'; 
 Execution Time:0.00069594383239746

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00091385841369629

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00069093704223633

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0010569095611572

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0017030239105225

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00074219703674316

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0012040138244629

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.00042915344238281

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00040507316589355

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.0010499954223633

select * from plano where status=4 order by datainicio DESC, datafim DESC 
 Execution Time:0.0016219615936279

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0009920597076416

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.035664796829224

select * from plano where status=4 and obm='1' order by datainicio DESC, datafim DESC 
 Execution Time:0.00055599212646484

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00044488906860352

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00042200088500977

select * from plano where status=4 and obm='3' order by datainicio DESC, datafim DESC 
 Execution Time:0.00047397613525391

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00043606758117676

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00037503242492676

select * from plano where status=4 and obm='4' order by datainicio DESC, datafim DESC 
 Execution Time:0.00086808204650879

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00076699256896973

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00070405006408691

SELECT *
FROM "plano"
WHERE "id" =  '14' 
 Execution Time:0.00062298774719238

SELECT *
FROM "plano"
WHERE "id" =  '14' 
 Execution Time:0.0004119873046875

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00066304206848145

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00081992149353027

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00042390823364258

select * from planejamento where plano='14' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0010881423950195

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00048589706420898

select origemreceita, sum(valor) from planejamento where plano='14' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00081801414489746

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='14' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0013461112976074

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='14' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00080204010009766

select sum(valor) as total from planejamento where plano='14' and tipo=1 
 Execution Time:0.00038790702819824

select sum(valor) as total from planejamento where plano='14' and tipo=2 
 Execution Time:0.00035810470581055

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00040197372436523

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00040197372436523

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00036001205444336

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00047993659973145

SELECT *
FROM "especificacao"
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00034308433532715

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0005800724029541

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00033998489379883

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00039887428283691

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00045299530029297

SELECT *
FROM "especificacao"
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00029182434082031

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00055599212646484

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00057387351989746

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00040602684020996

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0011699199676514

SELECT *
FROM "especificacao"
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00038909912109375

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00043988227844238

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00032496452331543

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0003049373626709

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00035405158996582

SELECT *
FROM "especificacao"
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00031685829162598

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00077390670776367

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00048494338989258

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0005791187286377

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00052690505981445

SELECT *
FROM "especificacao"
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00037908554077148

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0006101131439209

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00035190582275391

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00044894218444824

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00057697296142578

SELECT *
FROM "especificacao"
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00031709671020508

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00056195259094238

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00050902366638184

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00044083595275879

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00045394897460938

SELECT *
FROM "especificacao"
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00033307075500488

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00059294700622559

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004420280456543

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00090980529785156

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00076007843017578

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00092887878417969

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00047898292541504

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00059008598327637

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00060701370239258

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00053000450134277

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00046014785766602

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00054812431335449

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00044107437133789

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00036096572875977

select * from reprovacao where plano='21'; 
 Execution Time:0.00067782402038574

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0005638599395752

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00045108795166016

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00053691864013672

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0012109279632568

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00047993659973145

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00084996223449707

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.0004270076751709

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00034904479980469

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.0011279582977295

