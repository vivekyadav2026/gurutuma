// Gurutma Financial Services — shared behavior & sticky nav positioning

document.addEventListener('DOMContentLoaded', () => {
  // Sticky Navbar Dynamic Body Offset (Announcement Banner stays non-sticky below navbar)
  const stickyNav = document.querySelector('.sticky-nav-wrapper');
  function adjustStickySpacing() {
    if (stickyNav) {
      const height = stickyNav.offsetHeight;
      document.body.style.paddingTop = height + 'px';
    }
  }
  adjustStickySpacing();
  window.addEventListener('resize', adjustStickySpacing);
  setTimeout(adjustStickySpacing, 200);

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
  const dots = document.querySelectorAll('.banner-dots button');
  if (slides.length) {
    let idx = 0;
    function show(n) {
      slides[idx].classList.remove('is-active');
      if (dots[idx]) dots[idx].classList.remove('active');
      idx = (n + slides.length) % slides.length;
      slides[idx].classList.add('is-active');
      if (dots[idx]) dots[idx].classList.add('active');
    }

    dots.forEach((dot, i) => {
      dot.addEventListener('click', () => show(i));
    });

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
