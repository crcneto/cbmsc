SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.21689414978027

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.088647842407227

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.46589994430542

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.17641401290894

select o.nome, sum(p.valor) as valor from planejamento as p, origemreceita as o where o.id = p.origemreceita and tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) group by o.nome 
 Execution Time:0.0013570785522461

select pj.id as planejamento, pj.tipo, pj.plano, p.status, p.obm as obm_id, o.nome as obm, pj.origemreceita as og_id, og.nome as og_nome, pj.detalhamento, pj.valor, pj.dataprevista from planejamento as pj, origemreceita as og, especificacao as ep, plano as p, obm as o where pj.origemreceita = og.id and pj.especificacao = ep.id and pj.tipo=1 and pj.plano=p.id and p.obm=o.id and pj.dataprevista between '2017-01-01' and '2017-12-31' and og.status=3 order by dataprevista desc 
 Execution Time:0.051879167556763

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0004570484161377

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00043320655822754

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0027239322662354

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.018967866897583

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2016-01-01' and data_final<='2016-12-31' group by nome order by nome asc 
 Execution Time:0.15489292144775

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2016-01-01' and '2016-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2016-01-01' and data_final<='2016-12-31' group by og.id) 
 Execution Time:0.0012950897216797

select o.nome, sum(p.valor) as valor from planejamento as p, origemreceita as o where o.id = p.origemreceita and tipo=1 and dataprevista between '2016-01-01' and '2016-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2016-01-01' and data_final<='2016-12-31' group by og.id) group by o.nome 
 Execution Time:0.0007631778717041

select pj.id as planejamento, pj.tipo, pj.plano, p.status, p.obm as obm_id, o.nome as obm, pj.origemreceita as og_id, og.nome as og_nome, pj.detalhamento, pj.valor, pj.dataprevista from planejamento as pj, origemreceita as og, especificacao as ep, plano as p, obm as o where pj.origemreceita = og.id and pj.especificacao = ep.id and pj.tipo=1 and pj.plano=p.id and p.obm=o.id and pj.dataprevista between '2016-01-01' and '2016-12-31' and og.status=3 order by dataprevista desc 
 Execution Time:0.03154182434082

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00056791305541992

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00048184394836426

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.00080180168151855

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.00084996223449707

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.00057005882263184

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.00099587440490723

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00058579444885254

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00048685073852539

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00091814994812012

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00064802169799805

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2016-01-01' and data_final<='2016-12-31' group by nome order by nome asc 
 Execution Time:0.0017440319061279

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2016-01-01' and '2016-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2016-01-01' and data_final<='2016-12-31' group by og.id) 
 Execution Time:0.0010349750518799

select o.nome, sum(p.valor) as valor from planejamento as p, origemreceita as o where o.id = p.origemreceita and tipo=1 and dataprevista between '2016-01-01' and '2016-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2016-01-01' and data_final<='2016-12-31' group by og.id) group by o.nome 
 Execution Time:0.0018999576568604

select pj.id as planejamento, pj.tipo, pj.plano, p.status, p.obm as obm_id, o.nome as obm, pj.origemreceita as og_id, og.nome as og_nome, pj.detalhamento, pj.valor, pj.dataprevista from planejamento as pj, origemreceita as og, especificacao as ep, plano as p, obm as o where pj.origemreceita = og.id and pj.especificacao = ep.id and pj.tipo=1 and pj.plano=p.id and p.obm=o.id and pj.dataprevista between '2016-01-01' and '2016-12-31' and og.status=3 order by dataprevista desc 
 Execution Time:0.0040960311889648

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00067710876464844

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00047707557678223

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00069284439086914

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00094509124755859

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2016-01-01' and data_final<='2016-12-31' group by nome order by nome asc 
 Execution Time:0.0005650520324707

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2016-01-01' and '2016-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2016-01-01' and data_final<='2016-12-31' group by og.id) 
 Execution Time:0.00063991546630859

select o.nome, sum(p.valor) as valor from planejamento as p, origemreceita as o where o.id = p.origemreceita and tipo=1 and dataprevista between '2016-01-01' and '2016-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2016-01-01' and data_final<='2016-12-31' group by og.id) group by o.nome 
 Execution Time:0.00081992149353027

select pj.id as planejamento, pj.tipo, pj.plano, p.status, p.obm as obm_id, o.nome as obm, pj.origemreceita as og_id, og.nome as og_nome, pj.detalhamento, pj.valor, pj.dataprevista from planejamento as pj, origemreceita as og, especificacao as ep, plano as p, obm as o where pj.origemreceita = og.id and pj.especificacao = ep.id and pj.tipo=1 and pj.plano=p.id and p.obm=o.id and pj.dataprevista between '2016-01-01' and '2016-12-31' and og.status=3 order by dataprevista desc 
 Execution Time:0.0012190341949463

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00040102005004883

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00034999847412109

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2016-01-01' and data_final<='2016-12-31' group by nome order by nome asc 
 Execution Time:0.0030829906463623

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2016-01-01' and '2016-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2016-01-01' and data_final<='2016-12-31' group by og.id) 
 Execution Time:0.0014669895172119

