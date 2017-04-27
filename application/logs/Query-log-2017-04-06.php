SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.11564588546753

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.055543899536133

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2015-01-01' and data_final<='2016-01-01' group by nome order by nome asc 
 Execution Time:0.31482696533203

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0008847713470459

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00075602531433105

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.014092922210693

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.24646496772766

select og.nome as nome, sum(p.valor) as valor from planejamento as p, origemreceita as og where origemreceita in (select id from origemreceita where status=3) and dataprevista between '2017-01-01' and '2017-12-31' and p.origemreceita=og.id and p.tipo=1 group by og.nome order by og.nome asc 
 Execution Time:0.0013461112976074

select pj.id as planejamento, pj.tipo, pj.plano, p.status, p.obm as obm_id, o.nome as obm, pj.origemreceita as og_id, og.nome as og_nome, pj.detalhamento, pj.valor, pj.dataprevista from planejamento as pj, origemreceita as og, especificacao as ep, plano as p, obm as o where pj.origemreceita = og.id and pj.especificacao = ep.id and pj.tipo=1 and pj.plano=p.id and p.obm=o.id and pj.dataprevista between '2017-01-01' and '2017-12-31' and og.status=3 order by dataprevista desc 
 Execution Time:0.056018829345703

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00054097175598145

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00045013427734375

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.002173900604248

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.0014050006866455

select og.nome as nome, sum(p.valor) as valor from planejamento as p, origemreceita as og where origemreceita in (select id from origemreceita where status=3) and dataprevista between '2017-01-01' and '2017-12-31' and p.origemreceita=og.id and p.tipo=1 group by og.nome order by og.nome asc 
 Execution Time:0.0011849403381348

select pj.id as planejamento, pj.tipo, pj.plano, p.status, p.obm as obm_id, o.nome as obm, pj.origemreceita as og_id, og.nome as og_nome, pj.detalhamento, pj.valor, pj.dataprevista from planejamento as pj, origemreceita as og, especificacao as ep, plano as p, obm as o where pj.origemreceita = og.id and pj.especificacao = ep.id and pj.tipo=1 and pj.plano=p.id and p.obm=o.id and pj.dataprevista between '2017-01-01' and '2017-12-31' and og.status=3 order by o.nome asc, dataprevista desc 
 Execution Time:0.0032129287719727

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00042104721069336

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003659725189209

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.020227909088135

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0008080005645752

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.0016088485717773

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.020411014556885

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00070309638977051

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0016269683837891

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0018408298492432

select origemreceita, sum(valor) from planejamento where plano='36' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00092697143554688

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='36' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.040642976760864

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='36' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.0011680126190186

select sum(valor) as total from planejamento where plano='36' and tipo=1 
 Execution Time:0.00035500526428223

select sum(valor) as total from planejamento where plano='36' and tipo=2 
 Execution Time:0.00034904479980469

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0014710426330566

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00037598609924316

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00092291831970215

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00088381767272949

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00077390670776367

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0012860298156738

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0012288093566895

select origemreceita, sum(valor) from planejamento where plano='36' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00066900253295898

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='36' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.001309871673584

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='36' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00080204010009766

select sum(valor) as total from planejamento where plano='36' and tipo=1 
 Execution Time:0.00035309791564941

select sum(valor) as total from planejamento where plano='36' and tipo=2 
 Execution Time:0.00031685829162598

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00060701370239258

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00040912628173828

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00066804885864258

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0010941028594971

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00051784515380859

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0012140274047852

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0014569759368896

select origemreceita, sum(valor) from planejamento where plano='36' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00074911117553711

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='36' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0014810562133789

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='36' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00081300735473633

select sum(valor) as total from planejamento where plano='36' and tipo=1 
 Execution Time:0.00039291381835938

select sum(valor) as total from planejamento where plano='36' and tipo=2 
 Execution Time:0.00027894973754883

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00044393539428711

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0002589225769043

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00027990341186523

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00065398216247559

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028681755065918

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00066304206848145

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0007472038269043

