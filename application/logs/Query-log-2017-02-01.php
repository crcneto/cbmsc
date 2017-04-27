SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.087180852890015

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.070570945739746

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.040601015090942

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.030771017074585

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.02954888343811

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.089150905609131

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00044584274291992

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00032186508178711

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.0013079643249512

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00036501884460449

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.11846804618835

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.022690773010254

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00068902969360352

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.027276992797852

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.021906852722168

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.067407846450806

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.016056060791016

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='21' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.0020771026611328

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.00070881843566895

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00069999694824219

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00083398818969727

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00055098533630371

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00079107284545898

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00058293342590332

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00048494338989258

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.000823974609375

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00050687789916992

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00031805038452148

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00058817863464355

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00031900405883789

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.0002448558807373

select * from reprovacao where plano='21'; 
 Execution Time:0.039366006851196

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00082588195800781

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00045299530029297

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00091409683227539

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.13805389404297

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00076818466186523

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00092506408691406

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.00040793418884277

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00052285194396973

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00056099891662598

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00035715103149414

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00032591819763184

select * from reprovacao where plano='21'; 
 Execution Time:0.00054812431335449

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0004119873046875

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00035595893859863

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00049304962158203

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0010221004486084

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.0005028247833252

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0013580322265625

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.00066304206848145

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.0007481575012207

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0024678707122803

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.0016560554504395

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.0004880428314209

select * from reprovacao where plano='21'; 
 Execution Time:0.00081610679626465

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00075507164001465

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0005040168762207

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0011968612670898

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0020871162414551

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00072503089904785

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0013041496276855

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.00041985511779785

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00032591819763184

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0016698837280273

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00057101249694824

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.0002591609954834

select * from reprovacao where plano='21'; 
 Execution Time:0.00046300888061523

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00071501731872559

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00048398971557617

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0007011890411377

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0014698505401611

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00053596496582031

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0010111331939697

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.0003809928894043

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00033211708068848

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0017170906066895

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00074601173400879

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00033807754516602

select * from reprovacao where plano='21'; 
 Execution Time:0.00061178207397461

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00093317031860352

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00064897537231445

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00098299980163574

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0016489028930664

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00062203407287598

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00097799301147461

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.00041294097900391

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00040197372436523

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by sb.nome 
 Execution Time:0.1195330619812

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00059819221496582

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00043511390686035

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00084304809570312

select * from reprovacao where plano='21'; 
 Execution Time:0.0007939338684082

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0005500316619873

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00051283836364746

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00063610076904297

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00098586082458496

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00053501129150391

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00085592269897461

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.00052595138549805

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00055098533630371

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by sb.nome 
 Execution Time:0.0013089179992676

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0025420188903809

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00099897384643555

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00045204162597656

select * from reprovacao where plano='21'; 
 Execution Time:0.00081682205200195

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0010640621185303

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0013630390167236

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0014970302581787

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0019228458404541

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00054001808166504

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00075507164001465

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.00024914741516113

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00022697448730469

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by sb.nome 
 Execution Time:0.0007481575012207

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0029380321502686

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.0012228488922119

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00052595138549805

select * from reprovacao where plano='21'; 
 Execution Time:0.00090980529785156

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0007321834564209

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0007481575012207

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0010530948638916

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0018489360809326

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.0017259120941162

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0012588500976562

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.00045299530029297

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00038695335388184

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.0011160373687744

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0021989345550537

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00089216232299805

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.0003819465637207

select * from reprovacao where plano='21'; 
 Execution Time:0.00057196617126465

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00090909004211426

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00066113471984863

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.001248836517334

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0016140937805176

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00053691864013672

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00087213516235352

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.00029802322387695

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00024509429931641

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.0014870166778564

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00052785873413086

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00038790702819824

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0020720958709717

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0007789134979248

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0013070106506348

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00080084800720215

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00074481964111328

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00084900856018066

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00032401084899902

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00024700164794922

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00057601928710938

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00031590461730957

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.0002601146697998

select * from reprovacao where plano='21'; 
 Execution Time:0.00049209594726562

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00063014030456543

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00038504600524902

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0006251335144043

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0013551712036133

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00046396255493164

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00057601928710938

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.00024318695068359

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00022101402282715

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.0006260871887207

