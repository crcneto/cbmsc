SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.041014909744263

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00071096420288086

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00055289268493652

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003509521484375

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00092196464538574

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00056314468383789

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00036001205444336

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00030088424682617

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00032401084899902

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00029706954956055

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00028800964355469

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00030279159545898

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00029397010803223

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00028586387634277

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0002751350402832

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00026798248291016

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00031590461730957

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (1,10,3,9,4,8,5,7) and pj.dataprevista between '2016-02-07' and '2016-12-31' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.42171001434326

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (1,10,3,9,4,8,5,7) and pj.dataprevista between '2016-02-07' and '2016-12-31' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0015430450439453

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00039911270141602

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00035500526428223

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0017940998077393

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00057888031005859

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00028610229492188

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00022482872009277

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00021505355834961

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00020813941955566

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00022506713867188

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00021004676818848

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00020503997802734

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00020909309387207

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00022006034851074

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00020885467529297

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00020003318786621

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (3,4,8,5,7) and pj.dataprevista between '2016-02-07' and '2016-12-31' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0024800300598145

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (3,4,8,5,7) and pj.dataprevista between '2016-02-07' and '2016-12-31' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0019190311431885

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00058102607727051

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00035715103149414

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0027511119842529

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0009300708770752

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00048398971557617

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00040888786315918

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00040316581726074

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.0003809928894043

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00038290023803711

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00039505958557129

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00039982795715332

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00034499168395996

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00039100646972656

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.0003669261932373

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00037407875061035

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (4) and pj.dataprevista between '2016-02-07' and '2016-12-31' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0028929710388184

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (4) and pj.dataprevista between '2016-02-07' and '2016-12-31' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0012409687042236

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00078201293945312

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00052785873413086

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.0011048316955566

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.0007469654083252

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.14444899559021

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00067996978759766

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.02248477935791

SELECT *
FROM "obm" 
 Execution Time:0.00042915344238281

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00099015235900879

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040602684020996

SELECT *
FROM "obm" 
 Execution Time:0.00032591819763184

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00040793418884277

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00067281723022461

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00061488151550293

SELECT *
FROM "obm" 
 Execution Time:0.00049400329589844

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0010910034179688

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00095605850219727

SELECT *
FROM "obm" 
 Execution Time:0.00031304359436035

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0059909820556641

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00052285194396973

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.065498113632202

SELECT *
FROM "usuario" 
 Execution Time:0.00052690505981445

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0014181137084961

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0011749267578125

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00068902969360352

SELECT *
FROM "usuario" 
 Execution Time:0.00041604042053223

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0026590824127197

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0011789798736572

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00071811676025391

SELECT *
FROM "usuario" 
 Execution Time:0.00061392784118652

SELECT *
FROM "usuario"
WHERE "id" =  '7' 
 Execution Time:0.00031900405883789

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00061202049255371

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003960132598877

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00065803527832031

SELECT *
FROM "usuario" 
 Execution Time:0.00030899047851562

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00048279762268066

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.0012390613555908

select * from obm where id in (1,7,8,10,3,9,4,5) 
 Execution Time:0.00031185150146484

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00045609474182129

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00078201293945312

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00031518936157227

select * from modulo where id in (20,18,17,19,22,21,15,7,16) 
 Execution Time:0.014724016189575

SELECT *
FROM "usuario"
WHERE "id" =  '7' 
 Execution Time:0.00039792060852051

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00033712387084961

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00059103965759277

select * from obm where id in (1,7,8,10,3,9,4,5) 
 Execution Time:0.00038790702819824

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00029397010803223

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00028204917907715

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.0002892017364502

select * from modulo where id in (20,18,17,19,22,21,15,7,16) 
 Execution Time:0.00028800964355469

SELECT *
FROM "usuario"
WHERE "id" =  '7' 
 Execution Time:0.0006709098815918

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00027585029602051

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029897689819336

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.001201868057251

select * from obm where id in (1,7,8,10,3,9,4,5) 
 Execution Time:0.00029611587524414

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00045609474182129

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0006110668182373

select * from acesso where usuario='7' and obm='3' 
 Execution Time:0.00029706954956055

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00037884712219238

select * from modulo where id in (20,18,17,19,22,21,15,7,16) 
 Execution Time:0.0003199577331543

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041484832763672

select a.obm from acesso as a, modulo as m where usuario='6' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00045204162597656

select * from obm where id in (8) 
 Execution Time:0.00024700164794922

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00050091743469238

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00059700012207031

select modulo from acesso where usuario='6' and nivel>=5 group by modulo 
 Execution Time:0.00051498413085938

select * from modulo where id in (17) 
 Execution Time:0.00024104118347168

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00062203407287598

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00054597854614258

select a.obm from acesso as a, modulo as m where usuario='6' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00061893463134766

select * from obm where id in (8) 
 Execution Time:0.00032901763916016

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00044608116149902

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00037384033203125

select modulo from acesso where usuario='6' and nivel>=5 group by modulo 
 Execution Time:0.00036907196044922

select * from modulo where id in (17) 
 Execution Time:0.00028896331787109

SELECT *
FROM "usuario"
WHERE "id" =  '7' 
 Execution Time:0.0004119873046875

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00033307075500488

select a.obm from acesso as a, modulo as m where usuario='6' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00041794776916504

select * from obm where id in (8) 
 Execution Time:0.00032401084899902

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00041508674621582

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00029206275939941

select modulo from acesso where usuario='6' and nivel>=5 group by modulo 
 Execution Time:0.0002739429473877

select * from modulo where id in (17) 
 Execution Time:0.00024104118347168

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.0003960132598877

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003511905670166

select a.obm from acesso as a, modulo as m where usuario='6' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00040197372436523

select * from obm where id in (8) 
 Execution Time:0.00022006034851074

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00027608871459961

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00053501129150391

select modulo from acesso where usuario='6' and nivel>=5 group by modulo 
 Execution Time:0.00071191787719727

select * from modulo where id in (17) 
 Execution Time:0.00054693222045898

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00045609474182129

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00029683113098145

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00033688545227051

select a.obm from acesso as a, modulo as m where usuario='6' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00043201446533203

select * from obm where id in (8) 
 Execution Time:0.00024008750915527

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00028586387634277

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00030803680419922

select * from acesso where usuario='6' and obm='8' 
 Execution Time:0.00028014183044434

select modulo from acesso where usuario='6' and nivel>=5 group by modulo 
 Execution Time:0.00027012825012207

select * from modulo where id in (17) 
 Execution Time:0.00022506713867188

SELECT *
FROM "usuario"
WHERE "id" =  '7' 
 Execution Time:0.0013890266418457

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00055313110351562

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00097084045410156

select a.obm from acesso as a, modulo as m where usuario='6' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.0012760162353516

select * from obm where id in (8) 
 Execution Time:0.00033712387084961

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00052404403686523

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00083684921264648

select * from acesso where usuario='7' and obm='8' 
 Execution Time:0.00035190582275391

select modulo from acesso where usuario='6' and nivel>=5 group by modulo 
 Execution Time:0.00027608871459961

select * from modulo where id in (17) 
 Execution Time:0.00023102760314941

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00057792663574219

select a.obm from acesso as a, modulo as m where usuario='6' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00063800811767578

select * from obm where id in (8) 
 Execution Time:0.00046586990356445

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00054001808166504

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00052285194396973

select modulo from acesso where usuario='6' and nivel>=5 group by modulo 
 Execution Time:0.00037288665771484

select * from modulo where id in (17) 
 Execution Time:0.00030279159545898

SELECT *
FROM "usuario"
WHERE "id" =  '7' 
 Execution Time:0.00038814544677734

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00033187866210938

select a.obm from acesso as a, modulo as m where usuario='6' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.0004420280456543

select * from obm where id in (8) 
 Execution Time:0.00023484230041504

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00028896331787109

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00029110908508301

select modulo from acesso where usuario='6' and nivel>=5 group by modulo 
 Execution Time:0.00033187866210938

select * from modulo where id in (17) 
 Execution Time:0.00023102760314941

SELECT *
FROM "usuario"
WHERE "id" =  '7' 
 Execution Time:0.0003819465637207

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00030684471130371

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004580020904541

select a.obm from acesso as a, modulo as m where usuario='6' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00055980682373047

select * from obm where id in (8) 
 Execution Time:0.00028896331787109

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00037503242492676

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00040698051452637

select * from acesso where usuario='7' and obm='8' 
 Execution Time:0.00032997131347656

select modulo from acesso where usuario='6' and nivel>=5 group by modulo 
 Execution Time:0.00036287307739258

select * from modulo where id in (17) 
 Execution Time:0.00030994415283203

SELECT *
FROM "setor"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.035556077957153

SELECT *
FROM "setor"
ORDER BY "nome" 
 Execution Time:0.00031089782714844

SELECT *
FROM "setor"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00065279006958008

SELECT *
FROM "subsetor"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.09224796295166

SELECT *
FROM "subsetor" 
 Execution Time:0.00029587745666504

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00045514106750488

SELECT *
FROM "postograd"
ORDER BY "nome" 
 Execution Time:0.00028181076049805

SELECT *
FROM "modulo"
ORDER BY "nome" ASC 
 Execution Time:0.00040102005004883

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.020169019699097

SELECT *
FROM "origemreceita" 
 Execution Time:0.00036001205444336

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0015079975128174

