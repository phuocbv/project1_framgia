jQuery(document).ready(function($) {
	$('.list-group.menu-group .list-group-item.active').on('click', function(event) {
		$(this).next('div').slideToggle();
	});

	$('table tbody tr').on('click', function(event) {
		alert($(this).next('td').val());
	});
});
