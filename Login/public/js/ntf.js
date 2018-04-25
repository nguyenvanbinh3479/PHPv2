


type = ['', 'danger', 'info', 'warning', 'success'];


ntf = {



showNotification: function(from, align) {
    color = Math.floor((Math.random() * 1) + 1);
    $.notify({
        icon: "notifications",
        message: "Please Enter <b>Valid</b> or your valid <b>Wrong</b>"

    }, {
        type: type[color],
        time: 1000000,
        placement: {
            from: from,
            align: align
        }
    });
    }
}