SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.049803972244263

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0027759075164795

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00053095817565918

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.0004119873046875

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00040197372436523

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00043392181396484

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0013728141784668

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.0005040168762207

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00044894218444824

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.0004880428314209

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0003819465637207

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00033307075500488

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00031304359436035

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (4,8,5,7) and pj.dataprevista between '2016-08-01' and '2017-01-30' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.20527601242065

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.03242301940918

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004420280456543

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0038959980010986

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00057816505432129

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00055408477783203

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00095796585083008

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00036191940307617

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00057291984558105

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00038385391235352

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00031900405883789

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00029993057250977

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00028085708618164

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00028109550476074

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00033307075500488

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00030207633972168

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (4,8,5,7) and pj.dataprevista between '2016-08-01' and '2017-01-31' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0020968914031982

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00048303604125977

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00037598609924316

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00043201446533203

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00037813186645508

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00043988227844238

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00033998489379883

select * from plano where status=4 order by datainicio DESC, datafim DESC 
 Execution Time:0.0012340545654297

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00032186508178711

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0009000301361084

select * from plano where status=4 and obm='10' order by datainicio DESC, datafim DESC 
 Execution Time:0.0027091503143311

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0013191699981689

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0010230541229248

select * from plano where status=4 and obm='3' order by datainicio DESC, datafim DESC 
 Execution Time:0.00060796737670898

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00055098533630371

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00047421455383301

select * from plano where status=4 and obm='9' order by datainicio DESC, datafim DESC 
 Execution Time:0.00040292739868164

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00030398368835449

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00027799606323242

select * from plano where status=4 and obm='4' order by datainicio DESC, datafim DESC 
 Execution Time:0.00042080879211426

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00033211708068848

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00027918815612793

select * from plano where status=4 and obm='8' order by datainicio DESC, datafim DESC 
 Execution Time:0.00039792060852051

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029110908508301

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0002901554107666

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0005800724029541

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.044121026992798

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.04030704498291

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.019520998001099

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00061607360839844

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00090599060058594

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00064802169799805

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00054097175598145

SELECT *
FROM "obm"
WHERE "id" =  '5' 
 Execution Time:0.00054001808166504

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00052404403686523

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00078701972961426

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00066781044006348

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00059986114501953

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00059700012207031

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00043010711669922

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00040888786315918

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00034904479980469

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0003209114074707

SELECT *
FROM "obm"
WHERE "id" =  '5' 
 Execution Time:0.00039005279541016

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00037097930908203

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0021209716796875

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0015661716461182

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00082993507385254

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00040292739868164

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00059008598327637

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0010619163513184

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.0003209114074707

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00026988983154297

SELECT *
FROM "obm"
WHERE "id" =  '5' 
 Execution Time:0.00026988983154297

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00025510787963867

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0020749568939209

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.000762939453125

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00096797943115234

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00054597854614258

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00054311752319336

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00070691108703613

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00036406517028809

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00029706954956055

SELECT *
FROM "obm"
WHERE "id" =  '5' 
 Execution Time:0.00029706954956055

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00022387504577637

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00049185752868652

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00038504600524902

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00040888786315918

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00047898292541504

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00045204162597656

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00042891502380371

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00027680397033691

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00023913383483887

SELECT *
FROM "obm"
WHERE "id" =  '5' 
 Execution Time:0.00019001960754395

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00022697448730469

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00023102760314941

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0002291202545166

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00018596649169922

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00019598007202148

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00016880035400391

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00016498565673828

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00016617774963379

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00015807151794434

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00016498565673828

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00016403198242188

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00016403198242188

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00016307830810547

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00065994262695312

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0006108283996582

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0003969669342041

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00036191940307617

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00050020217895508

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0011961460113525

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00047588348388672

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0004730224609375

SELECT *
FROM "obm"
WHERE "id" =  '5' 
 Execution Time:0.00061511993408203

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00050497055053711

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.0004119873046875

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0003049373626709

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00021600723266602

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00019693374633789

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.0001978874206543

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00018715858459473

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.0001990795135498

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00018310546875

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00018215179443359

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00018191337585449

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00092101097106934

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00067710876464844

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00059700012207031

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00035691261291504

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00070786476135254

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00060677528381348

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00027298927307129

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00023102760314941

SELECT *
FROM "obm"
WHERE "id" =  '5' 
 Execution Time:0.00026297569274902

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00028109550476074

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00028085708618164

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00031399726867676

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00027608871459961

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00029110908508301

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00030398368835449

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00028085708618164

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00026297569274902

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0002140998840332

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0016939640045166

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00079989433288574

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00069284439086914

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00073385238647461

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00071406364440918

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00079011917114258

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00057697296142578

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00054192543029785

SELECT *
FROM "obm"
WHERE "id" =  '5' 
 Execution Time:0.00040817260742188

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00053191184997559

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00053000450134277

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00044798851013184

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00061392784118652

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00059700012207031

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00040292739868164

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00039815902709961

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00037384033203125

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00027298927307129

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00023388862609863

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00023198127746582

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00024104118347168

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00027298927307129

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00023007392883301

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00023412704467773

SELECT *
FROM "obm"
WHERE "id" =  '5' 
 Execution Time:0.00047087669372559

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00034594535827637

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00032997131347656

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00032401084899902

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00032210350036621

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00031900405883789

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0013799667358398

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00037503242492676

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00028014183044434

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00026202201843262

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00026106834411621

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00029206275939941

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00021505355834961

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00020098686218262

SELECT *
FROM "obm"
WHERE "id" =  '5' 
 Execution Time:0.00020098686218262

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00019598007202148

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00021100044250488

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00019288063049316

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00058579444885254

SELECT *
FROM "plano"
WHERE "id" =  '23' 
 Execution Time:0.00036215782165527

SELECT *
FROM "plano"
WHERE "id" =  '23' 
 Execution Time:0.00024986267089844

SELECT *
FROM "plano"
WHERE "id" =  '23' 
 Execution Time:0.00023412704467773

select * from reprovacao where plano='23'; 
 Execution Time:0.00024604797363281

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00059700012207031

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029516220092773

select * from planejamento where plano='23' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00032186508178711

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.038335084915161

select origemreceita, sum(valor) from planejamento where plano='23' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00081992149353027

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='23' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00084590911865234

select sum(valor) as total from planejamento where plano='23' and tipo=1 
 Execution Time:0.0003359317779541

select sum(valor) as total from planejamento where plano='23' and tipo=2 
 Execution Time:0.00024890899658203

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00056099891662598

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00052213668823242

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00055384635925293

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00052499771118164

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00036907196044922

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00066113471984863

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00031495094299316

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00031900405883789

SELECT *
FROM "obm"
WHERE "id" =  '5' 
 Execution Time:0.00030279159545898

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00029587745666504

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00029611587524414

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00029301643371582

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0017678737640381

