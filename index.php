<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta
        name="description"
        content="Informatička sigurnost - zaštita vaših podataka, sustava i poslovanja."
    >

    <title>CyberSecure | Informatička sigurnost</title>

    <link rel="stylesheet" href="stil.css">
</head>

<body>

    <?php
    include "zaglavlje.php";
    ?>
    <main>

        <!-- HERO -->

        <section class="hero">
            <div class="container hero-content">

                <div class="hero-text">
                    <p class="eyebrow">INFORMATIČKA SIGURNOST</p>

                    <h1>
                        Zaštitite svoje podatke.
                        <span>Zaštitite svoje poslovanje.</span>
                    </h1>

                    <p>
                        Pomažemo tvrtkama zaštititi podatke, sustave
                        i korisnike od modernih kibernetičkih prijetnji.
                    </p>

                    <div class="hero-buttons">
                        <a href="#services" class="btn btn-primary">
                            Naše usluge
                        </a>

                        <a href="#contact" class="btn btn-secondary">
                            Kontaktirajte nas
                        </a>
                    </div>
                </div>

                <div class="security-card">
                    <div class="shield-icon">🛡️</div>

                    <h2>Vaša sigurnost</h2>

                    <p>
                        Sigurnost nije opcija — ona je temelj
                        modernog poslovanja.
                    </p>
                </div>

            </div>
        </section>


        <!-- O NAMA -->

        <section id="about" class="section">
            <div class="container">

                <p class="section-label">O NAMA</p>

                <h2 class="section-title">
                    Sigurnost na prvom mjestu
                </h2>

                <p class="section-description">
                    Naša firma specijalizirana je za informatičku
                    sigurnost. Naša misija je zaštititi vaše podatke,
                    sustave i poslovanje od kibernetičkih prijetnji.
                </p>

                <div class="stats">

                    <div class="stat">
                        <strong>24/7</strong>
                        <span>Nadzor sigurnosti</span>
                    </div>

                    <div class="stat">
                        <strong>100%</strong>
                        <span>Predanost sigurnosti</span>
                    </div>

                    <div class="stat">
                        <strong>10+</strong>
                        <span>Godina iskustva</span>
                    </div>

                </div>

            </div>
        </section>


        <!-- USLUGE -->

        <section id="services" class="section section-dark">

            <div class="container">

                <p class="section-label">USLUGE</p>

                <h2 class="section-title">
                    Kako vam možemo pomoći?
                </h2>

                <div class="services-grid">

                    <article class="service-card">

                        <div class="service-icon">🔐</div>

                        <h3>Sigurnosna edukacija</h3>

                        <p>
                            Edukacija zaposlenika o phishingu,
                            lozinkama, društvenom inženjeringu
                            i sigurnom ponašanju na internetu.
                        </p>

                        <strong>50 € / sat</strong>

                    </article>


                    <article class="service-card">

                        <div class="service-icon">🛡️</div>

                        <h3>Sigurnosna procjena</h3>

                        <p>
                            Analiziramo vaše sustave i identificiramo
                            potencijalne sigurnosne propuste.
                        </p>

                        <strong>Od 300 €</strong>

                    </article>


                    <article class="service-card">

                        <div class="service-icon">🚨</div>

                        <h3>Incident response</h3>

                        <p>
                            Pomažemo organizacijama reagirati na
                            sigurnosne incidente i smanjiti štetu.
                        </p>

                        <strong>Po dogovoru</strong>

                    </article>

                </div>

            </div>

        </section>


        <!-- NOVOSTI -->

        <section id="news" class="section">

            <div class="container">

                <p class="section-label">NOVOSTI</p>

                <h2 class="section-title">
                    Najnovije iz svijeta sigurnosti
                </h2>

                <div id="articles" class="articles-grid">

                    <article class="article-card">

                        <span class="article-date">
                            08.09.2026.
                        </span>

                        <h3>
                            Kako prepoznati phishing napad?
                        </h3>

                        <p>
                            Naučite prepoznati najčešće znakove
                            phishing poruka i zaštititi svoje podatke.
                        </p>

                        <a href="#">
                            Pročitaj više →
                        </a>

                    </article>


                    <article class="article-card">

                        <span class="article-date">
                            05.09.2026.
                        </span>

                        <h3>
                            Zašto je jaka lozinka važna?
                        </h3>

                        <p>
                            Nekoliko jednostavnih pravila može
                            značajno povećati sigurnost vaših računa.
                        </p>

                        <a href="#">
                            Pročitaj više →
                        </a>

                    </article>

                </div>

            </div>

        </section>


        <!-- KONTAKT -->

        <section id="contact" class="section contact-section">

            <div class="container contact-container">

                <div class="contact-info">

                    <p class="section-label">KONTAKT</p>

                    <h2 class="section-title">
                        Razgovarajmo o vašoj sigurnosti.
                    </h2>

                    <p>
                        Imate pitanje ili želite saznati više
                        o našim uslugama? Javite nam se.
                    </p>

                    <p>
                        📧 info@firma.com
                    </p>

                    <p>
                        📞 +385 1 1234 567
                    </p>

                </div>


                <form action="https://formspree.io/f/mkjovled"
                method="POST" id="contactForm" class="contact-form">

                    <div class="form-group">
                        <label for="name">Ime i prezime</label>

                        <input
                            type="text"
                            id="name"
                            name="name"
                            placeholder="Vaše ime"
                            required
                        >
                    </div>


                    <div class="form-group">
                        <label for="email">Email</label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="vas@email.com"
                            required
                        >
                    </div>


                    <div class="form-group">
                        <label for="phone">Broj telefona</label>

                        <input
                            type="tel"
                            id="phone"
                            name="phone"
                            placeholder="+385..."
                        >
                    </div>


                    <div class="form-group">
                        <label for="message">Poruka</label>

                        <textarea
                            id="message"
                            name="message"
                            rows="5"
                            placeholder="Kako vam možemo pomoći?"
                            required
                        ></textarea>
                    </div>


                    <button type="submit" class="btn btn-primary">
                        Pošalji poruku
                    </button>

                </form>

            </div>

        </section>

    </main>


    <!-- FOOTER -->

    <footer class="footer">

        <div class="container footer-content">

            <div>
                <h3>CyberSecure</h3>

                <p>
                    Sigurnost vaših podataka naša je odgovornost.
                </p>
            </div>

            <div>
                <p>
                    📧 info@firma.com
                </p>

                <p>
                    © 2026 CyberSecure
                </p>
            </div>

        </div>

    </footer>


    <script src="script.js"></script>

</body>
</html>