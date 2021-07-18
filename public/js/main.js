(function($) {

	"use strict";

	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();

	$('#sidebarCollapse').on('click', function () {
      $('#sidebar').toggleClass('active');
  });

})(jQuery); 


function exportTableToExcel(tableId, filename) {
		let dataType = 'application/vnd.ms-excel';
		let extension = '.xls';

		let base64 = function(s) {
			return window.btoa(unescape(encodeURIComponent(s)))
		};

		let template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>';
		let render = function(template, content) {
			return template.replace(/{(\w+)}/g, function(m, p) { return content[p]; });
		};

		let tableElement = document.getElementById(tableId);

		let tableExcel = render(template, {
			worksheet: filename,
			table: tableElement.innerHTML
		});

		filename = filename + extension;

		if (navigator.msSaveOrOpenBlob)
		{
			let blob = new Blob(
				[ '\ufeff', tableExcel ],
				{ type: dataType }
				);

			navigator.msSaveOrOpenBlob(blob, filename);
		} else {
			let downloadLink = document.createElement("a");

			document.body.appendChild(downloadLink);

			downloadLink.href = 'data:' + dataType + ';base64,' + base64(tableExcel);

			downloadLink.download = filename;

			downloadLink.click();
		}
	}

 //var csv is the CSV file with headers
 function csvJSON(csv) {
                var lines = csv.split("\n");
                var result = [];
                // NOTE: If your columns contain commas in their values, you'll need
                // to deal with those before doing the next step 
                // (you might convert them to &&& or something, then covert them back later)
                // jsfiddle showing the issue https://jsfiddle.net/
                var headers = lines[0].split(",");
                let word= "";
                for (var i = 1; i < lines.length; i++) {
                    var obj = {};
                    var currentline = lines[i].split(",");
                    for (var j = 0; j < headers.length; j++) {
                    	word= ""
                    	if(currentline[j]){
                    		word = currentline[j].toString().trim();
                    	}
                        obj[headers[j]] = word;
                    }

                    result.push(obj);

                }

              //  return result; //JavaScript object
                return JSON.stringify(result); //JSON
 }