SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:1.2465450763702

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00049090385437012

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00030207633972168

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.24809384346008

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.023374080657959

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.094346046447754

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.043365955352783

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.014099836349487

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.013720035552979

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00054407119750977

SELECT *
FROM "plano"
WHERE "status" =  2
ORDER BY "datainicio" 
 Execution Time:0.015361070632935

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00040721893310547

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00025081634521484

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.041195154190063

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.021944999694824

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00028896331787109

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.022293090820312

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00046706199645996

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0012421607971191

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0011439323425293

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00046896934509277

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.048582077026367

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.00039291381835938

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00034904479980469

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0012199878692627

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00080490112304688

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.001331090927124

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0008699893951416

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.01570987701416

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0015859603881836

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00075697898864746

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00058698654174805

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00078105926513672

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.00052309036254883

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00074005126953125

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00064802169799805

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.0004420280456543

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00091195106506348

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00061297416687012

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029206275939941

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00058197975158691

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00041389465332031

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.0004270076751709

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00061488151550293

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.00034904479980469

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00032997131347656

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0019690990447998

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00076508522033691

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00066709518432617

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0012021064758301

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0011899471282959

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.001539945602417

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.001431941986084

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.0011379718780518

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.001986026763916

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.00082707405090332

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00092792510986328

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00087094306945801

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00059795379638672

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.0005180835723877

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00064206123352051

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00060296058654785

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.02426815032959

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00044894218444824

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00039386749267578

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00064897537231445

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.0002899169921875

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00027298927307129

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.0029401779174805

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00045990943908691

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.0004889965057373

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.016528844833374

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041508674621582

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.034370899200439

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00054192543029785

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00087499618530273

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00032496452331543

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00042605400085449

SELECT *
FROM "plano"
WHERE "status" =  2
ORDER BY "datainicio" 
 Execution Time:0.012332916259766

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00095582008361816

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0005800724029541

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.061432123184204

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0095109939575195

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0010712146759033

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0016450881958008

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00084686279296875

SELECT *
FROM "plano"
WHERE "status" =  2
ORDER BY "datainicio" 
 Execution Time:0.0098371505737305

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00078892707824707

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00032496452331543

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00075101852416992

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00087308883666992

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00047397613525391

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00039982795715332

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041007995605469

SELECT *
FROM "plano"
WHERE "status" =  2
ORDER BY "datainicio" 
 Execution Time:0.00044798851013184

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00047111511230469

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00045418739318848

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0012650489807129

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00069499015808105

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00046896934509277

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0004570484161377

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004880428314209

SELECT *
FROM "plano"
WHERE "status" =  2
ORDER BY "datainicio" 
 Execution Time:0.00045204162597656

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00041484832763672

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00037980079650879

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.027487993240356

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00049209594726562

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0005030632019043

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00038003921508789

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0006110668182373

SELECT *
FROM "plano"
WHERE "status" =  2
ORDER BY "datainicio" 
 Execution Time:0.015565872192383

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00076389312744141

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00070810317993164

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.0006098747253418

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00043797492980957

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00043201446533203

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0076019763946533

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00097179412841797

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00074195861816406

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00041985511779785

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00059103965759277

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.001162052154541

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.001021146774292

SELECT *
FROM "plano"
WHERE "status" =  2
ORDER BY "datainicio" 
 Execution Time:0.00055098533630371

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00036716461181641

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00040698051452637

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.0012202262878418

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00056600570678711

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00041103363037109

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00085282325744629

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00039911270141602

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00072789192199707

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.000823974609375

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00056695938110352

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00044083595275879

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00092387199401855

SELECT *
FROM "plano"
WHERE "status" =  2
ORDER BY "datainicio" 
 Execution Time:0.0009000301361084

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00050115585327148

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00045204162597656

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00047206878662109

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00029706954956055

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00026798248291016

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00045895576477051

Array 
 Execution Time:0.0001220703125

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00067710876464844

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0011050701141357

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0012390613555908

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00041294097900391

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00072622299194336

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0015270709991455

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.00042986869812012

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.0003659725189209

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.013602018356323

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.0015168190002441

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00063896179199219

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.0010139942169189

select * from reprovacao where plano='21'; 
 Execution Time:0.053277969360352

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00057101249694824

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00047707557678223

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0298171043396

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00064206123352051

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00061893463134766

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.010497093200684

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.00041604042053223

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00096702575683594

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00055193901062012

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00040411949157715

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.0003819465637207

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00092291831970215

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00058794021606445

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0014631748199463

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00069403648376465

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00055909156799316

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00043392181396484

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00055480003356934

SELECT *
FROM "plano"
WHERE "status" =  2
ORDER BY "datainicio" 
 Execution Time:0.00056004524230957

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00082802772521973

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00049614906311035

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00055718421936035

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.001384973526001

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0006859302520752

SELECT *
FROM "plano"
WHERE "status" =  2
ORDER BY "datainicio" 
 Execution Time:0.0005791187286377

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00054383277893066

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00064492225646973

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00039482116699219

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00042605400085449

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00092291831970215

SELECT *
FROM "plano"
WHERE "status" =  2
ORDER BY "datainicio" 
 Execution Time:0.0007469654083252

select * from plano where status=4 order by datainicio DESC, datafim DESC 
 Execution Time:0.0011870861053467

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00085592269897461

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00053095817565918

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00053691864013672

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00037884712219238

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00038504600524902

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00081706047058105

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00067400932312012

SELECT *
FROM "plano"
WHERE "status" =  2
ORDER BY "datainicio" 
 Execution Time:0.00044703483581543

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0014019012451172

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0005030632019043

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00068092346191406

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00072383880615234

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00043416023254395

SELECT *
FROM "plano"
WHERE "status" =  2
ORDER BY "datainicio" 
 Execution Time:0.0003211498260498

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00052595138549805

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0009770393371582

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00073814392089844

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00037288665771484

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00037312507629395

SELECT *
FROM "plano"
WHERE "status" =  2
ORDER BY "datainicio" 
 Execution Time:0.00076603889465332

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00059700012207031

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00059604644775391

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.027714014053345

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00040292739868164

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00033807754516602

SELECT *
FROM "plano"
WHERE "status" =  2
ORDER BY "datainicio" 
 Execution Time:0.00031805038452148

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00090408325195312

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00090694427490234

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00041103363037109

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00041007995605469

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00084495544433594

SELECT *
FROM "plano"
WHERE "status" =  2
ORDER BY "datainicio" 
 Execution Time:0.0007469654083252

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00028705596923828

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00025200843811035

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0016260147094727

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00053787231445312

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00053501129150391

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.0004270076751709

