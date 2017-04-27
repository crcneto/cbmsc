select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.034397840499878

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.033560037612915

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.056447982788086

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00078392028808594

SELECT *
FROM "obm"
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.058616161346436

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.11969089508057

select id, matricula, apelido, nome, email, obm, postograd, status from usuario order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00085592269897461

select id from modulo where nome='controledeacesso' order by id asc limit 1 
 Execution Time:0.0036661624908447

select * from acesso where usuario='2' and modulo='17' and nivel>0 
 Execution Time:0.0013208389282227

SELECT *
FROM "obm"
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0013220310211182

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.0010919570922852

select * from obm where id in (4,5,1,3,9,7,8,10,11) 
 Execution Time:0.00065112113952637

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0009300708770752

select id, matricula, apelido, nome, email, obm, postograd, status from usuario order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0014410018920898

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00056886672973633

select * from modulo where id in (18,20,17,19,22,15,21,7,16,24) 
 Execution Time:0.00045490264892578

select id from modulo where nome='controledeacesso' order by id asc limit 1 
 Execution Time:0.00038790702819824

select * from acesso where usuario='2' and modulo='17' and nivel>0 
 Execution Time:0.00034093856811523

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00035786628723145

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00022697448730469

SELECT *
FROM "obm"
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.000244140625

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00038385391235352

select * from obm where id in (4,5,1,3,9,7,8,10,11) 
 Execution Time:0.00024008750915527

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00025486946105957

select id, matricula, apelido, nome, email, obm, postograd, status from usuario order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00025105476379395

select * from acesso where usuario='2' and obm='9' 
 Execution Time:0.00026702880859375

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00027298927307129

select * from modulo where id in (18,20,17,19,22,15,21,7,16,24) 
 Execution Time:0.00025701522827148

select id from modulo where nome='controledeacesso' order by id asc limit 1 
 Execution Time:0.0005040168762207

select * from acesso where usuario='2' and modulo='17' and nivel>0 
 Execution Time:0.0005340576171875

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00044012069702148

SELECT *
FROM "obm"
WHERE "id" =  '1' 
 Execution Time:0.00038409233093262

SELECT *
FROM "obm"
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040006637573242

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00071215629577637

select * from obm where id in (4,5,1,3,9,7,8,10,11) 
 Execution Time:0.00040507316589355

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00045394897460938

select id, matricula, apelido, nome, email, obm, postograd, status from usuario order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00049281120300293

select * from acesso where usuario='2' and obm='1' 
 Execution Time:0.00063586235046387

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.0028131008148193

select * from modulo where id in (18,20,17,19,22,15,21,7,16,24) 
 Execution Time:0.00055098533630371

select id from modulo where nome='controledeacesso' order by id asc limit 1 
 Execution Time:0.0014901161193848

select * from acesso where usuario='2' and modulo='17' and nivel>0 
 Execution Time:0.00081706047058105

SELECT *
FROM "obm"
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00059413909912109

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00042891502380371

select * from obm where id in (4,5,1,3,9,7,8,10,11) 
 Execution Time:0.0002748966217041

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00045013427734375

select id, matricula, apelido, nome, email, obm, postograd, status from usuario order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00048398971557617

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00037002563476562

select * from modulo where id in (18,20,17,19,22,15,21,7,16,24) 
 Execution Time:0.00034284591674805

SELECT *
FROM "setor"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.068641901016235

SELECT *
FROM "setor"
ORDER BY "nome" 
 Execution Time:0.00079989433288574

SELECT *
FROM "setor"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.001945972442627

SELECT *
FROM "setor"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0034778118133545

SELECT *
FROM "setor"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0022509098052979

SELECT *
FROM "setor"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0022339820861816

SELECT *
FROM "setor"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00043892860412598

SELECT *
FROM "setor"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00042986869812012

SELECT *
FROM "setor"
WHERE "id" =  '4' 
 Execution Time:0.00037503242492676

SELECT *
FROM "setor"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0026021003723145

SELECT *
FROM "setor"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0022809505462646

SELECT *
FROM "setor"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0024189949035645

SELECT *
FROM "setor"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00061798095703125

SELECT *
FROM "setor"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00089716911315918

SELECT *
FROM "setor"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00067996978759766

SELECT *
FROM "setor"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00047087669372559

SELECT *
FROM "setor"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0004119873046875

SELECT *
FROM "setor"
WHERE "id" =  '4' 
 Execution Time:0.00036287307739258

SELECT *
FROM "setor"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0008080005645752

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00039887428283691

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00045490264892578

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00063395500183105

