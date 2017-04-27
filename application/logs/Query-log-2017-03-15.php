SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.1093430519104

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00036001205444336

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00024700164794922

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00022315979003906

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00021505355834961

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00020599365234375

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.01165509223938

SELECT *
FROM "obm"
WHERE "id" =  11 
 Execution Time:0.00020503997802734

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00017309188842773

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.0002140998840332

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00019598007202148

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00018215179443359

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0001838207244873

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.12116408348083

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.12510299682617

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.051851034164429

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.31609606742859

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.021454095840454

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0012850761413574

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.206463098526

select * from obm where id='4' limit 1 
 Execution Time:0.090734004974365

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00058293342590332

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00055694580078125

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0022468566894531

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00041604042053223

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00025010108947754

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00053000450134277

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.57673501968384

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.11731100082397

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0019168853759766

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0014078617095947

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0004580020904541

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0019700527191162

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00070500373840332

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00090408325195312

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0012071132659912

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0009160041809082

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0017900466918945

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00035810470581055

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00032591819763184

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00199294090271

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.0013730525970459

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0018050670623779

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0012741088867188

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00094079971313477

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00070691108703613

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00034999847412109

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00031614303588867

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.001237154006958

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00045680999755859

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00061893463134766

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00055098533630371

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00063991546630859

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00077605247497559

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00032782554626465

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00029802322387695

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0012059211730957

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.0004889965057373

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.000640869140625

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00057101249694824

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00067520141601562

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0013980865478516

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00034904479980469

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0010049343109131

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0020160675048828

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.0007479190826416

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00098299980163574

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00098705291748047

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00088691711425781

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0030138492584229

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0010349750518799

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0014729499816895

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0014219284057617

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00085592269897461

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0023589134216309

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.001507043838501

select * from obm where id='4' limit 1 
 Execution Time:0.00042986869812012

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00042295455932617

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00025486946105957

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00030398368835449

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00029492378234863

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00024604797363281

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00026893615722656

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00046801567077637

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00041007995605469

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00051116943359375

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00030112266540527

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0002899169921875

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00027990341186523

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.0002589225769043

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00030994415283203

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00055885314941406

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00072693824768066

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0004119873046875

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0002589225769043

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00023889541625977

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0002892017364502

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00024795532226562

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028610229492188

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00038695335388184

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00041604042053223

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0007328987121582

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00063204765319824

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0004580020904541

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0021710395812988

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00084805488586426

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0010569095611572

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00095200538635254

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0011379718780518

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0011429786682129

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00055599212646484

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00045990943908691

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00078296661376953

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00036001205444336

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00064802169799805

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00050497055053711

select * from obm where id='4' limit 1 
 Execution Time:0.00037407875061035

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.075804948806763

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0004570484161377

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00027203559875488

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00046396255493164

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00031018257141113

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00036001205444336

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.11453199386597

select origemreceita, sum(valor) from planejamento where plano='36' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.094961881637573

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='36' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0020308494567871

select sum(valor) as total from planejamento where plano='36' and tipo=1 
 Execution Time:0.00068807601928711

select sum(valor) as total from planejamento where plano='36' and tipo=2 
 Execution Time:0.00063705444335938

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.087690114974976

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0011680126190186

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00086522102355957

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0010931491851807

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0013420581817627

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0006251335144043

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00078201293945312

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00088810920715332

select * from obm where id='3' limit 1 
 Execution Time:0.0004270076751709

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00047206878662109

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0002901554107666

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00022792816162109

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00030708312988281

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00031089782714844

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00027298927307129

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00034308433532715

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00041604042053223

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00055503845214844

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00043582916259766

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00039982795715332

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00073385238647461

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00042891502380371

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00091910362243652

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00037789344787598

select * from obm where id='3' limit 1 
 Execution Time:0.00033998489379883

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00045895576477051

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0003969669342041

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00046682357788086

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00076198577880859

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0006568431854248

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00098204612731934

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00049185752868652

select * from obm where id='3' limit 1 
 Execution Time:0.00031399726867676

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0009911060333252

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00046610832214355

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00040197372436523

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00082111358642578

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00050187110900879

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0011658668518066

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00052714347839355

select * from obm where id='3' limit 1 
 Execution Time:0.0002591609954834

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00056004524230957

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00035405158996582

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00036096572875977

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00099802017211914

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00071501731872559

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00047898292541504

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00031399726867676

select * from obm where id='3' limit 1 
 Execution Time:0.00023388862609863

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00044083595275879

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00032401084899902

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00038003921508789

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00033807754516602

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.0003049373626709

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041413307189941

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00037288665771484

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00040507316589355

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00050878524780273

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00040197372436523

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0004730224609375

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00042510032653809

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00039196014404297

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004580020904541

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00059890747070312

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00082707405090332

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00049781799316406

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00043320655822754

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00039410591125488

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00040507316589355

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00044822692871094

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00038909912109375

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00058412551879883

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0013890266418457

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00052714347839355

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00044012069702148

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00035595893859863

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0003809928894043

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00037288665771484

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00045514106750488

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00057005882263184

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00065898895263672

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0012850761413574

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00031304359436035

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00024795532226562

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0012118816375732

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00049304962158203

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0006110668182373

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00081992149353027

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00068497657775879

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00052690505981445

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00041985511779785

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00040912628173828

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00040197372436523

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00036406517028809

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00043416023254395

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00057601928710938

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00063490867614746

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00051712989807129

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0043039321899414

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00046181678771973

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00036811828613281

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.0003809928894043

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040817260742188

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00069808959960938

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00073099136352539

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00066113471984863

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00045299530029297

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00039410591125488

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00041913986206055

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00040698051452637

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004880428314209

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0019500255584717

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0010530948638916

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00042104721069336

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00030708312988281

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00027012825012207

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00032806396484375

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00031113624572754

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041913986206055

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00068497657775879

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0028800964355469

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00057101249694824

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00045609474182129

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00037288665771484

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00047111511230469

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00029420852661133

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00044798851013184

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00060200691223145

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00070309638977051

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00043296813964844

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00026988983154297

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0002598762512207

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00027704238891602

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00025796890258789

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00030899047851562

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0012190341949463

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00092697143554688

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00068807601928711

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00065994262695312

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0005490779876709

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00062108039855957

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00051093101501465

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00055098533630371

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00060510635375977

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00069403648376465

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00046706199645996

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00046205520629883

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00035595893859863

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00035595893859863

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00030922889709473

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00030994415283203

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00046896934509277

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00084304809570312

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00034499168395996

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0006258487701416

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00058078765869141

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00060009956359863

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.0005948543548584

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003511905670166

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00082778930664062

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0012748241424561

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0004730224609375

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00029587745666504

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00027585029602051

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00031685829162598

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00027799606323242

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040316581726074

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0007331371307373

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00077414512634277

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0018019676208496

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00077700614929199

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00040078163146973

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0020759105682373

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00050187110900879

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00066184997558594

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00084495544433594

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00067496299743652

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0031800270080566

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00056314468383789

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00045299530029297

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0023560523986816

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00049805641174316

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00050997734069824

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00054287910461426

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00056004524230957

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0013837814331055

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00030994415283203

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00024008750915527

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0013940334320068

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00053501129150391

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00063300132751465

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00077581405639648

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00061702728271484

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0010888576507568

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0010240077972412

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00044012069702148

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00040602684020996

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00038290023803711

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00042986869812012

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00052595138549805

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00060296058654785

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0003359317779541

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00023221969604492

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00022506713867188

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00024008750915527

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00023388862609863

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00025391578674316

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00050091743469238

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00098514556884766

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0027329921722412

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00074887275695801

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00099301338195801

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0011060237884521

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0008549690246582

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0020389556884766

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.0013461112976074

