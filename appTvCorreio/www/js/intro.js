function loadApp() {
    showLoader("#intro-content");
    setTimeout(goToLogin, 16000);
}

function goToLogin() {
    hideLoader();
    app.navigate('#login');
}


