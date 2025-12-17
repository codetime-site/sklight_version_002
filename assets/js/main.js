/**
 * SKlight Corporate Website
 * Main JavaScript File
 * Version: 1.0
 */

// ===================================
// UTILITY FUNCTIONS
// ===================================

const $ = (selector) => document.querySelector(selector);
const $$ = (selector) => document.querySelectorAll(selector);

const debounce = (func, wait) => {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
};

// ===================================
// HEADER FUNCTIONALITY
// ===================================

class Header {
    constructor() {
        this.header = $('#header');
        this.burger = $('.header__burger');
        this.mobileMenu = $('#mobile-menu');
        this.mobileMenuClose = $('.mobile-menu__close');
        this.init();
    }

    init() {
        this.handleScroll();
        this.handleMobileMenu();
        this.handleActiveLinks();
        window.addEventListener('scroll', debounce(() => this.handleScroll(), 10));
    }

    handleScroll() {
        if (window.scrollY > 50) {
            this.header.classList.add('scrolled');
        } else {
            this.header.classList.remove('scrolled');
        }
    }

    handleMobileMenu() {
        this.burger?.addEventListener('click', () => {
            this.burger.classList.toggle('active');
            this.mobileMenu.classList.toggle('active');
            document.body.style.overflow = this.mobileMenu.classList.contains('active') ? 'hidden' : '';
        });

        this.mobileMenuClose?.addEventListener('click', () => {
            this.closeMobileMenu();
        });

        this.mobileMenu?.addEventListener('click', (e) => {
            if (e.target === this.mobileMenu || e.target.classList.contains('mobile-nav__link')) {
                this.closeMobileMenu();
            }
        });
    }

    closeMobileMenu() {
        this.burger?.classList.remove('active');
        this.mobileMenu?.classList.remove('active');
        document.body.style.overflow = '';
    }

    handleActiveLinks() {
        const navLinks = $$('.nav__link, .mobile-nav__link');
        const sections = $$('section[id]');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    navLinks.forEach(link => {
                        link.classList.remove('active');
                        if (link.getAttribute('href') === `#${entry.target.id}`) {
                            link.classList.add('active');
                        }
                    });
                }
            });
        }, { threshold: 0.3 });

        sections.forEach(section => observer.observe(section));
    }
}

// ===================================
// FEEDBACK FORM
// ===================================

class FeedbackForm {
    constructor() {
        this.form = $('#feedback-form');
        this.init();
    }

    init() {
        if (!this.form) return;
        this.form.addEventListener('submit', (e) => this.handleSubmit(e));
        
        // Real-time validation
        const inputs = this.form.querySelectorAll('.form-input, .form-textarea');
        inputs.forEach(input => {
            input.addEventListener('blur', () => this.validateField(input));
            input.addEventListener('input', () => {
                if (input.classList.contains('error')) {
                    this.validateField(input);
                }
            });
        });
    }