select o.nome, sum(p.valor) as valor from planejamento as p, origemreceita as o where o.id = p.origemreceita and tipo=1 and dataprevista between '2016-01-01' and '2016-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2016-01-01' and data_final<='2016-12-31' group by og.id) group by o.nome 
 Execution Time:0.0011169910430908

select pj.id as planejamento, pj.tipo, pj.plano, p.status, p.obm as obm_id, o.nome as obm, pj.origemreceita as og_id, og.nome as og_nome, pj.detalhamento, pj.valor, pj.dataprevista from planejamento as pj, origemreceita as og, especificacao as ep, plano as p, obm as o where pj.origemreceita = og.id and pj.especificacao = ep.id and pj.tipo=1 and pj.plano=p.id and p.obm=o.id and pj.dataprevista between '2016-01-01' and '2016-12-31' and og.status=3 order by dataprevista desc 
 Execution Time:0.0027358531951904

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0004730224609375

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041580200195312

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2016-01-01' and data_final<='2016-12-31' group by nome order by nome asc 
 Execution Time:0.00068283081054688

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2016-01-01' and '2016-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2016-01-01' and data_final<='2016-12-31' group by og.id) 
 Execution Time:0.00062394142150879

select og.nome as nome, sum(p.valor) as valor from planejamento as p, origemreceita as og where origemreceita in (select id from origemreceita where status=3) and dataprevista between '2016-01-01' and '2016-12-31' and p.origemreceita=og.id group by og.nome order by og.nome asc 
 Execution Time:0.00082492828369141

select pj.id as planejamento, pj.tipo, pj.plano, p.status, p.obm as obm_id, o.nome as obm, pj.origemreceita as og_id, og.nome as og_nome, pj.detalhamento, pj.valor, pj.dataprevista from planejamento as pj, origemreceita as og, especificacao as ep, plano as p, obm as o where pj.origemreceita = og.id and pj.especificacao = ep.id and pj.tipo=1 and pj.plano=p.id and p.obm=o.id and pj.dataprevista between '2016-01-01' and '2016-12-31' and og.status=3 order by dataprevista desc 
 Execution Time:0.0011510848999023

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00033998489379883

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00034809112548828

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2016-01-01' and data_final<='2016-12-31' group by nome order by nome asc 
 Execution Time:0.0037758350372314

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2016-01-01' and '2016-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2016-01-01' and data_final<='2016-12-31' group by og.id) 
 Execution Time:0.001230001449585

select og.nome as nome, sum(p.valor) as valor from planejamento as p, origemreceita as og where origemreceita in (select id from origemreceita where status=3) and dataprevista between '2016-01-01' and '2016-12-31' and p.origemreceita=og.id group by og.nome order by og.nome asc 
 Execution Time:0.0012290477752686

select pj.id as planejamento, pj.tipo, pj.plano, p.status, p.obm as obm_id, o.nome as obm, pj.origemreceita as og_id, og.nome as og_nome, pj.detalhamento, pj.valor, pj.dataprevista from planejamento as pj, origemreceita as og, especificacao as ep, plano as p, obm as o where pj.origemreceita = og.id and pj.especificacao = ep.id and pj.tipo=1 and pj.plano=p.id and p.obm=o.id and pj.dataprevista between '2016-01-01' and '2016-12-31' and og.status=3 order by dataprevista desc 
 Execution Time:0.0028059482574463

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00054812431335449

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00061702728271484

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.0014121532440186

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.0011858940124512

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.00053596496582031

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.00059795379638672

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00095701217651367

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00058102607727051

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2016-01-01' and data_final<='2016-12-31' group by nome order by nome asc 
 Execution Time:0.00075912475585938

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2016-01-01' and '2016-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2016-01-01' and data_final<='2016-12-31' group by og.id) 
 Execution Time:0.001133918762207

select og.nome as nome, sum(p.valor) as valor from planejamento as p, origemreceita as og where origemreceita in (select id from origemreceita where status=3) and dataprevista between '2016-01-01' and '2016-12-31' and p.origemreceita=og.id group by og.nome order by og.nome asc 
 Execution Time:0.0013399124145508

