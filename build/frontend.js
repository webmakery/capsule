/******/ (function() { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/js-frontend/bannersAnimation.js":
/*!*********************************************!*\
  !*** ./src/js-frontend/bannersAnimation.js ***!
  \*********************************************/
/***/ (function(__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/** ----------------------------------------------------------------------------
 * Banners Animation */

document.addEventListener('DOMContentLoaded', function () {
  const banners = document.querySelectorAll('.mbf-banner, .mbf-split-banners');
  if (!banners.length) return;
  banners.forEach(banner => {
    if (banner.getAttribute('data-mbf-text_animation') !== 'true') return;
    const headings = banner.querySelectorAll('.wp-block-heading');
    if (!headings.length) return;
    const observer = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if (!entry.isIntersecting) return;
        obs.unobserve(entry.target);
        headings.forEach(heading => {
          animateHeadingByRows(heading);
        });
      });
    }, {
      threshold: 0.3
    });
    observer.observe(banner);
  });
});
function animateHeadingByRows(el) {
  const text = el.innerText.trim();
  if (!text) return;
  el.innerHTML = '';
  const words = text.split(/\s+/);
  words.forEach(word => {
    const span = document.createElement('span');
    span.className = 'reveal-word';
    span.textContent = word;
    el.appendChild(span);
    el.appendChild(document.createTextNode(' '));
  });
  requestAnimationFrame(() => {
    const rows = [];
    let currentTop = null;
    el.querySelectorAll('.reveal-word').forEach(span => {
      const top = span.offsetTop;
      if (currentTop === null || Math.abs(top - currentTop) > 5) {
        rows.push([span]);
        currentTop = top;
      } else {
        rows[rows.length - 1].push(span);
      }
    });
    rows.forEach((row, rowIndex) => {
      row.forEach((span, wordIndex) => {
        setTimeout(() => {
          span.classList.add('is-visible');
        }, rowIndex * 300 + wordIndex * 80);
      });
    });
  });
}

/***/ }),

/***/ "./src/js-frontend/burgerMenu.js":
/*!***************************************!*\
  !*** ./src/js-frontend/burgerMenu.js ***!
  \***************************************/
/***/ (function(__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/** ----------------------------------------------------------------------------
 * Offcanvas toggles header panels and overlay */

(function () {
  const body = document.body;
  const headerElement = document.querySelector('header.wp-block-template-part');
  const headerOverlay = document.querySelector('.mbf-header-overlay');
  const navToggles = document.querySelectorAll('.wp-block-navigation__responsive-container-open, .wp-block-navigation__responsive-container-close');
  const navContainer = document.querySelector('.wp-block-navigation__responsive-container');
  navToggles.forEach(navToggle => {
    navToggle.addEventListener('click', function (e) {
      e.stopImmediatePropagation();
      e.preventDefault();
      headerElement.classList.toggle('mbf-burgermenu-visible');
      body.classList.toggle('mbf-burgermenu-active');
      navContainer?.classList.toggle('is-menu-open');
    });
  });
  if (headerOverlay) {
    headerOverlay.addEventListener('click', function (e) {
      e.preventDefault();
      if (headerElement.classList.contains('mbf-burgermenu-visible')) {
        headerElement.classList.remove('mbf-burgermenu-visible');
        body.classList.remove('mbf-burgermenu-active');
        if (navContainer) {
          navContainer.classList.remove('is-menu-open');
        }
      }
    });
  }
  function slideDown(element, duration = 350) {
    element.style.display = 'block';
    element.style.overflow = 'hidden';
    let height = element.scrollHeight;
    element.style.height = 0;
    setTimeout(() => {
      element.style.transition = `height ${duration}ms`;
      element.style.height = height + 'px';
      element.addEventListener('transitionend', function te() {
        element.removeEventListener('transitionend', te);
        element.style.removeProperty('height');
        element.style.removeProperty('transition');
        element.style.removeProperty('overflow');
      });
    }, 0);
  }
  function slideUp(element, duration = 350) {
    element.style.height = element.offsetHeight + 'px';
    element.style.overflow = 'hidden';
    setTimeout(() => {
      element.style.transition = `height ${duration}ms`;
      element.style.height = '0';
      element.addEventListener('transitionend', function te() {
        element.removeEventListener('transitionend', te);
        if (element.style.height === '0px') {
          element.style.display = 'none';
        }
        element.style.removeProperty('height');
        element.style.removeProperty('transition');
        element.style.removeProperty('overflow');
      });
    }, 0);
  }
  function slideToggle(element, duration = 350) {
    if (window.getComputedStyle(element).display === 'none') {
      return slideDown(element, duration);
    } else {
      return slideUp(element, duration);
    }
  }
  HTMLElement.prototype.responsiveNav = function () {
    this.classList.remove('menu-item-expanded');
    document.body.classList.remove('sub-menu-active');
    let nextElement = this.nextElementSibling;
    if (nextElement && !nextElement.classList.contains('wp-block-navigation-submenu')) {
      nextElement = nextElement.nextElementSibling;
    }
    if (nextElement && nextElement.classList.contains('submenu-visible')) {
      nextElement.classList.remove('submenu-visible');
      slideUp(nextElement);
      this.parentElement.classList.remove('menu-item-expanded');
      nextElement.querySelectorAll('.submenu-visible').forEach(sub => {
        sub.classList.remove('submenu-visible');
        slideUp(sub);
      });
      nextElement.querySelectorAll('.menu-item-expanded').forEach(subItem => {
        subItem.classList.remove('menu-item-expanded');
      });
    } else {
      let parentOfParent = this.parentElement.parentElement;
      parentOfParent.querySelectorAll('.wp-block-navigation-item > .wp-block-navigation-submenu').forEach(subMenu => {
        subMenu.classList.remove('submenu-visible');
        slideUp(subMenu);
      });
      parentOfParent.querySelectorAll('.menu-item-expanded').forEach(item => {
        item.classList.remove('menu-item-expanded');
      });
      if (nextElement) {
        nextElement.classList.toggle('submenu-visible');
        slideToggle(nextElement);
      }
      this.parentElement.classList.toggle('menu-item-expanded');
      // document.body.classList.add('sub-menu-active');
    }
  };
  document.addEventListener('DOMContentLoaded', function () {
    let menuItems = document.querySelectorAll('.wp-block-navigation.is-style-mbf-primary-menu .has-child');
    menuItems.forEach(menuItem => {
      let toggle = menuItem.querySelector('.wp-block-navigation-submenu__toggle');
      if (toggle) {
        toggle.addEventListener('click', function (e) {
          e.stopImmediatePropagation(); // stops WP’s own handler
          e.preventDefault();
          this.responsiveNav();
        });
      }
    });
    const megaMenu = document.querySelector('.wp-block-navigation__submenu-container.mega-menu-container');
    const makeFullWidth = () => {
      if (!megaMenu) return;
      if (window.matchMedia('(min-width: 768px) and (max-width: 1199px)').matches) {
        // Wait until layout is calculated
        requestAnimationFrame(() => {
          const parentRect = megaMenu.parentElement.getBoundingClientRect();

          // Width: full viewport minus paddings and 1rem, max 920px
          megaMenu.style.setProperty('width', `min(920px,
            calc(100vw - var(--wp--style--root--padding-left, 1rem) - var(--wp--style--root--padding-right, 1rem) - 1rem))`);

          // Left offset
          megaMenu.style.setProperty('left', `calc((${parentRect.left}px - var(--wp--style--root--padding-left, 16px)) * -1)`, 'important');
          megaMenu.style.transform = 'none';
        });
      } else {
        // Remove inline styles outside breakpoint
        megaMenu.style.removeProperty('width');
        megaMenu.style.removeProperty('left');
        megaMenu.style.transform = '';
      }
    };
    makeFullWidth();
    window.addEventListener('resize', makeFullWidth);
  });
  document.addEventListener('click', e => {
    if (!e.target.closest('.wp-block-navigation-item')) {
      if (document.body.classList.contains('sub-menu-active')) {
        document.body.classList.remove('sub-menu-active');
      }
      const visibleSubmenus = document.querySelectorAll('.wp-block-navigation__submenu-container.submenu-visible');
      visibleSubmenus.forEach(submenu => {
        submenu.classList.remove('submenu-visible');
      });
    }
  });
})();

/***/ }),

/***/ "./src/js-frontend/categoriesBanner.js":
/*!*********************************************!*\
  !*** ./src/js-frontend/categoriesBanner.js ***!
  \*********************************************/
/***/ (function(__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/** ----------------------------------------------------------------------------
 * Categories Banner */

document.addEventListener('DOMContentLoaded', () => {
  const banners = document.querySelectorAll('.mbf-product-categories-banner');
  banners.forEach(banner => {
    const terms = banner.querySelectorAll('.wp-block-term');
    if (!terms.length) return;

    // 1️⃣ Activate first term by default
    terms.forEach(term => term.classList.remove('is-active'));
    terms[0].classList.add('is-active');

    // 2️⃣ Attach click handlers
    terms.forEach(term => {
      const trigger = term.querySelector('.wp-block-term-name');
      if (!trigger) return;
      trigger.addEventListener('click', e => {
        e.preventDefault();

        // Remove active from all
        terms.forEach(t => t.classList.remove('is-active'));

        // Activate clicked
        term.classList.add('is-active');
      });
    });
  });
});

/***/ }),

/***/ "./src/js-frontend/footer.js":
/*!***********************************!*\
  !*** ./src/js-frontend/footer.js ***!
  \***********************************/
/***/ (function(__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/** ----------------------------------------------------------------------------
 * Footer */

(function () {
  const body = document.body;
  const footer = document.querySelector('.mbf-footer');
  const footerInner = footer?.querySelector(':scope > .wp-block-group');
  if (!footer || !footerInner) return;
  const updateFooterStyles = () => {
    const bodyWidth = body.clientWidth;
    const footerInnerWidth = footerInner.offsetWidth;
    const totalFooterWidth = footerInnerWidth + 24 + 24;
    if (bodyWidth <= totalFooterWidth) {
      footer.style.marginBottom = '0px';
      footer.style.paddingBottom = '0px';
    }
  };

  // Initial check
  updateFooterStyles();

  // Watch for resize (debounced)
  let resizeTimer;
  window.addEventListener('resize', () => {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(updateFooterStyles, 100);
  });
})();

/***/ }),

/***/ "./src/js-frontend/heroSlider.js":
/*!***************************************!*\
  !*** ./src/js-frontend/heroSlider.js ***!
  \***************************************/
