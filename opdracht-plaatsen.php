<?php
$page_title = "Opdracht plaatsen - Laat uw oud ijzer ophalen";
include('header.php');
?>

<section class="hero" style="min-height: 40vh; background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('img/hero-opdracht.jpg') center/cover no-repeat;">
  <div class="container">
    <div class="hero-content">
      <h1 class="hero-title">Opdracht plaatsen</h1>
      <p class="hero-subtitle">Laat uw oud ijzer en metalen gratis ophalen en krijg er nog geld voor ook</p>
    </div>
  </div>
</section>

<section class="section section-light">
  <div class="container">
    <div class="form-container">
      <div style="text-align: center; margin-bottom: 30px;">
        <h2 style="color: var(--primary); margin-bottom: 15px;">Plaats uw opdracht in enkele minuten</h2>
        <p style="color: var(--gray);">
          Vul onderstaand formulier in en laat handelaren op uw opdracht reageren. Het plaatsen van een opdracht is volledig gratis.
        </p>
      </div>
      
      <form id="opdrachtForm" action="process-opdracht.php" method="post" enctype="multipart/form-data">
        <div style="background-color: var(--primary); color: var(--white); padding: 15px; margin-bottom: 30px; border-radius: var(--border-radius);">
          <h3 style="margin-bottom: 10px;">Persoonlijke gegevens</h3>
          <p>Deze gegevens worden alleen gedeeld met handelaren die uw opdracht accepteren.</p>
        </div>
        
        <div class="form-row">
          <div class="form-group">
            <label for="naam">Naam *</label>
            <input type="text" id="naam" name="naam" class="form-control" required>
          </div>
          
          <div class="form-group">
            <label for="email">E-mailadres *</label>
            <input type="email" id="email" name="email" class="form-control" required>
          </div>
        </div>
        
        <div class="form-row">
          <div class="form-group">
            <label for="telefoon">Telefoonnummer *</label>
            <input type="tel" id="telefoon" name="telefoon" class="form-control" required>
          </div>
          
          <div class="form-group">
            <label for="postcode">Postcode *</label>
            <input type="text" id="postcode" name="postcode" class="form-control" required>
          </div>
        </div>
        
        <div class="form-group">
          <label for="adres">Adres *</label>
          <input type="text" id="adres" name="adres" class="form-control" required>
        </div>
        
        <div class="form-row">
          <div class="form-group">
            <label for="plaats">Plaats *</label>
            <input type="text" id="plaats" name="plaats" class="form-control" required>
          </div>
          
          <div class="form-group">
            <label for="provincie">Provincie *</label>
            <select id="provincie" name="provincie" class="form-control" required>
              <option value="">Selecteer provincie</option>
              <option value="Drenthe">Drenthe</option>
              <option value="Flevoland">Flevoland</option>
              <option value="Friesland">Friesland</option>
              <option value="Gelderland">Gelderland</option>
              <option value="Groningen">Groningen</option>
              <option value="Limburg">Limburg</option>
              <option value="Noord-Brabant">Noord-Brabant</option>
              <option value="Noord-Holland">Noord-Holland</option>
              <option value="Overijssel">Overijssel</option>
              <option value="Utrecht">Utrecht</option>
              <option value="Zeeland">Zeeland</option>
              <option value="Zuid-Holland">Zuid-Holland</option>
            </select>
          </div>
        </div>
        
        <div style="background-color: var(--primary); color: var(--white); padding: 15px; margin: 30px 0; border-radius: var(--border-radius);">
          <h3 style="margin-bottom: 10px;">Opdracht details</h3>
          <p>Wees zo specifiek mogelijk voor de beste respons van handelaren.</p>
        </div>
        
        <div class="form-group">
          <label for="titel">Titel van uw opdracht *</label>
          <input type="text" id="titel" name="titel" class="form-control" placeholder="Bijv. 'Oud ijzer en koperen leidingen na verbouwing'" required>
        </div>
        
        <div class="form-group">
          <label>Welke materialen wilt u laten ophalen? *</label>
          <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(180px, 1fr)); gap: 10px; margin-top: 10px;">
            <label style="display: flex; align-items: center; gap: 10px;">
              <input type="checkbox" name="materialen[]" value="oud-ijzer"> Oud ijzer
            </label>
            <label style="display: flex; align-items: center; gap: 10px;">
              <input type="checkbox" name="materialen[]" value="koper"> Koper
            </label>
            <label style="display: flex; align-items: center; gap: 10px;">
              <input type="checkbox" name="materialen[]" value="aluminium"> Aluminium
            </label>
            <label style="display: flex; align-items: center; gap: 10px;">
              <input type="checkbox" name="materialen[]" value="rvs"> RVS
            </label>
            <label style="display: flex; align-items: center; gap: 10px;">
              <input type="checkbox" name="materialen[]" value="messing"> Messing
            </label>
            <label style="display: flex; align-items: center; gap: 10px;">
              <input type="checkbox" name="materialen[]" value="zink"> Zink
            </label>
            <label style="display: flex; align-items: center; gap: 10px;">
              <input type="checkbox" name="materialen[]" value="lood"> Lood
            </label>
            <label style="display: flex; align-items: center; gap: 10px;">
              <input type="checkbox" name="materialen[]" value="cv-ketel"> CV ketel
            </label>
            <label style="display: flex; align-items: center; gap: 10px;">
              <input type="checkbox" name="materialen[]" value="witgoed"> Witgoed
            </label>
            <label style="display: flex; align-items: center; gap: 10px;">
              <input type="checkbox" name="materialen[]" value="kabels"> Kabels
            </label>
            <label style="display: flex; align-items: center; gap: 10px;">
              <input type="checkbox" name="materialen[]" value="accu"> Accu's
            </label>
            <label style="display: flex; align-items: center; gap: 10px;">
              <input type="checkbox" name="materialen[]" value="anders"> Anders
            </label>
          </div>
        </div>
        
        <div class="form-group">
          <label for="beschrijving">Beschrijving van de materialen *</label>
          <textarea id="beschrijving" name="beschrijving" rows="5" class="form-control" placeholder="Geef een gedetailleerde beschrijving van wat u wilt laten ophalen. Vermeld de geschatte hoeveelheid." required></textarea>
        </div>
        
        <div class="form-row">
          <div class="form-group">
            <label for="geschatte_gewicht">Geschat gewicht (kg)</label>
            <input type="number" id="geschatte_gewicht" name="geschatte_gewicht" min="0" step="1" class="form-control">
          </div>
          
          <div class="form-group">
            <label for="foto">Foto toevoegen (optioneel)</label>
            <input type="file" id="foto" name="foto[]" class="form-control" accept="image/*" multiple>
            <small style="color: var(--gray);">U kunt meerdere foto's uploaden. Max. 5MB per foto.</small>
          </div>
        </div>
        
        <div class="form-row">
          <div class="form-group">
            <label for="ophaalmoment">Gewenst ophaalmoment *</label>
            <select id="ophaalmoment" name="ophaalmoment" class="form-control" required>
              <option value="">Selecteer ophaalmoment</option>
              <option value="zo-snel-mogelijk">Zo snel mogelijk</option>
              <option value="deze-week">Deze week</option>
              <option value="volgende-week">Volgende week</option>
              <option value="binnen-twee-weken">Binnen twee weken</option>
              <option value="binnen-een-maand">Binnen een maand</option>
              <option value="anders">Anders (specificeer in beschrijving)</option>
            </select>
          </div>
          
          <div class="form-group">
            <label for="bereikbaarheid">Bereikbaarheid materialen *</label>
            <select id="bereikbaarheid" name="bereikbaarheid" class="form-control" required>
              <option value="">Selecteer bereikbaarheid</option>
              <option value="direct-toegankelijk">Direct toegankelijk</option>
              <option value="trap">Via trap bereikbaar</option>
              <option value="lift">Via lift bereikbaar</option>
              <option value="moeilijk-bereikbaar">Moeilijk bereikbaar</option>
              <option value="hulp-nodig">Hulp nodig bij dragen</option>
              <option value="demontage-nodig">Demontage nodig</option>
            </select>
          </div>
        </div>
        
        <div class="form-group" style="margin: 30px 0;">
          <label style="display: flex; align-items: flex-start; gap: 10px; cursor: pointer;">
            <input type="checkbox" name="voorwaarden" required>
            <span style="font-size: 0.9rem; color: var(--gray);">
              Ik ga akkoord met de <a href="voorwaarden.php" target="_blank" style="color: var(--primary); text-decoration: none;">algemene voorwaarden</a> en <a href="privacy.php" target="_blank" style="color: var(--primary); text-decoration: none;">privacy policy</a> van Metaal-handel.nl *
            </span>
          </label>
        </div>
        
        <div style="text-align: center;">
          <button type="submit" class="btn btn-lg" style="min-width: 250px;">
            <i class="fas fa-paper-plane"></i> Opdracht plaatsen
          </button>
        </div>
      </form>
    </div>
  </div>
