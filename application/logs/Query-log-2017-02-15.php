select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.013929128646851

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.00093698501586914

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.083148956298828

SELECT *
FROM "modulo"
ORDER BY "nome" ASC 
 Execution Time:0.0015769004821777

SELECT *
FROM "modulo"
ORDER BY "nome" ASC 
 Execution Time:0.0015740394592285

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.11947703361511

SELECT *
FROM "aplicacao"
ORDER BY "nome" 
 Execution Time:0.00040292739868164

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.029935121536255

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.0013349056243896

select * from obm where id in (1,7,8,10,3,9,4,5) 
 Execution Time:0.00032615661621094

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.040546894073486

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.016912937164307

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00047993659973145

select * from modulo where id in (20,18,17,19,22,21,15,7,16) 
 Execution Time:0.00056886672973633

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.011905193328857

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00056695938110352

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00070500373840332

select * from obm where id in (1,7,8,10,3,9,4,5) 
 Execution Time:0.00045180320739746

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00086688995361328

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0005490779876709

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00088381767272949

select * from modulo where id in (20,18,17,19,22,21,15,7,16) 
 Execution Time:0.0019700527191162

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00054097175598145

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00039196014404297

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041699409484863

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00061798095703125

select * from obm where id in (1,7,8,10,3,9,4,5) 
 Execution Time:0.00037813186645508

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00039100646972656

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00042915344238281

select * from acesso where usuario='2' and obm='3' 
 Execution Time:0.00048208236694336

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00046086311340332

select * from modulo where id in (20,18,17,19,22,21,15,7,16) 
 Execution Time:0.0004420280456543

SELECT *
FROM "modulo"
ORDER BY "nome" ASC 
 Execution Time:0.0015068054199219

SELECT *
FROM "modulo"
ORDER BY "nome" ASC 
 Execution Time:0.00041890144348145

SELECT *
FROM "modulo"
WHERE "id" =  '24' 
 Execution Time:0.00046300888061523

SELECT *
FROM "modulo"
ORDER BY "nome" ASC 
 Execution Time:0.00044608116149902

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00087404251098633

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.0005190372467041

select * from obm where id in (1,7,8,10,3,9,4,5) 
 Execution Time:0.00037813186645508

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00053906440734863

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00063800811767578

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00057101249694824

select * from modulo where id in (20,18,17,19,22,21,15,7,16) 
 Execution Time:0.00049495697021484

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00049901008605957

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00043702125549316

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.0006709098815918

select * from obm where id in (1,7,8,10,3,9,4,5) 
 Execution Time:0.0008997917175293

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00062394142150879

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00047397613525391

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00044107437133789

select * from modulo where id in (20,18,17,19,22,21,15,7,16) 
 Execution Time:0.00043082237243652

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00040698051452637

SELECT *
FROM "obm"
WHERE "id" =  '1' 
 Execution Time:0.00027894973754883

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00036215782165527

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00043797492980957

select * from obm where id in (1,7,8,10,3,9,4,5) 
 Execution Time:0.00026392936706543

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00027894973754883

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00028514862060547

select * from acesso where usuario='2' and obm='1' 
 Execution Time:0.00028705596923828

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00028705596923828

select * from modulo where id in (20,18,17,19,22,21,15,7,16) 
 Execution Time:0.00028610229492188

SELECT *
FROM "modulo"
ORDER BY "nome" ASC 
 Execution Time:0.0021109580993652

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0011520385742188

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.0014059543609619

select * from obm where id in (1,7,8,10,3,9,4,5) 
 Execution Time:0.00037598609924316

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00047898292541504

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0008089542388916

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00033211708068848

select * from modulo where id in (20,18,17,19,22,21,15,7,16) 
 Execution Time:0.00029993057250977

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00039982795715332

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00033807754516602

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00045394897460938

select * from obm where id in (1,7,8,10,3,9,4,5) 
 Execution Time:0.00024700164794922

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0002739429473877

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00027894973754883

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00027203559875488