/***/ (function(__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/**
 *  Hero Slider
 */

(() => {
  /**
   * Class providing initialization and lifecycle for MBF sliders.
   */
  class MBFSlider {
    /**
     *  Element Selectors
     */
    static SECTION = '.mbf-hero-slider'; // Section container for data attributes
    static SLIDER_SELECTOR = 'is-type-mbf-slider'; // Swiper main element
    static WRAPPER_SELECTOR = ':scope > .wp-block-group'; // Swiper wrapper
    static SLIDES_SELECTOR = ':scope > .is-type-mbf-slider__item'; // Swiper items

    /** @type {Promise<void>|null} Promise to ensure Swiper is loaded once */
    static swiperPromise = null;

    /** Load Swiper script lazily if it's not already available */
    static ensureSwiper() {
      if (typeof window.Swiper !== 'undefined') return Promise.resolve();
      if (MBFSlider.swiperPromise) return MBFSlider.swiperPromise;
      MBFSlider.swiperPromise = new Promise((resolve, reject) => {
        const url = typeof window.frontendSettings === 'object' ? window.frontendSettings.swiperUrl : null;
        if (!url) {
          reject(new Error('Unable to resolve Swiper URL'));
          return;
        }
        const el = document.createElement('script');
        el.src = url;
        el.async = true;
        el.onload = () => resolve();
        el.onerror = () => reject(new Error(`Failed to load Swiper from ${url}`));
        document.head.appendChild(el);
      }).catch(() => {
        // Swallow the error to keep the promise settled and avoid unhandled rejections
      });
      return MBFSlider.swiperPromise;
    }

    /**
     * Initialize custom cursor on hover for navigation buttons.
     * @param {HTMLElement} slider
     */
    static initCursor(slider) {
      const prevBtn = slider.querySelector(`.${MBFSlider.SLIDER_SELECTOR}__button-prev`);
      const nextBtn = slider.querySelector(`.${MBFSlider.SLIDER_SELECTOR}__button-next`);
      if (!prevBtn && !nextBtn) return;

      // Create cursor element dynamically if it doesn't exist
      let cursor = slider.querySelector(`.${MBFSlider.SLIDER_SELECTOR}__cursor`);
      if (!cursor) {
        cursor = document.createElement('div');
        cursor.classList.add(`${MBFSlider.SLIDER_SELECTOR}__cursor`);
        slider.appendChild(cursor);
      }

      // Update cursor position relative to the slider
      const updateCursorPosition = event => {
        const sliderRect = slider.getBoundingClientRect();
        const x = event.clientX - sliderRect.left;
        const y = event.clientY - sliderRect.top;
        cursor.style.left = `${x}px`;
        cursor.style.top = `${y}px`;
      };

      // Track mouse movement within the slider
      slider.addEventListener('mousemove', event => {
        updateCursorPosition(event);
      });

      // Apply .is-active when hovering over navigation buttons
      const addActive = btn => btn?.classList.add('is-active');
      const removeActive = btn => btn?.classList.remove('is-active');
      prevBtn?.addEventListener('mouseenter', () => addActive(prevBtn));
      prevBtn?.addEventListener('mouseleave', () => removeActive(prevBtn));
      nextBtn?.addEventListener('mouseenter', () => addActive(nextBtn));
      nextBtn?.addEventListener('mouseleave', () => removeActive(nextBtn));
    }

    /**
     * Initialize all sliders found on the page.
     */
    static initAll() {
      const sections = document.querySelectorAll(MBFSlider.SECTION);
      if (!sections.length) return;
      const io = 'IntersectionObserver' in window ? new IntersectionObserver(MBFSlider.handleIntersection, {
        root: null,
        threshold: 0.5
      }) : null;
      sections.forEach(section => {
        const slider = section.querySelector(`:scope > .${MBFSlider.SLIDER_SELECTOR}`);
        if (!slider) return;
        if (io) {
          io.observe(slider);
        } else {
          // Fallback if IntersectionObserver is unavailable
          // Ensure Swiper is present, then init
          MBFSlider.ensureSwiper().then(() => MBFSlider.initSection(slider));
        }
      });

      // Debounced resize: Swiper updates layout when columns-per-view change via CSS
      let resizeRAF = 0;
      const onResize = () => {
        if (resizeRAF) cancelAnimationFrame(resizeRAF);
        resizeRAF = requestAnimationFrame(() => {
          const sliders = document.querySelectorAll(`.${MBFSlider.SLIDER_SELECTOR}`);
          sliders.forEach(slider => {
            if (slider.classList.contains('initialized')) {
              MBFSlider.scheduleUpdate(slider);
            }
          });
        });
      };
      window.addEventListener('resize', onResize, {
        passive: true
      });
    }

    /**
     * IntersectionObserver callback to lazy-init sliders.
     * @param {IntersectionObserverEntry[]} entries
     */
    static handleIntersection(entries) {
      entries.forEach(entry => {
        const slider = entry.target;
        const inst = slider.swiperInstance;
        const paginationEl = slider.querySelector('.swiper-pagination');
        const progressEl = slider.querySelector('.is-type-mbf-slider__progress');
        if (entry.isIntersecting) {
          // Initialize slider if not already done
          if (!inst) {
            MBFSlider.initSection(slider);
          } else if (inst?.autoplay && !inst.autoplay.running) {
            inst.autoplay.start();
          }
          slider.classList.add('visible');
          slider.classList.remove('paused');
          paginationEl?.classList.remove('paused');
          progressEl?.classList.remove('paused');
        } else {
          // Pause autoplay if running
          if (inst?.autoplay?.running) {
            inst.autoplay.stop();
          }
          slider.classList.remove('visible');
          slider.classList.add('paused');
          paginationEl?.classList.add('paused');
          progressEl?.classList.add('paused');
        }
      });
    }

    /**
     * Initialize a single slider instance.
     * Keeps user settings intact; avoids heavy update loops.
     * @param {HTMLElement} slider
     */
    static initSection(slider) {
      if (slider.classList.contains('initialized')) return;

      // Gate initialization on Swiper being available
      if (typeof window.Swiper === 'undefined') {
        MBFSlider.ensureSwiper().then(() => MBFSlider.initSection(slider));
        return;
      }
      const prepared = MBFSlider.prepare(slider);
      if (!prepared || !prepared.slides.length) return;

      // 🔹 NEW: Parent container for data attributes
      const container = slider.closest(MBFSlider.SECTION) || slider;

      // Read settings from parent or self
      const autoplayValue = container.getAttribute('data-mbf-autoplay') || 'false';
      const delay = parseInt(container.getAttribute('data-mbf-delay') || '3000', 10);
      const speed = parseInt(container.getAttribute('data-mbf-speed') || '800', 10);
      const navigationEnabled = (container.getAttribute('data-mbf-navigation') || 'true') === 'true';
      const paginationEnabled = (container.getAttribute('data-mbf-pagination') || 'true') === 'true';
      const progressEnabled = (container.getAttribute('data-mbf-progress') || 'true') === 'true';
      const textAnimation = (container.getAttribute('data-mbf-text_animation') || 'true') === 'true';
      const gap = parseInt(container?.getAttribute('data-mbf-gap') || '4', 10);

      // Ensure control containers exist or create them dynamically
      const controls = MBFSlider.ensureControls(slider, {
        navigationEnabled,
        paginationEnabled,
        progressEnabled
      });
      MBFSlider.initCursor(slider);
      const config = {
        // Default wrapperClass is 'swiper-wrapper' (we add it in prepare)
        direction: 'horizontal',
        loop: prepared.slides.length > 1,
        speed: speed,
        parallax: false,
        slidesPerView: 1,
        spaceBetween: gap,
        a11y: {
          slideRole: 'article',
          slideLabelMessage: 'Slide {{index}} of {{slidesLength}}'
        },
        autoplay: autoplayValue === 'true' || autoplayValue === '1' ? {
          delay,
          disableOnInteraction: false,
          pauseOnMouseEnter: true
        } : false,
        // Keep Swiper in sync with Gutenberg edits (lightly)
        observer: true,
        observeParents: true,
        observeSlideChildren: true,
        on: {
          /**
           * React only when the real number of Columns changed.
           * Avoids feedback loops from continuous DOM mutations.
           */
          observerUpdate() {
            const current = MBFSlider.countOriginalSlides(slider);
            if (slider.dataset.slidesCount !== String(current)) {
              MBFSlider.prepare(slider); // no-op if already marked
              slider.dataset.slidesCount = String(current);
              MBFSlider.scheduleUpdate(slider);
            }
          }
        }
      };
      if (controls.nextEl && controls.prevEl && navigationEnabled) {
        config.navigation = {
          nextEl: controls.nextEl,
          prevEl: controls.prevEl
        };
      }
      if (controls.paginationEl && paginationEnabled) {
        config.pagination = {
          el: controls.paginationEl,
          clickable: true,
          type: 'bullets',
          bulletElement: 'li'
        };
      }
      const instance = new Swiper(slider, config);

      // Add <span> to pagination bullets and ensure valid <li> structure.
      if (controls.paginationEl) {
        const paginationEl = controls.paginationEl;
        paginationEl.setAttribute('role', 'presentation');
        const addSpanToBullets = () => {
          paginationEl.querySelectorAll('.swiper-pagination-bullet').forEach(bullet => {
            if (!bullet.querySelector('span')) {
              const span = document.createElement('span');
              bullet.appendChild(span);
            }
          });
        };

        // MutationObserver to keep pagination <ul> valid.
        const observer = new MutationObserver(mutations => {
          for (const m of mutations) {
            if (m.addedNodes.length > 0) {
              m.addedNodes.forEach(node => {
                if (node.nodeType === 1 && node.tagName !== 'LI' && node.tagName !== 'SCRIPT' && node.tagName !== 'TEMPLATE') {
                  node.remove(); // Remove any unexpected element.
                }
              });
            }
          }
        });
        observer.observe(paginationEl, {
          childList: true
        });

        // Run once after creation
        setTimeout(addSpanToBullets, 0);
        instance.on('paginationUpdate', addSpanToBullets);
      }
      if (controls.progressEl && progressEnabled && autoplayValue === 'true') {
        const fill = controls.progressEl.querySelector('.is-type-mbf-slider__progress-fill');
        if (fill) {
          fill.classList.add('start'); // start animation on first slide
        }
        instance.on('slideChangeTransitionStart', () => {
          if (!fill) return;
          fill.classList.remove('start'); // reset
          void fill.offsetWidth; // force reflow
          fill.classList.add('start'); // restart for new slide
        });
      }

      // Pause on hover
      slider.addEventListener('mouseenter', () => {
        if (instance.autoplay && instance.autoplay.running) {
          instance.autoplay.stop();
        }
        slider.classList.add('paused');
        controls.paginationEl?.classList.add('paused');
        controls.progressEl?.classList.add('paused');
      });
      slider.addEventListener('mouseleave', () => {
        if (autoplayValue === 'true' || autoplayValue === '1') {
          instance.autoplay.start();
        }
        slider.classList.remove('paused');
        controls.paginationEl?.classList.remove('paused');
        controls.progressEl?.classList.remove('paused');
      });
      if (textAnimation) {
        const runTextAnimation = slideEl => {
          slideEl.querySelectorAll('.wp-block-heading').forEach(h => {
            // reset for re-run
            h.dataset.mbfAnimated = '0';
            MBFSlider.animateHeading(h);
          });
        };

        // First visible slide
        runTextAnimation(instance.slides[instance.activeIndex]);

        // On slide change
        instance.on('slideChangeTransitionStart', () => {
          const slide = instance.slides[instance.activeIndex];
          if (slide) runTextAnimation(slide);
        });
      }

      // Initial calculation
      MBFSlider.updatePaginationBackground(slider);

      // On pagination update (Swiper creates bullets lazily)
      instance.on('paginationUpdate', () => {
        MBFSlider.updatePaginationBackground(slider);
      });

      // On resize (layout may change)
      window.addEventListener('resize', () => {
        MBFSlider.updatePaginationBackground(slider);
      }, {
        passive: true
      });
      slider.swiperInstance = instance;
      slider.dataset.slidesCount = String(MBFSlider.countOriginalSlides(slider));
      slider.classList.add('initialized');
    }

    /**
     * Find wrapper (first direct Columns block) and ensure required classes.
     * Marks direct Columns as slides only if not already marked.
     * @param {HTMLElement} slider
     * @returns {{wrapper: HTMLElement, slides: NodeListOf<HTMLElement>}|null}
     */
    static prepare(slider) {
      const wrapper = MBFSlider.getWrapper(slider);
      if (!wrapper) return null;

      // Ensure container has Swiper base class for styling
      if (!slider.classList.contains('swiper')) slider.classList.add('swiper');

      // Ensure wrapper has Swiper's wrapper class
      if (!wrapper.classList.contains('swiper-wrapper')) wrapper.classList.add('swiper-wrapper');

      // Mark only new slides
      wrapper.querySelectorAll(`${MBFSlider.SLIDES_SELECTOR}:not(.swiper-slide)`).forEach(el => el.classList.add('swiper-slide'));
      const slides = wrapper.querySelectorAll(MBFSlider.SLIDES_SELECTOR);
      return {
        wrapper,
        slides
      };
    }
    static animateHeading(el) {
      if (!el || el.dataset.mbfAnimated === '1') return;
      const text = el.innerText.trim();
      if (!text) return;
      el.dataset.mbfAnimated = '1';
      el.innerHTML = '';
      const words = text.split(/\s+/);
      words.forEach(word => {
        const span = document.createElement('span');
        span.className = 'reveal-word';
        span.textContent = word;
        el.appendChild(span);
        el.appendChild(document.createTextNode(' '));
      });
      requestAnimationFrame(() => {
        const rows = [];
        let currentTop = null;
        el.querySelectorAll('.reveal-word').forEach(span => {
          const top = span.offsetTop;
          if (currentTop === null || Math.abs(top - currentTop) > 5) {
            rows.push([span]);
            currentTop = top;
          } else {
            rows[rows.length - 1].push(span);
          }
        });
        rows.forEach((row, rowIndex) => {
          row.forEach((span, wordIndex) => {
            setTimeout(() => {
              span.classList.add('is-visible');
            }, rowIndex * 300 + wordIndex * 80);
          });
        });
      });
    }
    static updatePaginationBackground(slider) {
      const pagination = slider.querySelector('.is-type-mbf-slider__pagination');
      if (!pagination) return;
      const bullets = pagination.querySelectorAll('.swiper-pagination-bullet');
      if (!bullets.length) return;
      let totalWidth = 0;
      bullets.forEach((bullet, index) => {
        const rect = bullet.getBoundingClientRect();
        totalWidth += rect.width;

        // include gap except after last bullet
        if (index < bullets.length - 1) {
          const style = getComputedStyle(bullet);
          totalWidth += parseFloat(style.marginRight || 0);
        }
      });
      pagination.style.setProperty('--mbf-pagination-width', `${Math.ceil(totalWidth)}px`);
    }

    /**
     * Create navigation and pagination elements dynamically when enabled.
     * If disabled, ensure any previously created elements are removed.
     *
     * @param {HTMLElement} slider
     * @param {{navigationEnabled:boolean, paginationEnabled:boolean}} opts
     * @returns {{prevEl:HTMLElement|null,nextEl:HTMLElement|null,paginationEl:HTMLElement|null}}
     */
    static ensureControls(slider, opts) {
      const cls = MBFSlider.SLIDER_SELECTOR;

      // Find existing (if any)
      let prevEl = slider.querySelector(`.${cls}__button-prev`);
      let nextEl = slider.querySelector(`.${cls}__button-next`);
      let paginationEl = slider.querySelector(`.${cls}__pagination`);
      let progressEl = slider.querySelector(`.${cls}__progress`);

      // Navigation
      if (opts.navigationEnabled) {
        if (!prevEl) {
          prevEl = document.createElement('div');
          prevEl.className = `${cls}__button ${cls}__button-prev`;
          prevEl.setAttribute('aria-label', 'Previous');
          prevEl.innerHTML = ` <svg width="14" height="7" viewBox="0 0 14 7" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M3.36753 3.93051C3.94142 4.56014 4.54049 5.47218 5.16472 6.66663L4.07734 6.66663C2.79867 5.27774 1.43944 4.24996 -0.000324736 3.58329L-0.000324692 3.08329C1.43945 2.41663 2.79867 1.38885 4.07735 -4.11019e-05L5.16472 -4.10068e-05C4.54049 1.1944 3.94142 2.10644 3.36753 2.73607L13.333 2.73607L13.333 3.93052L3.36753 3.93051Z" fill="currentColor"/>
          </svg>`;
          slider.appendChild(prevEl);
        }
        if (!nextEl) {
          nextEl = document.createElement('div');
          nextEl.className = `${cls}__button ${cls}__button-next`;
          nextEl.setAttribute('aria-label', 'Next');
          nextEl.innerHTML = `<svg width="14" height="7" viewBox="0 0 14 7" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9.96548 2.73611C9.39159 2.10648 8.79252 1.19444 8.16828 0H9.25566C10.5343 1.38889 11.8936 2.41667 13.3333 3.08333V3.58333C11.8936 4.25 10.5343 5.27778 9.25566 6.66667H8.16828C8.79252 5.47222 9.39159 4.56018 9.96548 3.93056H0V2.73611H9.96548Z" fill="currentColor"/>
            </svg>`;
          slider.appendChild(nextEl);
        }
      } else {
        // Remove if present
        if (prevEl && prevEl.parentElement === slider) prevEl.remove();
        if (nextEl && nextEl.parentElement === slider) nextEl.remove();
        prevEl = null;
        nextEl = null;
      }

      // Pagination
      if (opts.paginationEnabled) {
        if (!paginationEl) {
          paginationEl = document.createElement('ul');
          paginationEl.className = `${cls}__pagination`;
          paginationEl.setAttribute('aria-label', 'Slider pagination');
          slider.appendChild(paginationEl);

          // Check autoplay.
          const container = slider.closest(MBFSlider.SECTION) || slider;
          const autoplay = container.getAttribute('data-mbf-autoplay') === 'true';
          if (autoplay) {
            const delay = !isNaN(parseInt(container.getAttribute('data-mbf-delay'))) ? parseInt(container.getAttribute('data-mbf-delay')) : 5000;
            // Set CSS variable for animation duration
            paginationEl.style.setProperty('--mbf-animation-duration', `${delay / 1000}s`);
          } else {
            // Remove previously set var if autoplay disabled.
            paginationEl.style.removeProperty('--mbf-animation-duration');
          }
        }
      } else if (paginationEl && paginationEl.parentElement === slider) {
        paginationEl.remove();
        paginationEl = null;
      }

      // Progress
      if (opts.progressEnabled) {
        if (!progressEl) {
          progressEl = document.createElement('div');
          progressEl.className = `${cls}__progress`;
          progressEl.innerHTML = `<span class="${cls}__progress-fill"></span>`;
          slider.appendChild(progressEl);

          // Check autoplay.
          const container = slider.closest(MBFSlider.SECTION) || slider;
          const autoplay = container.getAttribute('data-mbf-autoplay') === 'true';
          if (autoplay) {
            const delay = !isNaN(parseInt(container.getAttribute('data-mbf-delay'))) ? parseInt(container.getAttribute('data-mbf-delay')) : 5000;
            // Set CSS variable for animation duration
            progressEl.style.setProperty('--mbf-animation-duration', `${delay / 1000}s`);
          } else {
            // Remove previously set var if autoplay disabled.
            progressEl.style.removeProperty('--mbf-animation-duration');
          }
        }
      } else {
        progressEl?.remove();
        progressEl = null;
      }
      return {
        prevEl,
        nextEl,
        paginationEl,
        progressEl
      };
    }

    /**
     * Return first direct Columns wrapper inside slider.
     * @param {HTMLElement} slider
     * @returns {HTMLElement|null}
     */
    static getWrapper(slider) {
      return slider.querySelector(MBFSlider.WRAPPER_SELECTOR);
    }

    /**
     * Count original slides (exclude Swiper loop duplicates).
     * @param {HTMLElement} slider
     * @returns {number}
     */
    static countOriginalSlides(slider) {
      const wrapper = MBFSlider.getWrapper(slider);
      if (!wrapper) return 0;
      return wrapper.querySelectorAll(`${MBFSlider.SLIDES_SELECTOR}:not(.swiper-slide-duplicate)`).length;
    }

    /**
     * Debounced (rAF) update to avoid layout thrashing.
     * @param {HTMLElement} slider
     */
    static scheduleUpdate(slider) {
      if (slider.dataset.updating === '1') return;
      slider.dataset.updating = '1';
      requestAnimationFrame(() => {
        slider.swiperInstance?.update();
        slider.dataset.updating = '0';
      });
    }
  }

  // Bootstrap on DOM ready
  document.addEventListener('DOMContentLoaded', MBFSlider.initAll);
})();

/***/ }),

