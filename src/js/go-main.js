(window.load = function (event) {
  const togglerNav = document.querySelector(".js-header__toggler");
  const nav = document.querySelector(".js-navbar__navigation");
  const heightHeader = document.querySelector("#header");
  let navFlag = false;

  togglerNav.addEventListener("click", () => {
    if (navFlag == false) {
      nav.classList.add("active");
      togglerNav.classList.add("active");
      document.querySelector("body").classList.add("active");
      navFlag = true;
    } else {
      nav.classList.remove("active");
      togglerNav.classList.remove("active");
      document.querySelector("body").classList.remove("active");
      navFlag = false;
    }
  });

  // Close after click the navmenu on mobile
  const itemsNAv = document.querySelectorAll(".js-navbar__navigation a");
  for (let i = 0; i < itemsNAv.length; i++) {
    itemsNAv[i].addEventListener("click", () => {
      nav.classList.remove("active");
      togglerNav.classList.remove("active");
      navFlag = false;
    });
  }

  // Go to Top
  const goToTop = document.querySelector("#go-to-top");
  goToTop.addEventListener("click", () => {
    document.documentElement.scrollTop = 0;
  });
  document.addEventListener("scroll", () => {
    if (window.pageYOffset >= 200) {
      goToTop.classList.add("active");
    } else {
      goToTop.classList.remove("active");
    }
  });

  // sticy nabvbar
  const navbar = document.querySelector("#header");
  document.addEventListener("scroll", () => {
    var st = window.pageYOffset || document.documentElement.scrollTop;
    if (window.pageYOffset) {
      navbar.classList.add("active");
      document.querySelector("body").style.paddingTop = heightHeader.clientHeight + "px";
    } else {
      navbar.classList.remove("active");
      document.querySelector("body").style.paddingTop = "0";
    }
    if (window.pageYOffset >= 500) {
      navbar.classList.add("remove-top");
    } else {
      navbar.classList.remove("remove-top");
    }
  });
  // footer
  const calaps = document.querySelectorAll(".calaps");
  for (let i = 0; i < calaps.length; i++) {
    calaps[i].querySelector(".calaps__opener").addEventListener("click", function () {
      calaps[i].classList.toggle("active");
    });
  }
})();

const data = document.querySelector("#check-in-out-date");
var modal = document.getElementById("myModal");

jQuery(document).ajaxComplete(function () {
  const oferts = document.querySelectorAll(".reserve");
  for (let i = 0; i < oferts.length; i++) {
    if (data.value) {
      const link = document.createElement("a");
      link.href = "#";
      link.textContent = "Wyślij zapytanie ";
      link.classList = "btn";
      let div = oferts[i];
      div.appendChild(link);

      oferts[i].querySelector(".btn").addEventListener("click", (e) => {
        e.preventDefault();

        const titlePage = document.querySelector(".tf-head-title h1");
        const replaceTitle = document.querySelector("#myModal h2");
        const titlePlace = oferts[i].parentElement.querySelector(".tf-room-title h3").textContent;
        replaceTitle.innerHTML = `${titlePage.textContent} - <span>${titlePlace}</span>`;
        console.log(replaceTitle.querySelector("span"));

        document.querySelector("#ilosc-dzieci").value = document.querySelector("#children").value;
        document.querySelector("#ilosc-doroslych").value = document.querySelector("#adults").value;
        document.querySelector("#cena").value = document.querySelector(".woocommerce-Price-amount").textContent;
        document.querySelector("#data-od-do").value = data.value;
        document.querySelector("#apartament").value = titlePlace;

        showModal();
      });
    }
  }
});

function showModal() {
  modal.style.display = "block";
  document.querySelector("body").style.overflow = "hidden";
}

// Funkcja, która zamknie modal
function closeModal() {
  modal.style.display = "none";
  document.querySelector("body").style.overflow = "initial";
}

const faqBtn = document.querySelector(".tf-hotel-enquiry .tf-btn");

function faqModal() {
  const textBtn = document.querySelector("#tf-ask-question-trigger");

  const link = document.createElement("a");
  link.href = "#";
  link.textContent = textBtn.textContent;
  link.classList = "btn";
  let div = faqBtn;
  div.appendChild(link);

  const modal = document.getElementById("myModalFAQ");
  const modalClose = modal.querySelector(".close-button");

  link.addEventListener("click", (e) => {
    e.preventDefault();
    modal.style.display = "block";
    document.querySelector("body").style.overflow = "hidden";
  });

  modalClose.addEventListener("click", (e) => {
    e.preventDefault();
    modal.style.display = "none";
    document.querySelector("body").style.overflow = "initial";
  });
}
if (faqBtn) {
  faqModal();
}
