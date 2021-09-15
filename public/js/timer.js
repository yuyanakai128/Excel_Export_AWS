$(document).ready(function() {
    $("#btn-interval").click(function() {
        var csv_type = $('#csv-type').val();
        switch (csv_type) {
            case 'sales':
                startTimer();
                timer_flag = true;
                excelSalesExport();
                $('#btn-interval').addClass('disabled');
                $('#csv-type').addClass('disabled');
                break;
            case 'rent':
                startTimer();
                timer_flag = true;
                excelRentExport();
                $('#btn-interval').addClass('disabled');
                $('#csv-type').addClass('disabled');
                break;
            case '':
                alert("出力形式を選択してください。");
                break;
        }

    });
});

const exportTypeChange = document.getElementById('btn-pause');
exportTypeChange.addEventListener('click', (event) => {
    $('#btn-interval').removeClass('disabled');
    $('#csv-type').removeClass('disabled');
    
});

// Credit: Mateusz Rybczonec

var FULL_DASH_ARRAY = 283;
var WARNING_THRESHOLD = 60;
var ALERT_THRESHOLD = 10;

var timer_flag = false;

var COLOR_CODES = {
    info: {
        color: "green"
    },
    warning: {
        color: "orange",
        threshold: WARNING_THRESHOLD
    },
    alert: {
        color: "red",
        threshold: ALERT_THRESHOLD
    }
};

var TIME_LIMIT = 300;
var timeLeft = TIME_LIMIT;
var timerInterval = null;
var remainingPathColor = COLOR_CODES.info.color;

function hasClass(el, className) {
    if (el.classList)
        return el.classList.contains(className);
    return !!el.className.match(new RegExp('(\\s|^)' + className + '(\\s|$)'));
}

function addClass(el, className) {
    if (el.classList)
        el.classList.add(className)
    else if (!hasClass(el, className))
        el.className += " " + className;
}

function removeClass(el, className) {
    if (el.classList)
        el.classList.remove(className)
    else if (hasClass(el, className)) {
        var reg = new RegExp('(\\s|^)' + className + '(\\s|$)');
        el.className = el.className.replace(reg, ' ');
    }
}

document.getElementById("timer").innerHTML = `
  <div class="base-timer">
    <svg class="base-timer__svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
      <g class="base-timer__circle">
        <circle class="base-timer__path-elapsed" cx="50" cy="50" r="45"></circle>
        <path
          id="base-timer-path-remaining"
          stroke-dasharray="283"
          class="base-timer__path-remaining ${remainingPathColor}"
          d="
            M 50, 50
            m -45, 0
            a 45,45 0 1,0 90,0
            a 45,45 0 1,0 -90,0
          "
        ></path>
      </g>
    </svg>
    <span id="base-timer-label" class="base-timer__label">${formatTime(
      timeLeft
    )}</span>
  </div>
`;

function onTimesUp() {

    clearInterval(timerInterval);
    startTimer();
}

function startTimer() {
    if (!timer_flag) {
        timerInterval = setInterval(() => {
            timeLeft--;
            if (timeLeft === -1) {
                //   onTimesUp();
                timeLeft = TIME_LIMIT;
                document
                    .getElementById("base-timer-path-remaining")
                    .classList.remove(COLOR_CODES.alert.color);
                document
                    .getElementById("base-timer-path-remaining")
                    .classList.add(COLOR_CODES.info.color);
            }

            document.getElementById("base-timer-label").innerHTML = formatTime(
                timeLeft
            );
            setCircleDasharray();
            setRemainingPathColor(timeLeft);
        }, 1000);
    }

}

function formatTime(time) {
    const minutes = Math.floor(time / 60);
    let seconds = time % 60;

    if (seconds < 10) {
        seconds = `0${seconds}`;
    }

    return `${minutes}:${seconds}`;
}

function setRemainingPathColor(timeLeft) {
    const { alert, warning, info } = COLOR_CODES;

    if (timeLeft == 5) {
        document
            .getElementById("base-timer-path-remaining")
            .classList.remove(alert.color);
        document
            .getElementById("base-timer-path-remaining")
            .classList.add(info.color);
    } else if (timeLeft < 60) {
        document
            .getElementById("base-timer-path-remaining")
            .classList.remove(info.color);
        document
            .getElementById("base-timer-path-remaining")
            .classList.add(alert.color);
    }
}

function calculateTimeFraction() {
    const rawTimeFraction = timeLeft / TIME_LIMIT;
    return rawTimeFraction - (1 / TIME_LIMIT) * (1 - rawTimeFraction);
}

function setCircleDasharray() {
    const circleDasharray = `${(
    calculateTimeFraction() * FULL_DASH_ARRAY
  ).toFixed(0)} 283`;
    document
        .getElementById("base-timer-path-remaining")
        .setAttribute("stroke-dasharray", circleDasharray);
}

//Call Export excel function
// function callFunction() {
//     var deleteTime = 8634;
//     setTimeout(function() { deleteFolder() }, (deleteTime * 10000));
// }

//Export excel data

function excelRentExport() {
    var rent_time = 6000;
    $.ajax({
        method: 'GET',
        url: rent_url,
        success: function(res) {
            var data = JSON.parse(res);
            if (data == 1) {
                setTimeout(function() { excelRentExport() }, rent_time * 50);
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
    var sales_time = 6000;
    $.ajax({
        method: 'GET',
        url: sales_url,
        success: function(res) {
            var data = JSON.parse(res);
            if (data == 1) {
                setTimeout(function() { excelRentExport() }, sales_time * 50);
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
    window.location.href="";
}

// // //delete folder
// function deleteFolder() {
//     var deleteTime = 8634;
//     $.ajax({
//         method: 'GET',
//         url: del_url,
//         success: function(res) {
//             var data = JSON.parse(res)
//             if (data == 1) {
//                 setTimeout(function() { deleteFolder() }, (deleteTime * 10000));
//             } else {
//                 console.log(res);
//             }
//         },
//         err: function(err) {
//             console.log(err);
//         }
//     });
// }