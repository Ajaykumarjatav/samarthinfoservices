(function ($) {
    'use strict';

    var $navDropdownToggles = null;

    function isMobileNav() {
        return window.matchMedia('(max-width: 991.98px)').matches;
    }

    function syncNavDropdownToggleMode() {
        $navDropdownToggles = $('.app-header-nav-dropdown > .dropdown-toggle');
        if (!$navDropdownToggles.length) {
            return;
        }
        if (isMobileNav()) {
            $navDropdownToggles.removeAttr('data-toggle');
        } else {
            $navDropdownToggles.each(function () {
                if (!$(this).attr('data-toggle')) {
                    $(this).attr('data-toggle', 'dropdown');
                }
            });
        }
    }

    function closeNavDropdowns() {
        $('.app-header-nav-dropdown').removeClass('open');
        $('.app-header-nav-dropdown > .dropdown-toggle').attr('aria-expanded', 'false');
    }

    $(syncNavDropdownToggleMode);
    $(window).on('resize', syncNavDropdownToggleMode);

    $(document).on('click', '.app-header-nav-dropdown > .dropdown-toggle', function (e) {
        if (!isMobileNav()) {
            return;
        }
        e.preventDefault();
        e.stopImmediatePropagation();
        var $item = $(this).closest('.app-header-nav-dropdown');
        var open = !$item.hasClass('open');
        $('.app-header-nav-dropdown').not($item).removeClass('open');
        $('.app-header-nav-dropdown').not($item).find('> .dropdown-toggle').attr('aria-expanded', 'false');
        $item.toggleClass('open', open);
        $(this).attr('aria-expanded', open ? 'true' : 'false');
    });

    $(document).on('click', function (e) {
        if (!isMobileNav()) {
            return;
        }
        if (!$(e.target).closest('.app-header-nav-dropdown').length) {
            closeNavDropdowns();
        }
    });

    $('.navbar-toggler').on('click', function () {
        closeNavDropdowns();
    });

    function closeMobileNav() {
        $('.navbar-collapse').removeClass('in show');
        $('.navbar-toggler').removeClass('menu-close');
        $('body').removeClass('bg-layer');
    }

    $(document).on('click', '[data-bs-target="#exampleModal"], a.modal-button[data-bs-target="#exampleModal"]', function () {
        closeMobileNav();
    });

    $(document).on('show.bs.modal', '#exampleModal', function () {
        closeMobileNav();
    });
})(jQuery);