select * from obm where id='3' limit 1 
 Execution Time:0.00048089027404785

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00040698051452637

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00025796890258789

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0002739429473877

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00031399726867676

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00024700164794922

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00026392936706543

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00034499168395996

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00039196014404297

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00050711631774902

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00033307075500488

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00028705596923828

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00030088424682617

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00029182434082031

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00043916702270508

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00058507919311523

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00064802169799805

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0013589859008789

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0011029243469238

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00074911117553711

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0015449523925781

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00065398216247559

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0012238025665283

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.0010840892791748

select * from obm where id='3' limit 1 
 Execution Time:0.00076103210449219

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0004889965057373

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0003349781036377

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00030398368835449

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0003352165222168

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00032615661621094

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00043606758117676

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00040698051452637

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00057101249694824

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00040578842163086

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00026798248291016

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00026798248291016

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00026988983154297

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00025796890258789

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00030303001403809

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00038504600524902

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00063800811767578

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00056719779968262

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00043487548828125

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00039505958557129

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00039410591125488

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00036406517028809

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00039410591125488

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.001093864440918

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0010738372802734

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00042605400085449

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00029897689819336

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00025296211242676

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00026679039001465

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00044703483581543

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00045609474182129

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0006101131439209

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.001323938369751

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00070595741271973

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00028204917907715

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00034189224243164

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00028514862060547

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00023794174194336

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028681755065918

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00035405158996582

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00039410591125488

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00045680999755859

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00029611587524414

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00027608871459961

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00060200691223145

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.0005950927734375

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00051307678222656

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00078511238098145

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0009608268737793

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00041890144348145

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00029397010803223

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00023603439331055

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00045394897460938

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00025081634521484

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00038385391235352

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00029802322387695

select * from obm where id='3' limit 1 
 Execution Time:0.00020909309387207

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00045204162597656

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00036883354187012

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00032877922058105

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00027704238891602

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00024986267089844

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041007995605469

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0004279613494873

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00062990188598633

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00086212158203125

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0012640953063965

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0010890960693359

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0014891624450684

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00060796737670898

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0010180473327637

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00080585479736328

select * from obm where id='4' limit 1 
 Execution Time:0.00051188468933105

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00040984153747559

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00027894973754883

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00023794174194336

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00056982040405273

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00035381317138672

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00048589706420898

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0012350082397461

select origemreceita, sum(valor) from planejamento where plano='36' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00045108795166016

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='36' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00069594383239746

select sum(valor) as total from planejamento where plano='36' and tipo=1 
 Execution Time:0.00028586387634277

select sum(valor) as total from planejamento where plano='36' and tipo=2 
 Execution Time:0.00023913383483887

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00073599815368652

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00079202651977539

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0004580020904541

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00037312507629395

select * from reprovacao where plano='36'; 
 Execution Time:0.00055813789367676

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00052309036254883

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029587745666504

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00037288665771484

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.001291036605835

select origemreceita, sum(valor) from planejamento where plano='36' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00050020217895508

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='36' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00073599815368652

select sum(valor) as total from planejamento where plano='36' and tipo=1 
 Execution Time:0.00032687187194824

select sum(valor) as total from planejamento where plano='36' and tipo=2 
 Execution Time:0.00028181076049805

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00085902214050293

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00051116943359375

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0004420280456543

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0004279613494873

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00042915344238281

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00039005279541016

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00046181678771973

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00061917304992676

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00077104568481445

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00054097175598145

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00029993057250977

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00037193298339844

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00043797492980957

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00043606758117676

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041699409484863

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00050902366638184

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00053191184997559

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00033092498779297

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00022506713867188

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00023293495178223

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00025200843811035

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00023508071899414

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00025486946105957

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00035190582275391

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00038504600524902

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00041604042053223

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00027084350585938

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00058102607727051

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0021789073944092

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.0010030269622803

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0012388229370117

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0009920597076416

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00069904327392578

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0014579296112061

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00089693069458008

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0012290477752686

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0012168884277344

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00066709518432617

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0026810169219971

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.0012130737304688

select * from obm where id='4' limit 1 
 Execution Time:0.00076985359191895

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00075292587280273

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00042104721069336

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00038886070251465

select * from reprovacao where plano='36'; 
 Execution Time:0.00059294700622559

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00068879127502441

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00068092346191406

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00065493583679199

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0013279914855957

select origemreceita, sum(valor) from planejamento where plano='36' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00063514709472656

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='36' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00094485282897949

select sum(valor) as total from planejamento where plano='36' and tipo=1 
 Execution Time:0.00029897689819336

