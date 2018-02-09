// Per Context Scripts
// user interaction scripts for all pages in a lesson or slides in a slidescroller are written here.
// How convenient!
var PCS = (function() {
    // where we store pre script markup of slide.
	var cloneBin = "";
	
	var dataStore = {};
	
	//remember that array indexes begin with 0
	var scriptsArr = new Array(
		null, //1
		null, //2
		null, //3
		null, //4
		null, //5
		function($context){
			PSS.addScript([
				null, //1
				null//2
				]);
			$context.slideScroller();
		}, //6
		null, //7
		null,//8
		null,//9
		null,//10
		function($context){
			var mc1 = new MultipleChoice();
			mc1.init($context, null);
			var $message = "<p>All of these statements are MYTHS!</p><p> There are many myths about mental illness that people accept as truth. You will learn about more of them in this lesson and course. Many of the myths are worse than the illnesses. They keep people from being included in communities. They discourage people of all ages from getting help.</p><p> High in the list of myths are that people living with mental illnesses are violent and that they cannot recover or return to activities such as work. None of this is true. Some people living with mental illness are violent. Most are not. People with mental illness are actually at higher risk for being victims of violent crimes than people without these disorders. The majority of people living with mental illness do improve. This is more likely if a person engages in treatment of some sort. Many are productive and appreciated employees. The key to success is to have a good match between an employee&rsquo;s strengths and needs and the work conditions. Having a job is often critical to recovery and many people want to work.</p><p> Children living with mental health disorders usually have serious challenging behaviors. Pervasive behavior problems in children are rarely caused by only a lack of parental guidance. Five to nine percent of children have clinically diagnosed heath conditions in a given year. Other conditions may also affect a child&rsquo;s behavior. Mental health conditions are influenced by a combination of biological, psychological, and social factors. Like adults, a child can improve with the right support, services, and treatment.</p>";
			mc1.setMessage('win', $message);
		},//11
		null,//12
		null,//13
		null,//14
		null,//15
		function($context){
			var mc1 = new MultipleChoice();
			mc1.init($context, null);
			var $message = "How did you do? Think about any misconceptions you may have about mental illness. Move forward in the lesson to learn more about why these items are true or false.";
			mc1.setMessage('win', $message);
		},//16
		function($context){
				$('dd', $context).hide();
				$('dt', $context).each(function (){ $(this).wrapInner('<a href="#"></a>')});
				$('dl', $context).on('click.RevealInfo', 'a', function(evt){
					evt.preventDefault();
					var $this = $(this);
					var $parent = $this.closest('dt');
					var parent = $parent.get(0);
					$('dt', $context).each(function (){
						if(parent != this){
							$(this).next('dd').slideUp(400);
						}
					});
					$parent.next('dd').delay(500).show(400);
				});
			},//17
		null,//18
		null,//19
		null,//20
		null,//21
		null,//22
		function($context){
				TabbedInfo.init($context)
			},//23
		null,//24
		null,//25
		null,//26
		null,//27
		null,//28
		function($context){
				TabbedInfo.init($context)
			},//29
		null,//30
		null,//31
		null,//32
		null,//33
		null,//34
		null,//35
		null,//36
		null,//37
		null,//38
		null,//39
		null,//40
		null,//41
		null,//42
		null,//43
		null,//44
		null,//45
		null//46
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