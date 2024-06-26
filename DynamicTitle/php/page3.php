<?php
	$files = file_get_contents('../db/db.txt');
	$piecesprov = preg_split("/\n/", $files);
	$word = preg_split("/\: /", $piecesprov[2]);
	$word[2] += 1;
	$piecesprov[2] = implode(": ", $word);
	file_put_contents('../db/db.txt', implode("\n", $piecesprov));
?>
<h3><a href="main.php">Назад</a></h3>
<p>E-MARKETPLACES или виртуальные торговые площадки</p>

<p>Введение</p>

<p>Существует распространенное мнение, что развитие Интернет покончит со множеством посредников. На деле происходит обратное, и, вместо сокращения количества прежних, Глобальная Сеть способствует появлению нового класса посредников. Возрастающие объемы В2В-коммерции приводят к возникновению e-marketplaces или виртуальных торговых площадок. Онлайновая торговая площадка - это место, где заключаются сделки между продавцом и покупателем, и осуществляется проведение финансово-торговых транзакций. Возможности Интернет позволяют совершать покупки/продажи в режиме реального времени, и, благодаря доступности Интернет, в торговой деятельности площадки могут участвовать компании из разных точек земного шара. Развитие торговых Интернет-площадок в перспективе (и, судя по всему, очень недалекой) позволит обеспечить более эффективный и свободный поток информации, товаров, платежей и других В2В услуг.</p>

<p>Типы виртуальных торговых площадок</p>

<p>Несмотря на некоторые разногласия в вопросе: "что можно считать виртуальными торговыми площадками?", принято их деление на 3 типа:</p>

<p>1. создаваемые покупателями (buyer-driven),</p>

<p>2. продавцами (supplier-driven или seller-driven)</p>

<p>3. третьей стороной (third-party-driven).</p>

<p>Обычно возникновение тех или иных видов торговых площадок зависит от степени влияния покупателей и продавцов в данной области промышленности.</p>

<p>Площадки типа buyer-driven</p>

<p>Одна или несколько крупных компаний создают свою торговую площадку для привлечения множества компаний-поставщиков. Эта концепция торговых площадок возникла в связи с потребностями крупных компаний в оптимизации процесса закупок, расширения торговых контактов и сети поставок. В качестве примера можно взять автомобильную промышленность, где GM, Ford и Daimler Chrysler объединились для создания глобальной онлайновой торговой площадки, или здравоохранение, где Tenant Healthcare объединила усилия с Ventro (ранее Chemdex) для создания Интернет-площадки, ориентированной на потребности рынка медицинских товаров.</p>

<p>Площадки типа supplier-driven</p>

