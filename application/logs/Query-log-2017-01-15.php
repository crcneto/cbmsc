SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.10738706588745

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00046086311340332

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00037693977355957

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0099630355834961

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00074887275695801

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00062012672424316

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.069027900695801

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.074105024337769

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00057697296142578

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00044703483581543

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00045108795166016

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.0078251361846924

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00045299530029297

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00033807754516602

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028896331787109

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00027608871459961

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00027918815612793

SELECT *
FROM "usuario"
WHERE "id" =  '6' 
 Execution Time:0.00037002563476562

SELECT *
FROM "obm"
WHERE "id" =  '10' 
 Execution Time:0.00026106834411621

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00031113624572754

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00028491020202637

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028395652770996

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00028395652770996

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00027799606323242

select * from acesso where usuario='6' and obm='10' 
 Execution Time:0.1853358745575

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00049304962158203

SELECT *
FROM "obm"
WHERE "id" =  '10' 
 Execution Time:0.00047397613525391

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00078296661376953

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0004429817199707

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00050997734069824

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00043797492980957

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00028300285339355

select * from acesso where usuario='2' and obm='10' 
 Execution Time:0.00044703483581543

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00040602684020996

SELECT *
FROM "obm"
WHERE "id" =  '1' 
 Execution Time:0.00027298927307129

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00031399726867676

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0003969669342041

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041413307189941

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00029301643371582

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00034093856811523

select * from acesso where usuario='2' and obm='1' 
 Execution Time:0.00024604797363281

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00039792060852051

SELECT *
FROM "obm"
WHERE "id" =  '10' 
 Execution Time:0.00027179718017578

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00037503242492676

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00046396255493164

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029897689819336

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0002901554107666

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00026202201843262

select * from acesso where usuario='2' and obm='10' 
 Execution Time:0.00046396255493164

SELECT *
FROM "usuario"
WHERE "id" =  '2' 
 Execution Time:0.00041413307189941

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0003209114074707

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00033187866210938

SELECT *
FROM "modulo"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00030303001403809

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00091004371643066

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00046682357788086

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00031709671020508

select * from acesso where usuario='2' and obm='3' 
 Execution Time:0.00025510787963867

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0017211437225342

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00056195259094238

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00055098533630371

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00041699409484863

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00042915344238281

SELECT *
FROM "plano"
WHERE "status" =  2
ORDER BY "datainicio" 
 Execution Time:0.00056910514831543

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.0002598762512207

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00023007392883301

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.18605899810791

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.0003509521484375

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00022697448730469

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.13300585746765

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0010929107666016

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.059223890304565

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0010621547698975

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.21400284767151

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.010159015655518

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.0002589225769043

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.0002140998840332

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:1.3446650505066

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00063419342041016

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00043892860412598

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.51287508010864

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0122230052948

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.08252215385437

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.047716856002808

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.026687145233154

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.040560007095337

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.01945686340332

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00047087669372559

SELECT *
FROM "plano"
WHERE "status" =  2
ORDER BY "datainicio" 
 Execution Time:0.00057101249694824

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00053286552429199

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0004420280456543

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00055480003356934

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00041890144348145

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00037002563476562

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00086808204650879

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00058984756469727

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.0012941360473633

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00037002563476562

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00030303001403809

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0018768310546875

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00060796737670898

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.0015230178833008

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00036907196044922

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.0003349781036377

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0030031204223633

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0010688304901123

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.0019989013671875

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00084090232849121

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00034689903259277

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0022530555725098

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00061392784118652

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.0013329982757568

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00038909912109375

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00044608116149902

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0035748481750488

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0012938976287842

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.0020031929016113

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.0010859966278076

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00036001205444336

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.002518892288208

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0012228488922119

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.0040349960327148

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00094199180603027

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00054097175598145

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0032989978790283

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00060892105102539

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.0013689994812012

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00083804130554199

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00026988983154297

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00063300132751465

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028610229492188

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00193190574646

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00043296813964844

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00038909912109375

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0028619766235352

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00089097023010254

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.001007080078125

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00034117698669434

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00048995018005371

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0010881423950195

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040292739868164

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.002068042755127

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00049304962158203

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00037097930908203

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0028550624847412

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0006859302520752

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.0012121200561523

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.0004429817199707

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00034904479980469

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0013020038604736

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00060510635375977

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.0007328987121582

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00077700614929199

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00053310394287109

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00083494186401367

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00046515464782715

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.0010559558868408

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00066590309143066

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.0003209114074707

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00068807601928711

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00039196014404297

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.0011379718780518

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00028896331787109

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00022196769714355

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00055789947509766

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00035786628723145

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00085306167602539

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00088715553283691

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0014770030975342

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00069117546081543

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00049901008605957