select pj.id as planejamento, pj.tipo, pj.plano, p.status, p.obm as obm_id, o.nome as obm, pj.origemreceita as og_id, og.nome as og_nome, pj.detalhamento, pj.valor, pj.dataprevista from planejamento as pj, origemreceita as og, especificacao as ep, plano as p, obm as o where pj.origemreceita = og.id and pj.especificacao = ep.id and pj.tipo=1 and pj.plano=p.id and p.obm=o.id and pj.dataprevista between '2016-01-01' and '2016-12-31' and og.status=3 order by dataprevista desc 
 Execution Time:0.0026118755340576

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00051999092102051

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00046110153198242

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2016-01-01' and data_final<='2016-12-31' group by nome order by nome asc 
 Execution Time:0.00075697898864746

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2016-01-01' and '2016-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2016-01-01' and data_final<='2016-12-31' group by og.id) 
 Execution Time:0.00065994262695312

select og.nome as nome, sum(p.valor) as valor from planejamento as p, origemreceita as og where origemreceita in (select id from origemreceita where status=3) and dataprevista between '2016-01-01' and '2016-12-31' and p.origemreceita=og.id group by og.nome order by og.nome asc 
 Execution Time:0.00098991394042969

select pj.id as planejamento, pj.tipo, pj.plano, p.status, p.obm as obm_id, o.nome as obm, pj.origemreceita as og_id, og.nome as og_nome, pj.detalhamento, pj.valor, pj.dataprevista from planejamento as pj, origemreceita as og, especificacao as ep, plano as p, obm as o where pj.origemreceita = og.id and pj.especificacao = ep.id and pj.tipo=1 and pj.plano=p.id and p.obm=o.id and pj.dataprevista between '2016-01-01' and '2016-12-31' and og.status=3 order by dataprevista desc 
 Execution Time:0.0017011165618896

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00039005279541016

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00044488906860352

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2016-01-01' and data_final<='2016-12-31' group by nome order by nome asc 
 Execution Time:0.0038840770721436

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2016-01-01' and '2016-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2016-01-01' and data_final<='2016-12-31' group by og.id) 
 Execution Time:0.0014379024505615

select og.nome as nome, sum(p.valor) as valor from planejamento as p, origemreceita as og where origemreceita in (select id from origemreceita where status=3) and dataprevista between '2016-01-01' and '2016-12-31' and p.origemreceita=og.id and p.tipo=1 group by og.nome order by og.nome asc 
 Execution Time:0.0014920234680176

select pj.id as planejamento, pj.tipo, pj.plano, p.status, p.obm as obm_id, o.nome as obm, pj.origemreceita as og_id, og.nome as og_nome, pj.detalhamento, pj.valor, pj.dataprevista from planejamento as pj, origemreceita as og, especificacao as ep, plano as p, obm as o where pj.origemreceita = og.id and pj.especificacao = ep.id and pj.tipo=1 and pj.plano=p.id and p.obm=o.id and pj.dataprevista between '2016-01-01' and '2016-12-31' and og.status=3 order by dataprevista desc 
 Execution Time:0.0032041072845459

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00048494338989258

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0005040168762207

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2016-01-01' and data_final<='2016-12-31' group by nome order by nome asc 
 Execution Time:0.0022101402282715

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2016-01-01' and '2016-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2016-01-01' and data_final<='2016-12-31' group by og.id) 
 Execution Time:0.0012540817260742

select og.nome as nome, sum(p.valor) as valor from planejamento as p, origemreceita as og where origemreceita in (select id from origemreceita where status=3) and dataprevista between '2016-01-01' and '2016-12-31' and p.origemreceita=og.id and p.tipo=1 group by og.nome order by og.nome asc 
 Execution Time:0.00088000297546387

select pj.id as planejamento, pj.tipo, pj.plano, p.status, p.obm as obm_id, o.nome as obm, pj.origemreceita as og_id, og.nome as og_nome, pj.detalhamento, pj.valor, pj.dataprevista from planejamento as pj, origemreceita as og, especificacao as ep, plano as p, obm as o where pj.origemreceita = og.id and pj.especificacao = ep.id and pj.tipo=1 and pj.plano=p.id and p.obm=o.id and pj.dataprevista between '2016-01-01' and '2016-12-31' and og.status=3 order by dataprevista desc 
 Execution Time:0.0020809173583984

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00041699409484863

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00035786628723145

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2016-12-31' group by nome order by nome asc 
 Execution Time:0.00072383880615234

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.001183032989502

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00082111358642578

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.00080013275146484

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.0010020732879639

select og.nome as nome, sum(p.valor) as valor from planejamento as p, origemreceita as og where origemreceita in (select id from origemreceita where status=3) and dataprevista between '2017-01-01' and '2017-12-31' and p.origemreceita=og.id and p.tipo=1 group by og.nome order by og.nome asc 
 Execution Time:0.0011940002441406

