    <!-- MAIN CONTENT -->
    <main id="main-content">
        
        <!-- Section 1: Feedback and Advantages -->
        <section class="section feedback-section" id="feedback">
            <div class="container">
                <div class="feedback-grid">
                    <!-- Advantages Column -->
                    <div class="advantages">
                        <h2 class="section__title">Почему выбирают SKlight</h2>
                        <div class="advantages__list">
                            <div class="advantage-card">
                                <svg class="advantage-card__icon" width="48" height="48" viewBox="0 0 48 48" fill="none">
                                    <circle cx="24" cy="24" r="20" stroke="#0a95c2" stroke-width="2"/>
                                    <path d="M16 24l6 6 12-12" stroke="#0a95c2" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                                <h3 class="advantage-card__title">Гарантия качества</h3>
                                <p class="advantage-card__text">Официальная гарантия на всё оборудование от 2 до 5 лет</p>
                            </div>
                            <div class="advantage-card">
                                <svg class="advantage-card__icon" width="48" height="48" viewBox="0 0 48 48" fill="none">
                                    <rect x="8" y="12" width="32" height="24" rx="2" stroke="#0a95c2" stroke-width="2"/>
                                    <path d="M16 20h16M16 28h12" stroke="#0a95c2" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                                <h3 class="advantage-card__title">Техподдержка 24/7</h3>
                                <p class="advantage-card__text">Круглосуточная поддержка специалистов по всем вопросам</p>
                            </div>
                            <div class="advantage-card">
                                <svg class="advantage-card__icon" width="48" height="48" viewBox="0 0 48 48" fill="none">
                                    <path d="M24 8v32M8 24h32" stroke="#0a95c2" stroke-width="2" stroke-linecap="round"/>
                                    <circle cx="24" cy="24" r="16" stroke="#0a95c2" stroke-width="2"/>
                                </svg>
                                <h3 class="advantage-card__title">Доставка по РФ</h3>
                                <p class="advantage-card__text">Быстрая доставка в любой регион России и СНГ</p>
                            </div>
                            <div class="advantage-card">
                                <svg class="advantage-card__icon" width="48" height="48" viewBox="0 0 48 48" fill="none">
                                    <path d="M12 24l8 8 16-16" stroke="#0a95c2" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                                <h3 class="advantage-card__title">Сертификация</h3>
                                <p class="advantage-card__text">Все сертификаты соответствия и разрешительная документация</p>
                            </div>
                        </div>
                    </div>

                    <!-- Feedback Form Column -->
                    <div class="feedback-form-wrapper">
                        <h2 class="section__title">Обратная связь</h2>
                        <form class="feedback-form" id="feedback-form" novalidate>
                            <div class="form-group">
                                <label for="name" class="form-label">Ваше имя *</label>
                                <input type="text" id="name" name="name" class="form-input" required aria-required="true">
                                <span class="form-error" role="alert"></span>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="form-label">Телефон *</label>
                                <input type="tel" id="phone" name="phone" class="form-input" required aria-required="true" pattern="[+]?[0-9]{10,15}">
                                <span class="form-error" role="alert"></span>
                            </div>
                            <div class="form-group">
                                <label for="email" class="form-label">Email *</label>
                                <input type="email" id="email" name="email" class="form-input" required aria-required="true">
                                <span class="form-error" role="alert"></span>
                            </div>
                            <div class="form-group">
                                <label for="message" class="form-label">Сообщение *</label>
                                <textarea id="message" name="message" class="form-textarea" rows="4" required aria-required="true"></textarea>
                                <span class="form-error" role="alert"></span>
                            </div>
                            <div class="form-group">
                                <label for="file" class="form-label">Прикрепить файл (макс. 10MB)</label>
                                <input type="file" id="file" name="file" class="form-file" accept=".pdf,.jpg,.jpeg,.png">
                                <span class="form-error" role="alert"></span>
                            </div>
                            <!-- Honeypot field -->
                            <input type="text" name="website" class="honeypot" tabindex="-1" autocomplete="off">
                            <button type="submit" class="btn btn--primary">Отправить</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 2: Product Slider -->
        <section class="section slider-section">
            <div class="swiper product-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slide-content" style="background-image: url('assets/products/profile.jpg');">
                            <div class="slide-overlay"></div>
                            <div class="slide-text">
                                <h2 class="slide-title">PROFILE</h2>
                                <p class="slide-description">Профильные прожекторы для точного управления светом</p>
                                <a href="#catalog?filter=profile" class="btn btn--primary">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-content" style="background-image: url('assets/products/bsw.jpg');">
                            <div class="slide-overlay"></div>
                            <div class="slide-text">
                                <h2 class="slide-title">BSW</h2>
                                <p class="slide-description">Beam Spot Wash - универсальные приборы 3 в 1</p>
                                <a href="#catalog?filter=bsw" class="btn btn--primary">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-content" style="background-image: url('assets/products/wash.jpg');">
                            <div class="slide-overlay"></div>
                            <div class="slide-text">
                                <h2 class="slide-title">WASH</h2>
                                <p class="slide-description">Заливающий свет для создания атмосферы</p>
                                <a href="#catalog?filter=wash" class="btn btn--primary">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-content" style="background-image: url('assets/products/beam.jpg');">
                            <div class="slide-overlay"></div>
                            <div class="slide-text">
                                <h2 class="slide-title">BEAM</h2>
                                <p class="slide-description">Узконаправленные лучи для эффектных шоу</p>
                                <a href="#catalog?filter=beam" class="btn btn--primary">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-content" style="background-image: url('assets/products/led-par.jpg');">
                            <div class="slide-overlay"></div>
                            <div class="slide-text">
                                <h2 class="slide-title">LED PAR</h2>
                                <p class="slide-description">Светодиодные прожекторы для любых задач</p>
                                <a href="#catalog?filter=led-par" class="btn btn--primary">Подробнее</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </section>

        <!-- Section 3: Product Catalog -->
        <section class="section catalog-section" id="catalog">
            <div class="container">
                <h2 class="section__title">Каталог продукции</h2>
                
                <!-- Filter Panel -->
                <div class="catalog-filter">
                    <div class="filter-group">
                        <label for="category-filter">Категория:</label>
                        <select id="category-filter" class="filter-select">
                            <option value="all">Все категории</option>
                            <option value="profile">PROFILE</option>
                            <option value="bsw">BSW</option>
                            <option value="wash">WASH</option>
                            <option value="beam">BEAM</option>
                            <option value="led-par">LED PAR</option>
                            <option value="led-bar">LED BAR</option>
                        </select>
                    </div>
                    <div class="filter-group">
                        <label for="price-min">Цена от:</label>
                        <input type="number" id="price-min" class="filter-input" placeholder="0">
                    </div>
                    <div class="filter-group">
                        <label for="price-max">до:</label>
                        <input type="number" id="price-max" class="filter-input" placeholder="1000000">
                    </div>
                    <button class="btn btn--secondary" id="apply-filter">Применить</button>
                </div>

                <!-- Product Grid -->
                <div class="product-grid" id="product-grid">
                    <!-- Products will be loaded dynamically -->
                </div>
            </div>
        </section>

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