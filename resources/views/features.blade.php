@extends('layouts.home')

@section('content')
<script type="text/javascript">

</script>
<div class="col-lg-2 col-lg-offset-9 text-right slf_topac">
	<a href="{{url('/features/features_new')}}">
	    <button type="button" class="btn btn-success glyphicon-plus">新增功能</button>
	</a>
</div>
<div class="col-lg-10 col-lg-offset-1">
    <div class="panel panel-default">
        <div class="panel-heading">
            功能列表
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>id編號</th>
                            <th>對應控制器</th>
                            <th>功能名稱</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- 列表內容 -->
                        @foreach ($data as $account)
                        <tr>
                            <td>{{ $account -> id }}</td>
                            <td>{{ $account -> features }}</td>
                            <td>{{ $account -> name }}</td>
                            <td>
                                <a href="{{url('/features/features_edit/'.$account -> id)}}">
	                            <button type="button" class="btn btn-primary fa fa-edit"></button>
	                            </a>
	                            <a href="{{url('/features/features_del/'.$account -> id)}}" 
                                onclick="return confirm('確定刪除該功能?')"
	                            >
	                            <button type="button" class="btn btn-danger fa fa-times"></button>
	                            </a>
	                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
</div>    


@endsection