select sum(valor) as total from planejamento where plano='36' and tipo=2 
 Execution Time:0.00024795532226562

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.0010969638824463

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00043201446533203

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00023984909057617

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00024914741516113

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00030684471130371

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00030112266540527

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00034809112548828

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00063586235046387

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00049901008605957

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00072598457336426

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00041317939758301

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0003349781036377

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0005180835723877

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00043416023254395

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00038695335388184

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0004570484161377

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00051379203796387

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0011589527130127

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00077509880065918

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00047898292541504

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00058698654174805

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00050711631774902

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0005190372467041

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0011851787567139

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0009310245513916

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00076413154602051

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0005500316619873

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00053596496582031

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00058603286743164

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00024986267089844

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029802322387695

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00051617622375488

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00051999092102051

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0003809928894043

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00026392936706543

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00022411346435547

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00024199485778809

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00024080276489258

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0002591609954834

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00044918060302734

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00041103363037109

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0008399486541748

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00071406364440918

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00051617622375488

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00054216384887695

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00056004524230957

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00058794021606445

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00084686279296875

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00089597702026367

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00052499771118164

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.001079797744751

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00070309638977051

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00061583518981934

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00055503845214844

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00066018104553223

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00086307525634766

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0010287761688232

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00042390823364258

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00031685829162598

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00025010108947754

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00028705596923828

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00024199485778809

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00026679039001465

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00040912628173828

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0009150505065918

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00062203407287598

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0003969669342041

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0003659725189209

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0002748966217041

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00029206275939941

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003669261932373

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00048398971557617

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00047802925109863

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00046801567077637

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00032615661621094

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0003209114074707

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00035190582275391

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00033187866210938

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00039386749267578

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00042486190795898

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00046300888061523

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00061893463134766

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00038003921508789

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00058102607727051

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0011518001556396

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00049304962158203

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00071096420288086

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.0014958381652832

select * from obm where id='4' limit 1 
 Execution Time:0.00038385391235352

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00041580200195312

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00024795532226562

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00031495094299316

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00027799606323242

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00023889541625977

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0002589225769043

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0003960132598877

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00039196014404297

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00046896934509277

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00034785270690918

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00035500526428223

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00034189224243164

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00033402442932129

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003659725189209

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00044989585876465

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00050997734069824

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00034403800964355

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0002899169921875

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00058293342590332

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00060892105102539

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00043106079101562

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00052094459533691

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00079011917114258

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0011591911315918

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00065112113952637

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00068807601928711

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00068902969360352

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00068998336791992

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00037908554077148

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00046896934509277

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00090408325195312

select * from obm where id='4' limit 1 
 Execution Time:0.00051093101501465

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00085997581481934

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00065517425537109

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00063800811767578

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0005791187286377

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00050997734069824

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00056600570678711

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0013370513916016

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0012109279632568

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00045299530029297

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00039100646972656

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00037693977355957

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00057888031005859

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00054097175598145

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00045394897460938

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00057315826416016

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00068306922912598

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00060296058654785

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00048089027404785

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00041890144348145

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00076103210449219

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00030016899108887

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00059986114501953

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00049209594726562

select * from obm where id='4' limit 1 
 Execution Time:0.0002739429473877

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0018789768218994

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00066208839416504

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00089406967163086

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00098609924316406

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00053787231445312

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.001594066619873

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.0015859603881836

select * from obm where id='4' limit 1 
 Execution Time:0.00037884712219238

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00085091590881348

SELECT *
FROM "origemreceita" 
 Execution Time:0.00060486793518066

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00065803527832031

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00049901008605957

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00045299530029297

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00076889991760254

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00034189224243164

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00070595741271973

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00057792663574219

select * from obm where id='4' limit 1 
 Execution Time:0.00030899047851562

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00066995620727539

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003659725189209

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00085806846618652

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00052404403686523

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00032305717468262

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00031614303588867

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00035786628723145

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00033378601074219

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00033998489379883

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00030899047851562

SELECT *
FROM "obm"
WHERE "id" =  11 
 Execution Time:0.00030994415283203

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00033903121948242

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00029802322387695

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00030398368835449

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00028800964355469

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00027799606323242

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (1,10,8,3,9,4,11,5,7) and pj.dataprevista between '2017-01-01' and '2017-12-31' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.077181100845337

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (1,10,8,3,9,4,11,5,7) and pj.dataprevista between '2017-01-01' and '2017-12-31' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0018329620361328

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00050592422485352

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00036716461181641

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00081801414489746

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00049400329589844

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00035285949707031

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.0003049373626709

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00032806396484375

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00025701522827148

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00022315979003906

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00022101402282715

SELECT *
FROM "obm"
WHERE "id" =  11 
 Execution Time:0.00030398368835449

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00052595138549805

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00041890144348145

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00030183792114258

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00030398368835449

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00030708312988281

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (1,10,8,3,9,4,11,5,7) and pj.dataprevista between '2017-01-01' and '2017-12-31' and pn.status=4 and e.id='0' order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0031979084014893

select obm, sum(valor) from (select o.nome as obm, pj.valor as valor from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (1,10,8,3,9,4,11,5,7) and pj.dataprevista between '2017-01-01' and '2017-12-31' and pn.status=4 and e.id='0' order by o.nome asc, tipo asc, origemreceita asc) as resultado group by obm 
 Execution Time:0.001406192779541

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (1,10,8,3,9,4,11,5,7) and pj.dataprevista between '2017-01-01' and '2017-12-31' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0017869472503662

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0004730224609375

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0005490779876709

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0008399486541748

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00047588348388672

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00037002563476562

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00031709671020508

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
 Execution Time:0.0003349781036377

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00036406517028809

SELECT *
FROM "obm"
WHERE "id" =  11 
 Execution Time:0.00032615661621094

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.0003349781036377

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.0003509521484375

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00067996978759766

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00061798095703125

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0003669261932373

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (8) and pj.dataprevista between '2017-01-01' and '2017-12-31' and pn.status=4 and e.id='18' order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.024557113647461

select obm, sum(valor) from (select o.nome as obm, pj.valor as valor from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (8) and pj.dataprevista between '2017-01-01' and '2017-12-31' and pn.status=4 and e.id='18' order by o.nome asc, tipo asc, origemreceita asc) as resultado group by obm 
 Execution Time:0.0012810230255127

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (8) and pj.dataprevista between '2017-01-01' and '2017-12-31' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0013570785522461

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00052404403686523

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00034403800964355

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00079584121704102

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00051498413085938

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00038003921508789

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00033402442932129

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00030207633972168

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00037789344787598

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00033092498779297

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00035214424133301

