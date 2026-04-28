console.log("start");

const nav = document.querySelector(".c-nav");
console.log("nav:", nav);

const active = document.querySelector(".current_page_item a");
console.log("active:", active);

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

/**header用js */
/**トグルをクリックするとメニューが開いたり閉じたりする */
const toggle = document.querySelector('.c-header__toggle');
const mobileMenu = document.querySelector('.c-header__mobile');
console.log(toggle);

toggle.addEventListener('click', () => {
  mobileMenu.classList.toggle('is-open');
});

/**ヘッダーが、指定のページが表示されるときに、上から降ってくる*/
if (location.pathname === "/home") {

window.addEventListener("load", () => {
  const header = document.querySelector(".c-header");
  if (!header) return;

  header.style.transform = "translateY(-100px)";
  header.style.opacity = "0";

  requestAnimationFrame(() => {
    header.style.transition = "all 0.5s ease";
    header.style.transform = "translateY(0)";
    header.style.opacity = "1";
  });
});

}

/** */
const el = document.querySelector('.c-card_indexVision');

const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      el.classList.add('show');
    }
  });
});

observer.observe(el);