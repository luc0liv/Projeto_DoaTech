/*Alterar o tema*/

//apertei o label
const apertei = document.querySelector('.theme-switch input[type="checkbox"]');

//salva o tema
const salvaOtema= localStorage.getItem('theme');

//verificar se o tema foi salvo
if (salvaOtema) {
    document.documentElement.setAttribute('data-theme', salvaOtema);
  
    if (salvaOtema === 'dark') {
        apertei.checked = true;
    }
}

//função pra trocar de tema
function switchTheme(e) {
	//ativei ou seja checked igual a true
    if (e.target.checked) {
        document.documentElement.setAttribute('data-theme', 'dark');
         localStorage.setItem('theme', 'dark')// para armazenar a preferencias
    }

    //desativei
    else {
        document.documentElement.setAttribute('data-theme', 'light');
        // para armazenar a preferência do usuário.
        localStorage.setItem('theme', 'light'); //add this
    }    
}
//change tipo de evento. 
//o método principal para lidar com eventos. addEventListener
apertei.addEventListener('change',switchTheme,false);


/*Fim*/