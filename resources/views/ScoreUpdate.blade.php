@extends('app')

@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-4 p-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5>Update Score</h5>
                        <hr>
                        <input class="form-control ScoreValue" type="text"><br>
                        <button class="btn updateBtn btn-block btn-success ">Update</button>
                        <h4 class="lastScore"></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

    <script type="text/javascript">
        $('.updateBtn').click(function() {
            var score = $('.ScoreValue').val();


            axios.post('/PushScoreValue', {
                    score: score

                })
                .then(function(response)  {
                    $('.lastScore').html(response.data);
                    console.log(response);
                })
                .catch(function(error) {
                    console.log(error);
                });
        });

    </script>



@endsection