SELECT *
FROM "plano"
WHERE "id" =  '23' 
 Execution Time:0.0006251335144043

SELECT *
FROM "plano"
WHERE "id" =  '23' 
 Execution Time:0.0002741813659668

SELECT *
FROM "plano"
WHERE "id" =  '23' 
 Execution Time:0.00026917457580566

select * from reprovacao where plano='23'; 
 Execution Time:0.0014121532440186

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00095582008361816

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00050783157348633

select * from planejamento where plano='23' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00065994262695312

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0012321472167969

select origemreceita, sum(valor) from planejamento where plano='23' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00052404403686523

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='23' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00075101852416992

select sum(valor) as total from planejamento where plano='23' and tipo=1 
 Execution Time:0.00025415420532227

select sum(valor) as total from planejamento where plano='23' and tipo=2 
 Execution Time:0.00021696090698242

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00033116340637207

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00025105476379395

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00020289421081543

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00019979476928711

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00021004676818848

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00072717666625977

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00047898292541504

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0003659725189209

SELECT *
FROM "obm"
WHERE "id" =  '5' 
 Execution Time:0.00039911270141602

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00037384033203125

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00030803680419922

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0003509521484375

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00062704086303711

SELECT *
FROM "plano"
WHERE "id" =  '23' 
 Execution Time:0.00030112266540527

SELECT *
FROM "plano"
WHERE "id" =  '23' 
 Execution Time:0.00025200843811035

SELECT *
FROM "plano"
WHERE "id" =  '23' 
 Execution Time:0.00022697448730469

select * from reprovacao where plano='23'; 
 Execution Time:0.00043606758117676

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00051116943359375

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028681755065918

select * from planejamento where plano='23' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00070595741271973

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.001121997833252

select origemreceita, sum(valor) from planejamento where plano='23' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00045108795166016

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='23' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00050902366638184

select sum(valor) as total from planejamento where plano='23' and tipo=1 
 Execution Time:0.00023603439331055

select sum(valor) as total from planejamento where plano='23' and tipo=2 
 Execution Time:0.00022602081298828

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00076889991760254

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00051498413085938

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00040006637573242

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00045108795166016

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00085282325744629

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00048995018005371

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00021505355834961

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00019598007202148

SELECT *
FROM "obm"
WHERE "id" =  '5' 
 Execution Time:0.00019502639770508

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00019192695617676

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00023078918457031

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00019288063049316

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00050997734069824

SELECT *
FROM "plano"
WHERE "id" =  '23' 
 Execution Time:0.00039196014404297

SELECT *
FROM "plano"
WHERE "id" =  '23' 
 Execution Time:0.00025296211242676

select * from reprovacao where plano='23'; 
 Execution Time:0.00043296813964844

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0003361701965332

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029110908508301

select * from planejamento where plano='23' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00041794776916504

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00098395347595215

select origemreceita, sum(valor) from planejamento where plano='23' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00045180320739746

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='23' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00054192543029785

select sum(valor) as total from planejamento where plano='23' and tipo=1 
 Execution Time:0.00029110908508301

select sum(valor) as total from planejamento where plano='23' and tipo=2 
 Execution Time:0.00021505355834961

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00049710273742676

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00061798095703125

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00034093856811523

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00030303001403809

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00030183792114258

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00029897689819336

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00028300285339355

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00028491020202637

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00032591819763184

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00027990341186523

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00027990341186523

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00027990341186523

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00028204917907715

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-01-01' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0025029182434082

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00035881996154785

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00026202201843262

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0017411708831787

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00055217742919922

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00060391426086426

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00076413154602051

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004420280456543

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00052714347839355

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00031113624572754

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00025510787963867

SELECT *
FROM "obm"
WHERE "id" =  '5' 
 Execution Time:0.0002748966217041

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00032901763916016

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00032687187194824

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00030899047851562

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00045084953308105

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00032687187194824

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00030398368835449

select * from reprovacao where plano='21'; 
 Execution Time:0.00031709671020508

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00036501884460449

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00039911270141602

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00040698051452637

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0006561279296875

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00046014785766602

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.019719123840332

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.00038599967956543

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00030279159545898

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0020608901977539

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00066423416137695

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0013430118560791

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0009160041809082

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00057315826416016

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00052690505981445

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00044798851013184

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00044608116149902

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00046300888061523

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00044488906860352

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00042486190795898

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00038003921508789

SELECT *
FROM "obm"
WHERE "id" =  '1' 
 Execution Time:0.00027894973754883

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00033998489379883

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00041294097900391

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00031518936157227

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00029802322387695

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00029087066650391

select * from acesso where usuario='6' and obm='1' 
 Execution Time:0.00025701522827148

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00037693977355957

SELECT *
FROM "obm"
WHERE "id" =  '10' 
 Execution Time:0.00027799606323242

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00030899047851562

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00028491020202637

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00027608871459961

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00029110908508301

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00028419494628906

select * from acesso where usuario='6' and obm='10' 
 Execution Time:0.00023388862609863

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00043296813964844

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00032305717468262

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00036406517028809

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00043106079101562

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00044393539428711

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00039100646972656

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00035905838012695

select * from acesso where usuario='6' and obm='3' 
 Execution Time:0.00039196014404297

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00041389465332031

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00030183792114258

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00037598609924316

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00035500526428223

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00034713745117188

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00035786628723145

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00034594535827637

select * from acesso where usuario='6' and obm='9' 
 Execution Time:0.00030303001403809

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00038790702819824

SELECT *
FROM "obm"
WHERE "id" =  '4' 
 Execution Time:0.00030684471130371

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00030708312988281

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00028395652770996

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028204917907715

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00030303001403809

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00027203559875488

select * from acesso where usuario='6' and obm='4' 
 Execution Time:0.00023293495178223

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00040411949157715

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00026702880859375

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00030279159545898

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00029897689819336

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028896331787109

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00027799606323242

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00027203559875488

select * from acesso where usuario='6' and obm='8' 
 Execution Time:0.00028085708618164

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00046896934509277

SELECT *
FROM "obm"
WHERE "id" =  '5' 
 Execution Time:0.00032305717468262

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00036001205444336

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00040793418884277

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00032877922058105

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00026917457580566

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00040102005004883

select * from acesso where usuario='6' and obm='5' 
 Execution Time:0.00028705596923828

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00038886070251465

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.0002601146697998

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00028300285339355

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00029897689819336

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00027322769165039

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00026798248291016

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00026297569274902

select * from acesso where usuario='6' and obm='7' 
 Execution Time:0.00023293495178223

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00038409233093262

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00025296211242676

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00036096572875977

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00046205520629883

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00027608871459961

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0003199577331543

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0004119873046875

