
var addbtn = document.getElementById('add-btn') 
var updatebtn = document.getElementById('update-btn') 
var viewbtn = document.getElementById('view-btn') 


var addbloc = document.getElementById('add')
var updatebloc = document.getElementById('update')
var viewbloc = document.getElementById('preview')

addbtn.classList.add('active')
updatebtn.classList.add('desactive')
viewbtn.classList.add('active')


addbloc.classList.add('show')
updatebloc.classList.add('hidden')
viewbloc.classList.add('show')

function toggleAdd(){
  if(addbtn.classList.contains('desactive')){
    addbtn.classList.add('active')
    addbtn.classList.remove('desactive')
    updatebtn.classList.add('desactive')
    updatebtn.classList.remove('active')

    addbloc.classList.add('show')
    addbloc.classList.remove('hidden')
    updatebloc.classList.add('hidden')
    updatebloc.classList.remove('show')
  }else{
    addbtn.classList.remove('active')
    addbtn.classList.add('desactive')
    addbloc.classList.remove('show')
    addbloc.classList.add('hidden')
  }
}

function toggleUpdate(){
  if(updatebtn.classList.contains('desactive')){
    updatebtn.classList.add('active')
    updatebtn.classList.remove('desactive')
    addbtn.classList.add('desactive')
    addbtn.classList.remove('active')

    updatebloc.classList.add('show')
    updatebloc.classList.remove('hidden')
    addbloc.classList.add('hidden')
    addbloc.classList.remove('show')
  }else{
    updatebtn.classList.remove('active')
    updatebtn.classList.add('desactive')
    updatebloc.classList.remove('show')
    updatebloc.classList.add('hidden')
  }
}

function toggleView(){
  if(viewbloc.classList.contains('show')){
    viewbtn.classList.add('desactive')
    viewbtn.classList.remove('active')

   viewbloc.classList.add('hidden')
   viewbloc.classList.remove('show')
  }else{
    viewbtn.classList.remove('desactive')
    viewbtn.classList.add('active')

   viewbloc.classList.remove('hidden')
   viewbloc.classList.add('show')
  }
}

addbtn.addEventListener('click',toggleAdd)
updatebtn.addEventListener('click',toggleUpdate)
viewbtn.addEventListener('click',toggleView)