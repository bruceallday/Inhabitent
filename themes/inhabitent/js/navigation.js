(function ($) {
  'use strict';

  /**
   * Search Box Toggling
   */

  $(function () {
    $('.search-toggle').on('click', function (event) {
      event.preventDefault();
      const $label = $(this).siblings('label');
      $label.animate({ width: 'toggle' });
      $label.children('[type="search"]').focus();
    });

    $('.search-field').on('blur', function () {
      if ($(this).val() === '') {
        $('.header-search label').animate({ width: 'hide' });
      }
    });
  });
})(jQuery);