SELECT *
FROM "categoriaeconomica"
ORDER BY "id" 
 Execution Time:0.00074887275695801

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0014340877532959

SELECT *
FROM "naturezadespesa"
ORDER BY "id" 
 Execution Time:0.00067496299743652

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00090193748474121

SELECT *
FROM "aplicacao"
ORDER BY "nome" 
 Execution Time:0.00058889389038086

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00070905685424805

SELECT *
FROM "objeto"
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00073814392089844

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00044989585876465

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00057697296142578

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00049996376037598

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00059199333190918

SELECT *
FROM "especificacao"
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00066399574279785

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.015931129455566

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00089287757873535

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00048303604125977

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00050687789916992

SELECT *
FROM "especificacao"
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00029802322387695

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00037908554077148

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00028204917907715

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00025606155395508

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0010290145874023

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00039291381835938

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00055098533630371

SELECT * FROM plano WHERE status=2 or status=1 and obm in (1,8,7,10,3,9,4,5) ORDER BY datainicio DESC 
 Execution Time:0.00076389312744141

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00029206275939941

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00046205520629883

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00045204162597656

SELECT *
FROM "obm"
WHERE "id" =  '4' 
 Execution Time:0.00041794776916504

SELECT *
FROM "plano"
WHERE "id" =  '30' 
 Execution Time:0.00069785118103027

SELECT *
FROM "plano"
WHERE "id" =  '30' 
 Execution Time:0.00032901763916016

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00048494338989258

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00046491622924805

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00035214424133301

select * from planejamento where plano='30' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00084280967712402

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00044608116149902

select origemreceita, sum(valor) from planejamento where plano='30' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.13452005386353

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='30' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0013480186462402

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='30' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00077509880065918

select sum(valor) as total from planejamento where plano='30' and tipo=1 
 Execution Time:0.00038599967956543

select sum(valor) as total from planejamento where plano='30' and tipo=2 
 Execution Time:0.00034618377685547

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0010330677032471

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00081110000610352

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0014059543609619

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00071597099304199

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004270076751709

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00056695938110352

SELECT * FROM plano WHERE status=2 or status=1 and obm in (1,8,7,10,3,9,4,5) ORDER BY datainicio DESC 
 Execution Time:0.00080180168151855

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00032687187194824

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0003209114074707

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00031495094299316

SELECT *
FROM "obm"
WHERE "id" =  '4' 
 Execution Time:0.00031280517578125

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00066995620727539

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00032615661621094

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00095009803771973

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00050497055053711

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00036096572875977

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00032711029052734

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00030016899108887

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00040292739868164

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00027012825012207

SELECT *
FROM "obm"
WHERE "id" =  11 
 Execution Time:0.00023198127746582

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00021505355834961

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.0002129077911377

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00021886825561523

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00022697448730469

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00070405006408691

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00026702880859375

SELECT *
FROM "obm"
WHERE "id" =  '4' 
 Execution Time:0.00032401084899902

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00039505958557129

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (11) and pj.dataprevista between '2017-01-01' and '2018-01-01' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0030670166015625

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (11) and pj.dataprevista between '2017-01-01' and '2018-01-01' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0015509128570557

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00045585632324219

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00047397613525391

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00042510032653809

select * from plano where status=4 order by datainicio DESC, datafim DESC 
 Execution Time:0.0013570785522461

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00055789947509766

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.001054048538208

SELECT *
FROM "plano"
WHERE "id" =  '16' 
 Execution Time:0.00039386749267578

SELECT *
FROM "plano"
WHERE "id" =  '16' 
 Execution Time:0.00025081634521484

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00046586990356445

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00031709671020508

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00033092498779297

select * from planejamento where plano='16' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00092887878417969

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00030303001403809

select origemreceita, sum(valor) from planejamento where plano='16' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00072383880615234

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='16' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0011961460113525

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='16' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00065302848815918

select sum(valor) as total from planejamento where plano='16' and tipo=1 
 Execution Time:0.00047802925109863

select sum(valor) as total from planejamento where plano='16' and tipo=2 
 Execution Time:0.00040316581726074

select * from plano where status=4 order by datainicio DESC, datafim DESC 
 Execution Time:0.027384996414185

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00034594535827637

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00066113471984863

SELECT *
FROM "plano"
WHERE "id" =  '14' 
 Execution Time:0.00041699409484863

SELECT *
FROM "plano"
WHERE "id" =  '14' 
 Execution Time:0.00025391578674316

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00029301643371582

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00032806396484375

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028800964355469

select * from planejamento where plano='14' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00046181678771973

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00029087066650391

select origemreceita, sum(valor) from planejamento where plano='14' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00044798851013184

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='14' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.017142057418823

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='14' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00060486793518066

select sum(valor) as total from planejamento where plano='14' and tipo=1 
 Execution Time:0.00026106834411621

select sum(valor) as total from planejamento where plano='14' and tipo=2 
 Execution Time:0.00026607513427734

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00062680244445801

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00056099891662598

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00030088424682617

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00068807601928711

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00069808959960938

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0029888153076172

SELECT * FROM plano WHERE status=2 or status=1 and obm in (1,8,7,10,3,9,4,5) ORDER BY datainicio DESC 
 Execution Time:0.00069522857666016

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00044894218444824

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00061297416687012

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.0006101131439209

SELECT *
FROM "obm"
WHERE "id" =  '4' 
 Execution Time:0.00057792663574219

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00042390823364258

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00046205520629883

select * from obm where id in (1,7,8,10,3,9,4,5) 
 Execution Time:0.00030994415283203

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00031089782714844

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00030708312988281

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00032806396484375

select * from modulo where id in (20,18,17,19,22,21,15,7,16) 
 Execution Time:0.00049901008605957

SELECT *
FROM "usuario"
WHERE "id" =  '7' 
 Execution Time:0.00042295455932617

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00051188468933105

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00048589706420898

select * from obm where id in (1,7,8,10,3,9,4,5) 
 Execution Time:0.00027203559875488

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00029492378234863

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0002899169921875

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00036907196044922

select * from modulo where id in (20,18,17,19,22,21,15,7,16) 
 Execution Time:0.00030303001403809

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.0004727840423584

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004880428314209

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00069904327392578

select * from obm where id in (1,7,8,10,3,9,4,5) 
 Execution Time:0.0004429817199707

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0014238357543945

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00054478645324707

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00049400329589844

select * from modulo where id in (20,18,17,19,22,21,15,7,16) 
 Execution Time:0.00046610832214355

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.0004270076751709

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00028705596923828

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00032210350036621

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00044107437133789

select * from obm where id in (1,7,8,10,3,9,4,5) 
 Execution Time:0.00028300285339355

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00031805038452148

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00030398368835449

select * from acesso where usuario='6' and obm='8' 
 Execution Time:0.00027585029602051

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00030303001403809

select * from modulo where id in (20,18,17,19,22,21,15,7,16) 
 Execution Time:0.00031709671020508

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00038909912109375

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00041699409484863

select * from obm where id in (1,7,8,10,3,9,4,5) 
 Execution Time:0.00023412704467773

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00029492378234863

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00058698654174805

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00066590309143066

select * from modulo where id in (20,18,17,19,22,21,15,7,16) 
 Execution Time:0.00046586990356445

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00052905082702637

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00085616111755371

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0010199546813965

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00045204162597656

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00033092498779297

select a.obm from acesso as a, modulo as m where usuario='6' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00046896934509277

SELECT * FROM plano WHERE status=2 or status=1 and obm in (8) ORDER BY datainicio DESC 
 Execution Time:0.00034809112548828

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00026106834411621

SELECT *
FROM "obm"
WHERE "id" =  '4' 
 Execution Time:0.00025510787963867

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00054621696472168

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00045609474182129

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00057291984558105

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00063896179199219

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00043916702270508

select a.obm from acesso as a, modulo as m where usuario='6' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00058293342590332

SELECT * FROM plano WHERE status=2 or status=1 and obm in (8) ORDER BY datainicio DESC 
 Execution Time:0.00052213668823242

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.0004580020904541

SELECT *
FROM "obm"
WHERE "id" =  '4' 
 Execution Time:0.00029182434082031

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00046896934509277

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00045204162597656

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00044512748718262

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00045895576477051

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00038695335388184

select a.obm from acesso as a, modulo as m where usuario='6' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0005650520324707

SELECT * FROM plano WHERE status=2 or status=1 and obm in (8) ORDER BY datainicio DESC 
 Execution Time:0.00041890144348145

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00023508071899414

SELECT *
FROM "obm"
WHERE "id" =  '4' 
 Execution Time:0.00019407272338867

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0011720657348633

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00063920021057129

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00084900856018066

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00071001052856445

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00065994262695312

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00066900253295898

SELECT * FROM plano WHERE status=2 or status=1 and obm in (1,8,7,10,3,9,4,5) ORDER BY datainicio DESC 
 Execution Time:0.0009608268737793

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00034403800964355

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00019192695617676

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00016999244689941

SELECT *
FROM "obm"
WHERE "id" =  '4' 
 Execution Time:0.00020885467529297

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00041890144348145

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0003209114074707

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00038886070251465

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00040292739868164

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003960132598877

select a.obm from acesso as a, modulo as m where usuario='6' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00091695785522461

SELECT * FROM plano WHERE status=2 or status=1 and obm in (8) ORDER BY datainicio DESC 
 Execution Time:0.00040698051452637

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00026106834411621

