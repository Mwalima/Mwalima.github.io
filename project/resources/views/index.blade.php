<!doctype html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Web Wonder Woman maakt heldere, krachtige websites voor ondernemers die online willen opvallen.">
    <meta name="theme-color" content="#fff20a">
    <title>Web Wonder Woman — Websites met superkracht</title>
    <style>
        :root { --ink:#171717; --muted:#686868; --yellow:#fff20a; --red:#ef1838; --blue:#0877f9; --cream:#fffdf2; --line:#e8e4d6; --white:#fff; --radius:24px; }
        * { box-sizing:border-box; }
        html { scroll-behavior:smooth; }
        body { margin:0; color:var(--ink); background:var(--cream); font-family:Inter,ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI",sans-serif; line-height:1.6; }
        a { color:inherit; }
        img { display:block; max-width:100%; }
        .container { width:min(1120px,calc(100% - 40px)); margin:0 auto; }
        .skip-link { position:fixed; left:16px; top:-60px; z-index:20; background:var(--ink); color:#fff; padding:10px 16px; }
        .skip-link:focus { top:12px; }
        .site-header { position:sticky; top:0; z-index:10; background:rgba(255,253,242,.9); backdrop-filter:blur(14px); border-bottom:1px solid rgba(23,23,23,.08); }
        .nav { min-height:82px; display:flex; align-items:center; justify-content:space-between; gap:28px; }
        .brand { display:flex; align-items:center; gap:12px; text-decoration:none; font-weight:900; letter-spacing:-.04em; font-size:1.18rem; }
        .brand img { width:54px; height:54px; object-fit:contain; }
        .nav-links { display:flex; align-items:center; gap:28px; }
        .nav-links a { text-decoration:none; font-weight:700; font-size:.95rem; }
        .nav-links a:hover { color:var(--red); }
        .button { display:inline-flex; align-items:center; justify-content:center; gap:9px; min-height:52px; padding:0 24px; border:2px solid var(--ink); border-radius:999px; background:var(--red); color:var(--white); text-decoration:none; font-weight:900; box-shadow:4px 4px 0 var(--ink); transition:transform .16s,box-shadow .16s; }
        .button:hover { transform:translate(2px,2px); box-shadow:2px 2px 0 var(--ink); }
        .button--light { background:var(--white); color:var(--ink); }
        .button--small { min-height:42px; padding:0 18px; box-shadow:none; }
        .hero { position:relative; overflow:hidden; padding:88px 0 104px; }
        .hero::before { content:""; position:absolute; width:460px; height:460px; right:-130px; top:-190px; border-radius:50%; background:var(--yellow); opacity:.55; }
        .hero-grid { position:relative; display:grid; grid-template-columns:1.12fr .88fr; gap:70px; align-items:center; }
        .eyebrow { display:inline-flex; align-items:center; gap:9px; margin:0 0 22px; padding:7px 12px; border:1px solid var(--ink); border-radius:999px; background:var(--yellow); font-size:.78rem; font-weight:900; text-transform:uppercase; letter-spacing:.1em; }
        h1,h2,h3,p { margin-top:0; }
        h1 { max-width:760px; margin-bottom:24px; font-size:clamp(3.3rem,7.2vw,6.8rem); line-height:.91; letter-spacing:-.075em; }
        h1 span { position:relative; z-index:0; white-space:nowrap; }
        h1 span::after { content:""; position:absolute; z-index:-1; left:-.02em; right:-.06em; bottom:.06em; height:.22em; background:var(--yellow); transform:rotate(-1.5deg); }
        .hero-copy>p { max-width:630px; margin-bottom:34px; color:#454545; font-size:clamp(1.08rem,2vw,1.3rem); }
        .hero-actions { display:flex; align-items:center; flex-wrap:wrap; gap:18px; }
        .text-link { font-weight:900; text-underline-offset:5px; }
        .hero-card { position:relative; min-height:470px; display:grid; place-items:center; padding:44px; border:2px solid var(--ink); border-radius:44% 56% 52% 48%/52% 40% 60% 48%; background:var(--yellow); box-shadow:14px 14px 0 var(--ink); transform:rotate(2deg); }
        .hero-card::after { content:"POW!"; position:absolute; right:-24px; bottom:30px; padding:8px 16px; border:2px solid var(--ink); background:var(--blue); color:#fff; font-weight:1000; font-size:1.45rem; transform:rotate(-8deg); box-shadow:5px 5px 0 var(--ink); }
        .hero-card img { width:min(100%,370px); filter:drop-shadow(0 14px 0 rgba(0,0,0,.08)); transform:rotate(-2deg); }
        .trust-bar { border-block:2px solid var(--ink); background:var(--ink); color:white; }
        .trust-list { display:grid; grid-template-columns:repeat(3,1fr); margin:0; padding:19px 0; list-style:none; text-align:center; font-weight:800; }
        .trust-list li+li { border-left:1px solid #555; }
        .trust-list b { color:var(--yellow); }
        section { padding:110px 0; }
        .section-head { display:flex; align-items:end; justify-content:space-between; gap:40px; margin-bottom:48px; }
        .section-head h2 { max-width:650px; margin-bottom:0; font-size:clamp(2.5rem,5vw,4.8rem); line-height:.98; letter-spacing:-.06em; }
        .section-head p { max-width:410px; margin-bottom:4px; color:var(--muted); font-size:1.05rem; }
        .services { background:var(--white); }
        .card-grid { display:grid; grid-template-columns:repeat(3,1fr); gap:22px; }
        .service-card { min-height:310px; padding:30px; border:2px solid var(--ink); border-radius:var(--radius); background:var(--cream); box-shadow:7px 7px 0 var(--ink); }
        .service-card:nth-child(2) { background:var(--yellow); }
        .service-card:nth-child(3) { background:#eaf3ff; }
        .card-number { width:44px; height:44px; display:grid; place-items:center; margin-bottom:54px; border:2px solid var(--ink); border-radius:50%; background:var(--white); font-weight:1000; }
        .service-card h3 { margin-bottom:12px; font-size:1.55rem; letter-spacing:-.035em; }
        .service-card p { margin-bottom:0; color:#555; }
        .process-grid { display:grid; grid-template-columns:.8fr 1.2fr; gap:80px; align-items:start; }
        .process-intro { position:sticky; top:130px; }
        .process-intro h2 { margin-bottom:25px; font-size:clamp(2.5rem,5vw,4.8rem); line-height:.97; letter-spacing:-.06em; }
        .steps { border-top:2px solid var(--ink); }
        .step { display:grid; grid-template-columns:70px 1fr; gap:18px; padding:30px 0; border-bottom:2px solid var(--ink); }
        .step strong { color:var(--red); font-size:1.05rem; }
        .step h3 { margin-bottom:8px; font-size:1.45rem; }
        .step p { margin-bottom:0; color:var(--muted); }
        .about { padding:0 0 110px; }
        .about-panel { display:grid; grid-template-columns:1fr 1fr; overflow:hidden; border:2px solid var(--ink); border-radius:32px; background:var(--yellow); box-shadow:10px 10px 0 var(--ink); }
        .about-copy { padding:clamp(38px,7vw,82px); }
        .about-copy h2 { font-size:clamp(2.7rem,5vw,5rem); line-height:.95; letter-spacing:-.065em; }
        .about-copy p { max-width:560px; font-size:1.08rem; }
        .about-visual { min-height:480px; display:grid; place-items:center; padding:55px; background:var(--red); }
        .about-visual img { width:min(100%,360px); filter:drop-shadow(9px 10px 0 rgba(0,0,0,.28)); }
        .contact { background:var(--ink); color:#fff; }
        .contact-grid { display:grid; grid-template-columns:1.2fr .8fr; gap:70px; align-items:end; }
        .contact h2 { max-width:770px; margin-bottom:26px; font-size:clamp(3.1rem,7vw,7rem); line-height:.9; letter-spacing:-.075em; }
        .contact h2 em { color:var(--yellow); font-style:normal; }
        .contact p { max-width:580px; color:#c9c9c9; font-size:1.12rem; }
        .contact-card { padding:30px; border:2px solid white; border-radius:var(--radius); background:#242424; font-style:normal; }
        .contact-card small { display:block; margin-bottom:7px; color:var(--yellow); font-weight:800; text-transform:uppercase; letter-spacing:.1em; }
        .contact-card p { margin-bottom:24px; color:white; font-size:1rem; }
        footer { padding:28px 0; background:var(--ink); color:#aaa; border-top:1px solid #3b3b3b; }
        .footer-row { display:flex; justify-content:space-between; gap:25px; font-size:.9rem; }
        @media (max-width:900px) {
            .hero-grid,.process-grid,.about-panel,.contact-grid { grid-template-columns:1fr; }
            .hero { padding-top:64px; }
            .hero-card { min-height:390px; max-width:560px; }
            .card-grid { grid-template-columns:1fr; }
            .service-card { min-height:auto; }
            .card-number { margin-bottom:34px; }
            .process-intro { position:static; }
            .about-visual { min-height:370px; }
        }
        @media (max-width:680px) {
            .container { width:min(100% - 28px,1120px); }
            .nav { min-height:70px; }
            .brand img { width:45px; height:45px; }
            .nav-links a:not(.button) { display:none; }
            .button--small { min-height:38px; padding:0 14px; font-size:.85rem; }
            .hero { padding:52px 0 75px; }
            h1 { font-size:clamp(3rem,15vw,5rem); }
            .hero-card { min-height:310px; padding:32px; box-shadow:8px 8px 0 var(--ink); }
            .hero-card::after { right:-3px; font-size:1.05rem; }
            .trust-list { grid-template-columns:1fr; gap:12px; }
            .trust-list li+li { border-left:0; }
            section { padding:78px 0; }
            .section-head { align-items:start; flex-direction:column; }
            .about { padding-bottom:78px; }
            .about-visual { min-height:300px; padding:42px; }
            .footer-row { flex-direction:column; }
        }
    </style>
</head>
<body>
<a class="skip-link" href="#inhoud">Ga naar de inhoud</a>
<header class="site-header">
    <nav class="nav container" aria-label="Hoofdnavigatie">
        <a class="brand" href="#top" aria-label="Web Wonder Woman home"><img src="{{ asset('img/webwonderwoman-logo.png') }}" alt=""><span>Web wonder woman</span></a>
        <div class="nav-links"><a href="#diensten">Diensten</a><a href="#werkwijze">Werkwijze</a><a class="button button--small" href="#contact">Kennismaken</a></div>
    </nav>
</header>
<main id="inhoud">
    <section class="hero" id="top">
        <div class="hero-grid container">
            <div class="hero-copy">
                <p class="eyebrow">Webdesign uit Den Haag</p>
                <h1>Jouw website verdient <span>superkracht.</span></h1>
                <p>Web Wonder Woman ontwerpt heldere, eigenzinnige websites die jouw verhaal sterk neerzetten en bezoekers in beweging brengen.</p>
                <div class="hero-actions"><a class="button" href="#contact">Start jouw project <span aria-hidden="true">→</span></a><a class="text-link" href="#diensten">Bekijk wat ik doe</a></div>
            </div>
            <div class="hero-card" aria-label="Web Wonder Woman beeldmerk"><img src="{{ asset('img/webwonderwoman-logo.png') }}" alt="Web Wonder Woman logo met verificatiebadge"></div>
        </div>
    </section>
    <div class="trust-bar" aria-label="Kernwaarden"><ul class="trust-list container"><li><b>01</b> Persoonlijk contact</li><li><b>02</b> Slim &amp; responsive</li><li><b>03</b> Helder resultaat</li></ul></div>
    <section class="services" id="diensten">
        <div class="container">
            <div class="section-head"><h2>Alles wat je nodig hebt om online te stralen.</h2><p>Geen onnodige ingewikkeldheid. Wel een doordacht ontwerp, sterke techniek en een website die bij jou past.</p></div>
            <div class="card-grid">
                <article class="service-card"><div class="card-number">01</div><h3>Webdesign</h3><p>Een onderscheidend ontwerp dat jouw merk karakter geeft en op ieder scherm prettig werkt.</p></article>
                <article class="service-card"><div class="card-number">02</div><h3>Websitebouw</h3><p>Snel, toegankelijk en zorgvuldig gebouwd. Een sterke technische basis waar je op kunt vertrouwen.</p></article>
                <article class="service-card"><div class="card-number">03</div><h3>Online groeikracht</h3><p>Slimme verbeteringen in structuur, inhoud en gebruiksgemak die bezoekers helpen kiezen.</p></article>
            </div>
        </div>
    </section>
    <section id="werkwijze">
        <div class="process-grid container">
            <div class="process-intro"><p class="eyebrow">Zo werkt het</p><h2>Van eerste idee naar wow.</h2><p>We houden het proces overzichtelijk. Jij weet altijd waar we staan en waarom we een keuze maken.</p></div>
            <div class="steps">
                <article class="step"><strong>01</strong><div><h3>Luisteren</h3><p>We brengen jouw doelen, doelgroep en verhaal scherp in beeld.</p></div></article>
                <article class="step"><strong>02</strong><div><h3>Ontwerpen</h3><p>Jouw verhaal krijgt een visuele stijl en logische gebruikerservaring.</p></div></article>
                <article class="step"><strong>03</strong><div><h3>Bouwen</h3><p>Het ontwerp wordt een snelle, responsive en betrouwbare website.</p></div></article>
                <article class="step"><strong>04</strong><div><h3>Lanceren</h3><p>Na de laatste controles is jouw nieuwe online thuis klaar voor publiek.</p></div></article>
            </div>
        </div>
    </section>
    <section class="about" aria-labelledby="about-title">
        <div class="about-panel container">
            <div class="about-copy"><p class="eyebrow">Klein bureau, groot effect</p><h2 id="about-title">Direct, betrokken en vol energie.</h2><p>Bij Web Wonder Woman werk je zonder omwegen samen aan een website waar je trots op bent. Met aandacht voor jouw verhaal én voor de mensen die je wilt bereiken.</p></div>
            <div class="about-visual"><img src="{{ asset('img/webwonderwoman-logo.png') }}" alt="Web Wonder Woman beeldmerk"></div>
        </div>
    </section>
    <section class="contact" id="contact">
        <div class="contact-grid container">
            <div><p class="eyebrow">Klaar voor actie?</p><h2>Laten we iets <em>wonderschoons</em> maken.</h2><p>Vertel wat je wilt bereiken. Tijdens een vrijblijvende kennismaking kijken we samen welke website daarbij past.</p></div>
            <address class="contact-card"><small>Web wonder woman</small><p>Dr. L.J. Rogierstraat 82<br>2552 LB Den Haag<br>Nederland</p><a class="button button--light" href="https://www.google.com/maps/search/?api=1&amp;query=Dr.+L.J.+Rogierstraat+82,+2552+LB+Den+Haag" target="_blank" rel="noopener">Bekijk op de kaart <span aria-hidden="true">↗</span></a></address>
        </div>
    </section>
</main>
<footer><div class="footer-row container"><span>© {{ date('Y') }} Web Wonder Woman</span><span>Met aandacht gemaakt in Den Haag.</span></div></footer>
</body>
</html>
