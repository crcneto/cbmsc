SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.037569999694824

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.051553964614868

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.050588846206665

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.033324003219604

select rr.id, rr.receita, rr.data_inicial as di, rr.data_final as df, valor, obs, rr.operador, rr.ts, og.nome, og.status, og.ts as ts_fonte from receitarestrita as rr, origemreceita as og where  rr.receita=og.id and rr.data_final between (select min(p.datainicio) as pdi from plano as p where p.status=1 or p.status=2) and (select max(p.datafim) as pdf from plano as p where p.status=1 or p.status=2) 
 Execution Time:0.089576005935669

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.03165602684021

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.026256084442139

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.040653944015503

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.26034903526306

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00065302848815918

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0018200874328613

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.0005338191986084

select * from obm where id='3' limit 1 
 Execution Time:0.00037884712219238

select * from obm where id='5' limit 1 
 Execution Time:0.00027298927307129

select * from obm where id='7' limit 1 
 Execution Time:0.00024914741516113

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.49866700172424

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.054413080215454

select rr.id, rr.receita, rr.data_inicial as di, rr.data_final as df, valor, obs, rr.operador, rr.ts, og.nome, og.status, og.ts as ts_fonte from receitarestrita as rr, origemreceita as og where  rr.receita=og.id and rr.data_final between (select min(p.datainicio) as pdi from plano as p where p.status=1 or p.status=2) and (select max(p.datafim) as pdf from plano as p where p.status=1 or p.status=2) 
 Execution Time:0.079066038131714

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.016423225402832

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0010330677032471

select rr.id, rr.receita, rr.data_inicial as di, rr.data_final as df, valor, obs, rr.operador, rr.ts, og.nome, og.status, og.ts as ts_fonte from receitarestrita as rr, origemreceita as og where  rr.receita=og.id and rr.data_final between (select min(p.datainicio) as pdi from plano as p where p.status=1 or p.status=2) and (select max(p.datafim) as pdf from plano as p where p.status=1 or p.status=2) 
 Execution Time:0.0019619464874268

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.001945972442627

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.031913995742798

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.00029802322387695

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.00029397010803223

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00148606300354

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0010650157928467

select rr.id, rr.receita, rr.data_inicial as di, rr.data_final as df, valor, obs, rr.operador, rr.ts, og.nome, og.status, og.ts as ts_fonte from receitarestrita as rr, origemreceita as og where  rr.receita=og.id and rr.data_final between (select min(p.datainicio) as pdi from plano as p where p.status=1 or p.status=2) and (select max(p.datafim) as pdf from plano as p where p.status=1 or p.status=2) 
 Execution Time:0.0014548301696777

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.002249002456665

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0015871524810791

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where  rr.receita=og.id and rr.data_final between (select min(p.datainicio) as pdi from plano as p where p.status=1 or p.status=2) and (select max(p.datafim) as pdf from plano as p where p.status=1 or p.status=2) group by nome 
 Execution Time:0.0015668869018555

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0011370182037354

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0020430088043213

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where  rr.receita=og.id and rr.data_final between (select min(p.datainicio) as pdi from plano as p where p.status=1 or p.status=2) and (select max(p.datafim) as pdf from plano as p where p.status=1 or p.status=2) group by nome 
 Execution Time:0.0019080638885498

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0020468235015869

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0013020038604736

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where  rr.receita=og.id and rr.data_final between (select min(p.datainicio) as pdi from plano as p where p.status=1 or p.status=2) and (select max(p.datafim) as pdf from plano as p where p.status=1 or p.status=2) group by nome 
 Execution Time:0.002593994140625

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00071501731872559

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00058698654174805

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00053501129150391

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00085115432739258

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00091099739074707

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0013930797576904

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00050592422485352

select * from obm where id='3' limit 1 
 Execution Time:0.00041699409484863

select * from obm where id='5' limit 1 
 Execution Time:0.0004119873046875

select * from obm where id='7' limit 1 
 Execution Time:0.00060200691223145

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00037002563476562

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00027203559875488

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00023293495178223

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00043487548828125

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00024604797363281

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00037717819213867

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00029802322387695

select * from obm where id='3' limit 1 
 Execution Time:0.00021100044250488

select * from obm where id='5' limit 1 
 Execution Time:0.00020408630371094

select * from obm where id='7' limit 1 
 Execution Time:0.00020098686218262

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.0004279613494873

SELECT *
FROM "plano"
WHERE "id" =  '37' 
 Execution Time:0.00032806396484375

SELECT *
FROM "plano"
WHERE "id" =  '37' 
 Execution Time:0.00036501884460449