    validateField(field) {
        const errorSpan = field.parentElement.querySelector('.form-error');
        let isValid = true;
        let errorMessage = '';

        if (field.type === 'checkbox' && field.hasAttribute('required') && !field.checked) {
            isValid = false;
            errorMessage = 'Необходимо согласие с политикой конфиденциальности';
        } else if (field.hasAttribute('required') && !field.value.trim()) {
            isValid = false;
            errorMessage = 'Это поле обязательно для заполнения';
        } else if (field.type === 'email' && field.value) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(field.value)) {
                isValid = false;
                errorMessage = 'Введите корректный email';
            }
        } else if (field.type === 'tel' && field.value) {
            const phoneRegex = /^[+]?[0-9]{10,15}$/;
            if (!phoneRegex.test(field.value.replace(/[\s()-]/g, ''))) {
                isValid = false;
                errorMessage = 'Введите корректный номер телефона';
            }
        }

        if (!isValid) {
            field.classList.add('error');
            errorSpan.textContent = errorMessage;
            errorSpan.classList.add('active');
        } else {
            field.classList.remove('error');
            errorSpan.textContent = '';
            errorSpan.classList.remove('active');
        }

        return isValid;
    }

    async handleSubmit(e) {
        e.preventDefault();

        // Check honeypot
        if (this.form.querySelector('[name="website"]').value) {
            return; // Bot detected
        }

        // Validate all fields including checkbox
        const inputs = this.form.querySelectorAll('.form-input, .form-textarea, input[type="checkbox"][required]');
        let isFormValid = true;
        inputs.forEach(input => {
            if (!this.validateField(input)) {
                isFormValid = false;
            }
        });

        if (!isFormValid) return;

        // Prepare form data
        const formData = new FormData(this.form);
        const submitButton = this.form.querySelector('button[type="submit"]');
        const originalText = submitButton.textContent;

        try {
            submitButton.disabled = true;
            submitButton.innerHTML = '<span class="loading"></span> Отправка...';

            // Simulate API call (replace with actual endpoint)
            await new Promise(resolve => setTimeout(resolve, 1500));

            // Success
            this.showNotification('Спасибо! Ваше сообщение отправлено.', 'success');
            this.form.reset();
        } catch (error) {
            this.showNotification('Произошла ошибка. Попробуйте позже.', 'error');
        } finally {
            submitButton.disabled = false;
            submitButton.textContent = originalText;
        }
    }

    showNotification(message, type) {
        const notification = document.createElement('div');
        notification.className = `notification notification--${type}`;
        notification.textContent = message;
        notification.style.cssText = `
            position: fixed;
            top: 100px;
            right: 20px;
            padding: 16px 24px;
            background: ${type === 'success' ? '#4caf50' : '#f44336'};
            color: white;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.3);
            z-index: 10000;
            animation: slideIn 0.3s ease;
        `;
        document.body.appendChild(notification);
        setTimeout(() => {
            notification.style.animation = 'slideOut 0.3s ease';
            setTimeout(() => notification.remove(), 300);
        }, 3000);
    }
}

// ===================================
// PRODUCT SLIDER
// ===================================

class ProductSlider {
    constructor() {
        this.init();
    }

    init() {
        if (typeof Swiper === 'undefined') return;

        new Swiper('.product-slider', {
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
            speed: 1000,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 1,
                },
                1024: {
                    slidesPerView: 1,
                }
            }
        });
    }
}

// ===================================
// PRODUCT CATALOG
// ===================================

class ProductCatalog {
    constructor() {
        this.grid = $('#product-grid');
        this.priceMin = $('#price-min');
        this.priceMax = $('#price-max');
        this.applyFilterBtn = $('#apply-filter');
        this.products = this.generateProducts();
        this.init();
    }

    generateProducts() {
        const products = [];
        const productNames = [
            'SKlight Pro 250', 'SKlight Ultra 500', 'SKlight Beam 300', 'SKlight Wash 400',
            'SKlight LED 150', 'SKlight Spot 350', 'SKlight Profile 450', 'SKlight Stage 600',
            'SKlight Mini 100', 'SKlight Max 700', 'SKlight Studio 200', 'SKlight Event 550',
            'SKlight Concert 800', 'SKlight Theater 650', 'SKlight Club 300', 'SKlight Arena 900',
            'SKlight Compact 180', 'SKlight Power 750', 'SKlight Elite 850', 'SKlight Premium 950',
            'SKlight Basic 120', 'SKlight Advanced 480', 'SKlight Professional 720', 'SKlight Master 1000'
        ];

        productNames.forEach((name, index) => {
            const imageIds = [1470229722913, 1501281668745, 1492684223066, 1514525253161, 1459749411175, 1470229722913, 1501281668745, 1492684223066, 1514525253161, 1459749411175, 1470229722913, 1501281668745, 1492684223066, 1514525253161, 1459749411175, 1470229722913, 1501281668745, 1492684223066, 1514525253161, 1459749411175, 1470229722913, 1501281668745, 1492684223066, 1514525253161];
            products.push({
                id: index + 1,
                name: name,
                description: `Профессиональное осветительное оборудование с высокой мощностью и надежностью для любых задач`,
                price: Math.floor(Math.random() * 500000) + 50000,
                image: `https://images.unsplash.com/photo-${imageIds[index]}?w=800&h=533&fit=crop`
            });
        });

        return products;
    }