/***/ "./src/js-frontend/miniCart.js":
/*!*************************************!*\
  !*** ./src/js-frontend/miniCart.js ***!
  \*************************************/
/***/ (function(__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/** ----------------------------------------------------------------------------
 * Mini cart */

document.addEventListener('DOMContentLoaded', () => {
  const formatMiniCartCounter = () => {
    setTimeout(() => {
      document.querySelectorAll('span.wp-block-woocommerce-mini-cart-title-items-counter-block').forEach(el => {
        const text = el.textContent.trim();

        // match "items: 3" (with or without parentheses)
        const match = text.match(/([a-zA-Z]+)\s*:\s*(\d+)/);
        if (match) {
          const label = match[1]; // items
          const count = match[2]; // 3

          el.textContent = `${count} ${label}`;
        }
      });
    }, 100);
  };
  let opened = false;
  const observer = new MutationObserver(() => {
    const overlay = document.querySelector('.wc-block-components-drawer__screen-overlay');
    const isOpen = overlay?.classList.contains('wc-block-components-drawer__screen-overlay--with-slide-in');
    if (isOpen && !opened) {
      opened = true;
      formatMiniCartCounter();
    }
    if (!isOpen) {
      opened = false;
    }
    addMiniCartDataLabel();
  });
  observer.observe(document.body, {
    subtree: true,
    attributes: true,
    attributeFilter: ['class']
  });
  function addMiniCartDataLabel() {
    const btn = document.querySelector('.wc-block-mini-cart__button');
    if (!btn) return;
    btn.setAttribute('data-label', window.frontendSettings?.CartText || 'Cart');
  }
  addMiniCartDataLabel();
});

/***/ }),

/***/ "./src/js-frontend/navigation.js":
/*!***************************************!*\
  !*** ./src/js-frontend/navigation.js ***!
  \***************************************/
/***/ (function(__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/** ----------------------------------------------------------------------------
 * Navigation */

class MbfNavigation {
  constructor() {
    this.headerParams = {
      headerLargeHeight: parseInt(document.querySelector('header.wp-block-template-part .mbf-header')?.offsetHeight || 0),
      headerCompactHeight: 55,
      headerSmart: document.querySelector('header.wp-block-template-part:has([data-mbf-navbar-sticky="true"][data-mbf-navbar-smart-sticky="false"]), header.wp-block-template-part:has([data-mbf-navbar-sticky="true"][data-mbf-navbar-smart-sticky="true"])'),
      wpAdminBar: document.querySelector('#wpadminbar'),
      wpAdminBarHeight: null,
      smartStart: null,
      scrollPoint: 320,
      scrollPrev: 320,
      scrollUpAmount: 0,
      headerSmartPosition: 0
    };
    this.initialize();
  }
  initialize() {
    if (document.body.classList.contains('wp-admin')) {
      return;
    }
    this.bindEvents();
  }
  bindEvents() {
    document.addEventListener('DOMContentLoaded', () => {
      setTimeout(() => {
        this.smartLevels();
      }, 100);
      this.stickyScroll();
      this.headerClassesChange();
      this.setHeaderHeights();
    });
    window.addEventListener('resize', () => {
      this.smartLevels();
      this.stickyScroll();
      this.headerClassesChange();
      setTimeout(() => {
        this.setHeaderHeights();
      }, 180);
    });
  }
  stickyScroll() {
    this.headerParams = {
      headerLargeHeight: parseInt(document.querySelector('header.wp-block-template-part .mbf-header')?.offsetHeight || 0),
      headerCompactHeight: 55,
      headerSmart: document.querySelector('header.wp-block-template-part:has([data-mbf-navbar-sticky="true"][data-mbf-navbar-smart-sticky="false"]), header.wp-block-template-part:has([data-mbf-navbar-sticky="true"][data-mbf-navbar-smart-sticky="true"])'),
      wpAdminBar: document.querySelector('#wpadminbar'),
      wpAdminBarHeight: null,
      smartStart: null,
      scrollPoint: 320,
      scrollPrev: 320,
      scrollUpAmount: 0,
      headerSmartPosition: 0
    };
    this.headerParams.wpAdminBarHeight = this.headerParams.wpAdminBar ? this.headerParams.wpAdminBar.offsetHeight : 0;
    this.headerParams.smartStart = this.headerParams.wpAdminBarHeight + (this.headerParams.headerSmart ? this.headerParams.headerSmart.offsetTop : 0);
    window.addEventListener('scroll', () => {
      if (document.body.classList.contains('mbf-burgermenu-active')) return;
      let scrolled = window.scrollY;
      this.headerParams.headerSmartPosition = this.headerParams.headerSmart ? this.headerParams.headerSmart.offsetTop : 0;
      if (scrolled > this.headerParams.smartStart + this.headerParams.scrollPoint + 10 && scrolled > this.headerParams.scrollPrev) {
        if (scrolled > this.headerParams.smartStart + this.headerParams.headerCompactHeight + 200) {
          document.dispatchEvent(new Event('sticky-nav-hide'));
        }
      } else {
        if (this.headerParams.scrollUpAmount >= this.headerParams.scrollPoint || scrolled === 0) {
          document.dispatchEvent(new Event('sticky-nav-visible'));
        }
      }
      if (this.headerParams.headerSmart) {
        if (scrolled > this.headerParams.smartStart + this.headerParams.headerCompactHeight) {
          document.dispatchEvent(new Event('nav-stick', {
            detail: this.headerParams
          }));
        } else if (this.headerParams.headerSmartPosition <= this.headerParams.smartStart) {
          document.dispatchEvent(new Event('nav-unstick', {
            detail: this.headerParams
          }));
        }
      }
      if (scrolled < this.headerParams.scrollPrev) {
        this.headerParams.scrollUpAmount += this.headerParams.scrollPrev - scrolled;
      } else {
        this.headerParams.scrollUpAmount = 0;
      }
      if (this.headerParams.wpAdminBar && window.innerWidth <= 600 && scrolled >= this.headerParams.wpAdminBarHeight) {
        document.dispatchEvent(new Event('adminbar-mobile-scrolled'));
      } else {
        document.dispatchEvent(new Event('adminbar-mobile-no-scrolled'));
      }
      this.headerParams.scrollPrev = scrolled;
    });
  }
  headerClassesChange() {
    if (this.headerParams.headerSmart !== null) {
      document.addEventListener('sticky-nav-visible', () => {
        this.headerParams.headerSmart.classList.add('mbf-header-smart-visible');
      });
      document.addEventListener('sticky-nav-hide', () => {
        this.headerParams.headerSmart.classList.remove('mbf-header-smart-visible');
      });
      document.addEventListener('nav-stick', () => {
        this.headerParams.headerSmart.classList.add('mbf-scroll-sticky');
      });
      document.addEventListener('nav-unstick', () => {
        this.headerParams.headerSmart.classList.remove('mbf-scroll-sticky', 'mbf-header-smart-visible');
      });
    }
    document.addEventListener('adminbar-mobile-scrolled', () => {
      document.body.classList.add('mbf-adminbar-mobile-scrolled');
    });
    document.addEventListener('adminbar-mobile-no-scrolled', () => {
      document.body.classList.remove('mbf-adminbar-mobile-scrolled');
    });
  }
  setHeaderHeights() {
    const container = document.querySelector('header.wp-block-template-part');
    const header = container?.querySelector('.mbf-header');
    if (!header) return;

    // Remember current state
    const wasSticky = header.classList.contains('mbf-scroll-sticky');
    const wasVisible = header.classList.contains('mbf-header-smart-visible');

    // Temporarily reset to default (largest) state
    header.classList.remove('mbf-scroll-sticky', 'mbf-header-smart-visible');

    // Force reflow before measuring
    const height = header.offsetHeight;

    // Restore state
    if (wasSticky) header.classList.add('mbf-scroll-sticky');
    if (wasVisible) header.classList.add('mbf-header-smart-visible');

    // IMPORTANT: set only the max height
    document.documentElement.style.setProperty('--mbf-header-height', `${height}px`);
  }
  smartLevels() {
    let windowWidth = window.innerWidth;
    // Reset Calc.
    document.querySelectorAll('ul.wp-block-navigation.is-style-mbf-primary-menu li.wp-block-navigation-item').forEach(el => {
      el.classList.remove('mbf-sm__level', 'mbf-sm-position-left', 'mbf-sm-position-right');
    });

    // Set Settings.
    document.querySelectorAll('ul.wp-block-navigation.is-style-mbf-primary-menu > li.wp-block-navigation-item').forEach(parent => {
      let position = 'mbf-sm-position-right'; //default
      let objPrevWidth = 0;
      parent.querySelectorAll('.wp-block-navigation-submenu.wp-block-navigation__submenu-container').forEach(el => {
        // Reset child levels.

        if (el.parentElement.nextElementSibling) {
          el.parentElement.nextElementSibling.classList.add('mbf-sm__level');
        }
        if (el.parentElement.classList.contains('mbf-sm__level')) {
          el.parentElement.classList.remove('mbf-mm-level');
          position = 'mbf-sm-position-right'; //reset
          objPrevWidth = 0;
        }

        // Find out position items.
        let offset = el.getBoundingClientRect().left;
        if (position === 'mbf-sm-position-right' && el.offsetWidth + offset > windowWidth) {
          position = 'mbf-sm-position-left';
        }
        if (position === 'mbf-sm-position-left' && offset - (el.offsetWidth + objPrevWidth) < 0) {
          position = 'mbf-sm-position-right';
        }
        objPrevWidth = el.offsetWidth;
        el.classList.add('mbf-sm-position-init');
        el.parentElement.classList.add(position);
      });
    });
  }
}
new MbfNavigation();

/***/ }),

