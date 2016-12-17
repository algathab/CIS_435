var $ = function (id){
	return document.getElementById(id);
};


var start = function() {
	
	$('random').onclick = function(){
		random();
	};
	var table = $("colorsTable");
	for (var i = 1; i < table.rows.length; i++) {
        for (var j = 0; j < table.rows[i].cells.length; j++)
			{
				table.rows[i].cells[j].onchange = function () { // set onClick listeners
				
					changeValue(this);
			};
		}
	}
};

function changeValue(slider){
	var table = $('colorsTable');
	var color, red, green, blue;
	for (var i = 1; i < table.rows.length; i++) {
        for (var j = 0; j < table.rows[i].cells.length; j++)
			{
				if(table.rows[i].cells[j] == slider){
					column = j;
					break;
				}
			};
		}
		
	slider.childNodes[3].innerHTML = slider.childNodes[1].value;
	
	if(column == 0){
		color = $('color1');
		red = $('r1').innerHTML.trim();
		green = $('g1').innerHTML.trim();
		blue = $('b1').innerHTML.trim();
	}
	else if(column ==1){
		color = $('color2');
		red = $('r2').innerHTML.trim();
		green = $('g2').innerHTML.trim();
		blue = $('b2').innerHTML.trim();
	}
	else if(column == 2)
	{
		color = $('color3');
		red = $('r3').innerHTML.trim();
		green = $('g3').innerHTML.trim();
		blue = $('b3').innerHTML.trim();
	}
	else if(column == 3)
	{
		color = $('color4');
		red = $('r4').innerHTML.trim();
		green = $('g4').innerHTML.trim();
		blue = $('b4').innerHTML.trim();
	}
	else if(column == 4)
	{
		color = $('color5');
		red = $('r5').innerHTML.trim();
		green = $('g5').innerHTML.trim();
		blue = $('b5').innerHTML.trim();
	}
	color.value = rgbToHex(red,green,blue);
};

function rgbToHex(r, g, b) {
    return "#" + ((1 << 24) + (r << 16) + (g << 8)+ +b).toString(16).slice(1);
};

function random() {
	var table = $("colorsTable");
	table.rows[1].cells[1].childNodes[1].value = 0;
	var red, green, blue, color, val, b, r, g;
	for(var i = 1; i < 6; i++)
	{
		// set the variables names
		val = "color" + i;
		b = "b" + i;
		r = "r" + i;
		g = "g" + i;
		
		//get variables
		r = $(r);
		b = $(b);
		g = $(g);
		color = $(val);
		
		//get random values
		red = getRandomValue();
		green = getRandomValue();
		blue = getRandomValue();
		
		//change elements inner html to the new values
		r.innerHTML = red;
		g.innerHTML = green;
		b.innerHTML = blue;
		
		// change the sliders values
		table.rows[1].cells[i - 1].childNodes[1].value = red;
		table.rows[2].cells[i - 1].childNodes[1].value = green;
		table.rows[3].cells[i - 1].childNodes[1].value = blue;
		
		// change the color
		color.value = rgbToHex(red,green,blue);
	}
};

function getRandomValue(){
	return Math.floor((Math.random() * 255) + 0);
};

window.addEventListener("load", start);