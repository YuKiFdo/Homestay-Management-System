let messageCounts = 0;

function createmsg(text, type, icon) {
    let t = "";
    const o = $(".message-wrapper");
    t = `\n        <div class="dm-pop-message message-${type} message-${messageCounts}">
    <span class="dm-pop-message__icon">
        <i class="la la-${icon}"></i>
    </span>
    <span class="dm-pop-message__text">
        <p>${text}</p>
    </span>
    </div>\n`
    o.append(t),
    messageCounts++
}

function showMsg(messageData) {
    let message = messageData.text;
    let type = messageData.type;
    let icon = messageData.icon;
    let duration = 3400;
    createmsg(message, type, icon)
    let e = messageCounts - 1;
    var a, n;
    setTimeout((function() {
        $(document).find(".message-" + e).remove()
    }), (a = duration, n = 3e3, void 0 === a ? n : a))
}
