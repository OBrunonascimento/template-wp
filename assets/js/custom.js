$( document ).ready(function() {
    const scrollToTop = document.getElementsByClassName('scroll-to-top')[0];
    const url = window.location.pathname; 
    const path = url.replaceAll('Ampla', '').replaceAll('/', '');
    let scrollclase = '';
   
    switch (path) {
        case 'quem-somos': 
            scrollclase = 'bg-quem_somos';
            break;
        case 'home': 
            scrollclase = 'bg-home';
            break;
        case 'download': 
            scrollclase = 'bg-downloads';
            break;
        case 'servicos': 
            scrollclase = 'bg-servicos';
            break;
        case 'contato': 
            scrollclase = 'bg-contato';
            break;

        default: scrollclase = 'bg-home';
    }
    scrollToTop.classList.add(scrollclase);
});


//Regex formulário
const handlePhone = (event) => {
  let input = event.target
  input.value = phoneValido(input.value)
}

const phoneValido = (value) => {
  if (!value) return ""
  value = value.replace(/\D/g,'')
  value = value.replace(/(\d{2})(\d)/,"($1) $2")
  value = value.replace(/(\d)(\d{4})$/,"$1-$2")
  return value
}

