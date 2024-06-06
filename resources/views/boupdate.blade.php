<x-guest-layout>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    </head>
        <title>Document</title>
    </head>
    <body >
        @csrf
        <form action="/editinsert/{{$bodetail->id}}" method="POST" style="align-content: center; text-align:center; font-family:Georgia, 'Times New Roman', Times, serif"  >
            @csrf
            @method('PUT')
            <h3 class="mb-4"><u>Enter the Bus Owner Details </u></h3>
            <h4>NAME</h4>
            <input type="text" name="Name" placeholder="Name" value="{{ $bodetail->Name }}">
            <h4>DOB</h4>
              <input type="date" name="DOB" placeholder="DOB" value="{{ $bodetail->DOB }}"><br>
            <h4>TRAVELS NAME</h4>
            <input type="text" name="Travelsname" placeholder="Travelsname" value="{{ $bodetail->Travelsname }}">
            <h4>ACCOUNT NO.</h4>
            <input type="text" name="Accountno" placeholder="Accountno" value="{{ $bodetail->Accountno}}">
            <h4>IFSC CODE</h4>
            <input type="text" name="Ifsccode" placeholder="Ifsccode" value="{{ $bodetail->Ifsccode }}">
            <h4>BUS NAME</h4>
            <input type="text" name="Busname" placeholder="Busname" value="{{ $bodetail->Busname }}">
            <h4>BUS NO.</h4>
            <input type="text" name="Busno" placeholder="Busno" value="{{ $bodetail->Busno }}">
            <h4>SEATS COUNT</h4>
            <input type="number" name="Seats" placeholder="Seats" value="{{ $bodetail->Seats }}"><br>

           
              
              <x-primary-button class="ms-6 mt-4">
                {{ __('Submit') }}
            </x-primary-button>
              
    
    
    
        </form>
    </body>
    </html>
    </x-guest-layout>