@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Customers & Wallets</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Customer Name</th>
                <th>Email</th>
                <th>Wallet Balance</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->wallet->balance }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
