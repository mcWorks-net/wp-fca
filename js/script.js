const spoNav = document.querySelectorAll(".sponsor__nav__link");
const spoContent = document.querySelectorAll(".sponsor-tab__item");
spoNav.forEach((spo) => {
  spo.addEventListener("click", () => {
    removeActiveSpoN();
    spo.classList.add("active");
    const activeSpoC = document.querySelector(`#${spo.id}-content`);
    removeActiveSpoI();
    activeSpoC.classList.add("active");
  });
});

function removeActiveSpoN() {
  spoNav.forEach((spo) => {
    spo.classList.remove("active");
  });
}

function removeActiveSpoI() {
  spoContent.forEach((spo) => {
    spo.classList.remove("active");
  });
}
//-------------------------------------
//-------------------------------------
const spoQ = document.querySelectorAll(".sponsor-tab__question h4");
spoQ.forEach((spoA) => {
  spoA.addEventListener("click", () => {
    spoA.nextElementSibling.classList.toggle("open");
    spoA.querySelector("i").classList.toggle("open");
  });
});
//----------------------------------------
const volunteerI = document.querySelectorAll(".volunteer-tab__item h4");
volunteerI.forEach((voluI) => {
  voluI.addEventListener("click", () => {
    voluI.nextElementSibling.classList.toggle("open");
    voluI.querySelector("i").classList.toggle("open");
  });
});

// //-------------------------
const schoNav = document.querySelectorAll(".scholarship__nav__link");
const schoContent = document.querySelectorAll(".scholarship-tab__item");
schoNav.forEach((scho) => {
  scho.addEventListener("click", () => {
    removeActiveSchoN();
    scho.classList.add("active");
    const activeSchoC = document.querySelector(`#${scho.id}-content`);
    removeActiveSchoI();
    activeSchoC.classList.add("active");
  });
});

function removeActiveSchoN() {
  schoNav.forEach((scho) => {
    scho.classList.remove("active");
  });
}

function removeActiveSchoI() {
  schoContent.forEach((scho) => {
    scho.classList.remove("active");
  });
}
//-------------------------------------
const schoQ = document.querySelectorAll(".scholarship-tab__question h4");
schoQ.forEach((schoA) => {
  schoA.addEventListener("click", () => {
    schoA.nextElementSibling.classList.toggle("open");
    schoA.querySelector("i").classList.toggle("open");
  });
});

// //-------------------------
const faqNav = document.querySelectorAll(".faq__nav__link");
const faqContent = document.querySelectorAll(".faq-tab__questions");
faqNav.forEach((faq) => {
  faq.addEventListener("click", () => {
    removeActiveFaqN();
    faq.classList.add("active");
    const activeFaqC = document.querySelector(`#${faq.id}-content`);
    removeActiveFaqC();
    activeFaqC.classList.add("active");
  });
});

function removeActiveFaqN() {
  faqNav.forEach((faq) => {
    faq.classList.remove("active");
  });
}

function removeActiveFaqC() {
  faqContent.forEach((faq) => {
    faq.classList.remove("active");
  });
}

//-------------------------
const faqA = document.querySelectorAll(".faq-tab__questions__about__item h4");
faqA.forEach((faqabt) => {
  faqabt.addEventListener("click", () => {
    faqabt.nextElementSibling.classList.toggle("open");
    faqabt.querySelector("i").classList.toggle("open");
  });
});

//-------------------------
const faqL = document.querySelectorAll(
  ".faq-tab__questions__learning__item h4"
);
faqL.forEach((faqlrnng) => {
  faqlrnng.addEventListener("click", () => {
    faqlrnng.nextElementSibling.classList.toggle("open");
    faqlrnng.querySelector("i").classList.toggle("open");
  });
});

//-------------------------
const testNav = document.querySelectorAll(".test__btn__link");
const testContent = document.querySelectorAll(".testimony__item");
testNav.forEach((testbtn) => {
  testbtn.addEventListener("click", () => {
    removeActiveTest();
    testbtn.classList.add("active");
    const activeTestContent = document.querySelector(`#${testbtn.id}-content`);
    removeActiveTestContent();
    activeTestContent.classList.add("active");
  });
});

function removeActiveTest() {
  testNav.forEach((testbtn) => {
    testbtn.classList.remove("active");
  });
}

function removeActiveTestContent() {
  testContent.forEach((testbtn) => {
    testbtn.classList.remove("active");
  });
}
//-------------------------
const newsNav = document.querySelectorAll(".news__circle");
const newsContent = document.querySelectorAll(".news__content__batch");
newsNav.forEach((news) => {
  news.addEventListener("click", () => {
    removeActiveNews();
    news.classList.add("active");
    const activeNewsContent = document.querySelector(`#${news.id}-content`);
    removeActiveNewsContent();
    activeNewsContent.classList.add("active");
  });
});

