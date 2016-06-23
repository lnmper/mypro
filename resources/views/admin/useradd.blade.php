@extends('admin.default')
@section('info')
	@if(count($errors)>0)
		<div class="mws-form-message error">
			<ol>
		     @foreach($errors->all() as $error)
		     	<li>{{$error}}</li>     
		     @endforeach 
		 	</ol>      
		 </div>
	@elseif (session('info'))
		<div class="mws-form-message success">
			<p>添加成功</p>
		</div>
	@endif


@endsection
@section('content')
<div class="mws-panel grid_8">
          <div class="mws-panel-header">
               <span>用户添加{{old('errinfo')}}</span>
          </div>
          <div class="mws-panel-body no-padding">
               <form action="/admin/user-insert" method="post" class="mws-form">
                  
                    <div class="mws-form-inline">
                         <div class="mws-form-row">
                              <label class="mws-form-label">用户名:</label>
                              <div class="mws-form-item">
                                   <input value="{{old('username')}}" type="text" class="small" name="username">
                              </div>
                         </div>
                         <div class="mws-form-row">
                              <label class="mws-form-label">密码:</label>
                              <div class="mws-form-item">
                                   <input type="password" name="password" class="small">
                              </div>
                         </div>
                         <div class="mws-form-row">
                              <label class="mws-form-label">确认密码:</label>
                              <div class="mws-form-item">
                                   <input type="password" name="repassword" class="small">

                              </div>
                         </div>
                         <div class="mws-form-row">
                              <label class="mws-form-label">邮箱:</label>
                              <div class="mws-form-item">
                                   <input value="" type="text" name="email" class="small">
                              </div>
                         </div>
                    	<div class="mws-form-row">
                    		<label class="mws-form-label">用户级别:</label>
                    		<div class="mws-form-item">
                    			<select class="small" name="status">
                    				<option value="0">普通会员</option>
                    				<option value="1">vip</option>
                    				<option value="2">禁用会员</option>
                    				<option value="3">管理员</option>
                    			</select>
                    		</div>
                    	</div>
                    </div>
                {{csrf_field()}}
                    <div class="mws-button-row">
                         <input type="submit" class="btn btn-danger" value="添加">
                         <input type="reset" class="btn " value="重置">
                    </div>
               </form>
          </div>         
      </div>
    @endsection