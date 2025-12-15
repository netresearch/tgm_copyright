import $ from 'jquery';

function validateReferenceFields() {
  const $referenceFields = $('.t3js-formengine-placeholder-formfield input[type="hidden"][name$="[copyright]"]');

  $referenceFields.each(function () {
    const $field = $(this);
    const $parentFieldGroup = $field.closest('.t3js-formengine-palette-field');

    if ($field.parents('.t3js-inline-record-deleted').length === 0) {
      const nullCheckboxChecked = $parentFieldGroup
        .find('.t3js-form-field-eval-null-placeholder-checkbox input')
        .is(':checked');

      const placeholderValue = $parentFieldGroup
        .find('.t3js-formengine-placeholder-placeholder input')
        .val();

      const hiddenValue = $field.val();

      const placeholderIsEmpty = (placeholderValue ?? '').toString() === '';
      const hiddenIsEmpty = (hiddenValue ?? '').toString() === '';

      if (nullCheckboxChecked === false && placeholderIsEmpty) {
        $parentFieldGroup.addClass('has-error');
      } else if (nullCheckboxChecked === true && hiddenIsEmpty) {
        $parentFieldGroup.addClass('has-error');
      } else {
        $parentFieldGroup.removeClass('has-error');
      }
    } else {
      $parentFieldGroup.removeClass('has-error');
    }
  });
}

$(document).on('t3-formengine-postfieldvalidation', function () {
  validateReferenceFields();
});

$(document).on('change', '.t3js-form-field-eval-null-placeholder-checkbox input', function () {
  validateReferenceFields();
});