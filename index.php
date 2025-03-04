cat > public_html/index.php << 'EOF'
<?php
// Pad naar private directory (één niveau omhoog vanaf publik_html)
define('PRIVATE_PATH', dirname(__DIR__) . '/private');
define('CONFIG_PATH', PRIVATE_PATH . '/config');
define('INCLUDES_PATH', PRIVATE_PATH . '/includes');
define('CLASSES_PATH', PRIVATE_PATH . '/classes');
define('TEMPLATES_PATH', PRIVATE_PATH . '/templates');
define('LANGUAGES_PATH', PRIVATE_PATH . '/languages');

// Laad configuratie
require_once CONFIG_PATH . '/db_config.php';

// Laad algemene functies
require_once INCLUDES_PATH . '/functions.php';
$page_title = "Het platform voor het ophalen van oud ijzer en metalen";
include('header.php');
?>
<!DOCTYPE html>
<html>
<head>
<section class="hero">
  <div class="container">
    <div class="hero-content">
      <h1 class="hero-title">Verdien geld met uw oud ijzer en metalen</h1>
      <p class="hero-subtitle">Het platform dat particulieren verbindt met de beste metaalhandelaren in Nederland</p>
      
      <div class="hero-buttons">
        <a href="particulieren.php" class="btn btn-lg btn-secondary">
          <i class="fas fa-user"></i> Ik heb oud ijzer
        </a>
        <a href="handelaren.php" class="btn btn-lg btn-outline">
          <i class="fas fa-truck"></i> Ik ben een handelaar
        </a>
      </div>
    </div>
  </div>
</section>

<section class="section section-light">
  <div class="container">
    <div class="section-title">
      <h2>Hoe Werkt Het?</h2>
      <p>In 3 eenvoudige stappen uw oud ijzer en metalen omzetten in contant geld</p>
    </div>
    
    <div class="features-grid">
      <div class="feature-box">
        <div class="feature-icon">
          <i class="fas fa-clipboard-list"></i>
        </div>
        <h3 class="feature-title">1. Plaats een opdracht</h3>
        <p class="feature-description">
          Beschrijf wat u heeft aan oud ijzer, metalen of CV ketels. Voeg eventueel foto's toe en vermeld uw locatie.
        </p>
      </div>
      
      <div class="feature-box">
        <div class="feature-icon">
          <i class="fas fa-user-check"></i>
        </div>
        <h3 class="feature-title">2. Handelaren reageren</h3>
        <p class="feature-description">
          Lokale handelaren zien uw opdracht en kunnen deze overnemen. Wij zorgen voor betrouwbare handelaren.
        </p>
      </div>
      
      <div class="feature-box">
        <div class="feature-icon">
          <i class="fas fa-coins"></i>
        </div>
        <h3 class="feature-title">3. Ophalen en betaling</h3>
        <p class="feature-description">
          De geselecteerde handelaar komt langs op het afgesproken tijdstip en betaalt direct contant voor uw materialen.
        </p>
      </div>
    </div>
    
    <div class="text-center mt-40">
      <a href="opdracht-plaatsen.php" class="btn btn-lg">Nu een opdracht plaatsen</a>
    </div>
  </div>
</section>

<section class="section section-dark">
  <div class="container">
    <div class="section-title">
      <h2>Waarom Metaal-handel.nl?</h2>
      <p>De voordelen voor particulieren en handelaren</p>
    </div>
    
    <div class="features-grid">
      <div class="feature-box">
        <div class="feature-icon">
          <i class="fas fa-euro-sign"></i>
        </div>
        <h3 class="feature-title">Hoogste prijzen</h3>
        <p class="feature-description">
          Door concurrentie tussen handelaren krijgt u altijd de beste prijzen voor uw metalen.
        </p>
      </div>
      
      <div class="feature-box">
        <div class="feature-icon">
          <i class="fas fa-shield-alt"></i>
        </div>
        <h3 class="feature-title">Betrouwbare handelaren</h3>
        <p class="feature-description">
          Wij werken alleen met geverifieerde en betrouwbare handelaren met goede reviews.
        </p>
      </div>
      
      <div class="feature-box">
        <div class="feature-icon">
          <i class="fas fa-leaf"></i>
        </div>
        <h3 class="feature-title">Duurzame recycling</h3>
        <p class="feature-description">
          Uw materialen worden op een milieuvriendelijke manier gerecycled en hergebruikt.
        </p>
      </div>
      
      <div class="feature-box">
        <div class="feature-icon">
          <i class="fas fa-map-marker-alt"></i>
        </div>
        <h3 class="feature-title">Lokale handelaren</h3>
        <p class="feature-description">
          Handelaren uit uw regio kunnen snel reageren en langskomen voor ophaling.
        </p>
      </div>
      
      <div class="feature-box">
        <div class="feature-icon">
          <i class="fas fa-hand-holding-usd"></i>
        </div>
        <h3 class="feature-title">Direct contante betaling</h3>
        <p class="feature-description">
          Ontvang meteen uw geld bij ophaling van de materialen, zonder wachttijden.
        </p>
      </div>
      
      <div class="feature-box">
        <div class="feature-icon">
          <i class="fas fa-lightbulb"></i>
        </div>
        <h3 class="feature-title">Gratis en simpel</h3>
        <p class="feature-description">
          Het plaatsen van een opdracht is volledig gratis en eenvoudig voor iedereen.
        </p>
      </div>
    </div>
  </div>
</section>