select * from acesso where usuario='2' and obm='7' 
 Execution Time:0.00045418739318848

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00062298774719238

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00081896781921387

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00057601928710938

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00061392784118652

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00058197975158691

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00049400329589844

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00042581558227539

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00040793418884277

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00039005279541016

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00039911270141602

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00039291381835938

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00040793418884277

SELECT *
FROM "obm"
WHERE "id" =  '1' 
 Execution Time:0.0002899169921875

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0003058910369873

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0002741813659668

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028395652770996

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00027012825012207

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00027203559875488

select * from acesso where usuario='2' and obm='1' 
 Execution Time:0.00029492378234863

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.0004270076751709

SELECT *
FROM "obm"
WHERE "id" =  '10' 
 Execution Time:0.00024795532226562

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00030112266540527

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00027298927307129

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0002739429473877

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00027990341186523

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00027799606323242

select * from acesso where usuario='2' and obm='10' 
 Execution Time:0.00027894973754883

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.000762939453125

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00088405609130859

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00066184997558594

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00062394142150879

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00050902366638184

SELECT *
FROM "obm"
WHERE "id" =  '1' 
 Execution Time:0.00049400329589844

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00047087669372559

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00044107437133789

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00048494338989258

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00047087669372559

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00046491622924805

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00038313865661621

SELECT *
FROM "obm"
WHERE "id" =  '1' 
 Execution Time:0.00025796890258789

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00029397010803223

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00028896331787109

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028896331787109

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0002901554107666

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00036787986755371

select * from acesso where usuario='2' and obm='1' 
 Execution Time:0.00068807601928711

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00056004524230957

SELECT *
FROM "obm"
WHERE "id" =  '10' 
 Execution Time:0.00035595893859863

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00041294097900391

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00039887428283691

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00043797492980957

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00039100646972656

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00036907196044922

select * from acesso where usuario='2' and obm='10' 
 Execution Time:0.00043201446533203

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.0003669261932373

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00027203559875488

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00030899047851562

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00028085708618164

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00027799606323242

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00028514862060547

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00028514862060547

select * from acesso where usuario='2' and obm='3' 
 Execution Time:0.00027012825012207

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00059986114501953

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00045394897460938

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00047016143798828

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00044894218444824

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0004420280456543

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00051498413085938

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00046086311340332

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00042009353637695

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00039100646972656

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00040602684020996

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00040102005004883

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00095200538635254

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00036501884460449

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00030899047851562

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00029683113098145

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0002901554107666

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00027894973754883

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0002601146697998

select * from acesso where usuario='2' and obm='9' 
 Execution Time:0.00035214424133301

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00042414665222168

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00030398368835449

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029110908508301

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00030088424682617

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00031614303588867

SELECT *
FROM "obm"
WHERE "id" =  '4' 
 Execution Time:0.00039505958557129

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00033807754516602

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00029087066650391

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028181076049805

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00030708312988281

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00028395652770996

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00040197372436523

SELECT *
FROM "obm"
WHERE "id" =  '4' 
 Execution Time:0.00028705596923828

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00031495094299316

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00032186508178711

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00043606758117676

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00033712387084961

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00041604042053223

select * from acesso where usuario='2' and obm='4' 
 Execution Time:0.00035905838012695

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00037479400634766

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00039386749267578

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00037598609924316

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0003509521484375

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00023794174194336

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00053310394287109

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00049901008605957

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00044417381286621

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00042080879211426

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00041007995605469

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00038909912109375

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00043892860412598

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00037193298339844

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0004270076751709

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00028896331787109

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00030899047851562

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00028705596923828

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00027608871459961

select * from acesso where usuario='2' and obm='8' 
 Execution Time:0.00027894973754883

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00036907196044922

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00039505958557129

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040912628173828

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00040602684020996

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00042986869812012

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00050091743469238

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00045204162597656

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00040316581726074

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040102005004883

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00041985511779785

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00053691864013672

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.0003809928894043

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00033092498779297

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00029706954956055

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028800964355469

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0003209114074707

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00028300285339355

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00040912628173828

SELECT *
FROM "obm"
WHERE "id" =  '5' 
 Execution Time:0.00025796890258789

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00028705596923828

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00028896331787109

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00032401084899902

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00026798248291016

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00025701522827148

select * from acesso where usuario='2' and obm='5' 
 Execution Time:0.00031900405883789

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00040602684020996

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0002598762512207

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00026106834411621

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00038409233093262

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00036787986755371

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00078821182250977

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00064396858215332

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00047612190246582

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029301643371582

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00044512748718262

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00029516220092773

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.0004889965057373

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.0010700225830078

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00049495697021484

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00029301643371582

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00025701522827148

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00027179718017578

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00026798248291016

select * from acesso where usuario='2' and obm='7' 
 Execution Time:0.00055789947509766

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00039291381835938

SELECT *
FROM "obm"
WHERE "id" =  '5' 
 Execution Time:0.00026416778564453

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00032496452331543

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00029397010803223

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028204917907715

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00029110908508301

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00027894973754883

select * from acesso where usuario='2' and obm='5' 
 Execution Time:0.00047492980957031

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00038909912109375

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.0002601146697998

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00032401084899902

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00030016899108887

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0002901554107666

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00028181076049805

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0002598762512207

select * from acesso where usuario='2' and obm='8' 
 Execution Time:0.00026798248291016

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00040388107299805

SELECT *
FROM "obm"
WHERE "id" =  '4' 
 Execution Time:0.00090813636779785

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00043010711669922

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00030303001403809

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029301643371582

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00029301643371582

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00029611587524414

select * from acesso where usuario='2' and obm='4' 
 Execution Time:0.00027990341186523

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00048708915710449

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00035691261291504

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0004119873046875

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00044488906860352

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00037598609924316

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0003359317779541

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00038003921508789

select * from acesso where usuario='2' and obm='9' 
 Execution Time:0.0003209114074707

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00040078163146973

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00027990341186523

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00040292739868164

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0004880428314209

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00031399726867676

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00034999847412109

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00030708312988281

select * from acesso where usuario='2' and obm='3' 
 Execution Time:0.00031185150146484

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00054383277893066

SELECT *
FROM "obm"
WHERE "id" =  '10' 
 Execution Time:0.0003819465637207

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00042319297790527

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00039291381835938

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041484832763672

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0004429817199707

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00048398971557617

select * from acesso where usuario='2' and obm='10' 
 Execution Time:0.0004878044128418

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00039291381835938

SELECT *
FROM "obm"
WHERE "id" =  '1' 
 Execution Time:0.00026702880859375

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00031304359436035

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00045394897460938

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00031399726867676

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00027608871459961

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00028395652770996

select * from acesso where usuario='2' and obm='1' 
 Execution Time:0.00028491020202637

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00043797492980957

SELECT *
FROM "obm"
WHERE "id" =  '1' 
 Execution Time:0.0003209114074707

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00047898292541504

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00042390823364258

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041890144348145

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00034999847412109

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0003349781036377

