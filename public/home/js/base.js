// 处理兼容问题
//

if ( navigator.userAgent.indexOf("MSIE") > 0 ) {
    if ( navigator.userAgent.indexOf("MSIE 6.0") > 0 ) {
        window.location.href = "ie.html";
    }
    if ( navigator.userAgent.indexOf("MSIE 7.0") > 0 ) {
        window.location.href = "ie.html";
    }
}

//  页面导航问题
//
window.onload = function () {
    var oSetNav = new Nav("headNav", ["Index", "Hd", "Message", "Website", "Software"]);
    oSetNav.run();
    oSetNav.setLink();
}

function Nav( id, keys ) {
    this.oNav = document.getElementById(id);
    this.aNav = this.oNav.getElementsByTagName("a");
    this.oCurrentText = null;
    this.oCurrentUrl = document.location.href;
    this.indexObj = null;
    this.array = keys;
}

Nav.prototype.run = function () {
    for ( var i = 0; i < this.array.length; i ++ ) {
        this.indexObj = this.array[i];
        if ( this.oCurrentUrl.indexOf(this.indexObj) != - 1 ) {
            this.oCurrentText = this.indexObj;
            break;
        } else {
            this.oCurrentText = "Index";
        }
    }
}

Nav.prototype.setLink = function () {
    for ( var i = 0; i < this.aNav.length; i ++ ) {
        this.aNavUrl = this.aNav[i].getAttribute("href");
        if ( this.aNavUrl.indexOf(this.oCurrentText) != - 1 ) {
            this.aNav[i].className = "current";
            break;
        }
    }
}



