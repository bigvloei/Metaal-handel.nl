<?php
$page_title = "Inloggen - Metaal-handel.nl";
include('header.php');

// Controleer of gebruiker al is ingelogd
if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit();
}

// Toon eventuele foutmeldingen of succesberichten
$error = isset($_SESSION['login_error']) ? $_SESSION['login_error'] : '';
$success = isset($_SESSION['login_success']) ? $_SESSION['login_success'] : '';
unset($_SESSION['login_error']);
unset($_SESSION['login_success']);

// CSRF-token genereren
if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
$csrf_token = $_SESSION['csrf_token'];
?>

<section class="section" style="min-height: calc(100vh - var(--header-height)); display: flex; align-items: center; margin-top: var(--header-height); background-color: #f1f1f1;">
  <div class="container" style="max-width: 1000px;">
    <div style="display: flex; flex-wrap: wrap; margin: 0 -15px;">
      <!-- Linker kolom: Inlogformulier -->
      <div style="flex: 1; min-width: 300px; padding: 0 15px; margin-bottom: 30px;">
        <div style="background-color: var(--white); border-radius: var(--border-radius); box-shadow: var(--box-shadow); padding: 40px; height: 100%;">
          <div style="text-align: center; margin-bottom: 30px;">
            <h1 style="color: var(--primary); margin-bottom: 10px;">Inloggen</h1>
            <p style="color: var(--gray);">Log in op uw account om opdrachten te beheren</p>
          </div>
          
          <?php if (!empty($error)): ?>
            <div class="alert alert-danger" role="alert">
              <?php echo htmlspecialchars($error); ?>
            </div>
          <?php endif; ?>
            
          <?php if (!empty($success)): ?>
            <div class="alert alert-success" role="alert">
              <?php echo htmlspecialchars($success); ?>
              </div>
          <?php endif; ?>
            
          <form action="process_login.php" method="post" id="login-form">
            <!-- CSRF-bescherming -->
            <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
            
            <div style="margin-bottom: 20px;">
              <label for="email" style="display: block; margin-bottom: 8px; font-weight: 500;">E-mailadres</label>
              <input type="email" id="email" name="email" class="form-control" required autofocus autocomplete="email">
            </div>
            <div style="margin-bottom: 20px;">
              <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                <label for="password" style="font-weight: 500;">Wachtwoord</label>
                <a href="wachtwoord-vergeten.php" style="color: var(--primary); font-size: 0.9rem;">Wachtwoord vergeten?</a>
              </div>
              <input type="password" id="password" name="password" class="form-control" required autocomplete="current-password">
          </div>
          <div style="margin-bottom: 25px;">
              <label style="display: flex; align-items: center; gap: 10px; cursor: pointer;">
                <input type="checkbox" name="remember" checked>
                <span>Onthoud mij</span>
              </label>
            </div>
            
            <div style="text-align: center;">
              <button type="submit" class="btn btn-lg" style="width: 100%;">Inloggen</button>
              </div>
          </form>
          
          <div style="text-align: center; margin-top: 30px; padding-top: 20px; border-top: 1px solid #eee;">
            <p style="margin-bottom: 0;">
              Nog geen account? <a href="handelaar-worden.php" style="color: var(--primary); font-weight: 500;">Registreer als handelaar</a>
            </p>
          </div>
              </div>
            </div>
      
      <!-- Rechter kolom: Informatie -->
      <div style="flex: 1; min-width: 300px; padding: 0 15px;">
        <div style="background-color: var(--primary); color: var(--white); border-radius: var(--border-radius); box-shadow: var(--box-shadow); padding: 40px; height: 100%;">
          <h2 style="color: var(--white); margin-bottom: 20px;">Voordelen voor handelaren</h2>
          
          <div style="margin-bottom: 25px;">
            <div style="display: flex; align-items: flex-start; margin-bottom: 15px;">
              <div style="margin-right: 15px; color: var(--white); font-size: 1.5rem;">
                <i class="fas fa-search"></i>
              </div>
              <div>
                <h3 style="color: var(--white); font-size: 1.2rem; margin-bottom: 10px;">Directe toegang tot materialen</h3>
                <p style="margin-bottom: 0; opacity: 0.9;">Vind beschikbare materialen in uw regio en claim opdrachten met één klik.</p>
              </div>
            </div>
          </div>
          
          <div style="margin-bottom: 25px;">
            <div style="display: flex; align-items: flex-start; margin-bottom: 15px;">
              <div style="margin-right: 15px; color: var(--white); font-size: 1.5rem;">
                <i class="fas fa-map-marker-alt"></i>
              </div>
              <div>
                <h3 style="color: var(--white); font-size: 1.2rem; margin-bottom: 10px;">Slim werkgebiedbeheer</h3>
                <p style="margin-bottom: 0; opacity: 0.9;">Stel uw werkgebied in en ontvang alleen relevante opdrachten binnen uw regio.</p>
              </div>
            </div>
          </div>
          
          <div style="margin-bottom: 25px;">
            <div style="display: flex; align-items: flex-start; margin-bottom: 15px;">
              <div style="margin-right: 15px; color: var(--white); font-size: 1.5rem;">
                <i class="fas fa-chart-line"></i>
              </div>
              <div>
                <h3 style="color: var(--white); font-size: 1.2rem; margin-bottom: 10px;">Uitgebreide statistieken</h3>
                <p style="margin-bottom: 0; opacity: 0.9;">Krijg inzicht in uw prestaties met gedetailleerde rapportages en overzichten.</p>
        </div>
      </div>
    </div>
          
          <div>
            <div style="display: flex; align-items: flex-start;">
              <div style="margin-right: 15px; color: var(--white); font-size: 1.5rem;">
                <i class="fas fa-users"></i>
  </div>
              <div>
                <h3 style="color: var(--white); font-size: 1.2rem; margin-bottom: 10px;">Direct contact met klanten</h3>
                <p style="margin-bottom: 0; opacity: 0.9;">Communiceer rechtstreeks met particulieren voor een efficiënte afhandeling van opdrachten.</p>
              </div>
            </div>
          </div>
          
          <div style="margin-top: 30px; text-align: center;">
            <a href="handelaar-worden.php" class="btn" style="background-color: var(--white); color: var(--primary); padding: 12px 25px;">
              <i class="fas fa-user-plus"></i> Nu aanmelden als handelaar
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
// Voorkom meerdere form submissions
document.getElementById('login-form').addEventListener('submit', function(e) {
  // Disable de submit button na klikken
  const submitButton = this.querySelector('button[type="submit"]');
  if (submitButton) {
    submitButton.disabled = true;
    submitButton.innerHTML = 'Bezig met inloggen...';
  }
});
</script>

<?php include('footer.php'); ?>
