SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.044584989547729

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.06318998336792

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.0013899803161621

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.0012028217315674

select * from receitarestrita where id='10' 
 Execution Time:0.00094413757324219

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.00036191940307617

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.00042295455932617

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.0015130043029785

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.0018889904022217

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.00050497055053711

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.00036001205444336

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.10987591743469

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.082971096038818

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00066089630126953

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00043392181396484

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00034999847412109

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00033807754516602

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.0003058910369873

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00033998489379883

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00041484832763672

SELECT *
FROM "obm"
WHERE "id" =  11 
 Execution Time:0.00085783004760742

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00066399574279785

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00043392181396484

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.0005340576171875

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00066709518432617

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00055909156799316

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0022609233856201

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0017199516296387

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00065708160400391

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00043296813964844

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0024900436401367

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0018899440765381

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0019412040710449

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0013659000396729

select rr.id, rr.receita, rr.data_inicial as di, rr.data_final as df, valor, obs, rr.operador, rr.ts, og.nome, og.status, og.ts as ts_fonte from receitarestrita as rr, origemreceita as og where  rr.receita=og.id and rr.data_final between (select min(p.datainicio) as pdi from plano as p where p.status=1 or p.status=2) and (select max(p.datafim) as pdf from plano as p where p.status=1 or p.status=2) 
 Execution Time:0.0017099380493164

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.002032995223999

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0010061264038086

select rr.id, rr.receita, rr.data_inicial as di, rr.data_final as df, valor, obs, rr.operador, rr.ts, og.nome, og.status, og.ts as ts_fonte from receitarestrita as rr, origemreceita as og where  rr.receita=og.id and rr.data_final between (select min(p.datainicio) as pdi from plano as p where p.status=1 or p.status=2) and (select max(p.datafim) as pdf from plano as p where p.status=1 or p.status=2) 
 Execution Time:0.0016419887542725