select * from reprovacao where plano='21'; 
 Execution Time:0.00061488151550293

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00054502487182617

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00067496299743652

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0017359256744385

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00035214424133301

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00039196014404297

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00058817863464355

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.00024318695068359

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00021791458129883

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00061297416687012

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00048089027404785

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00032711029052734

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00042915344238281

select * from reprovacao where plano='21'; 
 Execution Time:0.0012710094451904

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00082802772521973

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00037598609924316

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00068807601928711

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0003669261932373

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00039887428283691

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00065803527832031

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.00029397010803223

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00031018257141113

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0006110668182373

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00058197975158691

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.0014781951904297

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00053000450134277

select * from reprovacao where plano='21'; 
 Execution Time:0.048880100250244

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00044989585876465

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040197372436523

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0012869834899902

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00070381164550781

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00066590309143066

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.011925935745239

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.00099301338195801

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00054788589477539

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00042104721069336

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00028395652770996

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00026893615722656

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00038909912109375

select * from reprovacao where plano='21'; 
 Execution Time:0.00057697296142578

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00055408477783203

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041890144348145

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0009911060333252

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00046801567077637

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00051093101501465

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0007941722869873

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.00043296813964844

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00057411193847656

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00055789947509766

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00043296813964844

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00043010711669922

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00096797943115234

select * from reprovacao where plano='21'; 
 Execution Time:0.0011489391326904

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00045394897460938

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0005030632019043

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00040793418884277

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00094795227050781

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00052595138549805

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0012640953063965

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.001507043838501

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.0004889965057373

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00097084045410156

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00041294097900391

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00025391578674316

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00066995620727539

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028586387634277

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00053596496582031

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00046515464782715

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00036001205444336

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0003209114074707

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00032401084899902

SELECT *
FROM "plano"
WHERE "status" =  2
ORDER BY "datainicio" 
 Execution Time:0.00033020973205566

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00067996978759766

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00060820579528809

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0012738704681396

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00066399574279785

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041294097900391

SELECT *
FROM "plano"
WHERE "status" =  2
ORDER BY "datainicio" 
 Execution Time:0.00034189224243164

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00072312355041504

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00095891952514648

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00050902366638184

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00046086311340332

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040698051452637

SELECT *
FROM "plano"
WHERE "status" =  2
ORDER BY "datainicio" 
 Execution Time:0.00036811828613281

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0005190372467041

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00092911720275879

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0007178783416748

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00035405158996582

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00045299530029297

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00053906440734863

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00027894973754883

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0002589225769043

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00046586990356445

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00041985511779785

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00042486190795898

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00040078163146973

select * from reprovacao where plano='21'; 
 Execution Time:0.00029897689819336

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00037097930908203

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00039911270141602

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0013689994812012

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0012309551239014

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00074195861816406

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0013091564178467

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.00043606758117676

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00026702880859375

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00061488151550293

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.0005028247833252

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00040507316589355

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00029420852661133

select * from reprovacao where plano='21'; 
 Execution Time:0.026813983917236

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.001291036605835

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00063109397888184

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00075888633728027

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00076699256896973

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00043916702270508

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0011119842529297

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.00077104568481445

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00052285194396973

select * from plano where status=4 order by datainicio DESC, datafim DESC 
 Execution Time:0.00055384635925293

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00059103965759277

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0004270076751709

SELECT *
FROM "plano"
WHERE "id" =  '15' 
 Execution Time:0.00067710876464844

SELECT *
FROM "plano"
WHERE "id" =  '15' 
 Execution Time:0.00053000450134277

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00034213066101074

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00055909156799316

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00085186958312988

select * from planejamento where plano='15' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00071096420288086

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00037813186645508

select origemreceita, sum(valor) from planejamento where plano='15' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00039005279541016

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='15' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0012860298156738

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='15' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00078010559082031

select sum(valor) as total from planejamento where plano='15' and tipo=1 
 Execution Time:0.00028705596923828

select sum(valor) as total from planejamento where plano='15' and tipo=2 
 Execution Time:0.00026106834411621

select * from plano where status=4 order by datainicio DESC, datafim DESC 
 Execution Time:0.0006251335144043

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040602684020996

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0003199577331543

select * from plano where status=4 order by datainicio DESC, datafim DESC 
 Execution Time:0.0011208057403564

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00037717819213867

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00036406517028809

select * from plano where status=4 order by datainicio DESC, datafim DESC 
 Execution Time:0.00084400177001953

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00049591064453125

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0010008811950684

select * from plano where status=4 order by datainicio DESC, datafim DESC 
 Execution Time:0.00052094459533691

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00055789947509766

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00032901763916016

select * from plano where status=4 order by datainicio DESC, datafim DESC 
 Execution Time:0.00063896179199219

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00035691261291504

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00027894973754883

select * from plano where status=4 order by datainicio DESC, datafim DESC 
 Execution Time:0.00049185752868652

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040507316589355

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0003960132598877

select * from plano where status=4 and obm='7' order by datainicio DESC, datafim DESC 
 Execution Time:0.00063681602478027

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00036907196044922

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00040102005004883

select * from plano where status=4 and obm='4' order by datainicio DESC, datafim DESC 
 Execution Time:0.00069499015808105

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00049209594726562

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00045013427734375

SELECT *
FROM "plano"
WHERE "id" =  '14' 
 Execution Time:0.00061297416687012

SELECT *
FROM "plano"
WHERE "id" =  '14' 
 Execution Time:0.00058817863464355

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00046205520629883

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00051498413085938

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040984153747559

select * from planejamento where plano='14' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00095486640930176

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00082302093505859

select origemreceita, sum(valor) from planejamento where plano='14' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00063085556030273

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='14' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00066399574279785

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='14' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00085592269897461

select sum(valor) as total from planejamento where plano='14' and tipo=1 
 Execution Time:0.00062203407287598

select sum(valor) as total from planejamento where plano='14' and tipo=2 
 Execution Time:0.00046110153198242

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00050592422485352

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00076198577880859

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00074005126953125

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00046896934509277

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00048303604125977

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0012209415435791

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00093507766723633

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00025391578674316

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.0005958080291748

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.0012860298156738

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00051403045654297

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0013089179992676

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0013699531555176

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00052714347839355

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00040078163146973

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0010020732879639

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00076985359191895

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040316581726074

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00041079521179199

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00027894973754883

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00047397613525391

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00059103965759277

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00048303604125977

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00027608871459961

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00040817260742188

select * from reprovacao where plano='21'; 
 Execution Time:0.0010120868682861

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.001079797744751

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00046205520629883

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00052189826965332

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0014119148254395

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00051188468933105

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00064611434936523

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.0003349781036377

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00032210350036621

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0010890960693359

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00051403045654297

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00051593780517578

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00045108795166016