/***/ "./src/js-frontend/postCarousel.js":
/*!*****************************************!*\
  !*** ./src/js-frontend/postCarousel.js ***!
  \*****************************************/
/***/ (function(__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/**
 * Post Carousel
 */

(() => {
  /**
   * Class providing initialization and lifecycle for MBF sliders.
   */
  class MBFSlider {
    static SECTION = '.mbf-post-carousel'; // Section container for data attributes
    static SLIDER_SELECTOR = 'is-type-mbf-slider'; // Swiper main element
    static WRAPPER_SELECTOR = ':scope > .wp-block-post-template'; // Swiper wrapper
    static SLIDES_SELECTOR = ':scope > .wp-block-post'; // Swiper items

    /** @type {Promise<void>|null} Promise to ensure Swiper is loaded once */
    static swiperPromise = null;

    /** Load Swiper script lazily if it's not already available */
    static ensureSwiper() {
      if (typeof window.Swiper !== 'undefined') return Promise.resolve();
      if (MBFSlider.swiperPromise) return MBFSlider.swiperPromise;
      MBFSlider.swiperPromise = new Promise((resolve, reject) => {
        const url = typeof window.frontendSettings === 'object' ? window.frontendSettings.swiperUrl : null;
        if (!url) {
          reject(new Error('Unable to resolve Swiper URL'));
          return;
        }
        const el = document.createElement('script');
        el.src = url;
        el.async = true;
        el.onload = () => resolve();
        el.onerror = () => reject(new Error(`Failed to load Swiper from ${url}`));
        document.head.appendChild(el);
      }).catch(() => {
        // Swallow the error to keep the promise settled and avoid unhandled rejections
      });
      return MBFSlider.swiperPromise;
    }

    /**
     * Initialize all sliders found on the page.
     */
    static initAll() {
      const sliders = document.querySelectorAll(`${MBFSlider.SECTION} .${MBFSlider.SLIDER_SELECTOR}`);
      if (!sliders.length) return;
      const io = 'IntersectionObserver' in window ? new IntersectionObserver(MBFSlider.handleIntersection, {
        root: null,
        threshold: 0.5
      }) : null;
      sliders.forEach(slider => {
        if (io) {
          io.observe(slider);
        } else {
          // Fallback if IntersectionObserver is unavailable
          // Ensure Swiper is present, then init
          MBFSlider.ensureSwiper().then(() => MBFSlider.initSection(slider));
        }
      });

      // Debounced resize: Swiper updates layout when columns-per-view change via CSS
      let resizeRAF = 0;
      const onResize = () => {
        if (resizeRAF) cancelAnimationFrame(resizeRAF);
        resizeRAF = requestAnimationFrame(() => {
          sliders.forEach(slider => {
            if (slider.classList.contains('initialized')) {
              MBFSlider.scheduleUpdate(slider);
            }
          });
        });
      };
      window.addEventListener('resize', onResize, {
        passive: true
      });
    }

    /**
     * EGet tallest slide height — runs immediately, then updates after images load.
     */
    static getTallestItem() {
      const sliders = document.querySelectorAll(`${MBFSlider.SECTION} .${MBFSlider.SLIDER_SELECTOR}`);
      if (!sliders.length) {
        return;
      }
      sliders.forEach(slider => {
        const wrapper = MBFSlider.getWrapper(slider);
        if (!wrapper) {
          return;
        }
        const slides = Array.from(wrapper.querySelectorAll(MBFSlider.SLIDES_SELECTOR));
        if (!slides.length) {
          return;
        }
      });
    }

    /**
     * IntersectionObserver callback to lazy-init sliders.
     * @param {IntersectionObserverEntry[]} entries
     */
    static handleIntersection(entries) {
      entries.forEach(entry => {
        const slider = entry.target;
        const inst = slider.swiperInstance;
        const paginationEl = slider.querySelector('.swiper-pagination');
        if (entry.isIntersecting) {
          // Initialize slider if not already done
          if (!inst) {
            MBFSlider.initSection(slider);
          } else if (inst?.autoplay && !inst.autoplay.running) {
            inst.autoplay.start();
          }
          slider.classList.add('visible');
          slider.classList.remove('paused');
          paginationEl?.classList.remove('paused');
        } else {
          // Pause autoplay if running
          if (inst?.autoplay?.running) {
            inst.autoplay.stop();
          }
          slider.classList.remove('visible');
          slider.classList.add('paused');
          paginationEl?.classList.add('paused');
        }
      });
    }

    /**
     * Initialize a single slider instance.
     * Keeps user settings intact; avoids heavy update loops.
     * @param {HTMLElement} slider
     */
    static initSection(slider) {
      if (slider.classList.contains('initialized')) return;

      // Gate initialization on Swiper being available
      if (typeof window.Swiper === 'undefined') {
        MBFSlider.ensureSwiper().then(() => MBFSlider.initSection(slider));
        return;
      }
      const prepared = MBFSlider.prepare(slider);
      if (!prepared || !prepared.slides.length) return;

      // Read settings from parent container
      const container = slider.closest(MBFSlider.SECTION);
      if (!container) return;
      const autoplayValue = container?.getAttribute('data-mbf-autoplay') || 'false';
      const delay = parseInt(container?.getAttribute('data-mbf-delay') || '3000', 10);
      const speed = parseInt(container?.getAttribute('data-mbf-speed') || '800', 10);
      const navigationEnabled = (container?.getAttribute('data-mbf-navigation') || 'true') === 'true';
      const paginationEnabled = (container?.getAttribute('data-mbf-pagination') || 'true') === 'true';
      const itemsDesktop = parseInt(container?.getAttribute('data-mbf-desktop_items') || '6', 10);
      const itemsLaptop = parseInt(container?.getAttribute('data-mbf-laptop_items') || '3', 10);
      const itemsTablet = parseInt(container?.getAttribute('data-mbf-tablet_items') || '3', 10);
      const itemsMobile = parseInt(container?.getAttribute('data-mbf-mobile_items') || '2', 10);
      const gap = parseInt(container?.getAttribute('data-mbf-gap') || '2', 10);

      // Ensure control containers exist or create them dynamically
      const controls = MBFSlider.ensureControls(slider, {
        navigationEnabled,
        paginationEnabled
      });
      const originalSlides = prepared.slides.length;
      const maxSlidesPerView = Math.max(itemsDesktop, itemsLaptop, itemsTablet, itemsMobile, 1);
      const loopAllowed = originalSlides >= maxSlidesPerView * 2;
      const config = {
        // Default wrapperClass is 'swiper-wrapper' (we add it in prepare)
        direction: 'horizontal',
        loop: loopAllowed,
        rewind: !loopAllowed,
        speed: speed,
        parallax: false,
        spaceBetween: gap,
        breakpoints: {
          0: {
            slidesPerView: 1
          },
          576: {
            slidesPerView: itemsMobile
          },
          768: {
            slidesPerView: itemsTablet
          },
          1200: {
            slidesPerView: itemsLaptop
          },
          1400: {
            slidesPerView: itemsDesktop
          }
        },
        a11y: {
          slideRole: 'article',
          slideLabelMessage: 'Slide {{index}} of {{slidesLength}}'
        },
        autoplay: autoplayValue === 'true' || autoplayValue === '1' ? {
          delay,
          disableOnInteraction: false,
          pauseOnMouseEnter: true
        } : false,
        // Keep Swiper in sync with Gutenberg edits (lightly)
        observer: true,
        observeParents: true,
        observeSlideChildren: true,
        on: {
          /**
           * React only when the real number of Columns changed.
           * Avoids feedback loops from continuous DOM mutations.
           */
          observerUpdate() {
            const current = MBFSlider.countOriginalSlides(slider);
            if (slider.dataset.slidesCount !== String(current)) {
              MBFSlider.prepare(slider); // no-op if already marked
              slider.dataset.slidesCount = String(current);
              MBFSlider.scheduleUpdate(slider);
            }
          }
        }
      };
      if (controls.nextEl && controls.prevEl && navigationEnabled) {
        config.navigation = {
          nextEl: controls.nextEl,
          prevEl: controls.prevEl
        };
      }
      if (controls.paginationEl && paginationEnabled) {
        config.pagination = {
          el: controls.paginationEl,
          clickable: true,
          type: 'bullets',
          bulletElement: 'li'
        };
      }
      const instance = new Swiper(slider, config);

      // Add <span> to pagination bullets and ensure valid <li> structure.
      if (controls.paginationEl) {
        const paginationEl = controls.paginationEl;
        const addSpanToBullets = () => {
          paginationEl.querySelectorAll('.swiper-pagination-bullet').forEach(bullet => {
            if (!bullet.querySelector('span')) {
              const span = document.createElement('span');
              bullet.appendChild(span);
            }
          });
        };

        // MutationObserver to keep pagination <ul> valid.
        const observer = new MutationObserver(mutations => {
          for (const m of mutations) {
            if (m.addedNodes.length > 0) {
              m.addedNodes.forEach(node => {
                if (node.nodeType === 1 && node.tagName !== 'LI' && node.tagName !== 'SCRIPT' && node.tagName !== 'TEMPLATE') {
                  node.remove(); // Remove any unexpected element.
                }
              });
            }
          }
        });
        observer.observe(paginationEl, {
          childList: true
        });

        // Run once after creation
        setTimeout(addSpanToBullets, 0);
        instance.on('paginationUpdate', addSpanToBullets);
      }

      // Pause on hover
      slider.addEventListener('mouseenter', () => {
        if (instance.autoplay && instance.autoplay.running) {
          instance.autoplay.stop();
        }
        slider.classList.add('paused');
        controls.paginationEl?.classList.add('paused');
      });
      slider.addEventListener('mouseleave', () => {
        if (autoplayValue === 'true' || autoplayValue === '1') {
          instance.autoplay.start();
        }
        slider.classList.remove('paused');
        controls.paginationEl?.classList.remove('paused');
      });
      slider.swiperInstance = instance;
      slider.dataset.slidesCount = String(MBFSlider.countOriginalSlides(slider));
      slider.classList.add('initialized');
    }

    /**
     * Ensure wrapper/slides have Swiper classes
     */
    static prepare(slider) {
      const wrapper = MBFSlider.getWrapper(slider);
      if (!wrapper) return null;

      // Ensure container has Swiper base class for styling
      if (!slider.classList.contains('swiper')) slider.classList.add('swiper');

      // Ensure wrapper has Swiper's wrapper class
      if (!wrapper.classList.contains('swiper-wrapper')) wrapper.classList.add('swiper-wrapper');

      // Mark only new slides
      wrapper.querySelectorAll(`${MBFSlider.SLIDES_SELECTOR}:not(.swiper-slide)`).forEach(el => el.classList.add('swiper-slide'));
      const slides = wrapper.querySelectorAll(MBFSlider.SLIDES_SELECTOR);
      return {
        wrapper,
        slides
      };
    }

    /**
     * Create navigation/pagination if needed
     */
    static ensureControls(slider, opts) {
      const cls = MBFSlider.SLIDER_SELECTOR;

      // Find existing (if any)
      let prevEl = slider.querySelector(`.${cls}__button-prev`);
      let nextEl = slider.querySelector(`.${cls}__button-next`);
      let paginationEl = slider.querySelector(`.${cls}__pagination`);

      // Navigation
      if (opts.navigationEnabled) {
        if (!prevEl) {
          prevEl = document.createElement('div');
          prevEl.className = `${cls}__button ${cls}__button-prev`;
          prevEl.setAttribute('aria-label', 'Previous');
          prevEl.innerHTML = ` <svg width="14" height="7" viewBox="0 0 14 7" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M3.36753 3.93051C3.94142 4.56014 4.54049 5.47218 5.16472 6.66663L4.07734 6.66663C2.79867 5.27774 1.43944 4.24996 -0.000324736 3.58329L-0.000324692 3.08329C1.43945 2.41663 2.79867 1.38885 4.07735 -4.11019e-05L5.16472 -4.10068e-05C4.54049 1.1944 3.94142 2.10644 3.36753 2.73607L13.333 2.73607L13.333 3.93052L3.36753 3.93051Z" fill="currentColor"/>
          </svg>`;
          slider.appendChild(prevEl);
        }
        if (!nextEl) {
          nextEl = document.createElement('div');
          nextEl.className = `${cls}__button ${cls}__button-next`;
          nextEl.setAttribute('aria-label', 'Next');
          nextEl.innerHTML = `<svg width="14" height="7" viewBox="0 0 14 7" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9.96548 2.73611C9.39159 2.10648 8.79252 1.19444 8.16828 0H9.25566C10.5343 1.38889 11.8936 2.41667 13.3333 3.08333V3.58333C11.8936 4.25 10.5343 5.27778 9.25566 6.66667H8.16828C8.79252 5.47222 9.39159 4.56018 9.96548 3.93056H0V2.73611H9.96548Z" fill="currentColor"/>
            </svg>`;
          slider.appendChild(nextEl);
        }

        // --- CENTER BUTTONS ON IMAGE ---
        const centerButtons = () => {
          const image = slider.querySelector('.wp-block-post-featured-image img');
          if (!image) return;
          const parent = prevEl?.offsetParent || nextEl?.offsetParent;
          if (!parent) return;
          const parentRect = parent.getBoundingClientRect();
          const imageRect = image.getBoundingClientRect();

          // exact center of image relative to button parent
          const center = imageRect.top - parentRect.top + imageRect.height / 2;
          if (prevEl) prevEl.style.top = `${center}px`;
          if (nextEl) nextEl.style.top = `${center}px`;
        };

        // Run on load and resize
        const firstImage = slider.querySelector('.wp-block-post-featured-image img');
        if (firstImage && !firstImage.complete) {
          firstImage.addEventListener('load', centerButtons, {
            once: true
          });
        } else {
          centerButtons();
        }
        window.addEventListener('resize', centerButtons);
      } else {
        // Remove if present
        if (prevEl && prevEl.parentElement === slider) prevEl.remove();
        if (nextEl && nextEl.parentElement === slider) nextEl.remove();
        prevEl = null;
        nextEl = null;
      }

      // Pagination
      if (opts.paginationEnabled) {
        if (!paginationEl) {
          paginationEl = document.createElement('ul');
          paginationEl.className = `${cls}__pagination`;
          paginationEl.setAttribute('aria-label', 'Slider pagination');
          slider.appendChild(paginationEl);

          // Check autoplay.
          const container = slider.closest(MBFSlider.SECTION) || slider;
          const autoplay = container.getAttribute('data-mbf-autoplay') === 'true';
          if (autoplay) {
            const delay = !isNaN(parseInt(container.getAttribute('data-mbf-delay'))) ? parseInt(container.getAttribute('data-mbf-delay')) : 5000;
            // Set CSS variable for animation duration
            paginationEl.style.setProperty('--mbf-animation-duration', `${delay / 1000}s`);
          } else {
            // Remove previously set var if autoplay disabled.
            paginationEl.style.removeProperty('--mbf-animation-duration');
          }
        }
      } else if (paginationEl && paginationEl.parentElement === slider) {
        paginationEl.remove();
        paginationEl = null;
      }
      return {
        prevEl,
        nextEl,
        paginationEl
      };
    }

    /** Wrapper lookup */
    static getWrapper(slider) {
      return slider.querySelector(MBFSlider.WRAPPER_SELECTOR);
    }

    /** Count original slides */
    static countOriginalSlides(slider) {
      const wrapper = MBFSlider.getWrapper(slider);
      if (!wrapper) return 0;
      return wrapper.querySelectorAll(`${MBFSlider.SLIDES_SELECTOR}:not(.swiper-slide-duplicate)`).length;
    }

    /** Schedule update */
    static scheduleUpdate(slider) {
      if (slider.dataset.updating === '1') return;
      slider.dataset.updating = '1';
      requestAnimationFrame(() => {
        slider.swiperInstance?.update();
        slider.dataset.updating = '0';
      });
    }
  }

  // Bootstrap on DOM ready
  document.addEventListener('DOMContentLoaded', () => {
    MBFSlider.initAll();
    MBFSlider.getTallestItem();
  });
})();

/***/ }),