SELECT *
FROM "obm"
WHERE "id" =  11 
 Execution Time:0.0003359317779541

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00029110908508301

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00030779838562012

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00030207633972168

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00030112266540527

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0003049373626709

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (4) and pj.dataprevista between '2017-01-01' and '2017-12-31' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0026328563690186

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (4) and pj.dataprevista between '2017-01-01' and '2017-12-31' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0016629695892334

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004570484161377

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00082015991210938

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00052094459533691

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00035190582275391

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00034093856811523

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00030684471130371

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00029492378234863

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00030899047851562

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00031805038452148

SELECT *
FROM "obm"
WHERE "id" =  11 
 Execution Time:0.0003199577331543

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00037407875061035

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00036716461181641

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00035214424133301

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00029301643371582

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00033688545227051

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (3,4,7) and pj.dataprevista between '2017-01-01' and '2017-12-31' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0038418769836426

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (3,4,7) and pj.dataprevista between '2017-01-01' and '2017-12-31' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0022189617156982

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00048303604125977

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040197372436523

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0010919570922852

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00049996376037598

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00032901763916016

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00032806396484375

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00030803680419922

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00032997131347656

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00029706954956055

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00031900405883789

SELECT *
FROM "obm"
WHERE "id" =  11 
 Execution Time:0.00030398368835449

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00030207633972168

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00029706954956055

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00030899047851562

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00022411346435547

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00030803680419922

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (3,4,7) and pj.dataprevista between '2017-01-01' and '2017-12-31' and pn.status=4 and e.id='18' order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0015950202941895

select obm, sum(valor) from (select o.nome as obm, pj.valor as valor from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (3,4,7) and pj.dataprevista between '2017-01-01' and '2017-12-31' and pn.status=4 and e.id='18' order by o.nome asc, tipo asc, origemreceita asc) as resultado group by obm 
 Execution Time:0.0017459392547607

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (3,4,7) and pj.dataprevista between '2017-01-01' and '2017-12-31' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0021159648895264

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00050187110900879

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00047707557678223

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00082802772521973

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00050497055053711

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.0003349781036377

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00029397010803223

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00029706954956055

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00029397010803223

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00031900405883789

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00034093856811523

SELECT *
FROM "obm"
WHERE "id" =  11 
 Execution Time:0.00030398368835449

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.0003209114074707

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00031614303588867

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00031781196594238

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00030899047851562

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0003509521484375

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (3,4,7) and pj.dataprevista between '2017-01-01' and '2017-12-31' and pn.status=4 and e.id='9' order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0027391910552979

select obm, sum(valor) from (select o.nome as obm, pj.valor as valor from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (3,4,7) and pj.dataprevista between '2017-01-01' and '2017-12-31' and pn.status=4 and e.id='9' order by o.nome asc, tipo asc, origemreceita asc) as resultado group by obm 
 Execution Time:0.0017120838165283

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (3,4,7) and pj.dataprevista between '2017-01-01' and '2017-12-31' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.00217604637146

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00049304962158203

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00043702125549316

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00060606002807617

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040197372436523

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00029087066650391

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00027012825012207

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00028586387634277

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00027894973754883

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00023508071899414

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00022006034851074

SELECT *
FROM "obm"
WHERE "id" =  11 
 Execution Time:0.0002138614654541

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00022196769714355

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00019311904907227

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.0003199577331543

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00028705596923828

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00027990341186523

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (9,11,5) and pj.dataprevista between '2017-01-01' and '2017-12-31' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0026271343231201

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (9,11,5) and pj.dataprevista between '2017-01-01' and '2017-12-31' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0020959377288818

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00043797492980957

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00046205520629883

select * from plano where status=4 order by datainicio DESC, datafim DESC 
 Execution Time:0.0005040168762207

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00031495094299316

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00074100494384766

select * from plano where status=4 and obm='3' order by datainicio DESC, datafim DESC 
 Execution Time:0.00043416023254395

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00030303001403809

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00058603286743164

select * from plano where status=4 and obm='8' order by datainicio DESC, datafim DESC 
 Execution Time:0.00059103965759277

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00039100646972656

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00039315223693848

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00041103363037109

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0002899169921875

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00024890899658203

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00040698051452637

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00026297569274902

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00040006637573242

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00028395652770996

select * from obm where id='4' limit 1 
 Execution Time:0.00020599365234375

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00042200088500977

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00028395652770996

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00026893615722656

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00040411949157715

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00031304359436035

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0003960132598877

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00036382675170898

select origemreceita, sum(valor) from planejamento where plano='36' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.0003049373626709

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='36' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00063014030456543

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='36' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00053191184997559

select sum(valor) as total from planejamento where plano='36' and tipo=1 
 Execution Time:0.00024294853210449

select sum(valor) as total from planejamento where plano='36' and tipo=2 
 Execution Time:0.00022792816162109

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.078524112701416

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00077605247497559

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0010089874267578

SELECT *
FROM "usuario" 
 Execution Time:0.0006248950958252

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0005800724029541

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00047206878662109

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00039887428283691

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00069689750671387

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00052094459533691

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00067901611328125

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00051307678222656

select * from obm where id='4' limit 1 
 Execution Time:0.0003809928894043

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00041103363037109

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00026392936706543

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00024199485778809

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00026178359985352

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00024890899658203

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0002892017364502

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0003669261932373

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00054597854614258

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00054502487182617

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00046682357788086

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00044584274291992

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00086712837219238

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00046300888061523

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00073409080505371

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00049996376037598

select * from obm where id='4' limit 1 
 Execution Time:0.00027704238891602

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00041794776916504

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00029397010803223

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00025296211242676

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00029301643371582

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.0002589225769043

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00032401084899902

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00080299377441406

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00068306922912598

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00056886672973633

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00058197975158691

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00043106079101562

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00040292739868164

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00029611587524414

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00034999847412109

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00044798851013184

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00052690505981445

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00092005729675293

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0003960132598877

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00058603286743164

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00085282325744629

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00067687034606934

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00085711479187012

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.0007169246673584

select * from obm where id='4' limit 1 
 Execution Time:0.00038385391235352

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00044989585876465

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.0003209114074707

