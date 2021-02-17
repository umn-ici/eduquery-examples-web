// Per Context Scripts
// user interaction scripts for all pages in a lesson or slides in a slidescroller are written here.
// How convenient!
var PCS = (function() {
    // where we store pre script markup of slide.
	var cloneBin = "";
	
	// one index for each page/slide
	var scriptsArr = new Array(
		null, //1
		null, //2
		null, //3
		null, //4
		null, //5
		null, //6
		null, //7
		null, //8
		null, //9
		null, //10
		null, //11
		null, //12
		null, //13
		null, //14
		null, //15
		null, //16
		null, //17
		null, //18
		null, //19
		null, //20
		null, //21
		null, //22
		null, //23
		null, //24
		null, //25
		null, //26
		null, //27
		null, //28
		null, //29
		null, //30
		null, //31
		null, //32
		null, //33
		null, //34
		null, //35
		null, //36
		null, //37
		null, //38
		null, //39
		null, //40
		null, //41
		null, //42
		null, //43
		null, //44
		null, //45
		null, //46
		null, //47
		null, //48
		null, //49
		null, //50
		null, //51
		null, //52
		null, //53
		null, //54
		null, //55
		null, //56
		function($context){
			//LiftAndDrop.init($context, null);
			Matching.init($context, {'long_statements' : true});
		} //57
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
		runScriptForSlide: function(index, $panel) {
			scriptsArr[index-1]($panel);
		}
    };

})();