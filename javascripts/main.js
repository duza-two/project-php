var serv_info = {
  but1: [
    "bridge.jpg",
    "an image of a bridge",
    "Bookkeepering",
    "We pride ourselve on recording and providing accurate and reliable records",
    [
      "Debtors Reconciliation",
      "Creditors Reconciliation",
      "Bank Reconciliation",
      "Capturing",
      "Payments",
      "Filing",
      "VAT 201 Submissions",
      "Management Reports",
      "Bookkeeping transaction captured on Sage Pastel"
    ]
  ],
  but2: [
    "bridge.jpg",
    "an image of a bridge",
    "Payroll",
    "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat.",
    [
      "Payroll processing and payslip",
      "EMP201 submission",
      "EMP501 submission"
    ]
  ],
  but3: [
    "bridge.jpg",
    "an image of a bridge",
    "Administration",
    "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat.",
    [
      "Administration and document or report typing",
      "Formatting documentation",
      "Editing lauguage and punctuation"
    ]
  ]
}
layout_one();

/* button one click function */
function layout_one() {
  var block1 = document.getElementById("block_1");
  var block2 = document.getElementById("block_2");
  block1.innerHTML = '';
  block2.innerHTML = '';

  var img = document.createElement("img");
  img.src = "images/" + serv_info.but1[0];
  img.setAttribute("alt", serv_info.but1[1]);
  img.style.width = "300px";
  img.style.height = "200px";

  var h = document.createElement("h1");
  var text_h = document.createTextNode(serv_info.but1[2]);
  var par = document.createElement("p");
  var text_p = document.createTextNode(serv_info.but1[3]);
  var list = document.createElement("ul");
  list.style.class = "list_items";
  h.appendChild(text_h);
  par.appendChild(text_p);
  block1.appendChild(img);
  block2.appendChild(h);
  block2.appendChild(par);
  serv_info.but1[4].map((element) => {
    var list_item = document.createElement("li");
    var tex = document.createTextNode(element);
    list_item.appendChild(tex);
    list.appendChild(list_item);
  });
  block2.appendChild(list);
}

/* button two click function */
function layout_two() {
  var block1 = document.getElementById("block_1");
  var block2 = document.getElementById("block_2");
  block1.innerHTML = '';
  block2.innerHTML = '';

  var img = document.createElement("img");
  img.src = "images/" + serv_info.but2[0];
  img.setAttribute("alt", serv_info.but2[1]);
  img.style.width = "300px";
  img.style.height = "200px";

  var h = document.createElement("h1");
  var text_h = document.createTextNode(serv_info.but2[2]);
  var par = document.createElement("p");
  var text_p = document.createTextNode(serv_info.but2[3]);
  var list = document.createElement("ul");
  list.style.class = "list_items";
  h.appendChild(text_h);
  par.appendChild(text_p);
  block1.appendChild(h);
  block1.appendChild(par);
  serv_info.but2[4].map((element) => {
    var list_item = document.createElement("li");
    var tex = document.createTextNode(element);
    list_item.appendChild(tex);
    list.appendChild(list_item);
  });
  block1.appendChild(list);
  block2.appendChild(img);
}

/* button three click function */
function layout_three() {
  var block1 = document.getElementById("block_1");
  var block2 = document.getElementById("block_2");
  block1.innerHTML = '';
  block2.innerHTML = '';

  var img = document.createElement("img");
  img.src = "images/" + serv_info.but3[0];
  img.setAttribute("alt", serv_info.but3[1]);
  img.style.width = "300px";
  img.style.height = "200px";

  var h = document.createElement("h1");
  var text_h = document.createTextNode(serv_info.but3[2]);
  var par = document.createElement("p");
  var text_p = document.createTextNode(serv_info.but3[3]);
  var list = document.createElement("ul");
  list.style.class = "list_items";
  h.appendChild(text_h);
  par.appendChild(text_p);
  block1.appendChild(img);
  block2.appendChild(h);
  block2.appendChild(par);
  serv_info.but3[4].map((element) => {
    var list_item = document.createElement("li");
    var tex = document.createTextNode(element);
    list_item.appendChild(tex);
    list.appendChild(list_item);
  });
  block2.appendChild(list);
}
