$(document).ready(function () {

    var url = $('meta[name="url-website"]').attr('content')+'/';
    var url_dashboard = $('meta[name="url-dashboard"]').attr('content')+'/';
    var token = $('meta[name="csrf-token"]').attr('content');

    // Global token
    window.token = token;

    // Route
    var route = [url+'select-dynamic', url_dashboard+'query-owner/', url_dashboard+'owner-register'];

    // Load functions
    ajax.select_dynamic(route);
    ajax.select_dynamic_edit(route);
    ajax.propierty();
	ajax.add_search_owner(route);
    ajax.query_owner(route);
});