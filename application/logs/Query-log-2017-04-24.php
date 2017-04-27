SELECT *
FROM "categoriaeconomica"
ORDER BY "id" ASC 
 Execution Time:0.054490089416504

SELECT *
FROM "naturezadespesa"
ORDER BY "id" ASC 
 Execution Time:0.047698020935059

SELECT *
FROM "aplicacao"
ORDER BY "id" ASC 
 Execution Time:0.040316104888916

SELECT *
FROM "objeto"
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.11598491668701

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.032480955123901

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.0013511180877686

SELECT * FROM plano WHERE status<4 and status>0 and obm in (4,5,1,3,9,7,8,10,11) ORDER BY datainicio DESC 
 Execution Time:0.043571949005127

select * from obm where id='3' limit 1 
 Execution Time:0.00065183639526367

select * from obm where id='5' limit 1 
 Execution Time:0.00040292739868164

select * from obm where id='11' limit 1 
 Execution Time:0.00033378601074219

select * from obm where id='7' limit 1 
 Execution Time:0.00076198577880859

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0037410259246826

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0021121501922607

select og.id, og.nome, sum(valor) as valor from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2016-01-01' and data_final<='2017-12-31' group by nome, og.id order by nome asc 
 Execution Time:0.37156414985657

select sum(valor) as total from planejamento where tipo=1 and dataprevista between '2016-01-01' and '2017-12-31' and origemreceita in (select og.id from receitarestrita as rr, origemreceita as og where og.id = rr.receita and data_inicial>='2016-01-01' and data_final<='2017-12-31' group by og.id) 
 Execution Time:0.07977294921875

select og.nome as nome, sum(p.valor) as valor from planejamento as p, origemreceita as og where origemreceita in (select id from origemreceita where status=3) and dataprevista between '2016-01-01' and '2017-12-31' and p.origemreceita=og.id and p.tipo=1 group by og.nome order by og.nome asc 
 Execution Time:0.0014240741729736

select pj.id as planejamento, pj.tipo, pj.plano, p.status, p.obm as obm_id, o.nome as obm, pj.origemreceita as og_id, og.nome as og_nome, pj.detalhamento, pj.valor, pj.dataprevista from planejamento as pj, origemreceita as og, especificacao as ep, plano as p, obm as o where pj.origemreceita = og.id and pj.especificacao = ep.id and pj.tipo=1 and pj.plano=p.id and p.obm=o.id and pj.dataprevista between '2016-01-01' and '2017-12-31' and og.status=3 order by o.nome asc, dataprevista desc 
 Execution Time:0.030465126037598

SELECT * FROM plano WHERE status=2 or status=1 ORDER BY datainicio DESC 
 Execution Time:0.0005030632019043

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00061702728271484

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.0011608600616455

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.00090599060058594

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.049633979797363

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00062990188598633

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00088405609130859

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00056290626525879

SELECT *
FROM "obm" 
 Execution Time:0.0004570484161377

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00049400329589844

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00047111511230469

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00045204162597656

SELECT *
FROM "obm" 
 Execution Time:0.00069594383239746

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.0018539428710938

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00061321258544922

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00081610679626465

SELECT *
FROM "obm" 
 Execution Time:0.00050616264343262

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.0014169216156006

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.00097179412841797

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00040507316589355

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.00035786628723145

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.0003199577331543

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00024986267089844

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00080204010009766

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00031518936157227

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00061607360839844

SELECT *
FROM "obm" 
 Execution Time:0.00022602081298828

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.0012989044189453

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.00078797340393066

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00055694580078125

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00049996376037598

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00046682357788086

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00031089782714844

SELECT *
FROM "obm" 
 Execution Time:0.00021600723266602

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.0012838840484619

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.00040888786315918

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00025200843811035

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.00040197372436523

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.00037002563476562

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00029897689819336

SELECT *
FROM "municipio"
WHERE "id" =  '33' 
 Execution Time:0.00029110908508301

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.00033307075500488

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.00031781196594238

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00032305717468262

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.00036978721618652

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.0003199577331543

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00023698806762695

SELECT *
FROM "municipio"
WHERE "id" =  '33' 
 Execution Time:0.00023698806762695

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.0018310546875

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.00073814392089844

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00065898895263672

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.00035905838012695

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.00031089782714844

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00023293495178223