select * from reprovacao where plano='37'; 
 Execution Time:0.73687314987183

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.21225690841675

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00056791305541992

select * from planejamento where plano='37' order by tipo ASC, dataprevista ASC 
 Execution Time:0.07821798324585

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.03659200668335

select origemreceita, sum(valor) from planejamento where plano='37' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00052094459533691

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='37' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00068902969360352

select sum(valor) as total from planejamento where plano='37' and tipo=1 
 Execution Time:0.00029206275939941

select sum(valor) as total from planejamento where plano='37' and tipo=2 
 Execution Time:0.00023913383483887

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.061094999313354

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0025041103363037

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0011639595031738

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where  rr.receita=og.id and rr.data_final between (select min(p.datainicio) as pdi from plano as p where p.status=1 or p.status=2) and (select max(p.datafim) as pdf from plano as p where p.status=1 or p.status=2) group by nome 
 Execution Time:0.0014429092407227

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.001986026763916

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0017890930175781

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where  rr.receita=og.id and rr.data_final between (select min(p.datainicio) as pdi from plano as p where p.status=1 or p.status=2) and (select max(p.datafim) as pdf from plano as p where p.status=1 or p.status=2) group by nome 
 Execution Time:0.0018320083618164

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0007328987121582

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00047016143798828

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0003960132598877

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0010550022125244

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00036787986755371

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00050687789916992

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00065708160400391

select * from obm where id='3' limit 1 
 Execution Time:0.00055980682373047

select * from obm where id='5' limit 1 
 Execution Time:0.00038886070251465

select * from obm where id='7' limit 1 
 Execution Time:0.0005490779876709

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00054597854614258

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00036501884460449

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00043606758117676

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0010290145874023

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004889965057373

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0010538101196289

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0009150505065918

select origemreceita, sum(valor) from planejamento where plano='36' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00062918663024902

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='36' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.018929958343506

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='36' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00065398216247559

select sum(valor) as total from planejamento where plano='36' and tipo=1 
 Execution Time:0.00026702880859375

select sum(valor) as total from planejamento where plano='36' and tipo=2 
 Execution Time:0.00024294853210449

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00099396705627441

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00034284591674805

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00027012825012207

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00080990791320801

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00034809112548828

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00044107437133789

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00034117698669434

select * from obm where id='3' limit 1 
 Execution Time:0.00025296211242676

select * from obm where id='5' limit 1 
 Execution Time:0.00024604797363281

select * from obm where id='7' limit 1 
 Execution Time:0.00032901763916016

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00054121017456055

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00032901763916016

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00031208992004395

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00068306922912598

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0010790824890137

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00063300132751465

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00046205520629883

select origemreceita, sum(valor) from planejamento where plano='36' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00039386749267578

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='36' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0010879039764404

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='36' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.0010979175567627

select sum(valor) as total from planejamento where plano='36' and tipo=1 
 Execution Time:0.00052499771118164

select sum(valor) as total from planejamento where plano='36' and tipo=2 
 Execution Time:0.00042510032653809

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0014209747314453

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0013301372528076

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where  rr.receita=og.id and rr.data_final between (select min(p.datainicio) as pdi from plano as p where p.status=1 or p.status=2) and (select max(p.datafim) as pdf from plano as p where p.status=1 or p.status=2) group by nome 
 Execution Time:0.0019969940185547

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.0028929710388184

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.0023410320281982

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0027329921722412

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.001774787902832

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where  rr.receita=og.id and rr.data_final between (select min(p.datainicio) as pdi from plano as p where p.status=1 or p.status=2) and (select max(p.datafim) as pdf from plano as p where p.status=1 or p.status=2) group by nome 
 Execution Time:0.0017998218536377

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00055599212646484

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00038409233093262

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where  rr.receita=og.id and rr.data_final between (select min(p.datainicio) as pdi from plano as p where p.status=1 or p.status=2) and (select max(p.datafim) as pdf from plano as p where p.status=1 or p.status=2) group by nome 
 Execution Time:0.0011360645294189

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00066280364990234

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00063586235046387

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where  rr.receita=og.id and rr.data_final between (select min(p.datainicio) as pdi from plano as p where p.status=1 or p.status=2) and (select max(p.datafim) as pdf from plano as p where p.status=1 or p.status=2) group by nome 
 Execution Time:0.0011789798736572

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00040197372436523

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00035881996154785

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where  rr.receita=og.id and rr.data_final between (select min(p.datainicio) as pdi from plano as p where p.status=1 or p.status=2) and (select max(p.datafim) as pdf from plano as p where p.status=1 or p.status=2) group by nome 
 Execution Time:0.00075888633728027

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0027978420257568

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00069284439086914

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0009920597076416

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0010850429534912

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00064802169799805

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0015909671783447

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.0011119842529297