select * from reprovacao where plano='21'; 
 Execution Time:0.00045084953308105

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00044894218444824

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003209114074707

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00054478645324707

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00078105926513672

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00040006637573242

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00058293342590332

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.00081205368041992

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00045585632324219

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0006251335144043

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00041604042053223

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00034093856811523

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0010130405426025

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00078201293945312

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00049304962158203

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00052213668823242

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00072407722473145

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00050091743469238

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00057196617126465

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00085616111755371

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00048303604125977

select * from reprovacao where plano='21'; 
 Execution Time:0.00026202201843262

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00033712387084961

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00086283683776855

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00096011161804199

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00072193145751953

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00040006637573242

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00057697296142578

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.00030994415283203

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00028395652770996

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00062298774719238

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0011870861053467

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0005030632019043

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00042486190795898

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00080490112304688

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00095796585083008

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00031113624572754

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0002591609954834

select * from plano where status=4 order by datainicio DESC, datafim DESC 
 Execution Time:0.00085115432739258

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00053000450134277

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00039005279541016

select * from plano where status=4 and obm='7' order by datainicio DESC, datafim DESC 
 Execution Time:0.00053095817565918

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00032901763916016

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00030708312988281

select * from plano where status=4 and obm='7' order by datainicio DESC, datafim DESC 
 Execution Time:0.0015311241149902

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041794776916504

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00032496452331543

select * from plano where status=4 and obm='7' order by datainicio DESC, datafim DESC 
 Execution Time:0.0015370845794678

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00043702125549316

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00037717819213867

select * from plano where status=4 and obm='1' order by datainicio DESC, datafim DESC 
 Execution Time:0.00051403045654297

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00046896934509277

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00043201446533203

select * from plano where status=4 and obm='10' order by datainicio DESC, datafim DESC 
 Execution Time:0.00051093101501465

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0011301040649414

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0010848045349121

select * from plano where status=4 and obm='3' order by datainicio DESC, datafim DESC 
 Execution Time:0.00069093704223633

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00049114227294922

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00040698051452637

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00050497055053711

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00051593780517578

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00044083595275879

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00038385391235352

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003058910369873

select * from planejamento where plano='18' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0010251998901367

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00099492073059082

select origemreceita, sum(valor) from planejamento where plano='18' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00058293342590332

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='18' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00086092948913574

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='18' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00076699256896973

select sum(valor) as total from planejamento where plano='18' and tipo=1 
 Execution Time:0.00080084800720215

select sum(valor) as total from planejamento where plano='18' and tipo=2 
 Execution Time:0.00056982040405273

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.000823974609375

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00040888786315918

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.001107931137085

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0011880397796631

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00043392181396484

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00068783760070801

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00072002410888672

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00063705444335938

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00059008598327637

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00053000450134277

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00047087669372559

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00055718421936035

select * from reprovacao where plano='21'; 
 Execution Time:0.00052094459533691

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00049209594726562

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0014419555664062

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00063490867614746

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0012068748474121

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00086212158203125

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0010471343994141

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.00030899047851562

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00025010108947754

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0022468566894531

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00080418586730957

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0007941722869873

SELECT *
FROM "usuario" 
 Execution Time:0.00058603286743164

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0007929801940918

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.027930021286011

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00070786476135254

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00066590309143066

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00061702728271484

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00068306922912598

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00060319900512695

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00056886672973633

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0012540817260742

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0004119873046875

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00032496452331543

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00065708160400391

SELECT *
FROM "obm"
WHERE "id" =  '1' 
 Execution Time:0.00072693824768066

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00090312957763672

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00045990943908691

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00034117698669434

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00044584274291992

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00047206878662109

select * from acesso where usuario='6' and obm='1' 
 Execution Time:0.051722049713135

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00065898895263672

SELECT *
FROM "obm"
WHERE "id" =  '10' 
 Execution Time:0.00040888786315918

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00043487548828125

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00044584274291992

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00039505958557129

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00042104721069336

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00044488906860352

select * from acesso where usuario='6' and obm='10' 
 Execution Time:0.00035309791564941

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00059199333190918

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00042414665222168

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00040006637573242

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00046300888061523

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00063705444335938

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00050497055053711

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0002899169921875

select * from acesso where usuario='6' and obm='3' 
 Execution Time:0.0002598762512207

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00050091743469238

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00051021575927734

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00055098533630371

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00053215026855469

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00078582763671875

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00065302848815918

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00051188468933105

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00058603286743164

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041294097900391

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00046110153198242

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00040316581726074

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00049209594726562

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00025296211242676

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00034880638122559

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00076985359191895

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00067591667175293

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00046896934509277

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00043487548828125

select * from acesso where usuario='6' and obm='3' 
 Execution Time:0.00054788589477539

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.0013110637664795

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00055599212646484

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.001168966293335

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0010650157928467

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00054192543029785

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00044417381286621

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00066399574279785

select * from acesso where usuario='6' and obm='9' 
 Execution Time:0.00034403800964355

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00063395500183105

SELECT *
FROM "obm"
WHERE "id" =  '4' 
 Execution Time:0.0004570484161377

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00045299530029297

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00037789344787598

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00063300132751465

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00083708763122559

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00047492980957031

select * from acesso where usuario='6' and obm='4' 
 Execution Time:0.00048494338989258

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00040984153747559

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00033688545227051

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00050711631774902

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0012359619140625

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00045990943908691

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00059390068054199

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00040316581726074

select * from acesso where usuario='6' and obm='8' 
 Execution Time:0.000244140625

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00057601928710938

SELECT *
FROM "obm"
WHERE "id" =  '5' 
 Execution Time:0.00035786628723145

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00038695335388184

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00033378601074219

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0012168884277344

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00079798698425293

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0003669261932373

select * from acesso where usuario='6' and obm='5' 
 Execution Time:0.0003058910369873

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00046896934509277

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00024199485778809

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00048208236694336

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0006558895111084

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00063180923461914

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00034284591674805

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00043296813964844

select * from acesso where usuario='6' and obm='7' 
 Execution Time:0.00036501884460449

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00054097175598145

SELECT *
FROM "obm"
WHERE "id" =  '1' 
 Execution Time:0.00045394897460938

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00046110153198242

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00039100646972656

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00038814544677734

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00090193748474121

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00098395347595215

select * from acesso where usuario='6' and obm='1' 
 Execution Time:0.0003819465637207

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.0017459392547607

SELECT *
FROM "obm"
WHERE "id" =  '10' 
 Execution Time:0.00054097175598145

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00045299530029297

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0008080005645752

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.001323938369751

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00042390823364258

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00032401084899902

