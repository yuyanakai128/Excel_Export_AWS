<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DB上のデータをCSV形式で出力</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/timer.css')}}">
</head>

<body>
    <div class="col-5 container mt-5 text-center">
        <h2 class="mb-4">
            DB上のデータをCSV形式で出力
        </h2>

        <form action="" method="GET" >
            @csrf
            <div id="timer"></div>
            <select class="col-4 form-control csv-type" id="csv-type">
                <option value=""></option>
                <option value="sales">売買CSVデータ出力</option>
                <option value="rent">賃貸CSVデータ出力</option>
            </select>

            <a class="btn btn-success" id="btn-interval">Excel出力</a>
            <button class="btn btn-primary" onclick="exportPause()" id="btn-pause">出力停止</button>
        </form>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
<!-- <script src="{{asset('js/excelExport.js')}}"></script> -->
<script src="{{asset('js/timer.js')}}"></script>
<script>
    var rent_url = " {{route('rent-file-export')}} ";
    var sales_url = " {{route('sales-file-export')}} ";
    var del_url = " {{route('deleteFolder')}} ";
</script>

</html>