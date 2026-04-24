document.addEventListener("DOMContentLoaded", () => {
  const targets = document.querySelectorAll('.js-fade');

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-active');
      }
    });
  });

  targets.forEach(el => observer.observe(el));
  
  /**Home用のjs */
  const el = document.querySelector('.c-scroll-text');

let x = 0;

function loop() {
  x -= 1;
  el.style.transform = `translateX(${x}px)`;
  requestAnimationFrame(loop);
}

loop();
  /*Home用のjsここまで*/
});

/**ImageWithFallback */
document.querySelectorAll('img').forEach(img => {
  img.addEventListener('error', () => {
    img.src = '/images/fallback.svg';
  });
});

/**ui>accordion */
document.querySelectorAll('.c-accordion__trigger').forEach(btn => {
  btn.addEventListener('click', () => {
    const content = btn.nextElementSibling;
    btn.classList.toggle('is-open');
    content.classList.toggle('is-open');
  });
});