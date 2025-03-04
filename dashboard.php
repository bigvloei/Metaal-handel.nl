<?php
// Controleer of gebruiker is ingelogd als handelaar
session_start();
if(!isset($_SESSION['user_id']) || $_SESSION['user_type'] != 'handelaar') {
  header("Location: login.php");
  exit();
}

$page_title = "Handelaar Dashboard - Metaal-handel.nl";
include('header.php');
?>

<section class="section" style="margin-top: var(--header-height); padding-top: 20px;">
  <div class="container">
    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 30px;">
      <h1 style="color: var(--primary); margin-bottom: 0;">Dashboard</h1>
      <div>
        <span style="margin-right: 10px; color: var(--gray);">Laatst bijgewerkt: <span id="last-updated">vandaag, 09:35</span></span>
        <button onclick="refreshDashboard()" class="btn" style="padding: 6px 12px;">
          <i class="fas fa-sync-alt"></i> Vernieuwen
        </button>
      </div>
    </div>
    
    <div style="display: grid; grid-template-columns: 250px 1fr; gap: 30px;">
      <!-- Sidebar -->
      <div>
        <div style="background-color: var(--white); border-radius: var(--border-radius); box-shadow: var(--box-shadow); padding: 20px; margin-bottom: 20px;">
          <div style="text-align: center; margin-bottom: 20px;">
            <div style="width: 80px; height: 80px; border-radius: 50%; background-color: var(--primary); color: var(--white); display: flex; align-items: center; justify-content: center; font-size: 2rem; margin: 0 auto 15px auto;">
              <i class="fas fa-user"></i>
            </div>
            <h3 style="margin-bottom: 5px;">Welkom terug</h3>
            <p style="color: var(--gray); margin-bottom: 0;"><?php echo $_SESSION['user_name']; ?></p>
          </div>
          
          <div style="border-top: 1px solid #eee; padding-top: 20px;">
            <p style="margin-bottom: 5px;"><strong>Status:</strong> <span style="color: var(--success);">Actief</span></p>
            <p style="margin-bottom: 5px;"><strong>Werkgebied:</strong> Noord-Holland</p>
            <p style="margin-bottom: 0;"><strong>Lid sinds:</strong> 01-03-2025</p>
          </div>
        </div>
        
        <div style="background-color: var(--white); border-radius: var(--border-radius); box-shadow: var(--box-shadow); overflow: hidden;">
          <div style="background-color: var(--primary); padding: 15px 20px; color: var(--white);">
            <h3 style="margin-bottom: 0;">Navigatie</h3>
          </div>
          <div style="padding: 10px;">
            <ul style="list-style: none; padding: 0; margin: 0;">
              <li>
                <a href="#" class="active" style="display: flex; align-items: center; padding: 12px 15px; color: var(--primary); font-weight: 500; border-radius: var(--border-radius); background-color: rgba(45, 125, 70, 0.1);">
                  <i class="fas fa-tachometer-alt" style="width: 20px; margin-right: 10px;"></i> Dashboard
                </a>
              </li>
              <li>
                <a href="#" style="display: flex; align-items: center; padding: 12px 15px; color: var(--dark); font-weight: 500; border-radius: var(--border-radius); transition: var(--transition);">
                  <i class="fas fa-list-ul" style="width: 20px; margin-right: 10px;"></i> Mijn opdrachten
                </a>
              </li>
              <li>
                <a href="#" style="display: flex; align-items: center; padding: 12px 15px; color: var(--dark); font-weight: 500; border-radius: var(--border-radius); transition: var(--transition);">
                  <i class="fas fa-history" style="width: 20px; margin-right: 10px;"></i> Geschiedenis
                </a>
              </li>
              <li>
                <a href="#" style="display: flex; align-items: center; padding: 12px 15px; color: var(--dark); font-weight: 500; border-radius: var(--border-radius); transition: var(--transition);">
                  <i class="fas fa-file-invoice" style="width: 20px; margin-right: 10px;"></i> Facturen
                </a>
              </li>
              <li>
                <a href="#" style="display: flex; align-items: center; padding: 12px 15px; color: var(--dark); font-weight: 500; border-radius: var(--border-radius); transition: var(--transition);">
                  <i class="fas fa-cog" style="width: 20px; margin-right: 10px;"></i> Instellingen
                </a>
              </li>
              <li>
                <a href="logout.php" style="display: flex; align-items: center; padding: 12px 15px; color: var(--danger); font-weight: 500; border-radius: var(--border-radius); transition: var(--transition);">
                  <i class="fas fa-sign-out-alt" style="width: 20px; margin-right: 10px;"></i> Uitloggen
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      
      <!-- Main Content -->
      <div>
        <!-- Statistieken -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-bottom: 30px;">
          <div style="background-color: var(--white); border-radius: var(--border-radius); box-shadow: var(--box-shadow); padding: 20px; text-align: center;">
            <div style="font-size: 2.5rem; font-weight: 700; color: var(--primary); margin-bottom: 5px;">12</div>
            <p style="color: var(--gray); margin-bottom: 0;">Beschikbare opdrachten</p>
          </div>
          
          <div style="background-color: var(--white); border-radius: var(--border-radius); box-shadow: var(--box-shadow); padding: 20px; text-align: center;">
            <div style="font-size: 2.5rem; font-weight: 700; color: var(--secondary); margin-bottom: 5px;">3</div>
            <p style="color: var(--gray); margin-bottom: 0;">Lopende opdrachten</p>
          </div>
          
          <div style="background-color: var(--white); border-radius: var(--border-radius); box-shadow: var(--box-shadow); padding: 20px; text-align: center;">
            <div style="font-size: 2.5rem; font-weight: 700; color: var(--success); margin-bottom: 5px;">28</div>
            <p style="color: var(--gray); margin-bottom: 0;">Voltooide opdrachten</p>
          </div>
          
          <div style="background-color: var(--white); border-radius: var(--border-radius); box-shadow: var(--box-shadow); padding: 20px; text-align: center;">
            <div style="font-size: 2.5rem; font-weight: 700; color: var(--primary); margin-bottom: 5px;">€847</div>
            <p style="color: var(--gray); margin-bottom: 0;">Omzet deze maand</p>
          </div>
        </div>
        
        <!-- Beschikbare opdrachten -->
        <div style="background-color: var(--white); border-radius: var(--border-radius); box-shadow: var(--box-shadow); overflow: hidden; margin-bottom: 30px;">
          <div style="background-color: var(--primary); padding: 15px 20px; color: var(--white); display: flex; justify-content: space-between; align-items: center;">
            <h3 style="margin-bottom: 0;">Beschikbare opdrachten</h3>
            <div>
              <button style="background: none; border: none; color: var(--white); cursor: pointer; font-size: 0.9rem; padding: 5px 10px; border-radius: var(--border-radius);">
                <i class="fas fa-filter"></i> Filter
              </button>
              <button style="background: none; border: none; color: var(--white); cursor: pointer; font-size: 0.9rem; padding: 5px 10px; border-radius: var(--border-radius);">
                <i class="fas fa-sort"></i> Sorteer
              </button>
            </div>
          </div>
          
          <div style="padding: 0;">
            <table style="width: 100%; border-collapse: collapse;">
              <thead>
                <tr style="background-color: #f8f9fa; border-bottom: 1px solid #eee;">
                  <th style="padding: 12px 15px; text-align: left;">Locatie</th>
                  <th style="padding: 12px 15px; text-align: left;">Materiaal</th>
                  <th style="padding: 12px 15px; text-align: left;">Geschatte waarde</th>
                  <th style="padding: 12px 15px; text-align: left;">Datum</th>
                  <th style="padding: 12px 15px; text-align: left;">Afstand</th>
                  <th style="padding: 12px 15px; text-align: center;">Actie</th>
                </tr>
              </thead>
              <tbody>
                <tr style="border-bottom: 1px solid #eee;">
                  <td style="padding: 12px 15px;">Amsterdam, Noord</td>
                  <td style="padding: 12px 15px;">Koper, Aluminium</td>
                  <td style="padding: 12px 15px;">€85 - €120</td>
                  <td style="padding: 12px 15px;">Vandaag</td>
                  <td style="padding: 12px 15px;">12 km</td>
                  <td style="padding: 12px 15px; text-align: center;">
                    <button class="btn" style="padding: 5px 10px; font-size: 0.9rem;">Details</button>
                  </td>
                </tr>
                <tr style="border-bottom: 1px solid #eee;">
                  <td style="padding: 12px 15px;">Haarlem, Centrum</td>
                  <td style="padding: 12px 15px;">Lood, Ijzer</td>
                  <td style="padding: 12px 15px;">€60 - €90</td>
                  <td style="padding: 12px 15px;">Morgen</td>
                  <td style="padding: 12px 15px;">3 km</td>
                  <td style="padding: 12px 15px; text-align: center;">
                    <button class="btn" style="padding: 5px 10px; font-size: 0.9rem;">Details</button>
                  </td>
                </tr>
                <tr style="border-bottom: 1px solid #eee;">
                  <td style="padding: 12px 15px;">Zaandam</td>
                  <td style="padding: 12px 15px;">RVS, Koper</td>
                  <td style="padding: 12px 15px;">€130 - €180</td>
                  <td style="padding: 12px 15px;">Overmorgen</td>
                  <td style="padding: 12px 15px;">18 km</td>
                  <td style="padding: 12px 15px; text-align: center;">
                    <button class="btn" style="padding: 5px 10px; font-size: 0.9rem;">Details</button>
                  </td>
                </tr>
              </tbody>
            </table>
            <div style="padding: 15px; text-align: center;">
              <a href="#" style="color: var(--primary); text-decoration: none; font-weight: 500;">Alle 12 beschikbare opdrachten bekijken</a>
            </div>
          </div>
        </div>
        
        <!-- Lopende opdrachten -->
        <div style="background-color: var(--white); border-radius: var(--border-radius); box-shadow: var(--box-shadow); overflow: hidden;">
          <div style="background-color: var(--secondary); padding: 15px 20px; color: var(--white);">
            <h3 style="margin-bottom: 0;">Mijn lopende opdrachten</h3>
          </div>
          
          <div style="padding: 20px;">
            <div style="border: 1px solid #eee; border-radius: var(--border-radius); overflow: hidden; margin-bottom: 20px;">
              <div style="display: flex; background-color: #f8f9fa; padding: 15px; border-bottom: 1px solid #eee;">
                <div style="flex: 1;">
                  <span style="display: inline-block; padding: 3px 8px; background-color: var(--secondary); color: var(--white); border-radius: 4px; font-size: 0.75rem; font-weight: 500;">IN BEHANDELING</span>
                  <h4 style="margin: 10px 0 5px 0;">Opdracht #MH38291</h4>
                  <p style="color: var(--gray); margin-bottom: 0; font-size: 0.9rem;">Amsterdam, Noord • Gepland voor vandaag</p>
                </div>
                <div style="display: flex; align-items: center;">
                  <button class="btn" style="padding: 8px 12px; margin-right: 10px;">
                    <i class="fas fa-phone"></i> Contact
                  </button>
                  <button class="btn" style="padding: 8px 12px;">
                    <i class="fas fa-check-circle"></i> Voltooid
                  </button>
                </div>
              </div>
              <div style="padding: 15px;">
                <div style="display: flex; flex-wrap: wrap; gap: 20px; margin-bottom: 15px;">
                  <div>
                    <p style="color: var(--gray); margin-bottom: 3px; font-size: 0.85rem;">Materiaal</p>
                    <p style="margin-bottom: 0; font-weight: 500;">Koper, Aluminium</p>
                  </div>
                  <div>
                    <p style="color: var(--gray); margin-bottom: 3px; font-size: 0.85rem;">Geschatte waarde</p>
                    <p style="margin-bottom: 0; font-weight: 500;">€85 - €120</p>
                  </div>
                  <div>
                    <p style="color: var(--gray); margin-bottom: 3px; font-size: 0.85rem;">Commissie</p>
                    <p style="margin-bottom: 0; font-weight: 500;">€15.00</p>
                  </div>
                  <div>
                    <p style="color: var(--gray); margin-bottom: 3px; font-size: 0.85rem;">Geclaimd op</p>
                    <p style="margin-bottom: 0; font-weight: 500;">02-03-2025, 08:24</p>
                  </div>
                  <div>
                    <p style="color: var(--gray); margin-bottom: 3px; font-size: 0.85rem;">Status updaten</p>
                    <select class="form-control" style="padding: 5px 10px; font-size: 0.9rem;">
                      <option>In behandeling</option>
                      <option>Onderweg</option>
                      <option>Opgehaald</option>
                      <option>Voltooid</option>
                    </select>
                  </div>
                </div>
                <p style="font-size: 0.9rem; margin-bottom: 0;">
                  <strong>Opmerking van klant:</strong> Materiaal ligt klaar in de garage. Bij de achteringang aanbellen.
                </p>
              </div>
            </div>

            <div style="border: 1px solid #eee; border-radius: var(--border-radius); overflow: hidden; margin-bottom: 20px;">
              <div style="display: flex; background-color: #f8f9fa; padding: 15px; border-bottom: 1px solid #eee;">
                <div style="flex: 1;">
                  <span style="display: inline-block; padding: 3px 8px; background-color: #6c757d; color: var(--white); border-radius: 4px; font-size: 0.75rem; font-weight: 500;">INGEPLAND</span>
                  <h4 style="margin: 10px 0 5px 0;">Opdracht #MH38305</h4>
                  <p style="color: var(--gray); margin-bottom: 0; font-size: 0.9rem;">Haarlem, Centrum • Gepland voor morgen, 10:00</p>
                </div>
                <div style="display: flex; align-items: center;">
                  <button class="btn" style="padding: 8px 12px; margin-right: 10px;">
                    <i class="fas fa-phone"></i> Contact
                  </button>
                  <button class="btn" style="padding: 8px 12px;">
                    <i class="fas fa-check-circle"></i> Voltooid
                  </button>
                </div>
              </div>
              <div style="padding: 15px;">
                <div style="display: flex; flex-wrap: wrap; gap: 20px; margin-bottom: 15px;">
                  <div>
                    <p style="color: var(--gray); margin-bottom: 3px; font-size: 0.85rem;">Materiaal</p>
                    <p style="margin-bottom: 0; font-weight: 500;">Lood, Ijzer</p>
                  </div>
                  <div>
                    <p style="color: var(--gray); margin-bottom: 3px; font-size: 0.85rem;">Geschatte waarde</p>
                    <p style="margin-bottom: 0; font-weight: 500;">€60 - €90</p>
                  </div>
                  <div>
                    <p style="color: var(--gray); margin-bottom: 3px; font-size: 0.85rem;">Commissie</p>
                    <p style="margin-bottom: 0; font-weight: 500;">€11.25</p>
                  </div>
                  <div>
                    <p style="color: var(--gray); margin-bottom: 3px; font-size: 0.85rem;">Geclaimd op</p>
                    <p style="margin-bottom: 0; font-weight: 500;">02-03-2025, 15:47</p>
                  </div>
                  <div>
                    <p style="color: var(--gray); margin-bottom: 3px; font-size: 0.85rem;">Status updaten</p>
                    <select class="form-control" style="padding: 5px 10px; font-size: 0.9rem;">
                      <option>Ingepland</option>
                      <option>In behandeling</option>
                      <option>Onderweg</option>
                      <option>Opgehaald</option>
                      <option>Voltooid</option>
                    </select>
                  </div>
                </div>
                <p style="font-size: 0.9rem; margin-bottom: 0;">
                  <strong>Opmerking van klant:</strong> Let op: beperkte parkeerruimte in de straat. Materiaal staat op de 1e verdieping.
                </p>
              </div>
            </div>

            <div style="border: 1px solid #eee; border-radius: var(--border-radius); overflow: hidden; margin-bottom: 0;">
              <div style="display: flex; background-color: #f8f9fa; padding: 15px; border-bottom: 1px solid #eee;">
                <div style="flex: 1;">
                  <span style="display: inline-block; padding: 3px 8px; background-color: #17a2b8; color: var(--white); border-radius: 4px; font-size: 0.75rem; font-weight: 500;">ONDERWEG</span>
                  <h4 style="margin: 10px 0 5px 0;">Opdracht #MH38267</h4>
                  <p style="color: var(--gray); margin-bottom: 0; font-size: 0.9rem;">Zaandam • Nu</p>
                </div>
                <div style="display: flex; align-items: center;">
                  <button class="btn" style="padding: 8px 12px; margin-right: 10px;">
                    <i class="fas fa-phone"></i> Contact
                  </button>
                  <button class="btn" style="padding: 8px 12px;">
                    <i class="fas fa-check-circle"></i> Voltooid
                  </button>
                </div>
              </div>
              <div style="padding: 15px;">
                <div style="display: flex; flex-wrap: wrap; gap: 20px; margin-bottom: 15px;">
                  <div>
                    <p style="color: var(--gray); margin-bottom: 3px; font-size: 0.85rem;">Materiaal</p>
                    <p style="margin-bottom: 0; font-weight: 500;">RVS, Koper</p>
                  </div>
                  <div>
                    <p style="color: var(--gray); margin-bottom: 3px; font-size: 0.85rem;">Geschatte waarde</p>
                    <p style="margin-bottom: 0; font-weight: 500;">€130 - €180</p>
                  </div>
                  <div>
                    <p style="color: var(--gray); margin-bottom: 3px; font-size: 0.85rem;">Commissie</p>
                    <p style="margin-bottom: 0; font-weight: 500;">€23.25</p>
                  </div>
                  <div>
                    <p style="color: var(--gray); margin-bottom: 3px; font-size: 0.85rem;">Geclaimd op</p>
                    <p style="margin-bottom: 0; font-weight: 500;">01-03-2025, 16:08</p>
                  </div>
                  <div>
                    <p style="color: var(--gray); margin-bottom: 3px; font-size: 0.85rem;">Status updaten</p>
                    <select class="form-control" style="padding: 5px 10px; font-size: 0.9rem;">
                      <option>Onderweg</option>
                      <option>Opgehaald</option>
                      <option>Voltooid</option>
                    </select>
                  </div>
                </div>
                <p style="font-size: 0.9rem; margin-bottom: 0;">
                  <strong>Opmerking van klant:</strong> Materiaal ligt buiten onder een zeil. Graag even 10 minuten van tevoren bellen.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