select * from acesso where usuario='6' and obm='1' 
 Execution Time:0.00046896934509277

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00045299530029297

SELECT *
FROM "obm"
WHERE "id" =  '10' 
 Execution Time:0.00034117698669434

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00044608116149902

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00043797492980957

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00033688545227051

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00037884712219238

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00032901763916016

select * from acesso where usuario='6' and obm='10' 
 Execution Time:0.00027203559875488

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00045895576477051

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00034689903259277

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00039100646972656

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00030803680419922

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00045895576477051

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00028395652770996

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00037503242492676

select * from acesso where usuario='6' and obm='3' 
 Execution Time:0.00029301643371582

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.0025458335876465

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.0014359951019287

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.053115844726562

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.00046801567077637

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.00041294097900391

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.0003361701965332

SELECT *
FROM "municipio"
WHERE "id" =  '41' 
 Execution Time:0.00030517578125

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.0007789134979248

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.00080299377441406

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.0006561279296875

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0011661052703857

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00058293342590332

SELECT *
FROM "obm" 
 Execution Time:0.00019598007202148

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00059890747070312

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00041913986206055

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00039315223693848

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0003359317779541

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003349781036377

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00037217140197754

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00023198127746582

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00032305717468262

SELECT *
FROM "obm"
WHERE "id" =  '5' 
 Execution Time:0.00029802322387695

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00032806396484375

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00033783912658691

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00028014183044434

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00047779083251953

SELECT *
FROM "plano"
WHERE "id" =  '23' 
 Execution Time:0.00034308433532715

SELECT *
FROM "plano"
WHERE "id" =  '23' 
 Execution Time:0.00030303001403809

select * from reprovacao where plano='23'; 
 Execution Time:0.00025081634521484

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00041985511779785

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00036406517028809

select * from planejamento where plano='23' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00041294097900391

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00085783004760742

select origemreceita, sum(valor) from planejamento where plano='23' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00042605400085449

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='23' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00064301490783691

select sum(valor) as total from planejamento where plano='23' and tipo=1 
 Execution Time:0.00034093856811523

select sum(valor) as total from planejamento where plano='23' and tipo=2 
 Execution Time:0.00031208992004395

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00092411041259766

SELECT *
FROM "plano"
WHERE "id" =  '23' 
 Execution Time:0.00067782402038574

SELECT *
FROM "plano"
WHERE "id" =  '23' 
 Execution Time:0.00067996978759766

select * from reprovacao where plano=0; 
 Execution Time:0.00099897384643555

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00048613548278809

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00075316429138184

select * from planejamento where plano='23' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00092101097106934

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0012180805206299

select origemreceita, sum(valor) from planejamento where plano='23' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00083708763122559

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='23' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0014829635620117

select sum(valor) as total from planejamento where plano='23' and tipo=1 
 Execution Time:0.00060606002807617

select sum(valor) as total from planejamento where plano='23' and tipo=2 
 Execution Time:0.00055503845214844

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00041699409484863

SELECT *
FROM "plano"
WHERE "id" =  '23' 
 Execution Time:0.00032997131347656

SELECT *
FROM "plano"
WHERE "id" =  '23' 
 Execution Time:0.00030899047851562

select * from reprovacao where plano=0; 
 Execution Time:0.00028395652770996

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00036191940307617

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040197372436523

select * from planejamento where plano='23' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00040102005004883

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00063014030456543

select origemreceita, sum(valor) from planejamento where plano='23' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00050687789916992

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='23' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00065994262695312

select sum(valor) as total from planejamento where plano='23' and tipo=1 
 Execution Time:0.00034403800964355

select sum(valor) as total from planejamento where plano='23' and tipo=2 
 Execution Time:0.0003199577331543

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00065994262695312

SELECT *
FROM "plano"
WHERE "id" =  '23' 
 Execution Time:0.00061798095703125

SELECT *
FROM "plano"
WHERE "id" =  '23' 
 Execution Time:0.00051593780517578

select * from reprovacao where plano=0; 
 Execution Time:0.00048112869262695

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00051212310791016

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00045204162597656

select * from planejamento where plano='23' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00047492980957031

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00083804130554199

select origemreceita, sum(valor) from planejamento where plano='23' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00045990943908691

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='23' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00064492225646973

select sum(valor) as total from planejamento where plano='23' and tipo=1 
 Execution Time:0.00037193298339844

select sum(valor) as total from planejamento where plano='23' and tipo=2 
 Execution Time:0.00035810470581055

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00035715103149414

SELECT *
FROM "plano"
WHERE "id" =  '23' 
 Execution Time:0.00021600723266602

SELECT *
FROM "plano"
WHERE "id" =  '23' 
 Execution Time:0.00018596649169922

select * from reprovacao where plano=0; 
 Execution Time:0.00037908554077148

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00025177001953125

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0005791187286377

select * from planejamento where plano='23' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00078892707824707

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0021491050720215

select origemreceita, sum(valor) from planejamento where plano='23' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00093197822570801

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='23' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00097990036010742

select sum(valor) as total from planejamento where plano='23' and tipo=1 
 Execution Time:0.00042009353637695

select sum(valor) as total from planejamento where plano='23' and tipo=2 
 Execution Time:0.00037312507629395

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00068807601928711

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00058579444885254

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00046992301940918

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00045585632324219

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00032401084899902

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00073885917663574

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00030207633972168

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00027990341186523

SELECT *
FROM "obm"
WHERE "id" =  '5' 
 Execution Time:0.00028800964355469

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0003058910369873

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00026297569274902

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0004730224609375

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00053596496582031

SELECT *
FROM "plano"
WHERE "id" =  '23' 
 Execution Time:0.00042295455932617

SELECT *
FROM "plano"
WHERE "id" =  '23' 
 Execution Time:0.00037002563476562

select * from reprovacao where plano='23'; 
 Execution Time:0.00029087066650391

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00045108795166016

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041604042053223

select * from planejamento where plano='23' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00041699409484863

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00084710121154785

select origemreceita, sum(valor) from planejamento where plano='23' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00051593780517578

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='23' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00071811676025391

select sum(valor) as total from planejamento where plano='23' and tipo=1 
 Execution Time:0.00042605400085449

select sum(valor) as total from planejamento where plano='23' and tipo=2 
 Execution Time:0.00034809112548828

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00069093704223633

SELECT *
FROM "plano"
WHERE "id" =  '23' 
 Execution Time:0.00056290626525879

SELECT *
FROM "plano"
WHERE "id" =  '23' 
 Execution Time:0.00046396255493164

select * from reprovacao where plano=0; 
 Execution Time:0.00037908554077148

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00057196617126465

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00083422660827637

select * from planejamento where plano='23' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00072288513183594

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0011720657348633

select origemreceita, sum(valor) from planejamento where plano='23' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00058412551879883

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='23' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00093889236450195