SELECT *
FROM "plano"
WHERE "id" =  '36' 
 Execution Time:0.00029397010803223

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0003659725189209

select nivel from acesso where usuario='2' and modulo='21'  and obm='4' 
 Execution Time:0.00033807754516602

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003049373626709

select * from planejamento where plano='36' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00039291381835938

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00047206878662109

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00053787231445312

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00031399726867676

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.00046610832214355

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.00040984153747559

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00052714347839355

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00061893463134766

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00036716461181641

SELECT *
FROM "obm" 
 Execution Time:0.00027990341186523

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00045490264892578

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00030708312988281

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00031614303588867

SELECT *
FROM "usuario" 
 Execution Time:0.00024104118347168

select id from modulo where nome='controledeacesso' order by id asc limit 1 
 Execution Time:0.00046610832214355

select * from acesso where usuario='2' and modulo='17' and nivel>0 
 Execution Time:0.00041794776916504

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00037097930908203

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00046396255493164

select * from obm where id in (1,4,5,3,9,7,8,10) 
 Execution Time:0.00031304359436035

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00053811073303223

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00032305717468262

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00030303001403809

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.013978004455566

select id from modulo where nome='controledeacesso' order by id asc limit 1 
 Execution Time:0.0003809928894043

select * from acesso where usuario='2' and modulo='17' and nivel>0 
 Execution Time:0.00035881996154785

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00040888786315918

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.0002589225769043

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029706954956055

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00051712989807129

select * from obm where id in (1,4,5,3,9,7,8,10) 
 Execution Time:0.00026917457580566

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00046181678771973

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00076389312744141

select * from acesso where usuario='2' and obm='9' 
 Execution Time:0.00048613548278809

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00046992301940918

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00047612190246582

select id from modulo where nome='controledeacesso' order by id asc limit 1 
 Execution Time:0.00047588348388672

select * from acesso where usuario='2' and modulo='17' and nivel>0 
 Execution Time:0.00042605400085449

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00033187866210938

SELECT *
FROM "obm"
WHERE "id" =  '1' 
 Execution Time:0.00029778480529785

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00039792060852051

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00047612190246582

select * from obm where id in (1,4,5,3,9,7,8,10) 
 Execution Time:0.00034618377685547

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00036311149597168

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00028800964355469

select * from acesso where usuario='2' and obm='1' 
 Execution Time:0.00027608871459961

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00027298927307129

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00027704238891602

select id from modulo where nome='controledeacesso' order by id asc limit 1 
 Execution Time:0.0005338191986084

select * from acesso where usuario='2' and modulo='17' and nivel>0 
 Execution Time:0.00057792663574219

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00091695785522461

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00036096572875977

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004270076751709

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.0007169246673584

select * from obm where id in (1,4,5,3,9,7,8,10) 
 Execution Time:0.0003972053527832

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00067782402038574

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00099396705627441

select * from acesso where usuario='2' and obm='9' 
 Execution Time:0.00048708915710449

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00046205520629883

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00047087669372559

select id from modulo where nome='controledeacesso' order by id asc limit 1 
 Execution Time:0.00040102005004883

select * from acesso where usuario='2' and modulo='17' and nivel>0 
 Execution Time:0.00032401084899902

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00026178359985352

SELECT *
FROM "obm"
WHERE "id" =  '1' 
 Execution Time:0.00022482872009277

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00026583671569824

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.0003960132598877

select * from obm where id in (1,4,5,3,9,7,8,10) 
 Execution Time:0.00025701522827148

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00029301643371582

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00043010711669922

select * from acesso where usuario='2' and obm='1' 
 Execution Time:0.00039291381835938

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00027894973754883

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00027084350585938

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00046205520629883

SELECT *
FROM "origemreceita" 
 Execution Time:0.00029897689819336

SELECT *
FROM "tarefa"
WHERE "usuario" =  '2'
ORDER BY "data_prevista" asc 
 Execution Time:0.0027849674224854

SELECT *
FROM "tarefa"
WHERE "usuario" =  '2'
ORDER BY "data_prevista" asc 
 Execution Time:0.00060296058654785

SELECT *
FROM "tarefa"
WHERE "usuario" =  '2'
ORDER BY "data_prevista" asc 
 Execution Time:0.00038003921508789

SELECT *
FROM "tarefa"
WHERE "usuario" =  '2'
ORDER BY "data_prevista" asc 
 Execution Time:0.00058817863464355

SELECT *
FROM "tarefa"
WHERE "usuario" =  '2'
ORDER BY "data_prevista" asc 
 Execution Time:0.0022640228271484

SELECT *
FROM "tarefa"
WHERE "usuario" =  '2'
ORDER BY "data_prevista" asc 
 Execution Time:0.00051307678222656

SELECT *
FROM "tarefa"
WHERE "usuario" =  '2'
ORDER BY "data_prevista" asc 
 Execution Time:0.00047397613525391

SELECT *
FROM "tarefa"
WHERE "usuario" =  '2'
ORDER BY "data_prevista" asc 
 Execution Time:0.00043010711669922

SELECT *
FROM "tarefa"
WHERE "usuario" =  '2'
ORDER BY "data_prevista" asc 
 Execution Time:0.00045299530029297

SELECT *
FROM "tarefa"
WHERE "usuario" =  '2'
ORDER BY "data_prevista" asc 
 Execution Time:0.0004429817199707

SELECT *
FROM "tarefa"
WHERE "usuario" =  '2'
ORDER BY "data_prevista" asc 
 Execution Time:0.00040102005004883

SELECT *
FROM "tarefa"
WHERE "usuario" =  '2'
ORDER BY "data_prevista" asc 
 Execution Time:0.00046014785766602

SELECT *
FROM "tarefa"
WHERE "usuario" =  '2'
ORDER BY "data_prevista" asc 
 Execution Time:0.0019848346710205

SELECT *
FROM "tarefa"
WHERE "usuario" =  '2'
ORDER BY "data_prevista" asc 
 Execution Time:0.0005340576171875

SELECT *
FROM "tarefa"
WHERE "usuario" =  '2'
ORDER BY "data_prevista" asc 
 Execution Time:0.00050997734069824

SELECT *
FROM "tarefa"
WHERE "usuario" =  '2'
ORDER BY "data_prevista" asc 
 Execution Time:0.00047898292541504