select * from obm where id='3' limit 1 
 Execution Time:0.0003969669342041

select * from obm where id='5' limit 1 
 Execution Time:0.0003359317779541

select * from obm where id='7' limit 1 
 Execution Time:0.00032901763916016

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00055813789367676

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040888786315918

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where  rr.receita=og.id and rr.data_final between (select min(p.datainicio) as pdi from plano as p where p.status=1 or p.status=2) and (select max(p.datafim) as pdf from plano as p where p.status=1 or p.status=2) group by nome 
 Execution Time:0.0014498233795166

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00095295906066895

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0016090869903564

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where  rr.receita=og.id and rr.data_final between (select min(p.datainicio) as pdi from plano as p where p.status=1 or p.status=2) and (select max(p.datafim) as pdf from plano as p where p.status=1 or p.status=2) group by nome 
 Execution Time:0.0019350051879883

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0006411075592041

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00043201446533203

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where  rr.receita=og.id and rr.data_final between (select min(p.datainicio) as pdi from plano as p where p.status=1 or p.status=2) and (select max(p.datafim) as pdf from plano as p where p.status=1 or p.status=2) group by nome 
 Execution Time:0.0010890960693359

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00063896179199219

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00058102607727051

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where  rr.receita=og.id and rr.data_final between (select min(p.datainicio) as pdi from plano as p where p.status=1 or p.status=2) and (select max(p.datafim) as pdf from plano as p where p.status=1 or p.status=2) group by nome 
 Execution Time:0.0012431144714355

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00040817260742188

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040698051452637

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where  rr.receita=og.id and rr.data_final between (select min(p.datainicio) as pdi from plano as p where p.status=1 or p.status=2) and (select max(p.datafim) as pdf from plano as p where p.status=1 or p.status=2) group by nome 
 Execution Time:0.00098609924316406

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00068998336791992

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00054001808166504

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where  rr.receita=og.id and rr.data_final between (select min(p.datainicio) as pdi from plano as p where p.status=1 or p.status=2) and (select max(p.datafim) as pdf from plano as p where p.status=1 or p.status=2) group by nome 
 Execution Time:0.0012669563293457

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.0024960041046143

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.0019290447235107

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00070285797119141

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0010030269622803

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where  rr.receita=og.id and rr.data_final between (select min(p.datainicio) as pdi from plano as p where p.status=1 or p.status=2) and (select max(p.datafim) as pdf from plano as p where p.status=1 or p.status=2) group by nome 
 Execution Time:0.0012340545654297

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00049901008605957

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00039100646972656

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where  rr.receita=og.id and rr.data_final between (select min(p.datainicio) as pdi from plano as p where p.status=1 or p.status=2) and (select max(p.datafim) as pdf from plano as p where p.status=1 or p.status=2) group by nome 
 Execution Time:0.0009760856628418

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00046014785766602

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00035905838012695

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where  rr.receita=og.id and rr.data_final between (select min(p.datainicio) as pdi from plano as p where p.status=1 or p.status=2) and (select max(p.datafim) as pdf from plano as p where p.status=1 or p.status=2) group by nome 
 Execution Time:0.00079202651977539

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00049996376037598

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00065302848815918

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where  rr.receita=og.id and rr.data_final between (select min(p.datainicio) as pdi from plano as p where p.status=1 or p.status=2) and (select max(p.datafim) as pdf from plano as p where p.status=1 or p.status=2) group by nome 
 Execution Time:0.0009770393371582

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00044488906860352

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00033092498779297

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00028610229492188

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00051498413085938

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00095009803771973

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00075292587280273

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00037002563476562

select * from obm where id='3' limit 1 
 Execution Time:0.00024104118347168

select * from obm where id='5' limit 1 
 Execution Time:0.00023317337036133

select * from obm where id='7' limit 1 
 Execution Time:0.00022506713867188

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00070023536682129

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0005190372467041

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00044488906860352

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00078988075256348

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00034093856811523

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0019881725311279

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00066518783569336

select * from obm where id='3' limit 1 
 Execution Time:0.00043201446533203

select * from obm where id='5' limit 1 
 Execution Time:0.00044393539428711

select * from obm where id='7' limit 1 
 Execution Time:0.0011200904846191

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00070405006408691

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00053501129150391

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00049996376037598

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00098085403442383

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00033378601074219

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0013689994812012

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00048995018005371

select * from obm where id='3' limit 1 
 Execution Time:0.00028491020202637

