@extends('admin.default')
 @section('content')
    <div class="mws-panel grid_8">
        <div class="mws-panel-header">
            <span><i class="icon-table"></i>后台首页</span>
        </div>
        <div class="mws-panel-body no-padding">
        <h3 class="text-success">欢迎<b>小白</b>登陆使用DJ后台</h3>
         <p>登录次数：18 </p>
        <p>上次登录IP：222.35.131.79.1  上次登录时间：2014-6-14 11:19:55</p>
            <table class="mws-datatable-fn mws-table">
            <caption><h4 class="text-default">服务器相关信息</h4></caption>
                  <thead>         
                    <tr>
                        <th>类型</th>
                        <th>信息</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                      <td>服务器IP地址</td>
                      <td>{{$_SERVER['SERVER_ADDR']}}</td>
                    </tr>
                    <tr>
                      <td>服务器域名</td>
                      <td>{{$_SERVER['SERVER_NAME']}}</td>
                    </tr>
                    <tr>
                      <td>服务器端口 </td>
                      <td>{{$_SERVER['SERVER_PORT']}}</td>
                    </tr>
                    <tr>
                      <td>服务器版本 </td>
                      <td>{{$_SERVER['SERVER_SOFTWARE']}}</td>
                    </tr>
                    <tr>
                      <td>根目录</td>
                      <td>{{$_SERVER['CONTEXT_DOCUMENT_ROOT']}}</td>
                    </tr>
                    <tr>
                      <td>系统所在文件夹 </td>
                      <td>C:\WINDOWS\system32</td>
                    </tr>
                    <tr>
                      <td>服务器时间 </td>
                      <td>{{date('m/d/Y H:i:s',$_SERVER['REQUEST_TIME'])}}</td>
                    </tr>
                    <tr>
                      <td>服务器的语言种类 </td>
                      <td>{{$_SERVER['HTTP_ACCEPT_LANGUAGE']}}</td>
                    </tr>
                    <tr>
                      <td>当前所使用的数据库为 </td>
                     <td>{{$_SERVER['DB_CONNECTION']}}</td>
                    </tr>
                  </tbody>
            </table>
        </div>
    </div>
    
    <!-- Panels End -->
</div>
<!-- Inner Container End -->
           
<!-- Footer -->
<div id="mws-footer">
    Copyright Your Website 2012. All Rights Reserved.
</div>
@endsection