SELECT *
FROM "tarefa"
WHERE "usuario" =  '2'
ORDER BY "data_prevista" asc 
 Execution Time:0.00037288665771484

SELECT *
FROM "tarefa"
WHERE "usuario" =  '2'
ORDER BY "data_prevista" asc 
 Execution Time:0.0004730224609375

SELECT *
FROM "tarefa"
WHERE "usuario" =  '2'
ORDER BY "data_prevista" asc 
 Execution Time:0.0022299289703369

SELECT *
FROM "tarefa"
WHERE "usuario" =  '2'
ORDER BY "data_prevista" asc 
 Execution Time:0.00046682357788086

SELECT *
FROM "tarefa"
WHERE "usuario" =  '2'
ORDER BY "data_prevista" asc 
 Execution Time:0.00038790702819824

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0016200542449951

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00075411796569824

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00045108795166016

SELECT *
FROM "usuario" 
 Execution Time:0.00027203559875488

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00053000450134277

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040721893310547

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00035691261291504

SELECT *
FROM "usuario" 
 Execution Time:0.00057291984558105

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00044703483581543

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00074195861816406

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040507316589355

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00054407119750977

SELECT *
FROM "usuario" 
 Execution Time:0.0003511905670166

SELECT *
FROM "tarefa"
WHERE "usuario" =  '6'
ORDER BY "data_prevista" asc 
 Execution Time:0.00053596496582031

SELECT *
FROM "tarefa"
WHERE "usuario" =  '6'
ORDER BY "data_prevista" asc 
 Execution Time:0.00042414665222168

SELECT *
FROM "tarefa"
WHERE "usuario" =  '6'
ORDER BY "data_prevista" asc 
 Execution Time:0.00031304359436035

SELECT *
FROM "tarefa"
WHERE "usuario" =  '6'
ORDER BY "data_prevista" asc 
 Execution Time:0.0003812313079834

SELECT *
FROM "tarefa"
WHERE "usuario" =  '6'
ORDER BY "data_prevista" asc 
 Execution Time:0.00041794776916504

SELECT *
FROM "tarefa"
WHERE "usuario" =  '6'
ORDER BY "data_prevista" asc 
 Execution Time:0.00085282325744629

SELECT *
FROM "tarefa"
WHERE "usuario" =  '6'
ORDER BY "data_prevista" asc 
 Execution Time:0.00050806999206543

SELECT *
FROM "tarefa"
WHERE "usuario" =  '6'
ORDER BY "data_prevista" asc 
 Execution Time:0.00047802925109863

SELECT *
FROM "tarefa"
WHERE "usuario" =  '6'
ORDER BY "data_prevista" asc 
 Execution Time:0.00071120262145996

SELECT *
FROM "tarefa"
WHERE "usuario" =  '6'
ORDER BY "data_prevista" asc 
 Execution Time:0.00044608116149902

SELECT *
FROM "tarefa"
WHERE "usuario" =  '6'
ORDER BY "data_prevista" asc 
 Execution Time:0.00049114227294922

SELECT *
FROM "tarefa"
WHERE "usuario" =  '6'
ORDER BY "data_prevista" asc 
 Execution Time:0.00063490867614746

SELECT *
FROM "tarefa"
WHERE "usuario" =  '6'
ORDER BY "data_prevista" asc 
 Execution Time:0.00098800659179688

SELECT *
FROM "tarefa"
WHERE "usuario" =  '6'
ORDER BY "data_prevista" asc 
 Execution Time:0.00076794624328613

SELECT *
FROM "tarefa"
WHERE "usuario" =  '6'
ORDER BY "data_prevista" asc 
 Execution Time:0.00042390823364258

SELECT *
FROM "tarefa"
WHERE "usuario" =  '6'
ORDER BY "data_prevista" asc 
 Execution Time:0.0019090175628662

SELECT *
FROM "tarefa"
WHERE "usuario" =  '6'
ORDER BY "data_prevista" asc 
 Execution Time:0.00057816505432129

SELECT *
FROM "tarefa"
WHERE "usuario" =  '6'
ORDER BY "data_prevista" asc 
 Execution Time:0.00057387351989746

SELECT *
FROM "tarefa"
WHERE "usuario" =  '6'
ORDER BY "data_prevista" asc 
 Execution Time:0.00060391426086426

SELECT *
FROM "tarefa"
WHERE "id" =  '5' 
 Execution Time:0.00046706199645996

SELECT *
FROM "tarefa"
WHERE "usuario" =  '6'
ORDER BY "data_prevista" asc 
 Execution Time:0.0003960132598877

SELECT *
FROM "tarefa"
WHERE "usuario" =  '6'
ORDER BY "data_prevista" asc 
 Execution Time:0.00042295455932617

SELECT *
FROM "tarefa"
WHERE "usuario" =  '6'
ORDER BY "data_prevista" asc 
 Execution Time:0.00052094459533691

SELECT *
FROM "tarefa"
WHERE "usuario" =  '6'
ORDER BY "data_prevista" asc 
 Execution Time:0.00037503242492676

SELECT *
FROM "tarefa"
WHERE "usuario" =  '6'
ORDER BY "data_prevista" asc 
 Execution Time:0.00053906440734863

SELECT *
FROM "tarefa"
WHERE "usuario" =  '6'
ORDER BY "data_prevista" asc 
 Execution Time:0.00054192543029785

SELECT *
FROM "tarefa"
WHERE "usuario" =  '6'
ORDER BY "data_prevista" asc 
 Execution Time:0.0003361701965332

SELECT *
FROM "tarefa"
WHERE "usuario" =  '6'
ORDER BY "data_prevista" asc, "data_conclusao" asc 
 Execution Time:0.002018928527832

SELECT *
FROM "tarefa"
WHERE "usuario" =  '6'
ORDER BY "data_conclusao" asc, "data_prevista" asc 
 Execution Time:0.00053000450134277

SELECT *
FROM "tarefa"
WHERE "usuario" =  '6'
ORDER BY "data_conclusao" desc, "data_prevista" asc 
 Execution Time:0.00046706199645996

SELECT *
FROM "tarefa"
WHERE "usuario" =  '6'
ORDER BY "data_conclusao" desc, "data_prevista" asc 
 Execution Time:0.0004580020904541

