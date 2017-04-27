SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.02522611618042

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.051890850067139

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.001154899597168

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.0011088848114014

select * from receitarestrita where id='3' 
 Execution Time:0.024988889694214

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.0005791187286377

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.00094079971313477

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.0024869441986084

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.0022149085998535

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.0010240077972412

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.0011329650878906

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.032458066940308

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.058481216430664

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.051491975784302

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.11570286750793

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.043834209442139

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0013999938964844

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.05449914932251

select * from obm where id='3' limit 1 
 Execution Time:0.00053095817565918

select * from obm where id='5' limit 1 
 Execution Time:0.0003199577331543

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0012059211730957

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0006871223449707

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0012290477752686

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0016319751739502

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00098490715026855

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0036041736602783

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.0015687942504883

select * from obm where id='3' limit 1 
 Execution Time:0.00070595741271973

select * from obm where id='5' limit 1 
 Execution Time:0.00045204162597656

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00045585632324219

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00032997131347656

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00029397010803223

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00053596496582031

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00030398368835449

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.000946044921875

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00052094459533691

select * from obm where id='3' limit 1 
 Execution Time:0.00035715103149414

select * from obm where id='5' limit 1 
 Execution Time:0.00026917457580566

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0010919570922852

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00065493583679199

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0015029907226562

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0011658668518066

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0008540153503418

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0019328594207764

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00063920021057129

select * from obm where id='3' limit 1 
 Execution Time:0.00027704238891602

select * from obm where id='5' limit 1 
 Execution Time:0.00023078918457031

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0018432140350342

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0006718635559082

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00078415870666504

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00077295303344727

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00051093101501465

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0011551380157471

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00078797340393066

select * from obm where id='3' limit 1 
 Execution Time:0.00028395652770996

select * from obm where id='5' limit 1 
 Execution Time:0.00023102760314941

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00054216384887695

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00095486640930176

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00035619735717773

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0004878044128418

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00037598609924316

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00045514106750488

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00041580200195312

select * from obm where id='3' limit 1 
 Execution Time:0.00026702880859375

select * from obm where id='5' limit 1 
 Execution Time:0.00026822090148926

select * from plano where status=4 order by datainicio DESC, datafim DESC 
 Execution Time:0.00091910362243652

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00067615509033203

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.029860019683838

select * from plano where status=4 and obm='7' order by datainicio DESC, datafim DESC 
 Execution Time:0.00085306167602539

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.001039981842041

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00087308883666992

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.00042915344238281

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.00040817260742188

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.00027298927307129

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.00023889541625977

SELECT *
FROM "origemreceita" 
 Execution Time:0.0017189979553223

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.00038409233093262

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.00030922889709473

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.00057697296142578

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.0015528202056885

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.00038719177246094

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.00032401084899902

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.00047802925109863

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.00059986114501953

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.00080299377441406

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.0013551712036133

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.085493087768555

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00093507766723633

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00043892860412598

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00035214424133301

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00027608871459961

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00055289268493652

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00032806396484375

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00049996376037598

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00047588348388672

select * from obm where id='3' limit 1 
 Execution Time:0.00034809112548828

select * from obm where id='5' limit 1 
 Execution Time:0.00037598609924316

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.00063705444335938

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.00071001052856445

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.00040698051452637

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.00031304359436035

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00055408477783203

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041699409484863

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00086188316345215

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00098609924316406

SELECT *
FROM "plano"
WHERE "id" =  '34' 
 Execution Time:0.00031208992004395

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00056791305541992

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040912628173828

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0010180473327637

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0011649131774902

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00047206878662109

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003049373626709

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00065183639526367

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00046586990356445

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00055098533630371

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00033283233642578

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00044012069702148

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00030708312988281

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0015799999237061

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00098204612731934

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.002007007598877

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0011529922485352

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00085020065307617

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0010778903961182

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00049281120300293

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00068783760070801

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00041699409484863

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00031495094299316

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00057101249694824

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003819465637207

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00092101097106934

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00088000297546387

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0015759468078613

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0011649131774902

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00047779083251953

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00033998489379883

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00058197975158691

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00037503242492676

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00055885314941406

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00046205520629883

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00084209442138672

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00048685073852539

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00059103965759277

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00047492980957031

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00046110153198242

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00031709671020508

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00042510032653809

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003058910369873

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00062799453735352

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003960132598877

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.00069999694824219

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.00069308280944824

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00044393539428711

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00035691261291504

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0016391277313232

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0013139247894287

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00065803527832031

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00050520896911621

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00049591064453125

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00091981887817383

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00045299530029297

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0034799575805664

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.0012011528015137

select * from obm where id='3' limit 1 
 Execution Time:0.00073385238647461

select * from obm where id='5' limit 1 
 Execution Time:0.00044894218444824

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00068187713623047

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00047492980957031

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.00077509880065918

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.00072789192199707

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00205397605896

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0019721984863281

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.00037598609924316

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.00031685829162598

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00067400932312012

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00056004524230957

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0005040168762207

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00085306167602539

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041389465332031

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0018999576568604

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00072598457336426

select * from obm where id='3' limit 1 
 Execution Time:0.00054097175598145