SELECT *
FROM "obm"
WHERE "id" =  '4' 
 Execution Time:0.00023984909057617

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00051999092102051

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0003201961517334

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00028610229492188

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00040793418884277

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0010061264038086

select a.obm from acesso as a, modulo as m where usuario='6' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00049710273742676

SELECT * FROM plano WHERE status=2 or status=1 and obm in (8) ORDER BY datainicio DESC 
 Execution Time:0.00033903121948242

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00025296211242676

SELECT *
FROM "obm"
WHERE "id" =  '4' 
 Execution Time:0.00022411346435547

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00058507919311523

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00047993659973145

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00049495697021484

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00060009956359863

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00051403045654297

select a.obm from acesso as a, modulo as m where usuario='6' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0005958080291748

SELECT * FROM plano WHERE status=2 or status=1 and obm in (8) ORDER BY datainicio DESC 
 Execution Time:0.00052595138549805

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00042414665222168

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00032687187194824

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00026988983154297

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00034308433532715

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028419494628906

select a.obm from acesso as a, modulo as m where usuario='6' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00042104721069336

SELECT * FROM plano WHERE status=2 or status=1 and obm in (8) ORDER BY datainicio DESC 
 Execution Time:0.00028610229492188

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00055217742919922

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00093388557434082

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00045299530029297

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00047898292541504

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040793418884277

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00057506561279297

SELECT * FROM plano WHERE status=2 or status=1 and obm in (1,8,7,10,3,9,4,5) ORDER BY datainicio DESC 
 Execution Time:0.00043892860412598

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00026392936706543

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00022292137145996

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00057315826416016

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00047802925109863

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00033903121948242

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00046992301940918

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003349781036377

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0010628700256348

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,8,7,10,3,9,4,5) ORDER BY datainicio DESC 
 Execution Time:0.0011088848114014

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00038003921508789

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00038409233093262

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.0009160041809082

SELECT *
FROM "obm"
WHERE "id" =  '4' 
 Execution Time:0.00034093856811523

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0020020008087158

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0017228126525879

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00082492828369141

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00061798095703125

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00070095062255859

select a.obm from acesso as a, modulo as m where usuario='6' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0014569759368896

SELECT * FROM plano WHERE status<4 and status>0 and obm in (8) ORDER BY datainicio DESC 
 Execution Time:0.00073504447937012

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00026988983154297

SELECT *
FROM "obm"
WHERE "id" =  '4' 
 Execution Time:0.00023603439331055

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0011470317840576

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0007939338684082

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0013840198516846

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00090885162353516

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041985511779785

select a.obm from acesso as a, modulo as m where usuario='6' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0017011165618896

SELECT * FROM plano WHERE status<4 and status>0 and obm in (8) ORDER BY datainicio DESC 
 Execution Time:0.001986026763916

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00040292739868164

SELECT *
FROM "obm"
WHERE "id" =  '4' 
 Execution Time:0.00030684471130371

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00048613548278809

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00040602684020996

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00034809112548828

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0010299682617188

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00033688545227051

select a.obm from acesso as a, modulo as m where usuario='6' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00041413307189941

SELECT * FROM plano WHERE status<4 and status>0 and obm in (8) ORDER BY datainicio DESC 
 Execution Time:0.00031495094299316

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00024509429931641

SELECT *
FROM "obm"
WHERE "id" =  '4' 
 Execution Time:0.00025391578674316

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00041317939758301

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00031900405883789

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00027298927307129

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00037193298339844

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028896331787109

select a.obm from acesso as a, modulo as m where usuario='6' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00046181678771973

SELECT * FROM plano WHERE status<4 and status>0 and obm in (8) ORDER BY datainicio DESC 
 Execution Time:0.00045299530029297

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00024080276489258

SELECT *
FROM "obm"
WHERE "id" =  '4' 
 Execution Time:0.00025606155395508

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0013508796691895

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00037598609924316

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00025296211242676

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00032901763916016

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00031709671020508

select a.obm from acesso as a, modulo as m where usuario='6' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00044584274291992

SELECT * FROM plano WHERE status<4 and status>0 and obm in (8) ORDER BY datainicio DESC 
 Execution Time:0.0005650520324707

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00025010108947754

SELECT *
FROM "obm"
WHERE "id" =  '4' 
 Execution Time:0.00020003318786621

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00046706199645996

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00035786628723145

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00029397010803223

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00037407875061035

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00066208839416504

select a.obm from acesso as a, modulo as m where usuario='6' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00053095817565918

SELECT * FROM plano WHERE status<4 and status>0 and obm in (8) ORDER BY datainicio DESC 
 Execution Time:0.00046706199645996

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00025010108947754

SELECT *
FROM "obm"
WHERE "id" =  '4' 
 Execution Time:0.00021600723266602

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00063109397888184

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00059008598327637

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00046086311340332

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00059795379638672

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00057721138000488

select a.obm from acesso as a, modulo as m where usuario='6' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00088596343994141

SELECT * FROM plano WHERE status<4 and status>0 and obm in (8) ORDER BY datainicio DESC 
 Execution Time:0.00047802925109863

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00034713745117188

SELECT *
FROM "obm"
WHERE "id" =  '4' 
 Execution Time:0.0003349781036377

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00066995620727539

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0013270378112793

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00040197372436523

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00094509124755859

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00036191940307617

select a.obm from acesso as a, modulo as m where usuario='6' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0011341571807861

SELECT * FROM plano WHERE status<4 and status>0 and obm in (8) ORDER BY datainicio DESC 
 Execution Time:0.0005638599395752

select * from obm where id='4' limit 1 
 Execution Time:0.00036787986755371

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00042486190795898

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00031208992004395

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00025391578674316

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00032305717468262

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00027298927307129

select a.obm from acesso as a, modulo as m where usuario='6' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00052309036254883

SELECT * FROM plano WHERE status<4 and status>0 and obm in (8) ORDER BY datainicio DESC 
 Execution Time:0.00046491622924805

select * from obm where id='4' limit 1 
 Execution Time:0.00027585029602051

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00063991546630859

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.0010640621185303

select * from obm where id in (1,7,8,10,3,9,4,5) 
 Execution Time:0.00032806396484375

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0003669261932373

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00034594535827637

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.0009760856628418

select * from modulo where id in (20,18,17,19,22,21,15,7,16) 
 Execution Time:0.00092482566833496

SELECT *
FROM "usuario"
WHERE "id" =  '7' 
 Execution Time:0.00051403045654297

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00048112869262695

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00065708160400391

select * from obm where id in (1,7,8,10,3,9,4,5) 
 Execution Time:0.00039291381835938

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00045990943908691

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00044703483581543

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00043892860412598

select * from modulo where id in (20,18,17,19,22,21,15,7,16) 
 Execution Time:0.00041699409484863

SELECT *
FROM "usuario"
WHERE "id" =  '7' 
 Execution Time:0.00050997734069824

SELECT *
FROM "obm"
WHERE "id" =  '4' 
 Execution Time:0.00034713745117188

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003659725189209

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00055789947509766

select * from obm where id in (1,7,8,10,3,9,4,5) 
 Execution Time:0.00033879280090332

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00042605400085449

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00043487548828125

select * from acesso where usuario='7' and obm='4' 
 Execution Time:0.00034594535827637

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.0004270076751709

select * from modulo where id in (20,18,17,19,22,21,15,7,16) 
 Execution Time:0.0004270076751709

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00052809715270996

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.0004889965057373

select * from obm where id in (1,7,8,10,3,9,4,5) 
 Execution Time:0.00043916702270508

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00054097175598145

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00057101249694824

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00030708312988281

select * from modulo where id in (20,18,17,19,22,21,15,7,16) 
 Execution Time:0.00029897689819336

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00054478645324707

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00039505958557129

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00039792060852051

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00044488906860352

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00036311149597168

select a.obm from acesso as a, modulo as m where usuario='7' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00052309036254883

SELECT * FROM plano WHERE status<4 and status>0 and obm in (4) ORDER BY datainicio DESC 
 Execution Time:0.00051593780517578

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00049996376037598

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00037908554077148

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00037193298339844

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00048708915710449

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00038290023803711

select a.obm from acesso as a, modulo as m where usuario='7' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00048613548278809

SELECT * FROM plano WHERE status<4 and status>0 and obm in (4) ORDER BY datainicio DESC 
 Execution Time:0.0003211498260498

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00079894065856934

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00051403045654297

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00043606758117676

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00059700012207031

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0012600421905518

select a.obm from acesso as a, modulo as m where usuario='7' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00064897537231445

SELECT * FROM plano WHERE status<4 and status>0 and obm in (4) ORDER BY datainicio DESC 
 Execution Time:0.00040698051452637

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00046491622924805

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00038599967956543

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00029802322387695

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00061893463134766

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00095009803771973

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00053596496582031

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,8,7,10,3,9,4,5) ORDER BY datainicio DESC 
 Execution Time:0.00035381317138672

select * from obm where id='7' limit 1 
 Execution Time:0.00028085708618164

select * from obm where id='4' limit 1 
 Execution Time:0.00026106834411621

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00041007995605469

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00024890899658203

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00020408630371094

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00027298927307129

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00021004676818848

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00046706199645996

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,8,7,10,3,9,4,5) ORDER BY datainicio DESC 
 Execution Time:0.00064706802368164

