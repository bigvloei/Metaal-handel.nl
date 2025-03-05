<?php
// Basisinstellingen
$page_title = "Veelgestelde vragen | Metaal-handel.nl";
$base_path = $_SERVER['DOCUMENT_ROOT']; 
$base_url = "/"; // Aangepast voor submap

// Header includen
include($base_path . '/header.php');
?>

<main class="main-content">
  <section class="hero-section faq-hero">
    <div class="container">
      <h1>Veelgestelde vragen</h1>
      <p class="lead">Antwoorden op de meest voorkomende vragen over Metaal-handel.nl</p>
    </div>
  </section>

  <section class="faq-navigation-section">
    <div class="container">
      <div class="category-nav">
        <a href="#algemeen" class="category-link active">Algemeen</a>
        <a href="#particulieren" class="category-link">Voor particulieren</a>
        <a href="#handelaren" class="category-link">Voor handelaren</a>
        <a href="#betalingen" class="category-link">Betalingen & prijzen</a>
        <a href="#platform" class="category-link">Platform & technisch</a>
      </div>
    </div>
  </section>

  <section id="algemeen" class="faq-section">
    <div class="container">
      <h2 class="section-title">Algemene vragen</h2>
      
      <div class="accordion">
        <div class="accordion-item">
          <button class="accordion-header">Wat is Metaal-handel.nl precies?</button>
          <div class="accordion-content">
            <p>Metaal-handel.nl is het grootste online platform in Nederland dat particulieren en bedrijven verbindt met lokale metaalhandelaren. Het platform maakt het mogelijk om eenvoudig, snel en tegen de beste prijzen oud ijzer en andere metalen te verkopen. Het werkt als een veilingplatform: u plaatst een opdracht met informatie over uw metalen, en gecertificeerde handelaren in uw regio brengen een bod uit. U kiest de beste aanbieding en maakt een afspraak voor ophaling.</p>
          </div>
        </div>
        
        <div class="accordion-item">
          <button class="accordion-header">Welke materialen kan ik aanbieden/ophalen via het platform?</button>
          <div class="accordion-content">
            <p>Via Metaal-handel.nl kunt u vrijwel alle soorten metalen aanbieden of ophalen, waaronder:</p>
            <ul>
              <li>IJzer en staal (oud ijzer, schroot)</li>
              <li>Non-ferro metalen zoals koper, aluminium, lood, zink en messing</li>
              <li>RVS (roestvrij staal)</li>
              <li>Elektromotoren en transformatoren</li>
              <li>Oude apparaten en witgoed (wasmachines, drogers, etc.)</li>
              <li>Elektronisch afval en printplaten</li>
              <li>Auto-onderdelen en metalen voertuigcomponenten</li>
              <li>Kabels en draden</li>
              <li>Industrieel metaalafval</li>
            </ul>
            <p>Bij twijfel of uw materiaal geschikt is, kunt u altijd een opdracht plaatsen met foto's en een beschrijving. Handelaren zullen aangeven of zij interesse hebben.</p>
          </div>
        </div>
        
        <div class="accordion-item">
          <button class="accordion-header">Is Metaal-handel.nl in heel Nederland actief?</button>
          <div class="accordion-content">
            <p>Ja, Metaal-handel.nl is actief in heel Nederland. We hebben een netwerk van meer dan 800 geregistreerde handelaren die samen alle provincies en regio's bestrijken. In dichtbevolkte gebieden zoals de Randstad is de dekking het meest uitgebreid, maar ook in landelijke gebieden hebben we voldoende handelaren om een goede service te garanderen.</p>
            <p>Het is in zeer afgelegen gebieden mogelijk dat er minder handelaren actief zijn, wat kan leiden tot iets minder concurrentie en daardoor mogelijk iets lagere biedingen. Maar over het algemeen zorgt ons grote netwerk ervoor dat u altijd meerdere biedingen zult ontvangen, ongeacht uw locatie in Nederland.</p>
          </div>
        </div>
        
        <div class="accordion-item">
          <button class="accordion-header">Hoe lang bestaat Metaal-handel.nl al?</button>
          <div class="accordion-content">
            <p>Metaal-handel.nl is in 2018 opgericht door een team van professionals uit de recyclingindustrie. Het platform is ontstaan vanuit de behoefte om het proces van metaalrecycling voor zowel aanbieders als handelaren efficiënter te maken. Sinds de oprichting hebben we ons ontwikkeld tot het grootste online platform voor metaalhandel in Nederland, met meer dan 12.000 succesvol afgeronde transacties in 2024 alleen al.</p>
            <p>In de loop der jaren hebben we ons platform voortdurend verbeterd op basis van feedback van onze gebruikers, met nieuwe functies en een steeds groter netwerk van betrouwbare handelaren.</p>
          </div>
        </div>
        
        <div class="accordion-item">
          <button class="accordion-header">Is het gebruik van Metaal-handel.nl milieuvriendelijk?</button>
          <div class="accordion-content">
            <p>Ja, Metaal-handel.nl draagt actief bij aan een beter milieu op meerdere manieren:</p>
            <ul>
              <li><strong>Recycling bevorderen:</strong> Door het verkopen en ophalen van metaalafval laagdrempelig te maken, stimuleren we recycling en voorkomen we dat waardevolle materialen op de vuilnisbelt belanden.</li>
              <li><strong>Efficiënte routes:</strong> Handelaren kunnen met ons platform efficiëntere ophaalroutes plannen en meerdere opdrachten in dezelfde buurt combineren, wat leidt tot minder CO2-uitstoot.</li>
              <li><strong>Digitale administratie:</strong> Door het digitaliseren van het proces vermindert de behoefte aan papierwerk.</li>
              <li><strong>Lokale handel:</strong> We koppelen aanbieders aan handelaren in hun directe omgeving, wat lange transportafstanden vermindert.</li>
            </ul>
            <p>Metaalrecycling zelf is een van de meest efficiënte vormen van recycling. Het hergebruiken van metalen bespaart tot 95% van de energie die nodig zou zijn om nieuwe metalen te produceren uit ertsen, en vermindert ook de behoefte aan mijnbouw, wat vaak schadelijke gevolgen heeft voor ecosystemen.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="particulieren" class="faq-section">
    <div class="container">
      <h2 class="section-title">Voor particulieren</h2>
      
      <div class="accordion">
        <div class="accordion-item">
          <button class="accordion-header">Hoe plaats ik een opdracht voor het ophalen van mijn metalen?</button>
          <div class="accordion-content">
            <p>Het plaatsen van een opdracht op Metaal-handel.nl is eenvoudig en kost slechts enkele minuten:</p>
            <ol>
              <li>Klik op de knop "Opdracht plaatsen" op de homepage of in het menu.</li>
              <li>Maak een gratis account aan of log in als u al een account heeft.</li>
              <li>Vul het opdrachtformulier in met details over uw metalen (soort, geschatte hoeveelheid).</li>
              <li>Upload duidelijke foto's van de materialen (dit vergroot de kans op goede biedingen).</li>
              <li>Geef uw locatie en beschikbaarheid voor ophaling aan.</li>
              <li>Controleer en bevestig uw opdracht.</li>
            </ol>
            <p>Na het plaatsen van uw opdracht wordt deze zichtbaar voor handelaren in uw regio, die vervolgens biedingen kunnen uitbrengen. U ontvangt een notificatie per e-mail wanneer er een nieuw bod binnenkomt.</p>
          </div>
        </div>
        
        <div class="accordion-item">
          <button class="accordion-header">Hoeveel biedingen kan ik verwachten op mijn opdracht?</button>
          <div class="accordion-content">
            <p>Het aantal biedingen dat u ontvangt, hangt af van verschillende factoren:</p>
            <ul>
              <li><strong>Soort metaal:</strong> Voor veelgevraagde metalen zoals koper, aluminium en rvs zijn handelaren vaak bereid meer te bieden.</li>
              <li><strong>Hoeveelheid:</strong> Grotere hoeveelheden trekken doorgaans meer biedingen aan.</li>
              <li><strong>Kwaliteit van uw beschrijving en foto's:</strong> Duidelijke foto's en een gedetailleerde beschrijving trekken meer handelaren aan.</li>
              <li><strong>Uw locatie:</strong> In dichtbevolkte gebieden zijn meestal meer handelaren actief.</li>
            </ul>
            <p>Gemiddeld ontvangt een opdracht tussen de 3 en 8 biedingen binnen 48 uur. Voor grotere partijen hoogwaardige metalen kunnen dit er nog meer zijn.</p>
          </div>
        </div>
        
        <div class="accordion-item">
          <button class="accordion-header">Moet ik thuis zijn tijdens de ophaling?</button>
          <div class="accordion-content">
            <p>Voor de meeste ophalingen is het handig als u of iemand anders aanwezig is, vooral omdat:</p>
            <ul>
              <li>De handelaar direct contant kan betalen bij ophaling.</li>
              <li>U eventueel nog kunt overleggen over specifieke items of aanwijzingen kunt geven.</li>
              <li>U de ophaling kunt bevestigen, wat belangrijk is voor ons beoordelingssysteem.</li>
            </ul>
            <p>In sommige gevallen, bijvoorbeeld bij het ophalen van materialen die buiten klaarstaan, kan met de handelaar worden afgesproken dat u niet aanwezig hoeft te zijn. Dit moet u dan duidelijk communiceren tijdens het maken van de afspraak en afspreken hoe de betaling zal plaatsvinden (bijv. via bankoverschrijving).</p>
          </div>
        </div>
        
        <div class="accordion-item">
          <button class="accordion-header">Kosten het aanbieden van mijn metalen geld?</button>
          <div class="accordion-content">
            <p>Nee, voor particulieren is het gebruik van Metaal-handel.nl 100% gratis. U betaalt geen registratiekosten, geen kosten voor het plaatsen van een opdracht, en ook geen commissie over de ontvangen betaling. De volledige opbrengst van uw metalen gaat naar u.</p>
            <p>Metaal-handel.nl verdient aan een kleine commissie die we in rekening brengen bij de handelaren, maar dit heeft geen invloed op het bedrag dat u ontvangt. Sterker nog, door het veilingsysteem waarbij meerdere handelaren bieden op uw materialen, bent u verzekerd van de beste marktprijs.</p>
          </div>
        </div>
        
        <div class="accordion-item">
          <button class="accordion-header">Hoe weet ik of de handelaar betrouwbaar is?</button>
          <div class="accordion-content">
            <p>Alle handelaren op Metaal-handel.nl worden vooraf geverifieerd. We controleren onder meer:</p>
            <ul>
              <li>KVK-inschrijving en bedrijfsgegevens</li>
              <li>Benodigde vergunningen en certificeringen</li>
              <li>Identiteit van de eigenaar/vertegenwoordiger</li>
            </ul>
            <p>Daarnaast heeft elke handelaar een profiel met beoordelingen en recensies van eerdere klanten. Deze kunt u bekijken voordat u een bod accepteert. We hanteren een streng beoordelingssysteem en handelaren met herhaaldelijk slechte beoordelingen worden van ons platform verwijderd.</p>
            <p>Mocht u toch problemen ervaren met een handelaar, dan kunt u contact opnemen met onze klantenservice. We hebben een garantiebeleid om ervoor te zorgen dat alle transacties eerlijk verlopen.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="handelaren" class="faq-section">
    <div class="container">
      <h2 class="section-title">Voor handelaren</h2>
      
      <div class="accordion">
        <div class="accordion-item">
          <button class="accordion-header">Hoe word ik handelaar op Metaal-handel.nl?</button>
          <div class="accordion-content">
            <p>Om handelaar te worden op ons platform, volgt u deze stappen:</p>
            <ol>
              <li>Ga naar de registratiepagina voor handelaren via de knop "Word handelaar" op onze website.</li>
              <li>Vul het aanmeldformulier in met uw bedrijfsgegevens, inclusief KVK-nummer.</li>
              <li>Upload de vereiste documenten (identiteitsbewijs, bedrijfsvergunningen indien van toepassing).</li>
              <li>Definieer uw werkgebied (regio's waar u materialen wilt ophalen).</li>
              <li>Geef aan welke materialen u accepteert en verwerkt.</li>
              <li>Zodra uw aanmelding is goedgekeurd (meestal binnen 24 werkuren), krijgt u toegang tot het handelaarsplatform.</li>
            </ol>
            <p>Na goedkeuring kunt u direct beginnen met het bekijken van beschikbare opdrachten en het uitbrengen van biedingen.</p>
          </div>
        </div>
        
        <div class="accordion-item">
          <button class="accordion-header">Wat zijn de kosten voor handelaren?</button>
          <div class="accordion-content">
            <p>Als handelaar op Metaal-handel.nl werkt u op basis van een succesfee-model:</p>
            <ul>
              <li>Registratie en toegang tot het platform zijn gratis.</li>
              <li>U betaalt alleen een commissie over succesvol afgeronde transacties.</li>
              <li>De standaard commissie is 10% over het door u geboden bedrag.</li>
              <li>Voor frequente gebruikers bieden we volumekortingen, waardoor de commissie kan dalen naar 5-7%.</li>
            </ul>
            <p>Alle commissies worden maandelijks achteraf gefactureerd, wat uw cashflow optimaliseert. Er zijn geen verborgen kosten of abonnementskosten. U kunt het platform zo vaak of weinig gebruiken als u wilt, zonder vaste verplichtingen.</p>
          </div>
        </div>
        
        <div class="accordion-item">
          <button class="accordion-header">Hoe word ik op de hoogte gebracht van nieuwe opdrachten?</button>
          <div class="accordion-content">
            <p>Als handelaar kunt u op verschillende manieren op de hoogte blijven van nieuwe opdrachten:</p>
            <ul>
              <li><strong>Dashboard:</strong> In uw persoonlijke dashboard ziet u een overzicht van alle actuele opdrachten in uw werkgebied.</li>
              <li><strong>E-mailnotificaties:</strong> U ontvangt automatisch e-mails wanneer er nieuwe opdrachten zijn in uw regio die voldoen aan uw voorkeuren.</li>
              <li><strong>Mobiele app:</strong> Via onze app krijgt u direct push-notificaties voor nieuwe opdrachten (beschikbaar voor iOS en Android).</li>
              <li><strong>Sms-alerts:</strong> Optioneel kunt u sms-alerts instellen voor hoogwaardige opdrachten die aan uw specifieke criteria voldoen.</li>
            </ul>
            <p>U kunt uw notificatie-instellingen aanpassen in uw profiel, zodat u alleen berichten ontvangt over de opdrachten die voor u relevant zijn.</p>
          </div>
        </div>
        
        <div class="accordion-item">
          <button class="accordion-header">Hoe verhoog ik mijn kans om opdrachten te winnen?</button>
          <div class="accordion-content">
            <p>Om uw slagingskans bij het bieden te verhogen, zijn er verschillende strategieën die werken:</p>
            <ul>
              <li><strong>Snelheid:</strong> Reageer snel op nieuwe opdrachten. De eerste biedingen worden vaak meer opgemerkt.</li>
              <li><strong>Persoonlijk bericht:</strong> Voeg bij uw bod een kort, persoonlijk bericht toe waarin u uitlegt waarom de klant voor u zou moeten kiezen.</li>
              <li><strong>Beoordelingen:</strong> Zorg voor uitstekende beoordelingen door goede service te bieden. Klanten kiezen vaak voor handelaren met de beste reviews, zelfs als het bod niet het allerhoogste is.</li>
              <li><strong>Flexibiliteit:</strong> Bied flexibele ophaaltijden aan, inclusief avonden en weekenden als dat mogelijk is.</li>
              <li><strong>Competitieve prijzen:</strong> Houd de marktprijzen goed in de gaten en bied een eerlijke prijs die uw kosten dekt maar ook aantrekkelijk is voor de klant.</li>
            </ul>
            <p>Als Premium-handelaar krijgt u ook toegang tot extra functies zoals het kunnen zien van andere biedingen en voorrang bij het tonen van uw profiel aan klanten.</p>
          </div>
        </div>
        
        <div class="accordion-item">
          <button class="accordion-header">Wat gebeurt er als de beschrijving niet overeenkomt met het werkelijke materiaal?</button>
          <div class="accordion-content">
            <p>Het komt soms voor dat het aangeboden materiaal afwijkt van de beschrijving of foto's. In zo'n geval heeft u als handelaar de volgende opties:</p>
            <ul>
              <li>U kunt ter plekke een nieuw, aangepast bod doen op basis van wat u aantreft.</li>
              <li>Als het materiaal aanzienlijk minder waard is, kunt u ervoor kiezen om de opdracht te annuleren zonder consequenties.</li>
              <li>Bij herhaaldelijke onjuiste beschrijvingen door dezelfde aanbieder kunt u dit melden bij onze klantenservice, die dan passende maatregelen kan nemen.</li>
            </ul>
            <p>We moedigen handelaren aan om bij twijfel vooraf te vragen om aanvullende foto's of informatie. Ook raden we aan om bij de eerste paar transacties met een nieuwe klant extra alert te zijn.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="betalingen" class="faq-section">
    <div class="container">
      <h2 class="section-title">Betalingen & prijzen</h2>
      
      <div class="accordion">
        <div class="accordion-item">
          <button class="accordion-header">Hoe wordt de prijs van mijn metalen bepaald?</button>
          <div class="accordion-content">
            <p>De prijs die u voor uw metalen ontvangt wordt bepaald door verschillende factoren:</p>
            <ul>
              <li><strong>Type metaal:</strong> Verschillende metalen hebben verschillende marktwaarden. Koper en messing zijn bijvoorbeeld waardevoller dan ijzer.</li>
              <li><strong>Kwaliteit en zuiverheid:</strong> Zuivere metalen brengen meer op dan gemengde of vervuilde materialen.</li>
              <li><strong>Gewicht:</strong> De prijs wordt bijna altijd per kilogram of per ton berekend.</li>
              <li><strong>Actuele marktprijzen:</strong> Metaalprijzen fluctueren dagelijks op de wereldmarkt.</li>
              <li><strong>Transportkosten:</strong> De afstand en toegankelijkheid van uw locatie kunnen invloed hebben op de geboden prijs.</li>
              <li><strong>Concurrentie:</strong> Dankzij ons veilingsysteem bieden meerdere handelaren tegen elkaar op, wat doorgaans leidt tot een betere prijs voor u.</li>
            </ul>
            <p>U bent nooit verplicht om een bod te accepteren. U kunt wachten tot u een bod ontvangt dat u tevreden stelt, of eventueel een tegenbod doen.</p>
          </div>
        </div>
        
        <div class="accordion-item">
          <button class="accordion-header">Hoe ontvang ik betaling voor mijn metalen?</button>
          <div class="accordion-content">
            <p>De betaling voor uw metalen wordt direct door de handelaar gedaan op het moment van ophaling. U kunt kiezen uit de volgende betaalmethoden, die u bij het plaatsen van uw opdracht kunt aangeven:</p>
            <ul>
              <li><strong>Contante betaling:</strong> De meest voorkomende methode, waarbij u direct bij ophaling contant wordt betaald.</li>
              <li><strong>Bankoverschrijving:</strong> De handelaar maakt het geld over naar uw rekening (meestal binnen 24 uur na ophaling).</li>
              <li><strong>Tikkie/betaalverzoek:</strong> Een snelle elektronische betaling via een betaalapp.</li>
            </ul>
            <p>Voor bedrijven is het ook mogelijk om een factuur te genereren via ons platform, die de handelaar volgens de overeengekomen betalingstermijn kan voldoen.</p>
            <p>Belangrijk: Handelaren op ons platform zijn verplicht om zich te houden aan de betalingsvoorwaarden. Als een handelaar niet betaalt zoals afgesproken, kunt u dit melden en zullen wij bemiddelen.</p>
          </div>
        </div>
        
        <div class="accordion-item">
          <button class="accordion-header">Is er een minimumwaarde voor opdrachten?</button>
          <div class="accordion-content">
            <p>Er is geen formele minimumwaarde voor opdrachten op Metaal-handel.nl. U kunt in principe ook kleine hoeveelheden metaal aanbieden. Echter, in de praktijk zijn er enkele overwegingen:</p>
            <ul>
              <li>Voor handelaren moeten de transportkosten en tijd in verhouding staan tot de waarde van het materiaal.</li>
              <li>Voor kleine hoeveelheden (bijvoorbeeld minder dan 20-30 kg) krijgt u mogelijk minder biedingen.</li>
              <li>Bij zeer kleine hoeveelheden kan het voordeliger zijn om deze te bewaren tot u meer heeft verzameld.</li>
            </ul>
            <p>Een praktische tip: combineer verschillende soorten metaal in één ophaling om het voor de handelaar aantrekkelijker te maken. Ook kunt u met buren of familie afspreken om gezamenlijk materiaal aan te bieden.</p>
          </div>
        </div>
        
        <div class="accordion-item">
          <button class="accordion-header">Wat zijn de actuele prijzen voor verschillende metalen?</button>
          <div class="accordion-content">
            <p>Metaalprijzen fluctueren dagelijks op basis van vraag en aanbod op de wereldmarkt. Als indicatie geven we hieronder de gemiddelde prijsranges voor de meest voorkomende metalen (prijzen in € per kg, voor particulieren):</p>
            <ul>
              <li><strong>Oud ijzer/schroot:</strong> €0,10 - €0,25</li>
              <li><strong>RVS (roestvrij staal):</strong> €0,80 - €1,30</li>
              <li><strong>Aluminium:</strong> €0,50 - €1,50 (afhankelijk van kwaliteit/legering)</li>
              <li><strong>Koper:</strong> €5,00 - €7,00</li>
              <li><strong>Messing:</strong> €3,00 - €4,50</li>
              <li><strong>Lood:</strong> €0,80 - €1,30</li>
              <li><strong>Zink:</strong> €1,00 - €1,80</li>
              <li><strong>Kabels:</strong> €1,00 - €3,00 (afhankelijk van kopergehalte)</li>
            </ul>
            <p>Voor de meest actuele prijzen kunt u onze <a href="<?php echo $base_url; ?>prijzen.php">prijzenpagina</a> raadplegen, die dagelijks wordt bijgewerkt. Houd er rekening mee dat de werkelijke prijs die u ontvangt ook afhangt van de hoeveelheid, kwaliteit en uw locatie.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="platform" class="faq-section">
    <div class="container">
      <h2 class="section-title">Platform & technisch</h2>
      
      <div class="accordion">
        <div class="accordion-item">
          <button class="accordion-header">Kan ik het platform gebruiken op mijn mobiele telefoon?</button>
          <div class="accordion-content">
            <p>Ja, Metaal-handel.nl is volledig responsief en werkt uitstekend op mobiele telefoons en tablets. Daarnaast bieden we speciale apps voor nog meer gebruiksgemak:</p>
            <ul>
              <li><strong>iOS-app:</strong> Beschikbaar in de App Store voor iPhone en iPad.</li>
              <li><strong>Android-app:</strong> Verkrijgbaar via de Google Play Store.</li>
            </ul>
            <p>De mobiele apps bieden extra functionaliteiten zoals:</p>
            <ul>
              <li>Direct foto's maken en uploaden bij het plaatsen van opdrachten.</li>
              <li>Push-notificaties voor nieuwe biedingen of berichten.</li>
              <li>Locatiegegevens automatisch invullen via GPS.</li>
              <li>Offline toegang tot uw afspraken en contactgegevens.</li>
            </ul>
            <p>Of u nu de website of de app gebruikt, al uw gegevens worden gesynchroniseerd zodat u altijd toegang heeft tot uw account en opdrachten.</p>
          </div>
        </div>
        
        <div class="accordion-item">
          <button class="accordion-header">Hoe zit het met de privacy van mijn gegevens?</button>
          <div class="accordion-content">
            <p>Bij Metaal-handel.nl nemen we de privacy van uw gegevens zeer serieus:</p>
            <ul>
              <li>Uw persoonlijke gegevens worden beveiligd opgeslagen en alleen gedeeld met handelaren wanneer u een bod accepteert.</li>
              <li>Betaalgegevens worden nooit opgeslagen op onze servers.</li>
              <li>We gebruiken SSL-encryptie voor alle communicatie via de website.</li>
              <li>U heeft altijd het recht om uw gegevens in te zien, te wijzigen of te laten verwijderen.</li>
              <li>We verkopen of verhuren nooit uw persoonlijke gegevens aan derden.</li>
            </ul>
            <p>Voor uitgebreide informatie over hoe wij omgaan met uw gegevens kunt u onze <a href="<?php echo $base_url; ?>privacy.php">privacyverklaring</a> raadplegen. Als u vragen heeft over privacykwesties, kunt u altijd contact opnemen met onze privacyfunctionaris via privacy@metaal-handel.nl.</p>
          </div>
        </div>
        
        <div class="accordion-item">
          <button class="accordion-header">Hoe veilig is het betalingssysteem?</button>
          <div class="accordion-content">
            <p>Metaal-handel.nl faciliteert zelf geen online betalingen tussen particulieren en handelaren - de betaling vindt direct plaats tussen u en de handelaar bij het ophalen van de materialen. Dit betekent:</p>
            <ul>
              <li>Geen online transacties via ons platform, dus geen risico op digitale fraude.</li>
              <li>Geen opslag van betaalgegevens in ons systeem.</li>
              <li>Transparantie doordat u de betaling direct ontvangt en kunt controleren.</li>
            </ul>
            <p>Voor handelaren gebruiken we voor de maandelijkse facturatie een beveiligde betaalomgeving die voldoet aan alle moderne veiligheidsnormen en PCI DSS-compliant is. Alle transacties worden versleuteld en beveiligd verwerkt.</p>
          </div>
        </div>
        
        <div class="accordion-item">
          <button class="accordion-header">Hoe kan ik mijn account en wachtwoord beheren?</button>
          <div class="accordion-content">
            <p>U kunt uw accountgegevens eenvoudig beheren via het dashboard na inloggen:</p>
            <ul>
              <li><strong>Persoonlijke gegevens wijzigen:</strong> Ga naar 'Mijn Profiel' om contactgegevens, adres of andere persoonlijke informatie aan te passen.</li>
              <li><strong>Wachtwoord wijzigen:</strong> Klik op 'Instellingen' > 'Beveiliging' om uw wachtwoord te veranderen.</li>
              <li><strong>Notificatie-instellingen:</strong> Bepaal zelf welke e-mails en meldingen u wilt ontvangen onder 'Instellingen' > 'Notificaties'.</li>
              <li><strong>Wachtwoord vergeten:</strong> Klik op de inlogpagina op 'Wachtwoord vergeten' om een herstel-link te ontvangen.</li>
              <li><strong>Account verwijderen:</strong> Ga naar 'Instellingen' > 'Account' en kies voor 'Account verwijderen'. Let op: dit kan niet worden teruggedraaid en alle gegevens worden permanent gewist.</li>
            </ul>
            <p>Voor uw veiligheid adviseren we om een sterk wachtwoord te kiezen (minimaal 8 tekens met cijfers, hoofdletters en speciale tekens) en dit regelmatig te wijzigen.</p>
          </div>
        </div>
        
        <div class="accordion-item">
          <button class="accordion-header">Werkt het platform ook op oudere browsers?</button>
          <div class="accordion-content">
            <p>Metaal-handel.nl is geoptimaliseerd voor moderne browsers, maar werkt ook op de meeste oudere versies. Voor de beste ervaring raden we aan een van de volgende browsers te gebruiken:</p>
            <ul>
              <li>Google Chrome (versie 60 of hoger)</li>
              <li>Mozilla Firefox (versie 55 of hoger)</li>
              <li>Apple Safari (versie 10 of hoger)</li>
              <li>Microsoft Edge (alle versies)</li>
              <li>Internet Explorer 11 (beperkte functionaliteit)</li>
            </ul>
            <p>Als u een oudere browser gebruikt, kan het zijn dat sommige visuele elementen of functionaliteiten niet optimaal werken. Voor Internet Explorer-gebruikers raden we aan om over te stappen naar Microsoft Edge of een andere moderne browser voor de beste ervaring.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="contact-section">
    <div class="container">
      <div class="contact-box">
        <h2>Staat uw vraag er niet bij?</h2>
        <p>Ons supportteam staat klaar om al uw vragen te beantwoorden. U kunt ons bereiken via:</p>
        <div class="contact-options">
          <div class="contact-option">
            <i class="fas fa-envelope"></i>
            <h3>E-mail</h3>
            <p>support@metaal-handel.nl</p>
            <p>Reactie binnen 24 uur</p>
          </div>
          <div class="contact-option">
            <i class="fas fa-phone"></i>
            <h3>Telefoon</h3>
            <p>020 - 123 4567</p>
            <p>Op werkdagen van 9:00 tot 17:00</p>
          </div>
          <div class="contact-option">
            <i class="fas fa-comment-dots"></i>
            <h3>Live Chat</h3>
            <p>Direct contact via onze website</p>
            <p>Beschikbaar op werkdagen</p>
          </div>
        </div>
        <a href="<?php echo $base_url; ?>contact.php" class="btn btn-primary">Contact opnemen</a>
      </div>
    </div>
  </section>
</main>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Accordion functionaliteit
    const accordionHeaders = document.querySelectorAll('.accordion-header');
    
    accordionHeaders.forEach(header => {
      header.addEventListener('click', function() {
        this.classList.toggle('active');
        const content = this.nextElementSibling;
        
        if (content.style.maxHeight) {
          content.style.maxHeight = null;
        } else {
          content.style.maxHeight = content.scrollHeight + "px";
        }
      });
    });
    
    // Navigatie tussen categorieën
    const categoryLinks = document.querySelectorAll('.category-link');
    
    categoryLinks.forEach(link => {
      link.addEventListener('click', function(e) {
        e.preventDefault();
        
        // Verwijder 'active' class van alle links
        categoryLinks.forEach(cat => cat.classList.remove('active'));
        
        // Voeg 'active' toe aan de geklikte link
        this.classList.add('active');
        
        // Scroll naar de juiste sectie
        const targetId = this.getAttribute('href');
        const targetSection = document.querySelector(targetId);
        
        window.scrollTo({
          top: targetSection.offsetTop - 100,
          behavior: 'smooth'
        });
      });
    });
    
    // Bekijk welke sectie in beeld is om de juiste navigatielink te highlighten
    window.addEventListener('scroll', function() {
      const sections = document.querySelectorAll('.faq-section');
      const scrollPosition = window.scrollY + 150;
      
      sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.offsetHeight;
        
        if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
          const id = section.getAttribute('id');
          categoryLinks.forEach(cat => {
            cat.classList.remove('active');
            if (cat.getAttribute('href') === '#' + id) {
              cat.classList.add('active');
            }
          });
        }
      });
    });
  });
