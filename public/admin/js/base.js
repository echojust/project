window.onload = function () {
    var oSetHeight = new Height('left_wrapper');
    oSetHeight.setHeight();

    var oSetNav = new Nav("left_nav" , ["Index" , "Blog" , "Category" , "System"]);
    oSetNav.init();
    oSetNav.setLink();
}

function Height( id ) {
    this.left_wrapper = document.getElementById(id);
    this.body_height = document.documentElement.scrollHeight;
}

Height.prototype.setHeight = function () {
    this.left_wrapper.style.height = this.body_height + 'px';
}

function Nav( id , keys ) {
    this.oNav = document.getElementById(id);
    this.aNav = this.oNav.getElementsByTagName("a");
    this.oCurrentText = null;
    this.oCurrentUrl = document.location.href;
    this.indexObj = null;
    this.array = keys;
}

Nav.prototype.init = function () {
    for ( var i = 0; i < this.array.length; i ++ ) {
        this.indexObj = this.array[i];
        if ( this.oCurrentUrl.indexOf(this.indexObj) != - 1 ) {
            this.oCurrentText = this.indexObj;
            break;
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