select * from obm where id='7' limit 1 
 Execution Time:0.00042986869812012

select * from obm where id='3' limit 1 
 Execution Time:0.0004580020904541

select * from plano where status=4 order by datainicio DESC, datafim DESC 
 Execution Time:0.00050592422485352

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00035786628723145

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00092911720275879

SELECT *
FROM "plano"
WHERE "id" =  '23' 
 Execution Time:0.00037693977355957

SELECT *
FROM "plano"
WHERE "id" =  '23' 
 Execution Time:0.00025081634521484

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00028300285339355

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00029301643371582

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028800964355469

select * from planejamento where plano='23' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0004429817199707

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00029993057250977

select origemreceita, sum(valor) from planejamento where plano='23' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00042200088500977

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='23' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00056219100952148

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='23' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00074005126953125

select sum(valor) as total from planejamento where plano='23' and tipo=1 
 Execution Time:0.00028586387634277

select sum(valor) as total from planejamento where plano='23' and tipo=2 
 Execution Time:0.00023317337036133

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00043106079101562

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00032496452331543

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00026893615722656

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00033187866210938

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0002748966217041

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00041699409484863

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,8,7,10,3,9,4,5) ORDER BY datainicio DESC 
 Execution Time:0.00032401084899902

select * from obm where id='7' limit 1 
 Execution Time:0.00022697448730469

select * from obm where id='3' limit 1 
 Execution Time:0.00021195411682129

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0005180835723877

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00042581558227539

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00037598609924316

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00046491622924805

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00048398971557617

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00073504447937012

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,8,7,10,3,9,4,5) ORDER BY datainicio DESC 
 Execution Time:0.00056982040405273

select * from obm where id='7' limit 1 
 Execution Time:0.0003809928894043

select * from obm where id='3' limit 1 
 Execution Time:0.0002598762512207

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00045490264892578

SELECT *
FROM "plano"
WHERE "id" =  '30' 
 Execution Time:0.00035190582275391

SELECT *
FROM "plano"
WHERE "id" =  '30' 
 Execution Time:0.00032305717468262

select * from reprovacao where plano='30'; 
 Execution Time:0.046126127243042

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00046205520629883

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00035977363586426

select * from planejamento where plano='30' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00030303001403809

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00064706802368164

select origemreceita, sum(valor) from planejamento where plano='30' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00033998489379883

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='30' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00056314468383789

select sum(valor) as total from planejamento where plano='30' and tipo=1 
 Execution Time:0.00025200843811035

select sum(valor) as total from planejamento where plano='30' and tipo=2 
 Execution Time:0.00022196769714355

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.064774990081787

SELECT *
FROM "plano"
WHERE "id" =  '30' 
 Execution Time:0.00060486793518066

SELECT *
FROM "plano"
WHERE "id" =  '30' 
 Execution Time:0.00038695335388184

SELECT *
FROM "plano"
WHERE "id" =  '30' 
 Execution Time:0.00034093856811523

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0010011196136475

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004570484161377

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00045108795166016

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00040388107299805

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00040483474731445

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00080680847167969

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00058889389038086

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00097489356994629

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,8,7,10,3,9,4,5) ORDER BY datainicio DESC 
 Execution Time:0.00091004371643066

select * from obm where id='7' limit 1 
 Execution Time:0.00052809715270996

select * from obm where id='8' limit 1 
 Execution Time:0.00049901008605957

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00042605400085449

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00029087066650391

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00025606155395508

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00035595893859863

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00026893615722656

select a.obm from acesso as a, modulo as m where usuario='6' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00040984153747559

SELECT * FROM plano WHERE status<4 and status>0 and obm in (8) ORDER BY datainicio DESC 
 Execution Time:0.0002892017364502

select * from obm where id='8' limit 1 
 Execution Time:0.00022292137145996

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00082898139953613

SELECT *
FROM "plano"
WHERE "id" =  '30' 
 Execution Time:0.00038504600524902

SELECT *
FROM "plano"
WHERE "id" =  '30' 
 Execution Time:0.00035214424133301

select * from reprovacao where plano='30'; 
 Execution Time:0.00058698654174805

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00076007843017578

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00037789344787598

select * from planejamento where plano='30' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00078296661376953

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0009610652923584

select origemreceita, sum(valor) from planejamento where plano='30' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00052809715270996

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='30' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00054001808166504

select sum(valor) as total from planejamento where plano='30' and tipo=1 
 Execution Time:0.00023984909057617

select sum(valor) as total from planejamento where plano='30' and tipo=2 
 Execution Time:0.00026607513427734

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.000701904296875

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00049209594726562

SELECT *
FROM "plano"
WHERE "id" =  '30' 
 Execution Time:0.00036096572875977

SELECT *
FROM "plano"
WHERE "id" =  '30' 
 Execution Time:0.00033783912658691

select * from reprovacao where plano=0; 
 Execution Time:0.00052690505981445

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00050997734069824

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00060391426086426

select * from planejamento where plano='30' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00091409683227539

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0021018981933594

select origemreceita, sum(valor) from planejamento where plano='30' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00066900253295898

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='30' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0012171268463135

select sum(valor) as total from planejamento where plano='30' and tipo=1 
 Execution Time:0.00045990943908691

select sum(valor) as total from planejamento where plano='30' and tipo=2 
 Execution Time:0.00041508674621582

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.0018789768218994

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0003669261932373

SELECT *
FROM "plano"
WHERE "id" =  '30' 
 Execution Time:0.00043797492980957

SELECT *
FROM "plano"
WHERE "id" =  '30' 
 Execution Time:0.00049018859863281

select * from reprovacao where plano=0; 
 Execution Time:0.0006401538848877

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00041103363037109

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00038599967956543

select * from planejamento where plano='30' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00056195259094238

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00075483322143555

select origemreceita, sum(valor) from planejamento where plano='30' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00053882598876953

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='30' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00060892105102539

select sum(valor) as total from planejamento where plano='30' and tipo=1 
 Execution Time:0.00030899047851562

select sum(valor) as total from planejamento where plano='30' and tipo=2 
 Execution Time:0.00028586387634277

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00060486793518066

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0003659725189209

SELECT *
FROM "plano"
WHERE "id" =  '30' 
 Execution Time:0.00026416778564453

SELECT *
FROM "plano"
WHERE "id" =  '30' 
 Execution Time:0.0002598762512207

select * from reprovacao where plano=0; 
 Execution Time:0.00023102760314941

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0002448558807373

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00022697448730469

select * from planejamento where plano='30' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00026082992553711

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00051212310791016

select origemreceita, sum(valor) from planejamento where plano='30' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00025105476379395

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='30' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00043797492980957

select sum(valor) as total from planejamento where plano='30' and tipo=1 
 Execution Time:0.00027990341186523

select sum(valor) as total from planejamento where plano='30' and tipo=2 
 Execution Time:0.00024700164794922

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00049495697021484

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00046110153198242

SELECT *
FROM "plano"
WHERE "id" =  '30' 
 Execution Time:0.00031089782714844

SELECT *
FROM "plano"
WHERE "id" =  '30' 
 Execution Time:0.00027108192443848

select * from reprovacao where plano=0; 
 Execution Time:0.00042295455932617

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00037693977355957

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0010669231414795

select * from planejamento where plano='30' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00050497055053711

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0015890598297119

select origemreceita, sum(valor) from planejamento where plano='30' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00053501129150391

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='30' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00070905685424805

select sum(valor) as total from planejamento where plano='30' and tipo=1 
 Execution Time:0.00039911270141602

select sum(valor) as total from planejamento where plano='30' and tipo=2 
 Execution Time:0.00032711029052734

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.0013718605041504

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00053811073303223

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00046610832214355

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00039100646972656

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00048398971557617

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040602684020996

select a.obm from acesso as a, modulo as m where usuario='6' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00052595138549805

SELECT * FROM plano WHERE status<4 and status>0 and obm in (8) ORDER BY datainicio DESC 
 Execution Time:0.00040197372436523

select * from obm where id='4' limit 1 
 Execution Time:0.00037598609924316

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00056004524230957

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00049591064453125

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00067710876464844

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00062990188598633

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00044798851013184

select a.obm from acesso as a, modulo as m where usuario='6' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00066518783569336

SELECT * FROM plano WHERE status<4 and status>0 and obm in (8) ORDER BY datainicio DESC 
 Execution Time:0.00084996223449707

select * from obm where id='4' limit 1 
 Execution Time:0.0011379718780518

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00075793266296387

SELECT *
FROM "plano"
WHERE "id" =  '30' 
 Execution Time:0.00042986869812012

SELECT *
FROM "plano"
WHERE "id" =  '30' 
 Execution Time:0.0003359317779541

select * from reprovacao where plano='30'; 
 Execution Time:0.00059795379638672

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00070285797119141

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00036787986755371

select * from planejamento where plano='30' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00081300735473633

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0010321140289307

select origemreceita, sum(valor) from planejamento where plano='30' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00050806999206543

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='30' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00059604644775391

select sum(valor) as total from planejamento where plano='30' and tipo=1 
 Execution Time:0.00024700164794922

select sum(valor) as total from planejamento where plano='30' and tipo=2 
 Execution Time:0.00029706954956055

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00085902214050293

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00070786476135254

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00061511993408203

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00088882446289062

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00081920623779297

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00052595138549805

