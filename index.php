<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Orbital Gate X — демонстрационный sci-fi портфолио-кейс с интерактивным космическим порталом, 3D-карточками и голографическим интерфейсом.">
    <title>Orbital Gate X — космический портал</title>
    <link rel="stylesheet" href="assets/css/orbital-gate.css">
</head>
<body>
    <div class="stellar-noise" aria-hidden="true"></div>
    <div class="orbital-shell" data-parallax-scene>
        <header class="gate-header">
            <a class="brand-lock" href="#top" aria-label="Orbital Gate X — наверх">
                <span class="brand-orbit" aria-hidden="true"></span>
                <span>Orbital Gate X</span>
            </a>
            <nav class="gate-nav" aria-label="Основная навигация">
                <a href="#mission">Миссия</a>
                <a href="#modules">Модули</a>
                <a href="#gallery">Галерея</a>
                <a href="#timeline">Экспедиция</a>
            </nav>
            <a class="signal-pill" href="mailto:signal@orbitalgate.demo">Канал связи</a>
        </header>

        <main id="top">
            <section class="hero-section section-grid" aria-labelledby="hero-title">
                <div class="hero-copy" data-depth="0.12">
                    <p class="eyebrow">Demo Station // Low Earth Orbit</p>
                    <h1 id="hero-title">Открой орбитальный портал</h1>
                    <p class="hero-lead">Orbital Gate X — фантастический интерфейс экспедиции, где стеклянные панели, мягкое свечение и нативная 3D-глубина собираются в дорогой frontend-кейс без тяжёлых библиотек.</p>
                    <div class="hero-actions" aria-label="Быстрые действия">
                        <a class="btn btn-primary" href="#activate">Активировать портал</a>
                        <a class="btn btn-ghost" href="#modules">Смотреть модули</a>
                    </div>
                    <dl class="telemetry-strip" aria-label="Телеметрия станции">
                        <div><dt>Orbit</dt><dd>LEO-04</dd></div>
                        <div><dt>Core</dt><dd>92%</dd></div>
                        <div><dt>Signal</dt><dd>Stable</dd></div>
                    </dl>
                </div>
            </section>

            <section class="mission-section glass-panel" id="mission" aria-labelledby="mission-title">
                <div>
                    <p class="eyebrow">Mission Brief</p>
                    <h2 id="mission-title">Лаборатория будущего на границе атмосферы</h2>
                </div>
                <p>Главная страница превращена в промо-портал станции: пользователь входит в систему, считывает телеметрию, исследует модули и запускает демонстрационную симуляцию. Всё построено на CSS-перспективе, градиентах, transform и лёгком JavaScript.</p>
            </section>

            <section class="modules-section" id="modules" aria-labelledby="modules-title">
                <div class="section-heading">
                    <p class="eyebrow">Station Modules</p>
                    <h2 id="modules-title">3D-карточки модулей станции</h2>
                    <p>Наведи курсор или открой карточку с клавиатуры, чтобы увидеть обратную сторону голографической панели.</p>
                </div>
                <div class="module-grid perspective-grid">
                    <article class="flip-card tilt-card" data-tilt tabindex="0">
                        <div class="flip-card-inner">
                            <div class="flip-face flip-front">
                                <span class="module-code">NX-01</span>
                                <h3>Навигационный модуль</h3>
                                <p>Прокладывает маршрут через орбитальные коридоры и стабилизирует курс портала.</p>
                            </div>
                            <div class="flip-face flip-back">
                                <h3>Vector AI</h3>
                                <p>Синхронизация маяков, расчёт угла входа и мягкая коррекция траектории.</p>
                                <a href="#gallery">Открыть карту станции</a>
                            </div>
                        </div>
                    </article>
                    <article class="flip-card tilt-card" data-tilt tabindex="0">
                        <div class="flip-card-inner">
                            <div class="flip-face flip-front">
                                <span class="module-code">CR-12</span>
                                <h3>Крио-капсула</h3>
                                <p>Сохраняет биоритмы экипажа в спокойном световом поле глубокого сна.</p>
                            </div>
                            <div class="flip-face flip-back">
                                <h3>Cryo Bloom</h3>
                                <p>Пульсирующие сенсоры отслеживают тепло, кислород и мягкое пробуждение.</p>
                                <a href="#energy">Проверить ядро</a>
                            </div>
                        </div>
                    </article>
                    <article class="flip-card tilt-card" data-tilt tabindex="0">
                        <div class="flip-card-inner">
                            <div class="flip-face flip-front">
                                <span class="module-code">GR-09</span>
                                <h3>Гравитационное ядро</h3>
                                <p>Создаёт устойчивую массу вокруг портала и держит станцию в равновесии.</p>
                            </div>
                            <div class="flip-face flip-back">
                                <h3>Pulse Reactor</h3>
                                <p>Концентрические поля гасят вибрации и распределяют энергию по контуру.</p>
                                <a href="#energy">Запустить симуляцию</a>
                            </div>
                        </div>
                    </article>
                    <article class="flip-card tilt-card" data-tilt tabindex="0">
                        <div class="flip-card-inner">
                            <div class="flip-face flip-front">
                                <span class="module-code">SC-44</span>
                                <h3>Карта сектора</h3>
                                <p>Голографическая сетка показывает доки, шлюзы и безопасные траектории.</p>
                            </div>
                            <div class="flip-face flip-back">
                                <h3>Sector Mesh</h3>
                                <p>Слои карты поднимаются в глубину, чтобы маршрут читался без перегруза.</p>
                                <a href="#timeline">Смотреть экспедицию</a>
                            </div>
                        </div>
                    </article>
                </div>
            </section>

            <section class="gallery-section" id="gallery" aria-labelledby="gallery-title">
                <div class="section-heading">
                    <p class="eyebrow">Deep Gallery</p>
                    <h2 id="gallery-title">Интерактивная галерея с глубиной</h2>
                </div>
                <div class="depth-gallery">
                    <article class="gallery-card tilt-card" data-tilt>
                        <span class="scan-line" aria-hidden="true"></span>
                        <h3>Орбитальный док</h3>
                        <p>Стыковочный контур подсвечивает путь входа в станцию.</p>
                    </article>
                    <article class="gallery-card gallery-card-large tilt-card" data-tilt>
                        <span class="scan-line" aria-hidden="true"></span>
                        <h3>Портальная шахта</h3>
                        <p>Многослойное поле создаёт иллюзию тоннеля через CSS-перспективу.</p>
                    </article>
                    <article class="gallery-card tilt-card" data-tilt>
                        <span class="scan-line" aria-hidden="true"></span>
                        <h3>Лабораторный мост</h3>
                        <p>Голографические линии соединяют телеметрию и карту сектора.</p>
                    </article>
                </div>
            </section>

            <section class="energy-section glass-panel" id="energy" aria-labelledby="energy-title">
                <div class="energy-orb" aria-hidden="true"></div>
                <div>
                    <p class="eyebrow">Core Energy</p>
                    <h2 id="energy-title">Энергия ядра растёт слоями</h2>
                    <p>Пульс реактора собран из radial-gradient и conic-gradient: визуально глубоко, но без canvas, WebGL и тяжёлых runtime-зависимостей.</p>
                </div>
                <a class="btn btn-ghost" href="#activate">Запустить симуляцию</a>
            </section>

            <section class="timeline-section" id="timeline" aria-labelledby="timeline-title">
                <div class="section-heading">
                    <p class="eyebrow">Expedition Timeline</p>
                    <h2 id="timeline-title">Маршрут экспедиции</h2>
                </div>
                <ol class="timeline-list">
                    <li><span>01</span><strong>Сканирование сектора</strong><p>Станция собирает карту частиц и открывает безопасный коридор.</p></li>
                    <li><span>02</span><strong>Стабилизация ядра</strong><p>Реактор выравнивает гравитационное кольцо перед входом.</p></li>
                    <li><span>03</span><strong>Синхронизация экипажа</strong><p>HUD показывает статус модулей и готовность лаборатории.</p></li>
                    <li><span>04</span><strong>Активация портала</strong><p>Orbital Gate X переводит интерфейс в режим демонстрационного запуска.</p></li>
                </ol>
            </section>

            <section class="final-cta glass-panel" id="activate" aria-labelledby="activate-title">
                <p class="eyebrow">Final Sequence</p>
                <h2 id="activate-title">Готов активировать портал?</h2>
                <p>Канал связи: <a href="mailto:signal@orbitalgate.demo">signal@orbitalgate.demo</a><br>Сектор: Low Earth Orbit / Demo Station</p>
                <div class="hero-actions">
                    <a class="btn btn-primary" href="mailto:signal@orbitalgate.demo">Активировать портал</a>
                    <a class="btn btn-ghost" href="#modules">Смотреть модули</a>
                </div>
            </section>
        </main>
    </div>
    <script src="assets/js/orbital-gate.js" defer></script>
</body>
</html>
