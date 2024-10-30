jQuery(document).ready(function($){
    jQuery('.hcb_color_field').wpColorPicker();
});

var myOptions = {   
    defaultColor: false,    
    change: function(event, ui){},  
    clear: function() {},    
    hide: true,   
    palettes: true
}; 
jQuery('.hcb_color_field').wpColorPicker(myOptions);