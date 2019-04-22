@extends('layouts.master')

@section('title')
    Area & Perimeter of Rectangle Calculator
@endsection

@section('content')
    <h1>Area & Perimeter of Rectangle Calculator</h1>
    <h5>Note: Length and width can have up to 1 decimal place precision. E.g. 3.1 but not 3.14. </h5>
    <p>
    <form method='GET' action='calculateProcess'>

        <label> Length: <input type="number" name="length" id="length" min="0" step=".1" value='{{ $length }}'> </label><br>

        <br>
        <label> Width: <input type="number" name="width" id="width" min="0" step=".1" value='{{ $width }}'></label><br>
        <br>
        <label> Round up the Answer?</label>
        <input type="checkbox" name="round" {{ ('round') ? 'checked' : '' }} > Yes<br>
        <br>


        <br>

        <select name="Type of Calculation" id="Calculation" value='{{ $Type_of_Calculation }}'>
            <option value="Area"> Area</option>
            <option value="Perimeter"> Perimeter</option>
        </select><br>
        <br>
        <input type="submit" value='calc'>
    </form>

    </p>
    </form>


    {{-- This section checks of there are any errors. If no errors then show area or perimeter calculation.  --}}
    @if(count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @elseif ($Type_of_Calculation == "Area")
        <h2> The area of the rectangle: <em> {{ $area }} </em></h2>
    @elseif($Type_of_Calculation == "Perimeter")
        <h2> The perimeter of the rectangle: <em>{{ $perimeter }}</em></h2>
    @endif



@endsection