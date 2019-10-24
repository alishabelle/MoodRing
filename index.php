
//getting data from phpMyAdmin

<script>
	//call ajax
	var ajax = new XMLHttpRequest();	
	var method = "GET";
	var url = "data.php"
	var asynchronus = true;

	ajax.open(method, url, asynchronus);

	//sending ajax
	ajax.send();

	//receiving response from data.php
	ajax.onreadystatechange = function() {
    if (this.readyState = 4 && this.status 200) {
				//converting JSON back to array
				var data = JSON.parse(this.responseText);
				console.log(data); // for debugging

				//html value for <tbody>
				var html = "";

				//looping through the data
				for (var m = 0; m < data.length; m++)
				{
					var colorMood = data[m].color_mood;
				
					// append at html
					html += "<tr>";
						html +="<td>" + colorMood + "</td>";
					html += "</tr>";
				}

				// replaceing the <tbody> of <tabke>
				document.getElementById("data").innerHTML = html;
		
};
</script>