    init() {
        if (!this.grid) return;
        this.renderProducts(this.products);
        this.setupFilters();
    }

    setupFilters() {
        this.applyFilterBtn?.addEventListener('click', () => this.applyFilters());
    }

    applyFilters() {
        const minPrice = parseInt(this.priceMin?.value) || 0;
        const maxPrice = parseInt(this.priceMax?.value) || Infinity;

        const filtered = this.products.filter(product => {
            const priceMatch = product.price >= minPrice && product.price <= maxPrice;
            return priceMatch;
        });

        this.renderProducts(filtered);
    }

    renderProducts(products) {
        if (!this.grid) return;

        if (products.length === 0) {
            this.grid.innerHTML = '<p style="grid-column: 1/-1; text-align: center; color: var(--color-text-secondary);">Товары не найдены</p>';
            return;
        }

        this.grid.innerHTML = products.map(product => `
            <div class="product-card" data-product-id="${product.id}">
                <img src="${product.image}" alt="${product.name}" class="product-card__image" loading="lazy" onerror="this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22267%22%3E%3Crect fill=%22%231a1a1a%22 width=%22400%22 height=%22267%22/%3E%3Ctext fill=%22%230a95c2%22 font-family=%22Arial%22 font-size=%2224%22 x=%2250%25%22 y=%2250%25%22 text-anchor=%22middle%22 dy=%22.3em%22%3ESKlight%3C/text%3E%3C/svg%3E'">
                <div class="product-card__content">
                    <h3 class="product-card__title">${product.name}</h3>
                    <p class="product-card__description">${product.description}</p>
                    <p class="product-card__price">${product.price.toLocaleString('ru-RU')} ₽</p>
                </div>
            </div>
        `).join('');

        // Add click handlers
        $$('.product-card').forEach(card => {
            card.addEventListener('click', () => {
                const productId = parseInt(card.dataset.productId);
                this.showProductModal(productId);
            });
        });
    }

    showProductModal(productId) {
        const product = this.products.find(p => p.id === productId);
        if (!product) return;

        const modal = $('#product-modal');
        const modalBody = $('#modal-body');

        modalBody.innerHTML = `
            <img src="${product.image}" alt="${product.name}" style="width: 100%; border-radius: 8px; margin-bottom: 24px;" onerror="this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22800%22 height=%22533%22%3E%3Crect fill=%22%231a1a1a%22 width=%22800%22 height=%22533%22/%3E%3Ctext fill=%22%230a95c2%22 font-family=%22Arial%22 font-size=%2248%22 x=%2250%25%22 y=%2250%25%22 text-anchor=%22middle%22 dy=%22.3em%22%3ESKlight%3C/text%3E%3C/svg%3E'">
            <h2 style="font-family: var(--font-heading); font-size: 32px; margin-bottom: 16px;">${product.name}</h2>
            <p style="color: var(--color-text-secondary); margin-bottom: 24px;">${product.description}</p>
            <p style="font-size: 28px; color: var(--color-accent); font-weight: 700; margin-bottom: 24px;">${product.price.toLocaleString('ru-RU')} ₽</p>
            <div style="display: flex; gap: 16px;">
                <button class="btn btn--primary" onclick="alert('Функция заказа в разработке')">Заказать</button>
                <a href="tel:+79991234567" class="btn btn--secondary">Позвонить</a>
            </div>
        `;

        modal.classList.add('active');
    }
}

// ===================================
// DEALERS MAP
// ===================================

class DealersMap {
    constructor() {
        this.mapElement = $('#dealers-map');
        this.init();
    }

