select * from tarefa where usuario='2' and status<>3 order by status desc, data_prevista asc 
 Execution Time:0.068474054336548

select * from tarefa where usuario='2' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00076699256896973

select * from tarefa where usuario='2' and status<>3 order by status desc, data_prevista asc 
 Execution Time:0.0010161399841309

select * from tarefa where usuario='2' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00054407119750977

select * from tarefa where usuario='2' and status<>3 order by status desc, data_prevista asc 
 Execution Time:0.00086712837219238

select * from tarefa where usuario='2' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00045299530029297

select * from tarefa where usuario='2' and status<>3 order by status desc, data_prevista asc 
 Execution Time:0.0010650157928467

select * from tarefa where usuario='2' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00066709518432617

select * from tarefa where usuario='2' and status<>3 order by status desc, data_prevista asc 
 Execution Time:0.00070905685424805

select * from tarefa where usuario='2' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00058603286743164

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.032315969467163

SELECT *
FROM "origemreceita" 
 Execution Time:0.0013608932495117

SELECT *
FROM "origemreceita" 
 Execution Time:0.0010838508605957

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.0004730224609375

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.0015988349914551

SELECT *
FROM "origemreceita" 
 Execution Time:0.0004119873046875

SELECT *
FROM "origemreceita" 
 Execution Time:0.0003809928894043

SELECT *
FROM "origemreceita" 
 Execution Time:0.00042295455932617

SELECT *
FROM "origemreceita" 
 Execution Time:0.00028300285339355

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.00074315071105957

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.053861856460571

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.036807060241699

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.040448904037476

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.11584806442261

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.043843030929565

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0028591156005859

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.04025411605835

select * from obm where id='3' limit 1 
 Execution Time:0.00061392784118652

select * from obm where id='5' limit 1 
 Execution Time:0.00047206878662109

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.0013790130615234

SELECT *
FROM "plano"
WHERE "id" =  '37' 
 Execution Time:0.00065398216247559

SELECT *
FROM "plano"
WHERE "id" =  '37' 
 Execution Time:0.00025296211242676

select * from reprovacao where plano='37'; 
 Execution Time:0.050168991088867

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.017959833145142

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00076913833618164

select * from planejamento where plano='37' order by tipo ASC, dataprevista ASC 
 Execution Time:0.077538967132568

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.025618076324463

select origemreceita, sum(valor) from planejamento where plano='37' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.057487010955811

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='37' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.001986026763916

select sum(valor) as total from planejamento where plano='37' and tipo=1 
 Execution Time:0.0004889965057373

select sum(valor) as total from planejamento where plano='37' and tipo=2 
 Execution Time:0.00039005279541016

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.075854063034058

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0018320083618164

SELECT *
FROM "naturezadespesa"
ORDER BY "id" 
 Execution Time:0.00065088272094727

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.00034499168395996

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.0003058910369873

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0013358592987061

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00094103813171387

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.0026531219482422

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.001878023147583

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.0015039443969727

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00087404251098633

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00048279762268066

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.00067782402038574

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.00052595138549805

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.0011811256408691

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0006721019744873

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00052595138549805

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.00067687034606934

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00099587440490723

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00096988677978516

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.00041294097900391

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.0011730194091797

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.0015759468078613

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.0020489692687988

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.0016670227050781

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.0013020038604736

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.00064396858215332

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.0006709098815918

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.0008690357208252

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.00092601776123047

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.00048995018005371

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.0016248226165771

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.00036096572875977

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.00025606155395508

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.00042605400085449

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.00040698051452637

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.00058293342590332

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.0013039112091064

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.00042295455932617

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.00044012069702148

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.00041413307189941

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.0012187957763672

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.00044107437133789

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.0012881755828857

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.00055909156799316

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.00045299530029297

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.00035190582275391

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.00028204917907715

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.00046491622924805

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.00043797492980957

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.00040102005004883

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.00043010711669922

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.00044012069702148

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.00041699409484863

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.0004279613494873

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.0003819465637207

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.00041985511779785

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.00033402442932129

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.00046992301940918

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.00043106079101562

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.00072383880615234

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.0010180473327637

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.00034904479980469

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.00040102005004883

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.00026512145996094

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.00038886070251465