SELECT *
FROM "plano"
WHERE "status" =  2
ORDER BY "datainicio" 
 Execution Time:0.0015161037445068

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.0010809898376465

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00048494338989258

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.13258099555969

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00084590911865234

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00086402893066406

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.052340030670166

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0013999938964844

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.025728940963745

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0012409687042236

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00068902969360352

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00087499618530273

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.00041604042053223

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00046300888061523

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00046586990356445

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00025510787963867

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00034999847412109

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0010108947753906

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00034999847412109

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.000885009765625

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00047588348388672

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00041294097900391

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0019338130950928

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00049710273742676

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00073409080505371

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0016911029815674

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00066804885864258

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.001162052154541

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00032901763916016

SELECT *
FROM "plano"
WHERE "status" =  2
ORDER BY "datainicio" 
 Execution Time:0.00056290626525879

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00026702880859375

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00024604797363281

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00067901611328125

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0010161399841309

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0012860298156738

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00061988830566406

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00083494186401367

SELECT *
FROM "plano"
WHERE "status" =  2
ORDER BY "datainicio" 
 Execution Time:0.00050902366638184

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00030183792114258

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00025510787963867

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0010111331939697

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00086808204650879

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00035595893859863

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00053882598876953

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0007331371307373

SELECT *
FROM "plano"
WHERE "status" =  2
ORDER BY "datainicio" 
 Execution Time:0.00042319297790527

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.0002751350402832

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00024890899658203

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00070285797119141

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00075697898864746

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00082206726074219

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00066900253295898

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041103363037109

SELECT *
FROM "plano"
WHERE "status" =  2
ORDER BY "datainicio" 
 Execution Time:0.0014688968658447

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00081300735473633

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00026893615722656

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0012791156768799

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00042390823364258

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00032186508178711

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00026702880859375

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0002741813659668

SELECT *
FROM "plano"
WHERE "status" =  2
ORDER BY "datainicio" 
 Execution Time:0.00064992904663086

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00046896934509277

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00032806396484375

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.0013399124145508

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00065708160400391

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00033998489379883

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00070500373840332

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00039291381835938

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00069093704223633

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00037503242492676

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0003969669342041

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00037980079650879

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00026798248291016

SELECT *
FROM "plano"
WHERE "status" =  2
ORDER BY "datainicio" 
 Execution Time:0.00027990341186523

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00023102760314941

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00024509429931641

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0012710094451904

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00081706047058105

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00036501884460449

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0010411739349365

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00064396858215332

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0010449886322021

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00046014785766602

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00093317031860352

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00083494186401367

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.00044417381286621

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.0003809928894043

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.0004270076751709

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00026988983154297

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00022506713867188

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00058794021606445

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0002589225769043

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0010838508605957

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00056290626525879

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00035905838012695

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00032901763916016

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00032806396484375

SELECT *
FROM "plano"
WHERE "status" =  2
ORDER BY "datainicio" 
 Execution Time:0.0003199577331543

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.0002739429473877

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00026297569274902

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.036854982376099

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00061416625976562

SELECT *
FROM "postograd"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00057411193847656

SELECT *
FROM "usuario" 
 Execution Time:0.00045299530029297

select * from plano where status=4 order by datainicio DESC, datafim DESC 
 Execution Time:0.0006251335144043

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004420280456543

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00055313110351562

SELECT *
FROM "plano"
WHERE "id" =  '20' 
 Execution Time:0.0005040168762207

SELECT *
FROM "plano"
WHERE "id" =  '20' 
 Execution Time:0.00060892105102539

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00074601173400879

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0006558895111084

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00058579444885254

select * from planejamento where plano='20' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00073790550231934

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00036191940307617