</section>

<section class="section section-dark" style="padding: 60px 0;">
  <div class="container">
    <div class="section-title">
      <h2>Wat gebeurt er na het plaatsen van uw opdracht?</h2>
      <p>Het proces na het indienen van uw aanvraag</p>
    </div>
    
    <div style="display: flex; justify-content: space-between; flex-wrap: wrap; margin-top: 40px; gap: 30px;">
      <div style="flex: 1; min-width: 280px; background-color: var(--white); padding: 30px; border-radius: var(--border-radius); box-shadow: var(--box-shadow);">
        <div style="display: flex; align-items: center; margin-bottom: 20px;">
          <div style="width: 50px; height: 50px; background-color: var(--primary); color: var(--white); display: flex; align-items: center; justify-content: center; border-radius: 50%; margin-right: 15px; font-weight: bold;">1</div>
          <h3>Verificatie</h3>
        </div>
        <p style="color: var(--gray);">
          Wij controleren uw aanvraag op volledigheid en helderheid. Bij vragen nemen we contact met u op voor aanvullende informatie.
        </p>
      </div>
      
      <div style="flex: 1; min-width: 280px; background-color: var(--white); padding: 30px; border-radius: var(--border-radius); box-shadow: var(--box-shadow);">
        <div style="display: flex; align-items: center; margin-bottom: 20px;">
          <div style="width: 50px; height: 50px; background-color: var(--primary); color: var(--white); display: flex; align-items: center; justify-content: center; border-radius: 50%; margin-right: 15px; font-weight: bold;">1</div>
          <h3>Verificatie</h3>
        </div>
        <p style="color: var(--gray);">
          Wij controleren uw aanvraag op volledigheid en helderheid. Bij vragen nemen we contact met u op voor aanvullende informatie.
        </p>
      </div>
      
      <div style="flex: 1; min-width: 280px; background-color: var(--white); padding: 30px; border-radius: var(--border-radius); box-shadow: var(--box-shadow);">
        <div style="display: flex; align-items: center; margin-bottom: 20px;">
          <div style="width: 50px; height: 50px; background-color: var(--primary); color: var(--white); display: flex; align-items: center; justify-content: center; border-radius: 50%; margin-right: 15px; font-weight: bold;">2</div>
          <h3>Publicatie</h3>
        </div>
        <p style="color: var(--gray);">
          Uw opdracht wordt gepubliceerd en is zichtbaar voor geregistreerde handelaren in uw regio. U ontvangt een bevestiging per e-mail.
        </p>
      </div>
      
      <div style="flex: 1; min-width: 280px; background-color: var(--white); padding: 30px; border-radius: var(--border-radius); box-shadow: var(--box-shadow);">
        <div style="display: flex; align-items: center; margin-bottom: 20px;">
          <div style="width: 50px; height: 50px; background-color: var(--primary); color: var(--white); display: flex; align-items: center; justify-content: center; border-radius: 50%; margin-right: 15px; font-weight: bold;">3</div>
          <h3>Matching</h3>
        </div>
        <p style="color: var(--gray);">
          Handelaren bekijken uw opdracht en kunnen deze claimen. De eerste handelaar die reageert krijgt toegang tot uw contactgegevens.
        </p>
      </div>
      
      <div style="flex: 1; min-width: 280px; background-color: var(--white); padding: 30px; border-radius: var(--border-radius); box-shadow: var(--box-shadow);">
        <div style="display: flex; align-items: center; margin-bottom: 20px;">
          <div style="width: 50px; height: 50px; background-color: var(--primary); color: var(--white); display: flex; align-items: center; justify-content: center; border-radius: 50%; margin-right: 15px; font-weight: bold;">4</div>
          <h3>Contact</h3>
        </div>
        <p style="color: var(--gray);">
          De handelaar neemt contact met u op om details te bespreken en een ophaalmoment in te plannen. U kunt direct uw vragen stellen.
        </p>
      </div>
    </div>
    
    <div style="text-align: center; margin-top: 40px;">
      <p style="color: var(--gray); max-width: 600px; margin: 0 auto 20px;">
        Heeft u nog vragen over het proces of wilt u liever telefonisch een opdracht plaatsen?
      </p>
      <a href="contact.php" class="btn">Neem contact met ons op</a>
    </div>
  </div>
</section>

<?php include('footer.php'); ?>
