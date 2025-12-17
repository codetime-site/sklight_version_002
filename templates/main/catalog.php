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