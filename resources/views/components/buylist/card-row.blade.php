@foreach ($card as $item)
<tr class="{{'card_'.str_replace(' ', '', $item->Name)}}">
    <th class="row-num" scope="row">{{$loop->iteration}}</th>
    <td class="cardName">{{$item->Name}}</td>
    <td>
        <div class="dropdown">
        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{$item->Set}}
        </button>
        <ul class="dropdown-menu">
            @foreach ($card->map(function ($array) {return collect($array["Set"])->unique('Set')->all();}); as $cardSet)
                <li><button class="dropdown-item" onclick='updateSet(this)'>{{$cardSet[0]}}</button></li>
            @endforeach
        </ul>
        </div>
    </td>
    <td>
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
    <td>
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
    <td>
        <div class="dropdown">
        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{$item->Source}}
        </button>
        <ul class="dropdown-menu" >
            <li><a class="dropdown-item" href="#">401Games</a></li>
            <li><a class="dropdown-item" href="#">FaceToFaceGames</a></li>
        </ul>
        </div>
    </td>
    <td class='price'>${{$item->Price}}</td>
</tr>
@endforeach