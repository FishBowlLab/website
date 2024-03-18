@foreach ($card as $item)
<tr class="{{'card_'.str_replace(' ', '', $item->Name)}}">
    <th class="row-num" scope="row">{{$loop->iteration}}</th>
    <td class="cardName" name={{$item->Name}}>{{$item->Name}}</td>
    <td class="cardSet">
        <div class="dropdown">
        <button class="btn dropdown-toggle display-set" type="button" data-bs-toggle="dropdown" data-set='{{$item->Set}}' aria-expanded="false">
            {{$item->Set}}
        </button>
        <ul class="dropdown-menu">
            @foreach ($card->map(function ($array) {return collect($array["Set"]);})->unique() as $cardSet)
                <li data-set='{{$cardSet[0]}}'><button class="dropdown-item" onclick='updateRow(this)'>{{$cardSet[0]}}</button></li>
            @endforeach
        </ul>
        </div>
    </td>
    <td class="cardCondition">
        <div class="dropdown">
        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{$item->Condition}}
        </button>
        <ul class="dropdown-menu" >
            <li><a class="dropdown-item" href="#">NM</a></li>
            {{--
            <li><a class="dropdown-item" href="#">SP</a></li>
            <li><a class="dropdown-item" href="#">HP</a></li>
            --}}
        </ul>
        </div>
    </td>
    <td class="cardFinish">
        <div class="dropdown">
        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{$item->Finish}}
        </button>
        <ul class="dropdown-menu" >
            <li><a class="dropdown-item" href="#">non-foil</a></li>
            {{--
            <li><a class="dropdown-item" href="#">foil</a></li>
            --}}
        </ul>
        </div>
    </td>
    <td class="cardStore">
        <div class="dropdown">
        <button class="btn dropdown-toggle display-store" type="button" data-bs-toggle="dropdown" data-store='{{$item->Source}}' aria-expanded="false">
            {{$item->Source}}
        </button>
        <ul class="dropdown-menu" >
            @foreach ($card->map(function ($array) {return collect($array["Source"]);})->unique() as $cardStore)
            <li data-store='{{$cardStore[0]}}'><button class="dropdown-item" onclick='updateRow(this)'>{{$cardStore[0]}}</button></li>
        @endforeach
        </ul>
        </div>
    </td>
    <td class='price'>${{$item->Price}}</td>
</tr>
@endforeach