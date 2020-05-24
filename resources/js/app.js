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
    $("#buy-button").click(function(){
        let url_split = window.location.pathname.split('/');
        window.location = '/kontakt/' + url_split[url_split.length-1];
    });
});
