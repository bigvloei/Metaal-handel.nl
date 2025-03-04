<?php
$page_title = "Handelaar worden - Metaal-handel.nl";
include('header.php');
?>

<section class="hero" style="min-height: 40vh; background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('img/hero-handelaar.jpg') center/cover no-repeat;">
  <div class="container">
    <div class="hero-content">
      <h1 class="hero-title">Handelaar worden</h1>
      <p class="hero-subtitle">Meld u aan als handelaar en krijg toegang tot waardevolle leads</p>
    </div>
  </div>
</section>

<section class="section section-light">
  <div class="container">
    <div class="section-title">
      <h2>Registreren als handelaar</h2>
      <p>Vul onderstaand formulier in om u aan te melden als metaalhandelaar op ons platform</p>
    </div>
    
    <div class="form-container">
      <form id="handelaarForm" action="process-handelaar.php" method="post" enctype="multipart/form-data">
        <div style="background-color: var(--primary); color: var(--white); padding: 15px; margin-bottom: 30px; border-radius: var(--border-radius);">
          <h3 style="margin-bottom: 10px;">Bedrijfsgegevens</h3>
          <p>Vul alle velden correct in voor een succesvolle verificatie</p>
        </div>
        
        <div class="form-row">
          <div class="form-group">
            <label for="bedrijfsnaam">Bedrijfsnaam *</label>
            <input type="text" id="bedrijfsnaam" name="bedrijfsnaam" class="form-control" required>
          </div>
          
          <div class="form-group">
            <label for="kvk">KVK nummer *</label>
            <input type="text" id="kvk" name="kvk" class="form-control" required>
          </div>
        </div>
        
        <div class="form-row">
          <div class="form-group">
            <label for="btw">BTW nummer *</label>
            <input type="text" id="btw" name="btw" class="form-control" required>
          </div>
          
          <div class="form-group">
            <label for="website">Website (optioneel)</label>
            <input type="url" id="website" name="website" class="form-control">
          </div>
        </div>
        
        <div class="form-group">
          <label for="bedrijfsadres">Vestigingsadres *</label>
          <input type="text" id="bedrijfsadres" name="bedrijfsadres" class="form-control" required>
        </div>
        
        <div class="form-row">
          <div class="form-group">
            <label for="postcode">Postcode *</label>
            <input type="text" id="postcode" name="postcode" class="form-control" required>
          </div>
          
          <div class="form-group">
            <label for="plaats">Plaats *</label>
            <input type="text" id="plaats" name="plaats" class="form-control" required>
          </div>
        </div>
        
        <div style="background-color: var(--primary); color: var(--white); padding: 15px; margin: 30px 0; border-radius: var(--border-radius);">
          <h3 style="margin-bottom: 10px;">Contactpersoon</h3>
          <p>Gegevens van de hoofdgebruiker van dit account</p>
        </div>
        
        <div class="form-row">
          <div class="form-group">
            <label for="voornaam">Voornaam *</label>
            <input type="text" id="voornaam" name="voornaam" class="form-control" required>
          </div>
          
          <div class="form-group">
            <label for="achternaam">Achternaam *</label>
            <input type="text" id="achternaam" name="achternaam" class="form-control" required>
          </div>
        </div>
        
        <div class="form-row">
          <div class="form-group">
            <label for="functie">Functie *</label>
            <input type="text" id="functie" name="functie" class="form-control" required>
          </div>
          
          <div class="form-group">
            <label for="telefoonnummer">Telefoonnummer *</label>
            <input type="tel" id="telefoonnummer" name="telefoonnummer" class="form-control" required>
          </div>
        </div>
        
        <div class="form-group">
          <label for="email">E-mailadres *</label>
          <input type="email" id="email" name="email" class="form-control" required>
          <small style="color: var(--gray);">Dit e-mailadres wordt gebruikt voor inloggen en communicatie</small>
        </div>
        
        <div class="form-row">
          <div class="form-group">
            <label for="wachtwoord">Wachtwoord *</label>
            <input type="password" id="wachtwoord" name="wachtwoord" class="form-control" required>
          </div>
          
          <div class="form-group">
            <label for="wachtwoord2">Wachtwoord bevestigen *</label>
            <input type="password" id="wachtwoord2" name="wachtwoord2" class="form-control" required>
          </div>
        </div>
        
        <div style="background-color: var(--primary); color: var(--white); padding: 15px; margin: 30px 0; border-radius: var(--border-radius);">
          <h3 style="margin-bottom: 10px;">Werkgebied & Materialen</h3>
          <p>Geef aan in welke regio u werkzaam bent en welke materialen u inkoopt</p>
        </div>
        
        <div class="form-group">
          <label>In welke provincies bent u actief? *</label>
          <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(170px, 1fr)); gap: 10px; margin-top: 10px;">
            <label style="display: flex; align-items: center; gap: 10px;">
              <input type="checkbox" name="provincies[]" value="Drenthe"> Drenthe
            </label>
            <label style="display: flex; align-items: center; gap: 10px;">
              <input type="checkbox" name="provincies[]" value="Flevoland"> Flevoland
            </label>
            <label style="display: flex; align-items: center; gap: 10px;">
              <input type="checkbox" name="provincies[]" value="Friesland"> Friesland
            </label>
            <label style="display: flex; align-items: center; gap: 10px;">
              <input type="checkbox" name="provincies[]" value="Gelderland"> Gelderland
            </label>
            <label style="display: flex; align-items: center; gap: 10px;">
              <input type="checkbox" name="provincies[]" value="Groningen"> Groningen
            </label>
            <label style="display: flex; align-items: center; gap: 10px;">
              <input type="checkbox" name="provincies[]" value="Limburg"> Limburg
            </label>
            <label style="display: flex; align-items: center; gap: 10px;">
              <input type="checkbox" name="provincies[]" value="Noord-Brabant"> Noord-Brabant
            </label>
            <label style="display: flex; align-items: center; gap: 10px;">
              <input type="checkbox" name="provincies[]" value="Noord-Holland"> Noord-Holland
            </label>
            <label style="display: flex; align-items: center; gap: 10px;">
              <input type="checkbox" name="provincies[]" value="Overijssel"> Overijssel
            </label>
            <label style="display: flex; align-items: center; gap: 10px;">
              <input type="checkbox" name="provincies[]" value="Utrecht"> Utrecht
            </label>
            <label style="display: flex; align-items: center; gap: 10px;">
              <input type="checkbox" name="provincies[]" value="Zeeland"> Zeeland
            </label>
            <label style="display: flex; align-items: center; gap: 10px;">
              <input type="checkbox" name="provincies[]" value="Zuid-Holland"> Zuid-Holland
            </label>
          </div>
        </div>
        
        <div class="form-group">
          <label for="straal">Maximale afstand voor ophalen (km) *</label>
          <input type="number" id="straal" name="straal" min="5" max="200" class="form-control" required>
        </div>
        
        <div class="form-group">
          <label>Welke materialen koopt u in? *</label>
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
              <input type="checkbox" name="materialen[]" value="cv-ketel"> CV ketels
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
          </div>
        </div>
        
        <div style="background-color: var(--primary); color: var(--white); padding: 15px; margin: 30px 0; border-radius: var(--border-radius);">
          <h3 style="margin-bottom: 10px;">Verificatie</h3>
          <p>Upload documenten voor verificatie van uw bedrijf</p>
        </div>
        
        <div class="form-group">
          <label for="kvk_doc">KVK uittreksel (PDF) *</label>
          <input type="file" id="kvk_doc" name="kvk_doc" class="form-control" accept=".pdf" required>
          <small style="color: var(--gray);">Upload een recent KVK uittreksel (max 3 maanden oud)</small>
        </div>
        
        <div class="form-group">
          <label for="bedrijfsfoto">Foto van uw bedrijf (optioneel)</label>
          <input type="file" id="bedrijfsfoto" name="bedrijfsfoto" class="form-control" accept="image/*">
          <small style="color: var(--gray);">Een foto van uw bedrijfspand of werkterrein helpt particulieren bij het herkennen</small>
        </div>
        
        <div class="form-group" style="margin: 30px 0;">
          <label style="display: flex; align-items: flex-start; gap: 10px; cursor: pointer;">
            <input type="checkbox" name="voorwaarden" required>
            <span style="font-size: 0.9rem; color: var(--gray);">
              Ik ga akkoord met de <a href="voorwaarden.php" target="_blank" style="color: var(--primary); text-decoration: none;">algemene voorwaarden</a> en <a href="privacy.php" target="_blank" style="color: var(--primary); text-decoration: none;">privacy policy</a> van Metaal-handel.nl *
            </span>
          </label>
        </div>
        
        <div class="form-group" style="margin-bottom: 30px;">
          <label style="display: flex; align-items: flex-start; gap: 10px; cursor: pointer;">
            <input type="checkbox" name="nieuwsbrief">
            <span style="font-size: 0.9rem; color: var(--gray);">
              Ik wil op de hoogte blijven van nieuwe functionaliteiten, updates en nieuws via de nieuwsbrief
            </span>
          </label>
        </div>
        
        <div style="text-align: center;">
          <button type="submit" class="btn btn-lg" style="min-width: 250px;">
            <i class="fas fa-user-plus"></i> Registreren als handelaar
          </button>
        </div>
      </form>
    </div>
  </div>
