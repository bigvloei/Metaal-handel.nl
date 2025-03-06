<?php
// Basisinstellingen
$page_title = "Registreren | Account aanmaken | Metaal-handel.nl";
$page_description = "Maak een account aan bij Metaal-handel.nl. Registreer als particulier om opdrachten te plaatsen of als metaalhandelaar om opdrachten aan te nemen.";
include('header.php');

// CSRF-token genereren
if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
$csrf_token = $_SESSION['csrf_token'];
?>

<section class="section" style="min-height: calc(100vh - var(--header-height)); margin-top: var(--header-height); background-color: #f1f1f1;">
  <div class="container" style="max-width: 1200px; padding: 40px 15px;">
    <div style="text-align: center; margin-bottom: 40px;">
      <h1 style="color: var(--primary); margin-bottom: 15px;">Registreren bij Metaal-handel.nl</h1>
      <p style="color: var(--gray); max-width: 700px; margin: 0 auto;">Maak een account aan om gebruik te maken van onze diensten. Registreer als particulier om opdrachten te plaatsen of als metaalhandelaar om opdrachten aan te nemen.</p>
    </div>

    <!-- Tabs voor keuze registratietype -->
    <div class="registration-tabs" style="display: flex; justify-content: center; margin-bottom: 30px;">
      <button id="tab-customer" class="tab-btn active" style="padding: 12px 25px; margin: 0 10px; border-radius: var(--border-radius); border: none; background-color: var(--primary); color: white; font-weight: 500; cursor: pointer;">
        <i class="fas fa-user"></i> Particulier
      </button>
      <button id="tab-trader" class="tab-btn" style="padding: 12px 25px; margin: 0 10px; border-radius: var(--border-radius); border: none; background-color: #e0e0e0; color: var(--gray); font-weight: 500; cursor: pointer;">
        <i class="fas fa-truck"></i> Metaalhandelaar
      </button>
    </div>

    <!-- Container voor registratieformulieren -->
    <div style="display: flex; flex-wrap: wrap; margin: 0 -15px;">
      <div style="flex: 1; min-width: 300px; padding: 0 15px; margin-bottom: 30px; width: 100%;">
        
        <!-- Formulier voor particulieren -->
        <div id="customer-form-container" style="background-color: var(--white); border-radius: var(--border-radius); box-shadow: var(--box-shadow); padding: 40px;">
          <form action="process_registration.php" method="post" id="customer-registration-form">
            <!-- CSRF-bescherming -->
            <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
            <input type="hidden" name="user_type" value="customer">
            
            <h2 style="color: var(--primary); margin-bottom: 25px;">Registreren als particulier</h2>
            <p style="margin-bottom: 25px; color: var(--gray);">Maak een account aan om opdrachten te plaatsen voor het ophalen van oud ijzer en andere metalen.</p>
            
            <div class="form-row" style="display: flex; flex-wrap: wrap; margin: 0 -10px;">
              <div class="form-group" style="flex: 1; min-width: 240px; padding: 0 10px; margin-bottom: 20px;">
                <label for="first_name" style="display: block; margin-bottom: 8px; font-weight: 500;">Voornaam *</label>
                <input type="text" id="first_name" name="first_name" class="form-control" required autofocus style="width: 100%;">
              </div>
              
              <div class="form-group" style="flex: 1; min-width: 240px; padding: 0 10px; margin-bottom: 20px;">
                <label for="last_name" style="display: block; margin-bottom: 8px; font-weight: 500;">Achternaam *</label>
                <input type="text" id="last_name" name="last_name" class="form-control" required style="width: 100%;">
              </div>
            </div>
            
            <div class="form-group" style="margin-bottom: 20px;">
              <label for="email" style="display: block; margin-bottom: 8px; font-weight: 500;">E-mailadres *</label>
              <input type="email" id="email" name="email" class="form-control" required style="width: 100%;">
            </div>
            
            <div class="form-row" style="display: flex; flex-wrap: wrap; margin: 0 -10px;">
              <div class="form-group" style="flex: 1; min-width: 240px; padding: 0 10px; margin-bottom: 20px;">
                <label for="password" style="display: block; margin-bottom: 8px; font-weight: 500;">Wachtwoord *</label>
                <input type="password" id="password" name="password" class="form-control" required minlength="8" style="width: 100%;">
                <small style="display: block; margin-top: 5px; color: var(--gray);">Minimaal 8 karakters, inclusief een hoofdletter, cijfer en speciaal teken</small>
              </div>
              
              <div class="form-group" style="flex: 1; min-width: 240px; padding: 0 10px; margin-bottom: 20px;">
                <label for="password_confirm" style="display: block; margin-bottom: 8px; font-weight: 500;">Wachtwoord bevestigen *</label>
                <input type="password" id="password_confirm" name="password_confirm" class="form-control" required minlength="8" style="width: 100%;">
              </div>
            </div>
            
            <div class="form-group" style="margin-bottom: 20px;">
              <label for="phone" style="display: block; margin-bottom: 8px; font-weight: 500;">Telefoonnummer *</label>
              <input type="tel" id="phone" name="phone" class="form-control" required style="width: 100%;">
            </div>
            
            <div class="form-group" style="margin-bottom: 20px;">
              <label for="address" style="display: block; margin-bottom: 8px; font-weight: 500;">Adres *</label>
              <input type="text" id="address" name="address" class="form-control" required style="width: 100%;">
            </div>
            
            <div class="form-row" style="display: flex; flex-wrap: wrap; margin: 0 -10px;">
              <div class="form-group" style="flex: 1; min-width: 140px; padding: 0 10px; margin-bottom: 20px;">
                <label for="postal_code" style="display: block; margin-bottom: 8px; font-weight: 500;">Postcode *</label>
                <input type="text" id="postal_code" name="postal_code" class="form-control" required pattern="[0-9]{4}\s?[A-Za-z]{2}" title="Vul een geldige postcode in (bijv. 1234 AB)" style="width: 100%;">
              </div>
              
              <div class="form-group" style="flex: 2; min-width: 240px; padding: 0 10px; margin-bottom: 20px;">
                <label for="city" style="display: block; margin-bottom: 8px; font-weight: 500;">Plaats *</label>
                <input type="text" id="city" name="city" class="form-control" required style="width: 100%;">
              </div>
            </div>
            
            <div class="form-group" style="margin-bottom: 25px;">
              <label class="checkbox-label" style="display: flex; align-items: flex-start; cursor: pointer;">
                <input type="checkbox" name="terms" required style="margin-top: 3px; margin-right: 10px;">
                <span style="font-size: 0.95rem;">Ik ga akkoord met de <a href="algemene-voorwaarden.php" target="_blank" style="color: var(--primary);">algemene voorwaarden</a> en het <a href="privacy.php" target="_blank" style="color: var(--primary);">privacybeleid</a> *</span>
              </label>
            </div>
            
            <div class="form-group" style="margin-bottom: 25px;">
              <label class="checkbox-label" style="display: flex; align-items: flex-start; cursor: pointer;">
                <input type="checkbox" name="newsletter" style="margin-top: 3px; margin-right: 10px;">
                <span style="font-size: 0.95rem;">Ik wil graag de nieuwsbrief ontvangen met tips over metaalrecycling en actuele prijzen</span>
              </label>
            </div>
            
            <div style="text-align: center; margin-top: 30px;">
              <button type="submit" class="btn btn-primary btn-lg" style="padding: 12px 30px; min-width: 200px;">
                <i class="fas fa-user-plus"></i> Account aanmaken
              </button>
            </div>
          </form>
          
          <div style="text-align: center; margin-top: 30px; padding-top: 20px; border-top: 1px solid #eee;">
            <p style="margin-bottom: 0;">
              Al een account? <a href="login.php" style="color: var(--primary); font-weight: 500;">Inloggen</a>
            </p>
          </div>
        </div>
        
        <!-- Formulier voor metaalhandelaren -->
        <div id="trader-form-container" style="background-color: var(--white); border-radius: var(--border-radius); box-shadow: var(--box-shadow); padding: 40px; display: none;">
          <form action="process_registration.php" method="post" id="trader-registration-form" enctype="multipart/form-data">
            <!-- CSRF-bescherming -->
            <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
            <input type="hidden" name="user_type" value="trader">
            
            <h2 style="color: var(--primary); margin-bottom: 25px;">Registreren als metaalhandelaar</h2>
            <p style="margin-bottom: 25px; color: var(--gray);">Maak een account aan om opdrachten aan te nemen en uw diensten als metaalhandelaar aan te bieden.</p>
            
            <h3 style="color: var(--primary); margin-bottom: 20px; font-size: 1.2rem;">Bedrijfsgegevens</h3>
            
            <div class="form-group" style="margin-bottom: 20px;">
              <label for="company_name" style="display: block; margin-bottom: 8px; font-weight: 500;">Bedrijfsnaam *</label>
              <input type="text" id="company_name" name="company_name" class="form-control" required style="width: 100%;">
            </div>
            
            <div class="form-row" style="display: flex; flex-wrap: wrap; margin: 0 -10px;">
              <div class="form-group" style="flex: 1; min-width: 240px; padding: 0 10px; margin-bottom: 20px;">
                <label for="kvk_number" style="display: block; margin-bottom: 8px; font-weight: 500;">KVK-nummer *</label>
                <input type="text" id="kvk_number" name="kvk_number" class="form-control" required pattern="[0-9]{8}" title="Vul een geldig 8-cijferig KVK-nummer in" style="width: 100%;">
              </div>
              
              <div class="form-group" style="flex: 1; min-width: 240px; padding: 0 10px; margin-bottom: 20px;">
                <label for="btw_number" style="display: block; margin-bottom: 8px; font-weight: 500;">BTW-nummer *</label>
                <input type="text" id="btw_number" name="btw_number" class="form-control" required style="width: 100%;">
              </div>
            </div>
            
            <div class="form-group" style="margin-bottom: 20px;">
              <label for="company_address" style="display: block; margin-bottom: 8px; font-weight: 500;">Bedrijfsadres *</label>
              <input type="text" id="company_address" name="company_address" class="form-control" required style="width: 100%;">
            </div>
            
            <div class="form-row" style="display: flex; flex-wrap: wrap; margin: 0 -10px;">
              <div class="form-group" style="flex: 1; min-width: 140px; padding: 0 10px; margin-bottom: 20px;">
                <label for="company_postal_code" style="display: block; margin-bottom: 8px; font-weight: 500;">Postcode *</label>
                <input type="text" id="company_postal_code" name="company_postal_code" class="form-control" required pattern="[0-9]{4}\s?[A-Za-z]{2}" title="Vul een geldige postcode in (bijv. 1234 AB)" style="width: 100%;">
              </div>
              
              <div class="form-group" style="flex: 2; min-width: 240px; padding: 0 10px; margin-bottom: 20px;">
                <label for="company_city" style="display: block; margin-bottom: 8px; font-weight: 500;">Plaats *</label>
                <input type="text" id="company_city" name="company_city" class="form-control" required style="width: 100%;">
              </div>
            </div>
            
            <div class="form-group" style="margin-bottom: 20px;">
              <label for="company_website" style="display: block; margin-bottom: 8px; font-weight: 500;">Website (optioneel)</label>
              <input type="url" id="company_website" name="company_website" class="form-control" style="width: 100%;" placeholder="https://">
            </div>
            
            <h3 style="color: var(--primary); margin-bottom: 20px; font-size: 1.2rem; margin-top: 30px;">Contactpersoon</h3>
            
            <div class="form-row" style="display: flex; flex-wrap: wrap; margin: 0 -10px;">
              <div class="form-group" style="flex: 1; min-width: 240px; padding: 0 10px; margin-bottom: 20px;">
                <label for="trader_first_name" style="display: block; margin-bottom: 8px; font-weight: 500;">Voornaam *</label>
                <input type="text" id="trader_first_name" name="trader_first_name" class="form-control" required style="width: 100%;">
              </div>
              
              <div class="form-group" style="flex: 1; min-width: 240px; padding: 0 10px; margin-bottom: 20px;">
                <label for="trader_last_name" style="display: block; margin-bottom: 8px; font-weight: 500;">Achternaam *</label>
                <input type="text" id="trader_last_name" name="trader_last_name" class="form-control" required style="width: 100%;">
              </div>
            </div>
            
            <div class="form-group" style="margin-bottom: 20px;">
              <label for="position" style="display: block; margin-bottom: 8px; font-weight: 500;">Functie *</label>
              <input type="text" id="position" name="position" class="form-control" required style="width: 100%;">
            </div>
            
            <div class="form-group" style="margin-bottom: 20px;">
              <label for="trader_email" style="display: block; margin-bottom: 8px; font-weight: 500;">E-mailadres *</label>
              <input type="email" id="trader_email" name="trader_email" class="form-control" required style="width: 100%;">
            </div>
            
            <div class="form-group" style="margin-bottom: 20px;">
              <label for="trader_phone" style="display: block; margin-bottom: 8px; font-weight: 500;">Telefoonnummer *</label>
              <input type="tel" id="trader_phone" name="trader_phone" class="form-control" required style="width: 100%;">
            </div>
            
            <h3 style="color: var(--primary); margin-bottom: 20px; font-size: 1.2rem; margin-top: 30px;">Accountgegevens</h3>
            
            <div class="form-row" style="display: flex; flex-wrap: wrap; margin: 0 -10px;">
              <div class="form-group" style="flex: 1; min-width: 240px; padding: 0 10px; margin-bottom: 20px;">
                <label for="trader_password" style="display: block; margin-bottom: 8px; font-weight: 500;">Wachtwoord *</label>
                <input type="password" id="trader_password" name="trader_password" class="form-control" required minlength="8" style="width: 100%;">
                <small style="display: block; margin-top: 5px; color: var(--gray);">Minimaal 8 karakters, inclusief een hoofdletter, cijfer en speciaal teken</small>
              </div>
              
              <div class="form-group" style="flex: 1; min-width: 240px; padding: 0 10px; margin-bottom: 20px;">
                <label for="trader_password_confirm" style="display: block; margin-bottom: 8px; font-weight: 500;">Wachtwoord bevestigen *</label>
                <input type="password" id="trader_password_confirm" name="trader_password_confirm" class="form-control" required minlength="8" style="width: 100%;">
              </div>
            </div>
            
            <h3 style="color: var(--primary); margin-bottom: 20px; font-size: 1.2rem; margin-top: 30px;">Diensten & Werkgebied</h3>
            
            <div class="form-group" style="margin-bottom: 25px;">
              <label style="display: block; margin-bottom: 12px; font-weight: 500;">Welke materialen accepteert u? *</label>
              <div style="display: flex; flex-wrap: wrap; margin: -5px;">
                <label class="checkbox-label" style="display: flex; align-items: center; padding: 5px 15px 5px 5px; margin: 5px; cursor: pointer;">
                  <input type="checkbox" name="materials[]" value="ijzer" style="margin-right: 8px;"> IJzer en staal
                </label>
                <label class="checkbox-label" style="display: flex; align-items: center; padding: 5px 15px 5px 5px; margin: 5px; cursor: pointer;">
                  <input type="checkbox" name="materials[]" value="koper" style="margin-right: 8px;"> Koper
                </label>
                <label class="checkbox-label" style="display: flex; align-items: center; padding: 5px 15px 5px 5px; margin: 5px; cursor: pointer;">
                  <input type="checkbox" name="materials[]" value="aluminium" style="margin-right: 8px;"> Aluminium
                </label>
                <label class="checkbox-label" style="display: flex; align-items: center; padding: 5px 15px 5px 5px; margin: 5px; cursor: pointer;">
                  <input type="checkbox" name="materials[]" value="lood" style="margin-right: 8px;"> Lood
                </label>
                <label class="checkbox-label" style="display: flex; align-items: center; padding: 5px 15px 5px 5px; margin: 5px; cursor: pointer;">
                  <input type="checkbox" name="materials[]" value="zink" style="margin-right: 8px;"> Zink
                </label>
                <label class="checkbox-label" style="display: flex; align-items: center; padding: 5px 15px 5px 5px; margin: 5px; cursor: pointer;">
                  <input type="checkbox" name="materials[]" value="rvs" style="margin-right: 8px;"> RVS
                </label>
                <label class="checkbox-label" style="display: flex; align-items: center; padding: 5px 15px 5px 5px; margin: 5px; cursor: pointer;">
                  <input type="checkbox" name="materials[]" value="kabels" style="margin-right: 8px;"> Kabels
                </label>
                <label class="checkbox-label" style="display: flex; align-items: center; padding: 5px 15px 5px 5px; margin: 5px; cursor: pointer;">
                  <input type="checkbox" name="materials[]" value="elektromotoren" style="margin-right: 8px;"> Elektromotoren
                </label>
                <label class="checkbox-label" style="display: flex; align-items: center; padding: 5px 15px 5px 5px; margin: 5px; cursor: pointer;">
                  <input type="checkbox" name="materials[]" value="witgoed" style="margin-right: 8px;"> Witgoed
                </label>
              </div>
            </div>
            
            <div class="form-group" style="margin-bottom: 25px;">
              <label style="display: block; margin-bottom: 12px; font-weight: 500;">Werkgebied (meerdere selecties mogelijk) *</label>
              <div style="display: flex; flex-wrap: wrap; margin: -5px;">
                <label class="checkbox-label" style="display: flex; align-items: center; padding: 5px 15px 5px 5px; margin: 5px; width: calc(25% - 10px); min-width: 180px; cursor: pointer;">
                  <input type="checkbox" name="provinces[]" value="drenthe" style="margin-right: 8px;"> Drenthe
                </label>
                <label class="checkbox-label" style="display: flex; align-items: center; padding: 5px 15px 5px 5px; margin: 5px; width: calc(25% - 10px); min-width: 180px; cursor: pointer;">
                  <input type="checkbox" name="provinces[]" value="flevoland" style="margin-right: 8px;"> Flevoland
                </label>
                <label class="checkbox-label" style="display: flex; align-items: center; padding: 5px 15px 5px 5px; margin: 5px; width: calc(25% - 10px); min-width: 180px; cursor: pointer;">
                  <input type="checkbox" name="provinces[]" value="friesland" style="margin-right: 8px;"> Friesland
                </label>
                <label class="checkbox-label" style="display: flex; align-items: center; padding: 5px 15px 5px 5px; margin: 5px; width: calc(25% - 10px); min-width: 180px; cursor: pointer;">
                  <input type="checkbox" name="provinces[]" value="gelderland" style="margin-right: 8px;"> Gelderland
                </label>
                <label class="checkbox-label" style="display: flex; align-items: center; padding: 5px 15px 5px 5px; margin: 5px; width: calc(25% - 10px); min-width: 180px; cursor: pointer;">
                  <input type="checkbox" name="provinces[]" value="groningen" style="margin-right: 8px;"> Groningen
                </label>
                <label class="checkbox-label" style="display: flex; align-items: center; padding: 5px 15px 5px 5px; margin: 5px; width: calc(25% - 10px); min-width: 180px; cursor: pointer;">
                  <input type="checkbox" name="provinces[]" value="limburg" style="margin-right: 8px;"> Limburg
                </label>
                <label class="checkbox-label" style="display: flex; align-items: center; padding: 5px 15px 5px 5px; margin: 5px; width: calc(25% - 10px); min-width: 180px; cursor: pointer;">
                  <input type="checkbox" name="provinces[]" value="noord-brabant" style="margin-right: 8px;"> Noord-Brabant
                </label>
                <label class="checkbox-label" style="display: flex; align-items: center; padding: 5px 15px 5px 5px; margin: 5px; width: calc(25% - 10px); min-width: 180px; cursor: pointer;">
                  <input type="checkbox" name="provinces[]" value="noord-holland" style="margin-right: 8px;"> Noord-Holland
                </label>
                <label class="checkbox-label" style="display: flex; align-items: center; padding: 5px 15px 5px 5px; margin: 5px; width: calc(25% - 10px); min-width: 180px; cursor: pointer;">
                  <input type="checkbox" name="provinces[]" value="overijssel" style="margin-right: 8px;"> Overijssel
                </label>
                <label class="checkbox-label" style="display: flex; align-items: center; padding: 5px 15px 5px 5px; margin: 5px; width: calc(25% - 10px); min-width: 180px; cursor: pointer;">
                  <input type="checkbox" name="provinces[]" value="utrecht" style="margin-right: 8px;"> Utrecht
                </label>
                <label class="checkbox-label" style="display: flex; align-items: center; padding: 5px 15px 5px 5px; margin: 5px; width: calc(25% - 10px); min-width: 180px; cursor: pointer;">
                  <input type="checkbox" name="provinces[]" value="zeeland" style="margin-right: 8px;"> Zeeland
                </label>
                <label class="checkbox-label" style="display: flex; align-items: center; padding: 5px 15px 5px 5px; margin: 5px; width: calc(25% - 10px); min-width: 180px; cursor: pointer;">
                  <input type="checkbox" name="provinces[]" value="zuid-holland" style="margin-right: 8px;"> Zuid-Holland
                </label>
              </div>
            </div>
            
            <h3 style="color: var(--primary); margin-bottom: 20px; font-size: 1.2rem; margin-top: 30px;">Benodigde documenten</h3>
            <p style="margin-bottom: 20px; color: var(--gray);">Upload de volgende documenten om uw registratie te voltooien. Deze worden gebruikt voor verificatie van uw bedrijf.</p>
            
            <div class="form-group" style="margin-bottom: 25px;">
              <label for="kvk_extract" style="display: block; margin-bottom: 8px; font-weight: 500;">KVK Uittreksel (PDF) *</label>
              <div class="file-upload" style="position: relative; display: flex; align-items: center; margin-bottom: 5px;">
                <input type="file" id="kvk_extract" name="kvk_extract" accept=".pdf" required style="position: absolute; left: 0; top: 0; opacity: 0; width: 100%; height: 100%; cursor: pointer;">
                <button type="button" style="border: 1px solid #ccc; background-color: #f8f8f8; border-radius: 4px; padding: 8px 15px; margin-right: 10px;">
                  <i class="fas fa-upload"></i> Bestand kiezen
                </button>
                <span class="selected-file" style="color: var(--gray);">Geen bestand geselecteerd</span>
              </div>
              <small style="display: block; color: var(--gray);">Upload een recent KVK uittreksel (niet ouder dan 3 maanden)</small>
            </div>
            
            <div class="form-group" style="margin-bottom: 25px;">
              <label for="id_copy" style="display: block; margin-bottom: 8px; font-weight: 500;">Kopie legitimatiebewijs (PDF) *</label>
              <div class="file-upload" style="position: relative; display: flex; align-items: center; margin-bottom: 5px;">
                <input type="file" id="id_copy" name="id_copy" accept=".pdf,.jpg,.jpeg,.png" required style="position: absolute; left: 0; top: 0; opacity: 0; width: 100%; height: 100%; cursor: pointer;">
                <button type="button" style="border: 1px solid #ccc; background-color: #f8f8f8; border-radius: 4px; padding: 8px 15px; margin-right: 10px;">
                  <i class="fas fa-upload"></i> Bestand kiezen
                </button>
                <span class="selected-file" style="color: var(--gray);">Geen bestand geselecteerd</span>
              </div>
              <small style="display: block; color: var(--gray);">Upload een veilige kopie van uw ID (BSN nummer afgeschermd)</small>
            </div>
            
            <div class="form-group" style="margin-bottom: 25px;">
              <label for="permit" style="display: block; margin-bottom: 8px; font-weight: 500;">Vergunning(en) (indien van toepassing)</label>
              <div class="file-upload" style="position: relative; display: flex; align-items: center; margin-bottom: 5px;">
                <input type="file" id="permit" name="permit" accept=".pdf" style="position: absolute; left: 0; top: 0; opacity: 0; width: 100%; height: 100%; cursor: pointer;">
                <button type="button" style="border: 1px solid #ccc; background-color: #f8f8f8; border-radius: 4px; padding: 8px 15px; margin-right: 10px;">
                  <i class="fas fa-upload"></i> Bestand kiezen
                </button>
                <span class="selected-file" style="color: var(--gray);">Geen bestand geselecteerd</span>
              </div>
              <small style="display: block; color: var(--gray);">Upload eventuele milieuvergunningen of andere relevante documenten</small>
            </div>
            
            <h3 style="color: var(--primary); margin-bottom: 20px; font-size: 1.2rem; margin-top: 30px;">Voorwaarden</h3>
            
            <div class="form-group" style="margin-bottom: 25px;">
              <label class="checkbox-label" style="display: flex; align-items: flex-start; cursor: pointer;">
                <input type="checkbox" name="trader_terms" required style="margin-top: 3px; margin-right: 10px;">
                <span style="font-size: 0.95rem;">Ik ga akkoord met de <a href="algemene-voorwaarden.php" target="_blank" style="color: var(--primary);">algemene voorwaarden</a> en het <a href="privacy.php" target="_blank" style="color: var(--primary);">privacybeleid</a> *</span>
              </label>
            </div>
            
            <div class="form-group" style="margin-bottom: 25px;">
              <label class="checkbox-label" style="display: flex; align-items: flex-start; cursor: pointer;">
                <input type="checkbox" name="data_permission" required style="margin-top: 3px; margin-right: 10px;">
                <span style="font-size: 0.95rem;">Ik geef toestemming voor de verwerking van mijn bedrijfsgegevens en het verifiëren van mijn legitimatiebewijs *</span>
              </label>
            </div>
            
            <div class="form-group" style="margin-bottom: 25px;">
              <label class="checkbox-label" style="display: flex; align-items: flex-start; cursor: pointer;">
                <input type="checkbox" name="trader_newsletter" style="margin-top: 3px; margin-right: 10px;">
                <span style="font-size: 0.95rem;">Ik wil graag zakelijke updates en tips ontvangen over metaalhandel en recycling</span>
              </label>
            </div>
            
            <div style="text-align: center; margin-top: 30px;">
              <button type="submit" class="btn btn-primary btn-lg" style="padding: 12px 30px; min-width: 250px;">
                <i class="fas fa-user-plus"></i> Registreren als handelaar
              </button>
            </div>
          </form>
          
          <div style="text-align: center; margin-top: 30px; padding-top: 20px; border-top: 1px solid #eee;">
            <p style="margin-bottom: 0;">
              Al een account? <a href="login.php" style="color: var(--primary); font-weight: 500;">Inloggen</a>
            </p>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
  // Tab switching functionality
  const tabCustomer = document.getElementById('tab-customer');
  const tabTrader = document.getElementById('tab-trader');
  const customerFormContainer = document.getElementById('customer-form-container');
  const traderFormContainer = document.getElementById('trader-form-container');
  
  tabCustomer.addEventListener('click', function() {
    // Activate customer tab
    tabCustomer.classList.add('active');
    tabCustomer.style.backgroundColor = 'var(--primary)';
    tabCustomer.style.color = 'white';
    
    // Deactivate trader tab
    tabTrader.classList.remove('active');
    tabTrader.style.backgroundColor = '#e0e0e0';
    tabTrader.style.color = 'var(--gray)';
    
    // Show customer form, hide trader form
    customerFormContainer.style.display = 'block';
    traderFormContainer.style.display = 'none';
  });
  
  tabTrader.addEventListener('click', function() {
    // Activate trader tab
    tabTrader.classList.add('active');
    tabTrader.style.backgroundColor = 'var(--primary)';
    tabTrader.style.color = 'white';
    
    // Deactivate customer tab
    tabCustomer.classList.remove('active');
    tabCustomer.style.backgroundColor = '#e0e0e0';
    tabCustomer.style.color = 'var(--gray)';
    
    // Show trader form, hide customer form
    traderFormContainer.style.display = 'block';
    customerFormContainer.style.display = 'none';
  });
  
  // File upload UI for traders
  const fileInputs = document.querySelectorAll('input[type="file"]');
  
  fileInputs.forEach(input => {
    input.addEventListener('change', function() {
      const fileNameSpan = this.parentElement.querySelector('.selected-file');
      if (this.files.length > 0) {
        fileNameSpan.textContent = this.files[0].name;
      } else {
        fileNameSpan.textContent = 'Geen bestand geselecteerd';
      }
    });
  });
  
  // Form validation for customer registration
  const customerForm = document.getElementById('customer-registration-form');
  const password = document.getElementById('password');
  const passwordConfirm = document.getElementById('password_confirm');
  
  customerForm.addEventListener('submit', function(event) {
    // Check if passwords match
    if (password.value !== passwordConfirm.value) {
      event.preventDefault();
      alert('De wachtwoorden komen niet overeen. Probeer het opnieuw.');
      password.focus();
      return false;
    }
    
    // Check password strength
    const passwordRegex = /^(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*])/;
    if (!passwordRegex.test(password.value)) {
      event.preventDefault();
      alert('Wachtwoord moet minstens één hoofdletter, één cijfer en één speciaal teken bevatten.');
      password.focus();
      return false;
    }
  });
  
  // Form validation for trader registration
  const traderForm = document.getElementById('trader-registration-form');
  const traderPassword = document.getElementById('trader_password');
  const traderPasswordConfirm = document.getElementById('trader_password_confirm');
  
  traderForm.addEventListener('submit', function(event) {
    // Check if trader passwords match
    if (traderPassword.value !== traderPasswordConfirm.value) {
      event.preventDefault();
      alert('De wachtwoorden komen niet overeen. Probeer het opnieuw.');
      traderPassword.focus();
      return false;
    }
    
    // Check trader password strength
    const passwordRegex = /^(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*])/;
    if (!passwordRegex.test(traderPassword.value)) {
      event.preventDefault();
      alert('Wachtwoord moet minstens één hoofdletter, één cijfer en één speciaal teken bevatten.');
      traderPassword.focus();
      return false;
    }
    
    // Check if materials are selected
    const materialsChecked = document.querySelectorAll('input[name="materials[]"]:checked').length;
    if (materialsChecked === 0) {
      event.preventDefault();
      alert('Selecteer a.u.b. minimaal één type materiaal dat u accepteert.');
      return false;
    }
    
    // Check if provinces are selected
    const provincesChecked = document.querySelectorAll('input[name="provinces[]"]:checked').length;
    if (provincesChecked === 0) {
      event.preventDefault();
      alert('Selecteer a.u.b. minimaal één provincie als werkgebied.');
      return false;
    }
  });
});
</script>

<?php include('footer.php'); ?>