select * from acesso where usuario='6' and obm='10' 
 Execution Time:0.00035309791564941

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00052499771118164

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0014779567718506

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00072288513183594

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00050687789916992

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040006637573242

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00039005279541016

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0012111663818359

select * from acesso where usuario='6' and obm='3' 
 Execution Time:0.00074100494384766

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00061202049255371

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00042390823364258

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00041985511779785

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00076484680175781

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0012660026550293

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00047397613525391

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00043296813964844

select * from acesso where usuario='6' and obm='9' 
 Execution Time:0.00061702728271484

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.0005640983581543

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00057291984558105

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00052785873413086

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00044107437133789

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003809928894043

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00028610229492188

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00029087066650391

select * from acesso where usuario='6' and obm='3' 
 Execution Time:0.00086188316345215

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00072622299194336

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00074386596679688

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0017769336700439

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00079607963562012

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00056695938110352

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00094008445739746

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00037884712219238

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00095510482788086

SELECT *
FROM "usuario" 
 Execution Time:0.00072002410888672

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00044703483581543

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00041007995605469

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00072503089904785

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00072288513183594

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040888786315918

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00042080879211426

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00068879127502441

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00071501731872559

select * from plano where status=4 order by datainicio DESC, datafim DESC 
 Execution Time:0.00054192543029785

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003211498260498

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00052809715270996

select * from plano where status=4 and obm='7' order by datainicio DESC, datafim DESC 
 Execution Time:0.0020549297332764

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.001288890838623

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0020260810852051

SELECT *
FROM "plano"
WHERE "id" =  '15' 
 Execution Time:0.00055193901062012

SELECT *
FROM "plano"
WHERE "id" =  '15' 
 Execution Time:0.00043702125549316

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00042414665222168

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0011899471282959

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004730224609375

select * from planejamento where plano='15' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0005040168762207

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00088596343994141

select origemreceita, sum(valor) from planejamento where plano='15' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00092911720275879

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='15' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.001194953918457

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='15' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00089621543884277

select sum(valor) as total from planejamento where plano='15' and tipo=1 
 Execution Time:0.00046801567077637

select sum(valor) as total from planejamento where plano='15' and tipo=2 
 Execution Time:0.00045585632324219

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.066619873046875

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.13523983955383

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.15162301063538

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.10838580131531

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.096276998519897

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.17797708511353

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00053906440734863

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00038790702819824

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.033374071121216

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.0021178722381592

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00047612190246582

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00037097930908203

select * from reprovacao where plano='21'; 
 Execution Time:0.047730922698975

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.045894145965576

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00084400177001953

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.028467893600464

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.043703079223633

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.0010790824890137

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0011839866638184

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.00042390823364258

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00033998489379883

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0018718242645264

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00082707405090332

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0024130344390869

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0010499954223633

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00142502784729

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00095701217651367

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00034189224243164

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00028300285339355

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.001716136932373

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0005490779876709

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0011739730834961

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00059294700622559

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00063586235046387

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0011031627655029

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00044488906860352

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00041985511779785

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0016129016876221

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00074005126953125

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.0003960132598877

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00040888786315918

select * from reprovacao where plano='21'; 
 Execution Time:0.00052595138549805

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0015318393707275

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00095796585083008

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0017151832580566

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0019741058349609

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00071215629577637

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0010769367218018

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.00040292739868164

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00036716461181641

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00094509124755859

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00055193901062012

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00052595138549805

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0022730827331543

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0014429092407227

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0010371208190918

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0007779598236084

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0010597705841064

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00087308883666992

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00060296058654785

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00063180923461914

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00040006637573242

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00038313865661621

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00067400932312012

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00045680999755859

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00036120414733887

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00040912628173828

select * from reprovacao where plano='21'; 
 Execution Time:0.00044608116149902

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00060582160949707

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00071001052856445

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0014591217041016

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0023870468139648

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.0006859302520752

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00077199935913086

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.0003201961517334

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00030708312988281

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.002810001373291

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.001370906829834

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00031208992004395

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00043797492980957

select * from reprovacao where plano='21'; 
 Execution Time:0.00090980529785156

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0012080669403076

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0012061595916748

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0019190311431885

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0022809505462646

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00055694580078125

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0010750293731689

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.00040602684020996

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00041007995605469

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00078701972961426

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00073099136352539

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00092196464538574

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00073599815368652

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00042581558227539

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0015649795532227

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00052881240844727

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00036501884460449

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.038147926330566

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00082707405090332

SELECT *
FROM "obm" 
 Execution Time:0.00051188468933105

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0013740062713623

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.026460886001587

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0010340213775635

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00068783760070801

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00040006637573242

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00048613548278809

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00043487548828125

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00038504600524902

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00044798851013184

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00052595138549805

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00041294097900391

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00051093101501465

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00039219856262207

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00029087066650391

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00024986267089844

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00069212913513184

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00073790550231934

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0003812313079834

select * from acesso where usuario='6' and obm='3' 
 Execution Time:0.0005040168762207

SELECT *
FROM "modulo"
ORDER BY "nome" ASC 
 Execution Time:0.0019509792327881

SELECT *
FROM "modulo"
ORDER BY "nome" ASC 
 Execution Time:0.00078797340393066

SELECT *
FROM "modulo"
ORDER BY "nome" ASC 
 Execution Time:0.00078105926513672

SELECT *
FROM "modulo"
WHERE "id" =  '17' 
 Execution Time:0.00049901008605957

SELECT *
FROM "modulo"
ORDER BY "nome" ASC 
 Execution Time:0.00040411949157715

SELECT *
FROM "modulo"
ORDER BY "nome" ASC 
 Execution Time:0.00047612190246582

SELECT *
FROM "modulo"
WHERE "id" =  '20' 
 Execution Time:0.00027799606323242

SELECT *
FROM "modulo"
ORDER BY "nome" ASC 
 Execution Time:0.0016951560974121

SELECT *
FROM "modulo"
ORDER BY "nome" ASC 
 Execution Time:0.00053691864013672

SELECT *
FROM "modulo"
WHERE "id" =  '7' 
 Execution Time:0.00032305717468262

SELECT *
FROM "modulo"
ORDER BY "nome" ASC 
 Execution Time:0.00093698501586914

SELECT *
FROM "modulo"
ORDER BY "nome" ASC 
 Execution Time:0.00042200088500977

SELECT *
FROM "modulo"
WHERE "id" =  '16' 
 Execution Time:0.00070500373840332

SELECT *
FROM "modulo"
ORDER BY "nome" ASC 
 Execution Time:0.00049781799316406

SELECT *
FROM "modulo"
ORDER BY "nome" ASC 
 Execution Time:0.00053691864013672