SELECT *
FROM "municipio"
WHERE "id" =  '33' 
 Execution Time:0.00023794174194336

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.00040483474731445

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.00041079521179199

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00039005279541016

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.001986026763916

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.00071907043457031

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.0012378692626953

SELECT *
FROM "municipio"
WHERE "id" =  '33' 
 Execution Time:0.00043797492980957

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.00083804130554199

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.0007021427154541

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00050902366638184

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.0027191638946533

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.00069117546081543

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00068998336791992

SELECT *
FROM "municipio"
WHERE "id" =  '33' 
 Execution Time:0.00027608871459961

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.00034213066101074

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.00030279159545898

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.000244140625

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.00039887428283691

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.00035381317138672

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00024890899658203

SELECT *
FROM "municipio"
WHERE "id" =  '33' 
 Execution Time:0.00021982192993164

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.00038599967956543

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.00035190582275391

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00027799606323242

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.00046014785766602

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.00049209594726562

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00032401084899902

SELECT *
FROM "municipio"
WHERE "id" =  '33' 
 Execution Time:0.00029706954956055

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.00049304962158203

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.00043797492980957

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00034689903259277

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.00038290023803711

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.0003211498260498

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00023794174194336

SELECT *
FROM "municipio"
WHERE "id" =  '33' 
 Execution Time:0.0002138614654541

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.00049209594726562

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.00051307678222656

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00044798851013184

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.00040602684020996

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.00037002563476562

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00029301643371582

SELECT *
FROM "municipio"
WHERE "id" =  '33' 
 Execution Time:0.00028300285339355

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.00052595138549805

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.00053906440734863

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.0003669261932373

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.00037407875061035

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.00031185150146484

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00023388862609863

SELECT *
FROM "municipio"
WHERE "id" =  '33' 
 Execution Time:0.00023698806762695

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.0010421276092529

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.00066709518432617

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00026583671569824

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.00047183036804199

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.00044488906860352

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.0003349781036377

SELECT *
FROM "municipio"
WHERE "id" =  '33' 
 Execution Time:0.0002892017364502

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.00034689903259277

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.00032210350036621

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.0002589225769043

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.00039982795715332

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.00039505958557129

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00029587745666504

SELECT *
FROM "municipio"
WHERE "id" =  '33' 
 Execution Time:0.00027298927307129

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.00046086311340332

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.00037384033203125

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00029778480529785

SELECT *
FROM "municipio"
WHERE "id" =  '33' 
 Execution Time:0.00027704238891602

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.00050091743469238

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.0005500316619873

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00041604042053223

SELECT *
FROM "municipio"
WHERE "id" =  '33' 
 Execution Time:0.00030899047851562

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.00092077255249023

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.00079488754272461

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00058889389038086

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.00042486190795898

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.00036811828613281

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.0002899169921875

SELECT *
FROM "municipio"
WHERE "id" =  '33' 
 Execution Time:0.00027108192443848

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.00034999847412109

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.00036096572875977

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00023388862609863

SELECT *
FROM "municipio"
WHERE "id" =  '33' 
 Execution Time:0.0002129077911377

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.00060606002807617

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.00057816505432129

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00044894218444824

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.00035500526428223

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.00031304359436035

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00023293495178223

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.00052905082702637

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.00043416023254395

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00036406517028809

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.00040292739868164

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.00038409233093262

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00031685829162598

SELECT *
FROM "municipio"
WHERE "id" =  '45' 
 Execution Time:0.00030112266540527

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.00056815147399902

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.00044989585876465

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00037479400634766

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.00037121772766113

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.00031805038452148

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00026392936706543

SELECT *
FROM "municipio"
WHERE "id" =  '45' 
 Execution Time:0.00023603439331055

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.00034999847412109

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.00030708312988281

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00023293495178223

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.00051593780517578

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.00048184394836426

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00040197372436523

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.0018088817596436

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.00064802169799805

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.0002901554107666

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.00049281120300293

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.00052189826965332

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00032806396484375

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.00042486190795898

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.00041818618774414

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00030207633972168

