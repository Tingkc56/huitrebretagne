
 //get address container 
 var addressContainer = document.getElementById('container');

 let address = document.querySelector('#address')
 
 //get the key word of the input adresse
 address.addEventListener('input',function(){
    let addressUrl = address.value.split(" ").join('+');
    console.log(addressUrl);  
 

   // fetch
    fetch(`https://api-adresse.data.gouv.fr/search/?q=${addressUrl}&limit=6`)
    .then(Response => Response.json())
    .then(data=>{
   //get address arry
       let listApi = data.features;

   // clearn all
   delectListBox();

   //create address ul
       var listBox = document.createElement('ul');
       listBox.id = 'addressBox';
       addressContainer.appendChild(listBox);
   // get the adresse list
       listApi.forEach((feature, index)=> {
           let addressList = document.createElement('li');
           addressList.innerHTML = listApi[index].properties.label;
         addressList.addEventListener("click", function() {
           address.value = listApi[index].properties.label;
           delectListBox();
         });

         listBox.appendChild(addressList);
       });
    })
    .catch(e => console.log("Oops, error", e));
 });
   // clean ul function
   function delectListBox() {
        var addressBox = document.getElementById("addressBox");
        console.log(addressBox);
     if (addressBox){
       addressBox.parentElement.removeChild(addressBox)
     }
   }
 