    init() {
        if (!this.mapElement || typeof L === 'undefined') return;

        // Initialize map
        const map = L.map('dealers-map').setView([55.7558, 37.6173], 5);

        // Add dark tile layer
        L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>',
            subdomains: 'abcd',
            maxZoom: 19
        }).addTo(map);

        // Sample dealer locations
        const dealers = [
            { name: 'Москва - Центральный офис', lat: 55.7558, lng: 37.6173, phone: '+7 (999) 123-45-67' },
            { name: 'Санкт-Петербург', lat: 59.9343, lng: 30.3351, phone: '+7 (999) 234-56-78' },
            { name: 'Казань', lat: 55.8304, lng: 49.0661, phone: '+7 (999) 345-67-89' },
            { name: 'Екатеринбург', lat: 56.8389, lng: 60.6057, phone: '+7 (999) 456-78-90' },
            { name: 'Новосибирск', lat: 55.0084, lng: 82.9357, phone: '+7 (999) 567-89-01' },
            { name: 'Владивосток', lat: 43.1155, lng: 131.8855, phone: '+7 (999) 678-90-12' }
        ];

        // Custom icon
        const customIcon = L.divIcon({
            className: 'custom-marker',
            html: '<div style="background: #0a95c2; width: 24px; height: 24px; border-radius: 50%; border: 3px solid #fff; box-shadow: 0 2px 8px rgba(0,0,0,0.3);"></div>',
            iconSize: [24, 24],
            iconAnchor: [12, 12]
        });

        // Add markers
        const markers = L.markerClusterGroup();
        dealers.forEach(dealer => {
            const marker = L.marker([dealer.lat, dealer.lng], { icon: customIcon })
                .bindPopup(`
                    <div style="color: #fff; font-family: var(--font-body);">
                        <h3 style="margin-bottom: 8px; color: #0a95c2;">${dealer.name}</h3>
                        <p style="margin: 4px 0;">📞 <a href="tel:${dealer.phone.replace(/[\s()-]/g, '')}" style="color: #0a95c2;">${dealer.phone}</a></p>
                        <p style="margin: 4px 0; color: #4caf50;">● Открыто</p>
                    </div>
                `);
            markers.addLayer(marker);
        });

        map.addLayer(markers);
    }
}

// ===================================
// GLOBAL CONTACTS
// ===================================

class GlobalContacts {
    constructor() {
        this.tabButtons = $$('.tab-btn');
        this.init();
    }

    init() {
        if (this.tabButtons.length === 0) return;

        this.tabButtons.forEach(btn => {
            btn.addEventListener('click', () => this.switchTab(btn));
        });

        // Update status indicators
        this.updateStatuses();
        setInterval(() => this.updateStatuses(), 60000); // Update every minute
    }

    switchTab(button) {
        const tabId = button.dataset.tab;

        // Update buttons
        this.tabButtons.forEach(btn => btn.classList.remove('active'));
        button.classList.add('active');

        // Update content
        $$('.tab-content').forEach(content => content.classList.remove('active'));
        $(`#${tabId}`)?.classList.add('active');
    }

    updateStatuses() {
        const timezones = {
            china: { offset: 8, hours: '09:00-18:00' },
            india: { offset: 5.5, hours: '10:00-19:00' },
            moscow: { offset: 3, hours: '09:00-18:00' }
        };

        Object.entries(timezones).forEach(([location, data]) => {
            const indicator = $(`#status-${location}`);
            const text = $(`#status-text-${location}`);
            if (!indicator || !text) return;

            const now = new Date();
            const localTime = new Date(now.getTime() + (data.offset * 60 * 60 * 1000));
            const hours = localTime.getUTCHours();
            const day = localTime.getUTCDay();

            const [startHour, endHour] = data.hours.split('-').map(t => parseInt(t.split(':')[0]));
            const isOpen = day >= 1 && day <= 5 && hours >= startHour && hours < endHour;

            indicator.className = `status-indicator ${isOpen ? 'open' : 'closed'}`;
            text.textContent = isOpen ? 'Открыто' : 'Закрыто';
        });
    }
}

