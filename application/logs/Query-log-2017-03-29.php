SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.26151180267334

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.088035821914673

select rr.id, rr.receita, rr.data_inicial as di, rr.data_final as df, valor, obs, rr.operador, rr.ts, og.nome, og.status, og.ts as ts_fonte from receitarestrita as rr, origemreceita as og where  rr.receita=og.id and rr.data_final between (select min(p.datainicio) as pdi from plano as p where p.status=1 or p.status=2) and (select max(p.datafim) as pdf from plano as p where p.status=1 or p.status=2) 
 Execution Time:0.32139801979065

select * from tarefa where usuario='2' and status<>3 order by status desc, data_prevista asc 
 Execution Time:0.22669506072998

select * from tarefa where usuario='2' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00045108795166016

select * from tarefa where usuario='2' and status<>3 order by status desc, data_prevista asc 
 Execution Time:0.00048089027404785

select * from tarefa where usuario='2' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00036191940307617

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0014400482177734

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0010068416595459

select rr.id, rr.receita, rr.data_inicial as di, rr.data_final as df, valor, obs, rr.operador, rr.ts, og.nome, og.status, og.ts as ts_fonte from receitarestrita as rr, origemreceita as og where  rr.receita=og.id and rr.data_final between (select min(p.datainicio) as pdi from plano as p where p.status=1 or p.status=2) and (select max(p.datafim) as pdf from plano as p where p.status=1 or p.status=2) 
 Execution Time:0.0019369125366211

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.00089287757873535

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.012038946151733

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.0019540786743164

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.00085186958312988

select * from receitarestrita where id='10' 
 Execution Time:0.00039315223693848

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.00074100494384766

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.00061392784118652

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.00038409233093262

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.00044417381286621

select * from receitarestrita where id='10' 
 Execution Time:0.00038504600524902

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.00056600570678711

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.0005347728729248

select * from receitarestrita where id='10' 
 Execution Time:0.00048995018005371

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.00037312507629395

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.00036406517028809

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.00058603286743164

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.00077915191650391

select * from receitarestrita where id='10' 
 Execution Time:0.00035595893859863

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00160813331604

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0011639595031738

select rr.id, rr.receita, rr.data_inicial as di, rr.data_final as df, valor, obs, rr.operador, rr.ts, og.nome, og.status, og.ts as ts_fonte from receitarestrita as rr, origemreceita as og where  rr.receita=og.id and rr.data_final between (select min(p.datainicio) as pdi from plano as p where p.status=1 or p.status=2) and (select max(p.datafim) as pdf from plano as p where p.status=1 or p.status=2) 
 Execution Time:0.0014941692352295

