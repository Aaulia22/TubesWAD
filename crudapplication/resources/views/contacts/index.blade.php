@extends('contacts.layout')
@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Contacts</div>
                <div class="card-body">
                    <a href="{{ url('/contact/create') }}" class="btn btn-success d-grid gap-2 btn-sm" title="Add New Contact">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New Contact
                    </a>
                    <br />
                    <br />
                    <div class="table-responsive">
                        <table class="table" border="1px solid">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Telephone</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($contacts as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->address }}</td>
                                    <td>{{ $item->mobile }}</td>

                                    <td>
                                        <a href="{{ url('/contact/' . $item->id) }}" title="View Student"><button
                                                class="btn btn-secondary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>
                                                View</button></a>

                                        <a href="{{ url('/contact/' . $item->id . '/edit') }}"
                                            title="Edit Student"><button class="btn btn-primary btn-sm"><i
                                                    class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                Edit</button></a>

                                        <form method="POST" action="{{ url('/contact' . '/' . $item->id) }}"
                                            accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn-outline-danger btn-sm" title="Delete Contact"
                                                onclick="return confirm('Confirm delete?')">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                            </button>

                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection