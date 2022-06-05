//function to set about
var base_url = "https://icircles.app/";

//function to set portfolio
portfolioRender = (portfolios) => {
  // console.log(portfolios);
  let keys = [];
  keys = Object.keys(portfolios);
 
  const length = keys.length;
  // console.log("length "+length);
  // console.log(keys.length);
  if(length<=0){
    document.getElementById("portfolioSection").style.display = "none";
  }

  let cat = ``;
  let contentIndex0 = ``;
  let contentIndex1 = ``;
  let contentIndex2 = ``;
  let contentIndex3 = ``;
  let contentIndex4 = ``;
  let contentIndex5 = ``;
  let elementsImageIndex0= ``;
  let elementsImageIndex1= ``;
  let elementsImageIndex2= ``;
  let elementsImageIndex3= ``;
  let elementsImageIndex4= ``;
  let elementsImageIndex5= ``;
  keys.map((key, index) => {
    const strShort = key;
    const shortKey = strShort.split(" ").slice(0, 1).join(" ");
    // console.log("key"+shortKey);
    // console.log("index"+index);
    if(index===0){
      cat += `<li class="nav-item" role="presentation">
      <button onclick="showCat0()"; class="nav-link active" id="${shortKey}-tab" data-bs-toggle="pill" data-bs-target="#${shortKey}" type="button" role="tab" aria-controls="pills-${shortKey}" aria-selected="true">${key}</button>
    </li>`;
    contentIndex0 += `
    <div class="tab-pane fade show active" id="${shortKey}" role="tabpanel" aria-labelledby="${shortKey}-tab">
        <div id="elementsImageIndex0" class="row">
   
        </div>
    </div>
    `;
    }
    if(index===1){
      cat += `<li class="nav-item" role="presentation">
      <button onclick="showCat1()"; class="nav-link" id="${shortKey}-tab" data-bs-toggle="pill" data-bs-target="#${shortKey}" type="button" role="tab" aria-controls="pills-${shortKey}" aria-selected="true">${key}</button>
    </li>`;
    contentIndex1 += `
    <div class="tab-pane fade show active" id="${shortKey}" role="tabpanel" aria-labelledby="${shortKey}-tab">
        <div id="elementsImageIndex1" class="row">
   
        </div>
    </div>
    `;
    }
    if(index===2){
      cat += `<li class="nav-item" role="presentation">
      <button onclick="showCat2()"; class="nav-link" id="${shortKey}-tab" data-bs-toggle="pill" data-bs-target="#${shortKey}" type="button" role="tab" aria-controls="pills-${shortKey}" aria-selected="true">${key}</button>
    </li>`;
    contentIndex2 += `
    <div class="tab-pane fade show active" id="${shortKey}" role="tabpanel" aria-labelledby="${shortKey}-tab">
        <div id="elementsImageIndex2" class="row">
   
        </div>
    </div>
    `;
    }
    if(index===3){
      cat += `<li class="nav-item" role="presentation">
      <button onclick="showCat2()"; class="nav-link" id="${shortKey}-tab" data-bs-toggle="pill" data-bs-target="#${shortKey}" type="button" role="tab" aria-controls="pills-${shortKey}" aria-selected="true">${key}</button>
    </li>`;
    contentIndex3 += `
    <div class="tab-pane fade show active" id="${shortKey}" role="tabpanel" aria-labelledby="${shortKey}-tab">
        <div id="elementsImageIndex2" class="row">
   
        </div>
    </div>
    `;
    }
    if(index===4){
      cat += `<li class="nav-item" role="presentation">
      <button onclick="showCat2()"; class="nav-link" id="${shortKey}-tab" data-bs-toggle="pill" data-bs-target="#${shortKey}" type="button" role="tab" aria-controls="pills-${shortKey}" aria-selected="true">${key}</button>
    </li>`;
    contentIndex4 += `
    <div class="tab-pane fade show active" id="${shortKey}" role="tabpanel" aria-labelledby="${shortKey}-tab">
        <div id="elementsImageIndex2" class="row">
   
        </div>
    </div>
    `;
    }
    if(index===5){
      cat += `<li class="nav-item" role="presentation">
      <button onclick="showCat2()"; class="nav-link" id="${shortKey}-tab" data-bs-toggle="pill" data-bs-target="#${shortKey}" type="button" role="tab" aria-controls="pills-${shortKey}" aria-selected="true">${key}</button>
    </li>`;
    contentIndex5 += `
    <div class="tab-pane fade show active" id="${shortKey}" role="tabpanel" aria-labelledby="${shortKey}-tab">
        <div id="elementsImageIndex2" class="row">
   
        </div>
    </div>
    `;
    }

    if(index===0){
    portfolios[key].map((item, index) => {
        // console.log(item);
        // console.log(index);
        elementsImageIndex0 +=`
          <div class="col-6 col-lg-3">
            <div class="portItem">
              <img src="${base_url +"/"+item.image}" alt="">
             </div>
        </div>
        
        `;
    });
  }
    if(index===1){
    portfolios[key].map((item, index) => {
        // console.log(item);
        // console.log(index);
        elementsImageIndex1 +=`
          <div class="col-6 col-lg-3">
            <div class="portItem">
              <img src="${base_url +"/"+item.image}" alt="">
             </div>
        </div>
        
        `;
    });
  }
    if(index===2){
    portfolios[key].map((item, index) => {
        // console.log(item);
        // console.log(index);
        elementsImageIndex2 +=`
          <div class="col-6 col-lg-3">
            <div class="portItem">
              <img src="${base_url +"/"+item.image}" alt="">
             </div>
        </div>
        
        `;
    });
  }
    if(index===3){
    portfolios[key].map((item, index) => {
        // console.log(item);
        // console.log(index);
        elementsImageIndex3 +=`
          <div class="col-6 col-lg-3">
            <div class="portItem">
              <img src="${base_url +"/"+item.image}" alt="">
             </div>
        </div>
        
        `;
    });
  }
    if(index===4){
    portfolios[key].map((item, index) => {
        // console.log(item);
        // console.log(index);
        elementsImageIndex4 +=`
          <div class="col-6 col-lg-3">
            <div class="portItem">
              <img src="${base_url +"/"+item.image}" alt="">
             </div>
        </div>
        
        `;
    });
  }
    if(index===5){
    portfolios[key].map((item, index) => {
        // console.log(item);
        // console.log(index);
        elementsImageIndex5 +=`
          <div class="col-6 col-lg-3">
            <div class="portItem">
              <img src="${base_url +"/"+item.image}" alt="">
             </div>
        </div>
        
        `;
    });
  }
    
});

document.getElementById("pills-tab").innerHTML = cat;
if(length>0){
  document.getElementById("pills-tabContent0").innerHTML = contentIndex0;
  document.getElementById("elementsImageIndex0").innerHTML = elementsImageIndex0;
}

if(length>1){
  document.getElementById("pills-tabContent1").innerHTML = contentIndex1;
  document.getElementById("elementsImageIndex1").innerHTML = elementsImageIndex1;
}
if(length>2){
  document.getElementById("pills-tabContent2").innerHTML = contentIndex2;
  document.getElementById("elementsImageIndex2").innerHTML = elementsImageIndex2;
}
if(length>3){
  document.getElementById("pills-tabContent3").innerHTML = contentIndex3;
  document.getElementById("elementsImageIndex3").innerHTML = elementsImageIndex3;
}
if(length>4){
  document.getElementById("pills-tabContent4").innerHTML = contentIndex4;
  document.getElementById("elementsImageIndex4").innerHTML = elementsImageIndex4;
}
if(length>5){
  document.getElementById("pills-tabContent5").innerHTML = contentIndex5;
  document.getElementById("elementsImageIndex5").innerHTML = elementsImageIndex5;
}

};

//function to set clients
clientRender = (clients) => {
  var length = clients.length;
  if(length<=0){
    document.getElementById("clientSection").style.display= "none";
  }

  let htmlText = "";
  clients.map((clientData)=>{
     if(clientData.image==null){
      htmlText += `
      <div class="col-lg-12">
      <div class="clients_wrap">
            <div class="clients_text">
                <h4>Samsung IT Group 2021</h4>
                <p>${clientData.client_name}</p>
            </div>
      </div>
  </div>
      `
     }else if(clientData.image!=null ){
      htmlText += `

      <div class="col-lg-12">
          <div class="clients_wrap">
                <div class="clients_img">
                    <img src="https://icircles.app/uploads/user/${username}/${clientData.image}" alt="">
                </div>
                <div class="clients_text">
                    <h4>Samsung IT Group 2021</h4>
                    <p>${clientData.client_name}</p>
                </div>
          </div>
      </div>
      `
     }
  });
  document.getElementById("clientsData").innerHTML = htmlText;
};


//function to set the whole ui
render = (data) => {
  portfolioRender(data.portfolios);
};

//Fetch api
var url = document.URL;
let usrnm = url.split('/'); 
fetch("https://icircles.app/api/profile/usermicrosite/"+usrnm[usrnm.length-1])
  .then((responsse) => responsse.json())
  .then((data) => { 
    console.log(data);
    render(data);
  });
