<?php
/** @var array $services */
?>

<?php require __DIR__ . '/partials/header.view.php'; ?>
  <section class="hero">
    <div class="container hero-inner">
      <div class="hero-copy">
        <div class="eyebrow"><span class="dot"></span> Сантехническая служба</div>
        <h1>Сантехника без лишних проблем</h1>
        <p>
          Ремонт, монтаж и обслуживание сантехники.
          Приедем вовремя, найдём причину и аккуратно устраним неисправность.
        </p>
        <div class="buttons">
          <a class="btn btn-primary" href="#contacts">Вызвать сантехника</a>
          <a class="btn btn-outline" href="#services">Посмотреть услуги</a>
        </div>
        <div class="hero-note"><span style="color:var(--orange);font-weight:800">● Срочный вызов</span> · Работаем с частными квартирами, домами и небольшими коммерческими объектами.</div>
      </div>

      <div class="hero-visual">
        <div class="pipe"></div>
        <div class="water-card">
          <strong>Выезд мастера</strong>
          <span>Обычно в течение 60–90 минут по городу</span>
        </div>
      </div>
    </div>
  </section>

  <div class="trust">
    <div class="container trust-row">
      <div class="trust-item"><span class="trust-icon">01</span> Быстрый выезд</div>
      <div class="trust-item"><span class="trust-icon">02</span> Честная смета</div>
      <div class="trust-item"><span class="trust-icon">03</span> Гарантия работ</div>
      <div class="trust-item"><span class="trust-icon">04</span> Опытные мастера</div>
    </div>
  </div>

   <section class="services" id="services">
    <div class="container">
      <div class="section-head">
        <div>
          <div class="section-label">Что мы делаем</div>
          <h2>Сантехнические услуги</h2>
        </div>
        <p>От небольшой протечки до полной замены труб — выполняем основные сантехнические работы под ключ.</p>
      </div>

      <div class="service-grid">
        <?php foreach ($services as $service): ?>
          <article class="service">
            <div class="service-icon"<?php if (!empty($service['urgent'])): ?> style="background:#fff0e7;color:var(--orange)"<?php endif; ?>>
              <?= htmlspecialchars($service['icon']) ?>
            </div>
            <h3><?= htmlspecialchars($service['title']) ?></h3>
            <p><?= htmlspecialchars($service['description']) ?></p>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section id="about">
    <div class="container about-grid">
      <div class="about-visual">
        <div class="tool-card">🔧</div>
      </div>
      <div class="about-copy">
        <div class="section-label">Почему мы</div>
        <h2>Работаем аккуратно и объясняем, за что вы платите</h2>
        <p>
          Наша задача — не просто устранить симптом. Сначала определяем причину,
          предлагаем варианты решения и только после согласования приступаем к работе.
        </p>
        <div class="checks">
          <div class="check"><b>✓</b> Согласовываем стоимость до начала работ</div>
          <div class="check"><b>✓</b> Используем качественные комплектующие</div>
          <div class="check"><b>✓</b> После ремонта проверяем результат</div>
          <div class="check"><b>✓</b> Даём гарантию на выполненные работы</div>
        </div>
      </div>
    </div>
  </section>

  <section class="process" id="process">
    <div class="container">
      <div class="section-label">Простой процесс</div>
      <h2>От звонка до исправной сантехники</h2>
      <div class="process-grid">
        <div class="step">
          <div class="step-num">01 / ЗАЯВКА</div>
          <h3>Вы оставляете заявку</h3>
          <p>Звоните или оставляете контакты. Коротко описываете проблему.</p>
        </div>
        <div class="step">
          <div class="step-num">02 / ДИАГНОСТИКА</div>
          <h3>Мастер приезжает</h3>
          <p>Осматриваем место неисправности и определяем объём работ.</p>
        </div>
        <div class="step">
          <div class="step-num">03 / РЕМОНТ</div>
          <h3>Согласовываем цену</h3>
          <p>Объясняем варианты и стоимость, после чего выполняем ремонт.</p>
        </div>
        <div class="step">
          <div class="step-num">04 / ГОТОВО</div>
          <h3>Проверяем результат</h3>
          <p>Проверяем соединения, подачу воды и оставляем рабочее место чистым.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="prices">
    <div class="container">
      <div class="section-head">
        <div>
          <div class="section-label">Ориентировочно</div>
          <h2>Примеры цен</h2>
        </div>
        <p>Точная стоимость зависит от сложности и материалов. Окончательную цену мастер согласует до начала работ.</p>
      </div>

      <div class="price-grid">
        <article class="price">
          <h3>Мелкий ремонт</h3>
          <strong>от 150 <span>руб.</span></strong>
          <ul>
            <li>Замена прокладок</li>
            <li>Ремонт соединений</li>
            <li>Замена крана</li>
          </ul>
          <a class="btn btn-outline" style="color:var(--navy);border-color:var(--line);width:100%" href="#contacts">Уточнить цену</a>
        </article>

        <article class="price featured">
          <div class="badge">Популярно</div>
          <h3>Монтаж сантехники</h3>
          <strong>от 350 <span>руб.</span></strong>
          <ul>
            <li>Установка смесителя</li>
            <li>Подключение сантехники</li>
            <li>Проверка герметичности</li>
          </ul>
          <a class="btn btn-primary" style="width:100%" href="#contacts">Заказать</a>
        </article>

        <article class="price">
          <h3>Замена труб</h3>
          <strong>от 700 <span>руб.</span></strong>
          <ul>
            <li>Демонтаж старых труб</li>
            <li>Новая разводка</li>
            <li>Проверка системы</li>
          </ul>
          <a class="btn btn-outline" style="color:var(--navy);border-color:var(--line);width:100%" href="#contacts">Рассчитать</a>
        </article>
      </div>
    </div>
  </section>

  <section class="cta" id="contacts">
    <div class="container">
      <div class="cta-box">
        <div>
          <div class="section-label">Нужна помощь?</div>
          <h2>Опишите проблему — мы перезвоним</h2>
          <p>Ответим на вопросы и предварительно сориентируем по стоимости.</p>
        </div>
        <a class="btn btn-primary" href="tel:+37360000000">☎ Позвонить мастеру</a>
      </div>
    </div>
  </section>

<?php require __DIR__ . '/partials/footer.view.php'; ?>