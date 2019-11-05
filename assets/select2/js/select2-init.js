function format(state) {
    if (!state.id) return state.text; 
    return  state.text;
}

var placeholder = "Select a vehicle";
$('.select2-customer-vehicles').select2({
	theme: "bootstrap",
    placeholder: placeholder,
});

$(".select2-customers").select2({
	theme: "bootstrap",
	templateResult: format,
    formatSelection: format,
    escapeMarkup: function(m) {
        return m;
    }
});

$('.select2-allow-clear').select2({
	theme: "bootstrap",
    allowClear: true,
    placeholder: placeholder
});

$('#select2-customers').on('change',function(){
    var id = $(this).val();
    location.search="?customer=" + id;
});
