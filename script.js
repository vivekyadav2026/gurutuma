// Gurutma Financial Services — shared behavior

document.addEventListener('DOMContentLoaded', () => {
  // Mobile nav toggle
  const toggle = document.querySelector('.nav-toggle');
  const links = document.querySelector('.nav-links');
  if (toggle && links) {
    toggle.addEventListener('click', () => {
      const open = links.classList.toggle('open');
      toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
    });
    links.querySelectorAll('a').forEach(a => a.addEventListener('click', () => {
      links.classList.remove('open');
      toggle.setAttribute('aria-expanded', 'false');
    }));
  }

  // Announcement Banner Slider Carousel (Universal)
  const slides = document.querySelectorAll('.banner-slide');
  const dotsWrap = document.getElementById('bannerDots');
  if (slides.length && dotsWrap) {
    let idx = 0;
    dotsWrap.innerHTML = '';
    slides.forEach((_, i) => {
      const d = document.createElement('button');
      d.setAttribute('aria-label', 'Show notice ' + (i+1));
      if (i === 0) d.classList.add('active');
      d.addEventListener('click', () => show(i));
      dotsWrap.appendChild(d);
    });

    function show(n) {
      slides[idx].classList.remove('is-active');
      if (dotsWrap.children[idx]) dotsWrap.children[idx].classList.remove('active');
      idx = (n + slides.length) % slides.length;
      slides[idx].classList.add('is-active');
      if (dotsWrap.children[idx]) dotsWrap.children[idx].classList.add('active');
    }

    setInterval(() => show(idx + 1), 4500);
  }

  // Reveal elements on scroll
  const revealEls = document.querySelectorAll('.reveal');
  if ('IntersectionObserver' in window && revealEls.length) {
    const io = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('in');
          io.unobserve(entry.target);
        }
      });
    }, { threshold: 0.08 });
    revealEls.forEach(el => io.observe(el));
  } else {
    revealEls.forEach(el => el.classList.add('in'));
  }

  // Footer year fallback
  const yearEl = document.querySelector('#year');
  if (yearEl && !yearEl.textContent.trim()) {
    yearEl.textContent = new Date().getFullYear();
  }
});
