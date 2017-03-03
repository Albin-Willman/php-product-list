$(document).ready(function() {
  // TODO: implement js functionality
  $('.description-cell button').click(function(e) {
    $(e.target).closest('.description-cell').toggleClass('show-all');
  });
  $('.sortable-column').click(function(e) {
    var sortBy = $(this).data('sortby');
    location = '/?sortby=' + sortBy;
  });
});
