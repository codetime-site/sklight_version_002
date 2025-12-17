    <!-- MAIN CONTENT -->
    <main id="main-content">
        
        <!-- Section 4: Dealers Map -->
        <section class="section map-section" id="dealers">
            <div class="container">
                <h2 class="section__title">Наши дилеры</h2>
                <div id="dealers-map" class="dealers-map"></div>
            </div>
        </section>

        <!-- Section 5: Global Contacts -->
        <section class="section contacts-section" id="contacts">
            <div class="container">
                <h2 class="section__title">Глобальные контакты</h2>
                <div class="contacts-tabs">
                    <button class="tab-btn active" data-tab="china">🇨🇳 Китай</button>
                    <button class="tab-btn" data-tab="india">🇮🇳 Индия</button>
                    <button class="tab-btn" data-tab="moscow">🇷🇺 Москва</button>
                </div>
                <div class="contacts-content">
                    <div class="tab-content active" id="china">
                        <div class="contact-info">
                            <div class="contact-status">
                                <span class="status-indicator" id="status-china"></span>
                                <span class="status-text" id="status-text-china"></span>
                            </div>
                            <p class="contact-item">📍 Guangzhou, Tianhe District, 123 Huangpu Ave</p>
                            <p class="contact-item">📞 +86 20 1234 5678</p>
                            <p class="contact-item">📞 +86 20 8765 4321</p>
                            <p class="contact-item">✉️ china@sklight.ru</p>
                            <p class="contact-item">🕐 Пн-Пт: 09:00-18:00 (GMT+8)</p>
                        </div>
                    </div>
                    <div class="tab-content" id="india">
                        <div class="contact-info">
                            <div class="contact-status">
                                <span class="status-indicator" id="status-india"></span>
                                <span class="status-text" id="status-text-india"></span>
                            </div>
                            <p class="contact-item">📍 Mumbai, Andheri East, 456 Link Road</p>
                            <p class="contact-item">📞 +91 22 1234 5678</p>
                            <p class="contact-item">📞 +91 22 8765 4321</p>
                            <p class="contact-item">✉️ india@sklight.ru</p>
                            <p class="contact-item">🕐 Пн-Пт: 10:00-19:00 (GMT+5:30)</p>
                        </div>
                    </div>
                    <div class="tab-content" id="moscow">
                        <div class="contact-info">
                            <div class="contact-status">
                                <span class="status-indicator" id="status-moscow"></span>
                                <span class="status-text" id="status-text-moscow"></span>
                            </div>
                            <p class="contact-item">📍 Москва, ул. Примерная, д. 123</p>
                            <p class="contact-item">📞 +7 (999) 123-45-67</p>
                            <p class="contact-item">📞 +7 (999) 765-43-21</p>
                            <p class="contact-item">✉️ moscow@sklight.ru</p>
                            <p class="contact-item">🕐 Пн-Пт: 09:00-18:00 (МСК)</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 6: Running Line -->
        <section class="section running-line-section">
            <div class="running-line-wrapper">
                <div class="running-line">
                    <span class="running-text">PROFILE • BSW • WASH • BEAM • LED PAR • LED BAR • </span>
                    <span class="running-text">PROFILE • BSW • WASH • BEAM • LED PAR • LED BAR • </span>
                    <span class="running-text">PROFILE • BSW • WASH • BEAM • LED PAR • LED BAR • </span>
                </div>
                <div class="running-line-center">
                    <h2 class="running-line-title">SKlight - профессиональное осветительное оборудование</h2>
                </div>
            </div>
        </section>

        <!-- Section 7: Company News -->
        <section class="section news-section" id="news">
            <div class="container">
                <h2 class="section__title">Новости компании</h2>
                
                <!-- News Filter -->
                <div class="news-filter">
                    <button class="filter-btn active" data-filter="all">Все</button>
                    <button class="filter-btn" data-filter="products">Продукция</button>
                    <button class="filter-btn" data-filter="company">Компания</button>
                    <button class="filter-btn" data-filter="exhibitions">Выставки</button>
                </div>

                <!-- News Grid -->
                <div class="news-grid" id="news-grid">
                    <!-- News will be loaded dynamically -->
                </div>

                <button class="btn btn--secondary load-more" id="load-more-news">Загрузить еще</button>
            </div>
        </section>

        <!-- Section 8: Warranty and Certificates -->
        <section class="section warranty-section" id="warranty">
            <div class="container">
                <h2 class="section__title">Гарантия и сертификаты</h2>
                <div class="warranty-grid">
                    <!-- Timeline Column -->
                    <div class="warranty-timeline">
                        <div class="timeline-item">
                            <div class="timeline-icon">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                                    <circle cx="24" cy="24" r="20" stroke="#0a95c2" stroke-width="2"/>
                                    <text x="24" y="30" text-anchor="middle" fill="#0a95c2" font-size="20">1</text>
                                </svg>
                            </div>
                            <div class="timeline-content">
                                <h3>Покупка</h3>
                                <p>Оформление заказа и консультация специалиста</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-icon">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                                    <circle cx="24" cy="24" r="20" stroke="#0a95c2" stroke-width="2"/>
                                    <text x="24" y="30" text-anchor="middle" fill="#0a95c2" font-size="20">2</text>
                                </svg>
                            </div>
                            <div class="timeline-content">
                                <h3>Доставка</h3>
                                <p>Быстрая доставка в любой регион России</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-icon">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                                    <circle cx="24" cy="24" r="20" stroke="#0a95c2" stroke-width="2"/>
                                    <text x="24" y="30" text-anchor="middle" fill="#0a95c2" font-size="20">3</text>
                                </svg>
                            </div>
                            <div class="timeline-content">
                                <h3>Установка</h3>
                                <p>Помощь в настройке и запуске оборудования</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-icon">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                                    <circle cx="24" cy="24" r="20" stroke="#0a95c2" stroke-width="2"/>
                                    <text x="24" y="30" text-anchor="middle" fill="#0a95c2" font-size="20">4</text>
                                </svg>
                            </div>
                            <div class="timeline-content">
                                <h3>Поддержка</h3>
                                <p>Техническая поддержка 24/7 на весь срок гарантии</p>
                            </div>
                        </div>
                    </div>

                    <!-- Certificates Column -->
                    <div class="certificates-grid">
                        <div class="certificate-card" data-pdf="#">
                            <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?w=600&h=800&fit=crop" alt="Сертификат соответствия" loading="lazy">
                            <p>Сертификат соответствия</p>
                        </div>
                        <div class="certificate-card" data-pdf="#">
                            <img src="https://images.unsplash.com/photo-1554224311-beee460c201f?w=600&h=800&fit=crop" alt="ISO 9001" loading="lazy">
                            <p>ISO 9001</p>
                        </div>
                        <div class="certificate-card" data-pdf="#">
                            <img src="https://images.unsplash.com/photo-1586281380349-632531db7ed4?w=600&h=800&fit=crop" alt="CE Certificate" loading="lazy">
                            <p>CE Certificate</p>
                        </div>
                        <div class="certificate-card" data-pdf="#">
                            <img src="https://images.unsplash.com/photo-1507925921958-8a62f3d1a50d?w=600&h=800&fit=crop" alt="RoHS Compliance" loading="lazy">
                            <p>RoHS Compliance</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>