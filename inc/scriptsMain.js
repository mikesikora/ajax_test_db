//Scripts

$('input#name-grab').on('click', function(){
	var name = $('input#get-name').val();
	if ($.trim(name) != "") {
		$.post('ajax/get_bracket.php',{name: name}, function(data){		
			var obj = JSON.parse(data);
			$('div#get-name-data').text(obj.bracket_name);
		});
	};
});

$('input#name-submit').on('click', function(){
	var name = $('input#name').val();
	var r1aa = $('input#r1aa').prop('checked');
	if(r1aa===true){
		r1aa = 1;
	}else{
		r1aa = 0;
	}
	// alert(r1aa);
	// alert(name);
	if ($.trim(name) != "") {
		$.post('ajax/save_bracket.php',{name: name,r1aa: r1aa}, function(data){			
			$('div#name-data').text(data);
		});
	};
	
});