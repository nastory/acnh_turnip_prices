function getData() {

    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // handle the response data
            var data = this.responseText;
            data = JSON.parse(data);

            tsPlot(data['thisWeekTs'], 'ts-this-week-plot');
            tsPlot(data['lastWeekTs'], 'ts-last-week-plot');
            histoPrice(data['histoPrice']);
                  
        }
    };

    xmlhttp.open("GET",`../ajax/php_requests/get_request.php`,true);
    xmlhttp.send();
    
}