select * from modulo where id in (20,18,17,19,22,21,15,7,16) 
 Execution Time:0.0002899169921875

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00049304962158203

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00034809112548828

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00042295455932617

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00061297416687012

select * from obm where id in (1,7,8,10,3,9,4,5) 
 Execution Time:0.00034379959106445

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00037407875061035

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00048303604125977

select * from acesso where usuario='2' and obm='3' 
 Execution Time:0.0004420280456543

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00036311149597168

select * from modulo where id in (20,18,17,19,22,21,15,7,16) 
 Execution Time:0.00039291381835938

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00051617622375488

SELECT *
FROM "obm"
WHERE "id" =  '1' 
 Execution Time:0.00041484832763672

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00049710273742676

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00059700012207031

select * from obm where id in (1,7,8,10,3,9,4,5) 
 Execution Time:0.00037002563476562

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0010428428649902

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00051307678222656

select * from acesso where usuario='2' and obm='1' 
 Execution Time:0.00049996376037598

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00045609474182129

select * from modulo where id in (20,18,17,19,22,21,15,7,16) 
 Execution Time:0.0006098747253418

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00095295906066895

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00047993659973145

select * from obm where id in (1,7,8,10,3,9,4,5) 
 Execution Time:0.00031590461730957

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00050592422485352

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00056600570678711

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00032711029052734

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.0008699893951416

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00051188468933105

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00046801567077637

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.0006101131439209

select * from obm where id in (1,7,8,10,3,9,4,5) 
 Execution Time:0.0003960132598877

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0004580020904541

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00044798851013184

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00045394897460938

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00043487548828125

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00062704086303711

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00038599967956543

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00043797492980957

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00063514709472656

select * from obm where id in (1,7,8,10,3,9,4,5) 
 Execution Time:0.00040602684020996

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00043797492980957

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00056099891662598

select * from acesso where usuario='2' and obm='3' 
 Execution Time:0.00044488906860352

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.0004270076751709

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00041103363037109

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00046396255493164

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00046300888061523

select * from obm where id in (1,7,8,3,10,9,4,5) 
 Execution Time:0.00027298927307129

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00025296211242676

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00025200843811035

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00025701522827148

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00028204917907715

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00054717063903809

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00053191184997559

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00072979927062988

select * from obm where id in (1,7,8,3,10,9,4,5) 
 Execution Time:0.00044107437133789

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00048995018005371

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00050687789916992

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.0005030632019043

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00044012069702148

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.0004420280456543

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00030303001403809

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00036382675170898

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00055098533630371

select * from obm where id in (1,7,8,3,10,9,4,5) 
 Execution Time:0.00032305717468262

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00035500526428223

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00037813186645508

select * from acesso where usuario='2' and obm='3' 
 Execution Time:0.00036478042602539

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00035905838012695

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00046086311340332

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00051093101501465

SELECT *
FROM "obm"
WHERE "id" =  '4' 
 Execution Time:0.00031900405883789

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004570484161377

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.0006110668182373

select * from obm where id in (1,7,8,3,10,9,4,5) 
 Execution Time:0.00043296813964844

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00041699409484863

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00037908554077148

select * from acesso where usuario='2' and obm='4' 
 Execution Time:0.00042510032653809

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00040411949157715

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00043916702270508

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00055193901062012

SELECT *
FROM "obm"
WHERE "id" =  '1' 
 Execution Time:0.00041913986206055

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00051712989807129

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00063395500183105

select * from obm where id in (1,7,8,3,10,9,4,5) 
 Execution Time:0.00037217140197754

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00041103363037109

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00044703483581543

select * from acesso where usuario='2' and obm='1' 
 Execution Time:0.00044989585876465

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.0004279613494873

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00043010711669922

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00083708763122559

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.0003349781036377

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00031900405883789

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.0011107921600342