select origemreceita, sum(valor) from planejamento where plano='20' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00069904327392578

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='20' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00073790550231934

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='20' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00077915191650391

select sum(valor) as total from planejamento where plano='20' and tipo=1 
 Execution Time:0.00052404403686523

select sum(valor) as total from planejamento where plano='20' and tipo=2 
 Execution Time:0.00048589706420898

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00049781799316406

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.0003969669342041

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00026702880859375

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00027203559875488

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028014183044434

SELECT *
FROM "plano"
WHERE "status" =  2
ORDER BY "datainicio" 
 Execution Time:0.00031900405883789

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00022292137145996

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00021910667419434

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00097990036010742

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00042486190795898

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00070095062255859

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00092697143554688

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00046396255493164

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00080108642578125

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00073504447937012

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00095510482788086

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0011649131774902

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.00038695335388184

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00038886070251465

select * from plano where status=4 order by datainicio DESC, datafim DESC 
 Execution Time:0.0009009838104248

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00035810470581055

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00037789344787598

SELECT *
FROM "plano"
WHERE "id" =  '16' 
 Execution Time:0.00034403800964355

SELECT *
FROM "plano"
WHERE "id" =  '16' 
 Execution Time:0.00024104118347168

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00043010711669922

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00044012069702148

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00025010108947754

select * from planejamento where plano='16' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00050210952758789

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00027203559875488

select origemreceita, sum(valor) from planejamento where plano='16' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.0003969669342041

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='16' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00064992904663086

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='16' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00040602684020996

select sum(valor) as total from planejamento where plano='16' and tipo=1 
 Execution Time:0.00022077560424805

select sum(valor) as total from planejamento where plano='16' and tipo=2 
 Execution Time:0.00021696090698242

select * from plano where status=4 order by datainicio DESC, datafim DESC 
 Execution Time:0.00054287910461426

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00058579444885254

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00055694580078125

SELECT *
FROM "plano"
WHERE "id" =  '16' 
 Execution Time:0.00040006637573242

SELECT *
FROM "plano"
WHERE "id" =  '16' 
 Execution Time:0.00037693977355957

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00034904479980469

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00040578842163086

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00033998489379883

select * from planejamento where plano='16' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00033998489379883

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00035905838012695

select origemreceita, sum(valor) from planejamento where plano='16' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00034904479980469

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='16' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00066399574279785

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='16' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00058102607727051

select sum(valor) as total from planejamento where plano='16' and tipo=1 
 Execution Time:0.00034213066101074

select sum(valor) as total from planejamento where plano='16' and tipo=2 
 Execution Time:0.00030708312988281

SELECT *
FROM "plano"
WHERE "id" =  '16' 
 Execution Time:0.00056004524230957

SELECT *
FROM "plano"
WHERE "id" =  '16' 
 Execution Time:0.00044393539428711

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00038504600524902

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0004270076751709

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00033211708068848

select * from planejamento where plano='16' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00029993057250977

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00035190582275391

select origemreceita, sum(valor) from planejamento where plano='16' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00034999847412109

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='16' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00064802169799805

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='16' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00060701370239258

select sum(valor) as total from planejamento where plano='16' and tipo=1 
 Execution Time:0.00028109550476074

select sum(valor) as total from planejamento where plano='16' and tipo=2 
 Execution Time:0.00025796890258789

select * from plano where status=4 order by datainicio DESC, datafim DESC 
 Execution Time:0.00094699859619141

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00076985359191895

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0005950927734375

SELECT *
FROM "plano"
WHERE "id" =  '15' 
 Execution Time:0.00081396102905273

SELECT *
FROM "plano"
WHERE "id" =  '15' 
 Execution Time:0.00044107437133789

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00037693977355957

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00038409233093262

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00052022933959961

select * from planejamento where plano='15' order by tipo ASC, dataprevista ASC 
 Execution Time:0.01335597038269

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00052189826965332

select origemreceita, sum(valor) from planejamento where plano='15' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.0069849491119385

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='15' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.033344984054565

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='15' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00066494941711426

select sum(valor) as total from planejamento where plano='15' and tipo=1 
 Execution Time:0.00038599967956543

