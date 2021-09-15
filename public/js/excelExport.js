//Call Export excel function
function callFunction() {
    var deleteTime = 9000
    setTimeout(excelRentExport());
    setTimeout(function() { excelSalesExport() }, 1000);
    // setTimeout(function() {deleteFolder()}, 1000);
}

//Export excel data

function excelRentExport() {
    $.ajax({
        method: 'GET',
        url: rent_url,
        success: function(res) {
            var data = JSON.parse(res);
            if (data == 1) {
                var delay = 6000;
                setTimeout(function() { excelRentExport() }, delay * 50);
                startTimer();
            } else {
                alert("err excel export");
            }
        },
        err: function(err) {
            console.log(err);
        }
    });
}

function excelSalesExport() {
    $.ajax({
        method: 'GET',
        url: sales_url,
        success: function(res) {
            var data = JSON.parse(res);
            if (data == 1) {
                var delay = 6000;
                setTimeout(function() { excelSalesExport() }, delay * 50);
            } else {
                alert("err excel export");
            }
        },
        err: function(err) {
            console.log(err);
        }
    });
}

// //Pause Export excel data

function exportPause() {
    window.location.replace(replace_url);
}

// //delete folder
function deleteFolder() {
    $.ajax({
        method: 'GET',
        url: del_url,
        success: function(res) {
            console.log(res);
        },
        err: function(err) {
            console.log(err);
        }
    });
}