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
  
function updateRow(item){
    // Searches the Current Row
    let currentRow=item.closest("tr");
    let propertyClass=item.closest("td").classList[0]
    let changeProperty=propertyClass.replace('card', '').toLowerCase();
    let button=null
  
    // Finds the information for searching. 
    // This should be a 2D array or a map instead of 2 seperate arrays
    //let allProperties=['Name', 'Set', 'Condition', 'Finish', 'Source']
    let allProperties=['Set', 'Store'];
    let propertyData=[];
    allProperties.forEach(function(col){
      if (changeProperty == col.toLowerCase()){
        propertyData.push(item.innerText);
      }
      else{
        propertyData.push(currentRow.querySelector("td.card"+col+" > div.dropdown > button").getAttribute('data-'+col.toLowerCase()));
      }
    });
  
    // Get all rows that have the same name as the card
    let rows=Array.from(document.querySelectorAll("."+currentRow.classList[0]));
  
    // Filters the rows down to the row that matches all properties we are searching for
    for (let i=0; i<allProperties.length; i++){
      rows = rows.filter(function(item){
        button = item.querySelector('button.display-$property'.replace("$property", allProperties[i].toLowerCase()));
        return button && button.textContent.includes(propertyData[i]);
      });
    }
    // Updates the Current Row
    if (rows.length > 0){
      currentRow.classList.remove('active');  
      currentRow.style.display="None";
      rows[0].classList.add("active");
      rows[0].style.display="";
    }
    else{
      alert("This option does not exist");
    }
    updateCardValue();
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