select * from obm where id in (1,7,8,3,10,9,4,5) 
 Execution Time:0.0003359317779541

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00028014183044434

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00027108192443848

select * from acesso where usuario='2' and obm='9' 
 Execution Time:0.00027704238891602

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00028514862060547

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00028014183044434

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0012619495391846

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.0010390281677246

select * from obm where id in (1,7,8,3,9,10,4,5) 
 Execution Time:0.00034713745117188

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00052714347839355

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00058102607727051

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00030684471130371

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00029087066650391

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.0003969669342041

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00033712387084961

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.0004119873046875

select * from obm where id in (1,7,8,3,9,10,4,5) 
 Execution Time:0.00026607513427734

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00028419494628906

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00027704238891602

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00030088424682617

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.0003049373626709

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00053000450134277

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00040793418884277

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00045680999755859

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00068187713623047

select * from obm where id in (1,7,8,3,9,10,4,5) 
 Execution Time:0.00038695335388184

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00050091743469238

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00044488906860352

select * from acesso where usuario='2' and obm='3' 
 Execution Time:0.0004880428314209

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00043511390686035

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00041818618774414

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.0009150505065918

SELECT *
FROM "obm"
WHERE "id" =  '1' 
 Execution Time:0.00046896934509277

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040006637573242

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00055694580078125

select * from obm where id in (1,7,8,3,9,10,4,5) 
 Execution Time:0.00032591819763184

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00048398971557617

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00059700012207031

select * from acesso where usuario='2' and obm='1' 
 Execution Time:0.00037503242492676

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00052595138549805

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00036287307739258

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00040006637573242

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00027298927307129

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00030994415283203

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00065112113952637

select * from obm where id in (1,7,8,3,9,10,4,5) 
 Execution Time:0.00031781196594238

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00029587745666504

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00028014183044434

select * from acesso where usuario='2' and obm='9' 
 Execution Time:0.00028014183044434

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00029301643371582

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00032401084899902

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00052213668823242

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00035786628723145

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004279613494873

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00063490867614746

select * from obm where id in (1,7,8,3,9,10,4,5) 
 Execution Time:0.0003960132598877

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00043511390686035

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00046396255493164

select * from acesso where usuario='2' and obm='7' 
 Execution Time:0.00044107437133789

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00043678283691406

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00044798851013184

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00072479248046875

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00050592422485352

select * from obm where id in (1,8,3,9,10,4,5,7) 
 Execution Time:0.00038599967956543

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00033879280090332

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00029993057250977

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00035810470581055

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00041890144348145

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.0003819465637207

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00032591819763184

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.0004270076751709

select * from obm where id in (1,8,3,9,10,4,5,7) 
 Execution Time:0.00027585029602051

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00032901763916016

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00032901763916016

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00029897689819336

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00028514862060547

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.0003969669342041

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00026392936706543

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00038290023803711

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00056099891662598

select * from obm where id in (1,8,3,9,10,4,5,7) 
 Execution Time:0.00028800964355469

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00030398368835449

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00027894973754883

select * from acesso where usuario='2' and obm='8' 
 Execution Time:0.00026583671569824

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00026798248291016

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00028300285339355

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0021059513092041

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.0020759105682373

select * from obm where id in (1,3,9,10,4,5,7,8) 
 Execution Time:0.00040698051452637

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00092816352844238

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0012681484222412

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00057005882263184

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00054788589477539

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.0005190372467041

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00048995018005371

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00066208839416504

select * from obm where id in (1,3,9,10,4,5,7,8) 
 Execution Time:0.00044107437133789

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00049805641174316

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00046300888061523

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00044608116149902

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00042986869812012

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.0004420280456543

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.0003969669342041

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003669261932373

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00046896934509277

select * from obm where id in (1,3,9,10,4,5,7,8) 
 Execution Time:0.0003211498260498

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00033903121948242

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00035214424133301

select * from acesso where usuario='2' and obm='7' 
 Execution Time:0.00033307075500488

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.0004420280456543

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00043511390686035

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00047612190246582