SELECT *
FROM "tarefa"
WHERE "usuario" =  '6'
ORDER BY "data_conclusao" desc, "data_prevista" asc 
 Execution Time:0.00066995620727539

select * from tarefa where usuario='6' and status<>3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00095701217651367

select * from tarefa where usuario='6' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00057888031005859

select * from tarefa where usuario='6' and status<>3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00053596496582031

select * from tarefa where usuario='6' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00031208992004395

select * from tarefa where usuario='6' and status<>3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00070786476135254

select * from tarefa where usuario='6' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00047588348388672

select * from tarefa where usuario='6' and status<>3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.0004730224609375

select * from tarefa where usuario='6' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00049614906311035

select * from tarefa where usuario='6' and status<>3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.0006868839263916

select * from tarefa where usuario='6' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00047206878662109

select * from tarefa where usuario='6' and status<>3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.0005490779876709

select * from tarefa where usuario='6' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00026798248291016

select * from tarefa where usuario='6' and status<>3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00043010711669922

select * from tarefa where usuario='6' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00028300285339355

select * from tarefa where usuario='6' and status<>3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00042104721069336

select * from tarefa where usuario='6' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00031304359436035

select * from tarefa where usuario='6' and status<>3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00051689147949219

select * from tarefa where usuario='6' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00028109550476074

select * from tarefa where usuario='6' and status<>3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00043511390686035

select * from tarefa where usuario='6' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00026297569274902

select * from tarefa where usuario='6' and status<>3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.0007481575012207

select * from tarefa where usuario='6' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00081205368041992

select * from tarefa where usuario='6' and status<>3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.0015478134155273

select * from tarefa where usuario='6' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00073003768920898

select * from tarefa where usuario='6' and status<>3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00043702125549316

select * from tarefa where usuario='6' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.0003201961517334

select * from tarefa where usuario='6' and status<>3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00048708915710449

select * from tarefa where usuario='6' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.0012080669403076

select * from tarefa where usuario='6' and status<>3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.0010387897491455

select * from tarefa where usuario='6' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00068092346191406

select * from tarefa where usuario='6' and status<>3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00081110000610352

select * from tarefa where usuario='6' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00041294097900391

select * from tarefa where usuario='6' and status<>3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.0030028820037842

select * from tarefa where usuario='6' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00054311752319336

select * from tarefa where usuario='6' and status<>3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00054383277893066

select * from tarefa where usuario='6' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00041103363037109

select * from tarefa where usuario='6' and status<>3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00097990036010742

select * from tarefa where usuario='6' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00043296813964844

select * from tarefa where usuario='6' and status<>3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00059294700622559

select * from tarefa where usuario='6' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.0004880428314209

select * from tarefa where usuario='6' and status<>3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00090193748474121

select * from tarefa where usuario='6' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00054597854614258

select * from tarefa where usuario='6' and status<>3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00055694580078125

select * from tarefa where usuario='6' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00043988227844238

select * from tarefa where usuario='6' and status<>3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.0027000904083252

select * from tarefa where usuario='6' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00056886672973633

select * from tarefa where usuario='6' and status<>3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00040197372436523

select * from tarefa where usuario='6' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00027108192443848

select * from tarefa where usuario='6' and status<>3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.0017580986022949

select * from tarefa where usuario='6' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00057101249694824

select * from tarefa where usuario='6' and status<>3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00056815147399902

select * from tarefa where usuario='6' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00040197372436523

select * from tarefa where usuario='6' and status<>3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00055384635925293

select * from tarefa where usuario='6' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00043916702270508

select * from tarefa where usuario='6' and status<>3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00081205368041992

select * from tarefa where usuario='6' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00066900253295898

select * from tarefa where usuario='6' and status<>3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.0014171600341797

select * from tarefa where usuario='6' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00031590461730957

select * from tarefa where usuario='6' and status<>3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00072193145751953

select * from tarefa where usuario='6' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00046110153198242

select * from tarefa where usuario='6' and status<>3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00042200088500977

select * from tarefa where usuario='6' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00027298927307129

select * from tarefa where usuario='6' and status<>3 order by data_conclusao desc, data_prevista asc, status desc 
 Execution Time:0.00053095817565918

select * from tarefa where usuario='6' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00036311149597168

select * from tarefa where usuario='6' and status<>3 order by data_conclusao desc, data_prevista asc, status asc 
 Execution Time:0.00067496299743652

select * from tarefa where usuario='6' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00038003921508789

select * from tarefa where usuario='6' and status<>3 order by data_conclusao desc, data_prevista asc, status asc 
 Execution Time:0.00049400329589844

select * from tarefa where usuario='6' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00031185150146484

select * from tarefa where usuario='6' and status<>3 order by status desc, data_prevista asc 
 Execution Time:0.00088596343994141

select * from tarefa where usuario='6' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00047492980957031

select * from tarefa where usuario='2' and status<>3 order by status desc, data_prevista asc 
 Execution Time:0.00044417381286621

select * from tarefa where usuario='2' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00025510787963867

select * from tarefa where usuario='2' and status<>3 order by status desc, data_prevista asc 
 Execution Time:0.0012609958648682

select * from tarefa where usuario='2' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00050091743469238

select * from tarefa where usuario='2' and status<>3 order by status desc, data_prevista asc 
 Execution Time:0.00084495544433594

select * from tarefa where usuario='2' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.0005340576171875

select * from tarefa where usuario='2' and status<>3 order by status desc, data_prevista asc 
 Execution Time:0.00063490867614746

select * from tarefa where usuario='2' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00028085708618164

select * from tarefa where usuario='2' and status<>3 order by status desc, data_prevista asc 
 Execution Time:0.00050520896911621

select * from tarefa where usuario='2' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00023794174194336

select * from tarefa where usuario='2' and status<>3 order by status desc, data_prevista asc 
 Execution Time:0.0016851425170898

select * from tarefa where usuario='2' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00044798851013184

select * from tarefa where usuario='2' and status<>3 order by status desc, data_prevista asc 
 Execution Time:0.00046896934509277

select * from tarefa where usuario='2' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.0004580020904541

select * from tarefa where usuario='2' and status<>3 order by status desc, data_prevista asc 
 Execution Time:0.00054788589477539