select sum(valor) as total from planejamento where plano='23' and tipo=1 
 Execution Time:0.00045204162597656

select sum(valor) as total from planejamento where plano='23' and tipo=2 
 Execution Time:0.00043797492980957

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0004420280456543

SELECT *
FROM "plano"
WHERE "id" =  '23' 
 Execution Time:0.00029182434082031

SELECT *
FROM "plano"
WHERE "id" =  '23' 
 Execution Time:0.00027608871459961

select * from reprovacao where plano=0; 
 Execution Time:0.00024700164794922

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0006248950958252

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00047397613525391

select * from planejamento where plano='23' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00049996376037598

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00089597702026367

select origemreceita, sum(valor) from planejamento where plano='23' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00047206878662109

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='23' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00077915191650391

select sum(valor) as total from planejamento where plano='23' and tipo=1 
 Execution Time:0.0003809928894043

select sum(valor) as total from planejamento where plano='23' and tipo=2 
 Execution Time:0.00049710273742676

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00043010711669922

SELECT *
FROM "plano"
WHERE "id" =  '23' 
 Execution Time:0.00026392936706543

SELECT *
FROM "plano"
WHERE "id" =  '23' 
 Execution Time:0.00022006034851074

select * from reprovacao where plano=0; 
 Execution Time:0.00025606155395508

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00028014183044434

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00026679039001465

select * from planejamento where plano='23' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00031709671020508

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00074291229248047

select origemreceita, sum(valor) from planejamento where plano='23' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00053191184997559

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='23' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0010941028594971

select sum(valor) as total from planejamento where plano='23' and tipo=1 
 Execution Time:0.00050520896911621

select sum(valor) as total from planejamento where plano='23' and tipo=2 
 Execution Time:0.00052213668823242

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00059604644775391

SELECT *
FROM "plano"
WHERE "id" =  '23' 
 Execution Time:0.00035214424133301

SELECT *
FROM "plano"
WHERE "id" =  '23' 
 Execution Time:0.00054287910461426

select * from reprovacao where plano=0; 
 Execution Time:0.0010621547698975

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00099802017211914

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00067400932312012

select * from planejamento where plano='23' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0014421939849854

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0010871887207031

select origemreceita, sum(valor) from planejamento where plano='23' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00052905082702637

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='23' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00081515312194824

select sum(valor) as total from planejamento where plano='23' and tipo=1 
 Execution Time:0.0003359317779541

select sum(valor) as total from planejamento where plano='23' and tipo=2 
 Execution Time:0.00034594535827637

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0015130043029785

SELECT *
FROM "plano"
WHERE "id" =  '23' 
 Execution Time:0.00061607360839844

SELECT *
FROM "plano"
WHERE "id" =  '23' 
 Execution Time:0.00054001808166504

select * from reprovacao where plano=0; 
 Execution Time:0.00041103363037109

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00037884712219238

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00031089782714844

select * from planejamento where plano='23' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00052309036254883

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00087404251098633

select origemreceita, sum(valor) from planejamento where plano='23' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00053286552429199

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='23' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00061488151550293

select sum(valor) as total from planejamento where plano='23' and tipo=1 
 Execution Time:0.00028109550476074

select sum(valor) as total from planejamento where plano='23' and tipo=2 
 Execution Time:0.0002739429473877

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00051593780517578

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00038814544677734

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00031614303588867

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00036501884460449

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00031208992004395

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00031590461730957

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.0002439022064209

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0001981258392334

SELECT *
FROM "obm"
WHERE "id" =  '5' 
 Execution Time:0.00019407272338867

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00019097328186035

select * from plano where status=4 order by datainicio DESC, datafim DESC 
 Execution Time:0.0006260871887207

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00095295906066895

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00072693824768066

select * from plano where status=4 and obm='8' order by datainicio DESC, datafim DESC 
 Execution Time:0.00058102607727051

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00045895576477051

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00040197372436523

SELECT *
FROM "plano"
WHERE "id" =  '23' 
 Execution Time:0.0004429817199707

SELECT *
FROM "plano"
WHERE "id" =  '23' 
 Execution Time:0.0003211498260498

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00032687187194824

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00035810470581055

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003359317779541

select * from planejamento where plano='23' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00066685676574707

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00041699409484863

select origemreceita, sum(valor) from planejamento where plano='23' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00037097930908203

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='23' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00061202049255371

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='23' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.0005800724029541

select sum(valor) as total from planejamento where plano='23' and tipo=1 
 Execution Time:0.00032210350036621

