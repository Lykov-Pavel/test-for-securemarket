$(function () {
  const $form = $('#form');

  $form.on('submit', (e) => {
    e.preventDefault();

    $('#alert').text('').hide();

    $.ajax({
      url:'/handler.php',
      method: 'POST',
      data: $form.serialize(),
      success: ( data ) => {
        $('#form').hide();
        $('.success').show();
      },
      error: ( data ) => {
        $('#alert').text(data.responseText).show();
      }
    });
  });
});