select * from tarefa where usuario='2' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00046801567077637

select * from tarefa where usuario='2' and status<>3 order by status desc, data_prevista asc 
 Execution Time:0.00049400329589844

select * from tarefa where usuario='2' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00037789344787598

select * from tarefa where usuario='2' and status<>3 order by status desc, data_prevista asc 
 Execution Time:0.0005030632019043

select * from tarefa where usuario='2' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00038695335388184

select * from tarefa where usuario='2' and status<>3 order by status desc, data_prevista asc 
 Execution Time:0.00053501129150391

select * from tarefa where usuario='2' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00039386749267578

select * from tarefa where usuario='2' and status<>3 order by status desc, data_prevista asc 
 Execution Time:0.0022921562194824

select * from tarefa where usuario='2' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00056314468383789

select * from tarefa where usuario='2' and status<>3 order by status desc, data_prevista asc 
 Execution Time:0.00050497055053711

select * from tarefa where usuario='2' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00035595893859863

select * from tarefa where usuario='2' and status<>3 order by status desc, data_prevista asc 
 Execution Time:0.0010471343994141

select * from tarefa where usuario='2' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00036311149597168

select * from tarefa where usuario='2' and status<>3 order by status desc, data_prevista asc 
 Execution Time:0.00063610076904297

select * from tarefa where usuario='2' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00029110908508301

select * from tarefa where usuario='2' and status<>3 order by status desc, data_prevista asc 
 Execution Time:0.00090789794921875

select * from tarefa where usuario='2' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00043487548828125

select * from tarefa where usuario='2' and status<>3 order by status desc, data_prevista asc 
 Execution Time:0.00040388107299805

select * from tarefa where usuario='2' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00068902969360352

select * from tarefa where usuario='2' and status<>3 order by status desc, data_prevista asc 
 Execution Time:0.00043487548828125

select * from tarefa where usuario='2' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00030994415283203

select * from tarefa where usuario='2' and status<>3 order by status desc, data_prevista asc 
 Execution Time:0.00043201446533203

select * from tarefa where usuario='2' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00027298927307129

select * from tarefa where usuario='2' and status<>3 order by status desc, data_prevista asc 
 Execution Time:0.00078296661376953

select * from tarefa where usuario='2' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00024890899658203

select * from tarefa where usuario='2' and status<>3 order by status desc, data_prevista asc 
 Execution Time:0.00040912628173828

select * from tarefa where usuario='2' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.0003199577331543

select * from tarefa where usuario='2' and status<>3 order by status desc, data_prevista asc 
 Execution Time:0.00052905082702637

select * from tarefa where usuario='2' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00041699409484863

select * from tarefa where usuario='2' and status<>3 order by status desc, data_prevista asc 
 Execution Time:0.00055098533630371

select * from tarefa where usuario='2' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00035715103149414

select * from tarefa where usuario='2' and status<>3 order by status desc, data_prevista asc 
 Execution Time:0.00086092948913574

select * from tarefa where usuario='2' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00042200088500977

select * from tarefa where usuario='2' and status<>3 order by status desc, data_prevista asc 
 Execution Time:0.00070905685424805

select * from tarefa where usuario='2' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00049209594726562

select * from tarefa where usuario='2' and status<>3 order by status desc, data_prevista asc 
 Execution Time:0.00094103813171387

select * from tarefa where usuario='2' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00038981437683105

select * from tarefa where usuario='2' and status<>3 order by status desc, data_prevista asc 
 Execution Time:0.00038504600524902

select * from tarefa where usuario='2' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00025510787963867

select * from tarefa where usuario='2' and status<>3 order by status desc, data_prevista asc 
 Execution Time:0.00058698654174805

select * from tarefa where usuario='2' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.0004119873046875

select * from tarefa where usuario='2' and status<>3 order by status desc, data_prevista asc 
 Execution Time:0.00058913230895996

select * from tarefa where usuario='2' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00047898292541504

select * from tarefa where usuario='2' and status<>3 order by status desc, data_prevista asc 
 Execution Time:0.00037598609924316

select * from tarefa where usuario='2' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00035500526428223

select * from tarefa where usuario='2' and status<>3 order by status desc, data_prevista asc 
 Execution Time:0.0004119873046875

select * from tarefa where usuario='2' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00034880638122559

select * from tarefa where usuario='2' and status<>3 order by status desc, data_prevista asc 
 Execution Time:0.00037813186645508

select * from tarefa where usuario='2' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00025200843811035

select * from tarefa where usuario='2' and status<>3 order by status desc, data_prevista asc 
 Execution Time:0.00043797492980957

select * from tarefa where usuario='2' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00026702880859375

select * from tarefa where usuario='2' and status<>3 order by status desc, data_prevista asc 
 Execution Time:0.00041389465332031

select * from tarefa where usuario='2' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00028586387634277

select * from tarefa where usuario='2' and status<>3 order by status desc, data_prevista asc 
 Execution Time:0.00038003921508789

select * from tarefa where usuario='2' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00046396255493164

select * from tarefa where usuario='2' and status<>3 order by status desc, data_prevista asc 
 Execution Time:0.0014119148254395

select * from tarefa where usuario='2' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00043702125549316

select * from tarefa where usuario='2' and status<>3 order by status desc, data_prevista asc 
 Execution Time:0.00073981285095215

select * from tarefa where usuario='2' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00058484077453613

select * from tarefa where usuario='2' and status<>3 order by status desc, data_prevista asc 
 Execution Time:0.00095319747924805

select * from tarefa where usuario='2' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00080084800720215

select * from tarefa where usuario='2' and status<>3 order by status desc, data_prevista asc 
 Execution Time:0.00040102005004883

select * from tarefa where usuario='2' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00027084350585938

select * from tarefa where usuario='2' and status<>3 order by status desc, data_prevista asc 
 Execution Time:0.00059199333190918

select * from tarefa where usuario='2' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00045514106750488

select * from tarefa where usuario='2' and status<>3 order by status desc, data_prevista asc 
 Execution Time:0.00040793418884277

select * from tarefa where usuario='2' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00028085708618164

select * from tarefa where usuario='2' and status<>3 order by status desc, data_prevista asc 
 Execution Time:0.0004429817199707

select * from tarefa where usuario='2' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00027203559875488