// ===================================
// NEWS SECTION
// ===================================

class NewsSection {
    constructor() {
        this.grid = $('#news-grid');
        this.filterButtons = $$('.news-filter .filter-btn');
        this.loadMoreBtn = $('#load-more-news');
        this.currentFilter = 'all';
        this.displayedCount = 6;
        this.news = this.generateNews();
        this.init();
    }

    generateNews() {
        const categories = ['products', 'company', 'exhibitions'];
        const news = [];

        for (let i = 1; i <= 12; i++) {
            const category = categories[Math.floor(Math.random() * categories.length)];
            news.push({
                id: i,
                category: category,
                title: `Новость ${i}: ${this.getCategoryName(category)}`,
                excerpt: 'Краткое описание новости. Здесь будет интересная информация о событии или продукте компании SKlight.',
                date: new Date(2024, 11, Math.floor(Math.random() * 30) + 1).toLocaleDateString('ru-RU'),
                image: `assets/news/news${i}.jpg`
            });
        }

        return news.sort((a, b) => new Date(b.date) - new Date(a.date));
    }

    getCategoryName(category) {
        const names = {
            products: 'Продукция',
            company: 'Компания',
            exhibitions: 'Выставки'
        };
        return names[category] || category;
    }

    init() {
        if (!this.grid) return;
        this.renderNews();
        this.setupFilters();
    }

    setupFilters() {
        this.filterButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                this.filterButtons.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                this.currentFilter = btn.dataset.filter;
                this.displayedCount = 6;
                this.renderNews();
            });
        });

        this.loadMoreBtn?.addEventListener('click', () => {
            this.displayedCount += 3;
            this.renderNews();
        });
    }

    renderNews() {
        if (!this.grid) return;

        const filtered = this.currentFilter === 'all' 
            ? this.news 
            : this.news.filter(n => n.category === this.currentFilter);

        const displayed = filtered.slice(0, this.displayedCount);

        this.grid.innerHTML = displayed.map(item => `
            <article class="news-card">
                <img src="${item.image}" alt="${item.title}" class="news-card__image" loading="lazy" onerror="this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22640%22 height=%22360%22%3E%3Crect fill=%22%231a1a1a%22 width=%22640%22 height=%22360%22/%3E%3Ctext fill=%22%230a95c2%22 font-family=%22Arial%22 font-size=%2232%22 x=%2250%25%22 y=%2250%25%22 text-anchor=%22middle%22 dy=%22.3em%22%3EНовость%3C/text%3E%3C/svg%3E'">
                <div class="news-card__content">
                    <p class="news-card__date">${item.date}</p>
                    <span class="news-card__category">${this.getCategoryName(item.category)}</span>
                    <h3 class="news-card__title">${item.title}</h3>
                    <p class="news-card__excerpt">${item.excerpt}</p>
                </div>
            </article>
        `).join('');

        // Show/hide load more button
        if (this.loadMoreBtn) {
            this.loadMoreBtn.style.display = displayed.length < filtered.length ? 'block' : 'none';
        }
    }
}

// ===================================
// CERTIFICATES
// ===================================

class Certificates {
    constructor() {
        this.cards = $$('.certificate-card');
        this.init();
    }

    init() {
        this.cards.forEach(card => {
            card.addEventListener('click', () => {
                const pdfUrl = card.dataset.pdf;
                this.showCertificateModal(pdfUrl);
            });
        });
    }

    showCertificateModal(pdfUrl) {
        const modal = $('#certificate-modal');
        const viewer = $('#certificate-viewer');

        viewer.innerHTML = `
            <iframe src="${pdfUrl}" style="width: 100%; height: 70vh; border: none; border-radius: 8px;"></iframe>
            <div style="margin-top: 20px; text-align: center;">
                <a href="${pdfUrl}" download class="btn btn--primary">Скачать сертификат</a>
            </div>
        `;

        modal.classList.add('active');
    }
}

