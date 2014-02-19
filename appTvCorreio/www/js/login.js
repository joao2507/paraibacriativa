function onButtonLogin(){
    $("#button-login").data("kendoMobileButton").enable(false);
    showLoader('#login');
    setTimeout(goToMenu, 1600);
}

function goToMenu() {
    hideLoader();
    app.navigate('#menu');
}

function onShowLogin(){
    $("#button-login").data("kendoMobileButton").enable(true);
}