/***/ "./src/js-frontend/productCarousel.js":
/*!********************************************!*\
  !*** ./src/js-frontend/productCarousel.js ***!
  \********************************************/
/***/ (function(__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/**
 * Product Carousel
 */

(() => {
  /**
   * Class providing initialization and lifecycle for MBF sliders.
   */
  class MBFSlider {
    static SECTION = '.mbf-product-carousel'; // Section container for data attributes
    static SLIDER_SELECTOR = 'is-type-mbf-slider'; // Swiper main element
    static WRAPPER_SELECTOR = ':scope > .wc-block-product-template'; // Swiper wrapper
    static SLIDES_SELECTOR = ':scope > .wc-block-product'; // Swiper items

    /** @type {Promise<void>|null} Promise to ensure Swiper is loaded once */
    static swiperPromise = null;

    /** Load Swiper script lazily if it's not already available */
    static ensureSwiper() {
      if (typeof window.Swiper !== 'undefined') return Promise.resolve();
      if (MBFSlider.swiperPromise) return MBFSlider.swiperPromise;
      MBFSlider.swiperPromise = new Promise((resolve, reject) => {
        const url = typeof window.frontendSettings === 'object' ? window.frontendSettings.swiperUrl : null;
        if (!url) {
          reject(new Error('Unable to resolve Swiper URL'));
          return;
        }
        const el = document.createElement('script');
        el.src = url;
        el.async = true;
        el.onload = () => resolve();
        el.onerror = () => reject(new Error(`Failed to load Swiper from ${url}`));
        document.head.appendChild(el);
      }).catch(() => {
        // Swallow the error to keep the promise settled and avoid unhandled rejections
      });
      return MBFSlider.swiperPromise;
    }

    /**
     * Initialize all sliders found on the page.
     */
    static initAll() {
      const sliders = document.querySelectorAll(`.${MBFSlider.SLIDER_SELECTOR}`);
      if (!sliders.length) return;
      const io = 'IntersectionObserver' in window ? new IntersectionObserver(MBFSlider.handleIntersection, {
        root: null,
        threshold: 0.5
      }) : null;
      sliders.forEach(slider => {
        // Skip if native WooCommerce carousel is turned on.
        const layoutAttr = slider.getAttribute('data-display-layout');
        if (layoutAttr) {
          try {
            const layout = JSON.parse(layoutAttr);
            if (layout?.type === 'carousel') {
              return;
            }
          } catch {
            // Ignore invalid JSON, continue initialization.
          }
        }
        if (io) {
          io.observe(slider);
        } else {
          // Fallback if IntersectionObserver is unavailable
          // Ensure Swiper is present, then init
          MBFSlider.ensureSwiper().then(() => MBFSlider.initSection(slider));
        }
      });

      // Debounced resize: Swiper updates layout when columns-per-view change via CSS
      let resizeRAF = 0;
      const onResize = () => {
        if (resizeRAF) cancelAnimationFrame(resizeRAF);
        resizeRAF = requestAnimationFrame(() => {
          sliders.forEach(slider => {
            if (slider.classList.contains('initialized')) {
              MBFSlider.scheduleUpdate(slider);
            }
          });
        });
      };
      window.addEventListener('resize', onResize, {
        passive: true
      });
    }

    /**
     * IntersectionObserver callback to lazy-init sliders.
     * @param {IntersectionObserverEntry[]} entries
     */
    static handleIntersection(entries) {
      entries.forEach(entry => {
        const slider = entry.target;
        const inst = slider.swiperInstance;
        const paginationEl = slider.querySelector('.swiper-pagination');
        if (entry.isIntersecting) {
          // Initialize slider if not already done
          if (!inst) {
            MBFSlider.initSection(slider);
          } else if (inst?.autoplay && !inst.autoplay.running) {
            inst.autoplay.start();
          }
          slider.classList.add('visible');
          slider.classList.remove('paused');
          paginationEl?.classList.remove('paused');
        } else {
          // Pause autoplay if running
          if (inst?.autoplay?.running) {
            inst.autoplay.stop();
          }
          slider.classList.remove('visible');
          slider.classList.add('paused');
          paginationEl?.classList.add('paused');
        }
      });
    }

    /**
     * Initialize a single slider instance.
     * Keeps user settings intact; avoids heavy update loops.
     * @param {HTMLElement} slider
     */
    static initSection(slider) {
      if (slider.classList.contains('initialized')) return;

      // Gate initialization on Swiper being available
      if (typeof window.Swiper === 'undefined') {
        MBFSlider.ensureSwiper().then(() => MBFSlider.initSection(slider));
        return;
      }
      const prepared = MBFSlider.prepare(slider);
      if (!prepared || !prepared.slides.length) return;

      // Read settings from parent container
      const container = slider.closest(MBFSlider.SECTION);
      if (!container) return;
      const autoplayValue = container?.getAttribute('data-mbf-autoplay') || 'false';
      const delay = parseInt(container?.getAttribute('data-mbf-delay') || '3000', 10);
      const speed = parseInt(container?.getAttribute('data-mbf-speed') || '800', 10);
      const navigationEnabled = (container?.getAttribute('data-mbf-navigation') || 'true') === 'true';
      const paginationEnabled = (container?.getAttribute('data-mbf-pagination') || 'true') === 'true';
      const itemsDesktop = parseInt(container?.getAttribute('data-mbf-desktop_items') || '6', 10);
      const itemsLaptop = parseInt(container?.getAttribute('data-mbf-laptop_items') || '3', 10);
      const itemsTablet = parseInt(container?.getAttribute('data-mbf-tablet_items') || '2', 10);
      const itemsMobile = parseInt(container?.getAttribute('data-mbf-mobile_items') || '2', 10);
      const gap = parseInt(container?.getAttribute('data-mbf-gap') || '2', 10);

      // Ensure control containers exist or create them dynamically
      const controls = MBFSlider.ensureControls(slider, {
        navigationEnabled,
        paginationEnabled
      });
      const originalSlides = prepared.slides.length;
      const maxSlidesPerView = Math.max(itemsDesktop, itemsLaptop, itemsTablet, itemsMobile, 1);
      const loopAllowed = originalSlides >= maxSlidesPerView * 2;
      const config = {
        direction: 'horizontal',
        loop: loopAllowed,
        rewind: !loopAllowed,
        speed: speed,
        parallax: false,
        spaceBetween: gap,
        breakpoints: {
          0: {
            slidesPerView: 1
          },
          320: {
            slidesPerView: itemsMobile
          },
          768: {
            slidesPerView: itemsTablet
          },
          1200: {
            slidesPerView: itemsLaptop
          },
          1400: {
            slidesPerView: itemsDesktop
          }
        },
        a11y: {
          slideRole: 'article',
          slideLabelMessage: 'Slide {{index}} of {{slidesLength}}'
        },
        autoplay: autoplayValue === 'true' || autoplayValue === '1' ? {
          delay,
          disableOnInteraction: false,
          pauseOnMouseEnter: true
        } : false,
        // Keep Swiper in sync with Gutenberg edits (lightly)
        observer: true,
        observeParents: true,
        observeSlideChildren: true,
        on: {
          /**
           * React only when the real number of Columns changed.
           * Avoids feedback loops from continuous DOM mutations.
           */
          observerUpdate() {
            const current = MBFSlider.countOriginalSlides(slider);
            if (slider.dataset.slidesCount !== String(current)) {
              MBFSlider.prepare(slider); // no-op if already marked
              slider.dataset.slidesCount = String(current);
              MBFSlider.scheduleUpdate(slider);
            }
          }
        }
      };
      if (controls.nextEl && controls.prevEl && navigationEnabled) {
        config.navigation = {
          nextEl: controls.nextEl,
          prevEl: controls.prevEl
        };
      }
      if (controls.paginationEl && paginationEnabled) {
        config.pagination = {
          el: controls.paginationEl,
          clickable: true,
          type: 'bullets',
          bulletElement: 'li'
        };
      }
      const instance = new Swiper(slider, config);

      // Add <span> to pagination bullets and ensure valid <li> structure.
      if (controls.paginationEl) {
        const paginationEl = controls.paginationEl;
        const addSpanToBullets = () => {
          paginationEl.querySelectorAll('.swiper-pagination-bullet').forEach(bullet => {
            if (!bullet.querySelector('span')) {
              const span = document.createElement('span');
              bullet.appendChild(span);
            }
          });
        };

        // MutationObserver to keep pagination <ul> valid.
        const observer = new MutationObserver(mutations => {
          for (const m of mutations) {
            if (m.addedNodes.length > 0) {
              m.addedNodes.forEach(node => {
                if (node.nodeType === 1 && node.tagName !== 'LI' && node.tagName !== 'SCRIPT' && node.tagName !== 'TEMPLATE') {
                  node.remove(); // Remove any unexpected element.
                }
              });
            }
          }
        });
        observer.observe(paginationEl, {
          childList: true
        });

        // Run once after creation
        setTimeout(addSpanToBullets, 0);
        instance.on('paginationUpdate', addSpanToBullets);
      }

      // Pause on hover
      slider.addEventListener('mouseenter', () => {
        if (instance.autoplay && instance.autoplay.running) {
          instance.autoplay.stop();
        }
        slider.classList.add('paused');
        controls.paginationEl?.classList.add('paused');
      });
      slider.addEventListener('mouseleave', () => {
        if (autoplayValue === 'true' || autoplayValue === '1') {
          instance.autoplay.start();
        }
        slider.classList.remove('paused');
        controls.paginationEl?.classList.remove('paused');
      });

      // Initial calculation
      MBFSlider.updatePaginationBackground(slider);

      // On pagination update (Swiper creates bullets lazily)
      instance.on('paginationUpdate', () => {
        MBFSlider.updatePaginationBackground(slider);
      });

      // On resize (layout may change)
      window.addEventListener('resize', () => {
        MBFSlider.updatePaginationBackground(slider);
      }, {
        passive: true
      });
      slider.swiperInstance = instance;
      slider.dataset.slidesCount = String(MBFSlider.countOriginalSlides(slider));
      slider.classList.add('initialized');
    }

    /**
     * Ensure wrapper/slides have Swiper classes
     */
    static prepare(slider) {
      const wrapper = MBFSlider.getWrapper(slider);
      if (!wrapper) return null;

      // Ensure container has Swiper base class for styling
      if (!slider.classList.contains('swiper')) slider.classList.add('swiper');

      // Ensure wrapper has Swiper's wrapper class
      if (!wrapper.classList.contains('swiper-wrapper')) wrapper.classList.add('swiper-wrapper');

      // Mark only new slides
      wrapper.querySelectorAll(`${MBFSlider.SLIDES_SELECTOR}:not(.swiper-slide)`).forEach(el => el.classList.add('swiper-slide'));
      const slides = wrapper.querySelectorAll(MBFSlider.SLIDES_SELECTOR);
      return {
        wrapper,
        slides
      };
    }
    static updatePaginationBackground(slider) {
      const pagination = slider.querySelector('.is-type-mbf-slider__pagination');
      if (!pagination) return;
      const bullets = pagination.querySelectorAll('.swiper-pagination-bullet');
      if (!bullets.length) return;
      let totalWidth = 0;
      bullets.forEach((bullet, index) => {
        const rect = bullet.getBoundingClientRect();
        totalWidth += rect.width;

        // include gap except after last bullet
        if (index < bullets.length - 1) {
          const style = getComputedStyle(bullet);
          totalWidth += parseFloat(style.marginRight || 0);
        }
      });
      pagination.style.setProperty('--mbf-pagination-width', `${Math.ceil(totalWidth)}px`);
    }

    /**
     * Create navigation/pagination if needed
     */
    static ensureControls(slider, opts) {
      const cls = MBFSlider.SLIDER_SELECTOR;

      // Find existing (if any)
      let prevEl = slider.querySelector(`.${cls}__button-prev`);
      let nextEl = slider.querySelector(`.${cls}__button-next`);
      let paginationEl = slider.querySelector(`.${cls}__pagination`);

      // Navigation
      if (opts.navigationEnabled) {
        if (!prevEl) {
          prevEl = document.createElement('div');
          prevEl.className = `${cls}__button ${cls}__button-prev`;
          prevEl.setAttribute('aria-label', 'Previous');
          prevEl.innerHTML = `<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M23.9999 15.2001L24 16.8L11.0625 16.8L14.2222 19.9598L13.0909 21.0912L7.99968 16L13.0909 10.9088L14.2222 12.0403L11.0624 15.2L23.9999 15.2001Z" fill="black"/>
            </svg>
            `;
          slider.appendChild(prevEl);
        }
        if (!nextEl) {
          nextEl = document.createElement('div');
          nextEl.className = `${cls}__button ${cls}__button-next`;
          nextEl.setAttribute('aria-label', 'Next');
          nextEl.innerHTML = `<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M8.00011 16.7999L8 15.2L20.9375 15.2L17.7778 12.0402L18.9091 10.9088L24.0003 16L18.9091 21.0912L17.7778 19.9597L20.9376 16.8L8.00011 16.7999Z" fill="black"/>
          </svg>`;
          slider.appendChild(nextEl);
        }
      } else {
        // Remove if present
        if (prevEl && prevEl.parentElement === slider) prevEl.remove();
        if (nextEl && nextEl.parentElement === slider) nextEl.remove();
        prevEl = null;
        nextEl = null;
      }

      // Pagination
      if (opts.paginationEnabled) {
        if (!paginationEl) {
          paginationEl = document.createElement('ul');
          paginationEl.className = `${cls}__pagination`;
          paginationEl.setAttribute('aria-label', 'Slider pagination');
          slider.appendChild(paginationEl);

          // Check autoplay.
          const container = slider.closest(MBFSlider.SECTION) || slider;
          const autoplay = container.getAttribute('data-mbf-autoplay') === 'true';
          if (autoplay) {
            const delay = !isNaN(parseInt(container.getAttribute('data-mbf-delay'))) ? parseInt(container.getAttribute('data-mbf-delay')) : 5000;
            // Set CSS variable for animation duration
            paginationEl.style.setProperty('--mbf-animation-duration', `${delay / 1000}s`);
          } else {
            // Remove previously set var if autoplay disabled.
            paginationEl.style.removeProperty('--mbf-animation-duration');
          }
        }
      } else if (paginationEl && paginationEl.parentElement === slider) {
        paginationEl.remove();
        paginationEl = null;
      }
      return {
        prevEl,
        nextEl,
        paginationEl
      };
    }

    /** Wrapper lookup */
    static getWrapper(slider) {
      return slider.querySelector(MBFSlider.WRAPPER_SELECTOR);
    }

    /** Count original slides */
    static countOriginalSlides(slider) {
      const wrapper = MBFSlider.getWrapper(slider);
      if (!wrapper) return 0;
      return wrapper.querySelectorAll(`${MBFSlider.SLIDES_SELECTOR}:not(.swiper-slide-duplicate)`).length;
    }

    /** Schedule update */
    static scheduleUpdate(slider) {
      if (slider.dataset.updating === '1') return;
      slider.dataset.updating = '1';
      requestAnimationFrame(() => {
        slider.swiperInstance?.update();
        slider.dataset.updating = '0';
      });
    }
  }

  // Bootstrap on DOM ready
  document.addEventListener('DOMContentLoaded', MBFSlider.initAll);
})();

/***/ }),

