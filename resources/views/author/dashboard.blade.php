@extends('layouts.master')
@section('title')
    Welcome to the Admin Panel
@endsection()
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Administrators Data</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                            <th>Name</th>
                            <th>Country</th>
                            <th>City</th>
                            <th>Salary</th>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Duman</td>
                                <td>Qazaqstan</td>
                                <td>Kazygurt</td>
                                <td>2000$</td>
                            </tr>
                            <tr>
                                <td>Magzhan</td>
                                <td>Qazaqstan</td>
                                <td>Sozak</td>
                                <td>1900$</td>
                            </tr>
                            <tr>
                                <td>Erasyl</td>
                                <td>Qazaqstan</td>
                                <td>Saryagash</td>
                                <td>1900$</td>
                            </tr>
                            <tr>
                                <td>Adilet</td>
                                <td>Qazaqstan</td>
                                <td>Almaty</td>
                                <td>1900$</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()
@section('scripts')
@endsection()