select * from obm where id='5' limit 1 
 Execution Time:0.00024604797363281

select * from obm where id='7' limit 1 
 Execution Time:0.00024104118347168

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00081110000610352

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00055599212646484

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00042510032653809

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00071001052856445

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00027704238891602

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0010910034179688

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.0006401538848877

select * from obm where id='3' limit 1 
 Execution Time:0.00036120414733887

select * from obm where id='5' limit 1 
 Execution Time:0.00030303001403809

select * from obm where id='7' limit 1 
 Execution Time:0.00025415420532227

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00066089630126953

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00049996376037598

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00039386749267578

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0007178783416748

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00030303001403809

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0011839866638184

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.0006098747253418

select * from obm where id='3' limit 1 
 Execution Time:0.00038599967956543

select * from obm where id='5' limit 1 
 Execution Time:0.00037503242492676

select * from obm where id='7' limit 1 
 Execution Time:0.00036501884460449

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00099992752075195

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00095582008361816

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00095295906066895

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00079798698425293

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00030112266540527

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0011029243469238

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00045609474182129

select * from obm where id='1' limit 1 
 Execution Time:0.00024700164794922

select * from obm where id='3' limit 1 
 Execution Time:0.00022792816162109

select * from obm where id='5' limit 1 
 Execution Time:0.00022006034851074

select * from obm where id='7' limit 1 
 Execution Time:0.0003058910369873

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0008549690246582

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00055503845214844

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00038290023803711

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0007171630859375

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00047993659973145

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00044512748718262

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00033903121948242

select * from obm where id='3' limit 1 
 Execution Time:0.00023102760314941

select * from obm where id='5' limit 1 
 Execution Time:0.00021791458129883

select * from obm where id='7' limit 1 
 Execution Time:0.00021505355834961

select * from tarefa where usuario='2' and status<>3 order by status desc, data_prevista asc 
 Execution Time:0.035025119781494

select * from tarefa where usuario='2' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00087904930114746

select * from tarefa where usuario='2' and status<>3 order by status desc, data_prevista asc 
 Execution Time:0.00084280967712402

select * from tarefa where usuario='2' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00045895576477051

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00040292739868164

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0002892017364502

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where  rr.receita=og.id and rr.data_final between (select min(p.datainicio) as pdi from plano as p where p.status=1 or p.status=2) and (select max(p.datafim) as pdf from plano as p where p.status=1 or p.status=2) group by nome 
 Execution Time:0.00090193748474121

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00061798095703125

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00059604644775391

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where  rr.receita=og.id and rr.data_final between (select min(p.datainicio) as pdi from plano as p where p.status=1 or p.status=2) and (select max(p.datafim) as pdf from plano as p where p.status=1 or p.status=2) group by nome 
 Execution Time:0.0013260841369629

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00060701370239258

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00046086311340332

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where  rr.receita=og.id and rr.data_final between (select min(p.datainicio) as pdi from plano as p where p.status=1 or p.status=2) and (select max(p.datafim) as pdf from plano as p where p.status=1 or p.status=2) group by nome 
 Execution Time:0.0011539459228516

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00040793418884277

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029492378234863

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where  rr.receita=og.id and rr.data_final between (select min(p.datainicio) as pdi from plano as p where p.status=1 or p.status=2) and (select max(p.datafim) as pdf from plano as p where p.status=1 or p.status=2) group by nome 
 Execution Time:0.00073695182800293

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00048613548278809

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00036096572875977

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where  rr.receita=og.id and rr.data_final between (select min(p.datainicio) as pdi from plano as p where p.status=1 or p.status=2) and (select max(p.datafim) as pdf from plano as p where p.status=1 or p.status=2) group by nome 
 Execution Time:0.0010800361633301

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00041699409484863

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00030708312988281

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00058817863464355

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004570484161377

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-12-31' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.001410961151123

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00043201446533203

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040578842163086

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-12-31' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.00076603889465332

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00045895576477051

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00075197219848633

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00058603286743164

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00045394897460938

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-12-31' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.0028941631317139

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00077986717224121

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00068187713623047

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-12-31' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.00063705444335938

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00032210350036621

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00027990341186523

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00044894218444824

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00033092498779297

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00026297569274902

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00048685073852539

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00052094459533691

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00048685073852539

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00048398971557617

select * from obm where id='3' limit 1 
 Execution Time:0.00026893615722656

select * from obm where id='5' limit 1 
 Execution Time:0.00023198127746582

select * from obm where id='7' limit 1 
 Execution Time:0.0002439022064209

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00067806243896484

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003359317779541

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.0022289752960205

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.001187801361084

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00094485282897949

