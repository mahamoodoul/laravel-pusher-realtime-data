@extends('app')

@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-4 p-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h2 id="score">....</h2>
                        <h5>Live Score</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

    <script type="text/javascript">
        var pusher = new Pusher('b80b6cb38a620ade2ea0', {
            cluster: 'ap2'
        })
        var channel = pusher.subscribe('my-chanel');
        channel.bind('my-event', function(data) {
            console.log(data);
            $('#score').html('');
            // $('#score').html(JSON.stringify(data));
            $('#score').html(data['scoreValue']);
        })

    </script>
@endsection
