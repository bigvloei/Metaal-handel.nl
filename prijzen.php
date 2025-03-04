<?php
$page_title = "Actuele Dagprijzen voor Oud IJzer en Metalen";
include('header.php');
?>

<section class="hero" style="min-height: 40vh; background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('img/hero-prijzen.jpg') center/cover no-repeat;">
  <div class="container">
    <div class="hero-content">
      <h1 class="hero-title">Actuele Dagprijzen</h1>
      <p class="hero-subtitle">Bekijk de huidige marktprijzen voor verschillende metaalsoorten</p>
    </div>
  </div>
</section>

<section class="section section-light">
  <div class="container">
    <div class="section-title">
      <h2>Metaalprijzen</h2>
      <p>Prijzen per kilogram in euro's, inclusief BTW</p>
    </div>
    
    <div style="max-width: 900px; margin: 0 auto;">
      <div style="background-color: var(--primary-light); padding: 20px; border-radius: var(--border-radius); color: var(--white); margin-bottom: 30px;">
        <p style="margin-bottom: 0; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap;">
          <span><i class="fas fa-info-circle"></i> Laatst bijgewerkt: <?php echo date("d-m-Y H:i"); ?></span>
          <span><i class="fas fa-sync-alt"></i> Prijzen worden dagelijks geactualiseerd</span>
        </p>
      </div>
      
      <h3 style="color: var(--primary); margin-bottom: 20px;">Ferro metalen (ijzerhoudend)</h3>
      <div style="overflow-x: auto; margin-bottom: 40px;">
        <table class="price-table">
          <thead>
            <tr>
              <th>Materiaal</th>
              <th>Prijs per kg</th>
              <th>Trend</th>
              <th>Beschrijving</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Oud IJzer</td>
              <td>€0,20 - €0,30</td>
              <td><i class="fas fa-arrow-up" style="color: #27ae60;"></i> Stijgend</td>
              <td>Algemeen schroot, autobumpers, constructieijzer, etc.</td>
            </tr>
            <tr>
              <td>Geperst Ijzer</td>
              <td>€0,25 - €0,35</td>
              <td><i class="fas fa-arrow-up" style="color: #27ae60;"></i> Stijgend</td>
              <td>Geperst schroot zoals auto's, machines</td>
            </tr>
            <tr>
              <td>Gietijzer</td>
              <td>€0,25 - €0,40</td>
              <td><i class="fas fa-arrows-alt-h" style="color: #f39c12;"></i> Stabiel</td>
              <td>Radiatoren, gietijzeren potten, putdeksels</td>
            </tr>
            <tr>
              <td>RVS 304</td>
              <td>€1,20 - €1,80</td>
              <td><i class="fas fa-arrows-alt-h" style="color: #f39c12;"></i> Stabiel</td>
              <td>Roestvrijstaal 18/8, keukengerei, werkbladen</td>
            </tr>
            <tr>
              <td>RVS 316</td>
              <td>€1,60 - €2,20</td>
              <td><i class="fas fa-arrow-up" style="color: #27ae60;"></i> Stijgend</td>
              <td>Zeewater bestendig RVS, boten, chemische apparatuur</td>
            </tr>
          </tbody>
        </table>
      </div>
      
      <h3 style="color: var(--primary); margin-bottom: 20px;">Non-Ferro metalen (niet-ijzerhoudend)</h3>
      <div style="overflow-x: auto; margin-bottom: 40px;">
        <table class="price-table">
          <thead>
            <tr>
              <th>Materiaal</th>
              <th>Prijs per kg</th>
              <th>Trend</th>
              <th>Beschrijving</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Koper</td>
              <td>€5,50 - €7,00</td>
              <td><i class="fas fa-arrow-up" style="color: #27ae60;"></i> Stijgend</td>
              <td>100% zuiver koper, leidingen, draden zonder isolatie</td>
            </tr>
            <tr>
              <td>Messing</td>
              <td>€3,80 - €4,80</td>
              <td><i class="fas fa-arrow-up" style="color: #27ae60;"></i> Stijgend</td>
              <td>Kranen, fitting, koppelingen, muziekinstrumenten</td>
            </tr>
            <tr>
              <td>Aluminium</td>
              <td>€0,80 - €1,80</td>
              <td><i class="fas fa-arrow-down" style="color: #e74c3c;"></i> Dalend</td>
              <td>Profielen, velgen, plaatwerk, kozijnen</td>
            </tr>
            <tr>
              <td>Lood</td>
              <td>€1,30 - €1,80</td>
              <td><i class="fas fa-arrows-alt-h" style="color: #f39c12;"></i> Stabiel</td>
              <td>Dakbedekking, oude waterleidingen, gewichten</td>
            </tr>
            <tr>
              <td>Zink</td>
              <td>€1,20 - €1,70</td>
              <td><i class="fas fa-arrows-alt-h" style="color: #f39c12;"></i> Stabiel</td>
              <td>Dakgoten, regenpijpen, gevelbekleding</td>
            </tr>
          </tbody>
        </table>
      </div>
      
      <h3 style="color: var(--primary); margin-bottom: 20px;">Elektronica en batterijen</h3>
      <div style="overflow-x: auto; margin-bottom: 40px;">
        <table class="price-table">
          <thead>
            <tr>
              <th>Materiaal</th>
              <th>Prijs per kg</th>
              <th>Trend</th>
              <th>Beschrijving</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Kabels met koper</td>
              <td>€1,20 - €3,50</td>
              <td><i class="fas fa-arrow-up" style="color: #27ae60;"></i> Stijgend</td>
              <td>Elektriciteitskabels met koperen kern en isolatie</td>
            </tr>
            <tr>
              <td>Printplaten</td>
              <td>€3,00 - €15,00</td>
              <td><i class="fas fa-arrows-alt-h" style="color: #f39c12;"></i> Stabiel</td>
              <td>Computermoederborden, grafische kaarten, servers</td>
            </tr>
            <tr>
              <td>Elektromotoren</td>
              <td>€0,80 - €1,50</td>
              <td><i class="fas fa-arrows-alt-h" style="color: #f39c12;"></i> Stabiel</td>
              <td>Elektromotoren uit apparaten en machines</td>
            </tr>
            <tr>
              <td>Accu's</td>
              <td>€0,50 - €0,70</td>
              <td><i class="fas fa-arrow-down" style="color: #e74c3c;"></i> Dalend</td>
              <td>Auto- en motoraccu's, loodzuur batterijen</td>
            </tr>
          </tbody>
        </table>
      </div>
      
      <h3 style="color: var(--primary); margin-bottom: 20px;">Apparaten en systemen</h3>
      <div style="overflow-x: auto;">
        <table class="price-table">
          <thead>
            <tr>
              <th>Materiaal</th>
              <th>Gemiddelde prijs</th>
              <th>Trend</th>
              <th>Beschrijving</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>CV ketels</td>
              <td>€20 - €50 per stuk</td>
              <td><i class="fas fa-arrows-alt-h" style="color: #f39c12;"></i> Stabiel</td>
              <td>Complete CV ketels inclusief koperen onderdelen</td>
            </tr>
            <tr>
              <td>Wasmachines</td>
              <td>€5 - €15 per stuk</td>
              <td><i class="fas fa-arrows-alt-h" style="color: #f39c12;"></i> Stabiel</td>
              <td>Complete wasmachines en wasdrogers</td>
            </tr>
            <tr>
              <td>Koelkasten</td>
              <td>€5 - €15 per stuk</td>
              <td><i class="fas fa-arrows-alt-h" style="color: #f39c12;"></i> Stabiel</td>
              <td>Complete koelkasten en vriezers</td>
            </tr>
          </tbody>
        </table>
      </div>
      
      <div style="background-color: #f8f9fa; padding: 30px; border-radius: var(--border-radius); margin-top: 40px; border-left: 5px solid var(--secondary);">
        <h4 style="color: var(--primary); margin-bottom: 15px;">Belangrijk om te weten:</h4>
        <ul style="color: var(--gray); padding-left: 20px;">
          <li style="margin-bottom: 10px;">Prijzen zijn indicatief en kunnen variëren per handelaar</li>
          <li style="margin-bottom: 10px;">De daadwerkelijke prijs hangt af van de kwaliteit en zuiverheid van het materiaal</li>
          <li style="margin-bottom: 10px;">Bij grotere hoeveelheden kan een hogere prijs worden geboden</li>
          <li style="margin-bottom: 0;">De actuele dagprijs wordt bepaald op het moment van ophaling</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="section section-dark">
  <div class="container">
    <div style="max-width: 800px; margin: 0 auto; text-align: center;">
      <h2 style="color: var(--primary); margin-bottom: 20px;">Wilt u de hoogste prijs voor uw metalen?</h2>
      <p style="color: var(--gray); margin-bottom: 30px;">
        Plaats een opdracht op ons platform en laat handelaren met elkaar concurreren. Zo krijgt u altijd de beste marktprijs voor uw materialen.
      </p>
      <a href="opdracht-plaatsen.php" class="btn btn-lg">Opdracht plaatsen</a>
    </div>
  </div>
</section>

<?php include('footer.php'); ?>
