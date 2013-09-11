function DeobfuscateLink(key, event) {
    $(event.currentTarget).attr("href", $(event.currentTarget).attr("href").split('').map(function (val) {
        return String.fromCharCode(val.charCodeAt(0) ^ key);
    }).join(''));
}

function DeobfuscateText(text, key) {
    document.write(text.split('').map(function (val) {
        return String.fromCharCode(val.charCodeAt(0) ^ key);
    }).join(''));
}

$(document).ready(function () {
    $('#CS5-HeaderButton').click(function () {
        $('#CS5-NavBarBar').slideToggle();
        $('#CS5-NavBarSecondaryBar').slideToggle();
    });

    $('a').each(function () {
        var href = jQuery(this).attr('href');
        if (typeof href != 'undefined' && href != "" &&
                (href.indexOf('http://') != -1 || href.indexOf('https://') != -1) &&
                href.indexOf(window.location.hostname) == -1) {
            $(this).attr("target", "_blank");
        }
    });
});