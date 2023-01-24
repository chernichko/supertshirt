$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


$(document).on('click', '.add-to-cart', function (e) {
    e.preventDefault();

    $.post(
        $(this).attr('href'),
        function (response) {
            console.log(response);
        }
    );

});
