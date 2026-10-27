const burger = document.getElementById('burger');
  const menu = document.getElementById('menu');

  burger.addEventListener('click', () => {
    const opened = burger.classList.toggle('active');
    menu.classList.toggle('open', opened);
    burger.setAttribute('aria-expanded', opened ? 'true' : 'false');
    burger.setAttribute('aria-label', opened ? 'Закрыть меню' : 'Открыть меню');
  });

  menu.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', () => {
      burger.classList.remove('active');
      menu.classList.remove('open');
      burger.setAttribute('aria-expanded', 'false');
      burger.setAttribute('aria-label', 'Открыть меню');
    });
  });

  window.addEventListener('resize', () => {
    if (window.innerWidth > 900) {
      burger.classList.remove('active');
      menu.classList.remove('open');
      burger.setAttribute('aria-expanded', 'false');
    }
  });