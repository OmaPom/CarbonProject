
$(document).ready(function(){
    // Dialog
    $('#dialog').dialog({
        autoOpen: false,
        width: 600,
        buttons: {
            "Close": function() {
                $(this).dialog("close");
            }
        }
    });
    $('#dialog_ham').dialog({
        autoOpen: false,
        width: 600,
        buttons: {
            "Close": function() {
                $(this).dialog("close");
            }
        }
    });

    // Dialog Link
    $('#dialog_link').click(function(){
        $('#dialog').dialog('open');
        return false;
    });
    // Dialog Link
    $('#dialog_link_ham').click(function(){
        $('#dialog_ham').dialog('open');
        return false;
    });
});