select sum(valor) as total from planejamento where plano='23' and tipo=2 
 Execution Time:0.00029993057250977

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00093889236450195

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041985511779785

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00025486946105957

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00021100044250488

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00020408630371094

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00021600723266602

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00021600723266602

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00020098686218262

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00020003318786621

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00021600723266602

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00019598007202148

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00019001960754395

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00019097328186035

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (4,8,5,7) and pj.dataprevista between '2016-01-01' and '2017-01-31' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0014309883117676

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00034189224243164

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029206275939941

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00051403045654297

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00058794021606445

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.0004420280456543

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00039887428283691

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00036406517028809

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00034594535827637

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00040698051452637

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00031495094299316

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00043511390686035

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00028800964355469

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00027704238891602

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00070619583129883

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00099301338195801

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-07-01' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0041730403900146

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00047707557678223

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00038290023803711

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0016610622406006

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00046396255493164

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00033998489379883

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00034999847412109

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00031685829162598

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0003359317779541

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.0003361701965332

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00034904479980469

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00034403800964355

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00036811828613281

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00037693977355957

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00036787986755371

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-07-01' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0028090476989746

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00053811073303223

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00050187110900879

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0025870800018311

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00058102607727051

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00027799606323242

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00024795532226562

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00051093101501465

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00043892860412598

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.0030450820922852

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0004727840423584

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00034403800964355

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0003209114074707

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00030398368835449

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00030303001403809

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-07-01' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0045568943023682

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00075697898864746

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040817260742188

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00054287910461426

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00039100646972656

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00036907196044922

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00028896331787109

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00034403800964355

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00033998489379883

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00029397010803223

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00084900856018066

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00080204010009766

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00043702125549316

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.0003659725189209

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00033807754516602

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-07-01' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0030360221862793

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00055098533630371

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00033903121948242

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.002312183380127

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00072693824768066

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00028800964355469

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00032615661621094

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00032901763916016

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00029492378234863

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00030803680419922

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00027012825012207

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00021600723266602

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00026583671569824

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00030708312988281

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00023913383483887

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-07-01' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0032410621643066

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.001215934753418

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00038504600524902

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00049591064453125

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00031590461730957

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.0002601146697998

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00026798248291016

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.0002598762512207

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00026202201843262

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00024795532226562

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0002589225769043

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00024199485778809

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00023102760314941

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00025701522827148

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00022387504577637

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-07-01' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.002669095993042

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00050878524780273

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00049018859863281

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00058388710021973

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00046181678771973

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00067400932312012

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00070905685424805

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00045418739318848

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00032997131347656

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00031399726867676

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00030612945556641

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00031495094299316

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00032401084899902

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00024008750915527

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00023102760314941

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-07-01' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0024380683898926

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00045108795166016

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00038480758666992

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00047206878662109

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00075101852416992

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00079512596130371

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00042891502380371

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00029301643371582

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0002892017364502

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00026702880859375

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00025606155395508

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00030112266540527

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00032782554626465

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00033378601074219

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00028705596923828

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-07-01' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0028250217437744

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00044608116149902

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0006248950958252

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00059199333190918

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00032496452331543

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00030088424682617

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00025105476379395

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00092482566833496

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0010240077972412

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00036406517028809

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0003349781036377

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00025320053100586

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00022292137145996

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00020098686218262

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00021696090698242

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-07-01' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0029070377349854

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00058507919311523

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00072503089904785

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00051403045654297

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00044393539428711

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00031900405883789

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.0002131462097168

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.0001981258392334

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00029611587524414

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00059914588928223

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00050616264343262

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00039005279541016

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00027108192443848

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00023984909057617

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00023579597473145

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-07-01' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.002716064453125

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00050902366638184

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00038409233093262

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0015249252319336

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00075888633728027

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00044894218444824

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00043892860412598

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00028204917907715

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.0006721019744873

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0011560916900635

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.0004279613494873

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00039219856262207

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00046110153198242

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00036883354187012

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00046610832214355

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00032401084899902

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-07-01' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0014958381652832

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00040197372436523

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00033283233642578

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0011770725250244

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00027108192443848

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00018596649169922

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00017595291137695

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00017189979553223

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00017380714416504

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00017213821411133

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00016999244689941

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00016403198242188

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00016403198242188

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00016188621520996

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00016188621520996

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2016-07-01' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0014770030975342

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00061488151550293

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00052189826965332

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00058603286743164

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.000518798828125

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00038003921508789

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00034499168395996

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00032687187194824

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00031900405883789

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00028514862060547

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0003509521484375

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00083684921264648

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00060892105102539

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00036883354187012

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00060892105102539

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (4,8,5,7) and pj.dataprevista between '2016-07-01' and '2017-01-27' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0020689964294434

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0003509521484375

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00031900405883789

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00050806999206543

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00047206878662109

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00062394142150879

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0003969669342041

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00028705596923828

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00078916549682617

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00071191787719727

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00042200088500977

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00036907196044922

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00048613548278809

SELECT *
FROM "obm"
WHERE "id" =  '5' 
 Execution Time:0.00042200088500977

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00030708312988281

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00047397613525391

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00034308433532715

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00032711029052734

select * from reprovacao where plano='21'; 
 Execution Time:0.00069379806518555

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00053119659423828

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040102005004883

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.001492977142334

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0016670227050781

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.0012261867523193

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0015499591827393

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.00027585029602051

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00023102760314941

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00060701370239258

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00055909156799316

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00046014785766602

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00027799606323242

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029492378234863

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00034403800964355

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00025606155395508

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0002138614654541

SELECT *
FROM "obm"
WHERE "id" =  '5' 
 Execution Time:0.00073122978210449

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0005037784576416

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00049400329589844

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00091695785522461

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00081801414489746

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00034999847412109

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003509521484375

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0013020038604736

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00042605400085449

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00035595893859863

SELECT *
FROM "obm"
WHERE "id" =  '5' 
 Execution Time:0.00036907196044922

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00035500526428223

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00054001808166504

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0015878677368164

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00076103210449219

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00084114074707031

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00051712989807129

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00164794921875

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.0013298988342285

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00041818618774414

SELECT *
FROM "obm"
WHERE "id" =  '5' 
 Execution Time:0.00037121772766113

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00032901763916016

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00050115585327148

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.00033998489379883

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.00029802322387695

select * from reprovacao where plano='22'; 
 Execution Time:0.00052595138549805

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00043511390686035

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040388107299805

select * from planejamento where plano='22' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00046491622924805

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0014209747314453

select origemreceita, sum(valor) from planejamento where plano='22' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00065898895263672

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='22' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0014588832855225

select sum(valor) as total from planejamento where plano='22' and tipo=1 
 Execution Time:0.00051116943359375

select sum(valor) as total from planejamento where plano='22' and tipo=2 
 Execution Time:0.00028395652770996

select * from plano where status=4 order by datainicio DESC, datafim DESC 
 Execution Time:0.00077414512634277

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00042319297790527

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00070786476135254

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00054597854614258

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00048995018005371

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00038886070251465

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00033402442932129

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029611587524414

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00043988227844238

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00026607513427734

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00097084045410156

SELECT *
FROM "obm"
WHERE "id" =  '5' 
 Execution Time:0.00055813789367676

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00028109550476074

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00049996376037598

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.0004279613494873

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.00042915344238281

select * from reprovacao where plano='22'; 
 Execution Time:0.00064396858215332

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00048184394836426

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00046205520629883

select * from planejamento where plano='22' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00057196617126465

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0011711120605469

select origemreceita, sum(valor) from planejamento where plano='22' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.0015308856964111

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='22' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0008399486541748

select sum(valor) as total from planejamento where plano='22' and tipo=1 
 Execution Time:0.0004270076751709

select sum(valor) as total from planejamento where plano='22' and tipo=2 
 Execution Time:0.00059413909912109

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0011999607086182

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.00068211555480957

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.00034093856811523

select * from reprovacao where plano='22'; 
 Execution Time:0.00024890899658203

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00032305717468262

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00030112266540527

select * from planejamento where plano='22' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00030803680419922

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00058197975158691

select origemreceita, sum(valor) from planejamento where plano='22' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00035595893859863

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='22' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00047492980957031

select sum(valor) as total from planejamento where plano='22' and tipo=1 
 Execution Time:0.00025105476379395

select sum(valor) as total from planejamento where plano='22' and tipo=2 
 Execution Time:0.0002129077911377

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0011448860168457

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.00047206878662109

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.00037002563476562

select * from reprovacao where plano='22'; 
 Execution Time:0.00060915946960449

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00080990791320801

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00051784515380859

select * from planejamento where plano='22' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0005180835723877

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00061607360839844

select origemreceita, sum(valor) from planejamento where plano='22' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00031805038452148

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='22' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00086879730224609

select sum(valor) as total from planejamento where plano='22' and tipo=1 
 Execution Time:0.00072979927062988

select sum(valor) as total from planejamento where plano='22' and tipo=2 
 Execution Time:0.00047397613525391

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00063300132751465

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.00044703483581543

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.00086212158203125

select * from reprovacao where plano='22'; 
 Execution Time:0.00076794624328613

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00068902969360352

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040602684020996