/***/ "./src/js-frontend/productCatalogFilter.js":
/*!*************************************************!*\
  !*** ./src/js-frontend/productCatalogFilter.js ***!
  \*************************************************/
/***/ (function(__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/** ----------------------------------------------------------------------------
 * Product Catalog Filter */

(function () {
  document.addEventListener('click', event => {
    if (event.__synthetic) return;
    const overlay = event.target.closest('.wc-block-product-filters__overlay');
    if (!overlay) return;

    // Ignore clicks inside the dialog
    const dialog = overlay.querySelector('.wc-block-product-filters__overlay-dialog');
    if (dialog && dialog.contains(event.target)) {
      return;
    }
    const container = overlay.closest('.wp-block-woocommerce-product-filters');
    if (!container) return;
    const closeBtn = container.querySelector('.wc-block-product-filters__close-overlay');
    document.body.classList.remove('wc-filters-open');
    if (closeBtn) {
      const clickEvent = new MouseEvent('click', {
        bubbles: true,
        cancelable: true,
        view: window
      });
      clickEvent.__synthetic = true;
      closeBtn.dispatchEvent(clickEvent);
    } else {
      // Fallback: remove class and restore body overflow
      container.classList.remove('is-overlay-opened');
      if (document.body.style.overflow === 'hidden') {
        document.body.style.overflow = 'auto';
      }
    }
  });

  // Find all open buttons
  const openBtns = document.querySelectorAll('.wc-block-product-filters__open-overlay');
  openBtns.forEach(openBtn => {
    openBtn.addEventListener('click', () => {
      const container = openBtn.closest('.wc-block-product-filters');
      if (!container) return;

      // Toggle overlay
      const isOpen = container.classList.contains('is-overlay-opened');
      if (isOpen) {
        // Close
        container.classList.remove('is-overlay-opened');
        document.body.classList.remove('wc-filters-open');
        if (document.body.style.overflow === 'hidden') {
          document.body.style.overflow = 'auto';
        }
      } else {
        // Open
        container.classList.add('is-overlay-opened');
        document.body.classList.add('wc-filters-open');
        document.body.style.overflow = 'hidden';
      }
    });
  });
})();

/***/ }),

/***/ "./src/js-frontend/productCatalogTerms.js":
/*!************************************************!*\
  !*** ./src/js-frontend/productCatalogTerms.js ***!
  \************************************************/
/***/ (function(__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/**
 * Product Catalog Terms
 */

document.addEventListener('DOMContentLoaded', () => {
  const bodyClasses = document.body.classList;
  const terms = document.querySelectorAll('.mbf-product-catalog-terms .wp-block-term');
  terms.forEach(term => {
    for (const cls of term.classList) {
      if (bodyClasses.contains(cls)) {
        term.classList.add('is-active');
        break;
      }
    }
  });
});

/***/ }),

/***/ "./src/js-frontend/productGallery.js":
/*!*******************************************!*\
  !*** ./src/js-frontend/productGallery.js ***!
  \*******************************************/