select sum(valor) as total from planejamento where plano='15' and tipo=2 
 Execution Time:0.00033807754516602

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00081801414489746

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00060701370239258

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00053501129150391

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00036191940307617

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00076198577880859

SELECT *
FROM "plano"
WHERE "status" =  2
ORDER BY "datainicio" 
 Execution Time:0.00069713592529297

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00032401084899902

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00047802925109863

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00078487396240234

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.0004119873046875

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00023698806762695

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00082182884216309

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00076198577880859

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00068807601928711

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00066590309143066

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.001039981842041

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00070691108703613

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.00022602081298828

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00020694732666016

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00064301490783691

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00045609474182129

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0003209114074707

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00032615661621094

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0011730194091797

SELECT *
FROM "plano"
WHERE "status" =  2
ORDER BY "datainicio" 
 Execution Time:0.00069212913513184

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00038480758666992

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00022101402282715

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00065708160400391

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00061798095703125

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00037693977355957

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00092911720275879

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0010271072387695

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00091910362243652

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00053000450134277

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.0010511875152588

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00069785118103027

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0010030269622803

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003049373626709

select * from plano where status=4 order by datainicio DESC, datafim DESC 
 Execution Time:0.00073909759521484

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00054717063903809

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00047588348388672

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00058913230895996

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00048613548278809

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0007178783416748

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00065803527832031

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00035691261291504

select * from planejamento where plano='18' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0006401538848877

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00029301643371582

select origemreceita, sum(valor) from planejamento where plano='18' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00061202049255371

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='18' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0018250942230225

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='18' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00059318542480469

select sum(valor) as total from planejamento where plano='18' and tipo=1 
 Execution Time:0.00037002563476562

select sum(valor) as total from planejamento where plano='18' and tipo=2 
 Execution Time:0.0006248950958252

select * from plano where status=4 order by datainicio DESC, datafim DESC 
 Execution Time:0.0012681484222412

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00076508522033691

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00077295303344727

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00084900856018066

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00060200691223145

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00042581558227539

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00041389465332031

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041699409484863

select * from planejamento where plano='18' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00046992301940918

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00037002563476562

select origemreceita, sum(valor) from planejamento where plano='18' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00039815902709961

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='18' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0012459754943848

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='18' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.001471996307373

select sum(valor) as total from planejamento where plano='18' and tipo=1 
 Execution Time:0.00048685073852539

select sum(valor) as total from planejamento where plano='18' and tipo=2 
 Execution Time:0.00057411193847656

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00078201293945312

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00059413909912109

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0014560222625732

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00068211555480957

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00075197219848633

SELECT *
FROM "plano"
WHERE "status" =  2
ORDER BY "datainicio" 
 Execution Time:0.00062704086303711

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.0003211498260498

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00026893615722656

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00053191184997559

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00051093101501465

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00037908554077148

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00073790550231934

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040602684020996

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00058794021606445

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00038599967956543

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00081610679626465

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00072407722473145

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003960132598877

SELECT *
FROM "plano"
WHERE "status" =  2
ORDER BY "datainicio" 
 Execution Time:0.00061392784118652

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00051689147949219

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00040698051452637

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00042891502380371

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00040578842163086

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00032305717468262

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00041294097900391

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003809928894043

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00035786628723145

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0003352165222168

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00053906440734863

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00071406364440918

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.00035476684570312

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00032496452331543

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00064182281494141

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00089097023010254

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00049901008605957

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0006248950958252

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00027990341186523

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.001539945602417

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00085806846618652

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00051999092102051

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00051617622375488

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041389465332031

SELECT *
FROM "plano"
WHERE "status" =  2
ORDER BY "datainicio" 
 Execution Time:0.00063800811767578

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00034785270690918

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00033211708068848

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00059103965759277

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00048112869262695

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00027990341186523

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00094914436340332

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0010108947753906

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00041890144348145

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00035190582275391

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00026893615722656

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0006101131439209

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028419494628906

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00039100646972656

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00031495094299316

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00027704238891602

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00029706954956055

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028204917907715

select * from planejamento where plano='18' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0003509521484375

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00025510787963867

select origemreceita, sum(valor) from planejamento where plano='18' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00029206275939941

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='18' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00050783157348633

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='18' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00066709518432617