SELECT *
FROM "modulo"
WHERE "id" =  '21' 
 Execution Time:0.00040411949157715

SELECT *
FROM "modulo"
ORDER BY "nome" ASC 
 Execution Time:0.00043487548828125

SELECT *
FROM "modulo"
ORDER BY "nome" ASC 
 Execution Time:0.00052094459533691

SELECT *
FROM "modulo"
WHERE "id" =  '18' 
 Execution Time:0.00044798851013184

SELECT *
FROM "modulo"
ORDER BY "nome" ASC 
 Execution Time:0.00070905685424805

SELECT *
FROM "modulo"
ORDER BY "nome" ASC 
 Execution Time:0.00040197372436523

SELECT *
FROM "modulo"
WHERE "id" =  '19' 
 Execution Time:0.00046992301940918

SELECT *
FROM "modulo"
ORDER BY "nome" ASC 
 Execution Time:0.001079797744751

SELECT *
FROM "modulo"
ORDER BY "nome" ASC 
 Execution Time:0.00049901008605957

SELECT *
FROM "modulo"
WHERE "id" =  '15' 
 Execution Time:0.00048112869262695

SELECT *
FROM "modulo"
ORDER BY "nome" ASC 
 Execution Time:0.00058293342590332

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00044512748718262

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0003960132598877

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00029993057250977

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00064682960510254

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00081419944763184

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00075507164001465

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00066494941711426

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00053501129150391

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0008690357208252

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0013859272003174

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0005640983581543

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0010039806365967

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00076794624328613

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00064301490783691

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00025510787963867

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00022411346435547

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00075221061706543

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0006401538848877

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00038599967956543

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00031089782714844

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00033903121948242

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00084400177001953

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00064492225646973

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00035905838012695

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00085091590881348

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00085306167602539

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00047397613525391

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00093793869018555

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00096511840820312

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00068283081054688

SELECT *
FROM "modulo"
ORDER BY "nome" ASC 
 Execution Time:0.0010039806365967

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00070500373840332

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00036001205444336

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028014183044434

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00082707405090332

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00076985359191895

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00063014030456543

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00052690505981445

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00039505958557129

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00083684921264648

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00079011917114258

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00041079521179199

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00037503242492676

SELECT *
FROM "obm"
WHERE "id" =  '1' 
 Execution Time:0.0002739429473877

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00039219856262207

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00051093101501465

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00032782554626465

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00028514862060547

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00031590461730957

select * from acesso where usuario='2' and obm='1' 
 Execution Time:0.00055694580078125

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00060796737670898

SELECT *
FROM "obm"
WHERE "id" =  '10' 
 Execution Time:0.0013558864593506

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00071597099304199

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00052905082702637

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00057792663574219

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00054001808166504

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0005500316619873

select * from acesso where usuario='2' and obm='10' 
 Execution Time:0.00046896934509277

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.0007169246673584

SELECT *
FROM "obm"
WHERE "id" =  '1' 
 Execution Time:0.00046396255493164

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00047898292541504

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00086712837219238

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00059700012207031

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00033998489379883

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00035500526428223

select * from acesso where usuario='2' and obm='1' 
 Execution Time:0.00049614906311035

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.000762939453125

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00052499771118164

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00053501129150391

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00075817108154297

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00085902214050293

SELECT *
FROM "obm"
WHERE "id" =  '1' 
 Execution Time:0.00047707557678223

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00048208236694336

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00031900405883789

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040292739868164

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00041389465332031

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0003960132598877

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00046682357788086

SELECT *
FROM "obm"
WHERE "id" =  '1' 
 Execution Time:0.00025510787963867

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0003049373626709

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0010249614715576

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0006101131439209

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00030899047851562

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00041294097900391

select * from acesso where usuario='2' and obm='1' 
 Execution Time:0.00074982643127441

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00054597854614258

SELECT *
FROM "obm"
WHERE "id" =  '10' 
 Execution Time:0.00055098533630371

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0005500316619873

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00058984756469727

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041294097900391

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00044083595275879

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00050020217895508

select * from acesso where usuario='2' and obm='10' 
 Execution Time:0.00040411949157715

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0017218589782715

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00085806846618652

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00077104568481445

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.001082181930542

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00072598457336426

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00053095817565918

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00054407119750977

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00048398971557617

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00043487548828125

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00032496452331543

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00027990341186523

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00052595138549805

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00046205520629883

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00043892860412598

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00052094459533691

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00061607360839844

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00049304962158203

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00041794776916504

select * from acesso where usuario='2' and obm='3' 
 Execution Time:0.00079894065856934

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00066399574279785

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00054502487182617

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00048184394836426

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00046610832214355

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00058293342590332

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00040388107299805

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00034880638122559

select * from acesso where usuario='2' and obm='9' 
 Execution Time:0.00035786628723145

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0015609264373779

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00060606002807617

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00084686279296875

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0010077953338623

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00055599212646484

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00057387351989746

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00049614906311035

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00028491020202637

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029921531677246

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00090193748474121

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00059890747070312

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00050210952758789

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.0003209114074707

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0005040168762207

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00079178810119629

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00094699859619141

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00049018859863281

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0010919570922852

select * from acesso where usuario='2' and obm='9' 
 Execution Time:0.0010330677032471

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00066804885864258

SELECT *
FROM "obm"
WHERE "id" =  '4' 
 Execution Time:0.0004420280456543

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00060391426086426

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00031208992004395

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00057792663574219

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00094795227050781

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00042510032653809

select * from acesso where usuario='2' and obm='4' 
 Execution Time:0.00042605400085449

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0015580654144287

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00052285194396973

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00093197822570801

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00085592269897461

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00049805641174316

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00065708160400391

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0004420280456543

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00037288665771484

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00037002563476562

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00049591064453125

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00043201446533203

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00059390068054199

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.0003809928894043

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00035905838012695

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0010929107666016

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00072193145751953

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00098109245300293

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0011348724365234

select * from acesso where usuario='2' and obm='8' 
 Execution Time:0.00049114227294922

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0014450550079346

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00062298774719238

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00045013427734375

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00039386749267578

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00039196014404297

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00047612190246582

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00054693222045898

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00040507316589355

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004279613494873

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00042891502380371

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0010519027709961

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00054192543029785

SELECT *
FROM "obm"
WHERE "id" =  '5' 
 Execution Time:0.0012650489807129

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0013160705566406

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00052189826965332

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00065922737121582

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00040483474731445

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00038886070251465

select * from acesso where usuario='2' and obm='5' 
 Execution Time:0.00073504447937012

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0011589527130127

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00087690353393555

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00078797340393066

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00084400177001953

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00086808204650879

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00051712989807129

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00046896934509277

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00030994415283203

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003511905670166

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00035214424133301

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00030207633972168

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.0018370151519775

