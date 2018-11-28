$( document ).ready(function() {
    $( ".list-link" ).click(function() {
            console.log();
        let listId= $(this).data("id");
        $( ".list-link" ).attr("href","list.php?id="+listId+"")

    });
});