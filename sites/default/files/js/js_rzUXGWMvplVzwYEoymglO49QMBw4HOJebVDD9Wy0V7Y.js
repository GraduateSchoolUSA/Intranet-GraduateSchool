/**
 * @file
 * Javascript behaviors for webform UI element.
 */

(function ($, Drupal, drupalSettings) {

  'use strict';

  /**
   * Monitor the element's key (aka machine name).
   *
   * @type {Drupal~behavior}
   */
  Drupal.behaviors.webformUiElementKey = {
    attach: function (context) {
      if (!$(context).find(':input[name="key"]').length) {
        return;
      }

      // Monitor the machine name and display a warning when a reserved word is
      // being used.
      // There is no way to capture changes to the key val.
      // @see core/misc/machine-name.js.
      setInterval(function () {
        var value = $(':input[name="key"]').val();
        if ($.inArray(value, drupalSettings.webform_ui.reserved_keys) !== -1) {
          // Customize and display the warning message.
          $('[data-drupal-selector="edit-key-warning"]').html(
            Drupal.t("Please avoid using the reserved word '@key' as the element's key.", {'@key': value})
          ).show();
        }
        else {
          // Hide the warning message.
          $('[data-drupal-selector="edit-key-warning"]').hide();
        }
      }, 300);

    }
  };

})(jQuery, Drupal, drupalSettings);
;
/**
 * @file
 * Javascript behaviors for message element integration.
 */

(function ($, Drupal) {

  'use strict';

  /**
   * Move show weight to after the table.
   *
   * @type {Drupal~behavior}
   */
  Drupal.behaviors.webformMultiple = {
    attach: function (context, settings) {
      for (var base in settings.tableDrag) {
        if (settings.tableDrag.hasOwnProperty(base)) {
          var $tableDrag = $(context).find('#' + base);
          var $toggleWeight = $tableDrag.parent().find('.tabledrag-toggle-weight');
          $toggleWeight.addClass('webform-multiple-tabledrag-toggle-weight');
          $tableDrag.after($toggleWeight);
        }
      }
    }
  };

})(jQuery, Drupal);
;
