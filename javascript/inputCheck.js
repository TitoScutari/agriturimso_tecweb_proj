let dettagliForm = {
  "da": ["Da","(0[1-9]|[12][0-9]|3[0-1])\/(0[0-9]|1[012])\/((20|19)[0-9][0-9])", "Inserire la data nel formato gg/mm/aaaa"],
  "a": ["A","(0[1-9]|[12][0-9]|3[0-1])\/(0[0-9]|1[012])\/((20|19)[0-9][0-9])", "Inserire la data nel formato gg/mm/aaaa"],
  "nome": ["Nome","([a-zA-Z]){2,20}","Il nome non può essere vuoto"],
  "cognome":["Cognome","([a-zA-Z]){2,20}","Il cognome non può essere vuoto"],
  "email":["Email",/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/,"Indirizzo email non valido"],
  "password":["Password",/^.{4,}/,"La password deve avere almeno 4 caratteri"],
  "testo":["Testo","\.{10,}","Il commento è obbligatorio e deve essere di almeno 10 caratteri"],
  "name": ["Name","([a-zA-Z]){2,20}","Inserire il nome della camera"],
  "people": ["People", /^\d{1,2}/, "Inserire il numero di posti letto"],
  "price": ["Price", /^\d{1,4}/, "Inserire il prezzo della camera"],
  "description" : ["NewsDescription", /^.{10,}/, "Inserire la descrizione della notizia"]
}

function validateNews() {
  return validateField(document.getElementById("description"))
}

function validateRoom(){
  const nome = document.getElementById("name")
  const posti = document.getElementById("people")
  const price = document.getElementById("price")
  const descrizione = document.getElementById("imgLongDesc")
  const validNome = validateField(nome)
  const validPosti = validateField(posti)
  const validPrice = validateField(price)
  const validDescrizione = validateField(descrizione)
  return validNome && validPosti && validPrice
}

function validatePrenota() {
  const da = document.getElementById("da")
  const a = document.getElementById("a")
  let validDa = validateField(da)
  let validA = validateField(a)
  if (validDa && validA) {
    if(checkDateDaA(da, a)) {
      return true
    }
    return false
  }
  return false
}

function validateComment() {
  const comm = document.getElementById("testo")
  return validateField(comm)
}

function validateRegistrati() {
  console.log("validateRegistrati called");
  const nome = document.getElementById("nome")
  const cognome = document.getElementById("cognome")
  const validNome = validateField(nome)
  const validCognome = validateField(cognome)
  const validCredents = validateAccedi()
  return validNome && validCognome && validCredents
}

function validateAccedi() {
  const email = document.getElementById("email")
  const password = document.getElementById("password")
  const validEmail = email.value === "admin" || email.value === "user" || validateField(email)
  const validPassword = password.value === "admin" || password.value === "user" || validateField(password)
  return validEmail && validPassword
}

 function validateField(input) {
  const parent = input.parentNode;

	if(parent.children.length == 2){
		parent.removeChild(parent.children[1]);
	}
	const regex = dettagliForm[input.id][1];
	const text = input.value;

	if(text.search(regex) != 0){
		showError(input, dettagliForm[input.id][2]);
		return false;
	}
	return true;
 }

function showError(input, errorMsg) {
  let element = document.createElement("strong");
  element.className = "error";
  element.appendChild(document.createTextNode(errorMsg));
  
  let paragraph = document.createElement("p");
  paragraph.appendChild(element);

	let parent = input.parentNode;
	parent.appendChild(paragraph);
 }

function dateParse(dateString) {
  return new Date(dateString.substring(6,10)+"-"+dateString.substring(3,5)+"-"+dateString.substring(0,2))
}

function dateExist(dateString) {
  const year = dateString.substring(6,10)
  const month = dateString.substring(3,5)
  const day = dateString.substring(0,2)
  let exist = true
  shortMonths = ["04","06","09","11"] 

  console.log("checking" + dateString);
  if(month == 2 && day > 28) {
    if (!(year%4 == 0 && day == 29)) {
      exist = false
    }
    else if (day > 29) {
      exist == false
    }
  }
  if (exist && shortMonths.indexOf(month)>=0 && day == 31) {
    exist = false
  }
  return exist
}


function checkDateDaA(da,a) {
  try {
    const errInvalid = "La data immessa non esiste"
    const errPast = "la data immessa è già passata"
    const errIncompatible = "La data di inizio deve precedere quella di fine"
    let validDates = true
    
    if (!dateExist(da.value)) {
      showError(da, errInvalid)
      return false
    } 
    if (!dateExist(a.value)) {
      showError(a, errInvalid)
      return false
    }

    const dateDa = dateParse(da.value)

    const dateA = dateParse(a.value)  
  
    if (dateDa < Date.now()) {
      showError(da, errPast)
      validDates = false
    }
    if (dateA < Date.now()) {
    showError(A, errPast)
    validDates = false
  }
  if (validDates) {
    if(dateA<dateDa) {
      showError(da, errIncompatible)
      showError(a,errIncompatible)
      return false
    }
    return true
  }
  return false
  }
  catch {
    console.log("datecheck failed");
    return false
  }
}