SELECT *
FROM "obm"
WHERE "id" =  '10' 
 Execution Time:0.00034189224243164

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00037193298339844

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00047111511230469

select * from obm where id in (1,3,9,10,4,5,7,8) 
 Execution Time:0.00025486946105957

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00026082992553711

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00026988983154297

select * from acesso where usuario='2' and obm='10' 
 Execution Time:0.0002741813659668

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.0003359317779541

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00032711029052734

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00066304206848145

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00046205520629883

select * from obm where id in (1,3,9,4,5,7,8,10) 
 Execution Time:0.00028514862060547

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00027108192443848

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0002739429473877

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00028800964355469

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00036191940307617

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00050187110900879

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00045299530029297

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00059103965759277

select * from obm where id in (1,3,9,4,5,7,8,10) 
 Execution Time:0.00036096572875977

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00041890144348145

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00043201446533203

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00044608116149902

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00043392181396484

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00038504600524902

SELECT *
FROM "obm"
WHERE "id" =  '10' 
 Execution Time:0.00025510787963867

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029397010803223

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00041508674621582

select * from obm where id in (1,3,9,4,5,7,8,10) 
 Execution Time:0.00025701522827148

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00027704238891602

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00028300285339355

select * from acesso where usuario='2' and obm='10' 
 Execution Time:0.00027799606323242

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00027298927307129

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00027203559875488

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00056195259094238

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00042200088500977

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004429817199707

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00099992752075195

select * from obm where id in (1,3,9,4,5,7,8,10) 
 Execution Time:0.00041818618774414

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00053191184997559

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00046706199645996

select * from acesso where usuario='2' and obm='8' 
 Execution Time:0.0005190372467041

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00036191940307617

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00031208992004395

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00048208236694336

SELECT *
FROM "obm"
WHERE "id" =  '4' 
 Execution Time:0.00032997131347656

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00032496452331543

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00049996376037598

select * from obm where id in (1,3,9,4,5,7,8,10) 
 Execution Time:0.0002892017364502

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00028014183044434

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00026798248291016

select * from acesso where usuario='2' and obm='4' 
 Execution Time:0.00028491020202637

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00028300285339355

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00028300285339355

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00043892860412598

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00047206878662109

select * from obm where id in (1,4,3,9,5,7,8,10) 
 Execution Time:0.00026488304138184

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00029706954956055

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00028586387634277

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00031900405883789

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00029492378234863

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00048398971557617

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00049090385437012

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00061297416687012

select * from obm where id in (1,4,3,9,5,7,8,10) 
 Execution Time:0.00034904479980469

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00042200088500977

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00045394897460938

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00044012069702148

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00044107437133789

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00052309036254883

SELECT *
FROM "obm"
WHERE "id" =  '4' 
 Execution Time:0.00035691261291504

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004270076751709

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00066304206848145

select * from obm where id in (1,4,3,9,5,7,8,10) 
 Execution Time:0.00042200088500977

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00051712989807129

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00048208236694336

select * from acesso where usuario='2' and obm='4' 
 Execution Time:0.0005180835723877

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00049304962158203

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00043511390686035

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00043702125549316

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00033807754516602

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00036406517028809

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.0006721019744873

select * from obm where id in (1,4,3,9,5,7,8,10) 
 Execution Time:0.00035595893859863

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00038695335388184

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00039291381835938

select * from acesso where usuario='2' and obm='8' 
 Execution Time:0.00039815902709961

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00030994415283203

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00030183792114258

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00040602684020996

SELECT *
FROM "obm"
WHERE "id" =  '5' 
 Execution Time:0.00028085708618164

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0002899169921875

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00060701370239258

select * from obm where id in (1,4,3,9,5,7,8,10) 
 Execution Time:0.00028109550476074

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00031304359436035

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00031304359436035

