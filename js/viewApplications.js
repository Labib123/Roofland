var table = document.getElementById('table') ;
// populate table's rows in JavaScript array
var array = [
             [,'R123','Twins',2,1500,'Aishath Junana',2000,'August',2020,'<i class="fas fa-check"></i>'],
             [,'R354','Prima 16',3,850,'Serena Rekha',2100,'May',2019,'<i class="fas fa-hourglass"></i>'],
             [,'R980','The ARC',2,550,'Aminath Junaina',2000,'January',2020,'<i class="far fa-times-circle"></i>']
           ] ;
    // The purpose of this for loop is to number the rows (e.g : if we add one row it will numeber it as 4 )
for(i=0 ; i<3 ; i++){
  array[i].push(' <a href="applicantProfile.html" target="_blank">  <i class="fa fa-search-plus" aria-hidden="true"></i> </a> ' ) ;
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

var applicantName = document.getElementById('applicantName') ;
var numOfUnits = document.getElementById('numOfUnits') ;
var ResidenceID = document.getElementById('ResidenceID') ;
var monthlyRent = document.getElementById('monthlyRent') ;
var monthlyIncome = document.getElementById('monthlyIncome') ;
var month = document.getElementById('month') ;
var year = document.getElementById('year') ;
var numberOfApplication = document.getElementById('numberOfApplication') ;
