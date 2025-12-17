<!-- Section 1: Feedback and Advantages -->
<section class="section feedback-section" id="feedback">
    <div class="container">
        <div class="feedback-grid">
            <!-- Advantages Column -->
            <div class="advantages">
                <h2 class="section__title">Почему выбирают SKlight</h2>
                <div class="advantages__list">
                    <div class="advantage-card">
                        <div class="advantage__top">
                            <svg class="advantage-card__icon" width="48" height="48" viewBox="0 0 48 48" fill="none">
                                <circle cx="24" cy="24" r="20" stroke="#0a95c2" stroke-width="2" />
                                <path d="M16 24l6 6 12-12" stroke="#0a95c2" stroke-width="2" stroke-linecap="round" />
                            </svg>
                            <h3 class="advantage-card__title">Гарантия качества</h3>
                        </div>
                        <p class="advantage-card__text">Официальная гарантия на всё оборудование от 2 до 5 лет</p>
                    </div>
                    <div class="advantage-card">
                        <div class="advantage__top">
                            <svg class="advantage-card__icon" width="48" height="48" viewBox="0 0 48 48" fill="none">
                                <rect x="8" y="12" width="32" height="24" rx="2" stroke="#0a95c2" stroke-width="2" />
                                <path d="M16 20h16M16 28h12" stroke="#0a95c2" stroke-width="2" stroke-linecap="round" />
                            </svg>
                            <h3 class="advantage-card__title">Техподдержка 24/7</h3>
                        </div>
                        <p class="advantage-card__text">Круглосуточная поддержка специалистов по всем вопросам</p>
                    </div>
                    <div class="advantage-card">
                        <div class="advantage__top">
                            <svg class="advantage-card__icon" width="48" height="48" viewBox="0 0 48 48" fill="none">
                                <path d="M24 8v32M8 24h32" stroke="#0a95c2" stroke-width="2" stroke-linecap="round" />
                                <circle cx="24" cy="24" r="16" stroke="#0a95c2" stroke-width="2" />
                            </svg>
                            <h3 class="advantage-card__title">Доставка по РФ</h3>
                        </div>
                        <p class="advantage-card__text">Быстрая доставка в любой регион России и СНГ</p>
                    </div>
                    <div class="advantage-card">
                        <div class="advantage__top">
                            <svg class="advantage-card__icon" width="48" height="48" viewBox="0 0 48 48" fill="none">
                                <path d="M12 24l8 8 16-16" stroke="#0a95c2" stroke-width="2" stroke-linecap="round" />
                            </svg>
                            <h3 class="advantage-card__title">Сертификация</h3>
                        </div>
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
                        <input type="tel" id="phone" name="phone" class="form-input" required aria-required="true"
                            pattern="[+]?[0-9]{10,15}">
                        <span class="form-error" role="alert"></span>
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Email *</label>
                        <input type="email" id="email" name="email" class="form-input" required aria-required="true">
                        <span class="form-error" role="alert"></span>
                    </div>
                    <div class="form-group">
                        <label for="message" class="form-label">Сообщение *</label>
                        <textarea id="message" name="message" class="form-textarea" rows="4" required
                            aria-required="true"></textarea>
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

<style>
    .advantage__top {
        display: flex;
        justify-content: left;
        align-items: center;
        gap: 19px;
    }

    h2.section__title {
        font-size: 2.5em;
    }
</style>