select sum(valor) as total from planejamento where plano='18' and tipo=1 
 Execution Time:0.00036096572875977

select sum(valor) as total from planejamento where plano='18' and tipo=2 
 Execution Time:0.00033807754516602

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.0012128353118896

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00039505958557129

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00033998489379883

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00037503242492676

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00034809112548828

select * from planejamento where plano='18' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00042390823364258

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00037002563476562

select origemreceita, sum(valor) from planejamento where plano='18' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00038504600524902

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='18' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00064706802368164

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='18' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00064611434936523

select sum(valor) as total from planejamento where plano='18' and tipo=1 
 Execution Time:0.00036311149597168

select sum(valor) as total from planejamento where plano='18' and tipo=2 
 Execution Time:0.0003209114074707

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00077509880065918

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00036191940307617

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00034785270690918

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0007929801940918

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00096297264099121

select * from planejamento where plano='18' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00049495697021484

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00038504600524902

select origemreceita, sum(valor) from planejamento where plano='18' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.0004889965057373

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='18' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00078797340393066

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='18' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00058603286743164

select sum(valor) as total from planejamento where plano='18' and tipo=1 
 Execution Time:0.00043916702270508

select sum(valor) as total from planejamento where plano='18' and tipo=2 
 Execution Time:0.00039291381835938

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00069904327392578

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00052595138549805

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0015950202941895

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0017950534820557

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00049805641174316

select * from planejamento where plano='18' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00099396705627441

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00081396102905273

select origemreceita, sum(valor) from planejamento where plano='18' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.0016238689422607

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='18' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0010731220245361

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='18' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00097107887268066

select sum(valor) as total from planejamento where plano='18' and tipo=1 
 Execution Time:0.00038814544677734

select sum(valor) as total from planejamento where plano='18' and tipo=2 
 Execution Time:0.00026297569274902

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.001215934753418

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00046992301940918

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00061202049255371

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00079202651977539

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00045084953308105

select * from planejamento where plano='18' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00095701217651367

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00040817260742188

select origemreceita, sum(valor) from planejamento where plano='18' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00074410438537598

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='18' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00084996223449707

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='18' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.0013060569763184

select sum(valor) as total from planejamento where plano='18' and tipo=1 
 Execution Time:0.00077700614929199

select sum(valor) as total from planejamento where plano='18' and tipo=2 
 Execution Time:0.00035786628723145

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00045299530029297

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00034904479980469

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00067806243896484

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00070095062255859

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00045514106750488

select * from planejamento where plano='18' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00037384033203125

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00033307075500488

select origemreceita, sum(valor) from planejamento where plano='18' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00034403800964355

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='18' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00057697296142578

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='18' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00049304962158203

select sum(valor) as total from planejamento where plano='18' and tipo=1 
 Execution Time:0.00031304359436035

select sum(valor) as total from planejamento where plano='18' and tipo=2 
 Execution Time:0.00044393539428711

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00060105323791504

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00057315826416016

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00059413909912109

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0015280246734619

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040197372436523

select * from planejamento where plano='18' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00039410591125488

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00032186508178711

select origemreceita, sum(valor) from planejamento where plano='18' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00035691261291504

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='18' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00057411193847656

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='18' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.0005340576171875

select sum(valor) as total from planejamento where plano='18' and tipo=1 
 Execution Time:0.00029897689819336

select sum(valor) as total from planejamento where plano='18' and tipo=2 
 Execution Time:0.00024700164794922

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.0015280246734619

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00064897537231445

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00045299530029297

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00048279762268066

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00043892860412598

select * from planejamento where plano='18' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00053715705871582

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0003969669342041

select origemreceita, sum(valor) from planejamento where plano='18' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00045180320739746

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='18' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0006558895111084

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='18' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00055980682373047

select sum(valor) as total from planejamento where plano='18' and tipo=1 
 Execution Time:0.00029897689819336

select sum(valor) as total from planejamento where plano='18' and tipo=2 
 Execution Time:0.00025200843811035

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.0008997917175293

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.0005650520324707

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0010080337524414

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.001046895980835

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00048494338989258

select * from planejamento where plano='18' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00051212310791016

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00049805641174316