function removeActiveNews() {
  newsNav.forEach((news) => {
    news.classList.remove("active");
  });
}

function removeActiveNewsContent() {
  newsContent.forEach((news) => {
    news.classList.remove("active");
  });
}

// //---------------------
const btnTxt = document.querySelectorAll(".rdbtn__text");
const btnNav = document.querySelectorAll(".rdbtn__btn");
const btnCnt = document.querySelectorAll(".why__text__content");
btnTxt.forEach((rdbtn) => {
  rdbtn.addEventListener("click", () => {
    removeActiveTitle();
    rdbtn.classList.add("active");
    const activebtn = document.querySelector(`#${rdbtn.id}-btn`);
    removeActiveBtn();
    activebtn.classList.add("active");
    const ContentActive = document.querySelector(`#${rdbtn.id}-content`);
    removeActiveCnt();
    ContentActive.classList.add("active");
  });
});

function removeActiveTitle() {
  btnTxt.forEach((rdbtn) => {
    rdbtn.classList.remove("active");
  });
}

function removeActiveBtn() {
  btnNav.forEach((rdbtn) => {
    rdbtn.classList.remove("active");
  });
}

function removeActiveCnt() {
  btnCnt.forEach((rdbtn) => {
    rdbtn.classList.remove("active");
  });
}

// //--------------------------------
const header2 = document.querySelector(".toggle__menu2");
const headerNav2 = document.querySelector(".header2__nav");
header2.addEventListener("click", () => {
  header2.classList.toggle("open");
  headerNav2.classList.toggle("open");
});

// //-------------------------
const rdBtn = document.querySelectorAll(".rdbtn");
rdBtn.forEach((rd) => {
  rd.addEventListener("click", () => {
    removeActiveRd();
    rd.classList.add("active");
  });
});

function removeActiveRd() {
  rdBtn.forEach((rd) => {
    rd.classList.remove("active");
  });
}

// //-------------------------
const abtNav = document.querySelectorAll(".abt__nav__link");
const abtContent = document.querySelectorAll(".abt-tab__item");
abtNav.forEach((abt) => {
  abt.addEventListener("click", () => {
    removeActiveAbt();
    abt.classList.add("active");
    const activeContent = document.querySelector(`#${abt.id}-content`);
    removeActiveContent();
    activeContent.classList.add("active");
  });
});

function removeActiveAbt() {
  abtNav.forEach((abt) => {
    abt.classList.remove("active");
  });
}

function removeActiveContent() {
  abtContent.forEach((abt) => {
    abt.classList.remove("active");
  });
}

// //-------------------------
const generalNav = document.querySelectorAll(".general__nav__link");
const generalContent = document.querySelectorAll(".general-tab__item");
generalNav.forEach((general) => {
  general.addEventListener("click", () => {
    removeActiveGeneral();
    general.classList.add("active");
    const activeContentG = document.querySelector(`#${general.id}-content`);
    removeActiveContentG();
    activeContentG.classList.add("active");
  });
});

function removeActiveGeneral() {
  generalNav.forEach((general) => {
    general.classList.remove("active");
  });
}

function removeActiveContentG() {
  generalContent.forEach((general) => {
    general.classList.remove("active");
  });
}

// //-------------------------
const links = document.querySelectorAll(".links__item h4");

links.forEach((link) => {
  link.addEventListener("click", () => {
    link.nextElementSibling.classList.toggle("open");
    link.querySelector("i").classList.toggle("open");
  });
});

// //-------------------------
const hmNav = document.querySelectorAll("home.html.glevel__item");
const adCnt = document.querySelectorAll("admission.html.general-tab__item");
hmNav.forEach((hm) => {
  hm.addEventListener("click", () => {
    removeActiveHM();
    hm.classList.add("active");
    const activeContentA = document.querySelector(`#${hm.id}-content`);
    removeActiveContentA();
    activeContentA.classList.add("active");
  });
});

function removeActiveHM() {
  hmNav.forEach((hm) => {
    hm.classList.remove("active");
  });
}

function removeActiveContentA() {
  adCnt.forEach((hm) => {
    hm.classList.remove("active");
  });
}


//-----------------------------Added on Wordpres

const whyTextBullet = document.getElementById("rdbtn-1-btn");
const whyText = document.getElementById("rdbtn-1");
const whyVideo = document.getElementById("rdbtn-1-content");

whyVideo.classList.add('active');
whyTextBullet.classList.add('active');
whyText.classList.add('active');