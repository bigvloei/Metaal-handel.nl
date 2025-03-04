<footer>
  <div class="container">
    <div class="footer-content">
      <div>
        <a href="/" class="logo">
          <i class="fas fa-recycle"></i> Metaal <span>-handel.nl</span>
        </a>
        <p style="color: rgba(255,255,255,0.7); margin-bottom: 20px;">
          Metaal-handel.nl verbindt particulieren met oud ijzer en metalen aan de beste handelaren in Nederland. Bij ons krijg je altijd de beste prijs voor je materialen.
        </p>
        <div class="footer-social">
          <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
          <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
          <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
      
      <div>
        <h3 class="footer-heading">Snelle Links</h3>
        <ul class="footer-links">
          <li><a href="index.php"><i class="fas fa-chevron-right"></i> Home</a></li>
          <li><a href="particulieren.php"><i class="fas fa-chevron-right"></i> Voor particulieren</a></li>
          <li><a href="handelaren.php"><i class="fas fa-chevron-right"></i> Voor handelaren</a></li>
          <li><a href="opdracht-plaatsen.php"><i class="fas fa-chevron-right"></i> Opdracht plaatsen</a></li>
          <li><a href="prijzen.php"><i class="fas fa-chevron-right"></i> Dagprijzen</a></li>
          <li><a href="contact.php"><i class="fas fa-chevron-right"></i> Contact</a></li>
        </ul>
      </div>
      
      <div>
        <h3 class="footer-heading">Wat We Inkopen</h3>
        <ul class="footer-links">
          <li><a href="materialen.php#oud-ijzer"><i class="fas fa-chevron-right"></i> Oud IJzer & Schroot</a></li>
          <li><a href="materialen.php#koper"><i class="fas fa-chevron-right"></i> Koper</a></li>
          <li><a href="materialen.php#cv-ketels"><i class="fas fa-chevron-right"></i> CV Ketels</a></li>
          <li><a href="materialen.php#aluminium"><i class="fas fa-chevron-right"></i> Aluminium</a></li>
          <li><a href="materialen.php#kabels"><i class="fas fa-chevron-right"></i> Kabels & Elektronica</a></li>
        </ul>
      </div>
      
      <div>
        <h3 class="footer-heading">Contact</h3>
        <ul class="footer-links" style="color: rgba(255,255,255,0.7);">
          <li style="display: flex; gap: 10px;">
            <i class="fas fa-map-marker-alt" style="margin-top: 5px;"></i>
            <span>Metaalweg 10<br>2031 CZ Haarlem</span>
          </li>
          <li style="display: flex; gap: 10px; margin: 15px 0;">
            <i class="fas fa-phone-alt"></i>
            <a href="tel:+31612345678">06-1234-5678</a>
          </li>
          <li style="display: flex; gap: 10px;">
            <i class="fas fa-envelope"></i>
            <a href="mailto:info@metaal-handel.nl">info@metaal-handel.nl</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  
  <div class="footer-bottom">
    <div class="container">
      <p>© <?php echo date('Y'); ?> Metaal-handel.nl | Alle rechten voorbehouden. | <a href="privacy.php" style="color: rgba(255,255,255,0.7); text-decoration: none;">Privacy Policy</a> | <a href="voorwaarden.php" style="color: rgba(255,255,255,0.7); text-decoration: none;">Algemene Voorwaarden</a></p>
    </div>
  </div>
</footer>

<div class="whatsapp-fixed">
  <a href="https://wa.me/31612345678?text=Ik%20heb%20een%20vraag%20over%20metaal-handel.nl" class="whatsapp-button" aria-label="Contact via WhatsApp">
    <i class="fab fa-whatsapp"></i>
  </a>
  <div class="whatsapp-tooltip">
    Direct contact via WhatsApp
  </div>
</div>

<div class="scroll-top" id="scrollTop" aria-label="Scroll naar boven">
  <i class="fas fa-chevron-up"></i>
</div>

<script>
// Header scroll effect
const header = document.getElementById('main-header');
window.addEventListener('scroll', function() {
  if (window.scrollY > 50) {
    header.classList.add('scrolled');
  } else {
    header.classList.remove('scrolled');
  }
});

// Scroll to top functionality
const scrollTopBtn = document.getElementById('scrollTop');
window.addEventListener('scroll', function() {
  if (window.scrollY > 300) {
    scrollTopBtn.classList.add('active');
  } else {
    scrollTopBtn.classList.remove('active');
  }
});

scrollTopBtn.addEventListener('click', function() {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
});

// Mobile menu functionality
const navToggle = document.querySelector('.nav-toggle');
const mobileNav = document.getElementById('mobile-nav');
const mobileNavClose = document.querySelector('.mobile-nav-close');

navToggle.addEventListener('click', function() {
  mobileNav.classList.add('active');
  document.body.style.overflow = 'hidden';
});

mobileNavClose.addEventListener('click', function() {
  mobileNav.classList.remove('active');
  document.body.style.overflow = '';
});
</script>
</body>
</html>