select pj.id as planejamento, pj.tipo, pj.plano, p.status, p.obm as obm_id, o.nome as obm, pj.origemreceita as og_id, og.nome as og_nome, pj.detalhamento, pj.valor, pj.dataprevista from planejamento as pj, origemreceita as og, especificacao as ep, plano as p, obm as o where pj.origemreceita = og.id and pj.especificacao = ep.id and pj.tipo=1 and pj.plano=p.id and p.obm=o.id and pj.dataprevista between '2017-01-01' and '2017-12-31' and og.status=3 order by dataprevista desc 
 Execution Time:0.0036909580230713

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0008080005645752

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00056719779968262

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00085210800170898

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0025820732116699

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.0032730102539062

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.0017440319061279

select og.nome as nome, sum(p.valor) as valor from planejamento as p, origemreceita as og where origemreceita in (select id from origemreceita where status=3) and dataprevista between '2017-01-01' and '2017-12-31' and p.origemreceita=og.id and p.tipo=1 group by og.nome order by og.nome asc 
 Execution Time:0.0012078285217285

select pj.id as planejamento, pj.tipo, pj.plano, p.status, p.obm as obm_id, o.nome as obm, pj.origemreceita as og_id, og.nome as og_nome, pj.detalhamento, pj.valor, pj.dataprevista from planejamento as pj, origemreceita as og, especificacao as ep, plano as p, obm as o where pj.origemreceita = og.id and pj.especificacao = ep.id and pj.tipo=1 and pj.plano=p.id and p.obm=o.id and pj.dataprevista between '2017-01-01' and '2017-12-31' and og.status=3 order by dataprevista desc 
 Execution Time:0.0032839775085449

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00063705444335938

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00092911720275879

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.0021450519561768

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.0011370182037354

select og.nome as nome, sum(p.valor) as valor from planejamento as p, origemreceita as og where origemreceita in (select id from origemreceita where status=3) and dataprevista between '2017-01-01' and '2017-12-31' and p.origemreceita=og.id and p.tipo=1 group by og.nome order by og.nome asc 
 Execution Time:0.00086092948913574

select pj.id as planejamento, pj.tipo, pj.plano, p.status, p.obm as obm_id, o.nome as obm, pj.origemreceita as og_id, og.nome as og_nome, pj.detalhamento, pj.valor, pj.dataprevista from planejamento as pj, origemreceita as og, especificacao as ep, plano as p, obm as o where pj.origemreceita = og.id and pj.especificacao = ep.id and pj.tipo=1 and pj.plano=p.id and p.obm=o.id and pj.dataprevista between '2017-01-01' and '2017-12-31' and og.status=3 order by dataprevista desc 
 Execution Time:0.0019609928131104

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00043201446533203

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00036501884460449

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.00067305564880371

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.0005500316619873

select og.nome as nome, sum(p.valor) as valor from planejamento as p, origemreceita as og where origemreceita in (select id from origemreceita where status=3) and dataprevista between '2017-01-01' and '2017-12-31' and p.origemreceita=og.id and p.tipo=1 group by og.nome order by og.nome asc 
 Execution Time:0.00068998336791992

select pj.id as planejamento, pj.tipo, pj.plano, p.status, p.obm as obm_id, o.nome as obm, pj.origemreceita as og_id, og.nome as og_nome, pj.detalhamento, pj.valor, pj.dataprevista from planejamento as pj, origemreceita as og, especificacao as ep, plano as p, obm as o where pj.origemreceita = og.id and pj.especificacao = ep.id and pj.tipo=1 and pj.plano=p.id and p.obm=o.id and pj.dataprevista between '2017-01-01' and '2017-12-31' and og.status=3 order by dataprevista desc 
 Execution Time:0.0021920204162598

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0013048648834229

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00075292587280273

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.00066900253295898

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.00089597702026367

select og.nome as nome, sum(p.valor) as valor from planejamento as p, origemreceita as og where origemreceita in (select id from origemreceita where status=3) and dataprevista between '2017-01-01' and '2017-12-31' and p.origemreceita=og.id and p.tipo=1 group by og.nome order by og.nome asc 
 Execution Time:0.0021629333496094

select pj.id as planejamento, pj.tipo, pj.plano, p.status, p.obm as obm_id, o.nome as obm, pj.origemreceita as og_id, og.nome as og_nome, pj.detalhamento, pj.valor, pj.dataprevista from planejamento as pj, origemreceita as og, especificacao as ep, plano as p, obm as o where pj.origemreceita = og.id and pj.especificacao = ep.id and pj.tipo=1 and pj.plano=p.id and p.obm=o.id and pj.dataprevista between '2017-01-01' and '2017-12-31' and og.status=3 order by dataprevista desc 
 Execution Time:0.0021240711212158

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00064301490783691

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00062084197998047

