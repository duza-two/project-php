var serv_info = {
  but1: [
    "analysis.jpg",
    "an image of a bridge",
    "Bookkeeping",
    "Outsourced accounting services with a difference",
    [
      "Customer invoices, credit notes and reconciliations",
      "Supplier invoices, credit notes and reports",
      "Bank processing and reconciliation",
      "Payments and reports",
      "Petty Cash – management and recording",
      "Filing",
      "Submission of bi-monthly VAT returns (VAT201)",
      "Submission of individual tax returns (ITR12)",
      "Management Reporting"
    ]
  ],
  but2: [
    "american.jpg",
    "an image of a bridge",
    "Payroll",
    "Payroll and HR responsibilities done for you",
    [
      "Administration of payroll",
      "Monthly submission of tax reports (EMP201)",
      "Bi-Annual administration and submission of tax reports (EMP501)",
      "Issue IRP5 Certificates"
    ]
  ],
  but3: [
    "binding-contract.jpg",
    "an image of a bridge",
    "Administration",
    " Providing structure throughout a company",
    [
      "Planning",
      "Organisation",
      "Drafting documents and reports",
      "Templates",
      "Proofreading",
      "Editing"
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
  img.style.width = "350px";
  img.style.height = "250px";

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
  img.style.width = "350px";
  img.style.height = "250px";

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
  img.style.width = "350px";
  img.style.height = "250px";

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
