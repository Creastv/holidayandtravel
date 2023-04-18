function loadXMLDoc() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      myFunction(this);
    }
  };
  xmlhttp.open("GET", "http://localhost/portal-t/rss.xml", true);
  xmlhttp.send();
}

function formatDate(date) {
  var d = new Date(date),
    month = "" + (d.getMonth() + 1),
    day = "" + d.getDate(),
    year = d.getFullYear();

  if (month.length < 2) month = "0" + month;
  if (day.length < 2) day = "0" + day;

  return [day, month, year].join("-");
}

function myFunction(xml) {
  var i;
  var xmlDoc = xml.responseXML;
  var post = "";
  var x = xmlDoc.getElementsByTagName("item");

  for (i = 0; i < 3; i++) {
    post += `
         <div class="inf__baner__item">
                <div class="img">
                <a href="${x[i].getElementsByTagName("guid")[0].childNodes[0].nodeValue}" target="_blank" rel='nofollow'>
                ${x[i].getElementsByTagName("description")[0].childNodes[0].nodeValue}
                </a>
                </div>
                <div class="meta">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16.422" height="16.404" viewBox="0 0 16.422 16.404">
                        <path id="Shape_18" data-name="Shape 18" d="M3206.857,2065.7a.846.846,0,0,0-.124-.026,7.823,7.823,0,0,1-3.582-1.13,8.094,8.094,0,0,1-3.9-5.635c-.058-.308-.085-.62-.128-.932v-.96c.013-.115.027-.23.04-.346a8.233,8.233,0,0,1,6.758-7.248c.309-.054.622-.085.933-.128h.962c.052.01.1.021.156.03.359.051.723.08,1.076.157a8.214,8.214,0,0,1,6.455,8.839,7.92,7.92,0,0,1-1.994,4.572,8.064,8.064,0,0,1-4.759,2.679c-.309.055-.622.085-.933.128Zm-6.456-8.21a6.936,6.936,0,1,0,6.941-6.92h-.01A6.938,6.938,0,0,0,3200.4,2057.487Zm9.071,2.45c-.589-.436-1.173-.877-1.758-1.315-.231-.173-.458-.351-.693-.518a.73.73,0,0,1-.323-.642c0-.614,0-1.229,0-1.842s0-1.228,0-1.842a.638.638,0,0,1,.858-.638.655.655,0,0,1,.418.671c0,1.074,0,2.146,0,3.219a.344.344,0,0,0,.156.317q1.057.779,2.1,1.574a.63.63,0,0,1,.152.915.613.613,0,0,1-.49.248A.709.709,0,0,1,3209.472,2059.937Z" transform="translate(-3199.126 -2049.293)" fill="#c2995e" />
                    </svg>
                    <span>${formatDate(x[i].getElementsByTagName("pubDate")[0].childNodes[0].nodeValue)}</span>
                </div>
                
                <a class="title" target="_blank" rel='nofollow' href="${x[i].getElementsByTagName("guid")[0].childNodes[0].nodeValue}">
                    <h3>${x[i].getElementsByTagName("title")[0].childNodes[0].nodeValue}</h3>
                </a>
            </div>
        `;
  }
  document.getElementById("posts").innerHTML = post;
}

loadXMLDoc();