/***/ (function(__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/**
 * Product Gallery Dialog
 */

(() => {
  /**
   * Class providing initialization and lifecycle for MBF sliders.
   */
  class MBFSlider {
    /** @type {string} CSS class for slider root */
    static SECTION = 'wc-block-product-gallery-dialog__images-container';

    /** @type {string} Selector for slide elements (direct Columns children) */
    static SLIDES_SELECTOR = ':scope > img';

    /** @type {Promise<void>|null} Promise to ensure Swiper is loaded once */
    static swiperPromise = null;

    /** Load Swiper script lazily if it's not already available */
    static ensureSwiper() {
      if (typeof window.Swiper !== 'undefined') return Promise.resolve();
      if (MBFSlider.swiperPromise) return MBFSlider.swiperPromise;
      MBFSlider.swiperPromise = new Promise((resolve, reject) => {
        const url = typeof window.frontendSettings === 'object' ? window.frontendSettings.swiperUrl : null;
        if (!url) {
          reject(new Error('Unable to resolve Swiper URL'));
          return;
        }
        const el = document.createElement('script');
        el.src = url;
        el.async = true;
        el.onload = () => resolve();
        el.onerror = () => reject(new Error(`Failed to load Swiper from ${url}`));
        document.head.appendChild(el);
      }).catch(() => {
        // Swallow the error to keep the promise settled and avoid unhandled rejections
      });
      return MBFSlider.swiperPromise;
    }

    /**
     * Initialize all sliders found on the page.
     */
    static initAll() {
      const sliders = document.querySelectorAll(`.${MBFSlider.SECTION}`);
      if (!sliders.length) return;
      const io = 'IntersectionObserver' in window ? new IntersectionObserver(MBFSlider.handleIntersection, {
        root: null,
        threshold: 0.5
      }) : null;
      sliders.forEach(slider => {
        if (io) {
          io.observe(slider);
        } else {
          // Fallback if IntersectionObserver is unavailable
          // Ensure Swiper is present, then init
          MBFSlider.ensureSwiper().then(() => MBFSlider.initSection(slider));
        }
      });

      // Debounced resize: Swiper updates layout when columns-per-view change via CSS
      let resizeRAF = 0;
      const onResize = () => {
        if (resizeRAF) cancelAnimationFrame(resizeRAF);
        resizeRAF = requestAnimationFrame(() => {
          sliders.forEach(slider => {
            if (slider.classList.contains('initialized')) {
              MBFSlider.scheduleUpdate(slider);
            }
          });
        });
      };
      window.addEventListener('resize', onResize, {
        passive: true
      });
    }

    /**
     * IntersectionObserver callback to lazy-init sliders.
     * @param {IntersectionObserverEntry[]} entries
     */
    static handleIntersection(entries) {
      entries.forEach(entry => {
        const slider = entry.target;
        if (entry.isIntersecting) {
          MBFSlider.initSection(slider);
          slider.classList.add('visible');
          slider.classList.remove('paused');
        } else {
          const inst = slider.swiperInstance;
          if (inst?.autoplay?.running) inst.autoplay.stop();
          slider.classList.remove('visible');
          slider.classList.add('paused');
        }
      });
    }

    /**
     * Initialize a single slider instance.
     * Keeps user settings intact; avoids heavy update loops.
     * @param {HTMLElement} slider
     */
    static initSection(slider) {
      if (slider.classList.contains('initialized')) return;

      // Gate initialization on Swiper being available
      if (typeof window.Swiper === 'undefined') {
        MBFSlider.ensureSwiper().then(() => MBFSlider.initSection(slider));
        return;
      }
      const prepared = MBFSlider.prepare(slider);
      if (!prepared || !prepared.slides.length) return;

      // Read settings from data attributes injected by Pattern Enhancer
      const autoplayValue = slider.getAttribute('data-mbf-autoplay') || 'false';
      const delay = parseInt(slider.getAttribute('data-mbf-delay') || '3000', 10);
      const speed = parseInt(slider.getAttribute('data-mbf-speed') || '800', 10);
      const navigationEnabled = (slider.getAttribute('data-mbf-navigation') || 'true') === 'true';
      const paginationEnabled = (slider.getAttribute('data-mbf-pagination') || 'true') === 'true';

      // Ensure control containers exist or create them dynamically
      const controls = MBFSlider.ensureControls(slider, {
        navigationEnabled,
        paginationEnabled
      });
      const config = {
        // Default wrapperClass is 'swiper-wrapper' (we add it in prepare)
        direction: 'horizontal',
        loop: prepared.slides.length > 1,
        speed,
        parallax: false,
        slidesPerView: 1,
        spaceBetween: 4,
        centeredSlides: true,
        watchOverflow: true,
        a11y: {
          slideRole: 'article',
          slideLabelMessage: 'Slide {{index}} of {{slidesLength}}'
        },
        autoplay: autoplayValue === 'true' || autoplayValue === '1' ? {
          delay,
          disableOnInteraction: false,
          pauseOnMouseEnter: true
        } : false,
        // Keep Swiper in sync with Gutenberg edits (lightly)
        observer: true,
        observeParents: true,
        observeSlideChildren: true,
        on: {
          /**
           * React only when the real number of Columns changed.
           * Avoids feedback loops from continuous DOM mutations.
           */
          observerUpdate() {
            const current = MBFSlider.countOriginalSlides(slider);
            if (slider.dataset.slidesCount !== String(current)) {
              MBFSlider.prepare(slider); // no-op if already marked
              slider.dataset.slidesCount = String(current);
              MBFSlider.scheduleUpdate(slider);
            }
          }
        }
      };
      if (controls.nextEl && controls.prevEl && navigationEnabled) {
        config.navigation = {
          nextEl: controls.nextEl,
          prevEl: controls.prevEl
        };
      }
      if (controls.paginationEl && paginationEnabled) {
        config.pagination = {
          el: controls.paginationEl,
          clickable: false,
          type: 'bullets',
          bulletElement: 'li'
        };
      }
      const instance = new Swiper(slider, config);
      slider.swiperInstance = instance;
      slider.dataset.slidesCount = String(MBFSlider.countOriginalSlides(slider));
      slider.classList.add('initialized');
    }

    /**
     * Find wrapper (first direct Columns block) and ensure required classes.
     * Marks direct Columns as slides only if not already marked.
     * @param {HTMLElement} slider
     * @returns {{wrapper: HTMLElement, slides: NodeListOf<HTMLElement>}|null}
     */
    static prepare(slider) {
      const wrapper = MBFSlider.getWrapper(slider);
      if (!wrapper) return null;

      // Ensure container has Swiper base class for styling
      if (!slider.classList.contains('swiper')) slider.classList.add('swiper');

      // Ensure wrapper has Swiper's wrapper class
      if (!wrapper.classList.contains('swiper-wrapper')) wrapper.classList.add('swiper-wrapper');

      // Mark only new slides
      wrapper.querySelectorAll(`${MBFSlider.SLIDES_SELECTOR}:not(.swiper-slide)`).forEach(el => el.classList.add('swiper-slide'));
      const slides = wrapper.querySelectorAll(MBFSlider.SLIDES_SELECTOR);
      return {
        wrapper,
        slides
      };
    }

    /**
     * Create navigation and pagination elements dynamically when enabled.
     * If disabled, ensure any previously created elements are removed.
     *
     * @param {HTMLElement} slider
     * @param {{navigationEnabled:boolean, paginationEnabled:boolean}} opts
     * @returns {{prevEl:HTMLElement|null,nextEl:HTMLElement|null,paginationEl:HTMLElement|null}}
     */
    static ensureControls(slider, opts) {
      const cls = MBFSlider.SECTION;

      // Find existing (if any)
      let prevEl = slider.querySelector(`.${cls}-button-prev`);
      let nextEl = slider.querySelector(`.${cls}-button-next`);
      let paginationEl = slider.querySelector(`.${cls}-pagination`);

      // Navigation
      if (opts.navigationEnabled) {
        if (!prevEl) {
          prevEl = document.createElement('div');
          prevEl.className = `${cls}-button ${cls}-button-prev`;
          prevEl.setAttribute('aria-label', 'Previous');
          prevEl.innerHTML = `
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M18.6786 20.276L23.9817 25.5791L22.4665 27.0942L15.6484 20.276L22.4665 13.4579L23.9817 14.9731L18.6786 20.276Z" fill="black"/>
            </svg>
          `;
          slider.appendChild(prevEl);
        }
        if (!nextEl) {
          nextEl = document.createElement('div');
          nextEl.className = `${cls}-button ${cls}-button-next`;
          nextEl.setAttribute('aria-label', 'Next');
          nextEl.innerHTML = `
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
             <path d="M21.3214 19.724L16.0183 14.4209L17.5335 12.9058L24.3516 19.724L17.5335 26.5421L16.0183 25.0269L21.3214 19.724Z" fill="black"/>
            </svg>
          `;
          slider.appendChild(nextEl);
        }
      } else {
        // Remove if present
        if (prevEl && prevEl.parentElement === slider) prevEl.remove();
        if (nextEl && nextEl.parentElement === slider) nextEl.remove();
        prevEl = null;
        nextEl = null;
      }

      // Pagination
      if (opts.paginationEnabled) {
        if (!paginationEl) {
          paginationEl = document.createElement('ul');
          paginationEl.className = `${cls}-pagination`;
          paginationEl.setAttribute('aria-label', 'Slider pagination');
          slider.appendChild(paginationEl);
        }
      } else if (paginationEl && paginationEl.parentElement === slider) {
        paginationEl.remove();
        paginationEl = null;
      }
      return {
        prevEl,
        nextEl,
        paginationEl
      };
    }

    /**
     * Return first direct Columns wrapper inside slider.
     * @param {HTMLElement} slider
     * @returns {HTMLElement|null}
     */
    static getWrapper(slider) {
      return slider.querySelector(':scope > .wc-block-product-gallery-dialog__images');
    }

    /**
     * Count original slides (exclude Swiper loop duplicates).
     * @param {HTMLElement} slider
     * @returns {number}
     */
    static countOriginalSlides(slider) {
      const wrapper = MBFSlider.getWrapper(slider);
      if (!wrapper) return 0;
      return wrapper.querySelectorAll(`${MBFSlider.SLIDES_SELECTOR}:not(.swiper-slide-duplicate)`).length;
    }

    /**
     * Debounced (rAF) update to avoid layout thrashing.
     * @param {HTMLElement} slider
     */
    static scheduleUpdate(slider) {
      if (slider.dataset.updating === '1') return;
      slider.dataset.updating = '1';
      requestAnimationFrame(() => {
        slider.swiperInstance?.update();
        slider.dataset.updating = '0';
      });
    }
  }

  // Bootstrap on DOM ready
  document.addEventListener('DOMContentLoaded', MBFSlider.initAll);
})();

/***/ }),

/***/ "./src/js-frontend/search.js":
/*!***********************************!*\
  !*** ./src/js-frontend/search.js ***!
  \***********************************/
/***/ (function(__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/** ----------------------------------------------------------------------------
 * Search toggles header panels and overlay */

(function () {
  const body = document.body;
  const headerElement = document.querySelector('header.wp-block-template-part');
  const headerOverlay = document.querySelector('.mbf-header-overlay');
  const searchToggles = document.querySelectorAll('.mbf-search-button, .mbf-search-popup .mbf-button-close');
  searchToggles.forEach(searchToggle => {
    searchToggle.addEventListener('click', function (e) {
      e.preventDefault();
      headerElement.classList.toggle('mbf-search-visible');
      body.classList.toggle('mbf-search-active');
    });
  });
  if (headerOverlay) {
    headerOverlay.addEventListener('click', function (e) {
      e.preventDefault();
      if (headerElement.classList.contains('mbf-search-visible')) {
        headerElement.classList.remove('mbf-search-visible');
        body.classList.remove('mbf-search-active');
      }
    });
  }
})();

/***/ }),

/***/ "./src/js-frontend/singlePostComments.js":
/*!***********************************************!*\
  !*** ./src/js-frontend/singlePostComments.js ***!
  \***********************************************/
/***/ (function(__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/**
 * Single Post Comments
 */

(() => {
  document.addEventListener('DOMContentLoaded', () => {
    const section = document.querySelector('.mbf-single-post-comments');
    const formWrapper = section?.querySelector('.wp-block-comments');
    const prevGroup = formWrapper?.previousElementSibling;
    if (section && formWrapper) {
      // Create div acting as a button.
      const toggleEl = document.createElement('div');
      toggleEl.className = 'mbf-single-post-comments__toggle';
      toggleEl.setAttribute('role', 'button');
      toggleEl.setAttribute('tabindex', '0');
      toggleEl.textContent = window.frontendSettings?.addReviewText || 'Add Comment';

      // Insert before formWrapper in its parent.
      prevGroup.appendChild(toggleEl);

      // Toggle logic.
      const toggleHandler = () => {
        formWrapper.classList.toggle('is-active');
        toggleEl.remove();
      };
      toggleEl.addEventListener('click', toggleHandler);

      // Make it keyboard accessible (Enter / Space).
      toggleEl.addEventListener('keydown', e => {
        if (e.key === 'Enter' || e.key === ' ') {
          e.preventDefault();
          toggleHandler();
        }
      });
    }
  });
})();

/***/ }),

/***/ "./src/js-frontend/singleProductReviews.js":
/*!*************************************************!*\
  !*** ./src/js-frontend/singleProductReviews.js ***!
  \*************************************************/
/***/ (function(__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/**
 * Single Product Reviews
 */

(() => {
  document.addEventListener('DOMContentLoaded', () => {
    const section = document.querySelector('.mbf-single-product-reviews');
    const formWrapper = section?.querySelector('#review_form_wrapper');
    if (section && formWrapper) {
      // Create div acting as a button.
      const toggleEl = document.createElement('div');
      toggleEl.className = 'mbf-single-product-reviews__toggle';
      toggleEl.setAttribute('role', 'button');
      toggleEl.setAttribute('tabindex', '0');
      toggleEl.textContent = window.frontendSettings?.addReviewText || 'Add a review';

      // Insert before formWrapper in its parent.
      formWrapper.parentNode.insertBefore(toggleEl, formWrapper);

      // Toggle logic.
      const toggleHandler = () => {
        formWrapper.classList.toggle('is-active');
        toggleEl.remove();
      };
      toggleEl.addEventListener('click', toggleHandler);

      // Make it keyboard accessible (Enter / Space).
      toggleEl.addEventListener('keydown', e => {
        if (e.key === 'Enter' || e.key === ' ') {
          e.preventDefault();
          toggleHandler();
        }
      });
    }
  });
})();

/***/ }),

/***/ "./src/js-frontend/sliderTestimonials.js":
/*!***********************************************!*\
  !*** ./src/js-frontend/sliderTestimonials.js ***!
  \***********************************************/
