$('.form__step').each(function() {
  $(this).find('.radio__input').each(function(i, input) {
    $(input).on('click', function() {
      const closestParent = $(this).parents('.form__step');
      if (closestParent.attr('data-hint') === 'on') {
        closestParent.find(`.form__hint-img`).each(function(j, img) {
          if (j === i) {
            $(img).removeClass('is-hidden');
          } else {
            $(img).addClass('is-hidden');
          }
        })
      }
      closestParent.find('.btn_next').removeAttr('disabled');
    })
  })
})

$('.btn_callback').on('click', function() {
  const currentStep = $(this).closest('.form__step');
  const nextStep = currentStep.next('.form__step');

  if ($(currentStep).hasClass('is-last')) {
    this.type = 'submit';
    return;
  }
  currentStep.removeClass('is-active');
  nextStep.addClass('is-active');
})

$('#quiz-form').on('submit', function(evt) {
  evt.preventDefault();
  const url = $(this).attr('action');
  const method = $(this).attr('method');
  const data = $(this).serialize();
  $.ajax({
    url,
    method,
    data,
  });
})
