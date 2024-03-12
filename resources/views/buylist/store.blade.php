@extends('layouts.app')

@section('content')
<div class='row'>
    <table id="buylist-table" class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Set</th>
          <th scope="col">Condition</th>
          <th scope="col">Finish</th>
          <th scope="col">Source</th>
          <th scope="col">Price</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($cards as $card)
          <x-buylist.card-row :card="$card"/>
        @endforeach
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>Total</td>
          <td id='totalValue'></td>
        </tr>
      </tbody>
    </table>
  </div>
{{--
@foreach ($cards as $name=>$card)
    <div class="row">
        <div class='col-12'>
            <p>
                {{$name}}
            </p>
            <p>
                {{$card}}
            </p>
        </div>
    </div>
@endforeach
--}}
<script>
window.addEventListener("load", () => {
  let tableRows=document.querySelectorAll('[class^="card_"]')
  // Brute force first element to be displayed
  tableRows[0].classList.add('active');
  for(let i=1; i<tableRows.length; i++){
    if (tableRows[i-1].classList.contains(tableRows[i].classList[0])){
        tableRows[i].style.display="none";
    }
    else{
        tableRows[i].classList.add('active');
    }
  };
  updateCardValue()
});

  
function updateSet(item){
  alert(item);
}

function updateCardValue(){
  let cell=document.getElementById("totalValue");
  // Finds all child tags with the class of price inside all active <tr> tags
  let data=document.querySelectorAll("tr.active > .price");
  let total=0;
  data.forEach(element => {
    total+=Number(element.innerText.replace("$", ""));
  });
  
  cell.innerHTML="$"+total.toFixed(2); 
}

document.addEventListener('DOMContentLoaded', function() {
    // Get the table element
    var table = document.getElementById('buylist-table');

    // Attach click event to the table
    table.addEventListener('click', function(event) {
      alert();
        /*
        // Check if the clicked element is a table row
        if (event.target.tagName === 'TR') {
            // Toggle visibility of the next row with class 'hidden-row'
            var nextRow = event.target.nextElementSibling;
            if (nextRow && nextRow.classList.contains('hidden-row')) {
                nextRow.style.display = (nextRow.style.display === 'none') ? 'table-row' : 'none';
            }
        }
        */
    });
});
</script>

@endsection