/***/ (function(__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/**
 *  Testimonials Carousel
 */

(() => {
  /**
   * Class providing initialization and lifecycle for MBF sliders.
   */
  class MBFSlider {
    /**
     *  Element Selectors
     */
    static SECTION = '.mbf-testimonials'; // Section container for data attributes
    static SLIDER_SELECTOR = 'is-type-mbf-slider'; // Swiper main element
    static WRAPPER_SELECTOR = ':scope > .wp-block-group'; // Swiper wrapper
    static SLIDES_SELECTOR = ':scope > .is-type-mbf-slider__item'; // Swiper items

    /** @type {Promise<void>|null} Promise to ensure Swiper is loaded once */
    static swiperPromise = null;

    /** Load Swiper script lazily if it's not already available */
    static ensureSwiper() {
      if (typeof window.Swiper !== 'undefined') return Promise.resolve();
      if (MBFSlider.swiperPromise) return MBFSlider.swiperPromise;
      MBFSlider.swiperPromise = new Promise((resolve, reject) => {
        const url = typeof window.frontendSettings === 'object' ? window.frontendSettings.swiperUrl : null;
        if (!url) {
          reject(new Error('Unable to resolve Swiper URL'));
          return;
        }
        const el = document.createElement('script');
        el.src = url;
        el.async = true;
        el.onload = () => resolve();
        el.onerror = () => reject(new Error(`Failed to load Swiper from ${url}`));
        document.head.appendChild(el);
      }).catch(() => {
        // Swallow the error to keep the promise settled and avoid unhandled rejections
      });
      return MBFSlider.swiperPromise;
    }

    /**
     * Initialize all sliders found on the page.
     */
    static initAll() {
      const sections = document.querySelectorAll(MBFSlider.SECTION);
      if (!sections.length) return;
      const io = 'IntersectionObserver' in window ? new IntersectionObserver(MBFSlider.handleIntersection, {
        root: null,
        threshold: 0.5
      }) : null;
      sections.forEach(section => {
        const slider = section.querySelector(`:scope .${MBFSlider.SLIDER_SELECTOR}`);
        if (!slider) return;
        if (io) {
          io.observe(slider);
        } else {
          // Fallback if IntersectionObserver is unavailable
          // Ensure Swiper is present, then init
          MBFSlider.ensureSwiper().then(() => MBFSlider.initSection(slider));
        }
      });

      // Debounced resize: Swiper updates layout when columns-per-view change via CSS
      let resizeRAF = 0;
      const onResize = () => {
        if (resizeRAF) cancelAnimationFrame(resizeRAF);
        resizeRAF = requestAnimationFrame(() => {
          const sliders = document.querySelectorAll(`.${MBFSlider.SLIDER_SELECTOR}`);
          sliders.forEach(slider => {
            if (slider.classList.contains('initialized')) {
              MBFSlider.scheduleUpdate(slider);
            }
          });
        });
      };
      window.addEventListener('resize', onResize, {
        passive: true
      });
    }

    /**
     * IntersectionObserver callback to lazy-init sliders.
     * @param {IntersectionObserverEntry[]} entries
     */
    static handleIntersection(entries) {
      entries.forEach(entry => {
        const slider = entry.target;
        const inst = slider.swiperInstance;
        const paginationEl = slider.querySelector('.swiper-pagination');
        if (entry.isIntersecting) {
          // Initialize slider if not already done
          if (!inst) {
            MBFSlider.initSection(slider);
          } else if (inst?.autoplay && !inst.autoplay.running) {
            inst.autoplay.start();
          }
          slider.classList.add('visible');
          slider.classList.remove('paused');
          paginationEl?.classList.remove('paused');
        } else {
          // Pause autoplay if running
          if (inst?.autoplay?.running) {
            inst.autoplay.stop();
          }
          slider.classList.remove('visible');
          slider.classList.add('paused');
          paginationEl?.classList.add('paused');
        }
      });
    }

    /**
     * Initialize a single slider instance.
     * Keeps user settings intact; avoids heavy update loops.
     * @param {HTMLElement} slider
     */
    static initSection(slider) {
      if (slider.classList.contains('initialized')) return;

      // Gate initialization on Swiper being available
      if (typeof window.Swiper === 'undefined') {
        MBFSlider.ensureSwiper().then(() => MBFSlider.initSection(slider));
        return;
      }
      const prepared = MBFSlider.prepare(slider);
      if (!prepared || !prepared.slides.length) return;

      // 🔹 NEW: Parent container for data attributes
      const container = slider.closest(MBFSlider.SECTION) || slider;

      // Read settings from parent or self
      const autoplayValue = container.getAttribute('data-mbf-autoplay') || 'false';
      const delay = parseInt(container.getAttribute('data-mbf-delay') || '3000', 10);
      const speed = parseInt(container.getAttribute('data-mbf-speed') || '800', 10);
      const navigationEnabled = (container.getAttribute('data-mbf-navigation') || 'true') === 'true';
      const paginationEnabled = (container.getAttribute('data-mbf-pagination') || 'true') === 'true';
      const itemsDesktop = parseInt(container?.getAttribute('data-mbf-desktop_items') || '2', 10);
      const itemsLaptop = parseInt(container?.getAttribute('data-mbf-laptop_items') || '2', 10);
      const itemsTablet = parseInt(container?.getAttribute('data-mbf-tablet_items') || '2', 10);
      const gap = parseInt(container?.getAttribute('data-mbf-gap') || '2', 10);

      // Ensure control containers exist or create them dynamically
      const controls = MBFSlider.ensureControls(slider, {
        navigationEnabled,
        paginationEnabled
      });
      const config = {
        // Default wrapperClass is 'swiper-wrapper' (we add it in prepare)
        direction: 'horizontal',
        loop: prepared.slides.length > 1,
        speed,
        parallax: false,
        spaceBetween: gap,
        a11y: {
          slideRole: 'article',
          slideLabelMessage: 'Slide {{index}} of {{slidesLength}}'
        },
        breakpoints: {
          320: {
            slidesPerView: 1
          },
          992: {
            slidesPerView: itemsTablet
          },
          1200: {
            slidesPerView: itemsLaptop
          },
          1400: {
            slidesPerView: itemsDesktop
          }
        },
        autoplay: autoplayValue === 'true' || autoplayValue === '1' ? {
          delay,
          disableOnInteraction: false,
          pauseOnMouseEnter: true
        } : false,
        // Keep Swiper in sync with Gutenberg edits (lightly)
        observer: true,
        observeParents: true,
        observeSlideChildren: true,
        on: {
          /**
           * React only when the real number of Columns changed.
           * Avoids feedback loops from continuous DOM mutations.
           */
          observerUpdate() {
            const current = MBFSlider.countOriginalSlides(slider);
            if (slider.dataset.slidesCount !== String(current)) {
              MBFSlider.prepare(slider); // no-op if already marked
              slider.dataset.slidesCount = String(current);
              MBFSlider.scheduleUpdate(slider);
            }
          }
        }
      };
      if (controls.nextEl && controls.prevEl && navigationEnabled) {
        config.navigation = {
          nextEl: controls.nextEl,
          prevEl: controls.prevEl
        };
      }
      if (controls.paginationEl && paginationEnabled) {
        config.pagination = {
          el: controls.paginationEl,
          clickable: true,
          type: 'bullets',
          bulletElement: 'li'
        };
      }
      const instance = new Swiper(slider, config);

      // Add <span> to pagination bullets
      if (controls.paginationEl) {
        const addSpanToBullets = () => {
          controls.paginationEl.querySelectorAll('.swiper-pagination-bullet').forEach(bullet => {
            if (!bullet.querySelector('span')) {
              const span = document.createElement('span');
              bullet.appendChild(span);
            }
          });
        };
        setTimeout(addSpanToBullets, 0);
        instance.on('paginationUpdate', addSpanToBullets);
      }

      // Pause on hover
      slider.addEventListener('mouseenter', () => {
        if (instance.autoplay && instance.autoplay.running) {
          instance.autoplay.stop();
        }
        slider.classList.add('paused');
        controls.paginationEl?.classList.add('paused');
      });
      slider.addEventListener('mouseleave', () => {
        if (autoplayValue === 'true' || autoplayValue === '1') {
          instance.autoplay.start();
        }
        slider.classList.remove('paused');
        controls.paginationEl?.classList.remove('paused');
      });
      slider.swiperInstance = instance;
      slider.dataset.slidesCount = String(MBFSlider.countOriginalSlides(slider));
      slider.classList.add('initialized');
    }

    /**
     * Find wrapper (first direct Columns block) and ensure required classes.
     * Marks direct Columns as slides only if not already marked.
     * @param {HTMLElement} slider
     * @returns {{wrapper: HTMLElement, slides: NodeListOf<HTMLElement>}|null}
     */
    static prepare(slider) {
      const wrapper = MBFSlider.getWrapper(slider);
      if (!wrapper) return null;

      // Ensure container has Swiper base class for styling
      if (!slider.classList.contains('swiper')) slider.classList.add('swiper');

      // Ensure wrapper has Swiper's wrapper class
      if (!wrapper.classList.contains('swiper-wrapper')) wrapper.classList.add('swiper-wrapper');

      // Mark only new slides
      wrapper.querySelectorAll(`${MBFSlider.SLIDES_SELECTOR}:not(.swiper-slide)`).forEach(el => el.classList.add('swiper-slide'));
      const slides = wrapper.querySelectorAll(MBFSlider.SLIDES_SELECTOR);
      return {
        wrapper,
        slides
      };
    }

    /**
     * Create navigation/pagination if needed
     */
    static ensureControls(slider, opts) {
      const cls = MBFSlider.SLIDER_SELECTOR;

      // Find existing (if any)
      let prevEl = slider.querySelector(`.${cls}__button-prev`);
      let nextEl = slider.querySelector(`.${cls}__button-next`);
      let paginationEl = slider.querySelector(`.${cls}__pagination`);

      // Navigation
      if (opts.navigationEnabled) {
        if (!prevEl) {
          prevEl = document.createElement('div');
          prevEl.className = `${cls}__button ${cls}__button-prev`;
          prevEl.setAttribute('aria-label', 'Previous');
          prevEl.innerHTML = ` <svg width="14" height="7" viewBox="0 0 14 7" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M3.36753 3.93051C3.94142 4.56014 4.54049 5.47218 5.16472 6.66663L4.07734 6.66663C2.79867 5.27774 1.43944 4.24996 -0.000324736 3.58329L-0.000324692 3.08329C1.43945 2.41663 2.79867 1.38885 4.07735 -4.11019e-05L5.16472 -4.10068e-05C4.54049 1.1944 3.94142 2.10644 3.36753 2.73607L13.333 2.73607L13.333 3.93052L3.36753 3.93051Z" fill="currentColor"/>
          </svg>`;
          slider.appendChild(prevEl);
        }
        if (!nextEl) {
          nextEl = document.createElement('div');
          nextEl.className = `${cls}__button ${cls}__button-next`;
          nextEl.setAttribute('aria-label', 'Next');
          nextEl.innerHTML = `<svg width="14" height="7" viewBox="0 0 14 7" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9.96548 2.73611C9.39159 2.10648 8.79252 1.19444 8.16828 0H9.25566C10.5343 1.38889 11.8936 2.41667 13.3333 3.08333V3.58333C11.8936 4.25 10.5343 5.27778 9.25566 6.66667H8.16828C8.79252 5.47222 9.39159 4.56018 9.96548 3.93056H0V2.73611H9.96548Z" fill="currentColor"/>
            </svg>`;
          slider.appendChild(nextEl);
        }
      } else {
        // Remove if present
        if (prevEl && prevEl.parentElement === slider) prevEl.remove();
        if (nextEl && nextEl.parentElement === slider) nextEl.remove();
        prevEl = null;
        nextEl = null;
      }

      // Pagination
      if (opts.paginationEnabled) {
        if (!paginationEl) {
          paginationEl = document.createElement('ul');
          paginationEl.className = `${cls}__pagination`;
          paginationEl.setAttribute('aria-label', 'Slider pagination');
          slider.appendChild(paginationEl);

          // Check autoplay.
          const container = slider.closest(MBFSlider.SECTION) || slider;
          const autoplay = container.getAttribute('data-mbf-autoplay') === 'true';
          if (autoplay) {
            const delay = !isNaN(parseInt(container.getAttribute('data-mbf-delay'))) ? parseInt(container.getAttribute('data-mbf-delay')) : 5000;
            // Set CSS variable for animation duration
            paginationEl.style.setProperty('--mbf-animation-duration', `${delay / 1000}s`);
          } else {
            // Remove previously set var if autoplay disabled.
            paginationEl.style.removeProperty('--mbf-animation-duration');
          }
        }
      } else if (paginationEl && paginationEl.parentElement === slider) {
        paginationEl.remove();
        paginationEl = null;
      }
      return {
        prevEl,
        nextEl,
        paginationEl
      };
    }

    /**
     * Return first direct Columns wrapper inside slider.
     * @param {HTMLElement} slider
     * @returns {HTMLElement|null}
     */
    static getWrapper(slider) {
      return slider.querySelector(MBFSlider.WRAPPER_SELECTOR);
    }

    /**
     * Count original slides (exclude Swiper loop duplicates).
     * @param {HTMLElement} slider
     * @returns {number}
     */
    static countOriginalSlides(slider) {
      const wrapper = MBFSlider.getWrapper(slider);
      if (!wrapper) return 0;
      return wrapper.querySelectorAll(`${MBFSlider.SLIDES_SELECTOR}:not(.swiper-slide-duplicate)`).length;
    }

    /**
     * Debounced (rAF) update to avoid layout thrashing.
     * @param {HTMLElement} slider
     */
    static scheduleUpdate(slider) {
      if (slider.dataset.updating === '1') return;
      slider.dataset.updating = '1';
      requestAnimationFrame(() => {
        slider.swiperInstance?.update();
        slider.dataset.updating = '0';
      });
    }
  }

  // Bootstrap on DOM ready
  document.addEventListener('DOMContentLoaded', MBFSlider.initAll);
})();

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		if (!(moduleId in __webpack_modules__)) {
/******/ 			delete __webpack_module_cache__[moduleId];
/******/ 			var e = new Error("Cannot find module '" + moduleId + "'");
/******/ 			e.code = 'MODULE_NOT_FOUND';
/******/ 			throw e;
/******/ 		}
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	!function() {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = function(exports) {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	}();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry needs to be wrapped in an IIFE because it needs to be isolated against other modules in the chunk.
!function() {
/*!*************************!*\
  !*** ./src/frontend.js ***!
  \*************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _js_frontend_heroSlider_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./js-frontend/heroSlider.js */ "./src/js-frontend/heroSlider.js");
/* harmony import */ var _js_frontend_footer_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./js-frontend/footer.js */ "./src/js-frontend/footer.js");
/* harmony import */ var _js_frontend_sliderTestimonials_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./js-frontend/sliderTestimonials.js */ "./src/js-frontend/sliderTestimonials.js");
/* harmony import */ var _js_frontend_postCarousel_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./js-frontend/postCarousel.js */ "./src/js-frontend/postCarousel.js");
/* harmony import */ var _js_frontend_productCarousel_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./js-frontend/productCarousel.js */ "./src/js-frontend/productCarousel.js");
/* harmony import */ var _js_frontend_productCatalogTerms_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./js-frontend/productCatalogTerms.js */ "./src/js-frontend/productCatalogTerms.js");
/* harmony import */ var _js_frontend_singleProductReviews_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./js-frontend/singleProductReviews.js */ "./src/js-frontend/singleProductReviews.js");
/* harmony import */ var _js_frontend_singlePostComments_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./js-frontend/singlePostComments.js */ "./src/js-frontend/singlePostComments.js");
/* harmony import */ var _js_frontend_search_js__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ./js-frontend/search.js */ "./src/js-frontend/search.js");
/* harmony import */ var _js_frontend_productGallery_js__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ./js-frontend/productGallery.js */ "./src/js-frontend/productGallery.js");
/* harmony import */ var _js_frontend_burgerMenu_js__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! ./js-frontend/burgerMenu.js */ "./src/js-frontend/burgerMenu.js");
/* harmony import */ var _js_frontend_navigation_js__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! ./js-frontend/navigation.js */ "./src/js-frontend/navigation.js");
/* harmony import */ var _js_frontend_miniCart_js__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! ./js-frontend/miniCart.js */ "./src/js-frontend/miniCart.js");
/* harmony import */ var _js_frontend_productCatalogFilter_js__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! ./js-frontend/productCatalogFilter.js */ "./src/js-frontend/productCatalogFilter.js");
/* harmony import */ var _js_frontend_bannersAnimation_js__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! ./js-frontend/bannersAnimation.js */ "./src/js-frontend/bannersAnimation.js");
/* harmony import */ var _js_frontend_categoriesBanner_js__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! ./js-frontend/categoriesBanner.js */ "./src/js-frontend/categoriesBanner.js");
/**
 * Frontend Bundle
 *
 * Main entry point for all frontend JavaScript functionality
 */

















}();
/******/ })()
;
//# sourceMappingURL=frontend.js.map