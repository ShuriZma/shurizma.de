const smallSearch = () => {
    // Declare variables
    const input = document.getElementById('myInputSmall');
    const filter = input.value.toUpperCase();
    const table = document.getElementById('tableSearchSmall');
    let hit;


    // Loop through all table rows, and hide those who don't match the search query
    for (const tr of table.getElementsByTagName('tr')) {
        hit = false;
        for (const td of tr.getElementsByTagName('td')) {
            const txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().includes(filter)) {
  //              td.style.display = '';
                hit = true;
                continue;
  //          } else {
  //              td.style.display = 'none';
  //          }
        }
        if ( hit === true ) {
            tr.style.display = '';
        } else {
            tr.style.display = 'none';
        }
    }
  }
};