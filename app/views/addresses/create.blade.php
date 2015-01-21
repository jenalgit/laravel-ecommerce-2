@section('main')
	<h2>Create Address</h2>
        @if ($customer)
            <h3>{{ $customer->first_name }} {{ $customer->last_name }}</h3>
        @endif

        {{-- {{ Form::model(new Address, array('route' => array('customers.addresses.store', $customer->id), 'method' => 'post', 'role' => 'form', 'class' => 'form-horizontal')) }} --}}
        {{ Form::model(new Address, array('route' => array('customers.addresses.store', $customer->id))) }}
            @include('addresses/partials/_form', array('submit_button_text' => 'Submit'))
	{{ Form::close() }}
@stop
