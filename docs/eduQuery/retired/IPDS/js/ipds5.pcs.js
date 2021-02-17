// Per Context Scripts
// user interaction scripts for all pages in a lesson or slides in a slidescroller are written here.
// How convenient!
var PCS = (function() {
    // where we store pre script markup of slide.
	var cloneBin = "";
	
	//remember that array indexes begin with 0
	var scriptsArr = new Array(
		null, //1
		null, //2
		null, //3
		null, //4
		null, //5
		null, //6
		null, //7
		function($context){
			MultipleChoice.init($context, {'showAll' : true});
		}, //8
		null //9
	);

    return {
        setCloneBin: function(str) {
            cloneBin = str;
        },
        getCloneBin: function() {
            return cloneBin;
        },
		isScriptAtSlide: function(index) {
            if(typeof scriptsArr[index-1] === 'function') {
				return true;
			}
			else {
				// no script for this slide, so lets clear cloneBin as we won't need it to destroy or restart.
				cloneBin = "";
				return false;
			}
        },
		runScriptForSlide: function(index, $context) {
			scriptsArr[index-1]($context);
		}
    };

})();