</section>

<section class="section section-dark">
  <div class="container">
    <div class="section-title">
      <h2>Veelgestelde vragen</h2>
      <p>Antwoorden op de meest gestelde vragen van nieuwe handelaren</p>
    </div>
    
    <div style="max-width: 800px; margin: 0 auto;">
      <div style="margin-bottom: 30px; border: 1px solid #eee; border-radius: var(--border-radius); box-shadow: var(--box-shadow); overflow: hidden;">
        <div style="background-color: var(--primary); padding: 15px 20px; color: var(--white);">
          <h3>Wat zijn de kosten om handelaar te worden?</h3>
        </div>
        <div style="padding: 20px; background-color: var(--white);">
          <p>Het aanmaken van een handelaarsaccount is volledig gratis. U betaalt alleen een commissie van 15% op de waarde van de materialen die u via het platform inkoopt. Er zijn geen maandelijkse abonnementskosten of andere vaste lasten.</p>
        </div>
      </div>
      
      <div style="margin-bottom: 30px; border: 1px solid #eee; border-radius: var(--border-radius); box-shadow: var(--box-shadow); overflow: hidden;">
        <div style="background-color: var(--primary); padding: 15px 20px; color: var(--white);">
          <h3>Hoe lang duurt de verificatie?</h3>
        </div>
        <div style="padding: 20px; background-color: var(--white);">
          <p>Na het indienen van uw aanvraag en alle benodigde documenten, streven we ernaar om binnen 1-2 werkdagen uw account te verifiëren. U ontvangt een e-mail zodra uw account is goedgekeurd en u kunt inloggen.</p>
        </div>
      </div>
      
      <div style="margin-bottom: 30px; border: 1px solid #eee; border-radius: var(--border-radius); box-shadow: var(--box-shadow); overflow: hidden;">
        <div style="background-color: var(--primary); padding: 15px 20px; color: var(--white);">
          <h3>Kan ik kiezen welke opdrachten ik accepteer?</h3>
        </div>
        <div style="padding: 20px; background-color: var(--white);">
          <p>Ja, u heeft volledige vrijheid in het kiezen van opdrachten. In uw dashboard ziet u alle beschikbare opdrachten binnen uw werkgebied, maar u beslist zelf welke u wilt claimen op basis van materiaalsoort, geschatte waarde en locatie.</p>
        </div>
      </div>
      
      <div style="margin-bottom: 30px; border: 1px solid #eee; border-radius: var(--border-radius); box-shadow: var(--box-shadow); overflow: hidden;">
        <div style="background-color: var(--primary); padding: 15px 20px; color: var(--white);">
          <h3>Kan ik kiezen welke opdrachten ik accepteer?</h3>
        </div>
        <div style="padding: 20px; background-color: var(--white);">
          <p>Ja, u heeft volledige vrijheid in het kiezen van opdrachten. In uw dashboard ziet u alle beschikbare opdrachten binnen uw werkgebied, maar u beslist zelf welke u wilt claimen op basis van materiaalsoort, geschatte waarde en locatie.</p>
        </div>
      </div>
      
      <div style="margin-bottom: 30px; border: 1px solid #eee; border-radius: var(--border-radius); box-shadow: var(--box-shadow); overflow: hidden;">
        <div style="background-color: var(--primary); padding: 15px 20px; color: var(--white);">
          <h3>Hoe wordt de commissie berekend en gefactureerd?</h3>
        </div>
        <div style="padding: 20px; background-color: var(--white);">
          <p>De commissie van 15% wordt berekend op basis van de geschatte waarde van de materialen, volgens de actuele dagprijzen op ons platform. Bij het claimen van een opdracht wordt dit bedrag direct in rekening gebracht via uw gekozen betaalmethode. Aan het eind van de maand ontvangt u een overzichtsfactuur van alle transacties.</p>
        </div>
      </div>
      
      <div style="margin-bottom: 0; border: 1px solid #eee; border-radius: var(--border-radius); box-shadow: var(--box-shadow); overflow: hidden;">
        <div style="background-color: var(--primary); padding: 15px 20px; color: var(--white);">
          <h3>Kan ik meerdere gebruikers toevoegen aan mijn account?</h3>
        </div>
        <div style="padding: 20px; background-color: var(--white);">
          <p>Ja, na verificatie van uw hoofdaccount kunt u in het dashboard extra gebruikers toevoegen, bijvoorbeeld voor medewerkers die ook opdrachten moeten kunnen inzien en claimen. Elke gebruiker krijgt eigen inloggegevens met aangepaste rechten die u als hoofdgebruiker kunt bepalen.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include('footer.php'); ?>
