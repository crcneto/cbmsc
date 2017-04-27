SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.046442985534668

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.048508882522583

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.040350914001465

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.019531011581421

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.029484987258911

SELECT *
FROM "plano"
WHERE "status" =  2
ORDER BY "datainicio" 
 Execution Time:0.04298996925354

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00074386596679688

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00092697143554688

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00061416625976562

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00065088272094727

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00063300132751465

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.038186073303223

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0011539459228516

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.11102294921875

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00046205520629883

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00034689903259277

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0025308132171631

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.019653081893921

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.13582706451416

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.002730131149292

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00072884559631348

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0015859603881836

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00085592269897461

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00097203254699707

SELECT *
FROM "plano"
WHERE "status" =  2
ORDER BY "datainicio" 
 Execution Time:0.0013329982757568

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00052905082702637

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00046515464782715

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.0005640983581543

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00051307678222656

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00036501884460449

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0019340515136719

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00039100646972656