select * from planejamento where plano='22' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00034999847412109

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00071811676025391

select origemreceita, sum(valor) from planejamento where plano='22' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.0003819465637207

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='22' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00070977210998535

select sum(valor) as total from planejamento where plano='22' and tipo=1 
 Execution Time:0.00036001205444336

select sum(valor) as total from planejamento where plano='22' and tipo=2 
 Execution Time:0.00033783912658691

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00066184997558594

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.00064802169799805

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.00037503242492676

select * from reprovacao where plano='22'; 
 Execution Time:0.00030899047851562

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00050497055053711

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00097489356994629

select * from planejamento where plano='22' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00094389915466309

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00075602531433105

select origemreceita, sum(valor) from planejamento where plano='22' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00043582916259766

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='22' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00080418586730957

select sum(valor) as total from planejamento where plano='22' and tipo=1 
 Execution Time:0.00048685073852539

select sum(valor) as total from planejamento where plano='22' and tipo=2 
 Execution Time:0.00044918060302734

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00054407119750977

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.0004279613494873

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.00084519386291504

select * from reprovacao where plano='22'; 
 Execution Time:0.00051403045654297

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00052309036254883

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00045299530029297

select * from planejamento where plano='22' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00038313865661621

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0006859302520752

select origemreceita, sum(valor) from planejamento where plano='22' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00045609474182129

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='22' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00082898139953613

select sum(valor) as total from planejamento where plano='22' and tipo=1 
 Execution Time:0.00049090385437012

select sum(valor) as total from planejamento where plano='22' and tipo=2 
 Execution Time:0.0004429817199707

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0013251304626465

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.00066709518432617

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.00035190582275391

select * from reprovacao where plano='22'; 
 Execution Time:0.00032496452331543

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00036883354187012

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00032591819763184

select * from planejamento where plano='22' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00033998489379883

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00068092346191406

select origemreceita, sum(valor) from planejamento where plano='22' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00052905082702637

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='22' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00082302093505859

select sum(valor) as total from planejamento where plano='22' and tipo=1 
 Execution Time:0.00078797340393066

select sum(valor) as total from planejamento where plano='22' and tipo=2 
 Execution Time:0.0005650520324707

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00059890747070312

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.00067400932312012

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.00058507919311523

select * from reprovacao where plano='22'; 
 Execution Time:0.00047683715820312

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00054478645324707

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041794776916504

select * from planejamento where plano='22' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0003659725189209

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00066804885864258

select origemreceita, sum(valor) from planejamento where plano='22' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00046396255493164

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='22' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00085306167602539

select sum(valor) as total from planejamento where plano='22' and tipo=1 
 Execution Time:0.00055313110351562

select sum(valor) as total from planejamento where plano='22' and tipo=2 
 Execution Time:0.00040507316589355

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0012710094451904

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.00050711631774902

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.00036215782165527

select * from reprovacao where plano='22'; 
 Execution Time:0.00057506561279297

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0007479190826416

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041794776916504

select * from planejamento where plano='22' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00051307678222656

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00089693069458008

select origemreceita, sum(valor) from planejamento where plano='22' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.0005028247833252

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='22' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00073099136352539

select sum(valor) as total from planejamento where plano='22' and tipo=1 
 Execution Time:0.00041913986206055

select sum(valor) as total from planejamento where plano='22' and tipo=2 
 Execution Time:0.00033211708068848

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0013749599456787

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.00094318389892578

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.00064611434936523

select * from reprovacao where plano='22'; 
 Execution Time:0.00033998489379883

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00041079521179199

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00034594535827637

select * from planejamento where plano='22' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00032186508178711

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0010578632354736

select origemreceita, sum(valor) from planejamento where plano='22' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00060105323791504

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='22' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00070714950561523

select sum(valor) as total from planejamento where plano='22' and tipo=1 
 Execution Time:0.00028514862060547

select sum(valor) as total from planejamento where plano='22' and tipo=2 
 Execution Time:0.00026893615722656

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0004730224609375

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.00077986717224121

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.00061702728271484

select * from reprovacao where plano='22'; 
 Execution Time:0.00028705596923828

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0003058910369873

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00026202201843262

select * from planejamento where plano='22' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00027704238891602

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00068497657775879

select origemreceita, sum(valor) from planejamento where plano='22' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00043892860412598

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='22' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0007178783416748

select sum(valor) as total from planejamento where plano='22' and tipo=1 
 Execution Time:0.00072598457336426

select sum(valor) as total from planejamento where plano='22' and tipo=2 
 Execution Time:0.00054097175598145

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0012879371643066

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.00049614906311035

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.00037598609924316

select * from reprovacao where plano='22'; 
 Execution Time:0.00061321258544922

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00067019462585449

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00053596496582031

select * from planejamento where plano='22' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00042891502380371

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0007319450378418

select origemreceita, sum(valor) from planejamento where plano='22' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00044083595275879

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='22' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00057506561279297

select sum(valor) as total from planejamento where plano='22' and tipo=1 
 Execution Time:0.00028395652770996

select sum(valor) as total from planejamento where plano='22' and tipo=2 
 Execution Time:0.00031185150146484

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00035405158996582

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.00024890899658203

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.00021815299987793

select * from reprovacao where plano=0; 
 Execution Time:0.00018978118896484

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00026202201843262

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00024700164794922

select * from planejamento where plano='22' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00026512145996094

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00050592422485352

select origemreceita, sum(valor) from planejamento where plano='22' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00037407875061035

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='22' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00049591064453125

select sum(valor) as total from planejamento where plano='22' and tipo=1 
 Execution Time:0.00024795532226562

select sum(valor) as total from planejamento where plano='22' and tipo=2 
 Execution Time:0.00022792816162109

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00062108039855957

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00054597854614258

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00048089027404785

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00046110153198242

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00073719024658203

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00098586082458496

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00037908554077148

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00031495094299316

SELECT *
FROM "obm"
WHERE "id" =  '5' 
 Execution Time:0.00040102005004883

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00033092498779297

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00058889389038086

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.00045895576477051

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.0003201961517334

select * from reprovacao where plano='22'; 
 Execution Time:0.00023198127746582

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0010640621185303

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00082302093505859

select * from planejamento where plano='22' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00041294097900391

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0010111331939697

select origemreceita, sum(valor) from planejamento where plano='22' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00091004371643066

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='22' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00068902969360352

select sum(valor) as total from planejamento where plano='22' and tipo=1 
 Execution Time:0.00034499168395996

select sum(valor) as total from planejamento where plano='22' and tipo=2 
 Execution Time:0.00029516220092773

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0012140274047852

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.00042819976806641

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.00034189224243164

select * from reprovacao where plano='22'; 
 Execution Time:0.00031518936157227

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00037717819213867

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00078296661376953

select * from planejamento where plano='22' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00074601173400879

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00078797340393066

