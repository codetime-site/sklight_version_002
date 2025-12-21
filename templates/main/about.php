<style>
    :root {
        --bg: #0b0c10;
        --bg-soft: #141622;
        --text: #e6e7eb;
        --muted: #9aa0ad;
        --accent: #0a95c2;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 96px 24px;
    }

    div.header_run {
        /* display: grid;
        grid-template-columns: 1.2fr 1fr;
        gap: 56px; */
        display: flex;
        align-items: center;
        margin-bottom: 140px;
    }

    h1 {
        font-size: clamp(38px, 5vw, 64px);
        font-weight: 800;
        line-height: 1.05;
        margin: 0 0 28px;
    }

    h1 span {
        color: var(--accent);
    }

    h2 {
        font-size: 36px;
        margin: 0 0 32px;
    }

    p {
        font-size: 18px;
        line-height: 1.7;
        color: var(--muted);
        margin: 0 0 22px;
    }

    .hero-img {
        border-radius: 28px;
        overflow: hidden;
        box-shadow: 0 50px 100px rgba(0, 0, 0, .65);
    }

    .hero-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    section {
        margin-bottom: 140px;
    }

    .grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
        gap: 32px;
    }

    .card {
        background: linear-gradient(160deg, #1a1d2f, var(--bg-soft));
        border-radius: 22px;
        padding: 36px;
        border: 1px solid rgba(255, 255, 255, .06);
    }

    .card h3 {
        margin: 0 0 14px;
        font-size: 22px;
        font-weight: 600;
        color: var(--text);
    }

    .card p {
        margin: 0;
        font-size: 16px;
    }

    .stats {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 28px;
    }

    .stat {
        padding: 32px;
        border-radius: 20px;
        background: rgba(255, 255, 255, .03);
        border: 1px solid rgba(255, 255, 255, .05);
    }

    .stat strong {
        display: block;
        font-size: 40px;
        font-weight: 800;
        color: var(--accent);
        margin-bottom: 8px;
    }

    @media (max-width: 900px) {
        header {
            grid-template-columns: 1fr;
        }
    }
</style>
</head>

<body>
    <div class="container">

        <div class="header_run">
            <div>
                <h1><span>SKLight</span> — профессиональный свет без компромиссов</h1>
                <p>
                    SKLight — международная компания, специализирующаяся на производстве
                    профессионального светотехнического оборудования для аварийного,
                    уличного и сценического освещения.
                </p>
                <p>
                    Мы разрабатываем влагозащищённые вращающиеся головы, прожекторы и LED-экраны,
                    которые стабильно работают даже в самых суровых климатических условиях.
                    Наши решения выбирают архитекторы, проектировщики, инсталляторы,
                    арендные компании и организаторы мероприятий.
                </p>
            </div>
            <div class="hero-img">
                <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=1200&q=80"
                    alt="Профессиональное освещение">
            </div>
        </div>

        <section>
            <h2>Производство и контроль качества</h2>
            <div class="stats">
                <div class="stat">
                    <strong>20 000 м²</strong>
                    Площадь собственного завода
                </div>
                <div class="stat">
                    <strong>300+</strong>
                    Сотрудников в штате
                </div>
                <div class="stat">
                    <strong>60</strong>
                    Инженеров R&D
                </div>
            </div>
            <p style="margin-top:32px; max-width:800px;">
                Производство сопровождается многоступенчатым контролем качества.
                Вся продукция соответствует международным стандартам
                <strong style="color:#cfd2ff;">CE, RoHS, EMC, IP65</strong>.
            </p>
        </section>

        <section>
            <h2>География поставок</h2>
            <p style="max-width:820px;">
                SKLight — это глобальная сеть представительств с офисами, складами
                и сервисными центрами в 10 странах мира, включая Россию, США, Бразилию,
                Турцию, Южную Корею и Египет.
            </p>
        </section>

        <section>
            <h2>Почему выбирают SKLight</h2>
            <div class="grid">
                <div class="card">
                    <h3>Гарантия и сервис</h3>
                    <p>2 года гарантии и сервисное обслуживание на территории России.</p>
                </div>
                <div class="card">
                    <h3>Партнёрский подход</h3>
                    <p>Гибкие условия сотрудничества и индивидуальные решения.</p>
                </div>
                <div class="card">
                    <h3>Цена от производителя</h3>
                    <p>Конкурентные цены без лишних посредников.</p>
                </div>
            </div>
        </section>