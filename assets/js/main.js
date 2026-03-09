/* ==============================================
   main.js — Omulus Legal PHP Site
   ============================================== */

document.addEventListener('DOMContentLoaded', function () {

  /* ── Mobile Menu ── */
  const menuBtn = document.getElementById('mobile-menu-btn');
  const mobileNav = document.getElementById('mobile-nav');
  const menuIcon = document.getElementById('menu-icon');

  if (menuBtn && mobileNav) {
    menuBtn.addEventListener('click', function () {
      const open = mobileNav.classList.toggle('open');
      menuIcon.innerHTML = open
        ? '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>'
        : '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>';
    });
  }

  /* ── Header Scroll Shadow ── */
  const header = document.getElementById('site-header');
  if (header) {
    window.addEventListener('scroll', function () {
      if (window.scrollY > 10) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
    });
  }

  /* ── Dropdown Menus (Desktop) ── */
  const dropdownToggles = document.querySelectorAll('[data-dropdown]');
  dropdownToggles.forEach(function (toggle) {
    const targetId = toggle.getAttribute('data-dropdown');
    const menu = document.getElementById(targetId);
    if (!menu) return;

    toggle.addEventListener('mouseenter', function () { menu.classList.add('open'); });
    toggle.addEventListener('mouseleave', function () { menu.classList.remove('open'); });
    menu.addEventListener('mouseenter', function () { menu.classList.add('open'); });
    menu.addEventListener('mouseleave', function () { menu.classList.remove('open'); });
  });

  /* ── Mobile Accordion Dropdowns ── */
  const mobileToggles = document.querySelectorAll('[data-mobile-toggle]');
  mobileToggles.forEach(function (toggle) {
    toggle.addEventListener('click', function () {
      const targetId = toggle.getAttribute('data-mobile-toggle');
      const submenu = document.getElementById(targetId);
      if (submenu) {
        submenu.classList.toggle('open');
        const arrow = toggle.querySelector('.mobile-arrow');
        if (arrow) arrow.classList.toggle('rotated');
      }
    });
  });

  /* ── Scroll Animations ── */
  const animElements = document.querySelectorAll(
    '.animate-on-scroll, .animate-on-scroll-left, .animate-on-scroll-right, .animate-on-scroll-fast'
  );

  if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add('in-view');
            observer.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.12, rootMargin: '0px 0px -40px 0px' }
    );
    animElements.forEach(function (el) { observer.observe(el); });
  } else {
    animElements.forEach(function (el) { el.classList.add('in-view'); });
  }

  /* ── Counter Animation ── */
  function animateCounter(el) {
    const target = parseFloat(el.getAttribute('data-target'));
    const suffix = el.getAttribute('data-suffix') || '';
    const prefix = el.getAttribute('data-prefix') || '';
    const decimals = el.getAttribute('data-decimals') ? parseInt(el.getAttribute('data-decimals')) : 0;
    const duration = 2000;
    const start = performance.now();

    function update(now) {
      const elapsed = now - start;
      const progress = Math.min(elapsed / duration, 1);
      const eased = 1 - Math.pow(1 - progress, 3);
      const current = target * eased;
      el.textContent = prefix + current.toFixed(decimals) + suffix;
      if (progress < 1) requestAnimationFrame(update);
    }
    requestAnimationFrame(update);
  }

  const counters = document.querySelectorAll('[data-target]');
  if (counters.length && 'IntersectionObserver' in window) {
    const counterObserver = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            animateCounter(entry.target);
            counterObserver.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.5 }
    );
    counters.forEach(function (c) { counterObserver.observe(c); });
  }

  /* ── Platform Feature Tabs ── */
  const tabBtns = document.querySelectorAll('[data-tab]');
  const tabPanels = document.querySelectorAll('[data-panel]');

  tabBtns.forEach(function (btn) {
    btn.addEventListener('click', function () {
      const target = btn.getAttribute('data-tab');

      tabBtns.forEach(function (b) { b.classList.remove('active'); });
      tabPanels.forEach(function (p) { p.classList.remove('active'); });

      btn.classList.add('active');
      const panel = document.querySelector('[data-panel="' + target + '"]');
      if (panel) panel.classList.add('active');
    });
  });

  /* ── Demo Form Submission ── */
  const demoForm = document.getElementById('demo-form');
  if (demoForm) {
    demoForm.addEventListener('submit', function (e) {
      e.preventDefault();
      const btn = demoForm.querySelector('button[type="submit"]');
      const originalText = btn.textContent;
      btn.textContent = 'Sending...';
      btn.disabled = true;

      // Simulate submission (replace with real endpoint)
      setTimeout(function () {
        const successMsg = document.getElementById('form-success');
        if (successMsg) {
          demoForm.style.display = 'none';
          successMsg.style.display = 'block';
        } else {
          btn.textContent = 'Sent! We\'ll be in touch.';
        }
      }, 1200);
    });
  }

  /* ── Smooth Scroll for anchor links ── */
  document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
      const targetId = this.getAttribute('href').slice(1);
      const target = document.getElementById(targetId);
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        if (mobileNav) mobileNav.classList.remove('open');
      }
    });
  });

});
