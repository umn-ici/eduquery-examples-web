var PCS = (function() {
    var cloneBin = "";
    var dataStore = {};

    var scriptsArr = new Array(
        null, //1
        null, //2
        null, //3
        function($context) {
            // TabbedInfo
            TabbedInfo.init($context);
        }, //4
		function($context){
			var mc1 = new MultipleChoice();
			mc1.init($context, {'showAll' : true});
			$context.find('.feedback_control a').on('click.FEEDBACK', function(e){
				e.preventDefault();
				$context.find('.msg_win').hide();
			});
		},//5
        null, //6
        null, //7
        null, //8
        null, //9
        null //10
    );
    return {
        setCloneBin: function(str) {
            cloneBin = str;
        },
        getCloneBin: function() {
            return cloneBin;
        },
        isScriptAtSlide: function(index) {
            if (typeof scriptsArr[index - 1] === 'function') {
                return true;
            } else {
                // no script for this slide, so lets clear cloneBin as we won't need it to destroy or restart.
                cloneBin = "";
                return false;
            }
        },
        runScriptForSlide: function(index, $context) {
            scriptsArr[index - 1]($context);
        },
        saveData: function(key, val) {
            dataStore[key] = val;
        },
        getData: function(key) {
            return dataStore[key];
        },
        clearStore: function() {
            dataStore = {};
        }
    };

})();