// ===================================
// MODAL HANDLER
// ===================================

class ModalHandler {
    constructor() {
        this.init();
    }

    init() {
        // Close modal on overlay click or close button
        document.addEventListener('click', (e) => {
            if (e.target.hasAttribute('data-modal-close') || e.target.classList.contains('modal-overlay')) {
                this.closeAllModals();
            }
        });

        // Close modal on Escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                this.closeAllModals();
            }
        });
    }

    closeAllModals() {
        $$('.modal').forEach(modal => modal.classList.remove('active'));
    }
}

// ===================================
// BACK TO TOP BUTTON
// ===================================

class BackToTop {
    constructor() {
        this.button = $('#back-to-top');
        this.init();
    }

    init() {
        if (!this.button) return;

        window.addEventListener('scroll', debounce(() => {
            if (window.scrollY > 300) {
                this.button.classList.add('visible');
            } else {
                this.button.classList.remove('visible');
            }
        }, 100));

        this.button.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
}

// ===================================
// INTERSECTION OBSERVER FOR ANIMATIONS
// ===================================

class AnimationObserver {
    constructor() {
        this.init();
    }

    init() {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        // Observe sections
        $$('.section').forEach(section => {
            section.style.opacity = '0';
            section.style.transform = 'translateY(30px)';
            section.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(section);
        });
    }
}

// ===================================
// LAZY LOADING IMAGES
// ===================================

class LazyLoader {
    constructor() {
        this.init();
    }

    init() {
        if ('loading' in HTMLImageElement.prototype) {
            // Browser supports native lazy loading
            const images = $$('img[loading="lazy"]');
            images.forEach(img => {
                if (img.dataset.src) {
                    img.src = img.dataset.src;
                }
            });
        } else {
            // Fallback for browsers that don't support lazy loading
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        if (img.dataset.src) {
                            img.src = img.dataset.src;
                        }
                        observer.unobserve(img);
                    }
                });
            });

            $$('img[loading="lazy"]').forEach(img => observer.observe(img));
        }
    }
}

// ===================================
// PERFORMANCE MONITORING
// ===================================

class PerformanceMonitor {
    constructor() {
        this.init();
    }

    init() {
        if ('PerformanceObserver' in window) {
            // Monitor Largest Contentful Paint
            const lcpObserver = new PerformanceObserver((list) => {
                const entries = list.getEntries();
                const lastEntry = entries[entries.length - 1];
                console.log('LCP:', lastEntry.renderTime || lastEntry.loadTime);
            });
            lcpObserver.observe({ entryTypes: ['largest-contentful-paint'] });

            // Monitor First Input Delay
            const fidObserver = new PerformanceObserver((list) => {
                list.getEntries().forEach((entry) => {
                    console.log('FID:', entry.processingStart - entry.startTime);
                });
            });
            fidObserver.observe({ entryTypes: ['first-input'] });
        }

        // Log page load time
        window.addEventListener('load', () => {
            const perfData = performance.timing;
            const pageLoadTime = perfData.loadEventEnd - perfData.navigationStart;
            console.log('Page Load Time:', pageLoadTime + 'ms');
        });
    }
}

// ===================================
// INITIALIZE ALL MODULES
// ===================================

document.addEventListener('DOMContentLoaded', () => {
    // Initialize all components
    new Header();
    new FeedbackForm();
    new ProductSlider();
    new ProductCatalog();
    new DealersMap();
    new GlobalContacts();
    new NewsSection();
    new Certificates();
    new ModalHandler();
    new BackToTop();
    new AnimationObserver();
    new LazyLoader();
    new PerformanceMonitor();

    console.log('SKlight website initialized successfully');
});

// ===================================
// SERVICE WORKER REGISTRATION (PWA)
// ===================================

if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
        // Uncomment when service worker is ready
        // navigator.serviceWorker.register('/sw.js')
        //     .then(reg => console.log('Service Worker registered'))
        //     .catch(err => console.log('Service Worker registration failed'));
    });
}