<p>Наряду с крупными покупателями крупные продавцы также играют активную роль в формировании торговых площадок. Это происходит по разным причинам. К примеру, торговая площадка Chemdex на ранних этапах своего существования была, фактически, электронным каталогом/дистрибутором компании VWR Scientifics. В данном случае Chemdex была частью активной политики VWR Scientifics, направленной на увеличение числа клиентов и снижение затрат. Напротив, причиной для объединения компаний Jоhnson & Johnson, GE Medical Systems, Baxter International, Abbott Laboratories и Medtronic для создания общей Интернет-площадки в области здравоохранения - Global Health Care Exchange (http://www.globalhc.com/) послужили недавние планы компаний-покупателей увеличить доходы от своих торговых площадок за счет получения комиссий за транзакции с компании-поставщика. Схожие тенденции наблюдаются и в автомобильной промышленности, где Dana, Delphi Automotive Systems, Eaton, Motorola, TRW и Valeo собираются открыть свою собственную торговую площадку.</p>

<p>Площадки типа third-party-driven</p>

<p>Торговые площадки типа third-party-driven, управляемые третьей стороной, призваны свести вместе покупателей и продавцов. Обычно такие площадки создаются теми, кто хорошо ориентируется в данном секторе бизнеса и происходящих в нем бизнес-процессах. Начиная с нейтрального посредничества, многие подобные Интернет-площадки все более сближаются с ведущими компаниями на рынке, в некоторых случаях получая инвестиции в акционерный капитал. Однако это создает потенциальные проблемы с привлечением на рынок других компаний и контролем крупных промышленных инвесторов.</p>

<p>По мнению некоторых аналитиков, в частности IDC, к онлайновым торговым площадкам можно отнести лишь те, что управляются нейтральной третьей стороной и служат для проведения транзакций между многими покупателями и продавцами. Площадки, служащие интересам одного или нескольких продавцов, по их мнению, являются лишь средством электронной дистрибуции (electronic-distribution tool), а первая категория онлайновых площадок - не более чем инструмент для совершения электронных покупок (electronic-procurement tool).</p>

<p>Наряду с возникновением торговых площадок появляется и новая группа компаний - провайдеров решений в области электронной коммерции, которые обеспечивают технологическую инфраструктуру торговых Интернет-площадок и принимают непосредственное участие в их создании и поддержке. По направленности решений компании делятся на провайдеров/операторов аппаратно-программного комплекса (eMarketplace Platform Providers/Operators) и вертикальных операторов (Vertical eMarketplace Operators). Первых еще называют горизонтальными операторами.</p>

<p>Провайдеры аппаратно-программного комплекса задействованы в предоставлении решений, общих для всех компаний и отраслей промышленности, таких как программное обеспечение для проведения транзакций, управления сетью поставок и пр., то есть технологическую базу, позволяющую ведение электронного бизнеса.</p>

<p>Вертикальные операторы сконцентрированы на нуждах отдельных отраслей промышленности. Например, электронные компоненты (FastParts, NECX.com), телеком (Telezoo, Simplexity.com, thegtx.com), химическая промышленность (e-Chemicals and CheMatch), производство стали (e-Steel) и бумаги (PaperXchange). Сюда же относится и VerticalNet, который управляет целой серией промышленно-направленных сайтов.</p>

<p>Игроки</p>

<p>Крупнейшими поставщиками программных приложений для торговых Интернет-площадок являются компании Ariba и Commerce One.</p>

<p>Ariba (http://www.ariba.com/)</p>

<p>Ariba была основана в 1996 году, и среди ее 200 клиентов такие компании, как FedEx, BMW, Hewlett-Packard, Cisco Systems, Dell Computer и Buzzsaw.com. Одно из крупных достижений компании - союз с IBM и i2 Technologies в целях создания всестороннего программного обеспечения для онлайновых В2В площадок. Дополнительно Ariba приобрела новый рынок сбыта в лице сотен тысяч клиентов IBM и получила доступ к технологиям автоматизации сети поставок компании i2.</p>

<p>CommerceOne (http://www.commerceone.com/)</p>

<p>Основными стратегическими партнерами Commerce One являются компании General Motors, British Telecom и Shell International, а среди ее крупных клиентов можно назвать Wells Fargo, Boeing, BellSouth и Eastman Chemical. Ключевые сделки - участие в разработке портала TradXchange компании GM, роль одного из основных технологических партнеров в создании автомобильной биржи Covisint, инициаторами которого выступили Ford, GM, DaimlerChrysler и Oracle. В дальнейшем это способствовало заключению новых крупных сделок с Boeing и Shell International.</p>

<p>Altra Energy Technologies (http://www.altra.com/)</p>

<p>Altra была основана в 1996 году и является ведущим провайдером решений электронной коммерции в энергетике. На бирже Altrade, принадлежащей компании, анонимно в режиме реального времени происходит онлайновая торговля природным газом, сырой нефтью, газоконденсатами и энергией. Помимо этого Altra предлагает программное обеспечение в сфере маркетинга, транспортировки и управления рисками. К основным достижениям компании можно отнести приобретение QuickTrade, одного из главных конкурентов Altrade, и их объединение на базе общей электронной торговой платформы, а также покупку TransEnergy Management, конкурента на рынке программных продуктов. Клиентами Altra являются около 6000 компаний по всему миру.</p>

<p>BidCom (http://www.bidcom.com/)</p>

<p>BidCom предлагает пакет решений в области строительства, способствующих уменьшению времени и снижению затрат на реализацию проектов. Услуги BidCom заключаются в создании среды для общения, сотрудничества, торговли, управления бизнес-процессами, а также в предоставлении соответственной промышленной информации. Решения компании позволяют улучшить управление проектом на всех стадиях его разработки, от замысла и до полного завершения.</p>

<p>Calico Commerce, Inc. (http://www.calico.com/)</p>

<p>Компания предлагает решения электронной коммерции, позволяющие продавать и покупать через Интернет. С 1994 года клиентами компании стали Cisco Systems, Dell Computer, Merrill Lynch, Best Buy, AT&T и Qwest Communications.</p>

<p>ChemConnect (http://www.chemconnect.com/)</p>

<p>Компания появилась в 1995 году и начинала как онлайновый каталог для нужд химической промышленности. В 1997 году клиенты компании получили возможность совершать онлайновые транзакции и помещать на доску объявлений ChemConnect Classifieds сообщения о покупке/продаже химикатов. И, наконец, в 1999 году компания открыла World Chemical Exchange, Интернет-биржу, на которой ведется торговля нефтехимической, фармацевтической, агрохимической продукцией и полимерами. Сделки совершаются анонимно. Биржа имеет около 3000 зарегистрированных участников, около 40 % которых - компании из Северной Америки.</p>

<p>e-STEEL (http://www.e-steel.com/)</p>

<p>indentКомпания основана в 1998 году и первоначально финансировалась группой инвесторов во главе с Bessemer Venture Partners, Greylock и Kleiner Perkins. Биржа e-STEEL Exchange предназначена для нужд сталелитейной промышленности, чей годовой оборот составляет 700 млрд. долл. Хотя на сайте www.e-steel.com участники рынка могут найти всю необходимую им информацию о данной отрасли промышленности, главная статья дохода для e-steel - комиссии за транзакции, которые платят продавцы. Число зарегистрированных клиентов торговой площадки сейчас превышает 600.</p>

<p>pcOrder.com (corporate.pcorder.com)</p>

<p>indentpcOrder.com возник в 1996 году как spin-off проект компании Trilogy Development Group и является провайдером В2В программных приложений, позволяющих участникам рынка компьютерной промышленности (поставщикам, посредникам и конечным пользователям) продавать и покупать через Интернет. База pcOrder содержит более 700000 компаний, торгующих компьютерной продукцией от 3000 поставщиков. Среди клиентов можно отметить Compaq и Hewlett-Packard (обеспечивших 10% дохода компании в 1999 году), ZDNet, Inktomi, EDS и b2bstores.com.</p>

<p>PeopleSoft, Inc. (http://www.peoplesoft.com/)</p>

<p>Компания специализируется на разработке, продаже и поддержке программных приложений, используемых крупными и средними предприятиями, включая корпорации, правительственные и образовательные учреждения. Решения компании используются в сферах взаимоотношений с клиентами, управления персоналом, финансовой отчетности и управления сетью поставок. PeopleSoft была основана в 1997 году и выпустила свой первый программный продукт в 1998 году. На текущий момент компания имеет свыше 4000 клиентов в ряде отраслей промышленности, среди которых Федеральное правительство США, Bank of America, Merck, J.C. Penney, Duke Energy и AT&T.</p>
<p>
Ventro Corporation</p>

<p>Ventro была образована в феврале 2000 года на базе Chemdex в целях расширения сферы деятельности компании. На текущий момент компании полностью принадлежат сама торговая площадка Chemdex (http://www.chemdex.com/) и созданная в сентябре этого года площадка для сферы поставок медицинских товаров Promedix (http://www.promedix.com/). Кроме того, Ventro владеет площадкой Broadline (совместно с Tenet Healthcare), где происходит торговля крупными партиями медикаментов. Доля компании в Broadline (http://www.broadline.com/) составляет 24 %. Также Ventro принадлежит 40 % Industria Solutions (http://www.industriasolutions.com/), совместной с Dupont виртуальной торговой площадки, где совершаются покупки/продажи оборудования для транспортировки жидкостей или газа. Площадка предназначена для нужд таких отраслей промышленности, как нефтяная, газовая, химическая, фармацевтическая и т.д.</p>

<p>VerticalNet (http://www.verticalnet.com/)</p>

<p>Компания была создана в 1995 году и в настоящее время объединяет 57 онлайновых сообществ. Сообщества охватывают свыше 10 промышленных отраслей, включая высокие технологии, коммуникации, экологию, здравоохранение, науки, финансовые службы, сферу услуг, пищевую промышленность и т.д. Каждое сообщество предлагает своим участникам информацию, содержащую новости рынка, сведения о продукции, промышленные каталоги и списки вакансий. Кроме того, торговые сообщества VerticalNet предоставляют профессионалам возможность общения на дискуссионных форумах. Первоначально реклама была для VerticalNet главным источником дохода, но в дальнейшем она собирается получать больше прибыли от совершаемых транзакций и продажи программного обеспечения. Ключевыми партнерами компании являются Microsoft, IBM и Softbank</p>

<p>Доходы</p>

<p>Спектр бизнес-моделей в секторе решений для онлайновых торговых площадок достаточно широк, но все они являются той или иной комбинацией лицензирования программных продуктов, профессиональных услуг, комиссий за транзакции, рекламных услуг или подписки.</p>

<p>Продажи программного обеспечения - этот вид доходов наиболее характерен для горизонтальных операторов. Обычно доходы от продажи программной продукции состоят из оплаты самого лицензионного продукта и повторяющейся компоненты дохода, связанной с его обслуживанием, что обычно составляет 15 -20 % платы за лицензию. Кроме того, многие компании, продающие программное обеспечение, строят свои лицензии таким образом, чтобы извлекать выгоду из увеличения использования своих программных продуктов.</p>

<p>Профессиональные услуги - еще одна модель, характерная для горизонтальных операторов. Фирмы, занимающиеся продажей программного обеспечения, часто предоставляют заказчику услуги по его установке и обучению персонала.</p>

<p>Комиссии за транзакции - первичная статья дохода для многих компаний, особенно для вертикальных операторов. Модели получения доходов от транзакций могут быть организованы разными способами, например, взимание определенного процента или фиксированной суммы с транзакции, обычно на основе заказа на покупку или счет-фактуры. Кроме того, комиссию с транзакции может платить или продавец, или покупатель.</p>

<p>Реклама - обычно основывается на традиционной модели cost per thousand impression (CPM) или на спонсорстве. Для некоторых вертикальных торговых площадок, например, для VerticalNet, реклама с самого начала составляла немалую часть годового оборота. Однако, как только у торговой площадки появится достаточное число пользователей, скорее всего она переключится на другие виды получения прибыли, как, например, комиссии за транзакции и подписку, а реклама станет второстепенной статьей дохода.</p>

<p>Подписка. Многие провайдеры решений для онлайновых торговых площадок предоставляют доступ к имеющейся у них ценной информации через подписку. Например, за ежемесячную плату PcOrder и TechnologyNet дают возможность покупателям получить интересующую их информацию о компьютерной продукции и ее распространителях. PurchasePro в свою очередь предоставляет услуги за фиксированный ежегодный взнос.</p>

<p>Модели организации</p>

<p>Современные участники рынка торговых Интернет-площадок используют одну или несколько из 4 основных моделей их организации - это онлайновый каталог, аукцион, биржа и сообщество.</p>

<p>Онлайновый каталог (online catalog) - это нечто большее, чем простой перевод информации из традиционных каталогов в электронный формат. Вместо того чтобы просматривать горы отдельных, часто устаревших каталогов поставщика, покупатели могут использовать мощные поисковые возможности Интернет, сравнивая товары сразу по нескольким параметрам, включая цену, даты поставки, гарантии, информацию по обслуживанию и т.д. Таким образом, расширяя торговое пространство продавцам и повышая эффективность доступа покупателей к поставщикам, онлайновые каталоги становятся важной составляющей бизнес-процесса и IT-систем. Доходы этой категории торговых площадок обычно складываются из комиссий за транзакции и рекламных средств, получаемых от поставщиков. SciQuest и Chemdex - примеры вертикальных провайдеров; Ariba, CommerceOne и PurchasePro - провайдеры аппаратно-программного комплекса.</p>

<p>Аукцион (auction) - его основное отличие от онлайнового каталога состоит в том, что цена не фиксирована, а устанавливается во время торгов. Источники дохода те же, что и для каталогов. Примерами в области горизонтальных провайдеров служат FreeMarkets, TradeOut или AsseTrade. Среди вертикальных провайдеров можно отметить PaperExchange, который получает дополнительные доходы от аукциона по продаже оборудования для целлюлозно-бумажной промышленности.</p>

<p>Биржа (exchange) - торговая Интернет-площадка, где цена регулируется спросом и предложением, в результате чего подвержена сильным изменениям. Биржи позволяют компаниям торговать анонимно, что немаловажно, например, в энергетической промышленности, где огласка может повредить конкурентоспособной позиции покупателя и продавца и повлиять на цены. Источниками дохода для бирж главным образом служат комиссии за транзакции и членские взносы участников. Altra и Enermetrix в энергетической промышленности, Arbinet в области телекоммуникаций служат примерами этой модели онлайновых торговых площадок.</p>

<p>Сообщество (сommunity) - Интернет-площадки этого типа собирают вместе потенциальных покупателей и продавцов на базе общего профессионального интереса. Сообщества обеспечивают компании необходимой информацией, содержащей промышленные новости, исследования, информацию по состоянию рынка, списки вакансий, а также позволяют общение участников непосредственно через чат или с помощью доски объявлений. Доходы этих торговых площадок в основном состоят из рекламы, спонсорства и членских взносов участников. Уже сейчас в годовом обороте большинства подобных Интернет-площадок присутствует небольшой процент доходов от комиссий за транзакции, и ожидается, что в дальнейшем он будет расти. Типичным представителем этой группы торговых площадок является VerticalNet.</p>

<p>Риски и выгоды</p>

<p>Наряду с широкими возможностями, открывающимися перед компаниями, создающими торговые Интернет-площадки, неизбежно приходится считаться и с самыми разнообразными рисками.</p>

<p>Проблема быстрого роста - компании должны сохранять равновесие между ростом деловой активности и развитием технологий и квалификации персонала. Неспособность правильно укомплектовать штат и просчеты в инвестициях, направленных для поддержания роста компании, могут серьезно сказаться на ее конкурентоспособности.</p>

<p>Состязание с технологическими гигантами. Даже такие общепризнанные лидеры среди провайдеров аппаратно-программного комплекса, как Ariba, Clarus и Commerce One, сталкиваются с серьезным соперничеством со стороны крупных игроков на рынке технологий - Oracle, SAP, i2 Technologies, Microsoft, Peoplesoft, IBM, AOL-Sun-Netscape и др. Эти "технологические гиганты", имея преимущества уже сложившихся отношений с покупателями, в последнее время заметно увеличили активность в секторе решений для торговых Интернет-площадок. Вместе с тем, наблюдается и другая тенденция - объединение "чистых игроков" и крупных технологических компаний, как, например, партнерство Commerce One и Peoplesoft и недавний союз между i2, Ariba и IBM.</p>

<p>Соревнование с крупными традиционными промышленными компаниями. В последнее время наблюдается стремление крупных промышленных компаний к созданию собственных онлайновых торговых площадок (GM, Ford и Daimler - в автомобильной, Boeing, Lockheed Martin, Raytheon и BAE Systems - оборонной и аэрокосмической промышленности), а это означает потерю значительной доли транзакций для независимых провайдеров. Это серьезная угроза, ведь для многих комиссии за транзакцию являются основным источником дохода. Возможно, выходом из этой ситуации станет предоставление крупным промышленным компаниям хостинговых услуг и продажа программных приложений. (Подробнее).</p>

<p>Технологический риск. Учитывая быстрый темп развития технологий, компании могут столкнуться с ситуацией, в которой новые технологии сделают уже существующие предложения устаревшими. Для того чтобы рассчитывать на успех в долгосрочной перспективе, провайдеры должны делать существенные инвестиции в развитие новых технологий и стандартов или сотрудничать с ведущими компаниями в этой области.</p>

<p>Недостаточная самостоятельность - сотрудничество с крупными промышленными компаниями тоже имеет свои минусы. Во-первых, возникают сложности с привлечением остальных ведущих участников рынка на торговую площадку. Во-вторых, интересы крупных инвесторов могут заслонить для провайдеров Интернет-площадок интересы промышленности в целом и мелких компаний в частности.</p>

<p>Налогообложение в Интернет - изменения в налоговом законодательстве, а именно введение государственных и местных налогов на торговлю в Интернет, могут доставить определенные трудности участникам рынка. Однако это вряд ли станет большой проблемой для провайдеров, так как компании ведут торговлю в Интернет из-за ее удобства, большей эффективности и снижения затрат, а не для того чтобы уйти от налогов.</p>

<p>Антимонопольные законы - объединение крупных компаний в разных отраслях промышленности для создания глобальных торговых площадок не может не привлечь внимания правительственных чиновников. На данный момент в процесс урегулирования антимонопольных вопросов с Федеральной торговой комиссией США (ФТК) и Европейским Союзом вовлечены многие из онлайновых торговых площадок, и по поводу одной из них (Trade-Ranger) уже вынесено положительное решение.</p>

<p>Выгоды покупателей</p>

<p>Снижение стоимости процесса закупок: поиск нужных товаров в разрозненных и часто устаревших каталогах поставщиков, процесс выяснения у поставщика деталей продукции, цены, стоимости и способа доставки - все это отнимает у покупателей большое количество времени и денег. К примеру, Morgan Stanley оценивает подобное снижение затрат как весьма существенное: на оформление одного только заказа на покупку вместо 175 долл. компания сможет в среднем тратить всего 10 долл. В2В Интернет-торговля позволяет снизить затраты и помимо этого сэкономить время процесса закупки.</p>

<p>Снижение лишних затрат - часто компании платят за товары и услуги гораздо больше, чем они стоят на самом деле. По оценкам Aberdeen Group, около 40-45% покупок совершается у поставщиков, не входящих в приоритетный список компании. Автоматизация процесса покупки позволит избежать подобных накладок.</p>

<p>Богатый выбор и лучшая ценовая политика. Несмотря на достаточно широкий выбор поставщиков, оффлайновая компания-покупатель все же вынуждена выбирать провайдеров в первую очередь по географическому признаку и часто бывает ограничена во времени и средствах, которые может затратить на изучение всех возможностей, поэтому выбор не всегда бывает оптимальным. Мощные поисковые возможности Интернет и доступ из любой точки земного шара значительно повышают эффективность выбора.</p>

<p>Выгоды продавцов</p>

<p>Снижение затрат, связанных с продажами: часто продажа через обычные каналы сбыта бывает неэффективной, что выражается в затратах, которых можно было бы избежать, а также временных и пространственных ограничениях. Интернет предлагает новые возможности, позволяя снизить затраты, связанные с процессом продажи, например, на предпродажную подготовку товара.</p>

<p>Новые покупатели и увеличение прибыли: Интернет позволяет привлечь новых покупателей, недоступных через традиционные каналы продаж, и, следовательно, увеличить свои доходы.</p>

<p>Снижение стоимости управления заказами. Договариваясь с покупателями, используя телефон, факс и почту, поставщик не только затрачивает больше времени, нежели при использовании электронных средств связи, но и чаще рискует ошибиться. Автоматизация процесса обмена информацией помогает продавцу снизить вероятность ошибки и ускорить время от получения заказа до его оплаты.</p>

<p>Риски покупателей:</p>

<p>1. соответствие продукции и доверие поставщику;</p>

<p>2. доступ к послепродажному обслуживанию;</p>

<p>3. цены могут быть и больше рыночной стоимости.</p>

<p>Риски продавцов:</p>

<p>1. потеря контроля над механизмами ценообразования;</p>

<p>2. увеличение конкуренции;</p>

<p>3. более сложная логистика.</p>

<p>Перспективы на будущее</p>

<p>Прогнозы аналитиков относительно будущего виртуальных торговых площадок весьма противоречивы. По мнению одних, их число в ближайшие годы резко увеличится. К примеру, Gartner рассчитывает, что в течение нескольких лет появиться около 10000 новых площадок. По мнению же IDC, подобные оценки состояния рынка слишком оптимистичны, и к 2004 году реально работающих Интернет-площадок наберется не больше нескольких сотен.</p>

<p>Ясно одно - с возрастанием конкуренции краткосрочная тактика в создании онлайновых площадок уже не будет приносить успеха, и чтобы не оказаться вытесненным с рынка, компании-провайдеры должны разработать стратегию в расчете на длительную перспективу. Аналитики IMT Strategies прогнозируют, что наиболее выигрышными в дальнейшем окажутся следующие три стратегии.</p>

<p>Включение онлайновых торговых площадок в систему продаж компании. Интернет-площадки можно рассматривать как еще один мощный канал сбыта помимо уже существующих - прямые продажи, дистрибуторская сеть и т.д. Таким образом, интеграция торговых площадок в систему продаж компании-поставщика повышает эффективность реализации продукции.</p>

<p>Определение своей роли и целей бизнеса. Компании должны четко сформулировать причины, служащие стимулом для участия в онлайновых площадках. На ранних этапах становления Интернет-площадок многие компании были привлечены новыми возможностями увеличения доходов и рассматривали свое участие главным образом как способ достижения преимущества в конкурентной борьбе. В дальнейшем, однако, им необходимо выработать более серьезные причины, объясняющие и определяющие их деловую активность на торговой площадке. Это может быть расширение зоны рыночной деятельности, доступ к новым рынкам, вытеснение с рынка более слабых конкурентов, увеличение степени влияния на рынке, использование новых рыночных механизмов. Также организации должны определиться со своей ролью на площадке - покупатель, продавец, посредник.</p>

<p>Предоставление дополнительной информации и услуг. Комиссии за транзакции - главная статья дохода для многих онлайновых площадок, но в будущем будет проблематично рассчитывать лишь на них. Чтобы сохранять конкурентоспособное положение и увеличить прибыль, провайдеры Интернет-площадок должны создавать дополнительные источники полезной информации для участников рынка. Такая информация, являясь второстепенным продуктом рыночной активности, повышает предсказуемость поведения рынка и уменьшает риски. Она может включать в себя сравнительные характеристики ценных бумаг, прогнозы потребительского спроса, промышленные каталоги. Например, автомобильная биржа Covisint рассчитывает в ближайшем будущем создать информационный портал, где покупатели смогут узнавать о ближайших планах автомобильных предприятий и на основе изучения потребительского спроса определять, какие модели будут популярны в недалеком будущем. Помимо информации онлайновые площадки могут предоставлять компаниям различные дополнительные услуги, к примеру, помощь во взаиморасчетах, услуги по контролю и оценке, обеспечение качества, послепродажное обслуживание, материально-техническое обеспечение и т.д. Еще один вид услуг - помощь в организации взаимодействия продавец-покупатель и интеграции множества партнеров в комплексных сетях поставок. Например, торговые площадки Buzzsaw.com и Cephren, предназначенные для нужд строительной промышленности, предлагают услуги "генерального подрядчика", управляющего и координирующего действия поставщиков, субподрядчиков, архитекторов и инженеров, необходимые для завершения проекта.</p>