select * from obm where id='5' limit 1 
 Execution Time:0.00030112266540527

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00041294097900391

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00032305717468262

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00028514862060547

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00053310394287109

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041103363037109

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00059103965759277

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00045919418334961

select * from obm where id='3' limit 1 
 Execution Time:0.00038409233093262

select * from obm where id='5' limit 1 
 Execution Time:0.00037813186645508

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00037193298339844

SELECT *
FROM "plano"
WHERE "id" =  '37' 
 Execution Time:0.00029993057250977

SELECT *
FROM "plano"
WHERE "id" =  '37' 
 Execution Time:0.00023698806762695

select * from reprovacao where plano='37'; 
 Execution Time:0.070496082305908

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00072312355041504

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00031805038452148

select * from planejamento where plano='37' order by tipo ASC, dataprevista ASC 
 Execution Time:0.096678018569946

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.10427713394165

select origemreceita, sum(valor) from planejamento where plano='37' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.22114086151123

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='37' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0085558891296387

select sum(valor) as total from planejamento where plano='37' and tipo=1 
 Execution Time:0.00045990943908691

select sum(valor) as total from planejamento where plano='37' and tipo=2 
 Execution Time:0.00037980079650879

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.060529232025146

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00053715705871582

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00039291381835938

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00092291831970215

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00077199935913086

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0005800724029541

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00097990036010742

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041508674621582

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0018670558929443

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00065398216247559

select * from obm where id='3' limit 1 
 Execution Time:0.00040292739868164

select * from obm where id='5' limit 1 
 Execution Time:0.00032591819763184

SELECT *
FROM "origemreceita"
ORDER BY "nome" ASC 
 Execution Time:0.00055289268493652

SELECT *
FROM "plano"
WHERE "id" =  '37' 
 Execution Time:0.00031900405883789

SELECT *
FROM "plano"
WHERE "id" =  '37' 
 Execution Time:0.00025796890258789

select * from reprovacao where plano='37'; 
 Execution Time:0.00043606758117676

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00064897537231445

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003969669342041

select * from planejamento where plano='37' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00060677528381348

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0016050338745117

select origemreceita, sum(valor) from planejamento where plano='37' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00051379203796387

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='37' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00090599060058594

select sum(valor) as total from planejamento where plano='37' and tipo=1 
 Execution Time:0.00042986869812012

select sum(valor) as total from planejamento where plano='37' and tipo=2 
 Execution Time:0.0012331008911133

select st.id as setor_id, st.nome as setor, sb.id as id, sb.nome as subsetor from setor as st, subsetor as sb where st.id=sb.setor and sb.status=2 order by st.nome asc, sb.nome asc 
 Execution Time:0.00082683563232422

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.00049209594726562

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.00050187110900879

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.00045108795166016

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.00042605400085449

select * from receitarestrita where id='5' 
 Execution Time:0.00040197372436523

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.00036406517028809

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.00032401084899902

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.00053286552429199

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.00049996376037598

select * from receitarestrita where id='5' 
 Execution Time:0.00028681755065918

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.00039005279541016

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.00048613548278809

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.00041389465332031

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.00034499168395996

select * from receitarestrita where id='5' 
 Execution Time:0.00038003921508789

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.0005040168762207

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.0010330677032471

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00047492980957031

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00031399726867676

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00069499015808105

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00054097175598145

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00049090385437012

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0014691352844238

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00044012069702148

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0013959407806396

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.0011279582977295

select * from obm where id='3' limit 1 
 Execution Time:0.00095701217651367

select * from obm where id='5' limit 1 
 Execution Time:0.0002748966217041

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.00029587745666504

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.0002899169921875

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.00078701972961426

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.001276969909668

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00071406364440918

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0010769367218018

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.0004420280456543

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.00039792060852051

SELECT * FROM origemreceita WHERE status=3 
 Execution Time:0.00032496452331543

select * from receitarestrita order by data_inicial desc, data_final desc limit 50 
 Execution Time:0.00030207633972168

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0020549297332764

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00078582763671875

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0012218952178955

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0012869834899902

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00075387954711914

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0019600391387939

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.0010559558868408

select * from obm where id='3' limit 1 
 Execution Time:0.00031709671020508

select * from obm where id='5' limit 1 
 Execution Time:0.00023603439331055

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00045585632324219

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00062799453735352

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00040197372436523

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0011420249938965

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00071406364440918

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0009758472442627

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00085687637329102

select * from obm where id='7' limit 1 
 Execution Time:0.00064587593078613

select * from obm where id='3' limit 1 
 Execution Time:0.00043010711669922

select * from obm where id='5' limit 1 
 Execution Time:0.00041413307189941

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00040507316589355

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00028204917907715

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0002288818359375

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00046801567077637

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00024986267089844

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00037598609924316

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00030112266540527

select * from obm where id='3' limit 1 
 Execution Time:0.00020599365234375

select * from obm where id='5' limit 1 
 Execution Time:0.00019979476928711

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00093889236450195

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00099992752075195

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00084400177001953

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0014469623565674

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0008080005645752

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0009920597076416

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.00080394744873047

select * from obm where id='3' limit 1 
 Execution Time:0.00055503845214844

select * from obm where id='5' limit 1 
 Execution Time:0.0005950927734375

select * from obm where id='7' limit 1 
 Execution Time:0.00041818618774414

