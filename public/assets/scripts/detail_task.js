$('[data-target="#confirm-delete-modal"]').click(function(){
    var target = $(this).data('target');
    $(target).modal('show');
});