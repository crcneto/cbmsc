select st.nome as setor, ss.nome as subsetor, sum(p.valor) as valor from planejamento as p, subsetor as ss, setor as st where plano=31 and ss.id=p.subsetor and ss.setor=st.id group by st.nome, ss.nome 
 Execution Time:0.50334405899048

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.086161851882935

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.049122095108032

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.039872169494629

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.11589288711548

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0621337890625

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.010908842086792

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00065183639526367

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0052549839019775

SELECT *
FROM "naturezadespesa"
ORDER BY "id" 
 Execution Time:0.00092911720275879

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0033609867095947

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0012140274047852

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0018000602722168

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0018579959869385

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0012319087982178

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.016953945159912

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,8,7,10,3,9,4,5) ORDER BY datainicio DESC 
 Execution Time:0.064493894577026

select * from obm where id='8' limit 1 
 Execution Time:0.010437965393066

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.10753297805786

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00056004524230957

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00025200843811035

select * from reprovacao where plano='31'; 
 Execution Time:0.16659808158875

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0009620189666748

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00046896934509277

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00098490715026855

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.060454130172729

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00069880485534668

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.026017189025879

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00086498260498047

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00062298774719238

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.0020020008087158

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00084710121154785

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0005648136138916

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00086307525634766

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0013248920440674

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.019792079925537

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00074601173400879

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,8,7,10,3,9,4,5) ORDER BY datainicio DESC 
 Execution Time:0.0012378692626953

select * from obm where id='8' limit 1 
 Execution Time:0.00045180320739746

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00061297416687012

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00040292739868164

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00038290023803711

select * from reprovacao where plano='31'; 
 Execution Time:0.00040602684020996

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00053906440734863

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00033307075500488

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00059795379638672

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00094008445739746

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00045108795166016

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00067687034606934

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.0002739429473877

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00023603439331055

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00067710876464844

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0041530132293701

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0014159679412842

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00064706802368164

select * from reprovacao where plano='31'; 
 Execution Time:0.00094389915466309

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0014970302581787

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0011091232299805

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00099492073059082

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0015709400177002

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00066804885864258

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0010788440704346

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00039792060852051

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.0003960132598877

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.0010890960693359

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0016610622406006

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.000579833984375

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0002901554107666

select * from reprovacao where plano='31'; 
 Execution Time:0.00050687789916992

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00094890594482422

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0010659694671631

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.001291036605835

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0022270679473877

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00094008445739746

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0011160373687744

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00050592422485352

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00050210952758789

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.0010049343109131

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00042414665222168

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00039792060852051

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00036787986755371

select * from reprovacao where plano='31'; 
 Execution Time:0.00034284591674805

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0012071132659912

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004270076751709

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00042891502380371

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0006721019744873

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00039982795715332

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00090193748474121

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00030994415283203

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00026416778564453

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00046014785766602

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.002662181854248

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0016829967498779

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00051403045654297

select * from reprovacao where plano='31'; 
 Execution Time:0.00088810920715332

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00094318389892578

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00084114074707031

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00086379051208496

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0013899803161621

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.0005791187286377

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0010571479797363

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00043106079101562

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00036811828613281

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00084710121154785

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0017647743225098

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00084900856018066

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00034999847412109

select * from reprovacao where plano='31'; 
 Execution Time:0.00069618225097656

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0009300708770752

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00065708160400391

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00085186958312988

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0015838146209717

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00053691864013672

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0014140605926514

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.0011360645294189

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00033211708068848

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00096893310546875

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00052690505981445

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00036191940307617

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00031805038452148

select * from reprovacao where plano='31'; 
 Execution Time:0.00031518936157227

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0006411075592041

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0011849403381348

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.001054048538208

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00065207481384277

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00054097175598145

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00090408325195312

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.0003819465637207

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00037193298339844

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.0008540153503418

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00091695785522461

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00063180923461914

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00040602684020996

select * from reprovacao where plano='31'; 
 Execution Time:0.00052714347839355

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0010111331939697

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00082087516784668

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00055098533630371

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0014288425445557

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.0009760856628418

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0011138916015625

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00039911270141602

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00037693977355957

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00058603286743164

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0021381378173828

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0006098747253418

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0002439022064209

select * from reprovacao where plano='31'; 
 Execution Time:0.00043296813964844

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00082778930664062

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00048398971557617

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00076508522033691

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0012669563293457

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00046706199645996

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0019018650054932

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00050187110900879

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.0003049373626709

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.001054048538208

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00065302848815918

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00063109397888184

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00056290626525879

select * from reprovacao where plano='31'; 
 Execution Time:0.00047492980957031

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00099706649780273

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00056600570678711

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00068807601928711

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.001162052154541

select origemreceita, sum(valor) from planejamento where plano='31' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.000640869140625

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='31' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0010919570922852

select sum(valor) as total from planejamento where plano='31' and tipo=1 
 Execution Time:0.00046396255493164

select sum(valor) as total from planejamento where plano='31' and tipo=2 
 Execution Time:0.00046205520629883

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00081896781921387