SELECT *
FROM "setor"
WHERE "id" =  '4' 
 Execution Time:0.00066900253295898

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00052189826965332

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00032210350036621

SELECT *
FROM "setor"
WHERE "id" =  '4' 
 Execution Time:0.00025010108947754

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.0010688304901123

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00069713592529297

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00032615661621094

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00044393539428711

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.0020520687103271

SELECT *
FROM "setor"
WHERE "id" =  '4' 
 Execution Time:0.0005030632019043

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.0006558895111084

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00043702125549316

SELECT *
FROM "setor"
WHERE "id" =  '4' 
 Execution Time:0.00037908554077148

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00044798851013184

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00037693977355957

SELECT *
FROM "setor"
WHERE "id" =  '4' 
 Execution Time:0.0003349781036377

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00028610229492188

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.0004570484161377

SELECT *
FROM "setor"
WHERE "id" =  '4' 
 Execution Time:0.00041985511779785

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00049090385437012

SELECT *
FROM "setor"
WHERE "id" =  '0' 
 Execution Time:0.00081086158752441

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00028586387634277

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00041389465332031

SELECT *
FROM "setor"
WHERE "id" =  '0' 
 Execution Time:0.00046300888061523

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00030088424682617

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.0015380382537842

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.0003361701965332

SELECT *
FROM "setor"
WHERE "id" =  '5' 
 Execution Time:0.0002901554107666

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.0014309883117676

SELECT *
FROM "setor"
WHERE "id" =  '4' 
 Execution Time:0.00048613548278809

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00038504600524902

SELECT *
FROM "setor"
WHERE "id" =  '4' 
 Execution Time:0.00043916702270508

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00038003921508789

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00030803680419922

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00037002563476562

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.0003819465637207

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00047206878662109

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00038409233093262

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.001662015914917

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00041103363037109

SELECT *
FROM "setor"
WHERE "id" =  '7' 
 Execution Time:0.00038599967956543

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00034308433532715

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00032901763916016

SELECT *
FROM "setor"
WHERE "id" =  '7' 
 Execution Time:0.00025320053100586

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00066089630126953

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00033998489379883

SELECT *
FROM "setor"
WHERE "id" =  '7' 
 Execution Time:0.00026893615722656

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00042200088500977

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00062298774719238

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.0005190372467041

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00037193298339844

SELECT *
FROM "setor"
WHERE "id" =  '8' 
 Execution Time:0.00031113624572754

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00081515312194824

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00033402442932129

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00090289115905762

SELECT *
FROM "subsetor"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0010130405426025

SELECT *
FROM "subsetor" 
 Execution Time:0.00060200691223145

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00062108039855957

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00038003921508789

SELECT *
FROM "subsetor"
ORDER BY "nome" ASC 
 Execution Time:0.0023880004882812

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.0020589828491211

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00040411949157715

SELECT *
FROM "subsetor"
ORDER BY "nome" ASC 
 Execution Time:0.00068998336791992

SELECT *
FROM "subsetor"
WHERE "id" =  '4' 
 Execution Time:0.0006251335144043

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00033092498779297

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00023007392883301

SELECT *
FROM "subsetor"
ORDER BY "nome" ASC 
 Execution Time:0.00023603439331055

SELECT *
FROM "subsetor"
WHERE "id" =  '11' 
 Execution Time:0.00024199485778809

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00041103363037109

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00026988983154297

SELECT *
FROM "subsetor"
ORDER BY "nome" ASC 
 Execution Time:0.0005338191986084

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.0010049343109131

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00071406364440918

SELECT *
FROM "subsetor"
ORDER BY "nome" ASC 
 Execution Time:0.00078201293945312

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00039982795715332

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00028395652770996

SELECT *
FROM "subsetor"
ORDER BY "nome" ASC 
 Execution Time:0.00051188468933105

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00040102005004883

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.0002748966217041

SELECT *
FROM "subsetor"
ORDER BY "nome" ASC 
 Execution Time:0.00049304962158203

SELECT *
FROM "subsetor"
WHERE "id" =  '3' 
 Execution Time:0.00031089782714844

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00044107437133789

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00029492378234863

SELECT *
FROM "subsetor"
ORDER BY "nome" ASC 
 Execution Time:0.00035405158996582

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00034618377685547

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00023889541625977

SELECT *
FROM "subsetor"
ORDER BY "nome" ASC 
 Execution Time:0.00024580955505371

