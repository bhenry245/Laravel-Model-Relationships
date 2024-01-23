<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Model Relationships</title>
</head>
<body>

    <form action="{{ url('/user-orders') }}" method="POST">
        @csrf        
        <label for="username">Username:</label>
        <input type="text" id="username" name="username">
        <button type="submit">Get Orders</button>
    </form>

    <!-- Display user name -->
    @if(session('user'))
        <h2>Orders for {{ session('user')['name'] }}</h2>
    @endif

    <!-- Display orders -->
    @if(session('orders'))      
      @foreach(session('orders') as $order)
            <div>
                <p><b>Order ID:</b> {{ $order['id'] }}</p> 
                <p>Order Name: {{ $order['Name'] }}</p> 

            </div>
        @endforeach
    @endif

</body>
</html>