function refreshDashboard() {
  // In een echte applicatie zou dit een AJAX-verzoek doen om de gegevens op te halen
  const now = new Date();
  const hours = now.getHours().toString().padStart(2, '0');
  const minutes = now.getMinutes().toString().padStart(2, '0');
  
  document.getElementById('last-updated').textContent = `vandaag, ${hours}:${minutes}`;
  
  // Simuleer een laadanimatie
  const btn = event.currentTarget;
  const originalHtml = btn.innerHTML;
  btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Vernieuwen';
  btn.disabled = true;
  
  setTimeout(() => {
    btn.innerHTML = originalHtml;
    btn.disabled = false;
    // Voeg een melding toe dat het dashboard is vernieuwd
    const messageDiv = document.createElement('div');
    messageDiv.style.position = 'fixed';
    messageDiv.style.top = '20px';
    messageDiv.style.right = '20px';
    messageDiv.style.padding = '15px 20px';
    messageDiv.style.backgroundColor = 'var(--success)';
    messageDiv.style.color = 'white';
    messageDiv.style.borderRadius = 'var(--border-radius)';
    messageDiv.style.boxShadow = 'var(--box-shadow)';
    messageDiv.style.zIndex = '9999';
    messageDiv.innerHTML = '<i class="fas fa-check-circle"></i> Dashboard bijgewerkt';
    document.body.appendChild(messageDiv);
    
    setTimeout(() => {
      messageDiv.style.opacity = '0';
      messageDiv.style.transition = 'opacity 0.5s ease';
      setTimeout(() => document.body.removeChild(messageDiv), 500);
    }, 3000);
  }, 1000);
}
</script>

<?php include('footer.php'); ?>
