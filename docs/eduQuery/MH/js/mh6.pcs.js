// Per Context Scripts
// user interaction scripts for all pages in a lesson or slides in a slidescroller are written here.
// How convenient!
var PCS = (function() {
    // where we store pre script markup of slide.
	var cloneBin = "";
	
	// place to store information between slides
	var dataStore = {};
	
	//remember that array indexes begin with 0
	var scriptsArr = new Array(
		null,//1
		null,//2
		null,//3
		null,//4
		null,//5
		null,//6
		null,//7
		function($context){
				TabbedInfo.init($context)
			},//8
		null,//9
		null,//10
		null,//11
		null,//12
		function($context){
				TabbedInfo.init($context)
			},//13
		null,//14
		function($context){
			//instatiating key/val pairs in our dataStore obj
			dataStore.initials = '';
			dataStore.dataArray = [0,0,0,0,0,0];
			dataStore.correctArray = ["yes","yes","yes","yes","no","no"];
			dataStore.compareArray = [0,0,0,0,0,0];
			PSS.addScript([
				function(){
					//resetting dataArray and compareArray
					PCS.saveData('dataArray', [0,0,0,0,0,0]);
					PCS.saveData('compareArray', [0,0,0,0,0,0]);
					
					$('li').find('input[type="radio"]').each(function(){
						if($(this).is(':checked')){
							$('input[type="radio"]').prop('checked', false);
						}
					});
					$('input[type="text"]').val('');
					
					$('input[type="radio"]').on('click', function(){
						var dataArr = PCS.getData('dataArray');
						dataArr[$(this).attr("name")] = $(this).val();
						PCS.saveData('dataArray', dataArr);
					});
				}, //1
				function(){
					var dataArr = PCS.getData('dataArray');
					var correctArr = PCS.getData('correctArray');
					var compareArr = PCS.getData('compareArray');
					var itemCount = 0;
					var compFlag = 0;
					for (i=0;i<dataArr.length;i++){
						if(dataArr[i]===correctArr[i]){
							compareArr[i]=1;
						}
						if(dataArr[i]===0){
							compFlag++;
						}
					}
					
					
					for (i=0;i<compareArr.length;i++){
						if (compareArr[i] == 0){
							itemCount++;
						}
					}
					//console.log(compFlag, (dataArr.length))
					if (compFlag===(dataArr.length)){
						$('#warning').show();
					}
					if (compFlag>0 && compFlag<=(dataArr.length-1)){
						$('#warning2').show();
					}
					if (itemCount===0){
						$('#same').show();
					}
					
					if (itemCount> 0 && itemCount<=3){
						$('#level1').show();
					}
					if (itemCount>3 && itemCount<(dataArr.length-1)){
						$('#level2').show();
					}
					//$('#p2 .OneColumn').show();
				}
				]);
			
			// PSS has our array of scripts, slideScroller is ready to be called.
			$context.slideScroller();
		},//15
		null,//16
		null,//17
		null,//18
		null,//19
		null,//20
		null,//21
		null,//22
		null,//23
		null,//24
		null,//25
		null,//26
		null,//27
		null,//28
		null,//29
		null,//30
		function($context){
			PSS.addScript([
				function(){
						var mc1 = new MultipleChoice();
						mc1.init($('#multiplechoice1'), null);
						mc1.setMessage('win', 'Good Job! Go on the next question.');
					}, //2
				function(){
						var mc2 = new MultipleChoice();
						mc2.init($('#multiplechoice2'), null);
						mc2.setMessage('win', 'Good Job! Go on the next question.');
					}, //3
				function(){
						var mc3 = new MultipleChoice();
						mc3.init($('#multiplechoice3'), null);
						mc3.setMessage('win', 'Good Job!');
					} //4 
				]);
			$context.slideScroller();
		},//31
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
		function($context){
			//instatiating key/val pairs in our dataStore obj
			dataStore.initials = '';
			dataStore.dataArray = [0,0,0,0,0,0,0,0,0,0,0,0,0,0];
			dataStore.correctArray = ["no","no","no","yes","yes","yes","yes","yes","yes","yes","no","no","no","no"];
			dataStore.compareArray = [0,0,0,0,0,0,0,0,0,0,0,0,0,0];
			dataStore.statementArray = ["The benefits of staying active.","The benefits of regular rigorous exercise","The benefits of eating fresh fruits and vegetables.","The risks of too much sugar, salt, or fat in a diet.","The risks of drinking too much.","The risks of smoking.","Benefits of good medication management.","Risk of anti-psychotics and their management.","Risks of illegal drug use.","Risks of unprotected sex and benefits of good sexual health habits.","Benefits of regular medical check ups and preventative care and support to obtain them.","Benefits of regular dental check ups and preventative care and support to obtain them.","Stress management and support for developing and maintaining positive relationships and activities.","The benefits of regular sleep to overall health."];
			
			// Feed our array of scripts for the slidescroller to the PSS(Per Slide Script) object
			PSS.addScript([
				function(){
					//resetting dataArray and compareArray
					PCS.saveData('dataArray', [0,0,0,0,0,0,0,0,0,0,0,0,0,0]);
					PCS.saveData('compareArray', [0,0,0,0,0,0,0,0,0,0,0,0,0,0]);
					PCS.saveData('initials','');
					
					$('li').find('input[type="radio"]').each(function(){
						if($(this).is(':checked')){
							$('input[type="radio"]').prop('checked', false);
						}
					});
					$('input[type="text"]').val('');
					
					$('input[type="radio"]').on('click', function(){
						var dataArr = PCS.getData('dataArray');
						dataArr[$(this).attr("name")] = $(this).val();
						PCS.saveData('dataArray', dataArr);
					});
					$('input[type="text"]').on('keyup', function(){
						PCS.saveData('initials', $(this).val());
					});
				}, //1
				function(){
					var dataArr = PCS.getData('dataArray');
					var correctArr = PCS.getData('correctArray');
					var compareArr = PCS.getData('compareArray');
					var statementArr = PCS.getData('statementArray');
					var emptyItem = 0;
					var it="";
					for (i=0;i<dataArr.length;i++){
						if (dataArr[i] === 0 ){
							emptyItem++;
						}
						if(dataArr[i]===correctArr[i]){
							compareArr[i]=statementArr[i];
						}
						
					}
					
					var name = PCS.getData('initials');
					//if(name.length>0){}
					$('p').find('span.name').each(function(){
						if(name.length>0){
						$(this).append(name+' ');
						}else{
						$(this).append('your client ');
						}
					})
					if (emptyItem==dataArr.length){
					$('#p2 div.OneColumn').find('p').hide();
					it = "<h3>None of the assessment items were addressed.</h3><h4>Click on the left arrow to return to the assessment form and complete the assessment.</h3><ul>";
					}else if (emptyItem>=1&&emptyItem<(dataArr.length-1)){
						it = "<h3>Not all of the assessment items were addressed</h3><ul>";
						var itemCount = 0;
						for (i=0;i<compareArr.length;i++){
							if (compareArr[i] !== 0){
								it +="<li>"+compareArr[i]+"</li>";
								itemCount++;
							}
						}
					}else{
						it = "<ul>";
						var itemCount = 0;
						for (i=0;i<compareArr.length;i++){
							if (compareArr[i] !== 0){
								it +="<li>"+compareArr[i]+"</li>";
								itemCount++;
							}
						}
					}
					$('#results').append(it+"</ul>");
					
					if (compareArr[5] !== 0){
						$('#smoking').show();
					}
					
					if (compareArr[7] !== 0){
						$('#meds').show();
					}
					
					if (itemCount<= 3){
						$('p').find('span.ranking').append('&ldquo;low&rdquo;');
						if (itemCount === 0){
							$('p').find('span.areas').hide();
							$('#results').hide();
						}
					}
					
					if (itemCount> 3 && itemCount<=7){
						$('p').find('span.ranking').append('&ldquo;moderate&rdquo;');
					}
					if (itemCount>7){
						$('p').find('span.ranking').append('&ldquo;significant&rdquo;');
					}
					
					$('#p2 div.OneColumn').fadeIn()
				} //2
			]);
			
			// PSS has our array of scripts, slideScroller is ready to be called.
			$context.slideScroller();
		},//45
		null,//46
		null,//47
		null,//48
		null,//49
		null,//50
		null,//51
		null,//52
		null,//53
		null,//54
		null,//55
		null,//56
		null//57
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