SELECT *
FROM "subsetor"
WHERE "id" =  '4' 
 Execution Time:0.00027084350585938

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00040984153747559

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00030207633972168

SELECT *
FROM "subsetor"
ORDER BY "nome" ASC 
 Execution Time:0.00033187866210938

SELECT *
FROM "subsetor"
WHERE "id" =  '4' 
 Execution Time:0.00035285949707031

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.0010077953338623

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00039005279541016

SELECT *
FROM "subsetor"
ORDER BY "nome" ASC 
 Execution Time:0.0003669261932373

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00046396255493164

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.0005190372467041

SELECT *
FROM "subsetor"
ORDER BY "nome" ASC 
 Execution Time:0.00088787078857422

SELECT *
FROM "subsetor"
WHERE "id" =  '4' 
 Execution Time:0.00039982795715332

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00036907196044922

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00026392936706543

SELECT *
FROM "subsetor"
ORDER BY "nome" ASC 
 Execution Time:0.00030803680419922

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00037598609924316

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00033307075500488

SELECT *
FROM "setor"
WHERE "id" =  '0' 
 Execution Time:0.00024294853210449

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00037002563476562

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00037693977355957

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00023508071899414

SELECT *
FROM "subsetor"
ORDER BY "nome" ASC 
 Execution Time:0.00026297569274902

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.0005040168762207

SELECT *
FROM "setor"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00049996376037598

SELECT *
FROM "subsetor"
ORDER BY "nome" ASC 
 Execution Time:0.00033903121948242

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00050592422485352

SELECT *
FROM "setor"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00041699409484863

SELECT *
FROM "subsetor"
ORDER BY "nome" ASC 
 Execution Time:0.00040221214294434

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00047397613525391

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00032806396484375

SELECT *
FROM "setor"
WHERE "id" =  '0' 
 Execution Time:0.00024986267089844

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00044798851013184

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00035476684570312

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00044012069702148

SELECT *
FROM "setor"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00046801567077637

SELECT *
FROM "subsetor"
ORDER BY "nome" ASC 
 Execution Time:0.00096797943115234

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00042390823364258

SELECT *
FROM "setor"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0003669261932373

SELECT *
FROM "subsetor"
ORDER BY "nome" ASC 
 Execution Time:0.00033307075500488

SELECT *
FROM "subsetor"
WHERE "id" =  '4' 
 Execution Time:0.00034594535827637

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00041508674621582

SELECT *
FROM "setor"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00063896179199219

SELECT *
FROM "subsetor"
ORDER BY "nome" ASC 
 Execution Time:0.00060415267944336

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00033020973205566

SELECT *
FROM "setor"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00028085708618164

SELECT *
FROM "subsetor"
ORDER BY "nome" ASC 
 Execution Time:0.00023984909057617

SELECT *
FROM "subsetor"
WHERE "id" =  '3' 
 Execution Time:0.00024008750915527

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00047016143798828

SELECT *
FROM "setor"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00028109550476074

SELECT *
FROM "subsetor"
ORDER BY "nome" ASC 
 Execution Time:0.00025105476379395

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00077199935913086

SELECT *
FROM "setor"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00067901611328125

SELECT *
FROM "subsetor"
ORDER BY "nome" ASC 
 Execution Time:0.0006721019744873

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00034689903259277

SELECT *
FROM "setor"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00026202201843262

SELECT *
FROM "subsetor"
ORDER BY "nome" ASC 
 Execution Time:0.00023722648620605

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.0003960132598877

SELECT *
FROM "setor"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00033116340637207

SELECT *
FROM "subsetor"
ORDER BY "nome" ASC 
 Execution Time:0.00038814544677734

SELECT *
FROM "subsetor"
WHERE "id" =  '4' 
 Execution Time:0.00035405158996582

select id from modulo where nome='controledeacesso' order by id asc limit 1 
 Execution Time:0.0011718273162842

select * from acesso where usuario='2' and modulo='17' and nivel>0 
 Execution Time:0.00069808959960938

SELECT *
FROM "obm"
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00050997734069824

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='controledeacesso' and nivel=5 
 Execution Time:0.00059103965759277

select * from obm where id in (4,5,1,3,9,7,8,10,11) 
 Execution Time:0.0003819465637207

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00052499771118164

select id, matricula, apelido, nome, email, obm, postograd, status from usuario order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0010209083557129

select modulo from acesso where usuario='2' and nivel>=5 group by modulo 
 Execution Time:0.00057005882263184

