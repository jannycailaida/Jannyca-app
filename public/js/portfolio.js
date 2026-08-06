/* ============================================================
   Jannyca Ilaida — Portfolio interactions
   Vanilla JS, no dependencies. Every animated feature respects
   prefers-reduced-motion (values render instantly, no loops).
   ============================================================ */

(function () {
    'use strict';

    var prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    /* ---------- Loading screen ---------- */
    var loader = document.getElementById('loader');
    if (loader) {
        var hideLoader = function () {
            loader.classList.add('loader--done');
            window.setTimeout(function () {
                loader.remove();
            }, 600);
        };
        if (prefersReducedMotion || document.readyState === 'complete') {
            hideLoader();
        } else {
            window.addEventListener('load', hideLoader);
            // Never trap the visitor behind the loader.
            window.setTimeout(hideLoader, 2500);
        }
    }

    /* ---------- Navbar state ---------- */
    var nav = document.querySelector('.nav');
    var navToggle = document.getElementById('nav-toggle');
    var navLinks = document.getElementById('nav-links');

    var onScrollNav = function () {
        if (!nav) return;
        nav.classList.toggle('nav--scrolled', window.scrollY > 24);
    };
    onScrollNav();
    window.addEventListener('scroll', onScrollNav, { passive: true });

    /* ---------- Mobile menu ---------- */
    var setMenuOpen = function (open, returnFocus) {
        navLinks.classList.toggle('is-open', open);
        navToggle.setAttribute('aria-expanded', String(open));
        navToggle.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');

        if (open) {
            var firstLink = navLinks.querySelector('a');
            if (firstLink) firstLink.focus();
        } else if (returnFocus) {
            navToggle.focus();
        }
    };

    if (navToggle && navLinks) {
        navToggle.addEventListener('click', function () {
            setMenuOpen(!navLinks.classList.contains('is-open'), true);
        });

        navLinks.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', function () {
                setMenuOpen(false);
            });
        });

        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape' && navLinks.classList.contains('is-open')) {
                setMenuOpen(false, true);
            }
        });
    }

    /* ---------- Scroll progress bar ---------- */
    var progressBar = document.querySelector('.progress > span');
    var onScrollProgress = function () {
        if (!progressBar) return;
        var doc = document.documentElement;
        var max = doc.scrollHeight - doc.clientHeight;
        progressBar.style.width = (max > 0 ? (window.scrollY / max) * 100 : 0) + '%';
    };
    window.addEventListener('scroll', onScrollProgress, { passive: true });

    /* ---------- Back to top ---------- */
    var toTop = document.getElementById('to-top');
    if (toTop) {
        window.addEventListener('scroll', function () {
            toTop.classList.toggle('is-visible', window.scrollY > 520);
        }, { passive: true });

        toTop.addEventListener('click', function () {
            window.scrollTo({ top: 0, behavior: prefersReducedMotion ? 'auto' : 'smooth' });
        });
    }

    /* ---------- Active nav link on scroll ---------- */
    var sections = document.querySelectorAll('main section[id]');
    var navAnchors = document.querySelectorAll('.nav__links a[href^="#"]');
    var sectionMap = {};
    sections.forEach(function (section) {
        sectionMap[section.id] = section;
    });

    var onScrollActive = function () {
        if (!navAnchors.length) return;
        var probe = window.scrollY + 120;
        var current = null;
        sections.forEach(function (section) {
            if (section.offsetTop <= probe) current = section.id;
        });
        navAnchors.forEach(function (link) {
            link.classList.toggle('is-active', link.getAttribute('href') === '#' + current);
        });
    };
    window.addEventListener('scroll', onScrollActive, { passive: true });
    onScrollActive();

    /* ---------- Reveal on scroll ---------- */
    var revealEls = document.querySelectorAll('.reveal');
    if ('IntersectionObserver' in window && !prefersReducedMotion) {
        var revealObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    revealObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
        revealEls.forEach(function (el) {
            revealObserver.observe(el);
        });
    } else {
        revealEls.forEach(function (el) {
            el.classList.add('is-visible');
        });
    }

    /* ---------- Typing effect ---------- */
    var typedEl = document.getElementById('typed');
    var ROLES = ['Web Developer', 'Mobile Developer', 'UI/UX Enthusiast', 'Future Software Engineer'];

    if (typedEl) {
        if (prefersReducedMotion) {
            typedEl.textContent = ROLES[0];
        } else {
            var roleIndex = 0;
            var charIndex = 0;
            var deleting = false;
            var TYPE_MS = 70;
            var PAUSE_MS = 1600;
            var DELETE_MS = 34;

            var tick = function () {
                var word = ROLES[roleIndex];
                if (!deleting) {
                    charIndex += 1;
                    typedEl.textContent = word.slice(0, charIndex);
                    if (charIndex === word.length) {
                        deleting = true;
                        window.setTimeout(tick, PAUSE_MS);
                        return;
                    }
                    window.setTimeout(tick, TYPE_MS);
                } else {
                    charIndex -= 1;
                    typedEl.textContent = word.slice(0, charIndex);
                    if (charIndex === 0) {
                        deleting = false;
                        roleIndex = (roleIndex + 1) % ROLES.length;
                    }
                    window.setTimeout(tick, DELETE_MS);
                }
            };
            tick();
        }
    }

    /* ---------- Animated counters ---------- */
    var counters = document.querySelectorAll('[data-count]');
    var animateCounter = function (el) {
        var target = parseInt(el.getAttribute('data-count'), 10) || 0;
        var duration = 1200;
        var start = null;

        var step = function (timestamp) {
            if (!start) start = timestamp;
            var progress = Math.min((timestamp - start) / duration, 1);
            // Ease out
            var eased = 1 - Math.pow(1 - progress, 3);
            el.textContent = Math.round(eased * target);
            if (progress < 1) {
                window.requestAnimationFrame(step);
            }
        };

        window.requestAnimationFrame(step);
    };

    if ('IntersectionObserver' in window && !prefersReducedMotion) {
        var countObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    countObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });
        counters.forEach(function (el) {
            countObserver.observe(el);
        });
    } else {
        counters.forEach(function (el) {
            el.textContent = el.getAttribute('data-count') || '0';
        });
    }

    /* ---------- Skill bars ---------- */
    var bars = document.querySelectorAll('.skill__bar > span');
    // The bars animate via transform: scaleX (compositor-friendly) instead of
    // width; data-level is a percentage string like "85%".
    var setBarLevel = function (bar) {
        var level = parseFloat(bar.getAttribute('data-level')) || 0;
        bar.style.transform = 'scaleX(' + (Math.min(level, 100) / 100) + ')';
    };
    if ('IntersectionObserver' in window && !prefersReducedMotion) {
        var barObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    setBarLevel(entry.target);
                    barObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.3 });
        bars.forEach(function (bar) {
            barObserver.observe(bar);
        });
    } else {
        bars.forEach(setBarLevel);
    }

    /* ---------- Toasts ---------- */
    var toasts = document.getElementById('toasts');

    var showToast = function (message, type) {
        if (!toasts) return;
        type = type || 'info';

        var toast = document.createElement('div');
        toast.className = 'toast toast--' + type;
        toast.setAttribute('role', 'status');

        var icon = document.createElement('i');
        var icons = {
            success: 'fa-solid fa-circle-check',
            error: 'fa-solid fa-circle-exclamation',
            info: 'fa-solid fa-circle-info'
        };
        icon.className = icons[type] || icons.info;
        toast.appendChild(icon);

        var text = document.createElement('span');
        text.textContent = message;
        toast.appendChild(text);

        toasts.appendChild(toast);

        window.setTimeout(function () {
            toast.classList.add('toast--leaving');
            toast.addEventListener('animationend', function () {
                toast.remove();
            });
        }, 3800);
    };

    window.showToast = showToast;

    /* ---------- Placeholder actions ---------- */
    document.addEventListener('click', function (event) {
        var trigger = event.target.closest('[data-placeholder-link]');
        if (!trigger) return;
        event.preventDefault();
        showToast('Placeholder link: ' + (trigger.getAttribute('data-message') || 'coming soon'), 'info');
    });

    document.addEventListener('click', function (event) {
        var resume = event.target.closest('[data-resume-placeholder]');
        if (!resume) return;
        event.preventDefault();
        showToast('Resume is coming soon. Jannyca will add the PDF here.', 'info');
    });

    /* ---------- Contact form ---------- */
    var form = document.getElementById('contact-form');
    if (form) {
        var submitBtn = form.querySelector('[type="submit"]');
        var originalBtnText = submitBtn ? submitBtn.innerHTML : '';

        var setFieldError = function (name, message) {
            var field = form.querySelector('[data-field="' + name + '"]');
            var errorEl = field ? field.querySelector('.field__error') : null;
            if (!field || !errorEl) return;
            if (message) {
                field.classList.add('field--invalid');
                errorEl.textContent = message;
            } else {
                field.classList.remove('field--invalid');
                errorEl.textContent = '';
            }
        };

        var clearErrors = function () {
            form.querySelectorAll('.field--invalid').forEach(function (field) {
                field.classList.remove('field--invalid');
                var errorEl = field.querySelector('.field__error');
                if (errorEl) errorEl.textContent = '';
            });
        };

        form.addEventListener('submit', function (event) {
            event.preventDefault();
            clearErrors();

            var data = new FormData(form);
            var submitValue = submitBtn ? submitBtn.value : '';
            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<i class="fa-solid fa-circle-notch fa-spin"></i> Sending...';
            }

            fetch(form.getAttribute('action'), {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: data
            })
                .then(function (response) {
                    return response.json().then(function (json) {
                        return { ok: response.ok, json: json };
                    });
                })
                .then(function (result) {
                    if (result.ok) {
                        form.reset();
                        showToast(result.json.message || 'Message sent. Thank you!', 'success');
                    } else {
                        var errors = result.json.errors || {};
                        Object.keys(errors).forEach(function (name) {
                            setFieldError(name, errors[name][0]);
                        });
                        showToast('Please check the highlighted fields.', 'error');
                    }
                })
                .catch(function () {
                    showToast('Something went wrong. Please try again.', 'error');
                })
                .finally(function () {
                    if (submitBtn) {
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = originalBtnText;
                    }
                });
        });

        // Clear an error as soon as the visitor edits that field.
        form.addEventListener('input', function (event) {
            var field = event.target.closest('.field');
            if (field) field.classList.remove('field--invalid');
        });
    }
})();