</script>

<style>
  /* Styling voor de FAQ pagina */
  .faq-hero {
    background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.9)), url('<?php echo $base_url; ?>images/faq-hero-bg.jpg');
    background-size: cover;
    background-position: center;
    padding: 80px 0;
  }
  
  .faq-navigation-section {
    background-color: #000;
    position: sticky;
    top: 0;
    z-index: 100;
    padding: 15px 0;
    border-bottom: 1px solid #333;
  }
  
  .category-nav {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 15px;
  }
  
  .category-link {
    color: #ccc;
    text-decoration: none;
    padding: 10px 20px;
    border-radius: 30px;
    transition: all 0.3s ease;
    font-weight: 500;
  }
  
  .category-link:hover {
    color: #fff;
    background-color: rgba(255, 140, 0, 0.2);
  }
  
  .category-link.active {
    background-color: #ff8c00;
    color: #000;
  }
  
  .faq-section {
    padding: 60px 0;
    border-bottom: 1px solid #222;
  }
  
  .faq-section:nth-child(odd) {
    background-color: #0a0a0a;
  }
  
  .faq-section:nth-child(even) {
    background-color: #111;
  }
  
  .section-title {
    text-align: center;
    color: #fff;
    font-size: 2rem;
    margin-bottom: 40px;
  }
  
  .accordion {
    max-width: 900px;
    margin: 0 auto;
  }
  
  .accordion-item {
    margin-bottom: 15px;
    border-radius: 8px;
    overflow: hidden;
    border: 1px solid #333;
  }
  
  .accordion-header {
    width: 100%;
    background-color: #1a1a1a;
    padding: 20px;
    text-align: left;
    color: #fff;
    font-size: 1.1rem;
    border: none;
    cursor: pointer;
    position: relative;
    transition: background-color 0.3s ease;
  }
  
  .accordion-header:after {
    content: '\f078';
    font-family: 'Font Awesome 6 Free';
    font-weight: 900;
    position: absolute;
    right: 20px;
    transition: transform 0.3s ease;
  }
  
  .accordion-header.active {
    background-color: #ff8c00;
    color: #000;
  }
  
  .accordion-header.active:after {
    transform: rotate(180deg);
  }
  
  .accordion-content {
    padding: 0;
    background-color: #111;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease;
  }
  
  .accordion-content p {
    padding: 20px;
    padding-bottom: 10px;
    color: #ccc;
    margin: 0;
  }
  
  .accordion-content ul,
  .accordion-content ol {
    padding: 0 20px 20px 40px;
    margin: 0;
    color: #ccc;
  }
  
  .accordion-content li {
    margin-bottom: 10px;
  }
  
  .accordion-content a {
    color: #ff8c00;
    text-decoration: none;
  }
  
  .accordion-content a:hover {
    text-decoration: underline;
  }
  
  .contact-section {
    background-color: #0a0a0a;
    padding: 60px 0;
  }
  
  .contact-box {
    max-width: 800px;
    margin: 0 auto;
    background-color: #111;
    border-radius: 10px;
    padding: 40px;
    text-align: center;
    border: 1px solid #333;
  }
  
  .contact-box h2 {
    color: #fff;
    margin-bottom: 20px;
  }
  
  .contact-box p {
    color: #ccc;
    margin-bottom: 30px;
  }
  
  .contact-options {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    gap: 20px;
    margin-bottom: 30px;
  }
  
  .contact-option {
    flex: 1 1 200px;
    padding: 20px;
    background-color: #1a1a1a;
    border-radius: 8px;
    border: 1px solid #333;
  }
  
  .contact-option i {
    font-size: 2rem;
    color: #ff8c00;
    margin-bottom: 15px;
  }
  
  .contact-option h3 {
    color: #fff;
    margin-bottom: 10px;
  }
  
  .contact-option p {
    color: #ccc;
    margin-bottom: 5px;
  }
  
  .btn {
    padding: 12px 25px;
    border-radius: 6px;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    font-weight: 600;
    transition: background-color 0.3s ease;
  }
  
  .btn-primary {
    background-color: #ff8c00;
    color: #000;
  }
  
  .btn-primary:hover {
    background-color: #e67e00;
  }
  
  /* Responsive aanpassingen */
  @media (max-width: 768px) {
    .category-nav {
      overflow-x: auto;
      justify-content: flex-start;
      padding-bottom: 5px;
    }
    
    .category-link {
      white-space: nowrap;
    }
    
    .contact-options {
      flex-direction: column;
    }
  }
</style>

<?php
// Footer includen
include($base_path . '/footer.php');
?>