select * from modulo where id in (18,20,17,19,22,15,21,7,16,24) 
 Execution Time:0.00048303604125977

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00084900856018066

SELECT *
FROM "postograd"
ORDER BY "nome" 
 Execution Time:0.00059008598327637

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00041294097900391

SELECT *
FROM "postograd"
ORDER BY "nome" 
 Execution Time:0.00026607513427734

SELECT *
FROM "modulo"
ORDER BY "nome" ASC 
 Execution Time:0.00057601928710938

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00036811828613281

SELECT *
FROM "setor"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00072312355041504

SELECT *
FROM "subsetor"
ORDER BY "nome" ASC 
 Execution Time:0.0010449886322021

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00047492980957031

SELECT *
FROM "setor"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0004880428314209

SELECT *
FROM "subsetor"
ORDER BY "nome" ASC 
 Execution Time:0.00037598609924316

SELECT *
FROM "subsetor"
WHERE "id" =  '4' 
 Execution Time:0.00034713745117188

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00044083595275879

SELECT *
FROM "setor"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00037693977355957

SELECT *
FROM "subsetor"
ORDER BY "nome" ASC 
 Execution Time:0.00035214424133301

SELECT *
FROM "subsetor"
WHERE "id" =  '4' 
 Execution Time:0.00033402442932129

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00039196014404297

SELECT *
FROM "setor"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00036787986755371

SELECT *
FROM "subsetor"
ORDER BY "nome" ASC 
 Execution Time:0.00030183792114258

SELECT *
FROM "subsetor"
WHERE "id" =  '3' 
 Execution Time:0.00027179718017578

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.0002899169921875

SELECT *
FROM "setor"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00026416778564453

SELECT *
FROM "subsetor"
ORDER BY "nome" ASC 
 Execution Time:0.00035500526428223

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00036811828613281

SELECT *
FROM "setor"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00025701522827148

select ss.id, ss.nome, ss.setor, ss.status from subsetor as ss, setor as s where ss.setor=s.id order by s.nome asc, ss.nome asc 
 Execution Time:0.00055789947509766

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00059795379638672

SELECT *
FROM "setor"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00034284591674805

select ss.id, ss.nome, ss.setor, ss.status from subsetor as ss, setor as s where ss.setor=s.id order by s.nome asc, ss.nome asc 
 Execution Time:0.0006718635559082

SELECT *
FROM "subsetor"
WHERE "id" =  '4' 
 Execution Time:0.00031709671020508

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00037598609924316

SELECT *
FROM "setor"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00028610229492188

select ss.id, ss.nome, ss.setor, ss.status from subsetor as ss, setor as s where ss.setor=s.id order by s.nome asc, ss.nome asc 
 Execution Time:0.00060105323791504

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00038313865661621

SELECT *
FROM "setor"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00036811828613281

select ss.id, ss.nome, ss.setor, ss.status from subsetor as ss, setor as s where ss.setor=s.id order by s.nome asc, ss.nome asc 
 Execution Time:0.00051999092102051

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00044393539428711

SELECT *
FROM "setor"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00046801567077637

select ss.id, ss.nome, ss.setor, ss.status from subsetor as ss, setor as s where ss.setor=s.id order by s.nome asc, ss.nome asc 
 Execution Time:0.00087523460388184

SELECT *
FROM "subsetor"
WHERE "id" =  '4' 
 Execution Time:0.0003809928894043

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00035500526428223

SELECT *
FROM "setor"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00027894973754883

select ss.id, ss.nome, ss.setor, ss.status from subsetor as ss, setor as s where ss.setor=s.id order by s.nome asc, ss.nome asc 
 Execution Time:0.00054717063903809

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00037288665771484

SELECT *
FROM "setor"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00042390823364258

select ss.id, ss.nome, ss.setor, ss.status from subsetor as ss, setor as s where ss.setor=s.id order by s.nome asc, ss.nome asc 
 Execution Time:0.0011119842529297

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00048494338989258

SELECT *
FROM "setor"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00042104721069336

select ss.id, ss.nome, ss.setor, ss.status from subsetor as ss, setor as s where ss.setor=s.id order by s.nome asc, ss.nome asc 
 Execution Time:0.00081896781921387

SELECT *
FROM "setor"
ORDER BY "nome" ASC 
 Execution Time:0.00068092346191406

SELECT *
FROM "setor"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0005638599395752

select ss.id, ss.nome, ss.setor, ss.status from subsetor as ss, setor as s where ss.setor=s.id order by s.nome asc, ss.nome asc 
 Execution Time:0.00091099739074707