select a.obm from acesso as a, modulo as m where usuario='6' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00077509880065918

SELECT * FROM plano WHERE status<4 and status>0 and obm in (8) ORDER BY datainicio DESC 
 Execution Time:0.00056695938110352

select * from obm where id='4' limit 1 
 Execution Time:0.00044822692871094

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00041079521179199

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00030803680419922

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00026917457580566

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00031495094299316

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00027704238891602

select a.obm from acesso as a, modulo as m where usuario='6' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00048685073852539

SELECT * FROM plano WHERE status<4 and status>0 and obm in (8) ORDER BY datainicio DESC 
 Execution Time:0.00030708312988281

select * from obm where id='4' limit 1 
 Execution Time:0.00022602081298828

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00047707557678223

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00034093856811523

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00029897689819336

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00036382675170898

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00030303001403809

select a.obm from acesso as a, modulo as m where usuario='6' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00049519538879395

SELECT * FROM plano WHERE status<4 and status>0 and obm in (8) ORDER BY datainicio DESC 
 Execution Time:0.00044703483581543

select * from obm where id='4' limit 1 
 Execution Time:0.00035595893859863

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00039887428283691

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00044894218444824

select * from obm where id in (1,7,8,10,3,9,4,5) 
 Execution Time:0.00035905838012695

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00035691261291504

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00039315223693848

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00033211708068848

select * from modulo where id in (20,18,17,19,22,21,15,7,16) 
 Execution Time:0.00033378601074219

SELECT *
FROM "usuario"
WHERE "id" =  '7' 
 Execution Time:0.00037288665771484

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00031900405883789

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00042080879211426

select * from obm where id in (1,7,8,10,3,9,4,5) 
 Execution Time:0.00025796890258789

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00028491020202637

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00029110908508301

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00028896331787109

select * from modulo where id in (20,18,17,19,22,21,15,7,16) 
 Execution Time:0.00028896331787109

SELECT *
FROM "usuario"
WHERE "id" =  '7' 
 Execution Time:0.0003960132598877

SELECT *
FROM "obm"
WHERE "id" =  '4' 
 Execution Time:0.00028014183044434

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029897689819336

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00042605400085449

select * from obm where id in (1,7,8,10,3,9,4,5) 
 Execution Time:0.00033998489379883

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00027704238891602

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0003211498260498

select * from acesso where usuario='7' and obm='4' 
 Execution Time:0.00025606155395508

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00027894973754883

select * from modulo where id in (20,18,17,19,22,21,15,7,16) 
 Execution Time:0.00027608871459961

SELECT *
FROM "usuario"
WHERE "id" =  '7' 
 Execution Time:0.00053095817565918

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00040411949157715

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00044488906860352

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00064682960510254

select * from obm where id in (1,7,8,10,3,9,4,5) 
 Execution Time:0.00042200088500977

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00047183036804199

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00044608116149902

select * from acesso where usuario='7' and obm='8' 
 Execution Time:0.00045204162597656

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00043201446533203

select * from modulo where id in (20,18,17,19,22,21,15,7,16) 
 Execution Time:0.00042986869812012

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00054717063903809

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.0006401538848877

select * from obm where id in (1,7,8,10,3,9,4,5) 
 Execution Time:0.0003809928894043

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00046801567077637

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00048995018005371

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00040507316589355

select * from modulo where id in (20,18,17,19,22,21,15,7,16) 
 Execution Time:0.00048398971557617

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00042295455932617

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00031685829162598

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00027203559875488

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00031805038452148

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00026798248291016

select a.obm from acesso as a, modulo as m where usuario='7' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00044584274291992

SELECT * FROM plano WHERE status<4 and status>0 and obm in (4,8) ORDER BY datainicio DESC 
 Execution Time:0.00032711029052734

select * from obm where id='4' limit 1 
 Execution Time:0.00022411346435547

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00043797492980957

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00032591819763184

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00025510787963867

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00032615661621094

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00042104721069336

select a.obm from acesso as a, modulo as m where usuario='7' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0013599395751953

SELECT * FROM plano WHERE status<4 and status>0 and obm in (4,8) ORDER BY datainicio DESC 
 Execution Time:0.00054717063903809

select * from obm where id='4' limit 1 
 Execution Time:0.00024890899658203

SELECT *
FROM "plano"
WHERE "id" =  '30' 
 Execution Time:0.00039410591125488

SELECT *
FROM "plano"
WHERE "id" =  '30' 
 Execution Time:0.00025606155395508

SELECT *
FROM "plano"
WHERE "id" =  '30' 
 Execution Time:0.00023198127746582

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00060510635375977

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00030016899108887

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00038695335388184

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0003809928894043

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00025606155395508

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00054502487182617

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00044798851013184

select a.obm from acesso as a, modulo as m where usuario='7' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00062704086303711

SELECT * FROM plano WHERE status<4 and status>0 and obm in (4,8) ORDER BY datainicio DESC 
 Execution Time:0.00048995018005371

select * from obm where id='8' limit 1 
 Execution Time:0.00040912628173828

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00057601928710938

SELECT *
FROM "plano"
WHERE "id" =  '30' 
 Execution Time:0.0004270076751709

SELECT *
FROM "plano"
WHERE "id" =  '30' 
 Execution Time:0.00036501884460449

select * from reprovacao where plano='30'; 
 Execution Time:0.0004432201385498

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00046992301940918

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040507316589355

select * from planejamento where plano='30' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00060892105102539

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00072598457336426

select origemreceita, sum(valor) from planejamento where plano='30' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.0004420280456543

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='30' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00052785873413086

select sum(valor) as total from planejamento where plano='30' and tipo=1 
 Execution Time:0.0002439022064209

select sum(valor) as total from planejamento where plano='30' and tipo=2 
 Execution Time:0.00024104118347168

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00071597099304199

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0016260147094727

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00046801567077637

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0003361701965332

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00039005279541016

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028109550476074

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00045394897460938

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,8,7,10,3,9,4,5) ORDER BY datainicio DESC 
 Execution Time:0.00036382675170898

select * from obm where id='7' limit 1 
 Execution Time:0.00032806396484375

select * from obm where id='8' limit 1 
 Execution Time:0.00029397010803223

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00094199180603027

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00075197219848633

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0005340576171875

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00033903121948242

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029802322387695

select a.obm from acesso as a, modulo as m where usuario='6' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00041580200195312

SELECT * FROM plano WHERE status<4 and status>0 and obm in (8) ORDER BY datainicio DESC 
 Execution Time:0.00029993057250977

select * from obm where id='8' limit 1 
 Execution Time:0.00024294853210449

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00049495697021484

SELECT *
FROM "plano"
WHERE "id" =  '30' 
 Execution Time:0.00043606758117676

SELECT *
FROM "plano"
WHERE "id" =  '30' 
 Execution Time:0.00038909912109375

select * from reprovacao where plano='30'; 
 Execution Time:0.00028800964355469

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00035595893859863

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00032711029052734

select * from planejamento where plano='30' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00037288665771484

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00060701370239258

select origemreceita, sum(valor) from planejamento where plano='30' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00039815902709961

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='30' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0006110668182373

select sum(valor) as total from planejamento where plano='30' and tipo=1 
 Execution Time:0.00033903121948242

select sum(valor) as total from planejamento where plano='30' and tipo=2 
 Execution Time:0.00029802322387695

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00045895576477051

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00038790702819824

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00055503845214844

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00050497055053711

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00062704086303711

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00051283836364746

select a.obm from acesso as a, modulo as m where usuario='6' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00076103210449219

SELECT * FROM plano WHERE status<4 and status>0 and obm in (8) ORDER BY datainicio DESC 
 Execution Time:0.00055694580078125

select * from obm where id='4' limit 1 
 Execution Time:0.00042891502380371

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00041699409484863

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00031399726867676

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00026297569274902

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00031495094299316

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00027990341186523

select a.obm from acesso as a, modulo as m where usuario='6' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00046801567077637

SELECT * FROM plano WHERE status<4 and status>0 and obm in (8) ORDER BY datainicio DESC 
 Execution Time:0.00032210350036621

select * from obm where id='4' limit 1 
 Execution Time:0.0002281665802002

SELECT *
FROM "plano"
WHERE "id" =  '30' 
 Execution Time:0.00052881240844727

SELECT *
FROM "plano"
WHERE "id" =  '30' 
 Execution Time:0.0003659725189209

SELECT *
FROM "plano"
WHERE "id" =  '30' 
 Execution Time:0.00031805038452148

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0006411075592041

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00030899047851562

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00044083595275879

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00049901008605957

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00043296813964844

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00054693222045898

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00042104721069336

select a.obm from acesso as a, modulo as m where usuario='6' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00054311752319336

SELECT * FROM plano WHERE status<4 and status>0 and obm in (8) ORDER BY datainicio DESC 
 Execution Time:0.00046086311340332

select * from obm where id='8' limit 1 
 Execution Time:0.00036406517028809

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00053691864013672

SELECT *
FROM "plano"
WHERE "id" =  '30' 
 Execution Time:0.00044488906860352

SELECT *
FROM "plano"
WHERE "id" =  '30' 
 Execution Time:0.00034403800964355

select * from reprovacao where plano='30'; 
 Execution Time:0.00032186508178711

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00046396255493164

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00045084953308105

select * from planejamento where plano='30' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00048208236694336

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0008549690246582

