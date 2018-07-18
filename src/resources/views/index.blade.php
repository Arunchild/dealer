@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="text-center text-danger">Dealer Details</h1>

        <br/><h1 class="text-center text-warning">Want to create new one... <a class="btn btn-danger" href="{{ route('dealer.create') }}">Create dealer</a></h1><br/>

        <?php $i = 1; ?>


                    <table id="dealer" class="table table-hover table-condensed table-bordered">
                        <thead>
                            <tr>
                                <th> #:</th>
                                <th> Company Name:</th>
                                <th> Address 1:</th>
                                <th>Address 2: </th>
                                <th> state:</th>
                                <th> pincode:</th>
                                <th> country:</th>
                                <th> mobile:</th>
                                <th> gst:</th>
                                <th> email:</th>
                                <th> website:</th>
                                <th> contact_person:</th>
                                <th> cpm:</th>
                                <th> Opening Balance:</th>
                                <th> Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($items as $item)
                            <tr>

                                <td>{{ $i }}</td>
                                <td>{{ $item->companyname }}</td>


                                <td>{{ $item->addressline1 }}</td>

                                <td> {{ $item->addressline2 }}</td>


                                <td>{{ $item->state }}</td>


                                <td>{{ $item->pincode }}</td>

                                <td>{{ $item->country }}</td>

                                <td>{{ $item->mobile }}</td>

                                <td>{{ $item->gst }}</td>

                                <td>{{ $item->email }}</td>


                                <td>{{ $item->website }}</td>


                                <td>{{ $item->contact_person }}</td>


                                <td>{{ $item->contact_person_mobile }}</td>


                                <td>{{ $item->opening_balance }}</td>
                                <td><a href="{{ route('dealer.edit', $item->id) }}" class="">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    {!! Form::open([ 'method' => 'DELETE', 'style' => 'display:inline', 'class' => 'form-inline', 'route' => ['dealer.destroy', $item->id] ]) !!}
                                    {!! Form::button('<i class="fas fa-trash-alt"></i>', array('type' => 'submit', 'class' => '')) !!}
                                    {!! Form::close() !!}</td>
                            </tr>
                            <?php $i++; ?>
                        @endforeach
                        </tbody>
                    </table>




    </div>
    @section('script')
        <script>
            $(document).ready( function () {
                $('#dealer').DataTable();
            } );
        </script>
    @stop
@stop
