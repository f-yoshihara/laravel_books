@extends('layouts.app') 
@section('content')
@if (count($scraps) > 0)
<div class="panel panel-default">
       <div class="panel-heading"> 
           現在 本
       </div>
       <div class="panel-body">
       <table class="table table-striped task-table">
           <!-- テーブルヘッダ -->
           <thead>
               <th>本一覧</th>
               <th>&nbsp;</th>
           </thead>
           <!-- テーブル本体 -->
           <tbody>
                @foreach ($scraps as $scrap)
                   <tr>
                       <!-- 本タイトル -->
                       <td class="table-text">
                           <div>{{ $scrap->item_name }}</div>
                       </td>
                       
                       <!-- 本: 削除ボタン -->
                       <td>
                           <form action="{{ url('scrap/delete/'.$scrap->id) }}" method="POST">
                              {{ csrf_field() }}
                               <button type="submit" class="btn btn-danger">
                                   <i class="glyphicon glyphicon-trash"></i> 削除
                               </button>
                           </form>
                       </td>
                       
                   </tr>
                @endforeach
           </tbody>
       </table>
   </div>
</div>
@endif

@endsection