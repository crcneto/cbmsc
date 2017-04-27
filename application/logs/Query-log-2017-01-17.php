SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.054038047790527

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.037087917327881

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.073896884918213

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.019222021102905

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.029243946075439

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.099690914154053

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00037813186645508

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00031399726867676

SELECT *
FROM "obm"
WHERE "id" =  '5' 
 Execution Time:0.00036382675170898

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00033378601074219

select * from plano where status=4 order by datainicio DESC, datafim DESC 
 Execution Time:0.0018870830535889

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0012619495391846

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.044806957244873

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.014371871948242

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.021241903305054

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0098958015441895

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.014600992202759

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0020060539245605

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.026973009109497

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.0005650520324707

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00033879280090332

SELECT *
FROM "obm"
WHERE "id" =  '5' 
 Execution Time:0.00069189071655273

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00072121620178223

select * from plano where status=4 order by datainicio DESC, datafim DESC 
 Execution Time:0.00045394897460938

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00033998489379883

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.044761896133423

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.0027430057525635

SELECT *
FROM "plano"
WHERE "id" =  '18' 
 Execution Time:0.00063395500183105

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.11825609207153

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.055885076522827

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00066900253295898

select * from planejamento where plano='18' order by tipo ASC, dataprevista ASC 
 Execution Time:0.049049854278564

select id, matricula, apelido, nome, email, obm, postograd, status from usuario where status>=2 order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.0010700225830078

select origemreceita, sum(valor) from planejamento where plano='18' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.092828035354614

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='18' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.014880180358887

select e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome, sum(p.valor) as valor from planejamento as p, especificacao as e where plano='18' and tipo=2 and e.id=p.especificacao group by e.categoria, e.natureza, e.aplicacao, e.objeto, e.nome 
 Execution Time:0.00061917304992676

select sum(valor) as total from planejamento where plano='18' and tipo=1 
 Execution Time:0.00028705596923828

select sum(valor) as total from planejamento where plano='18' and tipo=2 
 Execution Time:0.00024700164794922

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00071001052856445

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00042200088500977

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00041294097900391

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00034308433532715

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00042819976806641

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00045299530029297

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00040912628173828

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00032401084899902

SELECT *
FROM "obm"
WHERE "id" =  '5' 
 Execution Time:0.00088000297546387

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00081992149353027

SELECT *
FROM "origemreceita"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00084590911865234

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00046300888061523

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.00037693977355957

SELECT *
FROM "plano"
WHERE "id" =  '21' 
 Execution Time:0.0003349781036377

select * from reprovacao where plano='21'; 
 Execution Time:0.039568901062012

SELECT *
FROM "especificacao"
WHERE "status" =  2
ORDER BY "categoria" ASC, "natureza" ASC, "aplicacao" ASC, "objeto" ASC, "nome" ASC 
 Execution Time:0.00089192390441895

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00050711631774902

select * from planejamento where plano='21' order by tipo ASC, dataprevista ASC 
 Execution Time:0.0010051727294922

select u.id, u.matricula, u.apelido, u.nome, u.email, u.obm, u.postograd, u.status, o.id as obm_id, o.nome as obm_nome, o.abrev as obm_abrev, p.nome as pg_nome, p.abrev as pg_abrev from usuario as u, obm as o, postograd as p where u.obm=o.id and u.postograd=p.id order by apelido ASC, nome ASC, matricula ASC 
 Execution Time:0.038727045059204

select origemreceita, sum(valor) from planejamento where plano='21' and tipo=1 and status=2 group by origemreceita 
 Execution Time:0.00084495544433594

select sum(p.valor), n.nome from planejamento as p, especificacao as e, naturezadespesa as n where plano='21' and e.natureza=n.id and p.tipo=2 and p.especificacao = e.id group by n.nome 
 Execution Time:0.00091719627380371

select sum(valor) as total from planejamento where plano='21' and tipo=1 
 Execution Time:0.00037598609924316

select sum(valor) as total from planejamento where plano='21' and tipo=2 
 Execution Time:0.00036501884460449

SELECT *
FROM "categoriaeconomica"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.078915119171143

SELECT *
FROM "naturezadespesa"
WHERE "status" =  2
ORDER BY "id" ASC 
 Execution Time:0.00089097023010254

SELECT *
FROM "aplicacao"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00055193901062012

SELECT *
FROM "objeto"
WHERE "status" =  2
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.00054693222045898

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.011847972869873

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.00043797492980957

SELECT *
FROM "obm"
WHERE "id" =  '7' 
 Execution Time:0.00030899047851562

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00028204917907715