SELECT *
FROM "obm"
WHERE "id" =  '5' 
 Execution Time:0.00050497055053711

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00034594535827637

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00034308433532715

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00035810470581055

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00053596496582031

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0006411075592041

select * from acesso where usuario='2' and obm='5' 
 Execution Time:0.00052618980407715

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00052595138549805

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00040006637573242

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00044012069702148

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00043892860412598

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00042390823364258

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0004119873046875

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00037789344787598

select * from acesso where usuario='2' and obm='7' 
 Execution Time:0.00032401084899902

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00081610679626465

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00053501129150391

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00053787231445312

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00046396255493164

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00046992301940918

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00060915946960449

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00055289268493652

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00051403045654297

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00047993659973145

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00036907196044922

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00048089027404785

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00046110153198242

SELECT *
FROM "obm"
WHERE "id" =  '1' 
 Execution Time:0.00029802322387695

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00057697296142578

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0010809898376465

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00069808959960938

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00037002563476562

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0005791187286377

select * from acesso where usuario='2' and obm='1' 
 Execution Time:0.00069594383239746

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00078916549682617

SELECT *
FROM "obm"
WHERE "id" =  '10' 
 Execution Time:0.0005488395690918

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00048589706420898

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0005190372467041

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0011410713195801

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00068402290344238

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0003349781036377

select * from acesso where usuario='2' and obm='10' 
 Execution Time:0.00032901763916016

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00062203407287598

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00071907043457031

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00090503692626953

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00072383880615234

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0011880397796631

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0011370182037354

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00060415267944336

select * from acesso where usuario='2' and obm='3' 
 Execution Time:0.0013890266418457

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00052213668823242

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00037097930908203

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00042080879211426

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00045680999755859

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003809928894043

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00040388107299805

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00094008445739746

select * from acesso where usuario='6' and obm='3' 
 Execution Time:0.0006718635559082

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00055599212646484

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00064396858215332

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0018711090087891

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00041699409484863

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00098586082458496

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0011777877807617

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00049805641174316

select * from acesso where usuario='6' and obm='9' 
 Execution Time:0.00059795379638672

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.0010719299316406

select * from acesso where usuario='2' and modulo='7' 
 Execution Time:0.00076913833618164

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.0010042190551758

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.00046682357788086

select * from acesso where usuario='6' and modulo='7' 
 Execution Time:0.00076198577880859

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00058817863464355

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.00055694580078125

select * from acesso where usuario='6' and modulo='7' 
 Execution Time:0.00041007995605469

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.0014810562133789

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.00047111511230469

select * from acesso where usuario='6' and modulo='7' 
 Execution Time:0.00036406517028809

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00046706199645996

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.00046396255493164

select * from acesso where usuario='6' and modulo='7' 
 Execution Time:0.0007011890411377

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00066494941711426

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00078296661376953

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00038909912109375

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00051593780517578

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00033378601074219

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00039005279541016

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00041818618774414

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00051093101501465

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00051283836364746

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00053906440734863

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00043296813964844

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00033187866210938

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00094318389892578

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00054001808166504

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00062108039855957

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00055694580078125

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00045490264892578

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0010409355163574

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00082707405090332

select * from acesso where usuario='6' and obm='7' 
 Execution Time:0.00051307678222656

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.000701904296875

SELECT *
FROM "obm"
WHERE "id" =  '5' 
 Execution Time:0.00043296813964844

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00045394897460938

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00042295455932617

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004432201385498

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00044393539428711

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0013070106506348

select * from acesso where usuario='6' and obm='5' 
 Execution Time:0.00075411796569824

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00050687789916992

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00036287307739258

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0012478828430176

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0008080005645752

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00070595741271973

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00083398818969727

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00090599060058594

select * from acesso where usuario='6' and obm='8' 
 Execution Time:0.00048089027404785

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.0018060207366943

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00050997734069824

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0077888965606689

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00048089027404785

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00045299530029297

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00041913986206055

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00041890144348145

select * from acesso where usuario='6' and obm='9' 
 Execution Time:0.00034904479980469

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00042986869812012

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00026893615722656

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0003359317779541

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00029802322387695

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040388107299805

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00047588348388672

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00027704238891602

select * from acesso where usuario='6' and obm='3' 
 Execution Time:0.00033092498779297

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00081419944763184

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00059795379638672

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00062203407287598

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00060701370239258

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00059700012207031

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.0010340213775635

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0011661052703857

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0005180835723877

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00062704086303711

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00061678886413574

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00061488151550293

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.0011329650878906

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0011308193206787

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00060510635375977

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00058197975158691

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00045013427734375

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00035786628723145

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00083708763122559

select * from acesso where usuario='6' and obm='3' 
 Execution Time:0.0010900497436523

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.00055480003356934

select * from acesso where usuario='6' and modulo='7' 
 Execution Time:0.00044989585876465

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.0013182163238525

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.00055503845214844

select * from acesso where usuario='6' and modulo='7' 
 Execution Time:0.0004570484161377

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00034713745117188

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00098204612731934

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00069689750671387

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00031685829162598

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00029182434082031

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00033688545227051

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00053000450134277

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00043201446533203

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00026988983154297

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004429817199707

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.001413106918335

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00071406364440918

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00049495697021484

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00041413307189941

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00036311149597168

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00042891502380371

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00036811828613281

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00034904479980469

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00072312355041504

select * from acesso where usuario='6' and obm='3' 
 Execution Time:0.00094389915466309

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00064802169799805

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00069189071655273

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00071907043457031

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00063180923461914

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00068497657775879

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.00056576728820801

select * from acesso where usuario='6' and modulo='7' 
 Execution Time:0.00038886070251465

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00044798851013184

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.00045013427734375

select * from acesso where usuario='6' and modulo='7' 
 Execution Time:0.00031399726867676

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.0013251304626465

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00058197975158691

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00036406517028809

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00032496452331543

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0004270076751709

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00044989585876465

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00053596496582031

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00057601928710938

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00051999092102051

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00056004524230957

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00036787986755371

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00029706954956055

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00068283081054688

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00053906440734863

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00046801567077637

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00034689903259277

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0010359287261963

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0006260871887207

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00054502487182617

select * from acesso where usuario='6' and obm='3' 
 Execution Time:0.0004880428314209

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0005638599395752

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00061202049255371

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00061488151550293

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0003960132598877

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00039386749267578

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.0010578632354736

