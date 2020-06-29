function sendData() {

    var user = $('#user-select').val();
    var dat = $('#date-input').val();
    var time_of_day = $('#tod-select').val();
    var price = $('#price-input').val();

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
            var res = this.responseText;
            if(res === 'success'){
                $('#post-success').css('display', 'block');
                setTimeout(function(){$('#post-success').css('display', 'none');}, 5000);
            } else {
                $('#post-error').css('display', 'block');
                setTimeout(function(){$('#post-error').css('display', 'none');}, 5000);
            }
                  
        }
    };

    xmlhttp.open("GET",`../ajax/php_requests/new_price.php?user=${user}&dat=${dat}&time_of_day=${time_of_day}&price=${price}`,true);
    xmlhttp.send();
    
}


function sendPurchaseData() {

    var user = $('#purchase-user-select').val();
    var week_id = $('#purchase-date-input').val();
    var price = $('#purchase-price-input').val();

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
            var res = this.responseText;
            if(res === 'success'){
                $('#post-success').css('display', 'block');
                setTimeout(function(){$('#post-success').css('display', 'none');}, 5000);
            } else {
                $('#post-error').css('display', 'block');
                setTimeout(function(){$('#post-error').css('display', 'none');}, 5000);
            }
                  
        }
    };

    xmlhttp.open("GET",`../ajax/php_requests/new_purchase_price.php?user=${user}&week_id=${week_id}&price=${price}`,true);
    xmlhttp.send();
    
}


function createUser() {

    var username = $('#username').val();
    var password = $('#password').val();

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
            var res = this.responseText;
            if(res === 'success'){
                console.log('got it');
            } else if(res === 'user_exists') {
                window.location.href = '../php/new_user.php?userexists=true';
            } else {
                console.log('no bueno');
            }
                  
        }
    };

    xmlhttp.open("GET",`../ajax/php_requests/create_user.php?username=${username}&pwd=${password}`,true);
    xmlhttp.send();
    

}