select origemreceita, sum(valor) from planejamento where plano='30' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00051999092102051

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='30' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00082087516784668

select sum(valor) as total from planejamento where plano='30' and tipo=1 
 Execution Time:0.00041508674621582

select sum(valor) as total from planejamento where plano='30' and tipo=2 
 Execution Time:0.00038886070251465

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00066399574279785

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00063610076904297

select a.obm from acesso as a, modulo as m where usuario='6' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.0012619495391846

select * from obm where id in (8) 
 Execution Time:0.00061202049255371

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00041103363037109

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00040912628173828

select modulo from acesso where usuario='6' and nivel>=5 group by modulo 
 Execution Time:0.00042319297790527

select * from modulo where id in (17,21) 
 Execution Time:0.00034499168395996

SELECT *
FROM "usuario"
WHERE "id" =  '7' 
 Execution Time:0.00055384635925293

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00042986869812012

select a.obm from acesso as a, modulo as m where usuario='6' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.0004429817199707

select * from obm where id in (8) 
 Execution Time:0.00026297569274902

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00048398971557617

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00051999092102051

select modulo from acesso where usuario='6' and nivel>=5 group by modulo 
 Execution Time:0.00051403045654297

select * from modulo where id in (17,21) 
 Execution Time:0.00042390823364258

SELECT *
FROM "usuario"
WHERE "id" =  '7' 
 Execution Time:0.00037217140197754

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00026798248291016

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00039196014404297

select a.obm from acesso as a, modulo as m where usuario='6' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00057411193847656

select * from obm where id in (8) 
 Execution Time:0.00024199485778809

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00030183792114258

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00029087066650391

select * from acesso where usuario='7' and obm='8' 
 Execution Time:0.00025606155395508

select modulo from acesso where usuario='6' and nivel>=5 group by modulo 
 Execution Time:0.00026488304138184

select * from modulo where id in (17,21) 
 Execution Time:0.00032615661621094

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00061917304992676

select a.obm from acesso as a, modulo as m where usuario='6' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00059890747070312

select * from obm where id in (8) 
 Execution Time:0.00032401084899902

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00041007995605469

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00046682357788086

select modulo from acesso where usuario='6' and nivel>=5 group by modulo 
 Execution Time:0.00039315223693848

select * from modulo where id in (17,21) 
 Execution Time:0.0003349781036377

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0004730224609375

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00035786628723145

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00031089782714844

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00040912628173828

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00080609321594238

select a.obm from acesso as a, modulo as m where usuario='7' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00072407722473145

SELECT * FROM plano WHERE status<4 and status>0 and obm in (4) ORDER BY datainicio DESC 
 Execution Time:0.00044918060302734

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00040602684020996

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00033402442932129

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00025820732116699

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00037789344787598

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00045180320739746

select a.obm from acesso as a, modulo as m where usuario='7' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00058102607727051

SELECT * FROM plano WHERE status<4 and status>0 and obm in (4) ORDER BY datainicio DESC 
 Execution Time:0.00031709671020508

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00041699409484863

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0003349781036377

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00027608871459961

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00035309791564941

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0006101131439209

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00049018859863281

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,8,7,10,3,9,4,5) ORDER BY datainicio DESC 
 Execution Time:0.0004570484161377

select * from obm where id='7' limit 1 
 Execution Time:0.00024890899658203

select * from obm where id='8' limit 1 
 Execution Time:0.00023102760314941

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040817260742188

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00042200088500977

select * from obm where id in (1,7,8,10,3,9,4,5) 
 Execution Time:0.0002601146697998

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00033211708068848

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00029993057250977

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00030708312988281

select * from modulo where id in (20,18,17,19,22,21,15,7,16) 
 Execution Time:0.00050616264343262

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00041890144348145

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004119873046875

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00060391426086426

select * from obm where id in (1,7,8,10,3,9,4,5) 
 Execution Time:0.00026798248291016

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00033402442932129

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0002892017364502

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00029301643371582

select * from modulo where id in (20,18,17,19,22,21,15,7,16) 
 Execution Time:0.00036191940307617

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00074601173400879

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00055885314941406

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00055813789367676

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00075221061706543

select * from obm where id in (1,7,8,10,3,9,4,5) 
 Execution Time:0.00027203559875488

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0002748966217041

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00028085708618164

select * from acesso where usuario='2' and obm='3' 
 Execution Time:0.00027799606323242

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00028300285339355

select * from modulo where id in (20,18,17,19,22,21,15,7,16) 
 Execution Time:0.00028395652770996

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00049495697021484

SELECT *
FROM "obm"
WHERE "id" =  '5' 
 Execution Time:0.00034308433532715

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00039482116699219

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00063586235046387

select * from obm where id in (1,7,8,10,3,9,4,5) 
 Execution Time:0.00042200088500977

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00043010711669922

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0004570484161377

select * from acesso where usuario='2' and obm='5' 
 Execution Time:0.00042295455932617

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00042605400085449

select * from modulo where id in (20,18,17,19,22,21,15,7,16) 
 Execution Time:0.00042295455932617

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00044703483581543

SELECT *
FROM "obm"
WHERE "id" =  '4' 
 Execution Time:0.0003199577331543

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00039196014404297

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00051212310791016

select * from obm where id in (1,7,8,10,3,9,4,5) 
 Execution Time:0.00033092498779297

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00036096572875977

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0003669261932373

select * from acesso where usuario='2' and obm='4' 
 Execution Time:0.00034713745117188

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00034809112548828

select * from modulo where id in (20,18,17,19,22,21,15,7,16) 
 Execution Time:0.00034499168395996

SELECT *
FROM "usuario"
WHERE "id" =  '7' 
 Execution Time:0.00087618827819824

SELECT *
FROM "obm"
WHERE "id" =  '4' 
 Execution Time:0.00067901611328125

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00036478042602539

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00043916702270508

select * from obm where id in (1,7,8,10,3,9,4,5) 
 Execution Time:0.00027084350585938

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00027203559875488

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00028300285339355

select * from acesso where usuario='7' and obm='4' 
 Execution Time:0.00026798248291016

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00027799606323242

select * from modulo where id in (20,18,17,19,22,21,15,7,16) 
 Execution Time:0.0002748966217041

SELECT *
FROM "usuario"
WHERE "id" =  '7' 
 Execution Time:0.00044107437133789

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0003349781036377

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00036907196044922

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00049996376037598

select * from obm where id in (1,7,8,10,3,9,4,5) 
 Execution Time:0.00035500526428223

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00038599967956543

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00036001205444336

select * from acesso where usuario='7' and obm='3' 
 Execution Time:0.0003049373626709

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00035691261291504

select * from modulo where id in (20,18,17,19,22,21,15,7,16) 
 Execution Time:0.00036191940307617

SELECT *
FROM "usuario"
WHERE "id" =  '7' 
 Execution Time:0.00051307678222656

SELECT *
FROM "obm"
WHERE "id" =  '1' 
 Execution Time:0.00035500526428223

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041317939758301

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00047016143798828

select * from obm where id in (1,7,8,10,3,9,4,5) 
 Execution Time:0.00027704238891602

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00029706954956055

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00032806396484375

select * from acesso where usuario='7' and obm='1' 
 Execution Time:0.000244140625

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00032401084899902

select * from modulo where id in (20,18,17,19,22,21,15,7,16) 
 Execution Time:0.00030899047851562

SELECT *
FROM "usuario"
WHERE "id" =  '7' 
 Execution Time:0.00041294097900391

SELECT *
FROM "obm"
WHERE "id" =  '5' 
 Execution Time:0.00028395652770996

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00032877922058105

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00045990943908691

select * from obm where id in (1,7,8,10,3,9,4,5) 
 Execution Time:0.00026893615722656

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00027608871459961

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00029110908508301

select * from acesso where usuario='7' and obm='5' 
 Execution Time:0.00023508071899414

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.0002739429473877

select * from modulo where id in (20,18,17,19,22,21,15,7,16) 
 Execution Time:0.0003058910369873

SELECT *
FROM "usuario"
WHERE "id" =  '7' 
 Execution Time:0.00038695335388184

SELECT *
FROM "obm"
WHERE "id" =  '4' 
 Execution Time:0.00027799606323242

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003058910369873

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00042510032653809

select * from obm where id in (1,7,8,10,3,9,4,5) 
 Execution Time:0.00036191940307617

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00044393539428711

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00031185150146484

select * from acesso where usuario='7' and obm='4' 
 Execution Time:0.00025296211242676

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00029110908508301

select * from modulo where id in (20,18,17,19,22,21,15,7,16) 
 Execution Time:0.00032806396484375

SELECT *
FROM "usuario"
WHERE "id" =  '7' 
 Execution Time:0.00050902366638184

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00037097930908203

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00042986869812012

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.0006101131439209

select * from obm where id in (1,7,8,10,3,9,4,5) 
 Execution Time:0.0003809928894043

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00044608116149902

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00043511390686035

select * from acesso where usuario='7' and obm='9' 
 Execution Time:0.00035405158996582

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00039005279541016

select * from modulo where id in (20,18,17,19,22,21,15,7,16) 
 Execution Time:0.00038695335388184

SELECT *
FROM "usuario"
WHERE "id" =  '7' 
 Execution Time:0.00037693977355957

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.0002598762512207

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029397010803223

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00040578842163086

select * from obm where id in (1,7,8,10,3,9,4,5) 
 Execution Time:0.0002739429473877

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00037598609924316

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0002892017364502