select * from acesso where usuario='6' and modulo='7' and nivel>0 
 Execution Time:0.001237154006958

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.0010459423065186

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00065207481384277

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00041699409484863

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0011179447174072

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00087904930114746

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00046396255493164

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00070381164550781

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0017070770263672

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00063896179199219

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00065994262695312

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00055098533630371

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00045013427734375

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00053095817565918

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0003359317779541

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00037598609924316

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0005030632019043

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00049805641174316

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00036287307739258

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00034189224243164

select * from acesso where usuario='6' and obm='3' 
 Execution Time:0.00078082084655762

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.001533031463623

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00053501129150391

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00045609474182129

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00049996376037598

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00062298774719238

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.0031721591949463

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.0012731552124023

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.0010011196136475

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.00042295455932617

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.00039577484130859

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00034093856811523

SELECT *
FROM "modulo"
ORDER BY "nome" ASC 
 Execution Time:0.0011720657348633

SELECT *
FROM "modulo"
ORDER BY "nome" ASC 
 Execution Time:0.0005490779876709

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0010261535644531

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00073409080505371

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00073719024658203

SELECT *
FROM "usuario" 
 Execution Time:0.00058889389038086

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0021858215332031

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0006561279296875

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00069594383239746

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00079989433288574

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00088596343994141

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00058794021606445

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00047588348388672

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00031399726867676

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028610229492188

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00035595893859863

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00049114227294922

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00046300888061523

SELECT *
FROM "obm"
WHERE "id" =  '1' 
 Execution Time:0.00024604797363281

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00030112266540527

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00028395652770996

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00031590461730957

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00031399726867676

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00050806999206543

select * from acesso where usuario='2' and obm='1' 
 Execution Time:0.00029397010803223

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0013530254364014

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00049805641174316

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003809928894043

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0003201961517334

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00066399574279785

SELECT *
FROM "obm"
WHERE "id" =  '1' 
 Execution Time:0.00063800811767578

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00059294700622559

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00035905838012695

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00027799606323242

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00090384483337402

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00083494186401367

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0016920566558838

SELECT *
FROM "postograd"
ORDER BY "nome" 
 Execution Time:0.00047111511230469

select * from plano where status=4 order by datainicio DESC, datafim DESC 
 Execution Time:0.10851502418518

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.050713777542114

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00079703330993652

select * from plano where status=4 and obm='7' order by datainicio DESC, datafim DESC 
 Execution Time:0.055838823318481

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00076818466186523

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00065803527832031

SELECT *
FROM "plano"
WHERE "id" =  '20' 
 Execution Time:0.016312122344971

SELECT *
FROM "plano"
WHERE "id" =  '20' 
 Execution Time:0.0010550022125244

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0018508434295654

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0011911392211914

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00078201293945312

select * from planejamento where plano='20' order by tipo ASC, dataprevista ASC 
 Execution Time:0.001183032989502

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00085902214050293

select origemreceita, sum(valor) from planejamento where plano='20' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.0014588832855225

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='20' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0011680126190186

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='20' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00082087516784668

select sum(valor) as total from planejamento where plano='20' and tipo=1 
 Execution Time:0.00039100646972656

select sum(valor) as total from planejamento where plano='20' and tipo=2 
 Execution Time:0.00033688545227051

SELECT *
FROM "modulo"
ORDER BY "nome" ASC 
 Execution Time:0.008903980255127

SELECT *
FROM "modulo"
ORDER BY "nome" ASC 
 Execution Time:0.0010828971862793

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00084900856018066

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00048184394836426

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00049901008605957

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00058698654174805

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00052499771118164

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00062394142150879

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0005800724029541

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00045585632324219

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004119873046875

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00099396705627441

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0007481575012207

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00090909004211426

SELECT *
FROM "obm"
WHERE "id" =  '1' 
 Execution Time:0.00050187110900879

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00069284439086914

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00066399574279785

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.000579833984375

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0005640983581543

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00066113471984863

select * from acesso where usuario='2' and obm='1' 
 Execution Time:0.0010890960693359

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00088310241699219

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00041604042053223

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00052285194396973

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0013341903686523

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00084304809570312

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0022780895233154

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.01105785369873

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0014359951019287

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0010008811950684

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0020051002502441

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0023918151855469

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.0003960132598877

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0003509521484375

select * from plano where status=4 order by datainicio DESC, datafim DESC 
 Execution Time:0.00064206123352051

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040507316589355

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0010671615600586

select * from plano where status=4 and obm='7' order by datainicio DESC, datafim DESC 
 Execution Time:0.00067687034606934

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00051689147949219

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00047588348388672

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0015928745269775

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00083303451538086

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0011520385742188

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0005648136138916

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00039196014404297

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00073385238647461

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00031089782714844

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00031304359436035

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00055718421936035

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0005340576171875

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00094890594482422

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00093507766723633

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00063991546630859

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0013179779052734

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00056099891662598

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00042581558227539

SELECT *
FROM "obm"
WHERE "id" =  '5' 
 Execution Time:0.00040483474731445

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00037312507629395

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0005488395690918

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.00034379959106445

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.00035500526428223

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.00073504447937012

select * from reprovacao where plano='22'; 
 Execution Time:0.00057482719421387

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00054597854614258

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00038719177246094

select * from planejamento where plano='22' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00089287757873535

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.034943819046021

select origemreceita, sum(valor) from planejamento where plano='22' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00095510482788086

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='22' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0013642311096191

select sum(valor) as total from planejamento where plano='22' and tipo=1 
 Execution Time:0.00064802169799805

select sum(valor) as total from planejamento where plano='22' and tipo=2 
 Execution Time:0.00064396858215332

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0012211799621582

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0010859966278076

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00089287757873535

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0010819435119629

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00091099739074707

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0012979507446289

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00054812431335449

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00040102005004883

SELECT *
FROM "obm"
WHERE "id" =  '5' 
 Execution Time:0.00090599060058594

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00088691711425781

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00066900253295898

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.00053596496582031

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.00039315223693848

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.00038504600524902

select * from reprovacao where plano='22'; 
 Execution Time:0.0002748966217041

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00038719177246094

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0009009838104248

select * from planejamento where plano='22' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0010058879852295

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00089001655578613

select origemreceita, sum(valor) from planejamento where plano='22' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00088000297546387

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='22' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0010018348693848

select sum(valor) as total from planejamento where plano='22' and tipo=1 
 Execution Time:0.00033783912658691

select sum(valor) as total from planejamento where plano='22' and tipo=2 
 Execution Time:0.00030207633972168

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00075507164001465

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0006718635559082

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00081920623779297

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00049114227294922

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00058197975158691

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0016529560089111

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00033783912658691

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00083494186401367

SELECT *
FROM "obm"
WHERE "id" =  '5' 
 Execution Time:0.00063896179199219

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00030207633972168

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0022540092468262

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.0014610290527344

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.00065493583679199

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.00034499168395996

