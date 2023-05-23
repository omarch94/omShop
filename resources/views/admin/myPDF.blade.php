<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h1>{{ $title }}</h1>
    <p>{{ $date }}</p>
    <p>The order's pdf of the day</p>
  
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Total price</th>
        </tr>
        @foreach($orders as $order)
        <tr>
            <td>{{ $order->tracking_no }}</td>
            <td>{{ $order->fname }}</td>
            <td>{{ $order->total_price }}</td>
        </tr>
        @endforeach
    </table>
  
</body>
</html>