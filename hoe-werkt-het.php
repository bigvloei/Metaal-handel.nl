<?php
// Basisinstellingen
$page_title = "Hoe werkt het? | Voor particulieren";
$base_path = $_SERVER['DOCUMENT_ROOT']; 
$base_url = "/metaalhandel/"; // Aangepast voor submap

// Header includen
include($base_path . '/metaalhandel/header.php');
?>

<main class="main-content">
  <section class="hero-section how-it-works">
    <div class="container">
      <h1>Hoe werkt het?</h1>
      <p class="lead">Ontdek hoe eenvoudig het is om uw oud ijzer en metalen om te zetten in geld</p>
    </div>
  </section>

  <section class="steps-section">
    <div class="container">
      <div class="steps-container">
        <div class="step">
          <div class="step-icon">
            <i class="fas fa-clipboard"></i>
            <div class="step-number">1</div>
          </div>
          <div class="step-content">
            <h2>Plaats een gratis opdracht</h2>
            <p>Beschrijf welke metalen u wilt laten ophalen. Voeg foto's toe voor een betere inschatting. Vermeld de locatie en het gewenste tijdstip voor ophaling.</p>
            <div class="step-details">
              <ul>
                <li>Geef aan wat voor soort metaal u heeft</li>
                <li>Upload duidelijke foto's</li>
                <li>Deel uw locatiegegevens</li>
                <li>Bepaal zelf wanneer het opgehaald mag worden</li>
              </ul>
            </div>
          </div>
        </div>
        
        <div class="step">
          <div class="step-icon">
            <i class="fas fa-search-dollar"></i>
            <div class="step-number">2</div>
          </div>
          <div class="step-content">
            <h2>Ontvang biedingen van lokale handelaren</h2>
            <p>Gecertificeerde metaalhandelaren uit uw regio bekijken uw opdracht en doen u een bod. U kunt deze biedingen rustig vergelijken en de beste keuze maken.</p>
            <div class="step-details">
              <ul>
                <li>Meerdere biedingen zorgen voor de beste prijzen</li>
                <li>Bekijk beoordelingen van eerdere klanten</li>
                <li>Vergelijk verschillende aanbiedingen</li>
                <li>Kies zelf de handelaar die u het meeste vertrouwt</li>
              </ul>
            </div>
          </div>
        </div>
        
        <div class="step">
          <div class="step-icon">
            <i class="fas fa-handshake"></i>
            <div class="step-number">3</div>
          </div>
          <div class="step-content">
            <h2>Accepteer een bod en maak een afspraak</h2>
            <p>Wanneer u een geschikt bod heeft gevonden, accepteert u deze met één klik. De handelaar neemt contact met u op om de details van de ophaling te bespreken.</p>
            <div class="step-details">
              <ul>
                <li>Veilig communicatieplatform</li>
                <li>Plan samen een geschikt ophaalmoment</li>
                <li>Ontvang bevestiging van de afspraak</li>
                <li>Bereid de materialen voor op ophaling</li>
              </ul>
            </div>
          </div>
        </div>
        
        <div class="step">
          <div class="step-icon">
            <i class="fas fa-truck"></i>
            <div class="step-number">4</div>
          </div>
          <div class="step-content">
            <h2>De handelaar haalt uw metalen op</h2>
            <p>De handelaar komt op het afgesproken tijdstip langs om de metalen op te halen. U krijgt direct contant betaald of via een andere afgesproken betaalmethode.</p>
            <div class="step-details">
              <ul>
                <li>Geen gedoe met transport</li>
                <li>Direct betaling bij ophaling</li>
                <li>Alle materialen worden netjes afgevoerd</li>
                <li>Geen rommel meer, wel een opgeruimde ruimte</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="benefits-section">
    <div class="container">
      <h2>Voordelen voor particulieren</h2>
      <div class="benefits-grid">
        <div class="benefit-card">
          <div class="benefit-icon">
            <i class="fas fa-euro-sign"></i>
          </div>
          <h3>Beste prijzen</h3>
          <p>Door biedingen van meerdere handelaren krijgt u gegarandeerd de beste prijs voor uw oude metalen.</p>
        </div>
        
        <div class="benefit-card">
          <div class="benefit-icon">
            <i class="fas fa-leaf"></i>
          </div>
          <h3>Milieuvriendelijk</h3>
          <p>Draag bij aan een beter milieu door uw metalen te laten recyclen in plaats van weggooien.</p>
        </div>
        
        <div class="benefit-card">
          <div class="benefit-icon">
            <i class="fas fa-shield-alt"></i>
          </div>
          <h3>Betrouwbaar & Veilig</h3>
          <p>Alle handelaren op ons platform zijn geverifieerd en beoordeeld door andere klanten.</p>
        </div>
        
        <div class="benefit-card">
          <div class="benefit-icon">
            <i class="fas fa-clock"></i>
          </div>
          <h3>Snelle service</h3>
          <p>Binnen 24 uur ontvangt u de eerste biedingen en kan uw metaal vaak al worden opgehaald.</p>
        </div>
      </div>
    </div>
  </section>
  
  <section class="faq-section">
    <div class="container">
      <h2>Veelgestelde vragen</h2>
      
      <div class="accordion">
        <div class="accordion-item">
          <button class="accordion-header">Welke metalen kan ik laten ophalen?</button>
          <div class="accordion-content">
            <p>Alle soorten metalen kunnen worden opgehaald, waaronder oud ijzer, koper, aluminium, RVS, lood, zink, messing en elektronisch afval. Ook complete objecten zoals oude cv-ketels, wasmachines, fietsen of auto-onderdelen worden opgehaald.</p>
          </div>
        </div>
        
        <div class="accordion-item">
          <button class="accordion-header">Is er een minimum hoeveelheid vereist?</button>
          <div class="accordion-content">
            <p>Er is geen vast minimum, maar het is logisch dat grotere hoeveelheden aantrekkelijker zijn voor handelaren. Bij kleinere hoeveelheden kunt u mogelijk iets minder biedingen ontvangen, maar vaak is er alsnog een handelaar geïnteresseerd.</p>
          </div>
        </div>
        
        <div class="accordion-item">
          <button class="accordion-header">Hoe wordt de prijs bepaald?</button>
          <div class="accordion-content">
            <p>De prijs wordt bepaald door meerdere factoren: het soort metaal, het gewicht, de actuele dagprijs, de hoeveelheid en de locatie. Door ons veilingprincipe krijgt u altijd de beste marktprijs doordat handelaren met elkaar concurreren.</p>
          </div>
        </div>
        
        <div class="accordion-item">
          <button class="accordion-header">Hoe weet ik of een handelaar betrouwbaar is?</button>
          <div class="accordion-content">
            <p>Alle handelaren op ons platform zijn geverifieerd en hebben een profiel met beoordelingen van eerdere klanten. U kunt deze beoordelingen bekijken voordat u een bod accepteert.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="cta-section">
    <div class="container">
      <div class="cta-content">
        <h2>Klaar om uw metalen om te zetten in geld?</h2>
        <p>Plaats nu gratis en eenvoudig een opdracht en ontvang binnen 24 uur de eerste biedingen.</p>
        <a href="<?php echo $base_url; ?>opdracht-plaatsen.php" class="btn btn-primary btn-lg">
          <i class="fas fa-plus-circle"></i> Gratis opdracht plaatsen
        </a>
      </div>
    </div>
  </section>
</main>

<script>
  // JavaScript voor de accordion functionaliteit
  document.addEventListener('DOMContentLoaded', function() {
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
  });
</script>

<?php
// Footer includen
include($base_path . '/metaalhandel/footer.php');
?>
