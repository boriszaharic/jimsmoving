function faqExpand(el){
  faq = document.getElementById(el);
  if(faq.classList.contains("faq-active")){
    faq.classList.remove("faq-active");
  }else{
    faq.classList.add("faq-active");
  }

}
