function filter(x){
    //find all class named blogArticle
    var a=document.getElementsByClassName('blogArticle');

    var i;
    //check each article if they get the same category name as x
      for(i=0; i<a.length;i++){

          
          console.log(a.length);
    //the first class name
          var firstClassName=a[i].className.split(" ")[0].toLowerCase();
          console.log(x);  
          console.log(firstClassName);
    // add class or remove classname for show or hide the article
          if(x=='tout')
          {
              a[i].classList.remove('hidden');
              a[i].classList.add('show');
          }
          else 
          if(firstClassName==x){

              a[i].classList.remove('hidden');
              a[i].classList.add('show');
          }
          else
          {
              a[i].classList.remove('show');
              a[i].classList.add('hidden')
          }

      };    

  }