select origemreceita, sum(valor) from planejamento where plano='36' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00035810470581055

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='36' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00089192390441895

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='36' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00056600570678711

select sum(valor) as total from planejamento where plano='36' and tipo=1 
 Execution Time:0.00026106834411621

select sum(valor) as total from planejamento where plano='36' and tipo=2 
 Execution Time:0.00024700164794922

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00054287910461426

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0002739429473877

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00024604797363281

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00059080123901367

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00038599967956543

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00080704689025879

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00075888633728027

select origemreceita, sum(valor) from planejamento where plano='36' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00032401084899902

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='36' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0011970996856689

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='36' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00063896179199219

select sum(valor) as total from planejamento where plano='36' and tipo=1 
 Execution Time:0.0003049373626709

select sum(valor) as total from planejamento where plano='36' and tipo=2 
 Execution Time:0.00025582313537598

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00041317939758301

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00026917457580566

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00024294853210449

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00049614906311035

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00036907196044922

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00039911270141602

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00031089782714844

select origemreceita, sum(valor) from planejamento where plano='36' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00031900405883789

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='36' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00071191787719727

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='36' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00056004524230957

select sum(valor) as total from planejamento where plano='36' and tipo=1 
 Execution Time:0.00028300285339355

select sum(valor) as total from planejamento where plano='36' and tipo=2 
 Execution Time:0.00025200843811035

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00038480758666992

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0002901554107666

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00024795532226562

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00041985511779785

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028300285339355

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0003359317779541

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00026988983154297

select origemreceita, sum(valor) from planejamento where plano='36' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00030517578125

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='36' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00078606605529785

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='36' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00049400329589844

select sum(valor) as total from planejamento where plano='36' and tipo=1 
 Execution Time:0.00024700164794922

select sum(valor) as total from planejamento where plano='36' and tipo=2 
 Execution Time:0.0002291202545166

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0016319751739502

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0005338191986084

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.012553215026855

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00089097023010254

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0010948181152344

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0019700527191162

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0011870861053467

select origemreceita, sum(valor) from planejamento where plano='36' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00072908401489258

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='36' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0050919055938721

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='36' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00078988075256348

select sum(valor) as total from planejamento where plano='36' and tipo=1 
 Execution Time:0.00034379959106445

select sum(valor) as total from planejamento where plano='36' and tipo=2 
 Execution Time:0.00028181076049805

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0005338191986084

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0003349781036377

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00033879280090332

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00050091743469238

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00036120414733887

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00043416023254395

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00034904479980469

select origemreceita, sum(valor) from planejamento where plano='36' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00042414665222168

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='36' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00075793266296387

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='36' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00059604644775391

select sum(valor) as total from planejamento where plano='36' and tipo=1 
 Execution Time:0.00033092498779297

select sum(valor) as total from planejamento where plano='36' and tipo=2 
 Execution Time:0.00023388862609863

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00053715705871582

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0002589225769043

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.0002439022064209

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00061297416687012

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028204917907715

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.000579833984375

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00086688995361328

select origemreceita, sum(valor) from planejamento where plano='36' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00035190582275391

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='36' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00078678131103516

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='36' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00056004524230957

select sum(valor) as total from planejamento where plano='36' and tipo=1 
 Execution Time:0.0002601146697998

select sum(valor) as total from planejamento where plano='36' and tipo=2 
 Execution Time:0.00023102760314941

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00080394744873047

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00066184997558594

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00061297416687012

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00136399269104

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00074505805969238

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00089907646179199

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0004270076751709

select origemreceita, sum(valor) from planejamento where plano='36' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00051593780517578

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='36' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.001533031463623

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='36' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.0010809898376465

select sum(valor) as total from planejamento where plano='36' and tipo=1 
 Execution Time:0.0005190372467041

