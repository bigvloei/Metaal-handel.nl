<?php
$page_title = "Contact - Metaal-handel.nl";
include('header.php');
?>

<section class="hero" style="min-height: 30vh; background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('img/hero-contact.jpg') center/cover no-repeat;">
  <div class="container">
    <div class="hero-content">
      <h1 class="hero-title">Contact</h1>
      <p class="hero-subtitle">Neem contact met ons op</p>
    </div>
  </div>
</section>

<section class="section section-light">
  <div class="container">
    <div class="row" style="display: flex; flex-wrap: wrap; margin: 0 -15px;">
      <div class="col" style="flex: 1; min-width: 300px; padding: 0 15px;">
        <div style="background-color: var(--white); border-radius: var(--border-radius); box-shadow: var(--box-shadow); padding: 30px; height: 100%;">
          <h2 style="color: var(--primary); margin-bottom: 25px;">Contactgegevens</h2>
          
          <div style="margin-bottom: 25px;">
            <h3 style="color: var(--primary); font-size: 1.3rem; margin-bottom: 15px;">Adres</h3>
            <p style="margin-bottom: 5px;">Metaal-handel.nl</p>
            <p style="margin-bottom: 5px;">Metaalweg 10</p>
            <p style="margin-bottom: 5px;">2031 CZ Haarlem</p>
          </div>
          
          <div style="margin-bottom: 25px;">
            <h3 style="color: var(--primary); font-size: 1.3rem; margin-bottom: 15px;">Contact</h3>
            <p style="margin-bottom: 5px;">
              <strong>E-mail:</strong> <a href="mailto:info@metaal-handel.nl" style="color: var(--primary);">info@metaal-handel.nl</a>
            </p>
            <p style="margin-bottom: 5px;">
              <strong>Telefoon:</strong> <a href="tel:+31201234567" style="color: var(--primary);">020 - 123 45 67</a>
            </p>
            <p style="margin-bottom: 5px;">
              <strong>Bereikbaarheid:</strong> Maandag t/m vrijdag: 9:00 - 17:00 uur
            </p>
          </div>
          
          <div style="margin-bottom: 25px;">
            <h3 style="color: var(--primary); font-size: 1.3rem; margin-bottom: 15px;">Bedrijfsinformatie</h3>
            <p style="margin-bottom: 5px;"><strong>KVK:</strong> 12345678</p>
            <p style="margin-bottom: 5px;"><strong>BTW:</strong> NL123456789B01</p>
          </div>
          
          <div>
            <h3 style="color: var(--primary); font-size: 1.3rem; margin-bottom: 15px;">Volg ons</h3>
            <div style="display: flex; gap: 15px;">
              <a href="#" style="color: var(--primary); font-size: 24px;"><i class="fab fa-facebook"></i></a>
              <a href="#" style="color: var(--primary); font-size: 24px;"><i class="fab fa-twitter"></i></a>
              <a href="#" style="color: var(--primary); font-size: 24px;"><i class="fab fa-instagram"></i></a>
              <a href="#" style="color: var(--primary); font-size: 24px;"><i class="fab fa-linkedin"></i></a>
            </div>
          </div>
      <div class="col" style="flex: 1; min-width: 300px; padding: 0 15px;">
        <div style="background-color: var(--white); border-radius: var(--border-radius); box-shadow: var(--box-shadow); padding: 30px; height: 100%;">
          <h2 style="color: var(--primary); margin-bottom: 25px;">Contactformulier</h2>
          
          <form action="process_contact.php" method="post">
            <div style="margin-bottom: 20px;">
              <label for="name" style="display: block; margin-bottom: 8px; font-weight: 500;">Naam *</label>
              <input type="text" id="name" name="name" class="form-control" required>
            </div>
            
            <div style="margin-bottom: 20px;">
              <label for="email" style="display: block; margin-bottom: 8px; font-weight: 500;">E-mailadres *</label>
              <input type="email" id="email" name="email" class="form-control" required>
            </div>
            
            <div style="margin-bottom: 20px;">
              <label for="phone" style="display: block; margin-bottom: 8px; font-weight: 500;">Telefoonnummer</label>
              <input type="tel" id="phone" name="phone" class="form-control">
            </div>
            
            <div style="margin-bottom: 20px;">
              <label for="subject" style="display: block; margin-bottom: 8px; font-weight: 500;">Onderwerp *</label>
              <select id="subject" name="subject" class="form-control" required>
                <option value="">Selecteer een onderwerp</option>
                <option value="algemeen">Algemene vraag</option>
                <option value="particulier">Vraag als particulier</option>
                <option value="handelaar">Vraag als handelaar</option>
                <option value="storing">Technisch probleem melden</option>
                <option value="overig">Overig</option>
              </select>
            </div>
            
            <div style="margin-bottom: 20px;">
              <label for="message" style="display: block; margin-bottom: 8px; font-weight: 500;">Bericht *</label>
              <textarea id="message" name="message" class="form-control" rows="5" style="resize: vertical;" required></textarea>
            </div>
            
            <div style="margin-bottom: 20px;">
              <label style="display: flex; align-items: flex-start; gap: 10px; cursor: pointer;">
                <input type="checkbox" name="privacy_consent" required>
                <span style="font-size: 0.9rem; color: var(--gray);">
                  Ik ga akkoord met de verwerking van mijn gegevens zoals beschreven in de <a href="privacy.php" target="_blank" style="color: var(--primary); text-decoration: none;">privacy policy</a> *
                </span>
              </label>
            </div>
            
            <div style="text-align: center;">
              <button type="submit" class="btn btn-lg" style="min-width: 200px;">
                <i class="fas fa-paper-plane"></i> Versturen
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section section-dark">
  <div class="container">
    <div class="section-title">
      <h2>Routebeschrijving</h2>
      <p>Zo vindt u ons kantoor in Haarlem</p>
    </div>
    
    <div style="margin-bottom: 40px;">
      <!-- Google Maps iFrame -->
      <div style="width: 100%; height: 450px; border-radius: var(--border-radius); overflow: hidden; box-shadow: var(--box-shadow);">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d78028.3227255262!2d4.5837642!3d52.3873878!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5ef6b924a7e37%3A0x80d6a10674c37d2a!2sHaarlem!5e0!3m2!1snl!2snl!4v1677777777777!5m2!1snl!2snl" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
    
    <div style="max-width: 800px; margin: 0 auto;">
      <div style="margin-bottom: 30px; border: 1px solid #eee; border-radius: var(--border-radius); box-shadow: var(--box-shadow); overflow: hidden;">
        <div style="background-color: var(--primary); padding: 15px 20px; color: var(--white);">
          <h3>Met het openbaar vervoer</h3>
        </div>
        <div style="padding: 20px; background-color: var(--white);">
          <p>Ons kantoor is gemakkelijk bereikbaar met het openbaar vervoer. Vanaf station Haarlem is het ongeveer 10 minuten met bus 340 richting Waarderpolder. Uitstappen bij halte 'Metaalweg' en dan is het nog 2 minuten lopen.</p>
        </div>
      </div>
      
      <div style="margin-bottom: 30px; border: 1px solid #eee; border-radius: var(--border-radius); box-shadow: var(--box-shadow); overflow: hidden;">
        <div style="background-color: var(--primary); padding: 15px 20px; color: var(--white);">
          <h3>Met de auto</h3>
        </div>
        <div style="padding: 20px; background-color: var(--white);">
          <p>Vanaf de A9: Neem afslag 6 (Rottepolderplein) richting Haarlem. Volg de N205 en sla na 5 km rechtsaf richting Waarderpolder. Na 1 km vindt u de Metaalweg aan uw rechterhand. Gratis parkeren is mogelijk voor de deur.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include('footer.php'); ?>
