

function setTextEditor(){
	var editor = new MediumEditor('.answer_text ',{
		toolbar:{
			buttons: [
				'bold', 
				'italic', 
				'underline', 
				'strikethrough',
				'anchor',
				// 'pre',
				{
					name: 'pre',
					action: 'append-pre',
					contentDefault: '<pre>pre</pre>',
				},
				'removeFormat' 
				],
		},
		placeholder: {
			text: 'Введите ответ на команду',
			hideOnClick: true
		},
		// disableDoubleReturn: true,
		// disableExtraSpaces: true,
		imageDragging: false,
		extensions: {
			'imageDragging': {}
		}
	});

	// $(document).keydown(function(e) {
	// 	console.dir("Down key = "+ e.keyCode);
	// 	let isActive = true;
	// 	if(e.keyCode == "13"){
	// 		$(document).find("div.answer_text").each(function(){
	// 			if($(this).attr("data-medium-focused") == "true"){
	// 				isActive = false;
	// 				return;
	// 			}
	// 		})
	// 	}
	// 	return isActive;
	// });
}