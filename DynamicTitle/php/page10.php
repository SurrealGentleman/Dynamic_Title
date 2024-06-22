<?php
	$files = file_get_contents('../db/db.txt');
	$piecesprov = preg_split("/\n/", $files);
	$word = preg_split("/\: /", $piecesprov[9]);
	$word[2] += 1;
	$piecesprov[9] = implode(": ", $word);
	file_put_contents('../db/db.txt', implode("\n", $piecesprov));
?>
<h3><a href="main.php">Назад</a></h3>
Брокерские услуги в Интернет. Интернет-трейдинг

Введение

В настоящее время фондовые и валютные рынки стали более доступны частным инвесторам. Прежде всего, инвестор может отслеживать ситуацию на рынках и производить торговлю финансовыми инструментами в "реальном времени". Это стало возможным благодаря развитию глобальной сети Интернет и возникновению так называемых онлайновых брокеров. Услуги онлайнового брокера включают в себя те же услуги, которые предоставляет и обычный брокер, но только взаимоотношение инвестора и брокера происходит с помощью Интернет. Поэтому, в отличие от обычного брокера, онлайновый брокер может оказывать еще и дополнительную услугу - предоставление необходимой инвестору финансовой информации в реальном времени.

Итак, брокерская услуга в Интернет - Интернет-трейдинг - это услуга, предоставляемая инвестиционным посредником (банком или брокерской компанией), которая позволяет клиенту осуществлять покупку/продажу ценных бумаг и валюты в реальном времени через всемирную сеть Интернет.

Обычно эта услуга подразумевает:

1. Непосредственно возможность покупки/продажи финансовых активов в реальном времени.

2. Создание инвестиционного портфеля инвестора.

3. Возможность участия клиента во взаимных фондах.

4. Предоставление клиенту часто обновляющейся финансовой информации: котировки ценных бумаг и курсы валют.

5. Предоставление клиенту аналитических статей, графической информации, помощи профессионалов и т.д.

6. Другие сопутствующие услуги (выдача кредитных карт и чековых книжек, открытие и ведение дополнительных пенсионных счетов, "поставка" информации по ценам на акции, входящие в портфель, на пейджер клиента или на его почтовый ящик, тому подобное).

Способы предоставления брокерских услуг в Интернет

Существует два основных способа предоставления брокерских услуг через Интернет:

Клиент покупает/продает ценные бумаги, составляет свой инвестиционный портфель и т.д. непосредственно на Web-сайте компании-посредника, пользуясь при этом обычным Web-браузером.

Клиент (пользователь) устанавливает на своем компьютере специальное программное обеспечение и с помощью него получает информацию и совершает транзакции на финансовых рынках.