SELECT *
FROM "municipio"
WHERE "id" =  '33' 
 Execution Time:0.00027799606323242

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.00038695335388184

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.00036501884460449

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00025415420532227

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.00041890144348145

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.00051999092102051

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00041389465332031

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00044512748718262

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00035905838012695

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00035595893859863

SELECT *
FROM "obm" 
 Execution Time:0.00029706954956055

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.00041294097900391

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.00034499168395996

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00025582313537598

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.00042200088500977

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.00035214424133301

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00026488304138184

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00075888633728027

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0005638599395752

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0010888576507568

SELECT *
FROM "obm" 
 Execution Time:0.00039100646972656

select id from modulo where nome='municipio' order by id asc limit 1 
 Execution Time:0.24215793609619

select * from acesso where usuario='2' and modulo='7' and nivel>0 
 Execution Time:0.013034105300903

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.0068798065185547

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.0003669261932373

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00030994415283203

SELECT *
FROM "obm"
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00026702880859375

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00030088424682617

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00078797340393066

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00055193901062012

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0005180835723877

SELECT *
FROM "obm"
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041294097900391

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00048613548278809

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00066089630126953

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00037717819213867

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00033807754516602

SELECT *
FROM "obm"
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00030994415283203

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00030207633972168

SELECT *
FROM "obm"
WHERE "id" =  '10' 
 Execution Time:0.00032210350036621

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00033998489379883

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00028610229492188

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00026917457580566

SELECT *
FROM "obm"
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00031900405883789

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00069499015808105

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.0025999546051025

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00073790550231934

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00066900253295898

SELECT *
FROM "obm"
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00039410591125488

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.0004429817199707

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00032186508178711

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00027799606323242

SELECT *
FROM "obm"
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00024604797363281

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00073504447937012

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00058197975158691

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00047802925109863

SELECT *
FROM "obm"
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00037693977355957

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.0003960132598877

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0003349781036377

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00032496452331543

SELECT *
FROM "obm"
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028300285339355

SELECT *
FROM "categoriaeconomica"
ORDER BY "id" ASC 
 Execution Time:0.0013179779052734

SELECT *
FROM "naturezadespesa"
ORDER BY "id" ASC 
 Execution Time:0.00054287910461426

SELECT *
FROM "aplicacao"
ORDER BY "id" ASC 
 Execution Time:0.00070095062255859

SELECT *
FROM "objeto"
ORDER BY "id" ASC, "nome" ASC 
 Execution Time:0.0020081996917725

SELECT *
FROM "obm"
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00048208236694336

select a.obm from acesso as a, modulo as m where usuario='2' and a.modulo=m.id and m.nome='planejamento' and nivel=5 
 Execution Time:0.00079798698425293

SELECT * FROM plano WHERE status<4 and status>0 and obm in (4,5,1,3,9,7,8,10,11) ORDER BY datainicio DESC 
 Execution Time:0.0006859302520752

select * from obm where id='3' limit 1 
 Execution Time:0.00056004524230957

select * from obm where id='5' limit 1 
 Execution Time:0.00046110153198242

select * from obm where id='11' limit 1 
 Execution Time:0.00041890144348145

select * from obm where id='7' limit 1 
 Execution Time:0.00035691261291504

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00072193145751953

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0005490779876709

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00050091743469238

SELECT *
FROM "obm"
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003969669342041

select * from tarefa where usuario='2' and status<>3 order by status desc, data_prevista asc 
 Execution Time:0.11294913291931

select * from tarefa where usuario='2' and status=3 order by data_conclusao desc, data_prevista asc 
 Execution Time:0.00043320655822754

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00049591064453125

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00043392181396484

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00042414665222168

SELECT *
FROM "obm"
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00037598609924316

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00035500526428223

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00030207633972168

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00030088424682617

SELECT *
FROM "obm"
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00025010108947754

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00039196014404297

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00033688545227051

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003359317779541

SELECT *
FROM "obm"
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0002751350402832

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00046300888061523

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00038981437683105

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00037598609924316

SELECT *
FROM "obm"
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00033903121948242

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.0016090869903564

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00070381164550781

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00070714950561523

SELECT *
FROM "obm"
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00036501884460449

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.0028131008148193

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00087785720825195

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0010662078857422

SELECT *
FROM "obm"
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00045919418334961

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00041890144348145

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00035715103149414

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00035190582275391

