$(function(){

    $('.ubahToDo').on('click', function(){
        const id = $(this).data('id');
        const value = $(this).data('value');

        $('#id').val(id);
        $('#todo').val(value);
    });
});