select * from acesso where usuario='7' and obm='7' 
 Execution Time:0.00022792816162109

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00026321411132812

select * from modulo where id in (20,18,17,19,22,21,15,7,16) 
 Execution Time:0.00027585029602051

SELECT *
FROM "usuario"
WHERE "id" =  '7' 
 Execution Time:0.00045609474182129

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00034189224243164

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00044488906860352

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00062799453735352

select * from obm where id in (1,7,8,10,3,9,4,5) 
 Execution Time:0.00039100646972656

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00036191940307617

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00036716461181641

select * from acesso where usuario='7' and obm='8' 
 Execution Time:0.00028204917907715

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00029706954956055

select * from modulo where id in (20,18,17,19,22,21,15,7,16) 
 Execution Time:0.00029277801513672

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00051283836364746

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00037479400634766

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00050783157348633

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00063896179199219

select * from obm where id in (1,7,8,10,3,9,4,5) 
 Execution Time:0.00041317939758301

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00062012672424316

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00046300888061523

select * from acesso where usuario='6' and obm='8' 
 Execution Time:0.00039219856262207

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00041699409484863

select * from modulo where id in (20,18,17,19,22,21,15,7,16) 
 Execution Time:0.00045299530029297

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00045585632324219

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00039196014404297

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00032901763916016

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00096607208251953

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00036501884460449

select a.obm from acesso as a, modulo as m where usuario='7' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00048685073852539

SELECT * FROM plano WHERE status<4 and status>0 and obm in (4) ORDER BY datainicio DESC 
 Execution Time:0.00039291381835938

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0011699199676514

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.001021146774292

select * from obm where id in (1,7,8,10,3,9,4,5) 
 Execution Time:0.00055098533630371

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0027470588684082

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00075602531433105

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00066995620727539

select * from modulo where id in (20,18,17,19,22,21,15,7,16) 
 Execution Time:0.00073504447937012

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00055289268493652

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.0005338191986084

select * from obm where id in (1,7,8,10,3,9,4,5) 
 Execution Time:0.00026988983154297

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00031113624572754

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00062108039855957

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00030684471130371

select * from modulo where id in (20,18,17,19,22,21,15,7,16) 
 Execution Time:0.00029492378234863

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00038790702819824

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00032615661621094

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00044989585876465

select * from obm where id in (1,7,8,10,3,9,4,5) 
 Execution Time:0.00027608871459961

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00031089782714844

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00030016899108887

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00028014183044434

select * from modulo where id in (20,18,17,19,22,21,15,7,16) 
 Execution Time:0.00038886070251465

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00047612190246582

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00034499168395996

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040292739868164

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00059008598327637

select * from obm where id in (1,7,8,10,3,9,4,5) 
 Execution Time:0.00032711029052734

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0003509521484375

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00043702125549316

select * from acesso where usuario='2' and obm='3' 
 Execution Time:0.00040292739868164

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00039505958557129

select * from modulo where id in (20,18,17,19,22,21,15,7,16) 
 Execution Time:0.00038719177246094

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00037789344787598

SELECT *
FROM "obm"
WHERE "id" =  '1' 
 Execution Time:0.00028491020202637

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00030016899108887

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00039982795715332

select * from obm where id in (1,7,8,10,3,9,4,5) 
 Execution Time:0.00025606155395508

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00029087066650391

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00028085708618164

select * from acesso where usuario='2' and obm='1' 
 Execution Time:0.00026392936706543

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00026607513427734

select * from modulo where id in (20,18,17,19,22,21,15,7,16) 
 Execution Time:0.0002739429473877

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00038790702819824

SELECT *
FROM "obm"
WHERE "id" =  '5' 
 Execution Time:0.00027203559875488

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00030398368835449

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00053215026855469

select * from obm where id in (1,7,8,10,3,9,4,5) 
 Execution Time:0.00038719177246094

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00041484832763672

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00030803680419922

select * from acesso where usuario='2' and obm='5' 
 Execution Time:0.00029397010803223

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00029206275939941

select * from modulo where id in (20,18,17,19,22,21,15,7,16) 
 Execution Time:0.00029397010803223

SELECT *
FROM "usuario"
WHERE "id" =  '7' 
 Execution Time:0.00043296813964844

SELECT *
FROM "obm"
WHERE "id" =  '5' 
 Execution Time:0.00032401084899902

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00046014785766602

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00060296058654785

select * from obm where id in (1,7,8,10,3,9,4,5) 
 Execution Time:0.00034785270690918

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00041413307189941

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00040411949157715

select * from acesso where usuario='7' and obm='5' 
 Execution Time:0.00033402442932129

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00040197372436523

select * from modulo where id in (20,18,17,19,22,21,15,7,16) 
 Execution Time:0.0003960132598877

SELECT *
FROM "usuario"
WHERE "id" =  '7' 
 Execution Time:0.00051093101501465

SELECT *
FROM "obm"
WHERE "id" =  '4' 
 Execution Time:0.00042605400085449

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041604042053223

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00062704086303711

select * from obm where id in (1,7,8,10,3,9,4,5) 
 Execution Time:0.0009770393371582

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00050497055053711

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00045990943908691

select * from acesso where usuario='7' and obm='4' 
 Execution Time:0.00035691261291504

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00043392181396484

select * from modulo where id in (20,18,17,19,22,21,15,7,16) 
 Execution Time:0.0004570484161377

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00051307678222656

SELECT *
FROM "obm"
WHERE "id" =  '4' 
 Execution Time:0.0003209114074707

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040316581726074

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00057601928710938

select * from obm where id in (1,7,8,10,3,9,4,5) 
 Execution Time:0.00040221214294434

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00045394897460938

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00041604042053223

select * from acesso where usuario='6' and obm='4' 
 Execution Time:0.00034904479980469

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00039410591125488

select * from modulo where id in (20,18,17,19,22,21,15,7,16) 
 Execution Time:0.00045490264892578

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00043106079101562

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00027704238891602

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00031304359436035

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00064802169799805

select * from obm where id in (1,7,8,10,3,9,4,5) 
 Execution Time:0.00038599967956543

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00030803680419922

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00034713745117188

select * from acesso where usuario='6' and obm='7' 
 Execution Time:0.00025582313537598

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00028514862060547

select * from modulo where id in (20,18,17,19,22,21,15,7,16) 
 Execution Time:0.00029683113098145

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00042605400085449

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00031900405883789

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00035214424133301

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00046491622924805

select * from obm where id in (1,7,8,10,3,9,4,5) 
 Execution Time:0.0003359317779541

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00033187866210938

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00034308433532715

select * from acesso where usuario='6' and obm='8' 
 Execution Time:0.00031709671020508

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.0003509521484375

select * from modulo where id in (20,18,17,19,22,21,15,7,16) 
 Execution Time:0.00034904479980469

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00046586990356445

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00038409233093262

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00035500526428223

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00041413307189941

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041890144348145

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00054502487182617

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,8,7,10,3,9,4,5) ORDER BY datainicio DESC 
 Execution Time:0.00067400932312012

select * from obm where id='7' limit 1 
 Execution Time:0.00031805038452148

select * from obm where id='8' limit 1 
 Execution Time:0.00030398368835449

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00045108795166016

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00092697143554688

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00039196014404297

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00034284591674805

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041890144348145

select a.obm from acesso as a, modulo as m where usuario='6' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00065493583679199

SELECT * FROM plano WHERE status<4 and status>0 and obm in (8) ORDER BY datainicio DESC 
 Execution Time:0.0016629695892334

select * from obm where id='8' limit 1 
 Execution Time:0.00040102005004883

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00051307678222656

SELECT *
FROM "plano"
WHERE "id" =  '30' 
 Execution Time:0.00047802925109863

SELECT *
FROM "plano"
WHERE "id" =  '30' 
 Execution Time:0.00030899047851562

select * from reprovacao where plano='30'; 
 Execution Time:0.00029397010803223

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0004420280456543

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00039410591125488

select * from planejamento where plano='30' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00040292739868164

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00082683563232422

select origemreceita, sum(valor) from planejamento where plano='30' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00037407875061035

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='30' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00050616264343262

select sum(valor) as total from planejamento where plano='30' and tipo=1 
 Execution Time:0.00026798248291016

select sum(valor) as total from planejamento where plano='30' and tipo=2 
 Execution Time:0.00022792816162109

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00038003921508789

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0005648136138916

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00049209594726562

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00044107437133789

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00049710273742676

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00035691261291504

select a.obm from acesso as a, modulo as m where usuario='6' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00049591064453125

SELECT * FROM plano WHERE status<4 and status>0 and obm in (8) ORDER BY datainicio DESC 
 Execution Time:0.00039792060852051

select * from obm where id='4' limit 1 
 Execution Time:0.00033307075500488

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00053286552429199

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00050902366638184

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00043416023254395

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00062203407287598

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00070500373840332

select a.obm from acesso as a, modulo as m where usuario='6' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00061202049255371

SELECT * FROM plano WHERE status<4 and status>0 and obm in (8) ORDER BY datainicio DESC 
 Execution Time:0.00042009353637695

select * from obm where id='4' limit 1 
 Execution Time:0.00032305717468262

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00040698051452637

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00035405158996582

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00027608871459961

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00032901763916016

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029301643371582