Существует так же и третий, менее распространенный способ Интернет-трейдинга. Клиент посылает запрос на покупку/продажу активов своему брокеру с помощью электронной почты. Такой способ использует российская брокерская компания "Финансовые консультации и менеджмент" (http://www.fkm.msk.ru/). Данный вид Интернет-услуги скорее следует считать переходным между обычной брокерской услугой и Интернет-трейдингом. Полноценной Интернет-услугой (в том числе и финансовой) обычно признается такая услуга, которая использует по возможности все отличительные особенности Сети как новой коммуникационной среды.

Вернемся к первым двум способам предоставления брокерских услуг, которые были описаны выше. Первый способ проще и дешевле как для клиента, так и для компании-посредника. Второй - наиболее эффективный для пользователя. Первый способ в силу своей технологии налагает ограничение на представление финансовой информации для клиента. Во втором случае пользователь может настроить интерфейс под себя, строить графики, получать только ту информацию, которая ему нужна и т.д.

Так сложилось, что в странах, где наиболее развит частный инвестиционный сектор, преобладает первый способ. В этих странах для любого простого гражданина вложение денег в ценные бумаги - это обычный способ сбережения и дохода (в силу относительной стабильности фондовых рынков). Частному инвестору не требуется специального программного обеспечения, чтобы проводить свою инвестиционную стратегию: либо он инвестирует в менее рисковые активы, либо инвестиционной политикой занимаются специалисты. В таких странах (Япония, США) бурно развивается мобильный Интернет (миникомпьютеры, сотовые телефоны, поддерживающие WAP), поэтому инвестор хочет иметь доступ к своему брокеру с любого такого терминала, а это возможно, если используется первый способ брокерских услуг.

В России ситуация сложилась иначе. На данный момент мобильный Интернет доступен не многим, а чтобы не "вылететь в трубу" при инвестициях в российские ценные бумаги, инвестор должен обладать большим опытом и иметь под рукой всю необходимую финансовую информацию и средства для ее различной интерпретации. Поэтому российские Интернет-брокеры зачастую предоставляют клиентам специальное программное обеспечение для получения и обработки финансовой информации в реальном времени. Однако развитие новых SGML языков (например XML) может привести к тому, что вся обработка информации будет произведена на сайте брокера. Сейчас для этого некоторые компании (например "Атон") используют Java аплеты.

К первой категории относятся все западные компании такие как: E-trade, Datek on-line, Charles Schwad, финский банк Merita, американский Well's Fargo и многие другие. В России на данный момент ситуация полностью противоположная: почти все российские Интернет-брокеры используют специальное программное обеспечение в том или ином виде.

Интернет-трейдинг со страниц Web-сайта компании

Если компания или банк предоставляет брокерские услуги с помощью своего Web-сайта, то инвестору, который хочет воспользоваться этими услугами, нужно иметь всего лишь компьютер, Web-браузер и доступ в Интернет. Такой набор есть почти у каждого делового человека, и эта услуга почти не требует привлечения дополнительных денежных средств со стороны инвестора. Управление инвестиционным портфелем ведется обычно через заполнение стандартных Web-форм.

Предоставление брокерских услуг через сайт компании подразумевает:

Каждый инвестор имеет свой логин и пароль для входа в систему управления своим портфелем.

Существование интерфейса Web-формы, с помощью которого инвестор управляет своим портфелем, отдает ордера по купле/продаже финансовых инструментов и пр.

Существование раздела сайта, связанного с новостями о финансах и рынках.

Предоставление часто обновляющихся котировок ценных бумаг и курсов валют (обычно 1 раз в минуту).

Предоставление простых графиков, аналитических статей и др. для инвестора.

Поиск ценных бумаг по критериям (dept-to-equity, growth rate, PE и др.).

Другие платные и бесплатные услуги.

Основные компоненты стандартной Web-формы (на примере Merita Bank, отделение Solo Bank):

1. Web-форма отражает полный баланс клиента и сумму, доступную для инвестиций.

2. Номер текущего портфеля (у одного инвестора их может быть несколько).

3. Ценные бумаги, которые содержатся в портфеле (рассортированы по типам ценных бумаг: акции, облигации, опционы и т.д.), их количество в портфеле, рыночная стоимость позиций, рыночные цены на данные активы.

4. Информационное поле, где отражается та информация, которую инвестор может получить по ценным бумагам: Prices and indexes, Rates to be monitored, Stock exchange notifications, Actuarial calculations, Reviews.

5. Поле "покупка/продажа". Через это поле инвестор отдает ордера на покупку/продажу ценных бумаг.

Регистрация и открытие счета

Регистрация и открытие счета обычно сводится к заполнению анкеты на Web-странице компании. Основные пункты анкеты:

Личные данные: ФИО, адрес, телефон, e-mail и т.д.

Выбор имени пользователя и пароль.

Выбор типа открываемого счета: обычный, пенсионный и др. (Joint Tenant, Sole Proprietorship, Tenants In Common, Partnership, Custodian, Investment Club, Trust).

Выбор типа получения котировок (платное, бесплатное).

Интернет-трейдинг с применением специального программного обеспечения

Обычно специальное программное обеспечение (клиент-программы) применяется при оказании брокерских услуг в трех видах:

Клиент-программа, которая позволяет общаться брокеру и клиенту при помощи сети Интернет. Эта программа должна поддерживать специальную систему ордеров. Краткое описание работы такой системы можно свести к следующему:

Клиент-программа подключается к информационным серверам бирж и банков.

Клиент-программа подключается к серверу брокера.

Клиент анализирует информацию.

Отдает ордер брокеру.

Брокер выполняет ордер.

Клиент получает подтверждение выполнения транзакции.

Клиент-прогамма, представляющая собой аналитический модуль, который может трансформировать получаемые данные в графики, строит различные виды индикаторов и линии тренда. Зачастую данные программы подключаются к различным информационным агентствам, что позволяет пользователю получать различную финансовую, экономическую и политическую информацию.

Программные средства криптографической защиты информации - это модули, которые просто повышают степень защиты передачи информации через Интернет и не предоставляют никаких дополнительных услуг пользователю. Например, такие программные модули используют российские компании "РосТрейд" и "Атон".

Несмотря на то, что все эти клиент-программы пользователь может получить через Интернет, обычно окончательную регистрацию приходится проходить в офисе компании, что в свою очередь является еще одним минусом в данном способе брокерских услуг.

Интернет-трейдинг в России

Как уже было сказано, почти все российские онлайновые брокеры так или иначе используют специальное программное обеспечение.

Российские интернет-брокеры

Брокерские интернет-услуги российских компаний. Краткая характеристика используемых систем

Гута-банк (http://www.guta.ru/)

Гута-банк - это первый российский онлайновый брокер, который стал предлагать свои услуги по Интернет-трейдингу уже в 1996 году. Гута-банк предлагает своим клиентам брокерское обслуживание в Интернет в режиме реального времени с помощью системы "Remote Trader"(RT). "Remote trader" позволяет клиентам обмениваться зашифрованными протоколированными сообщениями с банком, запрашивать и получать котировки по любым финансовым инструментам, обращающимся на ММВБ, МФБ, FOREX, и направлять заявки на покупку и продажу ценных бумаг в режиме реального времени по сети Интернет.

Программа RT дает возможность совершать транзакции и предоставляет минимальную рыночную информацию. Для получения более общей и подробной информации "Гута-банк" предлагает установить программу "Информационный терминал ЭФиР". Кроме новостей агентства "Интерфакс", информации о ходе торгов на ММВБ, МФБ и в РТС в режиме реального времени, через информационный терминал пользователь получает бесплатный доступ к базам данных Банка России, Министерства финансов РФ, ФКЦБ, МРО ФКЦБ по компаниям эмитентам и зарегистрированным проспектам эмиссий. Терминал обеспечивает также доступ к котировальной информации ведущих брокеров на рынке акций и облигаций.

Инсталляция.

Для инсталляции программы клиенту нужно списать дистрибутив программы (1,3 Мб, не включающий систему "ЭФиР") на свой компьютер. Для работы с программой необходимо заполнить регистрационную форму и воспользоваться полученными по почте именем и паролем, которые высылаются после заключения письменного договора с "Гута-банком".

Для установки системы "ЭфиР" клиент должен списать дистрибутив программы (4 Мб), произвести инсталляцию. Для получения личного пароля пользователю нужно позвонить в офис компании.

Функции Remote trader:

Просматривать котировки всех инструментов, включенных в листинг ММВБ и МФБ (акции, облигации), в режиме реального времени (просмотр котировок только при совмещении с "Эфиром").

Направлять заявки на ММВБ и МФБ, FOREX по Интернет.

Осуществлять операции с частичным покрытием при бесплатном кредитовании деньгами или ценными бумагами в течение торговой сессии.

Контролировать состояние инвестиционного портфеля в реальном времени.

Предоставлять возможность открытия короткой позиции при совершении операций. Клиенты могут открывать короткую позицию при совершении операций, как по денежным средствам, так и по ценным бумагам при работе с инструментами, обращающимися на ММВБ и МФБ, через Интернет в режиме реального времени. При этом начальный уровень маржи составляет 50%. Данная услуга предоставляется всем категориям клиентов.

Клиенты могут совершать операции одновременно на нескольких торговых площадках.

АКБ "РОСБАНК"

Система онлайновой торговли российскими ценными бумагами РосТрейд является совместным проектом АКБ "РОСБАНК" и компании "ГЛАНС". Система ориентирована на средних и мелких инвесторов. Система дает возможность инвестору торговать только на одной бирже ММВБ. Первоочередной задачей участников проекта на данный момент является создание внутренней торговой системы РОСБАНКа, где клиентам будет предложен широкий набор таких инструментов, как иностранная валюта, российские валютные облигации, драгоценные металлы, акции, входящие в расчетные индексы РТС, ММВБ, Dow-Jones, NASDAQ. К сожалению, сегодня клиентам "РосТрейда" не оказывается никакой кредитной поддержки для проведения торговых операций на рынке ценных бумаг.

Полная система РосТрейд состоит из трех отдельных компонентов:

Программные средства криптографической защиты информации (СКЗИ) Crypton Emulator и Crypton ArcMail (совместно с Crypton API).

Продукт агентства Рейтер - Reuters Investor, доступ к которому осуществляется через Web-сайт РосТрейда. Все новости и котировки структурированы по основным секторам/темам. Для того чтобы отслеживать одновременно несколько разных блоков, существует возможность открывать сразу несколько окон Интернет-браузера. Пакет информации включает в себя котировки и исторические данные по всем секторам финансового рынка, а также политические и экономические новости на русском языке, основные мировые новости на английском языке.

Сама программа РосТрейд, выполненная как Java аплет. Это программа позволяет со страниц Web-сайта получать котировки с ММВБ в реальном времени, отдавать заказы на покупку/продажу, просматривать историю своих сделок, просматривать свой портфель и пр.

Для того, чтобы пользоваться услугами РосТрейд, клиенту следует заполнить анкету (можно на Web-сайте) и оформить 5 документов (в офисе компании). После этого клиент будет зарегистрирован в системе: открыты необходимые счета, получены ключ доступа, программное обеспечение. Для начала работы клиенту остается перевести деньги и/или ценные бумаги на свой брокерский счет.

Что касается тарифов за услуги, предоставляемые РосТрейдом, то они зависят от выбранного тарифного плана (всего их три); использование самой системы РосТрейд бесплатное. Комиссия взимается дважды, не зависимо от тарифного плана банком и ТС (Н)ГЦБ ММВБ.

Инвестиционная компания "Атон"

Продуктом инвестиционной компании "Атон", обеспечивающим онлайновую торговлю ценными бумагами в Интернет, является система "Aton-Line". Все торговые операции и получение биржевой информации происходят через Web-сайт компании на основе обмена данными в формате HTML посредством протокола HTTP. "Плавающие окна", обновление данных в режиме он-лайн и другой отличительный функционал системы реализован на встроенном в браузер Internet Explorer скриптовом языке. Таким образом, для выставления заявок и полноценной работы в системе требуются только браузер и программа для шифрования данных. Если у пользователя установлена Java-машина, ему доступен и дополнительный аналитический функционал - графики в реальном масштабе времени. В качестве программы защиты информации используется Inter-Pro Client.

Aton-Line более мощная программа, нежели РосТрейд. С ее помощью пользователь не только может получать котировки и совершать покупку/продажу ценных бумаг на биржах, но и отслеживать финансовые новости, строить графики и проводить технический анализ. Кроме того, интерфейс программы может быть полностью настроен пользователем вплоть до изменения шрифта. Система поддерживает два языка: английский и русский. С помощью данной системы пользователь имеет прямой доступ к РТС, ММВБ, МФБ.

Компания "Атон" предоставляет услуги и по маржинальной торговле (т.е. возможность открытия margin счета). Первоначальная маржа 50%, минимальная 30%. В зависимости от биржи, на которой происходят торги с марживым счетом, Атон взимает разный процент с инвестора.

Для того, чтобы стать клиентом инвестиционной компании "Атон" и иметь возможность работать с программой Aton-Line, инвестору придется заполнить достаточно большое количество документов для регистрации в системе, сгенерировать ключ доступа, установить защитную систему Inter-Pro.Все эти процедуры введены компанией с целью соблюдения всех требований действующего законодательства РФ по документообороту при осуществлении брокерского обслуживания клиентов, а требование об обязательном использовании системы защиты продиктовано заботой по обеспечению конфиденциальности именно персональной информации о клиенте и его операциях на рынке. Весь порядок инсталляции поэтапно изложен в подразделе "Открыть счет" на сайте компании (www.aton-line.ru/nonclients.asp). И после этого остается перевести деньги и/или ценные бумаги на брокерский счет и можно приступать к работе.

АКБ "Лефко-Банк"

Лефко-Банк оказывает свои услуги по Интернет-трейдингу при помощи системы Internet Dealer. Интернет Дилер - это компьютерная программа, позволяющая проводить операции на рынке ценных бумаг ММВБ и МФБ в режиме реального времени через АКБ "Лефко-Банк". Программа обеспечивает защиту от несанкционированного доступа к информации и ресурсам клиентов. Данная система позволяет:

По сети Интернет в режиме реального времени заключать сделки по государственным и корпоративным ценным бумагам, обращающимся на ММВБ и МФБ.

Используя один монитор, заключать сделки одновременно на ММВБ и МФБ.

Управлять своим портфелем, контролируя остатки денежных средств и ценных бумаг.

Совершать операции "без покрытия" на покупку и продажу ликвидных ценных бумаг с кредитным плечом (минимальный уровень дисконта 50%).

Получать котировки всех ценных бумаг, обращающихся на ММВБ и МФБ (включая акции второго эшелона), а также курсы валют и основные мировые биржевые индексы.

Система оснащена многоступенчатой защитой от несанкционированного доступа: информация, передаваемая по каналам связи с банком, шифруется с помощью криптовальной процедуры. Ключ к шифру (специальная дискета) представляет собой уникальный код и находится у клиента.

Система Internet Dealer платная - $10 в месяц. Комиссионные, взимаемые компанией, зависят от суммы сделки (от 0,02% за 5 млн.руб. и больше до 0,3% за 100 тыс.руб. и меньше).

ИК "Церих Кэпитал Менеджмент"

Для предоставления услуги Интернет-трейдинга, компанией "ЦЕРИХ Кэпитал менеджмент" была разработана торговая система Z-Trade. Она позволяет трейдеру работать на фондовой секции ММВБ и РТС. С помощью Z-TRADE можно наблюдать текущее состояние рынка, самостоятельно выставлять и снимать заявки в режиме реального времени, получать аналитическую информацию в режиме онлайн. Система ориентирована на профессиональных участников фондового рынка, банки, а также мелких и средних инвесторов. В коммерческую эксплуатацию Z-TRADE была запущена 1 сентября 2000 года. По состоянию на 09 октября число пользователей системы - 75 (рабочий сервер) и 1335 (игровой сервер); количество в среднем сделок за торговую сессию - 30 и 200 соответственно.

Система Z-trade позволяет:

видеть текущее состояние рынка;

совершать сделки в режиме реального времени по корпоративным ценным бумагам на ММВБ и в РТС;

выставлять заявки на покупку-продажу ценных бумаг в очередь на ММВБ и в РТС;

видеть текущее состояние счета и своей позиции по денежным средствам и ценным бумагам;

совершать операции "без покрытия" на покупку или продажу ценных бумаг, изменяя, по согласованию с администратором счета, свои лимиты;

отображать котировки в графическом виде в режиме он-лайн;

получать консультации о текущем состоянии фондового рынка через интерфейс, общаясь с администратором счета;

получать выписки, отчеты на бумажном носителе и в электронном виде;

экспортировать информацию в любую из ныне существующих систем технического анализа.

Кроме того, компания "ЦЕРИХ Кэпитал менеджмент" предоставляет пользователю Z-Trade возможность маржинального кредитования. При этом кредитование как денежными средствами, так и ценными бумагами в течение торговой сессии является бесплатным. Размер плеча определяется администратором счета и обычно составляет: внутри дня - от 1:2 до 1:4; с переносом позиции на следующий день - 1:3. Кредитование производится путем изменения лимитов администратором счета перед началом торгового дня.

Для обеспечения безопасности системы компания "ЦЕРИХ Кэпитал менеджмент" предприняла следующие меры. Первое - это использование программного средства криптографической защиты информации "Нотариус". В 1999 году оно было сертифицировано в системе государственной сертификации России ГОСТ РФ. Второе - система Z-trade застрахована российским страховым агентством Ингосстрах по таким позициям как: убытки, причиненные действиями третьих лиц, заключающимися в несанкционированном доступе к техническим средствам; убытки, связанные с повреждением/уничтожением электронных данных и их носителей; убытки, причиненные действиями компьютерных вирусов.

Программа Z-Trade и месячное обслуживание бесплатные. Пользователь платит за открытие счета и комиссионные с суммы сделки, которые зависят от объема сделки за день. Минимум 0,03% при обороте больше 3 млн. рублей, максимум 0,2% при обороте менее 50000 рублей.

Для того чтобы стать клиентом "ЦЕРИХ Кэпитал менеджмент", нужно получить ПО Z-Trade с Web-сайта компании и установить его на компьютере. Затем нужно открыть счет в системе. Эта процедура включает в себя заключение договора обслуживания на фондовом рынке "Клиент - ЦЕРИХ Кэпитал менеджмент" и подписание комплекта документов "Клиент - Депозитарий". Открытие счета возможно через Интернет. Будущий клиент заполняет простую форму и оставляет номер контактного телефона. На основании полученных данных компания подготовит все необходимые документы. По указанному номеру телефона с клиентом свяжется диспетчер для уточнения, куда следует доставить подготовленные договоры. До прибытия курьера нужно перевести в безналичном порядке на счет компании "ЦЕРИХ Кэпитал менеджмент" денежные средства в размере $40, так как для начала реальной работы на ММВБ необходима дискета со специальным электронным ключом, - именно она и стоит 40 долларов. Все документы и ключевую дискету, необходимую для начала работы с системой Z-TRADE, курьер доставит по указанному адресу. Клиенту остается только поставить на них свою подпись. Описанная выше процедура относится к клиентам, проживающим в Москве. В другие регионы документы клиенту отправляются заказным письмом, а от клиента к компании - службой DHL. Поэтому клиенту на счет компании нужно будет перевести 90 долларов, а не 40.