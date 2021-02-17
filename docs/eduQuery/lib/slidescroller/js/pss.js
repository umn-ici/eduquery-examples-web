// Per Slide Scripts
// user interaction scripts for all slides in a slidescroller are written here.
// How convenient!
var PSS = (function() {
    // where we store pre script markup of slide.
	var cloneBin = "";
	
	// one index for each page/slide
	var scriptsArr = [];

    return {
		addScript : function(arr){
			scriptsArr = arr;
		},
        setCloneBin: function(str) {
            cloneBin = str;
        },
        getCloneBin: function() {
            return cloneBin;
        },
		isScriptAtSlide: function(index) {
            if(typeof scriptsArr[index] === 'function') {
				return true;
			}
			else {
				// no script for this slide, so lets clear cloneBin as we won't need it to destroy or restart.
				cloneBin = "";
				return false;
			}
        },
		runScriptForSlide: function(index, $panel) {
			scriptsArr[index]($panel);
		}
    };
})();