
$(function() {

    var $slider, $pictures, pictures 
    $slider = $("slider");
    pictures = $slider.html().split(/\s+/);
    $pictures = $(
            pictures.forEach(
                function(url) { return $("<img>").attr("src", url); } ));
    $slider.replaceWith($pictures)

});
