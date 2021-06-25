@extends('layout.master')

@section('title', $meta['title']);

@section('main')
    <div class="container">
        <h3 class="text-center mt-5 fw-bold">Party</h3>
        <a class="btn btn-primary fw-bolder mb-2" href="{{ route('party.create') }}">Add New Party</a>

        <table class="table  table-striped">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Phone Num</th>
                    <th>Type</th>
                    <th class="text-end">Amount (BDT)</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>01</td>
                    <td>Md. Ananda</td>
                    <td>01971072007</td>
                    <td>Customer</td>
                    <td class="text-end text-danger">-15,00,000.00</td>
                    <td class="text-end">
                        <a class="btn btn-info btn-sm" style="color: white;" href="{{ route('party.show', 1) }}">Details</a>
                        <a class="btn btn-primary btn-sm href="{{ route('party.edit', 1) }}">Edit</a>
                        <a class="btn btn-danger btn-sm href="{{ route('party.destroy', 1) }}">Delete</a>
                    </td>
                </tr>

                <tr>
                    <td>02</td>
                    <td>Md. Nur</td>
                    <td>01775219458</td>
                    <td>Customer</td>
                    <td class="text-end text-success">15,00,000.00</td>
                    <td class="text-end">
                        <a class="btn btn-info btn-sm" style="color: white;" href="{{ route('party.show', 1) }}">Details</a>
                        <a class="btn btn-primary btn-sm href="{{ route('party.edit', 1) }}">Edit</a>
                        <a class="btn btn-danger btn-sm href="{{ route('party.destroy', 1) }}">Delete</a>
                    </td>
                </tr>

                <tr>
                    <td>03</td>
                    <td>Md. Tarikul</td>
                    <td>01775245623</td>
                    <td>Suplier</td>
                    <td class="text-end text-success">75,60,000.00</td>
                    <td class="text-end">
                        <a class="btn btn-info btn-sm" style="color: white;" href="{{ route('party.show', 1) }}">Details</a>
                        <a class="btn btn-primary btn-sm href="{{ route('party.edit', 1) }}">Edit</a>
                        <a class="btn btn-danger btn-sm href="{{ route('party.destroy', 1) }}">Delete</a>
                    </td>
                </tr>

                <tr>
                    <td>04</td>
                    <td>Md. Fitratullah</td>
                    <td>017752127834</td>
                    <td>Suplier</td>
                    <td class="text-end text-success">55,00,040.00</td>
                    <td class="text-end">
                        <a class="btn btn-info btn-sm" style="color: white;" href="{{ route('party.show', 1) }}">Details</a>
                        <a class="btn btn-primary btn-sm href="{{ route('party.edit', 1) }}">Edit</a>
                        <a class="btn btn-danger btn-sm href="{{ route('party.destroy', 1) }}">Delete</a>
                    </td>
                </tr>

                <tr>
                    <td>05</td>
                    <td>Md. Mahmud</td>
                    <td>0163463643</td>
                    <td>Suplier</td>
                    <td class="text-end text-success">15,00,000.00</td>
                    <td class="text-end">
                        <a class="btn btn-info btn-sm" style="color: white;" href="{{ route('party.show', 1) }}">Details</a>
                        <a class="btn btn-primary btn-sm href="{{ route('party.edit', 1) }}">Edit</a>
                        <a class="btn btn-danger btn-sm href="{{ route('party.destroy', 1) }}">Delete</a>
                    </td>
                </tr>

                <tr>
                    <td colspan="4" class="text-end fw-bold">Total=</td>
                    <td class="text-end text-success">1,45,00,000.00</td>
                    <td>&nbsp;</td>
                </tr>
            </tbody>
        </table>
    </div>
    
@endsection