SELECT *
FROM "obm"
WHERE "id" =  '5' 
 Execution Time:0.00027608871459961

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00027012825012207

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0005490779876709

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0029990673065186

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00047087669372559

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0005950927734375

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00048995018005371

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0081679821014404

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.015723943710327

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00045919418334961

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00047206878662109

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00056791305541992

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0026321411132812

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00049614906311035

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00081396102905273

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004878044128418

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00043010711669922

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0021140575408936

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00043106079101562

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0018551349639893

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00042414665222168

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004889965057373

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00046110153198242

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040912628173828

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041294097900391

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00063300132751465

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00072908401489258

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004420280456543

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00062417984008789

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004880428314209

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0010678768157959

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004730224609375

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00062394142150879

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00042581558227539

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003969669342041

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00057101249694824

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00057792663574219

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00032997131347656

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00026988983154297

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00022697448730469

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00021719932556152

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00021004676818848

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00022792816162109

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00029897689819336

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00044107437133789

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00027203559875488

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00048589706420898

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00047993659973145

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00047993659973145

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0008080005645752

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00046801567077637

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00033283233642578

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00028800964355469

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00027894973754883

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00027990341186523

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00031280517578125

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00029516220092773

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00041580200195312

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00042104721069336

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00027990341186523

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00021696090698242

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0002129077911377

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029206275939941

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00088310241699219

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041389465332031

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00056910514831543

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00029897689819336

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00029301643371582

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00021791458129883

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00020194053649902

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0002131462097168

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.0002589225769043

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00023293495178223

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00020003318786621

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00020408630371094

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00020003318786621

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00020194053649902

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00026202201843262

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.063604831695557

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.001600980758667

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.14401698112488

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00069594383239746

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00076103210449219

SELECT *
FROM "obm" 
 Execution Time:0.0005030632019043

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00045204162597656

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041007995605469

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00047898292541504

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00028896331787109

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.0002131462097168

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00020599365234375

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00021219253540039

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00021195411682129

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00020909309387207

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00024294853210449

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00020384788513184

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00023388862609863

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00029706954956055

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00029301643371582

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00048303604125977

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00064516067504883

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00036907196044922

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00030303001403809

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00028705596923828

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00027084350585938

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00026082992553711

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.0002439022064209

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00024604797363281

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00023698806762695

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00024509429931641

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00023388862609863

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00023198127746582

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00030112266540527

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041103363037109

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00023698806762695

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00021195411682129

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.0002288818359375

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00020599365234375

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00020694732666016

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
 Execution Time:0.00019478797912598

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00019598007202148

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00019407272338867

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00019311904907227

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00025701522827148

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00048923492431641

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00027704238891602

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00021886825561523

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00021219253540039

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00019502639770508

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00019288063049316

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00019001960754395

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00018906593322754

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00018620491027832

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00019001960754395

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00018620491027832

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00020790100097656

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00024914741516113

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0018091201782227

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00051689147949219

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00037288665771484

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00035905838012695

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00030899047851562

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0003819465637207

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00033688545227051

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00034999847412109

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00033783912658691

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.0003349781036377

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00037002563476562

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00038790702819824

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00045680999755859

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00046706199645996

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00026893615722656

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00024890899658203

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00024509429931641

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00028586387634277

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00030779838562012

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00030016899108887

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00029301643371582

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00028681755065918

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00028705596923828

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00028705596923828

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00030207633972168

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00042104721069336

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0021688938140869

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00039196014404297

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00027298927307129

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00025701522827148

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00028204917907715

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00023102760314941

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00054717063903809

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00065994262695312

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00044894218444824

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00028181076049805

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00026392936706543

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00026202201843262

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00034999847412109

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0015678405761719

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00048589706420898

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00036406517028809

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00034689903259277

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00031089782714844

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00031685829162598

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00041294097900391

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00027203559875488

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00025296211242676

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00020480155944824

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00019693374633789

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00019598007202148

select * from planejamento as pj, plano as pn where pj.plano=pn.id and pn.datainicio>='2016-12-27' and pn.datafim<='2017-01-03' and pn.obm in (4,8,5,7) 
 Execution Time:0.23019194602966

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00036096572875977

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040912628173828

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.0002598762512207

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00021505355834961

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.0002138614654541

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00022387504577637

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00022292137145996

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00023198127746582

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00022482872009277

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00023102760314941

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00021100044250488

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00022196769714355

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00036406517028809

select * from planejamento as pj, plano as pn where pj.plano=pn.id and pn.datainicio>='2016-01-01' and pn.datafim<='2017-12-01' and pn.obm in (10,3,9,4,8,5,7) 
 Execution Time:0.0027921199798584

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040912628173828

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040197372436523

SELECT *
FROM "obm"
WHERE "id" =  10 
 Execution Time:0.00026893615722656

SELECT *
FROM "obm"
WHERE "id" =  3 
 Execution Time:0.00022101402282715

SELECT *
FROM "obm"
WHERE "id" =  9 
 Execution Time:0.00021696090698242

SELECT *
FROM "obm"
WHERE "id" =  4 
 Execution Time:0.00022602081298828

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00026917457580566

SELECT *
FROM "obm"
WHERE "id" =  8 
 Execution Time:0.00028514862060547

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00023698806762695

SELECT *
FROM "obm"
WHERE "id" =  5 
 Execution Time:0.00022315979003906

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00020909309387207

SELECT *
FROM "obm"
WHERE "id" =  7 
 Execution Time:0.00020480155944824

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00020599365234375

select * from planejamento as pj, plano as pn where pj.plano=pn.id and pn.datainicio>='2016-01-01' and pn.datafim<='2017-01-01' and pn.obm in (4,8,5,7) 
 Execution Time:0.0018889904022217

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00035905838012695