select sum(valor) as total from planejamento where plano='36' and tipo=2 
 Execution Time:0.00046014785766602

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00043392181396484

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00029087066650391

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00025486946105957

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00055503845214844

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00030303001403809

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00034499168395996

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00035595893859863

select origemreceita, sum(valor) from planejamento where plano='36' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00034785270690918

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='36' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00082516670227051

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='36' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00050091743469238

select sum(valor) as total from planejamento where plano='36' and tipo=1 
 Execution Time:0.00026988983154297

select sum(valor) as total from planejamento where plano='36' and tipo=2 
 Execution Time:0.00030088424682617

select og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by nome order by nome asc 
 Execution Time:0.0006711483001709

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2017-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2017-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.00094103813171387

select og.nome as nome, sum(p.valor) as valor from planejamento as p, origemreceita as og where origemreceita in (select id from origemreceita where status=3) and dataprevista between '2017-01-01' and '2017-12-31' and p.origemreceita=og.id and p.tipo=1 group by og.nome order by og.nome asc 
 Execution Time:0.0012609958648682

select pj.id as planejamento, pj.tipo, pj.plano, p.status, p.obm as obm_id, o.nome as obm, pj.origemreceita as og_id, og.nome as og_nome, pj.detalhamento, pj.valor, pj.dataprevista from planejamento as pj, origemreceita as og, especificacao as ep, plano as p, obm as o where pj.origemreceita = og.id and pj.especificacao = ep.id and pj.tipo=1 and pj.plano=p.id and p.obm=o.id and pj.dataprevista between '2017-01-01' and '2017-12-31' and og.status=3 order by o.nome asc, dataprevista desc 
 Execution Time:0.001194953918457

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00035619735717773

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00036096572875977

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00039887428283691

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00027704238891602

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00024819374084473

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00050592422485352

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00032186508178711

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00055480003356934

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00085091590881348

select origemreceita, sum(valor) from planejamento where plano='36' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.0003359317779541

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='36' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00092577934265137

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='36' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00054597854614258

select sum(valor) as total from planejamento where plano='36' and tipo=1 
 Execution Time:0.00026893615722656

select sum(valor) as total from planejamento where plano='36' and tipo=2 
 Execution Time:0.00024890899658203

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00044107437133789

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00030612945556641

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00029110908508301

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00046610832214355

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00034499168395996

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00047588348388672

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0003361701965332

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00036311149597168

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00067806243896484

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='31' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.0010170936584473

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00044798851013184

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00035500526428223

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.00059103965759277

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.00033783912658691

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00028514862060547

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00071287155151367

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0010819435119629

select * from planejamento where plano='35' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00058889389038086

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00044989585876465

select origemreceita, sum(valor) from planejamento where plano='35' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00046706199645996

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='35' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0010371208190918

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='35' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00083708763122559

select sum(valor) as total from planejamento where plano='35' and tipo=1 
 Execution Time:0.00041103363037109

select sum(valor) as total from planejamento where plano='35' and tipo=2 
 Execution Time:0.00037384033203125

select * from plano where status=4 order by datainicio DESC, datafim DESC 
 Execution Time:0.00084710121154785

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00052380561828613

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00034713745117188

select * from plano where status=4 order by datainicio DESC, datafim DESC 
 Execution Time:0.00076794624328613

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0008389949798584

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00061202049255371

select * from plano where status=4 and obm='5' order by datainicio DESC, datafim DESC 
 Execution Time:0.0005638599395752

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040292739868164

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00040197372436523

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.001323938369751

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.00038695335388184

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.0013201236724854

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0015261173248291

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00093793869018555

select * from planejamento where plano='35' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0017728805541992

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0017259120941162

select origemreceita, sum(valor) from planejamento where plano='35' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00082802772521973

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='35' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0019919872283936

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='35' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.0011360645294189

select sum(valor) as total from planejamento where plano='35' and tipo=1 
 Execution Time:0.0005488395690918