select a.obm from acesso as a, modulo as m where usuario='6' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00043010711669922

SELECT * FROM plano WHERE status<4 and status>0 and obm in (8) ORDER BY datainicio DESC 
 Execution Time:0.00031208992004395

select * from obm where id='4' limit 1 
 Execution Time:0.00023698806762695

SELECT *
FROM "plano"
WHERE "id" =  '30' 
 Execution Time:0.00049996376037598

SELECT *
FROM "plano"
WHERE "id" =  '30' 
 Execution Time:0.00040316581726074

SELECT *
FROM "plano"
WHERE "id" =  '30' 
 Execution Time:0.00036287307739258

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0008540153503418

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041699409484863

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00063586235046387

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0012569427490234

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00045680999755859

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00050806999206543

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00043416023254395

select a.obm from acesso as a, modulo as m where usuario='6' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00060606002807617

SELECT * FROM plano WHERE status<4 and status>0 and obm in (8) ORDER BY datainicio DESC 
 Execution Time:0.00032591819763184

select * from obm where id='4' limit 1 
 Execution Time:0.00023889541625977

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00046801567077637

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00046110153198242

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00045609474182129

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00039386749267578

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004279613494873

select a.obm from acesso as a, modulo as m where usuario='6' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0012781620025635

SELECT * FROM plano WHERE status<4 and status>0 and obm in (8) ORDER BY datainicio DESC 
 Execution Time:0.00053000450134277

select * from obm where id='4' limit 1 
 Execution Time:0.00031113624572754

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00048208236694336

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00040793418884277

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00037503242492676

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00044798851013184

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041103363037109

select a.obm from acesso as a, modulo as m where usuario='7' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00043892860412598

SELECT * FROM plano WHERE status<4 and status>0 and obm in (4) ORDER BY datainicio DESC 
 Execution Time:0.00055313110351562

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00042986869812012

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00036978721618652

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00029087066650391

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0003669261932373

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029587745666504

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00053310394287109

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,8,7,10,3,9,4,5) ORDER BY datainicio DESC 
 Execution Time:0.0005338191986084

select * from obm where id='7' limit 1 
 Execution Time:0.00024819374084473

select * from obm where id='4' limit 1 
 Execution Time:0.00026106834411621

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00052118301391602

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0012600421905518

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00043702125549316

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00041294097900391

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00031685829162598

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00044488906860352

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,8,7,10,3,9,4,5) ORDER BY datainicio DESC 
 Execution Time:0.00034308433532715

select * from obm where id='7' limit 1 
 Execution Time:0.00024819374084473

select * from obm where id='4' limit 1 
 Execution Time:0.00025486946105957

SELECT *
FROM "plano"
WHERE "id" =  '30' 
 Execution Time:0.00043511390686035

SELECT *
FROM "plano"
WHERE "id" =  '30' 
 Execution Time:0.00032591819763184

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00028705596923828

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00036811828613281

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003809928894043

select * from planejamento where plano='30' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0004279613494873

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00035595893859863

select origemreceita, sum(valor) from planejamento where plano='30' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00044703483581543

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='30' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00068092346191406

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='30' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00062394142150879

select sum(valor) as total from planejamento where plano='30' and tipo=1 
 Execution Time:0.0003201961517334

select sum(valor) as total from planejamento where plano='30' and tipo=2 
 Execution Time:0.00029897689819336

SELECT *
FROM "plano"
WHERE "id" =  '30' 
 Execution Time:0.00057816505432129

SELECT *
FROM "plano"
WHERE "id" =  '30' 
 Execution Time:0.00026297569274902

SELECT *
FROM "plano"
WHERE "id" =  '30' 
 Execution Time:0.00024294853210449

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00064611434936523

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00032997131347656

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00037312507629395

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00028109550476074

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00024104118347168

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00030398368835449

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00024795532226562

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0003809928894043

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,8,7,10,3,9,4,5) ORDER BY datainicio DESC 
 Execution Time:0.00032305717468262

select * from obm where id='7' limit 1 
 Execution Time:0.00021195411682129

select * from obm where id='3' limit 1 
 Execution Time:0.00020408630371094

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00045204162597656

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0003359317779541

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00027298927307129

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00038695335388184

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004119873046875

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00047087669372559

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,8,7,10,3,9,4,5) ORDER BY datainicio DESC 
 Execution Time:0.00034809112548828

select * from obm where id='7' limit 1 
 Execution Time:0.0002439022064209

select * from obm where id='3' limit 1 
 Execution Time:0.00022983551025391

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00052404403686523

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00044608116149902

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00037789344787598

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00044488906860352

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00036716461181641

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00053691864013672

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,8,7,10,3,9,4,5) ORDER BY datainicio DESC 
 Execution Time:0.00046110153198242

select * from obm where id='7' limit 1 
 Execution Time:0.00028014183044434

select * from obm where id='1' limit 1 
 Execution Time:0.00024819374084473

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0005791187286377

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00064802169799805

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00048708915710449

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00062108039855957

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00050806999206543

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00088119506835938

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,8,7,10,3,9,4,5) ORDER BY datainicio DESC 
 Execution Time:0.00068092346191406

select * from obm where id='7' limit 1 
 Execution Time:0.00044488906860352

select * from plano where status=4 order by datainicio DESC, datafim DESC 
 Execution Time:0.0004570484161377

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00030207633972168

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0003199577331543

SELECT *
FROM "plano"
WHERE "id" =  '30' 
 Execution Time:0.00040197372436523

SELECT *
FROM "plano"
WHERE "id" =  '30' 
 Execution Time:0.00027298927307129

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00030803680419922

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00040316581726074

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00036311149597168

select * from planejamento where plano='30' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00038003921508789

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00036811828613281

select origemreceita, sum(valor) from planejamento where plano='30' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00031399726867676

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='30' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00058507919311523

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='30' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00047802925109863

select sum(valor) as total from planejamento where plano='30' and tipo=1 
 Execution Time:0.0002598762512207

select sum(valor) as total from planejamento where plano='30' and tipo=2 
 Execution Time:0.00023102760314941

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00042390823364258

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00033712387084961

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00027084350585938

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00032401084899902

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00027990341186523

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0004119873046875

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,8,7,10,3,9,4,5) ORDER BY datainicio DESC 
 Execution Time:0.00046801567077637

select * from obm where id='7' limit 1 
 Execution Time:0.00023698806762695

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00040006637573242

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00026082992553711

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00024104118347168

select * from reprovacao where plano='21'; 
 Execution Time:0.00023388862609863

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00031805038452148

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00027990341186523

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00037693977355957

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00061702728271484

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00035595893859863

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00057387351989746

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.00028395652770996

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.000244140625

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00040793418884277

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00058507919311523

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00065183639526367

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00058221817016602

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00047588348388672

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00034499168395996

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00031709671020508

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00030708312988281

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00034284591674805

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00034809112548828

SELECT *
FROM "obm"
WHERE "id" =  11 
 Execution Time:0.00032210350036621

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.0003209114074707

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00036001205444336

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00037407875061035

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00031495094299316

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00030899047851562

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00031113624572754

SELECT *
FROM "obm"
WHERE "id" =  '4' 
 Execution Time:0.00025606155395508

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00024914741516113

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (3,4,5,7,8) and pj.dataprevista between '2016-01-01' and '2016-12-31' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0030159950256348

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (3,4,5,7,8) and pj.dataprevista between '2016-01-01' and '2016-12-31' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0030980110168457

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00052022933959961

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00047802925109863

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00060391426086426

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00047898292541504

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00035405158996582

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00033998489379883

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.0003209114074707

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00032901763916016

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00030088424682617

SELECT *
FROM "obm"
WHERE "id" =  11 
 Execution Time:0.00029802322387695

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00031208992004395

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00030899047851562

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00034189224243164

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00038409233093262

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00038385391235352

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00033998489379883

SELECT *
FROM "obm"
WHERE "id" =  '4' 
 Execution Time:0.00034904479980469

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00034093856811523

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (3,4,5,7,8) and pj.dataprevista between '2016-01-01' and '2016-12-31' and pn.status=4 and e.id='9' order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0026960372924805

select obm, sum(valor) from (select o.nome as obm, pj.valor as valor from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (3,4,5,7,8) and pj.dataprevista between '2016-01-01' and '2016-12-31' and pn.status=4 and e.id='9' order by o.nome asc, tipo asc, origemreceita asc) as resultado group by obm 
 Execution Time:0.0018599033355713

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (3,4,5,7,8) and pj.dataprevista between '2016-01-01' and '2016-12-31' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0025360584259033

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00048112869262695

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00037884712219238

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00039482116699219

SELECT *
FROM "origemreceita" 
 Execution Time:0.00021100044250488

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00042200088500977

SELECT *
FROM "categoriaeconomica"
ORDER BY "id" 
 Execution Time:0.00029206275939941

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00052905082702637

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00040698051452637

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00037884712219238

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00041079521179199

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040602684020996

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00058817863464355

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,8,7,10,3,9,4,5) ORDER BY datainicio DESC 
 Execution Time:0.00047802925109863

select * from obm where id='7' limit 1 
 Execution Time:0.00032305717468262

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00039100646972656

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00029087066650391

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00028085708618164

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00032711029052734

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00030112266540527

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0004429817199707

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0002899169921875

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00039005279541016

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00056982040405273

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='21' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00045394897460938

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.00026798248291016

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00023794174194336

