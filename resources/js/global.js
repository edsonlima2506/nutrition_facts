Noty.overrideDefaults({
    layout: 'topRight',
    theme: 'backstrap',
    timeout: 5500,
    closeWith: ['click', 'button'],
});

function notyMessageSuccess(message, title = 'Ok!') {
    return new Noty({
        type: "success",
        text: "<strong>" + title + "</strong><br>" + message + "",
    }).show();
}

function notyMessageError(message, title = 'Opss') {
    return new Noty({
        type: "error",
        text: "<strong>" + title + "</strong><br>" + message + "",
    }).show();
}

