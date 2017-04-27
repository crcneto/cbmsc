SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.0019681453704834

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.0005500316619873

SELECT *
FROM "municipio"
WHERE "id" =  '34' 
 Execution Time:0.00056219100952148

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00072908401489258

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00068497657775879

SELECT *
FROM "municipio"
WHERE "id" =  '33' 
 Execution Time:0.00041389465332031

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00053906440734863

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0010919570922852

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00055909156799316

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00046992301940918

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0005030632019043

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00045108795166016

SELECT *
FROM "plano"
WHERE "status" =  2
ORDER BY "datainicio" 
 Execution Time:0.00052905082702637

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.0011780261993408

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00053215026855469

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00041699409484863

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00032687187194824

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00023794174194336

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00031304359436035

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00027203559875488

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00024580955505371

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00038695335388184

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.0003199577331543

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0004279613494873

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.00023508071899414

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00020790100097656

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00075316429138184

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003969669342041

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0003972053527832

SELECT *
FROM "usuario" 
 Execution Time:0.015997171401978

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00055289268493652

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041508674621582

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00040698051452637

SELECT *
FROM "usuario" 
 Execution Time:0.00032997131347656

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00037884712219238

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00046396255493164

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00039410591125488

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00043797492980957

SELECT *
FROM "usuario" 
 Execution Time:0.00040888786315918

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.002655029296875

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0011131763458252

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00068902969360352

SELECT *
FROM "usuario" 
 Execution Time:0.00074601173400879

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00043511390686035

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00031399726867676

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0002739429473877

SELECT *
FROM "usuario" 
 Execution Time:0.00022506713867188

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00031304359436035

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00055503845214844

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00043416023254395

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00044512748718262

SELECT *
FROM "usuario" 
 Execution Time:0.00034999847412109

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.0012590885162354

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00041294097900391

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00032711029052734

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00042104721069336

SELECT *
FROM "usuario" 
 Execution Time:0.00025200843811035

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00029706954956055

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00070500373840332

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00084781646728516

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0011341571807861

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0008089542388916

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00055408477783203

SELECT *
FROM "plano"
WHERE "status" =  2
ORDER BY "datainicio" 
 Execution Time:0.0011539459228516

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00043416023254395

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00035619735717773

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.0006411075592041

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00054788589477539

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00043702125549316

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0020120143890381

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00037312507629395

