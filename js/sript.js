//swtich
const btnToggle = document.querySelector('.switch');

btnToggle.addEventListener('click', () => {

    const body = document.body;

    if(body.classList.contains('green')){

        body.classList.add('red')
        body.classList.remove('green')
    } else if(body.classList.contains('red')){

        body.classList.add('green')
        body.classList.remove('red')
    }

});

//btn form change
var ajout = document.getElementById('ajout');
var modif = document.getElementById('modif');
var ajouter = document.getElementById('ajouter');
var modifier = document.getElementById('modifier');

ajout.classList.add('active');
modif.classList.add('desactive');
ajouter.classList.add('visible');
modifier.classList.add('hidden');

function viewAdd(){
    if(ajout.classList.contains('desactive')){
        modif.classList.add('desactive');
        ajouter.classList.add('visible');
        ajout.classList.add('active');
        modifier.classList.add('hidden');
        modif.classList.remove('active');
        ajouter.classList.remove('hidden');
        ajout.classList.remove('desactive');
        modifier.classList.remove('visible');
    }
}

function viewModif(){
    if(modif.classList.contains('desactive')){
        modif.classList.add('active');
        ajouter.classList.add('hidden');
        ajout.classList.add('desactive');
        modifier.classList.add('visible');
        modif.classList.remove('desactive');
        ajouter.classList.remove('visible');
        ajout.classList.remove('active');
        modifier.classList.remove('hidden');
    }
}

ajout.addEventListener('click',viewAdd);
modif.addEventListener('click',viewModif);