var table = document.getElementById('table') ;
// populate table's rows in JavaScript array
var array = [
             [,'R123','A1505',800,01,2020,'New'],
             [,'R354','B67',800,08,2019,'Waitlist'] ,
             [,'R756','C209',500,09,2019,'Appeal pending'],
             [,'R978','103',800,07,2020,'Approved'],
             [,'R098','C7-1-B',800,05,2020,'Rejected','<a href="addApplications.html"> <button type="button" class="btn btn-dark">Appeal</button></a>']] ;
    // The purpose of this for loop is to number the rows (e.g : if we add one row it will numeber it as 4 )

for(i=0 ; i<5 ; i++){
  array[i][0] = i + 1 ;


}

function addApplication() {

   array.push([1,'Bistari',12,800,'Labib',2000,'August',800]) ;

    console.log('done')

    }



         for(var i = 0; i < array.length; i++)
           {
               // create a new row
               var newRow = table.insertRow(table.length);
               for(var j = 0; j < array[i].length; j++)
               {
                   // create a new cell
                   var cell = newRow.insertCell(j);

                   // add value to the cell
                   cell.innerHTML = array[i][j];
               }
           }
