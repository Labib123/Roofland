var table = document.getElementById('table') ;
// populate table's rows in JavaScript array
var array = [
             [,'R123',2,800,'January',2013,'New'],
             [,'R175',3,700,'February',2019,'Waitlist'] ,
             [,'R400',1,600,'March',2020,'Appeal pending'],
             [,'R567',2,1000,'April',2020,'Approved'],
             [,'R467',2,350,'May',2020,'Rejected','<a href="addApplications.html"> <button type="button" class="btn btn-dark">Appeal</button></a>']] ;
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
