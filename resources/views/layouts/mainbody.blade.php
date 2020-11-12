<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>

<style>

.left-side-bar{ background-color:#2F353A;}
.left-side-bar ul{ }
.left-side-bar ul li {list-style:none; }
.left-side-bar ul li a{
    display: block;
    padding: .75rem 0rem;
    color: #fff;
    text-decoration: none;
    background: 0 0;
    }

    .insert-info a{
        background-color: green;
    color: white;
    height: 40px;
    display: block;
    width: 300px;
    line-height: 40px;
    margin-bottom: 5px;
    text-align: center;
    font-weight: 700;
    };
.halcyon-title-area h3{
    text-align:center;
    padding: 20px 5px;
}
</style>

<div class="container-fluid halcyon-title-area">
<h3 style="text-align: center">Client service level agreement</h3>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
        <div class="left-side-bar">
        <ul>
        <li><a href="http://127.0.0.1:8000/admin"> Dashboard </a></li>
        <li><a href=""> User Management </a></li>
        <li><a href="">Time Entries </a></li>
        <li><a href="">Reports </a></li>
        <li><a href="{{ route("customer.index") }}"> Customer </a></li>
        <li><a href="{{ route("salary.index") }}"> Salary </a></li>
        <li><a href="{{ route("project.index") }}"> Project </a></li>
        <li><a href="{{ route("agrement.index") }}"> Agrement Generator </a></li>
        </ul>
        </div>
        </div>
        <div class="col-md-9">
        @yield('DashboardContent')
        </div>
    </div>
</div>
</body>
</html>
