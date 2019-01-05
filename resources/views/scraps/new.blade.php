@extends('layouts.app')
@section('content')

    <div class="panel-body">
        {{-- @include('common.errors') --}}
        <form action="{{ url('scraps') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="scrap" class="col-sm-3 control-label">content</label>
                <div class="col-sm-6">
                    <input type="text" name="content" id="content" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="scrap" class="col-sm-3 control-label">status</label>
                <div class="col-sm-6">
                    <input type="radio" name="status" value='backlog' class="form-control">
                    <input type="radio" name="status" value='progress' class="form-control">
                    <input type="radio" name="status" value='done' class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="glyphicon glyphicon-plus"></i> Save
                    </button>
                </div>
            </div>
        </form>
     </div>
@endsection