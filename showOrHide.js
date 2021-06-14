/*OurTeam*/


var articles = document.querySelector('.articles_container').children
var totalArticles = articles.length
var index = 0
function Show(){
  for( var i=0; i<totalArticles; i++ ){
    articles[i].style.display = "block"
  }
}

function Hide(){
  for( var i=0; i<totalArticles; i++ ){
    articles[i].style.display = "none"
  }
}

/*end*/