SELECT *
FROM "obm"
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028800964355469

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00044012069702148

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.0004429817199707

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0005338191986084

SELECT *
FROM "obm"
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0006248950958252

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00084519386291504

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00032591819763184

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00046300888061523

SELECT *
FROM "obm"
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00025701522827148

SELECT *
FROM "obm"
WHERE "id" =  '1' 
 Execution Time:0.00024914741516113

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00049090385437012

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00047087669372559

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00040507316589355

SELECT *
FROM "obm"
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00036191940307617

SELECT *
FROM "obm"
WHERE "id" =  '10' 
 Execution Time:0.00032401084899902

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.0004727840423584

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00042486190795898

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00043487548828125

SELECT *
FROM "obm"
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00051403045654297

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00053596496582031

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00040888786315918

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00028800964355469

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00027894973754883

SELECT *
FROM "obm"
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00032496452331543

SELECT *
FROM "obm"
WHERE "id" =  '10' 
 Execution Time:0.00024700164794922

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00078105926513672

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00054717063903809

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00042390823364258

SELECT *
FROM "obm"
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00051307678222656

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00034213066101074

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00027203559875488

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00027203559875488

SELECT *
FROM "obm"
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00023198127746582

SELECT *
FROM "obm"
WHERE "id" =  '10' 
 Execution Time:0.00021910667419434

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.0013449192047119

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00060701370239258

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0004270076751709

SELECT *
FROM "obm"
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00035691261291504

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00037288665771484

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00029087066650391

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00028586387634277

SELECT *
FROM "obm"
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00024008750915527

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00041294097900391

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00032711029052734

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00034904479980469

SELECT *
FROM "obm"
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00033712387084961

SELECT *
FROM "obm"
WHERE "id" =  '10' 
 Execution Time:0.0002751350402832

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00048279762268066

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00042295455932617

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041389465332031

SELECT *
FROM "obm"
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00034093856811523

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00036716461181641

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00040411949157715

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00035381317138672

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00030803680419922

SELECT *
FROM "obm"
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00027799606323242

SELECT *
FROM "obm"
WHERE "id" =  '10' 
 Execution Time:0.00022697448730469

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00036096572875977

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00035810470581055

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00029611587524414

SELECT *
FROM "obm"
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0002439022064209

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00022101402282715

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00037789344787598

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00030994415283203

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00027012825012207

SELECT *
FROM "obm"
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00024199485778809

SELECT *
FROM "obm"
WHERE "id" =  '9' 
 Execution Time:0.00022387504577637

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00036191940307617

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00027704238891602

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00026321411132812

SELECT *
FROM "obm"
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0002291202545166

SELECT *
FROM "obm"
WHERE "id" =  '3' 
 Execution Time:0.00024294853210449

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00046992301940918

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00041890144348145

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00043106079101562

SELECT *
FROM "obm"
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041317939758301

SELECT *
FROM "obm"
WHERE "id" =  '8' 
 Execution Time:0.00046801567077637

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.0004880428314209

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00033307075500488

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00026416778564453

SELECT *
FROM "obm"
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00030183792114258

SELECT *
FROM "obm"
WHERE "id" =  '10' 
 Execution Time:0.00030183792114258

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00044393539428711

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00033402442932129

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00037813186645508

SELECT *
FROM "obm"
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.0003209114074707

SELECT *
FROM "obm"
WHERE "id" =  '1' 
 Execution Time:0.00030207633972168

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.0013899803161621

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00053691864013672

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00084495544433594

SELECT *
FROM "obm"
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00038814544677734

SELECT *
FROM "obm"
WHERE "id" =  '1' 
 Execution Time:0.00043296813964844

SELECT *
FROM "municipio"
ORDER BY "nome" ASC 
 Execution Time:0.00049304962158203

SELECT *
FROM "municipio"
WHERE "status" =  2
ORDER BY "nome" ASC 
 Execution Time:0.00041103363037109

SELECT *
FROM "obm"
WHERE "status" =  2
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00041508674621582

SELECT *
FROM "obm"
ORDER BY "nivel" ASC, "nome" ASC 
 Execution Time:0.00036716461181641

SELECT *
FROM "obm"
WHERE "id" =  '10' 
 Execution Time:0.00036311149597168

