var PCS = (function() {
		var cloneBin = "";
		var dataStore = {};
		var scriptsArr = new Array(
			null,//1
			function($context){
                                //create object and pack it with a script for each tab that needs one via key/val pairs
                                //the KEY should be the value of the html id attrib assigned to the tab by tabbedinfo.js (tab#, where tab1 is the first 'tab' AKA div.content-group)
                                var scriptsByTabId = new Object();
                                
                                //populate with scripts for each tab.
                                //the obj key is the same as the tab id (which is set on the appropriate elements by tabbedinfo.js)
                                scriptsByTabId.tab1 = function($tab){
                                    return {
                                        init : function(){
                                            // make a clone of the tab, remove the user-activated class as it won't be the current tab when we swap our clone back into the DOM
                                            var preInitMarkup = $tab.clone().removeClass('user-activated');
                                            //store the clone (remember that this script will run in the PTS scope chain)
                                            PCS.setCloneBin(preInitMarkup);
                                            // whatever script you want to run on the tab
                                            //$tab.find('.bod p').css('color', '#ed145b');
                                        },
                                        destroy : function(){
                                            //tear it down, in this case by returning the tab to it's pre-script state.
                                            var preInitMarkup = PCS.getCloneBin();
                                            preInitMarkup.replaceAll($tab);
                                        }
                                    };
                                };
                                scriptsByTabId.tab2 = function($tab){
                                    return {
                                        init : function(){
                                            // toxic green paragraph text y'all!!!
                                            //$tab.find('.bod p').css('color', '#05d300');
                                        },
                                        destroy : function(){
                                            //tear it down
                                            //$tab.find('.bod p').css('color', '#000');
                                        }
                                    };
                                };
                                
                                // send it on over to PTS
                                PTS.addScriptObj(scriptsByTabId);
                                
                                // we're ready to run TabbedInfo
                                TabbedInfo.init($context);
                            },//2
			null,//3
			null,//4
			null,//5
			null,//6
			function($context){
                                //create object and pack it with a script for each tab that needs one via key/val pairs
                                //the KEY should be the value of the html id attrib assigned to the tab by tabbedinfo.js (tab#, where tab1 is the first 'tab' AKA div.content-group)
                                var scriptsByTabId = new Object();
                                
                                //populate with scripts for each tab.
                                //the obj key is the same as the tab id (which is set on the appropriate elements by tabbedinfo.js)
                                scriptsByTabId.tab1 = function($tab){
                                    return {
                                        init : function(){
                                            // make a clone of the tab, remove the user-activated class as it won't be the current tab when we swap our clone back into the DOM
                                            var preInitMarkup = $tab.clone().removeClass('user-activated');
                                            //store the clone (remember that this script will run in the PTS scope chain)
                                            PCS.setCloneBin(preInitMarkup);
                                            // whatever script you want to run on the tab
                                            //$tab.find('.bod p').css('color', '#ed145b');
                                        },
                                        destroy : function(){
                                            //tear it down, in this case by returning the tab to it's pre-script state.
                                            var preInitMarkup = PCS.getCloneBin();
                                            preInitMarkup.replaceAll($tab);
                                        }
                                    };
                                };
                                scriptsByTabId.tab2 = function($tab){
                                    return {
                                        init : function(){
                                            // toxic green paragraph text y'all!!!
                                            //$tab.find('.bod p').css('color', '#05d300');
                                        },
                                        destroy : function(){
                                            //tear it down
                                            //$tab.find('.bod p').css('color', '#000');
                                        }
                                    };
                                };
                                
                                // send it on over to PTS
                                PTS.addScriptObj(scriptsByTabId);
                                
                                // we're ready to run TabbedInfo
                                TabbedInfo.init($context);
                            }//7
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
		},
			saveData : function(key, val){
				dataStore[key] = val;
		},
		getData : function(key){
			return dataStore[key];
		},
		clearStore : function(){
			dataStore = {};
			}
		};

		})();