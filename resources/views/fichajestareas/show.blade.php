@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">fichajestarea {{ $fichajestarea->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/fichajestareas') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/fichajestareas/' . $fichajestarea->id . '/edit') }}" title="Edit fichajestarea"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('fichajestareas' . '/' . $fichajestarea->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete fichajestarea" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $fichajestarea->id }}</td>
                                    </tr>
                                    <tr><th> Id Fichatarea </th><td> {{ $fichajestarea->id_fichatarea }} </td></tr><tr><th> Id Proyecto </th><td> {{ $fichajestarea->id_proyecto }} </td></tr><tr><th> Id Tarea </th><td> {{ $fichajestarea->id_tarea }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