<section class="section section-colored">
  <div class="container">
    <div class="section-title">
      <h2>Actuele Dagprijzen</h2>
      <p>Bekijk de huidige marktprijzen voor diverse metalen</p>
    </div>
    
    <div style="overflow-x: auto;">
      <table class="price-table">
        <thead>
          <tr>
            <th>Metaal</th>
            <th>Prijs per kg</th>
            <th>Trend</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Oud IJzer</td>
            <td>€0,20 - €0,30</td>
            <td><i class="fas fa-arrow-up" style="color: #27ae60;"></i> Stijgend</td>
          </tr>
          <tr>
            <td>Koper</td>
            <td>€5,50 - €7,00</td>
            <td><i class="fas fa-arrow-up" style="color: #27ae60;"></i> Stijgend</td>
          </tr>
          <tr>
            <td>Aluminium</td>
            <td>€0,80 - €1,80</td>
            <td><i class="fas fa-arrow-down" style="color: #e74c3c;"></i> Dalend</td>
          </tr>
          <tr>
            <td>RVS</td>
            <td>€1,20 - €1,80</td>
            <td><i class="fas fa-arrows-alt-h" style="color: #f39c12;"></i> Stabiel</td>
          </tr>
          <tr>
            <td>Messing</td>
            <td>€3,80 - €4,80</td>
            <td><i class="fas fa-arrow-up" style="color: #27ae60;"></i> Stijgend</td>
          </tr>
        </tbody>
      </table>
    </div>
    
    <div class="text-center mt-20">
      <p style="color: rgba(255,255,255,0.8); margin-bottom: 20px;">
        * Prijzen zijn indicatief en kunnen per handelaar verschillen
      </p>
      <a href="prijzen.php" class="btn btn-lg btn-outline">
        Bekijk alle dagprijzen
      </a>
    </div>
  </div>
</section>

<section class="section section-light">
  <div class="container">
    <div class="section-title">
      <h2>Wat Onze Gebruikers Zeggen</h2>
      <p>Ervaringen van particulieren en handelaren met ons platform</p>
    </div>
    
    <div class="features-grid" style="grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));">
      <div class="feature-box" style="text-align: left;">
        <div style="display: flex; align-items: center; margin-bottom: 20px;">
          <img src="img/testimonial-1.jpg" alt="Jan P." style="width: 60px; height: 60px; border-radius: 50%; margin-right: 15px;">
          <div>
            <h4 style="margin-bottom: 5px;">Jan P.</h4>
            <p style="color: var(--gray); font-size: 0.9rem;">Particulier uit Amsterdam</p>
            <div style="color: #f39c12;">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
          </div>
        </div>
        <p style="font-style: italic; color: var(--gray);">
          "Binnen een uur na het plaatsen van mijn opdracht voor een oude CV ketel had ik al drie reacties. De handelaar die langskwam betaalde €50, terwijl ik eerder bij de stort had moeten betalen om deze in te leveren!"
        </p>
      </div>
      
      <div class="feature-box" style="text-align: left;">
        <div style="display: flex; align-items: center; margin-bottom: 20px;">
          <img src="img/testimonial-2.jpg" alt="Linda K." style="width: 60px; height: 60px; border-radius: 50%; margin-right: 15px;">
          <div>
            <h4 style="margin-bottom: 5px;">Linda K.</h4>
            <p style="color: var(--gray); font-size: 0.9rem;">Particulier uit Utrecht</p>
            <div style="color: #f39c12;">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
          </div>
        </div>
        <p style="font-style: italic; color: var(--gray);">
          "Na een verbouwing had ik veel oud ijzer en koperen leidingen over. Via Metaal-handel.nl heb ik een goede prijs gekregen en alles werd netjes opgehaald. Veel makkelijker dan zelf wegbrengen!"
        </p>
      </div>
      
      <div class="feature-box" style="text-align: left;">
        <div style="display: flex; align-items: center; margin-bottom: 20px;">
          <img src="img/testimonial-3.jpg" alt="Peter V." style="width: 60px; height: 60px; border-radius: 50%; margin-right: 15px;">
          <div>
            <h4 style="margin-bottom: 5px;">Peter V.</h4>
            <p style="color: var(--gray); font-size: 0.9rem;">Handelaar uit Rotterdam</p>
            <div style="color: #f39c12;">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
          </div>
        </div>
        <p style="font-style: italic; color: var(--gray);">
          "Als handelaar vind ik via dit platform betrouwbare leads. De commissie is fair en ik kan zelf bepalen welke opdrachten ik wil oppakken in mijn werkgebied. Een perfect systeem!"
        </p>
      </div>
    </div>
  </div>
</section>

<section class="section section-dark" style="padding: 80px 0;">
  <div class="container">
    <div style="text-align: center; max-width: 800px; margin: 0 auto;">
      <h2 style="font-size: 2.5rem; margin-bottom: 20px; color: var(--primary);">Klaar om te starten?</h2>
      <p style="font-size: 1.2rem; margin-bottom: 30px; color: var(--gray);">
        Of u nu een particulier bent met oud ijzer of een handelaar die opdrachten zoekt, wij helpen u verder.
      </p>
      <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
        <a href="opdracht-plaatsen.php" class="btn btn-lg">Opdracht plaatsen</a>
        <a href="handelaren.php" class="btn btn-lg btn-primary">Aanmelden als handelaar</a>
      </div>
    </div>
  </div>
</section>

<?php include('footer.php'); ?>
<script src="/assets/js/script.js"></script>
</body>
</html>
EOF