<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <style>
        th,td{
        border: 1px solid #dddddd;
        text-align: left;
        padding: 15px;
        }
        .primary-button-link {
    display: inline-block;
    padding: 0.5rem 1rem;
    background-color: #1F2937; /* Change color as needed */
    color: #fff; /* Text color */
    border: none;
    border-radius: 0.20rem;
    text-decoration: none;
    transition: background-color 0.3s ease;
    font-size: 15px;
    font-style: inherit;
}
        </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="/BOcreate" method="POST">
                        @csrf
                        <x-primary-button style="margin: 40px">
                            {{ __('Enter Bus Owner Details') }}
                        </x-primary-button>
                        </form>
                        <table class="table table-bordered" style=" font-family: arial, sans-serif; width: 95%;margin:30px;"
>
    <tr style="border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;">
        <th>NAME</th>
        <th>DOB</th>
        <th>TRAVELS NAME</th>
        <th>ACCOUNT NO</th>
        <th>IFSC CODE</th>
        <th>BUS NAME</th>
        <th>BUS NUMBER</th>
        <th>SEAT COUNT</th>
        <th>UPDATE</th>
        <th>DELETE</th>
        
       
    </tr>
    
        @foreach ($bodetails as $bodetail)
        <tr>
            <td>{{$bodetail['Name']}} </td>
            <td>{{$bodetail['DOB']}} </td>
            <td>{{ $bodetail['Travelsname'] }}</td>
            <td>{{ $bodetail['Accountno'] }}</td>
            <td>{{ $bodetail['Ifsccode'] }}</td>
            <td>{{ $bodetail['Busname'] }}</td>
            <td>{{ $bodetail['Busno'] }}</td>
            <td>{{ $bodetail['Seats'] }}</td>
            <td>
                <form action="/bedit/{{$bodetail['id']}}" method="POST">
                    @csrf
                    <x-primary-button style="margin: 40px">
                        {{ __('Update') }}
                    </x-primary-button>
                    </form>
           
            </td>
            <td>
                <form action="/deletee/{{$bodetail['id']}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <x-primary-button>Delete</x-primary-button>
                </form>
           
            </td>
                    
        </tr>
        @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
