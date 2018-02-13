$('video.meinstance').mediaelementplayer({
    // the order of controls you want on the control bar (removed 'fullscreen')
    features: ['playpause','current','progress','duration','tracks','volume'],
    //change caption language selector to a toogle if there is only one language
    toggleCaptionsButtonWhenOnlyOne : true,
    // auto-select this language (instead of starting with "None")
    startLanguage:'en'
    // enable the dropdown list of languages (requires google translation lib)
    //translationSelector: true
});