$( document ).ready(function() {
    $( ".color-box" ).click(function() {
        let color = $(this).data("color");
        $(".color").css("color", color);
        $("#input-color").val(color);
    });
    $( ".submit-add-list" ).click(function() {
        $("#form").submit();
    });


    $( ".list-link" ).click(function() {
        let listId= $(this).data("id");
        $( ".list-link" ).attr("href","list.php?id="+listId+"")

    });

    $.fn.enterKey = function (fnc) {
        return this.each(function () {
            $(this).keypress(function (ev) {
                var keycode = (ev.keyCode ? ev.keyCode : ev.which);
                if (keycode == '13') {
                    fnc.call(this, ev);
                }
            })
        })
    }
});