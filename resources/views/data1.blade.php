@extends('layouts.app')

@section('content')
	<div class="container">
		<h1>Hello</h1>
		{{-- @foreach ($result as $product)
			<h3>{{ $product->data }}</h3>
		@endforeach --}}
	</div>
@endsection

@push('scripts')
<script>
	'use strict';
	// var request = new XMLHttpRequest()

	// request.open('GET', 'https://api.bnm.gov.my/public/islamic-interbank-rate', true)
	// request.onload = function() {
	//   // Begin accessing JSON data here
	//   var data = JSON.parse(this.response)

	//   if (request.status >= 200 && request.status < 400) {
	//     data.forEach(test => {
	//       console.log(test.date)
	//       console.log(test.overnight)
	//     })
	//   } else {
	//     console.log('error')
	//   }
	// }

	// request.send()
	$(document).ready(function() {
		$.ajax({
		  url: 'https://api.bnm.gov.my/public/kijang-emas',
		  type: 'GET',
		  header: {'Accept': 'application/vnd.BNM.API.v1+json'}
		  data: data,
		  success: console.log(success),
		});
	});
	// fetch('https://api.bnm.gov.my/public/kijang-emas', {
	//     method : 'GET',
	//     headers: {
	//       'Content-Type': 'application/json',  // sent request
	//       'Accept':       'application/vnd.BNM.API.v1+json'   // expected data sent back
	//     },
	// 	})
	// 	  .then((res) => res.json())
	// 	  .then((data) => console.log(data))
	// 	  .catch((error) => console.log(error))
	let xhr = new XMLHttpRequest;
    //Call the open function, GET-type of request, url, true-asynchronous
    xhr.open('GET', 'https://api.github.com/users', true)
    //call the onload 
    xhr.onload = function() 
        {
            //check if the status is 200(means everything is okay)
            if (this.status === 200) 
                {
                    //return server response as an object with JSON.parse
                    console.log(JSON.parse(this.responseText));
        }
                }
    //call send
    xhr.send();
</script>
@endpush