select * from reprovacao where plano='22'; 
 Execution Time:0.00059413909912109

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00066900253295898

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00051116943359375

select * from planejamento where plano='22' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00065398216247559

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00096487998962402

select origemreceita, sum(valor) from planejamento where plano='22' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.031556844711304

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='22' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00083088874816895

select sum(valor) as total from planejamento where plano='22' and tipo=1 
 Execution Time:0.00036811828613281

select sum(valor) as total from planejamento where plano='22' and tipo=2 
 Execution Time:0.0003361701965332

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00046896934509277

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00032496452331543

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00066709518432617

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00075912475585938

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00036811828613281

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00088715553283691

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00059294700622559

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00053215026855469

SELECT *
FROM "obm"
WHERE "id" =  '5' 
 Execution Time:0.00045895576477051

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00028014183044434

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00053310394287109

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00041103363037109

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0011999607086182

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00081205368041992

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00056886672973633

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00070881843566895

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00052595138549805

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00036096572875977

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00035905838012695

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.001209020614624

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00094509124755859

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00044918060302734

SELECT *
FROM "obm"
WHERE "id" =  '5' 
 Execution Time:0.00035190582275391

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00037598609924316

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0003349781036377

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00051784515380859

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00055909156799316

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00044393539428711

select * from acesso where usuario='6' and obm='5' 
 Execution Time:0.00040102005004883

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00088405609130859

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.028180837631226

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0018348693847656

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0012400150299072

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00092482566833496

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0050699710845947

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00054597854614258

select * from acesso where usuario='6' and obm='3' 
 Execution Time:0.0018470287322998

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00066089630126953

SELECT *
FROM "obm"
WHERE "id" =  '5' 
 Execution Time:0.0003359317779541

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00043892860412598

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00093388557434082

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0010120868682861

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00046896934509277

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00036883354187012

select * from acesso where usuario='6' and obm='5' 
 Execution Time:0.0012178421020508

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00051116943359375

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00037288665771484

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00051712989807129

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00039911270141602

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00052905082702637

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00051689147949219

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00038814544677734

select * from acesso where usuario='6' and obm='3' 
 Execution Time:0.00045394897460938

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00060606002807617

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00031685829162598

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00033307075500488

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00038385391235352

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00075316429138184

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00068283081054688

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00041818618774414

select * from acesso where usuario='2' and obm='3' 
 Execution Time:0.00046110153198242

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00090289115905762

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00066685676574707

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00077509880065918

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00049805641174316

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00049090385437012

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00046706199645996

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00042510032653809

select * from acesso where usuario='6' and obm='3' 
 Execution Time:0.00039887428283691

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00066518783569336

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00058817863464355

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00054287910461426

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00048995018005371

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00056791305541992

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00086307525634766

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00067019462585449

SELECT *
FROM "obm" 
 Execution Time:0.00058293342590332

select * from plano where status=4 order by datainicio DESC, datafim DESC 
 Execution Time:0.0054969787597656

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00046801567077637

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00039196014404297

SELECT *
FROM "plano"
WHERE "id" =  '20' 
 Execution Time:0.00044894218444824

SELECT *
FROM "plano"
WHERE "id" =  '20' 
 Execution Time:0.00032687187194824

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00082588195800781

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0010490417480469

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00047588348388672

select * from planejamento where plano='20' order by tipo ASC, dataprevista ASC 
 Execution Time:0.037199020385742

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0007481575012207

select origemreceita, sum(valor) from planejamento where plano='20' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.0027768611907959

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='20' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00092101097106934

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='20' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00069499015808105

select sum(valor) as total from planejamento where plano='20' and tipo=1 
 Execution Time:0.00044488906860352

select sum(valor) as total from planejamento where plano='20' and tipo=2 
 Execution Time:0.00047683715820312

SELECT *
FROM "plano"
WHERE "id" =  '19' 
 Execution Time:0.00065279006958008

SELECT *
FROM "plano"
WHERE "id" =  '19' 
 Execution Time:0.00032591819763184

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00061297416687012

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.001230001449585

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00076603889465332

select * from planejamento where plano='19' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0011358261108398

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00087904930114746

select origemreceita, sum(valor) from planejamento where plano='19' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.0010011196136475

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='19' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0010859966278076

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='19' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00078010559082031

select sum(valor) as total from planejamento where plano='19' and tipo=1 
 Execution Time:0.00041508674621582

select sum(valor) as total from planejamento where plano='19' and tipo=2 
 Execution Time:0.00042891502380371

SELECT *
FROM "plano"
WHERE "id" =  '15' 
 Execution Time:0.00082206726074219

SELECT *
FROM "plano"
WHERE "id" =  '15' 
 Execution Time:0.00067019462585449

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00052714347839355

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00061488151550293

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00080680847167969

select * from planejamento where plano='15' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0010159015655518

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00054216384887695

select origemreceita, sum(valor) from planejamento where plano='15' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00052499771118164

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='15' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0018961429595947

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='15' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.0010771751403809

select sum(valor) as total from planejamento where plano='15' and tipo=1 
 Execution Time:0.00056695938110352

select sum(valor) as total from planejamento where plano='15' and tipo=2 
 Execution Time:0.00051712989807129

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.072862863540649

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.0008091926574707

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.0021388530731201

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.00061202049255371

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.00049090385437012

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00059890747070312

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00046801567077637

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004880428314209

SELECT *
FROM "obm" 
 Execution Time:0.00038790702819824

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0010790824890137

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00046515464782715

SELECT *
FROM "obm" 
 Execution Time:0.0002751350402832

SELECT *
FROM "obm"
WHERE "id" =  '10' 
 Execution Time:0.00066018104553223

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0006721019744873

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00043416023254395

SELECT *
FROM "obm" 
 Execution Time:0.00032901763916016

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.0013101100921631

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.0010910034179688

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00060701370239258

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00081586837768555

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00056600570678711

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00048708915710449

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00064182281494141

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00049686431884766

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00060081481933594

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00047683715820312

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00035309791564941

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0011661052703857

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00063800811767578

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00042605400085449

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00043582916259766

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00034999847412109

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00049495697021484

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00051307678222656

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00043296813964844

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00032591819763184

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00031495094299316

select * from acesso where usuario='6' and obm='3' 
 Execution Time:0.00069093704223633

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00088715553283691

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0005648136138916

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00064182281494141

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00066208839416504

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00065302848815918

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00046300888061523

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00047111511230469

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0010049343109131

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00063800811767578

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040006637573242

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00087809562683105

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00060701370239258

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00038290023803711

SELECT *
FROM "obm"
WHERE "id" =  '5' 
 Execution Time:0.00034189224243164

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00023317337036133

