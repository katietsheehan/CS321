function checkAll(){
  checkName();
  checkEmail();
  checkPhone();
  checkComment();
}

function checkName(){
  var name = document.getElementById( "name" ).value.trim() ;
  var errorname = document.getElementById( "errorname" );
  if( name == "" ){
      //console.log( "Empty" );
      errorname.innerHTML = "Please Enter a Name";
      errorname.classList.add( "showerror" );
      //console.log( errorname );
  } else {
      //console.log( "NOT Empty" );
      errorname.innerHTML = "";
      errorname.classList.remove( "showerror" );
      //console.log( errorname );
  }
}

function checkEmail(){
  var email = document.getElementById( "email" ).value.trim() ;
  var erroremail = document.getElementById( "erroremail" );
  if( email == "" ){
      console.log( "Empty" );
      erroremail.innerHTML = "Please Enter an Email";
      erroremail.classList.add( "showerror" );
      //console.log( errorname );
  }
  /*else if ( email != "/.+@[a-z]+.[a-z]{3}" ){
    erroremail.innerHTML = "Please use proper email format";
    erroremail.classList.add( "showerror" );

  }*/
  else {
      //console.log( "NOT Empty" );
      erroremail.innerHTML = "";
      erroremail.classList.remove( "showerror" );
      //console.log( errorname );
  }
}

function checkPhone(){
  var phone = document.getElementById( "phone" ).value.trim() ;
  var errorphone = document.getElementById( "errorphone" );
  if( phone == "" ){
      console.log( "Empty" );
      errorphone.innerHTML = "Please Enter a Phone Number";
      errorphone.classList.add( "showerror" );
      //console.log( errorname );
  }
  /*else if ( email != RegEx"/\d{3}-\d{3}-\d{4}" ){
    erroremail.innerHTML = "Please use proper Phone number format";
    erroremail.classList.add( "showerror" );

  }*/
  else {
      //console.log( "NOT Empty" );
      errorphone.innerHTML = "";
      errorphone.classList.remove( "showerror" );
      //console.log( errorname );
  }
}

function checkComment(){
  var comment = document.getElementById( "comment" ).value.trim() ;
  var errorcomment = document.getElementById( "errorcomment" );
  if( comment == "" ){
      //console.log( "Empty" );
      errorcomment.innerHTML = "Message can not be empty";
      errorcomment.classList.add( "showerror" );
      //console.log( errorname );
  } else {
      //console.log( "NOT Empty" );
      errorcomment.innerHTML = "";
      errorcomment.classList.remove( "showerror" );
      //console.log( errorname );
  }
}
