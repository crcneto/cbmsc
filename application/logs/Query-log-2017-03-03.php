SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.072139024734497

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.074223041534424

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.067832946777344

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.13839101791382

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.02764105796814

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0013787746429443

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.098986864089966

select * from obm where id='8' limit 1 
 Execution Time:0.00067305564880371

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0021488666534424

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00058794021606445

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00039505958557129

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.002086877822876

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.0007929801940918

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0010330677032471

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.073108911514282

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.032953023910522

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.17308378219604

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00048303604125977

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00036191940307617

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.015308856964111

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.0098509788513184

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.016630887985229

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.01329493522644

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.014213085174561

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0035099983215332

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00072097778320312

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00047397613525391

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0023279190063477

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00078487396240234

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0022039413452148

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0020442008972168

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.002190113067627

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0016810894012451

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0007321834564209

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0015461444854736

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0012800693511963

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00073385238647461

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00059199333190918

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.0011560916900635

select * from obm where id='8' limit 1 
 Execution Time:0.00047898292541504

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00055408477783203

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00041007995605469

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00043797492980957

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00037813186645508

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00036001205444336

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00044584274291992

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0010309219360352

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0010800361633301

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0020639896392822

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00038003921508789

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00028204917907715

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.001708984375

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00075507164001465

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00092697143554688

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0012450218200684

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00095891952514648

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0018670558929443

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00075793266296387

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00048089027404785

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0014309883117676

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00069999694824219

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00089907646179199

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0010910034179688

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00078296661376953

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0007319450378418

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00025486946105957

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00022101402282715

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00030303001403809

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00027108192443848

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029897689819336

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00070595741271973

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00056099891662598

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.001680850982666

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00048589706420898

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00038981437683105

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.001690149307251

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.0009620189666748

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0012350082397461

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.001554012298584

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00083422660827637

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0020420551300049

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00052881240844727

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00046086311340332

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0017359256744385

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00090479850769043

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00093984603881836

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0011229515075684

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0008699893951416

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0014541149139404

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00048398971557617

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00036001205444336

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0014240741729736

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00070285797119141

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00074219703674316

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00083589553833008

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00065398216247559

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00051689147949219

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0012779235839844

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00049400329589844

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0003969669342041

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00037407875061035

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00045895576477051

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00064182281494141

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00069689750671387

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0032250881195068

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0015559196472168

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00057506561279297

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0019669532775879

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00085711479187012

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0013751983642578

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0012362003326416

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00099992752075195

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00050806999206543

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0003969669342041

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00036501884460449

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00035786628723145

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00034594535827637

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040698051452637

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00062084197998047

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00046110153198242

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00053501129150391

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00044417381286621

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0010690689086914

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0008540153503418

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00036811828613281

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00036215782165527

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00055718421936035

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00057101249694824

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00041699409484863

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00033783912658691

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00037598609924316

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0003359317779541

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00061392784118652

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0005180835723877

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0013301372528076

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00067901611328125

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00057101249694824

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00047898292541504

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00034713745117188

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00051307678222656

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00034999847412109

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00045108795166016

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00048708915710449

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0004429817199707

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00052189826965332

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00038480758666992

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00036501884460449

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00036287307739258

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00034189224243164

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00038313865661621

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00056219100952148

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00069212913513184

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0012941360473633

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0007939338684082

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00063204765319824

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0015850067138672

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.0006101131439209

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00062394142150879

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0010180473327637

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00085687637329102

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00078415870666504

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00050902366638184

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00060606002807617

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00083398818969727

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.0009760856628418

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00073122978210449

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00085997581481934

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00092506408691406

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00058794021606445

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00057482719421387

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00043892860412598

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00063204765319824

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00040006637573242

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00037193298339844

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00094199180603027

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00088906288146973

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00044393539428711

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00042104721069336

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00044608116149902

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.0009920597076416

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.0003199577331543

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00032496452331543

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00043988227844238

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00046300888061523

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00041007995605469

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00029706954956055

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00025105476379395

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00029706954956055

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00027012825012207

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029993057250977

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0004429817199707

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00045680999755859

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.0011539459228516

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00070810317993164

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00054097175598145

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00041604042053223

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00039386749267578

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00047206878662109

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0006110668182373

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00073981285095215

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0017809867858887

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0011229515075684

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0013539791107178

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0015120506286621

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00070500373840332

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00073695182800293

SELECT * FROM plano WHERE status<4 and status>0 and obm in (1,4,5,3,9,7,8,10) ORDER BY datainicio DESC 
 Execution Time:0.0010659694671631

select * from obm where id='8' limit 1 
 Execution Time:0.00058197975158691

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00044798851013184

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00025296211242676

SELECT *
FROM "plano"
WHERE "id" =  '31' 
 Execution Time:0.00054216384887695

select id from modulo where nome='planejamento' order by id asc limit 1 
 Execution Time:0.00074005126953125

select nivel from acesso where usuario='2' and modulo='21'  and obm='8' 
 Execution Time:0.00049805641174316

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00031495094299316

select * from planejamento where plano='31' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00068211555480957

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00089097023010254

