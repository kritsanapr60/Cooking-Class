/* 5sec Snow
 * (c) Web factory Ltd, 2011
 * www.webfactoryltd.com
 */

jQuery(document).ready(function($) {
  if($('#linked_flakes').val() == '0') {
    $('#link-container').hide();
  }
  if($('#turn_off_link:checked').length == 0) {
    $('#off_html').hide();
  }


  $('#linked_flakes').change(function() {
    if ($(this).val() != '0') {
      $('#link-container').show();
    } else {
      $('#link-container').hide();
    }
  });
  $('#linked_flakes').click(function() {
    if ($(this).val() != '0') {
      $('#link-container').show();
    } else {
      $('#link-container').hide();
    }
  });
  $('#linked_flakes').keypress(function() {
    if ($(this).val() != '0') {
      $('#link-container').show();
    } else {
      $('#link-container').hide();
    }
  });

  $('#turn_off_link').change(function() {
    if ($(this).attr('checked') == 'checked') {
      $('#off_html').show();
    } else {
      $('#off_html').hide();
    }
  });
});