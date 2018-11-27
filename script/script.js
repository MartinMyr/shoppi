$( document ).ready(function() {
    $( ".color-box" ).click(function() {
        let color = $(this).data("color");
        $(".color").css("color", color);
        $("#input-color").val(color);
    });
    $( ".submit-add-list" ).click(function() {
        $("#form").submit();
    });



});