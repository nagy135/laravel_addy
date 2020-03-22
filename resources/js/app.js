require('./bootstrap');

$(document).ready(function(){
    $('#category_select').on('change', () => {
        value = $('#category_select').val();
        if (value == 'all'){
            window.location = '/produkty';
        } else {
            window.location = '/produkty/' + value;
        }
    });
});
