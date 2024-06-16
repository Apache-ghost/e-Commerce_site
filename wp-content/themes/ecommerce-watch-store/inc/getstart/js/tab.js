function ecommerce_watch_store_open_tab(evt, cityName) {
    var ecommerce_watch_store_i, ecommerce_watch_store_tabcontent, ecommerce_watch_store_tablinks;
    ecommerce_watch_store_tabcontent = document.getElementsByClassName("tabcontent");
    for (ecommerce_watch_store_i = 0; ecommerce_watch_store_i < ecommerce_watch_store_tabcontent.length; ecommerce_watch_store_i++) {
        ecommerce_watch_store_tabcontent[ecommerce_watch_store_i].style.display = "none";
    }
    ecommerce_watch_store_tablinks = document.getElementsByClassName("tablinks");
    for (ecommerce_watch_store_i = 0; ecommerce_watch_store_i < ecommerce_watch_store_tablinks.length; ecommerce_watch_store_i++) {
        ecommerce_watch_store_tablinks[ecommerce_watch_store_i].className = ecommerce_watch_store_tablinks[ecommerce_watch_store_i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

jQuery(document).ready(function () {
    jQuery( ".tab-sec .tablinks" ).first().addClass( "active" );
});