select origemreceita, sum(valor) from planejamento where plano='18' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00045895576477051

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='18' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0010750293731689

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='18' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.0013010501861572

select sum(valor) as total from planejamento where plano='18' and tipo=1 
 Execution Time:0.00058293342590332

select sum(valor) as total from planejamento where plano='18' and tipo=2 
 Execution Time:0.00051093101501465

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.0004580020904541

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00070500373840332

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00081300735473633

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00097107887268066

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004119873046875

select * from planejamento where plano='18' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00044512748718262

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00033807754516602

select origemreceita, sum(valor) from planejamento where plano='18' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00034904479980469

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='18' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00059700012207031

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='18' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00052595138549805

select sum(valor) as total from planejamento where plano='18' and tipo=1 
 Execution Time:0.00031208992004395

select sum(valor) as total from planejamento where plano='18' and tipo=2 
 Execution Time:0.00027608871459961

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00062203407287598

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00049519538879395

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00048494338989258

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00052309036254883

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00057601928710938

select * from planejamento where plano='18' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0016210079193115

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0010678768157959

select origemreceita, sum(valor) from planejamento where plano='18' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00094199180603027

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='18' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00066494941711426

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='18' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00050997734069824

select sum(valor) as total from planejamento where plano='18' and tipo=1 
 Execution Time:0.00079917907714844

select sum(valor) as total from planejamento where plano='18' and tipo=2 
 Execution Time:0.00054097175598145

select * from plano where status=4 order by datainicio DESC, datafim DESC 
 Execution Time:0.16593599319458

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.026133060455322

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00065803527832031

SELECT *
FROM "plano"
WHERE "id" =  '20' 
 Execution Time:0.00062918663024902

SELECT *
FROM "plano"
WHERE "id" =  '20' 
 Execution Time:0.0007469654083252

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00042605400085449

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00047588348388672

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00091981887817383

select * from planejamento where plano='20' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00066304206848145

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00041508674621582

select origemreceita, sum(valor) from planejamento where plano='20' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00047397613525391

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='20' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0011768341064453

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='20' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00088310241699219

select sum(valor) as total from planejamento where plano='20' and tipo=1 
 Execution Time:0.00032806396484375

select sum(valor) as total from planejamento where plano='20' and tipo=2 
 Execution Time:0.00037384033203125

select * from plano where status=4 order by datainicio DESC, datafim DESC 
 Execution Time:0.00066208839416504

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00074100494384766

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00057578086853027

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00070405006408691

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00057411193847656

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00063991546630859

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00049686431884766

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00043797492980957

select * from planejamento where plano='18' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00063586235046387

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00045394897460938

select origemreceita, sum(valor) from planejamento where plano='18' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00046491622924805

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='18' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.012171983718872

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='18' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00080513954162598

select sum(valor) as total from planejamento where plano='18' and tipo=1 
 Execution Time:0.00027990341186523

select sum(valor) as total from planejamento where plano='18' and tipo=2 
 Execution Time:0.00027298927307129

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00085902214050293

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00036907196044922

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00068306922912598

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00093197822570801

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00055909156799316

SELECT *
FROM "plano"
WHERE "status" =  2
ORDER BY "datainicio" 
 Execution Time:0.00076699256896973

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00065398216247559

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0004119873046875

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00049996376037598

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00046205520629883

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00045394897460938

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00047206878662109

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00050115585327148

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00043797492980957

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00040483474731445

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00048398971557617

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0016348361968994

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.0004270076751709

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00035595893859863

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00070309638977051

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00044608116149902

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00041699409484863

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.0004270076751709

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00038886070251465

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00040507316589355

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00038003921508789

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00040793418884277

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00063991546630859

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.00030899047851562

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00028610229492188

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0016851425170898

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00084209442138672

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00056910514831543

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00052309036254883

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00059294700622559

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00053000450134277

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00048518180847168

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00056004524230957

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00082087516784668

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.00053620338439941

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00028014183044434

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0015881061553955

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00080394744873047

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00080490112304688

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00087285041809082

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0007779598236084

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.00095009803771973

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.00091004371643066

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00071597099304199

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.0013089179992676

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.00043988227844238

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00039792060852051

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00098586082458496

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00051999092102051

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.0003669261932373

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0009310245513916

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0009150505065918

