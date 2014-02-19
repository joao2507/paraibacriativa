function onTextButtonClick(e) {
    var _button = $(e.button);
    var _parent = _button.parent();
    var _otherButton = _parent.find('.video');
    
    if (_button.data('exibindo')) {
        _button.data('exibindo', false);
        _parent.find('.video-content').hide();
        _parent.find('.texto-content').slideUp();
        _button.removeClass('toogle');
    }else{
        _button.data('exibindo', true);
        _parent.find('.video-content').hide();
        _parent.find('.texto-content').slideDown();
        _button.addClass('toogle');
        _otherButton.removeClass('toogle').data('exibindo', false);
    }
}

function onVideoButtonClick(e) {
    var _button = $(e.button);
    var _parent = _button.parent();
    var _otherButton = _parent.find('.texto');

    if (_button.data('exibindo')) {
        _button.data('exibindo', false);
        _parent.find('.video-content').slideUp();
        _parent.find('.texto-content').hide();
        _button.removeClass('toogle');
    }else{
        _button.data('exibindo', true);
        _parent.find('.video-content').slideDown();
        _parent.find('.texto-content').hide();
        _button.addClass('toogle');
        _otherButton.removeClass('toogle').data('exibindo', false);
    }
}