select origemreceita, sum(valor) from planejamento where plano='22' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00043392181396484

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='22' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00064611434936523

select sum(valor) as total from planejamento where plano='22' and tipo=1 
 Execution Time:0.00033378601074219

select sum(valor) as total from planejamento where plano='22' and tipo=2 
 Execution Time:0.00032687187194824

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00066184997558594

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.00060796737670898

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.00043916702270508

select * from reprovacao where plano='22'; 
 Execution Time:0.00037598609924316

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00079107284545898

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0010130405426025

select * from planejamento where plano='22' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0010020732879639

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00064516067504883

select origemreceita, sum(valor) from planejamento where plano='22' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00033807754516602

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='22' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00053000450134277

select sum(valor) as total from planejamento where plano='22' and tipo=1 
 Execution Time:0.00025391578674316

select sum(valor) as total from planejamento where plano='22' and tipo=2 
 Execution Time:0.00024604797363281

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0011160373687744

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.00076699256896973

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.00070095062255859

select * from reprovacao where plano='22'; 
 Execution Time:0.00037789344787598

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00036716461181641

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003209114074707

select * from planejamento where plano='22' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00047397613525391

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00099396705627441

select origemreceita, sum(valor) from planejamento where plano='22' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00044488906860352

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='22' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0012869834899902

select sum(valor) as total from planejamento where plano='22' and tipo=1 
 Execution Time:0.00067710876464844

select sum(valor) as total from planejamento where plano='22' and tipo=2 
 Execution Time:0.00053811073303223

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00053501129150391

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.0004570484161377

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.00046801567077637

select * from reprovacao where plano='22'; 
 Execution Time:0.00040698051452637

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00047087669372559

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00027298927307129

select * from planejamento where plano='22' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00032615661621094

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0012578964233398

select origemreceita, sum(valor) from planejamento where plano='22' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.0010240077972412

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='22' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00068116188049316

select sum(valor) as total from planejamento where plano='22' and tipo=1 
 Execution Time:0.00036406517028809

select sum(valor) as total from planejamento where plano='22' and tipo=2 
 Execution Time:0.00045013427734375

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00048494338989258

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.0003659725189209

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.00024890899658203

select * from reprovacao where plano=0; 
 Execution Time:0.00021600723266602

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00026917457580566

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00023508071899414

select * from planejamento where plano='22' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00026583671569824

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00049400329589844

select origemreceita, sum(valor) from planejamento where plano='22' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00027108192443848

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='22' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00043392181396484

select sum(valor) as total from planejamento where plano='22' and tipo=1 
 Execution Time:0.0002140998840332

select sum(valor) as total from planejamento where plano='22' and tipo=2 
 Execution Time:0.0001978874206543

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00051403045654297

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00048208236694336

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00059914588928223

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00091409683227539

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00098705291748047

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00090789794921875

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00063896179199219

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0004119873046875

SELECT *
FROM "obm"
WHERE "id" =  '5' 
 Execution Time:0.0003960132598877

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00038695335388184

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0005490779876709

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.00051617622375488

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.00043582916259766

select * from reprovacao where plano='22'; 
 Execution Time:0.00037693977355957

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00052881240844727

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00050806999206543

select * from planejamento where plano='22' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00054597854614258

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0011091232299805

select origemreceita, sum(valor) from planejamento where plano='22' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00060486793518066

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='22' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0010719299316406

select sum(valor) as total from planejamento where plano='22' and tipo=1 
 Execution Time:0.0011229515075684

select sum(valor) as total from planejamento where plano='22' and tipo=2 
 Execution Time:0.00070500373840332

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00053811073303223

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.00069785118103027

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.0010409355163574

select * from reprovacao where plano=0; 
 Execution Time:0.0002739429473877

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00033283233642578

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028610229492188

select * from planejamento where plano='22' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00030899047851562

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0005500316619873

select origemreceita, sum(valor) from planejamento where plano='22' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00031590461730957

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='22' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00055503845214844

select sum(valor) as total from planejamento where plano='22' and tipo=1 
 Execution Time:0.00026798248291016

select sum(valor) as total from planejamento where plano='22' and tipo=2 
 Execution Time:0.00024008750915527

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00053215026855469

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00061416625976562

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00049805641174316

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00049901008605957

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00051307678222656

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00061511993408203

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00045895576477051

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00045680999755859

SELECT *
FROM "obm"
WHERE "id" =  '5' 
 Execution Time:0.00023007392883301

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0002751350402832

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00046110153198242

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.00041604042053223

SELECT *
FROM "plano"
WHERE "id" =  '22' 
 Execution Time:0.00046300888061523

select * from reprovacao where plano='22'; 
 Execution Time:0.00040078163146973

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00065803527832031

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0006861686706543

select * from planejamento where plano='22' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00056099891662598

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00063896179199219

select origemreceita, sum(valor) from planejamento where plano='22' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00093197822570801

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='22' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0015630722045898

select sum(valor) as total from planejamento where plano='22' and tipo=1 
 Execution Time:0.00038409233093262

select sum(valor) as total from planejamento where plano='22' and tipo=2 
 Execution Time:0.00052285194396973

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00083017349243164

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00073099136352539

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0006411075592041

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00062203407287598

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00062704086303711

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00074195861816406

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00052690505981445

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00051498413085938

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00054502487182617

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00058197975158691

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0004889965057373

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0013010501861572

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.001086950302124

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00048303604125977

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00093603134155273

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00036096572875977

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00029110908508301

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00074005126953125

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00060391426086426

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00049495697021484

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00033283233642578

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00028896331787109

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00026392936706543

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00029516220092773

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00087189674377441

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00066995620727539

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00038003921508789

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00059795379638672

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00042390823364258

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00039196014404297

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (10,3,9,4,8,5,7) and pj.dataprevista between '2017-01-01' and '2017-12-30' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0012121200561523

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0002751350402832

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00024080276489258

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00057291984558105

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00041604042053223

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00036191940307617

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00038695335388184

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00041103363037109

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00032496452331543

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00030684471130371

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00025510787963867

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00028514862060547

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00029492378234863

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00026988983154297

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00026893615722656

select pn.id as plano, pj.tipo as tipo, pj.origemreceita as og_id, og.nome as og_nome, pj.especificacao as especificacao_id, e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome as descricao, pj.valor, pj.dataprevista, o.id as obm_id, o.nome as obm_nome  from planejamento as pj, plano as pn, obm as o, especificacao as e, origemreceita as og where pj.origemreceita=og.id and pj.plano=pn.id and o.id=pn.obm and e.id=pj.especificacao and pn.obm in (4,8,5,7) and pj.dataprevista between '2017-01-01' and '2017-12-30' and pn.status=4 order by o.nome asc, tipo asc, origemreceita asc 
 Execution Time:0.0024828910827637

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00040411949157715

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0008089542388916

