@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">

        <div class="col-8">
            <form action="/post/store" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label >Example textarea</label>
                    <textarea class="form-control" rows="5" name="body"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </div>

</div>
@endsection
