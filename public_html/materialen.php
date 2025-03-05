<?php
// Pagina titel instellen
$pageTitle = "Materialen | Metaal-handel.nl - Uw betrouwbare partner in metaalhandel";
include_once("header.php");
?>

<main class="materials-page">
    <section class="hero-section">
        <div class="container">
            <h1>Onze Materialen</h1>
            <p class="subtitle">Kwaliteitsmetalen voor elke toepassing</p>
        </div>
    </section>

    <section class="materials-overview">
        <div class="container">
            <div class="intro-text">
                <h2>Hoogwaardige metalen en legeringen</h2>
                <p>Bij Metaal-handel.nl bieden wij een uitgebreid assortiment aan metalen en legeringen voor verschillende industriële toepassingen. Of u nu op zoek bent naar constructiestaal, aluminium profielen of speciale legeringen, wij leveren materialen van de hoogste kwaliteit tegen concurrerende prijzen.</p>
            </div>

            <div class="materials-grid">
                <?php
                // Array met materialen en hun eigenschappen
                $materials = [
                    [
                        "name" => "Constructiestaal",
                        "image" => "images/materials/construction-steel.jpg",
                        "description" => "Sterk en veelzijdig staal voor constructiewerk en bouwprojecten.",
                        "properties" => [
                            "Hoge treksterkte",
                            "Goede lasbaarheid",
                            "Kosteneffectief",
                            "Verkrijgbaar in verschillende profielen"
                        ],
                        "applications" => "Constructie, bouw, bruggen, gebouwen"
                    ],
                    [
                        "name" => "Roestvrijstaal (RVS)",
                        "image" => "images/materials/stainless-steel.jpg",
                        "description" => "Corrosiebestendig staal met uitstekende duurzaamheid en esthetische kwaliteiten.",
                        "properties" => [
                            "Uitstekende corrosiebestendigheid",
                            "Hygiënisch oppervlak",
                            "Temperatuurbestendig",
                            "Minimaal onderhoud nodig"
                        ],
                        "applications" => "Voedselindustrie, architectuur, medische apparatuur, keukens"
                    ],
                    [
                        "name" => "Aluminium",
                        "image" => "images/materials/aluminum.jpg",
                        "description" => "Lichtgewicht en corrosiebestendig metaal met uitstekende bewerkbaarheid.",
                        "properties" => [
                            "Laag gewicht",
                            "Goede corrosiebestendigheid",
                            "Uitstekende thermische geleiding",
                            "Gemakkelijk te bewerken"
                        ],
                        "applications" => "Transport, verpakking, kozijnen, gevelbekleding"
                    ],
                    [
                        "name" => "Koper",
                        "image" => "images/materials/copper.jpg",
                        "description" => "Uitstekend geleidend metaal met antimicrobiële eigenschappen.",
                        "properties" => [
                            "Superieure elektrische geleiding",
                            "Goede thermische geleiding",
                            "Antimicrobiële eigenschappen",
                            "Corrosiebestendig"
                        ],
                        "applications" => "Elektrische bedrading, leidingen, decoratieve toepassingen"
                    ],
                    [
                        "name" => "Messing",
                        "image" => "images/materials/brass.jpg",
                        "description" => "Legering van koper en zink met goede bewerkbaarheid en decoratieve kwaliteiten.",
                        "properties" => [
                            "Goede corrosiebestendigheid",
                            "Uitstekende bewerkbaarheid",
                            "Aantrekkelijk uiterlijk",
                            "Goede elektrische geleiding"
                        ],
                        "applications" => "Decoratieve elementen, muziekinstrumenten, loodgieterswerk"
                    ],
                    [
                        "name" => "Cortenstaal",
                        "image" => "images/materials/corten-steel.jpg",
                        "description" => "Weerbestendig staal dat een beschermende roestlaag ontwikkelt.",
                        "properties" => [
                            "Zelfbeschermende roestlaag",
                            "Minimaal onderhoud nodig",
                            "Lange levensduur",
                            "Uniek esthetisch uiterlijk"
                        ],
                        "applications" => "Buitenarchitectuur, tuinelementen, gevelbekleding, kunstwerken"
                    ]
                ];

                // Materialen weergeven
                foreach ($materials as $material) {
                    echo '<div class="material-card">';
                    echo '<div class="material-image">';
                    echo '<img src="' . $material["image"] . '" alt="' . $material["name"] . '" onerror="this.src=\'images/placeholder.jpg\';">';
                    echo '</div>';
                    echo '<div class="material-info">';
                    echo '<h3>' . $material["name"] . '</h3>';
                    echo '<p>' . $material["description"] . '</p>';
                    echo '<h4>Eigenschappen:</h4>';
                    echo '<ul>';
                    foreach ($material["properties"] as $property) {
                        echo '<li>' . $property . '</li>';
                    }
                    echo '</ul>';
                    echo '<h4>Toepassingen:</h4>';
                    echo '<p>' . $material["applications"] . '</p>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </section>

    <section class="custom-materials">
        <div class="container">
            <h2>Op maat gemaakte oplossingen</h2>
            <p>Naast ons standaard assortiment bieden wij ook op maat gemaakte oplossingen voor specifieke projecten. Neem contact met ons op om te bespreken hoe wij u kunnen helpen met uw specifieke materiaalbehoeften.</p>
            <a href="contact.php" class="btn btn-primary">Neem contact op</a>
        </div>
    </section>

    <section class="material-services">
        <div class="container">
            <h2>Onze diensten</h2>
            <div class="services-grid">
                <div class="service-item">
                    <i class="fas fa-cut"></i>
                    <h3>Op maat snijden</h3>
                    <p>Wij kunnen materialen op maat snijden volgens uw specificaties.</p>
                </div>
                <div class="service-item">
                    <i class="fas fa-truck"></i>
                    <h3>Snelle levering</h3>
                    <p>Levering door heel Nederland, vaak binnen 24-48 uur.</p>
                </div>
                <div class="service-item">
                    <i class="fas fa-tools"></i>
                    <h3>Bewerking</h3>
                    <p>Diverse bewerkingsmogelijkheden zoals boren, tappen en lassen.</p>
                </div>
                <div class="service-item">
                    <i class="fas fa-recycle"></i>
                    <h3>Recycling</h3>
                    <p>Wij kopen ook uw overtollige metalen in voor recycling.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <h2>Vraag een offerte aan</h2>
            <p>Bent u geïnteresseerd in onze materialen? Vraag vrijblijvend een offerte aan of neem contact met ons op voor meer informatie.</p>
            <div class="cta-buttons">
                <a href="offerte.php" class="btn btn-primary">Offerte aanvragen</a>
                <a href="contact.php" class="btn btn-secondary">Contact opnemen</a>
            </div>
        </div>
    </section>
</main>

<?php
// Voeg hier eventueel CSS toe specifiek voor deze pagina
?>
<style>
    .materials-page {
        padding-bottom: 60px;
    }
    
    .hero-section {
        background-color: #1a3c5e;
        color: white;
        padding: 60px 0;
        text-align: center;
        margin-bottom: 40px;
    }
    
    .hero-section h1 {
        font-size: 2.5rem;
        margin-bottom: 10px;
    }
    
    .hero-section .subtitle {
        font-size: 1.2rem;
        opacity: 0.9;
    }
    
    .intro-text {
        text-align: center;
        max-width: 800px;
        margin: 0 auto 40px;
    }
    
    .materials-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 30px;
        margin-bottom: 50px;
    }
    
    .material-card {
        border: 1px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .material-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    
    .material-image {
        height: 200px;
        overflow: hidden;
    }
    
    .material-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    
    .material-info {
        padding: 20px;
    }
    
    .material-info h3 {
        margin-top: 0;
        color: #1a3c5e;
        margin-bottom: 10px;
    }
    
    .material-info h4 {
        margin: 15px 0 5px;
        font-size: 1rem;
        color: #444;
    }
    
    .material-info ul {
        margin: 0 0 15px;
        padding-left: 20px;
    }
    
    .custom-materials {
        background-color: #f5f5f5;
        padding: 50px 0;
        text-align: center;
        margin: 40px 0;
    }
    
    .custom-materials .container {
        max-width: 800px;
    }
    
    .services-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
        gap: 30px;
        margin-top: 30px;
    }
    
    .service-item {
        text-align: center;
        padding: 20px;
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }
    
    .service-item i {
        font-size: 2rem;
        color: #1a3c5e;
        margin-bottom: 15px;
    }
    
    .cta-section {
        background-color: #1a3c5e;
        color: white;
        padding: 50px 0;
        text-align: center;
        margin-top: 40px;
    }
    
    .cta-buttons {
        margin-top: 20px;
    }
    
    .btn {
        display: inline-block;
        padding: 10px 20px;
        margin: 0 10px;
        border-radius: 5px;
        text-decoration: none;
        font-weight: bold;
        transition: background-color 0.3s;
    }
    
    .btn-primary {
        background-color: #f39c12;
        color: white;
    }
    
    .btn-primary:hover {
        background-color: #e67e22;
    }
    
    .btn-secondary {
        background-color: transparent;
        color: white;
        border: 2px solid white;
    }
    
    .btn-secondary:hover {
        background-color: rgba(255,255,255,0.1);
    }
    
    /* Responsive aanpassingen */
    @media (max-width: 768px) {
        .materials-grid {
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        }
        
        .services-grid {
            grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
        }
        
        .hero-section {
            padding: 40px 0;
        }
        
        .hero-section h1 {
            font-size: 2rem;
        }
    }
    
    @media (max-width: 480px) {
        .materials-grid {
            grid-template-columns: 1fr;
        }
        
        .services-grid {
            grid-template-columns: 1fr;
        }
        
        .cta-buttons .btn {
            display: block;
            margin: 10px auto;
            max-width: 200px;
        }
    }
</style>

<?php include_once("footer.php"); ?>
