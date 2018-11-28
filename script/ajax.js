$( document ).ready(function() {

    $('#input-name').keypress(function(event){
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if(keycode == '13'){
            let name = $(this).val();
            let newName = $(this)
             $.ajax({
                 type: "post",
                 data: {'add-item-name':name},
                 success: function (response) {
                     newName.val("");
                 },
                 error: function(jqXHR, textStatus, errorThrown) {
                     console.log(textStatus, errorThrown);
                 }


             });
        }
    });


    $('.common-checkbox').click(function() {
        let hideDiv = $(this).parent('.col-sm-6').parent('.row');
        let listName = $(this).data('name');
        let listId = $(this).data('id');
        $.ajax({
            type: "post",
            data: {'add-item-name':listName,'id':listId},
            success: function (response) {
                hideDiv.slideUp(700);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }


        });


    });




});