select * from acesso where usuario='2' and obm='5' 
 Execution Time:0.00033307075500488

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00029897689819336

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00029802322387695

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00043010711669922

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.0005030632019043

select * from obm where id in (1,4,5,3,9,7,8,10) 
 Execution Time:0.00032711029052734

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00032997131347656

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00033187866210938

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00033211708068848

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.0003349781036377

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00051784515380859

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00049209594726562

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00065088272094727

select * from obm where id in (1,4,5,3,9,7,8,10) 
 Execution Time:0.00037598609924316

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00046110153198242

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00045204162597656

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00043797492980957

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00042390823364258

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.0003819465637207

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00026106834411621

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00032901763916016

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00043296813964844

select * from obm where id in (1,4,5,3,9,7,8,10) 
 Execution Time:0.00026607513427734

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00028491020202637

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00026607513427734

select * from acesso where usuario='6' and obm='3' 
 Execution Time:0.00025701522827148

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00026392936706543

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00027298927307129

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.000701904296875

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.0020220279693604

select * from obm where id in (1,4,5,3,9,7,8,10) 
 Execution Time:0.00033998489379883

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00044393539428711

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00057506561279297

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00031089782714844

select * from modulo where id in (20,18,17,19,22,21,15,7,16,24) 
 Execution Time:0.00029802322387695

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00058507919311523

SELECT *
FROM "aplicacao"
ORDER BY "nome" 
 Execution Time:0.00030922889709473

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.026792049407959

SELECT *
FROM "categoriaeconomica"
ORDER BY "id" 
 Execution Time:0.00036001205444336

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.042418003082275

SELECT *
FROM "origemreceita" 
 Execution Time:0.00028109550476074

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00090503692626953

SELECT *
FROM "aplicacao"
ORDER BY "nome" 
 Execution Time:0.00039386749267578

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.13618493080139

SELECT *
FROM "objeto"
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0005640983581543

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00056099891662598

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.053511142730713

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00037598609924316

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00063395500183105

SELECT *
FROM "especificacao"
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.06213903427124

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0032739639282227

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00099611282348633

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0015921592712402

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0016710758209229

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0016260147094727

select a.obm from acesso as a, modulo as m where usuario='7' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.002453088760376

SELECT * FROM plano WHERE status<4 and status>0 and obm in (4) ORDER BY datainicio DESC 
 Execution Time:0.091539859771729

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00092601776123047

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00083494186401367

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00048494338989258

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0013809204101562

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00052404403686523

select a.obm from acesso as a, modulo as m where usuario='7' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0006868839263916

SELECT * FROM plano WHERE status<4 and status>0 and obm in (4) ORDER BY datainicio DESC 
 Execution Time:0.0012030601501465

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00088620185852051

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00078296661376953

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0006709098815918

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0012907981872559

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0005340576171875

select a.obm from acesso as a, modulo as m where usuario='7' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00068902969360352

SELECT * FROM plano WHERE status<4 and status>0 and obm in (4) ORDER BY datainicio DESC 
 Execution Time:0.0012149810791016

select * from plano where status=4 order by datainicio DESC, datafim DESC 
 Execution Time:0.00067281723022461

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00050997734069824

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00040698051452637

SELECT *
FROM "plano"
WHERE "id" =  '15' 
 Execution Time:0.00085997581481934

SELECT *
FROM "plano"
WHERE "id" =  '15' 
 Execution Time:0.00035285949707031

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00061583518981934

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0016329288482666

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00050497055053711

select * from planejamento where plano='15' order by tipo ASC, dataprevista ASC 
 Execution Time:0.37637591362

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00037908554077148

select origemreceita, sum(valor) from planejamento where plano='15' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.021278858184814

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='15' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0010330677032471

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='15' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00059413909912109

select sum(valor) as total from planejamento where plano='15' and tipo=1 
 Execution Time:0.00027585029602051

select sum(valor) as total from planejamento where plano='15' and tipo=2 
 Execution Time:0.00024294853210449

