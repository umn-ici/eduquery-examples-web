// Per Tab Scripts
// user interaction scripts for tabs - updated from the PCS idea created for slideScroller.
// primary mods from slideScroller PCS include:
// 1. scriptsArr array becomes scriptsByTabId object
// 2. script nuggets populating the scriptsArr object will now include 'methods' to init (similar to slideScroller PCS) and destroy (new).
// Notes:
//  - the interactive material being called on tabs will be much more limited than that being called to slides in slideScroller.

var PTS = (function() {
    // a place to store pre script markup.
	var cloneBin = "";
        
    //each tab stored here will be cleaned before the next tab runs    
    var $lastTab = "";
	
	//create object to store script nuggets
	var scriptsByTabId;

    return {
        addScriptObj : function(obj){
            scriptsByTabId = obj;
        },
        setLastTab : function($wrappedSet){
            $lastTab = $wrappedSet;
        },
        getLastTab : function(){
            return $lastTab;
        },
		scriptExists: function(key) {
            if(scriptsByTabId.hasOwnProperty(key)) {
				return true;
			}
			else {
				$lastTab = "";
				return false;
			}
        },
		runScriptOnContext: function($context, method) {
			scriptsByTabId[$context.attr('id')]($context)[method]();
		}
    };

})();