select sum(valor) as total from planejamento where plano='35' and tipo=2 
 Execution Time:0.0004730224609375

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.00037693977355957

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.00025296211242676

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00023794174194336

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00042986869812012

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00030303001403809

select * from planejamento where plano='22' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0003361701965332

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0002751350402832

select origemreceita, sum(valor) from planejamento where plano='22' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00029897689819336

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='22' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00062990188598633

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='22' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00077700614929199

select sum(valor) as total from planejamento where plano='22' and tipo=1 
 Execution Time:0.00029516220092773

select sum(valor) as total from planejamento where plano='22' and tipo=2 
 Execution Time:0.00024604797363281

SELECT *
FROM "plano"
WHERE "id" =  '29' 
 Execution Time:0.00043702125549316

SELECT *
FROM "plano"
WHERE "id" =  '29' 
 Execution Time:0.00024986267089844

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00023698806762695

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00042390823364258

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029087066650391

select * from planejamento where plano='29' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00036191940307617

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00027203559875488

select origemreceita, sum(valor) from planejamento where plano='29' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00038409233093262

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='29' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0008549690246582

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='29' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.0006709098815918

select sum(valor) as total from planejamento where plano='29' and tipo=1 
 Execution Time:0.00036501884460449

select sum(valor) as total from planejamento where plano='29' and tipo=2 
 Execution Time:0.00025486946105957

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.00041699409484863

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.00025200843811035

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00024294853210449

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00042986869812012

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029110908508301

select * from planejamento where plano='35' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00035905838012695

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00027298927307129

select origemreceita, sum(valor) from planejamento where plano='35' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00031399726867676

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='35' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00066614151000977

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='35' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00067901611328125

select sum(valor) as total from planejamento where plano='35' and tipo=1 
 Execution Time:0.00029516220092773

select sum(valor) as total from planejamento where plano='35' and tipo=2 
 Execution Time:0.00024199485778809

select * from plano where status=4 order by datainicio DESC, datafim DESC 
 Execution Time:0.00088596343994141

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004889965057373

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0005650520324707

select * from plano where status=4 and obm='10' order by datainicio DESC, datafim DESC 
 Execution Time:0.00072121620178223

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00042486190795898

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00041890144348145

select * from plano where status=4 and obm='8' order by datainicio DESC, datafim DESC 
 Execution Time:0.00059914588928223

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00042390823364258

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00039887428283691

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00043201446533203

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00030803680419922

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00033211708068848

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00048995018005371

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00036907196044922

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00058197975158691

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00039196014404297

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00040102005004883

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0013039112091064

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='31' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00081896781921387

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00039291381835938

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00034713745117188

select * from plano where status=4 order by datainicio DESC, datafim DESC 
 Execution Time:0.00077199935913086

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00053095817565918

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00035500526428223

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.00050783157348633

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.00029897689819336

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00034904479980469

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00048279762268066

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00032210350036621

select * from planejamento where plano='22' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00042986869812012

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00035500526428223

select origemreceita, sum(valor) from planejamento where plano='22' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00037503242492676

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='22' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00069618225097656

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='22' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00081586837768555

select sum(valor) as total from planejamento where plano='22' and tipo=1 
 Execution Time:0.00032806396484375

select sum(valor) as total from planejamento where plano='22' and tipo=2 
 Execution Time:0.00023412704467773

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.00048708915710449

SELECT *
FROM "plano"
WHERE "id" =  '35' 
 Execution Time:0.00028419494628906

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00024604797363281

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0004270076751709

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029301643371582

select * from planejamento where plano='35' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00037479400634766

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00031399726867676

select origemreceita, sum(valor) from planejamento where plano='35' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00032496452331543

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='35' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.001021146774292

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='35' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00053691864013672

select sum(valor) as total from planejamento where plano='35' and tipo=1 
 Execution Time:0.00027990341186523

select sum(valor) as total from planejamento where plano='35' and tipo=2 
 Execution Time:0.00024223327636719

